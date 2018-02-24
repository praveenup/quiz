<?php
session_start();
if(!isset($_SESSION['college'])){
    echo "<script> alert('You have all ready given your Quiz. Thank You! ');window.location.href='index.php';</script>";
}


include 'db.php';
include'chech_answers.php';
date_default_timezone_set("Asia/Kolkata");
$submit_time= date('Y-m-d H:i:s');
$sql = "update quiz_registration set submit_time = '$submit_time' where college = '$_SESSION[college]'";

if (mysqli_query($conn, $sql)) {?>

    <!DOCTYPE Html>
    <html>
    <head>
        <title>
            Quiz
        </title>
        <!--    <link rel="stylesheet" href="css/bootstrap.css">-->
        <!--    <script src="js/bootstrap.js" ></script>-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--<script src="js/jquery.js" ></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="alert alert-success">

                    <strong>Nakshatra 2k18</strong>
                    <hr class="message-inner-separator">
                    <span class="glyphicon glyphicon-ok"></span>
                    <p>
                        You successfully submitted the quiz.</p>
                </div>
            </div>
        </div>
    </div>

<?php

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
session_destroy();
?>