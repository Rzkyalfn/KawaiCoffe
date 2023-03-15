-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.6-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for hawai
CREATE DATABASE IF NOT EXISTS `hawai` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hawai`;


-- Dumping structure for table hawai.item_pembelian
CREATE TABLE IF NOT EXISTS `item_pembelian` (
  `id_pembelian` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  KEY `FK_item_pembelian_pembelian` (`id_pembelian`),
  KEY `FK_item_pembelian_jenis_menu` (`id_menu`),
  CONSTRAINT `FK_item_pembelian_jenis_menu` FOREIGN KEY (`id_menu`) REFERENCES `jenis_menu` (`id_jenis`) ON UPDATE CASCADE,
  CONSTRAINT `FK_item_pembelian_pembelian` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hawai.item_pembelian: ~5 rows (approximately)
/*!40000 ALTER TABLE `item_pembelian` DISABLE KEYS */;
REPLACE INTO `item_pembelian` (`id_pembelian`, `id_menu`, `jumlah`) VALUES
	(1, 1, 2),
	(1, 6, 2),
	(2, 5, 4),
	(3, 2, 6),
	(2, 3, 3);
/*!40000 ALTER TABLE `item_pembelian` ENABLE KEYS */;


-- Dumping structure for table hawai.jenis_menu
CREATE TABLE IF NOT EXISTS `jenis_menu` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table hawai.jenis_menu: ~5 rows (approximately)
/*!40000 ALTER TABLE `jenis_menu` DISABLE KEYS */;
REPLACE INTO `jenis_menu` (`id_jenis`, `nama_jenis`) VALUES
	(1, 'deseret'),
	(2, 'makanan halal'),
	(3, 'makanan harom'),
	(4, 'moktail '),
	(5, 'cocktail'),
	(6, 'snack');
/*!40000 ALTER TABLE `jenis_menu` ENABLE KEYS */;


-- Dumping structure for table hawai.meja
CREATE TABLE IF NOT EXISTS `meja` (
  `no_meja` int(11) NOT NULL AUTO_INCREMENT,
  `kapasitas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`no_meja`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table hawai.meja: ~5 rows (approximately)
/*!40000 ALTER TABLE `meja` DISABLE KEYS */;
REPLACE INTO `meja` (`no_meja`, `kapasitas`) VALUES
	(1, '05'),
	(2, '10'),
	(3, '15'),
	(4, '20'),
	(5, '25');
/*!40000 ALTER TABLE `meja` ENABLE KEYS */;


-- Dumping structure for table hawai.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `FK_menu_jenis_menu` (`id_jenis`),
  CONSTRAINT `FK_menu_jenis_menu` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_menu` (`id_jenis`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table hawai.menu: ~11 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
REPLACE INTO `menu` (`id_menu`, `nama_menu`, `harga`, `id_jenis`) VALUES
	(1, 'chocolate caramel', 25000, 1),
	(2, 'Waffle Choco Ribe', 17000, 1),
	(3, 'babi taliwang', 50000, 3),
	(4, 'pork belly satay sandwich', 45000, 3),
	(5, 'nasi goreng hawai beach', 35000, 2),
	(6, 'mie goreng hawai beach', 30000, 2),
	(7, 'lemon squash', 20000, 4),
	(8, 'strawbery mozito', 30000, 4),
	(9, 'hawai peach', 35000, 5),
	(10, 'berycold', 30000, 5),
	(11, 'crispy pokpok', 20000, 6),
	(12, 'nachos cheese', 25000, 6);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;


-- Dumping structure for table hawai.pelanggan
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table hawai.pelanggan: ~3 rows (approximately)
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
REPLACE INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `no_hp`, `pekerjaan`, `alamat`) VALUES
	(1, 'jack suanda alexsis', '0877223344', 'pilot', 'new xes'),
	(2, 'alexsis yin ', '0877223355', 'bandar jud', 'pasar lama'),
	(3, 'loyi', '0877223366', 'karyawan hotel', 'jakarta ');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;


-- Dumping structure for table hawai.pembelian
CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_meja` int(11) DEFAULT NULL,
  `tgl_beli` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pembelian`),
  KEY `FK_pembelian_pelanggan` (`id_pelanggan`),
  KEY `FK_pembelian_meja` (`no_meja`),
  CONSTRAINT `FK_pembelian_meja` FOREIGN KEY (`no_meja`) REFERENCES `meja` (`no_meja`) ON UPDATE CASCADE,
  CONSTRAINT `FK_pembelian_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table hawai.pembelian: ~3 rows (approximately)
/*!40000 ALTER TABLE `pembelian` DISABLE KEYS */;
REPLACE INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `no_meja`, `tgl_beli`) VALUES
	(1, 1, 4, '2022-06-24 10:08:44'),
	(2, 2, 5, '2022-06-24 10:09:04'),
	(3, 3, 1, '2022-06-24 10:09:17');
/*!40000 ALTER TABLE `pembelian` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
