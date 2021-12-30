<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
    return 'Home page';
})
    ->name('home.index');

Route::get('/contact', function () {
    return 'Contact';
})
    ->name('home.contact');

// Route with required params
Route::get('/posts/{id}', function ($id) {
    return 'Blog post ' . $id;
})
    // defined globally in app/Providers/RouteServiceProvider
//    ->where([
//    'id' => '[0-9]+', // Parameter value defined as number
//    ])
    ->name('posts.show');

// Route with optional params
Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
    return 'Posts from ' . $daysAgo . ' days ago';
})
    ->name('posts.recent.index');
