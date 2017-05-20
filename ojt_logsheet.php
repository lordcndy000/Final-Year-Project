<?php
  include('session.php');

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>STUDENT OJT LOG SHEET</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-true" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="assets/css/forms/ojt/ojt_logsheet.css" type="text/css" />
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post"><div class="title"><h2>STUDENT OJT LOG SHEET</h2></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Students must log in prior to their adviser's signing of endorsement letters</h3></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="mobNo" required="required" placeholder="Mobile No. of Student"/> </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="name_co"  required="required" placeholder="Name of company student is to be endorsed"/> </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="offc_ad" required="required" placeholder="Office Address"/> </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="recipEnd" required="required" placeholder="Recipient  of endorsement letter"/> </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="desig" required="required" placeholder="Designation of the recipient of endorsement letter"/> </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="offc_tel" required="required" placeholder="Office Tel. No."/> </div></div>
<div class="submit"><input type="submit" name="submLog"value="Submit"/></div></form>
<!-- Stop Formoid form-->
<?php

if (isset($_POST['submLog'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$mobNo = mysqli_real_escape_string($db_conx, $_POST['mobNo']);
$name_co = mysqli_real_escape_string($db_conx, $_POST['name_co']);
$offc_ad = mysqli_real_escape_string($db_conx, $_POST['offc_ad']);
$recipEnd = mysqli_real_escape_string($db_conx, $_POST['recipEnd']);

$desig = mysqli_real_escape_string($db_conx, $_POST['desig']);
$offc_tel = mysqli_real_escape_string($db_conx, $_POST['offc_tel']);
$ojtAdv = mysqli_real_escape_string($db_conx, $_POST['name_advn']);


$q = mysqli_query($db_conx,"select studentNo from ojt_prereg where studentNo = '$studNo'");
$row = mysqli_fetch_array($q, MYSQLI_ASSOC);

$studNm = $row['studentNo'];

$count1 = mysqli_num_rows($q);

if($count1 > 0){



$query = mysqli_query($db_conx, "select studentNo from ojt_log where studentNo ='$studNo'");
$numrows = mysqli_num_rows($query);
if($numrows==0)
{

$sql= "insert into ojt_log values(log_id,'$studNo','$ojtpract','$studLname','$studFname','$studMi','$studCrs','$ojtsectx','$mobNo','$name_co','$offc_ad','$recipEnd','$desig','$offc_tel','$ojtadvsr')";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'ojt_logsheet.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('Submitted');
window.location.href= 'ojt.php';</script>";
}
}else {
echo "<script type='text/javascript'>alert('You already submitted this form');
window.location.href= 'ojt.php';</script>";
}
}else{
echo "<script type='text/javascript'>alert('Finish the OJT Preregistration first before submitting this logsheet');
window.location.href= 'ojt.php';</script>";
}
}
?>


</body>
</html>
