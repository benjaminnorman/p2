<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 9/18/2015
 * Time: 11:19 PM
 */



//I FORGOT HOW TO WRITE IN PHP
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>P@$$\/\/0rd G3n3r@t0r 5000</title>
    <?php require 'logic.php'; ?>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="jumbotron" align="center">
        <h1>P@$$\/\/0rd G3n3r@t0r!</h1>
        <p>Generate a password using random words, special characters, and numbers!</p>
    </div>
    <div class="form-group" align="center">
        <form method='GET' action='logic.php'>
           <br><br>
            <div class="alert alert-info" role="alert"><h3>Enter Number of Words: </h3></div>
            <label>Number of Words  <b>(Min 2, Max 6)</b>: <br>
                <input type="text" name="numWords" class="form-control">
            </label>
            <br>
            <br>
            <br>

            <p class="bg-primary"><h3>Enter Options: </h3></p>
            <label>Number of Numbers <b>(Min 0, Max 4)</b>:<br>
                <input type="text" name="numNums" class="form-control">
            </label><br><br>

            <label>Number of Special Characters <b>(Min 0, Max 4)</b>:<br>
                <input type="text" name="numChars" class="form-control">
            </label><br>

            <label>Capitalize First Letter of Each Word:<br>
                <input type="checkbox" name="capitalizeFirstLetter" class="form-control">
            </label><br>

            <label>All Uppercase:<br>
                <input type="checkbox" name="uppercase" class="form-control">
            </label><br>

            <label>All Lowercase:<br>
                <input type="checkbox" name="lowercase" class="form-control">
            </label><br>

            <br><input class="btn btn-primary" type='submit' value='Generate Password!'><br>
        </form>
    </div>
    <div align="center">
        <br>
        <br>
        <br>
        <a href="http://xkcd.com/936/">
            <img class="comic" src="http://imgs.xkcd.com/comics/password_strength.png" alt="xkcd style passwords">
        </a>
    </div>
</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
