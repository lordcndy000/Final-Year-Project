<?php
   include('db_conx.php');
   session_start();

   $user_check = $_SESSION['stud_no'];

   $ses_sql = mysqli_query($db_conx,"select * from ago_tbl where studentNo = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

   $id = $row['id'];
   $studNo = $row['studentNo'];
   $studLname = $row['lastn'];
   $studFname = $row['fname'];
   $studMi = $row['mi'];
   $studAdd = $row['Address'];
   $studMail = $row['Email'];
   $studCont = $row['cont'];
   $studUse = $row['user_type'];
   $studCrs = $row['program'];
   $studAb = $row['about'];
   $studSec = $row['section'];

  $ses_sql2 = mysqli_query($db_conx,"select * from ojt_tbl where studentNo = '$user_check' ");

  $row2 = mysqli_fetch_array($ses_sql2, MYSQLI_ASSOC);

  $ojtid = $row2['id'];
  $ojtstudNo = $row2['studentNo'];
  $ojtstudLname = $row2['lastn'];
  $ojtstudFname = $row2['fname'];
  $ojtstudMi = $row2['mi'];
  $ojtstudAdd = $row2['Address'];
  $ojtstudMail = $row2['Email'];
  $ojtstudCont = $row2['cont'];
  $ojtprog = $row2['program'];
  $ojtpract = $row2['prac_subj'];
  $ojtsectx = $row2['section'];
  $ojtadvsr = $row2['ojt_adv'];
  $ojtab = $row2['about'];

   if(!isset($_SESSION['stud_no'])){
      header("location:index.php");
   }

   $ses_sql3 = mysqli_query($db_conx,"select * from alumni_tbl where studentNo = '$user_check' ");

   $row3 = mysqli_fetch_array($ses_sql3, MYSQLI_ASSOC);

   $alumid = $row3['id'];
   $alumstudNo = $row3['studentNo'];
   $alumstudLname = $row3['lastn'];
   $alumstudFname = $row3['fname'];
   $alumstudMi = $row3['mi'];
   $alumstudAdd = $row3['Address'];
   $alumstudMail = $row3['Email'];
   $alumstudCont = $row3['cont'];
   $alumprog = $row3['program'];
   $alumab = $row3['about'];
   $alumyeargr = $row3['year_grad'];


    if(!isset($_SESSION['stud_no'])){
       header("location:index.php");
    }

    $ses_sql4 = mysqli_query($db_conx,"select * from grad_tbl where studentNo = '$user_check' ");

    $row4 = mysqli_fetch_array($ses_sql4, MYSQLI_ASSOC);

    $gradid = $row4['id'];
    $gradstudNo = $row4['studentNo'];
    $gradstudLname = $row4['lastn'];
    $gradstudFname = $row4['fname'];
    $gradstudMi = $row4['mi'];
    $gradstudAdd = $row4['Address'];
    $gradstudMail = $row4['Email'];
    $gradstudCont = $row4['cont'];
    $gradprog = $row4['program'];
    $gradsec = $row4['section'];
    $gradab = $row4['about'];



     if(!isset($_SESSION['stud_no'])){
        header("location:index.php");
     }




   $sql = mysqli_query($db_conx,"select * from announce_tbl");

   while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){

   $title = $row['ann_title'];
   $date = $row['ann_date'];
   $cont = $row['ann_cont'];
   $by = $row['ann_by'];
 }
