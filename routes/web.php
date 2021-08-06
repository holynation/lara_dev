<?php

use Illuminate\Support\Facades\Route;
use App\Models\PostHtml;
use App\Models\Posts;

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
    $pages = Posts::all();
    return view('pages.index', ['pages'=> $pages]);
});

Route::get('post_html/{post}', function($slug){
    // find a post by slug and pass it to the view post
    $post = PostHtml::find($slug);

    return view('pages.post',[
        'post' => $post
    ]);
});

Route::get('posts/{post}', function($id){
    $post  = Posts::find($id);

    return view('pages.post',[
        'post' => $post
    ]);
});
