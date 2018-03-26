/*
Navicat MySQL Data Transfer

Source Server         : mypro
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-03-24 17:48:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cates`
-- ----------------------------
DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cates
-- ----------------------------
INSERT INTO `cates` VALUES ('1', '电影', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `cates` VALUES ('2', '音乐', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `cates` VALUES ('3', '游戏', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `cates` VALUES ('4', 'COD', '3', '0,3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `cates` VALUES ('5', 'Rock', '2', '0,2', '0000-00-00 00:00:00', '2018-03-22 10:05:34');
INSERT INTO `cates` VALUES ('6', 'cod1', '4', '0,3,4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `cates` VALUES ('7', '古典', '2', '0,2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `cates` VALUES ('8', 'dark souls', '7', '0,2,7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `cates` VALUES ('9', 'ACT', '3', '0,3', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
