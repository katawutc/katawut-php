<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>SchoolWorx</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron">
            <h1>SchoolWorx is a platform for education</h1>
        </div>
        <form action="mainMenu.php" method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default navbar-btn">Sign in</button>
        </form>
        <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p>
        <p>Envelope icon as a link:
            <a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
        </p>
        <p>Search icon: <span class="glyphicon glyphicon-search"></span></p>
        <p>Search icon on a button:
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span> Search
            </button>
        </p>
        <p>Search icon on a styled button:
            <button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-search"></span> Search
            </button>
        </p>
        <p>Print icon: <span class="glyphicon glyphicon-print"></span></p>
        <p>Print icon on a styled link button:
            <a href="#" class="btn btn-success btn-lg">
                <span class="glyphicon glyphicon-print"></span> Print
            </a>
        </p> 
    </body>
</html>
