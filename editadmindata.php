<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM admin_tbl";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
     while($row = mysqli_fetch_array($result))
     {
       $adminid = $row['adminid'];
       $adlastn = $row['lastn'];
       $adfn = $row['fname'];
       $admi = $row['mi'];
       $adusern = $row['studentNo'];


          $output .= "
          <strong>Last name</strong>
          <p contenteditable data-id1=$adminid class='adlastn'>$adlastn</p>
          <strong>First name</strong>
          <p contenteditable data-id2=$adminid class='adfn'>$adfn</p>
          <strong>MI</strong>
          <p contenteditable data-id3=$adminid class='admi'>$admi</p>
          <strong>Username</strong>
          <p contenteditable data-id4=$adminid class='adusern'>$adusern</p>
          ";
     }

}

echo $output;
?>
