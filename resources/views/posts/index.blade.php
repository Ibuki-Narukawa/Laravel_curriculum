@extends('layouts.app')

@section('style')
    body {
        front-size:16px;
        color:#999;
        }
    .user {
        text-align:center;
        }
    h1 {
        font-size:50px; 
        color:#999; 
        margin:20px;
        text-align:center;
        }
    .post {
        padding:0px 5px;
        width:60%;
        margin:0 auto;
        margin-bottom:20px;
        }
    .createBlog {
        text-align:center;
        }
    .foot {
        width:60%;
        margin:0 auto;
        }
    th {
        border: solid 1px #999;
        background-color:#999;
        color:#fff;
        padding:5px; 
        text-align:left;
        width:100vw;
        }
    td {
        border:solid 1px #aaa; 
        color:#999; 
        text-align:left;
        padding:10px;
        width:100vw;
        }
@endsection

@section('content')
    @if(Auth::check())
    <p class='user'>USER： {{Auth::user()->name}}</p>
    @endif
    <h1>Blog List</h1>
    <div class='createBlog'>
        <h3>[<a href='/posts/create'>Create</a>]</h3>
    </div>
    <div class='posts'>
        @foreach($data as $post)
        <div class='post'>
            <table>
            <div class='title'>
                <tr><th><a href='/posts/{{$post->id}}'>{{$post->title}}</a></th></tr>
            </div>
            <div class='contents'>
                <tr><td>{{$post->contents}}</td></tr>
            </div>
            </table>
        </div>
        @endforeach
    </div>
    <div class='foot'>
        <p class='pagination'>
        {{$data->links()}}
        </p>  
    </div>
@endsection