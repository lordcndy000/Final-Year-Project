<?php

  include('db_conx.php');

  $id = $_POST["id"];


  $output = '';
  $sql = "select * from job_posts where partner_id='".$id."'";
  $res = mysqli_query($db_conx, $sql);
  $numr = mysqli_num_rows($res);

  if(mysqli_num_rows($res)>0)
  {
    $output .= "
    <div class='divTable'>
     <div class='divTableBody'>
       <div class='divTableRow1'>
        <div class='divTableCell'><strong>Job ID</strong></div>
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

         while($arow = mysqli_fetch_array($res))
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
              <div class='divTableCell job_title' data-id1=$jobid contenteditable>$jobTitle</div>
              <div class='divTableCell job_date' data-id2=$jobid>$jobDate</div>
              <div class='divTableCell job_desc' data-id3=$jobid contenteditable>$jobDesc</div>
              <div class='divTableCell job_skils' data-id4=$jobid contenteditable>$jobSk</div>

              <div class='divTableCell job_industry' data-id5=$jobid contenteditable>$jobInd</div>
              <div class='divTableCell job_loc' data-id6=$jobid contenteditable>$jobLoc</div>
              <div class='divTableCell job_national' data-id7=$jobid contenteditable>$jobNat</div>
              <div class='divTableCell job_exp' data-id8=$jobid contenteditable>$jobExp</div>
              <div class='divTableCell job_educ' data-id9=$jobid contenteditable>$jobEduc</div>

              <div class='divTableCell job_role' data-id10=$jobid contenteditable>$jobR</div>
              <div class='divTableCell job_sal' data-id11=$jobid contenteditable>$jobSal</div>


              <div class='divTableCell'>
                <button name='jobdel' id='jobdel' data-id12=$jobid> Delete </button>
              </div>

            </div>

              ";
           }
  $output .= "

                <div class='divTableCell'>
                  <p name='jobBack' id='jobBack' style='color: Blue; cursor: pointer' data-id13=$jobid> Back </p>
                </div></div>";

   echo "<p>Posted by: $jobPostBy| $numr post(s)</p> $output";
}
else
{

   echo "Data Not Found
   <div class='divTableCell'>
     <p name='jobBack' id='jobBack' style='color: Blue; cursor: pointer'> Back </p>
   </div></div>";
}
?>
