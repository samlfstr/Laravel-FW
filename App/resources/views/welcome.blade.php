<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ mix ('css/app.css') }}">
    <title>Welcome</title>
  </head>

  <body>
    <div class="card-container">
      <!-- Card 1 -->
      <div class="card cards" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Background Color</h5>
          <p class="card-text">Change the background color of the page randomly</p>
        </div>
        <button class="btn btn-dark" type="button">BG COLOR</button>
      </div>
      <!-- Card 2 -->
      <div class="card cards" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Counter</h5>
          <p class="card-text">Increase the number on the counter, if it is greater then 0 it's color is green, if it is
            less than 0 it's color is red and if it's zero it's color is black</p>
        </div>
        <button class="btn btn-dark" type="button">COUNTER</button>
      </div>
      <!-- Card 3 -->
      <div class="card cards" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Carousel</h5>
          <p class="card-text">Reviews are shown in a carousel. There is right and left buttons that allows user to
            navigate.</p>
        </div>
        <button class="btn btn-dark" type="button">CAROUSEL</button>
      </div>
      <!-- Card 4 -->
      <div class="card cards" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Modal</h5>
          <p class="card-text">Using HTML CSS and JS I created a modal. It's very simple to use and easy to understand.
          </p>
        </div>
        <button class="btn btn-dark" type="button">MODAL</button>
      </div>
      <!-- Card 5 -->
      <div class="card cards" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Animation</h5>
          <p class="card-text">Create animations using setInterval function. Manipulate easily HTML elements.</p>
        </div>
        <button class="btn btn-dark" type="button">ANIMATION</button>
      </div>
      <!-- Card 7 -->
      <div class="card cards" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> Questions </h5>
          <p class="card-text"> You can create quesitons and hide the answers. Using only js, html & css </p>
        </div>
        <button class="btn btn-dark" type="button">QUESTIONS</button>
      </div>

    </div>

    <script src="{{ URL::asset('js/welcome.js') }}"></script>
  </body>

</html>
