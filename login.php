<?php
   include("db_conx.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      if(isset($_POST['submit'])) {
      // username and password sent from form

      $stdntNo = mysqli_real_escape_string($db_conx, $_POST['stdntNo']);
      $password = mysqli_real_escape_string($db_conx, $_POST['password']);
      $encrypt_password=md5($password);


      $sql = "SELECT * FROM ago_tbl WHERE studentNo = '$stdntNo' and password = '$encrypt_password' or lastn = '$stdntNo' and password = '$encrypt_password'";
      $result = mysqli_query($db_conx, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
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
      $studSec = $row['section'];
      $studAbt = $row['about'];

      $count = mysqli_num_rows($result);

      // If result matched $stdntNo and $password, table row must be 1 row

      if($count == 1 & $studUse == 'Admin') {
         $_SESSION['id'] = $id;
         $_SESSION['stud_no'] = $studNo;
         $_SESSION['mi'] = $studMi;
         $_SESSION['fname'] = $studFname;
         $_SESSION['lastn'] = $studLname;
         $_SESSION['stud_add'] = $studAdd;
         $_SESSION['stud_mail'] = $studMail;
         $_SESSION['stud_cont'] = $studCont;
         $_SESSION['stud_use'] = $studUse;
         $_SESSION['stud_crs'] = $studCrs;
         $_SESSION['section'] = $studSec;
         $_SESSION['about'] = $studAbt;

         header("location: admin.php");
      }
      else if($count == 1 & ($studUse == 'Alumni')){
        $_SESSION['id'] = $id;
        $_SESSION['stud_no'] = $studNo;
        $_SESSION['mi'] = $studMi;
        $_SESSION['fname'] = $studFname;
        $_SESSION['lastn'] = $studLname;
        $_SESSION['stud_add'] = $studAdd;
        $_SESSION['stud_mail'] = $studMail;
        $_SESSION['stud_cont'] = $studCont;
        $_SESSION['stud_use'] = $studUse;
        $_SESSION['stud_crs'] = $studCrs;
        $_SESSION['section'] = $studSec;
        $_SESSION['about'] = $studAbt;
        

        header("location: alumni.php");
      }
      else if($count == 1 & ($studUse == 'Graduating')){
        $_SESSION['id'] = $id;
        $_SESSION['stud_no'] = $studNo;
        $_SESSION['mi'] = $studMi;
        $_SESSION['fname'] = $studFname;
        $_SESSION['lastn'] = $studLname;
        $_SESSION['stud_add'] = $studAdd;
        $_SESSION['stud_mail'] = $studMail;
        $_SESSION['stud_cont'] = $studCont;
        $_SESSION['stud_use'] = $studUse;
        $_SESSION['stud_crs'] = $studCrs;
        $_SESSION['section'] = $studSec;
        $_SESSION['about'] = $studAbt;

        header("location: graduating.php");

      }
      else if($count == 1 & ($studUse == 'OJT')){
        $_SESSION['id'] = $id;
        $_SESSION['stud_no'] = $studNo;
        $_SESSION['mi'] = $studMi;
        $_SESSION['fname'] = $studFname;
        $_SESSION['lastn'] = $studLname;
        $_SESSION['stud_add'] = $studAdd;
        $_SESSION['stud_mail'] = $studMail;
        $_SESSION['stud_cont'] = $studCont;
        $_SESSION['stud_use'] = $studUse;
        $_SESSION['stud_crs'] = $studCrs;
        $_SESSION['section'] = $studSec;
        $_SESSION['about'] = $studAbt;

        header("location: ojt.php");
      }

      else if($count == 1 & ($studUse == 'OJT Adviser')){
        $_SESSION['id'] = $id;
        $_SESSION['stud_no'] = $studNo;
        $_SESSION['mi'] = $studMi;
        $_SESSION['fname'] = $studFname;
        $_SESSION['lastn'] = $studLname;
        $_SESSION['stud_add'] = $studAdd;
        $_SESSION['stud_mail'] = $studMail;
        $_SESSION['stud_cont'] = $studCont;
        $_SESSION['stud_use'] = $studUse;
        $_SESSION['stud_crs'] = $studCrs;
        $_SESSION['section'] = $studSec;
        $_SESSION['about'] = $studAbt;

        header("location: adv_page.php");
      }
      else {
         echo "<script type='text/javascript'>alert('Wrong username/password');
         window.location.href= 'index.php';</script>";

      }
   }
 }
?>
