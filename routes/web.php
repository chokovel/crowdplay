<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Album;
use App\Models\Artist;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/service', function () {
    return view('service');
});
Route::get('/artist-form', function () {
    return view('artist-form');
});
Route::get('/read', function () {
    return view('read');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/gallery', [WelcomeController::class, 'gallery'])->name('gallery.index');
Route::get('/photos/{album}', [WelcomeController::class, 'photos'])->name('albums.photos');

Route::get('/artists-page', [WelcomeController::class, 'artist'])->name('artist-page');
Route::get('/artist-details/{id}', [WelcomeController::class, 'artistdetails'])->name('artist-details');
Route::post('/artist-form', [App\Http\Controllers\ArtistController::class,'artistform'])->name('artists.form');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/service', [ContactController::class, 'service'])->name('contact.submit');

Route::get('/blog', [App\Http\Controllers\WelcomeController::class, 'blog'])->name('blog');
Route::get('/show/{post}', [App\Http\Controllers\WelcomeController::class, 'show'])->name('post');
Route::get('our-events', [App\Http\Controllers\WelcomeController::class, 'events'])->name('our-events');
Route::get('/event_view/{event}', [App\Http\Controllers\WelcomeController::class, 'event_view'])->name('events');

// Route::get('blog/posts/{post}', [App\Http\Controllers\WelcomeController::class, 'show'])->name('blog.show');
Route::get('/blog/category/{category}', [App\Http\Controllers\BlogController::class, 'Postcategory'])->name('category');
Route::get('/blog/tag/{tag}', [App\Http\Controllers\BlogController::class, 'Posttag'])->name('tag');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('categories', App\Http\Controllers\CategoriesController::class);

    Route::resource('tags', App\Http\Controllers\TagsController::class);

    Route::resource('posts', App\Http\Controllers\PostsController::class);

    Route::resource('events', App\Http\Controllers\EventsController::class);

    Route::resource('albums', App\Http\Controllers\AlbumsController::class);

    Route::resource('artists', App\Http\Controllers\ArtistController::class);
    Route::put('toggle-verification/{id}', [App\Http\Controllers\ArtistController::class, 'toggleVerification'])
    ->name('toggle-verification');


    Route::get('pending-artist', [App\Http\Controllers\ArtistController::class, 'trashed'])->name('pending-artists.index');
    Route::put('restore-artist/{id}', [App\Http\Controllers\ArtistController::class, 'restore'])->name('restore-artists');



    // Route::resource('photos', App\Http\Controllers\PhotosController::class);
    Route::get('/photos/create/{id}', [App\Http\Controllers\PhotosController::class, 'create']);
    Route::get('/photos/index', [App\Http\Controllers\PhotosController::class, 'index'])->name('photos.index');
    Route::post('/photos/store', [App\Http\Controllers\PhotosController::class, 'store'])->name('photos.store');

    Route::get('trashed-posts', [App\Http\Controllers\PostsController::class, 'trashed'])->name('trashed-posts.index');
    Route::put('restore-posts/{post}', [App\Http\Controllers\PostsController::class, 'restore'])->name('restore-posts');

//    Event
    Route::get('trashed-events', [App\Http\Controllers\EventsController::class, 'trashed'])->name('trashed-events.index');
    Route::put('restore-events/{event}', [App\Http\Controllers\EventsController::class, 'restore'])->name('restore-events');

});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users/profile', [UserController::class, 'edit'])->name('user.edit-profile');
    Route::put('users/profile', [UserController::class, 'update'])->name('user.update-profile');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::put('users/{user}/make-admin', [UserController::class, 'makeAdmin'])->name('user.make-admin');
});

