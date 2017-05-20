<?php

   session_start();


      if(isset($_POST['comp_login'])) {
      // username and password sent from form

      $compLogN = mysqli_real_escape_string($db_conx, $_POST['compLogN']);
      $compLogP = mysqli_real_escape_string($db_conx, $_POST['compLogP']);

      $encrypt_password=md5($compLogP);

      $sql = "select * from partners_tbl where partner_username = '$compLogN' and partner_pass = '$encrypt_password'";
      $result = mysqli_query($db_conx, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $partner_id = $row['partner_id'];
      $partner_username = $row['partner_username'];
      $partner_email = $row['partner_email'];
      $partner_compN = $row['partner_compN'];
      $partner_compA = $row['partner_compA'];
      $partner_dateReg = $row['partner_dateReg'];
      $partner_about = $row['partner_about'];

      $count = mysqli_num_rows($result);

      // If result matched $stdntNo and $password, table row must be 1 row

      if($count == 1) {
         $_SESSION['partner_id'] = $partner_id;
         $_SESSION['partner_username'] = $partner_id;
         $_SESSION['partner_email'] = $partner_email;
         $_SESSION['partner_compN'] = $partner_compN;
         $_SESSION['partner_compA'] = $partner_compA;
         $_SESSION['partner_dateReg'] = $partner_dateReg;
         $_SESSION['partner_about'] = $partner_about;


         header("location: comp_page.php");
      }

      else {
         echo "<script type='text/javascript'>alert('Wrong username/password');
         window.location.href= 'index.php';</script>";

      }
   }

?>
