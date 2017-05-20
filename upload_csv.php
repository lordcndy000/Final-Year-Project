<?php

if(isset($_POST["upOj"]))
{
 $file = $_FILES['fileOj']['tmp_name'];
 $handle = fopen($file, "r");
 $c = 0;

 $del1 = "delete from ojt_tbl";
 $del2 = "delete from ago_tbl where user_type = 'OJT'";

 $delres1 = mysqli_query($db_conx, $del1);
 $delres2 = mysqli_query($db_conx, $del2);
 $row = 1;
 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
 {
 $ojtNum = $filesop[0];
 $ojtLname = $filesop[1];
 $ojtFname = $filesop[2];
 $ojtMi = $filesop[3];
 $ojtAdrrs = $filesop[4];
 $ojtEml = $filesop[5];
 $ojtConc = $filesop[6];
 $ojtPssw = $filesop[7];
 $ojtProg = $filesop[8];
 $ojtPracsj = $filesop[9];
 $ojtSect = $filesop[10];
 $ojtAdvs = $filesop[11];
 $ojtAvt = $filesop[12];

 $encrp = md5($ojtPssw);

 if($row == 1){
   $row++;
   continue;
 }
 $num = count($filesop);



 $sql = "INSERT INTO ojt_tbl VALUES(id,'$ojtNum','$ojtLname','$ojtFname','$ojtMi', '$ojtAdrrs','$ojtEml','$ojtConc','$ojtProg','$ojtPracsj','$ojtSect','$ojtAdvs','$ojtAvt','')";
 $sql2 = "insert into ago_tbl values(id,'$ojtNum','$ojtLname','$ojtFname','$ojtMi','$ojtAdrrs','$ojtEml','$ojtConc','$encrp','OJT','$ojtProg','$ojtSect','$ojtAvt')";

 $res = mysqli_query($db_conx, $sql2);
 $result = mysqli_query($db_conx, $sql);
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
