<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['namespace' => 'App\Http\Controllers\Blog'], function (){
    Route::get('/posts', 'PostController')->name('posts.index');
    Route::get('/posts/create', 'CreateController')->name('posts.create');
    Route::post('/posts', 'StoreController')->name('posts.store');
    Route::get('/posts/{post}', 'ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('posts.delete');

});

Route::group(['namespace' => 'App\Http\Controllers\Blog\Categories'], function (){
    Route::get('/ut', 'UtController')->name('posts.categories.ut');
    Route::get('/placeat', 'PlaceatController')->name('posts.categories.placeat');
    Route::get('/vel', 'VelController')->name('posts.categories.vel');
    Route::get('/qui', 'QuiController')->name('posts.categories.qui');
    Route::get('/nisi', 'NisiController')->name('posts.categories.nisi');
});

Route::group(['namespace' => 'App\Http\Controllers\Blog\Tags'], function (){
    Route::get('/voluptatem', 'VoluptatemController')->name('posts.tags.voluptatem');
    Route::get('/assumenda', 'AssumendaController')->name('posts.tags.assumenda');
    Route::get('/non', 'NonController')->name('posts.tags.non');
    Route::get('/aspernatur', 'AspernaturController')->name('posts.tags.aspernatur');
    Route::get('/velit', 'VelitController')->name('posts.tags.velit');
    Route::get('/idax', 'IdaxController')->name('posts.tags.idax');
    Route::get('/vero', 'VeroController')->name('posts.tags.vero');
    Route::get('/et', 'EtController')->name('posts.tags.et');
    Route::get('/eum', 'EumController')->name('posts.tags.eum');
    Route::get('/argent', 'ArgentController')->name('posts.tags.argent');
});

Route::group(['namespace' => 'App\Http\Controllers\AdminPanel', 'prefix' => 'admin', 'middleware' => 'admin'], function (){
    Route::get('/posts', 'AdminController')->name('admin.posts.index');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
