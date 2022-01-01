{{--U can use underscore to call snippets use'm--}}

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
    <link rel="stylesheet" href="{{ URL::asset('css/quiz.css') }}">
</head>
<body>

<div class="container">
    <div class="questions">
        <h1 class="question-title"> Here are some questions... </h1>
        <hr>
        <form>
            <div class="question">
                <h2> First Question ? </h2>
                <input id="q1op1" type="radio" value="A" name="question1" checked="checked">
                <label for="q1op1">A</label>
                <br>
                <input id="q1op2" type="radio" value="B" name="question1">
                <label for="q1op2">B</label>
                <br>
                <input id="q1op3" type="radio" value="C" name="question1">
                <label for="q1op3">C</label>
            </div>
            <hr>
            <div class="question">
                <h2>Second Question ? </h2>
                <input id="q2op1" type="radio" value="A" name="question2">
                <label for="q2op1">A</label>
                <br>
                <input id="q2op2" type="radio" value="B" name="question2" checked="checked">
                <label for="q2op2">B</label>
                <br>
                <input id="q2op3" type="radio" value="C" name="question2">
                <label for="q2op3">C</label>
            </div>
            <hr>
            <div class="question">
                <h2>Third Question ? </h2>
                <input id="q3op1" type="radio" value="A" name="question3">
                <label for="q3op1">A</label>
                <br>
                <input id="q3op2" type="radio" value="B" name="question3" checked="checked">
                <label for="q3op2">B</label>
                <br>
                <input id="q3op3" type="radio" value="C" name="question3">
                <label for="q3op3">C</label>
            </div>
            <hr>

            <input type="submit" value="Send">
        </form>
    </div>
</div>


<script src="{{ URL::asset('js/Quiz/quiz.js') }}"></script>
</body>
</html>
