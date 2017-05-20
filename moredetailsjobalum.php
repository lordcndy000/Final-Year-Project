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
          <p class='jobpostb'> $jobpostby </p>
          <p class='jobt'> $jobtitle1</p>
          <p class='jobdesc'> $jobDesc</p>
          <p class='jdate' style='font-size:12px'> <strong>Posted on:</strong> $jobDate </p>
          <p class='strong'><strong> Skills </strong></p>
          <p class='jobdesc'> $jobSk </p>
          <p class='strong'><strong> Industry </strong></p>
          <p class='jobdesc'> $jobInd </p>
          <p class='strong'><strong> Location </strong></p>
          <p class='jobdesc'> $jobLoc </p>
          <p class='strong'><strong> Nationality </strong></p>
          <p class='jobdesc'> $jobNat </p>
          <p class='strong'><strong> Experience </strong></p>
          <p class='jobdesc'> $jobExp </p>
          <p class='strong'><strong> Education </strong></p>
          <p class='jobdesc'> $jobEduc </p>
          <p class='strong'><strong> Job Role </strong></p>
          <p class='jobdesc'> $jobR </p>
          <p class='strong'><strong> Salary </strong></p>
          <p class='jobdesc'> $jobSal </p>
          <p data-id2=$jobid id='jobackal'>◀ Back</p>
        </div>


      </div>";
    }
  }
  else{
    echo 'Fail';
  }
  echo $output;
?>
