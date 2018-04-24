-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2015 at 10:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myimage`
--

CREATE TABLE IF NOT EXISTS `myimage` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `imagename` varchar(30) NOT NULL,
  `imagesource` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `myimage`
--

INSERT INTO `myimage` (`id`, `imagename`, `imagesource`) VALUES
(1, 'p1', '/test/images/p1.jpg'),
(2, 'p2', '/test/images/p2.jpg'),
(3, 'p3', '/test/images/p3.jpg'),
(4, 'p4', '/test/images/p4.jpg'),
(5, 'p5', '/test/images/p5.jpg'),
(6, 'p6', '/test/images/p6.jpg'),
(7, 'p7', '/test/images/p7.jpg'),
(8, 'p8', '/test/images/p8.jpg'),
(9, 'p9', '/test/images/p9.jpg'),
(10, 'p10', '/test/images/p10.jpg'),
(11, 'p11', '/test/images/p11.jpg'),
(12, 'p12', '/test/images/p12.jpg'),
(13, 'p13', '/test/images/p13.jpg'),
(14, 'p14', '/test/images/p14.jpg'),
(15, 'p15', '/test/images/p15.jpg'),
(16, 'p16', '/test/images/p16.jpg'),
(17, 'p17', '/test/images/p17.jpg'),
(18, 'p18', '/test/images/p18.jpg'),
(19, 'p19', '/test/images/p19.jpg'),
(20, 'p20', '/test/images/p20.jpg'),
(21, 'p21', '/test/images/p21.jpg'),
(22, 'p22', '/test/images/p22.jpg'),
(23, 'p23', '/test/images/p23.jpg'),
(24, 'p24', '/test/images/p24.jpg'),
(25, 'p25', '/test/images/p25.jpg'),
(26, 'p26', '/test/images/p26.jpg'),
(27, 'p27', '/test/images/p27.jpg'),
(28, 'p28', '/test/images/p28.jpg'),
(29, 'p29', '/test/images/p29.jpg'),
(30, 'p30', '/test/images/p30.jpg'),
(31, 'p31', '/test/images/p31.jpg'),
(32, 'p32', '/test/images/p32.jpg'),
(33, 'p33', '/test/images/p33.jpg'),
(34, 'p34', '/test/images/p34.jpg'),
(35, 'p35', '/test/images/p35.jpg'),
(36, 'p36', '/test/images/p36.jpg'),
(37, 'p37', '/test/images/p37.jpg'),
(38, 'p38', '/test/images/p38.jpg'),
(39, 'p39', '/test/images/p39.jpg'),
(40, 'p40', '/test/images/p40.jpg'),
(41, 'p41', '/test/images/p41.jpg'),
(42, 'p42', '/test/images/p42.jpg'),
(43, 'p43', '/test/images/p43.jpg'),
(44, 'p44', '/test/images/p44.jpg'),
(45, 'p45', '/test/images/p45.jpg'),
(46, 'p46', '/test/images/p46.jpg'),
(47, 'p47', '/test/images/p47.jpg'),
(48, 'p48', '/test/images/p48.jpg'),
(49, 'p49', '/test/images/p49.jpg'),
(50, 'p50', '/test/images/p50.jpg'),
(51, 'p51', '/test/images/p51.jpg'),
(52, 'p52', '/test/images/p52.jpg'),
(53, 'p53', '/test/images/p53.jpg'),
(54, 'p54', '/test/images/p54.jpg'),
(55, 'p55', '/test/images/p55.jpg'),
(56, 'p56', '/test/images/p56.jpg'),
(57, 'p57', '/test/images/p57.jpg'),
(58, 'p58', '/test/images/p58.jpg'),
(59, 'p59', '/test/images/p59.jpg'),
(60, 'p60', '/test/images/p60.jpg'),
(61, 'p61', '/test/images/p61.jpg'),
(62, 'p62', '/test/images/p62.jpg'),
(63, 'p63', '/test/images/p63.jpg'),
(64, 'p64', '/test/images/p64.jpg'),
(65, 'p65', '/test/images/p65.jpg'),
(66, 'p66', '/test/images/p66.jpg'),
(67, 'p67', '/test/images/p67.jpg'),
(68, 'p68', '/test/images/p68.jpg'),
(69, 'p69', '/test/images/p69.jpg'),
(70, 'p70', '/test/images/p70.jpg'),
(71, 'p71', '/test/images/p71.jpg'),
(72, 'p72', '/test/images/p72.jpg'),
(73, 'p73', '/test/images/p73.jpg'),
(74, 'p74', '/test/images/p74.jpg'),
(75, 'p75', '/test/images/p75.jpg'),
(76, 'p76', '/test/images/p76.jpg'),
(77, 'p77', '/test/images/p77.jpg'),
(78, 'p78', '/test/images/p78.jpg'),
(79, 'p79', '/test/images/p79.jpg'),
(80, 'p80', '/test/images/p80.jpg'),
(81, 'p81', '/test/images/p81.jpg'),
(82, 'p82', '/test/images/p82.jpg'),
(83, 'p83', '/test/images/p83.jpg'),
(84, 'p84', '/test/images/p84.jpg'),
(85, 'p85', '/test/images/p85.jpg'),
(86, 'p86', '/test/images/p86.jpg'),
(87, 'p87', '/test/images/p87.jpg'),
(88, 'p88', '/test/images/p88.jpg'),
(89, 'p89', '/test/images/p89.jpg'),
(90, 'p90', '/test/images/p90.jpg'),
(91, 'p91', '/test/images/p91.jpg'),
(92, 'p92', '/test/images/p92.jpg'),
(93, 'p93', '/test/images/p93.jpg'),
(94, 'p94', '/test/images/p94.jpg'),
(95, 'p95', '/test/images/p95.jpg'),
(96, 'p96', '/test/images/p96.jpg'),
(97, 'p97', '/test/images/p97.jpg'),
(98, 'p98', '/test/images/p98.jpg'),
(99, 'p99', '/test/images/p99.jpg'),
(100, 'p100', '/test/images/p100.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `myusers`
--

CREATE TABLE IF NOT EXISTS `myusers` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profileimage` varchar(150) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myusers`
--

INSERT INTO `myusers` (`username`, `password`, `profileimage`) VALUES
('aa', 'bb', 'me.jpg'),
('Yolanda', 'aa', 'me.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
