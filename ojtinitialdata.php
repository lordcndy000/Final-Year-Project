<?php
  include('session.php');

  $output = '';
 $sql = "SELECT * FROM ojtinitial where studentNo = $ojtstudNo";
 $result = mysqli_query($db_conx, $sql);

 if(mysqli_num_rows($result) > 0)
 {
      while($row = mysqli_fetch_array($result))
      {
        $initialid = $row["initialid"];
        $studinit = $row["studentNo"];
        $fileinit = $row["file"];
        $typeinit = $row["type"];
        $sizeinit = $row["size"];
        $status = $row["status"];
        $dateup = $row["dateuploaded"];

           $output .=
           "<div class='profileforms-box uploadinitialscont'>
             <div class='imginitial'></div>
             <p class='prereglabel'><a href='ojtuploads/initial/$fileinit' target='_blank'>$fileinit</a> </p>
             <p class='prereglabel'>Date uploaded: $dateup</p>
             <button class='initdelbtn' type='button' data-id1=$initialid>Delete</button>
           </div>";
      }
 }
 else
 {
      echo "<p class='prereglabel'>You haven't uploaded anything yet</p>";
 }

 echo $output;
 ?>
