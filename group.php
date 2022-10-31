<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Автошкола</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="header_text">Автошкола</span>
            <span class="header_name">Мастер вождения</span>
          </a>
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="./avto.php" class="nav-link" aria-current="page">Автомобили</a></li>
            <li class="nav-item"><a href="./clients.php" class="nav-link">Клиенты</a></li>
            <li class="nav-item"><a href="./uslugi.php" class="nav-link">Услуги</a></li>
            <li class="nav-item"><a href="./group.php" class="nav-link active">Группы</a></li>
            <li class="nav-item"><a href="./sotrudniki.php" class="nav-link">Сотрудники</a></li>
            <li class="nav-item"><a href="./dogovory.php" class="nav-link">Договоры</a></li>
          </ul>
        </header>
    </div>

  <?php
    include('database/db_connect.php');
    include('database/group/show_group.php');
  ?>

<script src="./js/button_control.js"></script>

<div class="nav justify-content-center border-bottom pb-3 mb-3">
     <button type="button" class="btn btn-success" id="add_button" onclick="openAddForm()">Добавить</button>
     <button type="button" class="btn btn-success" id="button_menu" onclick="openDeleteForm()">Удалить</button>
     <button type="button" class="btn btn-success" id="button_menu" onclick="openSortForm()">Сортировка</button>
     <button type="button" class="btn btn-success" id="button_menu" onclick="openUpdateForm()">Редактирование</button>
</div>

  <form action="database/group/add_group.php" method="post" class="add_form" id="add_form_id">
    <h2>Добавление группы</h2>
    <div class="form-group">
      <label>Описание группы</label>
      <input type="text" class="form-control" name="opisanie_group" placeholder="Введите описание группы">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Добавить</button>
    <button type="button" class="btn btn-secondary" onclick="closeAddForm()">Закрыть</button>
  </form>

  <form action="database/group/delete_group.php" method="post" class="add_form" id="delete_form_id" >
    <h2>Удаление группы</h2>
    <div class="form-group">
      <label>Идентификатор группы</label>
      <input type="text" class="form-control" name="id_group" placeholder="Введите идентификатор группы">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Удалить</button>
    <button type="button" class="btn btn-secondary" onclick="closeDeleteForm()">Закрыть</button>
  </form>

  <form action="database/group/sort_group.php" method="post" class="add_form" id="sort_form_id" >
    <h2>Сортировка</h2>

    <div class="cointainer float-right">
      <h3>Поле для сортировки</h3>

      <div class="form-check">
        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="field" value="id_group">
        <label class="form-check-label" for="flexRadioDefault1">
          ID
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="field" value="opisanie_group">
        <label class="form-check-label" for="flexRadioDefault1">
          Описание группы
        </label>
      </div>
    </div>

    <div class="cointainer">
      <h3>Тип сортировки</h3>
        <div class="form-check">
          <input class="form-check-input" type="radio" id="flexRadioDefault1" name="type_sort" value="asc">
          <label class="form-check-label" for="flexRadioDefault1">
            По возрастанию
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" id="flexRadioDefault1" name="type_sort" value="desc">
          <label class="form-check-label" for="flexRadioDefault1">
            По убыванию
          </label>
       </div>
    </div>

    <div class="form-group">
      <h3>Условие</h3>
      <input type="text" class="form-control" name="сondition" placeholder="Введите условие">
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Сортировка</button>
    <button type="button" class="btn btn-secondary" onclick="closeSortForm()">Закрыть</button>
  </form>

    <form method="post" action="database/group/change_group.php" class="add_form" id="update_form_id">
      <h2>Редактирование</h2>
      <h3>Старая запись</h3>
        <div class="form-group">
          <label>Номер записи</label>
          <input type="text" class="form-control" name="old_id_group" placeholder="Введите номер записи">
        </div>
        <br>
      <h3>Новая запись</h3>
        <div class="form-group">
        <label>Описание группы</label>
        <input type="text" class="form-control" name="opisanie_group" placeholder="Введите описание группы">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Редактировать</button>
        <button type="button" class="btn btn-secondary" onclick="closeUpdateForm()">Закрыть</button>
    </form>

  <figure class="text-end">
    <blockquote class="blockquote">
      <p>Программирование — это не наука, а ремесло.</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      <cite title="Source Title">Richard Stallman</cite>
    </figcaption>
  </figure>

</body>
</html>