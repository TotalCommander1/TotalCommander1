-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 26 2017 г., 22:37
-- Версия сервера: 5.7.17-11-beget-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `s662720h_uuuuu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `PANTERA`
--
-- Создание: Мар 01 2017 г., 02:05
--

DROP TABLE IF EXISTS `PANTERA`;
CREATE TABLE `PANTERA` (
  `id` int(30) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mini` text NOT NULL,
  `text` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `PANTERA`
--

INSERT INTO `PANTERA` (`id`, `name`, `mini`, `text`, `foto`) VALUES
(1, '<div id=\"pa\">Головна</div>', '<h2>Головна</h2>\r\n<p>Підприємство із 100% іноземним статутним капіталом,засноване громадянином Литви, займається виробництвом панчішно-шкарпеткових виробів.Фірма працює на сучасному іноземному обладнанні із залученням передових технологій. Сировина,яка використовується у виробництві,є сертифікована, дозволена для виготовлення продукції, що підтверджено висновками санітарно-епідеміологічної служби. </p>', '<h1>Ласкаво просимо на сайт фірми \"Пантера\"<h1>\r\n<h2>Головна</h2>\r\n<p>Підприємство із 100% іноземним статутним капіталом,засноване громадянином Литви, займається виробництвом панчішно-шкарпеткових виробів.Фірма працює на сучасному іноземному обладнанні із залученням передових технологій. Сировина,яка використовується у виробництві,є сертифікована, дозволена для виготовлення продукції, що підтверджено висновками санітарно-епідеміологічної служби. </p>', 'http://martialart.it-elit.in.ua/D580.jpg'),
(2, 'Контакти', '<p>Комарницька Людмила Михалівна:0667851672</p>', '<h1>Контакти:</h1>\r\nАдреса:78203,Івано-Франківська обл., м.Коломия,б-р Л.Українки,32А,а/с 181А\r\n<p> тел:(03433)4-77-75,відділ збуту:0509780557\r\n</p>', 'http://www.kadrovik.ua/userfiles/6(2).jpg'),
(3, 'Продукція', '<h3>Колготи</h3>\r\n<h3>Підколінники</h3>\r\n<h3>Шкарпетки</h3>\r\n<h3>Підслідники</h3>\r\n<h3>Напальчики</h3>', '<h1>Продукція:</h1>\r\n<h3>Колготи</h3>\r\n<h3>Підколінники</h3>\r\n<h3>Шкарпетки</h3>\r\n<h3>Підслідники</h3>\r\n<h3>Дитячі колготи</h3>\r\n<h3>Слідки</h3>', 'http://tips-ua.com/img/6/f/6f5a9276102faaa6951779bf3786d268.jpeg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `PANTERA`
--
ALTER TABLE `PANTERA`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
