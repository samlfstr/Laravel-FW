<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


  </head>

  <body>

    <p id="message">Change the background color of the page</p>

    <button type="button" id="bg-color"> Change the BG color!</button>

    <script src="{{ URL::asset('js/bg_color.js') }}"></script>

  </body>
</html>