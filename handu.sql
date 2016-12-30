/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : handu

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-12-24 14:52:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for address
-- ----------------------------
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `to_name` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `addr_area` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `addr_deta` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `identity` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of address
-- ----------------------------
INSERT INTO `address` VALUES ('1', '1', '汪世兵', '北京', '北京市西城区复兴门内大街49号', null, '15313066678', '0');

-- ----------------------------
-- Table structure for attr_colors
-- ----------------------------
DROP TABLE IF EXISTS `attr_colors`;
CREATE TABLE `attr_colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of attr_colors
-- ----------------------------
INSERT INTO `attr_colors` VALUES ('1', '1', '浅蓝色');
INSERT INTO `attr_colors` VALUES ('2', '1', '灰色');
INSERT INTO `attr_colors` VALUES ('3', '2', '粉色');
INSERT INTO `attr_colors` VALUES ('4', '2', '蓝色');
INSERT INTO `attr_colors` VALUES ('5', '2', '黑色');

-- ----------------------------
-- Table structure for attr_sizes
-- ----------------------------
DROP TABLE IF EXISTS `attr_sizes`;
CREATE TABLE `attr_sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `size` char(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of attr_sizes
-- ----------------------------
INSERT INTO `attr_sizes` VALUES ('1', '1', 'S');
INSERT INTO `attr_sizes` VALUES ('2', '1', 'M');
INSERT INTO `attr_sizes` VALUES ('3', '1', 'L');
INSERT INTO `attr_sizes` VALUES ('4', '2', 'XL');
INSERT INTO `attr_sizes` VALUES ('5', '3', '2XL');
INSERT INTO `attr_sizes` VALUES ('6', '2', '3XL');

-- ----------------------------
-- Table structure for campaign
-- ----------------------------
DROP TABLE IF EXISTS `campaign`;
CREATE TABLE `campaign` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `camp_title` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `camp_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `camp_pid` tinyint(4) NOT NULL,
  `cate_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of campaign
-- ----------------------------

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assit_logo` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pid` tinyint(4) NOT NULL DEFAULT '0',
  `show_pos` tinyint(4) NOT NULL DEFAULT '0',
  `path` char(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=375 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'HSTYLE女装', null, 'hstyle.png', '0', '1', '0', '1');
INSERT INTO `category` VALUES ('2', 'SONEED女装', null, 'soneed.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('3', 'HSTYLE韩都衣舍男装', null, 'soneed.png', '0', '1', '0', '1');
INSERT INTO `category` VALUES ('4', 'MiniZaru童装', null, 'mini.png', '0', '1', '0', '1');
INSERT INTO `category` VALUES ('5', 'nanaday娜娜日记', null, 'nana.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('6', 'Forqueens范奎恩', null, 'forqueen.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('7', 'Dequanna迪葵纳', null, 'hanyunyixiang.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('8', 'niBBuns尼班诗', null, 'nibbuns.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('9', 'R•Maker暗码', null, 'anma.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('10', 'Cherry town樱桃小镇', null, 'ytxz.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('11', 'Laura', null, 'laola.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('12', 'SOULINE素缕', null, 'sulv.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('13', 'zigu自古', null, 'zg.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('14', 'Garbha果芽', null, 'guoya.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('15', 'HoneyPig蜜糖猪', null, 'hp.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('16', '白鹿语', null, 'bly.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('17', '基易', null, 'bly.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('18', '哲初', null, 'zc.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('19', '池希', null, 'cx.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('20', '歩乐斯', null, 'cx.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('21', 'Dicovery Expedition', null, 'dx1.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('22', 'HSTYLE/韩都衣舍母婴', null, 'hanyunyixiang.png', '0', '0', '0', '1');
INSERT INTO `category` VALUES ('23', '上装', null, null, '1', '0', '0,1', '1');
INSERT INTO `category` VALUES ('24', '裙装', null, null, '1', '0', '0,1', '1');
INSERT INTO `category` VALUES ('25', '裤装', null, null, '1', '0', '0,1', '1');
INSERT INTO `category` VALUES ('26', '配饰', null, null, '1', '0', '0,1', '1');
INSERT INTO `category` VALUES ('27', '箱包', null, null, '1', '0', '0,1', '1');
INSERT INTO `category` VALUES ('28', '鞋子', null, null, '1', '0', '0,1', '1');
INSERT INTO `category` VALUES ('29', '上装', null, null, '2', '0', '0,2', '1');
INSERT INTO `category` VALUES ('30', '裙装', null, null, '2', '0', '0,2', '1');
INSERT INTO `category` VALUES ('31', '饰品', null, null, '2', '0', '0,2', '1');
INSERT INTO `category` VALUES ('32', '裤装', null, null, '2', '0', '0,2', '1');
INSERT INTO `category` VALUES ('33', '上装', null, null, '3', '0', '0,3', '1');
INSERT INTO `category` VALUES ('34', '下装', null, null, '3', '0', '0,3', '1');
INSERT INTO `category` VALUES ('35', '上装', null, null, '4', '0', '0,4', '1');
INSERT INTO `category` VALUES ('36', '裙装', null, null, '4', '0', '0,4', '1');
INSERT INTO `category` VALUES ('37', '裤装', null, null, '4', '0', '0,4', '1');
INSERT INTO `category` VALUES ('38', '鞋包配饰', null, null, '4', '0', '0,4', '1');
INSERT INTO `category` VALUES ('39', '上装', null, null, '5', '0', '0,5', '1');
INSERT INTO `category` VALUES ('40', '裙装', null, null, '5', '0', '0,5', '1');
INSERT INTO `category` VALUES ('41', '裤装', null, null, '5', '0', '0,5', '1');
INSERT INTO `category` VALUES ('42', '上装', null, null, '6', '0', '0,6', '1');
INSERT INTO `category` VALUES ('43', '裙装', null, null, '6', '0', '0,6', '1');
INSERT INTO `category` VALUES ('44', '裤装', null, null, '6', '0', '0,6', '1');
INSERT INTO `category` VALUES ('45', '上装', null, null, '7', '0', '0,7', '1');
INSERT INTO `category` VALUES ('46', '裤装', null, null, '7', '0', '0,7', '1');
INSERT INTO `category` VALUES ('47', '裙装', null, null, '7', '0', '0,7', '1');
INSERT INTO `category` VALUES ('48', '上装', null, null, '8', '0', '0,8', '1');
INSERT INTO `category` VALUES ('49', '裙装', null, null, '8', '0', '0,8', '1');
INSERT INTO `category` VALUES ('50', '裤装', null, null, '8', '0', '0,8', '1');
INSERT INTO `category` VALUES ('51', '套装', null, null, '8', '0', '0,8', '1');
INSERT INTO `category` VALUES ('52', '上装', null, null, '9', '0', '0,9', '1');
INSERT INTO `category` VALUES ('53', '裤装', null, null, '9', '0', '0,9', '1');
INSERT INTO `category` VALUES ('54', '上装', null, null, '10', '0', '0,10', '1');
INSERT INTO `category` VALUES ('55', '裤装', null, null, '10', '0', '0,10', '1');
INSERT INTO `category` VALUES ('56', '裙装', null, null, '10', '0', '0,10', '1');
INSERT INTO `category` VALUES ('57', '上装', null, null, '11', '0', '0,11', '1');
INSERT INTO `category` VALUES ('58', '裙装', null, null, '11', '0', '0,11', '1');
INSERT INTO `category` VALUES ('59', '裤装', null, null, '11', '0', '0,11', '1');
INSERT INTO `category` VALUES ('60', '配饰', null, null, '11', '0', '0,11', '1');
INSERT INTO `category` VALUES ('61', '上装', null, null, '12', '0', '0,12', '1');
INSERT INTO `category` VALUES ('62', '裙装', null, null, '12', '0', '0,12', '1');
INSERT INTO `category` VALUES ('63', '裤装', null, null, '12', '0', '0,12', '1');
INSERT INTO `category` VALUES ('64', '鞋包配饰', null, null, '12', '0', '0,12', '1');
INSERT INTO `category` VALUES ('65', '上装', null, null, '13', '0', '0,13', '1');
INSERT INTO `category` VALUES ('66', '下装', null, null, '13', '0', '0,13', '1');
INSERT INTO `category` VALUES ('67', '上装', null, null, '14', '0', '0,14', '1');
INSERT INTO `category` VALUES ('68', '下装', null, null, '14', '0', '0,14', '1');
INSERT INTO `category` VALUES ('69', '裙装', null, null, '14', '0', '0,14', '1');
INSERT INTO `category` VALUES ('70', '上装', null, null, '15', '0', '0,15', '1');
INSERT INTO `category` VALUES ('71', '裙装', null, null, '15', '0', '0,15', '1');
INSERT INTO `category` VALUES ('72', '裤装', null, null, '15', '0', '0,15', '1');
INSERT INTO `category` VALUES ('73', '上装', null, null, '16', '0', '0,16', '1');
INSERT INTO `category` VALUES ('74', '裙装', null, null, '16', '0', '0,16', '1');
INSERT INTO `category` VALUES ('75', '下装', null, null, '16', '0', '0,16', '1');
INSERT INTO `category` VALUES ('76', '上装', null, null, '17', '0', '0,17', '1');
INSERT INTO `category` VALUES ('77', '裙装', null, null, '17', '0', '0,17', '1');
INSERT INTO `category` VALUES ('78', '裤装', null, null, '17', '0', '0,17', '1');
INSERT INTO `category` VALUES ('79', '上装', null, null, '18', '0', '0,18', '1');
INSERT INTO `category` VALUES ('80', '裙装', null, null, '18', '0', '0,18', '1');
INSERT INTO `category` VALUES ('81', '裤装', null, null, '18', '0', '0,18', '1');
INSERT INTO `category` VALUES ('82', '上装', null, null, '19', '0', '0,19', '1');
INSERT INTO `category` VALUES ('83', '裙装', null, null, '19', '0', '0,19', '1');
INSERT INTO `category` VALUES ('84', '裤装', null, null, '19', '0', '0,19', '1');
INSERT INTO `category` VALUES ('85', '围巾/披肩', null, null, '19', '0', '0,19', '1');
INSERT INTO `category` VALUES ('86', '运动鞋', null, null, '20', '0', '0,20', '1');
INSERT INTO `category` VALUES ('87', '上装', null, null, '21', '0', '0,21', '1');
INSERT INTO `category` VALUES ('88', '裤装', null, null, '21', '0', '0,21', '1');
INSERT INTO `category` VALUES ('89', '男宝宝', null, null, '22', '0', '0,22', '1');
INSERT INTO `category` VALUES ('90', '新生儿', null, null, '22', '0', '0,22', '1');
INSERT INTO `category` VALUES ('91', '女宝宝', null, null, '22', '0', '0,22', '1');
INSERT INTO `category` VALUES ('92', '毛呢外套', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('93', '羽绒服', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('94', '棉衣/棉服', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('95', '毛针织衫', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('96', '卫衣/绒衫', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('97', '短外套/休闲外套', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('98', 'T恤', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('99', '衬衫', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('100', '套装', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('101', '风衣', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('102', '蕾丝衫/雪纺衫', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('103', '马夹', null, null, '23', '0', '0,1,23', '1');
INSERT INTO `category` VALUES ('104', '连衣裙', null, null, '24', '0', '0,1,24', '1');
INSERT INTO `category` VALUES ('105', '半身裙', null, null, '24', '0', '0,1,24', '1');
INSERT INTO `category` VALUES ('106', '牛仔裤', null, null, '25', '0', '0,1,25', '1');
INSERT INTO `category` VALUES ('107', '休闲裤', null, null, '25', '0', '0,1,25', '1');
INSERT INTO `category` VALUES ('108', '打底裤', null, null, '25', '0', '0,1,25', '1');
INSERT INTO `category` VALUES ('109', '短裤', null, null, '25', '0', '0,1,25', '1');
INSERT INTO `category` VALUES ('110', '项链', null, null, '26', '0', '0,1,26', '1');
INSERT INTO `category` VALUES ('111', '帽子', null, null, '26', '0', '0,1,26', '1');
INSERT INTO `category` VALUES ('112', '腰带', null, null, '26', '0', '0,1,26', '1');
INSERT INTO `category` VALUES ('113', '围巾', null, null, '26', '0', '0,1,26', '1');
INSERT INTO `category` VALUES ('114', '手提包', null, null, '27', '0', '0,1,27', '1');
INSERT INTO `category` VALUES ('115', '手拿包', null, null, '27', '0', '0,1,27', '1');
INSERT INTO `category` VALUES ('116', '双肩包', null, null, '27', '0', '0,1,27', '1');
INSERT INTO `category` VALUES ('117', '单肩包', null, null, '27', '0', '0,1,27', '1');
INSERT INTO `category` VALUES ('118', '斜挎包', null, null, '27', '0', '0,1,27', '1');
INSERT INTO `category` VALUES ('119', '钱包', null, null, '27', '0', '0,1,27', '1');
INSERT INTO `category` VALUES ('120', '低帮鞋', null, null, '28', '0', '0,1,28', '1');
INSERT INTO `category` VALUES ('121', '凉鞋', null, null, '28', '0', '0,1,28', '1');
INSERT INTO `category` VALUES ('122', '高帮鞋', null, null, '28', '0', '0,1,28', '1');
INSERT INTO `category` VALUES ('123', '靴子', null, null, '28', '0', '0,1,28', '1');
INSERT INTO `category` VALUES ('124', '毛呢外套', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('125', '毛针织衫', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('126', '风衣', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('127', '羽绒服', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('128', '棉衣棉服', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('129', 'T恤', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('130', '衬衫', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('131', '卫衣绒衫', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('132', '套装', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('133', '西装', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('134', '蕾丝衫/雪纺衫', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('135', '背心吊带', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('136', '外套', null, null, '29', '0', '0,2,29', '1');
INSERT INTO `category` VALUES ('137', '连衣裙', null, null, '30', '0', '0,2,30', '1');
INSERT INTO `category` VALUES ('138', '半身裙', null, null, '30', '0', '0,2,30', '1');
INSERT INTO `category` VALUES ('139', '休闲裤', null, null, '32', '0', '0,2,32', '1');
INSERT INTO `category` VALUES ('140', '牛仔裤', null, null, '32', '0', '0,2,32', '1');
INSERT INTO `category` VALUES ('141', '短裤', null, null, '32', '0', '0,2,32', '1');
INSERT INTO `category` VALUES ('142', '卫衣', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('143', '羽绒服', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('144', '长袖T恤', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('145', '衬衫', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('146', '夹克', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('147', '毛衣针织衫/毛衣', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('148', '呢大衣', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('149', '棉衣', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('150', '背心/马甲', null, null, '33', '0', '0,3,33', '1');
INSERT INTO `category` VALUES ('151', '牛仔裤', null, null, '34', '0', '0,3,34', '1');
INSERT INTO `category` VALUES ('152', '休闲裤', null, null, '34', '0', '0,3,34', '1');
INSERT INTO `category` VALUES ('153', '棉袄/棉服', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('154', '羽绒服饰/羽绒内胆', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('155', '卫衣/绒衫', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('156', '衬衫', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('157', '套装', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('158', '毛呢外套', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('159', '外套/夹克/大衣', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('160', 'T恤', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('161', '毛衣/针织衫', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('162', '马甲', null, null, '35', '0', '0,4,35', '1');
INSERT INTO `category` VALUES ('163', '连衣裙', null, null, '36', '0', '0,4,36', '1');
INSERT INTO `category` VALUES ('164', '半身裙', null, null, '36', '0', '0,4,36', '1');
INSERT INTO `category` VALUES ('165', '牛仔裤', null, null, '37', '0', '0,4,37', '1');
INSERT INTO `category` VALUES ('166', '打底裤', null, null, '37', '0', '0,4,37', '1');
INSERT INTO `category` VALUES ('167', '休闲裤', null, null, '37', '0', '0,4,37', '1');
INSERT INTO `category` VALUES ('168', '短裤', null, null, '37', '0', '0,4,37', '1');
INSERT INTO `category` VALUES ('169', '低帮鞋', null, null, '38', '0', '0,4,38', '1');
INSERT INTO `category` VALUES ('170', '羽绒服', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('171', '短外套', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('172', '蕾丝衫/雪纺衫', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('173', '衬衫', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('174', '马甲/马夹', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('175', '棉衣/棉服', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('176', '毛针织衫', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('177', '卫衣/绒衫', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('178', '套装', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('179', 'T恤', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('180', '毛呢外套', null, null, '39', '0', '0,5,39', '1');
INSERT INTO `category` VALUES ('181', '半身裙', null, null, '40', '0', '0,5,40', '1');
INSERT INTO `category` VALUES ('182', '连衣裙', null, null, '40', '0', '0,5,40', '1');
INSERT INTO `category` VALUES ('183', '打底裤', null, null, '41', '0', '0,5,41', '1');
INSERT INTO `category` VALUES ('184', '休闲裤', null, null, '41', '0', '0,5,41', '1');
INSERT INTO `category` VALUES ('185', '牛仔裤', null, null, '41', '0', '0,5,41', '1');
INSERT INTO `category` VALUES ('186', '毛呢外套', null, null, '42', '0', '0,6,42', '1');
INSERT INTO `category` VALUES ('187', '羽绒服', null, null, '42', '0', '0,6,42', '1');
INSERT INTO `category` VALUES ('188', 'T恤', null, null, '42', '0', '0,6,42', '1');
INSERT INTO `category` VALUES ('189', '蕾丝衫/雪纺衫', null, null, '42', '0', '0,6,42', '1');
INSERT INTO `category` VALUES ('190', '衬衫', null, null, '42', '0', '0,6,42', '1');
INSERT INTO `category` VALUES ('191', '风衣', null, null, '42', '0', '0,6,42', '1');
INSERT INTO `category` VALUES ('192', '毛针织衫', null, null, '42', '0', '0,6,42', '1');
INSERT INTO `category` VALUES ('193', '卫衣/绒衫', null, null, '42', '0', '0,6,42', '1');
INSERT INTO `category` VALUES ('194', '连衣裙', null, null, '43', '0', '0,6,43', '1');
INSERT INTO `category` VALUES ('195', '半身裙', null, null, '43', '0', '0,6,43', '1');
INSERT INTO `category` VALUES ('196', '打底裤', null, null, '44', '0', '0,6,44', '1');
INSERT INTO `category` VALUES ('197', '牛仔裤', null, null, '44', '0', '0,6,44', '1');
INSERT INTO `category` VALUES ('198', '短裤', null, null, '44', '0', '0,6,44', '1');
INSERT INTO `category` VALUES ('199', '休闲裤', null, null, '44', '0', '0,6,44', '1');
INSERT INTO `category` VALUES ('200', 'T恤', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('201', '衬衫', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('202', '短外套', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('203', '毛针织衫', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('204', '套装', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('205', '风衣', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('206', '棉衣/棉服', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('207', '羽绒服', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('208', '马夹', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('209', '毛呢外套', null, null, '45', '0', '0,7,45', '1');
INSERT INTO `category` VALUES ('210', '休闲裤', null, null, '46', '0', '0,7,46', '1');
INSERT INTO `category` VALUES ('211', '连衣裙', null, null, '47', '0', '0,7,47', '1');
INSERT INTO `category` VALUES ('212', '半身裙', null, null, '47', '0', '0,7,47', '1');
INSERT INTO `category` VALUES ('213', '毛呢外套', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('214', '毛针织衫', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('215', '羽绒服', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('216', '风衣', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('217', '棉衣/棉服', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('218', '卫衣/绒衫', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('219', 'T恤', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('220', '衬衫', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('221', '西装', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('222', '蕾丝衫/雪纺衫', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('223', '休闲外套', null, null, '48', '0', '0,7,48', '1');
INSERT INTO `category` VALUES ('224', '连衣裙', null, null, '49', '0', '0,7,49', '1');
INSERT INTO `category` VALUES ('225', '半身裙', null, null, '49', '0', '0,7,49', '1');
INSERT INTO `category` VALUES ('226', '休闲裤', null, null, '50', '0', '0,7,50', '1');
INSERT INTO `category` VALUES ('227', '打底裤', null, null, '50', '0', '0,7,50', '1');
INSERT INTO `category` VALUES ('228', '牛仔裤', null, null, '50', '0', '0,7,50', '1');
INSERT INTO `category` VALUES ('229', '短裤', null, null, '50', '0', '0,7,50', '1');
INSERT INTO `category` VALUES ('230', 'T恤', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('231', 'Polo衫', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('232', '衬衫', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('233', '针织衫/毛衣', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('234', '卫衣', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('235', '短外套', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('236', '夹克', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('237', '棉衣', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('238', '羽绒服', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('239', '毛呢外套', null, null, '52', '0', '0,8,52', '1');
INSERT INTO `category` VALUES ('240', '休闲裤', null, null, '53', '0', '0,8,53', '1');
INSERT INTO `category` VALUES ('241', '牛仔裤', null, null, '53', '0', '0,8,53', '1');
INSERT INTO `category` VALUES ('242', '短裤', null, null, '53', '0', '0,8,53', '1');
INSERT INTO `category` VALUES ('243', '羽绒服', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('244', '毛呢外套', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('245', '衬衫', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('246', '外套', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('247', '套装', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('248', '西装', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('249', 'T恤', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('250', '蕾丝衫/雪纺衫', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('251', '风衣', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('252', '毛针织衫', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('253', '卫衣/绒衫', null, null, '54', '0', '0,9,54', '1');
INSERT INTO `category` VALUES ('254', '牛仔裤', null, null, '55', '0', '0,9,55', '1');
INSERT INTO `category` VALUES ('255', '休闲裤', null, null, '55', '0', '0,9,55', '1');
INSERT INTO `category` VALUES ('256', '短裤', null, null, '55', '0', '0,9,55', '1');
INSERT INTO `category` VALUES ('257', '连衣裙', null, null, '56', '0', '0,9,56', '1');
INSERT INTO `category` VALUES ('258', '半身裙', null, null, '56', '0', '0,9,56', '1');
INSERT INTO `category` VALUES ('259', '风衣', null, null, '57', '0', '0,10,57', '1');
INSERT INTO `category` VALUES ('260', '衬衫', null, null, '57', '0', '0,10,57', '1');
INSERT INTO `category` VALUES ('261', 'T恤', null, null, '57', '0', '0,10,57', '1');
INSERT INTO `category` VALUES ('262', '毛呢外套', null, null, '57', '0', '0,10,57', '1');
INSERT INTO `category` VALUES ('263', '羽绒服', null, null, '57', '0', '0,10,57', '1');
INSERT INTO `category` VALUES ('264', '毛针织衫', null, null, '57', '0', '0,10,57', '1');
INSERT INTO `category` VALUES ('265', '西装', null, null, '57', '0', '0,10,57', '1');
INSERT INTO `category` VALUES ('266', '连衣裙', null, null, '58', '0', '0,10,58', '1');
INSERT INTO `category` VALUES ('267', '半身裙', null, null, '58', '0', '0,10,58', '1');
INSERT INTO `category` VALUES ('268', '牛仔裤', null, null, '59', '0', '0,10,59', '1');
INSERT INTO `category` VALUES ('269', '休闲裤', null, null, '59', '0', '0,10,59', '1');
INSERT INTO `category` VALUES ('270', '棉衣/棉服', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('271', '毛针织衫', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('272', '风衣', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('273', '羽绒服', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('274', 'T恤', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('275', '衬衫', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('276', '卫衣/绒衫', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('277', '背心吊带', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('278', '马夹', null, null, '61', '0', '0,11,61', '1');
INSERT INTO `category` VALUES ('279', '连衣裙', null, null, '62', '0', '0,11,62', '1');
INSERT INTO `category` VALUES ('280', '半身裙', null, null, '62', '0', '0,11,62', '1');
INSERT INTO `category` VALUES ('281', '休闲裤', null, null, '63', '0', '0,11,63', '1');
INSERT INTO `category` VALUES ('282', '牛仔裤', null, null, '63', '0', '0,11,63', '1');
INSERT INTO `category` VALUES ('283', '打底裤', null, null, '63', '0', '0,11,63', '1');
INSERT INTO `category` VALUES ('284', '围巾/披肩', null, null, '64', '0', '0,11,64', '1');
INSERT INTO `category` VALUES ('285', '高帮鞋', null, null, '64', '0', '0,11,64', '1');
INSERT INTO `category` VALUES ('286', '手提包', null, null, '64', '0', '0,11,64', '1');
INSERT INTO `category` VALUES ('287', 'T恤', null, null, '65', '0', '0,12,65', '1');
INSERT INTO `category` VALUES ('288', '衬衫', null, null, '65', '0', '0,12,65', '1');
INSERT INTO `category` VALUES ('289', '针织衫/毛衣', null, null, '65', '0', '0,12,65', '1');
INSERT INTO `category` VALUES ('290', '风衣', null, null, '65', '0', '0,12,65', '1');
INSERT INTO `category` VALUES ('291', '休闲裤', null, null, '66', '0', '0,12,66', '1');
INSERT INTO `category` VALUES ('292', 'T恤', null, null, '67', '0', '0,13,67', '1');
INSERT INTO `category` VALUES ('293', '毛衣/针织衫', null, null, '67', '0', '0,13,67', '1');
INSERT INTO `category` VALUES ('294', '衬衫', null, null, '67', '0', '0,13,67', '1');
INSERT INTO `category` VALUES ('295', '卫衣/绒衫', null, null, '67', '0', '0,13,67', '1');
INSERT INTO `category` VALUES ('296', '外套/夹克/大衣', null, null, '67', '0', '0,13,67', '1');
INSERT INTO `category` VALUES ('297', '棉袄/棉服', null, null, '67', '0', '0,13,67', '1');
INSERT INTO `category` VALUES ('298', '裤子', null, null, '68', '0', '0,13,68', '1');
INSERT INTO `category` VALUES ('299', '连衣裙', null, null, '69', '0', '0,13,69', '1');
INSERT INTO `category` VALUES ('300', '半身裙', null, null, '69', '0', '0,13,69', '1');
INSERT INTO `category` VALUES ('301', 'T恤', null, null, '70', '0', '0,14,70', '1');
INSERT INTO `category` VALUES ('302', '衬衫', null, null, '70', '0', '0,14,70', '1');
INSERT INTO `category` VALUES ('303', '卫衣/绒衫', null, null, '70', '0', '0,14,70', '1');
INSERT INTO `category` VALUES ('304', '套装', null, null, '70', '0', '0,14,70', '1');
INSERT INTO `category` VALUES ('305', '毛衣/针织衫', null, null, '70', '0', '0,14,70', '1');
INSERT INTO `category` VALUES ('306', '羽绒服饰/羽绒内胆', null, null, '70', '0', '0,14,70', '1');
INSERT INTO `category` VALUES ('307', '棉袄/棉服', null, null, '70', '0', '0,14,70', '1');
INSERT INTO `category` VALUES ('308', '外套/夹克/大衣', null, null, '70', '0', '0,14,70', '1');
INSERT INTO `category` VALUES ('309', '连衣裙', null, null, '71', '0', '0,14,71', '1');
INSERT INTO `category` VALUES ('310', '半身裙', null, null, '71', '0', '0,14,71', '1');
INSERT INTO `category` VALUES ('311', '休闲裤', null, null, '72', '0', '0,15,72', '1');
INSERT INTO `category` VALUES ('312', '牛仔裤', null, null, '72', '0', '0,15,72', '1');
INSERT INTO `category` VALUES ('313', '短裤', null, null, '72', '0', '0,15,72', '1');
INSERT INTO `category` VALUES ('314', '打底裤', null, null, '72', '0', '0,15,72', '1');
INSERT INTO `category` VALUES ('315', '蕾丝雪纺', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('316', '吊带背心', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('317', '衬衫', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('318', '短外套', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('319', '马甲', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('320', '羽绒服', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('321', 'T恤', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('322', '针织衫', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('323', '卫衣', null, null, '73', '0', '0,16,73', '1');
INSERT INTO `category` VALUES ('324', '半身裙', null, null, '74', '0', '0,16,74', '1');
INSERT INTO `category` VALUES ('325', '连衣裙', null, null, '74', '0', '0,16,74', '1');
INSERT INTO `category` VALUES ('326', '连体裤', null, null, '75', '0', '0,16,75', '1');
INSERT INTO `category` VALUES ('327', '牛仔裤', null, null, '75', '0', '0,16,75', '1');
INSERT INTO `category` VALUES ('328', '休闲裤', null, null, '75', '0', '0,16,75', '1');
INSERT INTO `category` VALUES ('329', '短裤', null, null, '75', '0', '0,16,75', '1');
INSERT INTO `category` VALUES ('330', 'T恤', null, null, '76', '0', '0,17,76', '1');
INSERT INTO `category` VALUES ('331', '衬衫', null, null, '76', '0', '0,17,76', '1');
INSERT INTO `category` VALUES ('332', '风衣', null, null, '76', '0', '0,17,76', '1');
INSERT INTO `category` VALUES ('333', '蕾丝衫/雪纺衫', null, null, '76', '0', '0,17,76', '1');
INSERT INTO `category` VALUES ('334', '西装', null, null, '76', '0', '0,17,76', '1');
INSERT INTO `category` VALUES ('335', '连衣裙', null, null, '77', '0', '0,17,76', '1');
INSERT INTO `category` VALUES ('336', '半身裙', null, null, '77', '0', '0,17,77', '1');
INSERT INTO `category` VALUES ('337', '休闲裤', null, null, '78', '0', '0,17,78', '1');
INSERT INTO `category` VALUES ('338', '衬衫', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('339', '棉衣', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('340', '外套', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('341', '卫衣', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('342', 'T恤', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('343', '毛针织衫', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('344', '背心/吊带', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('345', '风衣', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('346', '羽绒服', null, null, '79', '0', '0,18,79', '1');
INSERT INTO `category` VALUES ('347', '连衣裙', null, null, '80', '0', '0,18,80', '1');
INSERT INTO `category` VALUES ('348', '半身裙', null, null, '80', '0', '0,18,80', '1');
INSERT INTO `category` VALUES ('349', '牛仔裤', null, null, '81', '0', '0,18,81', '1');
INSERT INTO `category` VALUES ('350', '休闲裤', null, null, '81', '0', '0,18,81', '1');
INSERT INTO `category` VALUES ('351', '羽绒服', null, null, '87', '0', '0,21,87', '1');
INSERT INTO `category` VALUES ('352', '滑雪服', null, null, '87', '0', '0,21,87', '1');
INSERT INTO `category` VALUES ('353', '抓绒服', null, null, '87', '0', '0,21,87', '1');
INSERT INTO `category` VALUES ('354', '外套', null, null, '87', '0', '0,21,87', '1');
INSERT INTO `category` VALUES ('355', '卫衣/绒衫', null, null, '87', '0', '0,21,87', '1');
INSERT INTO `category` VALUES ('356', '冲锋衣', null, null, '87', '0', '0,21,87', '1');
INSERT INTO `category` VALUES ('357', '棉服', null, null, '87', '0', '0,21,87', '1');
INSERT INTO `category` VALUES ('358', 'T恤', null, null, '87', '0', '0,21,87', '1');
INSERT INTO `category` VALUES ('359', '越野裤', null, null, '88', '0', '0,21,88', '1');
INSERT INTO `category` VALUES ('360', '卫裤', null, null, '88', '0', '0,21,88', '1');
INSERT INTO `category` VALUES ('361', '抓绒裤', null, null, '88', '0', '0,21,88', '1');
INSERT INTO `category` VALUES ('362', '冲锋裤', null, null, '88', '0', '0,21,88', '1');
INSERT INTO `category` VALUES ('363', '棉衣/羽绒', null, null, '89', '0', '0,22,89', '1');
INSERT INTO `category` VALUES ('364', '套装', null, null, '89', '0', '0,22,89', '1');
INSERT INTO `category` VALUES ('365', '爬服', null, null, '89', '0', '0,22,89', '1');
INSERT INTO `category` VALUES ('366', '上衣', null, null, '89', '0', '0,22,89', '1');
INSERT INTO `category` VALUES ('367', '下装', null, null, '89', '0', '0,22,89', '1');
INSERT INTO `category` VALUES ('368', '爬服', null, null, '90', '0', '0,22,90', '1');
INSERT INTO `category` VALUES ('369', '爬服', null, null, '91', '0', '0,22,91', '1');
INSERT INTO `category` VALUES ('370', '连衣裙', null, null, '91', '0', '0,22,91', '1');
INSERT INTO `category` VALUES ('371', '套装', null, null, '91', '0', '0,22,91', '1');
INSERT INTO `category` VALUES ('372', '上衣', null, null, '91', '0', '0,22,91', '1');
INSERT INTO `category` VALUES ('373', '下装', null, null, '91', '0', '0,22,91', '1');
INSERT INTO `category` VALUES ('374', '棉衣/羽绒', null, null, '91', '0', '0,22,91', '1');

-- ----------------------------
-- Table structure for detail_pic
-- ----------------------------
DROP TABLE IF EXISTS `detail_pic`;
CREATE TABLE `detail_pic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `img_src` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of detail_pic
-- ----------------------------

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `fd_type` tinyint(255) NOT NULL,
  `title` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feedback_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('1', '29', '0', '123', '1232434345', '1482557523');
INSERT INTO `feedback` VALUES ('2', '29', '1', '司', '1234', '1482557579');

-- ----------------------------
-- Table structure for friendslinks
-- ----------------------------
DROP TABLE IF EXISTS `friendslinks`;
CREATE TABLE `friendslinks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `add_time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of friendslinks
-- ----------------------------
INSERT INTO `friendslinks` VALUES ('1', '百度', 'www.baidu.com', '1482161779', '1');
INSERT INTO `friendslinks` VALUES ('2', '网易', 'www.163.com', '1482197192', '1');
INSERT INTO `friendslinks` VALUES ('3', '搜狗', 'www.sougou.com', '1482197707', '1');
INSERT INTO `friendslinks` VALUES ('4', '360', 'www.360.com', '1482508836', '1');
INSERT INTO `friendslinks` VALUES ('7', '游戏频道', 'www.17173.com', '1482508865', '1');

-- ----------------------------
-- Table structure for goods_cancels
-- ----------------------------
DROP TABLE IF EXISTS `goods_cancels`;
CREATE TABLE `goods_cancels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `cancel_state` tinyint(4) NOT NULL,
  `state_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods_cancels
-- ----------------------------

-- ----------------------------
-- Table structure for goods_collection
-- ----------------------------
DROP TABLE IF EXISTS `goods_collection`;
CREATE TABLE `goods_collection` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `size` tinyint(4) NOT NULL,
  `color` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `num` tinyint(4) NOT NULL,
  `collect_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods_collection
-- ----------------------------

-- ----------------------------
-- Table structure for goods_comments
-- ----------------------------
DROP TABLE IF EXISTS `goods_comments`;
CREATE TABLE `goods_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fit` tinyint(4) NOT NULL,
  `comment_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods_comments
-- ----------------------------

-- ----------------------------
-- Table structure for goods_list
-- ----------------------------
DROP TABLE IF EXISTS `goods_list`;
CREATE TABLE `goods_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `add_time` int(11) NOT NULL,
  `promt_price` int(11) NOT NULL,
  `orign_price` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `send` tinyint(4) NOT NULL DEFAULT '0',
  `show_pos` tinyint(4) NOT NULL DEFAULT '0',
  `activity` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prod_country` char(8) COLLATE utf8_unicode_ci DEFAULT '0',
  `pic` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=274 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods_list
-- ----------------------------
INSERT INTO `goods_list` VALUES ('1', '92', '1', '1482462013', '289', '1658', '582', '0', '0', '0', '韩都衣舍2016韩版冬新女宽松显瘦条纹印花纽扣毛呢外套OZ5191', '中国', '1049800_thumb_G_1481011973792.jpg');
INSERT INTO `goods_list` VALUES ('2', '92', '1', '1482158430', '368', '1788', '262', '0', '0', '0', '韩都衣舍2016韩版女冬新款显瘦贴布双排扣中长款毛呢外套RW5982', '中国', '1048030_thumb_G_1480921653434.jpg');
INSERT INTO `goods_list` VALUES ('3', '92', '1', '1482158430', '296', '1738', '224', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款显瘦拼接毛呢外套GY5753', '中国', '1048049_thumb_G_1480921676152.jpg');
INSERT INTO `goods_list` VALUES ('4', '92', '1', '1482241595', '398', '1868', '216', '0', '0', '0', '韩都衣舍2016韩版女装冬新款翻领宽松中长款毛呢外套IG5808', '中国', '1048062_thumb_G_1480921732987.jpg');
INSERT INTO `goods_list` VALUES ('5', '92', '1', '1482158430', '288', '1468', '175', '0', '0', '0', '韩都衣舍2016韩版女装冬季新款大衣外套宽松中长款毛呢外套OI5609湲', '中国', '1477536847592267226.jpg');
INSERT INTO `goods_list` VALUES ('6', '92', '1', '1482158430', '329', '1928', '168', '0', '0', '0', '韩都衣舍2016韩版女冬新款显瘦毛呢外套JZ6469', '中国', '1473329655271637814.jpg');
INSERT INTO `goods_list` VALUES ('7', '92', '1', '1482158430', '336', '897', '161', '0', '0', '0', '韩都衣舍2016韩版女冬装新款连帽毛呢外套YQ6464儬', '中国', '1477305219498952609.jpg');
INSERT INTO `goods_list` VALUES ('8', '92', '1', '1482158430', '396', '2694', '151', '0', '0', '0', '韩都衣舍2016韩版女装冬新款立领纯色宽松中长款毛呢外套AA6309玎', '中国', '1473158865469237515.jpg');
INSERT INTO `goods_list` VALUES ('9', '92', '1', '1482158430', '368', '1888', '144', '0', '0', '0', '韩都衣舍2016韩版女装冬毛呢外套OU6306', '中国', '1472486806748313579.jpg');
INSERT INTO `goods_list` VALUES ('10', '92', '1', '1482158430', '446', '1835', '140', '0', '0', '0', '韩都衣舍2016街头女冬新款中长直筒纯色拼接贴布毛呢外套NJ6079', '中国', '1051158_thumb_g_1474880876180.jpg');
INSERT INTO `goods_list` VALUES ('11', '92', '1', '1482158430', '296', '1788', '136', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款双排扣中长款毛呢外套HO5928魭', '中国', '1476860740328653065.jpg');
INSERT INTO `goods_list` VALUES ('12', '92', '1', '1482158430', '368', '1104', '133', '0', '0', '0', '韩都衣舍2016韩版女装冬装新纯色翻领显瘦中长款毛呢外套MQ5558', '中国', '1051855_thumb_g_1477894905943.jpg');
INSERT INTO `goods_list` VALUES ('13', '92', '1', '1482158430', '398', '1708', '132', '0', '0', '0', '韩都衣舍2016韩版女冬装新款纯色宽松显瘦中长款毛呢外套KY5934湲', '中国', '1475112198511422003.jpg');
INSERT INTO `goods_list` VALUES ('14', '92', '1', '1482158430', '296', '1888', '129', '0', '0', '0', '韩都衣舍2016韩版女冬新毛呢外套HO5016', '中国', '1050821_thumb_g_1475992336731.jpg');
INSERT INTO `goods_list` VALUES ('15', '92', '1', '1482158430', '299', '1768', '128', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款连帽直筒显瘦贴布毛呢外套MQ5591汝', '中国', '1477387643308596623.jpg');
INSERT INTO `goods_list` VALUES ('16', '92', '1', '1482158430', '378', '1898', '128', '0', '0', '0', '韩都衣舍2016韩版女冬新款毛呢外套CQ5578莀', '中国', '1472160034866719829.jpg');
INSERT INTO `goods_list` VALUES ('17', '92', '1', '1482158430', '368', '1918', '128', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款宽松纯色连帽刺绣毛呢外套CQ5963莀', '中国', '1472246432455498620.jpg');
INSERT INTO `goods_list` VALUES ('18', '92', '1', '1482158430', '369', '1374', '127', '0', '0', '0', '韩都衣舍16韩版女装冬装新款翻领宽松贴布中长款毛呢外套LU6023荃', '中国', '1050114_thumb_g_1480065501456.jpg');
INSERT INTO `goods_list` VALUES ('19', '92', '1', '1482158430', '348', '1044', '127', '0', '0', '0', '韩都衣舍2016韩版女装冬装中长款纯色口袋拉链毛呢外套JM5731', '中国', '1473782751789159880.jpg');
INSERT INTO `goods_list` VALUES ('20', '92', '1', '1482158430', '296', '1988', '127', '0', '0', '0', '韩都衣舍2016韩版女冬装新款宽松显瘦中长款毛呢外套DU5597樱', '中国', '1473385030942901629.jpg');
INSERT INTO `goods_list` VALUES ('21', '92', '1', '1482158430', '328', '1788', '127', '0', '0', '0', '韩都衣舍16韩版女冬新纯色毛呢外套DT5912', '中国', '1050753_thumb_g_1478508240921.jpg');
INSERT INTO `goods_list` VALUES ('22', '92', '1', '1482158430', '398', '1728', '127', '0', '0', '0', '韩都衣舍2016韩版女装冬新款宽松显瘦拼接中长款毛呢外套AA6197玎', '中国', '1473652476724059555.jpg');
INSERT INTO `goods_list` VALUES ('23', '92', '1', '1482158430', '438', '1314', '127', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款显瘦双排扣中长款毛呢外套YK5755', '中国', '1472448837074370562.jpg');
INSERT INTO `goods_list` VALUES ('24', '92', '1', '1482158430', '278', '1598', '127', '0', '0', '0', '韩都衣舍2016韩版冬新女宽松刺绣印花贴布毛呢外套LF5914寳', '中国', '1473738848457937153.jpg');
INSERT INTO `goods_list` VALUES ('25', '92', '1', '1482158430', '268', '1728', '126', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款宽松纯色拼接中长毛呢外套HH5772妠', '中国', '1051251_thumb_g_1481523048296.jpg');
INSERT INTO `goods_list` VALUES ('26', '92', '1', '1482158430', '258', '2274', '126', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款拼接印花显瘦宽松毛呢外套NH6143煜', '中国', '1474647823858308500.jpg');
INSERT INTO `goods_list` VALUES ('27', '92', '1', '1482158430', '383', '1748', '125', '0', '0', '0', '韩都衣舍2016韩版女冬新中长毛呢外套NF5125潤', '中国', '1473389986778662964.jpg');
INSERT INTO `goods_list` VALUES ('28', '92', '1', '1482158430', '366', '1628', '125', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款翻领直筒中长款毛呢外套PC5511晽', '中国', '1049515_thumb_g_1479889320107.jpg');
INSERT INTO `goods_list` VALUES ('29', '92', '1', '1482158430', '358', '1678', '125', '0', '0', '0', '韩都衣舍2016韩版女装冬新毛呢外套KY6365湲', '中国', '1473868959732476238.jpg');
INSERT INTO `goods_list` VALUES ('30', '92', '1', '1482158430', '358', '1688', '124', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款显瘦纯色双排扣毛呢外套NH6076煜', '中国', '1473411145308431887.jpg');
INSERT INTO `goods_list` VALUES ('31', '92', '1', '1482158430', '388', '1999', '124', '0', '0', '0', '韩都衣舍2016韩版女冬装新款中长款翻领显瘦纯色毛呢外套JN5828埕', '中国', '1051851_thumb_g_1481265624456.jpg');
INSERT INTO `goods_list` VALUES ('32', '92', '1', '1482158430', '268', '894', '124', '0', '0', '0', '韩都衣舍2016女冬装新款印花毛呢外套JW6118筱', '中国', '1050589_thumb_g_1481277786638.jpg');
INSERT INTO `goods_list` VALUES ('33', '92', '1', '1482158430', '209', '1588', '124', '0', '0', '0', '韩都衣舍2016韩版冬新女连帽贴布印花宽松显瘦毛呢外套OZ5673', '中国', '1472246499443207885.jpg');
INSERT INTO `goods_list` VALUES ('34', '92', '1', '1482158430', '298', '894', '123', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款纯色宽松中长款毛呢外套JW5947', '中国', '1472708419842334896.jpg');
INSERT INTO `goods_list` VALUES ('35', '92', '1', '1482158430', '338', '1718', '122', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款宽松贴布直筒毛呢外套MM5570悜', '中国', '1050128_thumb_g_1481264732779.jpg');
INSERT INTO `goods_list` VALUES ('36', '92', '1', '1482158430', '334', '2484', '121', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款显瘦口袋贴布毛呢外套GY5904娋', '中国', '1475921127763772455.jpg');
INSERT INTO `goods_list` VALUES ('37', '92', '1', '1482158430', '378', '1628', '121', '0', '0', '0', '韩都衣舍2016韩版女装冬装新宽松贴布中长款毛呢外套EJ5881', '中国', '1473868952514896998.jpg');
INSERT INTO `goods_list` VALUES ('38', '92', '1', '1482158430', '348', '1568', '121', '0', '0', '0', '韩都衣舍2016韩版女装冬装新款宽松显瘦纯色长袖毛呢外套EK6244囡', '中国', '1473675782624791656.jpg');
INSERT INTO `goods_list` VALUES ('39', '92', '1', '1482158430', '328', '1558', '120', '0', '0', '0', '韩都衣舍2016韩版女冬装新款纯色翻领显瘦中长款毛呢外套GQ5738耒', '中国', '1050648_thumb_g_1473325995539.jpg');
INSERT INTO `goods_list` VALUES ('40', '92', '1', '1482158430', '328', '1598', '120', '0', '0', '0', '韩都衣舍2016韩版女冬装新款显瘦纯色拼接中长款毛呢外套NH6209', '中国', '1472486860577391055.jpg');
INSERT INTO `goods_list` VALUES ('41', '179', '5', '1482159451', '168', '504', '68', '0', '0', '0', '娜娜日记甜美女装2016夏装新款图案字母印花短袖T恤NK5619冉', '0', '1472832342560407711.jpg');
INSERT INTO `goods_list` VALUES ('42', '179', '5', '1482159451', '158', '474', '51', '0', '0', '0', '娜娜日记甜美女装2016夏装新款宽松字母印花学院风短袖T恤', '0', '1472832348301516884.jpg');
INSERT INTO `goods_list` VALUES ('43', '179', '5', '1482159451', '169', '234', '31', '0', '0', '0', '娜娜日记甜美女装2016夏装新款图案短袖宽松短款T恤NM5338菡0321', '0', '1473091367067467942.jpg');
INSERT INTO `goods_list` VALUES ('44', '179', '5', '1482159451', '188', '564', '22', '0', '0', '0', '娜娜日记甜美女装2016夏装新款圆领短袖印花短款学院T恤NP5323媄', '0', '1473177734325860459.jpg');
INSERT INTO `goods_list` VALUES ('45', '179', '5', '1482159451', '208', '624', '21', '0', '0', '0', '娜娜日记甜美女装2016夏装新款连帽图案印花短款短袖T恤NK5296冉', '0', '1473383879991478370.jpg');
INSERT INTO `goods_list` VALUES ('46', '179', '5', '1482159451', '128', '384', '17', '0', '0', '0', '娜娜日记甜美女装2016夏装新款短款短袖条纹系带上衣T恤NP5635媄', '0', '1462997534774780639.jpg');
INSERT INTO `goods_list` VALUES ('47', '179', '5', '1482159451', '168', '504', '16', '0', '0', '0', '娜娜日记甜美女装2016夏装新款条纹宽松印花短款T恤NL5937嬛0426', '0', '1461701479075319808.jpg');
INSERT INTO `goods_list` VALUES ('48', '179', '5', '1482159451', '168', '267', '16', '0', '0', '0', '娜娜日记甜美女装2016夏装新款学生白色字母印花短款短袖T恤', '0', '1459282585256996434.jpg');
INSERT INTO `goods_list` VALUES ('49', '179', '5', '1482159451', '168', '504', '15', '0', '0', '0', '娜娜日记甜美女装2016夏装新款圆领刺绣图案百搭短袖T恤NL5395嬛', '0', '1461096625904043365.jpg');
INSERT INTO `goods_list` VALUES ('50', '179', '5', '1482159451', '138', '414', '14', '0', '0', '0', '娜娜日记甜美女装2016夏装新款镂空宽松上衣短袖白色T恤NP6008媄', '0', '1464120643383761828.jpg');
INSERT INTO `goods_list` VALUES ('51', '179', '5', '1482159451', '188', '564', '14', '0', '0', '0', '娜娜日记甜美女装2016夏装新款圆领刺绣条纹短袖T恤NL5863嬛', '0', '1459282454087517844.jpg');
INSERT INTO `goods_list` VALUES ('52', '179', '5', '1482159451', '208', '624', '13', '0', '0', '0', '娜娜日记甜美女装2016夏装新款圆领印花图案花边短袖T恤NM5777菡', '0', '1459282490826307522.jpg');
INSERT INTO `goods_list` VALUES ('53', '179', '5', '1482159451', '188', '564', '12', '0', '0', '0', '娜娜日记甜美女装2016夏装新款宽松圆领字母印花短袖T恤NL5368嬛', '0', '1461096623436850748.jpg');
INSERT INTO `goods_list` VALUES ('54', '179', '5', '1482159451', '168', '504', '12', '0', '0', '0', '娜娜日记甜美女装2016夏装新款无袖翻领短款纯色T恤NP5338媄0426', '0', '1461701457481519511.jpg');
INSERT INTO `goods_list` VALUES ('55', '179', '5', '1482159451', '86', '264', '12', '0', '0', '0', '娜娜日记甜美女装2016秋装新款短款纯色破洞长袖T恤NL5677嬛0708', '0', '1046131_thumb_g_1473843851049.jpg');
INSERT INTO `goods_list` VALUES ('56', '179', '5', '1482159451', '148', '444', '12', '0', '0', '0', '娜娜日记甜美女装2016夏装新款上衣学院风镂空纯色短袖T恤宽松', '0', '1464120645246735366.jpg');
INSERT INTO `goods_list` VALUES ('57', '179', '5', '1482159451', '168', '504', '12', '0', '0', '0', '娜娜日记甜美女装2016夏装新款短款拼接贴布粉色短袖T恤NP6039媄', '0', '1462997431476304132.jpg');
INSERT INTO `goods_list` VALUES ('58', '179', '5', '1482159451', '208', '624', '11', '0', '0', '0', '娜娜日记甜美女装2016夏装新款拼接上衣装饰短袖花边袖T恤NP5396', '0', '1463256649801085598.jpg');
INSERT INTO `goods_list` VALUES ('59', '179', '5', '1482159451', '168', '504', '11', '0', '0', '0', '娜娜日记甜美女装2016夏装新款字母印花短款短袖T恤NM5296菡0425', '0', '1461701497737308181.jpg');
INSERT INTO `goods_list` VALUES ('60', '179', '5', '1482159451', '75', '624', '11', '0', '0', '0', '娜娜日记甜美女装2016秋装新款粉色POLO领长袖T恤NK5852冉0908', '0', '1473365405264934652.jpg');
INSERT INTO `goods_list` VALUES ('61', '179', '5', '1482159451', '98', '624', '11', '0', '0', '0', '娜娜日记甜美女装2016秋装新款字母印花拉链长袖T恤NM6288菡0803', '0', '1470341419113513468.jpg');
INSERT INTO `goods_list` VALUES ('62', '179', '5', '1482159451', '69', '564', '11', '0', '0', '0', '娜娜日记甜美女装2016秋装新款纯色七分袖连帽T恤NM6127菡0704', '0', '1467663028553400601.jpg');
INSERT INTO `goods_list` VALUES ('63', '179', '5', '1482159451', '68', '594', '10', '0', '0', '0', '娜娜日记甜美女装2016秋装新款红色长袖套头T恤宽松NP5659媄0818', '0', '1471551064560783211.jpg');
INSERT INTO `goods_list` VALUES ('64', '179', '5', '1482159451', '198', '594', '10', '0', '0', '0', '娜娜日记甜美女装2016春装新款图案印花长袖T恤NK5144冉', '0', '1476303011391190958.jpg');
INSERT INTO `goods_list` VALUES ('65', '179', '5', '1482159451', '49', '504', '10', '0', '0', '0', '娜娜日记甜美女装2016秋装新款连帽双色卡通印花T恤NM6018菡0901', '0', '1472760624586353787.jpg');
INSERT INTO `goods_list` VALUES ('66', '179', '5', '1482159451', '158', '474', '10', '0', '0', '0', '娜娜日记甜美女装2016夏装新款图案印花显瘦短袖T恤NM5232菡0425', '0', '1461701500045266303.jpg');
INSERT INTO `goods_list` VALUES ('67', '179', '5', '1482159451', '59', '474', '10', '0', '0', '0', '娜娜日记甜美女装2016秋装新款短款上衣长袖黑色T恤NP6091媄0715', '0', '1468613422258246653.jpg');
INSERT INTO `goods_list` VALUES ('68', '179', '5', '1482159451', '89', '684', '10', '0', '0', '0', '娜娜日记甜美女装2016秋装新款黑色宽松连帽长袖T恤NL5696嬛0831', '0', '1472674249631298718.jpg');
INSERT INTO `goods_list` VALUES ('69', '179', '5', '1482159451', '198', '594', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款学院上衣短袖宽松印花T恤NP5331媄', '0', '1459282449228215048.jpg');
INSERT INTO `goods_list` VALUES ('70', '179', '5', '1482159451', '168', '504', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款圆领短袖百搭刺绣T恤宽松NL5371嬛', '0', '1463256607044992301.jpg');
INSERT INTO `goods_list` VALUES ('71', '179', '5', '1482159451', '188', '564', '9', '0', '0', '0', '娜娜日记甜美女装2016春装新款拼接长袖字母T恤NK5978冉', '0', '1476303030708178246.jpg');
INSERT INTO `goods_list` VALUES ('72', '179', '5', '1482159451', '188', '564', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款短款印花短袖上衣T恤NP5262媄0401', '0', '1459541440364515007.jpg');
INSERT INTO `goods_list` VALUES ('73', '179', '5', '1482159451', '88', '624', '9', '0', '0', '0', '娜娜日记甜美女装2016秋装新款圆领套头流苏长袖T恤NL5780嬛0803', '0', '1470255049439335692.jpg');
INSERT INTO `goods_list` VALUES ('74', '179', '5', '1482159451', '148', '444', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款粉色圆领字母印花T恤NA5166琬0524', '0', '1464120629804625600.jpg');
INSERT INTO `goods_list` VALUES ('75', '179', '5', '1482159451', '96', '564', '9', '0', '0', '0', '娜娜日记甜美女装2016秋装新款条纹短袖T恤学生NM6666菡1202', '0', '1480709413018957739.jpg');
INSERT INTO `goods_list` VALUES ('76', '179', '5', '1482159451', '108', '594', '9', '0', '0', '0', '娜娜日记甜美女装2016秋季新款粉色上衣长袖T恤女NM6007菡1124', '0', '1480018205053852776.jpg');
INSERT INTO `goods_list` VALUES ('77', '179', '5', '1482159451', '88', '414', '9', '0', '0', '0', '娜娜日记甜美女装2017春装新款玫红色拼接七分袖T恤女NL7011嬛', '0', '1482091807213625065.jpg');
INSERT INTO `goods_list` VALUES ('78', '179', '5', '1482159451', '158', '474', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款纯色圆领宽松短袖T恤NK5576冉', '0', '1462997561128926950.jpg');
INSERT INTO `goods_list` VALUES ('79', '179', '5', '1482159451', '188', '368', '9', '0', '0', '0', '女装两色甜美学院春装新款露肩字母印花七分袖T恤NK5275【NanaDay/娜娜日记 2016春季新品】', '0', '1459282365633272273.jpg');
INSERT INTO `goods_list` VALUES ('80', '179', '5', '1482159451', '88', '564', '9', '0', '0', '0', '娜娜日记甜美女装2016秋装新款刺绣宽松圆领长袖T恤NK5891冉0818', '0', '1471551016842694334.jpg');
INSERT INTO `goods_list` VALUES ('81', '173', '5', '1482160926', '288', '864', '14', '0', '0', '0', '娜娜日记甜美女装2016夏季新款荷叶边粉色短袖雪纺衫NK5631冉0530', '0', '1463018128881951006.jpg');
INSERT INTO `goods_list` VALUES ('82', '173', '5', '1482160926', '308', '924', '12', '0', '0', '0', '娜娜日记甜美女装2016夏装新款学生荷叶边露肩短袖上衣衬衫NL6016', '0', '1469562657423732422.jpg');
INSERT INTO `goods_list` VALUES ('83', '173', '5', '1482160926', '248', '744', '10', '0', '0', '0', '娜娜日记甜美女装2016夏装新款纯色拼接海军领无袖雪纺衫NK5608冉', '0', '1459281497269229038.jpg');
INSERT INTO `goods_list` VALUES ('84', '173', '5', '1482160926', '138', '744', '10', '0', '0', '0', '娜娜日记甜美女装2016秋季新款白色宽松五分袖衬衫NK6337冉1202', '0', '1469562716159650900.jpg');
INSERT INTO `goods_list` VALUES ('85', '173', '5', '1482160926', '128', '714', '10', '0', '0', '0', '娜娜日记甜美女装2016冬季新款学生长袖白色雪纺衫女宽松NP6130媄', '0', '1459281627970756825.jpg');
INSERT INTO `goods_list` VALUES ('86', '173', '5', '1482160926', '228', '684', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款条纹荷叶边系带松紧衬衫NK5612冉', '0', '1459282327696987332.jpg');
INSERT INTO `goods_list` VALUES ('87', '173', '5', '1482160926', '248', '744', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款白色学生印花无袖雪纺衫NP5321媄', '0', '1459282584223463615.jpg');
INSERT INTO `goods_list` VALUES ('88', '173', '5', '1482160926', '268', '804', '7', '0', '0', '0', '娜娜日记甜美女装2016夏装新款上衣彼得潘领欧根纱刺绣短袖雪纺衫', '0', '1462997537694917417.jpg');
INSERT INTO `goods_list` VALUES ('89', '173', '5', '1482160926', '208', '624', '7', '0', '0', '0', '娜娜日记甜美女装2015秋装新款白色印花显瘦纯棉长袖衬衫NM4312菡', '0', '1467749421724988351.jpg');
INSERT INTO `goods_list` VALUES ('90', '173', '5', '1482160926', '208', '624', '6', '0', '0', '0', '娜娜日记甜美女装2016夏装新款纯色荷叶边露肩短袖衬衫NL5930嬛', '0', '1463256675571211889.jpg');
INSERT INTO `goods_list` VALUES ('91', '173', '5', '1482160926', '268', '804', '6', '0', '0', '0', '娜娜日记甜美女装2016夏装新款星星印花露肩飞飞袖雪纺衫短袖宽松', '0', '1464120624235316399.jpg');
INSERT INTO `goods_list` VALUES ('92', '173', '5', '1482160926', '79', '684', '6', '0', '0', '0', '娜娜日记甜美女装2016秋装新款刺绣白色长袖休闲衬衫NM6101菡0708', '0', '1468008609094201298.jpg');
INSERT INTO `goods_list` VALUES ('93', '173', '5', '1482160926', '268', '804', '5', '0', '0', '0', '娜娜日记甜美女装2016夏装新款荷叶花边袖口条纹短袖衬衫NK5898冉', '0', '1459282415898242986.jpg');
INSERT INTO `goods_list` VALUES ('94', '173', '5', '1482160926', '248', '744', '5', '0', '0', '0', '娜娜日记甜美女装2016夏装新款上衣V领荷叶边纯色红色短袖雪纺衫', '0', '1462997569903795951.jpg');
INSERT INTO `goods_list` VALUES ('95', '173', '5', '1482160926', '228', '684', '5', '0', '0', '0', '娜娜日记甜美女装2016夏装新款宽松纯色印花雪纺衫NL5303嬛0315', '0', '1459282567853769818.jpg');
INSERT INTO `goods_list` VALUES ('96', '173', '5', '1482160926', '118', '684', '4', '0', '0', '0', '娜娜日记甜美女装2017春装新款短袖短款白色短袖雪纺衫女NP6154', '0', '1481832655091467707.jpg');
INSERT INTO `goods_list` VALUES ('97', '173', '5', '1482160926', '72', '624', '4', '0', '0', '0', '娜娜日记甜美女装2016秋装新款圆领白色长袖衬衫女NP5472媄0803', '0', '1470255042611945186.jpg');
INSERT INTO `goods_list` VALUES ('98', '173', '5', '1482160926', '78', '624', '4', '0', '0', '0', '娜娜日记甜美女装2016秋装新款格子娃娃领长袖衬衫NM6115菡0728', '0', '1469736615128488535.jpg');
INSERT INTO `goods_list` VALUES ('99', '173', '5', '1482160926', '268', '804', '4', '0', '0', '0', '娜娜日记甜美女装2016夏装新款纯色短款蝙蝠袖开衫雪纺衫NL5252嬛', '0', '1462997476940851977.jpg');
INSERT INTO `goods_list` VALUES ('100', '173', '5', '1482160926', '218', '654', '3', '0', '0', '0', '娜娜日记甜美女装2017春装新款条纹一字领宽松衬衫女NK6528冉1214', '0', '1481746202305322504.jpg');
INSERT INTO `goods_list` VALUES ('101', '173', '5', '1482160926', '92', '744', '3', '0', '0', '0', '娜娜日记甜美女装2016秋季新款单排扣长袖蓝色衬衫NK5701冉0728', '0', '1469736655685413483.jpg');
INSERT INTO `goods_list` VALUES ('102', '173', '5', '1482160926', '138', '804', '3', '0', '0', '0', '娜娜日记甜美女装2017春装新款白色娃娃领长袖衬衫女套头NL6190嬛', '0', '1481772604955918507.jpg');
INSERT INTO `goods_list` VALUES ('103', '173', '5', '1482160926', '69', '624', '2', '0', '0', '0', '娜娜日记甜美女装2016秋装新款娃娃领白色长袖衬衫女NP5436媄0818', '0', '1471551070151359482.jpg');
INSERT INTO `goods_list` VALUES ('104', '173', '5', '1482160926', '288', '864', '2', '0', '0', '0', '娜娜日记甜美女装2016夏装新款拼接polo衫短袖黄色衬衫NK5589冉', '0', '1464725490469324761.jpg');
INSERT INTO `goods_list` VALUES ('105', '173', '5', '1482160926', '128', '684', '1', '0', '0', '0', '娜娜日记甜美女装2017春装新款黑色一字领上衣短款蕾丝衫女短袖', '0', '1481832665452194739.jpg');
INSERT INTO `goods_list` VALUES ('106', '173', '5', '1482160926', '128', '744', '1', '0', '0', '0', '娜娜日记甜美女装2016秋季新款蓝色条纹一字领衬衫女NL6895嬛1202', '0', '1480709408528473007.jpg');
INSERT INTO `goods_list` VALUES ('107', '173', '5', '1482160926', '136', '744', '1', '0', '0', '0', '娜娜日记甜美女装2016秋季新款粉色一字领纯棉衬衫女NP6246媄1123', '0', '1479931808260441109.jpg');
INSERT INTO `goods_list` VALUES ('108', '173', '5', '1482160926', '258', '774', '1', '0', '0', '0', '娜娜日记甜美女装2015秋新款纯色拼接显瘦长袖牛仔衬衫NM5245菡', '0', '1474661409377516549.jpg');
INSERT INTO `goods_list` VALUES ('109', '182', '5', '1482161847', '59', '518', '43', '0', '0', '0', '娜娜日记甜美女装2016夏装新款修身高腰图案短袖连衣裙NK5190冉', '0', '1052344_thumb_G_1478142302884.jpg');
INSERT INTO `goods_list` VALUES ('110', '182', '5', '1482161847', '228', '345', '24', '0', '0', '0', '娜娜日记甜美女装2016夏装新款显瘦学院风牛仔裙背带裙连衣裙短裙', '0', '1052346_thumb_G_1478143058051.jpg');
INSERT INTO `goods_list` VALUES ('111', '182', '5', '1482161847', '268', '804', '23', '0', '0', '0', '女装甜美春装新款刺绣图案学生印花短裙半身裙NL5388【NanaDay娜娜日记 2016春季新品】', '0', '1052296_thumb_G_1477991255837.jpg');
INSERT INTO `goods_list` VALUES ('112', '182', '5', '1482161847', '268', '558', '19', '0', '0', '0', '娜娜日记甜美女装2016春装新款磨破A字背带牛仔半身裙NM5826菡', '0', '1052303_thumb_G_1479982240413.jpg');
INSERT INTO `goods_list` VALUES ('113', '182', '5', '1482161847', '268', '804', '18', '0', '0', '0', '娜娜日记甜美女装2016夏装新款露肩A字短袖短裙连衣裙NL5302嬛', '0', '1051983_thumb_G_1479713003629.jpg');
INSERT INTO `goods_list` VALUES ('114', '182', '5', '1482161847', '198', '237', '15', '0', '0', '0', '娜娜日记甜美女装2016夏装新款印花娃娃领学院风可爱连衣裙显瘦', '0', '1463343064047591982.jpg');
INSERT INTO `goods_list` VALUES ('115', '182', '5', '1482161847', '268', '804', '14', '0', '0', '0', '娜娜日记甜美女装2016夏装新款纯色拉链背带连衣裙短裙NL5219嬛', '0', '1459282466718600957.jpg');
INSERT INTO `goods_list` VALUES ('116', '182', '5', '1482161847', '249', '747', '14', '0', '0', '0', '娜娜日记甜美女装2016夏装新款纯色学院风牛仔背带裙连衣裙NP6126', '0', '1463343050907983797.jpg');
INSERT INTO `goods_list` VALUES ('117', '182', '5', '1482161847', '228', '684', '13', '0', '0', '0', '娜娜日记甜美女装2016秋装新款显瘦黑色短裙半身裙女NL6030姝0922', '0', '1474575004497608742.jpg');
INSERT INTO `goods_list` VALUES ('118', '182', '5', '1482161847', '95', '684', '13', '0', '0', '0', '娜娜日记甜美女装2016夏装新款背带牛仔短裙半身裙NK5957冉0315', '0', '1459282594561107892.jpg');
INSERT INTO `goods_list` VALUES ('119', '182', '5', '1482161847', '228', '684', '13', '0', '0', '0', '娜娜日记甜美女装2016夏装新款荷叶边刺绣露肩松紧腰可爱连衣裙', '0', '1459282573409213922.jpg');
INSERT INTO `goods_list` VALUES ('120', '182', '5', '1482161847', '328', '447', '13', '0', '0', '0', '娜娜日记甜美女装2016夏装新款单排扣a字裙短裙半身裙NL5931嬛', '0', '1463256640144256437.jpg');
INSERT INTO `goods_list` VALUES ('121', '182', '5', '1482161847', '228', '684', '12', '0', '0', '0', '娜娜日记甜美女装2016夏装新款字母印花粉色背带裙短裙NM5825菡', '0', '1460837451541907969.jpg');
INSERT INTO `goods_list` VALUES ('122', '182', '5', '1482161847', '219', '657', '12', '0', '0', '0', '娜娜日记甜美女装2016夏装新款纯色学院风可爱蓝色连衣裙NP6078媄', '0', '1463256701334360859.jpg');
INSERT INTO `goods_list` VALUES ('123', '182', '5', '1482161847', '248', '744', '12', '0', '0', '0', '娜娜日记甜美女装2016秋装新款牛仔蓝色短裙连衣裙NK6235冉0704', '0', '1467663030507604568.jpg');
INSERT INTO `goods_list` VALUES ('124', '182', '5', '1482161847', '258', '774', '11', '0', '0', '0', '娜娜日记甜美女装2016秋装新款高腰纯色A字裙半身裙NL5828嬛0809', '0', '1470773482791977037.jpg');
INSERT INTO `goods_list` VALUES ('125', '182', '5', '1482161847', '95', '684', '11', '0', '0', '0', '娜娜日记甜美女装2016夏季新款学院风显瘦宽松少女可爱连衣裙红色', '0', '1463723315576616797.jpg');
INSERT INTO `goods_list` VALUES ('126', '182', '5', '1482161847', '75', '534', '10', '0', '0', '0', '娜娜日记甜美女装2016秋装新款学生套头粉色连衣裙女NK6166姝0918', '0', '1474229419311521397.jpg');
INSERT INTO `goods_list` VALUES ('127', '182', '5', '1482161847', '248', '744', '10', '0', '0', '0', '娜娜日记甜美女装2016夏装新款牛仔背带A字高腰半身短裙NK5238', '0', '1476303033339377329.jpg');
INSERT INTO `goods_list` VALUES ('128', '182', '5', '1482161847', '70', '684', '10', '0', '0', '0', '娜娜日记甜美女装2016夏装新款a型裙子牛仔裙半身裙a字裙短裙', '0', '1463343062523682099.jpg');
INSERT INTO `goods_list` VALUES ('129', '182', '5', '1482161847', '268', '804', '10', '0', '0', '0', '娜娜日记甜美女装2016冬新款长袖连衣裙秋小清新短裙NK5792', '0', '1481767144221209237.jpg');
INSERT INTO `goods_list` VALUES ('130', '182', '5', '1482161847', '288', '336', '10', '0', '0', '0', '娜娜日记甜美女装2016秋装新款粉色长袖中长款连衣裙NK6026冉0809', '0', '1470773423323202857.jpg');
INSERT INTO `goods_list` VALUES ('131', '182', '5', '1482161847', '115', '714', '10', '0', '0', '0', '娜娜日记甜美女装2016夏装新款印花背带牛仔连衣裙NK5362冉', '0', '1459282457809044228.jpg');
INSERT INTO `goods_list` VALUES ('132', '182', '5', '1482161847', '72', '594', '10', '0', '0', '0', '娜娜日记甜美女装2017春装新款粉色条纹显瘦半身裙女NM6219菡1215', '0', '1481832631547762327.jpg');
INSERT INTO `goods_list` VALUES ('133', '182', '5', '1482161847', '308', '924', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款学院风短裙牛仔裙半身裙NP5638媄', '0', '1463775079096093187.jpg');
INSERT INTO `goods_list` VALUES ('134', '182', '5', '1482161847', '188', '564', '9', '0', '0', '0', '娜娜日记甜美女装2016秋装新款学生粉色显瘦A字裙半身裙女NP6778', '0', '1477858219720452495.jpg');
INSERT INTO `goods_list` VALUES ('135', '182', '5', '1482161847', '218', '654', '9', '0', '0', '0', '娜娜日记甜美女装2016夏季新款裙子无袖印花宽松粉色连衣裙a字裙', '0', '1463550952886798128.jpg');
INSERT INTO `goods_list` VALUES ('136', '182', '5', '1482161847', '78', '594', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款印花抽绳短袖连衣裙NK6197冉0524', '0', '1464120636135957373.jpg');
INSERT INTO `goods_list` VALUES ('137', '182', '5', '1482161847', '248', '744', '9', '0', '0', '0', '娜娜日记甜美女装2016冬新款蓝色条纹背带裙半身裙NL6312嬛1202', '0', '1480709446541205207.jpg');
INSERT INTO `goods_list` VALUES ('138', '182', '5', '1482161847', '188', '564', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款开衩裙短裙牛仔裙半身裙短裙NP5269', '0', '1462997445731549993.jpg');
INSERT INTO `goods_list` VALUES ('139', '182', '5', '1482161847', '116', '624', '9', '0', '0', '0', '娜娜日记甜美女装2017年春装新款A字裙褶锏牛仔裙连衣裙NU6011', '0', '1482091844592487134.jpg');
INSERT INTO `goods_list` VALUES ('140', '182', '5', '1482161847', '248', '744', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款高腰网纱裙条纹中裙半身裙', '0', '1459282308436161856.jpg');
INSERT INTO `goods_list` VALUES ('141', '182', '5', '1482161847', '128', '744', '9', '0', '0', '0', '娜娜日记甜美女装2016冬季新款A型弹力牛仔半身裙NU6039晗1214', '0', '1481832642447301845.jpg');
INSERT INTO `goods_list` VALUES ('142', '182', '5', '1482161847', '248', '744', '9', '0', '0', '0', '娜娜日记甜美女装2016夏装新款网纱拼接荷叶边短袖连衣裙NK5955冉', '0', '1459282523730503919.jpg');
INSERT INTO `goods_list` VALUES ('143', '182', '5', '1482161847', '208', '624', '8', '0', '0', '0', '娜娜日记甜美女装2016夏装新款纯色拉链半身裙短裙NM5706菡0414', '0', '1460751026275333148.jpg');
INSERT INTO `goods_list` VALUES ('144', '182', '5', '1482161847', '228', '684', '8', '0', '0', '0', '娜娜日记甜美女装2016夏装新款喇叭袖短袖印花连衣裙NK6179冉0524', '0', '1464120640677552833.jpg');
INSERT INTO `goods_list` VALUES ('145', '182', '5', '1482161847', '228', '684', '8', '0', '0', '0', '娜娜日记甜美女装2016冬季新款流苏连帽黑色连衣裙女NI6105姝1202', '0', '1480709428570219525.jpg');
INSERT INTO `goods_list` VALUES ('146', '182', '5', '1482161847', '198', '594', '8', '0', '0', '0', '娜娜日记甜美女装2016夏装新款可拆卸背带A字牛仔半身裙NK5524冉', '0', '1459282420513347183.jpg');
INSERT INTO `goods_list` VALUES ('147', '157', '4', '1482162925', '159', '798', '8', '0', '0', '0', '米妮哈鲁童装2017春装新款男童中大童套装韩版两件套YJ6009樂', '0', '1052410_thumb_G_1478249311239.jpg');
INSERT INTO `goods_list` VALUES ('148', '157', '4', '1482162925', '129', '518', '6', '0', '0', '0', '米妮哈鲁童装2017春装新款女童中大童运动两件套儿童套装YO6194駺', '0', '1052475_thumb_G_1478577118459.jpg');
INSERT INTO `goods_list` VALUES ('149', '157', '4', '1482162925', '149', '668', '8', '0', '0', '0', '米妮哈鲁童装2017春装新款女童韩版儿童套装套裙YI6171蔰', '0', '1052431_thumb_G_1478487805306.jpg');
INSERT INTO `goods_list` VALUES ('150', '157', '4', '1482247987', '159', '698', '9', '0', '0', '0', '米妮哈鲁童装2017春装新款女童韩版儿童套装中大童套装ZR6682泷', '0', '1052720_thumb_G_1479449355906.jpg');
INSERT INTO `goods_list` VALUES ('151', '157', '4', '1482162925', '169', '718', '8', '0', '0', '0', '米妮哈鲁童装2017年春装新款男童中大童韩版休闲长袖套装ZE4997樂', '0', '1478745076679190750.jpg');
INSERT INTO `goods_list` VALUES ('152', '157', '4', '1482250966', '159', '718', '3', '0', '0', '0', '米妮哈鲁童装2017春装新款男童韩版中大童儿童长袖套装YW6073莟', '0', '1053927_thumb_g_1481678343322.jpg');
INSERT INTO `goods_list` VALUES ('153', '157', '4', '1482162925', '159', '718', '7', '0', '0', '0', '米妮哈鲁童装2017春装女童套装中大童衣裙两件套ZG6089燚', '0', '1053447_thumb_g_1480992161459.jpg');
INSERT INTO `goods_list` VALUES ('154', '157', '4', '1482162925', '139', '558', '8', '0', '0', '0', '米妮哈鲁童装2017春装新款女童长袖短裙儿童套装YI6167蔰', '0', '1053442_thumb_g_1480987864504.jpg');
INSERT INTO `goods_list` VALUES ('155', '157', '4', '1482162925', '119', '684', '9', '0', '0', '0', '米妮哈鲁童装婴幼女童套装2017春装新款小童两件套YR7011呡', '0', '1480954876023069121.jpg');
INSERT INTO `goods_list` VALUES ('156', '157', '4', '1482162925', '169', '828', '2', '0', '0', '0', '米妮哈鲁2017春装新款男童韩版中大童儿童长袖套装YW6018', '0', '1480907737596982294.jpg');
INSERT INTO `goods_list` VALUES ('157', '157', '4', '1482162925', '68', '358', '8', '0', '0', '0', '韩都衣舍童装儿童内衣套装女童套装2017春装新款两件套YY6621', '0', '1053367_thumb_g_1480907682718.jpg');
INSERT INTO `goods_list` VALUES ('158', '157', '4', '1482162925', '149', '668', '6', '0', '0', '0', '米妮哈鲁×贝肯熊春装新款男童韩版中大童儿童长袖套装YW6051莟', '0', '1480905276739135962.jpg');
INSERT INTO `goods_list` VALUES ('159', '157', '4', '1482162925', '149', '588', '4', '0', '0', '0', '米妮哈鲁贝肯熊2017新款春装休闲运动套装儿童两件套XE6808駺', '0', '1480868423037457520.jpg');
INSERT INTO `goods_list` VALUES ('160', '157', '4', '1482162925', '169', '698', '2', '0', '0', '0', '米妮哈鲁2017春款女童套装新款儿童春装韩版两件套YO6001畵', '0', '1053281_thumb_g_1480904470732.jpg');
INSERT INTO `goods_list` VALUES ('161', '157', '4', '1482162925', '149', '987', '10', '0', '0', '0', '米妮哈鲁童装2017春装女童套装中大童儿童两件套新款ZG6094燚', '0', '1053276_thumb_g_1481767933675.jpg');
INSERT INTO `goods_list` VALUES ('162', '157', '4', '1482162925', '109', '668', '8', '0', '0', '0', '米妮哈鲁童装2017春装新款女童连帽中大童儿童套装ZY6062鋐', '0', '1053254_thumb_g_1481679919762.jpg');
INSERT INTO `goods_list` VALUES ('163', '157', '4', '1482162925', '159', '528', '4', '0', '0', '0', '米妮哈鲁童装女童男童套装小童2017春装新款儿童两件套YY6477麥', '0', '1480488391674310666.jpg');
INSERT INTO `goods_list` VALUES ('164', '157', '4', '1482162925', '99', '698', '4', '0', '0', '0', '米妮哈鲁童装2017春装新款男童韩版中大童棒球衫套装YW6069莟', '0', '1052910_thumb_g_1480906040870.jpg');
INSERT INTO `goods_list` VALUES ('165', '157', '4', '1482162925', '169', '788', '3', '0', '0', '0', '米妮哈鲁童装2017春装新款男童中大童卡通印花套装YW6094莟', '0', '1052904_thumb_g_1480900871594.jpg');
INSERT INTO `goods_list` VALUES ('166', '157', '4', '1482162925', '159', '768', '8', '0', '0', '0', '米妮哈鲁童装2017春装新款男童两件套休闲纯棉套装潮YJ6008樂', '0', '1052898_thumb_g_1480403873456.jpg');
INSERT INTO `goods_list` VALUES ('167', '157', '4', '1482162925', '159', '668', '5', '0', '0', '0', '米妮哈鲁童装2017春装新款男童中大童韩版套装两件套ZE4998熣', '0', '1052871_thumb_g_1481683428977.jpg');
INSERT INTO `goods_list` VALUES ('168', '157', '4', '1482162925', '159', '668', '4', '0', '0', '0', '米妮哈鲁童装2017春装新款女童韩版儿童套装两件套YO6418畵', '0', '1480004455486044411.jpg');
INSERT INTO `goods_list` VALUES ('169', '157', '4', '1482162925', '149', '638', '7', '0', '0', '0', '米妮哈鲁童装2017春装新款韩版男童中大童儿童印花套装XC6431妤', '0', '1480004440614165125.jpg');
INSERT INTO `goods_list` VALUES ('170', '157', '4', '1482162925', '159', '758', '8', '0', '0', '0', '米妮哈鲁童装2017春装新款男童中大童韩版条纹套装两件套ZE5076熣', '0', '1480004423319901758.jpg');
INSERT INTO `goods_list` VALUES ('171', '157', '4', '1482162925', '169', '758', '6', '0', '0', '0', '米妮哈鲁童装2017春装新款男童中大童三色拼接印花套装XC6440妤', '0', '1479831646386745785.jpg');
INSERT INTO `goods_list` VALUES ('172', '157', '4', '1482162925', '119', '568', '2', '0', '0', '0', '米妮哈鲁童装2016秋装女童韩版套装中大童儿童加绒两件套ZS4257抍', '0', '1479360489193042303.jpg');
INSERT INTO `goods_list` VALUES ('173', '157', '4', '1482162925', '99', '658', '7', '0', '0', '0', '米妮哈鲁童装男童套装小童2016秋装新款儿童两件套YY5074麥', '0', '1479290347452753900.jpg');
INSERT INTO `goods_list` VALUES ('174', '157', '4', '1482162925', '139', '618', '6', '0', '0', '0', '米妮哈鲁童装女童加绒套装小童2016秋装新款儿童两件套YY5026麥', '0', '1479289709881576499.jpg');
INSERT INTO `goods_list` VALUES ('175', '157', '4', '1482162925', '159', '928', '1', '0', '0', '0', '米妮哈鲁童装2016秋装女童韩版加绒中大童两件上下套装YO4375畵', '0', '1479201529572615216.jpg');
INSERT INTO `goods_list` VALUES ('176', '157', '4', '1482162925', '127', '638', '5', '0', '0', '0', '米妮哈鲁童装2016秋装新款男童休闲印花套装ZG5370樂', '0', '1479198822930444323.jpg');
INSERT INTO `goods_list` VALUES ('177', '157', '4', '1482162925', '129', '668', '2', '0', '0', '0', '米妮哈鲁童装女童加绒套装小童2016秋装新款儿童两件套YY5063麥', '0', '1479191730314006299.jpg');
INSERT INTO `goods_list` VALUES ('178', '157', '4', '1482162925', '209', '888', '7', '0', '0', '0', '米妮哈鲁贝肯熊2017新款春装运动套装长袖两件套YO7025畵', '0', '1052524_thumb_g_1478744742732.jpg');
INSERT INTO `goods_list` VALUES ('179', '157', '4', '1482162925', '189', '818', '2', '0', '0', '0', '米妮哈鲁贝肯熊2017新款春装运动套装长袖两件套YO7024畵1108', '0', '1052496_thumb_g_1478654292715.jpg');
INSERT INTO `goods_list` VALUES ('180', '157', '4', '1482162925', '179', '898', '2', '0', '0', '0', '米妮哈鲁童装2016冬装新款男童休闲套装中大童加绒两件套XC5500樂', '0', '1052398_thumb_g_1478244034350.jpg');
INSERT INTO `goods_list` VALUES ('181', '157', '4', '1482162925', '150', '858', '7', '0', '0', '0', '米妮哈鲁童装2016冬装新款男童中大童儿童长袖加绒套装ZY5839妤', '0', '1052393_thumb_g_1478241432014.jpg');
INSERT INTO `goods_list` VALUES ('182', '157', '4', '1482162925', '160', '768', '5', '0', '0', '0', '米妮哈鲁童装2016冬装新款男童中大童儿童长袖加绒套装XC5491妤', '0', '1052392_thumb_g_1478240812497.jpg');
INSERT INTO `goods_list` VALUES ('183', '157', '4', '1482162925', '119', '598', '10', '0', '0', '0', '米妮哈鲁童装女宝宝婴幼童2016秋装长袖加绒两件套套装YC6018蒨', '0', '1052379_thumb_g_1478224169442.jpg');
INSERT INTO `goods_list` VALUES ('184', '157', '4', '1482162925', '129', '558', '6', '0', '0', '0', '米妮哈鲁童装女童套装小童两件套2016秋冬装儿童两件套YY5317麥', '0', '1478222185876920844.jpg');
INSERT INTO `goods_list` VALUES ('185', '157', '4', '1482162925', '109', '768', '2', '0', '0', '0', '米妮哈鲁童装2016秋装新款女童韩版儿童中大童套装套裙YO4503畵', '0', '1052363_thumb_g_1478161071321.jpg');
INSERT INTO `goods_list` VALUES ('186', '157', '4', '1482162925', '159', '588', '7', '0', '0', '0', '米妮哈鲁童装男宝宝婴幼波点印花连帽两件套2016秋装套装YC5061蒨', '0', '1478156437112335711.jpg');
INSERT INTO `goods_list` VALUES ('187', '166', '4', '1482196907', '69', '328', '547', '0', '0', '0', '女童装藏蓝色韩版蕾丝印花裙裤YO3100【MiniZaru米妮哈鲁 2016春装新品】', '0', '1461572739324813286.jpg');
INSERT INTO `goods_list` VALUES ('188', '166', '4', '1482196907', '79', '258', '524', '0', '0', '0', '米妮哈鲁童装2017春装新款女童长裤中大童儿童打底裤ZG4039燚', '0', '1016807_thumb_g_1480404531272.jpg');
INSERT INTO `goods_list` VALUES ('189', '166', '4', '1482196907', '59', '684', '486', '0', '0', '0', '女童装韩版纯棉宽松印花薄款牛仔短裤ZO3158【Minizaru米妮哈鲁 2016夏装新品】', '0', '1461573028657567577.jpg');
INSERT INTO `goods_list` VALUES ('190', '166', '4', '1482196907', '59', '338', '475', '0', '0', '0', '男女童装韩版纯棉磨破牛仔短裤ZL3058【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459269653043752051.jpg');
INSERT INTO `goods_list` VALUES ('191', '166', '4', '1482196907', '72', '594', '464', '0', '0', '0', '女童 多色时尚韩版休闲纯色修身打底裤ZW3162【Minizaru/米妮哈鲁 2016春装新品】', '0', '1459269700320768917.jpg');
INSERT INTO `goods_list` VALUES ('192', '166', '4', '1482196907', '119', '894', '387', '0', '0', '0', '女童韩版纯色小脚牛仔裤ZW3039【MiniZaru/米妮哈鲁 2016春季新品】', '0', '1459269520172821700.jpg');
INSERT INTO `goods_list` VALUES ('193', '166', '4', '1482196907', '45', '218', '240', '0', '0', '0', '女童装时尚韩版糖果色星星图案潮五分打底裤ZG2077【MiniZaru米妮哈鲁 2016夏季新品】', '0', '1459269507240630541.jpg');
INSERT INTO `goods_list` VALUES ('194', '166', '4', '1482196907', '46', '324', '194', '0', '0', '0', '女童装白色韩版蕾丝花边七分打底裤ZY3084【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459269775379366850.jpg');
INSERT INTO `goods_list` VALUES ('195', '166', '4', '1482196907', '69', '138', '171', '0', '0', '0', '女童绿色装韩版七分印花中腰打底裤ZY2040【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459270006420764949.jpg');
INSERT INTO `goods_list` VALUES ('196', '166', '4', '1482196907', '79', '474', '156', '0', '0', '0', '男女童韩版皮筋腰带条纹五分裤ZW4016【米妮哈鲁 2016夏装新品】', '0', '1459269947118887979.jpg');
INSERT INTO `goods_list` VALUES ('197', '166', '4', '1482196907', '89', '864', '121', '0', '0', '0', '女童荧光花色韩版夏装时尚大气可爱新品荧光大花连体背带短裤ZP3062【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459269879261257692.jpg');
INSERT INTO `goods_list` VALUES ('198', '166', '4', '1482196907', '49', '418', '120', '0', '0', '0', '女童黄色韩版中大童儿童无袖连体裤XC4086【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459268842075945002.jpg');
INSERT INTO `goods_list` VALUES ('199', '166', '4', '1482196907', '110', '428', '114', '0', '0', '0', '女童中大童蓝色韩版蕾丝拼接中腰牛仔短裤XC4033【Minizaru米妮哈鲁 2016夏装新品】', '0', '1459268781609468813.jpg');
INSERT INTO `goods_list` VALUES ('200', '166', '4', '1482196907', '39', '228', '112', '0', '0', '0', '女童浅薄荷色时尚韩版中大童印花五分打底裤ZS4076【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459270283660352960.jpg');
INSERT INTO `goods_list` VALUES ('201', '166', '4', '1482196907', '68', '774', '109', '0', '0', '0', '女童牛仔蓝色韩版夏装新品荷叶边牛仔短裤ZS4120【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459269953638045875.jpg');
INSERT INTO `goods_list` VALUES ('202', '166', '4', '1482196907', '89', '318', '83', '0', '0', '0', '男童红色韩版纯棉条纹印花中腰七分裤ZR4208【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459268677382441271.jpg');
INSERT INTO `goods_list` VALUES ('203', '166', '4', '1482196907', '56', '198', '81', '0', '0', '0', '女童白色时尚韩版夏装新品波点七分打底裤ZS3153【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1461572295873694840.jpg');
INSERT INTO `goods_list` VALUES ('204', '166', '4', '1482196907', '29', '268', '79', '0', '0', '0', '女童韩版新品时尚黑白花纹短裤ZC4041【Minizaru米妮哈鲁 2016夏装新品】', '0', '1459269683126446892.jpg');
INSERT INTO `goods_list` VALUES ('205', '166', '4', '1482196907', '78', '258', '78', '0', '0', '0', '男童装休闲中腰印花条纹口袋胯裆中大童五分裤子ZG4126【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1461572736657086158.jpg');
INSERT INTO `goods_list` VALUES ('206', '166', '4', '1482196907', '39', '368', '78', '0', '0', '0', '女童粉色时尚韩版中小童松紧腰纯棉短裤ZH4064【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459268627340072600.jpg');
INSERT INTO `goods_list` VALUES ('207', '166', '4', '1482196907', '49', '358', '73', '0', '0', '0', '女童蓝色韩版时尚新品纯色中腰棉牛仔哈伦短裤ZW4380【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1461572459714821001.jpg');
INSERT INTO `goods_list` VALUES ('208', '166', '4', '1482196907', '52', '328', '70', '0', '0', '0', '女童花色韩版中大童碎花儿童中腰短裤ZR4047【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1459268828812966705.jpg');
INSERT INTO `goods_list` VALUES ('209', '166', '4', '1482196907', '72', '717', '70', '0', '0', '0', '男童蓝色韩版纯棉儿童牛仔破洞松紧腰带短裤ZR4174【米妮哈鲁2016夏装新品】', '0', '1461573003257555191.jpg');
INSERT INTO `goods_list` VALUES ('210', '166', '4', '1482196907', '59', '218', '66', '0', '0', '0', '女童装阳光橙色韩版中腰立体猫咪图案儿童打底裤ZG3156【MiniZaru米妮哈鲁 2016夏装新品】', '0', '1461573022332113718.jpg');
INSERT INTO `goods_list` VALUES ('211', '166', '4', '1482196907', '69', '354', '64', '0', '0', '0', '女童白色韩版时尚图案长裤打底裤YO4076【MiniZaru米妮哈鲁 2016春装新品】', '0', '1459269661029659124.jpg');
INSERT INTO `goods_list` VALUES ('212', '166', '4', '1482196907', '62', '384', '29', '0', '0', '0', '女童灰色韩版图案撞色贴布图案中腰长裤打底裤ZG4135【Minizaru米妮哈鲁 2016春装新品】', '0', '1459269748465870987.jpg');
INSERT INTO `goods_list` VALUES ('213', '166', '4', '1482196907', '79', '354', '16', '0', '0', '0', '米妮哈鲁童装2016秋装新款女童长裤打底裤儿童裤子XC5018燚', '0', '1029954_thumb_g_1479448840008.jpg');
INSERT INTO `goods_list` VALUES ('214', '166', '4', '1482196907', '149', '658', '16', '0', '0', '0', '米妮哈鲁童装裤子2016秋装女童韩版牛仔裤背带裤ZH4545抍', '0', '1469514395787941901.jpg');
INSERT INTO `goods_list` VALUES ('215', '166', '4', '1482196907', '109', '804', '14', '0', '0', '0', '男童牛仔蓝韩版时尚新品中大童牛仔裤长裤YO5085【MiniZaru米妮哈鲁 2016春装新品】', '0', '1461572956712479587.jpg');
INSERT INTO `goods_list` VALUES ('216', '166', '4', '1482196907', '39', '384', '14', '0', '0', '0', '米妮哈鲁童装2016秋装新款女童韩版打底裤裤子XE6320抍', '0', '1469759283087378285.jpg');
INSERT INTO `goods_list` VALUES ('217', '166', '4', '1482196907', '129', '588', '13', '0', '0', '0', '米妮哈鲁童装2016女童秋新款中大童裤子儿童牛仔裤YI5546', '0', '1046544_thumb_g_1468892778093.jpg');
INSERT INTO `goods_list` VALUES ('218', '166', '4', '1482196907', '89', '458', '12', '0', '0', '0', '男童藏蓝色儿童韩版罗纹收口松紧腰印花长裤ZY4514【MiniZaru米妮哈鲁 2016春装新款】', '0', '1459268517136811066.jpg');
INSERT INTO `goods_list` VALUES ('219', '166', '4', '1482196907', '59', '564', '12', '0', '0', '0', '米妮哈鲁童装2016春装新款女童碎花中大童休闲长裤ZW3048徍', '0', '1462638411980307821.jpg');
INSERT INTO `goods_list` VALUES ('220', '166', '4', '1482196907', '39', '354', '12', '0', '0', '0', '米妮哈鲁童装2016夏装新款女童韩版裤子中大童中裤打底裤YO5232琞', '0', '1459268594549512045.jpg');
INSERT INTO `goods_list` VALUES ('221', '166', '4', '1482196907', '42', '288', '12', '0', '0', '0', '米妮哈鲁童装2016秋装新款女童中大童打底裤儿童长裤XE6214鋐', '0', '1048659_thumb_g_1479192082779.jpg');
INSERT INTO `goods_list` VALUES ('222', '166', '4', '1482196907', '39', '188', '12', '0', '0', '0', '米妮哈鲁童装2016夏装新款女童韩版儿童波点打底裤YO5235畵', '0', '1461572236637204135.jpg');
INSERT INTO `goods_list` VALUES ('223', '166', '4', '1482196907', '119', '774', '12', '0', '0', '0', '米妮哈鲁童装2016秋装新款女童裤子儿童牛仔裤ZG5325燚', '0', '1047256_thumb_g_1469771483452.jpg');
INSERT INTO `goods_list` VALUES ('224', '166', '4', '1482196907', '66', '504', '11', '0', '0', '0', '米妮哈鲁童装2016夏装新款女童韩版短裤中大童裤子短裤ZM5033畵', '0', '1459269656266542742.jpg');
INSERT INTO `goods_list` VALUES ('225', '166', '4', '1482196907', '99', '398', '11', '0', '0', '0', '米妮哈鲁童装2016夏装男童韩版中大童裤子儿童短裤ZE5600熣', '0', '1462638127057658993.jpg');
INSERT INTO `goods_list` VALUES ('226', '166', '4', '1482196907', '80', '594', '11', '0', '0', '0', '米妮哈鲁童装2016夏装新款男童韩版儿童五分裤ZR5104泷0322', '0', '1459268592316760740.jpg');
INSERT INTO `goods_list` VALUES ('227', '213', '7', '1482198545', '279', '2007', '1240', '0', '0', '0', '女装绿色时尚欧美西装领中长款宽松百搭格子毛呢外套WEZ5029【NIBBUNS/尼班诗 2015冬装新品】', '0', '1051006_thumb_G_1480923226894.jpg');
INSERT INTO `goods_list` VALUES ('228', '213', '7', '1482198545', '238', '1958', '1240', '0', '0', '0', '女装潮款黑色时尚欧美连帽貉子毛领收腰棉服WSZ4508【NIBBUNS尼班诗 2016春装新品】', '0', '1049763_thumb_G_1480923262222.jpg');
INSERT INTO `goods_list` VALUES ('229', '213', '7', '1482198545', '279', '1558', '1230', '0', '0', '0', '女装青年藏蓝色欧美时尚休闲H型宽松毛呢外套WEZ5013【NIBBUNS/尼班诗 2015冬季新品】', '0', '1051128_thumb_G_1480923199039.jpg');
INSERT INTO `goods_list` VALUES ('230', '213', '7', '1482198545', '219', '1439', '1215', '0', '0', '0', '女装青年炭灰色欧美冬装新款大翻领长袖短款潮毛呢外套WQZ5062【NIBBUNS尼班诗 2015冬季新品】', '0', '1051198_thumb_G_1480922904759.jpg');
INSERT INTO `goods_list` VALUES ('231', '213', '7', '1482198545', '588', '1518', '1182', '0', '0', '0', '女装绿色冬装新款拼接时尚弧形下摆帅气棉衣女WSZ4804【Nibbuns/尼班诗 2015冬季新品】', '0', '1048960_thumb_G_1480923313693.jpg');
INSERT INTO `goods_list` VALUES ('232', '213', '7', '1482198545', '868', '2288', '1172', '0', '0', '0', '女装黑色欧美冬装新款抽绳设计时尚显瘦轻薄款羽绒服女WSZ4776【Nibbuns/尼班诗 2015冬季新品】', '0', '1459281387364677239.jpg');
INSERT INTO `goods_list` VALUES ('233', '213', '7', '1482198545', '258', '728', '1165', '0', '0', '0', '女装藏蓝色欧美秋装新款宽松潮流显瘦麻花套头毛针织衫女WSZ4747【Nibbuns/尼班诗 2016春季新品】', '0', '1032824_thumb_g_1444443138120.jpg');
INSERT INTO `goods_list` VALUES ('234', '213', '7', '1482198545', '328', '1988', '1135', '0', '0', '0', '女装尼班诗欧美秋装新款PU拼接显瘦不对称拉链毛呢外套女WSZ4874【Nibbuns/尼班诗 2015冬季新品】', '0', '1032811_thumb_g_1444444075278.jpg');
INSERT INTO `goods_list` VALUES ('235', '213', '7', '1482198545', '268', '1758', '1132', '0', '0', '0', '女装尼班诗欧冬装新款挺括气质低西装领毛呢外套女WSZ4864【Nibbuns/尼班诗 2015冬季新品】', '0', '1032810_thumb_g_1444443489645.jpg');
INSERT INTO `goods_list` VALUES ('236', '213', '7', '1482198545', '628', '1858', '1120', '0', '0', '0', '女装尼班诗欧美冬装潮流新款双排扣气质修身显瘦毛呢大衣女WSZ4792【Nibbuns/尼班诗 2015冬季新品】', '0', '1032808_thumb_g_1444443147935.jpg');
INSERT INTO `goods_list` VALUES ('237', '213', '7', '1482198545', '258', '618', '1102', '0', '0', '0', '女装欧美秋季新款套头圆领卡通猫咪宽松长袖卫衣WSZ4839【Nibbuns/尼班诗 2016春季新品】', '0', '1032802_thumb_g_1444441838867.jpg');
INSERT INTO `goods_list` VALUES ('238', '213', '7', '1482198545', '258', '588', '1082', '0', '0', '0', '女装青年黄色欧美套头纯色打底长袖毛针织衫WSZ4798【Nibbuns/尼班诗 2016春季新品】', '0', '1032798_thumb_g_1444441228205.jpg');
INSERT INTO `goods_list` VALUES ('239', '213', '7', '1482198545', '259', '1698', '1077', '0', '0', '0', '女装米白色欧美纯色羊毛中长款H版毛呢外套WBZ4723【NIBBUNS尼班诗 2015冬装新品】', '0', '1032763_thumb_g_1446627934097.jpg');
INSERT INTO `goods_list` VALUES ('240', '213', '7', '1482198545', '728', '1728', '1070', '0', '0', '0', '女装白色欧美长袖格子落肩宽松毛呢外套WBZ4752【NIBBUNS尼班诗 2015冬装新品】', '0', '1032761_thumb_g_1446627123931.jpg');
INSERT INTO `goods_list` VALUES ('241', '213', '7', '1482198545', '249', '1928', '1046', '0', '0', '0', '女装宝蓝色冬女显瘦长袖圆领纯色中长款毛呢外套WBZ4743【NIBBUNS尼班诗 2015冬季新品】', '0', '1033337_thumb_g_1449553304108.jpg');
INSERT INTO `goods_list` VALUES ('242', '213', '7', '1482198545', '309', '1839', '1040', '0', '0', '0', '女装欧美时尚新款毛领中长款立领宽松显瘦拉链羽绒服WQZ4126【NIBBUNS尼班诗 2015冬季新品】', '0', '1032705_thumb_g_1449551880299.jpg');
INSERT INTO `goods_list` VALUES ('243', '213', '7', '1482198545', '241', '1338', '1035', '0', '0', '0', '女装欧美时尚新针织立领长袖时尚保暖修身显瘦棉衣女WQZ5071【NIBBUNS尼班诗 2015冬季新品】', '0', '1032701_thumb_g_1449552705048.jpg');
INSERT INTO `goods_list` VALUES ('244', '213', '7', '1482198545', '239', '1418', '1027', '0', '0', '0', '女装欧美时尚新款街头修身显瘦立领长袖拉链短款羽绒服女WQZ5067【NIBBUNS尼班诗 2015冬季新品】', '0', '1032699_thumb_g_1449552486436.jpg');
INSERT INTO `goods_list` VALUES ('245', '213', '7', '1482198545', '276', '1558', '1024', '0', '0', '0', '女装红色欧美长袖V领中长款H版型毛呢外套WBZ4760【Nibbuns/尼班诗 2015冬季新品】', '0', '1032192_thumb_g_1446626650324.jpg');
INSERT INTO `goods_list` VALUES ('246', '213', '7', '1482198545', '258', '1799', '1021', '0', '0', '0', '女装欧美时尚新款立领长袖宽松显瘦格子毛呢外套WQZ5066【NIBBUNS尼班诗 2015冬季新品】', '0', '1032697_thumb_g_1449552137363.jpg');
INSERT INTO `goods_list` VALUES ('247', '213', '7', '1482198545', '268', '528', '1017', '0', '0', '0', '女装欧美宽松拼接印花长袖卫衣WGA5261【nibbuns/尼班诗 2016春季新品】', '0', '1031940_thumb_g_1442034469216.jpg');
INSERT INTO `goods_list` VALUES ('248', '213', '7', '1482198545', '298', '2099', '1015', '0', '0', '0', '女装欧美时尚双排扣绿色显瘦中长款大衣毛呢外套女WQZ5064【NIBBUNS尼班诗 2015冬季新品】', '0', '1032696_thumb_g_1449552038575.jpg');
INSERT INTO `goods_list` VALUES ('249', '213', '7', '1482198545', '296', '558', '1010', '0', '0', '0', '女装两色欧美时尚新款长袖宽松显瘦圆领套头毛衣WQZ5042【NIBBUNS尼班诗 2015冬季新品】', '0', '1032693_thumb_g_1443507326866.jpg');
INSERT INTO `goods_list` VALUES ('250', '213', '7', '1482198545', '128', '558', '1008', '0', '0', '0', '女装灰绿色欧美时尚新款欧美落肩圆领宽松显瘦长袖套头毛衣女WQZ5041【NIBBUNS尼班诗 2015冬季新品】', '0', '1458675646393595708.jpg');
INSERT INTO `goods_list` VALUES ('251', '213', '7', '1482198545', '128', '518', '1003', '0', '0', '0', '女装白色欧美短款条纹针织衫套头打底圆领针织衫长袖宽松毛衣WEZ5078【NIBBUNS/尼班诗 2016春季新品】', '0', '1459281352119402216.jpg');
INSERT INTO `goods_list` VALUES ('252', '213', '7', '1482198545', '249', '1588', '995', '0', '0', '0', '女士双排扣显瘦中长款格子大衣毛呢外套女WHZ4607【nibbuns/尼班诗 2015冬季新品】', '0', '1032450_thumb_g_1443060569508.jpg');
INSERT INTO `goods_list` VALUES ('253', '213', '7', '1482198545', '219', '1278', '995', '0', '0', '0', '女士A字型斗篷式中长款拼接毛呢外套女WHZ4446【nibbuns/尼班诗 2015冬季新品】', '0', '1032451_thumb_g_1443060718893.jpg');
INSERT INTO `goods_list` VALUES ('254', '213', '7', '1482198545', '109', '788', '995', '0', '0', '0', '女装绿色秋装新款潮流圆领长袖拼接毛针织衫女WSZ4810【NIBBUNS/尼班诗 2016春季新品】', '0', '1459280903387891839.jpg');
INSERT INTO `goods_list` VALUES ('255', '213', '7', '1482198545', '239', '1568', '991', '0', '0', '0', '女士中长款长袖毛圈毛呢外套大衣女WHZ4590【nibbuns/尼班诗 2015冬季新品】', '0', '1032449_thumb_g_1443060382482.jpg');
INSERT INTO `goods_list` VALUES ('256', '213', '7', '1482198545', '278', '568', '990', '0', '0', '0', '女装白色欧美秋装新款圆领镂空毛针织衫WSZ4471【NIBBUNS/尼班诗 2016春季新品】', '0', '1031592_thumb_g_1441872603568.jpg');
INSERT INTO `goods_list` VALUES ('257', '213', '7', '1482198545', '229', '1318', '989', '0', '0', '0', '女装欧美秋装新款宽松双排扣腰带中长款风衣WQZ5058【NIBBUNS/尼班诗 2016春季新品】', '0', '1031588_thumb_g_1441871492874.jpg');
INSERT INTO `goods_list` VALUES ('258', '213', '7', '1482198545', '79', '237', '984', '0', '0', '0', '女装秋短款纯色长袖女款打底衫女秋装女上衣T恤WQZ4135【NIBBUNS/尼班诗 2016春季新品】', '0', '1459280503639333907.jpg');
INSERT INTO `goods_list` VALUES ('259', '213', '7', '1482198545', '658', '1658', '975', '0', '0', '0', '女士中长款长袖立领外套女毛呢外套WHZ4546【nibbuns/尼班诗 2015冬季新品】', '0', '1032446_thumb_g_1443059615909.jpg');
INSERT INTO `goods_list` VALUES ('260', '213', '7', '1482198545', '298', '1968', '972', '0', '0', '0', '女士中长款长袖粗花呢外套女毛呢大衣WHZ4574【nibbuns/尼班诗 2015冬季新品】', '0', '1032445_thumb_g_1443000501795.jpg');
INSERT INTO `goods_list` VALUES ('261', '213', '7', '1482198546', '328', '668', '926', '0', '0', '0', '女装欧美秋装新款宽松显瘦长袖中长款外套WGA5120【nibbuns 2016春季新品】', '0', '1459281370017468555.jpg');
INSERT INTO `goods_list` VALUES ('262', '213', '7', '1482198546', '249', '1718', '920', '0', '0', '0', '女士双排扣百搭显瘦毛呢外套女中长款WHZ4564【nibbuns/尼班诗 2015冬季新品】', '0', '1032434_thumb_g_1442993279548.jpg');
INSERT INTO `goods_list` VALUES ('263', '213', '7', '1482198546', '109', '568', '918', '0', '0', '0', '女装欧美秋装新款街头套头宽松显瘦蝙蝠袖针织衫WGA5103【nibbuns 2016春季新品】', '0', '1031352_thumb_g_1441614836514.jpg');
INSERT INTO `goods_list` VALUES ('264', '213', '7', '1482198546', '258', '1688', '918', '0', '0', '0', '女士显瘦中长款纯色花呢百搭毛呢外套女WHZ4537【nibbuns/尼班诗 2015冬季新品】', '0', '1032433_thumb_g_1442993075555.jpg');
INSERT INTO `goods_list` VALUES ('265', '213', '7', '1482198546', '319', '1618', '901', '0', '0', '0', ' 女装时尚百搭中长款宽松连帽棉衣WEZ5054【Nibbuns/尼班诗 2015冬季新品】', '0', '1459280550746091901.jpg');
INSERT INTO `goods_list` VALUES ('266', '213', '7', '1482198546', '229', '1218', '892', '0', '0', '0', '女装灰色欧美中长落肩袖外套宽松风衣WBZ4709【NIBBUNS/尼班诗 2016春季新品】', '0', '1030352_thumb_g_1440140603390.jpg');
INSERT INTO `goods_list` VALUES ('272', '93', '1', '1482310682', '388', '1958', '0', '0', '0', '0', '韩都衣舍2016韩版女冬宽松中长款羽绒服EJ6040', '0', 'kn9dgW8xfRHYApaG4zJqkgxitg8Etf3V.jpg');
INSERT INTO `goods_list` VALUES ('273', '93', '1', '1482310809', '1058', '2118', '0', '0', '0', '0', '韩都衣舍2016韩版女装冬季新款外套毛领中长款羽绒服GQ5717耒', '0', 'MIdizYzJYBjtXj6E9xDVxQBNLSR3NKuO.jpg');

-- ----------------------------
-- Table structure for goods_orders
-- ----------------------------
DROP TABLE IF EXISTS `goods_orders`;
CREATE TABLE `goods_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `size` tinyint(4) NOT NULL,
  `color` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `num` tinyint(4) NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_num` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `pay` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `deliver` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `order_time` int(11) NOT NULL,
  `order_type` int(11) NOT NULL DEFAULT '0',
  `order_state` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods_orders
-- ----------------------------

-- ----------------------------
-- Table structure for managers
-- ----------------------------
DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/uploads/imgs/default.jpg',
  `auth` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0为普通管理，1为超级管理',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0为禁用1为开启',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of managers
-- ----------------------------
INSERT INTO `managers` VALUES ('1', 'aaaaaa', 'eyJpdiI6InhXak5VaXFqSU02aHhkN2V1bnFVT1E9PSIsInZhbHVlIjoia3JBeWhkWXZCVUpLVlRSY1llb3ladz09IiwibWFjIjoiZTk4M2FmMzU4YzExNjY4NTU1NWJlNTU4OWQ0M2E0MjAxOTM1NWUzMTRjNjIyZGI3ZDkxYWM4YWQ1NGQ3NWY5YiJ9', '/uploads/imgs/default.jpg', '0', '1', '1481805559');
INSERT INTO `managers` VALUES ('2', 'admin', 'eyJpdiI6IklWMDNcL3BKSWJLZFI0UHJMdmk0cDBBPT0iLCJ2YWx1ZSI6ImpIWUpWc1FDU29ZZ3Q2Mld0b1hrR2c9PSIsIm1hYyI6ImIwYWJjNDdjMzRjMTk4ZmY5MDI1YjI1ZDU1ZmQ1YzA2Mjk3MTJkNGUxMjVmYmY0OTkxZmM4Nzg3MTMwMjFiODkifQ==', '/uploads/imgs/default.jpg', '1', '1', '1481805574');
INSERT INTO `managers` VALUES ('3', 'wwwwww', 'eyJpdiI6IkpneHBodFNYRFpTcThjYkhzZWV5YXc9PSIsInZhbHVlIjoieHJ6amY4dWUrWUxIMHIxSzVJdnMwdz09IiwibWFjIjoiMzhiNzExNDM4NDBkNjIyMWMxMDlhMWRhM2ZmNTYwNjg1ZThjODM3YWRjNDlkZWJlYjQwMTY1YmJjYTM1ZTIwYyJ9', '/uploads/imgs/default.jpg', '0', '1', '1481807609');
INSERT INTO `managers` VALUES ('4', '111111', 'eyJpdiI6IjBmaXNOM2NWdDZTSUl6WUZ0NlNwQkE9PSIsInZhbHVlIjoidGFTRU5HQzhYWDJzVE5YaFwvQWRtZFE9PSIsIm1hYyI6ImIyZDdlZmYxZjIzZWMxMDQxZjBkM2ZjNTVhNTk2MDNhYzE1MDM5YmEwMTE2Mjk3Njk1OTI4MzBiYjY1ZjljN2MifQ==', '/uploads/imgs/20161215/ABInWvDeYgUs38CgoLQ8aaAkJ1gEC60G.jpg', '0', '1', '1481813794');
INSERT INTO `managers` VALUES ('6', 'ffffffff', 'eyJpdiI6IlwvSXRWcTV2dFdDN3h2aU9aN2JTMTVBPT0iLCJ2YWx1ZSI6InJQTzJQNlJTWU1qemxYZkhSVWxSUVE9PSIsIm1hYyI6ImI1MGVhMmExYTVhZTkyOTcyNmMwNDQzOWNkYjE3MmFkNThkMTA1OTA0YmU5Y2VjMzJmMGU5NGE2M2M5YTE4M2QifQ==', '/uploads/imgs/default.jpg', '0', '1', '1481813829');
INSERT INTO `managers` VALUES ('7', 'xxxxxx', 'eyJpdiI6IkdLUHVlMGFUV2NFRmw4Z1h4MG92TWc9PSIsInZhbHVlIjoiM1R0eFNmZ25KR25vNkw5Smcrck1hZz09IiwibWFjIjoiOGYyZDQ4YWZkMzA1MWY0ODUwN2RlMTNlMjA1YWQzZTc3Mzk3OWZmNWE0ZDlmYTljODI3YzJjMjdiM2FlNmViYiJ9', '/uploads/imgs/20161215/O6RN4QV6POWm699Pd66JdKo8PCwGIyLX.jpg', '0', '1', '1481813922');

-- ----------------------------
-- Table structure for show_pic
-- ----------------------------
DROP TABLE IF EXISTS `show_pic`;
CREATE TABLE `show_pic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `img_src` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of show_pic
-- ----------------------------

-- ----------------------------
-- Table structure for stock
-- ----------------------------
DROP TABLE IF EXISTS `stock`;
CREATE TABLE `stock` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `stock_num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of stock
-- ----------------------------
INSERT INTO `stock` VALUES ('1', '1', '1', '1', '71');
INSERT INTO `stock` VALUES ('2', '1', '1', '2', '100');
INSERT INTO `stock` VALUES ('3', '1', '1', '3', '41');
INSERT INTO `stock` VALUES ('4', '1', '2', '1', '20');
INSERT INTO `stock` VALUES ('5', '1', '2', '2', '68');
INSERT INTO `stock` VALUES ('6', '1', '2', '3', '22');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `phone` char(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL,
  `rem_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` int(255) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '', '123@qq.com', '1', '1481819903', 'y0UYVqzAC7tf2b4CNVT4k8Cp8P43xcS1ZiioDXms19iwqGzB00', null, '$2y$10$9yifFt.VI4p04Kw6wwfzJ.SHt.6lFHudNsPSMGRwlKaHyeiDO7Mqq');
INSERT INTO `users` VALUES ('2', '', '1@qq.com', '1', '1481854247', 'dQFFdAOMgkM9JUKrb5l6AeVEHHp7LUzJCrvIkM79CNYzZLGvGr', null, '$2y$10$dcp0jBcai6apy6CpzqgwE.Jj/IKo6sLXo.ZgINMHW/iEpWW8HjGp.');
INSERT INTO `users` VALUES ('3', '', '1@qq.com', '1', '1481854380', 'JG27VdDFyD3fYzcUA8P87uNhhpwiyUKx1tchzzyRxAcnIrrBap', null, '$2y$10$OHZxcjM8tz4AyZDKk2/PReD/Wtfbqjnjvl07JGokEdKhfXLa.IFmi');
INSERT INTO `users` VALUES ('4', '', '1@qq.com', '1', '1481855222', 'VdxR7toxsHdWBJ0QRfNPjPssNiEQiwQgDP3Yup7ZJJ11RM5uHt', null, '$2y$10$NAGEZjkWGeixeCdc0JvBH.NGQ/KiD6NCqFL1dPAYRqxXgJWNl5awK');
INSERT INTO `users` VALUES ('5', '', '1@qq.com', '1', '1481855494', 'J9S6sn4XBbMltANOZG0JWa3fA9f0y6yp4oWOSKJrmdgolLhuqA', null, '$2y$10$pwDltDcXqicS1JH7OOqK..KuFchNVbKbfaD3mdiI06x/Q9AxLzbTi');
INSERT INTO `users` VALUES ('6', '', '11@qq.com', '1', '1481855689', 'KTQBMfUWdO3aPTog6S8E1houM2YSHOgu7BMIZnWScAjg9wUuFk', null, '$2y$10$XB89fDRmg6GYFTFaf8Jrr.l/01Gp.xq.gl7PUnHGr3x4iVJ64SJXK');
INSERT INTO `users` VALUES ('7', '', '2@qq.com', '1', '1481860775', 'Pg6zf0pa7uUagF9PMcRIiTdsDG9kzLLRWrrEngmbRRl8CLk5AF', null, '$2y$10$Fv/OwV7NWR1iyc6tqggAjurEvSIEXLBHOyKQQkobslrC7zm7TVgKW');
INSERT INTO `users` VALUES ('8', '', '2@qq.com', '1', '1481860903', 'yStMfSGlvTstAuiXq9bgeta3KICrnFwRbwpBgumIGdDDtwOkrl', null, '$2y$10$Usq1C9ryMispdz8Xh0hmiOIn5dPfM92HIjMBN8Vd76GofgLYBm9Pe');
INSERT INTO `users` VALUES ('9', '', '1@qq.com', '1', '1481980926', 'XEyfe200iS5wyCV8pOxQpoOcQjP850w8YjkDuNvQXIIAFMAfab', null, '$2y$10$bKSjWXhxUEfV1fNQLVeGuOnDzV.p6Rz3NgDjCJ3Th.H.dLX60whLi');
INSERT INTO `users` VALUES ('10', '', '1@qq.com', '1', '1481981364', 'KloBUr7ShLbT0joG23mw14VHbwPKBrNFKxqOM2VjmfBu2cdawj', null, '$2y$10$7uk32/tCRh1GXwE8CQLnfu1amsEmrOe/gq48cA3NDwu/WB0mv4.mK');
INSERT INTO `users` VALUES ('11', '', '1@qq.com', '1', '1481982388', 'WPpaYQRPkh3uKUW3UOBRelA0e3RNeRreuNWfyVatFgthTuYVtg', null, '$2y$10$cBfbXpOr5f7SXdkcuG9RdeUdloZz2BbV9WChrnijRv2TIxOL91B8K');
INSERT INTO `users` VALUES ('12', '', '1@qq.com', '1', '1481982811', 'QWDJO19AvGaHBxrOWs9XhpoUbk2oPBwDeNoQRKt9uVViBs3yF4', null, '$2y$10$9PgOLGIdSwG0gSkTqe8Z0O2roOrVsnacuH6nFdxFUpwcLB0Uh.xI.');
INSERT INTO `users` VALUES ('13', '', '1@qq.com', '1', '1481984365', 'miGXY6ZaVs9Wo7DFG24GW0vOnX6laycK2awM2jVA6c5EVcm0a7', null, '$2y$10$Kv/oj4P66fkSBDgaWAI5kOyeGCDhAfjUs.PQztDB0HF.eS/vKgfv.');
INSERT INTO `users` VALUES ('14', '', '1@qq.com', '1', '1481984704', 'O7XCRVW1zv0fSIEe2aEREcbn04yno1ED97yxbcx1bIGbkPWZhq', null, '$2y$10$u2YVf8tg3bjW.LzcRT0NlOr3jqu6uaSCGqbrfHqXb8Tias64xjmua');
INSERT INTO `users` VALUES ('15', '', '2@qq.com', '1', '1481984766', 'gSoTJXNFyc5UIyTsnzdirpfmSpDxomdyl3e1T2YL7SB4eVdkwK', null, '$2y$10$giauxsUYkCifgLywx8ybb.62XEE0n.znDR3PCr4C6hVgubMyaEntW');
INSERT INTO `users` VALUES ('16', '', '1@qq.com', '1', '1481985014', 'WSBWUqdpDBnaKBj94NXXvzcowZQeR7CF8bHkuZm5ZuVNcDx9RK', null, '$2y$10$yUx7G7R.V6r0dMcjY4fCTeKFYfFmLKsozMmDu935cErCW/o9XTh.a');
INSERT INTO `users` VALUES ('17', '', '1@qq.com', '1', '1481985145', 'STlWxkOUr0jE8jYe4yvJp9LQE9XMzuEQ23gxQtUHjBM4wiAtwI', null, '$2y$10$XR.qD0V71UJ67PCgRPlIW.BVghIFtyL8DCZb851NLQuvuZW2RTS6W');
INSERT INTO `users` VALUES ('18', '', '1@qq.com', '1', '1482043376', 'R16nGYBe2EvhkuA59iVaz7JiP2oE5mlB5qiDYSTrYWPBkh7eJu', null, '$2y$10$zzDhbOGqbdxf/eibi8903OdtFHBYaf3slk7iXDWpwZUAPLntotG2e');
INSERT INTO `users` VALUES ('22', '', '88@qq.com', '0', '1482137632', 'eXss36JPLEC4IcBcEnAoLjo7WALoQ7gKizNh3cec439Aeov21M', '1482137632', '$data->new_password');
INSERT INTO `users` VALUES ('23', '', '556677@qq.com', '0', '1482139790', '9vFFjZaCR2QEg4eiPkIQroEq5759AMRDSnHq2T7jiyrmvFnItm', '1482139790', '$2y$10$q8EknCW25.p5FIareMo8J.rFVgwNPI05PQThUxqlKA05KoLJnENqO');
INSERT INTO `users` VALUES ('24', '', '3366@qq.com', '1', '1482417517', 'a3gFX7AovCAugvBDBzzeADDmWC44egUjUTcqJd4wG8lFjWxi5v', '1482417517', '$2y$10$ccPIkHNw.k.sUJceahBLZOAMpDsUOfoxpdyhxgic2IGxXU37IqHj6');
INSERT INTO `users` VALUES ('25', '', '360314105@qq.com', '0', '1482509031', 'RgzWOrpSk08z79YiBonmJyfC3e73IzRGAVkIejCxMUxT3AwO3D', '1482509031', '$2y$10$UNlY89tihWOc6RCeAVN17OvrF59FqBxrXke4ctmtIFVX1T91j7zVe');

-- ----------------------------
-- Table structure for user_details
-- ----------------------------
DROP TABLE IF EXISTS `user_details`;
CREATE TABLE `user_details` (
  `id` int(15) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(15) unsigned NOT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT '2',
  `real_name` char(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `birth_date` char(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `live_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mem_type` tinyint(4) DEFAULT '0',
  `photo` char(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `mobile_phone` char(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_details
-- ----------------------------
INSERT INTO `user_details` VALUES ('1', '1', '0', '汪世兵', '', '湖北省孝感市孝昌县', '0', '/uploads/imgs/20161222/PWNUKccn8oVTtqj8R6CC3QVuqyLLuxiF.jpg', '15313066678', '360314105@qq.com');
INSERT INTO `user_details` VALUES ('2', '2', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('3', '3', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('4', '4', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('5', '5', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('6', '6', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('7', '7', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('8', '8', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('9', '9', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('10', '10', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('11', '11', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('12', '12', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('13', '13', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('14', '14', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('15', '15', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('16', '16', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('17', '17', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('18', '18', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('19', '19', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('20', '20', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('21', '21', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('22', '22', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('23', '23', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('24', '24', '0', '', '', '', '0', '/uploads/imgs/20161222/JA5SkUgEW0XPV4RTYYBDAQzBk0tBRomY.jpg', '', '3366@qq.com');
INSERT INTO `user_details` VALUES ('25', '25', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('26', '26', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('27', '27', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('28', '28', '0', '', '', '', '0', 'default.jpg', null, null);
INSERT INTO `user_details` VALUES ('29', '29', '0', '', '', '河北省邢台市', '0', 'default.jpg', '', '1291054704@qq.com');

-- ----------------------------
-- Table structure for user_extra
-- ----------------------------
DROP TABLE IF EXISTS `user_extra`;
CREATE TABLE `user_extra` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(32) NOT NULL,
  `expr_val` int(32) NOT NULL DEFAULT '0',
  `score` int(32) NOT NULL DEFAULT '0',
  `coupon` tinyint(32) NOT NULL DEFAULT '0',
  `send_card` tinyint(32) NOT NULL DEFAULT '0',
  `vip` tinyint(1) NOT NULL DEFAULT '0',
  `excge_code` int(32) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_extra
-- ----------------------------
INSERT INTO `user_extra` VALUES ('1', '2', '100', '50', '20', '10', '1', '2345');
INSERT INTO `user_extra` VALUES ('2', '1', '888', '60', '30', '15', '0', '3425');
INSERT INTO `user_extra` VALUES ('5', '4', '90', '60', '30', '15', '0', '3425');
INSERT INTO `user_extra` VALUES ('6', '3', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_extra` VALUES ('7', '22', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_extra` VALUES ('8', '23', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_extra` VALUES ('9', '24', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_extra` VALUES ('10', '25', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_extra` VALUES ('11', '26', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_extra` VALUES ('12', '27', '0', '0', '0', '0', '0', '0');
INSERT INTO `user_extra` VALUES ('13', '28', '0', '0', '0', '0', '0', '0');
