<?php
  include('session.php');

?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8" />
  	<title>Job Placement Assistance Form for <?php echo $studname ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body class="blurBg-false" style="background-color:#EBEBEB">



  <!-- Start Formoid form-->
  <link rel="stylesheet" href="assets/css/forms/grad/jobplacement_assistance.css" type="text/css" />
  <script type="text/javascript" src="jquery.min.js"></script>
  <form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:13px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#34495E;max-width:500px;min-width:150px" method="post"><div class="title"><h2>Job Placement Assistance Form</h2></div>
  	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="yearGrad" required="required" placeholder="Month & Year Graduated (Month-Year)"/> </div></div>
  	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="comp_inter" required="required" placeholder="Name of company that interests you "/> </div></div>
  	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="pos" required="required" placeholder="Position desired (Please select 1-2 positions) "/> </div></div>
  	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="contact" required="required" placeholder="Mobile No./s & Tel. No./s at which you want to be contacted"/> </div></div>
  	<div class="element-email"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="email" name="emailB" value="" required="required" placeholder="Business email address"/> </div></div>
  	<div class="element-url"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="url" name="res"  required="required" placeholder="Resume Link at Jobs180.com"/> </div></div>
  <div class="submit"><input type="submit" name='form-sub' value="Submit"/></div></form>
  <!-- Stop Formoid form-->

  </body>
</html>


<?php

if (isset($_POST['form-sub'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$yearGrad = mysqli_real_escape_string($db_conx, $_POST['yearGrad']);
$comp_inter = mysqli_real_escape_string($db_conx, $_POST['comp_inter']);
$pos = mysqli_real_escape_string($db_conx, $_POST['pos']);
$contact = mysqli_real_escape_string($db_conx, $_POST['contact']);
$emailB = mysqli_real_escape_string($db_conx, $_POST['emailB']);
$res = mysqli_real_escape_string($db_conx, $_POST['res']);

$query = mysqli_query($db_conx, "select studentNo from job_assistance where studentNo ='$studNo'");
$numrows = mysqli_num_rows($query);
if($numrows==0)
{

$sql= "insert into job_assistance values(assist_id,'$studNo','$studLname','$studFname','$studMi','$studCrs','$yearGrad','$comp_inter','$pos','$contact','$emailB','$res')";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'jobplacement_assistance.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('Submitted');
window.location.href= 'graduating.php';</script>";
}
}else {
echo "<script type='text/javascript'>alert('You already submitted this form');
window.location.href= 'graduating.php';</script>";
}
}

?>
