<?php

  include('comp_session.php');

   $sql = "SELECT * FROM partners_tbl where partner_id = '$partner_id'";
   $result = mysqli_query($db_conx, $sql);
   $output = '';
   if(mysqli_num_rows($result) > 0)
   {
        while($row = mysqli_fetch_array($result))
        {
          $partid = $row['partner_id'];
          $about = $row['partner_about'];

             $output .= "
             <p class='comp_abt' contenteditable data-id1=$partid>$about</p>
             ";
        }

   }

   echo $output;
 ?>
