-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-09 15:57:03
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `fh`
--

-- --------------------------------------------------------

--
-- 資料表結構 `car`
--

CREATE TABLE `car` (
  `email` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `num` int(20) NOT NULL,
  `kind` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `customer`
--

INSERT INTO `customer` (`email`, `password`, `username`, `phone`, `address`, `role`) VALUES
('boss@gmail.com', '1234', '黃管理', '', '', '2'),
('emp@gmail.com', '1234', '王曉明', '0123456789', '桃園市中壢區中山路', '3'),
('test@gmail.com', '1234', '徐若雅', '0989121838', '勤益科技大學', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `inv`
--

CREATE TABLE `inv` (
  `ProdName` varchar(31) NOT NULL COMMENT '產品名稱',
  `UnitPrice` double DEFAULT NULL COMMENT '單價',
  `qty` int(11) DEFAULT NULL COMMENT '庫存',
  `kind` varchar(30) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- 傾印資料表的資料 `inv`
--

INSERT INTO `inv` (`ProdName`, `UnitPrice`, `qty`, `kind`, `img`) VALUES
('心心相印', 30, 793, '巧克力棒', ''),
('木馬', 65, 500, '餅乾', ''),
('可可森林', 85, 200, '甜筒', ''),
('地中海藍', 85, 200, '甜筒', ''),
('杏仁可可', 25, 1000, '餅乾', ''),
('兔子小姐', 100, 298, '餅乾', ''),
('夜空流星', 30, 1000, '巧克力棒', ''),
('海洋珍珠', 55, 600, '巧克力棒', ''),
('粉紅芭比', 30, 799, '巧克力棒', ''),
('悠游小鴨', 65, 500, '巧克力棒', ''),
('球球巧克力', 30, 900, '餅乾', ''),
('愛戀草莓', 85, 192, '甜筒', ''),
('滿滿的愛', 65, 500, '巧克力棒', ''),
('熊熊先生', 100, 500, '餅乾', ''),
('熊熊軟糖', 30, 600, '餅乾', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- 資料表索引 `inv`
--
ALTER TABLE `inv`
  ADD PRIMARY KEY (`ProdName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
