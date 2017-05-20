<?php
include('session.php');

 $file = rand(1000,100000)."-".$_FILES['file-1']['name'];
 $file_loc = $_FILES['file-1']['tmp_name'];
 $file_size = $_FILES['file-1']['size'];
 $file_type = $_FILES['file-1']['type'];
 $folder="ojtuploads/initial/";

 // new file size in KB
 $new_size = $file_size/1024;
 // new file size in KB



 $final_file=str_replace('','-',$file);

 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO ojtinitial VALUES(initialid,'$ojtstudNo','$final_file','$file_type','$new_size','Incomplete',now())";
  $result = mysqli_query($db_conx, $sql);

  if($result){
  echo 'Record uploaded succesfully';
  }
  else{
    echo mysqli_error($db_conx);
  }
 }
 else
 {
  echo 'Upload Failed';
 }


?>
