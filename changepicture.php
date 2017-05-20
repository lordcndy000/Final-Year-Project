<?php


  if(isset($_POST['imageup']))
  {
    if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
    {
      echo "<script type='text/javascript'>alert('Please select an image');
      window.location.href= 'comp_page.php';</script>";
    }
    else
    {
      $image= addslashes($_FILES['image']['tmp_name']);
      $name= addslashes($_FILES['image']['name']);
      $image= file_get_contents($image);
      $image= base64_encode($image);


    $qry = "update partners_tbl set partner_pic = '$image' where partner_id = $partner_id";
    $result = mysqli_query($db_conx, $qry);
    if($result)
    {
      echo "<script type='text/javascript'>alert('Image uploaded');
      window.location.href= 'comp_page.php';</script>";
    }
    else
    {
      echo mysqli_error($db_conx);
    }
  }

}


?>
