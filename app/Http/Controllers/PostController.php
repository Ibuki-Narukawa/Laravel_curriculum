<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(Post $post){
        $data = $post->updateNewerThan()->limit(10)->get();
        return view('posts.index',['data'=>$data]);

    }
    
    
}
