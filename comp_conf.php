<?php

include('db_conx.php');

//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement


$sql= "insert into partners_tbl (partner_username, partner_pass, partner_email, partner_compN, partner_compA, partner_dateReg, partner_about) select pconfirm_username, pconfirm_pass, pconfirm_email, pconfirm_compN, pconfirm_compA, pconfirm_dateReg, pconfirm_about from partner_confirm where confirm_id =  '".$_POST["id"]."'";
$sql1="delete from partner_confirm where confirm_id =  '".$_POST["id"]."'";

$result = mysqli_query($db_conx, $sql);
$result1 = mysqli_query($db_conx, $sql1);

if($result != 1 && $result1 != 1)
{
echo mysqli_error($db_conx);
}
else{
echo "Account confirmed";
}


?>
