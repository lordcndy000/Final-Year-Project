<?php

include('db_conx.php');


$sql = "DELETE FROM ojtperiodical WHERE periodid = '".$_POST["id"]."'";
$incom = "update ojtperiodical set status = 'Incomplete'";
$incomre = mysqli_query($db_conx, $incom);
if(mysqli_query($db_conx, $sql))
{
     echo 'Periodical requirement deleted';
}
?>
