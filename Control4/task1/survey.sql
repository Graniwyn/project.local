-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 06 2022 г., 10:47
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `survey`
--

CREATE TABLE `survey` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `patronymic` text,
  `email` text NOT NULL,
  `no_patronymic` text NOT NULL,
  `company_client` text NOT NULL,
  `problem_solved` text NOT NULL,
  `quality_service` text NOT NULL,
  `grudge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `survey`
--

INSERT INTO `survey` (`id`, `name`, `surname`, `patronymic`, `email`, `no_patronymic`, `company_client`, `problem_solved`, `quality_service`, `grudge`) VALUES
(7, 'dwadawd', '124124', '0', 'awdawd', '1', 'short', 'yes', 'satisfied', ''),
(8, 'Пётр', 'Адекватный', 'Ильич', '123', '0', 'short', 'no', 'dissatisfied', 'Фигня'),
(9, 'Василий', 'Васильев', '0', 'test@test.ru', '1', 'short', 'no', 'neutral', ''),
(10, 'Пётр', 'Петров', 'Петрович', '123@tes.com', '0', 'no', 'no', 'verydissatisfied', 'test'),
(11, '125', '125', '215', '512', '0', 'no', 'no', '', ''),
(12, 'test', '1552', '0', 'test', '1', 'long', 'yes', 'satisfied', ''),
(13, 'test', 'test', '0', 'test@test', '1', 'no', 'yes', 'verydissatisfied', 'test');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
