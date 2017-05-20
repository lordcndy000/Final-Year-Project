<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from job_posts order by job_date");
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

  if(mysqli_num_rows($sql) > 0)
  {
      while($arow = mysqli_fetch_array($sql, MYSQLI_ASSOC))
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
      $output .= "</div>";

      $output .=   "<div class='divTableRow'>
          <div class='divTableCell' id='job_title' contenteditable>Add job title</div>
          <div class='divTableCell' id='job_desc' contenteditable>Add job description</div>
          <div class='divTableCell' id='job_skils' contenteditable>Add job skills</div>

          <div class='divTableCell' id='job_industry' contenteditable>Add job industry</div>
          <div class='divTableCell' id='job_loc' contenteditable>Add job location</div>
          <div class='divTableCell' id='job_national' contenteditable>Add employee nationality</div>
          <div class='divTableCell' id= 'job_exp' contenteditable>Add job experience</div>
          <div class='divTableCell' id='job_educ' contenteditable>Add job education</div>

          <div class='divTableCell' id='job_role' contenteditable>Add role</div>
          <div class='divTableCell' id='job_sal'  contenteditable>Add salary</div>


          <div class='divTableCell'>
            <button name='jobxad' id='jobxad' class='btn-success'> Add </button>
          </div>

        </div>";

  }

  else
  {
    $output .=   "<div class='divTableRow'>
        <div class='divTableCell id='job_title' contenteditable>Add job title</div>
        <div class='divTableCell id='job_desc' contenteditable>Add job description</div>
        <div class='divTableCell id='job_skils' contenteditable>Add job skills</div>

        <div class='divTableCell id='job_industry' contenteditable>Add job industry</div>
        <div class='divTableCell id='job_loc' contenteditable>Add job location</div>
        <div class='divTableCell id='job_national' contenteditable>Add employee nationality</div>
        <div class='divTableCell id= 'job_exp' contenteditable>Add job experience</div>
        <div class='divTableCell id='job_educ' contenteditable>Add job education</div>

        <div class='divTableCell id='job_role' contenteditable>Add role</div>
        <div class='divTableCell id='job_sal'  contenteditable>Add salary</div>


        <div class='divTableCell'>
          <button name='jobxad' id='jobxad' class='btn-success'> Add </button>
        </div>

      </div>";
  }
  echo $output;


  ?>
