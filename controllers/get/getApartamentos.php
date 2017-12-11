<?php
	require_once("../../models/ApartamentosModel.php");
	$id = $_POST["id"];
	$torre = $_POST["torre"];

	$newClss = new ApartamentosModel();

	$response = $newClss->get_all_aparts($id, $torre);

	echo json_encode($response);
?>
