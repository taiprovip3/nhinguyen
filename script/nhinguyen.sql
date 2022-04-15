-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 02:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhinguyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `authme`
--

CREATE TABLE `authme` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `ip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `lastlogin` bigint(20) DEFAULT NULL,
  `x` double NOT NULL DEFAULT 0,
  `y` double NOT NULL DEFAULT 0,
  `z` double NOT NULL DEFAULT 0,
  `world` varchar(255) NOT NULL DEFAULT 'world',
  `regdate` bigint(20) NOT NULL DEFAULT 0,
  `regip` varchar(40) CHARACTER SET ascii COLLATE ascii_bin DEFAULT NULL,
  `yaw` float DEFAULT NULL,
  `pitch` float DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isLogged` smallint(6) NOT NULL DEFAULT 0,
  `hasSession` smallint(6) NOT NULL DEFAULT 0,
  `totp` varchar(32) DEFAULT NULL,
  `uuid` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authme`
--

INSERT INTO `authme` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `uuid`) VALUES
(3, 'king5google', 'king5google', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', '116.110.41.153', 1626799807506, 0, 0, 0, 'world', 1626799640935, '116.110.41.153', NULL, NULL, NULL, 0, 0, NULL, '26ce962c-9e82-3dc7-96df-baca45db6d3d'),
(4, 'taipro1', 'taipro1', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(5, 'taipro2', 'taipro2', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(6, 'taipro3', 'taipro3', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(7, 'Fulkerson', 'Fulkerson', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(8, 'asssssssssssssss', 'asssssssssssssss', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(9, 'AnWibu', 'AnWibu', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(10, 'duonq', 'duonq', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(11, 'CoDonMotMinh', 'CoDonMotMinh', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(12, 'minhanbuoito89000', 'minhanbuoito89000', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(13, 'grwtwttw', 'grwtwttw', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(14, 'Huydeptrai', 'Huydeptrai', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(15, 'qualcom13', 'qualcom13', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(16, 'qualcom1', 'qualcom1', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(17, 'ConCacMOI', 'ConCacMOI', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(18, 'Quang6677aka', 'Quang6677aka', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(19, 'tunnek2007', 'tunnek2007', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(20, 'tunnek', 'tunnek', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(21, 'HieuHapHoi', 'HieuHapHoi', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(22, 'tan', 'tan', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(23, 'KhoaKoNgu3', 'KhoaKoNgu3', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(24, 'Khoadeptrai', 'Khoadeptrai', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(25, 'Hau1905', 'Hau1905', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(26, '_004', '_004', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(27, '1423', '1423', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(28, 'MinhnhutMC_VN', 'MinhnhutMC_VN', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(29, 'lmaol', 'lmaol', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(30, 'ccccccccc', 'ccccccccc', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(31, 'DungNek2', 'DungNek2', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(32, 'Dungkaito', 'Dungkaito', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(33, 'NCCoka', 'NCCoka', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(34, 'BeLaps', 'BeLaps', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(35, 'nhanche1', 'nhanche1', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(36, 'NT_BaoGM', 'NT_BaoGM', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(37, 'danhtienvt123', 'danhtienvt123', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(38, 'danhtienvt1407', 'danhtienvt1407', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(39, 'NT_Top1Hacker', 'NT_Top1Hacker', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(40, 'tunnek2007e', 'tunnek2007e', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(41, 'tunnekq', 'tunnekq', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(42, 'taolarong123', 'taolarong123', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(43, 'sangcaoxxx', 'sangcaoxxx', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(44, 'umout', 'umout', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(45, 'VH_GAMER_VN', 'VH_GAMER_VN', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(46, 'bibonl', 'bibonl', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(47, 'haokg9560', 'haokg9560', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(48, 'lumiere', 'lumiere', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(49, '2000Poka', '2000Poka', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(50, 'congdanhdepzai', 'congdanhdepzai', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(51, 'ZeroxX362', 'ZeroxX362', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(52, 'CallMeYasuooo', 'CallMeYasuooo', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(53, 'RyukiVn', 'RyukiVn', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(54, 'RyukiVn26', 'RyukiVn26', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(55, 'F0nG', 'F0nG', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(56, 'F00n', 'F00n', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(57, '2za905443', '2za905443', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(58, 'YTBJero', 'YTBJero', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(59, 'LOLMA', 'LOLMA', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(60, 'CCLOL', 'CCLOL', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(61, 'CCDITME', 'CCDITME', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(62, 'MinhGaming9x', 'MinhGaming9x', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(63, 'MinhGaming2k4', 'MinhGaming2k4', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(64, 'Higgs', 'Higgs', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(65, 'harus', 'harus', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(66, 'truong1111haha', 'truong1111haha', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(68, 'MelanTrance', 'MelanTrance', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(69, 'teoteo', 'teoteo', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(70, 'BusTus55', 'BusTus55', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(71, 'Casber55', 'Casber55', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(72, 'zxcvbnm', 'zxcvbnm', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(73, 'Moscar123', 'Moscar123', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(74, 'ItoKami', 'ItoKami', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(75, 'HMTGamer', 'HMTGamer', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(76, 'baojr4f', 'baojr4f', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(77, 'dattrumpl', 'dattrumpl', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(78, 'ccs', 'ccs', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(79, 'Hphong', 'Hphong', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(80, 'noob123k345', 'noob123k345', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(81, 'namkeje', 'namkeje', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(82, 'Trader', 'Trader', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(83, 'slimewolf', 'slimewolf', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(84, 'phamsan', 'phamsan', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(85, 'paindz12', 'paindz12', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(86, 'SickNubs', 'SickNubs', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(87, 'qualcom14', 'qualcom14', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(88, 'Ovgame', 'Ovgame', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(89, 'longhungvn', 'longhungvn', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(90, 'TranTai', 'TranTai', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(91, 'longla123', 'longla123', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(92, 'NamTranGaming', 'NamTranGaming', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(93, 'NamTranGaming123', 'NamTranGaming123', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(94, 'NormalRaptor', 'NormalRaptor', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(95, 'cocailonne', 'cocailonne', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(96, 'Nourist', 'Nourist', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(97, 'QuanggDZ', 'QuanggDZ', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(99, 'noeln', 'noeln', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(100, 'taipro4', 'taipro4', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taito1doraemon@gmail.com', 0, 0, NULL, NULL),
(101, 'taipro5', 'taipro5', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taito1doraemon@gmail.com', 0, 0, NULL, NULL),
(102, 'huhuhuhuhu_', 'huhuhuhuhu_', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(103, 'qambeo', 'qambeo', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(104, 'Onnie_chan', 'Onnie_chan', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(105, 'asdasdasdas', 'asdasdasdas', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(106, 'asdasdasdasd', 'asdasdasdasd', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(107, 'ShadowMC', 'ShadowMC', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(108, '3213213', '3213213', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(109, 'dxdiagbff', 'dxdiagbff', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taito1doraemon@gmail.com', 0, 0, NULL, NULL),
(110, 'Datkoii', 'Datkoii', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(111, 'Khoa', 'Khoa', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(112, 'qa5569', 'qa5569', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(113, '__KhoaNoob__', '__KhoaNoob__', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(114, 'OPlol', 'OPlol', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(115, '123OPLOL', '123OPLOL', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(116, 'TK123', 'TK123', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(117, '891FG', '891FG', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(118, 'GAMING HOSUE', 'GAMING HOSUE', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(119, 'nhan6586', 'nhan6586', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(120, 'Shuna', 'Shuna', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(121, 'Aiiiii_', 'Aiiiii_', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(122, 'asiodbabgfjabgjk', 'asiodbabgfjabgjk', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(123, 'asdbiaushfuioasbguo', 'asdbiaushfuioasbguo', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(124, 'Black_master_vn', 'Black_master_vn', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(125, 'Noobnew', 'Noobnew', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(126, 'ThinhWibuLord', 'ThinhWibuLord', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(127, 'PN01', 'PN01', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(128, 'NGKuroTo_VN_Game', 'NGKuroTo_VN_Game', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(129, 'NCa@caa', 'NCa@caa', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(130, 'Tanhuy5543', 'Tanhuy5543', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(131, 'binkongo', 'binkongo', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(132, 'bin1823', 'bin1823', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(133, 'HareYami626', 'HareYami626', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(134, 'Onii_Chann', 'Onii_Chann', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(135, 'Snake_Sniper', 'Snake_Sniper', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(136, 'NguDot1299', 'NguDot1299', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(137, 'McGamingvn', 'McGamingvn', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(138, 'Admingame123', 'Admingame123', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(139, 'Hoanglam', 'Hoanglam', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(140, 'taiproduaxe5', 'taiproduaxe5', '$SHA$d0d321e7014194c7$8212f99c72f7c31f08b5cc775b6522d20e5ef4bc82dd1a4e6f7e7f732557cfe9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taito1doraemon@gmail.com', 0, 0, NULL, NULL),
(141, 'taiproduaxe', 'taiproduaxe', '$SHA$d0d321e7014194c7$805b793bc049438d158d33006f6aff5fbcd4cb6ce2af4147dcb6a32473461aaa', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taito1doraemon@gmail.com', 0, 0, NULL, NULL),
(142, 'baoname', 'baoname', '$SHA$6c0485d9c1dc2701$9153acc8e8d75f05236c3f3aa1c37a597cc9820866bd44dcfc4b5c7aa0459247', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(143, 'nhan6586n', 'nhan6586n', '$SHA$a0dc33ec66377faf$35ca7fbb242e45bcc699407b913e8136fcf6bd0f5b40da44d2964b79249587fb', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(144, 'HỎI CHI', 'HỎI CHI', '$SHA$c11ef68a0dcf66c4$4d614094ec1eb2778de2cca8d673b1cf9275b2f7018c5c3721226f4494b59f2e', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(145, 'nhan6586nn', 'nhan6586nn', '$SHA$ca039253fcbec0e3$13c0970b75145631ac7ed2f27ed4ae67a998399a4b8f651bcfaf87eefd05b81f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(146, 'abcxyz', 'abcxyz', '$SHA$ab728b2f64f25610$baa0a0b1e117853f49c36d67ee48d8cbddedea9430ad66a691310e1619596640', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(147, 'choinguVN', 'choinguVN', '$SHA$80f658f6443e2fe1$84fd24ebe1096636a657eba02d1086bbf99e924bf8cda69813f4a43b0b72cfa5', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(148, 'Dino_Nick', 'Dino_Nick', '$SHA$49ce09d712096b9e$e3843bf6b2a7d5dce187a33c049574b8a9d8b863721e796b565568cafd580fb8', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(149, 'Bean', 'Bean', '$SHA$2771217556ed1fb5$559bc354b52c4bc5fc55ba316db7ff3f64cfd90fd53fd33e2029070c88088639', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(150, 'dinhtuandat', 'dinhtuandat', '$SHA$deeff6f5b03946e3$c356576224ecd41dd49e2d51e2609630852ba9a3c1829ccf4e81550b140ddd50', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(151, 'tundz1', 'tundz1', '$SHA$04f88b93bee4ce7b$6ad31d4e4f2ee2f884ea7c43d277c0453bc30b56b9e22b880f76e7267639a2d8', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(152, 'hello', 'hello', '$SHA$5512fa2c2f0f9f53$0079e827d5b59e09092a3e19f8f67f72defc4f1c3972a8c2409e3cdd4b6a71c4', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(153, 'abc123', 'abc123', '$SHA$f0c3984a2fe0029c$274e8047cea537bb27c6b85e5ddfc86c7e2f8239cf940e668eaeb4a4a71cb0d6', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(154, 'thtlovetta@gmail.com', 'thtlovetta@gmail.com', '$SHA$4ce1d5565e9cd718$24864f58aed1596c2f9b8f5bdae167cf015ae40300eeece479ff52a8aa26d96c', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(155, 'baby2911', 'baby2911', '$SHA$0c13428e105b3034$842a67b03ec8a7866317f331d815cccfb92b61b0f5b80a87b445720ef3481665', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(156, 'kaka291', 'kaka291', '$SHA$66f9becaab744ef2$5e41f4cb07aa972e6b79a88993e6a585c30187a62ada419b930084c6d70d670a', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(157, 'dai123', 'dai123', '$SHA$8539a4152bdb1166$283e0f01be7bfb0d68cebc9ee7bb6e16d6fe1b682586704766e802f792fa40be', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(158, 'SouraDiT', 'SouraDiT', '$SHA$a7d1de4af3abbb78$263d5285fd536b5610600a3efc6db11c89db72257d5f51ff925f578f49cd3c54', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(159, 'nguyen22cm', 'nguyen22cm', '$SHA$9635a962672210c9$d80c630189bc21278ce96313fbeac827deb47fc3ed3f561272663e106f08c8e9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(160, 'Rykel', 'Rykel', '$SHA$3f3cddc56ba3b4d6$b69659c126ca46954436b6189fe49dc9b4e46ed06394895b949bceb1bf503e58', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(161, 'lekhanhtung123xyz', 'lekhanhtung123xyz', '$SHA$da37f52b7dbc86de$3c22f542044bd7f3679accb336060b0e3a6c9b88c2221dbad53ca4fe7085e924', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(162, 'SouraDiT1', 'SouraDiT1', '$SHA$8968b85cbec11a1b$f4d0595604f30e13550c34cda30fa412f248eb275a474984e2bfbae1f943c314', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(163, 'account', 'account', '$SHA$8fcce100528e292e$4cef8e129566afa8048bf20ec163389ac430f406d6e714a5077299ec811c172b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(164, 'Soura0912', 'Soura0912', '$SHA$86c09d4399395f94$dcc6c9ea5f0224733a3954810d776dc72a4bdac6d0f475e2adfca1eefeacf01d', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(165, 'Soura091211', 'Soura091211', '$SHA$75aada533ba5a975$6cfcfd521b277aa74c0dac54b84f1ee993a049f239948c9907d8ed94bf8085c1', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(166, 'trongnam123', 'trongnam123', '$SHA$8fb64c6e7059ad8e$da0da2db7642e15d321c98f59a29437d5201f387f3a62ee2c25f5abbbdc78ac0', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(167, 'tainoob1', 'tainoob1', '$SHA$56c531d8f3489dc4$49a3ac8ec80f6b7da2ca47d535399f07455df9fd84489e6fa77e88e2d0c4096d', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(168, 'Buff', 'Buff', '$SHA$31aa57bdb0a965da$7e0d739cc61b35ec16b1278226adad2f2b78e566b891f40dbba4b7d9fcdc771f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(169, 'sunmc', 'sunmc', '$SHA$f8647ef26ce2df23$1536ff001d9a67588eff21b982d6909be1487aa3fb758671e615198ff7862944', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(170, 'sunmc1', 'sunmc1', '$SHA$ad0ab25c138be962$3e3cf26d64833f01db8875fe4005562e41799de7c629ff7b1a7b73fbfba78075', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(171, 'NgocToan', 'NgocToan', '$SHA$ebe191a04f2f573b$dabfd3b6f772e52e147fa435e3484f7f3302adeb945614a743458055f207d9a4', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(172, 'NguyenChiHoi', 'NguyenChiHoi', '$SHA$ea670f29e5c693ea$ac162764a23234f64e92da7b8bb13af28e86788ee3a0ea19a84d44cf5fea8f84', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(173, 'hisu029', 'hisu029', '$SHA$28085064f7f8bce2$2c506a5f5e1a5f60bb9c354f660374077bf5c9bd91730629fb0353af9c193239', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(174, '0516105', '0516105', '$SHA$4f2f80d543ee2fad$607e9e3e3b4c947e366ae94b87ef6f376c6124ff08c2c90e83df5716df6c22ac', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(175, 'asdasdasd', 'asdasdasd', '$SHA$ecf61164811e5023$cd99cd5853882d78c7b39a9fe9731ccdca6cdb26d7cbd65f59503b6ed2a3249b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(176, 'asdasdasd123', 'asdasdasd123', '$SHA$1b0bf5177faa811e$5c15a63f6bde2e6fc7373087665b042ac239b86b72e92b9f7957029f64a2847b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(177, '1203230', '1203230', '$SHA$d05725e27ee1b8ea$0f214deb8b20df3c3bc5452677ed02cd8f92be67a6e85baed13e470516187f8f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(178, 'Hello1234', 'Hello1234', '$SHA$62e645e9bfd7d73a$202e53d3a0fe9836460e1a6cb7d9afdca2cbd3c27796ccc80971e9ce966c27ab', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(179, 'TTungBuh', 'TTungBuh', '$SHA$4becd1d4f48656b8$8b6582cb09db71b0268f06c7093de1425899c31b5a8b14fec9fd1605c5e2bf5d', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(180, 'Trunk_YTB', 'Trunk_YTB', '$SHA$34febba11d2d74d1$017ec7f74bcf8e291c3c83a5ea43f7e2a181e60a6563ca822da4df9c929b0ceb', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(181, 'concato', 'concato', '$SHA$8da4a3dc8dec3d14$a65cc9bd6d83722a116f9eb89395b199ac190ed4614b6744d106d759604e0e09', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(182, 'concacto', 'concacto', '$SHA$f5f5b9421d0e543f$302a504d6c2cc2087e8928fa973d90802f9dbfad73d31d5def35e368fc175bbc', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(183, 'Minelegend123', 'Minelegend123', '$SHA$b01198177a120402$609108b867aed8624dbb79a96587d1994fffbdcc1cfa2f062e6a9b2fd82877b7', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(184, 'ngocdeptrai', 'ngocdeptrai', '$SHA$641f5c6c8d52ece2$1ff2717d482c0fa14a15f8be2862e52c2f91ddea2af5267b4d742a778abb05cc', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(185, 'dogrose', 'dogrose', '$SHA$22b27505ad5b0ecf$0ee64e8d87c4730f8089aae946a3a90f7c427fa503419d62e0d75e649c059d25', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(186, 'DOGGROSE', 'DOGGROSE', '$SHA$d89a239ddadb830e$e4afc7bf8238e1e4d6c98d3f4fe79c1a91b65a34eacddec7d2b48460434d3dae', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(187, 'thienlatao', 'thienlatao', '$SHA$3ebde6ec10ad3823$6449ae6969c5ecc4c8455d5826609c39f30cfd5e67a0ac033df6da8f637d5e96', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(188, 'tnvc', 'tnvc', '$SHA$15256e192206a4ad$f4f74002bf2bd40171a3410ebe8a4b3662d249203bd106857fbc6a80fd7bac18', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(189, 'phongzippo102', 'phongzippo102', '$SHA$fc94e8732e21bf0f$c02bdfd0fa70daa541ffa269194bccb6cb2199ff55fc1501ca1c18057f3902bb', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL),
(190, 'concacbu', 'concacbu', '$SHA$38f09d5849e94138$0dde1de441e37efe4bc054c4a00216fe08c36b0aac0a8e44bfeabcfdb1769c4e', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taito1doraemon@gmail.com', 0, 0, NULL, NULL),
(191, 'rptben', 'rptben', '$SHA$75f5db203cd1eab8$9727ec7b9e9fc2b35b981a170423d85ab2f51e8962d7dfdc3cb291a53b718ccf', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'tringuyenlexuan@gmail.com', 0, 0, NULL, NULL),
(192, 'kakaka291', 'kakaka291', '$SHA$620a5139f4eb3b7e$8ff5a9f2d33d461616e7ebe832ca92433193a6980bb05b2852f88e8e4329a548', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(193, 'NghiaDayy', 'NghiaDayy', '$SHA$7df9090f447539c8$0aea5fdf45933c66d9d59ed8370d68add539d80fa212b69c85d94c6f9870d0e1', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'gamingn852@gmail.com', 0, 0, NULL, NULL),
(194, 'tht123', 'tht123', '$SHA$6104e9d0ebe14b50$84e77fe07c83cc5dd9ed517a8afec69b233e761baa43317630d05a06a094e722', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'thtlovetta@gmail.com', 0, 0, NULL, NULL),
(195, 'sonvipking', 'sonvipking', '$SHA$d66e603a67482a95$31b701bdaa02ca80cdccb3ea3fee5e71e2ff30c411fe13970f08145a4500030c', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'trandinhson1511@gmail.com', 0, 0, NULL, NULL),
(196, 'anh280401', 'anh280401', '$SHA$d45872e0dc4623f5$775ff62aaadecaa21a75c8f1167fab9139721cfb0f3dc33906531b048a068980', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'duongtruong280401@gmail.com', 0, 0, NULL, NULL),
(197, 'tolapanda', 'tolapanda', '$SHA$bcec36a85c6cb51a$5bbec98562303ee2eb7cfe31717cd1d39b0aa4a44585d2007521d0b2a679ffb0', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'castomrom4@gmail.com', 0, 0, NULL, NULL),
(198, 'admin', 'admin', '$SHA$7f71446a7c4df422$7bf3c8458a4d68d84c10c490f87f6083c82ca4d7cb5609b8a72d2e1352440975', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'nguyendinhphong1590@gmail.com', 0, 0, NULL, NULL),
(199, 'phongdepzai', 'phongdepzai', '$SHA$caabbc84be9d65da$42c400c6b01f0c660fa8729805cffa7356edb51d1687bedff49d09bb83bdeef5', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'nguyendinhphong1590@gmail.com', 0, 0, NULL, NULL),
(200, 'Buculaxuhuong', 'Buculaxuhuong', '$SHA$7a926617167b2b30$57e1e6f8be24d5c188b714dbf0d7d6fac7ac606c3d29daf98463c631eb57319d', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(201, 'add', 'add', '$SHA$e0ea67e04c8b4521$6faf88e33099ee2356f998ea07c0eceebd0a419778c841005b512ed73e7a3d90', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'svmineblock@gmail.com', 0, 0, NULL, NULL),
(202, 'adm', 'adm', '$SHA$4beb23b549d56e35$d8906f68c81787bf615bf3a351fb87d0f893a2020abe7a2235bf71596e6c1ee9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'marcusjokido@gmail.com', 0, 0, NULL, NULL),
(203, 'khuongga152', 'khuongga152', '$SHA$dddf60dc9d72ad9d$a8b3759b86f145895357a4fcac4e64e9130ac7cdfcba9c666f2cfe52dd4c1f2f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(204, 'lunchay1977', 'lunchay1977', '$SHA$361dc047ae0ada37$61e1a161d9ac3166abfcc0f8c337fb186e4724b8d988d8d3c877f8f0c220e71b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'lehoanglong322005@gmail.com', 0, 0, NULL, NULL),
(205, 'lunchay2005', 'lunchay2005', '$SHA$35126a816adedc72$93eda13f3cf5127056486d99109bf44b82d9637602d7b491a32972e358f214fa', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'longlegaming@gmail.com', 0, 0, NULL, NULL),
(206, 'sama4vip', 'sama4vip', '$SHA$5fc795832345cbe8$211a8574ada2d762b39f9acc3047bd548f5e4b54896da706d5d04a72b44d62ed', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'yuenpi1121@gmail.com', 0, 0, NULL, NULL),
(207, 'hao280904', 'hao280904', '$SHA$424d7fd92ca35517$b83ef690e3f867030f2bb9bc35bd923f27bdf79058ed23e71b607fc35c67b606', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(208, 'Mineccc', 'Mineccc', '$SHA$94b75e57cb00c546$a95bcab351faf8232e34bf2016faf4d40d8d2849094fa6c6926cca862f7d0811', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(209, 'binhbi123', 'binhbi123', '$SHA$15af4fc6a4dbaab6$db47c7ecd1fbef4881f05e33f8e34bd36c07a564a80ffcc9adc3ed67e3b790dc', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'qứdsa@gmail.com', 0, 0, NULL, NULL),
(210, '32699', '32699', '$SHA$15d512326ea53e56$ce8b4dc234ab8d0c056a1483716738e886ad8ef88c633d69fbbed8ad0986dbe0', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'binhbiq@gmail.com', 0, 0, NULL, NULL),
(211, 'bibonl123', 'bibonl123', '$SHA$c9d50a2f128e23d9$8e50078c19fba2080fc13e99490c134cfcd6089e81950ff86881cd6936adc927', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'binhbi@gmail.com', 0, 0, NULL, NULL),
(212, 'Cocainit', 'Cocainit', '$SHA$efb9d785a47f76d3$b9a9ff9e1c69584c6778313541c5edafc2278c6dbb6c727493dcbf362e43d14f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(213, 'helloguys', 'helloguys', '$SHA$4162ddd1e8f02430$293230a59b56bab88f67e0df9c2ca2448ff7a1e26c94eeb556e033ccba7d8990', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(214, 'Chihoi', 'Chihoi', '$SHA$4c4b81f91a24c052$bad93db4acfcbf5e722e72c848942982129c110d81b76d22afbc08c909270562', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(215, 'CCGTV2001', 'CCGTV2001', '$SHA$1ab8457742a60ff5$78f8a641a23461325d443a4fba9f63b853cdcbfba6e0e5f611f43eff739defdb', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'hungnguyent10@gmail.com', 0, 0, NULL, NULL),
(216, 'ACDC', 'ACDC', '$SHA$ec27926ba9f134f9$6469d83ea00a5406e10270a10da6c76ab385fa5272b6dadab1f767bbfa686c03', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(217, 'Jade2k7', 'Jade2k7', '$SHA$6046988a0996e8f1$f4aa3959a1870398a23e28e80acf0a96b1955bf7de22f49adffff2ffed5006ab', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(218, 'vitcong', 'vitcong', '$SHA$96999c23fbfc8bae$417fb8a7e1a2b3c3054d645a8f20fce07b01be0c47708c45d10169bd467870cc', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(219, 'DFGMMM', 'DFGMMM', '$SHA$43dffab6bd68ec15$46d3c710974acebc002f1f46c86a07911a3729af3d17410e7d398a935a4be358', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(220, 'lukaql', 'lukaql', '$SHA$41cd7a0e6ee355e7$839831c97d8048bc64d7d6d325bc129cbe8c181deb5448ddc7b28381a40f727b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(221, 'daicr1234567890', 'daicr1234567890', '$SHA$132cb37b0275d022$fe58e182a35d2392a270b72285ef697f86e3422ed5d1214305f3f940111b5811', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(222, 'YunoriginL', 'YunoriginL', '$SHA$97b6f774b8e4dbb1$6393acbb212127c4aa4b2d5ae40e99d56502cdc02b3dddf06db4e8c0c68d7e36', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'ngaoa193@gmail.com', 0, 0, NULL, NULL),
(223, 'Lanamanh', 'Lanamanh', '$SHA$cbb781b636068833$3264c09b24316733c66056633577ce265b33a1a53bb798c293d057216c7035fd', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'Lanamanh@gmail.com', 0, 0, NULL, NULL),
(224, 'huytqd', 'huytqd', '$SHA$6b3b046376b124f5$e46e60b672f9133606508b7be9323c35e081690fe8f5a254ff3fc774b9efe374', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(225, 'Night_LC', 'Night_LC', '$SHA$be56b09952610224$eed73573c6bd36e9c8d814c4d5404bd80ffdcf8bb590345333312f5a0b9e201b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'lhuy52172@gmail.com', 0, 0, NULL, NULL),
(226, 'bobovip123', 'bobovip123', '$SHA$8c0b1f6a4a0c2143$9f1dbd7879c50d91a6d8861252816f7ef2e4097953963acf72f332ddb1ceecee', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(227, 'truykichnhunam', 'truykichnhunam', '$SHA$99aa153d453503bb$a2af623b185f3915755e25970007a6e411fdffb9c4cc30c4bb00242e0e1c8809', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(228, 'prokoem113', 'prokoem113', '$SHA$770ab2e2972f7797$23307cf06f3bc19303f95f664733dd1501d788c36f103c1a21d462509e04b112', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(229, 'hunter', 'hunter', '$SHA$f1a5144e853b8f82$b03880f26603c2227cbc857f03d34a956bd0463c63ea6a8fd757a78572b42fee', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'tranphong.hp29@gmail.com', 0, 0, NULL, NULL),
(230, 'voanhminh1', 'voanhminh1', '$SHA$748ad6a006e4ed30$6dfa2c4d450b1a57be5608ed305390dcdb0ea24af762ec3ce7d115472c04afed', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(231, 'bibonl2003', 'bibonl2003', '$SHA$ef1965d030e3a35c$3abc535d40944dcd012b5f00ad48f6b72029fd8819ae3ca58006fea2f2aa6439', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '1213', 0, 0, NULL, NULL),
(232, 'thanhthok26', 'thanhthok26', '$SHA$d032afefbc754a05$3af7d40ebb985e45968b5e58ac8ea74756ff16b31dda5f93f779e62d8be76362', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'thanh@gmail.com', 0, 0, NULL, NULL),
(233, 'BaoMCVN', 'BaoMCVN', '$SHA$b39ca113f3972831$bab6d48ec5c8bdd7c4bcf52f6200b005add793a44a3cc3893533560da4b1d703', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'baonq.a1mdc.2024@gmail.com', 0, 0, NULL, NULL),
(234, 'hieule', 'hieule', '$SHA$9f151814a149ded2$c426b81b65143603b207136f50ea2f4258b7c78c265df14541de01326d0c9b03', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(235, 'Trungvax', 'Trungvax', '$SHA$f3d62bb8c8b00ac1$cae172676e6e8711a10ab25b5916e98e4a46bac68bcff4e3984cb758df913249', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(236, 'maitrangledat', 'maitrangledat', '$SHA$5e5932412da6fe20$a8157094792bf6bff1d786d74ee4583c6dec0ee64c652bbf4785d0b299b25236', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(237, 'Rinzer', 'Rinzer', '$SHA$f81a7c87decb4eae$e71e9396bec83ae7bf6969c61e59aa1ee34121cf0c0552636e78c3eb9a60a46f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(238, 'trung9x9', 'trung9x9', '$SHA$d665a45ed1e3035f$ca7e390b99fc1c3bf5884e019198f6c8a462d12b8d3bddd4a0c0b74b9fe83c8f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'trunglaken@gmail.com', 0, 0, NULL, NULL),
(239, 'tungbegg', 'tungbegg', '$SHA$39fdd16b5c70b3c3$dd4b9fed3d5f9fd9176ccdc80edfb7c01dff834465469fcdf119053c63e63cd7', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'thanhtrung@gmail.com', 0, 0, NULL, NULL),
(240, 'Thanhchidz', 'Thanhchidz', '$SHA$b5f136c69930ade8$f7f2c47b41cd4f96a83a89bddf9d0485af9740a1db3e20f3bc2406cce9c74185', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(241, 'tung123d', 'tung123d', '$SHA$698a9b3cb4a7f47f$75ffaa5cd2e087fef9860cf1adee1eb11f119745e2cdbab659e1af209531eb6f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'tungtung30041@gmail.com', 0, 0, NULL, NULL),
(242, 'tung123d123', 'tung123d123', '$SHA$4dd79bc7139c30eb$9b0479f1309f71ddea7c0388d69e4969170aac9e0681f2110aff416be8a57567', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'tungtung40041@gmail.com', 0, 0, NULL, NULL),
(243, 'tung123d12', 'tung123d12', '$SHA$44bd939b32efcd6c$81516c634c047d5ef05cdc7b5817b92821a00e0a439a925439c02c192488e864', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'tungtung50041@gmail.com', 0, 0, NULL, NULL),
(244, 'Baothien', 'Baothien', '$SHA$74195a15858186f3$70325934e0c04bd761679136afc3c0275dc9ee555b2e7123bdfe4c99869105aa', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(245, 'Baothien3', 'Baothien3', '$SHA$2d2d8c5ac11e778f$1b5c053a798345e9edd23246d03a918567f61b1b1999fb0d202bc2093521225d', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(246, 'Baothien1', 'Baothien1', '$SHA$fc37e045aeb15e02$35b1fabaa069237d1b33dc950123f4090de8812ea6e758e233668d08757e02bf', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(247, 'Baothien0', 'Baothien0', '$SHA$da1a79d361364469$a914228fdaf17ff04140e273dae154b0486119257fedabe0cb62c1f11950af09', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(248, 'dâfafa', 'dâfafa', '$SHA$8bf2d5b2cda79d25$639e34542e0aab6be5597731981fafc0cbbf2010b50ee243ec929cb51447f17b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(249, 'Hld2k7', 'Hld2k7', '$SHA$e0f19c1fc7dfc629$0a58b04abd55b59a034adaa0fc3738c2446b1d58980ce2251a2f65f6ba0eca3f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(250, 'HuyXingum', 'HuyXingum', '$SHA$56c1c7d64deaeee7$d638aab20308f5dd46a7c8171746a771e8169c311e6c56d3ac8d0c131d68ed21', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'lamhuy08yl@gmail.com', 0, 0, NULL, NULL),
(251, 'DuongNoHope', 'DuongNoHope', '$SHA$dc2468601e99d9da$0d8cd8ae791285f5468e017a4f962b98541ff2e518fdaf5926320c68fe11c930', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(252, 'hldsad', 'hldsad', '$SHA$5f6581551025c242$662dfdcb434ec394ea6a96074804507fa7968e188e773c786c0b385107ef25dc', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(253, 'hldhappy', 'hldhappy', '$SHA$d90c9715fd1985dc$edea28aca818105fa5c726e988a05c417dcaeadf439d036515af08092f6f4a8b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(254, 'hldhappyn', 'hldhappyn', '$SHA$048244b9b63af268$7f9eecf3c4d23fa87ed705aeb009589f72ebb0140dc33f64e03e3f877f85ea2a', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(255, 'JayVNTV', 'JayVNTV', '$SHA$a2d8a992da06e48f$8bf09ccc949d474d5f3db1679eddb2e72ef888c721ea273e19cc526846bfdfda', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL);
INSERT INTO `authme` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `uuid`) VALUES
(256, 'BaoGM', 'BaoGM', '$SHA$22a96218186dcb39$0bbc039d56cd4fcc62e393eaa31ae7d197ae7c4517264de3f32fa95fded16653', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'baonq.a1mdc.2024@gmail.com', 0, 0, NULL, NULL),
(257, 'BaoGM2009', 'BaoGM2009', '$SHA$283875838b5be383$9859742eadab5b66c4e960a750e4f941a7c3ecdb2888ee1518cda22f121222a9', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'bihackacc2k9@gmail.com', 0, 0, NULL, NULL),
(258, 'NT_BaoVjpPro', 'NT_BaoVjpPro', '$SHA$18bc255502ca9dca$d435ce656746966f14a68d97926f5bfc7acdd6f8cb6da5f5a3c1363df6b82ded', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(259, 'Bao2009', 'Bao2009', '$SHA$f2f381a3e2453cb6$48111da20ae64fe60ac108c2e3c51ff31826555d9d627a0404ba9997bbbde99c', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'baonq.a1mdc.2024@gmail.com', 0, 0, NULL, NULL),
(260, 'anhvuquang0512', 'anhvuquang0512', '$SHA$279078088cb70149$8d6ab56577d489176fb7d5ce019f4479c344db12e8234766f55c1e98e2c3987e', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'anhvuquang0512@gmail.com', 0, 0, NULL, NULL),
(261, 'JackMagmaBlack', 'JackMagmaBlack', '$SHA$bb2f12d681bbbb5b$c7cdd4fd077a141bc404c693e4040fa4d5a03b77009655df95fdca1a6bf3af7c', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'ngohaian250413@gmail.com', 0, 0, NULL, NULL),
(262, 'Wibugay', 'Wibugay', '$SHA$3398fd7b27504a15$8ad91c46b6530e480e74c8df4f9f0b051c0f88ae17787d900a0c9784b5dc5040', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'phuoc2003vip@gmail.com', 0, 0, NULL, NULL),
(263, 'wibugay2', 'wibugay2', '$SHA$14dd161014cb3d77$1a59ca782bbdd96b8434880e1c16f335469dbbc1c50edc064ff842af4c7b02c8', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'phuoc2003vip@gmail.com', 0, 0, NULL, NULL),
(264, 'taiprocute123', 'taiprocute123', '$SHA$7d043d41820ae213$78381b89532030e9d0713eb79ffdc62d7e37b1bb232fd27abc9a464a1f137272', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taiprocute123@gmail.com', 0, 0, NULL, NULL),
(265, 'concak123', 'concak123', '$SHA$ce4db69edfa52eaa$79fb4f6d19ceeaeb365367f817e99ad703fca410b03b28479b71b1714f855d22', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'concak123', 0, 0, NULL, NULL),
(266, 'bagaha1234', 'bagaha1234', '$SHA$dbc693463dec0cc9$c5ab7f4c960a459e81567bf18cd5c36fe802cde3a013bdf7a3fe06e784659a80', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(267, 'bagaha12345', 'bagaha12345', '$SHA$b687a22d83666b3b$13b87049d13e2390b83a405e6f7140d34e733a0afdf113d70fd41d185b9aab8f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(268, 't111', 't111', '$SHA$72f383310ea090f7$2c1de593b134d80322e0954cbf176a045375c157e2a45234545ac0d3bd9934af', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'sadas@gmailc.com', 0, 0, NULL, NULL),
(269, 'SloppyShelf64', 'SloppyShelf64', '$SHA$72e189a79aa3eb19$c1e0d02b6ab126fb98feee865369366d960b9398f36cd684952cfb2eb3b84c01', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'huycaca110@gmail.com', 0, 0, NULL, NULL),
(270, 'DOGROSEE', 'DOGROSEE', '$SHA$57589939348c0d21$da5423e1a4f3be88e7b8a99c21449c87afcc65b8c53e91e7a07b501dbea02f72', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(271, 'Chohoahong', 'Chohoahong', '$SHA$587bcef9f34f004b$09916b8f6523e6c3f8cf91c1a98785018c49ce8e0bd09120ded0150c4683dd95', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(272, 'Herobaybinet', 'Herobaybinet', '$SHA$60d6f0f1268ae1fd$b1f6202f0f4612625be26e4fef254594a6a5a4a7e522b85687a326bcaab970c1', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'Shibagaming96@gmail.com', 0, 0, NULL, NULL),
(273, 'Catcutezz', 'Catcutezz', '$SHA$7fc3d7a2af096a52$bc01979db3da61a6cf71dcfa5d513c04aee6ad67d9af075bdaf7753cfc9bca08', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'Shibagaming96@gmail.com', 0, 0, NULL, NULL),
(274, 'ImZeRex', 'ImZeRex', '$SHA$9aa38e92bbf0f200$ece6edff01cf245ecf91012e524fdbbe176964bc7a6835df1b1431fd19864204', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'zeroytb2000@gmail.com', 0, 0, NULL, NULL),
(275, 'HareYami', 'HareYami', '$SHA$1abe495f6687d796$3c262f690d6e2ad31ba12b781ed5b9d5ad610063bebb53a1a730187f915e45dd', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'thaiduong8a4@gmail.com', 0, 0, NULL, NULL),
(276, 'CrazyGamerVN', 'CrazyGamerVN', '$SHA$51b3bb19fc2160cc$629676511f0b1493cef6997115324d7d55e27f51f8abf889cd91169ff46df4e4', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(277, 'anhvo322', 'anhvo322', '$SHA$ea8773ba20f73a63$57c08e44fe2865590605493080afd764c70c0b7aa8424af19b94962771fab69e', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(278, 'longryu', 'longryu', '$SHA$bf321f9c11c5a109$b5cd74444d0be5834376bf2de5d2f2eae590a5c9ffa6c7358902a5e4b935deb7', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'lragsilvv@gmail.com', 0, 0, NULL, NULL),
(279, 'longryu1', 'longryu1', '$SHA$147813c43aa3e726$bcca4035d52a9ecb6a6185cd0ffbb79a8f415978cfe98e36065d9fd92ff8e3ad', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'fnfwfwj@gmail.com', 0, 0, NULL, NULL),
(280, 'haohao123', 'haohao123', '$SHA$12f61c0a90ea4110$32aa47656528ab7046c405f4380f834c4ca3be82eb031ba5ee6d23828617d6e3', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(281, 'huysocute', 'huysocute', '$SHA$66f55f638642b98b$e0db24f9411970eef9db6183efe61ee08959d8c6292c5e5cc952b84f094fd973', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(282, 'huyboygaming', 'huyboygaming', '$SHA$bb2e91635afc7401$7b19c184979be5548ecf48a3e65ab300e5350d4022a67c782183e26261db9a8a', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(283, 'anhluu', 'anhluu', '$SHA$ddd532c330a3e12a$13f113b0c4b63d5da3b462b817951f0a8b306e4a73571eb2ee3b40866720d638', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(284, 'namphan', 'namphan', '$SHA$747c006045dcbd4f$9a84f52809faf45abac8f41616a858d651654d5def423725899c82c28eb9c1d1', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(285, 'Tientony112', 'Tientony112', '$SHA$87ba6d1348e0c643$87033973fccab2faa5f090c871f9a3c08bffcc10243ef82c2a4cc93263677d85', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(286, 'QuartzA', 'QuartzA', '$SHA$cfadb2853f38ecf2$ead15161f5ba61da1ec089d620680f0d2e8a7a7f031a32b0c3127a1c8f0dce2e', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(287, 'holads123', 'holads123', '$SHA$2bb89a91e1979055$0936d889504870311fa4ba5b743c235478542cd9cf453f9b731ac0d2f250b83c', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(288, 'hoang22', 'hoang22', '$SHA$6b9b4fd8765ed6bd$674e46e33ec77dc6534a3dcd4bfceaa8342189351fa1305d56523f165b1f04c6', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'ngulozpro@gmail.com', 0, 0, NULL, NULL),
(289, '0hshin', '0hshin', '$SHA$163725e8a087b097$f7bfc0ac12063fddf1fa37e34429b02d7f56ad5f60fb70599bd6ac7e009b9112', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(290, 'linhbede', 'linhbede', '$SHA$ee96c6aadbb761ea$50f8ce37dfcef7662ae394b6f6b56250d550639a9de4b226dbe5d2d5ad4cba08', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(291, 'concac123', 'concac123', '$SHA$44c9a9167ca78c16$49e9bcb66575b4ab4ca976c20610bb67b0a8382aa09e42a272b6f483920c4f8f', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(292, 'cactaydu1', 'cactaydu1', '$SHA$244e65a30c758ef0$9548fbb7de0a7422a6c8da1cc4270d4e07e136abc3de6ee6671212ad238046ae', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(293, 'ditconmemay1', 'ditconmemay1', '$SHA$057933601246bcb8$dd300f2cf412790eb0af73018f2a8620b88de60b5b10d7d10cfdd86c0e848bb5', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(294, 'Hungggxx', 'Hungggxx', '$SHA$1ba9a2473aa06b04$7f5ba520d62feb9a86c3be6e9127165b8471e0d8fddb5c2d59f3b3eae1d0abbe', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(295, 'Nyrtol1', 'Nyrtol1', '$SHA$6d0d94069b1a6914$78aefe301f26ca1a2ca1dc67791dc55d9d01d14264e61fb64b2e460497ad242c', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(296, 'PhongGremTyler', 'PhongGremTyler', '$SHA$9d6e7981368feae9$04544aba0b2249c0ec67b339c55d1e5ba0562ff3635ae31ece77564502e9e1fc', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'thangphong2k1@outlook.com.vn', 0, 0, NULL, NULL),
(297, 'HunnterF', 'HunnterF', '$SHA$3bd12a693fe12af4$e5a32ba242af5de3e013feb25da10f9c524845699028d61a0cb6c84a1283fda2', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'tranphong@gmail.com', 0, 0, NULL, NULL),
(298, 'Visionn', 'Visionn', '$SHA$79e70ee3c6acc085$acc1c57aaf4e7b4efd0480982fcee6bf2a1a964aa171b75e429b89ffab27e6b3', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'lehongphuc2486@gmail.com', 0, 0, NULL, NULL),
(299, 'SenioZ', 'SenioZ', '$SHA$e92efc19d4fe7eca$287d137023c67bc2bb650dadf075db765fec328f23814e7feecf990652852a2b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'yosivechannel@gmail.com', 0, 0, NULL, NULL),
(300, 'froggi', 'froggi', '$SHA$eb5416db25d4429d$ceef5923b7ae647979c706aba24ab9043944d244b75165b8e28b1b22e41279f8', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'hoaiga052@gmail.com', 0, 0, NULL, NULL),
(301, 'froggi123', 'froggi123', '$SHA$7f2d72af9e63c88b$c70a633360005ed2d29baa221d4d6b42d76973afa24bf034facb19bc88a84f6b', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'huuhoai2000like@gmail.com', 0, 0, NULL, NULL),
(302, 'khoa699', 'khoa699', '$SHA$403f02e7325ccc5c$08923e9d75ff815bf23e4a49f4043bffed38b87c8638cc8ef2633db2090a5c09', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '612005khoa@gmail.com', 0, 0, NULL, NULL),
(303, 'BaoIsGay', 'BaoIsGay', '$SHA$e2e1f4c3c52f22b4$89ba93c805b1d14e11755b29f4266dd4e8937220aaba7648ff53456d06e5e427', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'baonq.a1mdc.2024@gmail.com', 0, 0, NULL, NULL),
(304, 'chillfuzzy', 'chillfuzzy', '$SHA$2c09f9bcd1dd2a39$4586ea435c114abcfe3f208a1e788a8c821fc1cc5b0f71a078bb07c48cc73019', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, '', 0, 0, NULL, NULL),
(305, 'Lmao', 'Lmao', '$SHA$1c0e0ae9cab6c55c$d864b3eafd15e971c6876084ca9b2d0b3c9254daf7e2a75ce637e52641883b92', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'tuananhcj1234@gmail.com', 0, 0, NULL, NULL),
(306, 'toanngaoda100az', 'toanngaoda100az', '$SHA$96793fcdc3eb216e$724fa18c4433512aecef936aca0ec7871a1f1c4338e1f2b7460a6e1a1107e598', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'toannguvaicut@gmail.com', 0, 0, NULL, NULL),
(307, 'jojo3', 'jojo3', '$SHA$d28267130b6c6d89$94e4b01a4d916e05b0471f7aea1c38f131901d627e566bd706ea27d503191afc', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taito1doraemon@gmail.com', 0, 0, NULL, NULL),
(308, 'taipro6', 'taipro6', '$SHA$8141a0a99b182f74$4a982c5fc75b9bc13cee09690c9e98956310a8f3e44fb2762284c3b7e947fba3', NULL, NULL, 0, 0, 0, 'world', 0, NULL, NULL, NULL, 'taito1doraemon@gmail.com', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `codeid` varchar(255) NOT NULL,
  `codename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `codebin` varchar(255) NOT NULL,
  `enday` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`codeid`, `codename`, `codebin`, `enday`) VALUES
