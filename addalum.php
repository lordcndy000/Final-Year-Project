<?php
include('db_conx.php');

$sqchk = "select studentNo from alumni_tbl where studentNo = '".$_POST["alumNo1"]."'";
$sqchkres = mysqli_query($db_conx, $sqchk);
$count = mysqli_num_rows($sqchkres);

if($count == 0)
{
$sql = "INSERT INTO alumni_tbl VALUES(id,'".$_POST["alumNo1"]."', '".$_POST["alumLname1"]."', '".$_POST["alumFname1"]."', '".$_POST["alumMi1"]."', '".$_POST["alumCrs1"]."', '".$_POST["alumYr1"]."', '".$_POST["alumAdd1"]."', '".$_POST["alumMail1"]."', '".$_POST["alumCont1"]."',year(now()))";
if(mysqli_query($db_conx, $sql))
{
     echo 'Data Inserted';
}
}
else{
  echo 'Alumni already on the list';
}
?>
