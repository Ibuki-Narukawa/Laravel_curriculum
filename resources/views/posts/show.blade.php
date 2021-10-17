<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <title>Posts/show</title>
        <style>
            body {front-size:16px; color:#999;}
            h1 {font-size:50px; color:#f6f6f6; margin:20px;}
            h2 {margin: -1px 0px;} 
            .post {border:2px solid; padding:0px 5px; margin-bottom:20px;}
            .title {border-bottom:2px solid;}
            .body {border-bottom:2px solid;}
        </style>
    </head>
    <body>
        <h1>Blog Show</h1>
        <div class='post'>
            <div class='title'>
                <h2>{{$post->title}}</h2> 
            </div>
            <div class='body'>
                <p>{{$post->body}}</p>
            </div>
            <div class='updated_at'>
                <p>{{$post->updated_at}}</p>
            </div>
        </div>
        <div class='footer'>
            <a href='/posts'>[back]</a>   
        </div>
    </body>
</html>