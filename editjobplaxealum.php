<?php
include('db_conx.php');
$id = $_POST["id"];
$text = mysqli_real_escape_string($db_conx, $_POST["text"]);
$column_name = $_POST["column_name"];
$sql = "UPDATE job_placement_monitoring SET ".$column_name."='".$text."' WHERE placement_id='".$id."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Form updated';
}
?>
