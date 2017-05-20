<?php
include('db_conx.php');

$id = $_POST["id"];
$sql = "DELETE FROM job_posts WHERE job_id ='".$id."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Data Deleted';
}

?>
