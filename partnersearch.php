<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM partners_tbl WHERE partner_id  LIKE '%".$_POST["search"]."%' or partner_username LIKE '%".$_POST["search"]."%'or partner_email LIKE '%".$_POST["search"]."%'or partner_compN LIKE '%".$_POST["search"]."%'or partner_compA LIKE '%".$_POST["search"]."%'or partner_dateReg LIKE '%".$_POST["search"]."%'or partner_about LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
  $output .= "<div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Partner ID</strong></div>
      <div class='divTableCell'><strong>Username</strong></div>
      <div class='divTableCell'><strong>Email</strong></div>
      <div class='divTableCell'><strong>Company Name</strong></div>
      <div class='divTableCell'><strong>Company Address</strong></div>
      <div class='divTableCell'><strong>Date Registered</strong></div>
      <div class='divTableCell'><strong>About the Company</strong></div>
  </div>";

     while($row = mysqli_fetch_array($result))
     {

               $partner_id = $row['partner_id'];
               $partner_username = $row['partner_username'];
               $partner_email = $row['partner_email'];
               $partner_compN = $row['partner_compN'];
               $partner_compA = $row['partner_compA'];
               $partner_dateReg = $row['partner_dateReg'];
               $partner_about = $row['partner_about'];


                   $output .=   "<div class='divTableRow'>
                       <div class='divTableCell'>$partner_id</div>
                       <div class='divTableCell partner_username' data-id1=$partner_id contenteditable>$partner_username</div>
                       <div class='divTableCell partner_email' data-id2=$partner_id contenteditable>$partner_email</div>
                       <div class='divTableCell partner_compN' data-id3=$partner_id contenteditable>$partner_compN</div>
                       <div class='divTableCell partner_compA' data-id4=$partner_id contenteditable>$partner_compA</div>
                       <div class='divTableCell'>$partner_dateReg</div>
                       <div class='divTableCell partner_about' data-id5=$partner_id contenteditable>$partner_about</div>

                       <div class='divTableCell'>
                         <button name='partner_del' id='partner_del' data-id6=$partner_id> Delete </button>
                       </div>

                       <div class='divTableCell'>
                         <p name='partner_post' id='partner_post' data-id7=$partner_id> View Job Posts by this company </p>
                       </div>


                     </div>
                      </div>";
             }


     echo $output;
}
else
{
     echo 'Data Not Found';
}
?>
