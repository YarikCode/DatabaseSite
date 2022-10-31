<?php
	include('../db_connect.php');

	$old_id = $_POST['old_id_clienta'];

	$FIO_clienta = $_POST['FIO_clienta'];
	$passport_clienta = $_POST['passport_clienta'];
	$number_clienta = $_POST['number_clienta'];
	$data_rojdenia_clienta = $_POST['data_rojdenia_clienta'];
	$adres_clienta = $_POST['adres_clienta'];

	$fields = array(
		"FIO_clienta" => $FIO_clienta,
		"passport_clienta" => $passport_clienta,
		"number_clienta" => $number_clienta,
		"data_rojdenia_clienta" => $data_rojdenia_clienta,
		"adres_clienta" => $adres_clienta
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

	$query = "UPDATE clienti SET $SET WHERE id_clienta = $old_id";

	if($connection->query($query)){
		Header("Location: ../../clients.php");
	}
	else {
		echo "Ошибка редактирования!";
	}
?>