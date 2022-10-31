<?php
	include('../db_connect.php');

	$old_id = $_POST['old_id_avto'];

	$gosnomer_avto = $_POST['number_avto'];
	$marka_avto = $_POST['marka_avto'];
	$model_avto = $_POST['model_avto'];
	$type_avto = $_POST['type_avto'];
	$transmissia_avto = $_POST['transmissia_avto'];

	$fields = array(
		"gosnomer_avto" => $gosnomer_avto,
		"marka_avto" => $marka_avto,
		"model_avto" => $model_avto,
		"type_avto" => $type_avto,
		"transmissia_avto" => $transmissia_avto
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

	$query = "UPDATE avto SET $SET WHERE id_avto = $old_id";

	if($connection->query($query)){
		Header("Location: ../../avto.php");
	}
	else {
		echo "Ошибка редактирования!";
	}
?>