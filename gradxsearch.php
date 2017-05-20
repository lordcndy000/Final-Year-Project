<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM grad_tbl WHERE studentNo  LIKE '%".$_POST["search"]."%' or lastn LIKE '%".$_POST["search"]."%'or fname LIKE '%".$_POST["search"]."%'or mi LIKE '%".$_POST["search"]."%'or Address LIKE '%".$_POST["search"]."%'or Email LIKE '%".$_POST["search"]."%'or cont LIKE '%".$_POST["search"]."%'or program LIKE '%".$_POST["search"]."%'or section LIKE '%".$_POST["search"]."%'";
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
        <div class='divTableCell'><strong>Section</strong></div>
        <div class='divTableCell'><strong>Address</strong></div>
        <div class='divTableCell'><strong>Email</strong></div>
        <div class='divTableCell'><strong>Contact</strong></div>
    </div>";


     while($row = mysqli_fetch_array($result))
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
         </div>";

     }
     echo $output;
}
else
{
     echo 'Data Not Found';
}
?>
