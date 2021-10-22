<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <title>Posts/create</title>
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
            h2 {
                margin: -1px 0px;
                } 
            p {
                text-align:center;
                }
            .post {
                width:60%;
                margin:0 auto;
                }
            .title {
                width:97%;
                }
            .contents {
                width:97%;
                height:100px;
                margin-top:7px;
                }
            ::placeholder{
                opacity:0.4;
                }
            .btn {
                text-align:center;
                }
            .errorMessage {
                border:solid 0px; 
                padding:10px 0px; 
                color:red;
                }
            th {
                background-color:#999;
                color:#fff;
                padding:10px; 
                text-align:left;
                width:100vw;
                }
            td {
                border:solid 1px #aaa; 
                color:#999; 
                text-align:center;
                padding:5px;
                width:100vw;
                }
            .footer {
                text-align:center;
                padding-top:10px;
                }
        </style>
    </head>
    <body>
        <h1>Blog Create</h1>
        @if(count($errors)>0)
        <p>入力に問題があります。再入力してください。</p>
        @endif
        <div class='post'>
            <form action='/posts/create' method='post'>
            <table>
                @csrf
                @if($errors->has('title'))
                <tr><td class='errorMessage'>Error:{{$errors->first('title')}}</td></tr>
                @endif
                <tr>
                    <th>title:</th>
                </tr>
                <tr>
                    <td><input class='title'type='text' name='title' placeholder='タイトル' value={{old('title')}}></td>
                </tr>
                @if($errors->has('contents'))
                <tr><td class='errorMessage'>Error:{{$errors->first('contents')}}</td></tr>
                @endif
                <tr>
                    <th>contents:</th>
                </tr>
                <tr>
                    <td><textarea class='contents' name='contents' placeholder='今日も1日お疲れ様でした。'>{{old('contents')}}</textarea></td>
                </tr>
            </table>
            <p class='btn'><input type='submit' value='store'></p>
            </form>
        </div>
        <div class='footer'>
            <p>[<a href='/posts'>back</a>]</p>  
        </div>
    </body>
</html>