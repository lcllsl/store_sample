/*
Navicat MySQL Data Transfer

Source Server         : mypro
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2018-03-24 17:48:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `gname` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名',
  `gimg` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品图',
  `gstock` int(11) NOT NULL COMMENT '商品库存',
  `issale` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否打折',
  `iskill` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否删除',
  `isbest` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否精品',
  `ishot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否热销',
  `isnew` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否新品',
  `cateid` int(11) NOT NULL COMMENT '所属类别',
  `brandid` int(11) NOT NULL COMMENT '品牌id',
  `gdesc` text COLLATE utf8_unicode_ci NOT NULL COMMENT '商品描述',
  `visitnum` int(11) NOT NULL DEFAULT '0' COMMENT '访问量',
  `salenum` int(11) NOT NULL DEFAULT '0' COMMENT '销售量',
  `appraisenum` int(11) NOT NULL DEFAULT '0' COMMENT '评价数',
  `gcolor` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '颜色',
  `gsize` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '尺码',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('1', 'LyrXDJVKFR', '92.jpg', '930', '1', '0', '0', '1', '0', '2', '5', 'zmiSZzJKja6RsNoc6IVWAy2ZmaojwFUBLnkMyngVtK1LPxscLR', '243', '382', '208', '黄', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('2', 'lMW6pSaWcA', '2.jpg', '521', '1', '0', '0', '1', '1', '5', '5', '3haOLZYOGbReN2kX0xVfzrpaGiUXSfIvMyymxrzMIZLPpCJW31', '977', '47', '127', '红', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:31:35');
INSERT INTO `goods` VALUES ('3', 'D9JEpQ7x6l', '88.jpg', '762', '1', '0', '0', '0', '0', '2', '8', '2gC5EzMTGYp9WXqXrkqPwZE3gUK9BHYrjJbevl4L7imRV2NLln', '782', '787', '333', '橙', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('4', 'NSqWW8jeMC', '13.jpg', '500', '1', '0', '1', '1', '1', '4', '8', 'NZJVN79Rp2dGLhkNzKA7HEdVB988xnt7WbUiiY98QJ3zuiAo0c', '632', '620', '956', '黑', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('5', 'BqfNyq9fRJ', '8.jpg', '928', '1', '0', '1', '1', '1', '7', '5', 'Ck3IP5whDUdQWVNCXDFpaaunNIvPwLlxERVKGCkrb5hpTuL4K4', '842', '34', '215', '绿', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('6', 'ze1NuvUlY5', '5.jpg', '829', '1', '0', '1', '0', '1', '8', '5', 'TgdmyEbrVgHpTyp7M1zpRUPA05eVXKa9TRdsuwX4DRZ5bfVnDY', '323', '237', '680', '青', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:29:25');
INSERT INTO `goods` VALUES ('7', 'iH5Pc6ZSxF', '55.jpg', '833', '0', '0', '1', '0', '0', '2', '3', 'VlN7GtVEqUwi0iBXHRHGCgjzGnRQFmKUSxxGrj4BPdvJXQ6vTs', '830', '404', '509', '蓝', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:31:16');
INSERT INTO `goods` VALUES ('8', 'NJmxDrnQXT', '56.jpg', '663', '1', '1', '0', '1', '0', '7', '2', 'B19GTkHdAul2Dq6VSNUubuKVpIez0qiJ1vbnC9QyVVdWGYYZp1', '209', '931', '707', '橙', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('9', 'q8r1wjGIQA', '80.jpg', '385', '0', '1', '0', '0', '0', '1', '7', 'MZlLw0ZO57CZHRPp39HRNqoxctCJQd2lOgWuMA6htNl41Y68qp', '652', '679', '370', '紫', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('10', 'Lg033i8mZ3', '95.jpg', '660', '1', '0', '1', '0', '0', '5', '2', 'HjESmpJ46bgA3lztQVt72fpiqeCXzrft5y5EyaKVKxrRXbje80', '944', '231', '943', '青', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('11', '2It4dBSzo6', '89.jpg', '991', '1', '1', '0', '0', '0', '5', '1', '9FAdPsABCdleFVn69CGuwk81GjV8e19QhUNcfwjQT8l53bZNkb', '714', '139', '457', '绿', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('12', 'uRprJuQSIO', '99.jpg', '976', '0', '0', '0', '0', '1', '1', '2', 'M9yWjrnzsnhFCjj3O2wyHHAI0h2l5A8ekk1kefKiwoS3a2qnna', '685', '171', '794', '红', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('13', 'SFMJGGm0Mg', '33.jpg', '555', '1', '0', '1', '1', '0', '4', '5', 'K1XWhnJnFZtGdw1JyDXiaIlprH4ns8KtYkFEJj7nxJhQpwz241', '923', '566', '925', '青', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('14', 'FXOfGn84Ds', '96.jpg', '264', '1', '1', '0', '1', '0', '7', '6', 'w3lV9j8s2w6jTdB4dR10KNRfqL0pTXM9k4lc42yUzqFcSO8Qd5', '87', '280', '166', '黄', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('15', 'sF0hrBm3Xp', '16.jpg', '484', '1', '1', '0', '1', '1', '6', '4', 'fBOWDksIBt3b19YaiPKnhTTXh3DSEzSVLxwRpyOHFYXo07fCjQ', '684', '241', '429', '蓝', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('16', 'GTqUK34C0X', '66.jpg', '685', '1', '0', '1', '0', '0', '5', '2', 'ZsWHscAfG63wr74wBWxuzyfueI3wlRFH1bcLEWFQUV7MZviVhT', '309', '591', '467', '紫', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('17', 'cd89taQbZc', '91.jpg', '685', '0', '0', '0', '1', '0', '9', '2', 'DerCFvxxmCbo5IFXSipOc6NlDfkLcz2njvpeZhv54Z1V9aTSWE', '905', '946', '127', '黑', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('18', 'CZoBBxPjhv', '35.jpg', '893', '1', '1', '1', '1', '0', '8', '2', 'EJoQuD6jl3zOS4VcKxaQntOwt3nHDnE6jvbScK1mLYfWbuYel1', '4', '635', '601', '橙', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('19', '8TbMrgmvwb', '61.jpg', '563', '1', '0', '0', '1', '0', '5', '6', 'Dmg2TPNBL9VbhSo9JT5dvEXNceo4I7JXh3BnVSPXrUBvVTqy3O', '990', '960', '675', '紫', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('20', 'nudAp8xYFk', '82.jpg', '43', '0', '1', '0', '1', '1', '5', '4', 'JNpujBAsGE5aq6qPngz868p0kaocj5YRMspC5BTAdSLZJVIYpr', '332', '441', '976', '蓝', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('21', '8AmCMyaeTy', '79.jpg', '25', '1', '0', '0', '0', '1', '1', '7', '72pUfd0GYI6t96eaZWftipPYZfIFUTrMwnSKL6b778HruT8DqE', '847', '66', '227', '黄', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('22', 'NRCciLKRrU', '35.jpg', '795', '0', '1', '1', '0', '1', '1', '2', '4mER3AVVir3XJ3aYuXGRmfg8AaK3FTQgkrWPiIl1pcTcHXQGau', '946', '543', '497', '橙', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('23', 'aVGgHOJ2MF', '49.jpg', '479', '1', '0', '1', '1', '1', '6', '3', 'bmDD0i4VJiwTa5CNLNxaZWIHK0VhdIdpJoN1Yhxkh5nLHBZf3o', '882', '546', '443', '红', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('24', 'k0Hc1Rcrhs', '72.jpg', '301', '1', '1', '1', '0', '1', '3', '2', 'fDaB4nvaNu6c8JWzuzzFuJKc3pQzyGxmqIGfc06aHC74ntvCLf', '2', '971', '571', '黑', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('25', 'DQFXh6QGLb', '23.jpg', '828', '1', '0', '0', '0', '0', '9', '6', 'JI24ztPfjK2YnjaC0263m1boHGd7XEQJGbvx5gmSgXYYZCjMI2', '0', '180', '477', '黑', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('26', 'i7gaENCIF4', '21.jpg', '219', '0', '1', '0', '1', '0', '6', '6', 'OtIwsA2QqImacfA3wrsp19jOJuAHHk0FxXkzPwqfJDXkBd2qfF', '159', '256', '103', '蓝', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('27', 'ToHe4u2SCV', '5.jpg', '480', '0', '0', '1', '1', '0', '2', '2', 'qHZlfuQ332DTrgfgmjBFlm2RqfCYP67WoR1HIyovSTdtLEzYc9', '610', '249', '986', '青', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('28', 'wGfxGeGgMM', '61.jpg', '707', '0', '1', '1', '0', '0', '9', '6', 'TrLqZdVFy4UX7jXG9lE6bRUNXE1BvWbhVFQ1fp5WkxNxUaWLa5', '573', '430', '502', '蓝', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('29', 'gROSx2DhCw', '48.jpg', '341', '0', '0', '1', '1', '1', '8', '2', 'WwxOo3LA2wD5kUaEkQ4RjC9MODmaWV9EgbKpX3fKcW4CAyeatY', '615', '536', '124', '紫', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('30', 'dhiXD3QAKH', '20.jpg', '418', '0', '0', '1', '0', '1', '7', '2', '4YgZ3zX7HemuMM9nGRhqG3v9EcxHK4AbMt4mMlfBQx5CEMxlyK', '898', '23', '671', '黑', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('31', '5YvLuT3dQj', '54.jpg', '817', '1', '0', '1', '1', '0', '3', '7', 'cajju5uALak7P75MTFR7OOqXi4ZRcq2Vy1kJ5h7FwKcA0f4PbR', '423', '320', '551', '青', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('32', '0tLNkgy1mU', '75.jpg', '510', '0', '0', '0', '0', '1', '7', '1', 'S2O97dAI0VboBTTYMPXzQeAEJnnKxWxLQn5d2D8WXW2ADBOaMQ', '290', '68', '18', '绿', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('33', 'o6thLLqt8z', '78.jpg', '815', '0', '0', '1', '1', '0', '1', '5', 'nJPbohVzcmUslXFBAeFqnP60M6f81YMXwElCSNTeK3RxxlHCU1', '941', '383', '421', '青', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('34', 'iNoRg3p3eU', '55.jpg', '640', '1', '1', '1', '0', '1', '6', '6', 'qts6nOEETqUMFyEdyDc6w6GxfQ69FxfhxUDXYtiF6IaUp5JSPY', '408', '96', '450', '橙', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('35', 'BZPhKXUio3', '21.jpg', '740', '1', '0', '0', '0', '0', '3', '4', 'Oe7LWutxZ1YALK3JBYzKm9VR5BvPOV1wc39UI0gnS7S9yN5ChE', '573', '7', '390', '绿', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('36', 'oULKshj4bC', '38.jpg', '963', '0', '1', '1', '0', '1', '1', '7', 'pDBDU6JnwIquZCPL5M5bJZ8AOJCGbt1Df4dbFrku632l6eR1ac', '407', '137', '371', '黄', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('37', '5KphDX6CEf', '38.jpg', '500', '0', '0', '0', '1', '1', '7', '8', '0dUocHSjKamTxv9I5qd2AtBBTnyTQcLPtWByC8h5P28BodTWRE', '227', '974', '616', '红', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('38', 'mG0eEjgnLv', '52.jpg', '135', '0', '0', '0', '1', '1', '6', '5', 'K7dsvGZGTFGUnD9S5E4urtAFLGLXVu3O3BBlIQ958SlIuBOCht', '943', '724', '689', '蓝', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('39', 'nhQl9nz4MQ', '31.jpg', '499', '1', '1', '1', '1', '1', '5', '1', '40qA5Y39O2uD499lsal8jzNC4AzO7HKIeDhhlCwlXl86ytM9Fd', '308', '563', '753', '黄', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('40', 'tFZLFSGMPn', '75.jpg', '313', '1', '1', '1', '0', '1', '2', '8', '2bfQLtiGOocTIlY3As9ElA3gxuDgMKRlcBJU1i2A8Z8mNo4UiB', '171', '886', '810', '绿', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('41', 'mP1ZUIfFNU', '54.jpg', '645', '0', '1', '0', '0', '0', '2', '5', '9fcQQNOGFLs0NP1M8wyeUYdhDiG5oUQO89pIdO9SVxuRbjX2L4', '724', '556', '959', '黑', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('42', '54LikKUgjW', '36.jpg', '154', '1', '0', '0', '0', '0', '1', '2', 'FRZS5lKDkaAgo79anXOYNOiVT4BeXvXs619jn87mjD7SKKetmb', '751', '155', '640', '青', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('43', 'kjcHNIdWtY', '9.jpg', '344', '0', '1', '0', '1', '1', '1', '3', 'a3Juggg0WHrgmxVW9P0qYjJgZSPwLD3ClmxrQscAIFH9nTB0GL', '880', '235', '889', '绿', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('44', 'VLsljExElM', '11.jpg', '813', '1', '0', '0', '1', '1', '2', '8', 'UqgyujJAuNhFyyhM3pqvzI0xoQUsh8uiABjdZeRIFZ4LbAO0bu', '835', '564', '585', '黄', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('45', 'pt5e3Zx9SD', '50.jpg', '502', '0', '1', '0', '0', '1', '7', '7', 'aoEITQAg9V5eGrABgl8F2CamYdt6jgMa4qK7ThXYu1yMpeKFnv', '683', '380', '700', '红', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('46', 'aSeT13kmku', '31.jpg', '947', '0', '0', '1', '0', '0', '9', '5', 'OujCvRBPPTVnZ7fqdPDAaJKGGZ5lX1YywljAWhDvQ31jqjjNo3', '81', '642', '551', '黄', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('47', 'VctjSa0mUB', '80.jpg', '525', '0', '1', '1', '1', '0', '3', '1', 'chFJGbmzwbY3BYhBx6jeszOy01FpWfAwAwYRQHiAG3TyqUKWz6', '538', '274', '48', '橙', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('48', 'vkp7yTPaWK', '72.jpg', '711', '1', '1', '0', '0', '1', '4', '7', 'UsuwGZlFjMSuw6YTBvKptS35KrwhSYviVyMB0QlgLq18JOgI26', '647', '421', '946', '黑', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('49', 'NxcLYX62qu', '52.jpg', '319', '1', '1', '1', '1', '0', '5', '7', 'FRX7GM0L4Kz5v2HqCYdm8TeWaLOL2s1UNNgpN9rwPVeFS1P3w4', '351', '697', '89', '黑', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('50', 'gV2jdkE7gW', '63.jpg', '762', '1', '0', '1', '0', '0', '7', '1', 'SpyziFJDtpe4iScDW5Cq31LHKqcJ0ESuyZEi5ncOD56q2whDXF', '186', '433', '674', '红', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('51', 'BILq9qTBwp', '69.jpg', '292', '0', '1', '0', '0', '1', '4', '8', '3p4DdK72H9u7OKDdzfKt4l89lnxaR1QHk6r6gmRLX17YnzFHwJ', '531', '931', '481', '紫', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('52', 'wJTHR5OhNe', '82.jpg', '257', '1', '0', '1', '1', '1', '1', '1', 'C35kTvhIzNyQj5u4dloIESp7XvBm26E337uyruXMHIaix1YNQ3', '857', '709', '141', '紫', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('53', 's0yQWosuOJ', '84.jpg', '348', '0', '1', '1', '0', '0', '8', '8', 'j37Yu4OcuiYGuN3MkRcLaAUknbpwYVwRaOPDzozXT5c4W9nYLc', '982', '756', '378', '蓝', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('54', 'GYL6niC8c2', '57.jpg', '851', '1', '1', '1', '1', '0', '6', '8', 'xRbF0Nu55ZaiUGZ3FwU2WTZ7T0TMlloZqFNCdXHc12Uf0Of8ok', '315', '779', '256', '黑', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('55', 'F0ORYsIDM7', '1.jpg', '895', '0', '1', '0', '0', '0', '7', '7', 'aVINvc6n2F9eYFHq2IKuH0qnOOcS2XP1SccE0dMYBtoPNycmFH', '110', '454', '437', '绿', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('56', 'jBvTiavTkq', '66.jpg', '702', '0', '0', '0', '1', '0', '4', '6', 'uRcG0hSdNetAbI2ap6MJTf3LCtVftuXkKIXnusDibvePr9HKHL', '716', '676', '424', '黑', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('57', 'pdWmUgTGTc', '72.jpg', '838', '1', '1', '0', '0', '1', '8', '3', 'Mgy6kvge1WbMPjH0rPINMQYQXhbiO2LRAbwcBjlaOrmChuMglh', '823', '807', '815', '蓝', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('58', 'T1e1tyfmnw', '37.jpg', '464', '1', '0', '0', '0', '0', '8', '4', 'lCyFHP7VPYniJsCuqttDPhuDAFzlbRDHXAHIJ0HeotMU29gPpj', '717', '930', '551', '绿', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('59', 'yrDl3GT7HO', '1.jpg', '583', '1', '0', '1', '1', '1', '4', '2', 'qabihYGw1UErHpk0CVwlRiIe2hSJQAAmcXV4N65mG6Du2RkP2z', '526', '95', '167', '黄', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('60', 'kzXCszqCPN', '49.jpg', '294', '0', '0', '0', '1', '0', '8', '1', '2Sha9iQnArPRYNovxRmzrg8B30kILfirst6vOtf08GxIu5DMz6', '473', '573', '42', '蓝', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('61', 'ektejPlZig', '40.jpg', '38', '0', '1', '0', '0', '1', '9', '2', 'gucUieIgJTSmDNtYJoB0FSNLhgNjuIu4BUUOH43aL7080SEbjT', '124', '100', '650', '橙', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('62', 'X1QRlOtxAu', '29.jpg', '850', '0', '1', '0', '0', '0', '6', '7', 'XB7WUZCqYkJNMOHvESZDibB5zjyj6O6Nq6tSVkvGs6civEb96h', '642', '135', '806', '青', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('63', 'tCYfFNqO35', '94.jpg', '608', '1', '0', '1', '1', '1', '7', '3', 'wkPnIy7y7qnZUEwzsWtNvj5aL2FfC2sen1hFyAs47C5I8xNX1Y', '26', '103', '921', '紫', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('64', 'e7io4ENJRU', '57.jpg', '286', '1', '1', '0', '1', '1', '4', '4', 'YYZATTUPkuV1P7BWHF19kwvpbt5FaVfb9Mtq2PlaUhY6qA3JG6', '378', '649', '247', '黄', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('65', '4LlCHAgFl8', '14.jpg', '199', '1', '1', '0', '1', '1', '3', '8', 'yXyKE7kpwR1mahtGjYGVOoymTTYp41K86j0PhAUxhgVns6ccxp', '137', '886', '133', '橙', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('66', 'Dv7lJzBUrp', '58.jpg', '259', '0', '1', '1', '0', '1', '3', '3', 'PADrqKFPidgDwUvHG6JKhiENDrKgyamTv9salBLa40qaoEVhMG', '340', '645', '272', '紫', 'XXXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('67', 'XcrnT5gNsT', '4.jpg', '218', '1', '0', '0', '1', '0', '9', '3', 'no4y8BHHA5OnRXHsAe15MCRyqx2QdPsj6tFobIneH9mTgX5AYE', '864', '729', '947', '红', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('68', 'dm3Xbu4Duv', '13.jpg', '926', '0', '1', '1', '1', '1', '4', '1', 'yUyPWfJgyWBBbgJ5PllBPsYlTRlKWqY7sldGDQUH1tXf4A408C', '682', '155', '287', '红', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('69', 'BoTAaCeGhS', '18.jpg', '572', '1', '1', '0', '1', '0', '2', '7', '3zu3f7JnBYybjctkA8bjfXykF3Mzav5x96BvBIZtzXqUPNRy3V', '111', '413', '516', '黄', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('70', 'RojOKlXQGF', '49.jpg', '942', '0', '1', '0', '0', '1', '1', '2', 'T3WtjvwQgkcrfIX7dSiSA9MHwN01nuFWk2oKAnFpTgq8UdKcBV', '61', '710', '199', '橙', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('71', 'z5nIty5gcK', '58.jpg', '665', '1', '0', '1', '0', '0', '3', '4', 'B0oyfOxFR2XFMnOyIRWpi98gNMIRBFZl2cgwJacgF90sMv29dU', '287', '221', '497', '绿', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('72', 'iYZVI3dhrJ', '44.jpg', '464', '0', '1', '0', '0', '1', '1', '2', 'DN8OevgFnF0fkvD6gP9v1PlAoA6hCc0usRfRVnyBzxGIvaHxEs', '635', '341', '413', '黄', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('73', 'HSihTVJYeE', '78.jpg', '405', '0', '1', '1', '0', '0', '8', '7', 'gV51R2osGSdExoG0mih8XPW1S9C54ERhqGKG9KumBSv9mPa98k', '296', '933', '46', '绿', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('74', 'QvzTNbwhNe', '26.jpg', '148', '1', '1', '0', '1', '1', '1', '5', 'Aiqq74PMsF4vxTPDPe5nV1RAVlSOodKm6gdU0lfiUVuoU9UC1U', '57', '579', '837', '红', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('75', 'OS7qmMatMm', '80.jpg', '197', '0', '0', '1', '1', '1', '1', '1', '1ssttRV4OwtAuyuc6RCeVHbUb6DQrx3BhYHsKRGclxt4iDFaPD', '546', '831', '821', '红', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('76', 'oZUwa16BqX', '74.jpg', '150', '0', '1', '0', '0', '0', '8', '1', 'asbzlA2rP1d6f94ih8ujMCs1XUcVm5nlezy4zklWbgg9JNRODK', '486', '456', '876', '红', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('77', 'DCStnx73xM', '18.jpg', '950', '1', '1', '0', '0', '0', '6', '5', 'cjk3Paoufbghi4SkOd92PpcA5Pv3CnqNK6FlKdumyr3NVZXVNh', '943', '695', '976', '红', 'S', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('78', '4xgh5YZrzh', '15.jpg', '128', '0', '1', '0', '1', '0', '7', '8', '8m2ln6N236uGtxRjdDRo9mMlVZIP6UJXVMUu6NxpH5M15JlJYz', '576', '503', '436', '紫', 'XL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('79', 'b8YfdgQxb4', '94.jpg', '66', '0', '1', '1', '0', '0', '5', '3', 'e7WaEQBvZf92t02ESbDmYByWnX2cwxEbef6mJPmsSvqQLNCpLz', '891', '808', '167', '橙', 'M', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('80', 'WFU1nNXTUA', '28.jpg', '236', '0', '1', '0', '1', '1', '7', '8', 'R3IxNrO3ankXLibIGRMXwdZFTg3b5Niq1tGZJ5f7oKVif5xEDF', '485', '752', '924', '青', 'L', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('81', 'HGrgj7J71p', '63.jpg', '454', '0', '0', '0', '1', '0', '5', '8', '6gzu2v8GTAoaLoQywEMRSSrlAqmZk1yqDzWvFJMKPdzX9kbIkg', '299', '949', '553', '绿', 'XXL', '2018-03-24 15:13:52', '2018-03-24 15:13:52');
INSERT INTO `goods` VALUES ('82', 'OQmMEt9kdM', '41.jpg', '131', '1', '1', '1', '1', '1', '2', '4', 'bn5TWepjjFwZop9dKt8FKYpjJGfU8G3JRsDgQJXqbI7iy1Z7Vz', '869', '732', '245', '绿', 'XXL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('83', 'LrTBZGEfXJ', '27.jpg', '520', '0', '1', '1', '1', '1', '8', '5', 'hVq0lLuj8fe2QkiKOkKWJBGAAEk2aBdBQtcWfkApmy43QFd2dG', '572', '401', '788', '橙', 'XL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('84', 'bDJ5wgBmlp', '32.jpg', '970', '0', '0', '1', '0', '0', '1', '1', 'bTYyIUuSfPPuUUjLZfjqrzCUKAz2q6MnEDFuHTDnMKPrQ3T9Ex', '883', '476', '808', '黄', 'M', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('85', 'WfRAVvRcp6', '39.jpg', '170', '1', '0', '1', '0', '1', '1', '5', 'nxByBJZJob4PdK16OgfwoMaHCakbO76hxIPInSv4hjxXkRHHAd', '617', '946', '28', '蓝', 'XXXL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('86', 'zSDN6XubNr', '29.jpg', '408', '0', '0', '1', '1', '0', '7', '2', 'TrsZDRPbfE3wTeYnh03fGv2W2r3C3n0iLeFAug5pJm1HyuJvJ9', '184', '515', '516', '黄', 'M', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('87', 'n86FrK5y7h', '3.jpg', '811', '0', '0', '1', '0', '1', '3', '8', 'a3wQ8gkXBsGJa0qrLBW6uqV1n1BUzVxcSrmsY6nHgT4BW1NHTl', '839', '863', '932', '橙', 'XXL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('88', 'KSwYengyyp', '10.jpg', '602', '1', '1', '0', '0', '0', '2', '6', 'k2Tprmd35NWxfJwwSwMG5M2QlGbtPVd6c71uE3LOrpoQxT8h99', '929', '881', '778', '绿', 'M', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('89', 'MnXSeNfM7a', '71.jpg', '347', '0', '0', '0', '0', '1', '3', '3', '8Un2jsNeTTxZ7qECt5UQtvnQmBcTkyZqGByxe2UGe1RX8VJVrh', '145', '934', '653', '红', 'XL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('90', 'ebbOn6HrT1', '3.jpg', '208', '1', '0', '0', '1', '0', '6', '6', 'PgnEkBnG6ptLrK17UBu8bmCfgfEnToWxnyaqd72dU7Rot7TkhQ', '773', '103', '498', '蓝', 'L', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('91', 'i6hpXrrqNq', '46.jpg', '187', '1', '1', '1', '1', '0', '2', '6', 'DAKrkml8hn1ojJzjWQ79B55qLoQYdJy8Spu7jBamx7L9fkhWjM', '942', '441', '849', '青', 'M', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('92', 'aURooWvzr9', '87.jpg', '382', '0', '1', '0', '1', '0', '2', '1', 'PDCNia3WxBKI8svs5iFyieAE0lI8RBhb16xUvWwoYk2thklmKa', '874', '215', '83', '橙', 'XL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('93', 'WOEkqtePSA', '83.jpg', '235', '1', '0', '1', '1', '1', '6', '6', 'sNy0TeSQxPcodkg2hYFpeQd4VMDuDNoxhrF1kMn99Jaqm2IiBN', '134', '164', '676', '黑', 'S', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('94', 'nkNf3r6348', '89.jpg', '782', '1', '1', '1', '0', '1', '2', '8', 'LvPoB3BQoYKUrWeEIHzLpNNYhLOmsT11sk5sHyz2vAc5pnrrvJ', '886', '747', '441', '紫', 'XL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('95', 't7h2AfAVhk', '83.jpg', '899', '1', '1', '0', '0', '0', '7', '2', 'weiBnOop85fXORhI7hO55LU1hfRSzwbXyV1HjqfYRILfnLCVRm', '130', '386', '790', '青', 'S', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('96', 'gsXV1Qk4hN', '88.jpg', '561', '1', '1', '0', '0', '1', '4', '3', 'mhWLiIECgagOxbW2xYcWFt8PAhb8tIwskQdB1ZbmGGWFdbQCZY', '967', '729', '976', '紫', 'M', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('97', 'N0ShBotElZ', '100.jpg', '84', '0', '1', '0', '0', '1', '2', '8', 'xLbavTvXvJWjFwknH3gmdeNNpDfFElzCX69nWEtrPCy1MbrFr8', '835', '888', '346', '绿', 'XL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('98', '09WueeqOCe', '12.jpg', '378', '0', '0', '0', '1', '1', '5', '4', 'JTHerO1yLuoRQJ2qWQT3aHSQMz32Ellna0RUOLmIU1eIXC6Z8F', '772', '694', '594', '黑', 'XXL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('99', 'D5sKaCAk4d', '37.jpg', '197', '0', '0', '0', '0', '1', '1', '6', 'lAlSuYLAhGOE8PrxrWuvwom2wViz69EzDZ4RLzOVixau4USUk9', '655', '950', '3', '橙', 'XXL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('100', 'pBareP9xbk', '38.jpg', '388', '1', '1', '1', '0', '1', '2', '8', 'e617idOad9enXC46T5C3whyge8WEYuVOX3V9jsamZjXXJDP5YC', '458', '673', '703', '绿', 'XXL', '2018-03-24 15:13:53', '2018-03-24 15:13:53');
INSERT INTO `goods` VALUES ('101', '在不在下次吧', 'b8bc3ab0e457cfcff52b58b6d092f87f.jpg', '0', '1', '1', '1', '0', '0', '1', '1', '<p>阿范德萨发的</p>', '0', '0', '0', '橙', 'M', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
