<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(){
        $data = [
            ['title'=>'title01', 'body'=>'This is a sample body01.'],
            ['title'=>'title02', 'body'=>'This is a sample body02.'],
            ['title'=>'title03', 'body'=>'This is a sample body03.'],
            ['title'=>'title04', 'body'=>'This is a sample body04.'],
            ['title'=>'title05', 'body'=>'This is a sample body05.'],
            ['title'=>'title06', 'body'=>'This is a sample body06.'],
            ['title'=>'title07', 'body'=>'This is a sample body07.'],
            ['title'=>'title08', 'body'=>'This is a sample body08.'],
            ['title'=>'title09', 'body'=>'This is a sample body09.'],
            ['title'=>'title10', 'body'=>'This is a sample body10.']
        ];
        
        return view('posts.index', ['data'=>$data]);

    }
    
    
}
