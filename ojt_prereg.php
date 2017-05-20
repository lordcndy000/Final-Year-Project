<?php
  include('session.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>OJT Pre-Registration & Preference Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="assets/css/forms/ojt/ojt_prereg.css" type="text/css" />
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post"><div class="title"><h2>OJT Pre-Registration & Preference Form</h2></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="personal" required="required" placeholder="Personal Contact No./Network (Ex. 09172228888-Globe)"/> </span></div></div>
	<div class="element-radio"><label class="title">Have signed up to JobStreet.com<span class="required">*</span></label>		<div class="column column2"><label><input type="radio" name="reg" value="Yes" required="required"/><span>Yes</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="radio" name="reg" value="Not yet" required="required"/><span>Not yet</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="emailsem" required="required" placeholder="Email Address Used or Will Be Used to Avail JobStreet's  Seminar"/> </span></div></div>
	<div class="element-radio"><label class="title">Student's Year Level<span class="required">*</span></label>		<div class="column column2"><label><input type="radio" name="radio1" value="4th yr. - 2nd Sem." required="required"/><span>4th yr. - 2nd Sem.</span></label><label><input type="radio" name="radio1" value="2nd yr. - 2nd Sem. " required="required"/><span>2nd yr. - 2nd Sem. </span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="radio" name="radio1" value="4th yr. - 1st Sem." required="required"/><span>4th yr. - 1st Sem.</span></label><label><input type="radio" name="radio1" value="2nd yr. - 1 st Sem. " required="required"/><span>2nd yr. - 1 st Sem. </span></label></div><span class="clearfix"></span>
</div>
	<div class="element-number"><label class="title"></label><div class="item-cont"><input class="large" type="text" min="0" max="100" name="number" placeholder="Required No. of Training Hours " value=""/> </span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Technical Skills/Competency:
For BSIT & ITP students, pls. specify software applications and/or program languages </h3></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="techskil1" required="required" placeholder=""/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="techskil2" required="required" placeholder=""/> </span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="techskil3" placeholder=""/> </span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="techskil4" placeholder=""/> </span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Preferred Training Exposures:
Pls. indicate specific areas of your field in which you wish to be trained (programming, travel & tours, multimedia arts, customer service, production, etc.)</h3></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="expose1" required="required" placeholder=""/> </span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="expose2" placeholder=""/> </span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="expose3" placeholder=""/> </span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input10" required="required" placeholder="Preferred Place of OJT: (e.g. Quezon City)"/> </span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Target Companies/Establishments.
Name top 4 prospect companies/establishments in which you prefer to undergo your training and arrange them from most priority to least priority </h3></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="target1" required="required" placeholder=""/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="target2" required="required" placeholder=""/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="target3" required="required" placeholder=""/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="target4" required="required" placeholder=""/> </span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Name of Person to Contact in Case of Emergency/-Relationship with the person.
</h3></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="emer_per" required="required" placeholder="Ex. Isobel Jadelight/Mother"/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="emer_no" required="required" placeholder="His/Her Contact Number"/> </span></div></div>
<div class="submit"><input type="submit" name="regme" value="Submit"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">online form</a> Formoid.com 2.9</p><script type="text/javascript" src="formoid_files/formoid1/formoid-solid-orange.js"></script>
<!-- Stop Formoid form-->

<?php

if (isset($_POST['regme'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$personal = mysqli_real_escape_string($db_conx, $_POST['personal']);
$reg = mysqli_real_escape_string($db_conx, $_POST['reg']);
$emailsem = mysqli_real_escape_string($db_conx, $_POST['emailsem']);
$radio1 = mysqli_real_escape_string($db_conx, $_POST['radio1']);
$number = mysqli_real_escape_string($db_conx, $_POST['number']);

$techskil1 = mysqli_real_escape_string($db_conx, $_POST['techskil1']);
$techskil2 = mysqli_real_escape_string($db_conx, $_POST['techskil2']);
$techskil3 = mysqli_real_escape_string($db_conx, $_POST['techskil3']);
$techskil4 = mysqli_real_escape_string($db_conx, $_POST['techskil4']);

$expose1 = mysqli_real_escape_string($db_conx, $_POST['expose1']);
$expose2 = mysqli_real_escape_string($db_conx, $_POST['expose2']);
$expose3 = mysqli_real_escape_string($db_conx, $_POST['expose3']);

$target1 = mysqli_real_escape_string($db_conx, $_POST['target1']);
$target2 = mysqli_real_escape_string($db_conx, $_POST['target2']);
$target3 = mysqli_real_escape_string($db_conx, $_POST['target3']);
$target4 = mysqli_real_escape_string($db_conx, $_POST['target4']);

$emer_per = mysqli_real_escape_string($db_conx, $_POST['emer_per']);
$emer_no = mysqli_real_escape_string($db_conx, $_POST['emer_no']);

$query = mysqli_query($db_conx, "select studNo from ojt_prereg where studNo ='$studNo'");
$numrows = mysqli_num_rows($query);
if($numrows==0)
{

$sql= "insert into ojt_prereg values(prereg_id,'$studNo','$studLname','$studFname','$studMi','$studCrs','$personal','$reg','$emailsem','$radio1','$ojtpract','$number','$techskil1','$techskil2','$techskil3','$techskil4','$expose1','$expose2','$expose3','$target1','$target2','$target3','$target4','$emer_per','$emer_no')";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'ojt_prereg.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('Submitted');
window.location.href= 'ojt.php';</script>";
}
}else {
echo "<script type='text/javascript'>alert('You already submitted this form');
window.location.href= 'ojt.php';</script>";
}
}

?>



</body>
</html>
