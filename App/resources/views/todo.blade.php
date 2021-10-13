<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!-- Head -->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- CSS only -->
    <!--   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    -->
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/todo.css') }}">
    <link rel="stylesheet" href=" {{ mix ('css/app.css') }}">
  </head>

  <!-- Body -->

  <body>
    <section class="section-center">
      <!-- form -->
      <form class="grocery-form">
        <p class="alert"></p>
        <h3>Todo</h3>
        <div class="form-control">
          <label for="todo"></label>
          <input type="text" id="grocery" placeholder="e.g. Homework">
          <button type="submit" class="submit-btn">
            submit
          </button>
        </div>
      </form>
      <!-- list -->
      <div class="grocery-container">
        <div class="grocery-list">
            <article class="grocery-item">
                <p class="title">item</p>
            </article>
            <div class="btn-container">
                <button type="button" class="edit-btn">
                    <i class="fas fa-edit"></i>
                </button>
                <button type="button" class="delete-btn">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>
        <button type="button" class="clear-btn">
            clear items
        </button>
      </div>
    </section>

    <script src="{{ URL::asset('js/todo.js') }}"></script>
  </body>


</html>
