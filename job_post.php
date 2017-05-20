<?php

include('comp_session.php');

$jtitle = mysqli_real_escape_string ($db_conx, $_POST["jobTle"]);
$jdesc = mysqli_real_escape_string ($db_conx, $_POST["jobDesc"]);
$jrle = mysqli_real_escape_string ($db_conx, $_POST["jobRle"]);
$jskls = mysqli_real_escape_string ($db_conx, $_POST["jobSkls"]);
$jselj = mysqli_real_escape_string ($db_conx, $_POST["select_job"]);
$jloct = mysqli_real_escape_string ($db_conx, $_POST["jobLoct"]);
$jnati = mysqli_real_escape_string ($db_conx, $_POST["jobNati"]);
$jexp = mysqli_real_escape_string ($db_conx, $_POST["jobExp"]);
$jeduc = mysqli_real_escape_string ($db_conx, $_POST["jobEduc"]);
$jsals = mysqli_real_escape_string ($db_conx, $_POST["jobSals"]);
$jper = mysqli_real_escape_string ($db_conx, $_POST["select_per"]);

$sql= "insert into job_conf values(jobconf_id,'$partner_id','$partner_compN','$jtitle',now(),'$jdesc','$jskls','$jselj','$jloct','$jnati','$jexp','$jeduc','$jrle','$jsals $jper')";

$result = mysqli_query($db_conx, $sql);
if($result){
  echo 'Job post submitted. Please wait for confirmation';
}
else{
  echo mysqli_error($db_conx);
}

?>
