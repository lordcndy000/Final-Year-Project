
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
 $query = "SELECT * FROM alumni_tbl ORDER BY id DESC LIMIT $start_from, $record_per_page";
 $result = mysqli_query($db_conx, $query);

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
     $ayeargrad = $row['year_grad'];
     $alumpic = $row['alum_pic'];

      $output .= "
      <div data-id1=$aid id='alumwidgetcont'>
        <img src='data:image;base64,".$row['alum_pic']."' width='50px' height='50px' class='imgcont'>
        <p>$astudFname $astudLname</p>
      </div>
      ";
 }
 $page_query = "SELECT * FROM alumni_tbl ORDER BY id DESC";
 $page_result = mysqli_query($db_conx, $page_query);
 $total_records = mysqli_num_rows($page_result);
 $total_pages = ceil($total_records/$record_per_page);
 for($i=1; $i<=$total_pages; $i++)
 {
      $output .= "<p class='pagesidelink' style='cursor:pointer; id='".$i."'>".$i."</p>";
 }

 echo $output;
 ?>
