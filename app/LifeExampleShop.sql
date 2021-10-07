-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2012 at 08:40 PM
-- Server version: 5.1.40
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `LifeExampleShop`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc` text NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `desc`, `price`, `url`) VALUES
(1, 'Компьютерная мышь', 'Достоинства:\r\nДизайн, эргономика, программное обеспечение, универсальный и очень скромный по размерам USB-приемник.\r\nНедостатки:\r\nНестандартное расположение лазера требует привыкания. Не очень четкий клик скроллером: для срабатывания приходится нажимать со смещением к низу скроллера, что также беспокоит только первое время, до полной адаптации.', '299', 'kompyuternaya-mysh'),
(2, 'Монитор', 'ЖК (TFT TN) 24", широкоформатный, 1920x1080, LED-подсветка, 250 кд/м2, 1000:1, 5 мс, 170°/170°, стереоколонки, ТВ-тюнер, HDMI, VGA, композитный вход, компонентный вход, SCART ...', '4399', 'monitor'),
(3, 'Клавиатура', 'Достоинства:\r\nмягкая, приятная на ощупь. руки ложатся так, как будто клавиатура на заказ сделана. Подсветка еще 1н +, можно настраивать под каждый профиль свой цвет.', '299', 'klaviatura'),
(4, 'Колонки', 'Тип АС: напольная, пассивная, фазоинверторного типа, материал корпуса: MDF, 250 Вт, 90 дБ, 35-100000 Гц, Bi-wiring, 255x998x285 мм', '499', 'kolonki'),
(5, 'Системный блок', 'Десктоп HP 6200 Pro SFF XY267EA создан специально для удовлетворения ежедневных потребностей представителей бизнес-сферы', '8799', 'sistemnyi-blok'),
(6, 'Роутер', 'коммутатор (switch)\r\n5 портов Ethernet 10/100/1000 Мбит/сек\r\nДостоинства:\r\nСкорость, дизайн, цена, универсальность, простота. Практически не греется.', '1299', 'router');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `pass`, `role`) VALUES
(1, 'admin', '1', 1);
