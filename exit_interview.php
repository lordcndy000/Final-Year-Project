
<?php
  include('session.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Graduating Student's Exit Interview Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">



<!-- Start Formoid form-->
<link rel="stylesheet" href="assets/css/forms/grad/exit_interview.css" type="text/css" />
<script type="text/javascript" src="jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:12px;font-family:'Open Sans',Arial,Verdana,sans-serif;color:#34495E;max-width:550px;min-width:150px" method="post"><div class="title"><h2>Graduating Student's Exit Interview Form</h2></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="sy-attend" required="required" placeholder="Last School Year Attended/Semester "/>  </div></div>
	<div class="element-date"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large"  type="text" name="date-grad" required="required" placeholder="Date of Graduation"/>  </div></div>
	<div class="element-radio"><label class="title">Gender<span class="required">*</span></label>		<div class="column column2"><label><input type="radio" name="gender" value="Male" required="required"/><span>Male</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="radio" name="gender" value="Female" required="required"/><span>Female</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="civil" required="required" placeholder="Civil Status"/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="contactNo" required="required" placeholder="Tel. No./Mobile No.-Network"/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="email" required="required" placeholder="Email Addresses"/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="enrolledOther" required="required" placeholder="Program Enrolled/Completed in other Schools "/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="permAdd" required="required" placeholder="Permanent Address"/>  </div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="provAdd" placeholder="Provincial Address, if any "/>  </div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="workexp" placeholder="Work Experience"/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="compconnect" required="required" placeholder="Name of Company Where You are Currently Connected "/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="titleheld" required="required" placeholder="Job Title Held "/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="dateEmp" required="required" placeholder="Date of Employment (Ex. June 2012 - Sept. 2013)"/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="ojtHost" required="required" placeholder="Name of OJT Host Company"/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="hrsComp" required="required" placeholder="Training Hours Rendered/Completed"/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="deptAss" required="required" placeholder="Dept. Assigned"/>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="nameSuper" required="required" placeholder="Name of Training Supervisor/Designation"/>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="telNo" cols="20" rows="5" required="required" placeholder="Telephone Number (separated by semi-colon) "></textarea>  </div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="accs" required="required" placeholder="Accomplishments of the Trainee in the Training"/>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="plans" cols="20" rows="5" required="required" placeholder="Plans after Graduation"></textarea>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="seeyrs" cols="20" rows="5" required="required" placeholder="How do you see yourself 5 years from now?"></textarea>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="values" cols="20" rows="5" required="required" placeholder="What were the values you learned from STI (experience, professors, classmates,etc.)"></textarea>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="learnings" cols="20" rows="5" required="required" placeholder="What learnings did you gain from your OJT? "></textarea>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="technical" cols="20" rows="5" required="required" placeholder="What were the technical skills you learned from STI?"></textarea>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="soft" cols="20" rows="5" required="required" placeholder="What were the soft skills you learned from STI?"></textarea>  </div></div>
	<div class="element-separator"><hr><h3 class="section-break-title">Write your comments about your stay at STI as well as your recommendations for our services and facilities.
Please indicate your rating according to the following criteria (1 is the lowest):</h3></div>
	<div class="element-radio"><label class="title">Library Services<span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="libsrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="libsrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="libsrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="libsrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="libsrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Computer Laboratory Services<span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="comlabsrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="comlabsrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="comlabsrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="comlabsrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="comlabsrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Records/Registrar's Services<span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="recsrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="recsrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="recsrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="recsrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="recsrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Cashiering Services <span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="cashsrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="cashsrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="cashsrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="cashsrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="cashsrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Guidance Services<span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="guidsrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="guidsrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="guidsrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="guidsrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="guidsrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Placement Office Services <span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="placesrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="placesrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="placesrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="placesrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="placesrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Discipline Office Services<span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="dosrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="dosrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="dosrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="dosrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="dosrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Admissions Office Services<span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="adminsrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="adminsrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="adminsrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="adminsrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="adminsrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Facilities<span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="facsrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="facsrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="facsrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="facsrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="facsrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-radio"><label class="title">Faculty Members/Staff<span class="required">*</span></label>
    <div class="column column5"><label><input type="radio" name="memsrvc" value="1" required="required"/><span>1</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="memsrvc" value="2" required="required"/><span>2</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="memsrvc" value="3" required="required"/><span>3</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="memsrvc" value="4" required="required"/><span>4</span></label></div><span class="clearfix"></span>
		<div class="column column5"><label><input type="radio" name="memsrvc" value="5" required="required"/><span>5</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="otherSrvc" cols="20" rows="5" required="required" placeholder="Other Services"></textarea>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="collegeSrvc" cols="20" rows="5" required="required" placeholder="College Week"></textarea>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="studSrvc" cols="20" rows="5" required="required" placeholder="Student Competitions"></textarea>  </div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="orgSrvc" cols="20" rows="5" required="required" placeholder="Student Organizations"></textarea>  </div></div>
<div class="submit"><input type="submit" value="Submit" name="exit-sub"/></div></form><script type="text/javascript" src="formoid_files/formoid1/formoid-solid-blue.js"></script>
<!-- Stop Formoid form-->
<?php

if (isset($_POST['exit-sub'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$sy_attend = mysqli_real_escape_string($db_conx, $_POST['sy-attend']);
$date_grad = mysqli_real_escape_string($db_conx, $_POST['date-grad']);
$gender = mysqli_real_escape_string($db_conx, $_POST['gender']);
$civil = mysqli_real_escape_string($db_conx, $_POST['civil']);
$contactNo = mysqli_real_escape_string($db_conx, $_POST['contactNo']);
$email = mysqli_real_escape_string($db_conx, $_POST['email']);
$enrolledOther = mysqli_real_escape_string($db_conx, $_POST['enrolledOther']);
$permAdd = mysqli_real_escape_string($db_conx, $_POST['permAdd']);
$provAdd = mysqli_real_escape_string($db_conx, $_POST['provAdd']);
$workexp = mysqli_real_escape_string($db_conx, $_POST['workexp']);
$compconnect = mysqli_real_escape_string($db_conx, $_POST['compconnect']);
$titleheld = mysqli_real_escape_string($db_conx, $_POST['titleheld']);
$dateEmp = mysqli_real_escape_string($db_conx, $_POST['dateEmp']);
$ojtHost = mysqli_real_escape_string($db_conx, $_POST['ojtHost']);
$hrsComp = mysqli_real_escape_string($db_conx, $_POST['hrsComp']);
$deptAss = mysqli_real_escape_string($db_conx, $_POST['deptAss']);
$nameSuper = mysqli_real_escape_string($db_conx, $_POST['nameSuper']);
$telNo = mysqli_real_escape_string($db_conx, $_POST['telNo']);
$accs = mysqli_real_escape_string($db_conx, $_POST['accs']);
$plans = mysqli_real_escape_string($db_conx, $_POST['plans']);
$seeyrs = mysqli_real_escape_string($db_conx, $_POST['seeyrs']);
$values = mysqli_real_escape_string($db_conx, $_POST['values']);
$learnings = mysqli_real_escape_string($db_conx, $_POST['learnings']);
$technical = mysqli_real_escape_string($db_conx, $_POST['technical']);
$soft = mysqli_real_escape_string($db_conx, $_POST['soft']);

$libsrvc = mysqli_real_escape_string($db_conx, $_POST['libsrvc']);
$comlabsrvc = mysqli_real_escape_string($db_conx, $_POST['comlabsrvc']);
$recsrvc = mysqli_real_escape_string($db_conx, $_POST['recsrvc']);
$cashsrvc = mysqli_real_escape_string($db_conx, $_POST['cashsrvc']);
$guidsrvc = mysqli_real_escape_string($db_conx, $_POST['guidsrvc']);
$placesrvc = mysqli_real_escape_string($db_conx, $_POST['placesrvc']);
$dosrvc = mysqli_real_escape_string($db_conx, $_POST['dosrvc']);
$adminsrvc = mysqli_real_escape_string($db_conx, $_POST['adminsrvc']);
$facsrvc = mysqli_real_escape_string($db_conx, $_POST['facsrvc']);
$memsrvc = mysqli_real_escape_string($db_conx, $_POST['memsrvc']);
$otherSrvc = mysqli_real_escape_string($db_conx, $_POST['otherSrvc']);
$collegeSrvc = mysqli_real_escape_string($db_conx, $_POST['collegeSrvc']);
$studSrvc = mysqli_real_escape_string($db_conx, $_POST['studSrvc']);
$orgSrvc = mysqli_real_escape_string($db_conx, $_POST['orgSrvc']);


$query = mysqli_query($db_conx, "select studentNo from grad_exit_interview where studentNo ='$studNo'");
$numrows = mysqli_num_rows($query);
if($numrows==0)
{

$sql= "insert into grad_exit_interview values(id,'$studNo','$studLname','$studFname','$studMi','$sy_attend','$date_grad','$gender','$civil','$contactNo','$email','$studCrs','$enrolledOther','$permAdd','$provAdd','$workexp','$compconnect','$titleheld','$dateEmp','$ojtHost','$hrsComp','$deptAss','$nameSuper','$telNo','$accs','$plans','$seeyrs','$values','$learnings','$technical','$soft','$libsrvc','$comlabsrvc','$recsrvc','$cashsrvc','$guidsrvc','$placesrvc','$dosrvc','$adminsrvc','$facsrvc','$memsrvc','$otherSrvc','$collegeSrvc','$studSrvc','$orgSrvc')";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'exit_interview.php';</script>";
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



</body>
</html>
