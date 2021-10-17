<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(Post $post){
        $data = $post->updateNewerThan()->Paginate(5);
        return view('posts.index',['data'=>$data]);

    }
    
    public function show($id){
        $post=Post::find($id);
        return view('posts.show',['post'=>$post]);
    }
}
