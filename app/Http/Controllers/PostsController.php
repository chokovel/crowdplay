<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use File;
use App\Traits\ImageUpload;
use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('VerifyCategoriesCount')->only(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')
        ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')
        ->with('categories', Category::orderBy('updated_at', 'DESC')->get())
        ->with('posts', Post::orderBy('updated_at', 'DESC')->get())
        ->with('tags', Tag::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request, Post $post)
    {

        if($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
        }
        // $post->save();

        $post = Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request['content'],
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image' => $image,
            'category_id' => $request['category'],
            'published_at' => $request['published_at'],
            'user_id' => auth()->user()->id
        ]);

        
        if($request->tags){
            $post->tags()->attach($request->tags);
        }

        session()->flash('success', 'Post created successfully');
        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // return view('posts.show')
        //     ->with('post', Post::where('slug', $slug)->first());
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('posts.create')
        ->with('post', Post::where('slug', $slug)->first())
        ->with('categories', Category::all())
        ->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {

        if($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');

            // File::delete($post->image);
            $post->deleteImage();

        } else {
            $image = $post->image;
        }

        $post->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'content' => $request['content'],
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'image' => $image,
                'category_id' => $request['category'],
                'published_at' => $request['published_at'],
                'user_id' => auth()->user()->id
            ]);
            
            if($request->tags) {
                $post->tags()->sync($request->tags);
            }


        session()->flash('success', 'Post updated successfully');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::withTrashed()->where('slug', $slug)->firstOrFail();
        if($post->trashed()){

            // File::delete($post->image);
            $post->deleteImage();

            $post->forceDelete();
        } else {

            $post->delete();
        }

        session()->flash('success', 'Post deleted successfully');

        return redirect(route('posts.index'));
    }

    public function trashed()
    {
        $trashed = Post::onlyTrashed()->get();

        return view('posts.index')->with('posts', $trashed);
    }

    public function restore($slug)
    {
        $post = Post::withTrashed()->where('slug', $slug)->firstOrFail();
        $post -> restore();
        

        session()->flash('success', 'Post restored successfully');
        return redirect()->back();
    }
}
