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
      <div id="counter">
        <h1>Counter</h1>
        <h1 id="number"> 0 </h1>
        <button id="decrease" class="btn btn-danger"> Decrease </button>
        <button id="reset" class="btn btn-dark"> Reset </button>
        <button id="increase" class="btn btn-success"> Increase </button>
      </div>
    </div>



    <script src="{{ URL::asset('js/counter2.js') }}"></script>
  </body>

</html>