<?php
include('db_conx.php');

$sql = "DELETE FROM partner_confirm WHERE confirm_id = '".$_POST["id"]."'";
if(mysqli_query($db_conx, $sql))
{
     echo 'Account deleted';
}
else
{
  echo mysqli_error($db_conx);
}
?>
