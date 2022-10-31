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

		if($type_sort != 0 && $field != 0){
			if ($condition != 0 && $condition != ''){
				$query = "SELECT * FROM uslugi WHERE $field $condition ORDER BY $field $type_sort";
			}
			else {
				$query = "SELECT * FROM uslugi ORDER BY $field $type_sort";
			}
			echo "<table class='table'>";
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
		}
		else {
			echo "Введите все параметры для сортировки";
		}

		echo '<a href="../../uslugi.php" class="btn btn-success">Вернуться</a>';

		?>
	</div>
</body>
</html>