<?php


include('db_conx.php');

$sql2 = "delete from ago_tbl where studentNo = '".$_POST["id"]."'";
$res2 = mysqli_query($db_conx, $sql2);

$sql = "DELETE FROM alumni_tbl WHERE studentNo = '".$_POST["id"]."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Data Deleted';
}
?>
