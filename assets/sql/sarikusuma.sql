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

 Date: 16/12/2023 19:27:06
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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_obat
-- ----------------------------
INSERT INTO `data_obat` VALUES (1, 'Madu Lambungku', '120000', NULL, NULL);
INSERT INTO `data_obat` VALUES (2, 'Billberry', '35000', NULL, NULL);
INSERT INTO `data_obat` VALUES (3, 'Madu mata', '65000', NULL, NULL);
INSERT INTO `data_obat` VALUES (4, 'madu hutan', '90000', NULL, NULL);
INSERT INTO `data_obat` VALUES (5, 'Renko gamat', '165000', NULL, NULL);
INSERT INTO `data_obat` VALUES (6, 'madu penambah darah', '75000', NULL, NULL);
INSERT INTO `data_obat` VALUES (7, 'Habbatussauda kapsul', '65000', NULL, NULL);
INSERT INTO `data_obat` VALUES (8, 'Habbatussauda cair', '65000', NULL, NULL);
INSERT INTO `data_obat` VALUES (9, 'Utsu', '1800000', NULL, NULL);
INSERT INTO `data_obat` VALUES (10, 'tsubarashi', '1800000', NULL, NULL);
INSERT INTO `data_obat` VALUES (11, 'minyak zaitun', '65000', NULL, NULL);

-- ----------------------------
-- Table structure for data_terapis
-- ----------------------------
DROP TABLE IF EXISTS `data_terapis`;
CREATE TABLE `data_terapis`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_terapis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `spesialis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_terapis
-- ----------------------------
INSERT INTO `data_terapis` VALUES (1, 'dr. DWI RATNA SARI HANDAYANI STr.Kes,MKK,MSi ', 'Patah Tulang', NULL, NULL, NULL);
INSERT INTO `data_terapis` VALUES (2, 'JENG JULIE', 'Praktisi Bekam', NULL, NULL, NULL);
INSERT INTO `data_terapis` VALUES (3, 'LUKMAN HAKIM', 'Praktisi Bekam', NULL, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_user
-- ----------------------------
INSERT INTO `data_user` VALUES (8, 0, 'vinna', '3174085904950005', 'vinna1010@gmail.com', '2147483647', '1998-06-16', 'Islam', '', 'Jl kalibata utara II no 70', 'Jakarta Selatan', 'Dki Jakarta', 'Indonesia', '2023-12-16 10:41:31');
INSERT INTO `data_user` VALUES (11, 10, 'Tes', NULL, 'hahahahah123@gmail.c', '66787878', '1994-01-11', 'Islam', 'p', 'kalibata utara II', 'Jakarta Selatan', 'DKI Jakarta', 'Indonesia', '2023-12-02 20:35:50');

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
  `id_user` int NOT NULL,
  `layanan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jam` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan
-- ----------------------------
INSERT INTO `layanan` VALUES (3, 7, 'periksa mata', '', '', 0);

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
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 'akram', 12345678, 1);
INSERT INTO `login` VALUES (2, 'dani', 12345678, 2);
INSERT INTO `login` VALUES (3, 'nana', 12345, 2);
INSERT INTO `login` VALUES (4, 'nana@gmail.com', 12345, 2);
INSERT INTO `login` VALUES (5, 'vinna1010@gmail.com', 0, 2);
INSERT INTO `login` VALUES (6, 'adit1010@gmail.com', 12345678, 2);
INSERT INTO `login` VALUES (7, 'alu11@gmail.com', 12345678, 2);
INSERT INTO `login` VALUES (8, 'maulana66@gmail.com', 123, 2);
INSERT INTO `login` VALUES (9, 'maulana123@gmail.com', 123, 2);
INSERT INTO `login` VALUES (10, 'hahahahah123@gmail.com', 123, 2);
INSERT INTO `login` VALUES (11, 'hahahahah123@gmail.com', 123, 2);
INSERT INTO `login` VALUES (12, 'hahahahah123@gmail.com', 123, 2);
INSERT INTO `login` VALUES (13, 'hahahahah123@gmail.com', 123, 2);
INSERT INTO `login` VALUES (14, 'hahahahah123@gmail.com', 123, 2);

-- ----------------------------
-- Table structure for rekam_medis
-- ----------------------------
DROP TABLE IF EXISTS `rekam_medis`;
CREATE TABLE `rekam_medis`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_dokter` int NOT NULL,
  `layanan` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jam` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mata_kanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_kanan_pinhole` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_kiri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_kiri_pinhole` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
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
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rekam_medis
-- ----------------------------
INSERT INTO `rekam_medis` VALUES (3, 7, 0, 'periksa mata', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `rekam_medis` VALUES (4, 1, 2, 'Pemeriksaan Mata', '2023-12-04', '01:53:29am', 'tidak_kacamata', 'tidak_kacamata', 'tidak_kacamata', 'tidak_kacamata', 'tidak', 'tidak', 'tidak', 'ok', 0, 'ok', 'ok', 'ok', 'ok', 'semua normal', 'Tidak ada ', '2023-12-09 02:15:54', NULL);
INSERT INTO `rekam_medis` VALUES (5, 11, 1, 'Pemeriksaan Mata', '2023-12-09', '23:35:14pm', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', NULL, NULL);

-- ----------------------------
-- Table structure for reservasi
-- ----------------------------
DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_terapi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `terapi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reservasi
-- ----------------------------
INSERT INTO `reservasi` VALUES (3, '8', '16-12-2023', 'mata', '2023-12-16 18:43:13', NULL);
INSERT INTO `reservasi` VALUES (4, '8', '30-12-2023', 'mata', '2023-12-16 18:43:40', NULL);

SET FOREIGN_KEY_CHECKS = 1;
