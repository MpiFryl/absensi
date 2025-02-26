-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table absensi.10_ak
DROP TABLE IF EXISTS `10_ak`;
CREATE TABLE IF NOT EXISTS `10_ak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kelamin` varchar(50) DEFAULT NULL,
  `no_absen` int DEFAULT NULL,
  `waktu_absen` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table absensi.10_ak: ~1 rows (approximately)

-- Dumping structure for table absensi.10_fm
DROP TABLE IF EXISTS `10_fm`;
CREATE TABLE IF NOT EXISTS `10_fm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kelamin` varchar(50) DEFAULT NULL,
  `no_absen` int DEFAULT NULL,
  `waktu_absen` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table absensi.10_fm: ~0 rows (approximately)

-- Dumping structure for table absensi.10_pplg
DROP TABLE IF EXISTS `10_pplg`;
CREATE TABLE IF NOT EXISTS `10_pplg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kelamin` varchar(50) DEFAULT NULL,
  `no_absen` int DEFAULT NULL,
  `waktu_absen` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table absensi.10_pplg: ~0 rows (approximately)

-- Dumping structure for table absensi.11_ak
DROP TABLE IF EXISTS `11_ak`;
CREATE TABLE IF NOT EXISTS `11_ak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kelamin` varchar(50) DEFAULT NULL,
  `no_absen` int DEFAULT NULL,
  `waktu_absen` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table absensi.11_ak: ~0 rows (approximately)

-- Dumping structure for table absensi.11_fm
DROP TABLE IF EXISTS `11_fm`;
CREATE TABLE IF NOT EXISTS `11_fm` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kelamin` varchar(50) DEFAULT NULL,
  `no_absen` int DEFAULT NULL,
  `waktu_absen` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table absensi.11_fm: ~0 rows (approximately)

-- Dumping structure for table absensi.11_pplg
DROP TABLE IF EXISTS `11_pplg`;
CREATE TABLE IF NOT EXISTS `11_pplg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kelamin` varchar(50) DEFAULT NULL,
  `no_absen` int DEFAULT NULL,
  `waktu_absen` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table absensi.11_pplg: ~1 rows (approximately)
REPLACE INTO `11_pplg` (`id`, `nama`, `kelamin`, `no_absen`, `waktu_absen`) VALUES
	(10, 'I Made Fabian Raditya Taufik', 'Perempuan', 16, '2025-02-26 03:24:17'),
	(11, 'Dewa Abdul Malik', 'Laki-laki', 6, '2025-02-26 04:28:53');

-- Dumping structure for table absensi.12_ak
DROP TABLE IF EXISTS `12_ak`;
CREATE TABLE IF NOT EXISTS `12_ak` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `kelamin` varchar(50) DEFAULT NULL,
  `no_absen` int DEFAULT NULL,
  `waktu_absen` timestamp NULL DEFAULT (now()),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table absensi.12_ak: ~0 rows (approximately)

-- Dumping structure for table absensi.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table absensi.user: ~5 rows (approximately)
REPLACE INTO `user` (`id`, `username`, `email`, `password`, `role`, `reg_date`) VALUES
	(23, 'mpifryl', 'mpifryl@gmail.com', '$2y$10$UntFHewHJiktIbFEtQ.GG.FAFucJcAAJzJTmcuIleJsw72xwSzGUi', 'admin', '2025-02-26 22:27:45'),
	(24, 'firyal', 'firyal@gmail.com', '$2y$10$CqxwTVD1eRn2FJkbQS70Mu9b/GDumll5XFRMluz6Wxe12VzA2HMdq', 'user', '2025-02-26 12:21:21'),
	(25, 'dewa', 'dewa@gmail.com', '$2y$10$npRkmJgird0GUlH.MLcZHORlzPbRaYH17y9Lrv4uOZMLAdTwpHJri', 'user', '2025-02-25 01:44:50'),
	(26, 'fabian', 'fabian@gmail.com', '$2y$10$gOP46LZK.3wJCXdsLIB3R.aUAAJpSjmEdeYDLva7iCN.m1v0jCf6q', 'user', '2025-02-26 03:19:44'),
	(27, 'ripa', 'ripa@gmail', '$2y$10$/vE2IqaVNWYn.7CcnhnQle8rZTxBjyb6h6sWcAzqvBOwa1Jas4HnS', 'admin', '2025-02-26 03:20:53');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
