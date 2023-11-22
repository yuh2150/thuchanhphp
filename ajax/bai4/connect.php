<?php 

$server = $_SERVER['SERVER_NAME'];
$con = mysqli_connect($server,"root", "", "udn");
mysqli_query($con, "set names 'utf8'");

?>