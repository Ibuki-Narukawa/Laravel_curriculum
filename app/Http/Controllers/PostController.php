<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Request $request){
        $data = Post::with('user')->orderBy('updated_at', 'DESC')->paginate(5);
        return view('posts.index',['data'=>$data]);
    }
    
    public function show(Request $request){
        $post =Post::find($request->id);
        return view('posts.show',['post'=>$post]);
    }
    
    public function create(){
        return view('posts.create');
    }
    
    public function store(PostRequest $request){
        $post = new Post;
        $form = $request->all();
        $form += ['user_id' => $request->user()->id];
        $post->fill($form)->save();
        return redirect('/posts/'.$post->id);
    }
    
    public function edit(Request $request){
        $post = Post::find($request->id);
        return view('posts.edit',['form'=>$post]);
    }
    
    public function update(PostRequest $request){
        $post = Post::find($request->id);
        $form = $request->all();
        $form += ['user_id' => $request->user()->id];
        $post->fill($form)->save();
        return redirect('/posts/'.$post->id);
    }
    
    public function destroy(Request $request){
        $post = Post::find($request->id);
        $post->delete();
        return redirect('/posts');
    }
}
