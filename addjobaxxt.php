<?php

include('db_conx.php');

$sqchek = "select studentNo from job_assistance where studentNo = '".$_POST["axxstudentNo"]."'";
$sqres = mysqli_query($db_conx, $sqchek);
$qrow = mysqli_fetch_array($sqres, MYSQLI_ASSOC);

$jbaxxtstno = $qrow['studentNo'];

$countr = mysqli_num_rows($sqres);

if($countr == 0){

$sqcheck2 = "select studentNo from grad_tbl where studentNo = '".$_POST["axxstudentNo"]."'";
$sqres2 = mysqli_query($db_conx, $sqcheck2);
$count2 = mysqli_num_rows($sqres2);

if($count2 == 1) {

$get = "select lastn, fname, mi, program from grad_tbl where studentNo  = '".$_POST["axxstudentNo"]."'";
$getres = mysqli_query($db_conx, $get);
$xrow = mysqli_fetch_array($getres, MYSQLI_ASSOC);

$l = $xrow["lastn"];
$f = $xrow["fname"];
$m = $xrow["mi"];
$pro = $xrow["program"];

 $sql = "INSERT INTO job_assistance VALUES(assist_id,'".$_POST["axxstudentNo"]."', '$l', '$f', '$m', '$pro', '".$_POST["axxtgrad_yrGrad"]."', '".$_POST["axxtcompany_interest"]."', '".$_POST["axxtpos_desired"]."', '".$_POST["axxtgrad_contact"]."', '".$_POST["axxtgrad_mail"]."', '".$_POST["axxtgrad_resLink"]."')";
 if(mysqli_query($db_conx, $sql))
 {
      echo 'Job assistance inserted';
 }
 else
 {
   echo 'fail';
 }
 }
 else{
   echo 'The student number you inputted is not in the graduating list';
 }
}
else{

  echo 'Student number is existing';

}

?>
