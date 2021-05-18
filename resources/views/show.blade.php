<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <button class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</button>
        <form method="POST" action="/posts/{{ $post->id }}" id="form_delete">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <button class='delete'>[<span onclick="return deletePost();">delete</span>]</button>
        </form>
        <div class='post'>
            <h2 class='title'>{{ $post->title }}</h2>
            <p class='body'>{{ $post->body }}</p>
            <p class='updated_at'>{{ $post->updated_at }}</p>
        </div>
        <button class='back'>[<a href='/'>back</a>]</button>
        <script>
        function deletePost(){
            'use strict';
            if (confirm('本当に削除しますか？')){
                document.getElementById('form_delete').submit();
            } else{
                return false;    
            }
        }
        </script>
    </body>
</html>
