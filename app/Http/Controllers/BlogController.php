<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{
    public function Postcategory(Category $category)
    {
    
        // $search = request()->query('search');

        // if($search) {

        //     $posts = $category->posts()->where('title', 'LIKE', "%{$search}%")->simplePaginate(1);
        // }else {
        //     $posts = $category->posts()->simplePaginate(1);
        // }
        return view('blog.category')
        ->with('category', $category)
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('recents', Post::orderBy('updated_at', 'DESC')->limit(4)->get())
        // ->with('posts', $posts);
        ->with('posts', $category->posts()->searched()->simplePaginate(12));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts;
        
            return view('blog.tag', compact('posts'));
        
    }

    public function category(Post $post, $slug)
    {
        // $categories = Post::where('category_id', $slug)->get();

        $categories = Category::where('slug', $slug)->first();
        $posts = $categories->posts()->simplePaginate(12);

        return view('blog.category', compact('posts'));
    }

    public function Posttag(Tag $tag, Category $category)
    {
        // $search = request()->query('search');

        // if($search) {

        //     $posts = $tag->posts()->where('title', 'LIKE', "%{$search}%")->simplePaginate(1);
        // }else {
        //     $posts = $tag->posts()->simplePaginate(1);
        // }

        return view('blog.tag')
        ->with('tag', $tag)
        ->with('posts', $tag->posts()->searched()->simplePaginate(12))
        ->with('category', $category)
        ->with('categories', Category::all())
        ->with('tags', Tag::all())
        ->with('recents', Post::orderBy('updated_at', 'DESC')->limit(4)->get());
    }
}
