<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use File;
use App\Traits\ImageUpload;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('albums.index')
        ->with('albums', Album::orderBy('updated_at', 'DESC')->simplePaginate(12));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $album = Album::create([
        'name' => $request->input('name'),
        'slug' => Str::slug($request->input('name')),
        'description' => $request->input('description'),
        'cover_image' => $request->hasFile('cover_image') ? $request->file('cover_image')->store('public/images') : null,
    ]);

    if ($request->hasFile('photos')) {
        foreach ($request->file('photos') as $photo) {
            $path = $photo->store('public/photos');
            $album->photos()->create([
                'photo' => $path,
                'title' => $photo->getClientOriginalName(),
                'slug' => Str::slug($photo->getClientOriginalName()),
                'size' => $photo->getSize(),
                'description' => 'Add a description here', // Set your desired description
            ]);
        }
    }

    session()->flash('success', 'Album created successfully');
    return redirect(route('albums.index'));
    // return redirect()->route('albums.index')->with('success', 'Album created successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('albums.create')->with('album', $album);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        if($request->hasFile('cover_image')) {
            $image = $request->file('cover_image')->store('public/images');

    }

        $album->update([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'slug' => SlugService::createSlug(Album::class, 'slug', $request->name),
        'cover_image' => $image,

    ]);

        session()->flash('success', 'Album updated successfully');
        return redirect(route('albums.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        session()->flash('success', 'Album deleted successfully');

        return redirect(route('albums.index'));
    }
}
