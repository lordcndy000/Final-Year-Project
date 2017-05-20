<?php

include('db_conx.php');

$sqchek = "select studentNo from ojt_tbl where studentNo = '".$_POST["studNo"]."'";
$sqres = mysqli_query($db_conx, $sqchek);
$qrow = mysqli_fetch_array($sqres, MYSQLI_ASSOC);

$ojtNo = $qrow['studentNo'];

$countr = mysqli_num_rows($sqres);

if($countr == 0){

$pass = 'stinova123';
$encrptp = md5($pass);


$sql0 = "INSERT INTO ago_tbl VALUES(id,'".$_POST["studNo"]."', '".$_POST["studLname"]."', '".$_POST["studFname"]."', '".$_POST["studMi"]."', '".$_POST["studAdd"]."', '".$_POST["studMail"]."', '".$_POST["studCont"]."', '$encrptp', 'OJT', '".$_POST["studCrs"]."', '".$_POST["studSet"]."','none')";
$ago = mysqli_query($db_conx, $sql0);

 $sql = "INSERT INTO ojt_tbl VALUES(id,'".$_POST["studNo"]."', '".$_POST["studLname"]."', '".$_POST["studFname"]."', '".$_POST["studMi"]."', '".$_POST["studAdd"]."', '".$_POST["studMail"]."', '".$_POST["studCont"]."', '".$_POST["studCrs"]."', '".$_POST["pracsb"]."', '".$_POST["studSet"]."', '".$_POST["studAdvnm"]."','none')";
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
