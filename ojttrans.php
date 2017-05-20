<?php

include('db_conx.php');

$sel = "select studentNo from ojt_tbl where id = '".$_POST["id"]."'";
$resel = mysqli_query($db_conx, $sel);

$drow = mysqli_fetch_array($resel, MYSQLI_ASSOC);

$ojtNo = $drow['studentNo'];


$sql1 = "insert into grad_tbl (studentNo, lname, fname, mi, Address, Email, cont, program, section, about) select studentNo, lastn, fname, mi, Address, Email, cont, program, section, about from ojt_tbl where id =  '".$_POST["id"]."'";
$sql0 = "DELETE FROM ojt_log WHERE studentNo = '$ojtNo'";
$sql00 = "DELETE FROM ojt_prereg WHERE studentNo = '$ojtNo'";
$sql = "DELETE FROM ojt_tbl WHERE id = '".$_POST["id"]."'";

$res2 = mysqli_query($db_conx, $sql1);
$res0 = mysqli_query($db_conx, $sql0);
$res00 = mysqli_query($db_conx, $sql00);
$res1 = mysqli_query($db_conx, $sql);
$res2 = mysqli_query($db_conx, $sql1);

if($res1)
{
     echo 'Record transfered';
}
else
{
  echo 'Fail';
}
?>
