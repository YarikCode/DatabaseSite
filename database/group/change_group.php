<?php
	include('../db_connect.php');

	$old_id = $_POST['old_id_group'];
	$opisanie_group = $_POST['opisanie_group'];

	$fields = array(
		"opisanie_group" => $opisanie_group
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

	$query = "UPDATE `group` SET $SET WHERE id_group = $old_id";

	if($connection->query($query)){
		Header("Location: ../../group.php");
	}
	else {
		echo "Ошибка редактирования!";
	}
?>