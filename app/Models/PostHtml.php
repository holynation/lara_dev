<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostHtml
{
	public static function find($slug)
	{
		$path  = resource_path("views/pages/slug/{$slug}.html");

	    if(!file_exists($path)){
	        throw new ModelNotFoundException();
	    }

	    // using this to cache the content seeing that it doesn't change and help performance
	    return cache()->remember("posts.{$slug}", now()->addMinutes(20), function() use($path){
	        return file_get_contents($path);
	    });
	}
}

?>