<?php
include('db_conx.php');

$id = $_POST["id"];
$text = mysqli_real_escape_string($db_conx, $_POST["text"]);
$column_name = $_POST["column_name"];
$sql = "UPDATE ago_tbl SET ".$column_name."='".$text."' WHERE id='".$id."'";
$sql2 = "UPDATE admin_tbl SET ".$column_name."='".$text."' WHERE adminid='".$id."'";
$res2 = mysqli_query($db_conx, $sql2);
if(mysqli_query($db_conx, $sql))
{
     echo 'Admin info has been updated';
}
?>
