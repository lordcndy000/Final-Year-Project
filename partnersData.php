<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from partners_tbl order by partner_dateReg");

  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Partner ID</strong></div>
      <div class='divTableCell'><strong>Username</strong></div>
      <div class='divTableCell'><strong>Email</strong></div>
      <div class='divTableCell'><strong>Company Name</strong></div>
      <div class='divTableCell'><strong>Company Address</strong></div>
      <div class='divTableCell'><strong>Date Registered</strong></div>
      <div class='divTableCell'><strong>About the Company</strong></div>
  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

        $partner_id = $row['partner_id'];
        $partner_username = $row['partner_username'];
        $partner_email = $row['partner_email'];
        $partner_compN = $row['partner_compN'];
        $partner_compA = $row['partner_compA'];
        $partner_dateReg = $row['partner_dateReg'];
        $partner_about = $row['partner_about'];


            $output .=   "<div class='divTableRow'>
                <div class='divTableCell'>$partner_id</div>
                <div class='divTableCell partner_username' data-id1=$partner_id contenteditable>$partner_username</div>
                <div class='divTableCell partner_email' data-id2=$partner_id contenteditable>$partner_email</div>
                <div class='divTableCell partner_compN' data-id3=$partner_id contenteditable>$partner_compN</div>
                <div class='divTableCell partner_compA' data-id4=$partner_id contenteditable>$partner_compA</div>
                <div class='divTableCell'>$partner_dateReg</div>
                <div class='divTableCell partner_about' data-id5=$partner_id contenteditable>$partner_about</div>

                <div class='divTableCell'>
                  <button name='partner_del' id='partner_del' data-id6=$partner_id> Delete </button>
                </div>

                <div class='divTableCell'>
                  <p name='partner_post' id='partner_post' data-id7=$partner_id> View Job Posts by this company </p>
                </div>

              </div>";


      }
      $output .= "</div>";

      $output .=   "<div class='divTableRow'>
          <div class='divTableCell'></div>
          <div class='divTableCell' id='partner_username' contenteditable><i>Add username</i></div>
          <div class='divTableCell' id='partner_email' contenteditable><i>Add email</i></div>
          <div class='divTableCell' id='partner_compN' contenteditable><i>Add company name</i></div>
          <div class='divTableCell' id='partner_compA' contenteditable><i>Add company address</i></div>
          <div class='divTableCell'></div>
          <div class='divTableCell' id='partner_about' contenteditable><i>Add about</i></div>

          <div class='divTableCell'>
            <button name='partner_addrc' id='partner_addrc' class='btn-success'> Add </button>
          </div>
        </div>";

  }

  else
  {
    $output .=   "<div class='divTableRow'>
        <div class='divTableCell'></div>
        <div class='divTableCell' id='partner_username' contenteditable><i>Add username</i></div>
        <div class='divTableCell' id='partner_email' contenteditable><i>Add email</i></div>
        <div class='divTableCell' id='partner_compN' contenteditable><i>Add company name</i></div>
        <div class='divTableCell' id='partner_compA' contenteditable><i>Add company address</i></div>
        <div class='divTableCell'></div>
        <div class='divTableCell' id='partner_about' contenteditable><i>Add about</i></div>

        <div class='divTableCell'>
          <button name='partner_addrc' id='partner_addrc' class='btn-success'> Add </button>
        </div>
      </div>";
  }
  echo $output;


  ?>
