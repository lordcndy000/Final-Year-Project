<?php

include('db_conx.php');


$iddx = mysqli_real_escape_string ($db_conx, $_POST["id"]);
$output ='';
$sel = "select * from alumni_tbl where id = '".$iddx."'";
$result = mysqli_query($db_conx, $sel);


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
    $alumpic = $row['alum_pic'];

     $output .= "
     <p><strong>Title</strong></p>
     <input type='text' id='title' class='messagecontent' placeholder='Type message here'>
     <p><strong>Content</strong</p>
     <textarea name='messagecontent' id='message' class='messagecontent'  placeholder='Type message here'></textarea>
     <button type='submit' data-id4=$aid class='send_message' id='send_message'>
     ";
}
echo $output;




?>
