<?php

	include('../db_connect.php');

	$name_usl = $_POST['name_usl'];
	$opisanie_usl = $_POST['opisanie_usl'];
	$stoimost_usl = $_POST['stoimost_usl'];

	$query = "INSERT INTO uslugi(name_usl, opisanie_usl, stoimost_usl) VALUES ('$name_usl','$opisanie_usl','$stoimost_usl')";

	if(
		
		$name_usl != 0 && $name_usl != "" 
		&& $opisanie_usl != 0 && $opisanie_usl != "" 
		&& $stoimost_usl != 0 && $stoimost_usl != ""

		){
		if($connection->query($query)){
			header("Location: ../../uslugi.php");
		}
	}
	else {
		echo "Ошибка добавления!";
	}
?>