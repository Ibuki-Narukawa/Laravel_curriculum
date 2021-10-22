<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <title>Posts/Index</title>
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
            .pagination{
                list-style-type: none;
                display:flex;
                margin-left:-40px;
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
        </style>
    </head>
    <body>
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
                <div class='body'>
                    <tr><td>{{$post->body}}</td></tr>
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
    </body>
</html>