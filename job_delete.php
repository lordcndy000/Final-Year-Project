<?php

if (isset($_POST['job-del'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$jobID= mysqli_real_escape_string($db_conx, $_POST['job-id']);


$sql= "delete from job_posts where job_id = '$jobID' limit 1";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'comp_page.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('deleted');
window.location.href= 'comp_page.php';</script>";
}
}
?>
