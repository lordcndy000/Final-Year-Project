<?php
include('session.php');

$output = '';
$sql = "SELECT * FROM job_placement_monitoring where studNo = $alumstudNo ";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
     while($row = mysqli_fetch_array($result))
     {
       $placement_id = $row['placement_id'];
       $astudLname = $row['lname']; //a
       $astudFname = $row['fname'];//a
       $astudMi = $row['mi'];//a
       $contactNum = $row['contactNum'];//a
       $emailAdr = $row['emailAdr'];//a
       $statx = $row['statx'];//
       $institute = $row['institute'];//a
       $posTit = $row['posTit'];//a
       $industry = $row['industry'];
       $sbCls = $row['sbCls'];//a
       $dateHrd = $row['dateHrd'];//a
       $remarks = $row['remarks'];

       $output .= "
        <p class='strong1'>Update this form everytime there is a change in your employment details</p>
        <p class='strong1'>Contact number</p>
         <p class='weak contactNum' data-id1=$placement_id contenteditable>$contactNum</p>
         <p class='strong1'>Email address</p>
         <p class='weak emailAdr' data-id2=$placement_id contenteditable>$emailAdr</p>
         <p class='strong1'>Status</p>
         <p class='weak statx' data-id3=$placement_id contenteditable>$statx</p>
         <p class='strong1'>Company/institution</p>
         <p class='weak institute' data-id4=$placement_id contenteditable>$institute</p>
         <p class='strong1'>Position/Title</p>
         <p class='weak posTit' data-id5=$placement_id contenteditable>$posTit</p>
         <p class='strong1'>Industry</p>
         <p class='weak industry' data-id6=$placement_id contenteditable>$industry</p>
         <p class='strong1'>Sub-class</p>
         <p class='weak sbCls' data-id7=$placement_id contenteditable>$sbCls</p>
         <p class='strong1'>Date hired</p>
         <p class='weak dateHrd' data-id8=$placement_id contenteditable>$dateHrd</p>
         <p class='strong1'>Remarks</p>
         <p class='weak remarks' data-id9=$placement_id contenteditable>$remarks</p>

";
     }

}
else
{
    $output .="<p class='strong1'>You haven't submitted this form yet</p>";

    $output .= "<p class='strong1'>Contact number</p>
      <p class='weak contactNum' id='contactNum' contenteditable><i>Input details here</i></p>
      <p class='strong1'>Email address</p>
      <p class='weak emailAdr'  id='emailAdr' contenteditable><i>Input details here</i></p>
      <p class='strong1'>Status</p>
      <p class='weak statx'   id='statx' contenteditable><i>Input details here</i></p>
      <p class='strong1'>Company/institution</p>
      <p class='weak institute'   id='institute' contenteditable><i>Input details here</i></p>
      <p class='strong1'>Position/Title</p>
      <p class='weak posTit'   id='posTit' contenteditable><i>Input details here</i></p>
      <p class='strong1'>Industry</p>
      <p class='weak industry'   id='industry' contenteditable><i>Input details here</i></p>
      <p class='strong1'>Sub-class</p>
      <p class='weak sbCls'   id='sbCls' contenteditable><i>Input details here</i></p>
      <p class='strong1'>Date hired</p>
      <p class='weak dateHrd'   id='dateHrd' contenteditable><i>Input details here</i></p>
      <p class='strong1'>Remarks</p>
      <p class='weak remarks'   id='remarks' contenteditable><i>Input details here</i></p>
      <button type='button' name='addplacement' id='addplacement' class='changepicalum'>Save</button>
";
}

echo $output;
?>
