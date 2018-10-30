/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dhimarketing

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-10-31 00:30:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `memberid` varchar(11) NOT NULL,
  `teamid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('ID000002', '1', 'Jamesaaa', 'name1', 'user1', 'user1');
INSERT INTO `member` VALUES ('ID000003', '1', 'Jamesaaa', '1234', 'user1', 'user1');

-- ----------------------------
-- Table structure for member_teamgroup
-- ----------------------------
DROP TABLE IF EXISTS `member_teamgroup`;
CREATE TABLE `member_teamgroup` (
  `ref_teamid` varchar(11) NOT NULL,
  `ref_memberid` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member_teamgroup
-- ----------------------------
INSERT INTO `member_teamgroup` VALUES ('7', 'ID000001');
INSERT INTO `member_teamgroup` VALUES ('7', 'ID000001');
INSERT INTO `member_teamgroup` VALUES ('1', 'ID000002');
INSERT INTO `member_teamgroup` VALUES ('1', 'ID000003');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------

-- ----------------------------
-- Table structure for teamgroup
-- ----------------------------
DROP TABLE IF EXISTS `teamgroup`;
CREATE TABLE `teamgroup` (
  `teamid` int(11) NOT NULL AUTO_INCREMENT,
  `teamname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`teamid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teamgroup
-- ----------------------------
INSERT INTO `teamgroup` VALUES ('1', 'team');
INSERT INTO `teamgroup` VALUES ('2', 'test');
INSERT INTO `teamgroup` VALUES ('6', 'ทดสอบ');
INSERT INTO `teamgroup` VALUES ('7', 'ทดสอบ1');
INSERT INTO `teamgroup` VALUES ('8', 'test');
