<?php
	require_once("../../models/ApartamentosModel.php");
	$type = $_POST["tipo"];

	$newClssInfo = new ApartamentosModel();

	$responseApart = $newClssInfo->get_infoapart($type);

	echo json_encode($responseApart);
?>
