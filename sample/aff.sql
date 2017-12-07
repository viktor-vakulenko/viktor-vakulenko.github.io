-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 11 2014 г., 12:00
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `aff`
--

-- --------------------------------------------------------

--
-- Структура таблицы `db_adm`
--

CREATE TABLE IF NOT EXISTS `db_adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `db_adm`
--

INSERT INTO `db_adm` (`id`, `login`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `db_deposit`
--

CREATE TABLE IF NOT EXISTS `db_deposit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(12) NOT NULL,
  `login` varchar(55) NOT NULL,
  `date_start` int(13) NOT NULL,
  `date_end` int(13) NOT NULL,
  `summa` float NOT NULL,
  `percent` float NOT NULL,
  `count` int(13) NOT NULL,
  `count_full` int(13) NOT NULL,
  `status` int(1) NOT NULL,
  `id_trans` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `db_deposit`
--

INSERT INTO `db_deposit` (`id`, `id_user`, `login`, `date_start`, `date_end`, `summa`, `percent`, `count`, `count_full`, `status`, `id_trans`) VALUES
(1, 1, 'admin', 1409577499, 1409663898, 5000, 4500, 0, 1, 4, 1),
(2, 1, 'admin', 1409579145, 1409665544, 0, 4500, 0, 1, 4, 2),
(3, 1, 'admin', 1409579164, 1409665564, 0, 4500, 0, 1, 4, 3),
(4, 1, 'admin', 1409577636, 1409833938, 1000, 4500, 1, 1, 1, 4),
(5, 1, 'admin', 1412942429, 1413028829, 1000000, 50, 0, 1, 0, 5),
(6, 1, 'admin', 1412942535, 1413028934, 10101000, 50, 0, 1, 0, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `db_fake`
--

CREATE TABLE IF NOT EXISTS `db_fake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `vivod` double(10,2) NOT NULL,
  `pay` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `db_fake`
--

INSERT INTO `db_fake` (`id`, `user`, `vivod`, `pay`) VALUES
(1, 100, 1000000.00, 100000.00);

-- --------------------------------------------------------

--
-- Структура таблицы `db_insert`
--

CREATE TABLE IF NOT EXISTS `db_insert` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(55) NOT NULL,
  `user_id` int(13) NOT NULL,
  `summa` float NOT NULL,
  `batch` varchar(55) NOT NULL,
  `date` int(13) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `db_insert`
--

INSERT INTO `db_insert` (`id`, `login`, `user_id`, `summa`, `batch`, `date`, `status`) VALUES
(1, 'admin', 1, 5000, 'sdfghjhgfdsdfghjhgfdsdfg', 1409577499, 2),
(2, 'admin', 1, 0, 'EEPD7FR769GSAZW2I9RKO7SY6', 1409579145, 2),
(3, 'admin', 1, 0, 'EEPD7FR769GSAZW2I9RKO7SY6', 1409579164, 2),
(4, 'admin', 1, 1000, 'asdfasdfasdfasfasdfa', 1409577636, 1),
(5, 'admin', 1, 1000000, 'sdfgsdfgsdfgsdfgsdfgsdffg', 1412942429, 1),
(6, 'admin', 1, 10101000, 'asdfasdfasdfasdfasdfasdf', 1412942535, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `db_insert_payeer`
--

CREATE TABLE IF NOT EXISTS `db_insert_payeer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `summa` double NOT NULL,
  `user_id` int(10) NOT NULL,
  `login` varchar(55) NOT NULL,
  `date` int(13) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `db_insert_payeer`
--

INSERT INTO `db_insert_payeer` (`id`, `summa`, `user_id`, `login`, `date`, `status`) VALUES
(18, 1000, 6, 'aspirin', 1391943905, 0),
(17, 100, 2, 'artem', 1391939352, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `db_news`
--

CREATE TABLE IF NOT EXISTS `db_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(13) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `db_news`
--

INSERT INTO `db_news` (`id`, `date`, `title`, `text`) VALUES
(2, 1389769088, 'dfssdfdsfdsf', 'fdssfdsfdsfdsfds\ndfsfdsfdfdfd fdsjhfds  sdgs kds\nf sd hfjsfhds hjhsjf\nfs hs jfsfs dfdвыфавыафываывффффффффффффффффвафывафывафывафывафывафываывапрыдывдироывилпоывпиывалпывапрывалдясфывапиаывапиыввиаоячляываофвфдаываивырлфвадфоыв\n'),
(3, 1389769149, 'dfssdfdsfdsf', 'fdssfdsfdsfdsfds\r\ndfsfdsfdfdfd fdsjhfds  sdgs kds\r\nf sd hfjsfhds hjhsjf\r\nfs hs jfsfs dfd'),
(4, 1329769199, 'dfssdfdsfdsf', 'fdssfdsfdsfdsfds\r\ndfsfdsfdfdfd fdsjhfds  sdgs kds\r\nf sd hfjsfhds hjhsjf\r\nfs hs jfsfs dfd'),
(5, 1412942267, 'sdfsdfsdfsdf6546', 'ddsdfsdfsfdf6453451651');

-- --------------------------------------------------------

--
-- Структура таблицы `db_otziv`
--

CREATE TABLE IF NOT EXISTS `db_otziv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `date` int(11) NOT NULL,
  `text` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `db_otziv`
--

INSERT INTO `db_otziv` (`id`, `name`, `date`, `text`, `status`) VALUES
(1, 'admin', 1409386019, '0', 1),
(3, 'admin', 1409386116, 'текст отзыва епть', 1),
(4, 'admin', 1412941163, 'sdfagdfasdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdf', 0),
(5, 'admin', 1412941357, 'sfgsdfgsdfgsdfgsdfgsdfgsdfgsdfg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `db_stats`
--

CREATE TABLE IF NOT EXISTS `db_stats` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `popol` float NOT NULL,
  `vivod` float NOT NULL,
  `user` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `db_stats`
--

INSERT INTO `db_stats` (`id`, `popol`, `vivod`, `user`) VALUES
(1, 11120600, 200, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `db_sup`
--

CREATE TABLE IF NOT EXISTS `db_sup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `login` varchar(55) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `db_sup`
--

INSERT INTO `db_sup` (`id`, `user_id`, `login`, `title`, `text`, `status`) VALUES
(1, 1, 'admin', 'dsfsdfds', 'fdsfdsfds', 1),
(2, 1, 'admin', 'dsfsdfds', 'fdsfdsfds', 1),
(3, 1, 'admin', 'ваыпап', 'ывапывапывапыв', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `db_sup_text`
--

CREATE TABLE IF NOT EXISTS `db_sup_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tik` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login` varchar(55) NOT NULL,
  `text` text NOT NULL,
  `date` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `db_sup_text`
--

INSERT INTO `db_sup_text` (`id`, `id_tik`, `user_id`, `login`, `text`, `date`, `status`) VALUES
(1, 1, 1, 'admin', 'fdsfdsfds', 1409397545, 0),
(2, 1, 1, 'admin', 'fgdgdfgfdgdf', 1409397592, 0),
(3, 1, 0, 'Администрация', 'fdgdfgfdgfdgdf', 1409397943, 0),
(4, 2, 1, 'admin', 'fdsfdsfds', 1409398514, 0),
(5, 2, 0, 'Администрация', 'vxcxvxcvcxvcxv', 1409398530, 0),
(6, 2, 1, 'Администрация', 'dfdsfsdfdsfds', 1409398606, 0),
(7, 3, 1, 'admin', 'ывапывапывапыв', 1412937231, 0),
(8, 3, 1, 'admin', 'явафывафы', 1412937700, 0),
(9, 3, 1, 'admin', '1123213', 1412937777, 0),
(10, 3, 1, 'Администрация', 'dfsgsdfgfg', 1412941557, 0),
(11, 3, 1, 'Администрация', 'asdfsdfdf', 1412941595, 0),
(12, 3, 1, 'Администрация', 'sdfsdf', 1412941616, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `db_users`
--

CREATE TABLE IF NOT EXISTS `db_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(55) CHARACTER SET cp1251 NOT NULL,
  `pass` varchar(55) CHARACTER SET cp1251 NOT NULL,
  `date_reg` int(11) NOT NULL,
  `refer` int(10) NOT NULL,
  `kol_ref` int(11) NOT NULL,
  `money_in` float NOT NULL,
  `money_out` float NOT NULL,
  `ref_sum` float NOT NULL,
  `ip` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `qiwi` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `db_users`
--

INSERT INTO `db_users` (`id`, `login`, `pass`, `date_reg`, `refer`, `kol_ref`, `money_in`, `money_out`, `ref_sum`, `ip`, `email`, `qiwi`) VALUES
(1, 'admin', '39fa02a522de2f3b10f6797ffcf470cd', 0, 1, 0, 9050, 93431, 75, '85.26.164.243', 'admin@admin.ru', '+790333333333'),
(2, 'artem', '1f07a57f7481afbfbf17574849596121', 0, 1, 0, 0, 0, 0, '85.26.233.218', '', ''),
(3, 'aspirine', 'a67bda61a2f2d3c8c29e1954d7a5a8e4', 0, 1, 0, 1100, 0, 0, '178.45.219.66', '', ''),
(4, '1234560', '690de744fb4f78fbb166dde3e8433338', 0, 1, 0, 0, 0, 0, '88.147.174.144', '', ''),
(5, 'lavina', '27b362b9d9f9b4b993accf7f75e22141', 0, 1, 0, 0, 0, 0, '85.26.234.142', '', ''),
(6, 'aspirin', '690de744fb4f78fbb166dde3e8433338', 0, 1, 0, 0, 0, 0, '95.84.42.41', '', ''),
(7, 'wmrush', '9f4a6cf6c33542041c34076e8a842c82', 0, 1, 0, 30, 800, 0, '127.0.0.1', 'molart1@yandex.ru', '+79378026688');

-- --------------------------------------------------------

--
-- Структура таблицы `db_vivod`
--

CREATE TABLE IF NOT EXISTS `db_vivod` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(55) NOT NULL,
  `user_id` int(10) NOT NULL,
  `summa` float NOT NULL,
  `batch` varchar(55) NOT NULL,
  `date` int(13) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `db_vivod`
--

INSERT INTO `db_vivod` (`id`, `login`, `user_id`, `summa`, `batch`, `date`, `status`) VALUES
(1, 'admin', 1, 100, 'выаывавыаывавыаыв', 1389702678, 1),
(2, 'admin', 1, 100, 'dgfgdgdgfdgfdgfdgfdgd', 1389703007, 1),
(3, 'admin', 1, 100, '', 1389703060, 3),
(4, 'admin', 1, 100, '', 1389703175, 3),
(5, 'wmrush', 7, 100, '', 1409044529, 1),
(6, 'wmrush', 7, 100, '+79378026688', 1409044632, 1),
(7, 'admin', 1, 100, '+790333333333', 1412942613, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
