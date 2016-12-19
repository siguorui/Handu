/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : handu

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-12-18 22:35:57
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of address
-- ----------------------------

-- ----------------------------
-- Table structure for attr_colors
-- ----------------------------
DROP TABLE IF EXISTS `attr_colors`;
CREATE TABLE `attr_colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `color` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of attr_colors
-- ----------------------------

-- ----------------------------
-- Table structure for attr_sizes
-- ----------------------------
DROP TABLE IF EXISTS `attr_sizes`;
CREATE TABLE `attr_sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `size` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of attr_sizes
-- ----------------------------

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
INSERT INTO `category` VALUES ('1', 'HSTYLE女装', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('2', 'SONEED女装', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('3', 'HSTYLE韩都衣舍男装', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('4', 'MiniZaru童装', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('5', 'nanaday娜娜日记', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('6', 'Forqueens范奎恩', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('7', 'Dequanna迪葵纳', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('8', 'niBBuns尼班诗', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('9', 'R•Maker暗码', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('10', 'Cherry town樱桃小镇', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('11', 'Laura', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('12', 'SOULINE素缕', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('13', 'zigu自古', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('14', 'Garbha果芽', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('15', 'HoneyPig蜜糖猪', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('16', '白鹿语', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('17', '基易', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('18', '哲初', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('19', '池希', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('20', '歩乐斯', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('21', 'Dicovery Expedition', null, null, '0', '0', '0', '1');
INSERT INTO `category` VALUES ('22', 'HSTYLE/韩都衣舍母婴', null, null, '0', '0', '0', '1');
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of feedback
-- ----------------------------

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of friendslinks
-- ----------------------------

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
  `add_time` int(11) NOT NULL,
  `promt_price` int(11) NOT NULL,
  `orign_price` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `send` tinyint(4) NOT NULL DEFAULT '0',
  `show_pos` tinyint(4) NOT NULL DEFAULT '0',
  `activity` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods_list
-- ----------------------------

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of stock
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
INSERT INTO `users` VALUES ('21', '', '1291054704@qq.com', '1', '1482055077', 'iRrQfHu0rz9IZpM8ZN6swlNPc0UogfJlfi0YTx7UcIvyVg05mR', '1482055077', '$2y$10$LQqOL41IZy6IklFtLv4hiu5gf.QECj/95ssGcpz5RB5d2DBN0xTiu');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_details
-- ----------------------------
INSERT INTO `user_details` VALUES ('1', '1', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('2', '2', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('3', '3', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('4', '4', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('5', '5', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('6', '6', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('7', '7', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('8', '8', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('9', '9', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('10', '10', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('11', '11', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('12', '12', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('13', '13', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('14', '14', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('15', '15', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('16', '16', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('17', '17', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('18', '18', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('19', '19', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('20', '20', '0', '', '', '', '0', 'default.jpg');
INSERT INTO `user_details` VALUES ('21', '21', '0', '', '', '', '0', 'default.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_extra
-- ----------------------------
INSERT INTO `user_extra` VALUES ('1', '2', '100', '50', '20', '10', '1', '2345');
INSERT INTO `user_extra` VALUES ('2', '1', '90', '60', '30', '15', '0', '3425');
INSERT INTO `user_extra` VALUES ('5', '4', '90', '60', '30', '15', '0', '3425');
INSERT INTO `user_extra` VALUES ('6', '3', '0', '0', '0', '0', '0', '0');
