/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : db_dental

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 05/05/2024 22:35:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_dental_history
-- ----------------------------
DROP TABLE IF EXISTS `tbl_dental_history`;
CREATE TABLE `tbl_dental_history`  (
  `dental_history_id` int NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_dental_visit` date NOT NULL,
  PRIMARY KEY (`dental_history_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_dental_history
-- ----------------------------
INSERT INTO `tbl_dental_history` VALUES (2500, 'e', 'e', '0004-04-05');

-- ----------------------------
-- Table structure for tbl_patient_info
-- ----------------------------
DROP TABLE IF EXISTS `tbl_patient_info`;
CREATE TABLE `tbl_patient_info`  (
  `patient_id` int NOT NULL AUTO_INCREMENT,
  `last_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `middle_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `birthdate` date NOT NULL,
  `age` int NOT NULL,
  `civil_status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sex` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `religion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nationality` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nickname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `occupation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `office_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dental_insurance` tinyint(1) NOT NULL,
  `effective_date` date NOT NULL,
  `fax_no` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cellphone_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `userlevel` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dental_history_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`patient_id`) USING BTREE,
  INDEX `dental_history_id`(`dental_history_id` ASC) USING BTREE,
  CONSTRAINT `tbl_patient_info_ibfk_1` FOREIGN KEY (`dental_history_id`) REFERENCES `tbl_dental_history` (`dental_history_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2519 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_patient_info
-- ----------------------------
INSERT INTO `tbl_patient_info` VALUES (2500, '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', 2500);

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `userlevel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2404 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------
INSERT INTO `tbl_users` VALUES (2401, 'admin', 'admin');
INSERT INTO `tbl_users` VALUES (2402, 'staff', 'staff');
INSERT INTO `tbl_users` VALUES (2403, 'test', 'patient');

SET FOREIGN_KEY_CHECKS = 1;
