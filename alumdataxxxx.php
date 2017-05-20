<?php
include('session.php');

$output = '';
$sql = "SELECT * FROM alumni_tbl where id = $alumid ";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
     while($row = mysqli_fetch_array($result))
     {
       $aid = $row['id'];
       $astudNo = $row['studentNo']; //a
       $astudLname = $row['lastn']; //a
       $astudFname = $row['fname'];//a
       $astudMi = $row['mi'];//a
       $astudAdd = $row['Address'];//a
       $astudMail = $row['Email'];//a
       $astudCont = $row['cont'];//
       $astudCrs = $row['program'];//a
       $ajtabout = $row['about'];//a
       $ayeargrad = $row['year_grad'];

       $output .= "<div id='aluminfoscont'>
         <p class='strong1'><strong>Student Number</strong></p>
         <p class='weak' >$astudNo</p>
         <p class='strong1'><strong>Last name</strong></p>
         <p class='weak lastn' data-id1=$aid contenteditable>$astudLname</p>
         <p class='strong1'><strong>First name</strong></p>
         <p class='weak fname' data-id2=$aid contenteditable>$astudFname</p>
         <p class='strong1'><strong>Mi</strong></p>
         <p class='weak mi' data-id3=$aid contenteditable>$astudMi</p>
         <p class='strong1'><strong>Address</strong></p>
         <p class='weak address' data-id4=$aid contenteditable>$astudAdd</p>
         <p class='strong1'><strong>Contact number</strong></p>
         <p class='weak cont' data-id5=$aid contenteditable>$astudCont</p>
         <p class='strong1'><strong>Program</strong></p>
         <p class='weak'>$astudCrs</p>
         <p class='strong1'><strong>Year graduated</strong></p>
         <p class='weak'>$ayeargrad</p>
         <p class='strong1'><strong>Email</strong></p>
         <p class='weak email' data-id6=$aid contenteditable>$astudMail</p>
         <p class='strong1'><strong>About</strong></p>
         <p class='weak about' data-id7=$aid contenteditable>$ajtabout</p>
       </div>
";
     }

}

echo $output;
?>
