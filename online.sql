-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2013 at 08:24 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(56) NOT NULL,
  `pwd` varchar(57) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pwd`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `con`
--

CREATE TABLE IF NOT EXISTS `con` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `con`
--

INSERT INTO `con` (`id`, `first_name`, `last_name`, `email_id`, `address`, `ph_no`, `subject`, `message`) VALUES
(1, 'amarjit', 'singh', 'amar9021@gmail.com', 'hgw7yfhbkfeme', '2659894651', 'guytfighbe', ' fvgufyifgekb f');

-- --------------------------------------------------------

--
-- Table structure for table `fedbak`
--

CREATE TABLE IF NOT EXISTS `fedbak` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `fedbak`
--

INSERT INTO `fedbak` (`id`, `user`, `email`, `comment`) VALUES
(1, 'kulwant singh ', 'khokher.mattu@gmail.com', 'it was great to see');

-- --------------------------------------------------------

--
-- Table structure for table `insrtlap`
--

CREATE TABLE IF NOT EXISTS `insrtlap` (
  `id` int(35) NOT NULL AUTO_INCREMENT,
  `compny_name` varchar(40) NOT NULL,
  `modl_no` varchar(40) NOT NULL,
  `price` varchar(50) NOT NULL,
  `feturs` varchar(250) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `insrtlap`
--

INSERT INTO `insrtlap` (`id`, `compny_name`, `modl_no`, `price`, `feturs`, `color`, `image`) VALUES
(1, 'Acer', 'Aspire V5 431P ', '37500', 'Processor:-Intel Pentium Dual Core,O.S:-Windows 8,Ram:-2 GB DDR3 RAM,Hard Drive:-500 GB,Screen Siza:-15.6 inches,Graphics:-Intel HD Graphics,webcam:-1.3 Megapixel,', 'Silver', 'Acer-Aspire-V5-431P-lAPTOP_thumb[2].jpg'),
(2, 'Acer', 'Gateway NE56R NX.Y14SI.012', '27000', ' 15.6 inch HD LED Display, Intel Core i3 (2nd Generation)Processor, 4 GB DDR3 RAM, 320 GB HDD Laptop.', 'Black', 'Acer-Gateway-NE56R-NX.Y14SI.012-Laptop_thumb[2].jpg'),
(3, 'Acer', 'Aspire S7 MS2363', '87500', 'Processor:-Intel Core i7-3517U Processor (3rd Generation),Processor Speed:-1.9 GHz,O.S:-Windows 8,Hard Drive:-256 GB,Screen Siza:-11.6 Inch', 'Silver', 'Acer-Aspire-S7-MS2363-Laptop_thumb[1].jpg'),
(5, 'Acer', 'TravelMate B113', '30000', 'Processor:-Intel Core i3 (2nd Generation),Processor Speed:- 1.5 GHz,O.S:-Windows 7 Professional,Hard Drive:-320 GB,Screen Siza:-11.6 Inch', 'Black', 'Acer-TravelMate-B113-Laptop_thumb[1].jpg'),
(6, 'Acer', 'Aspire E1-431', '22400', 'Processor:-Intel Pentium B960 Dual-core Processor,Processor Speed:-2.20 GHz,O.S:-Linux,Hard Drive:-500 GB,Screen Siza:-14 Inch', 'Silver', 'Acer Aspire E1-431-Laptop_thumb[1].jpg'),
(7, 'Acer', 'TravelMate8484T', '43500', 'Processor:-Intel Core i5 (2nd Generation),Processor Speed:-1.60 GHz,O.S:- 	Windows 7 Professional,Hard Drive:-320 GB,Screen Siza:-14 Inch', 'Black', 'Acer-TravelMate-TM8481T-Laptop_thumb[1].jpg'),
(8, 'Acer', 'Aspire V5-471P', '41000', 'Processor:-Intel Core i3-3217U (3rd Gen) Processor,Processor Speed:-3.1 GHz,O.S:- 	Windows 8 ,Hard Drive:-500 GB,Screen Siza:-14 Inch', 'Silver', 'Acer-Aspire-V5-471P-Laptop_thumb[1].jpg'),
(9, 'Acer', 'Aspire Z3620', 'N.A-', 'Processor:- Intel Pentium G640 Dual core Processor,Processor Speed:-2.8 GHz,O.S:- 	Windows 8 ,Hard Drive:-500 GB,Screen Siza:-14 Inch', 'Black', 'Acer-Aspire-Z3620-PC_thumb[1].jpg'),
(10, 'Dell', 'Inspiron 14R 5421', '34500', 'Processor:- 	Intel Core i3-3217U (3rd Generation) Processor,Processor Speed:-1.8 GHz,O.S:-Windows 8,Hard Drive:-500 GB,Screen Siza:-14 Inch', 'Silver', 'Dell-Inspiron-14R-5421-Lapttop_thumb[1].jpg'),
(11, 'Dell', 'Inspiron N5520', '37200', 'Processor:- 	Intel Core i5 (3rd Generation) Processor ,Processor Speed:- 	Up to 3.1 GHz,O.S:-Windows 8,Hard Drive:-500 GB,Screen Siza:-15.6 Inch', 'Silver', 'Dell-Inspiron-N5520-Laptop_thumb[1].jpg'),
(12, 'Dell', 'Inspiron N3521', '31000', 'Processor:- Intel Core i3 (2ndGeneration) Processor,Processor Speed:-1.4 GHz,O.S:-Windows 8,Hard Drive:-500 GB,Screen Siza:-15.6 Inch', 'Black', 'Dell-Inspiron-N3521-Laptop_thumb[1].jpg'),
(13, 'Dell', 'Inspiron 3521', '36500', 'Processor:-Intel Core i3 (3rd Generation) Processor,Processor Speed:-1.8 GHz,O.S:-Windows 8,Hard Drive:-500 GB,Screen Siza:-15.6 Inch', ' Black Matte Textured Finish', 'Dell-Inspiron-15-3521-Laptop_thumb[1].jpg'),
(15, 'Dell', 'Inspiron 15R 5521', '40500', 'Processor:-Intel Core i3 (3rd Generation) Processor,Processor Speed:-1.8 GHz,O.S:-Windows 8,Hard Drive:-500 GB,Screen Siza:-15.6 Inch', 'Black, Silver', 'Dell-Inspiron-15R-55212-Laptop_thumb[2].jpg'),
(16, 'Dell', 'Inspiron 15 3520', '55400', 'Processor:- 	Intel Core  i5-3210 (3rd Gen) Processor,Processor Speed:-2.5 GHz,O.S:-DOS,Hard Drive:-750 GB,Screen Siza:-15.6 Inch', 'Black', 'Dell-Inspiron-15-3520-Laptop_thumb[1].jpg'),
(17, 'Dell', 'Inspiron 5420', '43000', 'Processor:-Intel Core i5 (3rd Generation),Processor Speed:-Up to 3.1 GHz\r\n,O.S:-Windows 8,Hard Drive:-Up to 500MB,Screen Siza:-14 Inch', 'Black, Silver', 'Dell-Inspiron-5420-Laptop_thumb[2].jpg'),
(18, 'Sony VAIO', 'SV-E14A37CN-H', '75000', 'Processor:-Intel Core i7 3632QM (3rd Gen) Processor,\r\nProcessor Speed:-2.20 GHz with Turbo Boost up to 3.20 GHz,\r\nO.S:-Windows 8 64 bit,\r\nHard Drive:-1 TB,\r\nScreen Siza:-14 Inch', 'Gun Metallic', 'Sony-VAIO-SV-E14A37CN-H-Laptp_thumb[1].jpg'),
(19, 'Sony VAIO', 'VAIO SV-E15133CN-P', '35000', 'Processor:-Intel Core i3 3210M (3rd Gen) Processor,\r\nProcessor Speed:-1.4 GHz,\r\nO.S:-Windows 8 64 bit,\r\nHard Drive:-500GB,\r\nScreen Siza:-15.5 Inch', 'Pink, White, Black', 'Sony-VAIO-SV-E15133CN-P-Laptop_thumb[1].jpg'),
(20, 'Sony VAIO', 'T13113EN', '39000', 'Processor:-Intel Core i3 2367M (2nd Gen) Processor,Processor Speed:-1.4 GHz ,O.S:-Windows 7 Home Basic,Hard Drive:- 	500GB + 32GB SSD,Screen Siza:-13.3 Inch', 'Silver', 'Sony-VAIO-T13113EN-Laptop_thumb[1].jpg'),
(21, 'Sony VAIO', 'SVE15137CN', '51000', 'Processor:- Intel Core i5-3230M Processor,Processor Speed:- 	2.60 GHz with Turbo Boost up to 3.20 GHz,O.S:---,Hard Drive:-750GB,Screen Siza:-15 Inch', '---', 'Sony-Vaio-SVE15138CN-Laptop_thumb[1].jpg');

-- --------------------------------------------------------

--
-- Table structure for table `insrtprdut`
--

CREATE TABLE IF NOT EXISTS `insrtprdut` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `compny_name` varchar(50) NOT NULL,
  `modl_no` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `feturs` varchar(250) NOT NULL,
  `color` varchar(60) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `insrtprdut`
--

INSERT INTO `insrtprdut` (`id`, `compny_name`, `modl_no`, `price`, `feturs`, `color`, `image`) VALUES
(9, 'sony', 'Xperia Z', '36990', '3G:Yes,Wifi:Yes,\r\nCamera:13.1 MP with flash,\r\nDisplay:5 inches,\r\n', 'Black', 'sony_xperia_z.jpg'),
(11, 'Sony', 'Xperia S', '25500', 'Xperia S is a Android smartphone which sports a 4.6â€³ HD 720p display. The Xperia S is powered by Android 2.3 and 1.5GHz dual core processor.', 'Black', 'sony-xperia-s-ofic.jpg'),
(12, 'Sony', 'Xperia SP', '27490 ', 'Xperia SP is an android smartphone powered by 1.7 GHz Dual Core Snapdragon processor and 1 GB RAM. It comes with 4.6 Inch 720p Display, 8MP Camera, 8 GB on-board storage and 2370 mAh battery', 'white', 'sony-xperia-sp.jpg'),
(13, 'Sony', 'Xperia L', '16000', 'Xperia L is an android smartphone powered by 1 GHz Dual Core Snapdragon processor and 1 GB RAM. It comes with 4.3 Inch Display, 8MP Camera, 8 GB on-board storage and 1750 mAh battery', 'white', 'sony-xperia-l.jpg'),
(14, 'Sony', 'Xperia E', '10000', 'Xperia E is a mid range android smartphone. It is powered by 1 GHz Snapdragon processor and 512 MB RAM. It comes with 3.2MP Camera, 4 GB on-board storage and 1500 mAh battery', 'Black', 'sony-xperia-e.jpg'),
(15, 'Sony', 'Xperia ZL', '34800', 'Sony Xperia Z is an android smartphone with 1080p 5 Inch Display, 1.5 GHz Quad Core Processor, 2GB RAM, 13MP Camera with LED Flash. It runs on Android 4.1.2 . ', 'Black', 'sony-xperia-zl.jpg'),
(16, 'Sony', 'Xperia V', '25000', 'Sony Xperia V is an water proof Android smartphone which is powered by 1.5 GHz Qualcomm Dual Core Processor and 1GB RAM. It comes with 4.3 Inch display and 13MP Camera', 'Black', 'sony-xperia-v.jpg'),
(17, 'Sony', 'Xperia T', '25000', 'Xperia T is a Android Smartphone which comes with 1.5 GHz Dual Core Qualcomm Krait Processor and 4.5 Inch Display. It runs on ANdroid 4.0.', 'Black', 'sony-xperia-t.jpg'),
(18, 'Nokia', 'Lumia 520', '10500', 'Nokia 520 is an Windows Phone 8 Smartphone with 4 inch display. It is powered by 1 GHz Snapdeagon processor and 512 MB RAM.', 'Red, White,Yellow', 'nokia-lumia-520.jpg'),
(19, 'Nokia', '301', '5500', 'Nokia 311 is the feature phone from Nokia. It runs on S40 Operating System.\r\n ', 'Black, White,Yelow', 'nokia-301.jpg'),
(20, 'Nokia', 'Asha 310', '5700', 'Asha 310 is the full touch screen feature phone from Nokia. It runs on S40Asha Operating System with Swipe UI. ', 'Black', 'nokia-asha-310.jpg'),
(21, 'Nokia', '105', '1100', 'Nokia 105 is the cheap affordable feature phone with 1.4 inch display and 800 mAh battery', 'Black', 'nokia-105.jpg'),
(22, 'Nokia', 'Lumia 620', '15000', 'Nokia 620 is the affordable Windows Phone 8 Smartphone with Nokia Maps, Nokia Drive, Nokia Transport and Nokia Music.', 'Green, Yelow, White, Red , Black', 'nokia-lumia-620.jpg'),
(23, 'Nokia', 'Lumia 900 LTE', '30000', 'Lumia 900 is second Nokia Windows Phone for the US market and it is the third windows phone from Nokia. It comes with 4.3 Inch screen and runs Windows Phone 7 Mango OS. ', 'Black', 'nokia-lumia-900.jpg'),
(24, 'Nokia', 'Lumia 720', '20000', 'Nokia 720 is an Windows Phone 8 Smartphone with 4.3 inch display. It is powered by 1 GHz Snapdeagon processor and 512 MB RAM.\r\n ', 'Red, White,Yellow', 'nokia-lumia-720.jpg'),
(25, 'Nokia', 'Lumia 820', '27000', 'Nokia Lumia 820 is an Windows Phone 8 Smartphone. It comes with a 4.3 Inch Display,1.5GHz Qualcomm Dual Core Processor and 1GB RAM.', 'Green, Yelow, White, Red , Black', 'nokia-lumia-820.jpg'),
(26, 'Sony Ericsson', 'Xperia Arc S', '22000', 'Xperia Arc S is the successor of Xperia Arc. It comes with 1.4 GHz Processor\r\n ', 'Black, White', 'se-xperia-arc-s.jpg'),
(27, 'Samaung', 'Galaxy S III', '36500', 'Samsung Galaxy S III is the successor of the Samsung Galaxy SII. It comes with Exynos Quad core processor,8MP camera.', 'Black, White', 'samsung-galaxy-siii.jpg'),
(28, 'Samaung', 'Galaxy Note 8.0', '25000', 'Galaxy Note 8.0 is an Android tablet which runs on the latest Android 4.1.2. It comes with 1.6 GHz A9 quad-core processor and 2GB RAM.', 'white', 'samsung-galaxy-note-8.0.jpg'),
(29, 'Samaung', 'Galaxy S II Plus', '22000', 'Samsung Galaxy S2 Plus is an Android Smartphone with 1.2 GHz Dual Core Processor and 1GB RAM . It runs on Android 4.1.2. JellyBean.', 'Black, White', 'samsung-galaxy-s-ii-plus.jpg'),
(30, 'Samaung', 'Galaxy Grand Duos', '21000', 'Galaxy Grand comes with 5 Inch TFT LCD display. It is powered by 1.2 GHz Dual Core processor and 1GB RAM. It runs on Android 4.1.2 Jelly Bean. It supports Dual SIM ', 'white', 'samsung-galaxy-grand.jpg'),
(31, 'Samaung', 'Galaxy Grand', '21500', 'Galaxy Grand comes with 5 Inch TFT LCD display. It is powered by 1.2 GHz Dual Core processor and 1GB RAM. It runs on Android 4.1.2 Jelly Bean.', 'white', 'samsung-galaxy-grand.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `username`, `password`) VALUES
(0, 'amar', '1234'),
(0, 'amar', 'hello'),
(0, 'rohit', '12345'),
(0, 'admin', '1234'),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orde`
--

