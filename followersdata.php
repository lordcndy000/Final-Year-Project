<?php

include('db_conx.php');

$query = sprintf("select id, lib_srvc, lab_srvc, records_srvc, cash_srvc, guide_srvc, place_srvc, do_srvc, adm_srvc, faci_srvc, fac_srvc from grad_exit_interview order by id");


//execute query
$result = $db_conx->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

$db_conx->close();

print json_encode($data);



?>
