<?php
include('db_conx.php');

$sql = "DELETE FROM job_conf WHERE jobconf_id = '".$_POST["id"]."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Job post deleted';
}
?>
