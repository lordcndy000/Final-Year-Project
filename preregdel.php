<?php
   include('db_conx.php');

 $sql = "DELETE FROM ojt_prereg WHERE prereg_id = '".$_POST["id"]."'";
 if(mysqli_query($db_conx, $sql))
 {
      echo 'Data Deleted';
 }
 ?>
