<?php
 //export.php
 if(isset($_POST["create_word"]))
 {
      if(empty($_POST["heading"]) || empty($_POST["description"]))
      {
           echo '<script>alert("Both Fields are required")</script>';
           echo '<script>window.location = "drag.php"</script>';
      }
      else
      {
           header("Content-type: application/vnd.ms-word");
           header("Content-Disposition: attachment;Filename=".rand().".doc");
           header("Pragma: no-cache");
           header("Expires: 0");
           echo $_POST["heading"];
           echo $_POST["description"];
      }
 }
 ?>
