<?php

  if(isset($_POST['changepassgrad'])){

    $newpass = mysqli_real_escape_string($db_conx, $_POST["gradpass1"]);
    $confpass = mysqli_real_escape_string($db_conx, $_POST["gradpass2"]);

    $encrp = md5($confpass);

    $sql = "update ago_tbl set password = '$encrp' where studentNo = $gradstudNo";
    $result = mysqli_query($db_conx, $sql);

    if($result){
      echo "<script> alert('Password changed');
      window.location.assign('graduating.php')</script>";
    }
    else{
      echo mysqli_error($db_conx);
    }

  }

?>
