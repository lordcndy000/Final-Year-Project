<?php

 include('session.php');

 $id = $_POST["id"];
 $text = $_POST["text"];
 $column_name = $_POST["column_name"];
 $sql = "UPDATE ojt_tbl SET ".$column_name."='".$text."' WHERE id='".$id."'";
 $sql2 = "UPDATE ago_tbl SET ".$column_name."='".$text."' WHERE studentNo='".$ojtstudNo."'";
 $res2 = mysqli_query($db_conx, $sql2);
 if(mysqli_query($db_conx, $sql))
 {
      echo 'Your details has been updated';
 }
?>
