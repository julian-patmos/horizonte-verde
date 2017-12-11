<?php
	require_once("../../models/ApartamentosModel.php");

	$newClss = new ApartamentosModel();

	$response = $newClss->get_all_aparts();

	echo json_encode($response);
?>
