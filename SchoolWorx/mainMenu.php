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

        <!--  HTTP authentication with PHP -->
        //<?php
        // Using Cookie Authentication
        //$secret_word = 'if i ate spinach';
        //if (validate($_POST['username'], $_POST['password'])) {
        //    setcookie('login', $_POST['username'] . ',' . md5($_POST['username'] . $secret_word));
       // }

        //$email = \filter_input(INPUT_POST, 'username', FILTER_VALIDATE_EMAIL);
        //if ($email === false) {
        //    print "Submitted email address is invalid.";
        //}

        //if (!isset($_SERVER['PHP_AUTH_USER'])) {
        //    header('WWW-Authenticate: Basic realm="My Realm"');
        //    header('HTTP/1.0 401 Unauthorized');
        //    echo 'Text to send if user hits Cancel button';

        //    header('http://localhost:8888/SchoolWorx/index.php');
        //    exit();



        //    exit;
       // } else {
        //    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
        //    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
        //}
        //?>
        
        //<?php

        //function validate($user, $pass) {
            /* replace with appropriate username and password checking,
              such as checking a database */
        //    $users = array('david' => 'fadj&32', 'adam' => '8HEj838');
        //    if (isset($users[$user]) && ($users[$user] === $pass)) {
        //        return true;
        //    } else {
        //        return false;
        //    }
        //}
        //?>


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
