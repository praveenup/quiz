<?php
include "db.php";
date_default_timezone_set("Asia/Kolkata");

$starttime=date('Y-m-d H:i:s');
 $clg = $_POST['clg'];
	$mem = $_POST['mem'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

$sql = "INSERT INTO quiz_registration (`college`, `member`, `contact`, `email`, `start_time`) VALUES ('$clg','$mem','$contact','$email','$starttime')";

if ($result=mysqli_query($conn, $sql)) {

session_start();
$_SESSION['duration'] = 30;
$_SESSION['start_time'] = $starttime;
$end_time = date('Y-m-d H:i:s',strtotime(date('Y-m-d H:i:s').'+35 minutes'));
$_SESSION['end_time'] = $end_time;
$_SESSION['college'] = $clg;
    header('location: '.'main.php');
} else {

    header("location:index.php");
}



?>