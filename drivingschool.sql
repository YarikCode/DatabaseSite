-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 31 2022 г., 15:38
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `drivingschool`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE `applications` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`id`, `name`, `number`) VALUES
(9, 'Ювеналий', '+7 (796) 093-04-95'),
(10, 'Петр', '+7 (793) 061-18-87'),
(11, 'Анастасия', '+7 (918) 726-71-85'),
(12, 'Петя', '+7 (965) 996-93-13');

-- --------------------------------------------------------

--
-- Структура таблицы `avto`
--

CREATE TABLE `avto` (
  `id_avto` int NOT NULL,
  `gosnomer_avto` varchar(10) NOT NULL,
  `marka_avto` varchar(50) NOT NULL,
  `model_avto` varchar(50) NOT NULL,
  `type_avto` varchar(20) NOT NULL,
  `transmissia_avto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `avto`
--

INSERT INTO `avto` (`id_avto`, `gosnomer_avto`, `marka_avto`, `model_avto`, `type_avto`, `transmissia_avto`) VALUES
(1, 'н757вк', 'ВАЗ', 'ВАЗ-2107', 'Легковой', 'МКПП'),
(2, 'м2656р', 'КамАЗ', 'КамАЗ-4326', 'Грузовой', 'МКПП'),
(3, 'е591ко', 'ВАЗ', 'Lada Granta', 'Легковой', 'МКПП'),
(4, 'м645мо', 'ВАЗ', 'Lada Granta', 'Легковой', 'АКПП'),
(5, 'н4316м', 'ПАЗ', 'ПАЗ-2302', 'Легковой', 'МКПП'),
(6, 'е684гр', 'Daewoo', 'Daewoo Matiz', 'Легковой', 'АКПП'),
(33, 'д894ми', 'Daewoo', 'Daewoo Nexia', 'Легковой', 'МКПП'),
(34, 'з371др', 'ВАЗ', 'ВАЗ-2110', 'Легковой', 'МКПП');

-- --------------------------------------------------------

--
-- Структура таблицы `clienti`
--

CREATE TABLE `clienti` (
  `id_clienta` int NOT NULL,
  `FIO_clienta` varchar(50) NOT NULL,
  `passport_clienta` char(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `number_clienta` varchar(20) NOT NULL,
  `data_rojdenia_clienta` date NOT NULL,
  `adres_clienta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `clienti`
--

INSERT INTO `clienti` (`id_clienta`, `FIO_clienta`, `passport_clienta`, `number_clienta`, `data_rojdenia_clienta`, `adres_clienta`) VALUES
(1, 'Ржевская Элиза Ильинична', '5683 029211', '+7 (956) 224-58-62', '1978-09-12', '678515, г. Ейск, ул. Учебный пер, дом 46, квартира 735'),
(2, 'Григорьев Каллистрат Константинович', '9856 647765', '+7 (994) 555-38-77', '1985-09-14', '641163, г. Ейск, ул. Костомаровская наб, дом 183, квартира 949'),
(3, 'Лютов Виктор Закирович', '4396 873761', '+7 (906) 423-58-73', '1984-07-30', '187750, г. Ейск, ул. Берников пер, дом 109, квартира 667'),
(4, 'Тарасов Савватий Петрович', '2485 957823', '+7 (992) 123-59-34', '1983-04-25', '174202, г. Красные Четаи, ул. Мичуринский пр-кт, дом 58, квартира 764'),
(8, 'Иванов Ярослав Григорьевич', '1445 923992', '+7 (964) 982-18-98', '2002-01-08', 'г. Ейск, ул. Коммунистическая 65, кв. 41');

-- --------------------------------------------------------

--
-- Структура таблицы `dogovory`
--

CREATE TABLE `dogovory` (
  `id_dogovora` int NOT NULL,
  `id_clienta` int NOT NULL,
  `id_sotr` int NOT NULL,
  `id_usl` int NOT NULL,
  `id_avto` int NOT NULL,
  `id_group` int NOT NULL,
  `data` date NOT NULL,
  `period_nachala` date NOT NULL,
  `period_okonchaniya` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `dogovory`
--

INSERT INTO `dogovory` (`id_dogovora`, `id_clienta`, `id_sotr`, `id_usl`, `id_avto`, `id_group`, `data`, `period_nachala`, `period_okonchaniya`) VALUES
(1, 1, 3, 2, 1, 1, '2022-09-11', '2022-09-13', '2022-09-30'),
(4, 1, 2, 2, 2, 1, '2022-09-13', '2022-09-15', '2022-12-23'),
(6, 2, 4, 1, 4, 2, '2022-10-03', '2022-10-27', '2022-10-30');

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id_group` int NOT NULL,
  `opisanie_group` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id_group`, `opisanie_group`) VALUES
(1, 'Группа обучения №1'),
(2, 'Группа обучения №2'),
(3, 'Группа обучения №3'),
(10, 'Группа обучения №10');

-- --------------------------------------------------------

--
-- Структура таблицы `sotrudniki`
--

CREATE TABLE `sotrudniki` (
  `id_sotr` int NOT NULL,
  `FIO_sotr` varchar(50) NOT NULL,
  `number_sotr` varchar(20) NOT NULL,
  `data_rojdenia_sotr` date NOT NULL,
  `pasport_sotr` char(11) NOT NULL,
  `adres_sotr` varchar(100) NOT NULL,
  `dolznost_sotr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sotrudniki`
--

INSERT INTO `sotrudniki` (`id_sotr`, `FIO_sotr`, `number_sotr`, `data_rojdenia_sotr`, `pasport_sotr`, `adres_sotr`, `dolznost_sotr`) VALUES
(1, 'Наумова Анна Иосифовна', '+7 (951) 257-10-98', '1995-04-22', '5879 931948', '142931, г. Ейск, ул. Косинская, дом 97, квартира 5', 'Администратор'),
(2, 'Лучной Любосмысл Вадимович', '+7 (998) 839-97-60', '1998-08-22', '5241 958912', '352313, г. Ейск, ул. Боровая (Фрунзенский), дом 170, квартира 545', 'Старший менеджер'),
(3, 'Суворова Римма Платоновна', '+7 (970) 247-49-35', '1976-12-01', '1368 645411', '152128, г. Ейск, ул. Садово-Крестьянская, дом 120, квартира 17', 'Менеджер'),
(4, 'Иванов Ярослав Григорьевич', '+7 (918) 921-41-01', '2003-10-05', '2131 235233', 'г. Ейск', 'Старший администратор'),
(5, 'Драчев Григорий Ефимович', '+7 (943) 490-88-59', '1995-07-22', '1359 812392', 'г. Ейск, ул. Коммунистическая, д. 16, кв. 91', 'Менеджер');

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `id_usl` int NOT NULL,
  `name_usl` varchar(100) NOT NULL,
  `opisanie_usl` varchar(255) NOT NULL,
  `stoimost_usl` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`id_usl`, `name_usl`, `opisanie_usl`, `stoimost_usl`) VALUES
(1, 'Категория \"В\"', 'Обучение категории \"В\"', 24000),
(2, 'Категория \"А\"', 'Обучение категории \"А\"', 16000),
(4, 'Категория \"С\"', 'Обучение категории \"C\"', 31000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `avto`
--
ALTER TABLE `avto`
  ADD PRIMARY KEY (`id_avto`);

--
-- Индексы таблицы `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id_clienta`);

--
-- Индексы таблицы `dogovory`
--
ALTER TABLE `dogovory`
  ADD PRIMARY KEY (`id_dogovora`),
  ADD KEY `id_avto` (`id_avto`),
  ADD KEY `id_clienta` (`id_clienta`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `id_sotr` (`id_sotr`),
  ADD KEY `id_usl` (`id_usl`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id_group`);

--
-- Индексы таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  ADD PRIMARY KEY (`id_sotr`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id_usl`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `avto`
--
ALTER TABLE `avto`
  MODIFY `id_avto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id_clienta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `dogovory`
--
ALTER TABLE `dogovory`
  MODIFY `id_dogovora` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id_group` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `sotrudniki`
--
ALTER TABLE `sotrudniki`
  MODIFY `id_sotr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id_usl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dogovory`
--
ALTER TABLE `dogovory`
  ADD CONSTRAINT `dogovory_ibfk_1` FOREIGN KEY (`id_avto`) REFERENCES `avto` (`id_avto`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `dogovory_ibfk_2` FOREIGN KEY (`id_clienta`) REFERENCES `clienti` (`id_clienta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `dogovory_ibfk_3` FOREIGN KEY (`id_group`) REFERENCES `group` (`id_group`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `dogovory_ibfk_4` FOREIGN KEY (`id_sotr`) REFERENCES `sotrudniki` (`id_sotr`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `dogovory_ibfk_5` FOREIGN KEY (`id_usl`) REFERENCES `uslugi` (`id_usl`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
