<?php

include('db_conx.php');


$sql = "DELETE FROM ojtinitial WHERE initialid = '".$_POST["id"]."'";
$incom = "update ojtinitial set status = 'Incomplete'";
$incomre = mysqli_query($db_conx, $incom);
if(mysqli_query($db_conx, $sql))
{
     echo 'Initial requirement deleted';
}
?>
