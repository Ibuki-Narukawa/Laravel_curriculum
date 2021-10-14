<html>
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
        <h1>Blog</h1>
        <div class='posts'>
            @foreach($data as $post)
            <div class='post'>
                <div class='title'>
                    <h2>{{$post['title']}}</h2>
                </div>
                <div class='body'>
                    <p>{{$post['body']}}</p>
                </div>
            </div>
            @endforeach
        </div>
        
    </body>
</html>