/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50728
Source Host           : localhost:3306
Source Database       : bone

Target Server Type    : MYSQL
Target Server Version : 50728
File Encoding         : 65001

Date: 2023-07-02 20:05:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `v_id` int(11) NOT NULL,
  `v_name` char(100) DEFAULT NULL,
  `v_src` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', '骨質疏鬆衛教影片(國語版)', 'https://www.youtube.com/embed/2QKEJpZ7jWA');
INSERT INTO `video` VALUES ('2', '我家也是健身房（故事篇)', 'https://www.youtube.com/embed/-lI1rHKfg54');
INSERT INTO `video` VALUES ('3', '熟齡族這樣做打造健康行動力', 'https://www.youtube.com/embed/HWxcvkMpFn4');
INSERT INTO `video` VALUES ('4', '滋骨補鈣，鈣計較聰明選擇', 'https://www.youtube.com/embed/8iw6IybXrcU');
