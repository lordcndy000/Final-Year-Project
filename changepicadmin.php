<?php


  if(isset($_POST['btnchangepic']))
  {
    if(getimagesize($_FILES['changeadminpic']['tmp_name'])== FALSE)
    {
      echo "<script type='text/javascript'>alert('Please select an image');
      window.location.href= 'admin.php';</script>";
    }
    else
    {
      $image= addslashes($_FILES['changeadminpic']['tmp_name']);
      $name= addslashes($_FILES['changeadminpic']['name']);
      $image= file_get_contents($image);
      $image= base64_encode($image);


    $qry = "update admin_tbl set admin_pic = '$image' where studentNo = $studNo";
    $result = mysqli_query($db_conx, $qry);
    if($result)
    {
      echo "<script type='text/javascript'>alert('Image uploaded');
      window.location.href= 'admin.php';</script>";
    }
    else
    {
      echo mysqli_error($db_conx);
    }
  }

}


?>
