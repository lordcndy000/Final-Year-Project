<?php
include('session.php');
  $sql = "select status from ojtfinal where studentNo = $ojtstudNo";
  $result = mysqli_query($db_conx, $sql);

  if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $ojstat = $row["status"];

  }
  echo "Status: $ojstat";
}
?>
