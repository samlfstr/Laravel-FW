<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/posts.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Posts</title>
</head>

<body>

<div class="post_container">

    <div class="title">
        <h2><?= $post->title . " " . $post->author->name ?></h2>
        <a href="../category/{{$post->category->name}}">{{$post->category->name}}</a>
    </div>

    <div class="text_body">
        <h5><?= $post->excerpt . " " . $post->author->name?></h5>
        <p><?= $post->body ?></p>
        <p><a href="/posts">Go Back</a></p>
    </div>

</div>

<script src="{{ URL::asset('js/welcome.js') }}"></script>
</body>

</html>