('gthv', 'GIỖ TỔ HÙNG VƯƠNG', 'HAPPYGIOTOHUNGVUONG2022', '2021-04-30 08:42:10');

-- --------------------------------------------------------

--
-- Table structure for table `countdownloads`
--

CREATE TABLE `countdownloads` (
  `fileid` varchar(255) DEFAULT NULL,
  `plid` varchar(255) DEFAULT NULL,
  `countdown` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countdownloads`
--

INSERT INTO `countdownloads` (`fileid`, `plid`, `countdown`) VALUES
('10', NULL, 1),
('11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `fileid` varchar(255) NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `filecost` double NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`fileid`, `filename`, `filecost`, `link`) VALUES
('0', 'OP SKYBLOCK VINASKY V1', 1, 'https://uploading.vn/oizugjxr97sq'),
('1', 'OP SKYBLOCK VINASKY V2', 1, 'https://uploading.vn/robmxdmf5010'),
('10', 'Prison 1.15', 1, 'https://uploading.vn/pxbofymidcmw'),
('11', 'Skyblock Vanilla Survival', 1, 'https://uploading.vn/07e67i6fqe1a'),
('2', 'Skyblock 7.0', 1, 'https://uploading.vn/o1cl29edhmg3'),
('3', 'Skyblock 7.0 Remake', 5, 'https://uploading.vn/ilvjge5qvvez'),
('4', 'Towny Diamond 2.0', 1, 'https://uploading.vn/ip9j3co0nv3z'),
('5', 'Lucky Skyblock', 1, 'https://uploading.vn/epv6ntbm63bv'),
('6', 'Skyblock Outdated', 1, 'https://uploading.vn/xanypvv194r9'),
('7', 'Towny 1.12', 1, 'https://uploading.vn/o2fdt4117nmx'),
('8', 'Prison Revolution', 2, 'https://uploading.vn/6m52nv8rtnme'),
('9', 'Sky Egg', 1, 'https://uploading.vn/k84y0ts3rc6a');

-- --------------------------------------------------------

--
-- Table structure for table `filedownloads`
--

CREATE TABLE `filedownloads` (
  `fileid` varchar(255) NOT NULL,
  `countdown` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playercodes`
--

CREATE TABLE `playercodes` (
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `receiveat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `checkout` tinyint(1) NOT NULL DEFAULT 0,
  `codeid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playercodes`
--

INSERT INTO `playercodes` (`username`, `receiveat`, `description`, `checkout`, `codeid`) VALUES
('jojo3', '2022-04-15 11:48:01', '+5 token, +1 coin', 1, 'gthv');

-- --------------------------------------------------------

--
-- Table structure for table `playercoins`
--

CREATE TABLE `playercoins` (
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `token` double NOT NULL DEFAULT 0,
  `coin` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playercoins`
--

INSERT INTO `playercoins` (`username`, `token`, `coin`) VALUES
('taiproduaxe', 1, 0),
('jojo3', 41, 9);

-- --------------------------------------------------------

--
-- Table structure for table `playercomments`
--

CREATE TABLE `playercomments` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playercomments`
--

INSERT INTO `playercomments` (`id`, `username`, `email`, `comment`, `time`) VALUES
(9, 'taiproduaxe', '', 'Sao sv sập r ad ?', '2022-04-08 10:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `playerfiles`
--

CREATE TABLE `playerfiles` (
  `id` smallint(6) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(255) NOT NULL,
  `boughtat` timestamp NOT NULL DEFAULT current_timestamp(),
  `link` varchar(255) NOT NULL,
  `fileid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerfiles`
--

INSERT INTO `playerfiles` (`id`, `username`, `filename`, `boughtat`, `link`, `fileid`) VALUES
(2, 'jojo3', 'PRISON 1.15', '2022-04-15 12:39:31', 'https://uploading.vn/pxbofymidcmw', '10'),
(3, 'jojo3', 'SKYBLOCK VANILLA', '2022-04-15 12:40:38', 'https://uploading.vn/07e67i6fqe1a', '11');

-- --------------------------------------------------------

--
-- Table structure for table `playermails`
--

CREATE TABLE `playermails` (
  `fromwho` varchar(255) NOT NULL,
  `towho` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mailid` int(10) UNSIGNED NOT NULL,
  `response` text NOT NULL DEFAULT 'first'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playermails`
--

INSERT INTO `playermails` (`fromwho`, `towho`, `title`, `content`, `mailid`, `response`) VALUES
('Admin', 'jojo3', 'GiftCode', 'HAPPYGIOTOHUNGVUONG2022', 85, 'first'),
('jojo3', 'Admin', 'GiftCode', 'cám ơn ad', 88, 'reply'),
('Admin', 'taipro6', 'GIFTCODEgthv|2022', 'HAPPYGIOTOHUNGVUONG2022', 89, 'first'),
('taipro6', 'Admin', 'GIFTCODEgthv|2022', 'Cám ơn ad', 90, 'reply'),
('Admin', 'jojo3', 'GIFTCODE', 'HAPPYGIOTOHUNGVUONG2022', 102, 'first');

-- --------------------------------------------------------

--
-- Table structure for table `playermusters`
--

CREATE TABLE `playermusters` (
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastmuster` timestamp NOT NULL DEFAULT current_timestamp(),
  `countmuster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playermusters`
--

INSERT INTO `playermusters` (`username`, `lastmuster`, `countmuster`) VALUES
('taiproduaxe', '2022-04-11 08:01:23', 1),
('jojo3', '2022-04-14 10:17:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `playerplugins`
--

CREATE TABLE `playerplugins` (
  `id` smallint(6) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `plname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `boughtat` timestamp NOT NULL DEFAULT current_timestamp(),
  `link` varchar(255) NOT NULL,
  `plid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playerprofiles`
--

CREATE TABLE `playerprofiles` (
  `email` varchar(255) DEFAULT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `age` int(6) DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playerprofiles`
--

INSERT INTO `playerprofiles` (`email`, `sdt`, `name`, `age`, `sex`, `username`) VALUES
('', '0338188506', '', 20, 'Nam', 'taiproduaxe'),
('taito1doraemon@gmail.com', '02838837067', 'King Of Jojo', 20, 'Nam', 'jojo3');

-- --------------------------------------------------------

--
-- Table structure for table `plugin`
--

CREATE TABLE `plugin` (
  `plid` varchar(255) NOT NULL,
  `plname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `plcost` double NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plugin`
--

INSERT INTO `plugin` (`plid`, `plname`, `plcost`, `link`) VALUES
('0', 'Advanced Indicator', 5, 'https://uploading.vn/advancedindicator0'),
('1', 'Anima Bossbar', 5, 'https://uploading.vn/animabossbar1'),
('2', 'Auto Pickup', 5, 'https://uploading.vn/autopickup2');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `count_rate` int(11) NOT NULL,
  `total_star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`count_rate`, `total_star`) VALUES
(3, 15);

-- --------------------------------------------------------

--
-- Table structure for table `salt`
--

CREATE TABLE `salt` (
  `username` varchar(200) DEFAULT NULL,
  `salt` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salt`
--

INSERT INTO `salt` (`username`, `salt`) VALUES
('taipro1', '273ca6f2667ed419'),
('taipro2', 'e3d4dfb4a7035113'),
('taipro3', '01c33a985dcd05b2'),
('Fulkerson', '7e63b6f25990b447'),
('asssssssssssssss', 'c34cbf01ce5c0fcd'),
('AnWibu', '30766369cba57fff'),
('duonq', '026027aa49e14752'),
('CoDonMotMinh', '5f218eb4f4dda85c'),
('minhanbuoito89000', '640faf82e7765a64'),
('grwtwttw', '02807cc35b345f0d'),
('Huydeptrai', 'c32c760c9ccda877'),
('qualcom13', 'b2f1eaeb1afa17a6'),
('qualcom1', 'e81a000732246f49'),
('ConCacMOI', 'f472f5c05c9cd014'),
('Quang6677aka', '59e9e29f7925841b'),
('tunnek2007', '780b706b43439a19'),
('tunnek', 'f9a0f7be17cb829c'),
('HieuHapHoi', 'b3e63dd898e094a6'),
('tan', '66251ed9128f2c3c'),
('KhoaKoNgu3', '919a6da4f3132c30'),
('Khoadeptrai', '84ba1731d0108b36'),
('Hau1905', 'ca8e8ebf67cc66c2'),
('_004', '533d8a4d00a69e43'),
('1423', 'cb0e0395bf85faa7'),
('MinhnhutMC_VN', 'aadca1ebc31149e2'),
('lmaol', '480430277002af5d'),
('ccccccccc', '6df117fec486f71c'),
('DungNek2', 'a86846d92b746e92'),
('Dungkaito', 'd64039865c86448e'),
('NCCoka', 'ef3432ee0f1532d7'),
('BeLaps', '920a5487dbf60c78'),
('nhanche1', '137569d26c91e521'),
('NT_BaoGM', 'af1bc0cd53aaa298'),
('danhtienvt123', '66aff7b6e3bc171c'),
('danhtienvt1407', 'be36eeaacf775049'),
('NT_Top1Hacker', '3d0d0d72c8cfde99'),
('tunnek2007e', '131012991d4de251'),
('tunnekq', '056cfbd3a3cf88bd'),
('taolarong123', 'c999691cd29da091'),
('sangcaoxxx', 'fa8f8da7c6f04768'),
('umout', 'c9c188d80792f035'),
('VH_GAMER_VN', 'de73bfb269cd4eba'),
('bibonl', '6f72abbe5ebaf41a'),
('haokg9560', 'a2e382c5f93dc9b9'),
('lumiere', 'd7f3f01085a40cec'),
('2000Poka', '02d0c42a59627893'),
('congdanhdepzai', 'ffaaa0be660026d5'),
('ZeroxX362', 'e63b903976654594'),
('CallMeYasuooo', '21f0823d7f3a2247'),
('RyukiVn', 'afd5fcaeba8e4e97'),
('RyukiVn26', '4c66060c4af67714'),
('F0nG', 'a5992e95079e346e'),
('F00n', 'c6ead7ea6b01b916'),
('2za905443', 'de64768f848fe575'),
('YTBJero', '490b1d8ff91ac8b6'),
('LOLMA', '8383eb7fa3aa08af'),
('CCLOL', 'b03c421be19c29e9'),
('CCDITME', '5ad4dd6ecd42bab4'),
('MinhGaming9x', '4c1303e78323b596'),
('MinhGaming2k4', '113ab0b7e68b19c9'),
('Higgs', '39cdd8f049595fb6'),
('harus', '8249b0c24534ae5d'),
('truong1111haha', '1ca87199deeff818'),
('MelanTrance', '83b4334613af968d'),
('teoteo', 'a992d5634fe0e3de'),
('BusTus55', 'c610c0abe543113a'),
('Casber55', 'dacd9312af2ff79d'),
('zxcvbnm', 'f79264a5594c3453'),
('Moscar123', 'bb2b8af9e6696564'),
('ItoKami', 'd2182d4a7218941b'),
('HMTGamer', '761c0cf6f8ac66ff'),
('baojr4f', '855d0215cef60181'),
('dattrumpl', 'a375b8a1654aee9d'),
('ccs', '4b4d1f1d7110bc52'),
('Hphong', 'db225bde1f6ef74c'),
('noob123k345', '66e99d546a6d3347'),
('namkeje', '00b829b36647d37a'),
('Trader', 'db97f8f1e60b7824'),
('slimewolf', '050dac046b9516b6'),
('phamsan', '8642bad18bd5b7a0'),
('paindz12', '213e602904a60cc2'),
('SickNubs', 'c64f1c138703d63a'),
('qualcom14', '4b230f6dc223aa07'),
('Ovgame', '242af1552c311c88'),
('longhungvn', '3624f61bb9690439'),
('TranTai', 'a7619641d20184fc'),
('longla123', '5aa68064bb39d81d'),
('NamTranGaming', '4d1723b48b2bd94c'),
('NamTranGaming123', '8e6717364aac1c98'),
('NormalRaptor', 'cf282d484e8e614c'),
('cocailonne', '2e5b33e43378ea1f'),
('Nourist', 'e4f47a7cbad0ceca'),
('QuanggDZ', 'f5275522d4920d1b'),
('king5google', '351e3a62cad47f9a'),
('noeln', 'de8d977ff3cd5e7c'),
('taipro4', 'b351a572cd72effe'),
('taipro5', '37f91091aa11f8a4'),
('huhuhuhuhu_', '746ca20ab6ab4008'),
('qambeo', '05585c75da406d6b'),
('Onnie_chan', 'd64de10741c8f4f4'),
('asdasdasdas', 'e61c1e222a2cedc2'),
('asdasdasdasd', '933837298b4c121e'),
('ShadowMC', '31ebe16f11128a20'),
('3213213', '4fc4847b1d59b328'),
('dxdiagbff', '592374507fdb2f00'),
('Datkoii', '81654ae857bcb00d'),
('Khoa', '7aa90376a380d90a'),
('qa5569', '215f6868c5d16827'),
('__KhoaNoob__', '3ceb746dcf449cef'),
('OPlol', 'd0329fb0d50387dc'),
('123OPLOL', 'd13188df67815e25'),
('TK123', '56c3a14e766b4320'),
('891FG', '211305a203beab82'),
('GAMING HOSUE', '2d696550fbe4984b'),
('nhan6586', 'c6be78fd355a4bcc'),
('Shuna', '80f7fe6548acca23'),
('Aiiiii_', 'deb889efd363614b'),
('asiodbabgfjabgjk', '72e2b0f04d818860'),
('asdbiaushfuioasbguo', 'bd2cf6685ac50a57'),
('Black_master_vn', '03e9cca8c9ebf3e3'),
('Noobnew', '8913fa04d9014319'),
('ThinhWibuLord', '380ccbc5cd0d64fd'),
('PN01', 'b4ccdbc5ece56196'),
('NGKuroTo_VN_Game', '5c9b3ec7f6101837'),
('NCa@caa', '071514105a4aab65'),
('Tanhuy5543', 'd5007c52fc42e4da'),
('binkongo', 'd38b705d5ed90fd0'),
('bin1823', 'ddcd0b4819071950'),
('HareYami626', '8777fa3e28807c0e'),
('Onii_Chann', 'ce5f8e9c79edc874'),
('Snake_Sniper', '497b612caaaf679f'),
('NguDot1299', '014ee4a2c86197e6'),
('McGamingvn', '407b287232eb2e94'),
('Admingame123', 'f2752b6049b86855'),
('Hoanglam', '8bae417c3feadf45'),
('taiproduaxe5', '6ac0105619cd89bc'),
('taiproduaxe', 'd0d321e7014194c7'),
('baoname', '6c0485d9c1dc2701'),
('nhan6586n', 'a0dc33ec66377faf'),
('HỎI CHI', 'c11ef68a0dcf66c4'),
('nhan6586nn', 'ca039253fcbec0e3'),
('abcxyz', 'ab728b2f64f25610'),
('choinguVN', '80f658f6443e2fe1'),
('Dino_Nick', '49ce09d712096b9e'),
('Bean', '2771217556ed1fb5'),
('dinhtuandat', 'deeff6f5b03946e3'),
('tundz1', '04f88b93bee4ce7b'),
('hello', '5512fa2c2f0f9f53'),
('abc123', 'f0c3984a2fe0029c'),
('thtlovetta@gmail.com', '4ce1d5565e9cd718'),
('baby2911', '0c13428e105b3034'),
('kaka291', '66f9becaab744ef2'),
('dai123', '8539a4152bdb1166'),
('SouraDiT', 'a7d1de4af3abbb78'),
('nguyen22cm', '9635a962672210c9'),
('Rykel', '3f3cddc56ba3b4d6'),
('lekhanhtung123xyz', 'da37f52b7dbc86de'),
('SouraDiT1', '8968b85cbec11a1b'),
('account', '8fcce100528e292e'),
('Soura0912', '86c09d4399395f94'),
('Soura091211', '75aada533ba5a975'),
('trongnam123', '8fb64c6e7059ad8e'),
('tainoob1', '56c531d8f3489dc4'),
('Buff', '31aa57bdb0a965da'),
('sunmc', 'f8647ef26ce2df23'),
('sunmc1', 'ad0ab25c138be962'),
('NgocToan', 'ebe191a04f2f573b'),
('NguyenChiHoi', 'ea670f29e5c693ea'),
('hisu029', '28085064f7f8bce2'),
('0516105', '4f2f80d543ee2fad'),
('asdasdasd', 'ecf61164811e5023'),
('asdasdasd123', '1b0bf5177faa811e'),
('1203230', 'd05725e27ee1b8ea'),
('Hello1234', '62e645e9bfd7d73a'),
('TTungBuh', '4becd1d4f48656b8'),
('Trunk_YTB', '34febba11d2d74d1'),
('concato', '8da4a3dc8dec3d14'),
('concacto', 'f5f5b9421d0e543f'),
('Minelegend123', 'b01198177a120402'),
('ngocdeptrai', '641f5c6c8d52ece2'),
('dogrose', '22b27505ad5b0ecf'),
('DOGGROSE', 'd89a239ddadb830e'),
('thienlatao', '3ebde6ec10ad3823'),
('tnvc', '15256e192206a4ad'),
('phongzippo102', 'fc94e8732e21bf0f'),
('concacbu', '38f09d5849e94138'),
('rptben', '75f5db203cd1eab8'),
('kakaka291', '620a5139f4eb3b7e'),
('NghiaDayy', '7df9090f447539c8'),
('tht123', '6104e9d0ebe14b50'),
('sonvipking', 'd66e603a67482a95'),
('anh280401', 'd45872e0dc4623f5'),
('tolapanda', 'bcec36a85c6cb51a'),
('admin', '7f71446a7c4df422'),
('phongdepzai', 'caabbc84be9d65da'),
('Buculaxuhuong', '7a926617167b2b30'),
('add', 'e0ea67e04c8b4521'),
('adm', '4beb23b549d56e35'),
('khuongga152', 'dddf60dc9d72ad9d'),
('lunchay1977', '361dc047ae0ada37'),
('lunchay2005', '35126a816adedc72'),
('sama4vip', '5fc795832345cbe8'),
('hao280904', '424d7fd92ca35517'),
('Mineccc', '94b75e57cb00c546'),
('binhbi123', '15af4fc6a4dbaab6'),
('32699', '15d512326ea53e56'),
('bibonl123', 'c9d50a2f128e23d9'),
('Cocainit', 'efb9d785a47f76d3'),
('helloguys', '4162ddd1e8f02430'),
('Chihoi', '4c4b81f91a24c052'),
('CCGTV2001', '1ab8457742a60ff5'),
('ACDC', 'ec27926ba9f134f9'),
('Jade2k7', '6046988a0996e8f1'),
('vitcong', '96999c23fbfc8bae'),
('DFGMMM', '43dffab6bd68ec15'),
('lukaql', '41cd7a0e6ee355e7'),
('daicr1234567890', '132cb37b0275d022'),
('YunoriginL', '97b6f774b8e4dbb1'),
('Lanamanh', 'cbb781b636068833'),
('huytqd', '6b3b046376b124f5'),
('Night_LC', 'be56b09952610224'),
('bobovip123', '8c0b1f6a4a0c2143'),
('truykichnhunam', '99aa153d453503bb'),
('prokoem113', '770ab2e2972f7797'),
('hunter', 'f1a5144e853b8f82'),
('voanhminh1', '748ad6a006e4ed30'),
('bibonl2003', 'ef1965d030e3a35c'),
('thanhthok26', 'd032afefbc754a05'),
('BaoMCVN', 'b39ca113f3972831'),
('hieule', '9f151814a149ded2'),
('Trungvax', 'f3d62bb8c8b00ac1'),
('maitrangledat', '5e5932412da6fe20'),
('Rinzer', 'f81a7c87decb4eae'),
('trung9x9', 'd665a45ed1e3035f'),
('tungbegg', '39fdd16b5c70b3c3'),
('Thanhchidz', 'b5f136c69930ade8'),
('tung123d', '698a9b3cb4a7f47f'),
('tung123d123', '4dd79bc7139c30eb'),
('tung123d12', '44bd939b32efcd6c'),
('Baothien', '74195a15858186f3'),
('Baothien3', '2d2d8c5ac11e778f'),
('Baothien1', 'fc37e045aeb15e02'),
('Baothien0', 'da1a79d361364469'),
('dâfafa', '8bf2d5b2cda79d25'),
('Hld2k7', 'e0f19c1fc7dfc629'),
('HuyXingum', '56c1c7d64deaeee7'),
('DuongNoHope', 'dc2468601e99d9da'),
('hldsad', '5f6581551025c242'),
('hldhappy', 'd90c9715fd1985dc'),
('hldhappyn', '048244b9b63af268'),
('JayVNTV', 'a2d8a992da06e48f'),
('BaoGM', '22a96218186dcb39'),
('BaoGM2009', '283875838b5be383'),
('NT_BaoVjpPro', '18bc255502ca9dca'),
('Bao2009', 'f2f381a3e2453cb6'),
('anhvuquang0512', '279078088cb70149'),
('JackMagmaBlack', 'bb2f12d681bbbb5b'),
('Wibugay', '3398fd7b27504a15'),
('wibugay2', '14dd161014cb3d77'),
('taiprocute123', '7d043d41820ae213'),
('concak123', 'ce4db69edfa52eaa'),
('bagaha1234', 'dbc693463dec0cc9'),
('bagaha12345', 'b687a22d83666b3b'),
('t111', '72f383310ea090f7'),
('SloppyShelf64', '72e189a79aa3eb19'),
('DOGROSEE', '57589939348c0d21'),
('Chohoahong', '587bcef9f34f004b'),
('Herobaybinet', '60d6f0f1268ae1fd'),
('Catcutezz', '7fc3d7a2af096a52'),
('ImZeRex', '9aa38e92bbf0f200'),
('HareYami', '1abe495f6687d796'),
('CrazyGamerVN', '51b3bb19fc2160cc'),
('anhvo322', 'ea8773ba20f73a63'),
('longryu', 'bf321f9c11c5a109'),
('longryu1', '147813c43aa3e726'),
('haohao123', '12f61c0a90ea4110'),
('huysocute', '66f55f638642b98b'),
('huyboygaming', 'bb2e91635afc7401'),
('anhluu', 'ddd532c330a3e12a'),
('namphan', '747c006045dcbd4f'),
('Tientony112', '87ba6d1348e0c643'),
('QuartzA', 'cfadb2853f38ecf2'),
('holads123', '2bb89a91e1979055'),
('hoang22', '6b9b4fd8765ed6bd'),
('0hshin', '163725e8a087b097'),
('linhbede', 'ee96c6aadbb761ea'),
('concac123', '44c9a9167ca78c16'),
('cactaydu1', '244e65a30c758ef0'),
('ditconmemay1', '057933601246bcb8'),
('Hungggxx', '1ba9a2473aa06b04'),
('Nyrtol1', '6d0d94069b1a6914'),
('PhongGremTyler', '9d6e7981368feae9'),
('HunnterF', '3bd12a693fe12af4'),
('Visionn', '79e70ee3c6acc085'),
('SenioZ', 'e92efc19d4fe7eca'),
('froggi', 'eb5416db25d4429d'),
('froggi123', '7f2d72af9e63c88b'),
('khoa699', '403f02e7325ccc5c'),
('BaoIsGay', 'e2e1f4c3c52f22b4'),
('chillfuzzy', '2c09f9bcd1dd2a39'),
('Lmao', '1c0e0ae9cab6c55c'),
('toanngaoda100az', '96793fcdc3eb216e'),
('jojo3', 'd28267130b6c6d89'),
('taipro6', '8141a0a99b182f74');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `view`) VALUES
(2, '142.250.4.147', 14),
(3, '172.217.194.105', 24),
(4, '142.250.4.99', 23),
(5, '172.217.194.147', 23),
(6, '142.251.10.104', 26),
(7, '142.251.12.147', 17),
(8, '74.125.24.104', 14),
(9, '142.250.4.104', 21),
(10, '74.125.68.103', 2),
(11, '172.217.194.103', 39),
(12, '172.217.194.99', 49),
(13, '142.250.4.105', 24),
(14, '172.217.194.106', 11),
(15, '142.250.4.103', 16),
(16, '74.125.24.99', 2),
(17, '142.251.10.103', 7),
(18, '142.251.10.147', 30),
(19, '142.251.12.103', 29),
(20, '74.125.24.106', 31),
(21, '142.251.10.99', 30),
(22, '74.125.24.103', 12),
(23, '142.250.4.106', 9),
(24, '142.251.12.105', 26),
(25, '142.251.10.105', 3),
(26, '74.125.68.147', 4),
(27, '74.125.24.147', 7),
(28, '74.125.130.147', 8),
(29, '142.251.12.99', 25),
(30, '142.251.12.104', 7),
(31, 'www.google.com', 1),
(32, '74.125.68.99', 7),
(33, '74.125.200.103', 20),
(34, '74.125.200.105', 7),
(35, '172.217.194.104', 10),
(36, '74.125.24.105', 13),
(37, '142.251.10.106', 1),
(38, '74.125.68.106', 2),
(39, '142.251.12.106', 11),
(40, '74.125.200.147', 2),
(41, '74.125.68.104', 3),
(42, '172.253.118.104', 1),
(43, '172.253.118.105', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authme`
--
ALTER TABLE `authme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`codeid`);

--
-- Indexes for table `countdownloads`
--
ALTER TABLE `countdownloads`
  ADD KEY `fk_countdownload_to_file` (`fileid`),
  ADD KEY `fk_countdownload_to_plugin` (`plid`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `filedownloads`
--
ALTER TABLE `filedownloads`
  ADD KEY `FK_fildownloads_to_file` (`fileid`);

--
-- Indexes for table `playercodes`
--
ALTER TABLE `playercodes`
  ADD KEY `fk_playercodes_to_authme` (`username`),
  ADD KEY `fk_playercodes_to_code` (`codeid`);

--
-- Indexes for table `playercoins`
--
ALTER TABLE `playercoins`
  ADD KEY `FK_to_authme` (`username`);

--
-- Indexes for table `playercomments`
--
ALTER TABLE `playercomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_comments_to_authme` (`username`);

--
-- Indexes for table `playerfiles`
--
ALTER TABLE `playerfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_playerfiles_to_file` (`fileid`),
  ADD KEY `fk_playerfiles_to_authme` (`username`);

--
-- Indexes for table `playermails`
--
ALTER TABLE `playermails`
  ADD PRIMARY KEY (`mailid`),
  ADD KEY `fk_playermails_to_authme` (`towho`);

--
-- Indexes for table `playermusters`
--
ALTER TABLE `playermusters`
  ADD KEY `fk_playermusters_to_authme` (`username`);

--
-- Indexes for table `playerplugins`
--
ALTER TABLE `playerplugins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_playerplugins_to_plugin` (`plid`),
  ADD KEY `fk_playerplugins_to_authme` (`username`);

--
-- Indexes for table `playerprofiles`
--
ALTER TABLE `playerprofiles`
  ADD KEY `fk_playerprofiles_to_authme` (`username`);

--
-- Indexes for table `plugin`
--
ALTER TABLE `plugin`
  ADD PRIMARY KEY (`plid`);

--
-- Indexes for table `salt`
--
ALTER TABLE `salt`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authme`
--
ALTER TABLE `authme`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `playercomments`
--
ALTER TABLE `playercomments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `playerfiles`
--
ALTER TABLE `playerfiles`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `playermails`
--
ALTER TABLE `playermails`
  MODIFY `mailid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `playerplugins`
--
ALTER TABLE `playerplugins`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `countdownloads`
--
ALTER TABLE `countdownloads`
  ADD CONSTRAINT `fk_countdownload_to_file` FOREIGN KEY (`fileid`) REFERENCES `file` (`fileid`),
  ADD CONSTRAINT `fk_countdownload_to_plugin` FOREIGN KEY (`plid`) REFERENCES `plugin` (`plid`);

--
-- Constraints for table `filedownloads`
--
ALTER TABLE `filedownloads`
  ADD CONSTRAINT `FK_fildownloads_to_file` FOREIGN KEY (`fileid`) REFERENCES `file` (`fileid`);

--
-- Constraints for table `playercodes`
--
ALTER TABLE `playercodes`
  ADD CONSTRAINT `fk_playercodes_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`),
  ADD CONSTRAINT `fk_playercodes_to_code` FOREIGN KEY (`codeid`) REFERENCES `code` (`codeid`);

--
-- Constraints for table `playercoins`
--
ALTER TABLE `playercoins`
  ADD CONSTRAINT `fk_playercoins_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`);

--
-- Constraints for table `playercomments`
--
ALTER TABLE `playercomments`
  ADD CONSTRAINT `FK_playercomments_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`);

--
-- Constraints for table `playerfiles`
--
ALTER TABLE `playerfiles`
  ADD CONSTRAINT `fk_playerfiles_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`),
  ADD CONSTRAINT `fk_playerfiles_to_file` FOREIGN KEY (`fileid`) REFERENCES `file` (`fileid`);

--
-- Constraints for table `playermails`
--
ALTER TABLE `playermails`
  ADD CONSTRAINT `fk_playermails_to_authme` FOREIGN KEY (`towho`) REFERENCES `authme` (`username`);

--
-- Constraints for table `playermusters`
--
ALTER TABLE `playermusters`
  ADD CONSTRAINT `fk_playermusters_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`);

--
-- Constraints for table `playerplugins`
--
ALTER TABLE `playerplugins`
  ADD CONSTRAINT `fk_playerplugins_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`),
  ADD CONSTRAINT `fk_playerplugins_to_plugin` FOREIGN KEY (`plid`) REFERENCES `plugin` (`plid`);

--
-- Constraints for table `playerprofiles`
--
ALTER TABLE `playerprofiles`
  ADD CONSTRAINT `fk_playerprofiles_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`);

--
-- Constraints for table `salt`
--
ALTER TABLE `salt`
  ADD CONSTRAINT `fk_salt_to_authme` FOREIGN KEY (`username`) REFERENCES `authme` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
