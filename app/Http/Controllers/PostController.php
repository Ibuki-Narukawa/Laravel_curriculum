<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Http\Requests\PostRequest;

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
    
    public function create(){
        return view('posts.create');
    }
    
    public function store(PostRequest $request){
        $post = new Post;
        $form = $request->all();
        $post->fill($form)->save();
        return redirect('/posts/'.$post->id);
    }
}
