/*
 Navicat Premium Data Transfer

 Source Server         : 103.124.94.177
 Source Server Type    : MySQL
 Source Server Version : 100505
 Source Host           : 103.124.94.177:3306
 Source Schema         : zhs_khoathpdf1w

 Target Server Type    : MySQL
 Target Server Version : 100505
 File Encoding         : 65001

 Date: 08/06/2021 00:54:31
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
  `SoLuong` int NOT NULL DEFAULT 1,
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
INSERT INTO `chitietdathang` VALUES (1, 2, 15, 1500000, NULL);
INSERT INTO `chitietdathang` VALUES (3, 2, 1, 15990000, NULL);
INSERT INTO `chitietdathang` VALUES (3, 4, 1, 4690000, NULL);
INSERT INTO `chitietdathang` VALUES (4, 1, 1, 35190000, NULL);
INSERT INTO `chitietdathang` VALUES (5, 1, 2, 35190000, NULL);
INSERT INTO `chitietdathang` VALUES (6, 3, 1, 20990000, NULL);

-- ----------------------------
-- Table structure for dathang
-- ----------------------------
DROP TABLE IF EXISTS `dathang`;
CREATE TABLE `dathang`  (
  `SoDonDH` int NOT NULL AUTO_INCREMENT,
  `MSKH` int NOT NULL,
  `MSNV` int NULL DEFAULT NULL,
  `NgayDH` date NOT NULL DEFAULT current_timestamp,
  `NgayGH` date NULL DEFAULT NULL,
  PRIMARY KEY (`SoDonDH`) USING BTREE,
  INDEX `MSKH`(`MSKH`) USING BTREE,
  INDEX `MSNV`(`MSNV`) USING BTREE,
  CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of dathang
-- ----------------------------
INSERT INTO `dathang` VALUES (1, 13, 1, '2021-06-04', '2021-06-05');
INSERT INTO `dathang` VALUES (2, 13, NULL, '2021-06-04', NULL);
INSERT INTO `dathang` VALUES (3, 13, NULL, '2021-06-04', NULL);
INSERT INTO `dathang` VALUES (4, 14, NULL, '2021-06-04', '2021-06-07');
INSERT INTO `dathang` VALUES (5, 15, NULL, '2021-06-04', '2021-06-07');
INSERT INTO `dathang` VALUES (6, 15, NULL, '2021-06-04', '2021-06-07');

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
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of diachikh
-- ----------------------------
INSERT INTO `diachikh` VALUES (8, 'Bạc Liêu\r\n', 13);
INSERT INTO `diachikh` VALUES (9, 'Bạc Liêu\r\n', 13);
INSERT INTO `diachikh` VALUES (10, 'Bạc Liêu\r\n', 13);
INSERT INTO `diachikh` VALUES (11, 'Bạc Liêu\r\n', 13);
INSERT INTO `diachikh` VALUES (12, 'Bạc Liêu\r\n', 13);
INSERT INTO `diachikh` VALUES (13, 'Bạc Liêu', 13);
INSERT INTO `diachikh` VALUES (14, 'Bạc Liêu', 13);
INSERT INTO `diachikh` VALUES (15, 'ĐHCT', 14);
INSERT INTO `diachikh` VALUES (16, 'Hcm', 15);
INSERT INTO `diachikh` VALUES (17, 'Hcm', 15);

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
INSERT INTO `hanghoa` VALUES (1, 'iPhone 12 Pro Max 256GB ', 'cái', 35190000, 97, 1, 'iPhone 12 Pro Max 256GB ', 'https://cdn.tgdd.vn/Products/Images/42/228743/iphone-12-pro-max-256gb-1-org.jpg');
INSERT INTO `hanghoa` VALUES (2, 'Samsung Galaxy Note 20', 'cái', 15990000, 84, 2, 'Samsung Galaxy Note 20', 'https://cdn.tgdd.vn/Products/Images/42/218355/samsung-galaxy-note-20-vang-dong-1-org.jpg');
INSERT INTO `hanghoa` VALUES (3, 'Samsung Galaxy S21 5G ', 'cái', 20990000, 999, 2, 'Samsung Galaxy S21 5G ', 'https://cdn.tgdd.vn/Products/Images/42/218355/samsung-galaxy-note-20-vang-dong-1-org.jpg');
INSERT INTO `hanghoa` VALUES (4, 'Vivo Y20s', 'cái', 4690000, 999, 7, 'Vivo Y20s', 'https://cdn.tgdd.vn/Products/Images/42/228376/vivo-y20s-xanh-duong-1-org.jpg');
INSERT INTO `hanghoa` VALUES (5, 'Xiaomi Mi 11 Lite', 'cái', 10000000, 100, 3, 'Xiaomi Mi 11 Lite', 'https://cdn.tgdd.vn/Products/Images/42/233241/xiaomi-mi-11-lite-4g-xanh-duong-1-org.jpg');

-- ----------------------------
-- Table structure for khachhang
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang`  (
  `MSKH` int NOT NULL AUTO_INCREMENT,
  `HoTenKH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenCongTy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `SoDienThoai` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`MSKH`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
INSERT INTO `khachhang` VALUES (13, 'Phùng Sơn Minh Khoa', '', '0839780790', '');
INSERT INTO `khachhang` VALUES (14, 'linh', 'No', '0839780791', 'chaukhanhlinh8@gmail.com');
INSERT INTO `khachhang` VALUES (15, 'Khương Nguyễn Trúc Nhân', '', '0796871931', 'minhhanhkhuong@gmail.com');

-- ----------------------------
-- Table structure for loaihanghoa
-- ----------------------------
DROP TABLE IF EXISTS `loaihanghoa`;
CREATE TABLE `loaihanghoa`  (
  `MaLoaiHang` int NOT NULL AUTO_INCREMENT,
  `TenLoaiHang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoaiHang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of loaihanghoa
-- ----------------------------
INSERT INTO `loaihanghoa` VALUES (1, 'Apple');
INSERT INTO `loaihanghoa` VALUES (2, 'Samsung');
INSERT INTO `loaihanghoa` VALUES (3, 'Xaiomi');
INSERT INTO `loaihanghoa` VALUES (7, 'Vivo');
INSERT INTO `loaihanghoa` VALUES (8, 'Oppo');
INSERT INTO `loaihanghoa` VALUES (9, 'Realme');
INSERT INTO `loaihanghoa` VALUES (10, 'One plus');
INSERT INTO `loaihanghoa` VALUES (11, 'Nokia');

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
INSERT INTO `nhanvien` VALUES (1, 'Phùng Sơn Minh Khoa', 'Tổng Giám Đốc', '294/Z Phường An Khánh, Ninh Kiều, Cần THơ', '0839780790', '$2y$10$nuf440E/nBNjh7r5dPEIq.3UXkfHhEhpW.K7LReAW9Kqe8U65aSji');

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

SET FOREIGN_KEY_CHECKS = 1;
