<?php

	$user = 'new_user';
	$pswd = '123';

	$host = 'localhost';
	$db = 'drivingschool';

	$connection = mysqli_connect($host, $user, $pswd, $db);

	if(!$connection){
		mysqli_error('$connection');
		echo "Ошибка подключения к базе данных";
	}
?>