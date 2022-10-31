<?php

	include('../db_connect.php');

	$gosnomer_avto = $_POST['number_avto'];
	$marka_avto = $_POST['marka_avto'];
	$model_avto = $_POST['model_avto'];
	$type_avto = $_POST['type_avto'];
	$transmissia_avto = $_POST['transmissia_avto'];

	$query = "INSERT INTO avto(gosnomer_avto, marka_avto, model_avto, type_avto, transmissia_avto) VALUES ('$gosnomer_avto','$marka_avto','$model_avto','$type_avto','$transmissia_avto')";

	if(
		
		$gosnomer_avto != 0 && $gosnomer_avto != "" 
		&& $marka_avto != 0 && $marka_avto != "" 
		&& $model_avto != 0 && $model_avto != "" 
		&& $type_avto != 0 && $type_avto != 0 
		&& $transmissia_avto != 0 && $transmissia_avto != ""

		){
		if($connection->query($query)){
			header("Location: ../../avto.php");
		}
	}
	else {
		echo "Ошибка добавления!";
	}
?>