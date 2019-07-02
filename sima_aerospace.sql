/*
 Navicat Premium Data Transfer

 Source Server         : RizkyAHF - MySQL
 Source Server Type    : MySQL
 Source Server Version : 100110
 Source Host           : localhost:3306
 Source Schema         : sima_aerospace

 Target Server Type    : MySQL
 Target Server Version : 100110
 File Encoding         : 65001

 Date: 02/07/2019 18:00:47
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
INSERT INTO `inventarisasi_aset` VALUES ('3000753', 'V_BLOCK ', '3000 ', '2012-07-27', 'Block & Clamp UP V ', 'LPI-1688-1 ', 'ASDFG ', 'CIR ', 'Lemari 4-c ', 'IN STORE');
INSERT INTO `inventarisasi_aset` VALUES ('300761', 'HEIGHT GAUGE ', '3000 ', '2012-07-27', 'Trimos Mini Vertical Height ', 'LPI-0621 ', 'QWERT ', 'VALID ', 'IN STORE ', 'OUT CELL SHAFT WA');
INSERT INTO `inventarisasi_aset` VALUES ('300772', 'HOLTEST ', '3000 ', '2012-07-27', 'Tesa White Set 16 Pairs, 1 set ', 'LPI-1038 ', 'lkjh ', 'VALID ', 'R29-A ', 'OUT CELL COUPLING');

-- ----------------------------
-- Table structure for legal_audit
-- ----------------------------
DROP TABLE IF EXISTS `legal_audit`;
CREATE TABLE `legal_audit`  (
  `nomor_aset` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_dokumen` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_penetapan` date NOT NULL,
  `foto_aset` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nomor_dokumen`) USING BTREE,
  INDEX `nomor_aset`(`nomor_aset`) USING BTREE,
  CONSTRAINT `legal_audit_ibfk_1` FOREIGN KEY (`nomor_aset`) REFERENCES `inventarisasi_aset` (`nomor_aset`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of legal_audit
-- ----------------------------
INSERT INTO `legal_audit` VALUES ('300761', 'Kartu Garansi ', '2012-07-27', 'LPI-0621');
INSERT INTO `legal_audit` VALUES ('300772', 'Kartu Kepemilikan ', '2012-07-27', 'LPI-1038');
INSERT INTO `legal_audit` VALUES ('3000753', 'Sertikat ', '2012-07-27', 'LPI-1688-1');

-- ----------------------------
-- Table structure for optimasi_aset
-- ----------------------------
DROP TABLE IF EXISTS `optimasi_aset`;
CREATE TABLE `optimasi_aset`  (
  `akusisi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kondisi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `komponen_rusak` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_pemeliharaan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto_optimasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `estimasi_biaya` int(11) NOT NULL,
  INDEX `akusisi`(`akusisi`) USING BTREE,
  CONSTRAINT `optimasi_aset_ibfk_1` FOREIGN KEY (`akusisi`) REFERENCES `penilaian_aset` (`akusisi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of optimasi_aset
-- ----------------------------
INSERT INTO `optimasi_aset` VALUES ('111940 ', 'Broken ', 'Body keropos ', 'Dempul bagian keropo', NULL, 1250000);
INSERT INTO `optimasi_aset` VALUES ('230390 ', 'Broken ', 'Kain penutup ', 'Penggantian kain pen', NULL, 800000);
INSERT INTO `optimasi_aset` VALUES ('480810 ', 'Broken ', 'Lamp ', 'Penggantian lampu', NULL, 1400000);

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

-- ----------------------------
-- Records of penilaian_aset
-- ----------------------------
INSERT INTO `penilaian_aset` VALUES ('300761', '111940 ', '77903.29 ', '34036.71 ', '140 ', '153000');
INSERT INTO `penilaian_aset` VALUES ('300772', '230390 ', '160337.13 ', '70052.87 ', '140 ', '153000');
INSERT INTO `penilaian_aset` VALUES ('3000753', '480810 ', '334613.87 ', '146196.13 ', '140 ', '153000');

SET FOREIGN_KEY_CHECKS = 1;
