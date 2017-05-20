<?php

include('db_conx.php');
$iddx = mysqli_real_escape_string ($db_conx, $_POST["id"]);
$output ='';
$sel = "select * from job_posts where job_id = '".$iddx."'";
$result = mysqli_query($db_conx, $sel);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

      $jobid = $row['job_id'];
      $jobTitle = $row['job_title'];
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

      $output .= "<p class='jtit'  data-id1=$jobid contenteditable>$jobTitle</p>
        <p class='jdescx' data-id2=$jobid contenteditable>$jobDesc</p>
        <div id='jdetails'>
          <p class='jdet'> 2016-09-03</p>
          <p class='jdet jaddr' data-id3=$jobid contenteditable> $jobLoc </p>
          <p class='jdet' id='moreback' data-id11=$jobid> Back<span style='color:orange'> ◀ </span></p>
          <p class='jdet moredel' data-id9=$jobid name='delete_post'> Delete<span style='color:red'> ✖ </span> </p>
        </div>
        <div id='mdetails'>
        <strong class='mdTit'> Industry: </strong>
        <p class='mdCont job_industry' data-id12=$jobid> $jobInd </p>

        <strong class='mdTit'> Nationality: </strong>
        <p class='mdCont job_national' data-id4=$jobid contenteditable> $jobNat </p>

        <strong class='mdTit'> Education: </strong>
        <p class='mdCont job_educ' data-id5=$jobid contenteditable>$jobEduc</p>


        <strong class='mdTit'> Experience: </strong>
        <p class='mdCont job_exp' data-id6=$jobid contenteditable>$jobExp</p>

        <strong class='mdTit'> Role: </strong>
        <p class='mdCont job_role' data-id7=$jobid contenteditable> $jobR </p>

        <strong class='mdTit'>  Salary : </strong>
        <p class='mdCont job_sal' data-id8=$jobid  contenteditable> $jobSal </p>
      </div>";
    }
  }
  else{
    echo 'Fail';
  }
  echo $output;
?>
