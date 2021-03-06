<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
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
    $posts= Post::all();
    
    
   // $posts = [];
   // foreach($files as $file){
     //   $documents = YamlFrontMatter::parseFile($file);
        //$posts[]= new Post();

    //}
    //return view ('posts', ['posts'=>$documents]);
    
    return view('posts', [
       'posts' => $posts
        ]);
});



Route::get('post/{post}', function ($slug) {
    $post= Post::find($slug);
    
    return view('post', [
        'post'=> $post
        ]);
  
})->where('post', '[A-z_-]+');
