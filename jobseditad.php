<?php

  include('db_conx.php');


  $id = $_POST["id"];
  $text = $_POST["text"];
  $column_name = $_POST["column_name"];


  $sqle = "update job_posts set ".$column_name."='".$text."' WHERE job_id='".$id."'";
  if(mysqli_query($db_conx, $sqle))
  {
    echo 'Data Updated';
  }

?>
