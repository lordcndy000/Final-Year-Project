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
          $pusername = $row['partner_username'];
          $pemail = $row['partner_email'];
          $pcompN = $row['partner_compN'];
          $pcompA = $row['partner_compA'];
          $pdateReg = $row['partner_dateReg'];
          $pcont = $row['partner_cont'];
          $ppas = $row['partner_pass'];

             $output .= "
             <p class='about'> Company Details </p>

             <div class='divTable'>
               <div class='divTableBody'>
                 <div class='divTableRow'>
                   <div class='divTableCell'>Company Name:</div>
                   <div class='divTableCell partner_compN' data-id11=$partid contenteditable>$pcompN</div>
                 </div>
                 <div class='divTableRow'>
                   <div class='divTableCell'>Address:</div>
                   <div class='divTableCell partner_compA' data-id12=$partid contenteditable>$pcompA</div>
                 </div>
                 <div class='divTableRow'>
                   <div class='divTableCell'>Date Registered:</div>
                   <div class='divTableCell'>$pdateReg</div>
                 </div>
                 <div class='divTableRow'>
                   <div class='divTableCell'>Username:</div>
                   <div class='divTableCell partner_username' data-id13=$partid contenteditable>$pusername</div>
                 </div>
                 <div class='divTableRow'>
                   <div class='divTableCell'>Email:</div>
                   <div class='divTableCell partner_email' data-id14=$partid contenteditable>$pemail</div>
                 </div>
                 <div class='divTableRow'>
                   <div class='divTableCell'>Contact Details:</div>
                   <div class='divTableCell partner_cont' data-id15=$partid contenteditable>$pcont</div>
                 </div>

                


               </div>

             </div>";
        }

   }


   echo $output;
 ?>
