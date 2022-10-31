<?php
	echo '<div class="col-md-8 offset-md-2">';
	$query = "SELECT * FROM uslugi";
    echo "<table class='table table-hover'>";

	echo "

	<tr>
		<td><b>ID<b></td>
		<td><b>Наименование<b></td>
		<td><b>Описание<b></td>
		<td><b>Стоимость<b></td>
	</tr>

	";

    if($result = $connection->query($query)){
		foreach ($result as $row) {
				echo "<tr>";
				echo "<td>" . $row["id_usl"] . "</td>";
				echo "<td>" . $row["name_usl"] . "</td>";
				echo "<td>" . $row["opisanie_usl"] . "</td>";
				echo "<td>" . $row["stoimost_usl"] . "</td>";
				echo "</tr>";
		}
	}
	echo "</table>";
?>