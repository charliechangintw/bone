/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50728
Source Host           : localhost:3306
Source Database       : bone

Target Server Type    : MYSQL
Target Server Version : 50728
File Encoding         : 65001

Date: 2023-07-02 20:05:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sport`
-- ----------------------------
DROP TABLE IF EXISTS `sport`;
CREATE TABLE `sport` (
  `sport_id` int(11) NOT NULL AUTO_INCREMENT,
  `sport_name` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`sport_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sport
-- ----------------------------
INSERT INTO `sport` VALUES ('1', '原地抬膝踏步');
INSERT INTO `sport` VALUES ('2', '原地小跑步');
INSERT INTO `sport` VALUES ('3', '原地上下跳');
INSERT INTO `sport` VALUES ('4', '原地開合跳');
