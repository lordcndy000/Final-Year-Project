<?php

include('db_conx.php');
$iddx = mysqli_real_escape_string ($db_conx, $_POST["id"]);
$output ='';
$sel = "select * from alumni_tbl where id = '".$iddx."'";
$result = mysqli_query($db_conx, $sel);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

       $oid = $row['id'];
       $ostudNo = $row['studentNo']; //a
       $ostudLname = $row['lastn']; //a
       $ostudFname = $row['fname'];//a
       $ostudMi = $row['mi'];//a
       $ostudAdd = $row['Address'];//a
       $ostudMail = $row['Email'];//a
       $ostudCont = $row['cont'];//
       $ostudCrs = $row['program'];//a
       $ostudSet = $row['section'];//
       $ostudAdvnm = $row['ojt_adv'];//a
       $opracsb = $row['prac_subj'];//a
       $ojtabout = $row['about'];//a
       $ojtpic = $row['ojt_pic'];

      $output .= "<div id='otherprofilewrap'>
        <div id='firstimage'>
          <img src='data:image;base64,".$row['ojt_pic']."' witdh='150px' height='150px' class='profileimg1'>
        </div>
        <div id='otherdetailswrap'>
          <strong> Full Name </strong>
          <p>$ostudLname, $ostudFname $ostudMi.</p>
          <strong> Course </strong>
          <p>$ostudCrs</p>
          <strong> Section </strong>
          <p>$ostudSet</p>
          <strong> Email </strong>
          <p> $ostudMail</p>
          <strong> Adviser Name </strong>
          <p> $ostudAdvnm </p>
          <p data-id2=$oid class='dasgb'> ◀ Back </p>
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
