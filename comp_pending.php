<?php

include('comp_session.php');

$output = "";
$sql = "select * from job_conf where partner_id = '$partner_id' order by jobconf_id desc";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result))
     {

      $jobid = $row['jobconf_id'];
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
        <p class='ptit'  data-id1=$jobid contenteditable>$jobTitle</p>
        <p class='pdescx' data-id2=$jobid contenteditable>$jobDesc</p>
        <div id='pdetails'>
          <p class='jdet'> 2016-09-03</p>
          <p class='jdet paddr' data-id3=$jobid contenteditable> $jobLoc </p>
          <p class='jdet' id='poredet' data-id10=$jobid> More details<span style='color:green'> ▼ </span> </p>
          <p class='jdet poredel' data-id9=$jobid name='delete_pend'> Delete<span style='color:red'> ✖ </span> </p>
        </div>
        </div>




    ";
}

}
else {
  $output .= "
  <p style='font: 40px Source Sans Pro, sans-serif; color: #545454'> You have no posts yet</p>
  ";

}

echo $output;

?>
