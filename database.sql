-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2015 at 02:54 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pablore`
--

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE IF NOT EXISTS `Reviews` (
  `daReview` varchar(10) NOT NULL,
  `recibeReview` varchar(10) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Tutoria`
--

CREATE TABLE IF NOT EXISTS `Tutoria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(15) NOT NULL,
  `texto` text NOT NULL,
  `fecha` date NOT NULL,
  `cupos` double NOT NULL,
  `tag` varchar(15) NOT NULL,
  `user` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
 -- `sexo` varchar(20) NOT NULL,
  `avatar` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `tutoria` int(11) NOT NULL,
  -- `fecharegistro` TIMESTAMP, fecha registro
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Aqui van los datos de los usuarios';

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`nombre`, `apellido`, `avatar`, `email`, `username`, `password`, `status`, `tutoria`) VALUES
('user08', 'user08', 'user08.png', 'user08', '', '', 0, 0),
('user01', 'user01', 'user01', 'user01@xx.cl', 'user01', 'SOjaBkj8L+/FtEIfL24L+McxhudVAC3D', 0, 0),
('user02', 'user02', 'user02.png', 'user02@xx.cl', 'user02', 'scrTOqursNYdyeyAThGwdXOLb1Sn8+3v', 0, 0),
('user03', 'user03', 'user03.png', 'user03@xx.cl', 'user03', 'zNYbo2lL8j8H1bBX/jilSq0j7EE3jhQr', 0, 0),
('user04', 'user04', 'user04', 'user04@xx.cl', 'user04', '0nme2vb6J9WnFfB2LY5wtTr7bVn2lrCe', 0, 0),
('user05', 'user05', 'user05.png', 'user05@xx.cl', 'user05', 'FWsGmqHm8fR1hptuhTDmoAKaQDunAQgL', 0, 0),
('user06', 'user06', 'user06.png', 'user06@xx.cl', 'user06', 'svj+FwJn9hYbnMPAWtpeYG8+dPBBHvLB', 0, 0),
('user07', 'user07', 'user07.png', 'user07@xx.cl', 'user07', 'pv7xPGclgY70J2kwumXiPk5vq918lCqk', 0, 0),
('user08', 'user08', 'user08.png', 'user08@xx.cl', 'user08', 'FZn7qf6qnqHp0pfcIBIi+QZmRA0W/kid', 0, 0),
('user09', 'user09', 'user09.png', 'user09@xx.cl', 'user09', '7w20D1X/VMt3HiktVlrNRQeCBV29k4NH', 0, 0),
('user10', 'user10', 'user10.png', 'user10@xx.cl', 'user10', '/ppNHECogkZYtUhlm0NMWKW+xXqvQ6YK', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
