<?php

include('db_conx.php');

$sel = "select studentNo from ojt_tbl where id = '".$_POST["id"]."'";
$resel = mysqli_query($db_conx, $sel);

$drow = mysqli_fetch_array($resel, MYSQLI_ASSOC);

$ojtNo = $drow['studentNo'];

echo $ojtNo;
?>
