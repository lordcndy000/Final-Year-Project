<?php

if (isset($_POST['post_annc'])){


//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement
$annc_title = mysqli_real_escape_string($db_conx, $_POST['annc_title']);
$annc_for = mysqli_real_escape_string($db_conx, $_POST['annc_for']);
$annc_sec = mysqli_real_escape_string($db_conx, $_POST['ojt_crse']);
$annc_cont = mysqli_real_escape_string($db_conx, $_POST['annc_cont']);



$sql= "insert into announce_tbl values(ann_id,'$annc_title',now(),'$annc_cont','$studFname $studLname','$annc_for','$annc_sec')";

$result = mysqli_query($db_conx, $sql);


if($result != 1)
{
echo "<script type='text/javascript'>alert('fail');
window.location.href= 'admin.php';</script>";
}
else{
echo "<script type='text/javascript'>alert('Posted');
window.location.href= 'admin.php';</script>";
}
}
?>
