/*
Navicat MySQL Data Transfer

Source Server         : mypro
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-03-24 17:47:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `brand`
-- ----------------------------
DROP TABLE IF EXISTS `brand`;
CREATE TABLE `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of brand
-- ----------------------------
INSERT INTO `brand` VALUES ('1', 'Nike');
INSERT INTO `brand` VALUES ('2', 'Adidas');
INSERT INTO `brand` VALUES ('3', 'SONY');
INSERT INTO `brand` VALUES ('4', 'LG');
INSERT INTO `brand` VALUES ('5', 'Microsoft');
INSERT INTO `brand` VALUES ('6', 'Google');
INSERT INTO `brand` VALUES ('7', 'SAMSONG');
INSERT INTO `brand` VALUES ('8', 'UNIQLO');
INSERT INTO `brand` VALUES ('9', 'APPLE');
