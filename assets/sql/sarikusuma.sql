/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : sarikusuma

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 18/01/2024 22:06:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_admin
-- ----------------------------
DROP TABLE IF EXISTS `data_admin`;
CREATE TABLE `data_admin`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_terapis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `spesialis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_admin
-- ----------------------------
INSERT INTO `data_admin` VALUES (1, '', 'dr. DWI RATNA SARI HANDAYANI STr.Kes,MKK,MSi ', 'Ahli Spesialis Terapi', ' Pemilik', NULL, '2023-12-26 22:37:15');
INSERT INTO `data_admin` VALUES (2, '2', 'JENG JULIE', 'Spesialis Mata', 'Pengelola', NULL, '2023-12-26 22:36:42');
INSERT INTO `data_admin` VALUES (3, '1', 'LUKMAN HAKIM', 'Spesialis Mata', 'Marketing', NULL, '2023-12-26 22:37:44');

-- ----------------------------
-- Table structure for data_obat
-- ----------------------------
DROP TABLE IF EXISTS `data_obat`;
CREATE TABLE `data_obat`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_modified` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_obat
-- ----------------------------
INSERT INTO `data_obat` VALUES (2, 'Billberry', '35000', NULL, NULL);
INSERT INTO `data_obat` VALUES (3, 'Madu mata', '65000', NULL, NULL);
INSERT INTO `data_obat` VALUES (6, 'madu penambah darah', '75000', NULL, NULL);
INSERT INTO `data_obat` VALUES (7, 'Habbatussauda kapsul', '65000', NULL, NULL);
INSERT INTO `data_obat` VALUES (8, 'Habbatussauda cair', '65000', NULL, NULL);
INSERT INTO `data_obat` VALUES (9, 'Utsu', '1800000', NULL, NULL);
INSERT INTO `data_obat` VALUES (10, 'tsubarashi', '1800000', NULL, NULL);

-- ----------------------------
-- Table structure for data_user
-- ----------------------------
DROP TABLE IF EXISTS `data_user`;
CREATE TABLE `data_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `nama` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `negara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_user
-- ----------------------------
INSERT INTO `data_user` VALUES (11, 10, 'Tes', '3174085904920006', 'hahahahah123@gmail.c', '66787878', '1994-01-11', 'Islam', 'p', 'kalibata utara II', 'Jakarta Selatan', 'DKI Jakarta', 'Indonesia', '2023-12-17 23:13:57');
INSERT INTO `data_user` VALUES (15, 0, 'Vinna', '3174085904920003', 'Vinna@gmail.com', '0813123456789', '1992-04-13', 'Islam', 'w', 'Jl kalibata utara II NO 30', 'Indonesia', 'DKI Jakarta', 'Jakarta Selatan', '2023-12-17 23:23:51');
INSERT INTO `data_user` VALUES (16, 0, 'fdsaf', 'fdsfa', 'fdsaf', 'fdsa', '2023-12-06', 'fdsa', 'p', NULL, 'fdsa', 'fdsaf', 'fdsaf', '2023-12-21 21:10:29');
INSERT INTO `data_user` VALUES (17, 0, 'pinna', '3201076810020020', 'qwert', '12345', '4444-04-04', 'gugu', 'w', NULL, 's', 's', 's', '2023-12-23 23:57:51');
INSERT INTO `data_user` VALUES (18, 0, 'john doe', '3174082102990005', 'john@mail.com', '08123456789', '1993-02-21', 'Islam', 'p', NULL, 'Indonesia', 'DKI Jakarta', 'Jakarta selatan', '2023-12-26 22:28:43');
INSERT INTO `data_user` VALUES (19, 0, 'asdf', '1242143241', 'fdsaf', 'fdsaf', '2024-01-04', 'fdaf', 'p', 'fdsadafdsfads', 'fdafdfaf', 'fda', 'fdaf', '2024-01-06 00:49:42');

