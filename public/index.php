<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Backbone</title>
        <link rel = "stylesheet" href= "bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel = "stylesheet" href= "css/style.css">
    </head>
    <body>
<a href="https://github.com/carousel/backbone-todo-app.git"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
        <div class="container">
            <div class="row col-md-6 col-md-offset-3">
                <h2 id='header'></h2>                
            </div>
            <div class="row col-md-6 col-md-offset-3">
                <form action="#" method="POST" id='userform'>
                    <input type="text" id='todo' name='todo' class="form-control" placeholder='Enter todo'>
                    <br>
                    <button id='button' class='btn btn-success pull-right'>Submit</button>
                    <button id='reset-button' class='btn btn-default'>Reset</button>
                </form>
            </div>
            <div class="row col-md-6 col-md-offset-3">
            <br>
                <p class='lead todo-lead'>Todos:</p>
                <ol id='todos'></ol>                
            </div>
        </div>
        <script src="//code.jquery.com/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="bower_components/underscore/underscore-min.js"></script>
        <script src="bower_components/backbone/backbone-min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
