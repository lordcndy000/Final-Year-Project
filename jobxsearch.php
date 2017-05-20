<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM job_posts WHERE job_id  LIKE '%".$_POST["search"]."%' or partner_compN  LIKE '%".$_POST["search"]."%' or job_title LIKE '%".$_POST["search"]."%'or job_date LIKE '%".$_POST["search"]."%'or job_desc LIKE '%".$_POST["search"]."%'or job_skils LIKE '%".$_POST["search"]."%'or job_industry LIKE '%".$_POST["search"]."%'or job_loc LIKE '%".$_POST["search"]."%'or job_national LIKE '%".$_POST["search"]."%'or job_exp LIKE '%".$_POST["search"]."%'or job_educ LIKE '%".$_POST["search"]."%'or job_role LIKE '%".$_POST["search"]."%' or job_sal LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
  $output .= "
  <div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Job ID</strong></div>
      <div class='divTableCell'><strong>Posted by</strong></div>
      <div class='divTableCell'><strong>Job Title</strong></div>
      <div class='divTableCell'><strong>Date Posted</strong></div>
      <div class='divTableCell'><strong>Job Description</strong></div>
      <div class='divTableCell'><strong>Skills Required</strong></div>
      <div class='divTableCell'><strong>Industry</strong></div>
      <div class='divTableCell'><strong>Job Location</strong></div>
      <div class='divTableCell'><strong>Nationality Required</strong></div>
      <div class='divTableCell'><strong>Experience</strong></div>
      <div class='divTableCell'><strong>Education</strong></div>
      <div class='divTableCell'><strong>Job role</strong></div>
      <div class='divTableCell'><strong>Job salary</strong></div>

  </div>";

     while($arow = mysqli_fetch_array($result))
     {


               $jobid = $arow['job_id'];
               $jobTitle = $arow['job_title'];
               $jobPostBy = $arow['partner_compN'];
               $jobDate = $arow['job_date'];
               $jobDesc = $arow['job_desc'];
               $jobSk = $arow['job_skils'];
               $jobInd = $arow['job_industry'];
               $jobLoc = $arow['job_loc'];
               $jobNat = $arow['job_national'];
               $jobExp = $arow['job_exp'];
               $jobEduc = $arow['job_educ'];
               $jobR = $arow['job_role'];
               $jobSal = $arow['job_sal'];

               $output .=   "<div class='divTableRow'>
                   <div class='divTableCell'>$jobid</div>
                   <div class='divTableCell job_postby'>$jobPostBy</div>
                   <div class='divTableCell job_title' data-id1=$jobid contenteditable>$jobTitle</div>
                   <div class='divTableCell job_date'>$jobDate</div>
                   <div class='divTableCell job_desc' data-id2=$jobid contenteditable>$jobDesc</div>
                   <div class='divTableCell job_skils' data-id3=$jobid contenteditable>$jobSk</div>

                   <div class='divTableCell job_industry' data-id4=$jobid contenteditable>$jobInd</div>
                   <div class='divTableCell job_loc' data-id5=$jobid contenteditable>$jobLoc</div>
                   <div class='divTableCell job_national' data-id6=$jobid contenteditable>$jobNat</div>
                   <div class='divTableCell job_exp' data-id7=$jobid contenteditable>$jobExp</div>
                   <div class='divTableCell job_educ' data-id8=$jobid contenteditable>$jobEduc</div>

                   <div class='divTableCell job_role' data-id9=$jobid contenteditable>$jobR</div>
                   <div class='divTableCell job_sal' data-id10=$jobid contenteditable>$jobSal</div>


                   <div class='divTableCell'>
                     <button name='jobxdel' id='jobxdel' data-id11=$jobid> Delete </button>
                   </div>

                 </div>

                   ";



     }
       echo $output;

  }

     else
     {
       echo 'Data Not Found';
     }

?>
