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
        ]);

        $artist = Artist::create($data);

        // Associate the artist with the authenticated user
        $user = auth()->user();

        return redirect()->route('artists.index')->with('success', 'Artist created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        //
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
    public function update(Request $request, Artist $artist)
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
        ]);

        $artist->update($data);

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


    public function artistform(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'firstname' => 'required',
            'stagename' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'artprofession' => 'required',
            'portfoliolink' => 'required',
            'image' => 'required|image',
            'bio' => 'required',
        ]);

        // Upload the image file
        // $imagePath = $request->file('image')->store('public/images');
        if($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
        }

        // Create a new artist record
        $artist = new Artist();
        $artist->firstname = $request->input('firstname');
        $artist->stagename = $request->input('stagename');
        $artist->lastname = $request->input('lastname');
        $artist->phone = $request->input('phone');
        $artist->email = $request->input('email');
        $artist->address = $request->input('address');
        $artist->artprofession = $request->input('artprofession');
        $artist->portfoliolink = $request->input('portfoliolink');
        $artist->image = $imagePath;
        $artist->bio = $request->input('bio');
        $artist->verified = false;
        $artist->save();

        // Send email notification
        $recipientEmail = 'crowdplayabuja@gmail.com'; // Update with the recipient email address
        Mail::to($recipientEmail)->send(new NewArtistNotification($artist));

        // Flash success message
        session()->flash('success', 'Your registration was successful. We will get back to you shortly.');

        return redirect()->back();
    }
}
