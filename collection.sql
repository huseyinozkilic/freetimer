/*
 Navicat Premium Data Transfer

 Source Server         : winnmp-freetimer
 Source Server Type    : MariaDB
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : freetimer

 Target Server Type    : MariaDB
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 19/01/2022 13:00:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for collection
-- ----------------------------
DROP TABLE IF EXISTS `collection`;
CREATE TABLE `collection`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `width` double NOT NULL,
  `length` double NOT NULL,
  `measurement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `depthmeasurement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bags` int(5) NULL DEFAULT NULL,
  `price` decimal(10, 2) NULL DEFAULT NULL,
  `confirm` tinyint(1) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of collection
-- ----------------------------
INSERT INTO `collection` VALUES (1, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (2, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (3, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (4, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (5, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (6, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (7, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (8, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (9, 150, 105, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (10, 150, 120, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (11, 50, 150, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (12, 150, 200, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (13, 150, 103, 'meter', 'centimeter', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (14, 150, 200, 'meter', 'centimeter', 1050, 75600.00, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (15, 150, 200, 'meter', 'centimeter', 1050, 75600.00, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (16, 150, 200, 'meter', 'centimeter', 1050, 75600.00, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (17, 150, 50, 'meter', 'centimeter', 263, 18936.00, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (18, 50, 150, 'meter', 'centimeter', 263, 18936.00, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (19, 150, 50, 'meter', 'centimeter', 263, 18936.00, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (20, 50, 85, 'meter', 'centimeter', 149, 10728.00, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (21, 150, 50, 'meter', 'centimeter', 263, 18936.00, NULL, NULL, NULL, NULL);
INSERT INTO `collection` VALUES (22, 50, 75, 'meter', 'centimeter', 132, 9504.00, NULL, '2022-01-19 11:19:46', NULL, NULL);
INSERT INTO `collection` VALUES (23, 50, 70, 'meter', 'centimeter', 123, 8856.00, NULL, '2022-01-19 11:25:24', NULL, NULL);
INSERT INTO `collection` VALUES (24, 50, 60, 'meter', 'centimeter', 105, 7560.00, 1, '2022-01-19 11:25:59', '2022-01-19 11:26:06', NULL);
INSERT INTO `collection` VALUES (25, 50, 60, 'meter', 'centimeter', 105, 7560.00, 1, '2022-01-19 11:26:51', '2022-01-19 11:26:52', NULL);
INSERT INTO `collection` VALUES (26, 50, 150, 'meter', 'centimeter', 263, 18936.00, 1, '2022-01-19 11:27:17', '2022-01-19 11:27:19', NULL);
INSERT INTO `collection` VALUES (27, 50, 25, 'meter', 'centimeter', 44, 3168.00, NULL, '2022-01-19 12:07:26', NULL, NULL);
INSERT INTO `collection` VALUES (28, 50, 25, 'meter', 'centimeter', 44, 3168.00, NULL, '2022-01-19 12:08:19', NULL, NULL);
INSERT INTO `collection` VALUES (29, 150, 120, '', '', 630, 45360.00, NULL, '2022-01-19 12:44:53', NULL, NULL);
INSERT INTO `collection` VALUES (30, 150, 120, '', '', 630, 45360.00, NULL, '2022-01-19 12:46:01', NULL, NULL);
INSERT INTO `collection` VALUES (31, 150, 120, '', '', 630, 45360.00, NULL, '2022-01-19 12:46:24', NULL, NULL);
INSERT INTO `collection` VALUES (32, 150, 120, '', '', 630, 45360.00, NULL, '2022-01-19 12:46:33', NULL, NULL);
INSERT INTO `collection` VALUES (33, 150, 120, '', '', 630, 45360.00, NULL, '2022-01-19 12:46:45', NULL, NULL);
INSERT INTO `collection` VALUES (34, 150, 120, 'meter', '', 630, 45360.00, NULL, '2022-01-19 12:46:58', NULL, NULL);
INSERT INTO `collection` VALUES (35, 150, 120, 'meter', 'inch', 630, 45360.00, NULL, '2022-01-19 12:47:08', NULL, NULL);
INSERT INTO `collection` VALUES (36, 150, 120, 'meter', 'inch', 630, 45360.00, NULL, '2022-01-19 12:47:18', NULL, NULL);
INSERT INTO `collection` VALUES (37, 150, 120, 'meter', 'inch', 630, 45360.00, NULL, '2022-01-19 12:47:33', NULL, NULL);
INSERT INTO `collection` VALUES (38, 50, 10, 'meter', 'centimeter', 18, 1296.00, NULL, '2022-01-19 12:47:54', NULL, NULL);
INSERT INTO `collection` VALUES (39, 50, 10, 'meter', 'inch', 18, 1296.00, NULL, '2022-01-19 12:48:24', NULL, NULL);
INSERT INTO `collection` VALUES (40, 50, 20, 'meter', 'inch', 35, 2520.00, NULL, '2022-01-19 12:50:53', NULL, NULL);
INSERT INTO `collection` VALUES (41, 10, 20, 'meter', 'inch', 7, 504.00, NULL, '2022-01-19 12:51:19', NULL, NULL);
INSERT INTO `collection` VALUES (42, 10, 20, 'meter', 'centimeter', 7, 504.00, NULL, '2022-01-19 12:51:40', NULL, NULL);
INSERT INTO `collection` VALUES (43, 10, 20, 'meter', 'centimeter', 7, 504.00, NULL, '2022-01-19 12:52:12', NULL, NULL);
INSERT INTO `collection` VALUES (44, 150, 120, 'meter', 'inch', 630, 45360.00, NULL, '2022-01-19 12:53:56', NULL, NULL);
INSERT INTO `collection` VALUES (45, 10, 20, 'meter', 'inch', 7, 504.00, NULL, '2022-01-19 12:57:34', NULL, NULL);
INSERT INTO `collection` VALUES (46, 10, 20, 'meter', 'centimeter', 7, 504.00, 1, '2022-01-19 13:00:04', '2022-01-19 13:00:06', NULL);

SET FOREIGN_KEY_CHECKS = 1;
