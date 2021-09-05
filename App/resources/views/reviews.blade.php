<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ URL::asset('css/bg_color.css') }}">
  </head>

  <body>

    <div class="container">
      <div class="buttons">
      <img class="image rounded-circle" src="images/P3.png" alt="">
        <article class="review">
          <h4 id="author"> Samuel Foster</h4>
          <p id="job"> Ux Designer</p>
          <p id="info"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, quod, exercitationem aut culpa
            laboriosam quia aperiam ullam atque sed ipsam unde similique pariatur, quasi modi sapiente. Hic cupiditate
            reprehenderit provident.</p>
        </article>


        <button id="btn-right" class="btn button-17" role="button"> &#x21e8; </button>
        <button id="btn-left" class="btn button-17" role="button"> &#x21e6; </button>
      </div>
    </div>



    <script src="{{ URL::asset('js/reviews2.js') }}"></script>
  </body>

</html>