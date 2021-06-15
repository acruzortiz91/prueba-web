/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : pruebaweb

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 15/06/2021 14:40:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user`  (
  `t_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_user_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `t_user_pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `t_user_active` int(1) NULL DEFAULT 1,
  `t_user_creation` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`t_user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES (1, 'ara_cruz_ortiz@outlook.com', 'CgbAxK5c', 1, '2021-06-15 13:13:47');
INSERT INTO `t_user` VALUES (2, '', '', 1, NULL);
INSERT INTO `t_user` VALUES (3, 'ara@mail.com-mx', '12345', 1, NULL);
INSERT INTO `t_user` VALUES (4, 'ara@mail.com-mx', '12', 1, NULL);
INSERT INTO `t_user` VALUES (5, 'arita@mail.com', '123', 1, NULL);
INSERT INTO `t_user` VALUES (6, 'ivan@mail.com', '147', 1, '2021-06-15 09:20:18');

SET FOREIGN_KEY_CHECKS = 1;
