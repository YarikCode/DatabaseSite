<?php

include('./database/db_connect.php');

$table = $_GET["table"];
$id = $_GET["id"];

$query = null;

$columns_array = array();

switch ($table){
    case "avto":
        $query = "SELECT * FROM avto WHERE id_avto = $id";
        $columns_array = array("Номер", "Марка", "Модель", "Тип", "Трансмиссия");
        break;
    case "clienti":
        $query = "SELECT * FROM clienti WHERE id_clienta = $id";
        $columns_array = array("ФИО", "Паспорт", "Номер", "Дата рождения", "Адрес");
        break;
    case "group":
        $query = "SELECT * FROM `group` WHERE `id_group` = $id";
        $columns_array = array("Описание");
        break;  
    case "sotrudniki":
        $query = "SELECT * FROM sotrudniki WHERE id_sotr = $id";
        $columns_array = array("ФИО", "Номер", "Дата рождения", "Паспорт", "Адрес", "Должность");
        break;
    case "uslugi":
        $query = "SELECT * FROM uslugi WHERE id_usl = $id";
        $columns_array = array("Наименование", "Описание", "Стоимость");
        break; 
}

$result = $connection->query($query);

while($row = mysqli_fetch_row($result)){
    for ($i=1; $i < count($row); $i++) { 
        echo "<b>" . $columns_array[$i - 1] . "</b>" . ": " . $row[$i] . "<br>";
    }
}

?>