<?php

include('db_conx.php');


$record_per_page = 2;
$page = '';
$output = '';
if(isset($_POST["page"]))
{
  $page = $_POST["page"];
}
else
{
  $page = 1;
}
$start_from = ($page - 1) * $record_per_page;
$sql = "select * from partner_confirm order by confirm_id desc limit $start_from, $record_per_page ";
$result = mysqli_query($db_conx, $sql);

$countrows = mysqli_query($db_conx, "select * from partner_confirm");
$count = mysqli_num_rows($countrows);



$output .= "<p class='partconBanner'> Confirm Partner's Account: $count record(s)</p>";


if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

       $confirm_id = $row['confirm_id']; //this
       $pconfirm_username = $row['pconfirm_username'];
       $pconfirm_email = $row['pconfirm_email'];
       $pconfirm_compN = $row['pconfirm_compN']; //this
       $pconfirm_compA = $row['pconfirm_compA']; //this
       $pconfirm_dateReg = $row['pconfirm_dateReg'];
       $pconfirm_about = $row['pconfirm_about'];

      $output .= "
      <div class='partnerconfcont'>
        <p class='compn' data-id1=$confirm_id>$pconfirm_compN</p>
        <p class='compregdate' data-id2=$confirm_id><strong>Registered on: </strong>$pconfirm_dateReg</p>
        <p class='compusen' data-id3=$confirm_id><strong>Username: </strong>$pconfirm_username</p>
        <p class='compaddr' data-id4=$confirm_id><strong>Company address: </strong>$pconfirm_compA</p>
        <p class='compemail' data-id5=$confirm_id><strong>Email address: </strong>$pconfirm_email</p>
        <p class='compabout' data-id6=$confirm_id><strong>About the company: </strong>$pconfirm_about</p>
        <button type='button' class='delpartcon' data-id7=$confirm_id>Delete</button>
        <button type='button' class='conpartcon' data-id8=$confirm_id>Confirm</button>

      </div>";
}



}
$page_query = "select * from partner_confirm order by confirm_id desc";
$page_result = mysqli_query($db_conx, $page_query);

$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);
for($i=1; $i<=$total_pages; $i++)
{
  $output .= "<span class='paginationpartnerconf'  id='".$i."'>" .$i. "</span>";
}


echo $output;

?>
