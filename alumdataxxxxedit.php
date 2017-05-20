<?php

 include('session.php');

 $id = $_POST["id"];
 $text = mysqli_real_escape_string($db_conx, $_POST["text"]);
 $column_name = $_POST["column_name"];
 $sql = "UPDATE alumni_tbl SET ".$column_name."='".$text."' WHERE id='".$id."'";
 $sql2 = "UPDATE ago_tbl SET ".$column_name."='".$text."' WHERE studentNo='".$alumstudNo."'";
 $res2 = mysqli_query($db_conx, $sql2);
 if(mysqli_query($db_conx, $sql))
 {
      echo 'Your details has been updated';
 }
?>
