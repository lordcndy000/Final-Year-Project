<?php

include('db_conx.php');

$sel = "select studentNo from grad_tbl where id = '".$_POST["id"]."'";
$resel = mysqli_query($db_conx, $sel);

$drow = mysqli_fetch_array($resel, MYSQLI_ASSOC);

$gradNo = $drow['studentNo'];



$sql0 = "DELETE FROM ago_tbl WHERE studentNo = '$gradNo'";
$sql00 = "DELETE FROM grad_tbl WHERE studentNo = '$gradNo'";
$sql000 = "DELETE FROM job_assistance WHERE studentNo = '$gradNo'";


$res0 = mysqli_query($db_conx, $sql0);
$res00 = mysqli_query($db_conx, $sql00);
$res = mysqli_query($db_conx, $sql000);


if($res0)
{
     echo 'Record deleted';
}
else
{
  echo 'Fail';
}
?>
