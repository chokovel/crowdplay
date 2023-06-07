<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\Project;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('/artist-details', function () {
    return view('artist-details');
});
Route::get('/artist-form', function () {
    return view('artist-form');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/read', function () {
    return view('read');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/projects-page', [WelcomeController::class, 'project'])->name('projects.index');
Route::get('/portfolios/{project}', [WelcomeController::class, 'portfolios'])->name('projects.photos');

Route::get('/artists-page', [WelcomeController::class, 'artist'])->name('artist-page');



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

    Route::resource('projects', App\Http\Controllers\ProjectsController::class);

    Route::resource('artists', App\Http\Controllers\ArtistController::class);
    Route::post('/artist-form', [App\Http\Controllers\ArtistController::class,'artistform'])->name('artists.form');


    Route::get('pending-artist', [App\Http\Controllers\ArtistController::class, 'trashed'])->name('pending-artists.index');
    Route::put('restore-artist/{id}', [App\Http\Controllers\ArtistController::class, 'restore'])->name('restore-artists');



    // Route::resource('portfolios', App\Http\Controllers\PortfoliosController::class);
    Route::get('/portfolios/create/{id}', [App\Http\Controllers\PortfoliosController::class, 'create']);
    Route::get('/portfolios/index', [App\Http\Controllers\PortfoliosController::class, 'index'])->name('portfolios.index');
    Route::post('/portfolios/store', [App\Http\Controllers\PortfoliosController::class, 'store'])->name('portfolios.store');

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

