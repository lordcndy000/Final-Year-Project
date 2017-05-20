<?php
include('db_conx.php');

$id = $_POST["id"];
$text = mysqli_real_escape_string($db_conx, $_POST["text"]);
$column_name = $_POST["column_name"];
$sql = "UPDATE announce_tbl SET ".$column_name."='".$text."' WHERE ann_id='".$id."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Announcement updated';
}
else
{
    echo mysqli_error($db_conx);
}
?>