-- ----------------------------
-- Table structure for history_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `history_transaksi`;
CREATE TABLE `history_transaksi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_reservasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `metode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nominal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of history_transaksi
-- ----------------------------
INSERT INTO `history_transaksi` VALUES (31, '1', 'Cash', '400000', '2024-01-18 22:02:27', NULL);

-- ----------------------------
-- Table structure for hubungisaya
-- ----------------------------
DROP TABLE IF EXISTS `hubungisaya`;
CREATE TABLE `hubungisaya`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(31) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pesan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hubungisaya
-- ----------------------------
INSERT INTO `hubungisaya` VALUES (1, '', '', '');
INSERT INTO `hubungisaya` VALUES (2, '', '', '');
INSERT INTO `hubungisaya` VALUES (3, 'jajaja', '', 'nanananan');
INSERT INTO `hubungisaya` VALUES (4, '', '', '');

-- ----------------------------
-- Table structure for layanan
-- ----------------------------
DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `layanan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan
-- ----------------------------
INSERT INTO `layanan` VALUES (1, 'Terapi Mata', '250000', 1, NULL, '2023-12-25 23:40:20');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` int NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 'admin', 123, 1);
INSERT INTO `login` VALUES (2, 'terapis', 123, 2);

-- ----------------------------
-- Table structure for nota
-- ----------------------------
DROP TABLE IF EXISTS `nota`;
CREATE TABLE `nota`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_reservasi` int NULL DEFAULT NULL,
  `metode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nota
-- ----------------------------
INSERT INTO `nota` VALUES (1, 1, 'Cash', '1', '2024-01-18 22:02:27', NULL);

-- ----------------------------
-- Table structure for rekam_medis
-- ----------------------------
DROP TABLE IF EXISTS `rekam_medis`;
CREATE TABLE `rekam_medis`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_dokter` int NOT NULL,
  `id_reservasi` int NULL DEFAULT NULL,
  `layanan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jam` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mata_kanan_minus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_kanan_plus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_kiri_minus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_kiri_plus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `buta_warna` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `buta_warna_parsial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `buta_warna_total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lampu15Titik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` int NOT NULL,
  `lampuTerangGelap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `stikMagnet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `osilatorListrik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `snelled` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kesimpulan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `obat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rekam_medis
-- ----------------------------
INSERT INTO `rekam_medis` VALUES (1, 11, 1, 1, 'Terapi Mata', '2024-01-18', '22:01:43pm', 'ok', 'ok', 'ok', 'ok', 'tidak', 'tidak', 'tidak', 'ok', 1, 'ok', 'ok', 'ok', 'ok', 'bagus', '3,7', '2024-01-18 22:01:43', NULL);

-- ----------------------------
-- Table structure for resep
-- ----------------------------
DROP TABLE IF EXISTS `resep`;
CREATE TABLE `resep`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_reservasi` int NULL DEFAULT NULL,
  `id_vitamin` int NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resep
-- ----------------------------
INSERT INTO `resep` VALUES (1, 1, 3, '2024-01-18 22:01:43', NULL);
INSERT INTO `resep` VALUES (2, 1, 7, '2024-01-18 22:01:43', NULL);

-- ----------------------------
-- Table structure for reservasi
-- ----------------------------
DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_terapi` date NULL DEFAULT NULL,
  `id_layanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reservasi
-- ----------------------------
INSERT INTO `reservasi` VALUES (1, '11', '2024-01-18', '1', 1, '2024-01-18 21:52:14', NULL);
INSERT INTO `reservasi` VALUES (2, '11', '2023-12-05', '1', 0, '2024-01-18 21:53:44', NULL);
INSERT INTO `reservasi` VALUES (3, '17', '2023-12-26', '1', 0, '2024-01-18 21:54:04', NULL);
INSERT INTO `reservasi` VALUES (4, '15', '2023-12-01', '1', 0, '2024-01-18 21:56:49', NULL);
INSERT INTO `reservasi` VALUES (5, '17', '2023-12-16', '1', 0, '2024-01-18 21:59:28', NULL);

SET FOREIGN_KEY_CHECKS = 1;
