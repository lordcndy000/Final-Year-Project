<?php

if (isset($_POST['editUseN'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$usernameBx= mysqli_real_escape_string($db_conx, $_POST['usernameBx']);


$sql= "update partners_tbl set partner_username= '$usernameBx' where partner_id = '$partner_id' ";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'comp_page.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('updated');
window.location.href= 'comp_page.php';</script>";
}
}


if (isset($_POST['editEm'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$emailBx= mysqli_real_escape_string($db_conx, $_POST['emailBx']);


$sql= "update partners_tbl set partner_email= '$emailBx' where partner_id = '$partner_id' ";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'comp_page.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('updated');
window.location.href= 'comp_page.php';</script>";
}
}



if (isset($_POST['editcompN'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$compBx= mysqli_real_escape_string($db_conx, $_POST['compBx']);


$sql= "update partners_tbl set partner_compN= '$compBx' where partner_id = '$partner_id' ";
$q= "update job_posts set job_postby = '$compBx' where partner_id = '$partner_id'";

$result = mysqli_query($db_conx, $sql);
$result1 = mysqli_query($db_conx, $q);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'comp_page.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('updated');
window.location.href= 'comp_page.php';</script>";
}
}



if (isset($_POST['editAd'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$coAd= mysqli_real_escape_string($db_conx, $_POST['coAd']);


$sql= "update partners_tbl set partner_compA= '$coAd' where partner_id = '$partner_id' ";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'comp_page.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('updated');
window.location.href= 'comp_page.php';</script>";
}
}




if (isset($_POST['editabout'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$about= mysqli_real_escape_string($db_conx, $_POST['about']);


$sql= "update partners_tbl set partner_about= '$about' where partner_id = '$partner_id' ";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'comp_page.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('updated');
window.location.href= 'comp_page.php';</script>";
}
}



?>
