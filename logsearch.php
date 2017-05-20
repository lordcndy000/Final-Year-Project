<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM ojt_log WHERE studentNo  LIKE '%".$_POST["search"]."%' or prac_subj  LIKE '%".$_POST["search"]."%' or lastn LIKE '%".$_POST["search"]."%'or fname LIKE '%".$_POST["search"]."%'or mi LIKE '%".$_POST["search"]."%'or program LIKE '%".$_POST["search"]."%'or section LIKE '%".$_POST["search"]."%'or mob_no LIKE '%".$_POST["search"]."%'or name_comp LIKE '%".$_POST["search"]."%'or office_add LIKE '%".$_POST["search"]."%'or recipient_end LIKE '%".$_POST["search"]."%'or desig_recip LIKE '%".$_POST["search"]."%' or offc_tel LIKE '%".$_POST["search"]."%'or ojt_adv LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Student No</strong></div>
      <div class='divTableCell'><strong>Practicum Subject</strong></div>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Program</strong></div>
      <div class='divTableCell'><strong>Section</strong></div>
      <div class='divTableCell'><strong>Mobile No</strong></div>
      <div class='divTableCell'><strong>Name of the Company Student is to be Endorsed</strong></div>
      <div class='divTableCell'><strong>Office Address</strong></div>
      <div class='divTableCell'><strong>Recipient of Endorsement Letter</strong></div>
      <div class='divTableCell'><strong>Designation of the Recipient of Endorsement Letter</strong></div>
      <div class='divTableCell'><strong>Office Tel</strong></div>
      <div class='divTableCell'><strong>OJT Adviser</strong></div>
  </div>";

     while($row = mysqli_fetch_array($result))
     {

       $log_id = $row['log_id'];
       $studentNo = $row['studentNo'];
       $prac_subj = $row['prac_subj'];
       $lastn = $row['lastn'];
       $fname = $row['fname'];
       $mi = $row['mi'];
       $program = $row['program'];
       $section = $row['section'];
       $mob_no = $row['mob_no'];
       $name_comp = $row['name_comp'];
       $office_add = $row['office_add'];
       $recipient_end = $row['recipient_end'];
       $desig_recip = $row['desig_recip'];
       $offc_tel = $row['offc_tel'];
       $ojt_adv = $row['ojt_adv'];


       $output .=   "<div class='divTableRow'>
           <div class='divTableCell studentNo' data-id1=$log_id contenteditable>$studentNo</div>
           <div class='divTableCell prac_subj' data-id2=$log_id contenteditable>$prac_subj</div>
           <div class='divTableCell lastn' data-id3=$log_id contenteditable>$lastn</div>
           <div class='divTableCell fname' data-id4=$log_id contenteditable>$fname</div>
           <div class='divTableCell mi' data-id5=$log_id contenteditable>$mi</div>

           <div class='divTableCell program' data-id6=$log_id contenteditable>$program</div>
           <div class='divTableCell section' data-id7=$log_id contenteditable>$section</div>
           <div class='divTableCell mob_no' data-id8=$log_id contenteditable>$mob_no</div>
           <div class='divTableCell name_comp' data-id9=$log_id contenteditable>$name_comp</div>
           <div class='divTableCell office_add' data-id10=$log_id contenteditable>$office_add</div>

           <div class='divTableCell recipient_end' data-id11=$log_id contenteditable>$recipient_end</div>
           <div class='divTableCell desig_recip' data-id12=$log_id contenteditable>$desig_recip</div>
           <div class='divTableCell offc_tel' data-id13=$log_id contenteditable>$offc_tel</div>
           <div class='divTableCell ojt_adv' data-id14=$log_id contenteditable>$ojt_adv</div>


           <div class='divTableCell'>
             <button name='logxdel' id='logxdel' data-id15=$log_id> Delete </button>
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
