-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 06 2017 г., 12:11
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hw4`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authentication`
--

CREATE TABLE `authentication` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `description` text,
  `photo` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authentication`
--

INSERT INTO `authentication` (`id`, `login`, `pwd`, `name`, `age`, `description`, `photo`) VALUES
(25, 'alexander', '$2y$10$eMxjxiwa.Zd1KUZAke2oguWA8y0J4V3NaRMcq86SVy8FByU3rze4O', 'alexxxxx', 44, ' dasdasdasdasd', 0x70686f746f732f32352e6a7067),
(26, 'alex', '$2y$10$Yy5SfJHhzxjiz5DisH6PSeydH8oiGGiwoyVyths1zrwZMh.t/G1PK', 'alexxx', 12, ' asdsdadasdas', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authentication`
--
ALTER TABLE `authentication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
