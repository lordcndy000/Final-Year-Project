<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from ojtadv order by lastn");

  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Program</strong></div>
      <div class='divTableCell'><strong>Address</strong></div>
      <div class='divTableCell'><strong>Email</strong></div>
      <div class='divTableCell'><strong>Contact</strong></div>
      <div class='divTableCell'><strong>Contact</strong></div>
  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

            $advid = $row['idojtadv'];
            $advLname = $row['lastn']; //a
            $advFname = $row['fname'];//a
            $advMi = $row['mi'];//a
            $advAdd = $row['address'];//a
            $advMail = $row['email'];//a
            $advCont = $row['contact'];//
            $advCrs = $row['program'];//a
            $advabout = $row['about'];//

            $output .=   "<div class='divTableRow'>
                <div class='divTableCell adlastn' data-id2=$advid contenteditable>$advLname</div>
                <div class='divTableCell adfname' data-id3=$advid contenteditable>$advFname</div>
                <div class='divTableCell admi' data-id4=$advid contenteditable>$advMi</div>
                <div class='divTableCell adprogram' data-id5=$advid contenteditable>$advCrs</div>
                <div class='divTableCell adAddress' data-id7=$advid contenteditable>$advAdd</div>
                <div class='divTableCell adEmail' data-id8=$advid contenteditable>$advMail</div>
                <div class='divTableCell adcont' data-id9=$advid contenteditable>$advCont</div>
                <div class='divTableCell'>
                  <button name='advrc_del' id='advrc_del' data-id10=$advid> Delete </button>
                </div>
              </div>";


      }
      $output .= "</div>
      </div>";

  }

  else
  {

  }
  echo $output;


  ?>
