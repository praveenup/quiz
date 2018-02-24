<?php
$sn="localhost";
$un="praveenk";
$pw="praveen";
$dbname="quiz";

$conn = mysqli_connect($sn,$un,$pw,$dbname);

    if(!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }

?>