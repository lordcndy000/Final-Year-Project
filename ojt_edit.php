<?php

  include('db_conx.php');

  $sel = "select studentNo from ojt_tbl where id = '".$_POST["id"]."'";
  $resel = mysqli_query($db_conx, $sel);

  $drow = mysqli_fetch_array($resel, MYSQLI_ASSOC);

  $ojtNo = $drow['studentNo'];


  $id = $_POST["id"];
  $text = $_POST["text"];
  $column_name = $_POST["column_name"];

  $sqlpreg ="update ojt_prereg set ".$column_name."='".$text."' WHERE studentNo= $ojtNo";
  $preg = mysqli_query($db_conx, $sqlpreg);

  $sqlg = "update ago_tbl set ".$column_name."='".$text."' WHERE studentNo= $ojtNo";
  $rg = mysqli_query($db_conx, $sqlg);

  $sqlx = "update ojt_log set ".$column_name."='".$text."' WHERE studentNo= $ojtNo";
  $rx = mysqli_query($db_conx, $sqlx);

  $sqle = "update ojt_tbl set ".$column_name."='".$text."' WHERE id='".$id."'";
  if(mysqli_query($db_conx, $sqle) && mysqli_query($db_conx, $sqlg) && mysqli_query($db_conx, $sqlpreg))
  {
    echo 'Data Updated';
  }

?>
