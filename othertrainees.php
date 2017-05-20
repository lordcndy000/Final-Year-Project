<?php
 //pagination.php
 include('db_conx.php');
 $record_per_page = 5;
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
 $query = "SELECT * FROM ojt_tbl ORDER BY id DESC LIMIT $start_from, $record_per_page";
 $result = mysqli_query($db_conx, $query);
 $output .= "
      <p class='otherlabel'>Other trainees</p>
 ";
 while($row = mysqli_fetch_array($result))
 {

   $oid = $row['id'];
   $ostudNo = $row['studentNo']; //a
   $ostudLname = $row['lastn']; //a
   $ostudFname = $row['fname'];//a
   $ostudMi = $row['mi'];//a
   $ostudAdd = $row['Address'];//a
   $ostudMail = $row['Email'];//a
   $ostudCont = $row['cont'];//
   $ostudCrs = $row['program'];//a
   $ostudSet = $row['section'];//
   $ostudAdvnm = $row['ojt_adv'];//a
   $opracsb = $row['prac_subj'];//a
   $ojtabout = $row['about'];//a
   $ojtpic = $row['ojt_pic'];

   $output .= "<div id='dashuserwrapper' data-id1=$oid>
   <div id='dashuserwrap'>
     <img  src='data:image;base64,".$row['ojt_pic']."' width='50px' height='50px'  class='profileimg'>
     <div id='dashuserflex'>
       <p class='othername'>$ostudFname $ostudLname</p>
       <p class='othersec'>$ostudCrs</p>
     </div>
     </div>
   </div>";

 }

 $page_query = "SELECT * FROM ojt_tbl ORDER BY id DESC";
 $page_result = mysqli_query($db_conx, $page_query);
 $total_records = mysqli_num_rows($page_result);
 $total_pages = ceil($total_records/$record_per_page);
 for($i=1; $i<=$total_pages; $i++)
 {
      $output .= "<span class='pagination_link1' style='cursor:pointer; padding:5px; margin: 4px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";
 }

 echo $output;
 ?>
