<?php

	include('../db_connect.php');

	$FIO_sotr = $_POST['FIO_sotr'];
	$number_sotr = $_POST['number_sotr'];
	$data_rojdenia_sotr = $_POST['data_rojdenia_sotr'];
	$pasport_sotr = $_POST['pasport_sotr'];
	$adres_sotr = $_POST['adres_sotr'];
	$dolznost_sotr = $_POST['dolznost_sotr'];

	$query = "INSERT INTO sotrudniki(FIO_sotr, number_sotr, data_rojdenia_sotr, pasport_sotr, adres_sotr, dolznost_sotr) VALUES ('$FIO_sotr','$number_sotr','$data_rojdenia_sotr','$pasport_sotr','$adres_sotr' ,'$dolznost_sotr')";

	if(
		
		$FIO_sotr != 0 && $FIO_sotr != "" 
		&& $number_sotr != 0 && $number_sotr != "" 
		&& $data_rojdenia_sotr != 0 && $data_rojdenia_sotr != ""
		&& $pasport_sotr != 0 && $pasport_sotr != ""
		&& $adres_sotr != 0 && $adres_sotr != ""
		&& $dolznost_sotr != 0 && $dolznost_sotr != ""

		){
		if($connection->query($query)){
			header("Location: ../../sotrudniki.php");
		}
	}
	else {
		echo "Ошибка добавления!";
	}
?>