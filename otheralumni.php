<?php
 //pagination.php
 include('session.php');
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
 $start_from = ($page - 1)*$record_per_page;
 $query = "SELECT * FROM alumni_tbl where studentNo != '$alumstudNo' ORDER BY id DESC LIMIT $start_from, $record_per_page";
 $result = mysqli_query($db_conx, $query);
 $output .= "
      <div id='otheralum'>Other alumni</div>
 ";
 while($row = mysqli_fetch_array($result))
 {

   $aid = $row['id'];
   $astudNo = $row['studentNo']; //a
   $astudLname = $row['lastn']; //a
   $astudFname = $row['fname'];//a
   $astudMi = $row['mi'];//a
   $astudAdd = $row['Address'];//a
   $astudMail = $row['Email'];//a
   $astudCont = $row['cont'];//
   $astudCrs = $row['program'];//a
   $ajtabout = $row['about'];//a
   $ajtpic = $row['alum_pic'];

   $output .= "<div id='detalcont' data-id1=$aid>
     <img src='data:image;base64,".$row['alum_pic']."' class='imgother' width='60px' height='60px' data-id2=$aid>
     <div id='names'>
       <p class='othername' data-id3=$aid>$astudFname, $astudLname </p>
       <p class='otherprog' data-id4=$aid>$astudCrs</p>
     </div>
   </div>";

 }

 $page_query = "SELECT * FROM alumni_tbl where studentNo != '$alumstudNo'";
 $page_result = mysqli_query($db_conx, $page_query);
 $total_records = mysqli_num_rows($page_result);
 $total_pages = ceil($total_records/$record_per_page);
 for($i=1; $i<=$total_pages; $i++)
 {
      $output .= "<span class='pagination_linkot' id='".$i."'>".$i."</span>";
 }

 echo $output;
 ?>
