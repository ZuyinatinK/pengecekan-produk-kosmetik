-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table si_hakos.tb_admin
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table si_hakos.tb_jenisproduk
CREATE TABLE IF NOT EXISTS `tb_jenisproduk` (
  `id_jenisproduk` int(20) NOT NULL AUTO_INCREMENT,
  `nama_jenisproduk` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jenisproduk`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table si_hakos.tb_komposisi
CREATE TABLE IF NOT EXISTS `tb_komposisi` (
  `id_komposisi` int(20) NOT NULL AUTO_INCREMENT,
  `nama_komposisi` varchar(50) NOT NULL,
  `id_produk` int(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `fungsi` text NOT NULL,
  `efek` text NOT NULL,
  `keterangan` text NOT NULL,
  `status_aman` varchar(20) NOT NULL,
  `status_halal` varchar(20) NOT NULL,
  PRIMARY KEY (`id_komposisi`),
  KEY `FK_1` (`id_produk`),
  CONSTRAINT `FK_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table si_hakos.tb_komposisi_produk
CREATE TABLE IF NOT EXISTS `tb_komposisi_produk` (
  `id_komposisi_produk` int(20) NOT NULL AUTO_INCREMENT,
  `id_komposisi` int(20) NOT NULL,
  `id_produk` int(20) NOT NULL,
  PRIMARY KEY (`id_komposisi_produk`),
  KEY `id_komposisi` (`id_komposisi`),
  KEY `id_produk` (`id_produk`),
  CONSTRAINT `tb_komposisi_produk_ibfk_1` FOREIGN KEY (`id_komposisi`) REFERENCES `tb_komposisi` (`id_komposisi`),
  CONSTRAINT `tb_komposisi_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table si_hakos.tb_produk
CREATE TABLE IF NOT EXISTS `tb_produk` (
  `id_produk` int(20) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `sertifikasi_BPOM` varchar(20) DEFAULT NULL,
  `sertifikasi_MUI` varchar(20) DEFAULT NULL,
  `id_jenisproduk` int(20) NOT NULL,
  `id_produsen` int(20) NOT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `id_jenisproduk` (`id_jenisproduk`),
  KEY `id_produsen` (`id_produsen`),
  CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_jenisproduk`) REFERENCES `tb_jenisproduk` (`id_jenisproduk`),
  CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`id_produsen`) REFERENCES `tb_produsen` (`id_produsen`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table si_hakos.tb_produsen
CREATE TABLE IF NOT EXISTS `tb_produsen` (
  `id_produsen` int(20) NOT NULL AUTO_INCREMENT,
  `nama_produsen` varchar(255) NOT NULL,
  `alamat_produsen` varchar(255) NOT NULL,
  `kontak_produsen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_produsen`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table si_hakos.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
