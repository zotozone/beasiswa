-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bs
CREATE DATABASE IF NOT EXISTS `bs` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `bs`;

-- Dumping structure for table bs.beasiswa
CREATE TABLE IF NOT EXISTS `beasiswa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `ipk` double(8,2) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `syarat` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bs.beasiswa: ~4 rows (approximately)
INSERT IGNORE INTO `beasiswa` (`id`, `tgl`, `nim`, `nama`, `email`, `telp`, `semester`, `ipk`, `jenis`, `syarat`, `status`) VALUES
	(10, '2023-12-04', '26324753', 'Siti', 'siti@gmail.com', '08464634345', 1, 3.00, 'Akademik', 'A', 0),
	(11, '2023-12-04', '68764708', 'Siti Fadila', 'agus@gmail.com', '084664', 1, 4.00, 'Akademik', 'syarat_mJojUUZTPg.pdf', 1),
	(12, '2023-12-04', '54498860', 'Ina Fujiati', 'inapuji@gmail.com', '05162656989', 1, 3.90, 'Akademik', 'syarat_W04PmX2yO6.pdf', 2),
	(13, '2023-12-04', '68764708', 'Daliman Wibowo', 'daliman@gmail.com', '05162656989', 1, 4.00, 'Akademik', 'syarat_JwBhsB1bbL.pdf', 2);

-- Dumping structure for table bs.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `ipk` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bs.nilai: ~85 rows (approximately)
INSERT IGNORE INTO `nilai` (`id`, `nim`, `nama`, `semester`, `ipk`) VALUES
	(88, '26324753', 'Hasan Bakda Marpaung S.IP', '1', 4.00),
	(89, '26324753', 'Hasan Bakda Marpaung S.IP', '2', 4.00),
	(90, '26324753', 'Hasan Bakda Marpaung S.IP', '3', 3.85),
	(91, '26324753', 'Hasan Bakda Marpaung S.IP', '4', 3.25),
	(92, '26324753', 'Hasan Bakda Marpaung S.IP', '5', 3.25),
	(93, '26324753', 'Hasan Bakda Marpaung S.IP', '6', 3.65),
	(94, '26324753', 'Hasan Bakda Marpaung S.IP', '7', 3.65),
	(95, '26324753', 'Hasan Bakda Marpaung S.IP', '8', 2.90),
	(96, '54498860', 'Ina Fujiati', '1', 3.90),
	(97, '54498860', 'Ina Fujiati', '2', 2.90),
	(98, '54498860', 'Ina Fujiati', '3', 3.24),
	(99, '54498860', 'Ina Fujiati', '4', 3.00),
	(100, '54498860', 'Ina Fujiati', '5', 3.90),
	(101, '54498860', 'Ina Fujiati', '6', 3.25),
	(102, '54498860', 'Ina Fujiati', '7', 3.85),
	(103, '54498860', 'Ina Fujiati', '8', 3.70),
	(104, '68764708', 'Daliman Wibowo', '1', 4.00),
	(105, '68764708', 'Daliman Wibowo', '2', 2.90),
	(106, '68764708', 'Daliman Wibowo', '3', 3.50),
	(107, '68764708', 'Daliman Wibowo', '4', 3.00),
	(108, '68764708', 'Daliman Wibowo', '5', 3.24),
	(109, '68764708', 'Daliman Wibowo', '6', 3.90),
	(110, '68764708', 'Daliman Wibowo', '7', 3.24),
	(111, '54314733', 'Yuliana Hassanah', '1', 3.24),
	(112, '54314733', 'Yuliana Hassanah', '2', 3.24),
	(113, '54314733', 'Yuliana Hassanah', '3', 2.90),
	(114, '54314733', 'Yuliana Hassanah', '4', 3.00),
	(115, '54314733', 'Yuliana Hassanah', '5', 3.65),
	(116, '54314733', 'Yuliana Hassanah', '6', 3.25),
	(117, '54314733', 'Yuliana Hassanah', '7', 2.80),
	(118, '54314733', 'Yuliana Hassanah', '8', 3.90),
	(119, '42143291', 'Tantri Almira Wijayanti M.Pd', '1', 3.24),
	(120, '42143291', 'Tantri Almira Wijayanti M.Pd', '2', 4.00),
	(121, '42143291', 'Tantri Almira Wijayanti M.Pd', '3', 2.80),
	(122, '42143291', 'Tantri Almira Wijayanti M.Pd', '4', 3.24),
	(123, '42143291', 'Tantri Almira Wijayanti M.Pd', '5', 3.00),
	(124, '42143291', 'Tantri Almira Wijayanti M.Pd', '6', 3.90),
	(125, '42143291', 'Tantri Almira Wijayanti M.Pd', '7', 4.00),
	(126, '42143291', 'Tantri Almira Wijayanti M.Pd', '8', 3.85),
	(127, '27038376', 'Leo Gunawan S.Sos', '1', 3.90),
	(128, '27038376', 'Leo Gunawan S.Sos', '2', 3.50),
	(129, '27038376', 'Leo Gunawan S.Sos', '3', 3.50),
	(130, '27038376', 'Leo Gunawan S.Sos', '4', 4.00),
	(131, '27038376', 'Leo Gunawan S.Sos', '5', 2.80),
	(132, '27038376', 'Leo Gunawan S.Sos', '6', 2.80),
	(133, '27038376', 'Leo Gunawan S.Sos', '7', 4.00),
	(134, '27038376', 'Leo Gunawan S.Sos', '8', 3.90),
	(135, '81679768', 'Cici Indah Hartati S.E.', '1', 4.00),
	(136, '81679768', 'Cici Indah Hartati S.E.', '2', 3.70),
	(137, '81679768', 'Cici Indah Hartati S.E.', '3', 4.00),
	(138, '81679768', 'Cici Indah Hartati S.E.', '4', 3.25),
	(139, '81679768', 'Cici Indah Hartati S.E.', '5', 4.00),
	(140, '81679768', 'Cici Indah Hartati S.E.', '6', 3.85),
	(141, '81679768', 'Cici Indah Hartati S.E.', '7', 3.90),
	(142, '81679768', 'Cici Indah Hartati S.E.', '8', 2.90),
	(143, '12875429', 'Tiara Sudiati', '1', 3.70),
	(144, '12875429', 'Tiara Sudiati', '2', 3.50),
	(145, '12875429', 'Tiara Sudiati', '3', 3.85),
	(146, '12875429', 'Tiara Sudiati', '4', 3.24),
	(147, '12875429', 'Tiara Sudiati', '5', 3.70),
	(148, '12875429', 'Tiara Sudiati', '6', 3.85),
	(149, '12875429', 'Tiara Sudiati', '7', 3.00),
	(150, '91238764', 'Zaenab Jessica Lestari S.Kom', '1', 3.90),
	(151, '91238764', 'Zaenab Jessica Lestari S.Kom', '2', 4.00),
	(152, '91238764', 'Zaenab Jessica Lestari S.Kom', '3', 3.65),
	(153, '91238764', 'Zaenab Jessica Lestari S.Kom', '4', 3.65),
	(154, '91238764', 'Zaenab Jessica Lestari S.Kom', '5', 3.50),
	(155, '91238764', 'Zaenab Jessica Lestari S.Kom', '6', 2.80),
	(156, '91238764', 'Zaenab Jessica Lestari S.Kom', '7', 2.80),
	(157, '91238764', 'Zaenab Jessica Lestari S.Kom', '8', 3.90),
	(158, '37994624', 'Wahyu Wijaya', '1', 3.70),
	(159, '37994624', 'Wahyu Wijaya', '2', 3.00),
	(160, '37994624', 'Wahyu Wijaya', '3', 4.00),
	(161, '37994624', 'Wahyu Wijaya', '4', 3.65),
	(162, '37994624', 'Wahyu Wijaya', '5', 3.70),
	(163, '37994624', 'Wahyu Wijaya', '6', 3.85),
	(164, '37994624', 'Wahyu Wijaya', '7', 2.90),
	(165, '37994624', 'Wahyu Wijaya', '8', 3.85),
	(166, '12456896', 'Agus Setiawan', '1', 3.50),
	(167, '12875429', 'Tiara Sudiati', '8', 3.40),
	(168, '98902784', 'Angga Fitrio Santoso', '1', 3.00),
	(169, '12456899', 'Anin Dia', '1', 3.00),
	(170, '12456896', 'Agus Setiawan', '2', 2.89),
	(171, '12456896', 'Agus Setiawan', '3', 3.00),
	(172, '12456896', 'Agus Setiawan', '4', 3.78);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
