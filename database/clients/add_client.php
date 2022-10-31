<?php

	include('../db_connect.php');

	$FIO_clienta = $_POST['FIO_clienta'];
	$passport_clienta = $_POST['passport_clienta'];
	$number_clienta = $_POST['number_clienta'];
	$data_rojdenia_clienta = $_POST['data_rojdenia_clienta'];
	$adres_clienta = $_POST['adres_clienta'];

	$query = "INSERT INTO clienti(FIO_clienta, passport_clienta, number_clienta, data_rojdenia_clienta, adres_clienta) VALUES ('$FIO_clienta','$passport_clienta','$number_clienta','$data_rojdenia_clienta','$adres_clienta')";

	if(
		
		$FIO_clienta != 0 && $FIO_clienta != "" 
		&& $passport_clienta != 0 && $passport_clienta != "" 
		&& $number_clienta != 0 && $number_clienta != "" 
		&& $data_rojdenia_clienta != 0 && $data_rojdenia_clienta != "" 
		&& $adres_clienta != 0 && $adres_clienta != ""

		){
		if($connection->query($query)){
			header("Location: ../../clients.php");
		}
	}
	else {
		echo "Ошибка добавления!";
	}
?>