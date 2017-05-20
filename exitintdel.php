<?php

include('db_conx.php');
$sql = "DELETE FROM grad_exit_interview WHERE id = '".$_POST["id"]."'";
if(mysqli_query($connect, $sql))
{
     echo 'Data Deleted';
}
?>
