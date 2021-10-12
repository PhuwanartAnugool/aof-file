/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : reservecar

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-08-08 12:20:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `event`
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET tis620 NOT NULL COMMENT 'หัวข้อการประชุม',
  `place_seminar` varchar(255) CHARACTER SET tis620 NOT NULL COMMENT 'สถานที่ไปประชุม',
  `create_date` date NOT NULL COMMENT 'วันที่ประชุม',
  `time_goback` int(11) NOT NULL COMMENT 'เวลาไป-กลับ',
  `unit_people` varchar(255) CHARACTER SET tis620 NOT NULL COMMENT 'จำนวนผู้ไปประชุม',
  `date_request` date DEFAULT NULL COMMENT 'วันที่ลงข้อมูลจองรถ',
  `who_request` varchar(255) CHARACTER SET tis620 NOT NULL COMMENT 'ชื่อผู้ลงข้อมูลจองรถ',
  PRIMARY KEY (`id`),
  KEY `time_goback` (`time_goback`),
  KEY `time_goback_2` (`time_goback`),
  CONSTRAINT `cnttime` FOREIGN KEY (`time_goback`) REFERENCES `rsc_time` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES ('1', 'ประชุม 43 แฟ้ม', 'สสจ อุบล', '2016-01-28', '3', '1', '2016-01-26', 'ภูวนารถ อนุกูล');
INSERT INTO `event` VALUES ('2', 'ประชุม HIWIN', 'สสจ.อุบลราชธานี', '2016-11-08', '3', '1', '2016-11-08', 'ภูวนารถ อนุกูล');

-- ----------------------------
-- Table structure for `rsc_time`
-- ----------------------------
DROP TABLE IF EXISTS `rsc_time`;
CREATE TABLE `rsc_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL COMMENT 'เวลา',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rsc_time
-- ----------------------------
INSERT INTO `rsc_time` VALUES ('1', '8.00 - 12.00');
INSERT INTO `rsc_time` VALUES ('2', '12.00 - 16.00');
INSERT INTO `rsc_time` VALUES ('3', '8.00 - 16.00');
