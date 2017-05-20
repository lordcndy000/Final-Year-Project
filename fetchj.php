<?php
include('db_conx.php');

$output = '';
$sql = "select job_posts.* , partners_tbl.partner_compN, partners_tbl.partner_pic from job_posts left join partners_tbl on job_posts.partner_compN = partners_tbl.partner_compN where partners_tbl.partner_compN LIKE '%".$_POST["search"]."%' or job_title LIKE '%".$_POST["search"]."%'or job_date LIKE '%".$_POST["search"]."%'or job_desc LIKE '%".$_POST["search"]."%'or job_skils LIKE '%".$_POST["search"]."%'or job_industry LIKE '%".$_POST["search"]."%'or job_loc LIKE '%".$_POST["search"]."%'or job_national LIKE '%".$_POST["search"]."%'or job_exp LIKE '%".$_POST["search"]."%'or job_educ LIKE '%".$_POST["search"]."%'or job_role LIKE '%".$_POST["search"]."%' or job_sal LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{

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

         <div id='jobinfo' class='jobinfo'>
           <p class='compname'> $jobpostby </p>
           <p class='jobtitle'> $jobTitle</p>
           <p class='jobtitle'> $jobDesc</p>
           <p class='jobtitle'> $jobDate </p>
         </div>
         </div>
     ";
     }

       echo $output;

  }

     else
     {
       echo 'Data Not Found';
     }

?>
