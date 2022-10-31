<?php

include('../db_connect.php');

$id_sotr = $_POST['id_sotr'];

if($id_sotr != '' && $id_sotr != 0){
    $query = "DELETE FROM sotrudniki WHERE id_sotr = '$id_sotr'";
    if($connection->query($query)){
        Header('Location: ../../sotrudniki.php');
    }
}
else {
    echo "Ошибка удаления!";
}

?>