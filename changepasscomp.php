<?php

include ('db_conx.php');

$id = $_POST["id"];
$text = mysqli_real_escape_string($db_conx, $_POST["text"]);
$column_name = $_POST["column_name"];

$encrp = md5($text);
$sql = "UPDATE partners_tbl SET $column_name= '".$encrp."' WHERE partner_id='".$id."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Password updated';
}
else
{
  echo mysqli_error($db_conx);
}
?>
