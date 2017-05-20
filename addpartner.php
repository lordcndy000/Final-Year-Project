<?php

include('db_conx.php');

$sqchek = "select partner_username from partners_tbl where partner_username = '".$_POST["partner_username"]."'";
$sqres = mysqli_query($db_conx, $sqchek);
$qrow = mysqli_fetch_array($sqres, MYSQLI_ASSOC);

$part = $qrow['partner_username'];

$countr = mysqli_num_rows($sqres);

if($countr == 0){

  $compcheck ="select partner_compN from partners_tbl where partner_compN = '".$_POST["partner_compN"]."'";
  $comp = mysqli_query($db_conx, $compcheck);
  $prow = mysqli_fetch_array($comp, MYSQLI_ASSOC);

  $compN = $prow['partner_compN'];

  $countN = mysqli_num_rows($comp);

  if($countN == 0)
  {
    $partpwd = "stinovapartner123";
    $parthash = md5($partpwd);


 $sql = "INSERT INTO partners_tbl VALUES(partner_id,'".$_POST["partner_username"]."','$parthash', '".$_POST["partner_email"]."', '".$_POST["partner_compN"]."', '".$_POST["partner_compA"]."', now(), '".$_POST["partner_about"]."')";
 if(mysqli_query($db_conx, $sql))
 {
      echo 'Data Inserted';
 }
 else
 {
   echo 'fail';
 }
}else{

  echo 'Company Name already exists';
}
}else{
  echo 'Username already exists';
}

?>
