<?php
include('db_conx.php');

$output = '';
$sql = "SELECT * FROM job_assistance WHERE studentNo  LIKE '%".$_POST["search"]."%' or lastn LIKE '%".$_POST["search"]."%'or fname LIKE '%".$_POST["search"]."%'or mi LIKE '%".$_POST["search"]."%'or program LIKE '%".$_POST["search"]."%'or grad_yrGrad LIKE '%".$_POST["search"]."%'or company_interest LIKE '%".$_POST["search"]."%'or pos_desired LIKE '%".$_POST["search"]."%'or grad_contact LIKE '%".$_POST["search"]."%'or grad_mail LIKE '%".$_POST["search"]."%'or grad_resLink LIKE '%".$_POST["search"]."%'";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
  $output .= "
  <div class='divTable'>
   <div class='divTableBody'>
     <div class='divTableRow1'>
      <div class='divTableCell'><strong>Student No</strong></div>
      <div class='divTableCell'><strong>Last Name</strong></div>
      <div class='divTableCell'><strong>First Name</strong></div>
      <div class='divTableCell'><strong>MI</strong></div>
      <div class='divTableCell'><strong>Program</strong></div>
      <div class='divTableCell'><strong>Year Graduated</strong></div>
      <div class='divTableCell'><strong>Company of Interest</strong></div>
      <div class='divTableCell'><strong>Position Desired</strong></div>
      <div class='divTableCell'><strong>Contact No.</strong></div>
      <div class='divTableCell'><strong>Business Email</strong></div>
      <div class='divTableCell'><strong>Resume Link</strong></div>

  </div>";


     while($arow = mysqli_fetch_array($result))
     {
       $assist_id = $arow['assist_id'];
       $axxtstno = $arow['studentNo']; //a
       $axxtlastn = $arow['lastn']; //a
       $axxtfname = $arow['fname'];//a
       $axxtmi = $arow['mi'];//a
       $axxtprogram = $arow['program'];
       $axxtgrad_yrGrad = $arow['grad_yrGrad'];
       $axxtcompany_interest = $arow['company_interest'];
       $axxtpos_desired = $arow['pos_desired'];
       $axxtgrad_contact = $arow['grad_contact'];
       $axxtgrad_mail = $arow['grad_mail'];
       $axxtgrad_resLink = $arow['grad_resLink'];


       $output .=   "<div class='divTableRow'>
           <div class='divTableCell studentNo'>$axxtstno</div>
           <div class='divTableCell lastn'>$axxtlastn</div>
           <div class='divTableCell fname'>$axxtfname</div>
           <div class='divTableCell mi'>$axxtmi</div>
           <div class='divTableCell program'>$axxtprogram</div>
           <div class='divTableCell grad_yrGrad' data-id1=$assist_id contenteditable>$axxtgrad_yrGrad</div>
           <div class='divTableCell company_interest' data-id2=$assist_id contenteditable>$axxtcompany_interest</div>
           <div class='divTableCell pos_desired' data-id3=$assist_id contenteditable>$axxtpos_desired</div>
           <div class='divTableCell grad_contact' data-id4=$assist_id contenteditable>$axxtgrad_contact</div>
           <div class='divTableCell grad_mail' data-id5=$assist_id contenteditable>$axxtgrad_mail</div>
           <div class='divTableCell grad_resLink' data-id6=$assist_id contenteditable>$axxtgrad_resLink</div>


           <div class='divTableCell'>
             <button name='jobaxxtdel' id='jobaxxtdel' data-id7=$assist_id> Delete </button>
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
