<?php

if(isset($_POST["upGrad"]))
{
 $file = $_FILES['fileGrad']['tmp_name'];
 $handle = fopen($file, "r");
 $c = 0;

 $del1 = "delete from grad_tbl";
 $del2 = "delete from ago_tbl where user_type = 'Graduating'";
 $del3 = "delete from job_assistance";
 $del4 = "delete from grad_exit_interview";

 $delres1 = mysqli_query($db_conx, $del1);
 $delres2 = mysqli_query($db_conx, $del2);
 $delres3 = mysqli_query($db_conx, $del3);
 $delres4 = mysqli_query($db_conx, $del4);
 $row = 1;
 while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
 {
 $gradNum = $filesop[0];
 $gradLname = $filesop[1];
 $gradFname = $filesop[2];
 $gradMi = $filesop[3];
 $gradAdrrs = $filesop[4];
 $gradEml = $filesop[5];
 $gradConc = $filesop[6];
 $gradPssw = $filesop[7];
 $gradProg = $filesop[8];
 $gradSect = $filesop[9];
 $gradAbt = $filesop[10];

 $encrp = md5($gradPssw);

 if($row == 1){
   $row++;
   continue;
 }
 $num = count($filesop);



 $sql = "INSERT INTO grad_tbl VALUES(id,'$gradNum','$gradLname','$gradFname','$gradMi', '$gradAdrrs','$gradEml','$gradConc','$gradProg','$gradSect','$gradAbt')";
 $sql2 = "insert into ago_tbl values(id,'$gradNum','$gradLname','$gradFname','$gradMi','$gradAdrrs','$gradEml','$gradConc','$encrp','Graduating','$gradProg','$gradSect','$gradAbt')";

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
