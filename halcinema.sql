-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 2 朁E02 日 12:11
-- サーバのバージョン： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halcinema`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `film`
--

CREATE TABLE `film` (
  `id` int(10) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `rdate` date NOT NULL,
  `year` int(4) NOT NULL,
  `country` varchar(10) CHARACTER SET utf8 NOT NULL,
  `runtime` int(3) NOT NULL,
  `company` varchar(50) CHARACTER SET utf8 NOT NULL,
  `supply` varchar(20) CHARACTER SET utf8 NOT NULL,
  `actor` varchar(50) CHARACTER SET utf8 NOT NULL,
  `theater` int(3) NOT NULL,
  `img1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `img2` varchar(20) CHARACTER SET utf8 NOT NULL,
  `img3` varchar(20) CHARACTER SET utf8 NOT NULL,
  `img4` varchar(20) CHARACTER SET utf8 NOT NULL,
  `yn` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `film`
--

INSERT INTO `film` (`id`, `title`, `rdate`, `year`, `country`, `runtime`, `company`, `supply`, `actor`, `theater`, `img1`, `img2`, `img3`, `img4`, `yn`) VALUES
(1, '君の名は。', '2016-08-26', 2016, '日本', 107, 'コミックス・ウェーブ・フィルム', '東宝', '神木隆之介・上白石萌音', 0, 'kiminona1.jpg', 'kiminona2.jpg', 'kiminona3.jpg', '', 1),
(2, '聲の形', '2016-09-17', 2016, '日本', 129, '京都アニメーション', '松竹', '入野自由・早見沙織', 0, 'koekata1.jpg', 'koekata2.jpg', 'koekata3.jpg', '', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `reserve`
--

CREATE TABLE `reserve` (
  `uid` int(5) NOT NULL,
  `tid` int(3) NOT NULL,
  `fid` int(10) NOT NULL,
  `row` varchar(1) NOT NULL,
  `column` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `theater`
--

CREATE TABLE `theater` (
  `tid` int(3) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `area` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `theater`
--

INSERT INTO `theater` (`tid`, `name`, `area`) VALUES
(15, '知床', '北海道'),
(16, '函館', '北海道'),
(17, '釧路', '北海道'),
(18, '札幌', '北海道'),
(19, '八戸', '東北'),
(20, '秋田', '東北'),
(21, '仙台', '東北'),
(22, '郡山', '東北'),
(23, '新宿', '関東'),
(24, '渋谷', '関東'),
(25, '海老名', '関東'),
(26, '横浜', '関東'),
(27, '浜松', '中部'),
(28, '上田', '中部'),
(29, '名古屋', '中部'),
(30, '岐阜', '中部'),
(31, '梅田', '関西'),
(32, '難波', '関西'),
(33, '京都河原町', '関西'),
(34, '宝塚', '関西'),
(35, '倉敷', '中国'),
(36, '米子', '中国'),
(37, '呉', '中国'),
(38, '松江', '中国'),
(39, '高松', '四国'),
(40, '松山', '四国'),
(41, '鳴門', '四国'),
(42, '徳島', '四国'),
(43, '博多', '九州'),
(44, '佐世保', '九州'),
(45, '薩摩川内', '九州'),
(46, '那覇', '九州');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `first` varchar(10) CHARACTER SET utf8 NOT NULL,
  `last` varchar(10) CHARACTER SET utf8 NOT NULL,
  `kanafirst` varchar(10) CHARACTER SET utf8 NOT NULL,
  `kanalast` varchar(10) CHARACTER SET utf8 NOT NULL,
  `phonenum` int(11) NOT NULL,
  `mail` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(16) CHARACTER SET utf8 NOT NULL,
  `secret` varchar(20) CHARACTER SET utf8 NOT NULL,
  `answer` int(20) NOT NULL,
  `nearest` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `kanafirst`, `kanalast`, `phonenum`, `mail`, `password`, `secret`, `answer`, `nearest`) VALUES
(2, '熊谷', '基継', 'くまがい', 'もとつぐ', 80117117, 'mototsugukumagai@tokyo.hal.ac.jp', 'kumagai', '好きな食べ物は？', 2, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `tid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
