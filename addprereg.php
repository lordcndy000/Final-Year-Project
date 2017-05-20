<?php

include('db_conx.php');

$sqchek = "select studentNo from ojt_tbl where studentNo = '".$_POST["studentNo"]."'";
$sqres = mysqli_query($db_conx, $sqchek);
$qrow = mysqli_fetch_array($sqres, MYSQLI_ASSOC);

$ojtNo = $qrow['studentNo'];

$countr = mysqli_num_rows($sqres);

if($countr > 0){

  $checkintable = "select studentNo from ojt_prereg where studentNo = '".$_POST["studentNo"]."'";
  $checkres = mysqli_query($db_conx, $checkintable);
  $chkrows = mysqli_fetch_array($checkres, MYSQLI_ASSOC);

  $chkNo = $chkrows['studentNo'];

  $counts = mysqli_num_rows($checkres);

  if($counts == 0)
  {

 $sql = "INSERT INTO ojt_prereg VALUES(prereg_id,'".$_POST["studentNo"]."', '".$_POST["ojt_lname"]."', '".$_POST["ojt_fname"]."', '".$_POST["ojt_mi"]."', '".$_POST["prog_enr"]."', '".$_POST["pers_no"]."', '".$_POST["jbstrt_sign"]."', '".$_POST["email_avail"]."', '".$_POST["yr_level"]."', '".$_POST["prac_subj"]."', '".$_POST["hrs"]."','".$_POST["skill1"]."', '".$_POST["skill2"]."', '".$_POST["skill3"]."', '".$_POST["skill4"]."', '".$_POST["train_expose1"]."', '".$_POST["train_expose2"]."', '".$_POST["train_expose3"]."', '".$_POST["target_comp1"]."', '".$_POST["target_comp2"]."', '".$_POST["target_comp3"]."', '".$_POST["target_comp4"]."', '".$_POST["emer_name"]."', '".$_POST["emer_cont"]."')";
 if(mysqli_query($db_conx, $sql))
 {
      echo 'Data Inserted';
 }
 else
 {
   echo 'fail';
 }
}
else{
  echo 'There is already a record with the inputted student number.';
}
}
else{

  echo 'Student number is not found in the OJT list.';

}

?>
