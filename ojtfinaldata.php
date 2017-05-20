<?php
  include('session.php');

  $output = '';
 $sql = "SELECT * FROM ojtfinal where studentNo = $ojtstudNo";
 $result = mysqli_query($db_conx, $sql);

 if(mysqli_num_rows($result) > 0)
 {
      while($row = mysqli_fetch_array($result))
      {
        $finalid = $row["finalid"];
        $studinit = $row["studentNo"];
        $fileinit = $row["file"];
        $typeinit = $row["type"];
        $sizeinit = $row["size"];
        $status = $row["status"];
        $dateup = $row["dateuploaded"];

           $output .=
           "<div class='profileforms-box uploadfinalscont'>
             <div class='imginitial'></div>
             <p class='prereglabel'><a href='ojtuploads/final/$fileinit' target='_blank'>$fileinit</a> </p>
             <p class='prereglabel'>Date uploaded: $dateup</p>
             <button class='finaldelbtn' type='button' data-id1=$finalid>Delete</button>
           </div>";
        }
 }
 else
 {
      echo "<p class='prereglabel'>You haven't uploaded anything yet</p>";
 }

 echo $output;
 ?>
