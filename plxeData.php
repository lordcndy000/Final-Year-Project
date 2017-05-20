<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from job_placement_monitoring");
  $output .= "
  <div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Contact No.</strong></div>
      <div class='divTableCell'><strong>Email Address</strong></div>
      <div class='divTableCell'><strong>Status</strong></div>
      <div class='divTableCell'><strong>Company/Institution</strong></div>
      <div class='divTableCell'><strong>Position/Title</strong></div>
      <div class='divTableCell'><strong>Industry</strong></div>
      <div class='divTableCell'><strong>Sub-class</strong></div>
      <div class='divTableCell'><strong>Date Hired</strong></div>
      <div class='divTableCell'><strong>Remarks</strong></div>

  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($arow = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

        $plaxeid = $arow['placement_id'];
        $plaxelastn = $arow['lname']; //a
        $plaxefname = $arow['fname'];//a
        $plaxemi = $arow['mi'];//a
        $plaxeCont = $arow['contactNum'];
        $plaxeMail = $arow['emailAdr'];
        $plaxestatx = $arow['statx'];
        $plaxeinst = $arow['institute'];
        $plaxePost = $arow['posTit'];
        $plaxeIndust = $arow['industry'];
        $plaxesubc = $arow['sbCls'];
        $plaxedateHrd = $arow['dateHrd'];
        $plaxeRem = $arow['remarks'];


        $output .=   "<div class='divTableRow'>
            <div class='divTableCell lastn' data-id2=$plaxeid contenteditable>$plaxelastn</div>
            <div class='divTableCell fname' data-id3=$plaxeid contenteditable>$plaxefname</div>
            <div class='divTableCell mi' data-id4=$plaxeid contenteditable>$plaxemi</div>
            <div class='divTableCell contactNum' data-id5=$plaxeid contenteditable>$plaxeCont</div>
            <div class='divTableCell emailAdr' data-id6=$plaxeid contenteditable>$plaxeMail</div>
            <div class='divTableCell statx' data-id7=$plaxeid contenteditable>$plaxestatx</div>
            <div class='divTableCell insitute' data-id8=$plaxeid contenteditable>$plaxeinst</div>
            <div class='divTableCell posTit' data-id9=$plaxeid contenteditable>$plaxePost</div>
            <div class='divTableCell industry' data-id10=$plaxeid contenteditable>$plaxeIndust</div>
            <div class='divTableCell subCls' data-id11=$plaxeid contenteditable>$plaxesubc</div>
            <div class='divTableCell dateHrd' data-id12=$plaxeid contenteditable>$plaxedateHrd</div>
            <div class='divTableCell remarks' data-id13=$plaxeid contenteditable>$plaxeRem</div>

            <div class='divTableCell'>
              <button name='plaxedel' id='plaxedel' data-id14=$plaxeid> Delete </button>
            </div>

          </div>

            ";

      }
      $output .= "</div>";

      $output .=   "<div class='divTableRow'>

          <div class='divTableCell' id='plaxeL' contenteditable>Add Last Name</div>
          <div class='divTableCell' id='plaxeF' contenteditable>Add First Name</div>
          <div class='divTableCell' id= 'plaxeM' contenteditable>Add MI</div>
          <div class='divTableCell' id='plaxeNum' contenteditable>Add Contact No</div>

          <div class='divTableCell' id='plaxeMail' contenteditable>Add email</div>
          <div class='divTableCell' id='plaxeStat'  contenteditable>Add employment status</div>

          <div class='divTableCell' id='plaxeInst' contenteditable>Add Company/Institution</div>
          <div class='divTableCell' id='plaxePost' contenteditable>Add Position/Title</div>
          <div class='divTableCell' id= 'plaxeIndust' contenteditable>Add Industry</div>
          <div class='divTableCell' id='plaxesbC' contenteditable>Add Subclass</div>

          <div class='divTableCell' id='plaxeDh' contenteditable>Add Date hired</div>
          <div class='divTableCell' id='plaxeRem'  contenteditable>Add Remarks</div>


          <div class='divTableCell'>
            <button name='plaxeadd' id='plaxeadd' class='btn-success'> Add </button>
          </div>

        </div>";

  }

  else
  {

    $output .=   "<div class='divTableRow'>

        <div class='divTableCell' id='plaxeL' contenteditable>Add Last Name</div>
        <div class='divTableCell' id='plaxeF' contenteditable>Add First Name</div>
        <div class='divTableCell' id= 'plaxeM' contenteditable>Add MI</div>
        <div class='divTableCell' id='plaxeNum' contenteditable>Add Contact No</div>

        <div class='divTableCell' id='plaxeMail' contenteditable>Add email</div>
        <div class='divTableCell' id='plaxeStat'  contenteditable>Add employment status</div>

        <div class='divTableCell' id='plaxeInst' contenteditable>Add Company/Institution</div>
        <div class='divTableCell' id='plaxePost' contenteditable>Add Position/Title</div>
        <div class='divTableCell' id= 'plaxeIndust' contenteditable>Add Industry</div>
        <div class='divTableCell' id='plaxesbC' contenteditable>Add Subclass</div>

        <div class='divTableCell' id='plaxeDh' contenteditable>Add Date hired</div>
        <div class='divTableCell' id='plaxeRem'  contenteditable>Add Remarks</div>


        <div class='divTableCell'>
          <button name='plaxeadd' id='plaxeadd' class='btn-success'> Add </button>
        </div>

      </div>";
  }
  echo $output;


  ?>
