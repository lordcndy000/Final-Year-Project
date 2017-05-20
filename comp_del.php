<?php

include('db_conx.php');
$sql = "DELETE FROM job_posts WHERE job_id = '".$_POST["id"]."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Data Deleted';
}
?>
