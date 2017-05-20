<?php

include('db_conx.php');
$iddx = mysqli_real_escape_string ($db_conx, $_POST["id"]);
$output ='';
$sel = "select * from job_posts inner join partners_tbl on job_posts.partner_compN = partners_tbl.partner_compN where job_id = '".$iddx."'";
$result = mysqli_query($db_conx, $sel);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

       $jobid = $row['job_id'];
       $jobpostby = $row['partner_compN'];
       $jobtitle1 = $row['job_title'];
       $jobDate = $row['job_date'];
       $jobDesc = $row['job_desc'];
       $jobSk = $row['job_skils'];
       $jobInd = $row['job_industry'];
       $jobLoc = $row['job_loc'];
       $jobNat = $row['job_national'];
       $jobExp = $row['job_exp'];
       $jobEduc = $row['job_educ'];
       $jobR = $row['job_role'];
       $jobSal = $row['job_sal'];
       $partnerpic = $row['partner_pic'];
      $output .= "<div id='jbpstcont' style='cursor:default' data-id1=$jobid>

        <div class='compimage'>
          <img src='data:image;base64,".$row['partner_pic']."' height='90px' alt='No image yet' width='90px' class='compimagecont'>
        </div>

        <div id='jobinfo'>
          <p class='compname'> $jobpostby </p>
          <p class='jobtitle1'> $jobtitle1</p>
          <p class='jobtitle1'> $jobDesc</p>
          <p class='jobtitle1' style='font-size:12px'> <strong>Posted on:</strong> $jobDate </p>
          <p class='jobtitle1'><strong> Skills </strong></p>
          <p class='jobtitle1'> $jobSk </p>
          <p class='jobtitle1'><strong> Industry </strong></p>
          <p class='jobtitle1'> $jobInd </p>
          <p class='jobtitle1'><strong> Location </strong></p>
          <p class='jobtitle1'> $jobLoc </p>
          <p class='jobtitle1'><strong> Nationality </strong></p>
          <p class='jobtitle1'> $jobNat </p>
          <p class='jobtitle1'><strong> Experience </strong></p>
          <p class='jobtitle1'> $jobExp </p>
          <p class='jobtitle1'><strong> Education </strong></p>
          <p class='jobtitle1'> $jobEduc </p>
          <p class='jobtitle1'><strong> Job Role </strong></p>
          <p class='jobtitle1'> $jobR </p>
          <p class='jobtitle1'><strong> Salary </strong></p>
          <p class='jobtitle1'> $jobSal </p>
          <p data-id2=$jobid id='joback'>◀ Back</p>
        </div>


      </div>";
    }
  }
  else{
    echo 'Fail';
  }
  echo $output;
?>
