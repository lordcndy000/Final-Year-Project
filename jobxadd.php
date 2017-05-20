<?php
include ('db_conx.php');

$sql = "INSERT INTO job_posts VALUES(job_id,'1','Admin','".$_POST["job_title"]."',now(), '".$_POST["job_desc"]."', '".$_POST["job_skils"]."','none', '".$_POST["job_industry"]."', '".$_POST["job_loc"]."', '".$_POST["job_national"]."', '".$_POST["job_exp"]."', '".$_POST["job_educ"]."', '".$_POST["job_role"]."', '".$_POST["job_sal"]."')";
if(mysqli_query($db_conx, $sql))
{
     echo 'Data Inserted';
}
?>
