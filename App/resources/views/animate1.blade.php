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

    <link rel="stylesheet" href="{{ URL::asset('css/animation.css') }}">
  </head>

  <body>

    <div class="container">
      <div id="circle"></div>

      <div class="btn-group">
        <button type="button" class="btn left-btn" id="left_btn">←</button>
        <button type="button" class="btn right-btn" id="right_btn">→</button>
        <button type="button" class="btn up-btn" id="up_btn">↑</button>
        <button type="button" class="btn down-btn" id="down_btn">↓</button>
      </div>
    </div>





    <script src="{{ URL::asset('js/animation.js') }}"></script>
  </body>

</html>