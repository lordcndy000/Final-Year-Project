<?php
  include('session.php');

  $output = '';
 $sql = "SELECT * FROM ojtperiodical where studentNo = $ojtstudNo";
 $result = mysqli_query($db_conx, $sql);

 if(mysqli_num_rows($result) > 0)
 {
      while($row = mysqli_fetch_array($result))
      {
        $periodid = $row["periodid"];
        $studinit = $row["studentNo"];
        $fileinit = $row["file"];
        $typeinit = $row["type"];
        $sizeinit = $row["size"];
        $status = $row["status"];
        $dateup = $row["dateuploaded"];

           $output .=
           "<div class='profileforms-box uploadperiodscont'>
             <div class='imginitial'></div>
             <p class='prereglabel'><a href='ojtuploads/periodical/$fileinit' target='_blank'>$fileinit</a> </p>
             <p class='prereglabel'>Date uploaded: $dateup</p>
             <button class='perioddelbtn' type='button' data-id1=$periodid>Delete</button>
           </div>";
        }
 }
 else
 {
      echo "<p class='prereglabel'>You haven't uploaded anything yet</p>";
 }

 echo $output;
 ?>
