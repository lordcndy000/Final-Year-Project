<?php
include('session.php');

$output = '';
$sql = "SELECT * FROM ojt_tbl where id = $ojtid ";
$result = mysqli_query($db_conx, $sql);

if(mysqli_num_rows($result) > 0)
{
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

       $output .= "<strong class='strongojt'> Student Number </strong>
         <p class='strongcont1'> $ostudNo </p>
         <strong class='strongojt'> Last name </strong>
         <p class='strongcont1 lastname' contenteditable data-id1=$oid> $ostudLname </p>
         <strong class='strongojt'> First name </strong>
         <p class='strongcont1 firstname' contenteditable ' data-id2=$oid> $ostudFname  </p>
         <strong class='strongojt'> Mi </strong>
         <p class='strongcont1 mi' contenteditable ' data-id3=$oid> $ostudMi </p>
         <strong class='strongojt'> Address </strong>
         <p class='strongcont1 address' contenteditable ' data-id4=$oid> $ostudAdd </p>
         <strong class='strongojt'> Email </strong>
         <p class='strongcont1 email' contenteditable ' data-id5=$oid> $ostudMail </p>
         <strong class='strongojt'> Contact </strong>
         <p class='strongcont1 contact' contenteditable ' data-id6=$oid> $ostudCont </p>
         <strong class='strongojt'> Program </strong>
         <p class='strongcont1 program' contenteditable ' data-id7=$oid> $ostudCrs </p>
         <strong class='strongojt'> Practicum Subject </strong>
         <p class='strongcont1 prcsbj' contenteditable ' data-id8=$oid> $opracsb </p>
         <strong class='strongojt'> Section </strong>
         <p class='strongcont1 section' contenteditable ' data-id9=$oid> $ostudSet </p>
         <strong class='strongojt'> OJT Adviser </strong>
         <p class='strongcont1 ojtadv' data-id10=$oid> $ostudAdvnm </p>
         <strong class='strongojt'> About </strong>
         <p class='strongcont1 abt' contenteditable ' data-id11=$oid> $ojtabout  </p>
";
     }

}

echo $output;
?>
