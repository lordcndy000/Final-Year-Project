<?php

include('db_conx.php');

$sel = "select studentNo from ojt_tbl where id = '".$_POST["id"]."'";
$resel = mysqli_query($db_conx, $sel);

$drow = mysqli_fetch_array($resel, MYSQLI_ASSOC);

$ojtNo = $drow['studentNo'];



$sql0 = "DELETE FROM ojt_log WHERE studentNo = '$ojtNo'";
$sql00 = "DELETE FROM ojt_prereg WHERE studentNo = '$ojtNo'";
$sql = "DELETE FROM ojt_tbl WHERE studentNo = '$ojtNo'";
$sql1 = "DELETE FROM ago_tbl WHERE studentNo = '$ojtNo'";

$res0 = mysqli_query($db_conx, $sql0);
$res00 = mysqli_query($db_conx, $sql00);
$res1 = mysqli_query($db_conx, $sql);
$res2 = mysqli_query($db_conx, $sql1);

if($res1)
{
     echo 'Record deleted';
}
else
{
  echo 'Fail';
}
?>
