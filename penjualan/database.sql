-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.25 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4998
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table nusatekno.penjualan
CREATE TABLE IF NOT EXISTS `penjualan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table nusatekno.penjualan: ~4 rows (approximately)
/*!40000 ALTER TABLE `penjualan` DISABLE KEYS */;
INSERT INTO `penjualan` (`id`, `kode`, `tanggal`) VALUES
	(1, 'TRX/2015/0001', '2015-01-25'),
	(2, 'TRX/2015/0002', '2015-01-31'),
	(3, 'TRX/2015/0003', '2015-02-10'),
	(4, 'TRX/2015/0004', '2015-03-03'),
	(5, 'TRX/2015/0005', '2015-05-17');
/*!40000 ALTER TABLE `penjualan` ENABLE KEYS */;


-- Dumping structure for table nusatekno.penjualan_detil
CREATE TABLE IF NOT EXISTS `penjualan_detil` (
  `id_penjualan` int(10) unsigned DEFAULT NULL,
  `id_barang` int(10) unsigned DEFAULT NULL,
  `harga_satuan` double unsigned DEFAULT NULL,
  `jumlah_dijual` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table nusatekno.penjualan_detil: ~9 rows (approximately)
/*!40000 ALTER TABLE `penjualan_detil` DISABLE KEYS */;
INSERT INTO `penjualan_detil` (`id_penjualan`, `id_barang`, `harga_satuan`, `jumlah_dijual`) VALUES
	(2, 2, 25000, 2),
	(3, 3, 12000, 2),
	(4, 2, 25000, 4),
	(4, 3, 12000, 1),
	(1, 2, 25000, 5),
	(1, 3, 12000, 1),
	(1, 1, 20000, 3),
	(5, 1, 20000, 3),
	(5, 2, 25000, 1),
	(5, 3, 12000, 2);
/*!40000 ALTER TABLE `penjualan_detil` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
