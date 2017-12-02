-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 02 2017 г., 23:40
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--
CREATE DATABASE `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `carslist`
--

CREATE TABLE IF NOT EXISTS `carslist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brend` text NOT NULL,
  `model` text NOT NULL,
  `category` text NOT NULL,
  `price` float NOT NULL,
  `owner` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `carslist`
--

INSERT INTO `carslist` (`id`, `brend`, `model`, `category`, `price`, `owner`) VALUES
(1, 'MERSEDES', 'C-CLASS', 'До 1990 года выпуска', 1000, 'Alex'),
(2, 'bmw', '525', 'От 1990 до 2000 года выпуска', 100, 'Max'),
(3, 'citroen', 'berlingo', 'От 2000 до 2010 года выпуска', 150, 'Jack'),
(4, 'Land Rover', 'Range Rover Evoqe', 'После 2010 года выпуска', 34000, 'Victor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
