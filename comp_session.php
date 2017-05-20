<?php
   include('db_conx.php');
   session_start();

   $user_check = $_SESSION['partner_compN'];

   $ses_sql = mysqli_query($db_conx,"select * from partners_tbl where partner_compN  = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

   $partner_id = $row['partner_id'];
   $partner_username = $row['partner_username'];
   $partner_email = $row['partner_email'];
   $partner_compN = $row['partner_compN'];
   $partner_compA = $row['partner_compA'];
   $partner_dateReg = $row['partner_dateReg'];
   $partner_about = $row['partner_about'];
   $partner_cont = $row['partner_cont'];

   if(!isset($_SESSION['partner_id'])){
      header("location:index.php");
   }


?>
