<?php

include('db_conx.php');

$sqchek = "select studentNo from grad_tbl where studentNo = '".$_POST["gradNo"]."'";
$sqres = mysqli_query($db_conx, $sqchek);
$qrow = mysqli_fetch_array($sqres, MYSQLI_ASSOC);

$gradNo = $qrow['studentNo'];

$countr = mysqli_num_rows($sqres);

if($countr == 0){

$pass = 'stinova123';
$encrptp = md5($pass);


$sql0 = "INSERT INTO ago_tbl VALUES(id,'".$_POST["gradNo"]."', '".$_POST["gradLname"]."', '".$_POST["gradFname"]."', '".$_POST["gradMi"]."', '".$_POST["gradAdd"]."', '".$_POST["gradMail"]."', '".$_POST["gradCont"]."', '$encrptp', 'Graduating', '".$_POST["gradCrs"]."', '".$_POST["gradSet"]."','none')";
$ago = mysqli_query($db_conx, $sql0);

 $sql = "INSERT INTO grad_tbl VALUES(id,'".$_POST["gradNo"]."', '".$_POST["gradLname"]."', '".$_POST["gradFname"]."', '".$_POST["gradMi"]."', '".$_POST["gradAdd"]."', '".$_POST["gradMail"]."', '".$_POST["gradCont"]."', '".$_POST["gradCrs"]."', '".$_POST["gradSet"]."','none')";
 if(mysqli_query($db_conx, $sql))
 {
      echo 'Data Inserted';
 }
 else
 {
   echo 'fail';
 }
}else{

  echo 'Student number is existing';

}

?>
