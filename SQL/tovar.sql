-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Хост: itelit.mysql.ukraine.com.ua
-- Время создания: Май 25 2017 г., 10:41
-- Версия сервера: 5.6.27-75.0-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `itelit_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE IF NOT EXISTS `tovar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `help` text NOT NULL,
  `price` float NOT NULL,
  `valuta` varchar(30) NOT NULL,
  `kurs` float NOT NULL,
  `prefiks` varchar(20) NOT NULL,
  `unit` varchar(5) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `help`, `price`, `valuta`, `kurs`, `prefiks`, `unit`, `foto`) VALUES
(1, 'Ковбаса домашня', 'Виготовлена по старовинному Українському рецепту. Тільки з екологічно чистого м''яса, всі інгредієнти натуральні. Коптиться у "Руській печі" на дровах.', 90, 'грн.', 0, ' за один ', 'кг.', '\r\nhttp://idna.com.ua/img/pages/big/20130326204221.jpg'),
(2, 'Масло', 'Справжнє натуральне солодковершкове масло виготовлене з вершків натурального коров’ячого молока відповідно до норм ДСТУ. Має особливо ніжний вершковий смак і аромат.\r\n', 45, 'грн.', 0, ' за один ', 'кг.', '\r\nhttps://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTClip8Cq0G9pBFchfL5Qj1qkpBdV9P3-ypewrRsB0uVSXua2Ln'),
(3, 'Молоко', 'Свіже, домашнє, без концервантів, екологічно чисте', 12, 'грн.', 0, ' за один ', 'літр.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMKjKHuQE_1fxMiL-W59kqjm53kHp-OHMgIT5XNJVEpiU7p_0jwg'),
(4, 'Сир', 'Виготовлений тільки з козячого молока, що відповідає певним вимогам по масовій частці білка, без хімікатів.', 50, 'грн.', 0, ' за один    ', 'кг.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS793qeB04vARQCrTgIF6hSlua_WJLRG_j8Rr2aVfUN_3W2cvqA'),
(5, 'Шинка\r\n', 'Шинка домашня із свинини, копчена на дровах. Свинки вирощуються на власній фермі, ростуть 9 місяців, харчуються комбікормом, до складу якого входить соя, кукурудза, ячмінь та пшениця – все натуральне, жодної хімії. Традиції українського народу в поєднанні з сучасним обладнанням вигідно виділяють «Еко-кошик» між інших виробників.', 82, 'грн.', 0, ' за один ', 'кг.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQg5qm80vGeCb_9w7YulZBnYbwutopFjcttoMNIor4wVcNkGHNk'),
(6, 'Хліб', 'Смачний, свіжий, ще теплий, прямо з печі до вашого столу. Борошно з цільного зерна.', 6, 'грн.', 0, ' за одину ', 'бух.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_EQDfBv-qK_s7QsxWr1Db8pzJ5ZD6qi-dUBOJf4yL_7_4p68sQQ'),
(7, 'Яблука', 'Свіжо вирощені, екологічно чисті, соковиті.', 20, 'грн.', 0, ' за один ', 'кг.', '\r\nhttps://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTY50uf4dpTJ5k4XXKBWvtOS1LPAQpYFJ0NIHfJBNCDwjqwUllH'),
(8, 'Яйця', 'Свіжі домашні яйця породистих курей. Кури живуть в домашніх умовах, гуляючи на свіжому повітрі харчуючись зеленню та зерновими без хімічних добавок, тому яйця смачні та натуральні. Корисні домашні яйця мають великий вміст  вуглеводів, білків, жирів, мінералів та вітамінів.', 1, 'грн.', 0, ' за одину ', 'шт.', 'http://www.unn.com.ua/uploads/news/2015/01/21/ed4fd394cb4cf5f9e4505631b1586efaa6f59bf9.jpg'),
(9, 'Огірки', 'Свіжі українські огірки щойно з грядки, вирощені у відкритому грунті. Плоди цілі, здорові, чисті, без механічних ушкоджень. Огірки відмінної якості, средньоплодові, гладкі. Плоди завдовжки 18-21 см., зі слабкою ребристістю і блиском, без гіркоти. Пройшли лабораторну перевірку та контроль якості відповідно до норм ДСТУ. Смачні, хрумкі огірочки з лану до Вашого столу!', 15, 'грн.', 0, ' за один ', 'кг.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR_ro1DtBFkS0LrFMSqnjC5OR8R0-Q87Avphz9FaPdhKl4HRN8U6Q'),
(10, 'Помідори', 'Свіжі, соковиті, смачні вибрані помідори, вирощені під  українським лагідним сонцем, без застосування мінеральних добрив та не містять ГМО, пахнуть літом. Завдяки високим смаковим якостям і вмісту цінних поживних речовин — один з найбільш популярних і улюблених овочів. Спілі свіжі томати містять багато поживних речовин. ', 28, 'грн.', 0, ' за один ', 'кг.', '\r\nhttp://bm.img.com.ua/berlin/storage/orig/5/8b/6914d884a36ddf79436bb21982a848b5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
