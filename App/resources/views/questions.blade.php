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

    <link rel="stylesheet" href="{{ URL::asset('css/questions.css') }}">

    <link rel="stylesheet" href=" {{ mix ('css/app.css') }}">
  </head>

  <body>
    <section class="questions">
      <!-- Title -->
      <div class="title">
        <h2>General Questions</h2>
      </div>
      <!-- Questions -->
      <div class="section-center">
        <!-- Single Questions -->
        <article class="question">
          <!-- Question Title -->
          <div class="question-title">
            <p>What is A.I ?</p>
            <button type="button" class="question-btn">
              <span class="plus-icon">
                <i class="far fa-plus-square"></i>
              </span>
              <span class="minus-icon">
                <i class="far fa-minus-square"></i>
              </span>
            </button>
          </div>
          <div class="question-text">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium necessitatibus distinctio magni
              quisquam quibusdam odit pariatur eos eius, repellendus ducimus.</p>
          </div>

        </article>
      </div>
    </section>



    <script src="{{ URL::asset('js/questions.js') }}"></script>
  </body>

</html>
