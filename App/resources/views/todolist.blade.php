<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href=" {{ mix ('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Modal</title>
</head>

<body>

<div class="container">

    <header class="text-center text-light my-4">
        <h1 class="mb-4">Todo List</h1>
        <form class="search">
            <label>
                <input class="form-control m-auto" type="text" name="search" placeholder="search todos"/>
            </label>
        </form>
    </header>

    <ul class="list-group todos mx-auto text-light">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>play mariokart</span>
            <i class="far fa-trash-alt delete"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>defeat ganon in zelda</span>
            <i class="far fa-trash-alt delete"></i>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>make a veggie pie</span>
            <i class="far fa-trash-alt delete"></i>
        </li>
    </ul>

    <form class="add text-center my-4">
        <label class="text-light">Add a new todo...</label>
        <label>
            <input class="form-control m-auto" type="text" name="add"/>
        </label>
    </form>

</div>


<script src="{{ URL::asset('js/TodoList/app.js') }}"></script>
</body>

</html>