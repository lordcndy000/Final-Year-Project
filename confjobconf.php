<?php

include('db_conx.php');

//mysql_real_escape_string() escapes special characters in a string for use in an SQL statement


$sql= "insert into job_posts (partner_id, partner_compN, job_title, job_date, job_desc, job_skils, job_industry, job_loc, job_national, job_exp, job_educ, job_role, job_sal) select partner_id, partner_compN, job_title, job_date, job_desc, job_skils, job_industry, job_loc, job_national, job_exp, job_educ, job_role, job_sal from job_conf where jobconf_id =  '".$_POST["id"]."'";
$sql1="delete from job_conf where jobconf_id =  '".$_POST["id"]."'";

$result = mysqli_query($db_conx, $sql);
$result1 = mysqli_query($db_conx, $sql1);

if($result != 1 && $result1 != 1)
{
echo mysqli_error($db_conx);
}
else{
echo "Job post confirmed";
}


?>
