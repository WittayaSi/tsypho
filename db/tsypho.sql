/*
Navicat MySQL Data Transfer

Source Server         : DHDC
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tsypho

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-03-24 11:13:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for express_news
-- ----------------------------
DROP TABLE IF EXISTS `express_news`;
CREATE TABLE `express_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `detial` varchar(1000) NOT NULL,
  `pic_name` varchar(100) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_news_user1_idx` (`user_id`),
  CONSTRAINT `fk_news_user10` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of express_news
-- ----------------------------
INSERT INTO `express_news` VALUES ('1', 'test express news', 'test express newstest express news', '', null, '2016-03-21 09:57:17', '2016-03-21 09:57:17', '2');
INSERT INTO `express_news` VALUES ('2', 'test express news22', 'test express newstest express newstest express news', 'noimage.jpg', null, '2016-03-21 09:59:23', '2016-03-21 10:01:18', '2');
INSERT INTO `express_news` VALUES ('3', 'test express news333', 'test express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express newstest express news', 'logo.png', null, '2016-03-21 10:02:04', '2016-03-21 13:39:00', '2');

-- ----------------------------
-- Table structure for information
-- ----------------------------
DROP TABLE IF EXISTS `information`;
CREATE TABLE `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `detial` varchar(5000) NOT NULL,
  `pic_name` varchar(300) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_information_user_idx` (`user_id`),
  CONSTRAINT `fk_information_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES ('1', 'ประชุมประจำเดือน เมษายน ปี2559  เวลา 09.00 น.', '               ด้วย สำนักงาน ป.ป.ช. ได้ผลิตละครป้องกันและปราบปรามการทุจริตคอร์รัปชั่นและเสริมสร้างจริยธรรมคุณธรรม จำนวน ๑๐ ตอน ความยาวตอนละประมาณ ๒๒ นาที และประกวดสื่อป้องกันการทุจริตในรูปแบบแอนิเมชั่นหรือภาพยนต์สั้น จำนวน ๑๓ ผลงาน ความยาวตอนละประมาณ ๓ นาที', 'img_meeting.jpg', null, '2016-03-18 09:13:14', '2016-03-21 13:26:53', '2');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `detial` varchar(1000) NOT NULL,
  `pic_name` varchar(100) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_news_user1_idx` (`user_id`),
  CONSTRAINT `fk_news_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `prename` enum('ด.ช.','ด.ญ.','น.ส.','นาง','นาย') NOT NULL,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `birth` date NOT NULL,
  `id_card` varchar(13) NOT NULL,
  `blood` enum('A','B','O','AB') DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_personal_user1_idx` (`id`),
  CONSTRAINT `fk_personal_user1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personal
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'admin', '6mTS6EW1ssxBL_RUbnFqzUtm35fzrUaA', '$2y$13$WoR/d1QF3nLPqYMsZ0geFOXvoAwgFybiS5ko81GQDMFTIaKstOT3S', null, 'tehnnn@gmail.com', '1', '10', '1421741593', '1421741593');
INSERT INTO `user` VALUES ('7', 'demo', '1j4s_6JYiJvzPBotHVG8CUzr5L5acB2T', '$2y$13$Rt94WLGcHBm0W5dRkCQlsu5WxJlzbDvGh61283h8cxoEvyJ7j8wKm', null, 'demo@hotmail.com', '99', '10', '1458188562', '1458188562');
