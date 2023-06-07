<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Album;
use File;
use App\Traits\ImageUpload;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PhotosController extends Controller
{
    public function index()
    {
        return view('photos.index');
    }
    public function create($album_id)
    {
        return view('photos.create')
        ->with('album_id', $album_id);
    }

    public function store(Request $request, Photo $photo)
    {
        if($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('public/images');
        }

        $photo = Photo::create([ 
            'photo' => $photo,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'album_id' => $request->input('album_id'),
            'size' => $request->file('photo')->getSize(),
            'slug' => SlugService::createSlug(Photo::class, 'slug', $request->title),
           
        ]);

        session()->flash('success', 'photo uploaded successfully');
        return redirect(route('photos.index'));
    }
}
