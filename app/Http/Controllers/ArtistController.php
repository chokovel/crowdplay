<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewArtistNotification;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'firstname' => 'required',
            'stagename' => 'nullable',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'artprofession' => 'required',
            'portfoliolink' => 'required',
            'image' => 'required',
            'bio' => 'required',
            'verified' => 'nullable|boolean',
        ]);

            if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // Store the image in the "public" disk under the "images" directory

            $data['image'] = $imagePath; // Save the image path in the $data array
        }

        $data['verified'] = false;

        $artist = Artist::create($data);

        // Associate the artist with the authenticated user
        $user = auth()->user();

        return redirect()->route('artists.index')->with('success', 'Artist created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $artist = Artist::findOrFail($id);

        return view('artists.show', ['artist' => $artist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('artists.create', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'stagename' => 'nullable',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'artprofession' => 'required',
            'portfoliolink' => 'required',
            'image' => 'nullable|image', // Allow the image field to be nullable
            'bio' => 'required',
            'verified' => 'nullable|boolean',
        ]);

        $artist = Artist::findOrFail($id); // Find the artist to be updated

        // If a new image is uploaded, process and store it
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
            $data['image'] = $imagePath;
        } else {
            // If no new image is uploaded, retain the existing image
            $data['image'] = $artist->image;
        }

        $data['verified'] = false;
        $artist->update($data); // Update the artist record with the new data

        return redirect()->route('artists.index')->with('success', 'Artist updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artist = Artist::withTrashed()->findOrFail($id);

        if ($artist->trashed()) {
            // Delete the artist's image
            // File::delete($artist->image);
            $artist->deleteImage();

            $artist->forceDelete();
        } else {
            $artist->delete();
        }

        session()->flash('success', 'Artist deleted successfully');

        return redirect(route('artists.index'));
    }

    public function trashed()
    {
        $trashed = Artist::onlyTrashed()->get();

        return view('artists.index')->with('artists', $trashed);
    }

    public function restore($id)
    {
        $artist = Artist::withTrashed()->findOrFail($id);

        $artist->restore();

        session()->flash('success', 'Artist restored successfully');

        return redirect()->back();
    }

    public function toggleVerification($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->update(['verified' => !$artist->verified]);

        return redirect()->back()->with('success', 'Verification status toggled successfully.');
    }



    public function artistform(Request $request)
{

        $data = $request->validate([
            'firstname' => 'required',
            'stagename' => 'nullable',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'artprofession' => 'required',
            'portfoliolink' => 'required',
            'image' => 'file|mimes:jpeg,png,jpg,webp,gif',
            'bio' => 'required',
            'verified' => 'nullable|boolean',
        ]);

        if($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
        }

        $data['verified'] = false;
        $artist = Artist::create($data);
        // dd($artist);

        return redirect()->back()->with('success', 'Registered Successfully, We will get back to you shortly.');
    }
}
