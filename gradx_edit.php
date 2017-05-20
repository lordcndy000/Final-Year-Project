<?php

  include('db_conx.php');

  $sel = "select studentNo from grad_tbl where id = '".$_POST["id"]."'";
  $resel = mysqli_query($db_conx, $sel);

  $drow = mysqli_fetch_array($resel, MYSQLI_ASSOC);

  $gradNo = $drow['studentNo'];


  $id = $_POST["id"];
  $text = $_POST["text"];
  $column_name = $_POST["column_name"];

  $sqlpreg ="update ago_tbl set ".$column_name."='".$text."' WHERE studentNo= $gradNo";
  $preg = mysqli_query($db_conx, $sqlpreg);

  $sqlpreg ="update job_assistance set ".$column_name."='".$text."' WHERE studentNo= $gradNo";
  $preg = mysqli_query($db_conx, $sqlpreg);

  $sqlg = "update grad_tbl set ".$column_name."='".$text."' WHERE studentNo= $gradNo";
  $rg = mysqli_query($db_conx, $sqlg);


  if(mysqli_query($db_conx, $sqlg) && mysqli_query($db_conx, $sqlpreg))
  {
    echo 'Data Updated';
  }

?>
