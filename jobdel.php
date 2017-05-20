<?php

include('db_conx.php');


$sql1 = "DELETE FROM job_posts WHERE job_id =  '".$_POST["id"]."'";

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
