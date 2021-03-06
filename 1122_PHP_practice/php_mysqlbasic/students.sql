-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-11-20 02:05:37
-- 伺服器版本: 10.1.36-MariaDB
-- PHP 版本： 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `class`
--

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL,
  `cName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cSex` enum('F','M') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'F',
  `cBirthday` date NOT NULL,
  `cEmail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cPhone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cAddr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cWeight` int(11) DEFAULT NULL,
  `cHeight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `students`
--

INSERT INTO `students` (`cID`, `cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`, `cWeight`, `cHeight`) VALUES
(01, '簡奉君', 'F', '1987-04-04', 'elven@superstar.com', '0922988876', '台北市濟洲北路12號', 49, 160),
(02, '黃靖輪', 'M', '1987-07-01', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓', 72, 175),
(03, '潘四敬', 'M', '1987-08-11', 'sugie@superstar.com', '0914530768', '台北市中央路201號7樓', 65, 162),
(04, '賴勝恩', 'M', '1984-06-20', 'shane@superstar.com', '0946820035', '台北市建國路177號6樓', 72, 178),
(05, '黎楚寧', 'F', '1988-02-15', 'ivy@superstar.com', '0920981230', '台北市忠孝東路520號6樓', 45, 164),
(06, '蔡中穎', 'M', '1987-05-05', 'zhong@superstar.com', '0951983366', '台北市三民路1巷10號', 75, 172),
(07, '徐佳螢', 'F', '1985-08-30', 'lala@superstar.com', '0918123456', '台北市仁愛路100號', 56, 158),
(08, '林雨媗', 'F', '1986-12-10', 'crystal@superstar.com', '0907408965', '台北市民族路204號', 48, 166),
(09, '林心儀', 'F', '1988-12-01', 'peggy@superstar.com', '0916456723', '台北市建國北路10號', 50, 168),
(10, '王燕博', 'M', '1993-08-10', 'albert@superstar.com', '0918976588', '台北市北環路2巷80號', 68, 169),
(11, 'BILL', 'M', '2018-10-17', 'YVTS@yahoo.com.tw', '0987654321', '新竹', 100, 190);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`cID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `cID` tinyint(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
