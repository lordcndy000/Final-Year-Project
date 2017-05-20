<?php

if(isset($_POST["upadv"]))
{
 $file = $_FILES['fileadv']['tmp_name'];
 $handle = fopen($file, "r");
 $c = 0;


 $del1 = "delete from ojtadv";
 $del2 = "delete from ago_tbl where user_type = 'OJT Adviser'";
 $delres1 = mysqli_query($db_conx, $del1);
 $delres2 = mysqli_query($db_conx, $del2);

 $row = 1;
 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
 {
 $advLname = $filesop[0];
 $advFname = $filesop[1];
 $advMi = $filesop[2];
 $advPssw = $filesop[3];
 $advProg = $filesop[4];
 $advAdrrs = $filesop[5];
 $advEml = $filesop[6];
 $advConc = $filesop[7];
 $advAbt = $filesop[8];

 $encrp = md5($advPssw);


 if($row == 1){
   $row++;
   continue;
 }
 $num = count($filesop);

 $sql2 = "insert into ago_tbl values(id,'none','$advLname','$advFname','$advMi','$advAdrrs','$advEml','$advConc','$encrp','OJT Adviser','$advProg','n/a','$advAbt')";

 $sql = "INSERT INTO ojtadv VALUES(idojtadv,'$advLname','$advFname','$advMi', '$encrp','$advProg','$advAdrrs','$advEml','$advConc','$advAbt')";

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
