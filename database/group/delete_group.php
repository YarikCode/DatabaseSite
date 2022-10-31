<?php

include('../db_connect.php');

$id_group = $_POST['id_group'];

if($id_group != '' && $id_group != 0){
    $query = "DELETE FROM `group` WHERE id_group = '$id_group'";
    if($connection->query($query)){
        Header('Location: ../../group.php');
    }
}
else {
    echo "Ошибка удаления!";
}

?>