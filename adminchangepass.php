<?php
  if(isset($_POST["btnchangepass"]))
  {
    $firstpass = mysqli_real_escape_string($db_conx, $_POST["firstpass"]);
    $secpass = mysqli_real_escape_string($db_conx, $_POST["secpass"]);

    $encrpt = md5($secpass);

    $sql = "update admin_tbl set password ='$encrpt' where studentNo = $studNo";
    $res = mysqli_query($db_conx, $sql);

    $sql2 = "update ago_tbl set password = '$encrpt' where studentNo = $studNo";
    $res2 = mysqli_query($db_conx, $sql2);

    if($res && $res2)
    {
      echo "<script> alert('Password updated. Please login again');
      window.location.assign('logout.php')</script>";
    }
    else
    {
      echo mysqli_error($db_conx);
    }


  }




?>
