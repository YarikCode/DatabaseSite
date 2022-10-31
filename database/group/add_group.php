<?php

	include('../db_connect.php');

	$opisanie_group = $_POST['opisanie_group'];

	$query = "INSERT INTO `group` (`opisanie_group`) VALUES ('$opisanie_group')";

	if(

		$opisanie_group != 0 && $opisanie_group != "" 

		){
		if($connection->query($query)){
			header("Location: ../../group.php");
		}
	}
	else {
		echo "Ошибка добавления!";
	}
	
?>