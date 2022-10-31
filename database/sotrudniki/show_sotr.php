<?php
	echo '<div class="col-md-8 offset-md-2">';
	$query = "SELECT * FROM sotrudniki";
    echo "<table class='table table-hover'>";

	
    if($result = $connection->query($query)){
		foreach ($result as $row) {
				echo "<tr>";
				echo "<td>" . $row["id_sotr"] . "</td>";
				echo "<td>" . $row["FIO_sotr"] . "</td>";
				echo "<td>" . $row["number_sotr"] . "</td>";
				echo "<td>" . $row["data_rojdenia_sotr"] . "</td>";
				echo "<td>" . $row["pasport_sotr"] . "</td>";
				echo "<td class='table_adres'>" . $row["adres_sotr"] . "</td>";
				echo "<td>" . $row["dolznost_sotr"] . "</td>";
				echo "</tr>";
		}
	}
	echo "</table>";
?>