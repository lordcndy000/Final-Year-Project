<?php
include('db_conx.php');

$sql = "DELETE FROM announce_tbl WHERE ann_id = '".$_POST["id"]."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Announcement deleted';
}
?>
