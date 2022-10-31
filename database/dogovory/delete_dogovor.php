<?php

include('../db_connect.php');

$id_dogovora = $_POST['id_dogovora'];

if($id_dogovora != null){
    $query = "DELETE FROM dogovory WHERE id_dogovora = '$id_dogovora'";
    if($connection->query($query)){
        Header('Location: ../../dogovory.php');
    }
}
else {
    echo "Ошибка удаления!";
}

?>