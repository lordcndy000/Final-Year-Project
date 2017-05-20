<?php

  include('db_conx.php');


  $id = $_POST["id"];
  $text = $_POST["text"];
  $column_name = $_POST["column_name"];


$sqle1 = "update job_posts set ".$column_name."='".$text."' WHERE partner_id='".$id."'";
$resl = mysqli_query($db_conx, $sqle1);

  $sqle = "update partners_tbl set ".$column_name."='".$text."' WHERE partner_id='".$id."'";
  if(mysqli_query($db_conx, $sqle))
  {
    echo 'Data Updated';
  }

?>
