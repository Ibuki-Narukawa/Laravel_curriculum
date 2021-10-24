<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class UserController extends Controller
{
    public function index(Request $request){
        $data = User::with('posts')->find(Auth::id())->posts()->orderBy('updated_at', 'DESC')->paginate(5);
        return view('User.index',['data'=>$data]);
    }
    
    public function show(Request $request){
        $data = User::with('posts')->find($request->id)->posts()->orderBy('updated_at', 'DESC')->paginate(5);
        return view('User.show',['data'=>$data]); 
    }
}
