<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM alumni_tbl WHERE studentNo  LIKE '%".$_POST["search"]."%' or lastn LIKE '%".$_POST["search"]."%'or fname LIKE '%".$_POST["search"]."%'or mi LIKE '%".$_POST["search"]."%'or program LIKE '%".$_POST["search"]."%'or year_grad LIKE '%".$_POST["search"]."%'or cont LIKE '%".$_POST["search"]."%'or Email LIKE '%".$_POST["search"]."%'or Address LIKE '%".$_POST["search"]."%'";
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
      <div class='divTableCell'><strong>Year Graduated</strong></div>
      <div class='divTableCell'><strong>Address</strong></div>
      <div class='divTableCell'><strong>Email</strong></div>
      <div class='divTableCell'><strong>Contact</strong></div>
  </div>";


     while($row = mysqli_fetch_array($result))
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
           <div class='divTableCell lastn' data-id1=$aid contenteditable>$alumLname</div>
           <div class='divTableCell fname' data-id2=$aid contenteditable>$alumFname</div>
           <div class='divTableCell mi' data-id3=$aid contenteditable>$alumMi</div>
           <div class='divTableCell program' data-id4=$aid contenteditable>$alumCrs</div>
           <div class='divTableCell'>$alumyrgrad</div>
           <div class='divTableCell Address' data-id5=$aid contenteditable>$alumAdd</div>
           <div class='divTableCell Email' data-id6=$aid contenteditable>$alumMail</div>
           <div class='divTableCell cont' data-id7=$aid contenteditable>$alumCont</div>
           <div class='divTableCell'>
             <button name='alumrc_del' id='alumrc_del' data-id8=$aid> Delete </button>
           </div>

         </div>
           ";

     }
     echo $output;
}
else
{
     echo 'Data Not Found';
}
?>
