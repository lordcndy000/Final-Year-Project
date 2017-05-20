<?php

  include('db_conx.php');

  $output = '';
  $sql = mysqli_query($db_conx, "select * from ojt_prereg order by lastn");

  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Student No.</strong></div>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Program</strong></div>
      <div class='divTableCell'><strong>Contact</strong></div>
      <div class='divTableCell'><strong>Jobstreet signup</strong></div>
      <div class='divTableCell'><strong>Email</strong></div>
      <div class='divTableCell'><strong style='padding-right: 80px'>Year Level</strong></div>
      <div class='divTableCell'><strong>Practicum</strong></div>
      <div class='divTableCell'><strong>Hours Required</strong></div>
      <div class='divTableCell'><strong>Skills Competency 1</strong></div>
      <div class='divTableCell'><strong>Skills Competency 2</strong></div>
      <div class='divTableCell'><strong>Skills Competency 3</strong></div>
      <div class='divTableCell'><strong>Skills Competency 4</strong></div>
      <div class='divTableCell'><strong>Preferred Training Exposure 1</strong></div>
      <div class='divTableCell'><strong>Preferred Training Exposure 2</strong></div>
      <div class='divTableCell'><strong>Preferred Training Exposure 3</strong></div>

      <div class='divTableCell'><strong>Target Company 1</strong></div>
      <div class='divTableCell'><strong>Target Company 2</strong></div>
      <div class='divTableCell'><strong>Target Company 3</strong></div>
      <div class='divTableCell'><strong>Target Company 4</strong></div>
      <div class='divTableCell'><strong>Employer Name</strong></div>
      <div class='divTableCell'><strong>Emloyer Contact</strong></div>
  </div>";

  if(mysqli_num_rows($sql) > 0)
  {
      while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
      {

        $prereg_id = $row['prereg_id'];
        $studentNo = $row['studentNo'];
        $ojt_lname = $row['lastn'];
        $ojt_fname = $row['fname'];
        $ojt_mi = $row['mi'];
        $prog_enr = $row['program'];
        $pers_no = $row['pers_no'];
        $jbstrt_sign = $row['jbstrt_sign'];
        $email_avail = $row['email_avail'];
        $yr_level = $row['yr_level'];
        $prac_subj = $row['prac_subj'];
        $hrs = $row['hrs'];

        $skill1 = $row['skill1'];
        $skill2 = $row['skill2'];
        $skill3 = $row['skill3'];
        $skill4 = $row['skill4'];

        $train_expose1 = $row['train_expose1'];
        $train_expose2 = $row['train_expose2'];
        $train_expose3 = $row['train_expose3'];

        $target_comp1 = $row['target_comp1'];
        $target_comp2 = $row['target_comp2'];
        $target_comp3 = $row['target_comp3'];
        $target_comp4 = $row['target_comp4'];

        $emer_name = $row['emer_name'];
        $emer_cont = $row['emer_cont'];


            $output .=   "<div class='divTableRow'>
                <div class='divTableCell studentNo' data-id1=$prereg_id contenteditable>$studentNo</div>
                <div class='divTableCell ojt_lname' data-id2=$prereg_id contenteditable>$ojt_lname</div>
                <div class='divTableCell ojt_fname' data-id3=$prereg_id contenteditable>$ojt_fname</div>
                <div class='divTableCell ojt_mi' data-id4=$prereg_id contenteditable>$ojt_mi</div>
                <div class='divTableCell prog_enr' data-id5=$prereg_id contenteditable>$prog_enr</div>
                <div class='divTableCell pers_no' data-id6=$prereg_id contenteditable>$pers_no</div>
                <div class='divTableCell jbstrt_sign' data-id7=$prereg_id contenteditable>$jbstrt_sign</div>
                <div class='divTableCell email_avail' data-id8=$prereg_id contenteditable>$email_avail</div>
                <div class='divTableCell yr_level'  data-id9=$prereg_id contenteditable>$yr_level</div>
                <div class='divTableCell prac_subj'  data-id10=$prereg_id contenteditable>$prac_subj</div>
                <div class='divTableCell hrs'  data-id11=$prereg_id contenteditable>$hrs</div>

                <div class='divTableCell skill1' data-id12=$prereg_id contenteditable>$skill1</div>
                <div class='divTableCell skill2' data-id13=$prereg_id contenteditable>$skill2</div>
                <div class='divTableCell skill3' data-id14=$prereg_id contenteditable>$skill3</div>
                <div class='divTableCell skill4' data-id15=$prereg_id contenteditable>$skill4</div>

                <div class='divTableCell train_expose1' data-id16=$prereg_id contenteditable>$train_expose1</div>
                <div class='divTableCell train_expose2' data-id17=$prereg_id contenteditable>$train_expose2</div>
                <div class='divTableCell train_expose3' data-id18=$prereg_id contenteditable>$train_expose3</div>

                <div class='divTableCell target_comp1'  data-id19=$prereg_id contenteditable>$target_comp1</div>
                <div class='divTableCell target_comp2'  data-id20=$prereg_id contenteditable>$target_comp2</div>
                <div class='divTableCell target_comp3'  data-id21=$prereg_id contenteditable>$target_comp3</div>
                <div class='divTableCell target_comp4'  data-id22=$prereg_id contenteditable>$target_comp4</div>

                <div class='divTableCell emer_name'  data-id23=$prereg_id contenteditable>$emer_name</div>
                <div class='divTableCell emer_cont'  data-id24=$prereg_id contenteditable>$emer_cont</div>

                <div class='divTableCell'>
                  <button name='preregdel' id='preregdel' data-id25=$prereg_id> Delete </button>
                </div>
              </div>";


      }
      $output .= "</div>
      </div>";

      $output .=   "<div class='divTableRow'>
          <div class='divTableCell' id='studentNo' contenteditable><i>Add student number</i></div>
          <div class='divTableCell' id='ojt_lname' contenteditable><i>Add last name</i></div>
          <div class='divTableCell' id='ojt_fname' contenteditable><i>Add first name</i></div>
          <div class='divTableCell' id='ojt_mi' contenteditable><i>Add MI</i></div>
          <div class='divTableCell' id='prog_enr' contenteditable><i>Add program</i></div>
          <div class='divTableCell' id='pers_no' contenteditable><i>Add contact number</i></div>
          <div class='divTableCell' id='jbstrt_sign' contenteditable><i>If signed-up in Jobstreet (Yes/Not yet)</i></div>
          <div class='divTableCell' id='email_avail' contenteditable><i>Add email</i></div>
          <div class='divTableCell' id='yr_level' contenteditable><i>Add Year level</i></div>
          <div class='divTableCell' id='prac_subj' contenteditable><i>Practicum</i></div>
          <div class='divTableCell' id='hrs' contenteditable><i>Add Hours Required</i></div>

          <div class='divTableCell' id='skill1' contenteditable><i>Add Technical skills competency1</i></div>
          <div class='divTableCell' id='skill2' contenteditable><i>Add Technical skills competency2</i></div>
          <div class='divTableCell' id='skill3' contenteditable><i>Add Technical skills competency3</i></div>
          <div class='divTableCell' id='skill4' contenteditable><i>Add Technical skills competency4</i></div>

          <div class='divTableCell' id='train_expose1' contenteditable><i>Add Training Exposure1</i></div>
          <div class='divTableCell' id='train_expose2' contenteditable><i>Add Training Exposure2</i></div>
          <div class='divTableCell' id='train_expose3' contenteditable><i>Add Training Exposure3</i></div>

          <div class='divTableCell' id='target_comp1' contenteditable><i>Add Target Company1</i></div>
          <div class='divTableCell' id='target_comp2' contenteditable><i>Add Target Company2</i></div>
          <div class='divTableCell' id='target_comp3' contenteditable><i>Add Target Company3</i></div>
          <div class='divTableCell' id='target_comp4' contenteditable><i>Add Target Company4</i></div>

          <div class='divTableCell' id='emer_name' contenteditable><i>Add Employer Name</i></div>
          <div class='divTableCell' id='emer_cont' contenteditable><i>Add Employer Contact no</i></div>

          <div class='divTableCell'>
            <button name='preregadd' id='preregadd' class='btn-success'> Add </button>
          </div>
        </div>";

  }

  else
  {
    $output .= "<div class='divTableRow'>
        <div class='divTableCell' id='studentNo' contenteditable><i>Add student number</i></div>
        <div class='divTableCell' id='ojt_lname' contenteditable><i>Add last name</i></div>
        <div class='divTableCell' id='ojt_fname' contenteditable><i>Add first name</i></div>
        <div class='divTableCell' id='ojt_mi' contenteditable><i>Add MI</i></div>
        <div class='divTableCell' id='prog_enr' contenteditable><i>Add program</i></div>
        <div class='divTableCell' id='pers_no' contenteditable><i>Add contact number</i></div>
        <div class='divTableCell' id='jbstrt_sign' contenteditable><i>If signed-up in Jobstreet (Yes/Not yet)</i></div>
        <div class='divTableCell' id='email_avail' contenteditable><i>Add email</i></div>
        <div class='divTableCell' id='yr_level' contenteditable><i>Add Year level</i></div>
        <div class='divTableCell' id='prac_subj' contenteditable><i>Practicum</i></div>
        <div class='divTableCell' id='hrs' contenteditable><i>Add Hours Required</i></div>

        <div class='divTableCell' id='skill1' contenteditable><i>Add Technical skills competency1</i></div>
        <div class='divTableCell' id='skill2' contenteditable><i>Add Technical skills competency2</i></div>
        <div class='divTableCell' id='skill3' contenteditable><i>Add Technical skills competency3</i></div>
        <div class='divTableCell' id='skill4' contenteditable><i>Add Technical skills competency4</i></div>

        <div class='divTableCell' id='train_expose1' contenteditable><i>Add Training Exposure1</i></div>
        <div class='divTableCell' id='train_expose2' contenteditable><i>Add Training Exposure2</i></div>
        <div class='divTableCell' id='train_expose3' contenteditable><i>Add Training Exposure3</i></div>

        <div class='divTableCell' id='target_comp1' contenteditable><i>Add Target Company1</i></div>
        <div class='divTableCell' id='target_comp2' contenteditable><i>Add Target Company2</i></div>
        <div class='divTableCell' id='target_comp3' contenteditable><i>Add Target Company3</i></div>
        <div class='divTableCell' id='target_comp4' contenteditable><i>Add Target Company4</i></div>

        <div class='divTableCell' id='emer_name' contenteditable><i>Add Employer Name</i></div>
        <div class='divTableCell' id='emer_cont' contenteditable><i>Add Employer Contact no</i></div>

        <div class='divTableCell'>
          <button name='preregadd' id='preregadd' class='btn-success'> Add </button>
        </div>
      </div>";
  }
  echo $output;


  ?>
