<?php

include('db_conx.php');

$output ='';
$sel = "select * from job_conf where jobconf_id = '".$_POST["id"]."'";
$result = mysqli_query($db_conx, $sel);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

       $jobid = $row['jobconf_id'];
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

       $output .= "
         <p class='ptit'  data-id1=$jobid contenteditable>$jobTitle</p>
         <p class='pdescx' data-id2=$jobid contenteditable>$jobDesc</p>
         <div id='pdetails'>
           <p class='jdet'> 2016-09-03</p>
           <p class='jdet paddr' data-id3=$jobid contenteditable> $jobLoc </p>
           <p class='jdet' id='poreback' data-id11=$jobid> Back<span style='color:orange'> ◀ </span></p>
           <p class='jdet poredel' data-id9=$jobid name='delete_pend'> Delete<span style='color:red'> ✖ </span> </p>
         </div>


        <div id='mdetails'>
        <strong class='mdTit'> Industry: </strong>
        <p class='mdCont pob_industry' data-id12=$jobid> $jobInd </p>

        <strong class='mdTit'> Nationality: </strong>
        <p class='mdCont pob_national' data-id4=$jobid contenteditable> $jobNat </p>

        <strong class='mdTit'> Education: </strong>
        <p class='mdCont pob_educ' data-id5=$jobid contenteditable>$jobEduc</p>


        <strong class='mdTit'> Experience: </strong>
        <p class='mdCont pob_exp' data-id6=$jobid contenteditable>$jobExp</p>

        <strong class='mdTit'> Role: </strong>
        <p class='mdCont pob_role' data-id7=$jobid contenteditable> $jobR </p>

        <strong class='mdTit'>  Salary : </strong>
        <p class='mdCont pob_sal' data-id8=$jobid  contenteditable> $jobSal </p>
      </div>";
    }
  }
  else{
    echo 'Fail';
  }
  echo $output;
?>
