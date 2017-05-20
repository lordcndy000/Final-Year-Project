<?php

if (isset($_POST['edit_job'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$jobeditID= mysqli_real_escape_string($db_conx, $_POST['jobid-edit']);
$edit_title = mysqli_real_escape_string($db_conx, $_POST['edit_title']);
$edit_desc = mysqli_real_escape_string($db_conx, $_POST['edit_desc']);
$edit_skills = mysqli_real_escape_string($db_conx, $_POST['edit_skills']);
$edit_indust = mysqli_real_escape_string($db_conx, $_POST['edit_indust']);
$edit_loc = mysqli_real_escape_string($db_conx, $_POST['edit_loc']);
$edit_nat = mysqli_real_escape_string($db_conx, $_POST['edit_nat']);
$edit_exp = mysqli_real_escape_string($db_conx, $_POST['edit_exp']);
$edit_educ = mysqli_real_escape_string($db_conx, $_POST['edit_educ']);
$edit_role = mysqli_real_escape_string($db_conx, $_POST['edit_role']);
$edit_sal = mysqli_real_escape_string($db_conx, $_POST['edit_sal']);


$sql= "update job_posts set job_title='$edit_title', job_desc='$edit_desc',
      job_skils='$edit_skills', job_industry='$edit_indust', job_loc='$edit_loc',
      job_national='$edit_nat', job_exp='$edit_exp', job_educ='$edit_educ', job_role='$edit_role',
      job_sal='$edit_sal' where job_id = '$jobeditID' limit 1";

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
