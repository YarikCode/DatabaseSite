<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Сортировка</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container nav justify-content-center border-bottom pb-3 mb-3">
		<h1>Результат сортировки</h1>

		<?php
		include('../db_connect.php');

		$field = $_POST['field'];
		$type_sort = $_POST['type_sort'];
		$condition = $_POST['сondition'];

		if($type_sort != null && $field != null){
			if ($condition != 0 && $condition != ''){
				$query = "SELECT * FROM dogovory WHERE $field $condition ORDER BY $field $type_sort";
			}
			else {
				$query = "SELECT * FROM dogovory ORDER BY $field $type_sort";
			}
			echo "<table class='table'>";

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
						echo "<td>" . $row["id_dogovora"] . "</td>";
						echo "<td>" . $row["id_clienta"] . "</td>";
						echo "<td>" . $row["id_sotr"] . "</td>";
						echo "<td>" . $row["id_usl"] . "</td>";
						echo "<td>" . $row["id_avto"] . "</td>";
						echo "<td>" . $row["id_group"] . "</td>";
						echo "<td>" . $row["data"] . "</td>";
						echo "<td>" . $row["period_nachala"] . "</td>";
						echo "<td>" . $row["period_okonchaniya"] . "</td>";
						echo "</tr>";
					}
				}
			echo "</table>";
		}
		else {
			echo "Введите все параметры для сортировки";
		}

		echo '<a href="../../dogovory.php" class="btn btn-success">Вернуться</a>';

		?>
	</div>
</body>
</html>