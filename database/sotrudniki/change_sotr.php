<?php
	include('../db_connect.php');

	$old_id = $_POST['old_id_sotr'];

	$FIO_sotr = $_POST['FIO_sotr'];
	$number_sotr = $_POST['number_sotr'];
	$data_rojdenia_sotr = $_POST['data_rojdenia_sotr'];
	$pasport_sotr = $_POST['pasport_sotr'];
	$adres_sotr = $_POST['adres_sotr'];
	$dolznost_sotr = $_POST['dolznost_sotr'];

	$fields = array(
		"FIO_sotr" => $FIO_sotr,
		"number_sotr" => $number_sotr,
		"data_rojdenia_sotr" => $data_rojdenia_sotr,
		"pasport_sotr" => $pasport_sotr,
		"adres_sotr" => $adres_sotr,
		"dolznost_sotr" => $dolznost_sotr
	);

	$SET = "";

	foreach ($fields as $key => $value) {
		if($value != 0 && $value != ""){
			$SET = $SET . $key . "=" . "'" . $value . "'" . ", ";
		}
		else{

		}
	}
	$SET = substr($SET, 0, -2);

	$query = "UPDATE sotrudniki SET $SET WHERE id_sotr = $old_id";

	if($connection->query($query)){
		Header("Location: ../../sotrudniki.php");
	}
	else {
		echo "Ошибка редактирования!";
	}
?>