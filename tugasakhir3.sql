-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for tugasakhir
CREATE DATABASE IF NOT EXISTS `tugasakhir` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tugasakhir`;

-- Dumping structure for table tugasakhir.led_analisis_upps
CREATE TABLE IF NOT EXISTS `led_analisis_upps` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `analisis_capaian` varchar(10000) NOT NULL,
  `analisis_swot` varchar(10000) NOT NULL,
  `strategi` varchar(10000) NOT NULL,
  `program_lanjutan` varchar(10000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_analisis_upps: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_analisis_upps` DISABLE KEYS */;
INSERT INTO `led_analisis_upps` (`id`, `id_prodi`, `analisis_capaian`, `analisis_swot`, `strategi`, `program_lanjutan`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p style="text-align:center"><span style="font-size:72px">Capaian Kinerja</span></p>', '<p style="text-align:center"><span style="font-size:72px">Analisis SWOT</span></p>', '<p style="text-align:center"><span style="font-size:72px">Strategi</span></p>', '<p style="text-align:center"><span style="font-size:72px">Program Keberlanjutan</span></p>', '2019-05-21 11:29:20', '2019-05-21 11:29:20');
/*!40000 ALTER TABLE `led_analisis_upps` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c1
CREATE TABLE IF NOT EXISTS `led_c1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `kebijakan` varchar(5000) NOT NULL,
  `stp_vmts` varchar(5000) NOT NULL,
  `iku` varchar(5000) NOT NULL,
  `ikt` varchar(5000) NOT NULL,
  `eval_vmts` varchar(5000) NOT NULL,
  `simpulan_vmts` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c1: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c1` DISABLE KEYS */;
INSERT INTO `led_c1` (`id`, `id_prodi`, `description`, `kebijakan`, `stp_vmts`, `iku`, `ikt`, `eval_vmts`, `simpulan_vmts`, `created_at`, `updated_at`) VALUES
	(3, '006', '<p>df</p>', '<p>fdg</p>', '<p>gff</p>', '<p>dfgdf</p>', '<p>dfgfdg</p>', '<p>ghgfh</p>', '<p>dfdg</p>', '2019-05-21 15:48:07', '2019-05-21 15:48:07');
/*!40000 ALTER TABLE `led_c1` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c2
CREATE TABLE IF NOT EXISTS `led_c2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `kebijakan` varchar(2000) NOT NULL,
  `stp_vmts` varchar(2000) NOT NULL,
  `iku1` varchar(2000) NOT NULL,
  `iku2` varchar(2000) NOT NULL,
  `iku3` varchar(2000) NOT NULL,
  `iku4` varchar(2000) NOT NULL,
  `ikt` varchar(2000) NOT NULL,
  `eval` varchar(2000) NOT NULL,
  `pmtp` varchar(2000) NOT NULL,
  `kpg` varchar(2000) NOT NULL,
  `simpulan` varchar(2000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c2: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c2` DISABLE KEYS */;
INSERT INTO `led_c2` (`id`, `id_prodi`, `description`, `kebijakan`, `stp_vmts`, `iku1`, `iku2`, `iku3`, `iku4`, `ikt`, `eval`, `pmtp`, `kpg`, `simpulan`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '2019-05-21 21:40:22', '2019-05-21 21:40:22');
/*!40000 ALTER TABLE `led_c2` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c3
CREATE TABLE IF NOT EXISTS `led_c3` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `kebijakan` varchar(5000) NOT NULL,
  `stp_standar` varchar(5000) NOT NULL,
  `iku1` varchar(5000) NOT NULL,
  `iku2` varchar(5000) NOT NULL,
  `iku3` varchar(5000) NOT NULL,
  `ikt` varchar(5000) NOT NULL,
  `eval` varchar(5000) NOT NULL,
  `pmm` varchar(5000) NOT NULL,
  `kpg` varchar(5000) NOT NULL,
  `simpulan` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c3: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c3` DISABLE KEYS */;
INSERT INTO `led_c3` (`id`, `id_prodi`, `description`, `kebijakan`, `stp_standar`, `iku1`, `iku2`, `iku3`, `ikt`, `eval`, `pmm`, `kpg`, `simpulan`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '2019-05-21 23:11:09', '2019-05-21 23:11:09');
/*!40000 ALTER TABLE `led_c3` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c4
CREATE TABLE IF NOT EXISTS `led_c4` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `kebijakan` varchar(2000) NOT NULL,
  `stp_standar` varchar(2000) NOT NULL,
  `iku1` varchar(2000) NOT NULL,
  `iku2` varchar(2000) NOT NULL,
  `iku3` varchar(2000) NOT NULL,
  `iku4` varchar(2000) NOT NULL,
  `ikt` varchar(2000) NOT NULL,
  `eval` varchar(2000) NOT NULL,
  `pm_sdm` varchar(2000) NOT NULL,
  `kpg` varchar(2000) NOT NULL,
  `simpulan` varchar(2000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c4: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c4` DISABLE KEYS */;
INSERT INTO `led_c4` (`id`, `id_prodi`, `description`, `kebijakan`, `stp_standar`, `iku1`, `iku2`, `iku3`, `iku4`, `ikt`, `eval`, `pm_sdm`, `kpg`, `simpulan`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '2019-05-21 23:42:06', '2019-05-21 23:42:06');
/*!40000 ALTER TABLE `led_c4` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c5
CREATE TABLE IF NOT EXISTS `led_c5` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `kebijakan` varchar(5000) NOT NULL,
  `stp_standar` varchar(5000) NOT NULL,
  `iku1` varchar(5000) NOT NULL,
  `iku2` varchar(5000) NOT NULL,
  `iku3` varchar(5000) NOT NULL,
  `ikt` varchar(5000) NOT NULL,
  `eval` varchar(5000) NOT NULL,
  `pm_keupras` varchar(5000) NOT NULL,
  `kpg` varchar(5000) NOT NULL,
  `simpulan` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c5: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c5` DISABLE KEYS */;
INSERT INTO `led_c5` (`id`, `id_prodi`, `description`, `kebijakan`, `stp_standar`, `iku1`, `iku2`, `iku3`, `ikt`, `eval`, `pm_keupras`, `kpg`, `simpulan`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '2019-05-22 00:32:38', '2019-05-22 00:32:38');
/*!40000 ALTER TABLE `led_c5` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c6
CREATE TABLE IF NOT EXISTS `led_c6` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `kebijakan` varchar(5000) NOT NULL,
  `stp_standar` varchar(5000) NOT NULL,
  `iku1` varchar(5000) NOT NULL,
  `iku2` varchar(5000) NOT NULL,
  `iku3` varchar(5000) NOT NULL,
  `ikt` varchar(5000) NOT NULL,
  `eval` varchar(5000) NOT NULL,
  `pmp` varchar(5000) NOT NULL,
  `kpg` varchar(5000) NOT NULL,
  `simpulan` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c6: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c6` DISABLE KEYS */;
INSERT INTO `led_c6` (`id`, `id_prodi`, `description`, `kebijakan`, `stp_standar`, `iku1`, `iku2`, `iku3`, `ikt`, `eval`, `pmp`, `kpg`, `simpulan`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '2019-05-22 04:27:11', '2019-05-22 04:27:11');
/*!40000 ALTER TABLE `led_c6` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c7
CREATE TABLE IF NOT EXISTS `led_c7` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `kebijakan` varchar(5000) NOT NULL,
  `stp_standar` varchar(5000) NOT NULL,
  `iku` varchar(5000) NOT NULL,
  `ikt` varchar(5000) NOT NULL,
  `eval` varchar(5000) NOT NULL,
  `pmpl` varchar(5000) NOT NULL,
  `kpg` varchar(5000) NOT NULL,
  `simpulan` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c7: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c7` DISABLE KEYS */;
INSERT INTO `led_c7` (`id`, `id_prodi`, `description`, `kebijakan`, `stp_standar`, `iku`, `ikt`, `eval`, `pmpl`, `kpg`, `simpulan`, `created_at`, `updated_at`) VALUES
	(1, '006', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:right"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:right"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:right"><span style="font-size:72px">Tes 123</span></p>', '<p style="text-align:center"><span style="font-size:72px">Tes 123</span></p>', '2019-05-24 01:02:24', '2019-05-24 01:02:24');
/*!40000 ALTER TABLE `led_c7` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c8
CREATE TABLE IF NOT EXISTS `led_c8` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `kebijakan` varchar(5000) NOT NULL,
  `stp_standar` varchar(5000) NOT NULL,
  `iku` varchar(5000) NOT NULL,
  `ikt` varchar(5000) NOT NULL,
  `eval` varchar(5000) NOT NULL,
  `pmpm` varchar(5000) NOT NULL,
  `kpg` varchar(5000) NOT NULL,
  `simpulan` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c8: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c8` DISABLE KEYS */;
INSERT INTO `led_c8` (`id`, `id_prodi`, `description`, `kebijakan`, `stp_standar`, `iku`, `ikt`, `eval`, `pmpm`, `kpg`, `simpulan`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '2019-05-22 12:11:40', '2019-05-22 12:11:40');
/*!40000 ALTER TABLE `led_c8` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_c9
CREATE TABLE IF NOT EXISTS `led_c9` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `iku1` varchar(5000) NOT NULL,
  `iku2` varchar(5000) NOT NULL,
  `ikt` varchar(5000) NOT NULL,
  `eval` varchar(5000) NOT NULL,
  `pmplct` varchar(5000) NOT NULL,
  `kpg` varchar(5000) NOT NULL,
  `simpulan` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_c9: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_c9` DISABLE KEYS */;
INSERT INTO `led_c9` (`id`, `id_prodi`, `iku1`, `iku2`, `ikt`, `eval`, `pmplct`, `kpg`, `simpulan`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '2019-05-22 12:27:26', '2019-05-22 12:27:26');
/*!40000 ALTER TABLE `led_c9` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_cover
CREATE TABLE IF NOT EXISTS `led_cover` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(40) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `pt` varchar(40) NOT NULL,
  `kota` varchar(40) NOT NULL,
  `th` int(10) NOT NULL,
  `upps` varchar(30) NOT NULL,
  `jenis_ps` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email_web` varchar(30) NOT NULL,
  `sk_pt` varchar(20) NOT NULL,
  `tgl_sk_pt` date NOT NULL,
  `pp_sk_pt` varchar(40) NOT NULL,
  `sk_ps` varchar(20) NOT NULL,
  `tgl_sk_ps` date NOT NULL,
  `pp_sk_ps` varchar(40) NOT NULL,
  `th_awal` int(10) NOT NULL,
  `peringkat_banpt` varchar(10) NOT NULL,
  `sk_banpt` varchar(40) NOT NULL,
  `nama_pys1` varchar(40) NOT NULL,
  `nidn_pys1` int(20) NOT NULL,
  `jabatan_pys1` varchar(20) NOT NULL,
  `tgl1` date NOT NULL,
  `file_ttd1` varchar(20) NOT NULL,
  `nama_pys2` varchar(40) NOT NULL,
  `nidn_pys2` int(20) NOT NULL,
  `jabatan_pys2` varchar(20) NOT NULL,
  `tgl2` date NOT NULL,
  `file_ttd2` varchar(20) NOT NULL,
  `nama_pys3` varchar(40) NOT NULL,
  `nidn_pys3` int(20) NOT NULL,
  `jabatan_pys3` varchar(20) NOT NULL,
  `tgl3` date NOT NULL,
  `file_ttd3` varchar(20) NOT NULL,
  `nama_pys4` varchar(40) NOT NULL,
  `nidn_pys4` int(20) NOT NULL,
  `jabatan_pys4` varchar(20) NOT NULL,
  `tgl4` date NOT NULL,
  `file_ttd4` varchar(20) NOT NULL,
  `kata_pengantar` varchar(5000) NOT NULL,
  `ringkasan` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_cover: ~1 rows (approximately)
/*!40000 ALTER TABLE `led_cover` DISABLE KEYS */;
INSERT INTO `led_cover` (`id`, `id_prodi`, `prodi`, `pt`, `kota`, `th`, `upps`, `jenis_ps`, `alamat`, `telp`, `email_web`, `sk_pt`, `tgl_sk_pt`, `pp_sk_pt`, `sk_ps`, `tgl_sk_ps`, `pp_sk_ps`, `th_awal`, `peringkat_banpt`, `sk_banpt`, `nama_pys1`, `nidn_pys1`, `jabatan_pys1`, `tgl1`, `file_ttd1`, `nama_pys2`, `nidn_pys2`, `jabatan_pys2`, `tgl2`, `file_ttd2`, `nama_pys3`, `nidn_pys3`, `jabatan_pys3`, `tgl3`, `file_ttd3`, `nama_pys4`, `nidn_pys4`, `jabatan_pys4`, `tgl4`, `file_ttd4`, `kata_pengantar`, `ringkasan`, `created_at`, `updated_at`) VALUES
	(24, '006', '011', 'Non autem impedit q', 'Eligendi est iste cu', 2019, 'Eum optio inventore', 'Duis animi tempore', 'Qui et qui harum max', '1234', 'Doloremque enim cons', '1234', '2005-07-21', 'Maiores vero accusan', '1234', '1995-11-22', 'Quia perferendis min', 2000, 'A', '1234', 'Quisquam enim dignis', 1234, 'Possimus autem ea o', '1996-03-24', 'Reiciendis possimus', 'Mollitia dolores sed', 1234, 'Delectus maiores id', '1974-11-19', 'Provident rerum del', 'Est consectetur non', 1234, 'Vitae odit cum conse', '1999-03-12', 'Minima mollit ad vol', 'Ad rerum magna non d', 1234, 'Odio et aspernatur d', '1976-09-05', 'Voluptate aute conse', '<p>1234</p>', '<p>1234</p>', '2019-06-19 23:45:33', '2019-06-19 23:45:33');
/*!40000 ALTER TABLE `led_cover` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_cover_prodi_upps
CREATE TABLE IF NOT EXISTS `led_cover_prodi_upps` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_cover` int(11) NOT NULL,
  `jp_upps` varchar(20) NOT NULL,
  `prodi_upps` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_tgl_sk` varchar(30) NOT NULL,
  `tgl_kdw` date NOT NULL,
  `jml_mhs` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT '1970-01-01 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_cover_prodi_upps: ~2 rows (approximately)
/*!40000 ALTER TABLE `led_cover_prodi_upps` DISABLE KEYS */;
INSERT INTO `led_cover_prodi_upps` (`id`, `id_cover`, `jp_upps`, `prodi_upps`, `status`, `no_tgl_sk`, `tgl_kdw`, `jml_mhs`, `created_at`, `updated_at`) VALUES
	(40, 24, 'Aut ex veniam vel q', 'Et eos occaecat arc', 'Cillum quas deleniti', 'Accusantium voluptas', '1975-08-25', 12, '2019-06-20 06:45:33', '1970-01-01 00:00:00'),
	(41, 24, 'Laboris quos debitis', 'Ea excepturi aperiam', 'Necessitatibus qui a', 'Dicta quia enim anim', '2001-01-02', 13, '2019-06-20 06:45:33', '1970-01-01 00:00:00');
/*!40000 ALTER TABLE `led_cover_prodi_upps` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_kondisieks
CREATE TABLE IF NOT EXISTS `led_kondisieks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_kondisieks: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_kondisieks` DISABLE KEYS */;
INSERT INTO `led_kondisieks` (`id`, `id_prodi`, `description`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px">Tes 123</span></p>', '2019-05-22 12:47:38', '2019-05-22 12:47:38');
/*!40000 ALTER TABLE `led_kondisieks` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_pendahuluan
CREATE TABLE IF NOT EXISTS `led_pendahuluan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `dasar_penyusunan` varchar(10000) NOT NULL,
  `tim_penyusun` varchar(10000) NOT NULL,
  `mekanisme` varchar(10000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_pendahuluan: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_pendahuluan` DISABLE KEYS */;
INSERT INTO `led_pendahuluan` (`id`, `id_prodi`, `description`, `dasar_penyusunan`, `tim_penyusun`, `mekanisme`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px"><img alt="" src="/tugasakhir-testing%20-%20Copy/public/vendor/unisharp/laravel-ckeditor/kcfinder/upload/images/Prodi/IK/kisspng-beauty-and-the-beast-belle-cogsworth-mrs-potts-luke-evans-5aca8b5f61b380.8310518515232233914002.jpg" style="float:left; height:640px; width:778px" /></span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '<p><span style="font-size:72px">Tes 123</span></p>', '2019-06-18 13:02:45', '2019-05-22 14:04:39');
/*!40000 ALTER TABLE `led_pendahuluan` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_penutup
CREATE TABLE IF NOT EXISTS `led_penutup` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(20000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_penutup: ~1 rows (approximately)
/*!40000 ALTER TABLE `led_penutup` DISABLE KEYS */;
INSERT INTO `led_penutup` (`id`, `id_prodi`, `description`, `created_at`, `updated_at`) VALUES
	(8, '006', '<p style="text-align:center"><span style="font-size:72px">Test Penutup</span></p>\r\n\r\n<p style="text-align:center"><span style="font-size:72px"><img alt="" src="/tugasakhir-testing%20-%20Copy/public/vendor/unisharp/laravel-ckeditor/kcfinder/upload/images/Prodi/IK/kisspng-beauty-and-the-beast-belle-cogsworth-mrs-potts-luke-evans-5aca8b5f61b380.8310518515232233914002.jpg" style="height:526px; width:640px" /></span></p>', '2019-06-12 22:27:32', '2019-05-21 08:22:02');
/*!40000 ALTER TABLE `led_penutup` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.led_upps
CREATE TABLE IF NOT EXISTS `led_upps` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `sejarah_upps` varchar(5000) NOT NULL,
  `visi_misi` varchar(5000) NOT NULL,
  `org` varchar(5000) NOT NULL,
  `mhs_alumni` varchar(5000) NOT NULL,
  `dosen_tk` varchar(5000) NOT NULL,
  `keu_sarpras` varchar(5000) NOT NULL,
  `spm` varchar(5000) NOT NULL,
  `kinerja` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.led_upps: ~0 rows (approximately)
/*!40000 ALTER TABLE `led_upps` DISABLE KEYS */;
INSERT INTO `led_upps` (`id`, `id_prodi`, `description`, `sejarah_upps`, `visi_misi`, `org`, `mhs_alumni`, `dosen_tk`, `keu_sarpras`, `spm`, `kinerja`, `created_at`, `updated_at`) VALUES
	(2, '006', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '<p><span style="font-size:72px">tambahprofilupps</span></p>', '2019-05-22 13:25:16', '2019-05-22 13:25:16');
/*!40000 ALTER TABLE `led_upps` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.master_jurusan
CREATE TABLE IF NOT EXISTS `master_jurusan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.master_jurusan: ~4 rows (approximately)
/*!40000 ALTER TABLE `master_jurusan` DISABLE KEYS */;
INSERT INTO `master_jurusan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
	(1, 'Teknik Sipil', '2019-05-04 11:33:23', '2019-05-04 11:33:23'),
	(2, 'Teknik Mesin', '2019-05-04 11:33:32', '2019-05-04 11:33:32'),
	(3, 'Teknik Elektro', '2019-05-04 11:33:48', '2019-05-04 11:33:48'),
	(4, 'Akuntansi', '2019-05-04 11:34:04', '2019-05-04 11:34:04'),
	(5, 'Administrasi Bisnis', '2019-05-04 11:34:14', '2019-05-04 11:34:14');
/*!40000 ALTER TABLE `master_jurusan` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.master_prodi
CREATE TABLE IF NOT EXISTS `master_prodi` (
  `id` varchar(50) NOT NULL,
  `id_jurusan` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `id_jurusan` (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.master_prodi: ~21 rows (approximately)
/*!40000 ALTER TABLE `master_prodi` DISABLE KEYS */;
INSERT INTO `master_prodi` (`id`, `id_jurusan`, `nama`, `created_at`, `updated_at`) VALUES
	('001', 1, 'D3 Konstruksi Gedung', '2019-05-04 11:35:08', '2019-05-04 11:35:08'),
	('002', 1, 'D3 Konstruksi Sipil', '2019-05-04 11:36:05', '2019-05-04 11:36:05'),
	('003', 1, 'D4 Teknik Perawatan dan Perbaikan Gedung', '2019-05-04 11:36:38', '2019-05-04 11:36:38'),
	('004', 1, 'D4 Perancangan Jalan dan Jembatan', '2019-05-04 11:36:53', '2019-05-04 11:36:53'),
	('005', 2, 'D3 Teknik Mesin', '2019-05-04 11:37:37', '2019-05-04 11:37:37'),
	('006', 2, 'D3 Teknik Konversi Energi', '2019-05-04 11:37:52', '2019-05-04 11:37:52'),
	('007', 2, 'D4 Teknik Mesin Produksi dan Perawatan', '2019-05-04 11:38:16', '2019-05-04 11:38:16'),
	('008', 2, 'D4 Teknologi Rekayasa Pembangkit Energi', '2019-05-04 11:38:37', '2019-05-04 11:38:37'),
	('009', 3, 'D3 Teknik Listrik', '2019-05-04 11:40:12', '2019-05-04 11:40:12'),
	('010', 3, 'D3 Teknik Elektronika', '2019-05-04 11:40:28', '2019-05-04 11:40:28'),
	('011', 3, 'D3 Teknik Telekomunikasi', '2019-05-04 11:40:42', '2019-05-04 11:40:42'),
	('012', 3, 'D3 Teknik Informatika', '2019-05-04 11:41:06', '2019-05-04 11:41:06'),
	('013', 3, 'D4 Teknik Telekomunikasi', '2019-05-04 11:41:22', '2019-05-04 11:41:22'),
	('014', 3, 'MST Teknik Telekomunikasi', '2019-05-04 11:42:30', '2019-05-04 11:42:30'),
	('015', 4, 'D3 Akuntansi', '2019-05-04 11:43:08', '2019-05-04 11:43:08'),
	('016', 4, 'D3 Keuangan dan Perbankan', '2019-05-04 11:43:22', '2019-05-04 11:43:22'),
	('017', 4, 'D4 Komputerisasi Akuntansi', '2019-05-04 11:43:39', '2019-05-04 11:43:39'),
	('018', 4, 'D4 Perbankan Syariah', '2019-05-04 11:43:53', '2019-05-04 11:43:53'),
	('019', 4, 'D4 Analis Keuangan', '2019-05-04 11:44:10', '2019-05-04 11:44:10'),
	('020', 4, 'D4 Akuntansi Manajerial', '2019-05-04 11:44:27', '2019-05-04 11:44:27'),
	('021', 5, 'D3 Administrasi Bisnis', '2019-05-04 11:44:59', '2019-05-04 11:44:59'),
	('022', 5, 'D3 Manajemen Pemasaran', '2019-05-04 11:45:11', '2019-05-04 11:45:11'),
	('023', 5, 'D4 Manajemen Bisnis Internasioal', '2019-05-04 11:45:26', '2019-05-04 11:45:26'),
	('024', 5, 'D4 Administrasi Bisnis Terapan', '2019-05-04 11:45:44', '2019-05-04 11:45:44');
/*!40000 ALTER TABLE `master_prodi` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugasakhir.migrations: ~3 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_03_11_034439_create_model_users_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugasakhir.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.role: ~5 rows (approximately)
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id`, `nama`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2019-03-11 15:25:09', '0000-00-00 00:00:00'),
	(2, 'kaprodi', '2019-04-18 19:41:51', '0000-00-00 00:00:00'),
	(3, 'staff', '2019-04-18 19:42:00', '0000-00-00 00:00:00'),
	(4, 'penilai', '2019-04-18 20:08:16', '0000-00-00 00:00:00'),
	(5, 'pimpinan', '2019-04-18 20:08:16', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.tb_elemen
CREATE TABLE IF NOT EXISTS `tb_elemen` (
  `id` varchar(255) NOT NULL,
  `kode_standar_pk` varchar(255) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_standar_pk` (`kode_standar_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.tb_elemen: ~4 rows (approximately)
/*!40000 ALTER TABLE `tb_elemen` DISABLE KEYS */;
INSERT INTO `tb_elemen` (`id`, `kode_standar_pk`, `ket`, `created_at`, `updated_at`) VALUES
	('ELM012', 'STD002', 'Elemen 2', '2019-04-25 10:47:46', '2019-04-25 10:47:46'),
	('ELM013', 'STD003', 'Elemen 3', '2019-04-25 10:51:35', '2019-04-25 10:51:35'),
	('ELM018', 'STD001', 'Elemen 1', '2019-04-25 12:46:51', '2019-04-25 12:46:51'),
	('ELM019', 'STD001', 'Elemen 1.1', '2019-04-25 13:23:00', '2019-04-25 13:23:00');
/*!40000 ALTER TABLE `tb_elemen` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.tb_jurusan
CREATE TABLE IF NOT EXISTS `tb_jurusan` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.tb_jurusan: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_jurusan` DISABLE KEYS */;
INSERT INTO `tb_jurusan` (`id`, `nama`) VALUES
	('JR01', 'Akuntansi'),
	('JR02', 'Administrasi Bisnis');
/*!40000 ALTER TABLE `tb_jurusan` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.tb_prodi
CREATE TABLE IF NOT EXISTS `tb_prodi` (
  `id` varchar(255) NOT NULL,
  `id_jurusan_pk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_jurusan_pk` (`id_jurusan_pk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.tb_prodi: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_prodi` DISABLE KEYS */;
INSERT INTO `tb_prodi` (`id`, `id_jurusan_pk`, `nama`) VALUES
	('AK341', 'JR01', 'D3 Akuntansi');
/*!40000 ALTER TABLE `tb_prodi` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.tb_standar
CREATE TABLE IF NOT EXISTS `tb_standar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_standar` varchar(255) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`kode_standar`)
) ENGINE=InnoDB AUTO_INCREMENT=293 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.tb_standar: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_standar` DISABLE KEYS */;
INSERT INTO `tb_standar` (`id`, `kode_standar`, `ket`, `created_at`, `updated_at`) VALUES
	(290, 'STD001', 'Visi, Misi, Tujuan, dan Strategi', '2019-04-25 11:55:19', '2019-04-25 11:55:19'),
	(291, 'STD002', 'Tata Kelola, Tata Pamong, dan Kerjasama', '2019-04-25 11:55:24', '2019-04-25 11:55:24'),
	(292, 'STD003', 'Sumber Daya Manusia', '2019-04-25 11:55:30', '2019-04-25 11:55:30');
/*!40000 ALTER TABLE `tb_standar` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.tb_standar1
CREATE TABLE IF NOT EXISTS `tb_standar1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_standar` int(10) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table tugasakhir.tb_standar1: ~10 rows (approximately)
/*!40000 ALTER TABLE `tb_standar1` DISABLE KEYS */;
INSERT INTO `tb_standar1` (`id`, `kode_standar`, `ket`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Visi, Misi, Tujuan, dan Strategi', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(2, 2, 'Tata Kelola, Tata Pamong, dan Kerjasama', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(3, 3, 'Mahasiswa', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(4, 4, 'Sumber Daya Manusia', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(5, 5, 'Keuangan, Sarana, dan Prasarana', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(6, 6, 'Pendidikan', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(7, 7, 'Penelitian', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(8, 8, 'Pengabdian kepada Masyarakat', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(9, 9, 'Luaran dan Capaian Tridharma', '2019-04-19 10:01:41', '0000-00-00 00:00:00'),
	(10, 0, 'Kosong', '2019-04-19 10:01:41', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tb_standar1` ENABLE KEYS */;

-- Dumping structure for table tugasakhir.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_role` int(10) NOT NULL,
  `id_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_prodi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `id_role` (`id_role`,`id_jurusan`(191),`id_prodi`(191))
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugasakhir.users: ~9 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `id_role`, `id_jurusan`, `id_prodi`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL, 'mohammad susilo', 'mohammadsusilo99@gmail.com', '$2y$10$EcYuB8qrfemrW23TshKt/eWgEHmykV1zg6gClVyaY.E4kDME/Rdwu', NULL, '2019-03-11 06:56:26', '2019-03-11 06:56:26'),
	(3, 2, '2', '006', 'kaprodi', 'kaprodi@gmail.com', '$2y$10$84CAlXn5ZfFD26uC3EM1O.Gn9.F0.exqh6zJBjtKDh.hSSH0kIfQy', NULL, '2019-03-11 10:01:21', '2019-03-11 10:01:21'),
	(4, 3, NULL, NULL, 'staff1', 'staff1@gmail.com', '$2y$10$Kx357YpI7LwMUh2Tgwv4ReKakvJk6HvMGwComqZNQDq.A.PTHKGPu', NULL, '2019-03-22 00:38:06', '2019-03-22 00:38:06'),
	(8, 3, NULL, NULL, 'staff2', 'staff2@gmail.com', '$2y$10$6ZIzwh8A7xRmkMTcBi7VH.gUj6sgLrgXUQyazROI4AhZKXks2ZHBO', NULL, '2019-04-18 00:01:25', '2019-04-18 00:01:25'),
	(9, 3, NULL, NULL, 'staff3', 'staff3@gmail.com', '$2y$10$AYNV6BKPHmAQu.I1YOQwWOLqgB9v7vOMF4n9kyb1b7VwUiumZcwAe', NULL, '2019-04-18 12:59:20', '2019-04-18 12:59:20'),
	(10, 4, NULL, NULL, 'penilai', 'pen@gmail.com', '$2y$10$Qe4CctO8ZbPSY/aNcrYEmuP7cJWTbtRo8kZpsqMuMK4gftO4Gfl6C', NULL, '2019-04-18 13:08:44', '2019-04-18 13:08:44'),
	(11, 1, NULL, NULL, '085826079300', 'kaka@gmail.com', '$2y$10$N4rwF/o.KYAVZZfk6LR5T.m2opMOLR7VxCyRQfGBdY1e3Isyb4ceG', NULL, '2019-04-26 00:49:11', '2019-04-26 00:49:11'),
	(13, 1, NULL, NULL, 'susu', '99@gmail.com', '$2y$10$tLtkF3N/Q.bITzrl.xMvreS1sGBn0HjC/iOHtMDCYFbIBlwfdDIwK', NULL, '2019-04-26 10:10:54', '2019-04-26 10:10:54'),
	(14, 2, '3', '012', 'ndul', 'ndul@ndul.com', '$2y$10$zfQD6WL4/AplI4drlE4l8e3MmdXJseeKfJwvSPrZTNCF1N7EInkbG', NULL, '2019-05-04 12:10:58', '2019-05-04 12:10:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
