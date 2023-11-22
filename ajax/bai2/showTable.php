<?php

$op = $_GET["chon"];

if ($op != "") {
  include("database.class.php");
  $dao = new Dao("root", "", "udn");

  $query = "select * from {$op}";

  $header = "DANH SÁCH {$op}";
  $dao->table($query, $header);
}
