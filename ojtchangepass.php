<?php

  if(isset($_POST['changepassojt'])){

    $newpass = mysqli_real_escape_string($db_conx, $_POST["newpass"]);
    $confpass = mysqli_real_escape_string($db_conx, $_POST["confpass"]);

    $encrp = md5($confpass);

    $sql = "update ago_tbl set password = '$encrp' where studentNo = $ojtstudNo";
    $result = mysqli_query($db_conx, $sql);

    if($result){
      echo "<script> alert('Password changed');
      window.location.assign('ojt.php')</script>";
    }
    else{
      echo mysqli_error($db_conx);
    }

  }

?>
