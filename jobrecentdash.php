<?php

include('db_conx.php');


$record_per_page = 7;
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
$sql = "select * from job_posts inner join partners_tbl on job_posts.partner_compN = partners_tbl.partner_compN order by job_id desc limit $start_from, $record_per_page ";
$result = mysqli_query($db_conx, $sql);

$page_query = "select * from job_posts order by job_id desc";
$page_result = mysqli_query($db_conx, $page_query);

$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);
$output .="<p class='jobred'> Recent Posts</p>";
for($i=1; $i<=$total_pages; $i++)
{
  $output .= "<strong class='pagination_link'  id='".$i."'>" .$i. "</strong>";
}

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

      $jobid = $row['job_id'];
      $jobpostby = $row['partner_compN'];
      $jobTitle = $row['job_title'];
      $jobDate = $row['job_date'];
      $jobDesc = $row['job_desc'];
      $jobSk = $row['job_skils'];
      $jobInd = $row['job_industry'];
      $jobLoc = $row['job_loc'];
      $jobNat = $row['job_national'];
      $jobExp = $row['job_exp'];
      $jobEduc = $row['job_educ'];
      $jobR = $row['job_role'];
      $jobSal = $row['job_sal'];
      $partnerpic = $row['partner_pic'];

      $output .= "
      <div id='jbpstcont' data-id1=$jobid title='Click for more details'>

        <div class='compimage'>
          <img src='data:image;base64,".$row['partner_pic']."' height='90px' width='90px' alt='No image yet' class='compimagecont'>
        </div>

        <div id='jobinfo'>
          <p class='compname'> $jobpostby </p>
          <p class='jobtitle'> $jobTitle</p>
          <p class='jobtitle'> $jobDesc</p>
          <p class='jobtitle'> $jobDate </p>
        </div>

      </div>




    ";
}



}
 else {
   $output .= "
   <div class='jobinfo'>
     <p class='compname'> No recent posts </p>
   ";

}

echo $output;

?>