CREATE TABLE IF NOT EXISTS `orde` (
  `id` int(67) NOT NULL AUTO_INCREMENT,
  `fname` varchar(67) NOT NULL,
  `phone` varchar(78) NOT NULL,
  `gender` varchar(67) NOT NULL,
  `da` varchar(89) NOT NULL,
  `cname` varchar(78) NOT NULL,
  `mno` varchar(67) NOT NULL,
  `price` varchar(89) NOT NULL,
  `total` varchar(67) NOT NULL,
  `item` varchar(89) NOT NULL,
  `email` varchar(70) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orde`
--

INSERT INTO `orde` (`id`, `fname`, `phone`, `gender`, `da`, `cname`, `mno`, `price`, `total`, `item`, `email`, `image`) VALUES
(3, 'amar', '9034965556', 'on', '19/04/13', 'Acer', 'Gateway NE56R NX.Y14SI.012', '27000', '135000', '5', 'g@gmail.com', 'Acer-Gateway-NE56R-NX.Y14SI.012-Laptop_thumb[2].jpg'),
(6, 'amar', '9034965556', 'on', '19/04/13', 'sony', 'Xperia Z', '36990', '73980', '2', 'g@gmail.com', 'sony_xperia_z.jpg'),
(7, 'amarjit', '16548616', 'on', '23/04/13', 'Acer', 'Gateway NE56R NX.Y14SI.012', '27000', '54000', '2', 'amar9021@gmail.com', 'Acer-Gateway-NE56R-NX.Y14SI.012-Laptop_thumb[2].jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confirm_password` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `ph_no` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `image` varchar(888) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `first_name`, `last_name`, `email_id`, `password`, `confirm_password`, `gender`, `dob`, `address`, `city`, `state`, `ph_no`, `pincode`, `image`) VALUES
(17, 'amarjit', 'singh', 'amar9021@gmail.com', 'amarjit', '123456', 'on', '17/9/1989', 'ssqqdw', 'Amritsar', 'Punjab', '16548616', '168741', 'HP 2000-2201TU.jpg'),
(18, 'kulwant ', 'khokher', 'khokher.mattu@gmail.com', '123456', '123456', 'on', '1/4/1992', 'bhai rupa', 'Bathanda', 'Punjab', '9463441922', '151106', 'Acer Aspire V5 571.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(35) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `reply` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `user`, `email`, `comment`, `reply`) VALUES
(8, 'ajfkjhasjkhdsja', 'g@gmail.com', 'hjhsdkjahjkdshkj', 'mfa,dg,hasdhjsadhjshjgashjdghjsa.D:SA":');

-- --------------------------------------------------------

--
-- Table structure for table `sndfdbk`
--

CREATE TABLE IF NOT EXISTS `sndfdbk` (
  `id` int(35) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `comment` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sndfdbk`
--

INSERT INTO `sndfdbk` (`id`, `user`, `email`, `comment`) VALUES
(1, 'amarjit', 'amar9021@gmail.com', 'hello....'),
(2, 'Sony', 'kamal', 'hello '),
(3, 'ajfkjhasjkhdsja', 'g@gmail.com', 'hjhsdkjahjkdshkj'),
(4, 'amarjit', 'amar9021@gmail.com', 'biufhe kjhvoihrbv,jhebvkirehv'),
(5, 'kulwant singh', 'khokher.mattu@gmail.com', 'good to see this');
