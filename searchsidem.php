<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM alumni_tbl WHERE studentNo LIKE '%".$_POST["search"]."%' or lastn LIKE '%".$_POST["search"]."%' or fname LIKE '%".$_POST["search"]."%' or mi LIKE '%".$_POST["search"]."%' or program LIKE '%".$_POST["search"]."%' or year_grad LIKE '%".$_POST["search"]."%'";
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
      $alumpic = $row['alum_pic'];

       $output .= "
       <div data-id=1$aid id='alumwidgetcont'>
         <img src='data:image;base64,".$row['alum_pic']."' width='50px' height='50px' class='imgcont'>
         <p>$astudFname $astudLname</p>
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
