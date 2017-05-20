<?php

include('db_conx.php');
$output ='';
$sel = "select partner_compN, partner_pic from partners_tbl";
$result = mysqli_query($db_conx, $sel);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

       $jobpostby = $row['partner_compN'];
       $partnerpic = $row['partner_pic'];

      $output .= "  <div id='emplistcont'>
          <img src='data:image;base64,".$row['partner_pic']."' width='95px' height='95px' alt='No image yet' class='compimagecont2'>
          <p id='emplabel'> $jobpostby</p>
        </div>";
    }
  }
  else{
    echo 'Fail';
  }
  echo $output;
?>
