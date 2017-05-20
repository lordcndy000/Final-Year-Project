<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from grad_tbl order by lastn");

  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Student No.</strong></div>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Program</strong></div>
      <div class='divTableCell'><strong>Section</strong></div>
      <div class='divTableCell'><strong>Address</strong></div>
      <div class='divTableCell'><strong>Email</strong></div>
      <div class='divTableCell'><strong>Contact</strong></div>
  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

            $id = $row['id'];
            $gradNo = $row['studentNo']; //a
            $gradLname = $row['lastn']; //a
            $gradFname = $row['fname'];//a
            $gradMi = $row['mi'];//a
            $gradAdd = $row['Address'];//a
            $gradMail = $row['Email'];//a
            $gradCont = $row['cont'];//
            $gradCrs = $row['program'];//a
            $gradSet = $row['section'];//

            $output .=   "<div class='divTableRow'>
                <div class='divTableCell gradNo' data-id1=$id contenteditable>$gradNo</div>
                <div class='divTableCell lastn' data-id2=$id contenteditable>$gradLname</div>
                <div class='divTableCell fname' data-id3=$id contenteditable>$gradFname</div>
                <div class='divTableCell mi' data-id4=$id contenteditable>$gradMi</div>
                <div class='divTableCell program' data-id5=$id contenteditable>$gradCrs</div>
                <div class='divTableCell section' data-id6=$id contenteditable>$gradSet</div>
                <div class='divTableCell Address' data-id7=$id contenteditable>$gradAdd</div>
                <div class='divTableCell Email' data-id8=$id contenteditable>$gradMail</div>
                <div class='divTableCell cont' data-id9=$id contenteditable>$gradCont</div>
                <div class='divTableCell'>
                  <button name='gradrc_del' id='gradrc_del' data-id10=$id> Delete </button>
                </div>
                <div class='divTableCell'>
                  <button name='grad_trans' id='grad_trans' data-id11=$id> Transfer Record to Alumni </button>
                </div>
              </div>";


      }
      $output .= "</div>
      </div>";

      $output .=   "<div class='divTableRow'>
          <div class='divTableCell' id='gradNo' contenteditable><i>Add student number</i></div>
          <div class='divTableCell' id='gradLname' contenteditable><i>Add last name</i></div>
          <div class='divTableCell' id='gradFname' contenteditable><i>Add first name</i></div>
          <div class='divTableCell' id='gradMi' contenteditable><i>Add MI</i></div>
          <div class='divTableCell' id='gradCrs' contenteditable><i>Add program</i></div>
          <div class='divTableCell' id='gradSet' contenteditable><i>Add section</i></div>
          <div class='divTableCell' id='gradAdd' contenteditable><i>Add address</i></div>
          <div class='divTableCell' id='gradMail' contenteditable><i>Add email</i></div>
          <div class='divTableCell' id='gradCont' contenteditable><i>Add contact number</i></div>

          <div class='divTableCell'>
            <button name='gradrc_add' id='gradrc_add' class='btn-success'> Add </button>
          </div>
        </div>";

  }

  else
  {
    $output .=   "<div class='divTableRow'>
        <div class='divTableCell' id='gradNo' contenteditable><i>Add student number</i></div>
        <div class='divTableCell' id='gradLname' contenteditable><i>Add last name</i></div>
        <div class='divTableCell' id='gradFname' contenteditable><i>Add first name</i></div>
        <div class='divTableCell' id='gradMi' contenteditable><i>Add MI</i></div>
        <div class='divTableCell' id='gradCrs' contenteditable><i>Add program</i></div>
        <div class='divTableCell' id='gradSet' contenteditable><i>Add section</i></div>
        <div class='divTableCell' id='gradAdd' contenteditable><i>Add address</i></div>
        <div class='divTableCell' id='gradMail' contenteditable><i>Add email</i></div>
        <div class='divTableCell' id='gradCont' contenteditable><i>Add contact number</i></div>

        <div class='divTableCell'>
          <button name='gradrc_add' id='gradrc_add' class='btn-success'> Add </button>
        </div>
      </div>";
  }
  echo $output;


  ?>
