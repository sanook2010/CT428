/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : ct428

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 21/05/2021 17:42:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chitietdathang
-- ----------------------------
DROP TABLE IF EXISTS `chitietdathang`;
CREATE TABLE `chitietdathang`  (
  `SoDonDH` int NOT NULL,
  `MSHH` int NOT NULL,
  `SoLuong` int NOT NULL,
  `GiaDatHang` int UNSIGNED NULL DEFAULT NULL,
  `GiamGia` int UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`SoDonDH`, `MSHH`) USING BTREE,
  INDEX `MSHH`(`MSHH`) USING BTREE,
  CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of chitietdathang
-- ----------------------------

-- ----------------------------
-- Table structure for dathang
-- ----------------------------
DROP TABLE IF EXISTS `dathang`;
CREATE TABLE `dathang`  (
  `SoDonDH` int NOT NULL AUTO_INCREMENT,
  `MSKH` int NOT NULL,
  `MSNV` int NOT NULL,
  `NgayDH` date NOT NULL,
  `NgayGH` date NULL DEFAULT NULL,
  PRIMARY KEY (`SoDonDH`) USING BTREE,
  INDEX `MSKH`(`MSKH`) USING BTREE,
  INDEX `MSNV`(`MSNV`) USING BTREE,
  CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dathang
-- ----------------------------

-- ----------------------------
-- Table structure for diachikh
-- ----------------------------
DROP TABLE IF EXISTS `diachikh`;
CREATE TABLE `diachikh`  (
  `MaDC` int NOT NULL AUTO_INCREMENT,
  `DiaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSKH` int NOT NULL,
  PRIMARY KEY (`MaDC`) USING BTREE,
  INDEX `MSKH`(`MSKH`) USING BTREE,
  CONSTRAINT `diachikh_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of diachikh
-- ----------------------------

-- ----------------------------
-- Table structure for hanghoa
-- ----------------------------
DROP TABLE IF EXISTS `hanghoa`;
CREATE TABLE `hanghoa`  (
  `MSHH` int NOT NULL,
  `TenHH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuyCach` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int UNSIGNED NOT NULL,
  `SoLuongHang` int NULL DEFAULT 0,
  `MaLoaiHang` int NOT NULL,
  `GhiChu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL,
  `HinhAnh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  PRIMARY KEY (`MSHH`) USING BTREE,
  INDEX `MaLoaiHang`(`MaLoaiHang`) USING BTREE,
  CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hanghoa
-- ----------------------------
INSERT INTO `hanghoa` VALUES (1, 'iPhone 12 Pro Max 256GB ', 'cái', 35190000, 100, 1, 'a', 'https://cdn.tgdd.vn/Products/Images/42/228743/iphone-12-pro-max-256gb-1-org.jpg');
INSERT INTO `hanghoa` VALUES (2, 'Samsung Galaxy Note 20', 'cái', 15990000, 100, 2, 'Điện thoại Samsung Galaxy S21 5G', 'https://cdn.tgdd.vn/Products/Images/42/218355/samsung-galaxy-note-20-vang-dong-1-org.jpg');
INSERT INTO `hanghoa` VALUES (3, 'Samsung Galaxy S21 5G ', 'cái', 20990000, 1000, 2, 'Điện thoại Samsung Galaxy S21 5G', 'https://cdn.tgdd.vn/Products/Images/42/218355/samsung-galaxy-note-20-vang-dong-1-org.jpg');
INSERT INTO `hanghoa` VALUES (4, 'Vivo Y20s', 'cái', 4690000, 1000, 7, 'a', 'https://cdn.tgdd.vn/Products/Images/42/228376/vivo-y20s-xanh-duong-1-org.jpg');
INSERT INTO `hanghoa` VALUES (5, 'Xiaomi Mi 11 Lite', 'cái', 1000000, 100, 3, 'a', 'https://cdn.tgdd.vn/Products/Images/42/233241/xiaomi-mi-11-lite-4g-xanh-duong-1-org.jpg');

-- ----------------------------
-- Table structure for khachhang
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang`  (
  `MSKH` int NOT NULL AUTO_INCREMENT,
  `HoTenKH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenCongTy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `SoDienThoai` int UNSIGNED NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MSKH`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of khachhang
-- ----------------------------

-- ----------------------------
-- Table structure for loaihanghoa
-- ----------------------------
DROP TABLE IF EXISTS `loaihanghoa`;
CREATE TABLE `loaihanghoa`  (
  `MaLoaiHang` int NOT NULL AUTO_INCREMENT,
  `TenLoaiHang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoaiHang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of loaihanghoa
-- ----------------------------
INSERT INTO `loaihanghoa` VALUES (1, 'Apple');
INSERT INTO `loaihanghoa` VALUES (2, 'Samsung');
INSERT INTO `loaihanghoa` VALUES (3, 'Xaiomi');
INSERT INTO `loaihanghoa` VALUES (7, 'Vivo');

-- ----------------------------
-- Table structure for nhanvien
-- ----------------------------
DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE `nhanvien`  (
  `MSNV` int NOT NULL AUTO_INCREMENT,
  `HoTenNV` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChucVu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MSNV`) USING BTREE,
  UNIQUE INDEX `SoDienThoai`(`SoDienThoai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nhanvien
-- ----------------------------
INSERT INTO `nhanvien` VALUES (1, 'Phùng Sơn Minh Khoa', 'Tổng Giám Đốc', '294/Z Phường An Khánh, Ninh Kiều, Cần THơ', '0839780790', '$2y$10$ot0wZ4CBByHNMDXPwZg9.OwGerf0yBSDcaF4QM3aI0ZdJZJNifMaa');

-- ----------------------------
-- Triggers structure for table chitietdathang
-- ----------------------------
DROP TRIGGER IF EXISTS `trg_chitietdathang`;
delimiter ;;
CREATE TRIGGER `trg_chitietdathang` AFTER INSERT ON `chitietdathang` FOR EACH ROW BEGIN 
	UPDATE `hanghoa` 
	SET `hanghoa`.`SoLuongHang` = `hanghoa`.`SoLuongHang`  - NEW.`SoLuong`
	WHERE `hanghoa`.`MSHH` = NEW.`MSHH`;
END
;;
delimiter ;

-- ----------------------------
-- Triggers structure for table dathang
-- ----------------------------
DROP TRIGGER IF EXISTS `trg_dathang`;
delimiter ;;
CREATE TRIGGER `trg_dathang` AFTER INSERT ON `dathang` FOR EACH ROW BEGIN 
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
