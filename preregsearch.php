<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM ojt_prereg WHERE studentNo  LIKE '%".$_POST["search"]."%' or lastn LIKE '%".$_POST["search"]."%'or fname LIKE '%".$_POST["search"]."%'or mi LIKE '%".$_POST["search"]."%'or program LIKE '%".$_POST["search"]."%'or pers_no LIKE '%".$_POST["search"]."%'or jbstrt_sign LIKE '%".$_POST["search"]."%'or email_avail LIKE '%".$_POST["search"]."%'or yr_level LIKE '%".$_POST["search"]."%'or prac_subj LIKE '%".$_POST["search"]."%'or hrs LIKE '%".$_POST["search"]."%' or skill1 LIKE '%".$_POST["search"]."%'or skill2 LIKE '%".$_POST["search"]."%' or skill3 LIKE '%".$_POST["search"]."%'or skill4 LIKE '%".$_POST["search"]."%' or train_expose1 LIKE '%".$_POST["search"]."%'or train_expose2 LIKE '%".$_POST["search"]."%' or train_expose3 LIKE '%".$_POST["search"]."%'or target_comp1 LIKE '%".$_POST["search"]."%'  or target_comp2 LIKE '%".$_POST["search"]."%'or target_comp3 LIKE '%".$_POST["search"]."%'  or target_comp4 LIKE '%".$_POST["search"]."%'or emer_name LIKE '%".$_POST["search"]."%' or emer_cont LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
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

     while($row = mysqli_fetch_array($result))
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
       echo $output;

  }

     else
     {
       echo 'Data Not Found';
     }

?>
