<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM ojt_tbl WHERE studentNo  LIKE '%".$_POST["search"]."%' or lastn LIKE '%".$_POST["search"]."%'or fname LIKE '%".$_POST["search"]."%'or mi LIKE '%".$_POST["search"]."%'or Address LIKE '%".$_POST["search"]."%'or Email LIKE '%".$_POST["search"]."%'or cont LIKE '%".$_POST["search"]."%'or program LIKE '%".$_POST["search"]."%'or prac_subj LIKE '%".$_POST["search"]."%'or section LIKE '%".$_POST["search"]."%'or ojt_adv LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
     $output .= "<div class='divTable'>
      <div class='divTableBody'>
        <div class='divTableRow1'>
         <div class='divTableCell'>Student No.</div>
         <div class='divTableCell'>Last Name</div>
         <div class='divTableCell'>First Name</div>
         <div class='divTableCell'>MI</div>
         <div class='divTableCell'>Program</div>
         <div class='divTableCell'>Practicum</div>
         <div class='divTableCell'>Section</div>
         <div class='divTableCell'>Adviser</div>
         <div class='divTableCell'>Address</div>
         <div class='divTableCell'>Email</div>
         <div class='divTableCell'>Contact</div>
     </div>";

     while($row = mysqli_fetch_array($result))
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
           <div class='divTableCell ojt_adv'  data-id8=$id contenteditable>$studAdvnm</div>
           <div class='divTableCell Address'  data-id9=$id contenteditable>$studAdd</div>
           <div class='divTableCell Email'  data-id10=$id contenteditable>$studMail</div>
           <div class='divTableCell cont'  data-id11=$id contenteditable>$studCont</div>
           <div class='divTableCell'>
             <button name='ojtrc_del' id='ojtrc_del' data-id12=$id> Delete </button>
             <button name='ojt_reqs' id='ojt_reqs' data-id13=$id> View Requirements </button>
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
