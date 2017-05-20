<?php
include('session.php');

$output = '';
$sql = "SELECT * FROM grad_tbl where id = $gradid ";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
     while($row = mysqli_fetch_array($result))
     {
       $gradid = $row4['id'];
       $gradstudNo = $row4['studentNo'];
       $gradstudLname = $row4['lastn'];
       $gradstudFname = $row4['fname'];
       $gradstudMi = $row4['mi'];
       $gradstudAdd = $row4['Address'];
       $gradstudMail = $row4['Email'];
       $gradstudCont = $row4['cont'];
       $gradprog = $row4['program'];
       $gradsec = $row4['section'];
       $gradab = $row4['about'];


       $output .= "<div id='aluminfoscont'>
         <p class='strong1'><strong>Student Number</strong></p>
         <p class='weak' >$gradstudNo</p>
         <p class='strong1'><strong>Last name</strong></p>
         <p class='weak lastn' data-id1=$gradid contenteditable>$gradstudLname</p>
         <p class='strong1'><strong>First name</strong></p>
         <p class='weak fname' data-id2=$gradid contenteditable>$gradstudFname</p>
         <p class='strong1'><strong>Mi</strong></p>
         <p class='weak mi' data-id3=$gradid contenteditable>$gradstudMi</p>
         <p class='strong1'><strong>Address</strong></p>
         <p class='weak address' data-id4=$gradid contenteditable>$gradstudAdd</p>
         <p class='strong1'><strong>Contact number</strong></p>
         <p class='weak cont' data-id5=$gradid contenteditable>$gradstudCont</p>
         <p class='strong1'><strong>Program</strong></p>
         <p class='weak'>$gradprog</p>
         <p class='strong1'><strong>Section</strong></p>
         <p class='weak section' data-id8=$gradid>$gradsec</p>
         <p class='strong1'><strong>Email</strong></p>
         <p class='weak email' data-id6=$gradid contenteditable>$gradstudMail</p>
         <p class='strong1'><strong>About</strong></p>
         <p class='weak about' data-id7=$gradid contenteditable>$gradab</p>
       </div>
";
     }

}

echo $output;
?>
