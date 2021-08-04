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

// Route::get('/', [PagesController::class,'index']);

Route::get('/', function () {
    return view('pages.index');
});

Route::get('post/{post}', function($slug){
    $path  = __DIR__ . "/../resources/views/pages/slug/{$slug}.html";

    if(!file_exists($path)){
        return redirect('/');
    }


    // using this to cache the content seeing that it doesn't change and help performance
    $post = cache()->remember("posts.{$slug}", now()->addMinutes(20), function() use($path){
        var_dump('file_get_contents');
        return file_get_contents($path);
    });

    return view('pages.post',[
        'post' => $post
    ]);
});
