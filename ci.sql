/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : ci

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2014-10-28 15:52:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `columns`
-- ----------------------------
DROP TABLE IF EXISTS `columns`;
CREATE TABLE `columns` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `colname` varchar(30) DEFAULT NULL,
  `parentid` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of columns
-- ----------------------------
INSERT INTO `columns` VALUES ('1', '一级栏目', '0');
INSERT INTO `columns` VALUES ('2', '一级栏目', '0');
INSERT INTO `columns` VALUES ('3', '一级栏目', '0');
INSERT INTO `columns` VALUES ('4', '二级栏目', '1');
