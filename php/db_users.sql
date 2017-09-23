/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_users
Target Host: localhost
Target Database: db_users
Date: 9/23/2017 3:07:31 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for uuser
-- ----------------------------
DROP TABLE IF EXISTS `uuser`;
CREATE TABLE `uuser` (
  `uname` varchar(200) DEFAULT NULL,
  `pword` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `uuser` VALUES ('a', 'a');
INSERT INTO `uuser` VALUES ('a', 'a');
INSERT INTO `uuser` VALUES ('ayyhna', 'ayn');
INSERT INTO `uuser` VALUES ('mae', 'mae');
