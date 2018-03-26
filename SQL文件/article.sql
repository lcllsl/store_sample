/*
Navicat MySQL Data Transfer

Source Server         : mypro
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-03-24 17:48:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '回复量',
  `insert_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '爱消除V字形从v', '的规划计划是梵蒂冈', '<p>热体育是梵蒂冈</p>', 'bc8dd8831f0ffe9fe149871a1e6a45ad.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('2', '爱消除V字形从v', '的规划计划是梵蒂冈', '<p>热体育是梵蒂冈</p>', '021da49f7f517994e871312953a00dd2.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('3', '我让他换地方公共', '你是否该SDF', '<p>按地方噶地方个</p>', '3432b8799c24914d84b65d3189eb0a42.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('4', '我让他换地方公共', '你是否该SDF', '<p>按地方噶地方个</p>', '535479f7f5e92b19a99e6a5fe8c31db4.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('5', '国家的关系 ', '等各环节', '<p>法国恢复供货</p>', '2c7e8ee3bf5aeb0080f2781b1b25bb1f.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('6', '国家的关系 ', '等各环节', '<p>法国恢复供货</p>', '11111.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('7', '312321', '321312', '<p>312321</p>', '11111.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('8', '42562', '26262', '<p>24356256</p>', '11111.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('9', '42562', '26262', '<p>24356256</p>', '11111.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('10', '42562', '26262', '<p>24356256</p>', 'c0b6dabe6d166c80e9b2cf38796ce161.jpg', '1', '1', null);
INSERT INTO `article` VALUES ('11', 'hsgfwtgsdfgdfag', '发个阿飞大哥', '<p>是大法官是大幅改善的风格</p>', 'a57799acd876b1455996d10dc4c5a227.jpg', '1', '1802', null);
