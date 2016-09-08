<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SchoolWorx</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php
        // Start the session
        session_start();
        ?>

        /** Database connection */
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected Database successfully";
        ?> 


        <?php include("navigationBar.html"); ?>
        <?php include("classTimeTable.html"); ?>

        <!-- News -->
        <!-- Reminder -->

        <div class="row">
            <div class="col-sm-6" style="background-color:yellow;">
                <h4> To add News panel </h4>
            </div>
            <div class="col-sm-6" style="background-color:pink;">
                <h4> To add Reminder panel </h4>  
            </div>
        </div>


    </body>
</html>
