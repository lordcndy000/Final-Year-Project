<?php
  include('db_conx.php');

if (isset($_POST['comp_reg'])){

if (!empty($_POST['compUs']) && !empty($_POST['compPss'])) {

//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$compUs = mysqli_real_escape_string($db_conx, $_POST['compUs']);
$compPss = mysqli_real_escape_string($db_conx, $_POST['compPss']);
$compEml = mysqli_real_escape_string($db_conx, $_POST['compEml']);
$compNm = mysqli_real_escape_string($db_conx, $_POST['compNm']);
$compAd = mysqli_real_escape_string($db_conx, $_POST['compAd']);
$compAb = mysqli_real_escape_string($db_conx, $_POST['compAb']);
$compCont = mysqli_real_escape_string($db_conx, $_POST['compCont']);

$query = mysqli_query($db_conx, "select * from partners_tbl where partner_username ='$compUs'");
$numrows = mysqli_num_rows($query);
if($numrows==0)
{
//md5() calculates the MD5 hash of a string
$encrypt_password=md5($compPss);

$sql= "insert into partner_confirm values(confirm_id,'$compUs','$encrypt_password','$compEml','$compNm','$compAd',now(),'$compAb','$compCont',null)";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo mysqli_error($db_conx);
}
else{
echo "<script type='text/javascript'>alert('Account created. Please wait for confirmation');
window.location.href= 'index.php';</script>";
}
} else {
echo "<script type='text/javascript'>alert('Username already exists');
window.location.href= 'index.php';</script>";
}

} else {
echo "<script type='text/javascript'>alert('Username already exists');
window.location.href= 'index.php';</script>";
}
}
?>
