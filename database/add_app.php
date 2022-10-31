<?php

include('./db_connect.php');

$name = $_GET['name'];
$number = $_GET['number'];

$query = "INSERT INTO applications(name, number) VALUES ('$name','$number')";

if($connection->query($query)){
    echo "Заявка успешно добавлена!";
}
else {
    echo "Ошибка добавления заявки!";
}

?>