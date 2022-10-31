<?php

include('../db_connect.php');

$id_usl = $_POST['id_usl'];

if($id_usl != '' && $id_usl != 0){
    $query = "DELETE FROM uslugi WHERE id_usl = '$id_usl'";
    if($connection->query($query)){
        Header('Location: ../../uslugi.php');
    }
}
else {
    echo "Ошибка удаления!";
}

?>