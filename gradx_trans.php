<?php

include('db_conx.php');

$sel = "select studentNo from grad_tbl where id = '".$_POST["id"]."'";
$resel = mysqli_query($db_conx, $sel);

$drow = mysqli_fetch_array($resel, MYSQLI_ASSOC);

$gradNo = $drow['studentNo'];

$chk = "select studentNo from alumni_tbl where studentNo = $gradNo";
$chkres = mysqli_query($db_conx, $chk);

$counts = mysqli_num_rows($chkres);
if($counts == 0) {

$sql1 = "insert into alumni_tbl (studentNo, lastn, fname, mi, Address, Email, cont, program, about) select studentNo, lastn, fname, mi, Address, Email, cont, program, about from grad_tbl where id =  '".$_POST["id"]."'";
$sql3 = "update alumni_tbl set year_grad = (year(now())) where studentNo = $gradNo";
$sql = "DELETE FROM grad_tbl WHERE id = '".$_POST["id"]."'";

$res2 = mysqli_query($db_conx, $sql1);
$res3 = mysqli_query($db_conx, $sql3);
$res1 = mysqli_query($db_conx, $sql);



if($res2)
{
     echo 'Record transfered';
}
else
{
  echo 'Fail';
}
}
else{
  echo 'Error. Record to be transfered alreay in alumni list';
}
?>
