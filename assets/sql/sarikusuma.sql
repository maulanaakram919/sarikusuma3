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

 Date: 26/12/2023 22:53:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
-- Table structure for data_terapis
-- ----------------------------
DROP TABLE IF EXISTS `data_terapis`;
CREATE TABLE `data_terapis`  (
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
-- Records of data_terapis
-- ----------------------------
INSERT INTO `data_terapis` VALUES (1, '', 'dr. DWI RATNA SARI HANDAYANI STr.Kes,MKK,MSi ', 'Ahli Spesialis Terapi', ' Pemilik', NULL, '2023-12-26 22:37:15');
INSERT INTO `data_terapis` VALUES (2, '2', 'JENG JULIE', 'Spesialis Mata', 'Pengelola', NULL, '2023-12-26 22:36:42');
INSERT INTO `data_terapis` VALUES (3, '1', 'LUKMAN HAKIM', 'Spesialis Mata', 'Marketing', NULL, '2023-12-26 22:37:44');

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
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_user
-- ----------------------------
INSERT INTO `data_user` VALUES (11, 10, 'Tes', '3174085904920006', 'hahahahah123@gmail.c', '66787878', '1994-01-11', 'Islam', 'p', 'kalibata utara II', 'Jakarta Selatan', 'DKI Jakarta', 'Indonesia', '2023-12-17 23:13:57');
INSERT INTO `data_user` VALUES (15, 0, 'Vinna', '3174085904920003', 'Vinna@gmail.com', '0813123456789', '1992-04-13', 'Islam', 'w', 'Jl kalibata utara II NO 30', 'Indonesia', 'DKI Jakarta', 'Jakarta Selatan', '2023-12-17 23:23:51');
INSERT INTO `data_user` VALUES (16, 0, 'fdsaf', 'fdsfa', 'fdsaf', 'fdsa', '2023-12-06', 'fdsa', 'p', NULL, 'fdsa', 'fdsaf', 'fdsaf', '2023-12-21 21:10:29');
INSERT INTO `data_user` VALUES (17, 0, 'pinna', '3201076810020020', 'qwert', '12345', '4444-04-04', 'gugu', 'w', NULL, 's', 's', 's', '2023-12-23 23:57:51');
INSERT INTO `data_user` VALUES (18, 0, 'john doe', '3174082102990005', 'john@mail.com', '08123456789', '1993-02-21', 'Islam', 'p', NULL, 'Indonesia', 'DKI Jakarta', 'Jakarta selatan', '2023-12-26 22:28:43');

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
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of history_transaksi
-- ----------------------------
INSERT INTO `history_transaksi` VALUES (12, '21', 'Cash', '315000', '2023-12-26 22:31:21', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nota
-- ----------------------------
INSERT INTO `nota` VALUES (19, 21, 'Cash', '1', '2023-12-26 22:31:21', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rekam_medis
-- ----------------------------
INSERT INTO `rekam_medis` VALUES (4, 1, 2, NULL, 'Terapi Mata', '2023-12-04', '01:53:29am', 'tidak_kacamata', 'tidak_kacamata', 'tidak_kacamata', 'tidak_kacamata', 'tidak', 'tidak', 'tidak', 'ok', 0, 'ok', 'ok', 'ok', 'ok', 'semua normal', '', '2023-12-09 02:15:54', NULL);
INSERT INTO `rekam_medis` VALUES (10, 11, 2, NULL, 'Terapi Mata', '2023-12-21', '02:11:14am', 'Mata Kanan', 'Mata Kanan', 'Mata Kiri', 'Mata Kiri', 'ya', 'ya', 'ya', 'Lampu 15 Titik', 1, 'Lampu Terang Gelap', 'Stik Magnet', 'Osilator Listrik', 'Snellend Chart minus & plus', 'KESIMPULAN', '', '2023-12-21 02:11:14', NULL);
INSERT INTO `rekam_medis` VALUES (11, 11, 2, NULL, 'Terapi Mata', '2023-12-21', '22:16:02pm', 'fdsaf', 'fdsfads', 'fdfads', 'fdsfad', '      Tidak', 'Tidak', '   Tidak', 'lampu15Titik', 1, 'lampuTerangGelap', 'fdsaf', 'fdsa', 'fdsaf', 'kkkkk', NULL, '2023-12-21 02:16:23', '2023-12-21');
INSERT INTO `rekam_medis` VALUES (13, 16, 2, NULL, 'Terapi Mata', '2023-12-21', '21:22:50pm', 'Mata Kanan', 'Mata Kanan', 'Mata Kiri', 'Mata Kiri', 'ya', 'ya', 'ya', 'Lampu 15 Titik', 1, 'Lampu Terang Gelap', 'Stik Magnet', 'Osilator Listrik', 'Snellen Chart minus & plus', 'KESIMPULAN\r\n', NULL, '2023-12-21 21:22:50', NULL);
INSERT INTO `rekam_medis` VALUES (14, 17, 2, NULL, 'Terapi Mata', '2023-12-24', '02:47:41am', 'fdsafds', 'fdsaf', 'fdsfad', 'fdsaf', '                      Ya', 'Ya', '           Ya', 'lampu15Titik', 1, 'lampuTerangGelap', 'fdsa', 'fdsaf', 'fdsaf', 'fdsafdsfads', '2,3,7', '2023-12-24 00:38:34', '2023-12-24');
INSERT INTO `rekam_medis` VALUES (17, 17, 2, 14, 'Terapi Mata', '2023-12-24', '10:53:09am', 'fdsfa', 'fdsfa', 'fdsaf', 'fdsafds', '  Ya', 'Ya', ' Ya', 'lampu15Titik', 1, 'lampuTerangGelap', 'fdsaf', 'fdsaf', 'fdsaf', 'fdsfadfafdsfa', '3,6', '2023-12-24 10:52:56', '2023-12-24');
INSERT INTO `rekam_medis` VALUES (18, 15, 2, 16, 'Terapi Mata', '2023-12-24', '13:43:43pm', 'asdf', 'fdsa', 'asdfasfd', 'fdsa', 'ya', 'tidak', 'tidak', 'fdsafds', 1, 'fdfsad', 'fdfafdsa', 'fdfsafd', 'fdfsad', 'adsadASDdsaDSA', '3', '2023-12-24 13:43:43', NULL);
INSERT INTO `rekam_medis` VALUES (19, 11, 2, 17, 'Terapi Mata', '2023-12-25', '21:54:39pm', 'fdsaf', 'fdsaf', 'fdsfa', 'fdsa', 'ya', 'ya', 'ya', 'fdsa', 1, 'fdsa', 'fdsa', 'fdsa', 'fdsa', 'fdsafsdfa', '3,7,9', '2023-12-25 21:54:39', NULL);
INSERT INTO `rekam_medis` VALUES (20, 15, 2, 18, 'Terapi Mata', '2023-12-25', '21:57:40pm', 'ok', 'ok', 'ok', 'ok', 'tidak', 'tidak', 'tidak', 'ok', 1, 'ok', 'ok', 'ok', 'ok', 'sudah cukup baik ', '2', '2023-12-25 21:57:40', NULL);
INSERT INTO `rekam_medis` VALUES (21, 15, 2, 20, 'Terapi Mata', '2023-12-26', '01:13:30am', 'fdsa', 'fdsa', 'fdsa', 'fdsa', 'ya', 'ya', 'ya', 'fdsa', 1, 'fdsa', 'fdsa', 'fdsa', 'fdsa', 'fdsa', '8', '2023-12-26 01:13:30', NULL);
INSERT INTO `rekam_medis` VALUES (22, 18, 2, 21, 'Terapi Mata', '2023-12-26', '22:30:49pm', 'ok', 'ok', 'ok', 'ok', 'tidak', 'ya', 'tidak', 'ok', 1, 'ok', 'ok', 'ok', 'ok', 'sehat wal afiat', '3', '2023-12-26 22:30:49', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resep
-- ----------------------------
INSERT INTO `resep` VALUES (15, 16, 2, NULL, '2023-12-24 02:24:13');
INSERT INTO `resep` VALUES (16, 16, 3, NULL, '2023-12-24 02:24:13');
INSERT INTO `resep` VALUES (17, 16, 9, NULL, '2023-12-24 02:24:13');
INSERT INTO `resep` VALUES (35, 14, 3, NULL, '2023-12-24 10:53:09');
INSERT INTO `resep` VALUES (36, 14, 6, NULL, '2023-12-24 10:53:09');
INSERT INTO `resep` VALUES (37, 16, 3, '2023-12-24 13:43:43', NULL);
INSERT INTO `resep` VALUES (38, 17, 3, '2023-12-25 21:54:38', NULL);
INSERT INTO `resep` VALUES (39, 17, 7, '2023-12-25 21:54:39', NULL);
INSERT INTO `resep` VALUES (40, 17, 9, '2023-12-25 21:54:39', NULL);
INSERT INTO `resep` VALUES (41, 18, 2, '2023-12-25 21:57:40', NULL);
INSERT INTO `resep` VALUES (42, 20, 8, '2023-12-26 01:13:30', NULL);
INSERT INTO `resep` VALUES (43, 21, 3, '2023-12-26 22:30:49', NULL);
INSERT INTO `resep` VALUES (44, 15, 3, '2023-12-26 22:49:36', NULL);
INSERT INTO `resep` VALUES (45, 15, 6, '2023-12-26 22:49:36', NULL);

-- ----------------------------
-- Table structure for reservasi
-- ----------------------------
DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_terapi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `terapi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reservasi
-- ----------------------------
INSERT INTO `reservasi` VALUES (7, '15', '16-12-2023', '1', NULL, '2023-12-17 23:32:03', NULL);
INSERT INTO `reservasi` VALUES (9, '11', '22-12-2023', '1', 0, '2023-12-21 21:49:24', NULL);
INSERT INTO `reservasi` VALUES (12, '11', '23-12-2023', '1', 1, '2023-12-24 00:17:22', NULL);
INSERT INTO `reservasi` VALUES (13, '16', '21-12-2023', '1', 1, '2023-12-24 00:05:51', NULL);
INSERT INTO `reservasi` VALUES (14, '17', '24-12-2023', '1', 1, '2023-12-24 00:21:46', NULL);
INSERT INTO `reservasi` VALUES (15, '17', '26-12-2023', '1', 1, '2023-12-24 00:21:24', NULL);
INSERT INTO `reservasi` VALUES (16, '15', '24-12-2023', '1', 1, '2023-12-24 13:43:04', NULL);
INSERT INTO `reservasi` VALUES (17, '11', '25-12-2023', '1', 1, '2023-12-25 21:37:59', NULL);
INSERT INTO `reservasi` VALUES (18, '15', '25-12-2023', '1', 1, '2023-12-25 21:56:10', NULL);
INSERT INTO `reservasi` VALUES (19, '11', '25-12-2023', '1', 0, '2023-12-25 23:35:57', NULL);
INSERT INTO `reservasi` VALUES (20, '15', '26-12-2023', '1', 1, '2023-12-26 01:12:56', NULL);
INSERT INTO `reservasi` VALUES (21, '18', '26-12-2023', '1', 1, '2023-12-26 22:29:44', NULL);

SET FOREIGN_KEY_CHECKS = 1;
