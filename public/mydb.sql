/*
 Navicat Premium Data Transfer

 Source Server         : DBLocal
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : mydb

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 29/05/2020 14:26:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for authors
-- ----------------------------
DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fullname` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL COMMENT '1-active, 0-deactive',
  `created_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of authors
-- ----------------------------
INSERT INTO `authors` VALUES (6, 'nhahung', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Nguyễn Hoàng Anh Hùng', 1, '2020-05-29 14:23:23');

SET FOREIGN_KEY_CHECKS = 1;
