<?php
include('session.php');

 $file = rand(1000,100000)."-".$_FILES['file-2']['name'];
 $file_loc = $_FILES['file-2']['tmp_name'];
 $file_size = $_FILES['file-2']['size'];
 $file_type = $_FILES['file-2']['type'];
 $folder="ojtuploads/periodical/";

 // new file size in KB
 $new_size = $file_size/1024;
 // new file size in KB



 $final_file=str_replace('','-',$file);

 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $check = "select status from ojtinitial where studentNo = $ojtstudNo";
  $rescheck = mysqli_query($db_conx, $check);
  $fetch = mysqli_fetch_array($rescheck);

  $statval = $fetch["status"];

  if($statval == 'Complete')
  {

  $sql="INSERT INTO ojtperiodical VALUES(periodid,'$ojtstudNo','$final_file','$file_type','$new_size','Incomplete',now())";
  $result = mysqli_query($db_conx, $sql);

  if($result){
  echo 'Record uploaded succesfully';
  }
  else{
    echo mysqli_error($db_conx);
  }
 }

 else{
   echo "You are not yet allowed to submit here. Please complete Initial requirements first";
 }
 }
 else
 {
  echo 'Upload Failed';
 }


?>
