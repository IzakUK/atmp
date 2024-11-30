/*
Navicat MySQL Data Transfer

Source Server         : 11
Source Server Version : 50740
Source Host           : localhost:3306
Source Database       : la

Target Server Type    : MYSQL
Target Server Version : 50740
File Encoding         : 65001

Date: 2024-11-26 18:38:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('2', 'admin', '123', '1', '2@qq.com', 'user', '2024-07-01 23:52:44', '2024-07-01 23:52:4');
INSERT INTO `users` VALUES ('26', '444', '111', '2', '4443@123.com', null, null, null);
INSERT INTO `users` VALUES ('25', '333', '111', '2', '333@123.com', null, null, null);
INSERT INTO `users` VALUES ('23', '123', '123', '2', '123', 'user', '2024-07-01 23:52:44', '2024-07-01 23:52:44');
INSERT INTO `users` VALUES ('24', '222222', '123123', '2', 'test@gmail.com', null, '2024-07-02 15:14:25', '2024-07-02 15:14:25');
