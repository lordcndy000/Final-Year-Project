<?php


  if(isset($_POST['changepicalum']))
  {
    if(getimagesize($_FILES['file1']['tmp_name'])== FALSE)
    {
      echo "<script type='text/javascript'>alert('Please select an image');
      window.location.href= 'alumni.php';</script>";
    }
    else
    {
      $image= addslashes($_FILES['file1']['tmp_name']);
      $name= addslashes($_FILES['file1']['name']);
      $image= file_get_contents($image);
      $image= base64_encode($image);


    $qry = "update alumni_tbl set alum_pic = '$image' where studentNo = $studNo";
    $result = mysqli_query($db_conx, $qry);
    if($result)
    {
      echo "<script type='text/javascript'>alert('Image uploaded');
      window.location.href= 'alumni.php';</script>";
    }
    else
    {
      echo mysqli_error($db_conx);
    }
  }

}


?>
