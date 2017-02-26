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
DROP TABLE if EXISTS  `imooc_admin`;
CREATE TABLE `imooc_admin` (
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
DROP TABLE if EXISTS  `imooc_pro`;
CREATE TABLE `imooc_pro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL,
  `albumPath` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `imooc_cate`
--
DROP TABLE if EXISTS  `imooc_cate`;
CREATE TABLE `imooc_cate` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cName` (`cName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `imooc_pro`
--
DROP TABLE if EXISTS  `imooc_pro`;
CREATE TABLE `imooc_pro` (
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
DROP TABLE if EXISTS  `imooc_user`;
CREATE TABLE `imooc_user` (
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
DROP TABLE if EXISTS  `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `pubTime` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 表的结构 `user`
--
DROP TABLE if EXISTS  `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `idnumber` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `realname`, `idnumber`, `tel`, `email`) VALUES
(2, '1', '1', '1', '1', '1', '1@q.c'),
(3, 'root', '123', '1', '1', '1', '1@q.c'),
(4, 'root111', '123111', '11', '111', '11', '11'),
(7, 'root1123', '123213', '12312', '123123', '123123', '44'),
(8, 'root4434', '12312', '123', '12312', '312312', '123');

--
-- 表的结构 `product`
--

DROP TABLE if EXISTS  `product`;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `prePrice` varchar(100) NOT NULL,
  `discountPrice` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE if EXISTS  `order_pro`;
CREATE TABLE `order_Pro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `proName` varchar(255) NOT NULL,
  `proId` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
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
