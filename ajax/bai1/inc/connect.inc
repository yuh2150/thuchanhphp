<?php
   $server = $_SERVER['SERVER_NAME'];
   $user = 'root';$pass = ''; $db = 'udn';
   $conn = mysqli_connect($server,$user,$pass,$db);
   mysqli_query($conn,"set names 'utf8'");
  

?>