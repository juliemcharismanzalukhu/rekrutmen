-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.31-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table rekrutmen.jenjang
CREATE TABLE IF NOT EXISTS `jenjang` (
  `id_jenjang` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_jenjang` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table rekrutmen.jenjang: ~2 rows (approximately)
DELETE FROM `jenjang`;
/*!40000 ALTER TABLE `jenjang` DISABLE KEYS */;
INSERT INTO `jenjang` (`id_jenjang`, `nama_jenjang`) VALUES
	(1, 'Semua Jenjang'),
	(2, 'SMK/SMK sederajat');
/*!40000 ALTER TABLE `jenjang` ENABLE KEYS */;

-- Dumping structure for table rekrutmen.kategori_loker
CREATE TABLE IF NOT EXISTS `kategori_loker` (
  `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(150) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table rekrutmen.kategori_loker: ~2 rows (approximately)
DELETE FROM `kategori_loker`;
/*!40000 ALTER TABLE `kategori_loker` DISABLE KEYS */;
INSERT INTO `kategori_loker` (`id_kategori`, `nama_kategori`) VALUES
	(1, 'Admin'),
	(2, 'IT');
/*!40000 ALTER TABLE `kategori_loker` ENABLE KEYS */;

-- Dumping structure for table rekrutmen.loker
CREATE TABLE IF NOT EXISTS `loker` (
  `id_loker` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_kategori` bigint(20) NOT NULL DEFAULT 0,
  `jenjang_loker` bigint(20) NOT NULL DEFAULT 0,
  `nama_loker` varchar(150) NOT NULL DEFAULT '',
  `deskripsi_loker` text NOT NULL DEFAULT '',
  `status_loker` char(15) NOT NULL DEFAULT '',
  `gaji_loker` varchar(100) NOT NULL DEFAULT '0',
  `jenis_loker` varchar(50) NOT NULL DEFAULT '',
  `level_loker` varchar(100) NOT NULL DEFAULT '',
  `due_date_loker` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_loker`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table rekrutmen.loker: ~0 rows (approximately)
DELETE FROM `loker`;
/*!40000 ALTER TABLE `loker` DISABLE KEYS */;
INSERT INTO `loker` (`id_loker`, `id_kategori`, `jenjang_loker`, `nama_loker`, `deskripsi_loker`, `status_loker`, `gaji_loker`, `jenis_loker`, `level_loker`, `due_date_loker`) VALUES
	(1, 1, 2, 'wow', 'wow', 'Draft', 'Rp. 8.000.000/Bulan', 'Full Time', 'Manager Admin', '2020-09-05');
/*!40000 ALTER TABLE `loker` ENABLE KEYS */;

-- Dumping structure for table rekrutmen.perusahaan
CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id_perusahaan` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(150) DEFAULT NULL,
  `alamat_perusaan` varchar(150) DEFAULT NULL,
  `deskripsi_perusahaan` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table rekrutmen.perusahaan: ~0 rows (approximately)
DELETE FROM `perusahaan`;
/*!40000 ALTER TABLE `perusahaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `perusahaan` ENABLE KEYS */;

-- Dumping structure for table rekrutmen.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id_role` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table rekrutmen.roles: ~2 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id_role`, `nama_role`) VALUES
	(1, 'Administrator'),
	(2, 'Applicant'),
	(3, 'Employer');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table rekrutmen.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_role` bigint(20) NOT NULL DEFAULT 0,
  `nama_lengkap` varchar(75) DEFAULT NULL,
  `user_name` varchar(150) DEFAULT '',
  `user_pass` varchar(32) DEFAULT '',
  `user_mail` varchar(150) DEFAULT '',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table rekrutmen.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `id_role`, `nama_lengkap`, `user_name`, `user_pass`, `user_mail`) VALUES
	(3, 0, 'data baru', 'databaru', 'd41d8cd98f00b204e9800998ecf8427e', 'databaru@gmail.com'),
	(4, 0, 'datalamas', 'datalamas', 'd41d8cd98f00b204e9800998ecf8427e', 'datalamas@gmail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table rekrutmen.user_meta
CREATE TABLE IF NOT EXISTS `user_meta` (
  `id_user_meta` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_cv` text DEFAULT NULL,
  PRIMARY KEY (`id_user_meta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table rekrutmen.user_meta: ~0 rows (approximately)
DELETE FROM `user_meta`;
/*!40000 ALTER TABLE `user_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_meta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
