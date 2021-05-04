/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : ct428

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 04/05/2021 20:49:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chitietdathang
-- ----------------------------
DROP TABLE IF EXISTS `chitietdathang`;
CREATE TABLE `chitietdathang`  (
  `SoDonDH` int NOT NULL,
  `MSHH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int NOT NULL,
  `GiaDatHang` int UNSIGNED NULL DEFAULT NULL,
  `GiamGia` int UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`SoDonDH`, `MSHH`) USING BTREE,
  INDEX `MSHH`(`MSHH`) USING BTREE,
  CONSTRAINT `chitietdathang_ibfk_1` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `chitietdathang_ibfk_2` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of diachikh
-- ----------------------------

-- ----------------------------
-- Table structure for hanghoa
-- ----------------------------
DROP TABLE IF EXISTS `hanghoa`;
CREATE TABLE `hanghoa`  (
  `MSHH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `QuyCach` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int UNSIGNED NOT NULL,
  `SoLuongHang` int NULL DEFAULT 0,
  `MaLoaiHang` int NOT NULL,
  `GhiChi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NULL,
  PRIMARY KEY (`MSHH`) USING BTREE,
  INDEX `MaLoaiHang`(`MaLoaiHang`) USING BTREE,
  CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hanghoa
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of loaihanghoa
-- ----------------------------
INSERT INTO `loaihanghoa` VALUES (1, 'Apple');
INSERT INTO `loaihanghoa` VALUES (2, 'Samsung');
INSERT INTO `loaihanghoa` VALUES (3, 'Xaiomi');

-- ----------------------------
-- Table structure for nhanvien
-- ----------------------------
DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE `nhanvien`  (
  `MSNV` int NOT NULL AUTO_INCREMENT,
  `HoTenNV` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChucVu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoDienThoai` int NOT NULL,
  `MatKhau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`MSNV`) USING BTREE,
  UNIQUE INDEX `SoDienThoai`(`SoDienThoai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nhanvien
-- ----------------------------
INSERT INTO `nhanvien` VALUES (1, 'Phùng Sơn Minh Khoa', 'Tổng Giám Đốc', '294/Z Phường An Khánh, Ninh Kiều, Cần THơ', 839780790, '$2y$10$xInwxSZFfwHRu4vSl2FPwOPbb0cLtPKL4AaTZwQULhYq6uNvAciXi');

SET FOREIGN_KEY_CHECKS = 1;
