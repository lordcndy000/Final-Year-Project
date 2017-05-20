<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from alumni_tbl order by lastn");

  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Student No.</strong></div>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Program</strong></div>
      <div class='divTableCell'><strong>Year Graduated</strong></div>
      <div class='divTableCell'><strong>Address</strong></div>
      <div class='divTableCell'><strong>Email</strong></div>
      <div class='divTableCell'><strong>Contact</strong></div>
  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

            $aid = $row['id'];
            $alumNo = $row['studentNo']; //a
            $alumLname = $row['lastn']; //a
            $alumFname = $row['fname'];//a
            $alumMi = $row['mi'];//a
            $alumAdd = $row['Address'];//a
            $alumMail = $row['Email'];//a
            $alumCont = $row['cont'];//
            $alumCrs = $row['program'];//a
            $alumyrgrad = $row['year_grad'];//

            $output .=   "<div class='divTableRow'>
                <div class='divTableCell'>$alumNo</div>
                <div class='divTableCell lastn' data-id1=$alumNo contenteditable>$alumLname</div>
                <div class='divTableCell fname' data-id2=$alumNo contenteditable>$alumFname</div>
                <div class='divTableCell mi' data-id3=$alumNo contenteditable>$alumMi</div>
                <div class='divTableCell program' data-id4=$alumNo contenteditable>$alumCrs</div>
                <div class='divTableCell'>$alumyrgrad</div>
                <div class='divTableCell Address' data-id5=$alumNo contenteditable>$alumAdd</div>
                <div class='divTableCell Email' data-id6=$alumNo contenteditable>$alumMail</div>
                <div class='divTableCell cont' data-id7=$alumNo contenteditable>$alumCont</div>
                <div class='divTableCell'>
                  <button name='alumrc_del' id='alumrc_del' data-id8=$alumNo> Delete </button>
                </div>

              </div>";


      }
      $output .= "</div>
      </div>";

      $output .=   "<div class='divTableRow'>
          <div class='divTableCell' id='alumNo' contenteditable><i>Add student number</i></div>
          <div class='divTableCell' id='alumLname' contenteditable><i>Add last name</i></div>
          <div class='divTableCell' id='alumFname' contenteditable><i>Add first name</i></div>
          <div class='divTableCell' id='alumMi' contenteditable><i>Add MI</i></div>
          <div class='divTableCell' id='alumCrs' contenteditable><i>Add program</i></div>
          <div class='divTableCell' id='alumYr' contenteditable><i>Add Year Graduated</i></div>
          <div class='divTableCell' id='alumAdd' contenteditable><i>Add address</i></div>
          <div class='divTableCell' id='alumMail' contenteditable><i>Add email</i></div>
          <div class='divTableCell' id='alumCont' contenteditable><i>Add contact number</i></div>

          <div class='divTableCell'>
            <button name='alumrc_add' id='alumrc_add' class='btn-success'> Add </button>
          </div>
        </div>";

  }

  else
  {
    $output .=   "<div class='divTableRow'>
        <div class='divTableCell' id='alumNo' contenteditable><i>Add student number</i></div>
        <div class='divTableCell' id='alumLname' contenteditable><i>Add last name</i></div>
        <div class='divTableCell' id='alumFname' contenteditable><i>Add first name</i></div>
        <div class='divTableCell' id='alumMi' contenteditable><i>Add MI</i></div>
        <div class='divTableCell' id='alumCrs' contenteditable><i>Add program</i></div>
        <div class='divTableCell' id='alumyrgrad' contenteditable><i>Add Year Graduated</i></div>
        <div class='divTableCell' id='alumAdd' contenteditable><i>Add address</i></div>
        <div class='divTableCell' id='alumMail' contenteditable><i>Add email</i></div>
        <div class='divTableCell' id='alumCont' contenteditable><i>Add contact number</i></div>

        <div class='divTableCell'>
          <button name='alumrc_add' id='alumrc_add' class='btn-success'> Add </button>
        </div>
      </div>";

  }
  echo $output;


  ?>
