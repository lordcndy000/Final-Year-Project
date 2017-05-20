<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from ojt_tbl order by lastn");

  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Student No.</strong></div>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Program</strong></div>
      <div class='divTableCell'><strong>Practicum</strong></div>
      <div class='divTableCell'><strong>Section</strong></div>
      <div class='divTableCell'><strong>Adviser</strong></div>
      <div class='divTableCell' style='padding-right: 120px'><strong>Address</strong></div>
      <div class='divTableCell'><strong>Email</strong></div>
      <div class='divTableCell'><strong>Contact</strong></div>
  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

            $id = $row['id'];
            $studNo = $row['studentNo']; //a
            $studLname = $row['lastn']; //a
            $studFname = $row['fname'];//a
            $studMi = $row['mi'];//a
            $studAdd = $row['Address'];//a
            $studMail = $row['Email'];//a
            $studCont = $row['cont'];//
            $studCrs = $row['program'];//a
            $studSet = $row['section'];//
            $studAdvnm = $row['ojt_adv'];//a
            $pracsb = $row['prac_subj'];//a

            $output .=   "<div class='divTableRow'>
                <div class='divTableCell studentNo' data-id1=$id contenteditable>$studNo</div>
                <div class='divTableCell lname' data-id2=$id contenteditable>$studLname</div>
                <div class='divTableCell fname' data-id3=$id contenteditable>$studFname</div>
                <div class='divTableCell mi' data-id5=$id contenteditable>$studMi</div>
                <div class='divTableCell program' data-id4=$id contenteditable>$studCrs</div>
                <div class='divTableCell prac_subj' data-id6=$id contenteditable>$pracsb</div>
                <div class='divTableCell section' data-id7=$id contenteditable>$studSet</div>
                <div class='divTableCell ojt_adv' data-id8=$id contenteditable>$studAdvnm</div>
                <div class='divTableCell Address' data-id9=$id contenteditable>$studAdd</div>
                <div class='divTableCell Email' data-id10=$id contenteditable>$studMail</div>
                <div class='divTableCell cont' data-id11=$id contenteditable>$studCont</div>
                <div class='divTableCell'>
                  <button name='ojtrc_del' id='ojtrc_del' data-id12=$id> Delete </button>
                </div>
                <div class='divTableCell'>
                  <p name='ojt_reqs' id='ojt_reqs' data-id13=$id> View Requirements </p>
                </div>
                <div class='divTableCell'>
                  <p name='ojt_trans' id='ojt_trans' data-id14=$id> Transfer to <i>Graduating</i> </p>
                </div>

              </div>";


      }
      $output .= "</div>
      </div>";

      $output .=   "<div class='divTableRow'>
          <div class='divTableCell' id='studNo' contenteditable><i>Add student number</i></div>
          <div class='divTableCell' id='studLname' contenteditable><i>Add last name</i></div>
          <div class='divTableCell' id='studFname' contenteditable><i>Add first name</i></div>
          <div class='divTableCell' id='studMi' contenteditable><i>Add MI</i></div>
          <div class='divTableCell' id='studCrs' contenteditable><i>Add program</i></div>
          <div class='divTableCell' id='pracsb' contenteditable><i>Add practicum subject</i></div>
          <div class='divTableCell' id='studSet' contenteditable><i>Add section</i></div>
          <div class='divTableCell' id='studAdvnm' contenteditable><i>Add adviser name</i></div>
          <div class='divTableCell' id='studAdd' contenteditable><i>Add address</i></div>
          <div class='divTableCell' id='studMail' contenteditable><i>Add email</i></div>
          <div class='divTableCell' id='studCont' contenteditable><i>Add contact number</i></div>

          <div class='divTableCell'>
            <button name='ojtrc_add' id='ojtrc_add' class='btn-success'> Add </button>
          </div>
        </div>";

  }

  else
  {
    $output .= "<div class='divTableRow'>
        <div class='divTableCell' id='studNo' contenteditable><i>Add student number</i></div>
        <div class='divTableCell' id='studLname' contenteditable><i>Add last name</i></div>
        <div class='divTableCell' id='studFname' contenteditable><i>Add first name</i></div>
        <div class='divTableCell' id='studMi' contenteditable><i>Add MI</i></div>
        <div class='divTableCell' id='studCrs' contenteditable><i>Add program</i></div>
        <div class='divTableCell' id='pracsb' contenteditable><i>Add practicum subject</i></div>
        <div class='divTableCell' id='studSet' contenteditable><i>Add section</i></div>
        <div class='divTableCell' id='studAdvnm' contenteditable><i>Add adviser name</i></div>
        <div class='divTableCell' id='studAdd' contenteditable><i>Add address</i></div>
        <div class='divTableCell' id='studMail' contenteditable><i>Add email</i></div>
        <div class='divTableCell' id='studCont' contenteditable><i>Add contact number</i></div>

        <div class='divTableCell'>
          <button name='ojtrc_add' id='ojtrc_add' class='btn-success'> Add </button>
        </div>
      </div>";
  }
  echo $output;


  ?>
