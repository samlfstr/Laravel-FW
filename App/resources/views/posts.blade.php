<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ URL::asset('css/posts.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Posts</title>
</head>

<body>

  <div class="post_container">

      {{--First Post--}}
      <article class="post">
          <h1 class="title"><a href="/posts/first_post">Post</a></h1>
          <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, ullam corrupti. Dolor
              nesciunt voluptate ab, alias error dicta harum nemo iure natus, velit sequi! Beatae aut esse suscipit
              voluptatem placeat, consequatur eligendi veritatis tenetur laborum facere rerum odit a, quis ex repellat
              aperiam dolores ad possimus illo. Quasi, quia porro id quis quos corporis, quibusdam est similique fugiat,
              harum nesciunt minima? Quasi nisi minus, mollitia dolor cupiditate vero eaque ipsum sunt sapiente minima
              veritatis a, aliquid temporibus rem asperiores optio? Itaque eum fugiat odit earum laudantium repudiandae!
              Unde, illo voluptatem? Dignissimos quae alias quam culpa autem non at. Necessitatibus ipsum corrupti
              magnam explicabo possimus distinctio vitae blanditiis atque consequuntur ducimus optio amet sint fugiat
              saepe, cum quam libero veniam nulla dignissimos voluptatibus accusantium?</p>
      </article>

      {{--Second Post--}}
      <article class="post">
          <h1 class="title"><a href="/posts/second_post">Post</a></h1>
          <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, ullam corrupti. Dolor
              nesciunt voluptate ab, alias error dicta harum nemo iure natus, velit sequi! Beatae aut esse suscipit
              voluptatem placeat, consequatur eligendi veritatis tenetur laborum facere rerum odit a, quis ex repellat
              aperiam dolores ad possimus illo. Quasi, quia porro id quis quos corporis, quibusdam est similique fugiat,
              harum nesciunt minima? Quasi nisi minus, mollitia dolor cupiditate vero eaque ipsum sunt sapiente minima
              veritatis a, aliquid temporibus rem asperiores optio? Itaque eum fugiat odit earum laudantium repudiandae!
              Unde, illo voluptatem? Dignissimos quae alias quam culpa autem non at. Necessitatibus ipsum corrupti
              magnam explicabo possimus distinctio vitae blanditiis atque consequuntur ducimus optio amet sint fugiat
              saepe, cum quam libero veniam nulla dignissimos voluptatibus accusantium?</p>
      </article>

      {{--Third Post--}}
      <article class="post">
          <h1 class="title"><a href="/posts/third_post">Post</a></h1>
          <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, ullam corrupti. Dolor
              nesciunt voluptate ab, alias error dicta harum nemo iure natus, velit sequi! Beatae aut esse suscipit
              voluptatem placeat, consequatur eligendi veritatis tenetur laborum facere rerum odit a, quis ex repellat
              aperiam dolores ad possimus illo. Quasi, quia porro id quis quos corporis, quibusdam est similique fugiat,
              harum nesciunt minima? Quasi nisi minus, mollitia dolor cupiditate vero eaque ipsum sunt sapiente minima
              veritatis a, aliquid temporibus rem asperiores optio? Itaque eum fugiat odit earum laudantium repudiandae!
              Unde, illo voluptatem? Dignissimos quae alias quam culpa autem non at. Necessitatibus ipsum corrupti
              magnam explicabo possimus distinctio vitae blanditiis atque consequuntur ducimus optio amet sint fugiat
              saepe, cum quam libero veniam nulla dignissimos voluptatibus accusantium?</p>
      </article>
  </div>



  <script src="{{ URL::asset('js/welcome.js') }}"></script>
</body>

</html>
