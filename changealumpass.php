<?php

  if(isset($_POST['changepassalum'])){

    $newpass = mysqli_real_escape_string($db_conx, $_POST["alpass1"]);
    $confpass = mysqli_real_escape_string($db_conx, $_POST["alpass1"]);

    $encrp = md5($confpass);

    $sql = "update ago_tbl set password = '$encrp' where studentNo = $alumstudNo";
    $result = mysqli_query($db_conx, $sql);

    if($result){
      echo "<script> alert('Password changed');
      window.location.assign('alumni.php')</script>";
    }
    else{
      echo mysqli_error($db_conx);
    }

  }

?>
