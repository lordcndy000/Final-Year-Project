<?php

include('db_conx.php');

$sqchek = "select studentNo from ojt_log where studentNo = '".$_POST["studentNo1"]."'";
$sqres = mysqli_query($db_conx, $sqchek);


$countr = mysqli_num_rows($sqres);

if($countr == 0){

  $sqpreregchk = "select studentNo from ojt_prereg where studentNo ='".$_POST["studentNo1"]."'";
  $sqress = mysqli_query($db_conx, $sqpreregchk);

  $counteeer = mysqli_num_rows($sqress);

  if($counteeer >= 1)
  {

 $sql = "INSERT INTO ojt_log VALUES(log_id,'".$_POST["studentNo1"]."','".$_POST["prac_subj1"]."', '".$_POST["lastn"]."', '".$_POST["fname"]."', '".$_POST["mi"]."', '".$_POST["program"]."', '".$_POST["section"]."', '".$_POST["mob_no"]."', '".$_POST["name_comp"]."', '".$_POST["office_add"]."', '".$_POST["recipient_end"]."', '".$_POST["desig_recip"]."', '".$_POST["offc_tel"]."', '".$_POST["ojt_adv"]."')";
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
  echo 'Student number inputted is not in the OJT preregistration table. Input data in preregistration first';
}
}
else{
  echo 'Record with the same student number inputted is detected.';
}


?>
