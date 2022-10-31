<?php

include('../db_connect.php');

$id_clienta = $_POST['id_clienta'];

if($id_clienta != '' && $id_clienta != 0){
    $query = "DELETE FROM clienti WHERE id_clienta = '$id_clienta'";
    if($connection->query($query)){
        Header('Location: ../../clients.php');
    }
}
else {
    echo "Ошибка удаления автомобиля!";
}

?>