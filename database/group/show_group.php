<?php
	echo '<div class="col-md-8 offset-md-2">';
	$query = "SELECT * FROM `group`";
    echo "<table class='table table-hover'>";

	echo "

	<tr>
		<td><b>ID<b></td>
		<td><b>Описание<b></td>
	</tr>

	";

    if($result = $connection->query($query)){
		foreach ($result as $row) {
				echo "<tr>";
				echo "<td>" . $row["id_group"] . "</td>";
				echo "<td>" . $row["opisanie_group"] . "</td>";
				echo "</tr>";
		}
	}
	echo "</table>";
?>