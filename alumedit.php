<?php

include('db_conx.php');

$id = $_POST["id"];
$text = $_POST["text"];
$column_name = $_POST["column_name"];

$sql = "UPDATE alumni_tbl SET ".$column_name."='".$text."' WHERE id='".$id."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Data Updated';
}
?>
