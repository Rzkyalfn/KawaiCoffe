-- --------------------------------------------------------
-- Host:                         Localhost
-- Server version:               10.1.34-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kawaikofie
CREATE DATABASE IF NOT EXISTS `kawaikofie` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kawaikofie`;


-- Dumping structure for table kawaikofie.jenis_menu
CREATE TABLE IF NOT EXISTS `jenis_menu` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table kawaikofie.jenis_menu: ~6 rows (approximately)
/*!40000 ALTER TABLE `jenis_menu` DISABLE KEYS */;
REPLACE INTO `jenis_menu` (`id_jenis`, `nama_jenis`) VALUES
	(1, 'mocktail'),
	(2, 'Rice Bowl'),
	(3, 'Main Course'),
	(4, 'Filter Coffee'),
	(5, 'Hot Coffee'),
	(6, 'Ice Coffee');
/*!40000 ALTER TABLE `jenis_menu` ENABLE KEYS */;

-- Dumping structure for table kawaikofie.kasir
CREATE TABLE IF NOT EXISTS `kasir` (
  `id_kasir` int(11) NOT NULL AUTO_INCREMENT,
  `no_hp` int(11) DEFAULT NULL,
  `username` int(11) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kawaikofie.kasir: ~0 rows (approximately)
/*!40000 ALTER TABLE `kasir` DISABLE KEYS */;
/*!40000 ALTER TABLE `kasir` ENABLE KEYS */;

-- Dumping structure for table kawaikofie.meja
CREATE TABLE IF NOT EXISTS `meja` (
  `no_meja` int(11) NOT NULL AUTO_INCREMENT,
  `status_meja` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no_meja`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table kawaikofie.meja: ~5 rows (approximately)
/*!40000 ALTER TABLE `meja` DISABLE KEYS */;
REPLACE INTO `meja` (`no_meja`, `status_meja`) VALUES
	(1, '05'),
	(2, '10'),
	(3, '15'),
	(4, '20'),
	(5, '25');
/*!40000 ALTER TABLE `meja` ENABLE KEYS */;

-- Dumping structure for table kawaikofie.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `id_jenis` (`id_jenis`),
  CONSTRAINT `FK_menu_jenis_menu` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_menu` (`id_jenis`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kawaikofie.menu: ~0 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table kawaikofie.pemesanan
CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `no_meja` int(11) DEFAULT NULL,
  `tgl_beli` datetime DEFAULT NULL,
  `id_kasir` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `FK_pembelian_meja` (`no_meja`),
  KEY `id_kasir` (`id_kasir`),
  KEY `id_menu` (`id_menu`),
  CONSTRAINT `FK_pembelian_meja` FOREIGN KEY (`no_meja`) REFERENCES `meja` (`no_meja`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pemesanan_kasir` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pemesanan_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table kawaikofie.pemesanan: ~3 rows (approximately)
/*!40000 ALTER TABLE `pemesanan` DISABLE KEYS */;
REPLACE INTO `pemesanan` (`id_pemesanan`, `no_meja`, `tgl_beli`, `id_kasir`, `id_menu`) VALUES
	(1, 4, '2022-06-24 10:08:44', NULL, NULL),
	(2, 5, '2022-06-24 10:09:04', NULL, NULL),
	(3, 1, '2022-06-24 10:09:17', NULL, NULL);
/*!40000 ALTER TABLE `pemesanan` ENABLE KEYS */;


-- Dumping structure for table kawaikofie.detail_pesanan
CREATE TABLE IF NOT EXISTS `detail_pesanan` (
  `id_pemesanan` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  KEY `FK_item_pembelian_jenis_menu` (`id_menu`),
  KEY `FK_item_pembelian_pembelian` (`id_pemesanan`) USING BTREE,
  CONSTRAINT `FK_detail_pesanan_pemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON UPDATE CASCADE,
  CONSTRAINT `FK_item_pembelian_jenis_menu` FOREIGN KEY (`id_menu`) REFERENCES `jenis_menu` (`id_jenis`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table kawaikofie.detail_pesanan: ~5 rows (approximately)
/*!40000 ALTER TABLE `detail_pesanan` DISABLE KEYS */;
REPLACE INTO `detail_pesanan` (`id_pemesanan`, `id_menu`, `jumlah`) VALUES
	(1, 1, 2),
	(1, 6, 2),
	(2, 5, 4),
	(3, 2, 6),
	(2, 3, 3);
/*!40000 ALTER TABLE `detail_pesanan` ENABLE KEYS */;


/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
