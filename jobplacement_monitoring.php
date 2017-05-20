<?php
  include('session.php');

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Job Placement Monitoring Form - Formoid html forms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-true" style="background-color:#EBEBEB">



<!-- Start  form-->
<link rel="stylesheet" href="assets/css/forms/alumni/job_monitor.css" type="text/css" />
<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>
<form class="formoid-solid-purple" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#34495E;max-width:600px;min-width:150px" method="post"><div class="title"><h2>Job Placement Monitoring Form</h2></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="contNo" required="required" placeholder="Contact No."/> </span></div></div>
	<div class="element-email"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="email" name="email1" value="" required="required" placeholder="Email"/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="stats" required="required" placeholder="Status"/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="compIns" required="required" placeholder="Company/Institution"/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="posT" required="required" placeholder="Position/Title"/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="indx" required="required" placeholder="Industry"/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="subC" required="required" placeholder="Sub-class"/> </span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="dateH" required="required" placeholder="Date hired"/> </span></div></div>
	<div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="remarks" cols="20" rows="5" placeholder="Remarks"></textarea> </span></div></div>
<div class="submit"><input type="submit" name="updateMon" value="Submit"/></div></form>
<!-- Stop  form-->

<?php
  if (isset($_POST['updateMon'])){


  //mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
  $contNo = mysqli_real_escape_string($db_conx, $_POST['contNo']);
  $email1 = mysqli_real_escape_string($db_conx, $_POST['email1']);
  $stats = mysqli_real_escape_string($db_conx, $_POST['stats']);
  $compIns = mysqli_real_escape_string($db_conx, $_POST['compIns']);
  $posT = mysqli_real_escape_string($db_conx, $_POST['posT']);
  $indx = mysqli_real_escape_string($db_conx, $_POST['indx']);

  $subC = mysqli_real_escape_string($db_conx, $_POST['subC']);
  $dateH = mysqli_real_escape_string($db_conx, $_POST['dateH']);
  $remarks = mysqli_real_escape_string($db_conx, $_POST['remarks']);

  $s= mysqli_query($db_conx, "select * from job_placement_monitoring where lname = '$studLname'");
  $rowcnt = mysqli_num_rows($s);

  if($rowcnt==0)
  {

  $sql= "insert into job_placement_monitoring values(placement_id,'$studLname','$studFname','$studMi','$contNo','$email1','$stats','$compIns','$posT','$indx','$subC','$dateH','$remarks')";

  $result = mysqli_query($db_conx, $sql);


  if($result != 1)
  {
  echo "<script type='text/javascript'>alert('fail');
  window.location.href= 'jobplacement_monitoring.php';</script>";
  }
  else{
  echo "<script type='text/javascript'>alert('Records submitted');
  window.location.href= 'alumni.php';</script>";
  }
  }else {
    $x = "update job_placement_monitoring set contactNum = '$contNo', emailAdr = '$email1', statx = '$stats', institute = '$compIns', posTit = '$posT', industry = '$indx', sbCls = '$subC', dateHrd = '$dateH', remarks = '$remarks'";
    $xres = mysqli_query($db_conx, $x);

    if($xres != 1)
    {
      echo "<script type='text/javascript'>alert('Record update fail');
      window.location.href= 'jobplacement_monitoring.php';</script>";
    }
    else{
      echo "<script type='text/javascript'>alert('Records updated');
      window.location.href= 'alumni.php';</script>";
    }

  }
  }
?>



</body>
</html>
