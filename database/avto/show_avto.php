<?php
	echo '<div class="col-md-8 offset-md-2">';
	$query = "SELECT * FROM avto";
    echo "<table class='table table-hover'>";
	echo "

		<tr>
			<td><b>ID<b></td>
			<td><b>Номер<b></td>
			<td><b>Марка<b></td>
			<td><b>Модель<b></td>
			<td><b>Тип<b></td>
			<td><b>Трансмиссия<b></td>
		</tr>

	";
    if($result = $connection->query($query)){
		foreach ($result as $row) {
				echo "<tr>";
				echo "<td>" . $row["id_avto"] . "</td>";
				echo "<td>" . $row["gosnomer_avto"] . "</td>";
				echo "<td>" . $row["marka_avto"] . "</td>";
				echo "<td>" . $row["model_avto"] . "</td>";
				echo "<td>" . $row["type_avto"] . "</td>";
				echo "<td>" . $row["transmissia_avto"] . "</td>";
				echo "</tr>";
		}
	}
	echo "</table>";
?>