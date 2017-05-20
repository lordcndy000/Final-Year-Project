<?php
include('db_conx.php');
$id = mysqli_real_escape_string ($db_conx, $_POST["id"]);
$text = mysqli_real_escape_string ($db_conx, $_POST["text"]);
$column_name = mysqli_real_escape_string ($db_conx, $_POST["column_name"]);

$sql = "UPDATE job_posts SET ".$column_name."='".$text."' WHERE job_id='".$id."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Job post updated';
}
else
{
  echo mysqli_error($db_conx);
}
?>
