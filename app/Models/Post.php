<?php
namespace App\Models;
class Post{

 // public static function all(){
//return File::files(resource_path("posts/"));
//  }

    public static function find($slug){

        base_path();
    
    if(! file_exists($path = resource_path("/posts/{$slug}.html" ))){
        throw new ModelNotFoundException();
      // return redirect('/'); 
    }
    return cache () ->remember("posts.{$slug}", 1200, function() use ($path){
        var_dump('file_get_contents');

        return file_get_contents($path);   });
  
   //return view('post',  [ 'post' => $post ]);

    }

}
