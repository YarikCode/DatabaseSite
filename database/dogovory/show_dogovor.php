<?php
	echo '<div class="col-md-8 offset-md-2">';
	$query = "SELECT * FROM dogovory";
    echo "<table class='table table-hover'>";

	echo "

	<tr>
		<td><b>ID договора<b></td>
		<td><b>ID клиента<b></td>
		<td><b>ID сотрудника<b></td>
		<td><b>ID услуги<b></td>
		<td><b>ID авто<b></td>
		<td><b>ID группы<b></td>
		<td><b>Дата<b></td>
		<td><b>Дата начала<b></td>
		<td><b>Дата окончания<b></td>
	</tr>

	";

    if($result = $connection->query($query)){
		foreach ($result as $row) {
				echo "<tr>";
				echo "<td id='dogovory'>" . $row["id_dogovora"] . "</td>";
				echo "<td class='tr_table' id='clienti'>" . $row["id_clienta"] . "</td>";
				echo "<td class='tr_table' id='sotrudniki'>" . $row["id_sotr"] . "</td>";
				echo "<td class='tr_table' id='uslugi'>" . $row["id_usl"] . "</td>";
				echo "<td class='tr_table' id='avto'>" . $row["id_avto"] . "</td>";
				echo "<td class='tr_table' id='group'>" . $row["id_group"] . "</td>";
				echo "<td>" . $row["data"] . "</td>";
				echo "<td>" . $row["period_nachala"] . "</td>";
				echo "<td>" . $row["period_okonchaniya"] . "</td>";
				echo "</tr>";
		}
	}
	echo "</table>";
?>