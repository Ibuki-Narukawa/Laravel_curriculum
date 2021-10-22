<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <title>Posts/show</title>
        <style>
            body {
                front-size:16px; 
                color:#999;
                }
            h1 {
                font-size:50px; 
                color:#f6f6f6; 
                margin:20px;
                text-align:center;
                }
            .operationBar {
                width:25%;
                margin:0 auto;
                display:flex;
                }
            .btn {
                text-align:center;
                width:50%;
                }
            .post {
                padding:0px 5px;
                width:60%;
                margin:0 auto;
                margin-bottom:20px;
                }
            th {
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
            .footer {
                text-align:center;
                padding-top:10px;
                }
        </style>
    </head>
    <body>
        <h1>Blog Show</h1>
        <div class='operationBar'>
            <div class='editBtn btn'>
                <h3>[<a href='/posts/{{$post->id}}/edit'>Edit</a>]</h3>
            </div>
            <div class='deleteBtn btn'>
                <form action='/posts/{{$post->id}}' id='form_delete' method='post'>
                    @csrf
                    @method('delete')
                    <input type='submit' style='display:none'>
                    <h3>[<span onclick='return deletePost(this);'>Delete</span>]</h3>
                </form>
            </div>    
        </div>
        <div class='post'>
            <table>
            <div class='title'>
                <tr><th>{{$post->title}}</th></tr> 
            </div>
            <div class='body'>
                <tr><td>{{$post->body}}</td></tr>
            </div>
            <div class='updated_at'>
                <tr><td>{{$post->updated_at}}</td></tr>
            </div>
            </table>
        </div>
        <div class='footer'>
            <p>[<a href='/posts'>back</a>]</p>   
        </div>
        <script>
            function deletePost(e){
                'use strict';
                if(confirm('本当にこの投稿を削除しますか？')){
                document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>