/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50728
Source Host           : localhost:3306
Source Database       : bone

Target Server Type    : MYSQL
Target Server Version : 50728
File Encoding         : 65001

Date: 2023-07-02 20:04:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `record`
-- ----------------------------
DROP TABLE IF EXISTS `record`;
CREATE TABLE `record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `total_time` time DEFAULT NULL,
  `wrong` text COLLATE utf8_unicode_ci,
  `sport_id` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of record
-- ----------------------------
INSERT INTO `record` VALUES ('1', '2023-06-13', '16:56:58', '16:01:03', '00:00:02', '123', null);
INSERT INTO `record` VALUES ('2', '2023-06-14', '17:27:45', '17:27:49', '00:00:02', '0', null);
INSERT INTO `record` VALUES ('3', '2023-06-14', '17:30:22', '17:40:19', '00:00:14', '2', null);
INSERT INTO `record` VALUES ('4', '2023-06-15', '19:50:02', '19:49:58', '00:00:23', '2', null);
INSERT INTO `record` VALUES ('5', '2023-06-15', '19:51:12', '19:51:21', '00:00:04', '5', null);
INSERT INTO `record` VALUES ('9', '2023-06-16', null, '09:19:46', '00:00:03', null, null);
INSERT INTO `record` VALUES ('10', '2023-06-16', null, '09:19:46', '00:00:03', null, null);
INSERT INTO `record` VALUES ('11', '2023-06-16', null, '09:22:57', '00:00:01', null, null);
INSERT INTO `record` VALUES ('12', '2023-06-16', null, '09:24:05', '00:00:04', null, null);
INSERT INTO `record` VALUES ('13', '2023-06-16', null, '17:25:18', '00:00:02', null, null);
INSERT INTO `record` VALUES ('14', '2023-06-16', null, '17:28:38', '00:00:03', null, null);
INSERT INTO `record` VALUES ('15', '2023-06-16', null, '17:33:11', '00:00:01', null, null);
INSERT INTO `record` VALUES ('16', '2023-06-16', null, '17:35:30', '00:00:01', null, null);
INSERT INTO `record` VALUES ('17', '2023-06-16', null, '17:35:40', '00:00:02', null, null);
INSERT INTO `record` VALUES ('18', '2023-06-16', null, '17:38:02', '00:00:01', null, null);
INSERT INTO `record` VALUES ('19', '2023-06-16', null, '17:42:09', '00:00:01', null, null);
INSERT INTO `record` VALUES ('20', '2023-06-16', null, '17:43:59', '00:00:01', null, null);
INSERT INTO `record` VALUES ('21', '2023-06-16', null, '17:54:09', '00:00:04', '333', '1');
INSERT INTO `record` VALUES ('22', '2023-06-16', null, '17:56:03', '00:00:07', null, '2');
INSERT INTO `record` VALUES ('23', '2023-06-16', null, '18:36:15', '00:00:01', null, '1');
