<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <title>Posts/Index</title>
        <style>
            body {front-size:16px; color:#999;}
            h1 {font-size:50px; color:#f6f6f6; margin:20px;}
            h2 {margin: -1px 0px;} 
            .post {border:2px solid; padding:0px 5px; margin-bottom:20px;}
            .title {border-bottom:2px solid;}
        </style>
    </head>
    <body>
        <h1>Blog Index</h1>
        <div class='posts'>
            @foreach($data as $post)
            <div class='post'>
                <div class='title'>
                    <h2><a href='/posts/{{$post->id}}'>{{$post->title}}</a></h2>
                </div>
                <div class='body'>
                    <p>{{$post->body}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination">
            {{ $data->links() }}   
        </div>
    </body>
</html>