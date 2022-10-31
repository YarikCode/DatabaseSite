<?php

include('../db_connect.php');

$id_avto = $_POST['id_avto'];

if($id_avto != '' && $id_avto != 0){
    $query = "DELETE FROM avto WHERE id_avto = '$id_avto'";
    if($connection->query($query)){
        Header('Location: ../../avto.php');
    }
}
else {
    echo "Ошибка удаления автомобиля!";
}

?>