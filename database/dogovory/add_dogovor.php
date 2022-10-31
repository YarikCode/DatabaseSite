<?php

	include('../db_connect.php');

	$id_clienta = $_POST['id_clienta'];
	$id_sotr = $_POST['id_sotr'];
	$id_usl = $_POST['id_usl'];
	$id_avto = $_POST['id_avto'];
	$id_group = $_POST['id_group'];
	$data_dogovora = $_POST['data'];
	$period_nachala = $_POST['period_nachala'];
	$period_okonchaniya = $_POST['period_okonchaniya'];

	$query = "INSERT INTO dogovory(id_clienta, id_sotr, id_usl, id_avto, id_group, data, period_nachala, period_okonchaniya) VALUES ('$id_clienta','$id_sotr','$id_usl','$id_avto','$id_group','$data_dogovora','$period_nachala','$period_okonchaniya')";

	if(
		$id_clienta != null &&
		$id_sotr != null &&
		$id_usl != null &&
		$id_avto != null &&
		$id_group != null &&
		$data_dogovora != null &&
		$period_nachala != null &&
		$period_okonchaniya != null

		){
		if($connection->query($query)){
			header("Location: ../../dogovory.php");
		}
	}
	else {
		echo "Ошибка добавления!";
	}
?>