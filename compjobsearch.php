<?php
include('comp_session.php');
$record_per_page = 3;
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

$jsearch = mysqli_real_escape_string ($db_conx, $_POST["search"]);
$sql = "SELECT * FROM job_posts WHERE (job_title  LIKE '%".$jsearch."%' or job_date LIKE '%".$jsearch."%'or job_desc LIKE '%".$jsearch."%'or job_skils LIKE '%".$jsearch."%'or job_industry LIKE '%".$jsearch."%'or job_loc LIKE '%".$jsearch."%'or job_national LIKE '%".$jsearch."%'or job_exp LIKE '%".$jsearch."%'or job_educ LIKE '%".$jsearch."%'or job_role LIKE '%".$jsearch."%'or job_sal LIKE '%".$jsearch."%') and partner_id = '$partner_id'";
$result = mysqli_query($db_conx, $sql);

$page_query = "select * from job_posts where partner_id = '$partner_id' order by job_id desc";
$page_result = mysqli_query($db_conx, $page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);
for($i=1; $i<=$total_pages; $i++)
{
  $output .= "<span class='pagination_link' id='".$i."'>" .$i. "</span>";
}

if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result))
     {

      $jobid = $row['job_id'];
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

      $output .= "<div id='post_margin'>
        <p class='jtit'  data-id1=$jobid contenteditable>$jobTitle</p>
        <p class='jdescx' data-id2=$jobid contenteditable>$jobDesc</p>
        <div id='jdetails'>
          <p class='jdet'> 2016-09-03</p>
          <p class='jdet jaddr' data-id3=$jobid contenteditable> $jobLoc </p>
          <p class='jdet' id='moredet' data-id10=$jobid> More details<span style='color:green'> ▼ </span> </p>
          <p class='jdet moredel' data-id9=$jobid name='delete_post'> Delete<span style='color:red'> ✖ </span> </p>
        </div>
        </div>";

     }
     echo $output;
}
else
{
     echo "<p class='jtit'> No data found </p>";
}
?>
