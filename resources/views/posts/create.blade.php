<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app() ->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="anitaliased">
        <h1>Blog Name</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{old('post.title')}}"/>
                <p class="title_error" style="color:red">{{$errors->first('post.title')}}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{old('post.body')}}</textarea>
                <p class="body_error" style="color:red">{{$errors->first('post.body')}}</p>
            </div>
            <div class="image">
                <input type="file" name="image">
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="back">
            [<a href = "/">back</a>]
        </div>
    </body>
</html>