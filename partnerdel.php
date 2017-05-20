<?php

include('db_conx.php');


$sql1 = "DELETE FROM partners_tbl WHERE partner_id =  '".$_POST["id"]."'";

$res2 = mysqli_query($db_conx, $sql1);

if($res2)
{
     echo 'Record deleted';
}
else
{
  echo 'Fail';
}
?>
