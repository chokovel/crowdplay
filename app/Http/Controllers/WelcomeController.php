<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use App\Models\Event;
use App\Models\Artist;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome')
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('recents', Post::orderBy('updated_at', 'DESC')->limit(3)->get())
        ->with('events', Event::orderBy('updated_at', 'DESC')->limit(2)->get());
    }

    public function artist()
    {
        $artists = Artist::all();
        return view('artists-page', compact('artists'));
    }

    // AlbumController.php
    public function gallery()
    {
        $albums = Album::all();
        return view('gallery')->with('albums', $albums);
    }

    public function photos(Album $album)
    {
        return view('photos', compact('album'));
    }

    public function blog()
    {
        // $search = request()->query('search');

        // if($search) {

        //     $posts = Post::where('title', 'LIKE', "%{$search}%")->simplePaginate(1);
        // }else {
        //     $posts = Post::simplePaginate(1);
        // }

        // the above was commented out because we are using scope from the post model i.e scoping the search


        return view('blog')
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('rands', Post::inRandomOrder()->limit(3)->get())
        ->with('posts', Post::orderBy('updated_at', 'DESC')->limit(12)->searched()->simplePaginate(12))
        ->with('recents', Post::orderBy('updated_at', 'DESC')->limit(4)->get());
    }

    public function show($slug)
    {

        return view('show')
            ->with('post', Post::where('slug', $slug)->first())
            ->with('categories', Category::all())
            ->with('tags', Tag::all())
            ->with('user', auth()->user())
            ->with('recents', Post::orderBy('updated_at', 'DESC')->limit(4)->get());
    }

    public function events()
    {
        return view('our-events')
        ->with('eventlist', Event::all())
        ->with('others', Event::orderBy('updated_at', 'DESC')->limit(4)->get())
        ->with('events', Event::orderBy('updated_at', 'DESC')->get());
    }

    public function event_view($slug)
    {

        return view('event_view')
            ->with('events', Event::where('slug', $slug)->first())
            ->with('recents', Event::orderBy('updated_at', 'DESC')->limit(4)->get())
            ->with('recent_post', Post::orderBy('updated_at', 'DESC')->limit(4)->get())
            ->with('recents', Post::orderBy('updated_at', 'DESC')->limit(4)->get())
            ->with('Revents', Event::orderBy('updated_at', 'DESC')->limit(4)->get());
    }



}
