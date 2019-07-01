/*
 Navicat Premium Data Transfer

 Source Server         : vey_mysql
 Source Server Type    : MySQL
 Source Server Version : 100110
 Source Host           : localhost:3306
 Source Schema         : sima_aerospace

 Target Server Type    : MySQL
 Target Server Version : 100110
 File Encoding         : 65001

 Date: 01/07/2019 20:50:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for inventarisasi_aset
-- ----------------------------
DROP TABLE IF EXISTS `inventarisasi_aset`;
CREATE TABLE `inventarisasi_aset`  (
  `nomor_aset` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_pengadaan` date NOT NULL,
  `deskripsi_kegunaan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tipe` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lokasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penanggungjawab` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nomor_aset`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of inventarisasi_aset
-- ----------------------------
INSERT INTO `inventarisasi_aset` VALUES ('1', '1', '1', '0000-00-00', '1', '1', '1', '1', '1', '2');
INSERT INTO `inventarisasi_aset` VALUES ('2', '2', '2', '0000-00-00', '2', '2', '2', '2', '2', '2');

-- ----------------------------
-- Table structure for legal_audit
-- ----------------------------
DROP TABLE IF EXISTS `legal_audit`;
CREATE TABLE `legal_audit`  (
  `nomor_aset` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_dokumen` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_penetapan` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto_aset` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nomor_dokumen`) USING BTREE,
  INDEX `nomor_aset`(`nomor_aset`) USING BTREE,
  CONSTRAINT `legal_audit_ibfk_1` FOREIGN KEY (`nomor_aset`) REFERENCES `inventarisasi_aset` (`nomor_aset`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for optimasi_aset
-- ----------------------------
DROP TABLE IF EXISTS `optimasi_aset`;
CREATE TABLE `optimasi_aset`  (
  `akusisi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kondisi` int(11) NOT NULL,
  `komponen_rusak` int(11) NOT NULL,
  `jenis_pemeliharaan` int(11) NOT NULL,
  `foto_optimasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `estimasi_biaya` int(11) NOT NULL,
  INDEX `akusisi`(`akusisi`) USING BTREE,
  CONSTRAINT `optimasi_aset_ibfk_1` FOREIGN KEY (`akusisi`) REFERENCES `penilaian_aset` (`akusisi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for penilaian_aset
-- ----------------------------
DROP TABLE IF EXISTS `penilaian_aset`;
CREATE TABLE `penilaian_aset`  (
  `nomor_aset` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `akusisi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `akumulasi_depresiasi` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_akhir` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `BalShTm` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ApCacct` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`akusisi`) USING BTREE,
  INDEX `nomor_aset`(`nomor_aset`) USING BTREE,
  CONSTRAINT `penilaian_aset_ibfk_1` FOREIGN KEY (`nomor_aset`) REFERENCES `inventarisasi_aset` (`nomor_aset`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
