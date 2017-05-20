<?php
include ('session.php');

$sql = "INSERT INTO job_placement_monitoring VALUES(placement_id, $alumstudNo, '$alumstudLname', '$alumstudFname', '$alumstudMi', '".$_POST["contactNum"]."', '".$_POST["emailAdr"]."', '".$_POST["statx"]."', '".$_POST["institute"]."', '".$_POST["posTit"]."', '".$_POST["industry"]."', '".$_POST["sbCls"]."', '".$_POST["dateHrd"]."', '".$_POST["remarks"]."')";
if(mysqli_query($db_conx, $sql))
{
     echo 'Form submitted';
}
else
{
  echo mysqli_error($db_conx);
}
?>
