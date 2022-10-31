<?php
	include('../db_connect.php');

	$old_id = $_POST['old_id_usl'];

	$name_usl = $_POST['name_usl'];
	$opisanie_usl = $_POST['opisanie_usl'];
	$stoimost_usl = $_POST['stoimost_usl'];

	$fields = array(
		"name_usl" => $name_usl,
		"opisanie_usl" => $opisanie_usl,
		"stoimost_usl" => $stoimost_usl
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

	$query = "UPDATE uslugi SET $SET WHERE id_usl = $old_id";

	if($connection->query($query)){
		Header("Location: ../../uslugi.php");
	}
	else {
		echo "Ошибка редактирования!";
	}
?>