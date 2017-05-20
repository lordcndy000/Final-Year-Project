<?php

include('db_conx.php');
$iddx = mysqli_real_escape_string ($db_conx, $_POST["id"]);
$output ='';
$sel = "select * from alumni_tbl where id = '".$iddx."'";
$result = mysqli_query($db_conx, $sel);

if(mysqli_num_rows($result) > 0) {
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
       $ajtpic = $row['alum_pic'];

      $output .= "<div id='otherprofilewrap'>
        <div id='firstimage'>
          <img src='data:image;base64,".$row['alum_pic']."' witdh='150px' height='150px' class='profileimg1'>
        </div>
        <div id='otherdetailswrap'>
          <strong> Full Name </strong>
          <p>$astudLname, $astudFname $astudMi.</p>
          <strong> Course </strong>
          <p>$astudCrs</p>
          <strong> Email </strong>
          <p> $astudMail</p>
          <p data-id3=$aid id='morebackal'> ◀ Back </p>
        </div>
      </div>
";
    }
  }
  else{
    echo 'Fail';
  }
  echo $output;
?>
