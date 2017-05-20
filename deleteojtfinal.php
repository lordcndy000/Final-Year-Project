<?php

include('db_conx.php');


$sql = "DELETE FROM ojtfinal WHERE finalid = '".$_POST["id"]."'";
$incom = "update ojtfinal set status = 'Incomplete'";
$incomre = mysqli_query($db_conx, $incom);
if(mysqli_query($db_conx, $sql))
{
     echo 'Final requirement deleted';
}
?>
