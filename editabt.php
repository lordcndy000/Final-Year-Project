<?php

include ('db_conx.php');

$id = $_POST["id"];
$text = mysqli_real_escape_string($db_conx, $_POST["text"]);
$column_name = $_POST["column_name"];

$sqle1 = "update job_posts set ".$column_name."='".$text."' WHERE partner_id='".$id."'";
$resl = mysqli_query($db_conx, $sqle1);

$sqle2 = "update job_conf set ".$column_name."='".$text."' WHERE partner_id='".$id."'";
$res2 = mysqli_query($db_conx, $sqle2);

$sql = "UPDATE partners_tbl SET ".$column_name."='".$text."' WHERE partner_id='".$id."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Information updated';
}
else
{
  echo mysqli_error($db_conx);
}
?>
