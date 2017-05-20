<?php
include('db_conx.php');

$id = $_POST["id"];
$text = $_POST["text"];
$column_name = $_POST["column_name"];


$sql = "UPDATE job_posts SET ".$column_name."='".$text."' WHERE job_id='".$id."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Data Updated';
}
?>
