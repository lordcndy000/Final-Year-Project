<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from grad_exit_interview");

  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
     <div class='divTableCell'></div>
      <div class='divTableCell'> Student No.  </div>
      <div class='divTableCell'> Last Name  </div>
      <div class='divTableCell'> First Name  </div>
      <div class='divTableCell'> MI  </div>
      <div class='divTableCell'> Sy Attended  </div>
      <div class='divTableCell'> Date Graduated  </div>
      <div class='divTableCell'> Gender  </div>
      <div class='divTableCell'> Civil Status  </div>
      <div class='divTableCell'> Contact  </div>

      <div class='divTableCell'> Course  </div>
      <div class='divTableCell'> Program enrolled/completed in other schools  </div>
      <div class='divTableCell'> Permanent Address  </div>
      <div class='divTableCell'> Provincial Address  </div>
      <div class='divTableCell'> Work Experience  </div>
      <div class='divTableCell'> Company currently connected  </div>
      <div class='divTableCell'> Job Title  </div>
      <div class='divTableCell'> Date Employed  </div>

      <div class='divTableCell'> OJT Host  </div>
      <div class='divTableCell'> Training Hours rendered/ completed  </div>
      <div class='divTableCell'> Department Assigned  </div>
      <div class='divTableCell'> Training supervisor  </div>
      <div class='divTableCell'> Tel. No  </div>
      <div class='divTableCell'> Accomplishment during the training  </div>
      <div class='divTableCell'> Plans after graduation  </div>
      <div class='divTableCell'> See themselves 5 years from now  </div>
      <div class='divTableCell'> Values learned from STI  </div>

      <div class='divTableCell'> Learnings from OJT  </div>
      <div class='divTableCell'> Technical Skills learned from STI  </div>
      <div class='divTableCell'> Soft Skills learned from STI  </div>
      <div class='divTableCell'> Library Services  </div>
      <div class='divTableCell'> Computer Lab Services  </div>
      <div class='divTableCell'> Registrar/Records Services  </div>
      <div class='divTableCell'> Cashiering Services  </div>
      <div class='divTableCell'> Guidance Services  </div>
      <div class='divTableCell'> Placement Office Services  </div>

      <div class='divTableCell'> Discipline Office Services  </div>
      <div class='divTableCell'> Admissions Office Services  </div>
      <div class='divTableCell'> Facilities  </div>
      <div class='divTableCell'> Faculty Members/Staff  </div>
      <div class='divTableCell'> Other Services  </div>
      <div class='divTableCell'> College week  </div>
      <div class='divTableCell'> Student Competetions  </div>
      <div class='divTableCell'> Student Organizations  </div>
  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

          $rec_id = $row['id'];
          $studentNo = $row['studentNo'];
          $recL = $row['lastn'];
          $recF = $row['fname'];
          $recM = $row['mi'];
          $sy_attended = $row['sy_attended'];
          $date_grad = $row['date_grad'];
          $gender = $row['gender'];
          $civil_stat = $row['civil_stat'];
          $contact_network = $row['contact-network'];
          $course = $row['program'];
          $enrolled_otherSchl = $row['enrolled_otherSchl'];
          $perm_add = $row['perm_add'];
          $prov_add = $row['prov_add'];
          $wrk_exp = $row['wrk_exp'];
          $comp_conn = $row['comp_conn'];
          $job_title = $row['job_title'];
          $date_emp = $row['date_emp'];
          $ojt_host = $row['ojt_host'];
          $train_hrs = $row['train_hrs'];
          $dept_ass = $row['dept_ass'];
          $train_sprvsr = $row['train_sprvsr'];
          $telNo = $row['telNo'];
          $accomp = $row['accomp'];
          $plans = $row['plans'];
          $yrs_from_now = $row['yrs_from_now'];
          $values = $row['values'];
          $gain_ojt = $row['gain_ojt'];
          $technical_sti = $row['technical_sti'];
          $skills_sti = $row['skills_sti'];
          $lib_srvc = $row['lib_srvc'];
          $lab_srvc = $row['lab_srvc'];
          $records_srvc = $row['records_srvc'];
          $cash_srvc = $row['cash_srvc'];
          $guide_srvc = $row['guide_srvc'];
          $place_srvc = $row['place_srvc'];
          $do_srvc = $row['do_srvc'];
          $adm_srvc = $row['adm_srvc'];
          $faci_srvc = $row['faci_srvc'];
          $fac_srvc = $row['fac_srvc'];
          $other_srvc = $row['other_srvc'];
          $activ = $row['activ'];
          $compete = $row['compete'];
          $orgs = $row['orgs'];

            $output .=  "<div class='divTableRow'>
            <div class='divTableCell'>
              <button name='exit_intdel' id='exit_intdel' data-id1=$rec_id> Delete </button>
            </div>
             <div class='divTableCell'> $studentNo  </div>
             <div class='divTableCell'> $recL  </div>
             <div class='divTableCell'> $recF  </div>
             <div class='divTableCell'> $recM  </div>
             <div class='divTableCell'> $sy_attended  </div>
             <div class='divTableCell'> $date_grad  </div>
             <div class='divTableCell'> $gender  </div>
             <div class='divTableCell'> $civil_stat  </div>
             <div class='divTableCell'> $contact_network  </div>

             <div class='divTableCell'> $course  </div>
             <div class='divTableCell'> $enrolled_otherSchl  </div>
             <div class='divTableCell'> $perm_add  </div>
             <div class='divTableCell'> $prov_add  </div>
             <div class='divTableCell'> $wrk_exp  </div>
             <div class='divTableCell'> $comp_conn  </div>
             <div class='divTableCell'> $job_title  </div>
             <div class='divTableCell'> $date_emp  </div>

             <div class='divTableCell'> $ojt_host  </div>
             <div class='divTableCell'> $train_hrs  </div>
             <div class='divTableCell'> $dept_ass  </div>
             <div class='divTableCell'> $train_sprvsr  </div>
             <div class='divTableCell'> $telNo  </div>
             <div class='divTableCell'> $accomp  </div>
             <div class='divTableCell'> $plans  </div>
             <div class='divTableCell'> $yrs_from_now  </div>
             <div class='divTableCell'> $values  </div>

             <div class='divTableCell'> $gain_ojt  </div>
             <div class='divTableCell'> $technical_sti  </div>
             <div class='divTableCell'> $skills_sti  </div>
             <div class='divTableCell'> $lib_srvc  </div>
             <div class='divTableCell'> $lab_srvc  </div>
             <div class='divTableCell'> $records_srvc</div>
             <div class='divTableCell'> $cash_srvc  </div>
             <div class='divTableCell'> $guide_srvc  </div>
             <div class='divTableCell'> $place_srvc  </div>

             <div class='divTableCell'> $do_srvc  </div>
             <div class='divTableCell'> $adm_srvc  </div>
             <div class='divTableCell'> $faci_srvc  </div>
             <div class='divTableCell'> $fac_srvc  </div>
             <div class='divTableCell'> $other_srvc  </div>
             <div class='divTableCell'> $activ  </div>
             <div class='divTableCell'> $compete  </div>
             <div class='divTableCell'> $orgs  </div>

           </div>";


      }
      $output .= "</div>
      </div>";
  }

  else
  {
    $output .=   "No data found";
  }
  echo $output;


  ?>
