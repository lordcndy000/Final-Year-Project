<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from job_assistance order by lastn");
  $output .= "
  <div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Student No</strong></div>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Program</strong></div>
      <div class='divTableCell'><strong>Year Graduated</strong></div>
      <div class='divTableCell'><strong>Company of Interest</strong></div>
      <div class='divTableCell'><strong>Position Desired</strong></div>
      <div class='divTableCell'><strong>Contact No.</strong></div>
      <div class='divTableCell'><strong>Business Email</strong></div>
      <div class='divTableCell'><strong>Resume Link</strong></div>

  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($arow = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

        $assist_id = $arow['assist_id'];
        $axxtstno = $arow['studentNo']; //a
        $axxtlastn = $arow['lastn']; //a
        $axxtfname = $arow['fname'];//a
        $axxtmi = $arow['mi'];//a
        $axxtprogram = $arow['program'];
        $axxtgrad_yrGrad = $arow['grad_yrGrad'];
        $axxtcompany_interest = $arow['company_interest'];
        $axxtpos_desired = $arow['pos_desired'];
        $axxtgrad_contact = $arow['grad_contact'];
        $axxtgrad_mail = $arow['grad_mail'];
        $axxtgrad_resLink = $arow['grad_resLink'];


        $output .=   "<div class='divTableRow'>
            <div class='divTableCell studentNo'>$axxtstno</div>
            <div class='divTableCell lastn'>$axxtlastn</div>
            <div class='divTableCell fname'>$axxtfname</div>
            <div class='divTableCell mi'>$axxtmi</div>
            <div class='divTableCell program'>$axxtprogram</div>
            <div class='divTableCell grad_yrGrad' data-id1=$assist_id contenteditable>$axxtgrad_yrGrad</div>
            <div class='divTableCell company_interest' data-id2=$assist_id contenteditable>$axxtcompany_interest</div>
            <div class='divTableCell pos_desired' data-id3=$assist_id contenteditable>$axxtpos_desired</div>
            <div class='divTableCell grad_contact' data-id4=$assist_id contenteditable>$axxtgrad_contact</div>
            <div class='divTableCell grad_mail' data-id5=$assist_id contenteditable>$axxtgrad_mail</div>
            <div class='divTableCell grad_resLink' data-id6=$assist_id contenteditable>$axxtgrad_resLink</div>


            <div class='divTableCell'>
              <button name='jobaxxtdel' id='jobaxxtdel' data-id7=$assist_id> Delete </button>
            </div>

          </div>

            ";

      }
      $output .= "</div>";

      $output .=   "<div class='divTableRow'>
          <div class='divTableCell' id='studentNos' contenteditable>Add Student Number</div>

          <div class='divTableCell' id='grad_yrGrads' contenteditable>Add Year Graduated</div>
          <div class='divTableCell' id='company_interests' contenteditable>Add Company of Interest</div>
          <div class='divTableCell' id= 'pos_desireds' contenteditable>Add Position Desired</div>
          <div class='divTableCell' id='grad_contacts' contenteditable>Add Graduate Contact</div>

          <div class='divTableCell' id='grad_mails' contenteditable>Add Graduate email</div>
          <div class='divTableCell' id='grad_resLinks'  contenteditable>Add Graduate resume link</div>


          <div class='divTableCell'>
            <button name='assistjb' id='assistjb' class='btn-success'> Add </button>
          </div>

        </div>";

  }

  else
  {

          $output .=   "<div class='divTableRow'>
              <div class='divTableCell' id='studentNos' contenteditable><i>Add Student Number</i></div>

              <div class='divTableCell' id='grad_yrGrads' contenteditable><i>Add Year Graduated</i></div>
              <div class='divTableCell' id='company_interests' contenteditable><i>Add Company of Interest</i></div>
              <div class='divTableCell' id= 'pos_desireds' contenteditable><i>Add Position Desired</i></div>
              <div class='divTableCell' id='grad_contacts' contenteditable><i>Add Graduate Contact</i></div>

              <div class='divTableCell' id='grad_mails' contenteditable><i>Add Graduate email</i></div>
              <div class='divTableCell' id='grad_resLinks'  contenteditable><i>Add Graduate resume link</i></div>


              <div class='divTableCell'>
                <button name='assistjb' id='assistjb' class='btn-success'> Add </button>
              </div>

            </div>";
  }
  echo $output;


  ?>
