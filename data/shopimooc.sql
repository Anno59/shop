-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-02-20 16:47:57
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopimooc`
--

-- --------------------------------------------------------

--
-- 表的结构 `imooc_admin`
--

CREATE TABLE IF NOT EXISTS `imooc_admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `imooc_admin`
--

INSERT INTO `imooc_admin` (`id`, `username`, `password`, `email`) VALUES
(13, 'root', '123', '123');

-- --------------------------------------------------------

--
-- 表的结构 `imooc_album`
--

CREATE TABLE IF NOT EXISTS `imooc_album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL,
  `albumPath` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `imooc_cate`
--

CREATE TABLE IF NOT EXISTS `imooc_cate` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cName` (`cName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `imooc_pro`
--

CREATE TABLE IF NOT EXISTS `imooc_pro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pName` varchar(50) NOT NULL,
  `pSn` varchar(50) NOT NULL,
  `pNum` int(10) unsigned DEFAULT '1',
  `mPrice` decimal(10,2) NOT NULL,
  `iPrice` decimal(10,2) NOT NULL,
  `pDesc` text,
  `pImg` varchar(50) NOT NULL,
  `pubTime` int(10) unsigned NOT NULL,
  `isShow` tinyint(1) DEFAULT '1',
  `isHot` tinyint(1) DEFAULT '0',
  `cId` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pName` (`pName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `imooc_user`
--

CREATE TABLE IF NOT EXISTS `imooc_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `sex` enum('男','女','保密') NOT NULL,
  `face` varchar(50) NOT NULL,
  `regTime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `pubTime` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `pubTime`) VALUES
(5, '江西农业大学', '江西农业大学新闻概要', '江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容\r\n江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容\r\n江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容江西农业大学主要内容', '2017-02-20 23:01:06'),
(6, '江西农业大学1', '概要', '江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学\r\n江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学\r\n江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学\r\n江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学\r\n', '2017-02-20 23:25:40'),
(7, '江西农业大学2', '概要2', '江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2\r\n江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2\r\n江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2江西农业大学2\r\n', '2017-02-20 23:27:52'),
(8, '江西农业大学4', '概要4', '江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学\r\n江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学\r\n江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学\r\n江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学\r\n江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学江西农业大学', '2017-02-20 23:29:14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
