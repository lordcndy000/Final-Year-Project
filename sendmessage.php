
<?php
include('messageselected.php');

$sql = "INSERT INTO private_messages VALUES(pm_id, $astudNo, 'Admin', now(), '".$_POST["title"]."', '".$_POST["message"]."')";
if(mysqli_query($db_conx, $sql))
{
     echo 'Message sent';
}
else
{
  echo mysqli_error($db_conx);
}
?>
