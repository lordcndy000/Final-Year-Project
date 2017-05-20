<?php


  if(isset($_POST['imageup']))
  {
    if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
    {
      echo "<script type='text/javascript'>alert('Please select an image');
      window.location.href= 'ojt.php';</script>";
    }
    else
    {
      $image= addslashes($_FILES['image']['tmp_name']);
      $name= addslashes($_FILES['image']['name']);
      $image= file_get_contents($image);
      $image= base64_encode($image);


    $qry = "update ojt_tbl set ojt_pic = '$image' where studentNo = $studNo";
    $result = mysqli_query($db_conx, $qry);
    if($result)
    {
      echo "<script type='text/javascript'>alert('Image uploaded');
      window.location.href= 'ojt.php';</script>";
    }
    else
    {
      echo mysqli_error($db_conx);
    }
  }

}


?>
