<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/modal.css') }}">
    <link rel="stylesheet" href=" {{ mix ('css/app.css') }}">
    <title>Modal</title>
  </head>

  <body>
    <!-- Hero -->
    <header class="hero">
      <div class="banner">
        <h1>Modal Project</h1>
        <button class="btn modal-btn">
          Open Modal
        </button>
      </div>
    </header>
    <!-- End of hero -->
    <!-- Modal -->
    <header class="modal-overlay">
      <div class="modal-container">
        <h1>Modal Content</h1>
        <button class="close-btn">
          <i class="fa fa-times"></i>
        </button>
      </div>
    </header>
    <!-- End of modal -->

    <script src="{{ URL::asset('js/modal.js') }}"></script>
  </body>

</html>