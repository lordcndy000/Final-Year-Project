<?php

include('db_conx.php');


$record_per_page = 1;
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
$sql = "select * from job_conf inner join partners_tbl on job_conf.partner_compN = partners_tbl.partner_compN order by jobconf_id asc limit $start_from, $record_per_page ";
$result = mysqli_query($db_conx, $sql);

$countrows = mysqli_query($db_conx, "select * from job_conf");
$count = mysqli_num_rows($countrows);



$output .= "<p class='jobconBanner'> Confirm Job Posts: $count record(s)</p>";


if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

       $cjobid = $row['jobconf_id'];
       $cjobTitle = $row['job_title'];
       $cjobPostBy = $row['partner_compN'];
       $cjobDate = $row['job_date'];
       $cjobDesc = $row['job_desc'];
       $cjobSk = $row['job_skils'];
       $cjobInd = $row['job_industry'];
       $cjobLoc = $row['job_loc'];
       $cjobNat = $row['job_national'];
       $cjobExp = $row['job_exp'];
       $cjobEduc = $row['job_educ'];
       $cjobR = $row['job_role'];
       $cjobSal = $row['job_sal'];
       $partnerpic = $row['partner_pic'];


      $output .= "
      <div id='jobconfcont'>
        <img src='data:image;base64,".$row['partner_pic']."'  class='jobconfmg'>
        <div id='jobdetals'>
          <p class='jobtitle' data-id1=$cjobid>Job $cjobTitle</p>
          <p class='jobpostby' data-id2=$cjobid>$cjobPostBy</p>
          <p class='jobon' data-id3=$cjobid><strong>Posted on: </strong>$cjobDate</p>
          <p class='jobdescrp' data-id4=$cjobid><strong>Job description: </strong>$cjobDesc</p>
          <p class='jobrole' data-id5=$cjobid><strong>Job role: </strong>$cjobR</p>
          <p class='jobskillsreq' data-id6=$cjobid><strong>Skills required: </strong>$cjobSk</p>
          <p class='joindust' data-id7=$cjobid><strong>Industry: </strong>$cjobInd</p>
          <p class='joblocat' data-id8=$cjobid><strong>Location: </strong>$cjobLoc</p>
          <p class='jobexper' data-id9=$cjobid><strong>Experience: </strong>$cjobExp</p>
          <p class='jobeducat' data-id10=$cjobid><strong>Education: </strong>$cjobEduc</p>
          <p class='jobnational' data-id11=$cjobid><strong>Nationality: </strong>$cjobNat</p>
          <p class='jobsalar' data-id12=$cjobid><strong>Salary: </strong>$cjobSal</p>
          <button type='button' class='deljobconf' data-id13=$cjobid>Delete</button>
          <button type='button' class='confjobconf' data-id14=$cjobid>Confirm</button>

          </div>
        </div>";
}



}
$page_query = "select * from job_conf order by jobconf_id asc";
$page_result = mysqli_query($db_conx, $page_query);

$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);
for($i=1; $i<=$total_pages; $i++)
{
  $output .= "<span class='paginationjobconf'  id='".$i."'>" .$i. "</span>";
}


echo $output;

?>
