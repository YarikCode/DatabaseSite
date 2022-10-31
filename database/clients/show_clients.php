<?php
	echo '<div class="col-md-8 offset-md-2">';
	$query = "SELECT * FROM clienti";
    echo "<table class='table table-hover'>";

	echo "

	<tr>
		<td><b>ID<b></td>
		<td><b>ФИО<b></td>
		<td><b>Паспорт<b></td>
		<td><b>Номер<b></td>
		<td><b>Дата рождения<b></td>
		<td class='table_adres'><b>Адрес<b></td>
	</tr>

	";

    if($result = $connection->query($query)){
		foreach ($result as $row) {
				echo "<tr>";
				echo "<td>" . $row["id_clienta"] . "</td>";
				echo "<td>" . $row["FIO_clienta"] . "</td>";
				echo "<td>" . $row["passport_clienta"] . "</td>";
				echo "<td>" . $row["number_clienta"] . "</td>";
				echo "<td>" . $row["data_rojdenia_clienta"] . "</td>";
				echo "<td class='table_adres'>" . $row["adres_clienta"] . "</td>";
				echo "</tr>";
		}
	}
	echo "</table>";
?>