<?php
	include('../db_connect.php');

	$old_id = $_POST['old_id_dogovor'];

	$id_clienta = $_POST['id_clienta'];
	$id_sotr = $_POST['id_sotr'];
	$id_usl = $_POST['id_usl'];
	$id_avto = $_POST['id_avto'];
	$id_group = $_POST['id_group'];
	$data_dogovora = $_POST['data'];
	$period_nachala = $_POST['period_nachala'];
	$period_okonchaniya = $_POST['period_okonchaniya'];

	$fields = array(
		"id_clienta" => $id_clienta,
		"id_sotr" => $id_sotr,
		"id_usl" => $id_usl,
		"id_avto" => $id_avto,
		"id_group" => $id_group,
		"data_dogovora" => $data_dogovora,
		"period_nachala" => $period_nachala,
		"period_okonchaniya" => $period_okonchaniya
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

	$query = "UPDATE dogovory SET $SET WHERE id_dogovora = $old_id";

	if($connection->query($query)){
		Header("Location: ../../dogovory.php");
	}
	else {
		echo "Ошибка редактирования!";
	}
?>