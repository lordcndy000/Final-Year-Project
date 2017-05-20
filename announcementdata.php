<?php

include('db_conx.php');


$record_per_page = 10;
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
$sql = "select * from announce_tbl order by ann_id desc limit $start_from, $record_per_page ";
$result = mysqli_query($db_conx, $sql);

$countrows = mysqli_query($db_conx, "select * from announce_tbl");
$count = mysqli_num_rows($countrows);




if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

       $annid = $row['ann_id'];
       $title = $row['ann_title'];
       $date = $row['ann_date'];
       $cont = $row['ann_cont'];
       $by = $row['ann_by'];
       $for = $row['ann_for'];


      $output .= "
      <div id='anncconts'>

        <p class='anntitle'>$title</p>
        <p class='anndate'>Posted on: $date</p>
        <p class='annfor'>Announcement for: $for </p>
        <p class='anncontent'>$cont</p>
        <div id='anncbyimg'>
          <p class='annby'>Announced by: $by</p>
        </div>";
}



}
$page_query = "select * from announce_tbl order by ann_id desc";
$page_result = mysqli_query($db_conx, $page_query);

$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);
for($i=1; $i<=$total_pages; $i++)
{
  $output .= "<span class='pagination_link'  id='".$i."'>" .$i. "</span>";
}


echo $output;

?>
