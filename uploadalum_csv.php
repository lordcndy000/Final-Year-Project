<?php

if(isset($_POST["upAlum"]))
{
 $file = $_FILES['fileAlum']['tmp_name'];
 $handle = fopen($file, "r");
 $c = 0;

 $row = 1;
 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
 {
 $alumNum = $filesop[0];
 $alumLname = $filesop[1];
 $alumFname = $filesop[2];
 $alumMi = $filesop[3];
 $alumAdrrs = $filesop[4];
 $alumEml = $filesop[5];
 $alumConc = $filesop[6];
 $alumPssw = $filesop[7];
 $alumProg = $filesop[8];
 $yrGrad = $filesop[9];
 $alumAbt = $filesop[10];

 if($row == 1){
   $row++;
   continue;

 }
 $encrp = md5($alumPssw);
 $num = count($filesop);

 $sql2 = "insert into ago_tbl values(id,'$alumNum','$alumLname','$alumFname','$alumMi','$alumAdrrs','$alumEml','$alumConc','$encrp','Alumni','$alumProg','n/a','none')";

 $sql = "INSERT INTO alumni_tbl VALUES(id,'$alumNum','$alumLname','$alumFname','$alumMi', '$alumAdrrs','$alumEml','$alumConc','$alumProg','$alumAbt','$yrGrad')";

 $res = mysqli_query($db_conx, $sql);
 $res2 = mysqli_query($db_conx, $sql2);
 }

 if($res !=1){
   echo "<script type='text/javascript'>alert('fail');
   window.location.href= 'admin.php';</script>";
 }else{
   echo "<script type='text/javascript'>alert('Records uploaded succesfully');
   window.location.href= 'admin.php';</script>";
 }
}

?>
