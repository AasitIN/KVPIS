/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL DB
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : pis

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 30/12/2019 09:44:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ci_academic
-- ----------------------------
DROP TABLE IF EXISTS `ci_academic`;
CREATE TABLE `ci_academic`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NULL DEFAULT NULL,
  `emp_qualified` tinyint(2) NULL DEFAULT NULL,
  `emp_education` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_qualification_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'NA',
  `emp_name_of_exam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_university_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_course_duration` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_passing_year` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_subject_offered` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `emp_total_marks` decimal(10, 2) NULL DEFAULT NULL,
  `emp_marks_obtained` decimal(10, 2) NULL DEFAULT NULL,
  `emp_marks_percentage` decimal(10, 2) NULL DEFAULT NULL,
  `created_by` int(5) NULL DEFAULT NULL,
  `created_on` datetime(0) NULL DEFAULT NULL,
  `updated_by` int(5) NULL DEFAULT NULL,
  `updated_on` datetime(0) NULL DEFAULT NULL,
  `status` tinyint(2) NULL DEFAULT NULL,
  `academic_isdraft` tinyint(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_academic
-- ----------------------------
INSERT INTO `ci_academic` VALUES (22, 10004, 1, '1', '', 'ciste', 'up board', '12', '2009', 'maths,physics,chemistry,hindi,english', 500.00, 400.00, 80.00, 1, '2019-09-02 00:00:00', 1, '2019-09-02 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (23, 10004, 1, '2', 'NA', 'b.sc.', 'csjmu', '36', '', '', 3000.00, 2345.00, 78.17, 1, '2019-09-02 00:00:00', 1, '2019-09-02 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (25, 100002, 1, '1', '', 'School Certificate Exam', 'ISC', '12', '2000', 'Commerce, Economics, English, Hindi, Maths', 500.00, 400.00, 80.00, 23, '2019-09-04 00:00:00', 23, '2019-09-04 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (26, 100002, 1, '2', 'NA', 'General Degree Course', 'Delhi', '36', '', '', 1000.00, 650.00, 65.00, 23, '2019-09-04 00:00:00', 23, '2019-09-04 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (31, 10000, 1, '1', '', 'ISC', 'CHSE', '24', '1950', 'PHY, CHE, MATH, STAS', 750.00, 650.00, 86.67, 1, '2019-10-10 00:00:00', 1, '2019-10-10 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (32, 10000, 1, '2', 'NA', 'BSC', 'UTKAL', '36', '', '', 1200.00, 900.00, 75.00, 1, '2019-10-10 00:00:00', 1, '2019-10-10 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (33, 10000, 1, '3', '', 'MSC', 'SOA', '36', '1958', 'PHY, CHE, MATH, COMP', 1000.00, 800.00, 80.00, 1, '2019-10-10 00:00:00', 1, '2019-10-10 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (34, 10000, 1, '6', 'Computer', 'PGDIT', 'NIIT', '12', '2010', 'C, JAVA, MYSQL', 500.00, 450.00, 90.00, 1, '2019-10-10 00:00:00', 1, '2019-10-10 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (38, 2000, 1, '7', '', 'VII', 'SCHOOL', '12', '2000', 'MATH, ENG, HINDI', 300.00, 210.00, 70.00, 1, '2019-11-04 00:00:00', 1, '2019-11-04 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (42, 100054, 1, '8', '', 'gfh', 'dfyhtfu', '12', '1965', 'phy,gfgh', 400.00, 300.00, 75.00, 49, '2019-11-29 00:00:00', 49, '2019-11-29 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (45, 100020, 2, '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 49, '2019-11-29 00:00:00', 49, '2019-11-29 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (49, 100034, 2, '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 49, '2019-11-29 00:00:00', 49, '2019-11-29 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (51, 100053, 2, '', '', '', '', '', '', '', 0.00, 0.00, 0.00, 49, '2019-11-29 00:00:00', 49, '2019-11-29 00:00:00', 1, 1);
INSERT INTO `ci_academic` VALUES (56, 100011, 1, '7', '', 'VIII', 'DELHI BOARD', '12', '1962', 'HINDI, ENGLISH', 200.00, 175.00, 87.50, 40, '2019-12-02 00:00:00', 40, '2019-12-02 00:00:00', 1, 1);

-- ----------------------------
-- Table structure for ci_academic_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_academic_details`;
CREATE TABLE `ci_academic_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `academic_id` int(11) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `sessions_year` int(5) NULL DEFAULT NULL,
  `passing_year` int(10) NULL DEFAULT NULL,
  `sub_one` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sub_one_full_marks` decimal(10, 2) NULL DEFAULT NULL,
  `sub_one_marks` decimal(10, 2) NULL DEFAULT NULL,
  `sub_two` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sub_two_full_marks` decimal(10, 2) NULL DEFAULT NULL,
  `sub_two_marks` decimal(10, 2) NULL DEFAULT NULL,
  `sub_three` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sub_three_full_marks` decimal(10, 2) NULL DEFAULT NULL,
  `sub_three_marks` decimal(10, 2) NULL DEFAULT NULL,
  `sub_four` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sub_four_full_marks` decimal(10, 2) NULL DEFAULT NULL,
  `sub_four_marks` decimal(10, 2) NULL DEFAULT NULL,
  `status` tinyint(4) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_academic_details
-- ----------------------------
INSERT INTO `ci_academic_details` VALUES (25, 23, 10004, 1, 2010, 'physics', 100.00, 67.00, 'chemistry', 100.00, 80.00, 'computer application', 100.00, 75.00, '', 0.00, 0.00, 1);
INSERT INTO `ci_academic_details` VALUES (26, 23, 10004, 2, 2011, 'physics', 100.00, 70.00, 'chemistry', 100.00, 75.00, 'computer application', 100.00, 68.00, '', 0.00, 0.00, 1);
INSERT INTO `ci_academic_details` VALUES (27, 23, 10004, 3, 2018, 'physics', 100.00, 85.00, 'chemistry', 100.00, 40.00, 'computers', 100.00, 75.00, '', 0.00, 0.00, 1);
INSERT INTO `ci_academic_details` VALUES (28, 26, 100002, 1, 2001, 'Commerce', 100.00, 70.00, 'Economics', 100.00, 75.00, 'Maths', 100.00, 65.00, '', 0.00, 0.00, 1);
INSERT INTO `ci_academic_details` VALUES (29, 26, 100002, 2, 2002, 'Commerce', 100.00, 65.00, 'Economics', 100.00, 70.00, 'Maths', 100.00, 65.00, '', 0.00, 0.00, 1);
INSERT INTO `ci_academic_details` VALUES (30, 26, 100002, 3, 2003, 'Commerce', 100.00, 75.00, 'Economics', 100.00, 80.00, 'Maths', 100.00, 70.00, '', 0.00, 0.00, 1);
INSERT INTO `ci_academic_details` VALUES (34, 32, 10000, 1, 1951, 'PHY', 100.00, 78.00, 'CHE', 100.00, 67.00, 'MATH', 100.00, 54.00, 'BOTANY', 100.00, 65.00, 1);
INSERT INTO `ci_academic_details` VALUES (35, 32, 10000, 2, 1952, 'PHY', 100.00, 87.00, 'CHE', 100.00, 67.00, 'MATH', 100.00, 87.00, 'ZOLOGY', 100.00, 85.00, 1);
INSERT INTO `ci_academic_details` VALUES (36, 32, 10000, 3, 1953, 'PHY', 100.00, 85.00, 'CHE', 100.00, 89.00, 'MATH', 100.00, 56.00, 'PRACTICAL', 200.00, 75.00, 1);

-- ----------------------------
-- Table structure for ci_all_service_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_all_service_details`;
CREATE TABLE `ci_all_service_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `all_designationid` int(11) NOT NULL,
  `all_subjectid` int(11) NOT NULL DEFAULT 0,
  `all_place` int(11) NOT NULL,
  `all_unit` int(11) NOT NULL,
  `all_section` int(11) NOT NULL DEFAULT 0,
  `all_school` int(11) NOT NULL DEFAULT 0,
  `all_kvcode` int(11) NOT NULL DEFAULT 0,
  `all_shift` int(11) NOT NULL DEFAULT 0,
  `all_station` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `all_fromdate` date NOT NULL,
  `all_todate` date NOT NULL,
  `all_appoint_trail` tinyint(4) NOT NULL,
  `all_trailsdate` date NULL DEFAULT NULL,
  `all_trailedate` date NULL DEFAULT NULL,
  `all_regulardate` date NULL DEFAULT NULL,
  `transfer_ground` tinyint(4) NOT NULL,
  `all_panel_year` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 55 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_all_service_details
-- ----------------------------
INSERT INTO `ci_all_service_details` VALUES (2, 100001, 11, 0, 2, 5, 4, 0, 0, 0, '', '2019-09-01', '2019-09-03', 2, '2019-09-01', '2019-09-05', '0000-00-00', 1, '1973', 23, 0, '2019-09-06 11:45:20', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (6, 10002, 6, 11, 5, 17, 0, 61, 1008, 1, '', '2016-03-01', '2019-09-11', 2, '0000-00-00', '0000-00-00', '0000-00-00', 5, '2016', 1, 0, '2019-09-11 09:36:55', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (7, 10003, 8, 10, 5, 17, 0, 61, 1008, 1, '', '2016-03-01', '2019-09-11', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '2016', 1, 0, '2019-09-11 09:40:50', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (10, 100003, 6, 2, 5, 24, 0, 436, 1437, 1, '', '2016-03-01', '2019-09-11', 2, '0000-00-00', '0000-00-00', '0000-00-00', 3, '2016', 1, 0, '2019-09-11 09:51:29', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (11, 100004, 8, 11, 5, 24, 0, 436, 1437, 1, '', '2016-03-01', '2019-09-11', 2, '0000-00-00', '0000-00-00', '0000-00-00', 3, '2016', 1, 0, '2019-09-11 09:55:29', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (13, 100005, 35, 0, 4, 4, 0, 0, 1919, 0, '', '2016-03-01', '2019-09-11', 2, '1970-01-01', '1970-01-01', '1970-01-01', 3, '2016', 1, 0, '2019-09-11 15:35:50', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (15, 100006, 6, 11, 5, 17, 0, 38, 2194, 1, '', '2018-01-01', '2019-09-23', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '2018', 39, 0, '2019-09-23 16:51:10', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (16, 100007, 44, 0, 3, 19, 0, 0, 1901, 0, '', '2013-09-04', '2017-09-04', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 36, 0, '2019-09-23 16:58:42', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (18, 100008, 8, 10, 5, 17, 0, 38, 2194, 1, 'Hard', '2018-06-08', '2019-09-23', 2, '1970-01-01', '1970-01-01', '1970-01-01', 3, '2018', 39, 0, '2019-09-23 17:14:19', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (19, 100009, 6, 4, 5, 18, 0, 96, 2301, 1, '', '2014-09-03', '2016-09-07', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 36, 0, '2019-09-23 17:14:29', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (20, 100009, 1, 0, 5, 18, 0, 85, 1054, 2, '', '2016-09-08', '2019-09-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 4, '', 36, 0, '2019-09-23 17:14:29', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (22, 100011, 8, 10, 5, 17, 0, 39, 1033, 1, 'Hard', '2018-02-01', '2019-09-23', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '2018', 40, 0, '2019-09-23 17:32:42', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (23, 100012, 7, 18, 5, 29, 0, 655, 1570, 1, '', '2015-09-02', '2019-09-06', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 41, 0, '2019-09-23 17:37:16', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (24, 100013, 29, 0, 4, 4, 0, 0, 1919, 0, '', '2017-09-06', '2019-09-05', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 41, 0, '2019-09-23 17:43:31', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (25, 100014, 36, 0, 5, 18, 0, 96, 2301, 2, '', '2018-09-12', '2019-09-06', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '', 37, 0, '2019-09-24 10:34:20', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (26, 100015, 23, 0, 3, 23, 0, 0, 1906, 0, '', '2015-09-04', '2019-09-06', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 37, 0, '2019-09-24 11:04:30', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (27, 100016, 6, 2, 5, 16, 0, 2, 1357, 1, 'Hard', '2015-09-11', '2019-09-05', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 44, 0, '2019-09-24 11:19:07', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (28, 100017, 7, 1, 5, 35, 0, 933, 1097, 1, '', '2012-09-03', '2018-09-07', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 44, 0, '2019-09-24 11:48:01', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (29, 100018, 7, 4, 5, 32, 0, 826, 1237, 1, '', '2005-09-07', '2015-09-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 45, 0, '2019-09-24 12:07:25', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (30, 100019, 8, 12, 5, 17, 0, 42, 1002, 1, '', '2015-09-15', '2018-09-06', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 45, 0, '2019-09-24 12:17:11', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (31, 100020, 6, 16, 5, 32, 0, 827, 1238, 1, '', '2010-09-01', '2019-09-04', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 49, 0, '2019-09-24 12:40:41', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (32, 100021, 22, 0, 2, 5, 0, 0, 1917, 0, '', '2004-09-08', '2012-09-04', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 5, 0, '2019-09-24 13:08:13', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (33, 100022, 44, 0, 2, 5, 0, 0, 1917, 0, '', '2019-09-03', '2019-09-06', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 36, 0, '2019-09-24 15:05:21', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (34, 100023, 44, 0, 5, 18, 0, 86, 1051, 1, '', '2019-09-24', '2019-09-24', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 38, 0, '2019-09-24 15:27:00', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (35, 100024, 8, 14, 2, 7, 0, 0, 1898, 0, '', '2019-09-03', '2019-09-18', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 47, 0, '2019-09-24 15:50:06', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (36, 100025, 27, 0, 3, 34, 0, 0, 1913, 0, '', '2019-09-02', '2019-09-13', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 47, 0, '2019-09-24 16:06:34', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (37, 100026, 8, 10, 5, 19, 0, 135, 1087, 1, '', '2019-09-10', '2019-09-14', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 42, 0, '2019-09-24 17:06:44', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (46, 10005, 8, 2, 5, 19, 0, 178, 1093, 1, '', '2016-03-01', '2016-03-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 3, '2016', 1, 0, '2019-10-24 11:44:39', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (48, 10004, 6, 3, 5, 20, 0, 240, 2219, 1, '', '2016-03-01', '2019-09-11', 2, '1970-01-01', '1970-01-01', '1970-01-01', 3, '2016', 1, 0, '2019-10-24 13:02:10', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (51, 2000, 6, 10, 5, 20, 0, 200, 2229, 1, '', '2019-09-01', '2019-09-23', 1, '2019-09-23', '2019-09-23', '2019-09-23', 1, '1980', 1, 0, '2019-11-04 12:34:57', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (52, 10000, 6, 11, 5, 16, 0, 30, 1706, 1, '', '2015-09-01', '2018-12-31', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '2018', 1, 0, '2019-11-08 16:14:02', '0000-00-00 00:00:00');
INSERT INTO `ci_all_service_details` VALUES (54, 100010, 6, 11, 5, 17, 0, 39, 1033, 1, 'Hard', '2018-01-15', '2019-09-23', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '2018', 40, 0, '2019-11-15 11:52:11', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_awards_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_awards_details`;
CREATE TABLE `ci_awards_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `is_award_received` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `award` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `other_award_name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `year_of_acheivement` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `in_designation` int(11) NULL DEFAULT NULL,
  `award_brief` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_awards_details
-- ----------------------------
INSERT INTO `ci_awards_details` VALUES (3, 10001, '1', 'KVS National Incentive Award', 'NULL', '1990', NULL, 'dfgdgdf', '2019-07-24 14:10:30', '2019-07-24 14:10:30');
INSERT INTO `ci_awards_details` VALUES (4, 10001, '1', 'Other', 'fgfg cvxvcxcv', '1994', NULL, 'dsfds vdfgd fgdgfgf', '2019-07-24 14:10:30', '2019-07-24 14:10:30');
INSERT INTO `ci_awards_details` VALUES (6, 10004, '1', 'KVS National Incentive Award', 'NULL', '2009', NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '2019-09-02 12:34:12', '2019-09-02 12:51:13');
INSERT INTO `ci_awards_details` VALUES (7, 10004, '1', 'National Award', 'NULL', '2016', NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '2019-09-02 12:34:12', '2019-09-02 12:50:59');
INSERT INTO `ci_awards_details` VALUES (8, 100002, '1', 'National Award', 'NULL', '2008', NULL, 'gfhgkj', '2019-09-04 12:12:53', '2019-09-04 12:12:53');
INSERT INTO `ci_awards_details` VALUES (9, 100002, '1', 'KVS Regional Incentive Award', 'NULL', '2014', NULL, 'hhgjhk', '2019-09-04 12:12:54', '2019-09-04 12:12:54');
INSERT INTO `ci_awards_details` VALUES (11, 2000, '1', 'KVS National Incentive Award', 'NULL', '1975', 22, 'Test Data', '2019-11-04 14:36:45', '2019-11-04 14:36:45');
INSERT INTO `ci_awards_details` VALUES (12, 2000, '1', 'KVS Regional Incentive Award', 'NULL', '1991', 19, 'test', '2019-11-04 14:36:46', '2019-11-04 14:36:46');
INSERT INTO `ci_awards_details` VALUES (13, 10000, '1', 'KVS Regional Incentive Award', 'NULL', '1988', 6, 'TEST', '2019-11-08 16:21:34', '2019-11-08 16:21:34');

-- ----------------------------
-- Table structure for ci_category
-- ----------------------------
DROP TABLE IF EXISTS `ci_category`;
CREATE TABLE `ci_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_category
-- ----------------------------
INSERT INTO `ci_category` VALUES (1, 'GEN', '2019-05-01 12:10:10', '2019-05-01 12:10:10');
INSERT INTO `ci_category` VALUES (2, 'OBC', '2019-05-01 12:10:10', '2019-05-01 12:10:10');
INSERT INTO `ci_category` VALUES (3, 'SC', '2019-05-01 12:10:10', '2019-05-01 12:10:10');
INSERT INTO `ci_category` VALUES (4, 'ST', '2019-05-01 12:10:10', '2019-05-01 12:10:10');

-- ----------------------------
-- Table structure for ci_compliance
-- ----------------------------
DROP TABLE IF EXISTS `ci_compliance`;
CREATE TABLE `ci_compliance`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `submittedby` bigint(20) NOT NULL,
  `role_id` tinyint(2) NOT NULL,
  `kvcode` int(10) NOT NULL,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_compliance
-- ----------------------------
INSERT INTO `ci_compliance` VALUES (1, 42, 5, 1357, '2019-11-18 10:17:26');
INSERT INTO `ci_compliance` VALUES (2, 43, 5, 1707, '2019-11-18 10:20:09');
INSERT INTO `ci_compliance` VALUES (3, 22, 3, 2268, '2019-11-18 10:21:15');
INSERT INTO `ci_compliance` VALUES (5, 28, 4, 1919, '2019-11-18 12:37:44');
INSERT INTO `ci_compliance` VALUES (6, 85, 2, 1917, '2019-11-18 12:38:40');
INSERT INTO `ci_compliance` VALUES (7, 86, 2, 1917, '2019-12-06 15:51:04');
INSERT INTO `ci_compliance` VALUES (8, 40, 5, 1033, '2019-12-06 15:51:04');
INSERT INTO `ci_compliance` VALUES (9, 42, 5, 1357, '2019-12-05 14:53:33');

-- ----------------------------
-- Table structure for ci_degree_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_degree_details`;
CREATE TABLE `ci_degree_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `academic_id` int(11) NOT NULL,
  `degree_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `degree_date` date NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ci_desciplinary_service_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_desciplinary_service_details`;
CREATE TABLE `ci_desciplinary_service_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `is_desciplinary_case` tinyint(4) NOT NULL,
  `disciplinary_action_name` tinyint(4) NULL DEFAULT NULL,
  `from_date` date NULL DEFAULT NULL,
  `to_date` date NULL DEFAULT NULL,
  `is_dies_non` tinyint(4) NOT NULL,
  `dies_non_start_date` date NULL DEFAULT NULL,
  `dies_non_end_date` date NULL DEFAULT NULL,
  `created` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 74 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_desciplinary_service_details
-- ----------------------------
INSERT INTO `ci_desciplinary_service_details` VALUES (13, 10001, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-08-26 14:52:10', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (19, 100001, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-06 11:45:20', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (23, 10002, 1, 1, '2019-08-02', '2019-08-07', 1, '2019-08-07', '2019-08-13', '2019-09-11 09:36:56', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (24, 10002, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-11 09:36:56', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (25, 10003, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-11 09:40:51', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (28, 100003, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-11 09:51:29', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (29, 100004, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-11 09:55:29', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (31, 100005, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-11 15:35:50', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (34, 100006, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-23 16:51:11', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (35, 100007, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-23 16:58:43', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (37, 100008, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-23 17:14:20', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (38, 100009, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-23 17:14:29', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (40, 100011, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-23 17:32:43', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (41, 100012, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-23 17:37:17', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (42, 100013, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-23 17:43:31', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (43, 100014, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 10:34:20', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (44, 100015, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 11:04:30', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (45, 100016, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 11:19:07', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (46, 100017, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 11:48:01', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (47, 100018, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 12:07:25', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (48, 100019, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 12:17:11', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (49, 100020, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 12:40:41', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (50, 100021, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 13:08:14', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (51, 100022, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 15:05:21', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (52, 100023, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 15:27:01', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (53, 100024, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 15:50:07', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (54, 100025, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 16:06:34', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (55, 100026, 2, 0, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-09-24 17:06:44', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (63, 10005, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-10-24 11:44:39', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (65, 10004, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-10-24 13:02:10', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (68, 2000, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-11-04 12:34:57', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (69, 100002, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-11-07 15:48:22', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (70, 10000, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-11-08 16:14:03', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (72, 100010, 2, 2, '0000-00-00', '0000-00-00', 2, '0000-00-00', '0000-00-00', '2019-11-15 11:52:11', '0000-00-00 00:00:00');
INSERT INTO `ci_desciplinary_service_details` VALUES (73, 100000, 2, 2, '1970-01-01', '1970-01-01', 2, '1970-01-01', '1970-01-01', '2019-11-20 09:55:25', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_designation_category
-- ----------------------------
DROP TABLE IF EXISTS `ci_designation_category`;
CREATE TABLE `ci_designation_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_designation_category
-- ----------------------------
INSERT INTO `ci_designation_category` VALUES (1, 'Teaching', '2019-05-22 11:37:23', '0000-00-00 00:00:00');
INSERT INTO `ci_designation_category` VALUES (2, 'Non Teaching', '2019-05-22 11:37:23', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_designations
-- ----------------------------
DROP TABLE IF EXISTS `ci_designations`;
CREATE TABLE `ci_designations`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `code` int(2) NULL DEFAULT NULL,
  `hq` tinyint(8) NULL DEFAULT NULL,
  `ro` tinyint(8) NULL DEFAULT NULL,
  `zt` tinyint(8) NULL DEFAULT NULL,
  `kv` tinyint(8) NULL DEFAULT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 56 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_designations
-- ----------------------------
INSERT INTO `ci_designations` VALUES (1, 1, 'Principal', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:10');
INSERT INTO `ci_designations` VALUES (2, 1, 'Vice Principal', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (3, 1, 'Head Master', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (4, 1, 'Librarian', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (5, 1, 'Yoga Teacher', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (6, 1, 'Post Graduate Teacher', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (7, 1, 'Primary Teacher', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (8, 1, 'Trained Graduate Teacher', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (9, 2, 'Commissioner', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (10, 2, 'Addl. Commissioner (Admn.)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (11, 2, 'Addl. Commissioner (Acad)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (12, 2, 'Joint Commissioner(Admn)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (13, 2, 'Joint Commissioner(Acad)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (14, 2, 'Joint Commissioner(Pers)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (15, 2, 'Joint Commissioner(Trg)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (16, 2, 'Joint Commissioner(Fin)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (17, 2, 'Supdt. Engineer', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (18, 2, 'Deputy Commissioner', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (19, 2, 'Deputy Commissioner(Acad)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (20, 2, 'Deputy Commissioner(Fin)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (21, 2, 'Deputy Commissioner (Admn)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (22, 2, 'Assistant Commissioner (Admn)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (23, 2, 'Assistant Commissioner (Fin)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (24, 2, 'Assistant Commissioner(Acad)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (25, 2, 'Assistant Commissioner', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (26, 2, 'Executive Engineer', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (27, 2, 'Assistant Education Officer', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (28, 2, 'Administrative Officer', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (29, 2, 'Programmer', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (30, 2, 'Finance Officer', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (31, 2, 'Section Officer', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (32, 2, 'Technical Officer', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:11');
INSERT INTO `ci_designations` VALUES (33, 2, 'Assistant Director (OL)', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (34, 2, 'Statistical Officer', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (35, 2, 'Assistant Editor', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (36, 2, 'Private Secretary', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (37, 2, 'Assistant Section Officer', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-11-20 14:52:15');
INSERT INTO `ci_designations` VALUES (38, 2, 'Senior Secretariat Assistant', NULL, 1, 1, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (39, 2, 'Sub-staff', NULL, 1, 1, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (40, 2, 'Hindi Translator', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (41, 2, 'Stenographer Grade II', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (42, 2, 'Stenographer Grade I', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (43, 2, 'Lab Assistant', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (44, 2, 'Junior Secretariat Assistant', NULL, 1, 1, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (45, 2, 'Staff Car Driver', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (46, 2, 'Nurse', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (47, 2, 'Director', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (48, 2, 'Lift Man', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (49, 2, 'Proof Reader', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (50, 2, 'Sr. Hindi Translator', NULL, 1, 1, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (51, 2, 'Aaya', NULL, 1, 0, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (52, 2, 'Daftary', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (53, 2, 'Electrician', NULL, 1, 0, 1, 0, '2019-10-01 12:05:02', '2019-10-09 12:23:12');
INSERT INTO `ci_designations` VALUES (54, 2, 'Other', NULL, 1, 1, 1, 1, '2019-10-01 12:05:02', '2019-10-09 12:16:09');
INSERT INTO `ci_designations` VALUES (55, 2, 'SUB STAFF', NULL, 1, 1, 1, NULL, '2019-10-17 11:55:57', '2019-10-17 11:56:14');

-- ----------------------------
-- Table structure for ci_emp_map
-- ----------------------------
DROP TABLE IF EXISTS `ci_emp_map`;
CREATE TABLE `ci_emp_map`  (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `role_desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` tinyint(2) NOT NULL,
  `parent_id` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`sid`, `role_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_emp_map
-- ----------------------------
INSERT INTO `ci_emp_map` VALUES (1, 1, 'SUPER ADMIN', 1, '0', 1);
INSERT INTO `ci_emp_map` VALUES (2, 2, 'KVS HEADQUARTER', 1, '0', 1);
INSERT INTO `ci_emp_map` VALUES (3, 3, 'REGIONAL OFFICE', 1, '0', 1);
INSERT INTO `ci_emp_map` VALUES (4, 4, 'ZIET', 1, '0', 1);
INSERT INTO `ci_emp_map` VALUES (5, 5, 'KENDRIYA VIDYALAYA', 1, '0', 1);
INSERT INTO `ci_emp_map` VALUES (6, 6, 'EMPLOYEE', 1, '0', 1);
INSERT INTO `ci_emp_map` VALUES (7, 7, 'PERSONNEL', 2, '0', 1);
INSERT INTO `ci_emp_map` VALUES (8, 8, 'ADMINISTARTOR', 2, '0', 1);
INSERT INTO `ci_emp_map` VALUES (9, 9, 'TRAINING', 2, '0', 1);
INSERT INTO `ci_emp_map` VALUES (10, 10, 'ACADEMIC', 2, '0', 1);
INSERT INTO `ci_emp_map` VALUES (11, 11, 'FINANCE', 2, '0', 1);
INSERT INTO `ci_emp_map` VALUES (12, 12, 'PRINCIPAL', 2, '0', 1);
INSERT INTO `ci_emp_map` VALUES (13, 13, 'WORKS', 2, '0', 1);
INSERT INTO `ci_emp_map` VALUES (14, 14, 'DEPT', 2, '0', 1);
INSERT INTO `ci_emp_map` VALUES (15, 15, 'SCHOOL', 2, '0', 1);

-- ----------------------------
-- Table structure for ci_emp_transfer_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_emp_transfer_details`;
CREATE TABLE `ci_emp_transfer_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `present_place` int(11) NOT NULL,
  `present_unit` int(11) NOT NULL,
  `present_section` int(11) NOT NULL DEFAULT 0,
  `present_school` int(11) NOT NULL DEFAULT 0,
  `present_designation` int(11) NOT NULL,
  `present_subject` int(11) NOT NULL DEFAULT 0,
  `present_kvcode` int(11) NOT NULL,
  `transfer_place` int(11) NOT NULL,
  `transfer_unit` int(11) NOT NULL,
  `transfer_section` int(11) NOT NULL DEFAULT 0,
  `transfer_school` int(11) NOT NULL DEFAULT 0,
  `transfer_designation` int(11) NOT NULL,
  `transfer_subject` int(11) NOT NULL DEFAULT 0,
  `transfer_kvcode` int(11) NOT NULL,
  `transfer_orderno` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `transfer_date` date NOT NULL,
  `relieving_orderno` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `relieving_date` date NOT NULL,
  `transfer_status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'INPROCESS',
  `transfer_remarks` text CHARACTER SET latin5 COLLATE latin5_turkish_ci NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_by` int(11) NULL DEFAULT NULL,
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `in_process` tinyint(255) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_emp_transfer_details
-- ----------------------------
INSERT INTO `ci_emp_transfer_details` VALUES (1, 100029, 5, 16, 0, 2, 6, 11, 1357, 5, 17, 0, 39, 6, 11, 1033, 'KVS/13122019/ORD/1B03C0F0', '2019-12-13', 'KVS/13122019/REL/1B03C0F0', '2019-12-17', '2', 'Approved', 42, '2019-12-13 15:46:55', 40, '2019-12-13 15:49:46', 2);
INSERT INTO `ci_emp_transfer_details` VALUES (2, 100036, 5, 17, 0, 39, 6, 11, 1033, 5, 16, 0, 2, 6, 11, 1357, 'KVS/13122019/ORD/14E4F45B', '2019-12-13', 'KVS/13122019/REL/14E4F45B', '2019-12-16', '3', 'The place is not vaccant', 40, '2019-12-13 15:52:46', 42, '2019-12-13 15:53:53', 1);

-- ----------------------------
-- Table structure for ci_employee_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_employee_details`;
CREATE TABLE `ci_employee_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_code` int(11) NOT NULL,
  `emp_type` int(11) NULL DEFAULT NULL COMMENT '1-New Employee 2-Existing Employee',
  `emp_title` int(11) NOT NULL,
  `emp_first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_middle_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_father_title` tinyint(1) NULL DEFAULT NULL,
  `emp_father_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_mother_title` tinyint(1) NULL DEFAULT NULL,
  `emp_mother_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_photo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'NA',
  `emp_gender` int(11) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_marital_status` int(10) NOT NULL,
  `emp_maiden_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'NA',
  `emp_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_mobile_no` bigint(10) NOT NULL,
  `emp_landline_no` bigint(10) NULL DEFAULT NULL,
  `emp_aadhar_no` bigint(12) NULL DEFAULT 0,
  `emp_pancard_no` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_passport_no` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_blood_group` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_postaladdress` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_pincode` int(10) NOT NULL,
  `emp_hometown` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_single_parent` tinyint(3) NOT NULL,
  `emp_surviving_child` int(10) NOT NULL,
  `emp_identity_mark` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_religion` int(11) NOT NULL,
  `emp_other_religion` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'NA',
  `emp_category` int(11) NOT NULL,
  `emp_cat_certificate_no` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'NA',
  `emp_cat_issuing_date` date NULL DEFAULT NULL,
  `emp_cat_issuing_authority` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'NA',
  `emp_physical_abled` int(2) NOT NULL,
  `emp_ph_category` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_ph_othername` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_ph_percent` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_ph_certificate_no` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_ph_issuing_date` date NULL DEFAULT NULL,
  `emp_ph_issuing_authority` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_gpfcpfnps` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emp_gpfcpfnpsnumber` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `emp_createdby` int(11) NOT NULL,
  `emp_createdon` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `emp_updatedby` int(11) NOT NULL DEFAULT 0,
  `emp_updatedon` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `emp_isdraft` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0-unsaved, 1- saved',
  `emp_istransffered` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `emp_code`(`emp_code`) USING BTREE,
  UNIQUE INDEX `emp_mobile_no`(`emp_mobile_no`, `emp_email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 88 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_employee_details
-- ----------------------------
INSERT INTO `ci_employee_details` VALUES (1, 10000, 2, 1, 'Rajesh', 'Rajesh', 'Rai', 1, 'Father', 1, 'Mother', '2799a2c07b5283f8809bcb95337ba552.png', 1, '1990-09-19', 1, '', 'rajesh@kvs.in', 9874568525, 9874568528, 123456789119, 'KSUDS3574G', '1234567890123456', '1', 'Communication Address', 201201, 'Home Town', 2, 2, 'Birth Mark', 4, 'Sai Ram', 2, 'OBC010101', '2000-02-20', 'OBC Authority Of India', 1, '1', '', '55', 'PH10101', '2003-03-20', 'PH Authority Of India', '1', 'dfdf424', 45, '2019-07-05 00:00:00', 43, '2019-11-19 13:06:53', 1, 0);
INSERT INTO `ci_employee_details` VALUES (2, 10001, 2, 2, 'Anu', '', 'Chaudhary', NULL, 'Father', NULL, 'Mother', '7529500fcf9ca05e12e02fe56c66d613.PNG', 2, '2019-07-01', 1, 'dfgdafg', 'anu@kvs.in', 4564364575, 7456456345, 532453453245, '2345324523', '1234567890123456', '7', 'cvnxfcvn  ghfgh', 564564, 'dfbzcfb cfgdf', 1, 4, 'fgzdfgd', 4, '', 1, '', '1970-01-01', '', 2, '', NULL, '', '', '1970-01-01', '', NULL, '', 85, '2019-07-05 00:00:00', 85, '2019-11-20 12:15:16', 1, 0);
INSERT INTO `ci_employee_details` VALUES (3, 2000, 2, 2, 'Sandhya', 'Sandhya', 'Roy', 1, 'Father', 1, 'Mother', '807aa6c21a75776ab7afb81d1e94de82.PNG', 1, '2019-07-02', 2, '', 'sandhya@kvs.in', 4353464362, 4564564564, 645645646436, 'NASDF4578K', '1234567890123456', '1', 'Noida, Sector - 15', 456436, '6dfgdfgdfg', 1, 5, 'fghdfgh tyst', 4, '', 1, '', '1970-01-01', '', 2, '', '', '', '', '1970-01-01', '', '1', '12354555', 85, '2019-07-05 00:00:00', 85, '2019-11-20 12:15:16', 1, 0);
INSERT INTO `ci_employee_details` VALUES (4, 10002, 2, 2, 'Barsha', '', 'Priyadarshini', NULL, 'Father', NULL, 'Mother', '0affa1eea1bc86efc2714dea63d9c282.PNG', 2, '2019-07-01', 3, '', 'barsha@kvs.in', 9879876454, 9874567894, 456456436346, '4564356344', '1234567890123456', '2', 'dsfdsf', 454646, 'hgsdfhsd', 1, 4, 'sdfasd dfgsdfg', 1, '', 1, '', '1970-01-01', '', 2, '', NULL, '', '', '1970-01-01', '', NULL, '', 39, '2019-07-05 00:00:00', 39, '2019-11-19 12:33:14', 1, 0);
INSERT INTO `ci_employee_details` VALUES (10, 10003, 2, 1, 'Mohan', 'Mohan', 'Kumar', NULL, 'Father', NULL, 'Mother', '63349db5126c38bdfdf786205b531e70.png', 1, '2005-08-10', 1, '', 'mohan@kvs.in', 9898787876, 7456456345, 123124234235, '3245324534', '1234567890123456', '1', 'Sample Data', 564564, 'dfbzcfb cfgdf', 1, 0, 'Birth', 3, '', 1, '', '1970-01-01', '', 2, '', NULL, '', '', '1970-01-01', '', NULL, '', 39, '2019-08-30 00:00:00', 39, '2019-11-19 12:33:14', 1, 0);
INSERT INTO `ci_employee_details` VALUES (11, 10004, 2, 1, 'Ram', 'kumar', 'sahu', NULL, 'ram prasad', NULL, 'leela sahu', '704b1f9dc50cb37eb03e079ea87189bf.jpg', 1, '1990-03-06', 1, '', 'asit@gmail.com', 4564655766, 0, 343243535353, '343fd34333', '', '1', 'h-45 sector 12', 201303, 'mirpur', 1, 0, 'mole on chin', 3, '', 2, '343543545553', '2006-09-01', 'mirpur authority', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 1, '2019-09-02 00:00:00', 1, '2019-09-03 11:32:23', 1, 0);
INSERT INTO `ci_employee_details` VALUES (12, 10005, 2, 1, 'Sidharth', '', 'Kumar', NULL, 'Father', NULL, 'Mother', '0b15636387509668f4751cb62528bad6.png', 1, '1985-03-01', 1, '', 'sid@gmail.com', 9856856956, 5647891592, 987589654856, 'SDHEU6559F', '', '4', 'Delhi -6', 110016, 'Delhi', 2, 2, 'Birth Mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 38, '2019-09-03 00:00:00', 19, '2019-09-24 14:52:45', 1, 0);
INSERT INTO `ci_employee_details` VALUES (13, 100000, 1, 1, 'Vinay', '', 'Kumar', 1, 'Father', 1, 'Mother', 'f2622f6f8f0d3f6148cc79278011c276.png', 1, '1980-09-01', 1, '', 'vinay@gmail.com', 5467434631, 0, 748596859674, 'BSTD78458G', '', '4', 'Vasant kunj , Delhi -110101', 110101, 'Delhi', 2, 0, 'Birth Mark', 3, '', 1, '', '1970-01-01', '', 2, '', '', '', '', '1970-01-01', '', '', '', 40, '2019-09-03 00:00:00', 40, '2019-11-19 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (14, 100001, 1, 1, 'Madan', '', 'Mohan', NULL, 'Father', NULL, 'Mother', '8200da5fd43e21b4ef96278feeabd1ae.png', 1, '1990-09-01', 1, '', 'mm@kvs.org.in', 7894587685, 0, 784578968758, 'GSJHR6745F', '', '1', 'KV Agra, UP-201010', 201010, 'Agra', 2, 0, 'Birth Mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 85, '2019-09-04 00:00:00', 85, '2019-11-29 09:40:17', 1, 0);
INSERT INTO `ci_employee_details` VALUES (15, 100002, 1, 1, 'Naveen', '', 'Sehgal', NULL, 'Sh. Prakash Sehgal', NULL, 'Smt. Ritu Sehgal', 'c45030c6984b25a7591dc7408058c777.jpg', 1, '1980-03-04', 1, '', 'naveen.sehgal@gmail.com', 9876543267, 119887879, 986093567789, 'ADFGR5678S', '3567890064567899', '2', 'Delhi', 100114, 'Delhi', 2, 2, 'Cut mark on right hand', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 43, '2019-09-04 00:00:00', 43, '2019-11-19 12:42:45', 1, 0);
INSERT INTO `ci_employee_details` VALUES (16, 100003, 1, 1, 'Sagar', '', 'Sangram', NULL, 'Father', NULL, 'Mother', '4396619e82cf0029d630aa9b9fc76c68.png', 1, '1990-01-01', 1, '', 'sagar@kvrkp.org.in', 4578698754, 0, 789458747859, 'FERSO3475D', '', '1', 'RK Puram, Delhi', 110012, 'RK Puram', 1, 0, 'Birth Mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 26, '2019-09-05 00:00:00', 26, '2019-09-05 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (17, 100004, 1, 1, 'Kamal', '', 'Kumar', NULL, 'father', NULL, 'mother', '8b00c38b72b73fc093931abbe87b35ca.png', 1, '1980-04-01', 1, '', 'kamal@kvs.org.in', 9748576215, 0, 786245987456, 'JUERS8675F', '', '2', 'Agra, Agra', 273458, 'AGRA', 1, 1, 'Mole', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 26, '2019-09-06 00:00:00', 26, '2019-11-19 11:32:51', 1, 0);
INSERT INTO `ci_employee_details` VALUES (18, 100005, 1, 1, 'Pradeep', '', 'Kumar', NULL, 'Father', NULL, 'Mother', 'a3bd4daadb0e7fc92994029725516ef5.png', 1, '2000-04-07', 1, '', 'pradeep@kvs.org.in', 4785968515, 0, 124567894563, 'KUFEP5634D', '', '1', 'Mumbai', 253641, 'Mumbai', 1, 0, 'Marks', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 28, '2019-09-06 00:00:00', 28, '2019-09-06 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (19, 100006, 1, 1, 'Manoj', 'Kumar', 'Sinha', NULL, 'Father', NULL, 'Mother', 'e547d025966b37ba3374b8f4bac402ce.png', 1, '1990-01-01', 1, '', 'manoj@kvs.org.in', 7485964152, 0, 457898565632, 'SHGDR5846G', '', '1', 'Ahmedabad, Darjeepur', 758974, 'AHMEDABAD', 2, 0, 'Birth Mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 39, '2019-09-23 00:00:00', 39, '2019-09-23 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (20, 100007, 1, 1, 'Vijay', '', 'Kumar', NULL, 'Ramesh Kumar', NULL, 'Nitu Kumari', '95f2a2eb14cfe6327838858d8b065c47.jpg', 1, '1972-09-05', 1, '', 'vijay09@kvs.gov.in', 9876543677, 0, 123456789087, 'ACBKH6789G', '', '2', '56/12 B Okhla Phase II.', 110046, 'Bihar', 2, 1, 'Mole on right hand', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 36, '2019-09-23 00:00:00', 36, '2019-09-23 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (21, 100008, 1, 3, 'KANIKA', '', 'JAIN', NULL, 'The Father', NULL, 'The Mother', '0f6100ee0d5a6ecfd105e311218a7d48.png', 2, '1985-03-21', 2, '', 'kanika@kvs.nic.in', 9861098601, 0, 456825897458, 'KANIK8675J', '', '4', 'Ahemedabad', 101546, 'Ahemedabad', 2, 0, 'Mole on left chin', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 39, '2019-09-23 00:00:00', 39, '2019-09-23 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (22, 100009, 1, 2, 'Ritu', '', 'Shukla', NULL, 'Mukesh Shukla', NULL, 'Arya Shukla', '4d92ca8274dd163d4477addbfe03d1fc.jpg', 2, '1988-02-01', 1, 'Ritu Kapoor', 'ritu458@kvs.gov.in', 8745682945, 0, 123456789843, 'ASDFD8768D', '', '4', 'Jamnagar ahmedabad', 821289, 'Uttar Pradesh', 2, 0, 'Cut mark on left elbow', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 36, '2019-09-23 00:00:00', 36, '2019-09-23 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (23, 100010, 1, 2, 'ALKA', '', 'JAIN', 0, 'The Father', 1, 'The Mother', 'd426c1c9cac1a3065f2f0937b21479e8.png', 2, '1990-02-14', 1, 'ALKA GUPTA', 'alka@kvs.nic.in', 7458968412, 0, 0, 'ALKMN6754A', '', '1', 'Ahmedabad, Naliya', 759864, 'Naliya', 1, 8, 'Birth Mark', 3, '', 1, '', '1970-01-01', '', 2, '', '', '', '', '1970-01-01', '', '', '', 40, '2019-09-23 00:00:00', 40, '2019-12-02 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (24, 100011, 1, 1, 'Aman', '', 'Verma', 1, 'Damodar', 1, 'Kanaklata', '8d5de6c64364c354087aad44706e7cae.png', 1, '1990-01-01', 1, '', 'Aman@kvs.nic.in', 7485961526, 5345345345, 456456457356, 'AMANV5647A', '', '3', 'Naliya, Ahmedabad', 478256, 'Naliya', 2, 0, 'Cut on Eyebrow', 3, '', 1, '', '1970-01-01', '', 2, '', '', '', '', '1970-01-01', '', '', '', 40, '2019-09-23 00:00:00', 40, '2019-12-02 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (25, 100012, 1, 3, 'Guriya', '', 'Thakur', NULL, 'Rahul Thakur', NULL, 'Purnima Thakur', '0312792a12ff60f43d5611ae5847ef64.jpg', 2, '1990-07-19', 2, '', 'gudiya.thakur@kvs.gov.in', 4567892345, 0, 456798631287, 'ASRTG4567C', '', '2', 'Samana', 567889, 'MP', 2, 0, 'cut mark on ring finger', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 41, '2019-09-23 00:00:00', 41, '2019-09-23 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (26, 100013, 1, 1, 'Asit', '', 'Singh', NULL, 'Rohit Singh', NULL, 'Neelam Singh', '0d7ae8ff0ce286ee43ba646dd42a8c62.jpg', 1, '1987-09-07', 1, '', 'dev.asit@kvs.gov.in', 9800763478, 0, 654612349876, 'ASDFT5678E', '', '3', 'Bhubeneswar', 678896, 'Bhubeneswar', 2, 0, 'cut on right hand', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 41, '2019-09-23 00:00:00', 41, '2019-09-23 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (27, 100014, 1, 3, 'Tripti', '', 'Tiwari', NULL, 'Rishi Tiwari', NULL, 'Madhu Tiwari', '0877add7a8280c22279d2727beb5ee08.jpg', 2, '1996-04-09', 2, '', 'tripti.rani@gmail.com', 9845765322, 0, 543289651296, 'BYJER6578H', '', '2', 'Banglore', 667899, 'Kolkata', 2, 0, 'Mole on face under nose', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 37, '2019-09-24 00:00:00', 37, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (28, 100015, 1, 1, 'Gaurav', '', 'Sharma', NULL, 'Rajesh Sharma', NULL, 'Meena Sharma', 'e39f3fe380b367f3074c8299682dd7cd.jpg', 1, '1980-09-03', 1, '', 'sharma.gaurav@gmail.com', 7310774453, 0, 876534679654, 'DEPUY4568G', '', '3', 'Uttarpradesh', 765896, 'Uttarpradesh', 2, 2, 'Cut mark on left leg', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 37, '2019-09-24 00:00:00', 37, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (29, 100016, 1, 2, 'Sonam', '', 'Mishra', NULL, 'Mukul Mishra', NULL, 'Kriti Mishra', '022f7c79879b1f29d5b31b4846e2800b.jpg', 2, '1975-09-11', 1, 'Sonam Mishra', 'sonam2mishra@kvs.gov.in', 9876543217, 0, 234509875432, 'UTYRE6712V', '', '2', 'eyuinhjhjkk', 234577, 'UttarPradesh', 2, 2, 'cut on right hand', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 44, '2019-09-24 00:00:00', 44, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (30, 100017, 1, 1, 'Abhishek', '', 'Gupta', NULL, 'Mukul Gupta', NULL, 'Meena Devi', 'd609cae9486068c248b754e4379a8ef2.jpg', 1, '1985-03-05', 1, '', 'abhi.768@gmail.com', 7689432579, 0, 354657676879, 'ASDFL5667F', '', '2', 'Madhya Pradesh', 465768, 'Madhya Pradesh', 2, 1, 'hgkjol', 3, '', 3, '657658768', '2005-09-20', 'fgfhygujyi', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 44, '2019-09-24 00:00:00', 44, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (31, 100018, 1, 1, 'Pradeep', '', 'Kumar', NULL, 'Rohit  Kumar', NULL, 'Rani  Devi', 'f5f39d503c62c939d103923269027c28.jpg', 1, '1975-09-10', 1, '', 'pradeep.kumar@gmail.com', 9874246788, 0, 543657687989, 'RETUF3567J', '', '2', 'Bihar', 546567, 'bihar', 2, 2, 'mole on right leg', 3, '', 2, '5879807556', '1995-09-20', 'afreytrytyu', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 45, '2019-09-24 00:00:00', 45, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (32, 100019, 1, 2, 'Anuradha', '', 'Jain', NULL, 'Kartik Jain', NULL, 'Shilpa Jain', 'dc38740e48475d72d32d242945f20844.jpg', 2, '1986-01-01', 1, 'Anuradha Jain', 'anu.65767@kvs.gov.in', 9823576889, 0, 436547658768, 'SDFGY6567F', '', '1', 'Gujrat', 676676, 'Gujrat', 2, 1, 'Mole gh', 5, '', 2, 'hgjhjhkjh', '2019-09-05', 'fdghfjhg', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 45, '2019-09-24 00:00:00', 45, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (33, 100020, 1, 1, 'Prakash', 'Singh', 'Solanki', NULL, 'Arnav Singh Solanki', NULL, 'Ritu Singh', '7e4cc40c3c6c905b83f2985210d8e300.jpg', 1, '1980-09-05', 1, '', 'praksh.singh@kvs.gov.in', 5467898989, 0, 876769879879, 'FGTRH7778G', '', '2', 'Indore,MP', 657868, 'Indore,MP', 2, 2, 'gssdhjadhad', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 49, '2019-09-24 00:00:00', 49, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (34, 100021, 1, 1, 'Kamal', 'Kant', 'Pandey', NULL, 'Kedarnath Pandey', NULL, 'Shruti Pandey', '60ee8421b09e79539c832be59296b788.jpg', 1, '1978-09-01', 1, '', 'kamalkant@kvs.gov.in', 5678946789, 0, 658768979890, 'YUTRU6578G', '', '3', 'Kolkata', 567887, 'Uttar Pradesh', 2, 3, 'Mole on right hand', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 5, '2019-09-24 00:00:00', 5, '2019-11-22 17:26:40', 1, 0);
INSERT INTO `ci_employee_details` VALUES (35, 100022, 1, 2, 'Vandana', '', 'Palawat', NULL, 'Rinkul Palawat', NULL, 'Veena Palawat', 'b8d8369109aaa860336bf44d4511e9bf.jpg', 2, '1988-09-08', 2, '', 'vandana.palawat@gmail.com', 9768541230, 0, 623524876349, 'AGBUR7578Y', '', '2', 'Jaipur', 787987, 'Jaipur', 2, 0, 'tfytfytftfuyguyyy', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 38, '2019-09-24 00:00:00', 38, '2019-09-24 15:10:34', 1, 0);
INSERT INTO `ci_employee_details` VALUES (36, 100023, 1, 1, 'Rohan', '', 'Singh', NULL, 'Ramnath Singh', NULL, 'Sita Singh', '76c69aaa8a092b8a05e433651d13ec94.jpg', 1, '1989-09-05', 1, '', 'rohankumar@kvs.gov.in', 9876234567, 0, 627218732873, 'KASDG6217G', '', '4', 'rtuyissddg', 578980, 'Bihar', 2, 1, 'jhqSJHJDSLKKJ', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 38, '2019-09-24 00:00:00', 38, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (37, 100024, 1, 3, 'Priti', '', 'Pandey', NULL, 'Kamla Kant Pandey', NULL, 'Madhuri Pandey', 'e444a87c99208ce6374f0c9fabfd2dbd.jpg', 2, '1992-07-19', 2, '', 'priti1992@gmail.com', 9876756768, 0, 766879890767, 'ASERT7546F', '', '3', 'Kolkata', 878895, 'yyuiuiuiug', 2, 0, 'tyuy hgjj uhykiu', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 47, '2019-09-24 00:00:00', 47, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (38, 100025, 1, 1, 'Pramod', '', 'Sharma', NULL, 'Prem Sharma', NULL, 'Rina Sharma', '81bb282fab60cc5858ab6eea7853c769.jpg', 1, '2019-09-02', 2, '', 'hgsdgawdhs@jehr4wr.fdhes', 1293729854, 0, 889787657676, 'AASADS7877', '', '7', 'qevwjhrger', 374385, 'srgdthryujit', 2, 0, 'hgeqhwhhu', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 38, '2019-09-24 00:00:00', 38, '2019-10-01 12:56:04', 1, 0);
INSERT INTO `ci_employee_details` VALUES (39, 100026, 1, 1, 'Ashish', '', 'Singh', NULL, 'Indrajeet Singh', NULL, 'Kusum Singh', '9c5cd269b22bc7dabae0a1aa1fffe319.jpg', 1, '2019-09-05', 2, '', 'asgihsj@hok.bjj', 5465578767, 0, 768689798798, 'ASDFG5456G', '', '2', 'Howrah', 711112, 'Bihar', 2, 0, 'gfjuhkj', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 42, '2019-09-24 00:00:00', 42, '2019-09-24 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (40, 100027, 1, 1, 'Praveen', '', 'Shukla', NULL, 'Rajesh Shukla', NULL, 'Sapna Shukla', '588526295ba79c5a13ff1b83441726d1.png', 1, '1972-09-20', 1, '', 'pravenn@kvs.gov.in', 9345721984, 0, 273623487349, 'AERTY7654R', '', '2', 'Bihar', 738237, 'Bihar', 2, 0, 'hagsdjshfkesf', 3, '', 1, '', '1970-01-01', '', 2, '', NULL, '', '', '1970-01-01', '', NULL, '', 40, '2019-09-25 00:00:00', 40, '2019-11-29 09:40:18', 1, 0);
INSERT INTO `ci_employee_details` VALUES (41, 100028, 1, 1, 'Akash', '', 'Jain', NULL, 'The Father', NULL, 'The Mother', 'fb8c4d86baa8c92f0c05206faf9ad0bd.png', 1, '2019-09-01', 1, '', 'aksha@kvs.nic.in', 7485967265, 0, 457894563223, '4258976458', '', '1', 'Naliya', 785986, 'Naliya', 2, 0, 'Birth Mark', 3, '', 1, '', '1970-01-01', '', 2, '', NULL, '', '', '1970-01-01', '', '', '', 26, '2019-09-25 00:00:00', 40, '2019-11-20 14:28:21', 1, 0);
INSERT INTO `ci_employee_details` VALUES (42, 100029, 1, 3, 'Alka', '', '', NULL, 'Father', NULL, 'Mother', '372806270b2513f1a1fb0b5ff58732af.PNG', 2, '1990-09-01', 2, '', 'alka@kvs.nic.in', 7485986856, 0, 456789652456, 'BSWOU5435F', '', '1', 'Naliya, Ahmedabad', 753159, 'Nilya', 2, 0, 'Birth mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 40, '2019-09-25 00:00:00', 49, '2019-12-13 15:49:46', 1, 0);
INSERT INTO `ci_employee_details` VALUES (43, 100030, 1, 1, 'Ritesh', '', 'Sharma', NULL, 'Hitesh Sharma', NULL, 'Ritu Sharma', 'f986ade18a0f22dca95c726e52abcf19.jpg', 1, '1987-09-02', 1, '', 'ritesh.986@gmail.com', 9087655456, 0, 768798798790, 'CVGFT6788H', '', '2', 'tfyuyusiyadud ydst', 768978, 'Bihar', 2, 1, 'gqasjhgsuwhyu', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 28, '2019-09-25 00:00:00', 28, '2019-09-25 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (44, 100031, 1, 1, 'Alok', '', '', NULL, 'The Father', NULL, 'The Mother', '11356a39d363d86373bd38e74fb14b4f.png', 1, '1990-01-01', 1, '', 'alok@ziet.nic.in', 7485961589, 0, 748596854698, 'GASHR8756F', '', '1', 'ZIET, Mumbai', 201245, 'Panduv,Mumbai', 2, 0, 'Birth Mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 28, '2019-09-25 00:00:00', 28, '2019-09-25 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (45, 100032, 1, 2, 'Ritu', '', 'Verma', NULL, 'Vijay verma', NULL, 'Sunita Verma', '94cdc08ca8a209aaa48def62385bc1cf.jpg', 2, '1988-09-15', 2, '', 'ritu.verma@gmail.com', 9876345678, 0, 265387265487, 'ASFDG6786G', '', '2', 'Bihar', 276387, 'Bihar', 2, 0, 'geyduresi', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 28, '2019-09-25 00:00:00', 28, '2019-09-25 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (46, 100033, 1, 1, 'Sai', '', 'Shanker', NULL, 'The Father', NULL, 'The Mother', 'e156ab43f18f77caea348935df1d4fd9.png', 1, '2000-02-01', 2, '', 'shanker@kvs.nic.in', 7568948759, 1111111111, 415789654845, 'SYUFG7654D', '', '1', 'Ahmedabad', 789456, 'Naliya', 2, 0, 'Birth Mark', 3, '', 1, '', '1970-01-01', '', 2, '', NULL, '', '', '1970-01-01', '', NULL, '', 40, '2019-09-26 00:00:00', 40, '2019-09-27 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (47, 100034, 1, 1, 'Basant', '', 'Singh', NULL, 'Ramesh Singh', NULL, 'Ruchi Singh', '13589a9c2b102866fdf4ecd171b10de2.jpg', 1, '1970-09-02', 1, '', 'basant768@gmail.com', 8765923657, 0, 879232843985, 'AERTY7288U', '', '2', 'Uttarakhand', 127838, 'Uttarakhand', 2, 2, 'Mole on right hand', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 49, '2019-09-27 00:00:00', 49, '2019-09-27 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (48, 100035, 1, 1, 'Ramesh', '', 'Kumar', NULL, 'Prakash Kumar', NULL, 'Neha Devi', 'e2ff87cbf73fe56a70fababb4401faa2.jpg', 1, '1982-09-08', 1, '', 'ramesh768@gmail.com', 8765923633, 0, 232435465465, 'ASERT7537D', '', '2', 'Uttarakhand', 127838, 'Uttarakhand', 2, 1, 'Black spot on leg', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 49, '2019-09-27 00:00:00', 49, '2019-11-29 09:40:18', 1, 0);
INSERT INTO `ci_employee_details` VALUES (49, 100036, 1, 2, 'Neha', '', 'Kapoor', NULL, 'Rahul Kapoor', NULL, 'Rinki Kapoor', '251624d26b8e5ebc8c274e600a765d70.jpg', 2, '1986-09-10', 1, 'Neha Singh', 'neha12@gmail.com', 6132727643, 0, 438763487359, 'DFHUJ6789H', '', '4', 'djheskfrje', 732824, 'jhjdsfhkjf', 2, 1, 'djheskjhkesjfr', 3, '', 1, '', '1970-01-01', '', 2, '', NULL, '', '', '1970-01-01', '', NULL, '', 40, '2019-09-27 00:00:00', 40, '2019-12-13 15:53:54', 1, 3);
INSERT INTO `ci_employee_details` VALUES (50, 100037, 1, 2, 'Priya', '', 'Pandey', NULL, 'Kamla Kant Pandey', NULL, 'Madhuri Pandey', '4909d77288506500d5c4189a70b26b11.png', 2, '1990-09-12', 1, 'Priya Pandey', 'priya@gmail.com', 9234348744, 0, 657687687698, 'ASFGH6789R', '', '3', 'Kolkata', 676897, 'kolkata', 2, 0, 'mole', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 49, '2019-09-27 00:00:00', 49, '2019-09-27 14:16:50', 1, 0);
INSERT INTO `ci_employee_details` VALUES (51, 100038, 1, 1, 'Ashish', 'Kumar', 'Sahoo', NULL, 'The Father', NULL, 'The Mother', '006612e3b07aa6745f2dc999f02429ac.png', 1, '1988-09-08', 1, '', 'asit.dev@gmail.com', 9764356879, 0, 546587689898, 'AFFGH7654D', '', '2', 'Bhubeneswar', 678796, 'Bhubeneswar', 2, 0, 'Cut mark on right hand', 3, '', 1, '', '1970-01-01', '', 2, '', NULL, '', '', '1970-01-01', '', NULL, '', 85, '2019-09-27 00:00:00', 85, '2019-11-29 09:40:18', 1, 0);
INSERT INTO `ci_employee_details` VALUES (52, 100039, 1, 1, 'Vikrant', '', 'Tiwari', NULL, 'Sashi Tiwari', NULL, 'Shusma Tiwari', 'e6d7ba92d2dced0e95baaad50ff20f35.jpg', 1, '1985-09-26', 1, '', 'vikrant@gmail.com', 8986754345, 0, 657788561898, 'DFHJY5678R', '', '2', 'Delhi', 687989, 'Delhi', 2, 1, 'hgafshagska', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 28, '2019-09-27 00:00:00', 28, '2019-09-27 14:33:27', 1, 0);
INSERT INTO `ci_employee_details` VALUES (53, 100040, 1, 1, 'Sidharth', '', 'Kumar', NULL, 'The Father', NULL, 'The Mother', '35d10f54e2b77c7d702cc79fd565fd7f.jpg', 1, '1985-09-01', 1, '', 'sidharth@gmail.com', 7589485615, 0, 425987689865, 'HFRTE8865D', '', '1', 'Delhi', 201011, 'Delhi', 2, 0, 'Birth Mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 31, '2019-09-30 00:00:00', 31, '2019-09-30 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (54, 100041, 1, 1, 'Sachin', '', 'Kumar', NULL, 'The Father', NULL, 'The Mother', 'd7456f0f7b9630eb13475dc68d52f74b.png', 1, '1990-02-14', 1, '', 'sachin@kvs.nic.in', 4587896585, 0, 456123789159, 'NSURP7645D', '', '4', 'Noida', 201301, 'Noida', 2, 2, 'Birth Mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 31, '2019-09-30 00:00:00', 31, '2019-10-22 14:02:16', 1, 0);
INSERT INTO `ci_employee_details` VALUES (55, 100042, 1, 1, 'Ramesh', '', 'Kumar', NULL, 'Prakash Kumar', NULL, 'Seema Devi', 'cbecd4ab55e52cb278af9af741c2204d.jpg', 1, '1981-09-02', 1, '', 'ramesh7f68@gmail.com', 8765923633, 0, 343545546546, 'AASAD3454D', '', '2', 'Uttarakhand', 127838, 'Uttarakhand', 2, 0, 'dstfdfgtytry', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 85, '2019-09-30 00:00:00', 85, '2019-11-19 14:03:42', 1, 0);
INSERT INTO `ci_employee_details` VALUES (56, 100043, 1, 2, 'Priti', '', 'Sharma', NULL, 'Rohit Sharma', NULL, 'Pinki Sharma', '152a89a9b1c454c848944a50da0afb71.jpg', 2, '1990-09-05', 1, 'Priti Sharma', 'priti@gmail.com', 9876535767, 0, 687698790879, 'FGHJU7654R', '', '2', 'Kolkata', 711112, 'Kolkata', 2, 1, 'mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 31, '2019-10-01 00:00:00', 31, '2019-10-10 11:35:01', 1, 0);
INSERT INTO `ci_employee_details` VALUES (57, 100044, 1, 2, 'Neha', 'Singh', 'Solanki', NULL, 'Soham Solanki', NULL, 'Suman Solanki', '159a699192d86f05da2b0ff2184c747f.jpg', 2, '1986-10-16', 1, 'Neha Singh', 'nehasingh@gmail.com', 9876543214, 0, 555555555555, 'ASDFG3456J', '', '2', 'Madhya Pradesh', 343546, 'Madhya Pradesh', 2, 1, 'Cut mark on hand', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 49, '2019-10-01 00:00:00', 49, '2019-11-29 09:40:18', 1, 0);
INSERT INTO `ci_employee_details` VALUES (58, 100045, 1, 1, 'Shiv', '', 'Shankar', NULL, 'The Father', NULL, 'The Mother', '11c8cf3ca822f96bc307fa8f56c5f948.png', 1, '1990-05-01', 1, '', 'shiv@gmail.com', 7589426258, 0, 145789653245, 'GDKJG7865D', '', '1', 'Amla', 475896, 'Bhopal', 1, 0, 'Birth Mark', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', NULL, '', 49, '2019-10-01 00:00:00', 49, '2019-11-29 09:40:18', 1, 0);
INSERT INTO `ci_employee_details` VALUES (59, 100046, 1, 3, 'Khanak', '', 'Tiwari', NULL, 'Sashi Tiwari', NULL, 'Sushila Tiwari', '784f2da6bcf56688169dfe8a49017bec.jpg', 2, '1990-10-10', 2, '', 'khanak@gmail.com', 9132874938, 0, 283247395894, 'VAGHY8734H', '', '2', 'sfdrgtfhy gfhhgfh', 121324, 'Balia', 2, 0, 'shgdjasdhjsdh', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', '', '', 39, '2019-10-17 00:00:00', 39, '2019-10-17 10:45:37', 1, 0);
INSERT INTO `ci_employee_details` VALUES (60, 100047, 1, 1, 'Rahul', '', 'singh', NULL, 'rajendra prsad', NULL, 'Parmeshavari', 'f49a197b7bcee12aec24b51d97d6d5d8.JPG', 1, '1992-12-10', 1, '', 'rahul92@gmail.com', 7897789797, 8788792122, 987997979987, '9879789798', '98799', '1', 'noida secor 58', 201301, 'pryagraj', 1, 0, 'pryagraj', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', '123', '', 45, '2019-10-17 00:00:00', 45, '2019-10-17 10:42:32', 1, 0);
INSERT INTO `ci_employee_details` VALUES (61, 100048, 1, 1, 'Ajay', '', 'Kumar', NULL, 'Manohar Kumar', NULL, 'Shakuntala', '667ffa484c18ecc99448c0f5a82a1d09.png', 1, '1978-05-30', 1, '', 'ajaykumar@gmail.com', 8556679887, 0, 324345564657, 'ADGHY4578R', '', '2', 'Delhi', 123456, 'Delhi', 2, 1, 'Cut Mark on right hand', 3, '', 1, '', '0000-00-00', '', 2, '', NULL, '', '', '0000-00-00', '', '', '', 86, '2019-10-22 00:00:00', 86, '2019-11-19 11:53:47', 1, 0);
INSERT INTO `ci_employee_details` VALUES (62, 100049, 1, 2, 'Anju', '', 'Verma', 1, 'Santosh Verma', 1, 'Reena Verma', 'e40787265d379e798c6f787c36c63564.jpg', 2, '1981-11-11', 1, 'Anju Verma', 'anjuverma@kvs.gov.in', 9874326687, 0, 254467543565, 'ADGHY6767H', '', '2', 'Rishra, hoogly', 732824, 'Kolkata', 2, 1, 'Cut mark on right hands', 3, '', 1, '', '0000-00-00', '', 2, '', '', '', '', '0000-00-00', '', '1', '23455678', 46, '2019-11-19 00:00:00', 46, '2019-11-19 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (64, 100050, 1, 1, 'Neha', '', 'Kapoor', 1, 'Rahul Kapoor', 1, 'Shruti', '2dc276265086f0017cbdf7a2480049c9.jpg', 2, '1990-11-22', 2, '', 'neha124@gmail.com', 6132727643, 0, 576657677687, 'ASDFF43565', '', '1', 'djheskfrjeytytyrtrt', 732824, 'jhjdsfhkjfrtrtty', 2, 0, 'dgffdrgfdgtg', 3, '', 1, '', '0000-00-00', '', 2, '', '', '', '', '0000-00-00', '', '1', '554565', 43, '2019-11-20 00:00:00', 43, '2019-11-20 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (65, 100051, 1, 1, 'Satish', '', 'Kumar', 1, 'Rohit Kumar', 1, 'Rinku', '9754acd6ef33b2474a4e15318f418c21.jpg', 1, '1987-11-04', 1, '', 'satish@gmail.com', 9876535454, 0, 454546546546, 'ASDFG3456E', '', '1', 'Kolkata', 711112, 'Kolkata', 2, 1, 'szadesfrdgtryty', 3, '', 1, '', '0000-00-00', '', 2, '', '', '', '', '0000-00-00', '', '2', '3436565766577', 22, '2019-11-20 00:00:00', 22, '2019-11-20 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (66, 100052, 1, 1, 'Asit', '', '', 1, 'Abc', 1, 'Abc', '48ebd038e49058b86a66f437c7642d62.JPG', 1, '2000-11-15', 1, '', 'a@gmail.com', 1234567890, 0, 123456789201, '1111111111', '', '1', 'H.NO.93, NEW KARDAPM PURI WEST JYOTI NAGAR DELHI 110094', 110094, 'DELIH', 1, 0, 'dfdsg', 6, '', 1, '', '0000-00-00', '', 2, '', '', '', '', '0000-00-00', '', '', '', 102, '2019-11-21 00:00:00', 102, '2019-11-29 09:40:18', 1, 0);
INSERT INTO `ci_employee_details` VALUES (67, 100053, 1, 1, 'Rahul', '', '', 1, 'Kamal', 1, 'Shantilata', '6d2fb0fc78b020a6ee05cfe65b33e16b.png', 1, '2000-11-01', 2, '', 'rahul@gov.in', 7589687485, 0, 0, 'BGFER7865D', '', '1', 'Delhi', 201301, 'Delhi', 2, 0, 'Birth Mark', 3, '', 1, '', '1970-01-01', '', 2, '', '', '', '', '1970-01-01', '', '1', '', 49, '2019-11-29 00:00:00', 49, '2019-11-29 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (69, 100054, 1, 2, 'Pitashree', '', 'Pandey', 0, 'Pitashree', 1, 'Madhuri Pandey', '243c807c52b29ea2b08c5b4afd0afffd.png', 1, '2019-11-15', 2, '', 'ananya@gov.in', 4287695874, 0, 0, 'hgfut7687y', '', '3', 'Delhi', 452876, 'Delhi', 2, 0, 'jhkjl', 2, '', 1, '', '1970-01-01', '', 2, '', '', '', '', '1970-01-01', '', '', '', 49, '2019-11-29 00:00:00', 49, '2019-11-29 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (70, 100055, 1, 1, 'Kumar', '', 'Sidhartha', 1, 'Kumar Sidhartha', 1, 'Sudha Sinha', '33f0d2494efcc5251937a1e3a802963b.jpeg', 1, '1983-02-25', 1, '', 'kumar.sidhartha@mtsindia.in', 9136001352, 0, 456788999900, 'BMDPS1899H', '', '1', '334, Udyog Vihar phase 4,, Gurgaon', 122001, 'Gurgaon', 2, 0, 'mole', 3, '', 1, '', '0000-00-00', '', 2, '', '', '', '', '0000-00-00', '', '', '', 40, '2019-11-29 00:00:00', 40, '2019-11-29 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (75, 100056, 1, 1, 'Smitayojti', '', 'Mishra', 1, 'Raman', 1, 'Renu', 'e1fa36b755fc2617745b1ad72c03b727.jpg', 1, '2000-11-02', 2, '', 'smita@jyoti.com', 7859465872, 0, 475896857945, 'BREWD3454D', '', '1', 'delhi', 234234, 'Delhi', 2, 0, 'Birth', 3, '', 1, '', '0000-00-00', '', 2, '', '', '', '', '0000-00-00', '', '1', 'hdthdt', 40, '2019-11-29 00:00:00', 40, '2019-11-29 00:00:00', 1, 0);
INSERT INTO `ci_employee_details` VALUES (87, 100057, 1, 1, 'Vijay', '', 'Kumar', 1, 'Rajiv', 1, 'Mamta', 'c9b638bfcca36cd92aedf1eea3be938c.png', 1, '2000-11-01', 2, '', 'Vijay.kumar@gov.in', 7859685874, 0, 0, 'NHTRD5675D', '', '2', 'Naliya', 758496, 'Delhi', 2, 0, 'Mole on chick', 3, '', 1, '', '1970-01-01', '', 2, '', '', '', '', '1970-01-01', '', '', '', 40, '2019-11-29 00:00:00', 40, '2019-12-02 00:00:00', 1, 0);

-- ----------------------------
-- Table structure for ci_family_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_family_details`;
CREATE TABLE `ci_family_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `relation` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dependent` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `createdby` int(11) NOT NULL,
  `createdon` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updatedby` int(11) NOT NULL DEFAULT 0,
  `updatedon` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_family_details
-- ----------------------------
INSERT INTO `ci_family_details` VALUES (1, 10001, 'Father', 'Shri', 'rsdas sdfd', '1975-07-09', '43', '1', 1, '2019-07-25 14:00:27', 0, '0000-00-00 00:00:00');
INSERT INTO `ci_family_details` VALUES (21, 10002, 'Father', 'Shri', 'tazudin', '1942-07-12', '76', '1', 1, '2019-08-02 11:20:09', 0, '0000-00-00 00:00:00');
INSERT INTO `ci_family_details` VALUES (22, 10000, 'Father', 'Shri', 'Father', '1985-08-01', '34', '1', 1, '2019-08-28 14:22:57', 0, '0000-00-00 00:00:00');
INSERT INTO `ci_family_details` VALUES (23, 10004, 'Father', 'Shri', 'ram prsad', '1953-03-03', '66', '1', 1, '2019-09-02 13:50:38', 0, '0000-00-00 00:00:00');
INSERT INTO `ci_family_details` VALUES (24, 10004, 'Mother', 'Smt.', 'leela', '1955-12-03', '64', '1', 1, '2019-09-02 13:50:38', 0, '0000-00-00 00:00:00');
INSERT INTO `ci_family_details` VALUES (25, 100002, 'Father', 'Shri', 'Prakesh Sehgal', '1945-09-05', '74', '1', 23, '2019-09-04 12:02:09', 0, '0000-00-00 00:00:00');
INSERT INTO `ci_family_details` VALUES (26, 100002, 'Mother', 'Smt.', 'Ritu Sehgal', '1951-09-04', '68', '1', 23, '2019-09-04 12:02:09', 0, '0000-00-00 00:00:00');
INSERT INTO `ci_family_details` VALUES (27, 100002, 'Son', 'Shri', 'Pawan Sehgal', '2002-09-02', '17', '1', 23, '2019-09-04 12:02:09', 0, '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_financial_upgradation
-- ----------------------------
DROP TABLE IF EXISTS `ci_financial_upgradation`;
CREATE TABLE `ci_financial_upgradation`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) UNSIGNED NOT NULL,
  `upgradation_type` tinyint(4) NOT NULL,
  `level_from` tinyint(4) NOT NULL,
  `level_to` tinyint(4) NOT NULL,
  `order_no` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `order_date` date NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_financial_upgradation
-- ----------------------------
INSERT INTO `ci_financial_upgradation` VALUES (4, 10001, 2, 3, 4, '687798', '2019-07-09', 1, 0, '2019-07-26 11:00:44', '0000-00-00 00:00:00');
INSERT INTO `ci_financial_upgradation` VALUES (5, 10001, 1, 4, 6, '123456', '2019-07-24', 1, 0, '2019-07-26 11:00:44', '0000-00-00 00:00:00');
INSERT INTO `ci_financial_upgradation` VALUES (8, 10000, 1, 13, 15, 'SS1010', '2019-08-01', 1, 0, '2019-08-28 16:58:42', '0000-00-00 00:00:00');
INSERT INTO `ci_financial_upgradation` VALUES (9, 10004, 1, 7, 9, '4545', '2015-03-04', 1, 0, '2019-09-02 16:37:11', '0000-00-00 00:00:00');
INSERT INTO `ci_financial_upgradation` VALUES (10, 10004, 2, 10, 13, '4354546', '2016-08-04', 1, 0, '2019-09-02 16:37:11', '0000-00-00 00:00:00');
INSERT INTO `ci_financial_upgradation` VALUES (11, 100002, 1, 5, 6, 'KV/Or/679', '2019-09-04', 23, 0, '2019-09-04 12:41:04', '0000-00-00 00:00:00');
INSERT INTO `ci_financial_upgradation` VALUES (12, 100002, 2, 7, 8, 'drtytfuyg', '2019-09-04', 23, 0, '2019-09-04 12:41:04', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_foreign_visits
-- ----------------------------
DROP TABLE IF EXISTS `ci_foreign_visits`;
CREATE TABLE `ci_foreign_visits`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) UNSIGNED NOT NULL,
  `is_country_visit` tinyint(2) NOT NULL COMMENT '1- Yes,2- No',
  `visit_year` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `country_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `order_no` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `purpose` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_by` int(10) NOT NULL,
  `updated_by` int(10) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_foreign_visits
-- ----------------------------
INSERT INTO `ci_foreign_visits` VALUES (6, 10001, 1, '2016', 'Moscow', 'ORD/123', '3 Months', 'Training', 1, 0, '2019-07-25 11:50:00', NULL);
INSERT INTO `ci_foreign_visits` VALUES (7, 10001, 1, '2018', 'Taiwan', '678544', '6 Months', 'Conference', 1, 0, '2019-07-25 11:50:00', NULL);
INSERT INTO `ci_foreign_visits` VALUES (8, 10001, 1, '2019', 'Moscow', '123456', '2 Months', 'test', 1, 0, '2019-07-25 11:50:00', NULL);
INSERT INTO `ci_foreign_visits` VALUES (9, 10001, 1, '2016', 'rtry', 'yty', 'ytry', 'ytyty', 1, 0, '2019-07-25 11:50:00', NULL);
INSERT INTO `ci_foreign_visits` VALUES (10, 10001, 1, '2018', 'ghygujygu', '5657', '56jjhjhj', 'gjgjj', 1, 0, '2019-07-25 11:50:00', NULL);
INSERT INTO `ci_foreign_visits` VALUES (11, 10000, 1, '2015', 'UK', 'TRUK1010', '1 Month', 'Education', 1, 0, '2019-08-28 16:57:22', NULL);
INSERT INTO `ci_foreign_visits` VALUES (12, 10004, 1, '2015', 'china', '354354', '3', 'attend seminar', 1, 0, '2019-09-02 13:08:32', NULL);
INSERT INTO `ci_foreign_visits` VALUES (13, 10004, 1, '2015', 'nigeria', '456546', '5', 'attend seminar', 1, 0, '2019-09-02 13:08:32', NULL);
INSERT INTO `ci_foreign_visits` VALUES (14, 100002, 2, '', '', '', '', '', 23, 0, '2019-09-04 12:41:13', NULL);

-- ----------------------------
-- Table structure for ci_initial_service_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_initial_service_details`;
CREATE TABLE `ci_initial_service_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `initial_designationid` int(11) NOT NULL,
  `initial_subject` int(11) NOT NULL DEFAULT 0,
  `initial_place` int(11) NOT NULL,
  `initial_unit` int(11) NOT NULL,
  `initial_section` int(11) NOT NULL DEFAULT 0,
  `initial_school` int(11) NOT NULL DEFAULT 0,
  `initial_kvcode` int(11) NOT NULL DEFAULT 0,
  `initial_shift` int(11) NOT NULL DEFAULT 0,
  `initial_appoint_specialdrive` tinyint(4) NOT NULL,
  `initial_appoint_zone` tinyint(4) NOT NULL DEFAULT 0,
  `initial_zone` tinyint(4) NOT NULL DEFAULT 0,
  `initial_joiningdate` date NOT NULL,
  `initial_confirmdate` date NULL DEFAULT NULL,
  `initial_appoint_trail` tinyint(4) NOT NULL,
  `initial_trailsdate` date NULL DEFAULT NULL,
  `initial_trailedate` date NULL DEFAULT NULL,
  `initial_regulardate` date NULL DEFAULT NULL,
  `initial_appointed_term` tinyint(4) NOT NULL,
  `absorbtion_dept` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `initial_lien` tinyint(4) NOT NULL,
  `initial_liensdate` date NULL DEFAULT NULL,
  `initial_lienedate` date NULL DEFAULT NULL,
  `initial_category` int(11) NOT NULL,
  `initial_panel_year` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_initial_service_details
-- ----------------------------
INSERT INTO `ci_initial_service_details` VALUES (1, 10001, 8, 1, 5, 1, 0, 1, 1704, 1, 0, 2, 10, '2019-08-01', NULL, 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '', 0, NULL, NULL, 1, '1977', 1, 0, '2019-08-19 12:53:35', '2019-08-26 14:52:10');
INSERT INTO `ci_initial_service_details` VALUES (2, 100002, 44, 0, 2, 5, 4, 0, 0, 0, 1, 2, 13, '1990-01-01', '0000-00-00', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '', 1, '2019-11-01', '2019-11-01', 1, '1999', 1, 0, '2019-09-04 12:10:45', '2019-11-07 15:48:22');
INSERT INTO `ci_initial_service_details` VALUES (3, 100001, 10, 0, 2, 5, 4, 0, 0, 0, 0, 1, 12, '2019-09-01', NULL, 1, '2019-09-01', '2019-09-06', '2019-09-01', 1, '', 0, NULL, NULL, 1, '1967', 23, 0, '2019-09-06 11:45:20', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (4, 100000, 8, 10, 5, 17, 0, 39, 1033, 1, 2, 1, 15, '2019-09-02', '2019-11-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 2, '', 2, '0000-00-00', '0000-00-00', 1, '1979', 40, 0, '2019-09-06 13:37:01', '2019-11-20 09:55:24');
INSERT INTO `ci_initial_service_details` VALUES (5, 2000, 35, 11, 3, 16, 0, 0, 2268, 0, 1, 2, 13, '2019-09-01', '2019-11-01', 1, '2019-09-01', '2019-09-02', '2019-09-01', 1, '', 1, '2019-11-04', '2019-11-04', 2, '1969', 1, 0, '2019-09-09 17:22:23', '2019-11-04 12:34:28');
INSERT INTO `ci_initial_service_details` VALUES (6, 10000, 6, 11, 5, 16, 0, 30, 1706, 1, 2, 1, 10, '2015-09-01', '2019-11-07', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '', 1, '2019-11-01', '2019-11-06', 1, '2015', 1, 0, '2019-09-09 17:29:30', '2019-11-08 16:14:02');
INSERT INTO `ci_initial_service_details` VALUES (7, 10002, 6, 11, 5, 17, 0, 61, 1008, 1, 0, 2, 0, '2016-03-01', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '2016', 1, 0, '2019-09-11 09:36:55', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (8, 10003, 8, 10, 5, 17, 0, 61, 1008, 1, 0, 2, 0, '2016-03-01', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '2016', 1, 0, '2019-09-11 09:40:51', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (9, 10004, 6, 3, 5, 27, 0, 544, 1868, 1, 1, 2, 13, '2016-03-01', '1970-01-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '', 1, '2019-10-09', '2019-10-18', 1, '2016', 1, 0, '2019-09-11 09:44:06', '2019-10-24 13:02:10');
INSERT INTO `ci_initial_service_details` VALUES (10, 10005, 8, 2, 5, 19, 0, 178, 1093, 1, 2, 1, 10, '2016-03-01', '2019-10-03', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '', 0, NULL, NULL, 1, '2016', 1, 0, '2019-09-11 09:48:03', '2019-10-24 11:44:39');
INSERT INTO `ci_initial_service_details` VALUES (11, 100003, 6, 2, 5, 24, 0, 436, 1437, 1, 0, 2, 0, '2016-03-01', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '2016', 1, 0, '2019-09-11 09:51:29', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (12, 100004, 8, 11, 5, 24, 0, 436, 1437, 1, 0, 2, 0, '2016-03-01', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '2016', 1, 0, '2019-09-11 09:55:29', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (13, 100005, 35, 0, 4, 4, 0, 0, 1919, 0, 0, 2, 15, '2016-03-01', NULL, 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '', 0, NULL, NULL, 1, '2016', 1, 0, '2019-09-11 10:00:00', '2019-09-11 15:35:50');
INSERT INTO `ci_initial_service_details` VALUES (14, 100006, 6, 11, 5, 17, 0, 38, 2194, 1, 0, 2, 0, '2018-01-01', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '2018', 39, 0, '2019-09-23 16:51:10', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (15, 100007, 44, 0, 5, 19, 0, 135, 1087, 1, 0, 2, 0, '2010-08-10', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '2010', 36, 0, '2019-09-23 16:58:42', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (16, 100008, 8, 10, 5, 17, 0, 38, 2194, 1, 0, 2, 15, '2018-06-06', NULL, 2, '1970-01-01', '1970-01-01', '1970-01-01', 2, '', 0, NULL, NULL, 1, '2018', 39, 0, '2019-09-23 17:08:12', '2019-09-23 17:14:19');
INSERT INTO `ci_initial_service_details` VALUES (17, 100009, 6, 4, 5, 18, 0, 90, 2117, 1, 0, 2, 0, '2012-09-12', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 36, 0, '2019-09-23 17:14:29', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (18, 100010, 6, 11, 5, 17, 0, 39, 1033, 1, 1, 2, 13, '2018-01-15', '1970-01-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '', 2, '1970-01-01', '1970-01-01', 1, '2018', 40, 0, '2019-09-23 17:25:43', '2019-11-15 11:52:11');
INSERT INTO `ci_initial_service_details` VALUES (19, 100011, 8, 10, 5, 17, 0, 39, 1033, 1, 0, 2, 0, '2018-02-01', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '2018', 40, 0, '2019-09-23 17:32:42', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (20, 100012, 7, 18, 5, 29, 0, 651, 1556, 1, 0, 2, 0, '2010-09-09', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 41, 0, '2019-09-23 17:37:17', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (21, 100013, 29, 0, 4, 1, 0, 0, 2266, 0, 0, 2, 0, '2014-09-10', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 41, 0, '2019-09-23 17:43:31', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (22, 100014, 36, 0, 3, 18, 0, 0, 1900, 0, 0, 2, 0, '2016-09-08', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 37, 0, '2019-09-24 10:34:20', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (23, 100015, 23, 0, 3, 16, 0, 0, 2268, 0, 0, 2, 0, '2010-09-10', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 37, 0, '2019-09-24 11:04:30', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (24, 100016, 8, 2, 5, 16, 0, 3, 1395, 1, 0, 2, 0, '2000-09-14', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 44, 0, '2019-09-24 11:19:07', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (25, 100017, 7, 1, 5, 25, 0, 461, 2170, 1, 0, 2, 0, '2007-09-05', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 2, '', 44, 0, '2019-09-24 11:48:01', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (26, 100018, 7, 4, 5, 36, 0, 998, 2244, 1, 0, 2, 0, '1998-09-02', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 4, '', 45, 0, '2019-09-24 12:07:25', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (27, 100019, 8, 12, 5, 17, 0, 38, 2194, 1, 0, 2, 0, '2010-09-01', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 4, '', 45, 0, '2019-09-24 12:17:11', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (28, 100020, 6, 16, 5, 19, 0, 138, 2320, 1, 0, 2, 0, '2000-09-07', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 49, 0, '2019-09-24 12:40:41', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (29, 100021, 27, 0, 2, 5, 0, 0, 1917, 0, 0, 2, 0, '1988-09-08', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 5, 0, '2019-09-24 13:08:13', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (30, 100022, 44, 2, 3, 22, 0, 0, 1914, 0, 0, 2, 14, '2019-09-17', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 36, 0, '2019-09-24 15:05:21', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (31, 100023, 44, 0, 5, 28, 0, 586, 1515, 1, 0, 2, 0, '2019-09-09', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '', 0, NULL, NULL, 1, '1963', 38, 0, '2019-09-24 15:27:00', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (32, 100024, 8, 14, 5, 24, 0, 406, 1408, 1, 0, 2, 0, '2019-09-06', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 47, 0, '2019-09-24 15:50:07', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (33, 100025, 27, 0, 3, 20, 0, 0, 1902, 0, 0, 2, 0, '2019-09-02', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 47, 0, '2019-09-24 16:06:34', '0000-00-00 00:00:00');
INSERT INTO `ci_initial_service_details` VALUES (34, 100026, 8, 10, 5, 30, 0, 712, 1624, 1, 0, 1, 15, '2019-09-04', NULL, 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '', 0, NULL, NULL, 1, '', 42, 0, '2019-09-24 17:06:44', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_initiate_transfer
-- ----------------------------
DROP TABLE IF EXISTS `ci_initiate_transfer`;
CREATE TABLE `ci_initiate_transfer`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `current_place` int(11) NOT NULL,
  `current_unit` int(11) NOT NULL,
  `current_section` int(11) NOT NULL DEFAULT 0,
  `current_school` int(11) NOT NULL DEFAULT 0,
  `current_designation` int(11) NOT NULL,
  `current_subject` int(11) NOT NULL DEFAULT 0,
  `current_kvcode` int(11) NOT NULL,
  `transfer_place` int(11) NOT NULL,
  `transfer_unit` int(11) NOT NULL,
  `transfer_section` int(11) NOT NULL DEFAULT 0,
  `transfer_school` int(11) NOT NULL DEFAULT 0,
  `transfer_designation` int(11) NOT NULL,
  `transfer_subject` int(11) NOT NULL DEFAULT 0,
  `transfer_kvcode` int(11) NOT NULL,
  `transfer_orderno` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `transfer_orderdate` date NOT NULL,
  `relieving_orderno` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `relieving_date` date NOT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'INPROCESS',
  `reason` text CHARACTER SET latin5 COLLATE latin5_turkish_ci NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_by` int(11) NULL DEFAULT NULL,
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `active` tinyint(255) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ci_kvs_geo
-- ----------------------------
DROP TABLE IF EXISTS `ci_kvs_geo`;
CREATE TABLE `ci_kvs_geo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ci_kvs_geo
-- ----------------------------
INSERT INTO `ci_kvs_geo` VALUES (1, 'CENTRAL', 1, 0, 1);
INSERT INTO `ci_kvs_geo` VALUES (2, 'EAST', 1, 0, 1);
INSERT INTO `ci_kvs_geo` VALUES (3, 'NORTH', 1, 0, 1);
INSERT INTO `ci_kvs_geo` VALUES (4, 'NORTH EAST', 1, 0, 1);
INSERT INTO `ci_kvs_geo` VALUES (5, 'SOUTH', 1, 0, 1);
INSERT INTO `ci_kvs_geo` VALUES (6, 'WEST', 1, 0, 1);
INSERT INTO `ci_kvs_geo` VALUES (7, 'AGRA', 2, 1, 1);
INSERT INTO `ci_kvs_geo` VALUES (8, 'AHMEDABAD', 2, 6, 1);
INSERT INTO `ci_kvs_geo` VALUES (9, 'BANGALORE', 2, 5, 1);
INSERT INTO `ci_kvs_geo` VALUES (10, 'BHOPAL', 2, 1, 1);
INSERT INTO `ci_kvs_geo` VALUES (11, 'BHUBANESWAR', 2, 2, 1);
INSERT INTO `ci_kvs_geo` VALUES (12, 'DEHRADUN', 2, 3, 1);
INSERT INTO `ci_kvs_geo` VALUES (13, 'CHENNAI', 2, 5, 1);
INSERT INTO `ci_kvs_geo` VALUES (14, 'KVS HQ', 2, 3, 1);
INSERT INTO `ci_kvs_geo` VALUES (15, 'GURGAON', 2, 3, 1);
INSERT INTO `ci_kvs_geo` VALUES (16, 'ERNAKULAM', 2, 5, 1);
INSERT INTO `ci_kvs_geo` VALUES (17, 'CHANDIGARH', 2, 3, 1);
INSERT INTO `ci_kvs_geo` VALUES (18, 'GUWAHATI', 2, 4, 1);
INSERT INTO `ci_kvs_geo` VALUES (19, 'HYDERABAD', 2, 5, 1);
INSERT INTO `ci_kvs_geo` VALUES (20, 'JABALPUR', 2, 1, 1);
INSERT INTO `ci_kvs_geo` VALUES (21, 'JAIPUR', 2, 6, 1);
INSERT INTO `ci_kvs_geo` VALUES (22, 'DELHI', 2, 3, 1);
INSERT INTO `ci_kvs_geo` VALUES (23, 'KOLKATA', 2, 2, 1);
INSERT INTO `ci_kvs_geo` VALUES (24, 'LUCKNOW', 2, 1, 1);
INSERT INTO `ci_kvs_geo` VALUES (25, 'MUMBAI', 2, 6, 1);
INSERT INTO `ci_kvs_geo` VALUES (26, 'PATNA', 2, 2, 1);
INSERT INTO `ci_kvs_geo` VALUES (27, 'RAIPUR', 2, 1, 1);
INSERT INTO `ci_kvs_geo` VALUES (28, 'RANCHI', 2, 2, 1);
INSERT INTO `ci_kvs_geo` VALUES (29, 'SILCHAR', 2, 4, 1);
INSERT INTO `ci_kvs_geo` VALUES (30, 'TINSUKIA', 2, 4, 1);
INSERT INTO `ci_kvs_geo` VALUES (31, 'VARANASI', 2, 1, 1);
INSERT INTO `ci_kvs_geo` VALUES (32, 'JAMMU', 2, 3, 1);

-- ----------------------------
-- Table structure for ci_leave_service_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_leave_service_details`;
CREATE TABLE `ci_leave_service_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `leave_type` smallint(6) NOT NULL,
  `from_date` date NULL DEFAULT NULL,
  `to_date` date NULL DEFAULT NULL,
  `duration` int(11) NULL DEFAULT NULL,
  `created` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 73 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_leave_service_details
-- ----------------------------
INSERT INTO `ci_leave_service_details` VALUES (12, 10001, 1, '2019-08-01', '2019-08-03', 3, '2019-08-26 14:52:10', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (18, 100001, 5, '2019-09-01', '2019-09-04', 4, '2019-09-06 11:45:20', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (22, 10002, 1, '2019-08-02', '2019-08-07', 6, '2019-09-11 09:36:55', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (23, 10002, 2, '2019-08-01', '2019-08-06', 6, '2019-09-11 09:36:56', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (24, 10003, 1, '2018-09-01', '2018-09-30', 30, '2019-09-11 09:40:51', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (27, 100003, 4, '2019-01-01', '2019-01-31', 31, '2019-09-11 09:51:29', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (28, 100004, 4, '2019-02-01', '2019-02-28', 28, '2019-09-11 09:55:29', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (30, 100005, 4, '2019-03-01', '2019-03-31', 31, '2019-09-11 15:35:50', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (33, 100006, 4, '2018-03-01', '2018-03-31', 31, '2019-09-23 16:51:11', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (34, 100007, 2, '2018-09-04', '2018-09-30', 27, '2019-09-23 16:58:42', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (36, 100008, 2, '2018-09-01', '2018-09-15', 15, '2019-09-23 17:14:19', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (37, 100009, 4, '2018-09-04', '2018-09-27', 24, '2019-09-23 17:14:29', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (39, 100011, 4, '2019-08-01', '2019-08-14', 14, '2019-09-23 17:32:42', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (40, 100012, 4, '2019-08-06', '2019-09-01', 27, '2019-09-23 17:37:17', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (41, 100013, 3, '2019-09-03', '2019-09-05', 3, '2019-09-23 17:43:31', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (42, 100014, 2, '2019-09-03', '2019-09-06', 4, '2019-09-24 10:34:20', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (43, 100015, 2, '2012-09-10', '2012-10-31', 52, '2019-09-24 11:04:30', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (44, 100016, 1, '2018-09-05', '2018-09-26', 22, '2019-09-24 11:19:07', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (45, 100017, 2, '2014-09-02', '2014-10-16', 45, '2019-09-24 11:48:01', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (46, 100018, 4, '2015-07-01', '2015-07-22', 22, '2019-09-24 12:07:25', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (47, 100019, 2, '2019-09-03', '2019-09-12', 10, '2019-09-24 12:17:11', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (48, 100020, 1, '2019-03-04', '2019-03-21', 18, '2019-09-24 12:40:41', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (49, 100021, 1, '2019-09-04', '2019-09-12', 9, '2019-09-24 13:08:14', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (50, 100022, 3, '2019-09-06', '2019-09-16', 11, '2019-09-24 15:05:21', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (51, 100023, 2, '2019-09-09', '2019-09-18', 10, '2019-09-24 15:27:01', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (52, 100024, 2, '2019-09-03', '2019-09-24', 22, '2019-09-24 15:50:07', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (53, 100025, 2, '2019-09-05', '2019-09-17', 13, '2019-09-24 16:06:34', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (54, 100026, 2, '2019-09-03', '2019-09-10', 8, '2019-09-24 17:06:44', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (62, 10005, 1, '2019-02-01', '2019-02-28', 28, '2019-10-24 11:44:39', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (64, 10004, 5, '2019-01-01', '2019-01-31', 31, '2019-10-24 13:02:10', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (67, 2000, 3, '2019-09-01', '2019-09-09', 9, '2019-11-04 12:34:57', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (68, 100002, 2, '2013-09-03', '2013-09-30', 28, '2019-11-07 15:48:22', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (69, 10000, 5, '1970-01-01', '1970-01-01', 0, '2019-11-08 16:14:02', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (71, 100010, 1, '2018-06-01', '2019-06-30', 395, '2019-11-15 11:52:11', '0000-00-00 00:00:00');
INSERT INTO `ci_leave_service_details` VALUES (72, 100000, 2, '2019-09-03', '2019-09-04', 2, '2019-11-20 09:55:25', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_level_range
-- ----------------------------
DROP TABLE IF EXISTS `ci_level_range`;
CREATE TABLE `ci_level_range`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `range_from` int(11) NOT NULL,
  `range_to` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_level_range
-- ----------------------------
INSERT INTO `ci_level_range` VALUES (1, '13-A', 131100, 216600, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (5, '1', 18000, 56900, 1, '2019-06-06 17:09:07', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (6, '2', 19900, 63200, 1, '2019-06-06 17:09:47', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (7, '3', 21700, 69100, 1, '2019-06-06 17:10:13', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (8, '4', 25500, 81100, 1, '2019-06-06 17:10:41', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (9, '5', 29200, 92300, 1, '2019-06-06 17:11:24', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (10, '6', 35400, 112400, 1, '2019-06-06 17:11:50', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (11, '7', 44900, 142400, 1, '2019-06-06 17:12:10', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (12, '8', 47600, 151100, 1, '2019-06-06 17:12:31', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (13, '9', 53100, 167800, 1, '2019-06-06 17:12:48', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (14, '10', 56100, 177500, 1, '2019-06-06 17:13:13', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (15, '11', 67700, 208700, 1, '2019-06-06 17:14:13', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (16, '12', 78800, 209200, 1, '2019-06-06 17:14:34', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (17, '13', 123100, 215900, 1, '2019-06-06 17:15:00', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (18, '14', 144200, 218200, 1, '2019-06-06 17:16:11', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (19, '15', 182200, 224100, 1, '2019-06-06 17:16:26', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (20, '16', 205400, 224400, 1, '2019-06-06 17:16:47', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (21, '17', 225000, 225000, 1, '2019-06-06 17:17:22', '0000-00-00 00:00:00');
INSERT INTO `ci_level_range` VALUES (23, '18', 250000, 250000, 1, '2019-10-15 12:12:07', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_notifications
-- ----------------------------
DROP TABLE IF EXISTS `ci_notifications`;
CREATE TABLE `ci_notifications`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senderid` int(11) NULL DEFAULT 1,
  `receiverid` int(30) NOT NULL,
  `readstatus` tinyint(2) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_notifications
-- ----------------------------
INSERT INTO `ci_notifications` VALUES (1, 'The retirement of Pramod Sharma is in next month', 1, 38, 0, '2019-11-13 15:27:56', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (2, 'The retirement of Pramod  Sharma is in next month', 1, 38, 0, '2019-11-13 15:28:19', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (3, 'The retirement of Ashish  Singh is in next month', 1, 42, 1, '2019-11-14 12:30:33', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (4, 'The retirement of Anu  Chaudhary is in next month', 1, 85, 1, '2019-11-20 14:15:22', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (5, 'The retirement of Anu  Chaudhary is in next month', 1, 85, 1, '2019-11-20 14:15:26', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (6, 'The retirement of Anu  Chaudhary is in next month', 1, 85, 0, '2019-11-13 16:57:01', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (7, 'The lien date of Naveen  Sehgal ends in next month', 1, 42, 1, '2019-11-14 12:31:14', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (8, 'The lien date of Sandhya Sandhya Roy ends in next month', 1, 85, 1, '2019-11-20 14:15:29', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (9, 'The lien date of Rajesh Rajesh Rai ends in next month', 1, 42, 0, '2019-11-20 12:47:46', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (10, 'The lien date of Naveen  Sehgal ends in next month', 1, 42, 0, '2019-11-20 12:47:39', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (11, 'The lien date of Sandhya Sandhya Roy ends in next month', 1, 85, 0, '2019-11-13 17:15:02', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (12, 'The lien date of Rajesh Rajesh Rai ends in next month', 1, 42, 1, '2019-11-20 12:36:57', '0000-00-00 00:00:00');
INSERT INTO `ci_notifications` VALUES (13, 'The retirement of Anu  Chaudhary is in next month', 1, 85, 1, '2019-11-20 14:15:32', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_other_service_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_other_service_details`;
CREATE TABLE `ci_other_service_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `due_date_retirement` date NOT NULL,
  `is_below_40_years` tinyint(4) NOT NULL,
  `created` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 70 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_other_service_details
-- ----------------------------
INSERT INTO `ci_other_service_details` VALUES (10, 10001, '0000-00-00', 1, '2019-08-26 14:52:10', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (16, 100001, '2050-09-30', 1, '2019-09-06 11:45:20', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (20, 10002, '2079-07-31', 1, '2019-09-11 09:36:56', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (21, 10003, '2065-08-31', 2, '2019-09-11 09:40:51', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (24, 100003, '2050-01-31', 2, '2019-09-11 09:51:29', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (25, 100004, '2040-04-30', 2, '2019-09-11 09:55:29', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (27, 100005, '2060-04-30', 2, '2019-09-11 15:35:50', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (30, 100006, '2050-01-31', 1, '2019-09-23 16:51:11', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (31, 100007, '2032-09-30', 1, '2019-09-23 16:58:43', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (33, 100008, '2045-03-31', 2, '2019-09-23 17:14:19', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (34, 100009, '2048-02-29', 1, '2019-09-23 17:14:29', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (36, 100011, '2050-01-31', 2, '2019-09-23 17:32:43', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (37, 100012, '2050-07-30', 1, '2019-09-23 17:37:17', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (38, 100013, '2047-09-30', 2, '2019-09-23 17:43:31', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (39, 100014, '2056-04-29', 1, '2019-09-24 10:34:20', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (40, 100015, '2040-09-29', 1, '2019-09-24 11:04:30', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (41, 100016, '2035-09-29', 2, '2019-09-24 11:19:07', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (42, 100017, '2045-03-31', 1, '2019-09-24 11:48:01', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (43, 100018, '2035-09-29', 2, '2019-09-24 12:07:25', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (44, 100019, '2046-01-31', 1, '2019-09-24 12:17:11', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (45, 100020, '2040-09-29', 1, '2019-09-24 12:40:41', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (46, 100021, '2038-09-30', 2, '2019-09-24 13:08:14', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (47, 100022, '2048-09-30', 1, '2019-09-24 15:05:21', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (48, 100023, '2049-09-30', 2, '2019-09-24 15:27:01', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (49, 100024, '2052-07-31', 1, '2019-09-24 15:50:07', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (50, 100025, '2079-09-30', 1, '2019-09-24 16:06:34', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (51, 100026, '2079-09-30', 1, '2019-09-24 17:06:44', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (59, 10005, '2045-03-31', 2, '2019-10-24 11:44:39', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (61, 10004, '2050-03-31', 2, '2019-10-24 13:02:10', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (64, 2000, '2079-07-31', 1, '2019-11-04 12:34:57', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (65, 100002, '2040-03-31', 1, '2019-11-07 15:48:22', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (66, 10000, '2050-09-30', 1, '2019-11-08 16:14:03', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (68, 100010, '0000-00-00', 1, '2019-11-15 11:52:11', '0000-00-00 00:00:00');
INSERT INTO `ci_other_service_details` VALUES (69, 100000, '2040-09-29', 1, '2019-11-20 09:55:25', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_other_training_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_other_training_details`;
CREATE TABLE `ci_other_training_details`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `organizing_agency` tinyint(2) NOT NULL,
  `govt_agency` tinyint(2) NOT NULL DEFAULT 0,
  `non_gov_agency_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `org_address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `trainingvenue` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `t_from` date NULL DEFAULT NULL,
  `t_to` date NULL DEFAULT NULL,
  `duration` int(11) NULL DEFAULT 0,
  `trainingtopic` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `designation` int(11) NOT NULL DEFAULT 0,
  `subject` int(11) NOT NULL DEFAULT 0,
  `role` int(11) NOT NULL DEFAULT 0,
  `grading` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_other_training_details
-- ----------------------------
INSERT INTO `ci_other_training_details` VALUES (1, 10001, 1, 3, '', 'sfdgfh', 'gffhh', '2019-08-01', '2019-08-02', 2, 'fhggfh', 22, 0, 1, '', 1, 0, '2019-08-02 14:25:42', '0000-00-00 00:00:00');
INSERT INTO `ci_other_training_details` VALUES (3, 10004, 1, 1, '', 'kvs headquater', 'delhi', '2019-08-01', '2019-08-06', 6, 'seminar', 1, 0, 1, '', 1, 0, '2019-09-02 13:07:17', '0000-00-00 00:00:00');
INSERT INTO `ci_other_training_details` VALUES (4, 100002, 0, 0, '', '', '', '0000-00-00', '0000-00-00', 0, '', 0, 0, 0, '', 23, 0, '2019-09-04 12:15:01', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_pay_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_pay_details`;
CREATE TABLE `ci_pay_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `present_paylevel` int(20) NOT NULL,
  `pay_range` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_of_increment` date NOT NULL,
  `created_by` int(20) NOT NULL,
  `updated_by` int(20) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_pay_details
-- ----------------------------
INSERT INTO `ci_pay_details` VALUES (1, 10001, 11, '67700-208700', '2019-07-31', 1, 0, '2019-07-29 11:43:54', '2019-07-29 12:09:12');
INSERT INTO `ci_pay_details` VALUES (2, 10000, 3, '21700-69100', '2019-08-28', 1, 0, '2019-08-28 17:17:13', '0000-00-00 00:00:00');
INSERT INTO `ci_pay_details` VALUES (3, 10004, 3, '21700-69100', '2019-09-03', 1, 0, '2019-09-02 12:23:27', '2019-09-02 12:51:09');
INSERT INTO `ci_pay_details` VALUES (4, 100002, 8, '47600-151100', '2019-09-13', 23, 0, '2019-09-04 12:12:20', '0000-00-00 00:00:00');
INSERT INTO `ci_pay_details` VALUES (5, 2000, 2, '19900-63200', '2019-11-06', 1, 0, '2019-11-04 14:59:06', '0000-00-00 00:00:00');
INSERT INTO `ci_pay_details` VALUES (6, 100054, 12, '78800-209200', '2019-11-30', 49, 0, '2019-11-29 11:08:17', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_performance_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_performance_details`;
CREATE TABLE `ci_performance_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `year` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grading` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL,
  `remark` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_performance_details
-- ----------------------------
INSERT INTO `ci_performance_details` VALUES (16, 10004, '2010', '45', '2019-09-02 15:37:37', '2019-09-02 15:37:37', NULL);
INSERT INTO `ci_performance_details` VALUES (17, 10004, '2011', '60', '2019-09-02 15:37:37', '2019-09-02 15:37:37', NULL);
INSERT INTO `ci_performance_details` VALUES (18, 10004, '2012', '65', '2019-09-02 15:37:37', '2019-09-02 15:37:37', NULL);
INSERT INTO `ci_performance_details` VALUES (19, 10004, '2013', '89', '2019-09-02 15:37:37', '2019-09-02 15:37:37', NULL);
INSERT INTO `ci_performance_details` VALUES (20, 10004, '2014', '48', '2019-09-02 15:37:37', '2019-09-02 15:37:37', NULL);
INSERT INTO `ci_performance_details` VALUES (24, 100002, '2019', '12', '2019-09-04 12:23:58', '2019-09-04 12:23:58', NULL);
INSERT INTO `ci_performance_details` VALUES (25, 100002, '2018', '10', '2019-09-04 12:23:58', '2019-09-04 12:23:58', NULL);
INSERT INTO `ci_performance_details` VALUES (26, 100002, '2017', '19', '2019-09-04 12:23:58', '2019-09-04 12:23:58', NULL);
INSERT INTO `ci_performance_details` VALUES (27, 2000, '2010', '8', '2019-11-04 14:57:04', '2019-11-04 14:57:04', 'test');
INSERT INTO `ci_performance_details` VALUES (28, 2000, '2011', '7', '2019-11-04 14:57:04', '2019-11-04 14:57:04', 'test');
INSERT INTO `ci_performance_details` VALUES (29, 10000, '2010', '10', '2019-11-08 16:22:39', '2019-11-08 16:22:39', 'Test Remarks1');
INSERT INTO `ci_performance_details` VALUES (30, 10000, '2011', '9', '2019-11-08 16:22:39', '2019-11-08 16:22:39', 'Test Remarks 2');
INSERT INTO `ci_performance_details` VALUES (31, 10000, '2012', '7', '2019-11-08 16:22:39', '2019-11-08 16:22:39', 'Test Remarks 3');

-- ----------------------------
-- Table structure for ci_present_service_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_present_service_details`;
CREATE TABLE `ci_present_service_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `present_designationid` int(11) NOT NULL,
  `present_subject` int(11) NOT NULL DEFAULT 0,
  `present_place` int(11) NOT NULL,
  `present_unit` int(11) NOT NULL,
  `present_section` int(11) NOT NULL DEFAULT 0,
  `present_school` int(11) NOT NULL DEFAULT 0,
  `present_kvcode` int(11) NOT NULL DEFAULT 0,
  `present_shift` int(11) NULL DEFAULT 0,
  `present_zone` tinyint(4) NOT NULL,
  `present_joiningdate` date NOT NULL,
  `present_appoint_trail` tinyint(4) NOT NULL,
  `present_trailsdate` date NULL DEFAULT NULL,
  `present_trailedate` date NULL DEFAULT NULL,
  `present_regulardate` date NULL DEFAULT NULL,
  `present_appointed_term` tinyint(4) NOT NULL,
  `present_notionaldate` date NULL DEFAULT NULL,
  `reason_notional` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `present_category` int(11) NOT NULL,
  `seniorityno` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `present_panel_year` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 66 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_present_service_details
-- ----------------------------
INSERT INTO `ci_present_service_details` VALUES (1, 10001, 24, 0, 2, 5, 4, 0, 0, 0, 12, '2019-08-15', 1, '2019-08-09', '2019-08-16', '2019-08-19', 1, '0000-00-00', '', 1, '56956', '1981', 85, 0, '2019-08-19 12:54:32', '2019-10-03 12:46:40');
INSERT INTO `ci_present_service_details` VALUES (2, 100002, 38, 0, 5, 16, 0, 4, 1707, 0, 10, '2019-09-03', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '499', '', 43, 43, '2019-08-02 12:10:45', '2019-11-19 12:42:06');
INSERT INTO `ci_present_service_details` VALUES (3, 100001, 37, 0, 2, 5, 1, 0, 1917, 0, 12, '2019-09-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 85, 86, '2019-09-06 11:45:20', '2019-11-15 14:59:21');
INSERT INTO `ci_present_service_details` VALUES (4, 100000, 6, 10, 5, 17, 0, 39, 1033, 1, 15, '2019-09-06', 2, '1970-01-01', '1970-01-01', '1970-01-01', 2, '0000-00-00', '', 1, '46565', '', 40, 0, '2019-09-06 13:37:01', '2019-11-19 15:15:31');
INSERT INTO `ci_present_service_details` VALUES (5, 2000, 35, 11, 2, 5, 1, 0, 1917, 0, 12, '2019-09-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 2, '0000-00-00', '', 1, '111', '2019', 85, 85, '2019-09-09 17:22:23', '2019-11-20 12:15:02');
INSERT INTO `ci_present_service_details` VALUES (6, 10000, 6, 11, 5, 18, 0, 90, 2117, 1, 10, '2019-01-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '111', '2019', 45, 43, '2019-09-09 17:29:30', '2019-11-19 13:06:53');
INSERT INTO `ci_present_service_details` VALUES (7, 10002, 6, 11, 5, 17, 0, 38, 2194, 1, 15, '2016-03-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '111', '2016', 39, 39, '2019-09-11 09:36:55', '2019-11-19 12:34:16');
INSERT INTO `ci_present_service_details` VALUES (8, 10003, 8, 10, 5, 17, 0, 38, 2194, 1, 15, '2016-03-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '111', '2016', 39, 39, '2019-09-11 09:40:51', '2019-11-19 12:34:16');
INSERT INTO `ci_present_service_details` VALUES (9, 10004, 6, 3, 5, 20, 0, 240, 2219, 1, 11, '2016-03-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '111', '2016', 1, 0, '2019-09-11 09:44:06', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (10, 10005, 8, 2, 5, 19, 0, 178, 1093, 1, 10, '2016-03-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '111', '2016', 38, 0, '2019-09-11 09:48:04', '2019-09-24 14:52:59');
INSERT INTO `ci_present_service_details` VALUES (11, 100003, 6, 2, 5, 24, 0, 436, 1437, 1, 12, '2016-03-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '111', '2016', 26, 0, '2019-09-11 09:51:29', '2019-10-03 12:42:54');
INSERT INTO `ci_present_service_details` VALUES (12, 100004, 8, 11, 5, 24, 0, 436, 1437, 1, 12, '2016-03-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '111', '2016', 26, 0, '2019-09-11 09:55:29', '2019-11-19 11:31:24');
INSERT INTO `ci_present_service_details` VALUES (13, 100005, 35, 0, 4, 4, 0, 0, 1919, 0, 15, '2016-03-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '100', '2016', 28, 0, '2019-09-11 10:00:00', '2019-10-03 12:43:37');
INSERT INTO `ci_present_service_details` VALUES (14, 100006, 6, 11, 5, 17, 0, 38, 2194, 1, 15, '2018-01-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '111', '2018', 39, 0, '2019-09-23 16:51:10', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (15, 100007, 38, 0, 3, 17, 0, 0, 1899, 0, 15, '2017-09-05', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '3456', '', 36, 0, '2019-09-23 16:58:42', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (16, 100008, 8, 10, 5, 17, 0, 38, 2194, 0, 15, '2018-06-08', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '222', '2018', 39, 0, '2019-09-23 17:08:12', '2019-09-23 17:14:19');
INSERT INTO `ci_present_service_details` VALUES (17, 100009, 18, 0, 3, 17, 0, 0, 1899, 0, 15, '2019-09-02', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '1234', '', 36, 0, '2019-09-23 17:14:29', '2019-11-20 10:50:04');
INSERT INTO `ci_present_service_details` VALUES (18, 100010, 6, 11, 5, 17, 0, 39, 1033, 1, 15, '2018-01-15', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '111', '2018', 40, 0, '2019-09-23 17:25:44', '2019-11-15 11:53:45');
INSERT INTO `ci_present_service_details` VALUES (19, 100011, 6, 10, 5, 17, 0, 39, 1033, 1, 15, '2018-02-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '222', '2018', 40, 40, '2019-09-23 17:32:42', '2019-12-02 10:13:49');
INSERT INTO `ci_present_service_details` VALUES (20, 100012, 6, 11, 5, 17, 0, 40, 1028, 1, 15, '2019-09-12', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 41, 0, '2019-09-23 17:37:17', '2019-11-20 10:20:47');
INSERT INTO `ci_present_service_details` VALUES (21, 100013, 6, 16, 5, 17, 0, 40, 1028, 1, 15, '2019-09-19', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 41, 0, '2019-09-23 17:43:31', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (22, 100014, 18, 0, 3, 18, 0, 0, 1900, 0, 14, '2019-09-19', 2, '0000-00-00', '0000-00-00', '0000-00-00', 5, '0000-00-00', '', 1, '', '', 37, 0, '2019-09-24 10:34:20', '2019-11-20 16:00:14');
INSERT INTO `ci_present_service_details` VALUES (23, 100015, 37, 0, 3, 18, 0, 0, 1900, 0, 14, '2019-09-16', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '', '', 37, 0, '2019-09-24 11:04:30', '2019-11-20 16:00:19');
INSERT INTO `ci_present_service_details` VALUES (24, 100016, 6, 10, 5, 18, 0, 85, 1054, 1, 14, '2019-09-09', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '', '', 44, 0, '2019-09-24 11:19:07', '2019-11-20 15:56:29');
INSERT INTO `ci_present_service_details` VALUES (25, 100017, 6, 11, 5, 18, 0, 85, 1054, 1, 14, '2018-09-13', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 2, '', '', 44, 0, '2019-09-24 11:48:01', '2019-11-20 15:56:29');
INSERT INTO `ci_present_service_details` VALUES (26, 100018, 8, 4, 5, 18, 0, 90, 2117, 1, 14, '2015-09-09', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '', '', 45, 0, '2019-09-24 12:07:25', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (27, 100019, 6, 10, 5, 18, 0, 90, 2117, 1, 14, '2018-09-20', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 4, '', '', 45, 0, '2019-09-24 12:17:11', '2019-11-20 15:27:44');
INSERT INTO `ci_present_service_details` VALUES (28, 100020, 6, 11, 5, 24, 0, 413, 1424, 1, 12, '2019-09-12', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '', '', 49, 0, '2019-09-24 12:40:41', '2019-11-20 10:38:39');
INSERT INTO `ci_present_service_details` VALUES (29, 100021, 18, 0, 3, 24, 0, 0, 1907, 0, 12, '2012-09-12', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '', '', 5, 0, '2019-09-24 13:08:14', '2019-11-22 17:26:46');
INSERT INTO `ci_present_service_details` VALUES (30, 100022, 38, 0, 3, 19, 0, 0, 1901, 0, 10, '2019-09-19', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '', '', 36, 0, '2019-09-24 15:05:21', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (31, 100023, 38, 0, 3, 19, 0, 0, 1901, 0, 10, '2019-09-24', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '', '', 38, 0, '2019-09-24 15:27:00', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (32, 100024, 8, 14, 5, 19, 0, 135, 1087, 1, 10, '2019-09-14', 2, '0000-00-00', '0000-00-00', '0000-00-00', 5, '0000-00-00', '', 1, '', '', 47, 0, '2019-09-24 15:50:07', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (33, 100025, 22, 0, 5, 19, 0, 135, 1087, 2, 10, '2019-09-05', 2, '0000-00-00', '0000-00-00', '0000-00-00', 2, '0000-00-00', '', 1, '', '', 47, 0, '2019-09-24 16:06:34', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (34, 100026, 8, 10, 5, 16, 0, 2, 1357, 1, 10, '2019-09-11', 2, '0000-00-00', '0000-00-00', '0000-00-00', 5, '0000-00-00', '', 1, '', '', 42, 0, '2019-09-24 17:06:44', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (35, 100027, 6, 17, 5, 17, 0, 39, 1033, 1, 15, '2019-09-12', 2, '1970-01-01', '1970-01-01', '1970-01-01', 2, '0000-00-00', '', 1, '123456', '', 40, 0, '2019-09-25 12:31:39', '2019-09-25 12:34:33');
INSERT INTO `ci_present_service_details` VALUES (36, 100028, 6, 10, 5, 24, 0, 436, 1437, 0, 12, '2016-09-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 2, '0000-00-00', '', 1, '123', '2016', 26, 40, '2019-09-25 14:39:09', '2019-11-20 14:28:22');
INSERT INTO `ci_present_service_details` VALUES (37, 100029, 6, 11, 5, 17, 0, 39, 1033, 1, 15, '2018-08-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '1223', '2018', 40, 49, '2019-09-25 14:54:12', '2019-12-13 15:49:47');
INSERT INTO `ci_present_service_details` VALUES (38, 100030, 35, 0, 4, 4, 0, 0, 1919, 0, 15, '2019-09-06', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '457657', '', 28, 0, '2019-09-25 15:07:57', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (39, 100031, 6, 2, 4, 4, 0, 0, 1919, 0, 15, '2018-09-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '456', '2018', 28, 0, '2019-09-25 15:08:32', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (40, 100032, 38, 0, 4, 4, 0, 0, 1919, 0, 15, '2019-09-25', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 28, 0, '2019-09-25 15:11:43', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (41, 100033, 6, 11, 5, 17, 0, 39, 1033, 0, 15, '2019-09-26', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '', '', 40, 0, '2019-09-26 16:01:07', '2019-09-27 11:08:44');
INSERT INTO `ci_present_service_details` VALUES (42, 100034, 6, 4, 5, 24, 0, 413, 1424, 1, 12, '2018-09-13', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '32454', '', 49, 0, '2019-09-27 10:29:30', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (43, 100035, 6, 10, 5, 24, 0, 413, 1424, 1, 12, '2019-09-04', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '211323', '', 49, 0, '2019-09-27 11:22:00', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (44, 100036, 6, 11, 5, 17, 0, 39, 1033, 0, 12, '2019-09-10', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '1234', '', 40, 40, '2019-09-27 11:30:43', '2019-09-27 12:00:39');
INSERT INTO `ci_present_service_details` VALUES (45, 100037, 6, 10, 5, 24, 0, 413, 1424, 0, 15, '2019-09-19', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 49, 49, '2019-09-27 12:33:41', '2019-11-20 10:38:39');
INSERT INTO `ci_present_service_details` VALUES (46, 100038, 27, 0, 2, 5, 1, 0, 1917, 0, 15, '2019-09-05', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '', '', 85, 85, '2019-09-27 12:47:57', '2019-11-20 10:28:11');
INSERT INTO `ci_present_service_details` VALUES (47, 100039, 28, 0, 4, 4, 0, 0, 1919, 0, 12, '2019-09-03', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 28, 28, '2019-09-27 14:29:53', '2019-09-27 14:33:27');
INSERT INTO `ci_present_service_details` VALUES (48, 100040, 37, 0, 2, 5, 4, 0, 1917, 0, 12, '1990-09-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '1212', '1990', 31, 0, '2019-09-30 10:01:45', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (49, 100041, 27, 0, 2, 5, 4, 0, 1917, 0, 12, '2017-09-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '1212', '2017', 31, 31, '2019-09-30 12:01:34', '2019-10-22 14:02:16');
INSERT INTO `ci_present_service_details` VALUES (50, 100042, 31, 0, 2, 5, 1, 0, 1917, 0, 12, '2019-09-03', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 85, 0, '2019-09-30 17:12:06', '2019-11-19 14:03:42');
INSERT INTO `ci_present_service_details` VALUES (51, 100043, 31, 0, 2, 5, 4, 0, 1917, 0, 12, '2019-09-05', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '6788', '', 31, 31, '2019-09-30 17:22:55', '2019-10-10 11:35:01');
INSERT INTO `ci_present_service_details` VALUES (52, 100044, 6, 1, 5, 24, 0, 413, 1424, 1, 12, '2019-10-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '345', '', 49, 49, '2019-10-01 12:13:26', '2019-10-01 13:07:27');
INSERT INTO `ci_present_service_details` VALUES (53, 100045, 6, 11, 5, 24, 0, 413, 1424, 1, 10, '2017-10-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '14', '2017', 49, 49, '2019-10-01 12:13:26', '2019-10-01 12:17:05');
INSERT INTO `ci_present_service_details` VALUES (54, 100046, 6, 4, 5, 17, 0, 38, 2194, 1, 14, '2015-10-14', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '2015', 39, 39, '2019-10-17 10:35:20', '2019-10-17 10:45:37');
INSERT INTO `ci_present_service_details` VALUES (55, 100047, 6, 4, 5, 18, 0, 90, 2117, 1, 15, '2019-09-10', 1, '2019-09-11', '2019-10-17', '2019-10-17', 1, '0000-00-00', '', 4, '1', '2018', 45, 45, '2019-10-17 10:36:14', '2019-10-17 10:42:32');
INSERT INTO `ci_present_service_details` VALUES (56, 100048, 37, 0, 2, 5, 2, 0, 1917, 0, 12, '2019-09-20', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '2018', 86, 86, '2019-10-22 15:41:26', '2019-11-19 11:53:27');
INSERT INTO `ci_present_service_details` VALUES (57, 100049, 6, 4, 5, 18, 0, 96, 2301, 1, 14, '2014-11-19', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '12564', '', 46, 0, '2019-11-19 12:18:38', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (58, 100050, 8, 10, 5, 16, 0, 4, 1707, 1, 10, '2018-11-16', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '544355', '', 43, 0, '2019-11-20 11:12:08', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (59, 100051, 38, 0, 3, 16, 0, 0, 2268, 0, 10, '2018-11-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 22, 0, '2019-11-20 11:19:24', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (60, 100052, 6, 10, 5, 39, 0, 1111, 1855, 1, 13, '2019-11-14', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '1971', 102, 0, '2019-11-21 15:18:58', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (61, 100053, 6, 11, 5, 24, 0, 413, 1424, 1, 12, '2019-11-29', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '123', '2018', 49, 0, '2019-11-29 10:14:34', '2019-11-29 10:18:13');
INSERT INTO `ci_present_service_details` VALUES (62, 100054, 6, 10, 5, 24, 0, 413, 1424, 1, 12, '2019-11-08', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '', '', 49, 0, '2019-11-29 11:04:52', '2019-11-29 14:56:30');
INSERT INTO `ci_present_service_details` VALUES (63, 100055, 6, 10, 5, 17, 0, 39, 1033, 3, 15, '2002-11-06', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '', 40, 0, '2019-11-29 11:06:57', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (64, 100056, 6, 11, 5, 17, 0, 39, 1033, 1, 15, '2019-11-01', 2, '0000-00-00', '0000-00-00', '0000-00-00', 1, '0000-00-00', '', 1, '', '2018', 40, 0, '2019-11-29 12:33:30', '0000-00-00 00:00:00');
INSERT INTO `ci_present_service_details` VALUES (65, 100057, 6, 10, 5, 17, 0, 39, 1033, 1, 15, '2017-11-01', 2, '1970-01-01', '1970-01-01', '1970-01-01', 1, '0000-00-00', '', 1, '1212', '2017', 40, 0, '2019-11-29 13:14:28', '2019-12-02 10:07:21');

-- ----------------------------
-- Table structure for ci_professional_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_professional_details`;
CREATE TABLE `ci_professional_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NULL DEFAULT NULL,
  `emp_prof_exp` int(2) NULL DEFAULT NULL,
  `org_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `org_address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `job_profile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `job_description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `job_start_date` datetime(0) NULL DEFAULT NULL,
  `job_end_date` datetime(0) NULL DEFAULT NULL,
  `status` tinyint(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_professional_details
-- ----------------------------
INSERT INTO `ci_professional_details` VALUES (21, 10004, 1, 'arena', 'noida', 'developer', 'developing website', '2014-09-02 00:00:00', '2015-02-02 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (22, 10004, 1, 'uneecops', 'noida', 'developer', 'developing website', '2015-03-02 00:00:00', '2019-09-02 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (24, 100002, 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (27, 10000, 1, 'VGT', 'NOIDA', 'JR. DEV', 'Programmer', '2019-07-01 00:00:00', '2019-07-09 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (28, 10000, 1, 'AKS', 'DELHI', 'SR. DEV', 'Developer', '2019-07-02 00:00:00', '2019-07-10 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (32, 2000, 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (36, 100054, 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (39, 100020, 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (43, 100034, 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (45, 100053, 2, '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);
INSERT INTO `ci_professional_details` VALUES (50, 100011, 1, 'CDAC', 'DELHI', 'ENGG', 'Asst. S/w Engg.', '2017-12-01 00:00:00', '2018-12-01 00:00:00', 1);

-- ----------------------------
-- Table structure for ci_proficiency_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_proficiency_details`;
CREATE TABLE `ci_proficiency_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NULL DEFAULT NULL,
  `is_comp_prof` int(11) NULL DEFAULT NULL,
  `comp_prof_type` int(11) NULL DEFAULT NULL,
  `comp_other_prof` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` tinyint(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_proficiency_details
-- ----------------------------
INSERT INTO `ci_proficiency_details` VALUES (3, 10004, 1, 10, 'PGDIT', 1);
INSERT INTO `ci_proficiency_details` VALUES (5, 100002, 1, 1, '', 1);
INSERT INTO `ci_proficiency_details` VALUES (7, 10000, 1, 1, 'PGDIT', 1);
INSERT INTO `ci_proficiency_details` VALUES (11, 2000, 1, 1, '', 1);
INSERT INTO `ci_proficiency_details` VALUES (12, 2000, 1, 10, 'PGDIT', 1);
INSERT INTO `ci_proficiency_details` VALUES (13, 2000, 1, 1, '', 1);
INSERT INTO `ci_proficiency_details` VALUES (14, 2000, 1, 10, 'NIIT', 1);
INSERT INTO `ci_proficiency_details` VALUES (15, 2000, 1, 1, '', 1);
INSERT INTO `ci_proficiency_details` VALUES (19, 100054, 1, 1, '', 1);
INSERT INTO `ci_proficiency_details` VALUES (23, 100020, 1, 1, 'N', 1);
INSERT INTO `ci_proficiency_details` VALUES (24, 100020, 1, 10, 'NITT', 1);
INSERT INTO `ci_proficiency_details` VALUES (30, 100034, 1, 1, 'N', 1);
INSERT INTO `ci_proficiency_details` VALUES (33, 100053, 1, 1, 'A', 1);
INSERT INTO `ci_proficiency_details` VALUES (42, 100011, 1, 10, 'PGDIT', 1);
INSERT INTO `ci_proficiency_details` VALUES (43, 100011, 1, 1, '', 1);

-- ----------------------------
-- Table structure for ci_promotiondemotion_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_promotiondemotion_details`;
CREATE TABLE `ci_promotiondemotion_details`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) UNSIGNED NOT NULL,
  `type` tinyint(2) NOT NULL COMMENT '1-Promotion,2-Demotion',
  `is_promoted_demoted` tinyint(2) NOT NULL COMMENT '1- Yes,2- No',
  `promotion_type` tinyint(4) NOT NULL DEFAULT 0,
  `promoted_demoted_from` tinyint(4) NOT NULL,
  `promoted_demoted_to` tinyint(4) NOT NULL,
  `promotion_order_no` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `promotion_order_date` date NULL DEFAULT NULL,
  `promotion_demotion_date` date NOT NULL,
  `notional_joining_date` date NULL DEFAULT NULL,
  `is_offer_accepted` tinyint(2) NOT NULL DEFAULT 0 COMMENT '1- Yes,2- No',
  `is_debarred` tinyint(2) NULL DEFAULT 0 COMMENT '1- Yes,2- No',
  `debarred_letter_no` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `debarred_from` date NULL DEFAULT NULL,
  `debarred_to` date NULL DEFAULT NULL,
  `duration` int(11) NOT NULL DEFAULT 0,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_promotiondemotion_details
-- ----------------------------
INSERT INTO `ci_promotiondemotion_details` VALUES (6, 10001, 1, 1, 1, 22, 21, 'rtee2222', '2019-07-03', '2019-07-17', '2019-07-19', 1, 1, '', '1970-01-01', '1970-01-01', 0, 1, 0, '2019-07-29 10:51:12', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (7, 10001, 1, 1, 2, 21, 12, 'eretrt', '2019-07-24', '2019-07-26', '1970-01-01', 2, NULL, 'eeretrt', '2019-07-10', '2019-07-26', 17, 1, 0, '2019-07-29 10:51:12', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (8, 10001, 2, 1, 0, 18, 24, NULL, NULL, '2019-07-29', NULL, 0, 0, NULL, NULL, NULL, 0, 1, 0, '2019-07-29 10:51:12', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (9, 10000, 1, 1, 1, 24, 19, 'PRO1010', '2019-08-01', '2005-08-01', '2006-08-01', 1, 0, '', '0000-00-00', '0000-00-00', 0, 1, 0, '2019-08-28 17:01:11', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (10, 10000, 2, 1, 0, 22, 24, NULL, NULL, '2012-08-01', NULL, 0, 0, NULL, NULL, NULL, 0, 1, 0, '2019-08-28 17:01:11', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (11, 10004, 1, 1, 1, 11, 19, '4564', '2019-04-03', '2019-07-02', '0000-00-00', 2, 1, '65676', '2019-08-15', '2020-09-02', 385, 1, 0, '2019-09-02 15:54:48', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (12, 10004, 2, 1, 0, 18, 24, NULL, NULL, '2019-08-21', NULL, 0, 0, NULL, NULL, NULL, 0, 1, 0, '2019-09-02 15:54:48', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (13, 10004, 2, 1, 0, 24, 31, NULL, NULL, '2015-09-02', NULL, 0, 0, NULL, NULL, NULL, 0, 1, 0, '2019-09-02 15:54:48', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (14, 100002, 1, 1, 1, 44, 38, 'KVS/ORD/6578', '2010-08-20', '2010-09-01', '0000-00-00', 1, 0, '', '0000-00-00', '0000-00-00', 0, 23, 0, '2019-09-04 12:38:56', '0000-00-00 00:00:00');
INSERT INTO `ci_promotiondemotion_details` VALUES (15, 100002, 2, 2, 0, 0, 0, NULL, NULL, '0000-00-00', NULL, 0, 0, NULL, NULL, NULL, 0, 23, 0, '2019-09-04 12:38:56', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_qualification
-- ----------------------------
DROP TABLE IF EXISTS `ci_qualification`;
CREATE TABLE `ci_qualification`  (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_qualification
-- ----------------------------
INSERT INTO `ci_qualification` VALUES (0, 'Others', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ci_qualification` VALUES (1, 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ci_qualification` VALUES (2, 'Graduation', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ci_qualification` VALUES (3, 'Post-Graduation', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ci_qualification` VALUES (4, 'MPhil', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `ci_qualification` VALUES (5, 'PhD', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_regions
-- ----------------------------
DROP TABLE IF EXISTS `ci_regions`;
CREATE TABLE `ci_regions`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `code` int(11) NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` int(2) NOT NULL,
  `label` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `parent` int(10) NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_regions
-- ----------------------------
INSERT INTO `ci_regions` VALUES (1, 'Bhubaneswar ZIET', 2266, '', '', 2, 'ZT', 11, 1, '2019-08-22 14:57:58', '2019-10-03 11:02:33');
INSERT INTO `ci_regions` VALUES (2, 'Chandigarh ZIET', 1922, '', '', 2, 'ZT', 10, 1, '2019-08-22 14:57:58', '2019-10-03 11:02:52');
INSERT INTO `ci_regions` VALUES (3, 'Gwalior ZIET', 1918, '', '', 2, 'ZT', 12, 1, '2019-08-22 14:57:59', '2019-10-03 11:02:47');
INSERT INTO `ci_regions` VALUES (4, 'Mumbai ZIET', 1919, '', '', 2, 'ZT', 15, 1, '2019-08-22 14:57:59', '2019-10-03 11:02:42');
INSERT INTO `ci_regions` VALUES (5, 'KVS HQ ', 1917, '', '', 1, 'KV', 12, 1, '2019-08-22 14:57:59', '2019-10-03 11:00:43');
INSERT INTO `ci_regions` VALUES (6, 'Mysore ZIET', 1923, '', '', 2, 'ZT', 14, 1, '2019-08-22 14:57:59', '2019-10-03 11:02:38');
INSERT INTO `ci_regions` VALUES (7, 'Kathmandu HQ', 1898, '', '', 3, 'KV', 12, 1, '2019-08-22 15:02:28', '2019-10-03 11:01:28');
INSERT INTO `ci_regions` VALUES (8, 'Moscow HQ', 1897, '', '', 3, 'KV', 12, 1, '2019-08-22 15:02:29', '2019-10-03 11:01:16');
INSERT INTO `ci_regions` VALUES (9, 'Tehran HQ', 1487, '', '', 3, 'KV', 12, 1, '2019-08-22 15:02:30', '2019-10-03 11:01:12');
INSERT INTO `ci_regions` VALUES (10, 'Central', 100, '', '', 4, 'ZN', 0, 1, '2019-08-22 15:02:32', '2019-09-09 16:11:13');
INSERT INTO `ci_regions` VALUES (11, 'East', 101, '', '', 4, 'ZN', 0, 1, '2019-08-22 15:02:33', '2019-09-09 16:11:20');
INSERT INTO `ci_regions` VALUES (12, 'North', 102, '', '', 4, 'ZN', 0, 1, '2019-08-22 15:02:33', '2019-09-09 16:11:22');
INSERT INTO `ci_regions` VALUES (13, 'North East', 103, '', '', 4, 'ZN', 0, 1, '2019-08-22 15:02:34', '2019-09-09 16:11:25');
INSERT INTO `ci_regions` VALUES (14, 'South', 104, '', '', 4, 'ZN', 0, 1, '2019-08-22 15:02:34', '2019-09-09 16:11:28');
INSERT INTO `ci_regions` VALUES (15, 'West', 105, '', '', 4, 'ZN', 0, 1, '2019-08-22 15:02:35', '2019-09-09 16:11:34');
INSERT INTO `ci_regions` VALUES (16, 'AGRA', 2268, '', '', 5, 'RO', 10, 1, '2019-08-26 14:38:08', '2019-09-09 16:48:30');
INSERT INTO `ci_regions` VALUES (17, 'AHMEDABAD', 1899, '', '', 5, 'RO', 15, 1, '2019-08-26 14:38:08', '2019-09-09 16:49:04');
INSERT INTO `ci_regions` VALUES (18, 'BANGALORE', 1900, '', '', 5, 'RO', 14, 1, '2019-08-26 14:38:08', '2019-09-09 16:49:29');
INSERT INTO `ci_regions` VALUES (19, 'BHOPAL', 1901, '', '', 5, 'RO', 10, 1, '2019-08-26 14:38:08', '2019-09-09 16:50:06');
INSERT INTO `ci_regions` VALUES (20, 'BHUBANESWAR', 1902, '', '', 5, 'RO', 11, 1, '2019-08-26 14:38:08', '2019-09-09 16:50:10');
INSERT INTO `ci_regions` VALUES (21, 'CHANDIGARH', 1905, '', '', 5, 'RO', 12, 1, '2019-08-26 14:38:08', '2019-09-09 16:50:41');
INSERT INTO `ci_regions` VALUES (22, 'CHENNAI', 1914, '', '', 5, 'RO', 14, 1, '2019-08-26 14:38:08', '2019-09-09 16:50:48');
INSERT INTO `ci_regions` VALUES (23, 'DEHRADUN', 1906, '', '', 5, 'RO', 12, 1, '2019-08-26 14:38:08', '2019-09-09 16:51:09');
INSERT INTO `ci_regions` VALUES (24, 'DELHI', 1907, '', '', 5, 'RO', 12, 1, '2019-08-26 14:38:08', '2019-09-09 16:51:22');
INSERT INTO `ci_regions` VALUES (25, 'ERNAKULAM', 2269, '', '', 5, 'RO', 14, 1, '2019-08-26 14:38:08', '2019-09-09 16:51:39');
INSERT INTO `ci_regions` VALUES (26, 'GURGAON', 2274, '', '', 5, 'RO', 12, 1, '2019-08-26 14:38:08', '2019-09-09 16:51:53');
INSERT INTO `ci_regions` VALUES (27, 'GUWAHATI', 1908, '', '', 5, 'RO', 13, 1, '2019-08-26 14:38:08', '2019-09-09 16:52:14');
INSERT INTO `ci_regions` VALUES (28, 'HYDERABAD', 1909, '', '', 5, 'RO', 14, 1, '2019-08-26 14:38:08', '2019-09-09 16:52:21');
INSERT INTO `ci_regions` VALUES (29, 'JABALPUR', 1910, '', '', 5, 'RO', 10, 1, '2019-08-26 14:38:09', '2019-09-09 16:52:43');
INSERT INTO `ci_regions` VALUES (30, 'JAIPUR', 1911, '', '', 5, 'RO', 15, 1, '2019-08-26 14:38:09', '2019-09-09 16:52:58');
INSERT INTO `ci_regions` VALUES (31, 'JAMMU', 1912, '', '', 5, 'RO', 12, 1, '2019-08-26 14:38:09', '2019-09-09 16:53:04');
INSERT INTO `ci_regions` VALUES (32, 'KOLKATA', 1904, '', '', 5, 'RO', 11, 1, '2019-08-26 14:38:09', '2019-09-09 16:53:21');
INSERT INTO `ci_regions` VALUES (33, 'KVS HQ', 1917, '', '', 5, 'RO', 12, 0, '2019-08-26 14:38:09', '2019-09-09 16:10:04');
INSERT INTO `ci_regions` VALUES (34, 'LUCKNOW', 1913, '', '', 5, 'RO', 10, 1, '2019-08-26 14:38:09', '2019-09-09 16:53:40');
INSERT INTO `ci_regions` VALUES (35, 'MUMBAI', 1903, '', '', 5, 'RO', 12, 1, '2019-08-26 14:38:09', '2019-09-09 16:53:47');
INSERT INTO `ci_regions` VALUES (36, 'PATNA', 1915, '', '', 5, 'RO', 11, 1, '2019-08-26 14:38:09', '2019-09-09 16:54:09');
INSERT INTO `ci_regions` VALUES (37, 'RAIPUR', 2271, '', '', 5, 'RO', 10, 1, '2019-08-26 14:38:09', '2019-09-09 16:54:30');
INSERT INTO `ci_regions` VALUES (38, 'RANCHI', 2270, '', '', 5, 'RO', 11, 1, '2019-08-26 14:38:09', '2019-09-09 16:54:43');
INSERT INTO `ci_regions` VALUES (39, 'SILCHAR', 1916, '', '', 5, 'RO', 13, 1, '2019-08-26 14:38:09', '2019-09-09 16:54:57');
INSERT INTO `ci_regions` VALUES (40, 'TINSUKIA', 2273, '', '', 5, 'RO', 13, 1, '2019-08-26 14:38:09', '2019-09-09 16:55:14');
INSERT INTO `ci_regions` VALUES (41, 'VARANASI', 2272, '', '', 5, 'RO', 10, 1, '2019-08-26 14:38:09', '2019-09-09 16:55:23');

-- ----------------------------
-- Table structure for ci_regions_back
-- ----------------------------
DROP TABLE IF EXISTS `ci_regions_back`;
CREATE TABLE `ci_regions_back`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `website` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `code` int(2) NOT NULL,
  `label` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_regions_back
-- ----------------------------
INSERT INTO `ci_regions_back` VALUES (1, 'Bhubaneswar', '', '', 2, 'ZT', 1, '2019-08-22 14:57:58', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (2, 'Chandigarh', '', '', 2, 'ZT', 1, '2019-08-22 14:57:58', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (3, 'Gwalior', '', '', 2, 'ZT', 1, '2019-08-22 14:57:59', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (4, 'Mumbai', '', '', 2, 'ZT', 1, '2019-08-22 14:57:59', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (5, 'KV Head Quarter', '', '', 1, 'KV', 1, '2019-08-22 14:57:59', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (6, 'Mysore', '', '', 2, 'ZT', 1, '2019-08-22 14:57:59', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (7, 'Kathmandu', '', '', 3, 'KV', 1, '2019-08-22 15:02:28', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (8, 'Moscow', '', '', 3, 'KV', 1, '2019-08-22 15:02:29', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (9, 'Tehran', '', '', 3, 'KV', 1, '2019-08-22 15:02:30', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (10, 'Central', '', '', 4, 'ZN', 1, '2019-08-22 15:02:32', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (11, 'East', '', '', 4, 'ZN', 1, '2019-08-22 15:02:33', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (12, 'North', '', '', 4, 'ZN', 1, '2019-08-22 15:02:33', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (13, 'North East', '', '', 4, 'ZN', 1, '2019-08-22 15:02:34', '2019-08-26 14:38:38');
INSERT INTO `ci_regions_back` VALUES (14, 'South', '', '', 4, 'ZN', 1, '2019-08-22 15:02:34', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (15, 'West', '', '', 4, 'ZN', 1, '2019-08-22 15:02:35', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (16, 'AGRA', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (17, 'AHMEDABAD', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (18, 'BANGALORE', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (19, 'BHOPAL', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (20, 'BHUBANESWAR', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (21, 'CHANDIGARH', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (22, 'CHENNAI', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (23, 'DEHRADUN', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (24, 'DELHI', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (25, 'ERNAKULAM', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (26, 'GURGAON', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (27, 'GUWAHATI', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (28, 'HYDERABAD', '', '', 5, 'RO', 1, '2019-08-26 14:38:08', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (29, 'JABALPUR', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (30, 'JAIPUR', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (31, 'JAMMU', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (32, 'KOLKATA', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (33, 'KVS HQ', '', '', 0, '0', 0, '2019-08-26 14:38:09', '2019-09-03 11:35:11');
INSERT INTO `ci_regions_back` VALUES (34, 'LUCKNOW', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (35, 'MUMBAI', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (36, 'PATNA', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (37, 'RAIPUR', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:39');
INSERT INTO `ci_regions_back` VALUES (38, 'RANCHI', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:40');
INSERT INTO `ci_regions_back` VALUES (39, 'SILCHAR', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:40');
INSERT INTO `ci_regions_back` VALUES (40, 'TINSUKIA', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:40');
INSERT INTO `ci_regions_back` VALUES (41, 'VARANASI', '', '', 5, 'RO', 1, '2019-08-26 14:38:09', '2019-08-26 14:38:40');

-- ----------------------------
-- Table structure for ci_results
-- ----------------------------
DROP TABLE IF EXISTS `ci_results`;
CREATE TABLE `ci_results`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` bigint(12) NOT NULL,
  `emp_type` int(11) NOT NULL,
  `emp_dign_post` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime(0) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime(0) NOT NULL,
  `status` int(11) NOT NULL,
  `results_isdraft` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_results
-- ----------------------------
INSERT INTO `ci_results` VALUES (19, 10004, 1, 8, 1, '2019-09-02 00:00:00', 1, '2019-09-02 00:00:00', 1, 1);
INSERT INTO `ci_results` VALUES (24, 0, 2, 37, 1, '2019-09-03 00:00:00', 1, '2019-09-03 00:00:00', 1, 1);
INSERT INTO `ci_results` VALUES (32, 100002, 2, 38, 23, '2019-09-04 00:00:00', 23, '2019-09-04 00:00:00', 1, 1);
INSERT INTO `ci_results` VALUES (33, 10000, 1, 3, 1, '2019-10-10 00:00:00', 1, '2019-10-10 00:00:00', 1, 1);

-- ----------------------------
-- Table structure for ci_results_non_tech_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_results_non_tech_details`;
CREATE TABLE `ci_results_non_tech_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `results_id` int(11) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  `rsnt_vid_ofc_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rsnt_dign_post` int(11) NOT NULL,
  `rsnt_srv_frm_date` datetime(0) NOT NULL,
  `rsnt_srv_to_date` datetime(0) NOT NULL,
  `rsnt_sec_mat_details` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rsnt_res_disp` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rsnt_doc_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_results_non_tech_details
-- ----------------------------
INSERT INTO `ci_results_non_tech_details` VALUES (11, 32, 100002, 'kvshq', 38, '2018-09-01 00:00:00', '2019-09-01 00:00:00', 'edp', 'rtrtr', '95fe382f36407493f23f1d314fb0c36b.jpg');
INSERT INTO `ci_results_non_tech_details` VALUES (12, 32, 100002, 'kvshq', 38, '2017-09-01 00:00:00', '2018-09-01 00:00:00', 'edp', 'trfty', '9938e3ee82a0ce009d6e90e982c38ea1.jpg');

-- ----------------------------
-- Table structure for ci_results_tech_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_results_tech_details`;
CREATE TABLE `ci_results_tech_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `results_id` int(11) NOT NULL,
  `emp_id` bigint(20) NOT NULL,
  `rst_class` int(11) NOT NULL,
  `rst_year` int(11) NOT NULL,
  `rst_no_students` int(11) NOT NULL,
  `rst_no_pass_students` int(11) NOT NULL,
  `rst_pass_per` decimal(10, 2) NOT NULL,
  `rst_subjects` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rst_pass_per_grade` decimal(10, 2) NOT NULL,
  `rst_pass_per_ninety` decimal(10, 2) NOT NULL,
  `rst_pi_highest` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rst_pi_class_xii` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_results_tech_details
-- ----------------------------
INSERT INTO `ci_results_tech_details` VALUES (30, 19, 10004, 6, 2010, 60, 58, 96.00, '3', 0.00, 0.00, '0', '0');
INSERT INTO `ci_results_tech_details` VALUES (31, 19, 10004, 7, 2010, 60, 60, 100.00, '3', 0.00, 0.00, '0', '0');
INSERT INTO `ci_results_tech_details` VALUES (32, 19, 10004, 9, 2010, 60, 60, 100.00, '3', 0.00, 0.00, '0', '0');
INSERT INTO `ci_results_tech_details` VALUES (33, 19, 10004, 8, 2010, 60, 60, 100.00, '3', 0.00, 0.00, '0', '0');
INSERT INTO `ci_results_tech_details` VALUES (36, 33, 10000, 1, 2010, 100, 96, 96.00, '7', 98.00, 0.00, '0', '0');
INSERT INTO `ci_results_tech_details` VALUES (37, 33, 10000, 2, 2011, 100, 90, 90.00, '2', 98.00, 0.00, '0', '0');

-- ----------------------------
-- Table structure for ci_role_category
-- ----------------------------
DROP TABLE IF EXISTS `ci_role_category`;
CREATE TABLE `ci_role_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_role_category
-- ----------------------------
INSERT INTO `ci_role_category` VALUES (1, 'Academic', '2019-05-15 00:00:00', '2019-05-15 00:00:00', 1);
INSERT INTO `ci_role_category` VALUES (2, 'Administration', '2019-05-15 00:00:00', '2019-05-15 00:00:00', 1);
INSERT INTO `ci_role_category` VALUES (3, 'Establishment', '2019-05-15 00:00:00', '2019-05-15 00:00:00', 1);
INSERT INTO `ci_role_category` VALUES (4, 'Finance', '2019-05-15 00:00:00', '2019-05-15 00:00:00', 1);
INSERT INTO `ci_role_category` VALUES (5, 'Personnel', '2019-05-15 00:00:00', '2019-05-15 00:00:00', 1);
INSERT INTO `ci_role_category` VALUES (6, 'Training', '2019-05-15 00:00:00', '2019-05-15 00:00:00', 1);
INSERT INTO `ci_role_category` VALUES (7, 'Works', '2019-05-15 00:00:00', '2019-05-15 00:00:00', 1);

-- ----------------------------
-- Table structure for ci_roles
-- ----------------------------
DROP TABLE IF EXISTS `ci_roles`;
CREATE TABLE `ci_roles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `label` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `permissions` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `dept_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_roles
-- ----------------------------
INSERT INTO `ci_roles` VALUES (1, 'Super Admin', 'Super Admin', 'Super Admin', '[\"dashboard\\/index\",\"users\\/index\",\"profile\\/profilelist\",\"vacancy\\/index\",\"transfer\\/index\",\"swap\\/index\",\"employee\\/index\",\"users\\/add\",\"users\\/edit\",\"users\\/details\",\"users\\/change_status\",\"users\\/delete\",\"roles\\/index\",\"roles\\/add\",\"roles\\/details\",\"roles\\/change_status\",\"permission\\/set_permission\",\"admin/users\",\"master/designation_category\",\"master/designation\",\"master/category\",\"master/region\",\"master/school\",\"master/subject\",\"master/qualification\",\"master/promotions\",\"master/level_range\",\"master/designation_category_details\",\"master/add_designation_category\",\"master/delete_designation_category\",\"master/designation_details\",\"master/add_designation\",\"master/delete_designation\"]', 1, '2019-05-15 00:00:00', '2019-11-15 08:52:45', NULL);
INSERT INTO `ci_roles` VALUES (2, 'KVS HQ', 'KVS HQ', 'KVS Head Quater', '[\"dashboard\\/index\",\"employee\\/index\",\"transfer\\/index\",\"swap\\/index\"]', 1, '0000-00-00 00:00:00', '2019-11-15 08:52:49', NULL);
INSERT INTO `ci_roles` VALUES (3, 'Regional Office', 'RO', 'Regional Office', '[\"dashboard\\/index\",\"employee\\/index\",\"transfer\\/index\",\"swap\\/index\"]', 1, '0000-00-00 00:00:00', '2019-11-15 08:52:53', NULL);
INSERT INTO `ci_roles` VALUES (4, 'ZIET', 'ZIET', 'ZIET', '[\"dashboard\\/index\",\"employee\\/index\",\"transfer\\/index\",\"swap\\/index\"]', 1, '0000-00-00 00:00:00', '2019-11-15 08:52:57', NULL);
INSERT INTO `ci_roles` VALUES (5, 'Kendriya Vidyalaya', 'Kendriya Vidyalaya', 'Kendriya Vidyalaya', '[\"dashboard\\/index\",\"employee\\/index\",\"transfer\\/index\",\"swap\\/index\"]', 1, '0000-00-00 00:00:00', '2019-11-15 08:53:04', NULL);
INSERT INTO `ci_roles` VALUES (6, 'Employee', 'Employee', 'Employee', '[\"dashboard\\/index\",\"profile\\/index\"]', 1, '0000-00-00 00:00:00', '2019-09-11 16:03:09', NULL);
INSERT INTO `ci_roles` VALUES (7, 'Abroad KV', 'Abroad KV', 'Abroad KV', '[\"dashboard\\/index\",\"employee\\/index\",\"transfer\\/index\",\"swap\\/index\"]', 1, '0000-00-00 00:00:00', '2019-12-09 10:04:42', NULL);

-- ----------------------------
-- Table structure for ci_schools
-- ----------------------------
DROP TABLE IF EXISTS `ci_schools`;
CREATE TABLE `ci_schools`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `code` int(4) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `zone` int(4) NOT NULL,
  `station` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1206 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_schools
-- ----------------------------
INSERT INTO `ci_schools` VALUES (1, 16, 'Kendriya Vidyalaya (afs) No.I Agra Cantt', 1704, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (2, 16, 'Kendriya Vidyalaya Afs Chandi Nagar', 1357, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (3, 16, 'Kendriya Vidyalaya Afs Sarsawa', 1395, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (4, 16, 'Kendriya Vidyalaya Aligarh', 1707, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (5, 16, 'Kendriya Vidyalaya Babina Cantt.', 1716, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (6, 16, 'Kendriya Vidyalaya Babugarh Cantt.', 1400, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (7, 16, 'Kendriya Vidyalaya Baoli Baghpat', 2387, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (8, 16, 'Kendriya Vidyalaya Bulandshahar', 1721, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (9, 16, 'Kendriya Vidyalaya Crpf Rampur', 1390, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (10, 16, 'Kendriya Vidyalaya Dl Meerut Cantt', 1379, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (11, 16, 'Kendriya Vidyalaya Etah', 2186, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (12, 16, 'Kendriya Vidyalaya Etawa', 2256, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (13, 16, 'Kendriya Vidyalaya Ghaziabad', 1452, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (14, 16, 'Kendriya Vidyalaya Greater Noida', 1453, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (15, 16, 'Kendriya Vidyalaya Hathras', 2188, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (16, 16, 'Kendriya Vidyalaya Lalitpur', 2257, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (17, 16, 'Kendriya Vidyalaya Mahoba', 2187, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (18, 16, 'Kendriya Vidyalaya Mathura Baad', 1751, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (19, 16, 'Kendriya Vidyalaya Mathura Cantt', 1752, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (20, 16, 'Kendriya Vidyalaya Mrp Mathura', 1750, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (21, 16, 'Kendriya Vidyalaya Murad Nagar', 1455, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (22, 16, 'Kendriya Vidyalaya Muzaffar Nagar', 1385, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (23, 16, 'Kendriya Vidyalaya No. I Jhansi Cantt', 1728, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (24, 16, 'Kendriya Vidyalaya No. I Moradabad', 1382, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (25, 16, 'Kendriya Vidyalaya No. II Jhansi Cantt', 1729, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (26, 16, 'Kendriya Vidyalaya No. III Jhansi Cantt', 1730, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (27, 16, 'Kendriya Vidyalaya No.I Hindon', 1421, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (28, 16, 'Kendriya Vidyalaya No.II Agra Cantt', 1705, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (29, 16, 'Kendriya Vidyalaya No.II Hindon', 1422, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (30, 16, 'Kendriya Vidyalaya No.III Agra Cantt', 1706, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (31, 16, 'Kendriya Vidyalaya Noida', 1431, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (32, 16, 'Kendriya Vidyalaya Ntpc Dadri', 1402, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (33, 16, 'Kendriya Vidyalaya Oef Hazaratpur', 1726, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (34, 16, 'Kendriya Vidyalaya Pl Meerut Cantt', 1380, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (35, 16, 'Kendriya Vidyalaya Sl Meerut Cantt', 1381, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (36, 16, 'Kendriya Vidyalaya Surajpur', 2389, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (37, 16, 'Kendriya Vidyalaya Talbehat', 1756, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (38, 17, 'Kendriya Vidyalaya Afs Darjeepura', 2194, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (39, 17, 'Kendriya Vidyalaya Afs Naliya', 1033, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (40, 17, 'Kendriya Vidyalaya Afs Samana', 1028, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (41, 17, 'Kendriya Vidyalaya Afs Wadsar', 1043, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (42, 17, 'Kendriya Vidyalaya Ahmedabad Cantt', 1002, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (43, 17, 'Kendriya Vidyalaya Bhavnagar Para', 1011, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (44, 17, 'Kendriya Vidyalaya Bsf Dantiwada', 1015, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (45, 17, 'Kendriya Vidyalaya Crpf Gandhinagar', 1021, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (46, 17, 'Kendriya Vidyalaya Dahod', 2195, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (47, 17, 'Kendriya Vidyalaya Dharangandhra', 1016, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (48, 17, 'Kendriya Vidyalaya Diu', 1017, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (49, 17, 'Kendriya Vidyalaya Dwarka', 1018, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (50, 17, 'Kendriya Vidyalaya Godhra', 2085, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (51, 17, 'Kendriya Vidyalaya Hajira No.II Surat', 1039, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (52, 17, 'Kendriya Vidyalaya Himmat Nagar', 1024, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (53, 17, 'Kendriya Vidyalaya Iffco Gandhidham', 1019, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (54, 17, 'Kendriya Vidyalaya Ins Valsura', 1029, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (55, 17, 'Kendriya Vidyalaya Jetpur', 1030, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (56, 17, 'Kendriya Vidyalaya No. I Gandhinagar', 1023, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (57, 17, 'Kendriya Vidyalaya No. I M.r. Campus Ahmedabad', 1003, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (58, 17, 'Kendriya Vidyalaya No. III Gandhinagar Cantt.', 1022, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (59, 17, 'Kendriya Vidyalaya No. IV Baroda', 1010, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (60, 17, 'Kendriya Vidyalaya No.I Afs Jamnagar', 1025, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (61, 17, 'Kendriya Vidyalaya No.II Baroda', 1008, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (62, 17, 'Kendriya Vidyalaya No.II Bhuj Cantt.', 1013, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (63, 17, 'Kendriya Vidyalaya No.II Jamnagar', 1026, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (64, 17, 'Kendriya Vidyalaya No.III (af) Jamnagar', 1027, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (65, 17, 'Kendriya Vidyalaya No.III (afs) Baroda', 1009, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (66, 17, 'Kendriya Vidyalaya Okha', 1034, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (67, 17, 'Kendriya Vidyalaya Ongc Ankleshwar', 1006, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (68, 17, 'Kendriya Vidyalaya Ongc Cambey', 1014, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (69, 17, 'Kendriya Vidyalaya Ongc Chandkheda', 1004, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (70, 17, 'Kendriya Vidyalaya Ongc Mehsana', 1032, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (71, 17, 'Kendriya Vidyalaya Ongc No.III Surat', 1040, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (72, 17, 'Kendriya Vidyalaya Patan', 2371, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (73, 17, 'Kendriya Vidyalaya Porbander', 1035, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (74, 17, 'Kendriya Vidyalaya Rajkot', 1036, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (75, 17, 'Kendriya Vidyalaya Rly. Colony Gandhidham', 1020, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (76, 17, 'Kendriya Vidyalaya Sabarmati', 1005, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (77, 17, 'Kendriya Vidyalaya Sac Ahmedabad', 1001, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (78, 17, 'Kendriya Vidyalaya Silvassa', 1037, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (79, 17, 'Kendriya Vidyalaya V V Nagar', 1041, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (80, 17, 'Kendriya Vidyalaya Viramgaon', 1042, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (81, 17, 'Kendriya Vidylaya Afs No.I Bhuj', 1012, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (82, 17, 'Kendriya Vidylaya No.I Baroda', 1007, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (83, 17, 'Kendriya Vidyalaya Junagarh', 1031, 1, 15, '0', '2019-01-01 00:00:00', '2019-09-04 10:35:43');
INSERT INTO `ci_schools` VALUES (84, 17, 'Kendriya Vidyalaya No.I Surat', 1038, 1, 15, '0', '2019-01-01 00:00:00', '2019-09-04 10:35:39');
INSERT INTO `ci_schools` VALUES (85, 18, 'Kendriya Vidyalaya Afs Yelahanka', 1054, 1, 14, '0', '2019-01-01 00:00:00', '2019-09-04 10:34:50');
INSERT INTO `ci_schools` VALUES (86, 18, 'Kendriya Vidyalaya Afs No.I Jalahalli', 1051, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (87, 18, 'Kendriya Vidyalaya Afs No.II Jalahalli', 1052, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (88, 18, 'Kendriya Vidyalaya Afs Sambra', 1058, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (89, 18, 'Kendriya Vidyalaya Asc Bangalore', 1044, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (90, 18, 'Kendriya Vidyalaya Bagalkot', 2117, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (91, 18, 'Kendriya Vidyalaya Bellary', 1059, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (92, 18, 'Kendriya Vidyalaya Beml Nagar Kolar', 1060, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (93, 18, 'Kendriya Vidyalaya Brbnmpl Mysuru', 2381, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (94, 18, 'Kendriya Vidyalaya Chamraj Nagar', 2284, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (95, 18, 'Kendriya Vidyalaya Channapatna', 2354, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (96, 18, 'Kendriya Vidyalaya Chikodi', 2301, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (97, 18, 'Kendriya Vidyalaya Crpf Yelahanka', 1055, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (98, 18, 'Kendriya Vidyalaya Davangere', 2168, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (99, 18, 'Kendriya Vidyalaya Dharwad', 1074, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (100, 18, 'Kendriya Vidyalaya Drdo Bangalore', 1045, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (101, 18, 'Kendriya Vidyalaya Gangavathi', 2377, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (102, 18, 'Kendriya Vidyalaya Gauribidanur', 2385, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (103, 18, 'Kendriya Vidyalaya Gulbarga Kalaburagi', 1071, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (104, 18, 'Kendriya Vidyalaya Hassan', 1072, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (105, 18, 'Kendriya Vidyalaya Haveri', 2299, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (106, 18, 'Kendriya Vidyalaya Hebbal Bangalore', 1046, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (107, 18, 'Kendriya Vidyalaya Hospet', 1073, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (108, 18, 'Kendriya Vidyalaya Hutti', 2314, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (109, 18, 'Kendriya Vidyalaya Iisc Bangalore', 1047, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (110, 18, 'Kendriya Vidyalaya Kadrimidri', 2342, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (111, 18, 'Kendriya Vidyalaya Karwar', 2060, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (112, 18, 'Kendriya Vidyalaya Kodagu', 2064, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (113, 18, 'Kendriya Vidyalaya Koppal', 2167, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (114, 18, 'Kendriya Vidyalaya Krishnarajapuram', 2246, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (115, 18, 'Kendriya Vidyalaya Malleshwaram', 1049, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (116, 18, 'Kendriya Vidyalaya Mandya', 2300, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (117, 18, 'Kendriya Vidyalaya Meg & Centre Bangalore', 1050, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (118, 18, 'Kendriya Vidyalaya Mg Rly. Bangalore', 1053, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (119, 18, 'Kendriya Vidyalaya Mmpu Belgaum Cantt.', 2116, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (120, 18, 'Kendriya Vidyalaya Mysore', 1083, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (121, 18, 'Kendriya Vidyalaya Nal Bangalore', 1048, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (122, 18, 'Kendriya Vidyalaya Ndmc Donimalai', 1065, 1, 14, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (123, 18, 'Kendriya Vidyalaya No II Hubli', 1076, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (124, 18, 'Kendriya Vidyalaya No.I Hubli', 1075, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (125, 18, 'Kendriya Vidyalaya No.I Mangalore', 1081, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (126, 18, 'Kendriya Vidyalaya No.II Mangaluru', 1082, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (127, 18, 'Kendriya Vidyalaya No.III Belgaum', 1057, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (128, 18, 'Kendriya Vidyalaya Raichur', 1085, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (129, 18, 'Kendriya Vidyalaya Shivamogga', 2169, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (130, 18, 'Kendriya Vidyalaya Tumkur', 1086, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (131, 18, 'Kendriya Vidyalaya Udupi', 2306, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (132, 18, 'Kendriya Vidyalaya Vijayapura', 1062, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (133, 18, 'Kendriya Vidyalaya W&ap Yelahanka', 1056, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (134, 18, 'Kendriya Vidylaya Afs Bidar', 1061, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (135, 19, 'Kendriya Vidyalaya Afs Amla', 1087, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (136, 19, 'Kendriya Vidyalaya Afs No.II Gwalior', 1105, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (137, 19, 'Kendriya Vidyalaya Ag No.V Gwalior', 1108, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (138, 19, 'Kendriya Vidyalaya Ambah', 2320, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (139, 19, 'Kendriya Vidyalaya B.s.f. Academy Tekanpur', 2327, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (140, 19, 'Kendriya Vidyalaya Badwani', 2093, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (141, 19, 'Kendriya Vidyalaya Bairagarh', 1091, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (142, 19, 'Kendriya Vidyalaya Betul', 2201, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (143, 19, 'Kendriya Vidyalaya Bhind', 1090, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (144, 19, 'Kendriya Vidyalaya Bina', 1096, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (145, 19, 'Kendriya Vidyalaya Bsf No.II Indore', 1111, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (146, 19, 'Kendriya Vidyalaya Chanderi Fatehabad', 2339, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (147, 19, 'Kendriya Vidyalaya Cisf Barwaha', 1088, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (148, 19, 'Kendriya Vidyalaya Crpf Bangrasia', 2199, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (149, 19, 'Kendriya Vidyalaya Crpf Neemuch', 1127, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (150, 19, 'Kendriya Vidyalaya Dabra', 2356, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (151, 19, 'Kendriya Vidyalaya Datia', 2146, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (152, 19, 'Kendriya Vidyalaya Dewas', 1101, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (153, 19, 'Kendriya Vidyalaya Dhar', 1102, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (154, 19, 'Kendriya Vidyalaya Gail Jhabua', 1115, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (155, 19, 'Kendriya Vidyalaya Gail Vijayapur', 1139, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (156, 19, 'Kendriya Vidyalaya Ganj Basoda', 2341, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (157, 19, 'Kendriya Vidyalaya Guna', 1103, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (158, 19, 'Kendriya Vidyalaya Harda', 2203, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (159, 19, 'Kendriya Vidyalaya Hoshangabad', 1109, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (160, 19, 'Kendriya Vidyalaya Itbp Karera', 1117, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (161, 19, 'Kendriya Vidyalaya Itbp Shivpuri', 1136, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (162, 19, 'Kendriya Vidyalaya Kasrawad', 2295, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (163, 19, 'Kendriya Vidyalaya Khandwa', 1118, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (164, 19, 'Kendriya Vidyalaya Khargone', 1119, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (165, 19, 'Kendriya Vidyalaya Mandsaur', 1120, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (166, 19, 'Kendriya Vidyalaya Mhow', 1112, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (167, 19, 'Kendriya Vidyalaya Multai', 2343, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (168, 19, 'Kendriya Vidyalaya Mungaoli', 2061, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (169, 19, 'Kendriya Vidyalaya Murena', 1121, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (170, 19, 'Kendriya Vidyalaya Nepa Nagar', 1128, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (171, 19, 'Kendriya Vidyalaya Nhdc Narmada Nagar', 1126, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (172, 19, 'Kendriya Vidyalaya No. II Itarasi', 1114, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (173, 19, 'Kendriya Vidyalaya No. II Neemuch', 2345, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (174, 19, 'Kendriya Vidyalaya No.I Bhopal', 1092, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (175, 19, 'Kendriya Vidyalaya No.I Gwalior', 1104, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (176, 19, 'Kendriya Vidyalaya No.I Indore', 1110, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (177, 19, 'Kendriya Vidyalaya No.I Itarasi', 1113, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (178, 19, 'Kendriya Vidyalaya No.II Bhopal', 1093, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (179, 19, 'Kendriya Vidyalaya No.III Bhopal', 1094, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (180, 19, 'Kendriya Vidyalaya No.III Morar Cantt.', 1106, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (181, 19, 'Kendriya Vidyalaya No.IV (afs) Gwalior', 1107, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (182, 19, 'Kendriya Vidyalaya Pachmarhi', 1130, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (183, 19, 'Kendriya Vidyalaya Raisen', 2200, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (184, 19, 'Kendriya Vidyalaya Rajgarh', 1132, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (185, 19, 'Kendriya Vidyalaya Ratlam', 1133, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (186, 19, 'Kendriya Vidyalaya Sehore', 1095, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (187, 19, 'Kendriya Vidyalaya Seoni Malwa', 1135, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (188, 19, 'Kendriya Vidyalaya Shajapur', 1925, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (189, 19, 'Kendriya Vidyalaya Sheopur', 2123, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (190, 19, 'Kendriya Vidyalaya Tikamgarh', 2248, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (191, 19, 'Kendriya Vidyalaya Ujjain', 1137, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (192, 19, 'Kendriya Vidyalaya Vidisha', 1138, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (193, 19, 'Kendriya Vidyalaya Wcl Sarni', 1134, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (194, 19, 'Kendriya Vidyalaya Burhanpur', 2202, 1, 10, '0', '2019-01-01 00:00:00', '2019-09-04 10:35:52');
INSERT INTO `ci_schools` VALUES (195, 20, 'Kendriya Vidyalaya Angul', 1140, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (196, 20, 'Kendriya Vidyalaya Arc Charbatia', 1160, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (197, 20, 'Kendriya Vidyalaya Aska', 2226, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (198, 20, 'Kendriya Vidyalaya Balasore', 1141, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (199, 20, 'Kendriya Vidyalaya Bargarh', 1142, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (200, 20, 'Kendriya Vidyalaya Barimul', 2229, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (201, 20, 'Kendriya Vidyalaya Baripada', 1143, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (202, 20, 'Kendriya Vidyalaya Berhampur', 1144, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (203, 20, 'Kendriya Vidyalaya Bhadrak', 2126, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (204, 20, 'Kendriya Vidyalaya Bhanjnagar', 2220, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (205, 20, 'Kendriya Vidyalaya Bhawani Patna', 1145, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (206, 20, 'Kendriya Vidyalaya Bondamunda', 1157, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (207, 20, 'Kendriya Vidyalaya Boudh', 2065, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (208, 20, 'Kendriya Vidyalaya Crpf No. Ii Bhubaneshwar', 1147, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (209, 20, 'Kendriya Vidyalaya Cuttack', 1149, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (210, 20, 'Kendriya Vidyalaya Devgarh', 2223, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (211, 20, 'Kendriya Vidyalaya Dharamgarh', 2328, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (212, 20, 'Kendriya Vidyalaya Dhenkanal Town', 1165, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (213, 20, 'Kendriya Vidyalaya Digapahandi', 2225, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (214, 20, 'Kendriya Vidyalaya Gajapati', 2067, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (215, 20, 'Kendriya Vidyalaya Gopalpur Cantt.', 1167, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (216, 20, 'Kendriya Vidyalaya Hinjilicut', 2316, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (217, 20, 'Kendriya Vidyalaya Ins Chilka', 1161, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (218, 20, 'Kendriya Vidyalaya Jagatsinghpur', 2363, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (219, 20, 'Kendriya Vidyalaya Jajpur', 2224, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (220, 20, 'Kendriya Vidyalaya Jharsuguda', 1169, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (221, 20, 'Kendriya Vidyalaya Kandhamal', 2124, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (222, 20, 'Kendriya Vidyalaya Keonjhar', 1170, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (223, 20, 'Kendriya Vidyalaya Kharirar', 2231, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (224, 20, 'Kendriya Vidyalaya Khurda Road', 1150, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (225, 20, 'Kendriya Vidyalaya Koraput', 1171, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (226, 20, 'Kendriya Vidyalaya Kutra', 2218, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (227, 20, 'Kendriya Vidyalaya Mahuldiha', 2234, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (228, 20, 'Kendriya Vidyalaya Malkangiri', 2068, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (229, 20, 'Kendriya Vidyalaya Murgabadi', 2221, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (230, 20, 'Kendriya Vidyalaya Nabrangpur', 2069, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (231, 20, 'Kendriya Vidyalaya Nayagarh', 2230, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (232, 20, 'Kendriya Vidyalaya Ndrf No. III Mundali', 2228, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (233, 20, 'Kendriya Vidyalaya No. I Bhubaneshwar', 1146, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (234, 20, 'Kendriya Vidyalaya No. I Sambalpur', 1187, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (235, 20, 'Kendriya Vidyalaya No. II Angul', 2362, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (236, 20, 'Kendriya Vidyalaya No. II Sambalpur', 2315, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (237, 20, 'Kendriya Vidyalaya No. V Kalinga Nagar', 2232, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (238, 20, 'Kendriya Vidyalaya No.II Balasore', 2361, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (239, 20, 'Kendriya Vidyalaya No.II Bolangir', 1156, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (240, 20, 'Kendriya Vidyalaya No.II Cuttack', 2219, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (241, 20, 'Kendriya Vidyalaya No.III Mancheswar', 1151, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (242, 20, 'Kendriya Vidyalaya No.IV Bhubaneshwar', 1148, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (243, 20, 'Kendriya Vidyalaya No.VI Pokhariput', 2233, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (244, 20, 'Kendriya Vidyalaya Ntpc Kaniha', 1192, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (245, 20, 'Kendriya Vidyalaya Nuapada', 2227, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (246, 20, 'Kendriya Vidyalaya Of No.I Bolangir', 1155, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (247, 20, 'Kendriya Vidyalaya Paradip Port', 1174, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (248, 20, 'Kendriya Vidyalaya Puri', 1176, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (249, 20, 'Kendriya Vidyalaya Rayagada', 2070, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (250, 20, 'Kendriya Vidyalaya Rourkela', 1186, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (251, 20, 'Kendriya Vidyalaya Sonepur', 2222, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (252, 20, 'Kendriya Vidyalaya Sunabeda', 1189, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (253, 20, 'Kendriya Vidyalaya Sundargarh', 1190, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (254, 20, 'Kendriya Vidyalaya Vyasnagar', 2326, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (255, 21, 'Kendriya Vidyalaya Ubhawal', 2215, 1, 12, '0', '2019-01-01 00:00:00', '2019-09-04 10:34:11');
INSERT INTO `ci_schools` VALUES (256, 21, 'Kendriya Vidyalaya 3 Brd No.II Chandigarh', 1302, 1, 12, '0', '2019-01-01 00:00:00', '2019-09-04 10:34:08');
INSERT INTO `ci_schools` VALUES (257, 21, 'Kendriya Vidlayalaya Rcf Kapurthala Hussainpur Ii', 2106, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (258, 21, 'Kendriya Vidyalaya Abohar', 1289, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (259, 21, 'Kendriya Vidyalaya Afs Barnala', 1296, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (260, 21, 'Kendriya Vidyalaya Afs No. 1 Pathankot', 1690, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (261, 21, 'Kendriya Vidyalaya Afs No.I Halwara', 1314, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (262, 21, 'Kendriya Vidyalaya Afs No.II Halwara', 1315, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (263, 21, 'Kendriya Vidyalaya Afs No.III Bhatinda', 1300, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (264, 21, 'Kendriya Vidyalaya Baddowal Cantt', 1295, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (265, 21, 'Kendriya Vidyalaya Bhunga', 2249, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (266, 21, 'Kendriya Vidyalaya Bsf Amarkot', 2163, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (267, 21, 'Kendriya Vidyalaya Bsf Bhikiwind', 2162, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (268, 21, 'Kendriya Vidyalaya Bsf Fazilka', 2216, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (269, 21, 'Kendriya Vidyalaya Bsf Jalalabad', 1319, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (270, 21, 'Kendriya Vidyalaya Bsf Kms Wala', 2213, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (271, 21, 'Kendriya Vidyalaya Bsf Shikar Pur', 1696, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (272, 21, 'Kendriya Vidyalaya Cantt. No. I Ferozepur', 1312, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (273, 21, 'Kendriya Vidyalaya Crpf Saraikhas', 2161, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (274, 21, 'Kendriya Vidyalaya Dappar', 1310, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (275, 21, 'Kendriya Vidyalaya Dcw No.II Patiala', 1336, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (276, 21, 'Kendriya Vidyalaya Faridkot', 1311, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (277, 21, 'Kendriya Vidyalaya High Grounds', 1303, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (278, 21, 'Kendriya Vidyalaya Kapurthala Cantt.', 1322, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (279, 21, 'Kendriya Vidyalaya Khanpur', 2335, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (280, 21, 'Kendriya Vidyalaya Mohali', 2212, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (281, 21, 'Kendriya Vidyalaya Mullanpur Garibdas', 1308, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (282, 21, 'Kendriya Vidyalaya Nabha Cantt.', 1328, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (283, 21, 'Kendriya Vidyalaya Nangal Bhur', 1687, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (284, 21, 'Kendriya Vidyalaya No Iv Mamoon Cantt Pathankot', 1693, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (285, 21, 'Kendriya Vidyalaya No. I Adampur', 1645, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (286, 21, 'Kendriya Vidyalaya No. I Jalandhar Cantt.', 1669, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (287, 21, 'Kendriya Vidyalaya No. I Patiala', 1335, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (288, 21, 'Kendriya Vidyalaya No. II Adampur', 1646, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (289, 21, 'Kendriya Vidyalaya No. II Ferozepur Cantt.', 1313, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (290, 21, 'Kendriya Vidyalaya No. III Pathankot', 1692, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (291, 21, 'Kendriya Vidyalaya No. III Patiala', 1337, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (292, 21, 'Kendriya Vidyalaya No.1 Rcf Hussainpur', 1321, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (293, 21, 'Kendriya Vidyalaya No.I Amritsar Cantt', 1650, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (294, 21, 'Kendriya Vidyalaya No.I Thimayya Marg Bhatinda', 1297, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (295, 21, 'Kendriya Vidyalaya No.II Army Pathankot', 1691, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (296, 21, 'Kendriya Vidyalaya No.II Jalandhar Cantt.', 1670, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (297, 21, 'Kendriya Vidyalaya No.III Amritsar New Cantt', 1652, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (298, 21, 'Kendriya Vidyalaya No.III Jalandhar Cantt.', 1671, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (299, 21, 'Kendriya Vidyalaya No.IV (afs) Jalandhar Cantt.', 1672, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (300, 21, 'Kendriya Vidyalaya No.IV Bhatinda', 1298, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (301, 21, 'Kendriya Vidyalaya No.V Bhatinda', 1299, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (302, 21, 'Kendriya Vidyalaya Ocf Chandigarh', 1301, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (303, 21, 'Kendriya Vidyalaya Reona Ucha', 2217, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (304, 21, 'Kendriya Vidyalaya Sector 31 Chandigarh', 1304, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (305, 21, 'Kendriya Vidyalaya Sector- 47 Chandigarh', 1305, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (306, 21, 'Kendriya Vidyalaya Sliet Longowal', 2281, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (307, 21, 'Kendriya Vidyalaya Suranassi', 1673, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (308, 21, 'Kendriya Vidyalaya Tibri Cantt', 1667, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (309, 21, 'Kendriya Vidyalaya Zirakpur', 1309, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (310, 22, 'Kendriya Vidyalaya No.I Kalpakkam', 1788, 1, 14, '0', '2019-01-01 00:00:00', '2019-09-04 10:33:53');
INSERT INTO `ci_schools` VALUES (311, 22, 'Kendriya Vidyalaya Dgi Complex', 1773, 1, 14, '0', '2019-01-01 00:00:00', '2019-09-04 10:33:46');
INSERT INTO `ci_schools` VALUES (312, 22, 'Kendriya Vidyalaya Afs Avadi', 1769, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (313, 22, 'Kendriya Vidyalaya Afs No.I Tambaram', 1778, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (314, 22, 'Kendriya Vidyalaya Afs Thanjavur', 2108, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (315, 22, 'Kendriya Vidyalaya Anna Nagar Chennai', 1767, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (316, 22, 'Kendriya Vidyalaya Aruvankadu', 1761, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (317, 22, 'Kendriya Vidyalaya Cecri Karaikudi', 1790, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (318, 22, 'Kendriya Vidyalaya Central University Of Tamilnadu', 2280, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (319, 22, 'Kendriya Vidyalaya Cisf No.II Arakkonam', 1760, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (320, 22, 'Kendriya Vidyalaya Clri Chennai', 1766, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (321, 22, 'Kendriya Vidyalaya Coimbatore', 1786, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (322, 22, 'Kendriya Vidyalaya Crpf Avadi', 1770, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (323, 22, 'Kendriya Vidyalaya Dharmapuri', 2121, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (324, 22, 'Kendriya Vidyalaya Gandhigram', 2127, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (325, 22, 'Kendriya Vidyalaya Gill Nagar Chennai', 1774, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (326, 22, 'Kendriya Vidyalaya Golden Rock', 2319, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (327, 22, 'Kendriya Vidyalaya Hpf Ootacamund', 1762, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (328, 22, 'Kendriya Vidyalaya Hvf Avadi', 1771, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (329, 22, 'Kendriya Vidyalaya Iit Chennai', 1775, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (330, 22, 'Kendriya Vidyalaya Ins Vijayanarayanam', 1809, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (331, 22, 'Kendriya Vidyalaya Island Grounds', 1776, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (332, 22, 'Kendriya Vidyalaya K.k. Nagar Ashok Nagar', 1768, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (333, 22, 'Kendriya Vidyalaya Karaikal', 2191, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (334, 22, 'Kendriya Vidyalaya Mahe', 2147, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (335, 22, 'Kendriya Vidyalaya Mandapam Camp', 1796, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (336, 22, 'Kendriya Vidyalaya Minambakkam', 1777, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (337, 22, 'Kendriya Vidyalaya Nagarcoil', 2148, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (338, 22, 'Kendriya Vidyalaya Neyveli Lignite Corporation', 2259, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (339, 22, 'Kendriya Vidyalaya No I Madurai', 1794, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (340, 22, 'Kendriya Vidyalaya No Ii Kalpakkam', 1789, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (341, 22, 'Kendriya Vidyalaya No Ii Madurai', 1936, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (342, 22, 'Kendriya Vidyalaya No. I Port Blair', 1283, 1, 14, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (343, 22, 'Kendriya Vidyalaya No. Ii Port Blair', 1284, 1, 14, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (344, 22, 'Kendriya Vidyalaya No. Ii Tambaram', 1779, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (345, 22, 'Kendriya Vidyalaya No.I Arakkonam', 1759, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (346, 22, 'Kendriya Vidyalaya No.I Jipmer Campus Pondicherry', 1801, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (347, 22, 'Kendriya Vidyalaya No.I Tiruchirapalli', 1803, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (348, 22, 'Kendriya Vidyalaya No.II Happ Trichy-25', 1804, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (349, 22, 'Kendriya Vidyalaya No.II Kalapet Pondicherry', 1802, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (350, 22, 'Kendriya Vidyalaya Ocf Avadi', 1772, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (351, 22, 'Kendriya Vidyalaya Perambalur', 2193, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (352, 22, 'Kendriya Vidyalaya Rameswaram', 1937, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (353, 22, 'Kendriya Vidyalaya Sivaganga', 2107, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (354, 22, 'Kendriya Vidyalaya Sulur', 1787, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (355, 22, 'Kendriya Vidyalaya Thiruvannamalai', 2096, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (356, 22, 'Kendriya Vidyalaya Virudunagar', 2192, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (357, 22, 'Kendriya Vidyalaya Wellington', 1763, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (358, 23, 'Kendriya Vidyalaya (ivri) Mukteshwar', 1383, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (359, 23, 'Kendriya Vidyalaya (ssb) Srinagar', 1398, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (360, 23, 'Kendriya Vidyalaya Almora', 1347, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (361, 23, 'Kendriya Vidyalaya Augustyamuni', 1927, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (362, 23, 'Kendriya Vidyalaya Bageshwar', 2204, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (363, 23, 'Kendriya Vidyalaya Bhel Hardwar', 1374, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (364, 23, 'Kendriya Vidyalaya Bhimtal', 1356, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (365, 23, 'Kendriya Vidyalaya Birpur Dehradun', 1364, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (366, 23, 'Kendriya Vidyalaya Dehradun Cantt Upper Camp', 1365, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (367, 23, 'Kendriya Vidyalaya Dehradun Olf', 1362, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (368, 23, 'Kendriya Vidyalaya Fri Dehradun', 1358, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (369, 23, 'Kendriya Vidyalaya Gopeshwar', 2133, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (370, 23, 'Kendriya Vidyalaya Haldwani Cantt', 1373, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (371, 23, 'Kendriya Vidyalaya Hbk No.I Dehradun', 1367, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (372, 23, 'Kendriya Vidyalaya Hbk No.II Dehradun', 1368, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (373, 23, 'Kendriya Vidyalaya Iip Dehradun', 1359, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (374, 23, 'Kendriya Vidyalaya Ima Dehradun', 1360, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (375, 23, 'Kendriya Vidyalaya Itbp Dehradun', 1361, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (376, 23, 'Kendriya Vidyalaya Itbp Gauchar', 1371, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (377, 23, 'Kendriya Vidyalaya Itbp Joshimath', 1375, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (378, 23, 'Kendriya Vidyalaya Itbp Mirthi', 1929, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (379, 23, 'Kendriya Vidyalaya Kasauni', 1377, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (380, 23, 'Kendriya Vidyalaya Kashipur', 1376, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (381, 23, 'Kendriya Vidyalaya Khatima', 2392, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (382, 23, 'Kendriya Vidyalaya Lansdowne', 1378, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (383, 23, 'Kendriya Vidyalaya Lohaghat', 1928, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (384, 23, 'Kendriya Vidyalaya Mussoorie', 1384, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (385, 23, 'Kendriya Vidyalaya New Tehri Town', 1386, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (386, 23, 'Kendriya Vidyalaya Nhpc Dharchula', 1370, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (387, 23, 'Kendriya Vidyalaya Nhpc No.II Banbasa', 1349, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (388, 23, 'Kendriya Vidyalaya No. Ii Roorkee', 1394, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (389, 23, 'Kendriya Vidyalaya No.I Banbasa Cantt', 1348, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (390, 23, 'Kendriya Vidyalaya No.I Roorkee', 1393, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (391, 23, 'Kendriya Vidyalaya Oef Dehradun Raipur', 1369, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (392, 23, 'Kendriya Vidyalaya Ongc Dehradun', 1363, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (393, 23, 'Kendriya Vidyalaya Pauri', 1387, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (394, 23, 'Kendriya Vidyalaya Pithoragarh', 1388, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (395, 23, 'Kendriya Vidyalaya Raiwala', 1389, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (396, 23, 'Kendriya Vidyalaya Rajgarhi', 1930, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (397, 23, 'Kendriya Vidyalaya Ranikhet', 1391, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (398, 23, 'Kendriya Vidyalaya Rishikesh', 1392, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (399, 23, 'Kendriya Vidyalaya Sourkhand. Tehri', 1944, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (400, 23, 'Kendriya Vidyalaya Ssb Gwaldham', 1372, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (401, 23, 'Kendriya Vidyalaya Uttarkashi', 1399, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (402, 24, 'Kendriya Vidyalaya (afs) Arjangarh', 1405, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (403, 24, 'Kendriya Vidyalaya (afs) Bawana', 1407, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (404, 24, 'Kendriya Vidyalaya (afs) Tughlakabad', 1449, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (405, 24, 'Kendriya Vidyalaya (afs)rajokari', 1440, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (406, 24, 'Kendriya Vidyalaya (bsf) Chhawala Camp', 1408, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (407, 24, 'Kendriya Vidyalaya (crpf) Jharoda Kalan', 1425, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (408, 24, 'Kendriya Vidyalaya Agcr Colony', 1403, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (409, 24, 'Kendriya Vidyalaya Andrews Ganj', 1404, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (410, 24, 'Kendriya Vidyalaya Cantt No.I Delhi', 1409, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (411, 24, 'Kendriya Vidyalaya Gole Market', 1417, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (412, 24, 'Kendriya Vidyalaya Ina Colony', 1423, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (413, 24, 'Kendriya Vidyalaya Janakpuri', 1424, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (414, 24, 'Kendriya Vidyalaya Khicharipur Delhi.', 2211, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (415, 24, 'Kendriya Vidyalaya Lawrance Road Keshavpuram', 1426, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (416, 24, 'Kendriya Vidyalaya Masjid Moth', 1427, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (417, 24, 'Kendriya Vidyalaya Narela', 1428, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (418, 24, 'Kendriya Vidyalaya New Friends Centre Vigyan Vihar', 1429, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (419, 24, 'Kendriya Vidyalaya New Mehrauli Road Jnu', 1430, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (420, 24, 'Kendriya Vidyalaya No. Iii Delhi Cantt', 1411, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (421, 24, 'Kendriya Vidyalaya No. Iv Delhi Cantt Kandhar Lines', 1412, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (422, 24, 'Kendriya Vidyalaya No.II Delhi Cantt', 1410, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (423, 24, 'Kendriya Vidyalaya Ntpc Badarpur', 1406, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (424, 24, 'Kendriya Vidyalaya Papankalan (spg) Dwarka', 1432, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (425, 24, 'Kendriya Vidyalaya Paschim Vihar', 1433, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (426, 24, 'Kendriya Vidyalaya Pitampura', 1434, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (427, 24, 'Kendriya Vidyalaya Pragativihar', 1435, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (428, 24, 'Kendriya Vidyalaya Pushp Vihar Saket', 1436, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (429, 24, 'Kendriya Vidyalaya Rangpuri', 1441, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (430, 24, 'Kendriya Vidyalaya Sainik Vihar', 1446, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (431, 24, 'Kendriya Vidyalaya Sector 12 Dwarka', 2102, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (432, 24, 'Kendriya Vidyalaya Sector 22 Rohini', 1444, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (433, 24, 'Kendriya Vidyalaya Sector 25 Rohini', 1445, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (434, 24, 'Kendriya Vidyalaya Sector 28 Rohini', 2282, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (435, 24, 'Kendriya Vidyalaya Sector 5 Dwarka', 1413, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (436, 24, 'Kendriya Vidyalaya Sector II R.k. Puram', 1437, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (437, 24, 'Kendriya Vidyalaya Sector- Iii Rohini', 1442, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (438, 24, 'Kendriya Vidyalaya Sector Iv R.k. Puram', 1438, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (439, 24, 'Kendriya Vidyalaya Sector Viii R.k. Puram', 1439, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (440, 24, 'Kendriya Vidyalaya Sector-viii Rohini', 1443, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (441, 24, 'Kendriya Vidyalaya Shahadara', 2336, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (442, 24, 'Kendriya Vidyalaya Shakurbasti', 2263, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (443, 24, 'Kendriya Vidyalaya Shalimar Bagh', 1447, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (444, 24, 'Kendriya Vidyalaya Tagore Garden', 1448, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (445, 24, 'Kendriya Vidyalaya Vasant Kunj', 1450, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (446, 24, 'Kendriya Vidyalaya Vikaspuri', 1451, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (447, 25, 'Kendriya Vidyalaya Cannanore No.II (keltron Nagar.)', 1064, 1, 14, '0', '2019-01-01 00:00:00', '2019-09-04 10:34:56');
INSERT INTO `ci_schools` VALUES (448, 25, 'Kendriya Vidyalaya (afs) Trivendram Akkulam', 1806, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (449, 25, 'Kendriya Vidyalaya (nad) Alwaye', 1780, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (450, 25, 'Kendriya Vidyalaya Adoor', 1758, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (451, 25, 'Kendriya Vidyalaya Chenneerkara', 2189, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (452, 25, 'Kendriya Vidyalaya Cpcri No. I Kasragod', 1078, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (453, 25, 'Kendriya Vidyalaya Crpf Pallipuram', 1800, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (454, 25, 'Kendriya Vidyalaya Crpf Peringome', 2171, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (455, 25, 'Kendriya Vidyalaya Ernakulam', 1785, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (456, 25, 'Kendriya Vidyalaya Ezhimala', 2172, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (457, 25, 'Kendriya Vidyalaya Hemambika Nagar No.I Palakkad', 1798, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (458, 25, 'Kendriya Vidyalaya Ins Dronacharya No.IV Cochin', 1784, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (459, 25, 'Kendriya Vidyalaya Kaduthuruthy', 2307, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (460, 25, 'Kendriya Vidyalaya Kalpetta', 1077, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (461, 25, 'Kendriya Vidyalaya Kanhagad', 2170, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (462, 25, 'Kendriya Vidyalaya Kanjikode No.II Palghat', 1799, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (463, 25, 'Kendriya Vidyalaya Kannur', 1063, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (464, 25, 'Kendriya Vidyalaya Kavaratti', 1791, 1, 14, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (465, 25, 'Kendriya Vidyalaya Kollam', 2098, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (466, 25, 'Kendriya Vidyalaya Konni', 2382, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (467, 25, 'Kendriya Vidyalaya Kpa Ramavarmapuram', 2190, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (468, 25, 'Kendriya Vidyalaya Mallapuram', 1795, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (469, 25, 'Kendriya Vidyalaya Naval Base No.I Cochin', 1781, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (470, 25, 'Kendriya Vidyalaya Nileshwar', 2366, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (471, 25, 'Kendriya Vidyalaya No Ii Calicut', 1765, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (472, 25, 'Kendriya Vidyalaya No. I Calicut', 1764, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (473, 25, 'Kendriya Vidyalaya No. Ii Cochin', 1782, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (474, 25, 'Kendriya Vidyalaya No. Iii Cochin', 1783, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (475, 25, 'Kendriya Vidyalaya No.II Kasragod', 1079, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (476, 25, 'Kendriya Vidyalaya Ntpc Kayamkulam', 1792, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (477, 25, 'Kendriya Vidyalaya Painavu', 2150, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (478, 25, 'Kendriya Vidyalaya Palla Puram Ottapalam', 1797, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (479, 25, 'Kendriya Vidyalaya Payyanur', 1084, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (480, 25, 'Kendriya Vidyalaya Rubber Board Kottayam', 1793, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (481, 25, 'Kendriya Vidyalaya Sap Thiruvananthapuram', 2114, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (482, 25, 'Kendriya Vidyalaya Thalessery', 2260, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (483, 25, 'Kendriya Vidyalaya Tiruchur', 1805, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (484, 25, 'Kendriya Vidyalaya Trivendram Pangode', 1807, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (485, 25, 'Kendriya Vidyalaya Trivendram Pattom', 1808, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (486, 26, 'Kendriya Vidyalaya Budayan Jind', 2330, 1, 12, '0', '2019-01-01 00:00:00', '2019-09-04 10:35:01');
INSERT INTO `ci_schools` VALUES (487, 26, 'Kendriya Vidyalaya (afs) Kasauli', 1324, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (488, 26, 'Kendriya Vidyalaya (afs) No. I Gurgaon', 1418, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (489, 26, 'Kendriya Vidyalaya (afs) No.I Sirsa', 1344, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (490, 26, 'Kendriya Vidyalaya (crpf) Pinjore', 1338, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (491, 26, 'Kendriya Vidyalaya (nsg)manesar', 1454, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (492, 26, 'Kendriya Vidyalaya (santokhgarh) Saloh', 2296, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (493, 26, 'Kendriya Vidyalaya Alhilal', 1649, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (494, 26, 'Kendriya Vidyalaya Bakloh', 1656, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (495, 26, 'Kendriya Vidyalaya Bangana', 2214, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (496, 26, 'Kendriya Vidyalaya Bhakli', 2235, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (497, 26, 'Kendriya Vidyalaya Bhanala', 1661, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (498, 26, 'Kendriya Vidyalaya Dharamshala Cantt', 1666, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (499, 26, 'Kendriya Vidyalaya Fatehabad', 2347, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (500, 26, 'Kendriya Vidyalaya Ghumarwin', 2276, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (501, 26, 'Kendriya Vidyalaya Hamirpur', 1316, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (502, 26, 'Kendriya Vidyalaya Harsingpura', 1317, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (503, 26, 'Kendriya Vidyalaya Hissar Cantt', 1318, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (504, 26, 'Kendriya Vidyalaya Itbp Ramgarh Ambala', 1294, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (505, 26, 'Kendriya Vidyalaya Itbp Sarhan', 1341, 1, 12, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (506, 26, 'Kendriya Vidyalaya Jhajjar', 1320, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (507, 26, 'Kendriya Vidyalaya Jutogh', 1342, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (508, 26, 'Kendriya Vidyalaya Karnal', 1323, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (509, 26, 'Kendriya Vidyalaya Keylong Lahaul Spiti', 2075, 1, 12, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (510, 26, 'Kendriya Vidyalaya Mandi', 1327, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (511, 26, 'Kendriya Vidyalaya Matanhail', 2346, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (512, 26, 'Kendriya Vidyalaya Mathana', 2322, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (513, 26, 'Kendriya Vidyalaya Nadaun (hp)', 1329, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (514, 26, 'Kendriya Vidyalaya Nahara', 1330, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (515, 26, 'Kendriya Vidyalaya Naleti', 1331, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (516, 26, 'Kendriya Vidyalaya Nhpc Dalhousie Cantt Banikhet', 1658, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (517, 26, 'Kendriya Vidyalaya Nhpc No.I Hep Chamera', 1662, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (518, 26, 'Kendriya Vidyalaya No. Ii Chamera', 1663, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (519, 26, 'Kendriya Vidyalaya No. Ii Sirsa', 1345, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (520, 26, 'Kendriya Vidyalaya No.I Ambala Cantt', 1290, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (521, 26, 'Kendriya Vidyalaya No.I Chandimandir', 1306, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (522, 26, 'Kendriya Vidyalaya No.I Faridabad', 1414, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (523, 26, 'Kendriya Vidyalaya No.II Ambala Cantt.', 1291, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (524, 26, 'Kendriya Vidyalaya No.II Chandimandir', 1307, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (525, 26, 'Kendriya Vidyalaya No.II Faridabad', 1415, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (526, 26, 'Kendriya Vidyalaya No.III Ambala Cantt.', 1292, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (527, 26, 'Kendriya Vidyalaya No.III Faridabad', 1416, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (528, 26, 'Kendriya Vidyalaya No.IV Ambala Cantt.', 1293, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (529, 26, 'Kendriya Vidyalaya Palampur', 1332, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (530, 26, 'Kendriya Vidyalaya Paluwas', 1333, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (531, 26, 'Kendriya Vidyalaya Palwal', 1456, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (532, 26, 'Kendriya Vidyalaya Raghunathpura (narnaul)', 1457, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (533, 26, 'Kendriya Vidyalaya Recong Peo', 1339, 1, 12, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (534, 26, 'Kendriya Vidyalaya Rewari', 1458, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (535, 26, 'Kendriya Vidyalaya Rohtak', 1340, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (536, 26, 'Kendriya Vidyalaya Sainj', 1326, 1, 12, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (537, 26, 'Kendriya Vidyalaya Samalkha Beholi', 2370, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (538, 26, 'Kendriya Vidyalaya Sandhol', 2331, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (539, 26, 'Kendriya Vidyalaya Shimla', 1343, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (540, 26, 'Kendriya Vidyalaya Sohna Road No.II Gurgaon', 1420, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (541, 26, 'Kendriya Vidyalaya Subathu', 1325, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (542, 26, 'Kendriya Vidyalaya Yol Cantt', 1346, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (543, 27, 'Kendriya Vidyalaya (afs) Digaru', 1463, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (544, 27, 'Kendriya Vidyalaya (arc)doom Dooma', 1868, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (545, 27, 'Kendriya Vidyalaya (bsf) Panbari', 1486, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (546, 27, 'Kendriya Vidyalaya (cci) Bokajan', 1858, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (547, 27, 'Kendriya Vidyalaya (crpf) Amerigog', 1466, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (548, 27, 'Kendriya Vidyalaya (hpc) Jagiroad', 1474, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (549, 27, 'Kendriya Vidyalaya (ssb) Haflong', 1870, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (550, 27, 'Kendriya Vidyalaya Afs No Ii Tezpur', 1499, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (551, 27, 'Kendriya Vidyalaya Barpeta', 1460, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (552, 27, 'Kendriya Vidyalaya Borjhar', 1467, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (553, 27, 'Kendriya Vidyalaya Bvfcl Namrup', 1882, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (554, 27, 'Kendriya Vidyalaya Diphu', 1867, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (555, 27, 'Kendriya Vidyalaya Gerukamukh He Project', 1464, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (556, 27, 'Kendriya Vidyalaya Goalpara', 2113, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (557, 27, 'Kendriya Vidyalaya Golaghat', 2076, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (558, 27, 'Kendriya Vidyalaya Iit Guwahati', 1471, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (559, 27, 'Kendriya Vidyalaya Ioc Guwahati', 1465, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (560, 27, 'Kendriya Vidyalaya Khanapara', 1468, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (561, 27, 'Kendriya Vidyalaya Kokrajhar', 1479, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (562, 27, 'Kendriya Vidyalaya Lakhimpur', 1480, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (563, 27, 'Kendriya Vidyalaya Lokra', 1497, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (564, 27, 'Kendriya Vidyalaya Lumding', 1880, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (565, 27, 'Kendriya Vidyalaya Maligaon', 1469, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (566, 27, 'Kendriya Vidyalaya Mangaldoi', 1481, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (567, 27, 'Kendriya Vidyalaya Misa Cantt. Nowgaon', 1485, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (568, 27, 'Kendriya Vidyalaya Missamari', 1482, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (569, 27, 'Kendriya Vidyalaya Nagaon', 1484, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (570, 27, 'Kendriya Vidyalaya Narangi', 1470, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (571, 27, 'Kendriya Vidyalaya New Bongaigaon', 1462, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (572, 27, 'Kendriya Vidyalaya No I Sibsagar', 1887, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (573, 27, 'Kendriya Vidyalaya No Ii Sibsagar', 1888, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (574, 27, 'Kendriya Vidyalaya No. Iii Jorhat', 1477, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (575, 27, 'Kendriya Vidyalaya No.I Tezpur', 1498, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (576, 27, 'Kendriya Vidyalaya Ongc No.II Jorhat', 1476, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (577, 27, 'Kendriya Vidyalaya Rangiya N.f. Railway', 2166, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (578, 27, 'Kendriya Vidyalaya Tamulpur', 2164, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (579, 27, 'Kendriya Vidyalaya Tezpur University', 2250, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (580, 27, 'Kendriya Vidyalaya Udalguri', 2165, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (581, 27, 'Kendriya Vidyalayakhat(crpf) Khati', 1876, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (582, 27, 'Kendriya Vidyalya (afs) No. I Jorhat', 1475, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (583, 28, 'Kendriya Vidyalaya (afa) No.I Dundigal', 1510, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (584, 28, 'Kendriya Vidyalaya (afs) Begumpet', 1508, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (585, 28, 'Kendriya Vidyalaya (drdo)kanchan Bagh', 1514, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (586, 28, 'Kendriya Vidyalaya (npa) Svp', 1515, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (587, 28, 'Kendriya Vidyalaya (ntpc) Ramagundam', 1527, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (588, 28, 'Kendriya Vidyalaya (of) Medak', 1525, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (589, 28, 'Kendriya Vidyalaya (ongc) Rajahmundary', 1526, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (590, 28, 'Kendriya Vidyalaya (sk University) Anantapur', 1501, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (591, 28, 'Kendriya Vidyalaya (soi) No.I Uppal', 1516, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (592, 28, 'Kendriya Vidyalaya Adilabad', 2008, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (593, 28, 'Kendriya Vidyalaya Afs Surya Lanka', 1529, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (594, 28, 'Kendriya Vidyalaya Bhongir', 2373, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (595, 28, 'Kendriya Vidyalaya Bodhan Town', 2308, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (596, 28, 'Kendriya Vidyalaya Crpf Gc Barkas', 1509, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (597, 28, 'Kendriya Vidyalaya Eluru', 2091, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (598, 28, 'Kendriya Vidyalaya Gachibawli', 1507, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (599, 28, 'Kendriya Vidyalaya Ghatkesar Nuclear Fuel Complex.', 1503, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (600, 28, 'Kendriya Vidyalaya Gooty Anantpur', 1504, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (601, 28, 'Kendriya Vidyalaya Guntakal', 1505, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (602, 28, 'Kendriya Vidyalaya Guntur', 1506, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (603, 28, 'Kendriya Vidyalaya Hyderabad Central University', 2279, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (604, 28, 'Kendriya Vidyalaya Ins Kalinga Bheemunipatnam', 1502, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (605, 28, 'Kendriya Vidyalaya Jharasangam Medak', 2309, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (606, 28, 'Kendriya Vidyalaya Kadapa', 2077, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (607, 28, 'Kendriya Vidyalaya Kakinada', 2325, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (608, 28, 'Kendriya Vidyalaya Karim Nagar', 2247, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (609, 28, 'Kendriya Vidyalaya Khammam', 2078, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (610, 28, 'Kendriya Vidyalaya Kothuru', 2156, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (611, 28, 'Kendriya Vidyalaya Kurnool', 1523, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (612, 28, 'Kendriya Vidyalaya Machhlipatnam', 1524, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (613, 28, 'Kendriya Vidyalaya Mahabubabad', 2293, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (614, 28, 'Kendriya Vidyalaya Mahabubnagar', 2153, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (615, 28, 'Kendriya Vidyalaya Malkapuram', 1534, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (616, 28, 'Kendriya Vidyalaya Mancherial', 2329, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (617, 28, 'Kendriya Vidyalaya Miryalaguda', 2287, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (618, 28, 'Kendriya Vidyalaya Nad Vishakhapatnam', 1535, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (619, 28, 'Kendriya Vidyalaya Nalgonda', 2155, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (620, 28, 'Kendriya Vidyalaya Nizamabad', 2379, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (621, 28, 'Kendriya Vidyalaya No I Golconda', 1512, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (622, 28, 'Kendriya Vidyalaya No Ii Dundigal', 1511, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (623, 28, 'Kendriya Vidyalaya No.1 Vijayawada', 1532, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (624, 28, 'Kendriya Vidyalaya No.I Nausena Bagh', 1536, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (625, 28, 'Kendriya Vidyalaya No.I Srivijaya Nagar', 1538, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (626, 28, 'Kendriya Vidyalaya No.I Tirupati', 1530, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (627, 28, 'Kendriya Vidyalaya No.II Golconda', 1513, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (628, 28, 'Kendriya Vidyalaya No.II Nausena Bagh', 1537, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (629, 28, 'Kendriya Vidyalaya No.II Srivijaya Nagar', 1539, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (630, 28, 'Kendriya Vidyalaya No.II Tirupati', 1531, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (631, 28, 'Kendriya Vidyalaya No.II Vijayawada', 1533, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (632, 28, 'Kendriya Vidyalaya Ongole', 2119, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (633, 28, 'Kendriya Vidyalaya Picket Secunderabad', 1521, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (634, 28, 'Kendriya Vidyalaya Rajampalli', 2372, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (635, 28, 'Kendriya Vidyalaya Rajampet', 2318, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (636, 28, 'Kendriya Vidyalaya Sattenapalli', 2344, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (637, 28, 'Kendriya Vidyalaya Secunderabad. Bolarum', 1518, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (638, 28, 'Kendriya Vidyalaya Secunderabad. Bowenpally', 1519, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (639, 28, 'Kendriya Vidyalaya Siddipet', 2388, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (640, 28, 'Kendriya Vidyalaya Sircilla', 2305, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (641, 28, 'Kendriya Vidyalaya Srikakulam', 1528, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (642, 28, 'Kendriya Vidyalaya Steel Project', 1540, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (643, 28, 'Kendriya Vidyalaya Tenali', 2289, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (644, 28, 'Kendriya Vidyalaya Trimulghery Secunderabad', 1522, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (645, 28, 'Kendriya Vidyalaya Uppal No.II(soi)', 1517, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (646, 28, 'Kendriya Vidyalaya Venkatagiri', 2103, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (647, 28, 'Kendriya Vidyalaya Vizianagaram', 2092, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (648, 28, 'Kendriya Vidyalaya Waltair', 1541, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (649, 28, 'Kendriya Vidyalaya Warangal', 2079, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (650, 28, 'Kendriya Vidyalaya(afs) Hakimpet Secunderabad', 1520, 1, 14, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (651, 29, 'Kendriya Vidyalaya (aoc) Jabalpur', 1556, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (652, 29, 'Kendriya Vidyalaya (cod) Jabalpur', 1557, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (653, 29, 'Kendriya Vidyalaya (of) Khamaria', 1563, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (654, 29, 'Kendriya Vidyalaya (of) No.I Katni', 1569, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (655, 29, 'Kendriya Vidyalaya (rly) No.II Katni', 1570, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (656, 29, 'Kendriya Vidyalaya (secl) Dhanpuri', 1554, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (657, 29, 'Kendriya Vidyalaya (secl) Nowrozabad', 1580, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (658, 29, 'Kendriya Vidyalaya (vf) Jabalpur', 1560, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (659, 29, 'Kendriya Vidyalaya Balaghat', 1545, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (660, 29, 'Kendriya Vidyalaya Chaurai', 2277, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (661, 29, 'Kendriya Vidyalaya Chhattarpur', 1100, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (662, 29, 'Kendriya Vidyalaya Chhindwara', 1549, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (663, 29, 'Kendriya Vidyalaya Damoh', 1551, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (664, 29, 'Kendriya Vidyalaya Dhana', 1553, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (665, 29, 'Kendriya Vidyalaya Dindori', 2066, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (666, 29, 'Kendriya Vidyalaya Garha', 2110, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (667, 29, 'Kendriya Vidyalaya Gcf No. I Jabalpur', 1561, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (668, 29, 'Kendriya Vidyalaya Gcf No.II Jabalpur', 1562, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (669, 29, 'Kendriya Vidyalaya Hatta Nagar', 2374, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (670, 29, 'Kendriya Vidyalaya I Stc Jabalpur', 1558, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (671, 29, 'Kendriya Vidyalaya Indra Gandhi Nationali Tribal University', 2311, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (672, 29, 'Kendriya Vidyalaya Jamai', 2321, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (673, 29, 'Kendriya Vidyalaya Jamuna Colliery', 1565, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (674, 29, 'Kendriya Vidyalaya Jayant Colliery', 1567, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (675, 29, 'Kendriya Vidyalaya Lakhnadon', 2380, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (676, 29, 'Kendriya Vidyalaya Malanjkhand', 2010, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (677, 29, 'Kendriya Vidyalaya Mandla', 1577, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (678, 29, 'Kendriya Vidyalaya Narsing Pur', 1579, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (679, 29, 'Kendriya Vidyalaya No Ii Rewa', 1931, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (680, 29, 'Kendriya Vidyalaya No. I Rewa', 1584, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (681, 29, 'Kendriya Vidyalaya No. I Satna', 1587, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (682, 29, 'Kendriya Vidyalaya No. Ii Chhindwara', 2238, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (683, 29, 'Kendriya Vidyalaya No. Ii Satna', 2241, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (684, 29, 'Kendriya Vidyalaya No.I Sagar Cantt', 1585, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (685, 29, 'Kendriya Vidyalaya No.II Sagar', 1586, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (686, 29, 'Kendriya Vidyalaya No.III Sagar', 1932, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (687, 29, 'Kendriya Vidyalaya Pandhurna', 2324, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (688, 29, 'Kendriya Vidyalaya Panna', 2104, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (689, 29, 'Kendriya Vidyalaya Sagar No.IV (hsgv)', 2383, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (690, 29, 'Kendriya Vidyalaya Seoni', 1588, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (691, 29, 'Kendriya Vidyalaya Shahadol', 1589, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (692, 29, 'Kendriya Vidyalaya Sidhi', 1590, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (693, 29, 'Kendriya Vidyalaya Singrauli', 1591, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (694, 29, 'Kendriya Vidyalaya Tfri Jabalpur', 1559, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (695, 29, 'Kendriya Vidyalaya Umaria', 2239, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (696, 29, 'Kendriya Vidyalaya Wcl Barkuhi Chandametta', 1098, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (697, 30, 'Kendriya Vidyalaya ( Afs) No.II Jodhpur', 1626, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (698, 30, 'Kendriya Vidyalaya (afs) Jaisalmer', 1611, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (699, 30, 'Kendriya Vidyalaya (afs) No.II Suratgarh', 1637, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (700, 30, 'Kendriya Vidyalaya (afs) No.III Nal Bikaner', 1607, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (701, 30, 'Kendriya Vidyalaya (afs)No.I Suratgarh', 1638, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (702, 30, 'Kendriya Vidyalaya (agpp) Anta', 1598, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (703, 30, 'Kendriya Vidyalaya (army)No.II Jodhpur', 1627, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (704, 30, 'Kendriya Vidyalaya (bsf) Dabla', 1609, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (705, 30, 'Kendriya Vidyalaya (bsf) Jodhpur', 1623, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (706, 30, 'Kendriya Vidyalaya (bsf) Pokhran', 1632, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (707, 30, 'Kendriya Vidyalaya (bsf)anoopgarh', 1597, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (708, 30, 'Kendriya Vidyalaya (cisf) Deoli', 1610, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (709, 30, 'Kendriya Vidyalaya (crpf) Mountabu', 1630, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (710, 30, 'Kendriya Vidyalaya (crpf) No.I Ajmer', 1592, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (711, 30, 'Kendriya Vidyalaya (swri) Avikanagar', 1599, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (712, 30, 'Kendriya Vidyalaya Afs No.I Jodhpur', 1624, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (713, 30, 'Kendriya Vidyalaya Alwar', 1595, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (714, 30, 'Kendriya Vidyalaya Army No. I Jodhpur', 1625, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (715, 30, 'Kendriya Vidyalaya Banar', 1622, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (716, 30, 'Kendriya Vidyalaya Banswara', 1600, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (717, 30, 'Kendriya Vidyalaya Baran', 1601, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (718, 30, 'Kendriya Vidyalaya Beawar', 1602, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (719, 30, 'Kendriya Vidyalaya Bharatpur', 1603, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (720, 30, 'Kendriya Vidyalaya Bhilwara', 1604, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (721, 30, 'Kendriya Vidyalaya Bsf Khajuwala', 2177, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (722, 30, 'Kendriya Vidyalaya Bsf Raisinghnagar', 2174, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (723, 30, 'Kendriya Vidyalaya Bsf Ramgarh', 2173, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (724, 30, 'Kendriya Vidyalaya Bundi', 2294, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (725, 30, 'Kendriya Vidyalaya Chhabra Thermal Power Project (ctps)', 2262, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (726, 30, 'Kendriya Vidyalaya Chittorgarh', 2120, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (727, 30, 'Kendriya Vidyalaya Churu', 1608, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (728, 30, 'Kendriya Vidyalaya Cisf Jaipur', 2340, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (729, 30, 'Kendriya Vidyalaya Crpf No.II Ajmer', 1593, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (730, 30, 'Kendriya Vidyalaya Dausa', 2298, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (731, 30, 'Kendriya Vidyalaya Deogarh', 2176, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (732, 30, 'Kendriya Vidyalaya Dholpur', 2353, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (733, 30, 'Kendriya Vidyalaya Dungar Pur', 2099, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (734, 30, 'Kendriya Vidyalaya Gangapur City', 1933, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (735, 30, 'Kendriya Vidyalaya Hanumangarh', 2303, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (736, 30, 'Kendriya Vidyalaya Iit Jodhpur', 2350, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (737, 30, 'Kendriya Vidyalaya Inderpura', 2261, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (738, 30, 'Kendriya Vidyalaya Itarana', 1596, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (739, 30, 'Kendriya Vidyalaya Jaisindhar', 2297, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (740, 30, 'Kendriya Vidyalaya Jalipa Cantt', 1618, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (741, 30, 'Kendriya Vidyalaya Jalore', 2286, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (742, 30, 'Kendriya Vidyalaya Jhalawar', 1620, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (743, 30, 'Kendriya Vidyalaya Jhunjhunu', 1621, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (744, 30, 'Kendriya Vidyalaya Karauli', 1934, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (745, 30, 'Kendriya Vidyalaya Khetri Nagar', 2012, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (746, 30, 'Kendriya Vidyalaya Lalgarh Jattan', 1634, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (747, 30, 'Kendriya Vidyalaya Nagaur', 2337, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (748, 30, 'Kendriya Vidyalaya Nasirabad', 1594, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (749, 30, 'Kendriya Vidyalaya No.I (pratap Nagar) Udaipur', 1642, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (750, 30, 'Kendriya Vidyalaya No.I (sagar Road)', 1605, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (751, 30, 'Kendriya Vidyalaya No.I Bajaj Nagar Jaipur', 1612, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (752, 30, 'Kendriya Vidyalaya No.I Kota', 1628, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (753, 30, 'Kendriya Vidyalaya No.II Bikaner', 1606, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (754, 30, 'Kendriya Vidyalaya No.II Eklinggarh Udaipur', 1643, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (755, 30, 'Kendriya Vidyalaya No.II Jaipur Cantt', 1613, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (756, 30, 'Kendriya Vidyalaya No.II Kota', 1629, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (757, 30, 'Kendriya Vidyalaya No.II Suratgarh Cantt', 1639, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (758, 30, 'Kendriya Vidyalaya No.III Mrec Jaipur', 1614, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (759, 30, 'Kendriya Vidyalaya No.IV (khatipura) Jaipur', 1615, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (760, 30, 'Kendriya Vidyalaya No.V Mansarover Jaipur', 1616, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (761, 30, 'Kendriya Vidyalaya No.VI Sector Iii Pratap Nagar', 1617, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (762, 30, 'Kendriya Vidyalaya Pali', 2376, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (763, 30, 'Kendriya Vidyalaya Phulera', 1631, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (764, 30, 'Kendriya Vidyalaya Sawai Madhopur', 1641, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (765, 30, 'Kendriya Vidyalaya Shri Ganga Nagar Cantt', 1635, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (766, 30, 'Kendriya Vidyalaya Sikar', 1636, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (767, 30, 'Kendriya Vidyalaya Stps Suratgarh', 1640, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (768, 30, 'Kendriya Vidyalaya Tinvari', 2375, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (769, 30, 'Kendriya Vidyalaya Tonk', 2253, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (770, 30, 'Kendriya Vidyalaya Uttarlai', 1619, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (771, 30, 'Kendriya Vidyalaya. Central University Of Rajasthan. Bandersindri', 2292, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (772, 31, 'Kendriya Vidyalaya (afs) No.II Srinagar', 1698, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (773, 31, 'Kendriya Vidyalaya (bsf) Bandipur', 1657, 1, 12, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (774, 31, 'Kendriya Vidyalaya (bsf) Rajouri', 1694, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (775, 31, 'Kendriya Vidyalaya (crpf) Bantalab', 1674, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (776, 31, 'Kendriya Vidyalaya (shep) Jyotipuram', 1682, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (777, 31, 'Kendriya Vidyalaya Afs Awantipura', 1654, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (778, 31, 'Kendriya Vidyalaya Aminoo', 2160, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (779, 31, 'Kendriya Vidyalaya Anantnag', 1653, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (780, 31, 'Kendriya Vidyalaya Badarwah', 1655, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (781, 31, 'Kendriya Vidyalaya Baramula', 1659, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (782, 31, 'Kendriya Vidyalaya Basoli (lakhanpur)', 1660, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (783, 31, 'Kendriya Vidyalaya Bsf Humhama', 2158, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (784, 31, 'Kendriya Vidyalaya Bsf No.III Panthachowk Srinagar', 1699, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (785, 31, 'Kendriya Vidyalaya Bsf Sunderbani', 2157, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (786, 31, 'Kendriya Vidyalaya Central Univeristy Of Jammu', 2334, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (787, 31, 'Kendriya Vidyalaya Chenani', 1664, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (788, 31, 'Kendriya Vidyalaya Dhamana', 1675, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (789, 31, 'Kendriya Vidyalaya Hiranagar', 1668, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (790, 31, 'Kendriya Vidyalaya Jindrah', 1681, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (791, 31, 'Kendriya Vidyalaya Jourian', 2278, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (792, 31, 'Kendriya Vidyalaya Kaluchak', 1678, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (793, 31, 'Kendriya Vidyalaya Kargil', 1683, 1, 12, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (794, 31, 'Kendriya Vidyalaya Kathua', 1684, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (795, 31, 'Kendriya Vidyalaya Kishtwar', 1685, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (796, 31, 'Kendriya Vidyalaya Leh', 1686, 1, 12, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (797, 31, 'Kendriya Vidyalaya Miran Sahib', 1679, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (798, 31, 'Kendriya Vidyalaya Nagrota', 1680, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (799, 31, 'Kendriya Vidyalaya No. I Srinagar', 1697, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (800, 31, 'Kendriya Vidyalaya No. Ii Udhampur', 1701, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (801, 31, 'Kendriya Vidyalaya No.I Akhnoor', 1647, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (802, 31, 'Kendriya Vidyalaya No.I Gandhi Nagar', 1676, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (803, 31, 'Kendriya Vidyalaya No.I Udhampur', 1700, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (804, 31, 'Kendriya Vidyalaya No.II Akhnoor', 1648, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (805, 31, 'Kendriya Vidyalaya No.II Jammu Cantt', 1677, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (806, 31, 'Kendriya Vidyalaya Nubra', 1688, 1, 12, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (807, 31, 'Kendriya Vidyalaya Pahalgaon', 1689, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (808, 31, 'Kendriya Vidyalaya Samba', 1695, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (809, 31, 'Kendriya Vidyalaya Uri', 1702, 1, 12, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (810, 32, 'Kendriya Vidyalaya (afs) Barrackpore', 1263, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (811, 32, 'Kendriya Vidyalaya (afs) Salua', 1286, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (812, 32, 'Kendriya Vidyalaya (army) Barrackpore', 1264, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (813, 32, 'Kendriya Vidyalaya (clw) Chittaranjan', 1246, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (814, 32, 'Kendriya Vidyalaya (cmeri) Durgapur', 1248, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (815, 32, 'Kendriya Vidyalaya (crpf) Durgapur', 1249, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (816, 32, 'Kendriya Vidyalaya (iit) No.I Kharagpur', 1260, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (817, 32, 'Kendriya Vidyalaya (ioc) Haldia', 1254, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (818, 32, 'Kendriya Vidyalaya (nhpc) Malda', 1251, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (819, 32, 'Kendriya Vidyalaya (ntpc) Farakka', 1250, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (820, 32, 'Kendriya Vidyalaya (of) Dum-dum', 1268, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (821, 32, 'Kendriya Vidyalaya (rly) No.II Kharagpur', 1261, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (822, 32, 'Kendriya Vidyalaya (sukna) Khaprail', 1257, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (823, 32, 'Kendriya Vidyalaya Adra', 1235, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (824, 32, 'Kendriya Vidyalaya Alipore (command Hospital)', 1267, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (825, 32, 'Kendriya Vidyalaya Alipurduar Jn.', 1236, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (826, 32, 'Kendriya Vidyalaya Andal', 1237, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (827, 32, 'Kendriya Vidyalaya Asansol', 1238, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (828, 32, 'Kendriya Vidyalaya Bagdogra', 1239, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (829, 32, 'Kendriya Vidyalaya Baligunge', 1266, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (830, 32, 'Kendriya Vidyalaya Bamangachi', 1262, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (831, 32, 'Kendriya Vidyalaya Bandel Railway Colony', 2338, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (832, 32, 'Kendriya Vidyalaya Bengdubi', 1240, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (833, 32, 'Kendriya Vidyalaya Berhampore', 1241, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (834, 32, 'Kendriya Vidyalaya Birbhum', 2086, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (835, 32, 'Kendriya Vidyalaya Bolpur', 2182, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (836, 32, 'Kendriya Vidyalaya Bsf Aradhpur', 2183, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (837, 32, 'Kendriya Vidyalaya Bsf Baikunthpur', 2184, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (838, 32, 'Kendriya Vidyalaya Bsf Gandhinagar', 2180, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (839, 32, 'Kendriya Vidyalaya Bsf Krishna Nagar', 2178, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (840, 32, 'Kendriya Vidyalaya Bsf Raninagar', 2179, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (841, 32, 'Kendriya Vidyalaya Burdwan', 1244, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (842, 32, 'Kendriya Vidyalaya Cooch Behar', 1247, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (843, 32, 'Kendriya Vidyalaya Cossipore', 1265, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (844, 32, 'Kendriya Vidyalaya Dakshin Dinajpur', 2082, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (845, 32, 'Kendriya Vidyalaya Fort William', 1269, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (846, 32, 'Kendriya Vidyalaya Gangtok', 1252, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (847, 32, 'Kendriya Vidyalaya Garden Reach', 1270, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (848, 32, 'Kendriya Vidyalaya Govindpur (bsf)', 1253, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (849, 32, 'Kendriya Vidyalaya Hasimara', 1255, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (850, 32, 'Kendriya Vidyalaya Iim Joka', 1271, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (851, 32, 'Kendriya Vidyalaya Kalimpong (durbin)', 1256, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (852, 32, 'Kendriya Vidyalaya Kankinara', 1279, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (853, 32, 'Kendriya Vidyalaya Nadia (ranaghat)', 2111, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (854, 32, 'Kendriya Vidyalaya Nhpc Singtam', 1288, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (855, 32, 'Kendriya Vidyalaya No. I Kalaikunda', 1258, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (856, 32, 'Kendriya Vidyalaya No. Ii Kalaikunda', 1259, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (857, 32, 'Kendriya Vidyalaya No.I Binnaguri Cantt', 1242, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (858, 32, 'Kendriya Vidyalaya No.I Ishapore', 1275, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (859, 32, 'Kendriya Vidyalaya No.I Kanchrapara', 1277, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (860, 32, 'Kendriya Vidyalaya No.I Salt Lake', 1272, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (861, 32, 'Kendriya Vidyalaya No.II Binnaguri', 1243, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (862, 32, 'Kendriya Vidyalaya No.II Ishapore', 1276, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (863, 32, 'Kendriya Vidyalaya No.II Kanchrapara', 1278, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (864, 32, 'Kendriya Vidyalaya No.II Salt Lake', 1273, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (865, 32, 'Kendriya Vidyalaya Panagarh', 1282, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (866, 32, 'Kendriya Vidyalaya Rambi (teesta Low Dam Project-iii)', 2115, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (867, 32, 'Kendriya Vidyalaya Rbnm Salboni', 1285, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (868, 32, 'Kendriya Vidyalaya Santragachi', 1274, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (869, 32, 'Kendriya Vidyalaya Sevoke Road', 1287, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (870, 32, 'Kendriya Vidyalaya Tarkeswar', 2181, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (871, 32, 'Kendriya Vidyalaya Railway Colony Kharagpur', 2368, 1, 11, '0', '2019-01-01 00:00:00', '2019-09-04 10:33:26');
INSERT INTO `ci_schools` VALUES (872, 33, 'Kendriya Vidyalaya Embassy Of India Kathmandu', 1897, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (873, 33, 'Kendriya Vidyalaya Moscow', 1898, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (874, 33, 'Kendriya Vidyalaya Tehran', 1487, 1, 12, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (875, 34, 'Kendriya Vidyalaya (afs) Bareilly', 1350, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (876, 34, 'Kendriya Vidyalaya (afs) Memaura', 1748, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (877, 34, 'Kendriya Vidyalaya (amc) Lucknow', 1740, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (878, 34, 'Kendriya Vidyalaya (asc)bareilly', 1351, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (879, 34, 'Kendriya Vidyalaya (bhel) Jagdishpur', 1727, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (880, 34, 'Kendriya Vidyalaya (iffco) Aonla Bareilly', 1353, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (881, 34, 'Kendriya Vidyalaya (iit) Kanpur', 1731, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (882, 34, 'Kendriya Vidyalaya (ivri) Izzat Nagar Bareilly', 1355, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (883, 34, 'Kendriya Vidyalaya (jrc) Bareilly', 1352, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (884, 34, 'Kendriya Vidyalaya (ner) Izzat Nagar', 1354, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (885, 34, 'Kendriya Vidyalaya (ntpc) Dibyapur', 1722, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (886, 34, 'Kendriya Vidyalaya (ocf) No.II Shahjahanpur', 1397, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (887, 34, 'Kendriya Vidyalaya Afs Bakshi Ka Talab', 1717, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (888, 34, 'Kendriya Vidyalaya Aliganj', 1744, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (889, 34, 'Kendriya Vidyalaya Badaun', 2083, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (890, 34, 'Kendriya Vidyalaya Balrampur', 1718, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (891, 34, 'Kendriya Vidyalaya Barabanki', 1719, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (892, 34, 'Kendriya Vidyalaya Crpf (bijnour)', 1747, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (893, 34, 'Kendriya Vidyalaya Faizabad Cantt', 1723, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (894, 34, 'Kendriya Vidyalaya Fateh Garh', 1724, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (895, 34, 'Kendriya Vidyalaya Gomti Nagar', 1746, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (896, 34, 'Kendriya Vidyalaya Hardoi', 2290, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (897, 34, 'Kendriya Vidyalaya Iim Campus', 1741, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (898, 34, 'Kendriya Vidyalaya Kanpur Cantt', 1732, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (899, 34, 'Kendriya Vidyalaya Kanpur Rakshavihar', 1739, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (900, 34, 'Kendriya Vidyalaya Lakhimpur Kheri', 2143, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (901, 34, 'Kendriya Vidyalaya Lucknow Cantt', 1745, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (902, 34, 'Kendriya Vidyalaya M.c.f. Raebreilly', 2367, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (903, 34, 'Kendriya Vidyalaya Mati Akabarpur', 2105, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (904, 34, 'Kendriya Vidyalaya No.1 Shahjahanpur Cantt', 1396, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (905, 34, 'Kendriya Vidyalaya No.I Armapur Kanpur', 1733, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (906, 34, 'Kendriya Vidyalaya No.I Chakeri Kanpur', 1735, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (907, 34, 'Kendriya Vidyalaya No.II Armapur Kanpur', 1734, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (908, 34, 'Kendriya Vidyalaya No.II Chakeri', 1736, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (909, 34, 'Kendriya Vidyalaya No.III Chakeri', 1737, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (910, 34, 'Kendriya Vidyalaya Oef Taigoar Road Kanpur', 1738, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (911, 34, 'Kendriya Vidyalaya Pilibhit', 2122, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (912, 34, 'Kendriya Vidyalaya Rae Bareli', 1754, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (913, 34, 'Kendriya Vidyalaya Rdso Lucknow', 1742, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (914, 34, 'Kendriya Vidyalaya Sgpgi Lucknow', 1743, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (915, 34, 'Kendriya Vidyalaya Shivgarh Raebareli', 2283, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (916, 34, 'Kendriya Vidyalaya Shrawasti', 2312, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (917, 34, 'Kendriya Vidyalaya Sitapur', 1755, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (918, 34, 'Kendriya Vidyalaya Unnao', 1757, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (919, 35, 'Kendriya Vidyalaya (9 Brd) No.III Pune', 1225, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (920, 35, 'Kendriya Vidyalaya (afs) No.I Pune', 1223, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (921, 35, 'Kendriya Vidyalaya (afs) No.II Devlali', 1200, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (922, 35, 'Kendriya Vidyalaya (afs) No.II Pune', 1224, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (923, 35, 'Kendriya Vidyalaya (afs) Ojhar', 1203, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (924, 35, 'Kendriya Vidyalaya (afs) Thane', 1219, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (925, 35, 'Kendriya Vidyalaya (crpf) Nagpur', 1122, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (926, 35, 'Kendriya Vidyalaya (ins)mandovi', 1067, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (927, 35, 'Kendriya Vidyalaya (isp) No.II Nasik Road Camp', 1202, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (928, 35, 'Kendriya Vidyalaya (mirc) No.II Ahmednagar', 1195, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (929, 35, 'Kendriya Vidyalaya (nda)khadak Vasla', 1231, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (930, 35, 'Kendriya Vidyalaya (nmu) Jalgaon', 1204, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (931, 35, 'Kendriya Vidyalaya (of) Ambarnath', 1209, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (932, 35, 'Kendriya Vidyalaya (of) Bhandara', 1089, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (933, 35, 'Kendriya Vidyalaya (of) Chanda', 1097, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (934, 35, 'Kendriya Vidyalaya (of) Varangaon', 1234, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (935, 35, 'Kendriya Vidyalaya (of)no. I Bhusawal', 1198, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (936, 35, 'Kendriya Vidyalaya (ongc)panvel', 1218, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (937, 35, 'Kendriya Vidyalaya (sc) Pune', 1222, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (938, 35, 'Kendriya Vidyalaya (vrde)no. Iii Ahmednagar', 1196, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (939, 35, 'Kendriya Vidyalaya (vsn) Nagpur', 1123, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (940, 35, 'Kendriya Vidyalaya (wcl) Chandrapur', 1099, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (941, 35, 'Kendriya Vidyalaya (wcl)new Majari', 1129, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (942, 35, 'Kendriya Vidyalaya Ajni', 1124, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (943, 35, 'Kendriya Vidyalaya Ambajhari', 1125, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (944, 35, 'Kendriya Vidyalaya Army Area Pune', 1226, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (945, 35, 'Kendriya Vidyalaya Aurangabad Cantt', 1197, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (946, 35, 'Kendriya Vidyalaya Bambolim Camp', 1066, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (947, 35, 'Kendriya Vidyalaya Beg & Centre Khadki Pune', 1227, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (948, 35, 'Kendriya Vidyalaya Bhandup', 1210, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (949, 35, 'Kendriya Vidyalaya Bsf Chakur', 2197, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (950, 35, 'Kendriya Vidyalaya Cme Pune', 1228, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (951, 35, 'Kendriya Vidyalaya Crpf Mudkhed', 1208, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (952, 35, 'Kendriya Vidyalaya Crpf Teligaon', 2198, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (953, 35, 'Kendriya Vidyalaya Dhule', 2101, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (954, 35, 'Kendriya Vidyalaya Ganesh Khind', 1229, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (955, 35, 'Kendriya Vidyalaya Iat Girinagar', 1230, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (956, 35, 'Kendriya Vidyalaya Iit Powai', 1214, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (957, 35, 'Kendriya Vidyalaya Ins Hamla', 1215, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (958, 35, 'Kendriya Vidyalaya Kamptee', 1116, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (959, 35, 'Kendriya Vidyalaya Koliwada', 1216, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (960, 35, 'Kendriya Vidyalaya Lonavala', 1206, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (961, 35, 'Kendriya Vidyalaya Mahatama Gandhi Antarashtriya Hindi Vishav Vidyalaya', 2310, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (962, 35, 'Kendriya Vidyalaya Mankhurd', 1217, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (963, 35, 'Kendriya Vidyalaya Manmad', 1207, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (964, 35, 'Kendriya Vidyalaya Nad Karanja', 1205, 1, 15, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (965, 35, 'Kendriya Vidyalaya No. Ii Dehuroad', 1221, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (966, 35, 'Kendriya Vidyalaya No.I Ahmednagar', 1194, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (967, 35, 'Kendriya Vidyalaya No.I Colaba', 1211, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (968, 35, 'Kendriya Vidyalaya No.I Dehuroad', 1220, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (969, 35, 'Kendriya Vidyalaya No.I Devlali', 1199, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (970, 35, 'Kendriya Vidyalaya No.I Nasik Road Camp', 1201, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (971, 35, 'Kendriya Vidyalaya No.I Vasco-da-gama', 1069, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (972, 35, 'Kendriya Vidyalaya No.II Colaba', 1212, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (973, 35, 'Kendriya Vidyalaya No.II Vasco-da-gama', 1070, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (974, 35, 'Kendriya Vidyalaya No.III Colaba', 1213, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (975, 35, 'Kendriya Vidyalaya Parbhani', 2390, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (976, 35, 'Kendriya Vidyalaya Ponda', 1068, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (977, 35, 'Kendriya Vidyalaya Pulgaon Camp', 1131, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (978, 35, 'Kendriya Vidyalaya Range Hills Estate', 1232, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (979, 35, 'Kendriya Vidyalaya Scr Nanded', 2196, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (980, 35, 'Kendriya Vidyalaya Sholapur', 1233, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (981, 35, 'Kendriya Vidyalaya Washim', 2384, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (982, 35, 'Kendriya Vidyalaya Yawatmal', 2088, 1, 15, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (983, 36, 'Kendriya Vidyalaya (afs) Bihata', 1816, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (984, 36, 'Kendriya Vidyalaya (afs) No I Darbhanga', 1819, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (985, 36, 'Kendriya Vidyalaya (bsf) Kishan Ganj', 1832, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (986, 36, 'Kendriya Vidyalaya (crpf)mokam Ghat', 1837, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (987, 36, 'Kendriya Vidyalaya (ioc) No.II Barauni', 1813, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (988, 36, 'Kendriya Vidyalaya (ntpc) Kahal Gaon', 1829, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (989, 36, 'Kendriya Vidyalaya Ainwan', 1810, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (990, 36, 'Kendriya Vidyalaya Arah', 2062, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (991, 36, 'Kendriya Vidyalaya Araria', 2125, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (992, 36, 'Kendriya Vidyalaya Aurangabad', 2242, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (993, 36, 'Kendriya Vidyalaya Banka', 1945, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (994, 36, 'Kendriya Vidyalaya Betiah', 1815, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (995, 36, 'Kendriya Vidyalaya Buxar', 1817, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (996, 36, 'Kendriya Vidyalaya Cast Wheel Plant Bela', 2258, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (997, 36, 'Kendriya Vidyalaya Chapra', 1938, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (998, 36, 'Kendriya Vidyalaya Crpf Jhaphan', 2244, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (999, 36, 'Kendriya Vidyalaya Danapur Cantt', 1840, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1000, 36, 'Kendriya Vidyalaya Garhara', 1814, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1001, 36, 'Kendriya Vidyalaya Gopalganj', 1939, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1002, 36, 'Kendriya Vidyalaya Hajipur', 1826, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1003, 36, 'Kendriya Vidyalaya Harnaut', 2243, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1004, 36, 'Kendriya Vidyalaya Jamalpur', 1827, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1005, 36, 'Kendriya Vidyalaya Jawahar Nagar', 1828, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1006, 36, 'Kendriya Vidyalaya Jhajha', 2302, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1007, 36, 'Kendriya Vidyalaya Katihar', 1830, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1008, 36, 'Kendriya Vidyalaya Khagaria', 1831, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1009, 36, 'Kendriya Vidyalaya Khagaul', 1841, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1010, 36, 'Kendriya Vidyalaya Lakhisa Rai', 1833, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1011, 36, 'Kendriya Vidyalaya Maharajganj', 2265, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1012, 36, 'Kendriya Vidyalaya Mashrak', 1835, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1013, 36, 'Kendriya Vidyalaya Motihari', 1836, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1014, 36, 'Kendriya Vidyalaya Muzzaffarpur', 1839, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1015, 36, 'Kendriya Vidyalaya Nabinagar Npgcl', 2378, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1016, 36, 'Kendriya Vidyalaya No 1 Barauni', 1946, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1017, 36, 'Kendriya Vidyalaya No Ii Darbhanga', 1947, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1018, 36, 'Kendriya Vidyalaya No. I Gaya', 1821, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1019, 36, 'Kendriya Vidyalaya No. Ii Gaya', 1822, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1020, 36, 'Kendriya Vidyalaya No.I Kankarbagh Patna', 1842, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1021, 36, 'Kendriya Vidyalaya No.II Bailey Road Patna', 1843, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1022, 36, 'Kendriya Vidyalaya Of Nalanda', 2109, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1023, 36, 'Kendriya Vidyalaya Purnia', 2063, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1024, 36, 'Kendriya Vidyalaya Pusa-rau', 1844, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1025, 36, 'Kendriya Vidyalaya Saharsa', 1846, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1026, 36, 'Kendriya Vidyalaya Samastipur', 1847, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1027, 36, 'Kendriya Vidyalaya Sasaram', 2291, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1028, 36, 'Kendriya Vidyalaya Sheohar', 2145, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1029, 36, 'Kendriya Vidyalaya Siwan', 1948, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1030, 36, 'Kendriya Vidyalaya Sonpur', 1849, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1031, 37, 'Kendriya Vidyalay No I Raipur', 1582, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1032, 37, 'Kendriya Vidyalaya (biop) Kirandul', 1571, 1, 10, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1033, 37, 'Kendriya Vidyalaya (biop)bacheli', 1543, 1, 10, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1034, 37, 'Kendriya Vidyalaya (ntpc)(bcpp) No.IV Korba', 1575, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1035, 37, 'Kendriya Vidyalaya (secl) Jhagrakhand', 1568, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1036, 37, 'Kendriya Vidyalaya (secl) No.III Korba', 1574, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1037, 37, 'Kendriya Vidyalaya (secl)baikuntpur', 1544, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1038, 37, 'Kendriya Vidyalaya (secl)chiri Miri', 1550, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1039, 37, 'Kendriya Vidyalaya Ambika Pur', 1542, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1040, 37, 'Kendriya Vidyalaya Bhilai', 1546, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1041, 37, 'Kendriya Vidyalaya Bijapur', 2351, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1042, 37, 'Kendriya Vidyalaya Bilaspur', 1548, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1043, 37, 'Kendriya Vidyalaya Cisf Bhilai', 2236, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1044, 37, 'Kendriya Vidyalaya Dantewada', 1552, 1, 10, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1045, 37, 'Kendriya Vidyalaya Dhamtari', 2080, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1046, 37, 'Kendriya Vidyalaya Dungargarh', 1555, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1047, 37, 'Kendriya Vidyalaya Durg', 1547, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1048, 37, 'Kendriya Vidyalaya Jagdalpur', 1564, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1049, 37, 'Kendriya Vidyalaya Janjgir', 2288, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1050, 37, 'Kendriya Vidyalaya Jashpur', 1566, 1, 10, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1051, 37, 'Kendriya Vidyalaya Kanker', 2081, 1, 10, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1052, 37, 'Kendriya Vidyalaya Khairagarh', 2152, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1053, 37, 'Kendriya Vidyalaya Khurud', 2364, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1054, 37, 'Kendriya Vidyalaya Maharajpur Kawardha', 2369, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1055, 37, 'Kendriya Vidyalaya Mahasumand', 1576, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1056, 37, 'Kendriya Vidyalaya Manendragarh', 1578, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1057, 37, 'Kendriya Vidyalaya Narayanpur', 2313, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1058, 37, 'Kendriya Vidyalaya Naya Raipur', 2357, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1059, 37, 'Kendriya Vidyalaya No Ii (ntpc) Korba', 1573, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1060, 37, 'Kendriya Vidyalaya No. Ii Raipur', 1583, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1061, 37, 'Kendriya Vidyalaya Raigarh', 1581, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1062, 37, 'Kendriya Vidyalaya Rajnandgaon', 2264, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1063, 37, 'Kendriya Vidyalaya Saraipalli', 2365, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1064, 37, 'Kendriya Vidyalaya Sukma', 2352, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1065, 38, 'Kendriya Vidyalaya (bsf)hazaribagh', 1168, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1066, 38, 'Kendriya Vidyalaya (ccl) Ranchi', 1183, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1067, 38, 'Kendriya Vidyalaya (crpf)ranchi', 1180, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1068, 38, 'Kendriya Vidyalaya (ctbs) Chandrapura', 1159, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1069, 38, 'Kendriya Vidyalaya (hec) Ranchi', 1181, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1070, 38, 'Kendriya Vidyalaya (iop) Meghahatuburu', 1173, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1071, 38, 'Kendriya Vidyalaya (rly) No.III Bokaro', 1153, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1072, 38, 'Kendriya Vidyalaya (thermal) Bokaro', 1154, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1073, 38, 'Kendriya Vidyalaya Afs Singharshi', 1188, 1, 11, 'V', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1074, 38, 'Kendriya Vidyalaya Barkakana', 1177, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1075, 38, 'Kendriya Vidyalaya Bhurkunda', 1178, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1076, 38, 'Kendriya Vidyalaya Chakradharpur', 1158, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1077, 38, 'Kendriya Vidyalaya Chatra', 2360, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1078, 38, 'Kendriya Vidyalaya Deepatoli Ranchi', 1182, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1079, 38, 'Kendriya Vidyalaya Dhanbad Old Dvs Building', 1163, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1080, 38, 'Kendriya Vidyalaya Dumka', 2358, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1081, 38, 'Kendriya Vidyalaya Garhwa', 2071, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1082, 38, 'Kendriya Vidyalaya Giridih', 2359, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1083, 38, 'Kendriya Vidyalaya Godda', 2072, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1084, 38, 'Kendriya Vidyalaya Gomoh', 1166, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1085, 38, 'Kendriya Vidyalaya Gumla', 2151, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1086, 38, 'Kendriya Vidyalaya Jamtara', 2073, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1087, 38, 'Kendriya Vidyalaya Khunti', 2348, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1088, 38, 'Kendriya Vidyalaya Latehar', 2074, 1, 11, 'H', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1089, 38, 'Kendriya Vidyalaya Lohardaga', 2349, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1090, 38, 'Kendriya Vidyalaya Madhupur(deoghar)', 2097, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1091, 38, 'Kendriya Vidyalaya No Ii Dhanbad', 1164, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1092, 38, 'Kendriya Vidyalaya No.I Bokaro Dbs City', 1152, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1093, 38, 'Kendriya Vidyalaya Patratu', 1175, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1094, 38, 'Kendriya Vidyalaya Ramgarh Cantt', 1179, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1095, 38, 'Kendriya Vidyalaya Ranchi Hinoo', 1184, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1096, 38, 'Kendriya Vidyalaya Ranchi Namkum', 1185, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1097, 38, 'Kendriya Vidyalaya Shahibganj', 2130, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1098, 38, 'Kendriya Vidyalaya Simdega', 2112, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1099, 38, 'Kendriya Vidyalaya Surda Ghatsila', 1191, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1100, 38, 'Kendriya Vidyalaya Tata Nagar', 1193, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1101, 38, 'Kendriya Vidyalaya(dvc)maithan Dam', 1172, 1, 11, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1102, 39, 'Kendriya Vidyalaya (afs) Laitkor Peak Shillong', 1492, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1103, 39, 'Kendriya Vidyalaya (afs)kumbhirgram', 1889, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1104, 39, 'Kendriya Vidyalaya (bsf) Bagafa', 1857, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1105, 39, 'Kendriya Vidyalaya (bsf) Panisagar', 1883, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1106, 39, 'Kendriya Vidyalaya (bsf)dholchera', 1863, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1107, 39, 'Kendriya Vidyalaya (happy Valley)shillong', 1491, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1108, 39, 'Kendriya Vidyalaya (kunjban)No.I Agartala', 1854, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1109, 39, 'Kendriya Vidyalaya (nehu) Shillong', 1493, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1110, 39, 'Kendriya Vidyalaya (nepa) Barapani', 1490, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1111, 39, 'Kendriya Vidyalaya (ongc) No.II Agartala', 1855, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1112, 39, 'Kendriya Vidyalaya (ongc) Sonai Road', 1892, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1113, 39, 'Kendriya Vidyalaya Aizawal', 1856, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1114, 39, 'Kendriya Vidyalaya Assam University', 2333, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1115, 39, 'Kendriya Vidyalaya Bsf Taliamura. Khasiamangal', 2208, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1116, 39, 'Kendriya Vidyalaya Champhai', 2210, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1117, 39, 'Kendriya Vidyalaya Dhalai', 2094, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1118, 39, 'Kendriya Vidyalaya Eac Upper Shillong', 1494, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1119, 39, 'Kendriya Vidyalaya Gc Crpf Agartala', 2207, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1120, 39, 'Kendriya Vidyalaya Kailashahar', 1874, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1121, 39, 'Kendriya Vidyalaya Karimgunj', 1875, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1122, 39, 'Kendriya Vidyalaya Lunglei', 1881, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1123, 39, 'Kendriya Vidyalaya Masimpur', 1890, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1124, 39, 'Kendriya Vidyalaya Mizoram University Tanhril', 2154, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1125, 39, 'Kendriya Vidyalaya Nit', 2275, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1126, 39, 'Kendriya Vidyalaya Nit Agartala', 2206, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1127, 39, 'Kendriya Vidyalaya Silchar', 1891, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1128, 39, 'Kendriya Vidyalaya Tura', 1500, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1129, 39, 'Kendriya Vidyalaya Umroi Cantt', 1495, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1130, 39, 'Kendriya Vidyalaya(hpc) Cachar Panchgram', 1859, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1131, 40, 'Kendirya Vidayalaya No. II Itanagar', 1473, 1, 13, '0', '2019-01-01 00:00:00', '2019-09-04 10:35:09');
INSERT INTO `ci_schools` VALUES (1132, 40, 'Kendriya Vidyalaya (bsf) Chura Chand Pur', 1862, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1133, 40, 'Kendriya Vidyalaya (crpf)dimapur', 1865, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1134, 40, 'Kendriya Vidyalaya (crpf)larie Hill Kohima', 1877, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1135, 40, 'Kendriya Vidyalaya (crpf)No.II Imphal', 1872, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1136, 40, 'Kendriya Vidyalaya (leimakhong)no Iii Imphal', 1873, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1137, 40, 'Kendriya Vidyalaya (oil)duliajan', 1869, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1138, 40, 'Kendriya Vidyalaya Akampat', 2317, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1139, 40, 'Kendriya Vidyalaya Along (11 Assam Rifles)', 1459, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1140, 40, 'Kendriya Vidyalaya Chabua', 1860, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1141, 40, 'Kendriya Vidyalaya Chakpikarong', 2386, 1, 13, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1142, 40, 'Kendriya Vidyalaya Dibrugarh', 1864, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1143, 40, 'Kendriya Vidyalaya Dinjan', 1866, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1144, 40, 'Kendriya Vidyalaya Dirang', 2118, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1145, 40, 'Kendriya Vidyalaya Khonsa', 1941, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1146, 40, 'Kendriya Vidyalaya Kimin (9 Assam Rifles)', 1478, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1147, 40, 'Kendriya Vidyalaya Longding', 2355, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1148, 40, 'Kendriya Vidyalaya Miaon', 1942, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1149, 40, 'Kendriya Vidyalaya Mohanbari', 1861, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1150, 40, 'Kendriya Vidyalaya Nagaland Univeristy Lumami', 2332, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1151, 40, 'Kendriya Vidyalaya Nirjuli (nerist)', 1483, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1152, 40, 'Kendriya Vidyalaya No. I Itanagar', 1472, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1153, 40, 'Kendriya Vidyalaya Passigaht', 1884, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1154, 40, 'Kendriya Vidyalaya Rangapahar Cantt', 1885, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1155, 40, 'Kendriya Vidyalaya Roing', 1920, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1156, 40, 'Kendriya Vidyalaya Tamenglong', 2089, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1157, 40, 'Kendriya Vidyalaya Tawang', 1496, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1158, 40, 'Kendriya Vidyalaya Tenga Valley', 1489, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1159, 40, 'Kendriya Vidyalaya Tezu', 1893, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1160, 40, 'Kendriya Vidyalaya Tinsukia', 1894, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1161, 40, 'Kendriya Vidyalaya Tuli', 1895, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1162, 40, 'Kendriya Vidyalaya Tuting', 2251, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1163, 40, 'Kendriya Vidyalaya Ukhrul', 2090, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1164, 40, 'Kendriya Vidyalaya Zakhma', 1896, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1165, 40, 'Kendriya Vidyalaya Zero Hapoli', 2304, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1166, 40, 'Kendriya Vidyalaya(lamphelpat)No.I Imphal', 1871, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1167, 40, 'Kendriya Vidyalaya. Nhpc. Loktak', 1879, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1168, 40, 'Kendriya Vidyalayalekha Pani', 1878, 1, 13, 'Ner', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1169, 41, 'Kendriya Vidyalaya (bhu)varanasi', 1850, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1170, 41, 'Kendriya Vidyalaya (dlw) Varanasi', 1851, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1171, 41, 'Kendriya Vidyalaya (iffco)phulpur', 1753, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1172, 41, 'Kendriya Vidyalaya (iti) Mankapur', 1749, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1173, 41, 'Kendriya Vidyalaya (ntpc) Rihand Nagar', 1845, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1174, 41, 'Kendriya Vidyalaya Aayer Varanasi', 2395, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1175, 41, 'Kendriya Vidyalaya Afs Bamrauli', 1708, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1176, 41, 'Kendriya Vidyalaya Amhat. Sultanpur', 1715, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1177, 41, 'Kendriya Vidyalaya Balliya', 1812, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1178, 41, 'Kendriya Vidyalaya Basti', 1720, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1179, 41, 'Kendriya Vidyalaya Bhadohi', 2393, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1180, 41, 'Kendriya Vidyalaya Chero Salempur', 2245, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1181, 41, 'Kendriya Vidyalaya Chitrakoot', 2255, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1182, 41, 'Kendriya Vidyalaya Chopan', 1818, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1183, 41, 'Kendriya Vidyalaya Cod Chheoki', 1709, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1184, 41, 'Kendriya Vidyalaya Crpf Allahabad', 2185, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1185, 41, 'Kendriya Vidyalaya Deoria', 1820, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1186, 41, 'Kendriya Vidyalaya Gangrani', 2285, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1187, 41, 'Kendriya Vidyalaya Ghazipur', 1823, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1188, 41, 'Kendriya Vidyalaya Gonda', 1725, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1189, 41, 'Kendriya Vidyalaya Iiit Allahabad', 1714, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1190, 41, 'Kendriya Vidyalaya Kauhar Amethi', 2391, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1191, 41, 'Kendriya Vidyalaya Manauri Allahabad', 1710, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1192, 41, 'Kendriya Vidyalaya Mau', 1834, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1193, 41, 'Kendriya Vidyalaya Mirzapur', 2394, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1194, 41, 'Kendriya Vidyalaya Mughal Sarai', 1838, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1195, 41, 'Kendriya Vidyalaya Naini', 1711, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1196, 41, 'Kendriya Vidyalaya New Cantt Allahabad', 1712, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1197, 41, 'Kendriya Vidyalaya No. Ii Gorakhpur', 1825, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1198, 41, 'Kendriya Vidyalaya No.I Gorakhpur', 1824, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1199, 41, 'Kendriya Vidyalaya No.IV Varanasi', 1853, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1200, 41, 'Kendriya Vidyalaya Ntpc Shaktinagar', 1848, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1201, 41, 'Kendriya Vidyalaya Old Cantt Allahabad', 1713, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1202, 41, 'Kendriya Vidyalaya Sidharth Nagar', 2323, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1203, 41, 'Kendriya Vidyalaya Varanasi Cantt', 1852, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1204, 41, 'Kendriya Vidyalaya.azamgarh', 1811, 1, 10, '0', '2019-01-01 00:00:00', '2019-01-01 00:00:00');
INSERT INTO `ci_schools` VALUES (1205, 16, 'Test name', 2435, 1, 10, 'H', '2019-10-15 15:23:29', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_secret_key
-- ----------------------------
DROP TABLE IF EXISTS `ci_secret_key`;
CREATE TABLE `ci_secret_key`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `captcha` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1328 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_secret_key
-- ----------------------------
INSERT INTO `ci_secret_key` VALUES (1, '1557898338', 'XI0UV');
INSERT INTO `ci_secret_key` VALUES (2, '1557898584', 'KDNJD');
INSERT INTO `ci_secret_key` VALUES (4, '1557900986', '98598');
INSERT INTO `ci_secret_key` VALUES (6, '1557905541', '88373');
INSERT INTO `ci_secret_key` VALUES (7, '1557908707', '18896');
INSERT INTO `ci_secret_key` VALUES (8, '1558077391', '81761');
INSERT INTO `ci_secret_key` VALUES (10, '1558079613', '87811');
INSERT INTO `ci_secret_key` VALUES (11, '1558082091', '43429');
INSERT INTO `ci_secret_key` VALUES (12, '1558082092', '74782');
INSERT INTO `ci_secret_key` VALUES (14, '1558085022', '73626');
INSERT INTO `ci_secret_key` VALUES (16, '1558091625', '53816');
INSERT INTO `ci_secret_key` VALUES (18, '1558094406', '36113');
INSERT INTO `ci_secret_key` VALUES (20, '1558095080', '34429');
INSERT INTO `ci_secret_key` VALUES (22, '1558331306', '63662');
INSERT INTO `ci_secret_key` VALUES (23, '1558338930', '69112');
INSERT INTO `ci_secret_key` VALUES (25, '1558353536', '73583');
INSERT INTO `ci_secret_key` VALUES (27, '1558424782', '52438');
INSERT INTO `ci_secret_key` VALUES (29, '1558427232', '39531');
INSERT INTO `ci_secret_key` VALUES (34, '1558439507', '14479');
INSERT INTO `ci_secret_key` VALUES (36, '1558511936', '22687');
INSERT INTO `ci_secret_key` VALUES (38, '1558598203', '31497');
INSERT INTO `ci_secret_key` VALUES (39, '1558599835', '66815');
INSERT INTO `ci_secret_key` VALUES (41, '1558612756', '32423');
INSERT INTO `ci_secret_key` VALUES (43, '1558679742', '47378');
INSERT INTO `ci_secret_key` VALUES (45, '1558685178', '27938');
INSERT INTO `ci_secret_key` VALUES (48, '1558944393', '96531');
INSERT INTO `ci_secret_key` VALUES (49, '1559018206', '69127');
INSERT INTO `ci_secret_key` VALUES (50, '1559018257', '96469');
INSERT INTO `ci_secret_key` VALUES (51, '1559018300', '43698');
INSERT INTO `ci_secret_key` VALUES (55, '1559021257', '74157');
INSERT INTO `ci_secret_key` VALUES (57, '1559022499', '34744');
INSERT INTO `ci_secret_key` VALUES (60, '1559024700', '44323');
INSERT INTO `ci_secret_key` VALUES (61, '1559024743', '38298');
INSERT INTO `ci_secret_key` VALUES (62, '1559025443', '67843');
INSERT INTO `ci_secret_key` VALUES (63, '1559025463', '27326');
INSERT INTO `ci_secret_key` VALUES (65, '1559026189', '92847');
INSERT INTO `ci_secret_key` VALUES (66, '1559026337', '66435');
INSERT INTO `ci_secret_key` VALUES (67, '1559027519', '54518');
INSERT INTO `ci_secret_key` VALUES (69, '1559030194', '47145');
INSERT INTO `ci_secret_key` VALUES (71, '1559033286', '12762');
INSERT INTO `ci_secret_key` VALUES (72, '1559039931', '12438');
INSERT INTO `ci_secret_key` VALUES (74, '1559040883', '87638');
INSERT INTO `ci_secret_key` VALUES (78, '1559043106', '39872');
INSERT INTO `ci_secret_key` VALUES (79, '1559046282', '23883');
INSERT INTO `ci_secret_key` VALUES (80, '1559119389', '91382');
INSERT INTO `ci_secret_key` VALUES (82, '1559122258', '65279');
INSERT INTO `ci_secret_key` VALUES (83, '1559122301', '29231');
INSERT INTO `ci_secret_key` VALUES (84, '1559190704', '32824');
INSERT INTO `ci_secret_key` VALUES (89, '1559201334', '85126');
INSERT INTO `ci_secret_key` VALUES (90, '1559203321', '94377');
INSERT INTO `ci_secret_key` VALUES (91, '1559204910', '85275');
INSERT INTO `ci_secret_key` VALUES (92, '1559205935', '62842');
INSERT INTO `ci_secret_key` VALUES (95, '1559281419', '76142');
INSERT INTO `ci_secret_key` VALUES (97, '1559285269', '67388');
INSERT INTO `ci_secret_key` VALUES (98, '1559286047', '89689');
INSERT INTO `ci_secret_key` VALUES (100, '1559289171', '85453');
INSERT INTO `ci_secret_key` VALUES (104, '1559634733', '46952');
INSERT INTO `ci_secret_key` VALUES (107, '1559644283', '52399');
INSERT INTO `ci_secret_key` VALUES (109, '1559807975', '37943');
INSERT INTO `ci_secret_key` VALUES (110, '1559810739', '71617');
INSERT INTO `ci_secret_key` VALUES (113, '1559813302', '81628');
INSERT INTO `ci_secret_key` VALUES (114, '1559814576', '93476');
INSERT INTO `ci_secret_key` VALUES (119, '1559896622', '63926');
INSERT INTO `ci_secret_key` VALUES (120, '1560139553', '87591');
INSERT INTO `ci_secret_key` VALUES (121, '1560139553', '82271');
INSERT INTO `ci_secret_key` VALUES (123, '1560142880', '94134');
INSERT INTO `ci_secret_key` VALUES (124, '1560229617', '49959');
INSERT INTO `ci_secret_key` VALUES (125, '1560229620', '73565');
INSERT INTO `ci_secret_key` VALUES (127, '1560253927', '56779');
INSERT INTO `ci_secret_key` VALUES (133, '1560336142', '96795');
INSERT INTO `ci_secret_key` VALUES (134, '1560398094', '32625');
INSERT INTO `ci_secret_key` VALUES (136, '1560403226', '57321');
INSERT INTO `ci_secret_key` VALUES (138, '1560411400', '76467');
INSERT INTO `ci_secret_key` VALUES (140, '1560487622', '51738');
INSERT INTO `ci_secret_key` VALUES (144, '1560487938', '71951');
INSERT INTO `ci_secret_key` VALUES (146, '1560488044', '23137');
INSERT INTO `ci_secret_key` VALUES (148, '1560488121', '96618');
INSERT INTO `ci_secret_key` VALUES (150, '1560488245', '13439');
INSERT INTO `ci_secret_key` VALUES (152, '1560488272', '79741');
INSERT INTO `ci_secret_key` VALUES (153, '1560488292', '14784');
INSERT INTO `ci_secret_key` VALUES (155, '1560488319', '34877');
INSERT INTO `ci_secret_key` VALUES (156, '1560488342', '86676');
INSERT INTO `ci_secret_key` VALUES (157, '1560488353', '78159');
INSERT INTO `ci_secret_key` VALUES (159, '1560488396', '31886');
INSERT INTO `ci_secret_key` VALUES (160, '1560488433', '66572');
INSERT INTO `ci_secret_key` VALUES (162, '1560488466', '41966');
INSERT INTO `ci_secret_key` VALUES (163, '1560488467', '95363');
INSERT INTO `ci_secret_key` VALUES (164, '1560488748', '44252');
INSERT INTO `ci_secret_key` VALUES (165, '1560488760', '57259');
INSERT INTO `ci_secret_key` VALUES (166, '1560488779', '36195');
INSERT INTO `ci_secret_key` VALUES (168, '1560489130', '22284');
INSERT INTO `ci_secret_key` VALUES (169, '1560489170', '52576');
INSERT INTO `ci_secret_key` VALUES (171, '1560489251', '56329');
INSERT INTO `ci_secret_key` VALUES (173, '1560489375', '12581');
INSERT INTO `ci_secret_key` VALUES (174, '1560490209', '86624');
INSERT INTO `ci_secret_key` VALUES (177, '1560511873', '85646');
INSERT INTO `ci_secret_key` VALUES (178, '1560512988', '82591');
INSERT INTO `ci_secret_key` VALUES (182, '1560769142', '75382');
INSERT INTO `ci_secret_key` VALUES (183, '1560830862', '46386');
INSERT INTO `ci_secret_key` VALUES (185, '1560931958', '34663');
INSERT INTO `ci_secret_key` VALUES (188, '1561013731', '26873');
INSERT INTO `ci_secret_key` VALUES (189, '1561015274', '36835');
INSERT INTO `ci_secret_key` VALUES (190, '1561017077', '75115');
INSERT INTO `ci_secret_key` VALUES (191, '1561018208', '31589');
INSERT INTO `ci_secret_key` VALUES (193, '1561030243', '47771');
INSERT INTO `ci_secret_key` VALUES (194, '1561098318', '61549');
INSERT INTO `ci_secret_key` VALUES (195, '1561098697', '78793');
INSERT INTO `ci_secret_key` VALUES (198, '1561102170', '55499');
INSERT INTO `ci_secret_key` VALUES (201, '1561362942', '95979');
INSERT INTO `ci_secret_key` VALUES (203, '1561447725', '74341');
INSERT INTO `ci_secret_key` VALUES (205, '1561454743', '31686');
INSERT INTO `ci_secret_key` VALUES (208, '1561461975', '86855');
INSERT INTO `ci_secret_key` VALUES (210, '1561528414', '11369');
INSERT INTO `ci_secret_key` VALUES (211, '1561531786', '83897');
INSERT INTO `ci_secret_key` VALUES (212, '1561532963', '86317');
INSERT INTO `ci_secret_key` VALUES (214, '1561533531', '95547');
INSERT INTO `ci_secret_key` VALUES (215, '1561536053', '21391');
INSERT INTO `ci_secret_key` VALUES (217, '1561541483', '61741');
INSERT INTO `ci_secret_key` VALUES (220, '1561543454', '73787');
INSERT INTO `ci_secret_key` VALUES (221, '1561548667', '17516');
INSERT INTO `ci_secret_key` VALUES (225, '1561611174', '15192');
INSERT INTO `ci_secret_key` VALUES (230, '1561617518', '54678');
INSERT INTO `ci_secret_key` VALUES (235, '1561617973', '34286');
INSERT INTO `ci_secret_key` VALUES (236, '1561618343', '22579');
INSERT INTO `ci_secret_key` VALUES (239, '1561619546', '25868');
INSERT INTO `ci_secret_key` VALUES (240, '1561621816', '26788');
INSERT INTO `ci_secret_key` VALUES (243, '1561625461', '54673');
INSERT INTO `ci_secret_key` VALUES (244, '1561625477', '46355');
INSERT INTO `ci_secret_key` VALUES (246, '1561625704', '62147');
INSERT INTO `ci_secret_key` VALUES (248, '1561634090', '15128');
INSERT INTO `ci_secret_key` VALUES (250, '1561635181', '71486');
INSERT INTO `ci_secret_key` VALUES (255, '1561697366', '55418');
INSERT INTO `ci_secret_key` VALUES (256, '1561698170', '67795');
INSERT INTO `ci_secret_key` VALUES (257, '1561701063', '35217');
INSERT INTO `ci_secret_key` VALUES (258, '1561703970', '46486');
INSERT INTO `ci_secret_key` VALUES (260, '1561708655', '14525');
INSERT INTO `ci_secret_key` VALUES (264, '1561720541', '71876');
INSERT INTO `ci_secret_key` VALUES (265, '1561721764', '31816');
INSERT INTO `ci_secret_key` VALUES (267, '1561956231', '87555');
INSERT INTO `ci_secret_key` VALUES (268, '1561958591', '82844');
INSERT INTO `ci_secret_key` VALUES (269, '1561961377', '25729');
INSERT INTO `ci_secret_key` VALUES (270, '1561966792', '41179');
INSERT INTO `ci_secret_key` VALUES (271, '1561972510', '57452');
INSERT INTO `ci_secret_key` VALUES (272, '1561973155', '96119');
INSERT INTO `ci_secret_key` VALUES (273, '1561973156', '79153');
INSERT INTO `ci_secret_key` VALUES (274, '1561977192', '15542');
INSERT INTO `ci_secret_key` VALUES (276, '1561979033', '54584');
INSERT INTO `ci_secret_key` VALUES (283, '1562054424', '49589');
INSERT INTO `ci_secret_key` VALUES (285, '1562058593', '18486');
INSERT INTO `ci_secret_key` VALUES (286, '1562059416', '85187');
INSERT INTO `ci_secret_key` VALUES (287, '1562060438', '15236');
INSERT INTO `ci_secret_key` VALUES (288, '1562066519', '27668');
INSERT INTO `ci_secret_key` VALUES (289, '1562068804', '56316');
INSERT INTO `ci_secret_key` VALUES (292, '1562131182', '78995');
INSERT INTO `ci_secret_key` VALUES (293, '1562131567', '91576');
INSERT INTO `ci_secret_key` VALUES (295, '1562135345', '92782');
INSERT INTO `ci_secret_key` VALUES (296, '1562141112', '21692');
INSERT INTO `ci_secret_key` VALUES (298, '1562213953', '13969');
INSERT INTO `ci_secret_key` VALUES (299, '1562214744', '59387');
INSERT INTO `ci_secret_key` VALUES (300, '1562215354', '52284');
INSERT INTO `ci_secret_key` VALUES (301, '1562215730', '75112');
INSERT INTO `ci_secret_key` VALUES (302, '1562217983', '53475');
INSERT INTO `ci_secret_key` VALUES (303, '1562222925', '77975');
INSERT INTO `ci_secret_key` VALUES (304, '1562227630', '61931');
INSERT INTO `ci_secret_key` VALUES (306, '1562234271', '76675');
INSERT INTO `ci_secret_key` VALUES (307, '1562299969', '69421');
INSERT INTO `ci_secret_key` VALUES (311, '1562322351', '13575');
INSERT INTO `ci_secret_key` VALUES (314, '1562561561', '54379');
INSERT INTO `ci_secret_key` VALUES (315, '1562567248', '49979');
INSERT INTO `ci_secret_key` VALUES (316, '1562568285', '93946');
INSERT INTO `ci_secret_key` VALUES (317, '1562573011', '61969');
INSERT INTO `ci_secret_key` VALUES (319, '1562580035', '69141');
INSERT INTO `ci_secret_key` VALUES (320, '1562581835', '64453');
INSERT INTO `ci_secret_key` VALUES (323, '1562654032', '29678');
INSERT INTO `ci_secret_key` VALUES (324, '1562660655', '55869');
INSERT INTO `ci_secret_key` VALUES (327, '1562664573', '12515');
INSERT INTO `ci_secret_key` VALUES (328, '1562665029', '16475');
INSERT INTO `ci_secret_key` VALUES (329, '1562665716', '65438');
INSERT INTO `ci_secret_key` VALUES (330, '1562666104', '87231');
INSERT INTO `ci_secret_key` VALUES (331, '1562668895', '92594');
INSERT INTO `ci_secret_key` VALUES (334, '1562673808', '32878');
INSERT INTO `ci_secret_key` VALUES (336, '1562745348', '65147');
INSERT INTO `ci_secret_key` VALUES (337, '1562757390', '16652');
INSERT INTO `ci_secret_key` VALUES (338, '1562820132', '76784');
INSERT INTO `ci_secret_key` VALUES (339, '1562831755', '38938');
INSERT INTO `ci_secret_key` VALUES (340, '1562833381', '79797');
INSERT INTO `ci_secret_key` VALUES (341, '1562834526', '48366');
INSERT INTO `ci_secret_key` VALUES (342, '1562846823', '59366');
INSERT INTO `ci_secret_key` VALUES (344, '1562910343', '34645');
INSERT INTO `ci_secret_key` VALUES (346, '1563963597', '52799');
INSERT INTO `ci_secret_key` VALUES (347, '1563963636', '47239');
INSERT INTO `ci_secret_key` VALUES (348, '1563964204', '15757');
INSERT INTO `ci_secret_key` VALUES (349, '1563964207', '12993');
INSERT INTO `ci_secret_key` VALUES (350, '1563964264', '95911');
INSERT INTO `ci_secret_key` VALUES (352, '1563964750', '15679');
INSERT INTO `ci_secret_key` VALUES (353, '1563968921', '17297');
INSERT INTO `ci_secret_key` VALUES (355, '1564038788', '49534');
INSERT INTO `ci_secret_key` VALUES (357, '1564038953', '34366');
INSERT INTO `ci_secret_key` VALUES (358, '1564038974', '75739');
INSERT INTO `ci_secret_key` VALUES (359, '1564039416', '25974');
INSERT INTO `ci_secret_key` VALUES (361, '1564041572', '19612');
INSERT INTO `ci_secret_key` VALUES (362, '1564044386', '78567');
INSERT INTO `ci_secret_key` VALUES (363, '1564044699', '95783');
INSERT INTO `ci_secret_key` VALUES (364, '1564045687', '25131');
INSERT INTO `ci_secret_key` VALUES (365, '1564046345', '97219');
INSERT INTO `ci_secret_key` VALUES (366, '1564046585', '77288');
INSERT INTO `ci_secret_key` VALUES (368, '1564047244', '64982');
INSERT INTO `ci_secret_key` VALUES (369, '1564047562', '18657');
INSERT INTO `ci_secret_key` VALUES (370, '1564047870', '17749');
INSERT INTO `ci_secret_key` VALUES (372, '1564048862', '47542');
INSERT INTO `ci_secret_key` VALUES (373, '1564049296', '81785');
INSERT INTO `ci_secret_key` VALUES (374, '1564054340', '83117');
INSERT INTO `ci_secret_key` VALUES (375, '1564054341', '91542');
INSERT INTO `ci_secret_key` VALUES (376, '1564055869', '18899');
INSERT INTO `ci_secret_key` VALUES (378, '1564056425', '82194');
INSERT INTO `ci_secret_key` VALUES (379, '1564056747', '17267');
INSERT INTO `ci_secret_key` VALUES (380, '1564113521', '52387');
INSERT INTO `ci_secret_key` VALUES (381, '1564114077', '83121');
INSERT INTO `ci_secret_key` VALUES (382, '1564114401', '37522');
INSERT INTO `ci_secret_key` VALUES (384, '1564114903', '11732');
INSERT INTO `ci_secret_key` VALUES (385, '1564115257', '74138');
INSERT INTO `ci_secret_key` VALUES (388, '1564128314', '63344');
INSERT INTO `ci_secret_key` VALUES (390, '1564136121', '39322');
INSERT INTO `ci_secret_key` VALUES (391, '1564141900', '87856');
INSERT INTO `ci_secret_key` VALUES (393, '1564379142', '32982');
INSERT INTO `ci_secret_key` VALUES (395, '1564398044', '89944');
INSERT INTO `ci_secret_key` VALUES (398, '1564463006', '37886');
INSERT INTO `ci_secret_key` VALUES (399, '1564473135', '17913');
INSERT INTO `ci_secret_key` VALUES (401, '1564482423', '81969');
INSERT INTO `ci_secret_key` VALUES (402, '1564484928', '29341');
INSERT INTO `ci_secret_key` VALUES (404, '1564555283', '43328');
INSERT INTO `ci_secret_key` VALUES (405, '1564557029', '97664');
INSERT INTO `ci_secret_key` VALUES (406, '1564557819', '45199');
INSERT INTO `ci_secret_key` VALUES (407, '1564560121', '32257');
INSERT INTO `ci_secret_key` VALUES (408, '1564562542', '22181');
INSERT INTO `ci_secret_key` VALUES (410, '1564563717', '56116');
INSERT INTO `ci_secret_key` VALUES (411, '1564565821', '59659');
INSERT INTO `ci_secret_key` VALUES (413, '1564569373', '44254');
INSERT INTO `ci_secret_key` VALUES (415, '1564574101', '67556');
INSERT INTO `ci_secret_key` VALUES (417, '1564632889', '39283');
INSERT INTO `ci_secret_key` VALUES (418, '1564635647', '45296');
INSERT INTO `ci_secret_key` VALUES (419, '1564646385', '86132');
INSERT INTO `ci_secret_key` VALUES (421, '1564648894', '74265');
INSERT INTO `ci_secret_key` VALUES (422, '1564657002', '86146');
INSERT INTO `ci_secret_key` VALUES (424, '1564721656', '13921');
INSERT INTO `ci_secret_key` VALUES (426, '1564733091', '26115');
INSERT INTO `ci_secret_key` VALUES (427, '1565669110', '36466');
INSERT INTO `ci_secret_key` VALUES (430, '1565676974', '87765');
INSERT INTO `ci_secret_key` VALUES (432, '1565681510', '57865');
INSERT INTO `ci_secret_key` VALUES (433, '1565682260', '78717');
INSERT INTO `ci_secret_key` VALUES (436, '1565947003', '74242');
INSERT INTO `ci_secret_key` VALUES (440, '1565957440', '26973');
INSERT INTO `ci_secret_key` VALUES (443, '1566192683', '57814');
INSERT INTO `ci_secret_key` VALUES (445, '1566215178', '94729');
INSERT INTO `ci_secret_key` VALUES (446, '1566215265', '51931');
INSERT INTO `ci_secret_key` VALUES (448, '1566276024', '93914');
INSERT INTO `ci_secret_key` VALUES (450, '1566286125', '87844');
INSERT INTO `ci_secret_key` VALUES (451, '1566286196', '96949');
INSERT INTO `ci_secret_key` VALUES (452, '1566286780', '98466');
INSERT INTO `ci_secret_key` VALUES (454, '1566290940', '41287');
INSERT INTO `ci_secret_key` VALUES (455, '1566293005', '45119');
INSERT INTO `ci_secret_key` VALUES (456, '1566294682', '71655');
INSERT INTO `ci_secret_key` VALUES (458, '1566297452', '43359');
INSERT INTO `ci_secret_key` VALUES (459, '1566298858', '78147');
INSERT INTO `ci_secret_key` VALUES (461, '1566363326', '41691');
INSERT INTO `ci_secret_key` VALUES (462, '1566367060', '83526');
INSERT INTO `ci_secret_key` VALUES (464, '1566369041', '18848');
INSERT INTO `ci_secret_key` VALUES (465, '1566369582', '72897');
INSERT INTO `ci_secret_key` VALUES (467, '1566372752', '26478');
INSERT INTO `ci_secret_key` VALUES (469, '1566450390', '57337');
INSERT INTO `ci_secret_key` VALUES (471, '1566458611', '35561');
INSERT INTO `ci_secret_key` VALUES (473, '1566467696', '17691');
INSERT INTO `ci_secret_key` VALUES (475, '1566473914', '69349');
INSERT INTO `ci_secret_key` VALUES (477, '1566543775', '42325');
INSERT INTO `ci_secret_key` VALUES (478, '1566544734', '98554');
INSERT INTO `ci_secret_key` VALUES (479, '1566546583', '71574');
INSERT INTO `ci_secret_key` VALUES (480, '1566546584', '52957');
INSERT INTO `ci_secret_key` VALUES (481, '1566549389', '33879');
INSERT INTO `ci_secret_key` VALUES (483, '1566551638', '86676');
INSERT INTO `ci_secret_key` VALUES (485, '1566558505', '14392');
INSERT INTO `ci_secret_key` VALUES (487, '1566561242', '42213');
INSERT INTO `ci_secret_key` VALUES (492, '1566798780', '68269');
INSERT INTO `ci_secret_key` VALUES (494, '1566802650', '14239');
INSERT INTO `ci_secret_key` VALUES (495, '1566809068', '13221');
INSERT INTO `ci_secret_key` VALUES (496, '1566878752', '92664');
INSERT INTO `ci_secret_key` VALUES (497, '1566880523', '83389');
INSERT INTO `ci_secret_key` VALUES (502, '1566885317', '81787');
INSERT INTO `ci_secret_key` VALUES (507, '1566886139', '91391');
INSERT INTO `ci_secret_key` VALUES (509, '1566889012', '14993');
INSERT INTO `ci_secret_key` VALUES (511, '1566892738', '99382');
INSERT INTO `ci_secret_key` VALUES (513, '1566896017', '56999');
INSERT INTO `ci_secret_key` VALUES (516, '1566901961', '43265');
INSERT INTO `ci_secret_key` VALUES (517, '1566965714', '45658');
INSERT INTO `ci_secret_key` VALUES (518, '1566965714', '25238');
INSERT INTO `ci_secret_key` VALUES (521, '1566968610', '81829');
INSERT INTO `ci_secret_key` VALUES (522, '1566969694', '92349');
INSERT INTO `ci_secret_key` VALUES (523, '1566969697', '54166');
INSERT INTO `ci_secret_key` VALUES (525, '1566975182', '21217');
INSERT INTO `ci_secret_key` VALUES (527, '1566981264', '58965');
INSERT INTO `ci_secret_key` VALUES (529, '1566987837', '39798');
INSERT INTO `ci_secret_key` VALUES (530, '1567052128', '31534');
INSERT INTO `ci_secret_key` VALUES (533, '1567057837', '95256');
INSERT INTO `ci_secret_key` VALUES (537, '1567059196', '65694');
INSERT INTO `ci_secret_key` VALUES (540, '1567141539', '31977');
INSERT INTO `ci_secret_key` VALUES (544, '1567151518', '53324');
INSERT INTO `ci_secret_key` VALUES (547, '1567162417', '64111');
INSERT INTO `ci_secret_key` VALUES (551, '1567402804', '59944');
INSERT INTO `ci_secret_key` VALUES (553, '1567415052', '98626');
INSERT INTO `ci_secret_key` VALUES (554, '1567415371', '56132');
INSERT INTO `ci_secret_key` VALUES (555, '1567415916', '64656');
INSERT INTO `ci_secret_key` VALUES (558, '1567419250', '96369');
INSERT INTO `ci_secret_key` VALUES (565, '1567493477', '49377');
INSERT INTO `ci_secret_key` VALUES (566, '1567495613', '93465');
INSERT INTO `ci_secret_key` VALUES (567, '1567497644', '83694');
INSERT INTO `ci_secret_key` VALUES (573, '1567573690', '56674');
INSERT INTO `ci_secret_key` VALUES (579, '1567579429', '15298');
INSERT INTO `ci_secret_key` VALUES (582, '1567580387', '32962');
INSERT INTO `ci_secret_key` VALUES (584, '1567583519', '32914');
INSERT INTO `ci_secret_key` VALUES (585, '1567584231', '25438');
INSERT INTO `ci_secret_key` VALUES (588, '1567587692', '24731');
INSERT INTO `ci_secret_key` VALUES (589, '1567590114', '21111');
INSERT INTO `ci_secret_key` VALUES (590, '1567591877', '52973');
INSERT INTO `ci_secret_key` VALUES (592, '1567594668', '26549');
INSERT INTO `ci_secret_key` VALUES (593, '1567595544', '26688');
INSERT INTO `ci_secret_key` VALUES (594, '1567599335', '48442');
INSERT INTO `ci_secret_key` VALUES (600, '1567675265', '48779');
INSERT INTO `ci_secret_key` VALUES (605, '1567683632', '81475');
INSERT INTO `ci_secret_key` VALUES (606, '1567742558', '39291');
INSERT INTO `ci_secret_key` VALUES (610, '1567748109', '27946');
INSERT INTO `ci_secret_key` VALUES (614, '1567752957', '37391');
INSERT INTO `ci_secret_key` VALUES (616, '1567754132', '16345');
INSERT INTO `ci_secret_key` VALUES (619, '1567755943', '62745');
INSERT INTO `ci_secret_key` VALUES (620, '1567755984', '11943');
INSERT INTO `ci_secret_key` VALUES (621, '1567757729', '19263');
INSERT INTO `ci_secret_key` VALUES (622, '1567759038', '38275');
INSERT INTO `ci_secret_key` VALUES (625, '1567762344', '25319');
INSERT INTO `ci_secret_key` VALUES (629, '1567764716', '89953');
INSERT INTO `ci_secret_key` VALUES (630, '1567766989', '41864');
INSERT INTO `ci_secret_key` VALUES (631, '1567767164', '35726');
INSERT INTO `ci_secret_key` VALUES (633, '1568003179', '72675');
INSERT INTO `ci_secret_key` VALUES (635, '1568005766', '27978');
INSERT INTO `ci_secret_key` VALUES (636, '1568006492', '65439');
INSERT INTO `ci_secret_key` VALUES (638, '1568007540', '66555');
INSERT INTO `ci_secret_key` VALUES (639, '1568007899', '77681');
INSERT INTO `ci_secret_key` VALUES (640, '1568007970', '95957');
INSERT INTO `ci_secret_key` VALUES (643, '1568014572', '36198');
INSERT INTO `ci_secret_key` VALUES (644, '1568017986', '21738');
INSERT INTO `ci_secret_key` VALUES (646, '1568026019', '36683');
INSERT INTO `ci_secret_key` VALUES (650, '1568181598', '55519');
INSERT INTO `ci_secret_key` VALUES (651, '1568181612', '28937');
INSERT INTO `ci_secret_key` VALUES (653, '1568185483', '12532');
INSERT INTO `ci_secret_key` VALUES (654, '1568185894', '35572');
INSERT INTO `ci_secret_key` VALUES (659, '1568195270', '41375');
INSERT INTO `ci_secret_key` VALUES (665, '1568199519', '32317');
INSERT INTO `ci_secret_key` VALUES (668, '1568268936', '95218');
INSERT INTO `ci_secret_key` VALUES (670, '1568279038', '99316');
INSERT INTO `ci_secret_key` VALUES (672, '1568282437', '25268');
INSERT INTO `ci_secret_key` VALUES (679, '1568289481', '48537');
INSERT INTO `ci_secret_key` VALUES (681, '1568361983', '69383');
INSERT INTO `ci_secret_key` VALUES (684, '1568369747', '28866');
INSERT INTO `ci_secret_key` VALUES (687, '1568375831', '55453');
INSERT INTO `ci_secret_key` VALUES (689, '1568608052', '16532');
INSERT INTO `ci_secret_key` VALUES (690, '1568611943', '18848');
INSERT INTO `ci_secret_key` VALUES (692, '1568627188', '34362');
INSERT INTO `ci_secret_key` VALUES (694, '1568694572', '39136');
INSERT INTO `ci_secret_key` VALUES (696, '1568711482', '64755');
INSERT INTO `ci_secret_key` VALUES (697, '1568721819', '23412');
INSERT INTO `ci_secret_key` VALUES (698, '1568779105', '34795');
INSERT INTO `ci_secret_key` VALUES (700, '1568868909', '95327');
INSERT INTO `ci_secret_key` VALUES (702, '1568955297', '59243');
INSERT INTO `ci_secret_key` VALUES (704, '1568970408', '44619');
INSERT INTO `ci_secret_key` VALUES (708, '1569218840', '85495');
INSERT INTO `ci_secret_key` VALUES (710, '1569224110', '75737');
INSERT INTO `ci_secret_key` VALUES (712, '1569227220', '49649');
INSERT INTO `ci_secret_key` VALUES (713, '1569227439', '95478');
INSERT INTO `ci_secret_key` VALUES (716, '1569234183', '79653');
INSERT INTO `ci_secret_key` VALUES (717, '1569234594', '41373');
INSERT INTO `ci_secret_key` VALUES (724, '1569239529', '39811');
INSERT INTO `ci_secret_key` VALUES (727, '1569240517', '48669');
INSERT INTO `ci_secret_key` VALUES (728, '1569297737', '57157');
INSERT INTO `ci_secret_key` VALUES (730, '1569298161', '33624');
INSERT INTO `ci_secret_key` VALUES (733, '1569301518', '95741');
INSERT INTO `ci_secret_key` VALUES (736, '1569304420', '26557');
INSERT INTO `ci_secret_key` VALUES (741, '1569307754', '48488');
INSERT INTO `ci_secret_key` VALUES (746, '1569309403', '62512');
INSERT INTO `ci_secret_key` VALUES (747, '1569309421', '37772');
INSERT INTO `ci_secret_key` VALUES (752, '1569312112', '97985');
INSERT INTO `ci_secret_key` VALUES (753, '1569312411', '36629');
INSERT INTO `ci_secret_key` VALUES (754, '1569312719', '78455');
INSERT INTO `ci_secret_key` VALUES (755, '1569313433', '34298');
INSERT INTO `ci_secret_key` VALUES (756, '1569314361', '23477');
INSERT INTO `ci_secret_key` VALUES (761, '1569315602', '85244');
INSERT INTO `ci_secret_key` VALUES (764, '1569316643', '14458');
INSERT INTO `ci_secret_key` VALUES (770, '1569317989', '21631');
INSERT INTO `ci_secret_key` VALUES (771, '1569383963', '34945');
INSERT INTO `ci_secret_key` VALUES (775, '1569389233', '98367');
INSERT INTO `ci_secret_key` VALUES (777, '1569390442', '54265');
INSERT INTO `ci_secret_key` VALUES (778, '1569390514', '63147');
INSERT INTO `ci_secret_key` VALUES (779, '1569394485', '26341');
INSERT INTO `ci_secret_key` VALUES (781, '1569398803', '31675');
INSERT INTO `ci_secret_key` VALUES (782, '1569401171', '61652');
INSERT INTO `ci_secret_key` VALUES (793, '1569406154', '41554');
INSERT INTO `ci_secret_key` VALUES (794, '1569406584', '72513');
INSERT INTO `ci_secret_key` VALUES (795, '1569406860', '75434');
INSERT INTO `ci_secret_key` VALUES (797, '1569408163', '45265');
INSERT INTO `ci_secret_key` VALUES (799, '1569412240', '48382');
INSERT INTO `ci_secret_key` VALUES (800, '1569413423', '55525');
INSERT INTO `ci_secret_key` VALUES (804, '1569471002', '59224');
INSERT INTO `ci_secret_key` VALUES (813, '1569481809', '89583');
INSERT INTO `ci_secret_key` VALUES (814, '1569482018', '46528');
INSERT INTO `ci_secret_key` VALUES (815, '1569482190', '58298');
INSERT INTO `ci_secret_key` VALUES (816, '1569483174', '63922');
INSERT INTO `ci_secret_key` VALUES (817, '1569484411', '45578');
INSERT INTO `ci_secret_key` VALUES (821, '1569491813', '15391');
INSERT INTO `ci_secret_key` VALUES (822, '1569492784', '31952');
INSERT INTO `ci_secret_key` VALUES (823, '1569493192', '94947');
INSERT INTO `ci_secret_key` VALUES (824, '1569495684', '17136');
INSERT INTO `ci_secret_key` VALUES (826, '1569499914', '29556');
INSERT INTO `ci_secret_key` VALUES (828, '1569557836', '88674');
INSERT INTO `ci_secret_key` VALUES (829, '1569558297', '19717');
INSERT INTO `ci_secret_key` VALUES (830, '1569559474', '83154');
INSERT INTO `ci_secret_key` VALUES (831, '1569559659', '52945');
INSERT INTO `ci_secret_key` VALUES (833, '1569562851', '77485');
INSERT INTO `ci_secret_key` VALUES (834, '1569563809', '81322');
INSERT INTO `ci_secret_key` VALUES (836, '1569568410', '98837');
INSERT INTO `ci_secret_key` VALUES (839, '1569571002', '12619');
INSERT INTO `ci_secret_key` VALUES (840, '1569571595', '96331');
INSERT INTO `ci_secret_key` VALUES (841, '1569571596', '78781');
INSERT INTO `ci_secret_key` VALUES (845, '1569573651', '56352');
INSERT INTO `ci_secret_key` VALUES (850, '1569578000', '11293');
INSERT INTO `ci_secret_key` VALUES (851, '1569582228', '93934');
INSERT INTO `ci_secret_key` VALUES (852, '1569582361', '37241');
INSERT INTO `ci_secret_key` VALUES (853, '1569582891', '93117');
INSERT INTO `ci_secret_key` VALUES (855, '1569584762', '12421');
INSERT INTO `ci_secret_key` VALUES (856, '1569815831', '33136');
INSERT INTO `ci_secret_key` VALUES (858, '1569816853', '37259');
INSERT INTO `ci_secret_key` VALUES (862, '1569825483', '56776');
INSERT INTO `ci_secret_key` VALUES (863, '1569826066', '72176');
INSERT INTO `ci_secret_key` VALUES (865, '1569828289', '55738');
INSERT INTO `ci_secret_key` VALUES (866, '1569841037', '31786');
INSERT INTO `ci_secret_key` VALUES (867, '1569908968', '52497');
INSERT INTO `ci_secret_key` VALUES (868, '1569909386', '92468');
INSERT INTO `ci_secret_key` VALUES (873, '1569911410', '94613');
INSERT INTO `ci_secret_key` VALUES (874, '1569911667', '88415');
INSERT INTO `ci_secret_key` VALUES (877, '1569914291', '98582');
INSERT INTO `ci_secret_key` VALUES (878, '1569914410', '89127');
INSERT INTO `ci_secret_key` VALUES (880, '1569915143', '27596');
INSERT INTO `ci_secret_key` VALUES (881, '1569916648', '85964');
INSERT INTO `ci_secret_key` VALUES (882, '1569916806', '88841');
INSERT INTO `ci_secret_key` VALUES (883, '1569917252', '13661');
INSERT INTO `ci_secret_key` VALUES (887, '1569921430', '94193');
INSERT INTO `ci_secret_key` VALUES (888, '1569922044', '64757');
INSERT INTO `ci_secret_key` VALUES (894, '1569925404', '62156');
INSERT INTO `ci_secret_key` VALUES (895, '1569925996', '17584');
INSERT INTO `ci_secret_key` VALUES (896, '1569926126', '69532');
INSERT INTO `ci_secret_key` VALUES (899, '1569930442', '34849');
INSERT INTO `ci_secret_key` VALUES (902, '1570079032', '99582');
INSERT INTO `ci_secret_key` VALUES (904, '1570085260', '63529');
INSERT INTO `ci_secret_key` VALUES (906, '1570166790', '56797');
INSERT INTO `ci_secret_key` VALUES (907, '1570184480', '35129');
INSERT INTO `ci_secret_key` VALUES (910, '1570190810', '74362');
INSERT INTO `ci_secret_key` VALUES (912, '1570421077', '26373');
INSERT INTO `ci_secret_key` VALUES (913, '1570421494', '79128');
INSERT INTO `ci_secret_key` VALUES (914, '1570421801', '32617');
INSERT INTO `ci_secret_key` VALUES (915, '1570422156', '43426');
INSERT INTO `ci_secret_key` VALUES (921, '1570425901', '94717');
INSERT INTO `ci_secret_key` VALUES (924, '1570429351', '16188');
INSERT INTO `ci_secret_key` VALUES (925, '1570429611', '17359');
INSERT INTO `ci_secret_key` VALUES (928, '1570435218', '15686');
INSERT INTO `ci_secret_key` VALUES (931, '1570439863', '85458');
INSERT INTO `ci_secret_key` VALUES (932, '1570440677', '73596');
INSERT INTO `ci_secret_key` VALUES (937, '1570446057', '87248');
INSERT INTO `ci_secret_key` VALUES (938, '1570446879', '22675');
INSERT INTO `ci_secret_key` VALUES (939, '1570447063', '91171');
INSERT INTO `ci_secret_key` VALUES (944, '1570449937', '53238');
INSERT INTO `ci_secret_key` VALUES (948, '1570600330', '66764');
INSERT INTO `ci_secret_key` VALUES (951, '1570603582', '41128');
INSERT INTO `ci_secret_key` VALUES (952, '1570604421', '58393');
INSERT INTO `ci_secret_key` VALUES (953, '1570604621', '82265');
INSERT INTO `ci_secret_key` VALUES (957, '1570613334', '59559');
INSERT INTO `ci_secret_key` VALUES (963, '1570618644', '97181');
INSERT INTO `ci_secret_key` VALUES (966, '1570683720', '94163');
INSERT INTO `ci_secret_key` VALUES (970, '1570687699', '12497');
INSERT INTO `ci_secret_key` VALUES (971, '1570689576', '39635');
INSERT INTO `ci_secret_key` VALUES (973, '1570694488', '51353');
INSERT INTO `ci_secret_key` VALUES (978, '1570704746', '81114');
INSERT INTO `ci_secret_key` VALUES (979, '1570767669', '53879');
INSERT INTO `ci_secret_key` VALUES (980, '1570768886', '51888');
INSERT INTO `ci_secret_key` VALUES (986, '1570773994', '33518');
INSERT INTO `ci_secret_key` VALUES (987, '1570774600', '18841');
INSERT INTO `ci_secret_key` VALUES (990, '1570776856', '73226');
INSERT INTO `ci_secret_key` VALUES (991, '1570778903', '22121');
INSERT INTO `ci_secret_key` VALUES (992, '1570780782', '73275');
INSERT INTO `ci_secret_key` VALUES (993, '1570783845', '52979');
INSERT INTO `ci_secret_key` VALUES (994, '1571026286', '38233');
INSERT INTO `ci_secret_key` VALUES (997, '1571046881', '99678');
INSERT INTO `ci_secret_key` VALUES (1000, '1571114082', '29278');
INSERT INTO `ci_secret_key` VALUES (1003, '1571120614', '69246');
INSERT INTO `ci_secret_key` VALUES (1006, '1571126203', '83964');
INSERT INTO `ci_secret_key` VALUES (1008, '1571201760', '74544');
INSERT INTO `ci_secret_key` VALUES (1009, '1571202467', '46625');
INSERT INTO `ci_secret_key` VALUES (1014, '1571288234', '63293');
INSERT INTO `ci_secret_key` VALUES (1019, '1571303079', '35754');
INSERT INTO `ci_secret_key` VALUES (1021, '1571303726', '45955');
INSERT INTO `ci_secret_key` VALUES (1022, '1571313258', '47412');
INSERT INTO `ci_secret_key` VALUES (1024, '1571643358', '76443');
INSERT INTO `ci_secret_key` VALUES (1025, '1571647555', '15399');
INSERT INTO `ci_secret_key` VALUES (1028, '1571655060', '92643');
INSERT INTO `ci_secret_key` VALUES (1029, '1571658121', '23661');
INSERT INTO `ci_secret_key` VALUES (1044, '1571734600', '97455');
INSERT INTO `ci_secret_key` VALUES (1051, '1571745827', '22298');
INSERT INTO `ci_secret_key` VALUES (1053, '1571827664', '38957');
INSERT INTO `ci_secret_key` VALUES (1054, '1571976173', '47156');
INSERT INTO `ci_secret_key` VALUES (1055, '1571976805', '13375');
INSERT INTO `ci_secret_key` VALUES (1056, '1572512613', '31875');
INSERT INTO `ci_secret_key` VALUES (1061, '1572607170', '72587');
INSERT INTO `ci_secret_key` VALUES (1062, '1572840178', '33445');
INSERT INTO `ci_secret_key` VALUES (1064, '1572842475', '31819');
INSERT INTO `ci_secret_key` VALUES (1065, '1572842904', '31119');
INSERT INTO `ci_secret_key` VALUES (1066, '1572847665', '43819');
INSERT INTO `ci_secret_key` VALUES (1067, '1572868371', '56998');
INSERT INTO `ci_secret_key` VALUES (1068, '1572926298', '17139');
INSERT INTO `ci_secret_key` VALUES (1069, '1573013243', '11415');
INSERT INTO `ci_secret_key` VALUES (1071, '1573017280', '85585');
INSERT INTO `ci_secret_key` VALUES (1072, '1573018417', '38396');
INSERT INTO `ci_secret_key` VALUES (1073, '1573034607', '67139');
INSERT INTO `ci_secret_key` VALUES (1075, '1573122473', '17683');
INSERT INTO `ci_secret_key` VALUES (1076, '1573123462', '65759');
INSERT INTO `ci_secret_key` VALUES (1077, '1573205203', '92969');
INSERT INTO `ci_secret_key` VALUES (1082, '1573448351', '14199');
INSERT INTO `ci_secret_key` VALUES (1083, '1573448689', '36127');
INSERT INTO `ci_secret_key` VALUES (1084, '1573453741', '97218');
INSERT INTO `ci_secret_key` VALUES (1087, '1573474275', '53688');
INSERT INTO `ci_secret_key` VALUES (1089, '1573622598', '72635');
INSERT INTO `ci_secret_key` VALUES (1094, '1573625351', '36856');
INSERT INTO `ci_secret_key` VALUES (1096, '1573706740', '58128');
INSERT INTO `ci_secret_key` VALUES (1097, '1573713564', '34343');
INSERT INTO `ci_secret_key` VALUES (1098, '1573715790', '98729');
INSERT INTO `ci_secret_key` VALUES (1100, '1573792080', '57938');
INSERT INTO `ci_secret_key` VALUES (1102, '1573793856', '51668');
INSERT INTO `ci_secret_key` VALUES (1103, '1573797455', '24913');
INSERT INTO `ci_secret_key` VALUES (1107, '1573800030', '11452');
INSERT INTO `ci_secret_key` VALUES (1110, '1573806898', '75474');
INSERT INTO `ci_secret_key` VALUES (1112, '1573810614', '63995');
INSERT INTO `ci_secret_key` VALUES (1113, '1573819763', '64244');
INSERT INTO `ci_secret_key` VALUES (1114, '1574049546', '46486');
INSERT INTO `ci_secret_key` VALUES (1115, '1574049546', '87355');
INSERT INTO `ci_secret_key` VALUES (1116, '1574049885', '34658');
INSERT INTO `ci_secret_key` VALUES (1117, '1574050549', '49523');
INSERT INTO `ci_secret_key` VALUES (1118, '1574052051', '92741');
INSERT INTO `ci_secret_key` VALUES (1122, '1574056461', '84249');
INSERT INTO `ci_secret_key` VALUES (1127, '1574140134', '31785');
INSERT INTO `ci_secret_key` VALUES (1128, '1574140889', '85377');
INSERT INTO `ci_secret_key` VALUES (1148, '1574147107', '46551');
INSERT INTO `ci_secret_key` VALUES (1153, '1574148299', '44641');
INSERT INTO `ci_secret_key` VALUES (1161, '1574160251', '18813');
INSERT INTO `ci_secret_key` VALUES (1162, '1574222979', '95752');
INSERT INTO `ci_secret_key` VALUES (1193, '1574234741', '74388');
INSERT INTO `ci_secret_key` VALUES (1207, '1574251261', '35634');
INSERT INTO `ci_secret_key` VALUES (1208, '1574309688', '34318');
INSERT INTO `ci_secret_key` VALUES (1209, '1574311029', '14898');
INSERT INTO `ci_secret_key` VALUES (1212, '1574326587', '56486');
INSERT INTO `ci_secret_key` VALUES (1213, '1574327574', '69716');
INSERT INTO `ci_secret_key` VALUES (1217, '1574330822', '45893');
INSERT INTO `ci_secret_key` VALUES (1219, '1574397037', '65624');
INSERT INTO `ci_secret_key` VALUES (1220, '1574398127', '61765');
INSERT INTO `ci_secret_key` VALUES (1226, '1574423998', '66554');
INSERT INTO `ci_secret_key` VALUES (1228, '1574655828', '52779');
INSERT INTO `ci_secret_key` VALUES (1237, '1574682216', '81597');
INSERT INTO `ci_secret_key` VALUES (1239, '1574682740', '76312');
INSERT INTO `ci_secret_key` VALUES (1240, '1574827908', '38712');
INSERT INTO `ci_secret_key` VALUES (1241, '1574850786', '57834');
INSERT INTO `ci_secret_key` VALUES (1244, '1574852577', '34579');
INSERT INTO `ci_secret_key` VALUES (1245, '1574920122', '93352');
INSERT INTO `ci_secret_key` VALUES (1251, '1574930232', '69153');
INSERT INTO `ci_secret_key` VALUES (1252, '1574932117', '36626');
INSERT INTO `ci_secret_key` VALUES (1257, '1575002785', '94581');
INSERT INTO `ci_secret_key` VALUES (1258, '1575002788', '31411');
INSERT INTO `ci_secret_key` VALUES (1259, '1575006129', '47849');
INSERT INTO `ci_secret_key` VALUES (1262, '1575006314', '82995');
INSERT INTO `ci_secret_key` VALUES (1266, '1575007532', '73662');
INSERT INTO `ci_secret_key` VALUES (1269, '1575008025', '81961');
INSERT INTO `ci_secret_key` VALUES (1270, '1575008042', '54978');
INSERT INTO `ci_secret_key` VALUES (1271, '1575008145', '85188');
INSERT INTO `ci_secret_key` VALUES (1272, '1575008147', '78594');
INSERT INTO `ci_secret_key` VALUES (1280, '1575008920', '84519');
INSERT INTO `ci_secret_key` VALUES (1281, '1575008944', '74438');
INSERT INTO `ci_secret_key` VALUES (1284, '1575013521', '32445');
INSERT INTO `ci_secret_key` VALUES (1286, '1575024462', '56169');
INSERT INTO `ci_secret_key` VALUES (1287, '1575259979', '84458');
INSERT INTO `ci_secret_key` VALUES (1293, '1575547824', '89766');
INSERT INTO `ci_secret_key` VALUES (1294, '1575633679', '31328');
INSERT INTO `ci_secret_key` VALUES (1300, '1575892532', '37815');
INSERT INTO `ci_secret_key` VALUES (1301, '1575951275', '78142');
INSERT INTO `ci_secret_key` VALUES (1302, '1575951736', '42244');
INSERT INTO `ci_secret_key` VALUES (1310, '1575972829', '92919');
INSERT INTO `ci_secret_key` VALUES (1311, '1575972830', '27259');
INSERT INTO `ci_secret_key` VALUES (1312, '1575976735', '32883');
INSERT INTO `ci_secret_key` VALUES (1313, '1576040029', '29189');
INSERT INTO `ci_secret_key` VALUES (1314, '1576066609', '52251');
INSERT INTO `ci_secret_key` VALUES (1317, '1576125341', '92376');
INSERT INTO `ci_secret_key` VALUES (1318, '1576125348', '89617');
INSERT INTO `ci_secret_key` VALUES (1322, '1576147948', '73396');
INSERT INTO `ci_secret_key` VALUES (1323, '1576152309', '58341');
INSERT INTO `ci_secret_key` VALUES (1324, '1576819839', '12917');
INSERT INTO `ci_secret_key` VALUES (1325, '1576825354', '93123');

-- ----------------------------
-- Table structure for ci_service_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_service_details`;
CREATE TABLE `ci_service_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `present_post_name` int(11) NOT NULL,
  `present_kvs_code` int(11) NOT NULL,
  `present_kvs_name` int(11) NOT NULL,
  `initial_designation` int(11) NOT NULL,
  `initial_join_date` date NOT NULL,
  `present_join_date` date NOT NULL,
  `present_post_criteria` int(11) NOT NULL,
  `present_seniority_no` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `disciplinary_case` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_of_retirement` date NOT NULL,
  `shift` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `zone` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reason_for_transfer` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ci_spouse_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_spouse_details`;
CREATE TABLE `ci_spouse_details`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `spouse_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_govt_service` tinyint(4) NOT NULL,
  `org_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `spouse_emp_code` int(11) NULL DEFAULT NULL,
  `designation` int(11) NULL DEFAULT NULL,
  `subject` int(11) NULL DEFAULT NULL,
  `posting_place` int(11) NULL DEFAULT NULL,
  `unit` int(11) NOT NULL,
  `region` int(11) NULL DEFAULT NULL,
  `ziet` int(11) NULL DEFAULT NULL,
  `school` int(11) NULL DEFAULT NULL,
  `other_org_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `other_org_post` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `other_org_posting_place` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_spouse_details
-- ----------------------------
INSERT INTO `ci_spouse_details` VALUES (2, 10001, 'sheh', 1, 'KVS', 12345, 6, 2, 2, 5, 0, 0, 0, 'NULL', 'NULL', 'NULL', '2019-07-30 11:34:59', '0000-00-00 00:00:00', 1, 0);
INSERT INTO `ci_spouse_details` VALUES (24, 10002, 'ABC', 1, 'Others', 0, 0, 0, 0, 0, 0, 0, 0, 'KVI', 'Developer', 'Delhi', '2019-08-02 11:20:09', '0000-00-00 00:00:00', 1, 0);
INSERT INTO `ci_spouse_details` VALUES (25, 10002, 'XYZ', 1, 'KVS', 12344, 6, 17, 3, 0, 1, 0, 0, 'NULL', 'NULL', 'NULL', '2019-08-02 11:20:09', '0000-00-00 00:00:00', 1, 0);
INSERT INTO `ci_spouse_details` VALUES (26, 10004, 'rinki', 1, 'KVS', 4545, 8, 2, 5, 0, 36, 0, 1001, 'NULL', 'NULL', 'NULL', '2019-09-02 13:50:39', '0000-00-00 00:00:00', 1, 0);
INSERT INTO `ci_spouse_details` VALUES (27, 100002, 'Manju Sehgal', 2, 'NULL', 0, 0, 0, 0, 0, 0, 0, 0, 'NULL', 'NULL', 'NULL', '2019-09-04 12:02:09', '0000-00-00 00:00:00', 23, 0);

-- ----------------------------
-- Table structure for ci_subjects
-- ----------------------------
DROP TABLE IF EXISTS `ci_subjects`;
CREATE TABLE `ci_subjects`  (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `in_classes` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_subjects
-- ----------------------------
INSERT INTO `ci_subjects` VALUES (1, 'Mathematics', 1, '2019-05-22 11:37:23', '2019-07-30 14:05:07', '6,8,3');
INSERT INTO `ci_subjects` VALUES (2, 'Biology', 1, '2019-05-22 11:37:23', '2019-07-30 12:59:11', '6,8');
INSERT INTO `ci_subjects` VALUES (3, 'English', 1, '2019-05-22 12:15:05', '2019-07-30 14:05:02', '6,8,3');
INSERT INTO `ci_subjects` VALUES (4, 'Hindi', 1, '2019-05-22 12:15:17', '2019-07-30 14:05:14', '6,8,3');
INSERT INTO `ci_subjects` VALUES (5, 'Sanskrit', 1, '2019-05-22 12:15:32', '2019-07-30 13:00:00', '8');
INSERT INTO `ci_subjects` VALUES (6, 'Social Studies', 1, '2019-05-22 12:15:41', '2019-07-30 13:00:03', '8');
INSERT INTO `ci_subjects` VALUES (7, 'Arts', 1, '2019-05-22 12:15:54', '2019-10-22 09:58:44', '8');
INSERT INTO `ci_subjects` VALUES (8, 'Physical & Health Education', 1, '2019-05-22 12:16:05', '2019-07-30 12:59:49', '8');
INSERT INTO `ci_subjects` VALUES (9, 'Work Experience', 1, '2019-05-22 12:16:15', '2019-07-30 13:00:19', '8');
INSERT INTO `ci_subjects` VALUES (10, 'Chemistry', 1, '2019-05-22 12:16:29', '2019-07-30 12:56:30', '6');
INSERT INTO `ci_subjects` VALUES (11, 'Physics', 1, '2019-05-22 12:16:40', '2019-07-30 12:57:41', '6');
INSERT INTO `ci_subjects` VALUES (12, 'Geography', 1, '2019-05-22 12:16:55', '2019-07-30 12:57:13', '6');
INSERT INTO `ci_subjects` VALUES (13, 'History', 1, '2019-05-22 12:17:07', '2019-07-30 12:58:02', '6');
INSERT INTO `ci_subjects` VALUES (14, 'Commerce', 1, '2019-05-22 12:17:19', '2019-07-30 12:56:37', '6');
INSERT INTO `ci_subjects` VALUES (15, 'Economics', 1, '2019-05-22 12:17:30', '2019-07-30 12:56:42', '6');
INSERT INTO `ci_subjects` VALUES (16, 'Computer Science', 1, '2019-05-22 12:17:44', '2019-07-30 12:56:05', '6');
INSERT INTO `ci_subjects` VALUES (17, 'Bio Technology', 1, '2019-05-22 12:18:01', '2019-07-30 12:55:34', '6');
INSERT INTO `ci_subjects` VALUES (18, 'Music', 1, '2019-05-22 12:18:22', '2019-07-30 14:05:28', '3');
INSERT INTO `ci_subjects` VALUES (19, 'Science', 1, '2019-05-22 12:18:37', '2019-07-30 14:06:56', '6,8');
INSERT INTO `ci_subjects` VALUES (20, 'Environmental Studies', 1, '2019-05-22 12:18:37', '2019-07-30 14:04:44', '3');
INSERT INTO `ci_subjects` VALUES (21, 'Drawing', 1, '2019-05-22 12:18:37', '2019-07-30 14:05:32', '3');
INSERT INTO `ci_subjects` VALUES (22, 'Yoga', 1, '2019-05-22 12:18:37', '2019-07-30 13:00:22', '8');

-- ----------------------------
-- Table structure for ci_teacher_exchange_program
-- ----------------------------
DROP TABLE IF EXISTS `ci_teacher_exchange_program`;
CREATE TABLE `ci_teacher_exchange_program`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) UNSIGNED NOT NULL,
  `is_exchange_prog` tinyint(2) NOT NULL COMMENT '1- Yes,2- No',
  `program_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `program_order_no` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `country_name` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_from` date NULL DEFAULT NULL,
  `date_to` date NULL DEFAULT NULL,
  `duration` smallint(6) NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_by` int(11) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_teacher_exchange_program
-- ----------------------------
INSERT INTO `ci_teacher_exchange_program` VALUES (1, 10001, 1, 'thytfuyt', 'gujyguju gffh', 'tuyu', '2019-07-01', '2019-07-10', 10, 1, '2019-07-05 12:23:27', NULL, '2019-07-25 12:50:22');
INSERT INTO `ci_teacher_exchange_program` VALUES (3, 10004, 1, 'promotion', 'dgfdfg', 'indi', '2019-02-01', '2019-05-01', 90, 1, '2019-09-02 16:39:22', NULL, NULL);
INSERT INTO `ci_teacher_exchange_program` VALUES (4, 100002, 2, '', '', '', '0000-00-00', '0000-00-00', 0, 23, '2019-09-04 12:41:09', NULL, NULL);
INSERT INTO `ci_teacher_exchange_program` VALUES (6, 2000, 1, 'gdrdrt', '43354', 'dfdg', '2019-11-01', '2019-11-04', 4, 1, '2019-11-04 14:51:09', NULL, NULL);
INSERT INTO `ci_teacher_exchange_program` VALUES (7, 2000, 1, 'dfdgf', '6yhyu', 'gfhg', '2019-11-04', '2019-11-04', 1, 1, '2019-11-04 14:51:09', NULL, NULL);
INSERT INTO `ci_teacher_exchange_program` VALUES (8, 10000, 1, 'Test Prgram', 'TP0101', 'Indi', '2019-01-01', '2019-01-31', 31, 1, '2019-11-08 16:24:18', NULL, NULL);
INSERT INTO `ci_teacher_exchange_program` VALUES (9, 10000, 1, 'Test PROGRAM II', 'TP12232', 'KVS', '2019-11-05', '2019-11-08', 4, 1, '2019-11-08 16:24:18', NULL, NULL);

-- ----------------------------
-- Table structure for ci_training_details
-- ----------------------------
DROP TABLE IF EXISTS `ci_training_details`;
CREATE TABLE `ci_training_details`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `is_attended_training` tinyint(2) NOT NULL,
  `course` int(3) NOT NULL DEFAULT 0,
  `designation` int(11) NOT NULL DEFAULT 0,
  `subject` int(11) NOT NULL DEFAULT 0,
  `spell` tinyint(2) NOT NULL DEFAULT 0,
  `duration` int(11) NOT NULL DEFAULT 0,
  `t_from1` date NULL DEFAULT NULL,
  `t_to1` date NULL DEFAULT NULL,
  `t_from2` date NULL DEFAULT NULL,
  `t_to2` date NULL DEFAULT NULL,
  `t_from3` date NULL DEFAULT NULL,
  `t_to3` date NULL DEFAULT NULL,
  `t_from4` date NULL DEFAULT NULL,
  `t_to4` date NULL DEFAULT NULL,
  `role` tinyint(2) NOT NULL DEFAULT 0,
  `conductedfor` tinyint(2) NOT NULL DEFAULT 0,
  `grading` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `venuetype` int(11) NOT NULL DEFAULT 0,
  `venueregion` int(11) NOT NULL DEFAULT 0,
  `venueschool` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` datetime(0) NOT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_training_details
-- ----------------------------
INSERT INTO `ci_training_details` VALUES (5, 10001, 1, 1, 22, 0, 1, 17, '2019-07-16', '2019-08-01', NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, '', 2, 5, 0, 1, 0, '2019-08-02 14:25:42', '0000-00-00 00:00:00');
INSERT INTO `ci_training_details` VALUES (6, 10001, 1, 2, 6, 17, 2, 18, '2019-07-29', '2019-07-25', '2019-07-29', '2019-08-01', NULL, NULL, NULL, NULL, 4, 0, 'dgfdgg', 3, 1, 0, 1, 0, '2019-08-02 14:25:42', '0000-00-00 00:00:00');
INSERT INTO `ci_training_details` VALUES (8, 10004, 1, 1, 1, 0, 1, 4, '2019-08-01', '2019-08-04', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '', 2, 5, 0, 1, 0, '2019-09-02 13:07:17', '0000-00-00 00:00:00');
INSERT INTO `ci_training_details` VALUES (9, 100002, 1, 2, 44, 0, 1, 13, '2000-09-01', '2000-09-13', NULL, NULL, NULL, NULL, NULL, NULL, 4, 0, 'A', 3, 24, 0, 23, 0, '2019-09-04 12:15:01', '0000-00-00 00:00:00');
INSERT INTO `ci_training_details` VALUES (10, 100002, 1, 3, 44, 0, 1, 18, '2013-09-04', '2013-09-21', NULL, NULL, NULL, NULL, NULL, NULL, 4, 0, 'B', 3, 24, 0, 23, 0, '2019-09-04 12:15:01', '0000-00-00 00:00:00');
INSERT INTO `ci_training_details` VALUES (11, 10000, 1, 1, 6, 10, 1, 8, '2019-08-01', '2019-08-08', NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, '7', 2, 5, 0, 1, 0, '2019-11-06 09:58:44', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for ci_user_activities
-- ----------------------------
DROP TABLE IF EXISTS `ci_user_activities`;
CREATE TABLE `ci_user_activities`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` datetime(0) NOT NULL,
  `ipaddress` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `activity_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `activity_data` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `form_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1491 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_user_activities
-- ----------------------------
INSERT INTO `ci_user_activities` VALUES (1, 1, '2019-05-15 11:18:44', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (2, 1, '2019-05-15 11:46:26', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (3, 1, '2019-05-15 11:52:46', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (4, 1, '2019-05-15 13:02:17', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (5, 1, '2019-05-15 14:02:32', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (6, 1, '2019-05-15 14:42:56', '::1', 'Updated', '{\"id\":\"6\",\"name\":\"abcda\",\"description\":\"abcd\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (7, 1, '2019-05-15 14:43:18', '::1', 'Added', '{\"id\":\"\",\"name\":\"efgh\",\"description\":\"efgh\",\"label\":\"efgh\",\"status\":1}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (8, 1, '2019-05-15 14:45:31', '::1', 'Change Status', '{\"role_id\":\"6\",\"status\":\"1\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (9, 1, '2019-05-15 14:57:55', '::1', 'Added', '{\"id\":\"\",\"name\":\"faafafa\",\"description\":\"affafafa\",\"label\":\"faafafa\",\"status\":1}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (10, 1, '2019-05-15 15:00:16', '::1', 'Change Status', '{\"role_id\":\"6\",\"status\":\"0\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (11, 1, '2019-05-15 15:00:22', '::1', 'Change Status', '{\"role_id\":\"8\",\"status\":\"0\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (12, 1, '2019-05-15 16:55:16', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (13, 1, '2019-05-15 16:56:11', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (14, 1, '2019-05-15 16:56:50', '::1', 'Added', '{\"id\":\"\",\"name\":\"KVS HQ\",\"description\":\"KVS Head Quater\",\"label\":\"KVS HQ\",\"status\":1}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (15, 1, '2019-05-15 16:57:04', '::1', 'Added', '{\"id\":\"\",\"name\":\"RO\",\"description\":\"Regional Office\",\"label\":\"RO\",\"status\":1}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (16, 1, '2019-05-15 16:57:13', '::1', 'Added', '{\"id\":\"\",\"name\":\"ZIET\",\"description\":\"ZIET\",\"label\":\"ZIET\",\"status\":1}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (17, 1, '2019-05-15 16:57:33', '::1', 'Added', '{\"id\":\"\",\"name\":\"School\",\"description\":\"School\",\"label\":\"School\",\"status\":1}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (18, 1, '2019-05-15 16:57:44', '::1', 'Added', '{\"id\":\"\",\"name\":\"Employee\",\"description\":\"Employee\",\"label\":\"Employee\",\"status\":1}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (19, 1, '2019-05-17 10:20:46', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (20, 1, '2019-05-17 10:21:06', '::1', 'Change Status', '{\"role_id\":\"6\",\"status\":\"0\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (21, 1, '2019-05-17 10:21:19', '::1', 'Change Status', '{\"role_id\":\"6\",\"status\":\"1\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (22, 1, '2019-05-17 10:21:36', '::1', 'Change Status', '{\"role_id\":\"2\",\"status\":\"0\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (23, 1, '2019-05-17 10:21:52', '::1', 'Change Status', '{\"role_id\":\"2\",\"status\":\"1\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (24, 1, '2019-05-17 12:47:09', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (25, 1, '2019-05-17 13:23:32', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (26, 1, '2019-05-17 14:05:04', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (27, 1, '2019-05-17 14:53:41', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (28, 1, '2019-05-17 15:14:55', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (29, 1, '2019-05-17 16:43:45', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (30, 1, '2019-05-17 17:12:03', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (31, 1, '2019-05-17 17:30:06', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (32, 2, '2019-05-17 17:41:11', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (33, 2, '2019-05-17 17:41:20', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (34, 1, '2019-05-20 10:12:31', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (35, 1, '2019-05-20 13:25:28', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (36, 1, '2019-05-20 14:23:59', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (37, 1, '2019-05-20 14:44:13', '::1', 'Added', '{\"id\":\"\",\"name\":\"adafaffa\",\"created\":\"2019-05-20 14:44:13\"}', 'Designation Category Module');
INSERT INTO `ci_user_activities` VALUES (38, 1, '2019-05-20 14:44:21', '::1', 'Updated', '{\"id\":\"\",\"name\":\"adafaffaaaa\"}', 'Designation Category Module');
INSERT INTO `ci_user_activities` VALUES (39, 1, '2019-05-20 14:45:16', '::1', 'Added', '{\"id\":\"\",\"name\":\"addaaddaa\",\"created\":\"2019-05-20 14:45:16\"}', 'Designation Category Module');
INSERT INTO `ci_user_activities` VALUES (40, 1, '2019-05-20 14:50:53', '::1', 'Updated', '{\"id\":\"\",\"name\":\"adafaffaaaafff\"}', 'Designation Category Module');
INSERT INTO `ci_user_activities` VALUES (41, 1, '2019-05-20 16:41:29', '::1', 'Added', '{\"id\":\"\",\"cat_id\":\"2\",\"name\":\"test\",\"created\":\"2019-05-20 16:41:29\"}', 'Designation Module');
INSERT INTO `ci_user_activities` VALUES (42, 1, '2019-05-20 16:53:01', '::1', 'Updated', '{\"id\":\"1\",\"cat_id\":\"1\",\"name\":\"test\"}', 'Designation Module');
INSERT INTO `ci_user_activities` VALUES (43, 1, '2019-05-20 16:53:09', '::1', 'Updated', '{\"id\":\"1\",\"cat_id\":\"2\",\"name\":\"test\"}', 'Designation Module');
INSERT INTO `ci_user_activities` VALUES (44, 1, '2019-05-20 17:28:54', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (45, 1, '2019-05-21 10:21:45', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (46, 1, '2019-05-21 10:22:58', '::1', 'Added', '{\"id\":\"\",\"name\":\"TGT\",\"created\":\"2019-05-21 10:22:58\"}', 'Designation Category Module');
INSERT INTO `ci_user_activities` VALUES (47, 1, '2019-05-21 10:26:44', '::1', 'Added', '{\"id\":\"\",\"cat_id\":\"3\",\"name\":\"TGT BIOLOGY\",\"created\":\"2019-05-21 10:26:43\"}', 'Designation Module');
INSERT INTO `ci_user_activities` VALUES (48, 1, '2019-05-21 13:16:21', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (49, 1, '2019-05-21 13:57:46', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (50, 1, '2019-05-21 13:58:04', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (51, 1, '2019-05-21 14:00:47', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (52, 1, '2019-05-21 14:06:47', '::1', 'Added', '{\"id\":\"\",\"name\":\"Test\",\"description\":\"Test\",\"label\":\"Test\",\"status\":1}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (53, 1, '2019-05-21 14:13:48', '::1', 'Added', '{\"id\":\"\",\"name\":\"PGT\",\"created\":\"2019-05-21 14:13:48\"}', 'Designation Category Module');
INSERT INTO `ci_user_activities` VALUES (54, 1, '2019-05-21 14:14:18', '::1', 'Added', '{\"id\":\"\",\"cat_id\":\"4\",\"name\":\"PGT ENGLISH\",\"created\":\"2019-05-21 14:14:18\"}', 'Designation Module');
INSERT INTO `ci_user_activities` VALUES (55, 1, '2019-05-21 14:34:53', '::1', 'Change Status', '{\"role_id\":\"6\",\"status\":\"0\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (56, 1, '2019-05-21 14:35:02', '::1', 'Change Status', '{\"role_id\":\"7\",\"status\":\"0\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (57, 1, '2019-05-21 14:35:06', '::1', 'Change Status', '{\"role_id\":\"6\",\"status\":\"1\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (58, 1, '2019-05-21 14:52:58', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (59, 1, '2019-05-21 14:57:44', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (60, 1, '2019-05-21 15:05:09', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (61, 5, '2019-05-21 15:05:21', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (62, 5, '2019-05-21 15:08:15', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (63, 1, '2019-05-21 15:08:23', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (64, 1, '2019-05-21 17:21:39', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (65, 1, '2019-05-21 17:28:30', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (66, 1, '2019-05-22 10:11:46', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (67, 1, '2019-05-22 10:11:59', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (68, 1, '2019-05-22 10:29:06', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (69, 1, '2019-05-22 13:28:55', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (70, 1, '2019-05-22 14:01:48', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (71, 1, '2019-05-23 10:20:28', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (72, 1, '2019-05-23 13:26:41', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (73, 1, '2019-05-23 14:18:47', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (74, 1, '2019-05-23 17:29:14', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (75, 1, '2019-05-23 17:55:16', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (76, 1, '2019-05-24 10:19:14', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (77, 1, '2019-05-24 12:05:40', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (78, 1, '2019-05-24 12:18:28', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (79, 1, '2019-05-24 13:36:16', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (80, 1, '2019-05-24 14:02:04', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (81, 1, '2019-05-27 09:50:54', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (82, 1, '2019-05-27 13:36:33', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (83, 1, '2019-05-27 13:59:38', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (84, 1, '2019-05-28 10:14:25', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (85, 1, '2019-05-28 10:16:12', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (86, 1, '2019-05-28 10:21:28', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (87, 1, '2019-05-28 10:30:56', '10.199.167.79', 'Change Status', '{\"role_id\":\"7\",\"status\":\"1\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (88, 1, '2019-05-28 10:31:01', '10.199.167.79', 'Change Status', '{\"role_id\":\"7\",\"status\":\"0\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (89, 1, '2019-05-28 11:17:09', '10.199.167.46', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (90, 1, '2019-05-28 11:18:01', '10.199.167.46', 'Change Status', '{\"role_id\":\"7\",\"status\":\"1\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (91, 1, '2019-05-28 11:18:06', '10.199.167.46', 'Change Status', '{\"role_id\":\"7\",\"status\":\"0\"}', 'Role Module');
INSERT INTO `ci_user_activities` VALUES (92, 1, '2019-05-28 11:18:19', '10.199.167.46', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (93, 1, '2019-05-28 11:19:30', '10.199.167.47', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (94, 1, '2019-05-28 11:24:57', '10.199.165.150', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (95, 1, '2019-05-28 11:55:00', '10.199.165.145', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (96, 1, '2019-05-28 11:55:43', '10.199.167.47', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (97, 1, '2019-05-28 12:07:23', '10.199.167.79', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (98, 1, '2019-05-28 12:07:42', '10.199.167.79', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (99, 1, '2019-05-28 12:18:21', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (100, 1, '2019-05-28 12:22:17', '10.199.167.79', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (101, 1, '2019-05-28 12:49:24', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (102, 1, '2019-05-28 13:26:33', '10.199.167.79', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (103, 1, '2019-05-28 13:57:07', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (104, 1, '2019-05-28 16:17:00', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (105, 1, '2019-05-28 16:24:43', '10.199.167.79', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (106, 1, '2019-05-28 16:35:55', '10.199.167.47', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (107, 1, '2019-05-28 16:35:55', '10.199.167.46', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (108, 1, '2019-05-28 16:36:29', '10.199.167.47', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (109, 1, '2019-05-28 17:01:44', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (110, 1, '2019-05-29 14:14:34', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (111, 1, '2019-05-29 15:00:58', '10.199.167.79', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (112, 1, '2019-05-30 10:03:06', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (113, 1, '2019-05-30 12:07:28', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (114, 1, '2019-05-30 12:24:07', '10.199.167.49', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (115, 1, '2019-05-30 12:25:01', '10.199.167.46', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (116, 1, '2019-05-30 12:58:54', '10.199.167.49', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (117, 1, '2019-05-30 13:32:00', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (118, 1, '2019-05-30 13:58:30', '10.199.167.46', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (119, 1, '2019-05-30 14:25:16', '10.199.167.46', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (120, 1, '2019-05-31 10:15:16', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (121, 1, '2019-05-31 11:17:31', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (122, 1, '2019-05-31 11:18:31', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (123, 1, '2019-05-31 12:17:47', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (124, 1, '2019-05-31 12:52:45', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (125, 1, '2019-05-31 13:22:51', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (126, 1, '2019-05-31 14:03:53', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (127, 1, '2019-05-31 14:48:46', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (128, 1, '2019-05-31 14:49:37', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (129, 1, '2019-06-03 10:16:14', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (130, 1, '2019-06-03 12:09:57', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (131, 1, '2019-06-03 12:11:58', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (132, 1, '2019-06-03 13:41:04', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (133, 1, '2019-06-03 14:39:51', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (134, 1, '2019-06-03 15:24:12', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (135, 1, '2019-06-03 15:26:05', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (136, 1, '2019-06-03 15:38:08', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (137, 1, '2019-06-04 09:27:41', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (138, 1, '2019-06-04 10:04:00', '::1', 'Updated', '{\"id\":\"1\",\"reg_id\":\"1\",\"name\":\"AHMEDABAD CANT.\",\"code\":\"1002\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (139, 1, '2019-06-04 10:04:14', '::1', 'Updated', '{\"id\":\"1\",\"reg_id\":\"1\",\"name\":\"AHMEDABAD CANT.\",\"code\":\"1002\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (140, 1, '2019-06-04 10:04:27', '::1', 'Updated', '{\"id\":\"1\",\"reg_id\":\"1\",\"name\":\"AHMEDABAD CANT.\",\"code\":\"1002\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (141, 1, '2019-06-04 10:05:45', '::1', 'Updated', '{\"id\":\"1\",\"reg_id\":\"1\",\"name\":\"AHMEDABAD CANT.\",\"code\":\"1002\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (142, 1, '2019-06-04 10:06:23', '::1', 'Updated', '{\"id\":\"4\",\"reg_id\":\"2\",\"name\":\"BANGALORE ASC\",\"code\":\"1044\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (143, 1, '2019-06-04 10:15:58', '::1', 'Updated', '{\"id\":\"1\",\"reg_id\":\"1\",\"name\":\"AHMEDABAD CANT.\",\"code\":\"1002\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (144, 1, '2019-06-04 10:16:08', '::1', 'Updated', '{\"id\":\"1\",\"reg_id\":\"1\",\"name\":\"AHMEDABAD CANT.\",\"code\":\"1002\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (145, 1, '2019-06-04 10:16:45', '::1', 'Updated', '{\"id\":\"1\",\"reg_id\":\"1\",\"name\":\"AHMEDABAD CANT.\",\"code\":\"1002\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (146, 1, '2019-06-04 10:47:28', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (147, 1, '2019-06-04 10:52:10', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (148, 1, '2019-06-04 12:44:13', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (149, 1, '2019-06-04 13:22:12', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (150, 1, '2019-06-04 14:04:35', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (151, 1, '2019-06-04 14:40:20', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (152, 1, '2019-06-04 14:40:54', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (153, 1, '2019-06-04 16:01:22', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (154, 1, '2019-06-04 16:18:15', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (155, 1, '2019-06-06 09:40:40', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (156, 1, '2019-06-06 13:29:35', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (157, 1, '2019-06-06 14:26:33', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (158, 1, '2019-06-06 14:58:22', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (159, 1, '2019-06-06 14:59:51', '10.199.167.78', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (160, 1, '2019-06-06 15:20:23', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (161, 1, '2019-06-07 09:37:08', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (162, 1, '2019-06-07 10:21:41', '10.199.167.79', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (163, 1, '2019-06-07 12:31:38', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (164, 1, '2019-06-07 12:37:54', '10.199.165.145', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (165, 1, '2019-06-07 14:07:00', '10.199.165.145', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (166, 1, '2019-06-07 17:19:36', '10.199.167.79', 'Updated', '{\"id\":\"20\",\"cat_id\":\"2\",\"name\":\"Deputy Commissioner(Fin)\"}', 'Designation Module');
INSERT INTO `ci_user_activities` VALUES (167, 1, '2019-06-10 09:36:46', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (168, 1, '2019-06-10 10:41:52', '10.199.167.79', 'Updated', '{\"id\":\"1\",\"name\":\"Directy\"}', 'Promotion Module');
INSERT INTO `ci_user_activities` VALUES (169, 1, '2019-06-10 10:41:56', '10.199.167.79', 'Updated', '{\"id\":\"1\",\"name\":\"Direct\"}', 'Promotion Module');
INSERT INTO `ci_user_activities` VALUES (170, 1, '2019-06-10 13:46:19', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (171, 1, '2019-06-10 13:47:40', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (172, 1, '2019-06-10 15:54:49', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (173, 1, '2019-06-11 11:02:08', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (174, 1, '2019-06-11 12:34:17', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (175, 1, '2019-06-11 12:36:24', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (176, 1, '2019-06-11 13:40:06', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (177, 1, '2019-06-11 13:42:38', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (178, 1, '2019-06-11 16:04:10', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (179, 1, '2019-06-11 17:22:07', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (180, 1, '2019-06-11 17:30:42', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (181, 1, '2019-06-12 09:56:26', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (182, 1, '2019-06-12 13:47:15', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (183, 1, '2019-06-12 13:48:48', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (184, 1, '2019-06-12 14:35:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (185, 1, '2019-06-12 15:00:49', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (186, 1, '2019-06-12 15:01:23', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (187, 1, '2019-06-12 16:12:22', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (188, 1, '2019-06-12 16:23:35', '10.199.167.46', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (189, 1, '2019-06-12 17:23:44', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (190, 1, '2019-06-13 09:25:49', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (191, 1, '2019-06-13 10:50:26', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (192, 1, '2019-06-13 11:12:40', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (193, 1, '2019-06-13 13:06:40', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (194, 1, '2019-06-13 13:14:11', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (195, 1, '2019-06-13 16:13:17', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (196, 1, '2019-06-14 09:27:40', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (197, 1, '2019-06-14 10:17:37', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (198, 1, '2019-06-14 10:18:48', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (199, 1, '2019-06-14 10:22:15', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (200, 1, '2019-06-14 10:23:31', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (201, 1, '2019-06-14 10:24:52', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (202, 1, '2019-06-14 10:25:54', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (203, 1, '2019-06-14 10:27:47', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (204, 1, '2019-06-14 10:28:35', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (205, 1, '2019-06-14 10:29:38', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (206, 1, '2019-06-14 10:30:59', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (207, 1, '2019-06-14 10:36:55', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (208, 1, '2019-06-14 10:43:22', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (209, 1, '2019-06-14 10:44:41', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (210, 1, '2019-06-14 10:46:44', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (211, 1, '2019-06-14 10:53:12', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (212, 1, '2019-06-14 11:07:11', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (213, 1, '2019-06-14 14:10:27', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (214, 1, '2019-06-14 14:36:32', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (215, 1, '2019-06-14 16:17:50', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (216, 1, '2019-06-14 16:21:43', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (217, 1, '2019-06-14 16:43:21', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (218, 1, '2019-06-14 17:01:13', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (219, 1, '2019-06-17 09:40:45', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (220, 1, '2019-06-17 10:17:05', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (221, 1, '2019-06-17 14:05:35', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (222, 1, '2019-06-17 15:54:04', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (223, 1, '2019-06-17 15:54:30', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (224, 1, '2019-06-17 16:29:02', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (225, 1, '2019-06-17 16:46:32', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (226, 1, '2019-06-18 09:48:22', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (227, 1, '2019-06-19 12:57:36', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (228, 1, '2019-06-19 13:42:38', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (229, 1, '2019-06-19 14:10:33', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (230, 1, '2019-06-20 10:45:24', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (231, 1, '2019-06-20 11:36:56', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (232, 1, '2019-06-20 13:21:16', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (233, 1, '2019-06-20 15:17:52', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (234, 1, '2019-06-20 17:01:43', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (235, 1, '2019-06-21 10:22:42', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (236, 1, '2019-06-21 12:09:46', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (237, 1, '2019-06-21 12:30:42', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (238, 1, '2019-06-21 12:59:28', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (239, 1, '2019-06-21 14:03:04', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (240, 1, '2019-06-24 09:29:05', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (241, 1, '2019-06-24 12:18:36', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (242, 1, '2019-06-24 12:21:26', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (243, 1, '2019-06-24 13:25:42', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (244, 1, '2019-06-24 13:55:53', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (245, 1, '2019-06-25 09:33:00', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (246, 1, '2019-06-25 12:58:44', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (247, 1, '2019-06-25 14:15:59', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (248, 1, '2019-06-25 14:55:42', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (249, 1, '2019-06-25 15:21:24', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (250, 1, '2019-06-25 15:23:13', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (251, 1, '2019-06-25 15:24:16', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (252, 1, '2019-06-25 16:56:14', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (253, 1, '2019-06-26 09:50:22', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (254, 1, '2019-06-26 12:41:01', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (255, 1, '2019-06-26 13:30:52', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (256, 1, '2019-06-26 14:08:38', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (257, 1, '2019-06-26 15:01:22', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (258, 1, '2019-06-26 15:27:06', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (259, 1, '2019-06-26 15:31:50', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (260, 1, '2019-06-26 15:49:52', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (261, 1, '2019-06-26 17:01:06', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (262, 1, '2019-06-27 09:31:41', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (263, 1, '2019-06-27 10:19:34', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (264, 2, '2019-06-27 10:19:50', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (265, 2, '2019-06-27 10:20:06', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (266, 2, '2019-06-27 10:20:17', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (267, 2, '2019-06-27 10:22:57', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (268, 2, '2019-06-27 10:24:24', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (269, 2, '2019-06-27 10:27:26', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (270, 2, '2019-06-27 10:29:12', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (271, 2, '2019-06-27 10:31:53', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (272, 2, '2019-06-27 10:34:23', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (273, 2, '2019-06-27 11:10:04', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (274, 1, '2019-06-27 12:09:25', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (275, 1, '2019-06-27 12:10:08', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (276, 2, '2019-06-27 12:12:27', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (277, 2, '2019-06-27 12:13:29', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (278, 1, '2019-06-27 12:14:13', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (279, 1, '2019-06-27 12:15:39', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (280, 2, '2019-06-27 12:16:03', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (281, 2, '2019-06-27 12:16:13', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (282, 1, '2019-06-27 12:41:49', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (283, 1, '2019-06-27 12:42:45', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (284, 1, '2019-06-27 13:20:14', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again Marked', NULL);
INSERT INTO `ci_user_activities` VALUES (285, 1, '2019-06-27 14:02:06', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (286, 1, '2019-06-27 14:20:22', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (287, 1, '2019-06-27 14:20:42', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (288, 1, '2019-06-27 14:24:59', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (289, 1, '2019-06-27 14:27:05', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (290, 1, '2019-06-27 14:30:22', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (291, 1, '2019-06-27 16:44:49', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (292, 2, '2019-06-27 17:02:11', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (293, 2, '2019-06-27 17:26:42', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (294, 1, '2019-06-27 17:27:14', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (295, 1, '2019-06-27 17:42:31', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (296, 1, '2019-06-28 09:34:15', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (297, 1, '2019-06-28 09:53:10', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (298, 1, '2019-06-28 09:55:17', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (299, 1, '2019-06-28 09:57:00', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (300, 1, '2019-06-28 10:01:03', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (301, 1, '2019-06-28 10:02:33', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (302, 1, '2019-06-28 10:03:41', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (303, 1, '2019-06-28 12:09:29', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (304, 1, '2019-06-28 12:49:17', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (305, 1, '2019-06-28 13:27:35', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (306, 1, '2019-06-28 14:02:32', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (307, 1, '2019-06-28 14:23:49', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (308, 6, '2019-06-28 14:24:04', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (309, 6, '2019-06-28 14:24:43', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (310, 1, '2019-06-28 14:24:56', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (311, 1, '2019-06-28 16:45:40', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (312, 1, '2019-06-28 17:20:59', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (313, 1, '2019-07-01 09:28:15', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (314, 1, '2019-07-01 10:13:51', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (315, 1, '2019-07-01 10:21:35', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (316, 1, '2019-07-01 10:53:11', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (317, 1, '2019-07-01 11:13:17', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (318, 1, '2019-07-01 13:09:51', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (319, 1, '2019-07-01 16:03:33', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (320, 1, '2019-07-01 16:33:52', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (321, 1, '2019-07-02 09:29:21', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (322, 1, '2019-07-02 10:21:17', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (323, 1, '2019-07-02 10:25:20', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (324, 1, '2019-07-02 10:33:14', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (325, 1, '2019-07-02 10:33:58', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (326, 1, '2019-07-02 11:23:30', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (327, 1, '2019-07-02 11:26:03', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (328, 1, '2019-07-02 11:41:27', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (329, 1, '2019-07-02 12:18:44', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (330, 1, '2019-07-02 12:22:21', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (331, 1, '2019-07-02 13:30:24', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (332, 1, '2019-07-02 14:00:42', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (333, 1, '2019-07-03 09:30:23', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (334, 1, '2019-07-03 09:34:26', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (335, 1, '2019-07-03 11:13:27', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (336, 1, '2019-07-03 11:18:05', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (337, 1, '2019-07-03 13:35:11', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (338, 1, '2019-07-03 14:05:04', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (339, 1, '2019-07-03 16:48:01', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (340, 1, '2019-07-03 16:48:17', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (341, 1, '2019-07-04 09:43:41', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (342, 1, '2019-07-04 13:37:09', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (343, 1, '2019-07-04 13:55:22', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (344, 1, '2019-07-04 15:27:50', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (345, 1, '2019-07-04 15:41:59', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (346, 1, '2019-07-05 09:56:59', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (347, 1, '2019-07-05 12:37:00', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (348, 10, '2019-07-05 12:37:18', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (349, 10, '2019-07-05 12:37:24', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (350, 1, '2019-07-05 12:37:50', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (351, 1, '2019-07-05 15:55:51', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (352, 1, '2019-07-05 16:10:41', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (353, 1, '2019-07-08 09:25:53', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (354, 1, '2019-07-08 10:15:47', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (355, 1, '2019-07-08 13:33:23', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (356, 1, '2019-07-08 14:05:55', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (357, 1, '2019-07-08 16:00:34', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (358, 1, '2019-07-08 16:16:30', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (359, 1, '2019-07-09 09:40:52', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (360, 1, '2019-07-09 09:42:41', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (361, 1, '2019-07-09 12:03:51', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (362, 1, '2019-07-09 14:20:50', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (363, 1, '2019-07-09 14:52:40', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (364, 1, '2019-07-09 14:56:22', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (365, 1, '2019-07-09 16:11:34', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (366, 1, '2019-07-09 16:18:16', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (367, 1, '2019-07-09 16:49:00', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (368, 1, '2019-07-09 16:49:24', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (369, 1, '2019-07-09 17:33:28', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (370, 1, '2019-07-10 09:38:07', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (371, 1, '2019-07-10 13:25:46', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (372, 1, '2019-07-10 14:06:20', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (373, 1, '2019-07-10 16:46:29', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (374, 1, '2019-07-10 16:46:47', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (375, 1, '2019-07-11 09:21:41', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (376, 1, '2019-07-11 13:25:54', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (377, 1, '2019-07-12 10:02:46', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (378, 1, '2019-07-15 12:16:22', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (379, 1, '2019-07-24 15:39:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (380, 1, '2019-07-24 15:49:56', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (381, 1, '2019-07-24 16:08:08', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (382, 1, '2019-07-24 16:09:10', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (383, 1, '2019-07-25 12:42:22', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (384, 1, '2019-07-25 12:43:08', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (385, 1, '2019-07-25 12:43:56', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (386, 1, '2019-07-25 12:45:53', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (387, 1, '2019-07-25 12:58:47', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (388, 1, '2019-07-25 13:29:31', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (389, 1, '2019-07-25 14:57:27', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (390, 1, '2019-07-25 15:09:22', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (391, 1, '2019-07-25 15:25:46', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (392, 1, '2019-07-25 15:38:16', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (393, 1, '2019-07-25 17:35:33', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (394, 1, '2019-07-25 17:37:05', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (395, 1, '2019-07-26 09:50:28', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (396, 1, '2019-07-26 09:51:43', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (397, 1, '2019-07-26 10:05:58', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (398, 1, '2019-07-26 11:05:22', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (399, 1, '2019-07-26 11:05:55', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (400, 1, '2019-07-26 13:35:13', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (401, 1, '2019-07-26 14:36:10', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (402, 1, '2019-07-26 15:45:20', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (403, 1, '2019-07-29 09:37:11', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (404, 1, '2019-07-29 15:29:09', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (405, 1, '2019-07-29 16:30:43', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (406, 1, '2019-07-29 16:55:09', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (407, 1, '2019-07-30 09:34:49', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (408, 1, '2019-07-30 13:22:14', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (409, 1, '2019-07-30 14:03:09', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (410, 1, '2019-07-30 16:38:47', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (411, 1, '2019-07-30 17:02:42', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (412, 1, '2019-07-31 09:45:07', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (413, 1, '2019-07-31 13:31:57', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (414, 1, '2019-07-31 14:18:49', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (415, 1, '2019-07-31 15:07:00', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (416, 1, '2019-07-31 15:33:30', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (417, 1, '2019-07-31 16:06:12', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (418, 1, '2019-07-31 16:37:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (419, 1, '2019-08-01 09:41:55', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (420, 1, '2019-08-01 13:29:43', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (421, 1, '2019-08-01 14:13:23', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (422, 1, '2019-08-01 16:26:39', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (423, 1, '2019-08-01 16:34:26', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (424, 1, '2019-08-02 09:51:42', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (425, 1, '2019-08-02 10:24:16', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (426, 1, '2019-08-02 10:45:52', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (427, 1, '2019-08-02 13:34:48', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (428, 1, '2019-08-05 15:42:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (429, 1, '2019-08-13 09:42:07', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (430, 1, '2019-08-13 10:59:43', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (431, 1, '2019-08-13 11:02:44', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (432, 1, '2019-08-13 11:54:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (433, 1, '2019-08-13 13:01:50', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (434, 1, '2019-08-14 15:49:06', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (435, 1, '2019-08-16 09:40:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (436, 1, '2019-08-16 11:44:13', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (437, 1, '2019-08-16 11:47:52', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (438, 1, '2019-08-16 14:46:43', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (439, 1, '2019-08-16 14:54:19', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (440, 1, '2019-08-16 15:37:05', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (441, 1, '2019-08-16 15:37:30', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (442, 1, '2019-08-16 16:42:18', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (443, 1, '2019-08-16 16:44:19', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (444, 1, '2019-08-16 17:40:40', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (445, 1, '2019-08-19 09:44:34', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (446, 1, '2019-08-19 10:56:19', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (447, 1, '2019-08-19 10:59:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (448, 1, '2019-08-19 12:12:10', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (449, 1, '2019-08-19 12:14:00', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (450, 1, '2019-08-19 17:16:17', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (451, 1, '2019-08-20 09:47:33', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (452, 1, '2019-08-20 12:27:41', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (453, 1, '2019-08-20 12:28:54', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (454, 1, '2019-08-20 12:58:44', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (455, 1, '2019-08-20 14:22:03', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (456, 1, '2019-08-20 14:53:24', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (457, 1, '2019-08-20 15:41:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (458, 1, '2019-08-21 09:35:23', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (459, 1, '2019-08-21 11:46:34', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (460, 1, '2019-08-21 11:47:17', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (461, 1, '2019-08-21 12:17:02', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (462, 1, '2019-08-21 12:18:28', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (463, 1, '2019-08-21 13:02:32', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (464, 1, '2019-08-22 09:42:04', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (465, 1, '2019-08-22 10:36:29', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (466, 1, '2019-08-22 11:08:03', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (467, 1, '2019-08-22 12:53:30', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (468, 1, '2019-08-22 14:32:06', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (469, 1, '2019-08-22 15:24:55', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (470, 1, '2019-08-22 15:39:05', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (471, 1, '2019-08-23 09:47:24', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (472, 1, '2019-08-23 12:32:54', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (473, 1, '2019-08-23 14:13:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (474, 1, '2019-08-23 14:43:57', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (475, 1, '2019-08-23 15:07:38', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (476, 1, '2019-08-23 16:38:24', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (477, 1, '2019-08-23 16:59:41', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (478, 1, '2019-08-23 17:24:01', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (479, 1, '2019-08-26 09:54:58', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (480, 1, '2019-08-26 11:10:11', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (481, 2, '2019-08-26 11:10:28', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (482, 2, '2019-08-26 11:13:11', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (483, 7, '2019-08-26 11:15:15', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (484, 7, '2019-08-26 11:22:14', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (485, 7, '2019-08-26 11:23:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (486, 7, '2019-08-26 11:30:00', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (487, 1, '2019-08-26 11:30:20', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (488, 1, '2019-08-26 12:27:29', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (489, 1, '2019-08-26 14:47:21', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (490, 1, '2019-08-26 15:11:03', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (491, 7, '2019-08-26 15:11:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (492, 7, '2019-08-26 15:21:04', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (493, 7, '2019-08-26 15:21:40', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (494, 1, '2019-08-27 10:11:58', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (495, 1, '2019-08-27 10:13:30', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (496, 10, '2019-08-27 10:13:43', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (497, 10, '2019-08-27 11:24:20', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (498, 1, '2019-08-27 11:24:38', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (499, 1, '2019-08-27 11:24:45', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (500, 1, '2019-08-27 11:25:30', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (501, 1, '2019-08-27 11:37:06', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (502, 1, '2019-08-27 11:37:22', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (503, 1, '2019-08-27 11:37:27', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (504, 1, '2019-08-27 11:38:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (505, 1, '2019-08-27 11:38:59', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (506, 1, '2019-08-27 11:43:24', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (507, 1, '2019-08-27 11:43:51', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (508, 1, '2019-08-27 12:27:11', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (509, 1, '2019-08-27 12:41:42', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (510, 1, '2019-08-27 13:28:51', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (511, 1, '2019-08-27 14:23:59', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (512, 1, '2019-08-27 14:36:20', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (513, 1, '2019-08-27 15:07:06', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (514, 1, '2019-08-27 15:09:22', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (515, 1, '2019-08-27 16:02:40', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (516, 1, '2019-08-27 16:30:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (517, 1, '2019-08-27 17:29:58', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (518, 1, '2019-08-28 09:56:45', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (519, 1, '2019-08-28 09:58:40', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (520, 1, '2019-08-28 10:33:29', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (521, 1, '2019-08-28 11:04:17', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (522, 1, '2019-08-28 12:30:51', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (523, 1, '2019-08-28 12:54:39', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (524, 1, '2019-08-28 14:04:16', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (525, 1, '2019-08-28 14:04:17', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (526, 1, '2019-08-28 14:11:53', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (527, 1, '2019-08-28 15:53:57', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (528, 1, '2019-08-28 16:10:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (529, 1, '2019-08-29 10:00:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (530, 1, '2019-08-29 10:33:44', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (531, 14, '2019-08-29 10:35:12', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (532, 1, '2019-08-29 11:22:05', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (533, 1, '2019-08-29 11:43:15', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (534, 15, '2019-08-29 11:43:40', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (535, 15, '2019-08-29 11:46:50', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (536, 12, '2019-08-29 11:51:59', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (537, 15, '2019-08-29 12:34:22', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (538, 1, '2019-08-29 15:18:40', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (539, 1, '2019-08-29 15:18:51', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (540, 15, '2019-08-29 15:19:14', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (541, 15, '2019-08-30 09:33:23', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (542, 15, '2019-08-30 09:37:24', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (543, 1, '2019-08-30 09:37:40', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (544, 1, '2019-08-30 10:41:03', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (545, 15, '2019-08-30 11:05:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (546, 15, '2019-08-30 11:48:53', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (547, 1, '2019-08-30 11:49:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (548, 1, '2019-08-30 13:21:57', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (549, 1, '2019-08-30 14:12:23', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (550, 1, '2019-08-30 16:18:23', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (551, 1, '2019-08-30 16:22:20', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (552, 1, '2019-08-30 16:54:15', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (553, 1, '2019-08-30 16:55:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (554, 1, '2019-08-30 17:17:45', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (555, 1, '2019-08-30 17:22:41', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (556, 1, '2019-09-02 09:31:59', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (557, 1, '2019-09-02 10:26:34', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (558, 1, '2019-09-02 10:30:04', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (559, 1, '2019-09-02 11:10:03', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (560, 1, '2019-09-02 12:56:54', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (561, 1, '2019-09-02 12:57:40', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (562, 1, '2019-09-02 14:34:11', '10.199.167.79', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (563, 1, '2019-09-02 14:48:35', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (564, 1, '2019-09-02 14:58:14', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (565, 1, '2019-09-02 15:02:33', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (566, 1, '2019-09-02 15:44:10', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (567, 1, '2019-09-02 16:17:53', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (568, 1, '2019-09-02 16:19:33', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (569, 1, '2019-09-03 09:48:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (570, 1, '2019-09-03 10:45:36', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (571, 1, '2019-09-03 11:33:59', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (572, 1, '2019-09-03 11:36:04', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (573, 21, '2019-09-03 11:50:59', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (574, 21, '2019-09-03 12:13:24', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (575, 1, '2019-09-03 12:16:53', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (576, 1, '2019-09-03 12:20:01', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (577, 1, '2019-09-03 12:56:52', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (578, 1, '2019-09-03 13:30:42', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (579, 1, '2019-09-03 14:05:20', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (580, 1, '2019-09-03 15:36:30', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (581, 1, '2019-09-03 15:39:50', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (582, 1, '2019-09-04 09:41:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (583, 1, '2019-09-04 09:47:15', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (584, 22, '2019-09-04 09:47:31', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (585, 22, '2019-09-04 09:49:26', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (586, 1, '2019-09-04 09:50:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (587, 1, '2019-09-04 09:52:54', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (588, 23, '2019-09-04 09:53:15', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (589, 23, '2019-09-04 10:31:19', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (590, 23, '2019-09-04 10:31:59', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (591, 23, '2019-09-04 11:02:34', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (592, 1, '2019-09-04 11:02:49', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (593, 1, '2019-09-04 11:11:26', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (594, 1, '2019-09-04 11:15:30', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (595, 23, '2019-09-04 11:16:16', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (596, 1, '2019-09-04 11:23:34', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (597, 23, '2019-09-04 11:24:01', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (598, 23, '2019-09-04 11:48:24', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (599, 23, '2019-09-04 11:50:46', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (600, 23, '2019-09-04 12:13:49', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (601, 1, '2019-09-04 12:14:03', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (602, 1, '2019-09-04 12:14:29', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (603, 23, '2019-09-04 12:14:54', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (604, 23, '2019-09-04 12:29:47', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (605, 23, '2019-09-04 12:35:59', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (606, 23, '2019-09-04 13:21:57', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (607, 23, '2019-09-04 13:33:50', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (608, 23, '2019-09-04 14:13:12', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (609, 23, '2019-09-04 14:31:32', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (610, 23, '2019-09-04 15:11:54', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (611, 23, '2019-09-04 15:41:16', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (612, 1, '2019-09-04 15:54:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (613, 1, '2019-09-04 16:27:47', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (614, 1, '2019-09-05 09:37:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (615, 1, '2019-09-05 09:43:07', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (616, 26, '2019-09-05 09:43:31', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (617, 1, '2019-09-05 10:01:04', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (618, 1, '2019-09-05 12:14:34', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (619, 1, '2019-09-05 12:14:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (620, 1, '2019-09-05 14:50:22', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (621, 1, '2019-09-05 14:50:37', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (622, 1, '2019-09-05 14:51:04', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (623, 1, '2019-09-05 15:08:55', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (624, 1, '2019-09-05 15:43:23', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (625, 1, '2019-09-05 15:46:28', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (626, 28, '2019-09-05 15:59:32', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (627, 1, '2019-09-05 16:08:07', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (628, 1, '2019-09-05 17:10:31', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (629, 1, '2019-09-06 09:37:09', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (630, 1, '2019-09-06 10:02:25', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (631, 22, '2019-09-06 10:02:41', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (632, 23, '2019-09-06 10:17:55', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (633, 23, '2019-09-06 11:05:09', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (634, 23, '2019-09-06 11:15:18', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (635, 22, '2019-09-06 11:47:57', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (636, 1, '2019-09-06 11:48:13', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (637, 1, '2019-09-06 12:08:07', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (638, 22, '2019-09-06 12:08:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (639, 22, '2019-09-06 12:36:37', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (640, 22, '2019-09-06 12:48:14', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (641, 1, '2019-09-06 12:48:27', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (642, 22, '2019-09-06 12:56:42', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (643, 23, '2019-09-06 13:15:42', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (644, 22, '2019-09-06 13:45:29', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (645, 1, '2019-09-06 14:07:18', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (646, 22, '2019-09-06 14:14:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (647, 22, '2019-09-06 14:54:09', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (648, 1, '2019-09-06 14:54:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (649, 1, '2019-09-06 15:15:25', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (650, 28, '2019-09-06 15:15:51', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (651, 22, '2019-09-06 15:23:48', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (652, 28, '2019-09-06 15:27:25', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (653, 1, '2019-09-06 15:27:38', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (654, 22, '2019-09-06 16:19:48', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (655, 1, '2019-09-06 16:22:44', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (656, 1, '2019-09-06 16:36:34', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (657, 1, '2019-09-09 09:31:56', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (658, 22, '2019-09-09 09:56:45', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (659, 1, '2019-09-09 11:00:18', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (660, 1, '2019-09-09 11:01:25', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (661, 22, '2019-09-09 11:14:59', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (662, 1, '2019-09-09 11:19:27', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (663, 1, '2019-09-09 11:21:09', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (664, 1, '2019-09-09 12:08:16', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (665, 1, '2019-09-09 12:11:01', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (666, 1, '2019-09-09 14:54:43', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (667, 1, '2019-09-09 14:57:10', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (668, 1, '2019-09-09 16:16:59', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (669, 1, '2019-09-09 16:30:30', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (670, 1, '2019-09-09 17:02:10', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (671, 1, '2019-09-11 09:32:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (672, 1, '2019-09-11 10:18:37', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (673, 23, '2019-09-11 10:19:07', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (674, 1, '2019-09-11 10:23:45', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (675, 23, '2019-09-11 11:29:58', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (676, 1, '2019-09-11 11:30:12', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (677, 1, '2019-09-11 11:47:17', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (678, 1, '2019-09-11 12:34:43', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (679, 1, '2019-09-11 14:36:46', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (680, 22, '2019-09-11 15:04:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (681, 22, '2019-09-11 15:13:12', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (682, 23, '2019-09-11 15:13:32', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (683, 23, '2019-09-11 15:14:38', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (684, 22, '2019-09-11 15:15:06', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (685, 22, '2019-09-11 15:23:24', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (686, 28, '2019-09-11 15:24:28', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (687, 28, '2019-09-11 15:33:20', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (688, 1, '2019-09-11 15:34:15', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (689, 1, '2019-09-11 15:37:15', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (690, 1, '2019-09-11 15:37:26', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (691, 28, '2019-09-11 15:38:21', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (692, 28, '2019-09-11 15:58:39', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (693, 12, '2019-09-11 15:58:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (694, 1, '2019-09-11 16:28:38', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (695, 12, '2019-09-11 16:32:04', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (696, 12, '2019-09-11 16:33:35', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (697, 12, '2019-09-11 17:15:00', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (698, 13, '2019-09-11 17:15:22', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (699, 1, '2019-09-12 10:11:15', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (700, 1, '2019-09-12 10:53:33', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (701, 23, '2019-09-12 12:36:29', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (702, 1, '2019-09-12 15:00:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (703, 1, '2019-09-12 15:32:26', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (704, 22, '2019-09-12 15:32:56', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (705, 22, '2019-09-12 15:44:30', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (706, 23, '2019-09-12 15:44:48', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (707, 23, '2019-09-12 15:54:17', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (708, 26, '2019-09-12 15:54:43', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (709, 1, '2019-09-12 16:20:35', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (710, 1, '2019-09-12 16:25:05', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (711, 31, '2019-09-12 16:26:10', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (712, 31, '2019-09-12 16:43:53', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (713, 1, '2019-09-12 16:44:05', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (714, 1, '2019-09-12 17:28:00', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (715, 1, '2019-09-13 09:29:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (716, 1, '2019-09-13 13:36:22', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (717, 1, '2019-09-13 14:16:46', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (718, 1, '2019-09-13 15:40:11', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (719, 23, '2019-09-13 15:40:49', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (720, 23, '2019-09-13 15:59:03', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (721, 1, '2019-09-13 15:59:17', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (722, 23, '2019-09-13 16:58:12', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (723, 1, '2019-09-13 17:27:11', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (724, 1, '2019-09-16 09:31:30', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (725, 1, '2019-09-16 11:02:22', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (726, 1, '2019-09-16 14:26:37', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (727, 1, '2019-09-16 15:16:28', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (728, 1, '2019-09-17 09:28:41', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (729, 1, '2019-09-17 09:59:31', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (730, 1, '2019-09-17 14:09:21', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (731, 1, '2019-09-17 14:41:21', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (732, 1, '2019-09-18 14:39:05', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (733, 1, '2019-09-19 09:29:56', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (734, 1, '2019-09-19 10:25:08', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (735, 1, '2019-09-19 11:53:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (736, 1, '2019-09-20 09:42:52', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (737, 1, '2019-09-20 10:24:56', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (738, 1, '2019-09-20 14:04:58', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (739, 1, '2019-09-20 14:36:48', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (740, 1, '2019-09-23 09:38:26', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (741, 1, '2019-09-23 10:23:13', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (742, 1, '2019-09-23 10:24:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (743, 1, '2019-09-23 10:47:58', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (744, 1, '2019-09-23 11:37:19', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (745, 1, '2019-09-23 12:25:21', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (746, 1, '2019-09-23 13:05:09', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (747, 1, '2019-09-23 13:25:07', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (748, 1, '2019-09-23 13:57:00', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (749, 1, '2019-09-23 14:00:39', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (750, 1, '2019-09-23 14:31:54', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (751, 1, '2019-09-23 14:35:56', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (752, 1, '2019-09-23 15:52:52', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (753, 1, '2019-09-23 16:32:51', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (754, 1, '2019-09-23 16:35:52', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (755, 39, '2019-09-23 16:37:35', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (756, 1, '2019-09-23 16:37:40', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (757, 36, '2019-09-23 16:37:57', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (758, 39, '2019-09-23 17:11:18', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (759, 39, '2019-09-23 17:13:03', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (760, 39, '2019-09-23 17:15:35', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (761, 40, '2019-09-23 17:16:01', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (762, 36, '2019-09-23 17:16:46', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (763, 41, '2019-09-23 17:17:13', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (764, 41, '2019-09-23 17:22:09', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (765, 41, '2019-09-23 17:29:27', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (766, 40, '2019-09-23 17:38:37', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (767, 1, '2019-09-23 17:41:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (768, 1, '2019-09-24 09:32:34', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (769, 1, '2019-09-24 09:54:59', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (770, 1, '2019-09-24 10:25:22', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (771, 37, '2019-09-24 10:25:42', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (772, 1, '2019-09-24 10:35:18', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (773, 1, '2019-09-24 10:45:36', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (774, 37, '2019-09-24 11:05:18', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (775, 44, '2019-09-24 11:05:36', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (776, 44, '2019-09-24 11:23:39', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (777, 1, '2019-09-24 11:34:35', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (778, 1, '2019-09-24 11:34:43', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (779, 44, '2019-09-24 11:35:08', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (780, 44, '2019-09-24 11:53:13', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (781, 45, '2019-09-24 11:53:29', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (782, 22, '2019-09-24 12:16:09', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (783, 45, '2019-09-24 12:19:14', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (784, 5, '2019-09-24 12:31:39', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (785, 5, '2019-09-24 12:32:08', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (786, 49, '2019-09-24 12:32:50', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (787, 22, '2019-09-24 12:35:39', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (788, 39, '2019-09-24 12:36:18', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (789, 39, '2019-09-24 12:46:43', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (790, 1, '2019-09-24 12:47:01', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (791, 5, '2019-09-24 12:55:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (792, 5, '2019-09-24 13:00:11', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (793, 5, '2019-09-24 13:00:31', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (794, 49, '2019-09-24 13:00:58', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (795, 5, '2019-09-24 13:01:13', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (796, 1, '2019-09-24 13:06:38', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (797, 5, '2019-09-24 13:31:50', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (798, 1, '2019-09-24 13:41:53', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (799, 5, '2019-09-24 13:53:52', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (800, 1, '2019-09-24 14:14:06', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (801, 38, '2019-09-24 14:15:28', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (802, 64, '2019-09-24 14:21:42', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (803, 1, '2019-09-24 14:25:13', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (804, 38, '2019-09-24 14:25:32', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (805, 38, '2019-09-24 14:43:35', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (806, 38, '2019-09-24 14:43:58', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (807, 38, '2019-09-24 14:47:11', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (808, 36, '2019-09-24 14:47:38', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (809, 38, '2019-09-24 14:53:05', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (810, 1, '2019-09-24 14:53:26', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (811, 1, '2019-09-24 14:53:34', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (812, 38, '2019-09-24 14:54:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (813, 36, '2019-09-24 14:54:49', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (814, 36, '2019-09-24 14:57:26', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (815, 38, '2019-09-24 14:57:48', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (816, 1, '2019-09-24 14:58:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (817, 1, '2019-09-24 15:02:23', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (818, 36, '2019-09-24 15:04:37', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (819, 36, '2019-09-24 15:10:49', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (820, 38, '2019-09-24 15:11:12', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (821, 38, '2019-09-24 15:29:20', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (822, 47, '2019-09-24 15:30:04', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (823, 47, '2019-09-24 15:31:45', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (824, 38, '2019-09-24 15:32:09', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (825, 64, '2019-09-24 15:32:16', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (826, 22, '2019-09-24 15:32:34', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (827, 38, '2019-09-24 15:36:16', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (828, 47, '2019-09-24 15:36:38', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (829, 47, '2019-09-24 16:45:23', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (830, 42, '2019-09-24 16:45:44', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (831, 22, '2019-09-24 17:09:07', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (832, 1, '2019-09-24 17:10:22', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (833, 1, '2019-09-25 09:29:39', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (834, 1, '2019-09-25 10:27:19', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (835, 22, '2019-09-25 10:28:07', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (836, 1, '2019-09-25 10:47:17', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (837, 22, '2019-09-25 10:57:13', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (838, 1, '2019-09-25 11:08:23', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (839, 1, '2019-09-25 11:17:22', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (840, 1, '2019-09-25 12:25:35', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (841, 40, '2019-09-25 12:27:06', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (842, 40, '2019-09-25 13:36:41', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (843, 22, '2019-09-25 14:22:31', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (844, 22, '2019-09-25 14:23:20', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (845, 36, '2019-09-25 14:24:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (846, 40, '2019-09-25 14:25:56', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (847, 36, '2019-09-25 14:30:43', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (848, 1, '2019-09-25 14:30:58', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (849, 1, '2019-09-25 14:41:03', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (850, 36, '2019-09-25 14:41:27', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (851, 1, '2019-09-25 14:57:20', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (852, 1, '2019-09-25 15:00:19', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (853, 40, '2019-09-25 15:00:43', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (854, 40, '2019-09-25 15:03:42', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (855, 28, '2019-09-25 15:03:59', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (856, 28, '2019-09-25 15:04:53', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (857, 36, '2019-09-25 15:31:00', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (858, 1, '2019-09-25 15:35:39', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (859, 28, '2019-09-25 15:39:14', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (860, 22, '2019-09-25 15:57:48', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (861, 1, '2019-09-25 16:12:43', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (862, 22, '2019-09-25 17:04:35', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (863, 43, '2019-09-25 17:06:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (864, 22, '2019-09-26 09:36:46', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (865, 22, '2019-09-26 09:37:20', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (866, 36, '2019-09-26 09:39:42', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (867, 40, '2019-09-26 09:40:22', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (868, 40, '2019-09-26 10:11:58', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (869, 1, '2019-09-26 10:12:21', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (870, 1, '2019-09-26 10:14:36', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (871, 40, '2019-09-26 10:15:09', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (872, 36, '2019-09-26 10:23:14', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (873, 1, '2019-09-26 10:23:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (874, 1, '2019-09-26 11:12:46', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (875, 22, '2019-09-26 11:14:35', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (876, 22, '2019-09-26 11:51:58', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (877, 36, '2019-09-26 11:52:30', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (878, 26, '2019-09-26 11:59:12', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (879, 36, '2019-09-26 12:32:17', '10.199.167.160', 'Password Change', 'Password Change Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (880, 36, '2019-09-26 12:32:48', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (881, 26, '2019-09-26 12:43:38', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (882, 36, '2019-09-26 13:02:54', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (883, 40, '2019-09-26 13:23:31', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (884, 36, '2019-09-26 14:17:50', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (885, 40, '2019-09-26 14:18:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (886, 40, '2019-09-26 14:48:49', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (887, 40, '2019-09-26 14:49:52', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (888, 36, '2019-09-26 15:26:53', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (889, 40, '2019-09-26 16:31:23', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (890, 40, '2019-09-26 16:42:08', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (891, 40, '2019-09-26 17:41:54', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (892, 40, '2019-09-27 09:42:07', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (893, 49, '2019-09-27 10:20:07', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (894, 49, '2019-09-27 12:19:48', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (895, 49, '2019-09-27 12:21:00', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (896, 40, '2019-09-27 12:51:07', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (897, 40, '2019-09-27 12:52:38', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (898, 36, '2019-09-27 12:56:29', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (899, 36, '2019-09-27 13:26:41', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (900, 49, '2019-09-27 13:36:35', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (901, 40, '2019-09-27 13:36:35', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (902, 40, '2019-09-27 13:59:34', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (903, 49, '2019-09-27 13:59:41', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (904, 36, '2019-09-27 14:03:04', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (905, 49, '2019-09-27 14:25:35', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (906, 34, '2019-09-27 14:25:52', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (907, 36, '2019-09-27 14:30:13', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (908, 28, '2019-09-27 14:30:44', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (909, 28, '2019-09-27 14:44:31', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (910, 1, '2019-09-27 14:44:45', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (911, 1, '2019-09-27 15:03:58', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (912, 1, '2019-09-27 15:06:33', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (913, 1, '2019-09-27 16:33:46', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (914, 40, '2019-09-27 16:35:56', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (915, 1, '2019-09-27 17:06:59', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (916, 34, '2019-09-27 17:16:01', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (917, 1, '2019-09-27 17:19:15', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (918, 49, '2019-09-27 17:20:28', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (919, 40, '2019-09-27 17:21:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (920, 49, '2019-09-27 17:34:12', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (921, 31, '2019-09-27 17:34:43', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (922, 1, '2019-09-30 09:44:34', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (923, 31, '2019-09-30 09:46:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (924, 31, '2019-09-30 10:53:52', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (925, 89, '2019-09-30 10:54:14', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (926, 89, '2019-09-30 11:37:15', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (927, 85, '2019-09-30 11:37:41', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (928, 1, '2019-09-30 12:17:45', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (929, 85, '2019-09-30 12:32:03', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (930, 85, '2019-09-30 12:54:48', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (931, 85, '2019-09-30 17:07:41', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (932, 1, '2019-10-01 11:50:55', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (933, 1, '2019-10-01 11:51:52', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (934, 1, '2019-10-01 11:52:16', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (935, 1, '2019-10-01 11:52:53', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (936, 1, '2019-10-01 12:04:23', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (937, 49, '2019-10-01 12:06:47', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (938, 47, '2019-10-01 12:07:42', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (939, 49, '2019-10-01 12:48:11', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (940, 49, '2019-10-01 12:57:46', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (941, 47, '2019-10-01 13:27:25', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (942, 49, '2019-10-01 13:37:31', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (943, 1, '2019-10-01 14:05:21', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (944, 1, '2019-10-01 14:16:27', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (945, 49, '2019-10-01 14:16:57', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (946, 1, '2019-10-01 14:18:04', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (947, 49, '2019-10-01 14:47:10', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (948, 36, '2019-10-01 15:12:30', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (949, 49, '2019-10-01 15:34:10', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (950, 49, '2019-10-01 15:34:30', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (951, 39, '2019-10-01 15:35:02', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (952, 39, '2019-10-01 15:35:14', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (953, 40, '2019-10-01 15:35:42', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (954, 36, '2019-10-01 15:42:19', '10.199.167.160', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (955, 31, '2019-10-01 15:43:03', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (956, 31, '2019-10-01 15:53:23', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (957, 1, '2019-10-01 16:05:26', '10.199.165.159', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (958, 40, '2019-10-01 16:05:52', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (959, 1, '2019-10-01 16:06:28', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (960, 1, '2019-10-01 17:11:53', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (961, 1, '2019-10-01 17:12:21', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (962, 1, '2019-10-01 17:17:24', '10.199.167.160', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (963, 1, '2019-10-01 17:22:39', '10.199.167.160', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (964, 1, '2019-10-14 15:04:51', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (965, 1, '2019-10-14 15:05:26', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (966, 1, '2019-10-14 15:24:41', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (967, 1, '2019-10-14 15:30:29', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (968, 1, '2019-10-14 15:30:57', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (969, 1, '2019-10-14 15:31:12', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (970, 1, '2019-10-14 15:50:57', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (971, 1, '2019-10-14 15:51:42', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (972, 1, '2019-10-14 15:52:23', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (973, 1, '2019-10-14 15:52:42', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (974, 1, '2019-10-14 15:56:19', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (975, 1, '2019-10-14 15:56:36', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (976, 1, '2019-10-15 09:48:34', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (977, 1, '2019-10-15 10:04:12', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (978, 1, '2019-10-15 10:04:42', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (979, 1, '2019-10-15 10:12:15', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (980, 1, '2019-10-15 11:21:10', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (981, 1, '2019-10-15 11:53:34', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (982, 1, '2019-10-15 12:04:50', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (983, 1, '2019-10-15 12:08:36', '::1', 'Updated', '{\"id\":\"10\",\"level_name\":\"6\",\"range_from\":\"35400\",\"range_to\":\"1124000\",\"status\":1}', 'Range Module');
INSERT INTO `ci_user_activities` VALUES (984, 1, '2019-10-15 12:08:42', '::1', 'Updated', '{\"id\":\"10\",\"level_name\":\"6\",\"range_from\":\"35400\",\"range_to\":\"112400\",\"status\":1}', 'Range Module');
INSERT INTO `ci_user_activities` VALUES (985, 1, '2019-10-15 12:12:07', '::1', 'Added', '{\"id\":\"\",\"level_name\":\"18\",\"range_from\":\"250000\",\"range_to\":\"250000\",\"status\":1,\"created\":\"2019-10-15 12:12:07\"}', 'Range Module');
INSERT INTO `ci_user_activities` VALUES (986, 1, '2019-10-15 12:53:10', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (987, 1, '2019-10-15 12:55:52', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (988, 1, '2019-10-15 13:26:43', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (989, 1, '2019-10-15 14:13:35', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (990, 1, '2019-10-15 15:23:29', '::1', 'Added', '{\"id\":\"\",\"reg_id\":\"16\",\"station\":\"H\",\"zone\":\"10\",\"name\":\"Test\",\"code\":\"2435\",\"created\":\"2019-10-15 15:23:29\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (991, 1, '2019-10-15 15:24:07', '::1', 'Updated', '{\"id\":\"1205\",\"reg_id\":\"16\",\"station\":\"H\",\"zone\":\"10\",\"name\":\"Test name\",\"code\":\"2435\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (992, 1, '2019-10-15 17:15:25', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (993, 1, '2019-10-15 17:20:12', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (994, 1, '2019-10-16 09:54:40', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (995, 1, '2019-10-16 10:46:11', '::1', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (996, 1, '2019-10-16 10:46:20', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (997, 1, '2019-10-16 11:07:00', '::1', 'Added', '{\"name\":\"test\",\"code\":\"245465\",\"website\":\"\",\"email\":\"priti@gmail.com\",\"type\":\"2\",\"label\":\"ZT\",\"parent\":\"10\",\"created\":\"2019-10-16 11:07:00\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (998, 1, '2019-10-16 11:11:13', '::1', 'Added', '{\"name\":\"fxghfh\",\"code\":\"45546\",\"website\":\"https:\\/\\/www.google.com\",\"email\":\"neha12@gmail.com\",\"type\":\"5\",\"label\":\"RO\",\"parent\":\"10\",\"created\":\"2019-10-16 11:11:13\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (999, 1, '2019-10-16 11:12:11', '::1', 'Added', '{\"name\":\"Gurgaonrr\",\"code\":\"4656\",\"website\":\"https:\\/\\/stackoverflow.com\",\"email\":\"ritesh.986@gmail.com\",\"type\":\"2\",\"label\":\"ZT\",\"parent\":\"11\",\"created\":\"2019-10-16 11:12:11\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (1000, 1, '2019-10-16 14:41:56', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1001, 1, '2019-10-16 14:43:57', '::1', 'Updated', '{\"name\":\"fxghfh\",\"code\":\"45546\",\"website\":\"https:\\/\\/www.google.com\",\"email\":\"neha12@gmail.com\",\"type\":\"5\",\"label\":\"RO\",\"parent\":\"10\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (1002, 1, '2019-10-16 14:44:14', '::1', 'Updated', '{\"name\":\"fxghfh dhyt dhth\",\"code\":\"45546\",\"website\":\"https:\\/\\/www.google.com\",\"email\":\"neha12@gmail.com\",\"type\":\"5\",\"label\":\"RO\",\"parent\":\"10\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (1003, 1, '2019-10-16 14:45:11', '::1', 'Updated', '{\"name\":\"Soham Solanki\",\"code\":\"5675\",\"website\":\"https:\\/\\/stackoverflow.com\",\"email\":\"nehasingh@gmail.com\",\"type\":\"5\",\"label\":\"RO\",\"parent\":\"11\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (1004, 1, '2019-10-16 14:45:27', '::1', 'Updated', '{\"name\":\"Gurgaonrr fgfgh\",\"code\":\"4656\",\"website\":\"https:\\/\\/stackoverflow.com\",\"email\":\"ritesh.986@gmail.com\",\"type\":\"2\",\"label\":\"ZT\",\"parent\":\"11\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (1005, 1, '2019-10-16 14:46:56', '::1', 'Added', '{\"name\":\"Nepal\",\"code\":\"2365\",\"website\":\"\",\"email\":\"\",\"type\":\"3\",\"label\":\"KV\",\"parent\":\"12\",\"created\":\"2019-10-16 14:46:56\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (1006, 1, '2019-10-16 15:24:42', '::1', 'Updated', '{\"id\":\"7\",\"name\":\"Arts\",\"status\":1}', 'Subject Module');
INSERT INTO `ci_user_activities` VALUES (1007, 1, '2019-10-16 15:25:21', '::1', 'Added', '{\"id\":\"\",\"name\":\"trtuy\",\"status\":1,\"created\":\"2019-10-16 15:25:21\"}', 'Subject Module');
INSERT INTO `ci_user_activities` VALUES (1008, 1, '2019-10-17 09:48:46', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1009, 1, '2019-10-17 10:10:37', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1010, 1, '2019-10-17 10:24:59', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1011, 39, '2019-10-17 10:26:39', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1012, 45, '2019-10-17 10:26:44', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1013, 39, '2019-10-17 11:13:39', '10.199.167.79', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1014, 1, '2019-10-17 11:14:37', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1015, 45, '2019-10-17 11:18:36', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1016, 39, '2019-10-17 11:18:58', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1017, 39, '2019-10-17 11:25:38', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1018, 39, '2019-10-17 11:26:16', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1019, 1, '2019-10-17 11:26:28', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1020, 1, '2019-10-17 11:55:57', '10.199.165.159', 'Added', '{\"id\":\"\",\"cat_id\":\"2\",\"name\":\"SUB STAFF\",\"ro\":\"1\",\"hq\":\"1\",\"created\":\"2019-10-17 11:55:57\"}', 'Designation Module');
INSERT INTO `ci_user_activities` VALUES (1021, 1, '2019-10-17 11:56:14', '10.199.165.159', 'Updated', '{\"id\":\"55\",\"cat_id\":\"2\",\"name\":\"SUB STAFF\",\"ro\":\"1\",\"hq\":\"1\",\"zt\":\"1\"}', 'Designation Module');
INSERT INTO `ci_user_activities` VALUES (1022, 1, '2019-10-17 14:45:42', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1023, 96, '2019-10-21 13:03:31', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1024, 96, '2019-10-21 13:05:58', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1025, 1, '2019-10-21 14:24:44', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1026, 1, '2019-10-21 14:56:13', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1027, 1, '2019-10-22 09:45:05', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1028, 1, '2019-10-22 09:45:19', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1029, 1, '2019-10-22 09:57:56', '10.199.167.130', 'Updated', '{\"id\":\"5\",\"level_name\":\"1\",\"range_from\":\"18000\",\"range_to\":\"56800\",\"status\":1}', 'Range Module');
INSERT INTO `ci_user_activities` VALUES (1030, 1, '2019-10-22 09:58:11', '10.199.167.130', 'Updated', '{\"id\":\"5\",\"level_name\":\"1\",\"range_from\":\"18000\",\"range_to\":\"56900\",\"status\":1}', 'Range Module');
INSERT INTO `ci_user_activities` VALUES (1031, 1, '2019-10-22 09:58:33', '10.199.167.130', 'Updated', '{\"id\":\"7\",\"name\":\"Artss\",\"status\":1}', 'Subject Module');
INSERT INTO `ci_user_activities` VALUES (1032, 1, '2019-10-22 09:58:44', '10.199.167.130', 'Updated', '{\"id\":\"7\",\"name\":\"Arts\",\"status\":1}', 'Subject Module');
INSERT INTO `ci_user_activities` VALUES (1033, 1, '2019-10-22 09:59:12', '10.199.167.130', 'Updated', '{\"id\":\"1131\",\"reg_id\":\"40\",\"station\":\"0\",\"zone\":\"13\",\"name\":\"Kendirya Vidayalaya No. II Itanagar\",\"code\":\"1473\",\"status\":1}', 'School Module');
INSERT INTO `ci_user_activities` VALUES (1034, 1, '2019-10-22 10:00:29', '10.199.167.130', 'Updated', '{\"name\":\"AGRAA\",\"code\":\"2268\",\"website\":\"\",\"email\":\"\",\"type\":\"5\",\"label\":\"RO\",\"parent\":\"10\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (1035, 1, '2019-10-22 10:00:39', '10.199.167.130', 'Updated', '{\"name\":\"AGRA\",\"code\":\"2268\",\"website\":\"\",\"email\":\"\",\"type\":\"5\",\"label\":\"RO\",\"parent\":\"10\",\"status\":1}', 'Region Module');
INSERT INTO `ci_user_activities` VALUES (1036, 1, '2019-10-22 10:04:00', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1037, 1, '2019-10-22 10:06:35', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1038, 1, '2019-10-22 10:07:35', '10.199.165.145', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1039, 1, '2019-10-22 10:08:21', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1040, 86, '2019-10-22 10:09:00', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1041, 1, '2019-10-22 10:44:29', '10.199.165.138', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1042, 36, '2019-10-22 10:48:40', '10.199.165.138', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1043, 36, '2019-10-22 11:06:31', '10.199.165.138', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1044, 49, '2019-10-22 11:07:01', '10.199.165.138', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1045, 1, '2019-10-22 12:24:28', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1046, 36, '2019-10-22 12:26:43', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1047, 86, '2019-10-22 12:32:43', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1048, 36, '2019-10-22 12:32:43', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1049, 40, '2019-10-22 12:33:23', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1050, 49, '2019-10-22 12:34:33', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1051, 49, '2019-10-22 13:58:59', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1052, 40, '2019-10-22 13:59:04', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1053, 85, '2019-10-22 13:59:23', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1054, 31, '2019-10-22 14:00:01', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1055, 85, '2019-10-22 14:15:59', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1056, 86, '2019-10-22 14:16:30', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1057, 49, '2019-10-22 14:33:40', '10.199.165.138', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1058, 1, '2019-10-22 14:38:41', '10.199.165.138', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1059, 1, '2019-10-22 15:28:34', '10.199.165.138', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1060, 49, '2019-10-22 15:29:17', '10.199.165.138', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1061, 1, '2019-10-22 15:47:52', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1062, 49, '2019-10-22 15:55:22', '10.199.165.138', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1063, 40, '2019-10-22 15:56:23', '10.199.165.138', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1064, 40, '2019-10-22 16:16:36', '10.199.165.138', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1065, 1, '2019-10-22 16:17:25', '10.199.165.138', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1066, 1, '2019-10-22 17:33:46', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1067, 1, '2019-10-23 10:00:12', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1068, 1, '2019-10-23 16:17:41', '::1', 'Logout', 'You have been logged out due to inactivity.Please login again', NULL);
INSERT INTO `ci_user_activities` VALUES (1069, 1, '2019-10-23 16:43:15', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1070, 1, '2019-10-24 09:51:32', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1071, 1, '2019-10-25 10:18:01', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1072, 1, '2019-10-25 12:28:57', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1073, 1, '2019-10-25 12:30:09', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1074, 1, '2019-10-25 12:30:16', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1075, 49, '2019-10-25 12:30:45', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1076, 40, '2019-10-25 12:31:12', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1077, 40, '2019-10-25 12:39:08', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1078, 1, '2019-10-25 12:39:34', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1079, 1, '2019-10-25 14:51:06', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1080, 1, '2019-10-29 09:41:16', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1081, 1, '2019-10-29 17:01:45', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1082, 1, '2019-10-30 09:48:00', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1083, 1, '2019-10-30 12:32:22', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1084, 49, '2019-10-30 12:32:49', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1085, 1, '2019-10-30 12:34:04', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1086, 49, '2019-10-30 12:52:04', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1087, 36, '2019-10-30 12:54:31', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1088, 36, '2019-10-30 12:54:51', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1089, 36, '2019-10-30 12:55:35', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1090, 36, '2019-10-30 12:57:34', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1091, 28, '2019-10-30 12:57:55', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1092, 28, '2019-10-30 14:13:05', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1093, 49, '2019-10-30 14:13:45', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1094, 1, '2019-10-30 16:48:54', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1095, 1, '2019-10-30 17:00:42', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1096, 49, '2019-10-30 17:01:01', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1097, 40, '2019-11-01 09:26:33', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1098, 40, '2019-11-01 11:04:49', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1099, 49, '2019-11-01 11:05:37', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1100, 40, '2019-11-01 11:07:16', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1101, 1, '2019-11-04 09:40:50', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1102, 1, '2019-11-05 10:01:12', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1103, 1, '2019-11-06 09:57:00', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1104, 1, '2019-11-07 14:24:50', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1105, 1, '2019-11-08 10:16:00', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1106, 1, '2019-11-08 15:32:46', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1107, 1, '2019-11-11 09:41:31', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1108, 1, '2019-11-11 09:42:52', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1109, 1, '2019-11-11 09:51:24', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1110, 40, '2019-11-11 09:51:48', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1111, 40, '2019-11-11 15:31:18', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1112, 49, '2019-11-11 15:31:44', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1113, 1, '2019-11-11 16:48:03', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1114, 1, '2019-11-11 17:41:14', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1115, 49, '2019-11-13 09:54:16', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1116, 1, '2019-11-13 11:07:31', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1117, 1, '2019-11-13 11:08:44', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1118, 86, '2019-11-13 11:09:14', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1119, 86, '2019-11-13 11:12:57', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1120, 40, '2019-11-13 11:13:17', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1121, 40, '2019-11-13 11:30:35', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1122, 85, '2019-11-13 11:31:05', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1123, 85, '2019-11-13 11:39:11', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1124, 49, '2019-11-13 11:39:23', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1125, 40, '2019-11-13 11:39:43', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1126, 86, '2019-11-13 12:09:14', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1127, 1, '2019-11-13 12:22:48', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1128, 40, '2019-11-13 12:42:42', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1129, 40, '2019-11-13 17:02:51', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1130, 40, '2019-11-13 17:26:00', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1131, 85, '2019-11-13 17:26:47', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1132, 40, '2019-11-14 09:52:24', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1133, 40, '2019-11-15 09:32:42', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1134, 49, '2019-11-15 10:04:23', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1135, 49, '2019-11-15 11:50:02', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1136, 40, '2019-11-15 11:50:21', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1137, 85, '2019-11-15 12:06:27', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1138, 40, '2019-11-15 12:10:29', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1139, 86, '2019-11-15 12:12:30', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1140, 86, '2019-11-15 12:54:30', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1141, 49, '2019-11-15 12:55:01', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1142, 49, '2019-11-15 12:55:49', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1143, 42, '2019-11-15 12:56:09', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1144, 42, '2019-11-15 14:16:26', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1145, 86, '2019-11-15 14:16:56', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1146, 40, '2019-11-18 10:19:29', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1147, 49, '2019-11-18 10:27:38', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1148, 49, '2019-11-18 10:44:27', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1149, 86, '2019-11-18 10:44:53', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1150, 1, '2019-11-18 15:33:44', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1151, 1, '2019-11-18 15:35:04', '10.199.167.79', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1152, 1, '2019-11-18 15:35:29', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1153, 1, '2019-11-18 15:36:17', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1154, 49, '2019-11-18 16:08:01', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1155, 49, '2019-11-18 16:08:39', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1156, 40, '2019-11-18 16:08:54', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1157, 40, '2019-11-18 16:10:28', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1158, 49, '2019-11-18 16:10:46', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1159, 49, '2019-11-18 17:07:52', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1160, 40, '2019-11-18 17:09:06', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1161, 40, '2019-11-18 17:24:16', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1162, 86, '2019-11-18 17:24:49', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1163, 1, '2019-11-18 17:52:16', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1164, 1, '2019-11-18 17:58:11', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1165, 1, '2019-11-18 17:58:32', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1166, 86, '2019-11-19 09:40:58', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1167, 85, '2019-11-19 09:42:14', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1168, 85, '2019-11-19 09:58:56', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1169, 22, '2019-11-19 09:59:20', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1170, 22, '2019-11-19 10:15:59', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1171, 86, '2019-11-19 10:16:26', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1172, 86, '2019-11-19 10:51:28', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1173, 1, '2019-11-19 11:01:57', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1174, 1, '2019-11-19 11:03:29', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1175, 26, '2019-11-19 11:06:14', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1176, 26, '2019-11-19 11:22:00', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1177, 39, '2019-11-19 11:22:23', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1178, 1, '2019-11-19 11:25:24', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1179, 26, '2019-11-19 11:26:22', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1180, 39, '2019-11-19 11:31:33', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1181, 26, '2019-11-19 11:32:17', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1182, 26, '2019-11-19 11:46:01', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1183, 49, '2019-11-19 11:47:24', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1184, 26, '2019-11-19 11:49:45', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1185, 49, '2019-11-19 11:50:03', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1186, 49, '2019-11-19 12:01:38', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1187, 1, '2019-11-19 12:03:18', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1188, 5, '2019-11-19 12:05:01', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1189, 49, '2019-11-19 12:09:22', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1190, 45, '2019-11-19 12:09:47', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1191, 5, '2019-11-19 12:10:20', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1192, 45, '2019-11-19 12:10:38', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1193, 45, '2019-11-19 12:11:42', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1194, 46, '2019-11-19 12:12:01', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1195, 45, '2019-11-19 12:12:28', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1196, 22, '2019-11-19 12:12:49', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1197, 22, '2019-11-19 12:13:47', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1198, 37, '2019-11-19 12:16:45', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1199, 46, '2019-11-19 12:25:00', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1200, 37, '2019-11-19 12:25:00', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1201, 40, '2019-11-19 12:25:49', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1202, 40, '2019-11-19 12:27:00', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1203, 39, '2019-11-19 12:27:25', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1204, 36, '2019-11-19 12:29:32', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1205, 39, '2019-11-19 12:35:06', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1206, 36, '2019-11-19 12:35:11', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1207, 43, '2019-11-19 12:35:49', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1208, 22, '2019-11-19 12:35:54', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1209, 43, '2019-11-19 12:46:35', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1210, 42, '2019-11-19 12:46:58', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1211, 1, '2019-11-19 12:51:49', '10.199.167.79', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1212, 43, '2019-11-19 12:53:32', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1213, 22, '2019-11-19 12:54:59', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1214, 42, '2019-11-19 12:57:30', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1215, 26, '2019-11-19 12:57:56', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1216, 86, '2019-11-19 13:03:16', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1217, 43, '2019-11-19 13:06:06', '10.199.167.79', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1218, 45, '2019-11-19 13:06:29', '10.199.167.79', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1219, 1, '2019-11-19 13:59:05', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1220, 85, '2019-11-19 13:59:41', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1221, 26, '2019-11-19 14:37:47', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1222, 1, '2019-11-19 14:38:02', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1223, 85, '2019-11-19 15:03:08', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1224, 40, '2019-11-19 15:04:04', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1225, 49, '2019-11-19 15:10:59', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1226, 40, '2019-11-19 16:14:10', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1227, 86, '2019-11-19 16:17:20', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1228, 1, '2019-11-19 17:02:03', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1229, 40, '2019-11-20 09:49:49', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1230, 36, '2019-11-20 09:58:51', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1231, 22, '2019-11-20 10:03:22', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1232, 22, '2019-11-20 10:13:44', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1233, 39, '2019-11-20 10:15:40', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1234, 39, '2019-11-20 10:18:22', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1235, 41, '2019-11-20 10:18:39', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1236, 41, '2019-11-20 10:22:52', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1237, 36, '2019-11-20 10:23:35', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1238, 36, '2019-11-20 10:33:54', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1239, 5, '2019-11-20 10:34:14', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1240, 36, '2019-11-20 10:36:21', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1241, 49, '2019-11-20 10:36:45', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1242, 49, '2019-11-20 10:41:38', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1243, 26, '2019-11-20 10:41:57', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1244, 26, '2019-11-20 10:48:14', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1245, 36, '2019-11-20 10:49:04', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1246, 5, '2019-11-20 10:52:55', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1247, 22, '2019-11-20 10:53:14', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1248, 36, '2019-11-20 10:55:34', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1249, 42, '2019-11-20 10:55:53', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1250, 42, '2019-11-20 10:57:37', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1251, 43, '2019-11-20 10:57:58', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1252, 43, '2019-11-20 11:14:49', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1253, 22, '2019-11-20 11:15:17', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1254, 42, '2019-11-20 11:37:19', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1255, 42, '2019-11-20 11:51:44', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1256, 86, '2019-11-20 11:52:49', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1257, 86, '2019-11-20 12:05:17', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1258, 42, '2019-11-20 12:06:01', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1259, 22, '2019-11-20 12:10:16', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1260, 85, '2019-11-20 12:10:32', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1261, 85, '2019-11-20 12:22:46', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1262, 86, '2019-11-20 12:23:20', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1263, 86, '2019-11-20 12:23:34', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1264, 87, '2019-11-20 12:24:03', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1265, 87, '2019-11-20 12:24:19', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1266, 88, '2019-11-20 12:24:42', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1267, 88, '2019-11-20 12:24:50', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1268, 89, '2019-11-20 12:25:12', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1269, 89, '2019-11-20 12:25:47', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1270, 31, '2019-11-20 12:26:00', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1271, 31, '2019-11-20 12:30:23', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1272, 85, '2019-11-20 12:30:44', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1273, 85, '2019-11-20 12:31:27', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1274, 86, '2019-11-20 12:32:19', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1275, 86, '2019-11-20 12:36:31', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1276, 42, '2019-11-20 12:37:27', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1277, 42, '2019-11-20 12:37:36', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1278, 40, '2019-11-20 12:38:10', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1279, 40, '2019-11-20 12:41:17', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1280, 85, '2019-11-20 12:41:31', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1281, 85, '2019-11-20 12:42:51', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1282, 42, '2019-11-20 12:43:16', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1283, 42, '2019-11-20 12:54:23', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1284, 36, '2019-11-20 12:55:17', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1285, 40, '2019-11-20 12:55:41', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1286, 42, '2019-11-20 13:01:39', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1287, 1, '2019-11-20 13:01:56', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1288, 1, '2019-11-20 13:05:18', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1289, 1, '2019-11-20 14:10:16', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1290, 85, '2019-11-20 14:11:01', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1291, 36, '2019-11-20 14:18:12', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1292, 40, '2019-11-20 14:19:40', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1293, 26, '2019-11-20 14:21:58', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1294, 26, '2019-11-20 14:23:00', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1295, 86, '2019-11-20 14:23:29', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1296, 86, '2019-11-20 14:26:26', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1297, 40, '2019-11-20 14:26:45', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1298, 26, '2019-11-20 14:28:00', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1299, 26, '2019-11-20 14:29:41', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1300, 1, '2019-11-20 14:29:59', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1301, 40, '2019-11-20 15:01:18', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1302, 37, '2019-11-20 15:02:56', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1303, 1, '2019-11-20 15:21:23', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1304, 45, '2019-11-20 15:21:50', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1305, 45, '2019-11-20 15:29:18', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1306, 46, '2019-11-20 15:29:41', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1307, 46, '2019-11-20 15:49:43', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1308, 44, '2019-11-20 15:50:30', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1309, 44, '2019-11-20 17:31:00', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1310, 1, '2019-11-21 10:33:26', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1311, 1, '2019-11-21 11:13:38', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1312, 40, '2019-11-21 11:14:38', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1313, 1, '2019-11-21 14:44:52', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1314, 1, '2019-11-21 14:51:04', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1315, 101, '2019-11-21 14:51:40', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1316, 102, '2019-11-21 15:00:30', '10.199.167.75', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1317, 101, '2019-11-21 15:37:01', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1318, 40, '2019-11-21 16:07:17', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1319, 40, '2019-11-21 17:29:31', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1320, 36, '2019-11-21 17:30:14', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1321, 1, '2019-11-22 09:46:42', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1322, 1, '2019-11-22 10:00:35', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1323, 102, '2019-11-22 10:50:43', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1324, 101, '2019-11-22 16:52:53', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1325, 101, '2019-11-22 17:19:47', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1326, 36, '2019-11-22 17:20:11', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1327, 36, '2019-11-22 17:22:01', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1328, 5, '2019-11-22 17:22:24', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1329, 5, '2019-11-22 17:26:30', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1330, 101, '2019-11-22 17:27:16', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1331, 101, '2019-11-22 17:29:58', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1332, 49, '2019-11-25 09:37:15', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1333, 101, '2019-11-25 10:23:28', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1334, 101, '2019-11-25 10:31:36', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1335, 36, '2019-11-25 10:31:59', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1336, 36, '2019-11-25 10:45:38', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1337, 5, '2019-11-25 10:45:57', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1338, 5, '2019-11-25 10:46:16', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1339, 28, '2019-11-25 10:46:39', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1340, 49, '2019-11-25 11:13:29', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1341, 102, '2019-11-25 11:13:50', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1342, 28, '2019-11-25 11:57:48', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1343, 101, '2019-11-25 11:58:19', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1344, 101, '2019-11-25 11:58:51', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1345, 22, '2019-11-25 11:59:09', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1346, 1, '2019-11-25 16:44:25', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1347, 1, '2019-11-25 17:21:34', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1348, 1, '2019-11-25 17:22:20', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1349, 1, '2019-11-26 16:39:23', '::1', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1350, 1, '2019-11-27 11:14:17', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1351, 1, '2019-11-27 16:29:55', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1352, 1, '2019-11-27 16:34:27', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1353, 22, '2019-11-28 11:30:43', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1354, 22, '2019-11-28 11:40:28', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1355, 40, '2019-11-28 11:40:51', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1356, 40, '2019-11-28 11:55:33', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1357, 1, '2019-11-28 11:55:47', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1358, 1, '2019-11-28 14:03:38', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1359, 40, '2019-11-28 14:04:02', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1360, 49, '2019-11-28 14:05:24', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1361, 40, '2019-11-28 14:07:11', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1362, 1, '2019-11-28 14:57:17', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1363, 1, '2019-11-28 14:59:56', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1364, 2, '2019-11-28 15:00:27', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1365, 2, '2019-11-28 16:22:53', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1366, 40, '2019-11-28 16:23:14', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1367, 49, '2019-11-28 16:35:20', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1368, 100, '2019-11-28 16:36:20', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1369, 40, '2019-11-29 09:41:20', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1370, 40, '2019-11-29 09:43:11', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1371, 49, '2019-11-29 09:43:38', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1372, 5, '2019-11-29 09:45:02', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1373, 5, '2019-11-29 09:45:45', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1374, 36, '2019-11-29 09:46:39', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1375, 40, '2019-11-29 10:25:33', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1376, 40, '2019-11-29 10:44:37', '10.199.165.145', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1377, 49, '2019-11-29 11:12:09', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1378, 36, '2019-11-29 11:13:59', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1379, 40, '2019-11-29 11:13:59', '10.199.165.145', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1380, 2, '2019-11-29 11:14:33', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1381, 2, '2019-11-29 11:14:50', '10.199.165.145', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1382, 2, '2019-11-29 11:15:14', '10.199.165.145', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1383, 2, '2019-11-29 11:20:40', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1384, 1, '2019-11-29 11:21:50', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1385, 1, '2019-11-29 11:24:24', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1386, 1, '2019-11-29 11:25:22', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1387, 2, '2019-11-29 11:31:30', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1388, 2, '2019-11-29 11:39:00', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1389, 22, '2019-11-29 11:39:17', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1390, 40, '2019-11-29 11:41:13', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1391, 22, '2019-11-29 11:43:45', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1392, 2, '2019-11-29 11:50:08', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1393, 2, '2019-11-29 11:50:31', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1394, 86, '2019-11-29 11:50:51', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1395, 86, '2019-11-29 11:51:00', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1396, 86, '2019-11-29 11:51:28', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1397, 86, '2019-11-29 11:54:12', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1398, 49, '2019-11-29 11:54:43', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1399, 49, '2019-11-29 11:54:51', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1400, 42, '2019-11-29 11:55:13', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1401, 42, '2019-11-29 11:56:10', '10.199.165.159', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1402, 40, '2019-11-29 11:56:20', '10.199.165.145', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1403, 39, '2019-11-29 11:56:32', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1404, 40, '2019-11-29 12:04:53', '10.199.165.145', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1405, 22, '2019-11-29 12:05:17', '10.199.165.145', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1406, 42, '2019-11-29 12:37:53', '10.199.165.159', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1407, 22, '2019-11-29 12:46:44', '10.199.165.145', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1408, 1, '2019-11-29 12:47:14', '10.199.165.145', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1409, 1, '2019-11-29 12:59:31', '10.199.165.145', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1410, 22, '2019-11-29 12:59:56', '10.199.165.145', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1411, 1, '2019-11-29 13:08:11', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1412, 1, '2019-11-29 13:13:49', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1413, 5, '2019-11-29 13:14:27', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1414, 5, '2019-11-29 13:15:21', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1415, 49, '2019-11-29 14:25:50', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1416, 40, '2019-12-02 10:01:35', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1417, 40, '2019-12-02 11:13:38', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1418, 36, '2019-12-02 11:14:08', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1419, 22, '2019-12-02 11:49:56', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1420, 22, '2019-12-02 11:53:40', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1421, 5, '2019-12-02 11:55:00', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1422, 5, '2019-12-02 14:24:28', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1423, 1, '2019-12-02 14:25:25', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1424, 22, '2019-12-04 15:30:20', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1425, 22, '2019-12-05 12:02:40', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1426, 22, '2019-12-05 14:51:59', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1427, 42, '2019-12-05 14:52:50', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1428, 42, '2019-12-05 14:53:52', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1429, 22, '2019-12-05 14:54:10', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1430, 22, '2019-12-05 14:58:17', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1431, 2, '2019-12-05 14:58:40', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1432, 2, '2019-12-05 15:00:49', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1433, 22, '2019-12-05 15:01:12', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1434, 2, '2019-12-06 09:40:52', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1435, 1, '2019-12-06 09:42:09', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1436, 1, '2019-12-06 09:58:40', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1437, 111, '2019-12-06 09:59:09', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1438, 1, '2019-12-09 09:44:09', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1439, 1, '2019-12-09 09:44:40', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1440, 2, '2019-12-09 09:45:09', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1441, 1, '2019-12-09 12:24:25', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1442, 22, '2019-12-09 14:34:19', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1443, 1, '2019-12-09 17:25:18', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1444, 1, '2019-12-09 17:25:32', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1445, 2, '2019-12-09 17:27:56', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1446, 40, '2019-12-10 09:59:35', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1447, 40, '2019-12-10 11:03:11', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1448, 2, '2019-12-10 11:03:38', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1449, 22, '2019-12-10 11:41:30', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1450, 22, '2019-12-10 12:16:20', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1451, 31, '2019-12-10 12:17:31', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1452, 31, '2019-12-10 12:26:41', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1453, 22, '2019-12-10 12:27:05', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1454, 22, '2019-12-10 12:28:15', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1455, 28, '2019-12-10 12:28:39', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1456, 28, '2019-12-10 12:29:26', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1457, 40, '2019-12-10 12:29:59', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1458, 1, '2019-12-12 09:54:17', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1459, 1, '2019-12-12 10:04:51', '10.199.165.163', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1460, 1, '2019-12-12 10:05:41', '10.199.165.163', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1461, 22, '2019-12-12 12:26:57', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1462, 1, '2019-12-12 16:19:13', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1463, 1, '2019-12-12 16:19:44', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1464, 22, '2019-12-12 16:20:02', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1465, 1, '2019-12-13 15:13:32', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1466, 1, '2019-12-13 15:39:08', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1467, 2, '2019-12-13 15:39:38', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1468, 2, '2019-12-13 15:40:07', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1469, 1, '2019-12-13 15:40:19', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1470, 1, '2019-12-13 15:43:26', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1471, 42, '2019-12-13 15:45:14', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1472, 42, '2019-12-13 15:47:27', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1473, 40, '2019-12-13 15:47:49', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1474, 40, '2019-12-13 15:52:52', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1475, 42, '2019-12-13 15:53:12', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1476, 42, '2019-12-13 15:54:50', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1477, 2, '2019-12-13 15:55:12', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1478, 2, '2019-12-13 15:56:24', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1479, 2, '2019-12-13 15:56:52', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1480, 40, '2019-12-13 15:57:25', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1481, 40, '2019-12-13 15:57:56', '10.199.167.77', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1482, 86, '2019-12-13 15:58:51', '10.199.167.77', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1483, 1, '2019-12-18 11:47:22', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1484, 1, '2019-12-18 11:49:35', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1485, 22, '2019-12-18 11:49:54', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1486, 22, '2019-12-18 11:50:46', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1487, 36, '2019-12-18 11:53:19', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1488, 1, '2019-12-30 09:37:35', '10.199.167.130', 'Login', 'Login Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1489, 1, '2019-12-30 09:38:08', '10.199.167.130', 'Logout', 'Logout Successfully', NULL);
INSERT INTO `ci_user_activities` VALUES (1490, 40, '2019-12-30 09:38:28', '10.199.167.130', 'Login', 'Login Successfully', NULL);

-- ----------------------------
-- Table structure for ci_users
-- ----------------------------
DROP TABLE IF EXISTS `ci_users`;
CREATE TABLE `ci_users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `role_category` int(11) NOT NULL DEFAULT 0,
  `region_id` int(11) NOT NULL DEFAULT 0,
  `school_id` int(11) NOT NULL DEFAULT 0,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `status_reason` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created` datetime(0) NOT NULL,
  `updated` datetime(0) NOT NULL,
  `last_login` datetime(0) NULL DEFAULT NULL,
  `is_password_changed` tinyint(2) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 112 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_users
-- ----------------------------
INSERT INTO `ci_users` VALUES (1, 1, 0, 5, 0, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', NULL, 1, '', '2019-05-15 00:00:00', '2019-10-14 15:30:29', '2019-12-30 09:37:35', 0);
INSERT INTO `ci_users` VALUES (2, 2, 3, 5, 0, 'hq-establish', '5be9434a65701d44e770708ef33a7d236e7a2865b5182c62e850cff019e2e501391c77e245b0caefc7edc9f3eda9406e57533d11b7aae71c64ba85789081f9c3', NULL, 1, '1', '2019-05-15 00:00:00', '2019-08-26 11:10:28', '2019-12-13 15:56:24', 0);
INSERT INTO `ci_users` VALUES (4, 3, 0, 35, 0, 'ro-mumbai', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', NULL, 1, '', '2019-05-21 12:42:33', '2019-09-06 10:01:31', NULL, 0);
INSERT INTO `ci_users` VALUES (5, 3, 0, 24, 0, 'ro-delhi', '66fa9fb73750d57098532f642554fceec65fafd6f4262f9778b05ea9b9e49f68d4a9f401e52234a8e437eb8727e61a0be9bd92eee9ae4453d05d45fe9cdbf5c6', NULL, 1, '', '2019-05-21 14:08:40', '2019-09-24 13:01:13', '2019-12-02 11:55:00', 0);
INSERT INTO `ci_users` VALUES (10, 6, 0, 0, 0, '10000', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'om@gmail.com', 1, '', '2019-07-05 12:36:22', '2019-09-03 11:20:59', '2019-08-27 10:13:43', 0);
INSERT INTO `ci_users` VALUES (11, 6, 0, 0, 0, '10001', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'fgdf@asd.gfh', 1, '', '2019-07-05 12:43:33', '2019-09-03 11:21:02', NULL, 0);
INSERT INTO `ci_users` VALUES (12, 6, 0, 0, 0, '2000', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'fghfdg@fgadg.ffd', 1, '', '2019-07-05 12:49:32', '2019-09-11 16:33:35', '2019-09-11 16:33:35', 0);
INSERT INTO `ci_users` VALUES (13, 6, 0, 0, 0, '10002', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 'abc@cde.com', 1, '', '2019-07-05 15:02:25', '2019-09-11 17:15:23', '2019-09-11 17:15:23', 0);
INSERT INTO `ci_users` VALUES (17, 5, 0, 20, 1146, 'kv-bbsr', 'ed271f17cd1f9509044df18aced3fd13d43e38fa7741b81068854ccf1de3eff090e192f03833df1f3c56e2eab2251ac5c11bad891fc8fd104763812e53cf2739', 'kv-admin@kvs.gov.in', 1, '', '2019-08-29 10:31:40', '2019-09-05 14:41:05', NULL, 0);
INSERT INTO `ci_users` VALUES (18, 6, 0, 0, 0, '10003', '4f1ab461aa9bd0cf09e46a27371f5cb52c2bbd3f49fab83f94cf89eadc7fe76756e5b6511bd6ce36c0cdf9e6209462539ed21c4c57fa710e5bad1002c375d794', 'fgdf@asd.gfh', 1, '', '2019-08-30 15:08:07', '2019-09-03 11:21:07', NULL, 0);
INSERT INTO `ci_users` VALUES (19, 6, 0, 0, 0, '10004', 'a97ab556e584f36106610a25ad5d5189daa1c9a64ea99edafcf09b5abb3434bffba4092f463e35c79d45010dd9168abaeab9606b74f79e1736ca593fb2e46c36', 'asit@gmail.com', 1, '', '2019-09-02 10:35:51', '2019-09-03 11:21:10', NULL, 0);
INSERT INTO `ci_users` VALUES (20, 6, 0, 0, 0, '10005', 'a97ab556e584f36106610a25ad5d5189daa1c9a64ea99edafcf09b5abb3434bffba4092f463e35c79d45010dd9168abaeab9606b74f79e1736ca593fb2e46c36', 'sid@gmail.com', 1, '', '2019-09-03 11:30:28', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (21, 6, 0, 0, 0, '100000', 'a97ab556e584f36106610a25ad5d5189daa1c9a64ea99edafcf09b5abb3434bffba4092f463e35c79d45010dd9168abaeab9606b74f79e1736ca593fb2e46c36', 'vinay@gmail.com', 1, '', '2019-09-03 11:38:52', '2019-09-03 11:50:59', '2019-09-03 11:50:59', 0);
INSERT INTO `ci_users` VALUES (22, 3, 0, 16, 0, 'ro-agra', 'bebee08e0b40acbd0256dac21e9fad57af2c7f87d881d7b3af0ddc4483892f04a8b25192044e531e379c64448aa935a290378efaaf31a121f6d925e7a91f9795', 'ro-agra@kvs.gov.in', 1, '', '2019-09-04 09:47:02', '2019-09-26 11:14:35', '2019-12-18 11:49:54', 0);
INSERT INTO `ci_users` VALUES (24, 6, 0, 0, 0, '100001', 'eb7788f7f4920f35f441a8f06ea886377c3950917bfab4e3b6ec8d4b6f085b34514287c1c3d7a9473c00e25d74424b5dc58f515e5b70c8a2860caf19beac8eb1', 'mm@kvs.org.in', 1, '', '2019-09-04 10:59:19', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (25, 6, 0, 0, 0, '100002', '7e768460feb7e64b9a3229126a0322154f0f2a64d1c80a2bad945b0ce2557334da8d702f0bd34d25c9c31be32a28c5b7b53a53edabc681a647676430dbe6640f', 'naveen.sehgal@gmail.com', 1, '', '2019-09-04 11:22:56', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (26, 5, 0, 24, 436, 'kv1437', 'c25a9a9b16e61df034477d513dae18febfa616c4b39b1e2f5b179b52b7c081596999827c7f05ca96e92cf3f3052635d97933c5eb0d22b6069de5ce40248172af', 'kv-delhi@kvs.gov.in', 1, '', '2019-09-05 09:42:03', '2019-09-26 11:59:12', '2019-11-20 14:28:00', 0);
INSERT INTO `ci_users` VALUES (27, 6, 0, 0, 0, '100003', '0eb58b77ac7c86d6294eb7121a41c88dbe202ebdde20584e48b8fd35cb90a84f0bf1c753c974516d089b3fd06cd17b2471f3f10e0bb232b97972dd54b5425bde', 'sagar@kvrkp.org.in', 1, '', '2019-09-05 09:46:47', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (28, 4, 0, 4, 0, 'zt-mumbai', '0064f8168ed33474618e43058409f78c83e1ae7129d3955db71f88630e0760ea7232a10ab9744900e247ec744772647bb912649eed213ba041015b84ee181861', 'zt-mumbai@kvs.gov.in', 1, '', '2019-09-05 15:43:19', '2019-09-27 14:30:44', '2019-12-10 12:28:39', 0);
INSERT INTO `ci_users` VALUES (29, 6, 0, 0, 0, '100004', '781b75c13b2556689ec9269f474e927ad933d069460ca2c7e3004b3ea2b3472218eccc146f7a97a8981d0ccb8526c6824882dcba6ba0be0948fdbf8997419ac1', 'kamal@kvs.org.in', 1, '', '2019-09-06 14:18:35', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (30, 6, 0, 0, 0, '100005', 'dd029ee1faa83d4c404532042c46e8fb4813b0b3ab243f93f48fc5bce8e2208c6c947f52fcdc34751d42b45a96f5b68e8ee38a6027b8f9529b38c9f5e74cec3b', 'pradeep@kvs.org.in', 1, '', '2019-09-06 15:18:45', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (31, 2, 1, 5, 0, 'hq-academic', 'ddaef06dd27a4f67aa2bfe178b7c7a9f4d3e281136cafe919c134383fa80e185b424c0046f6211e44192c21f3ce80f84cc14ddc096c7f6148a0928440bcf35a7', 'hq-academic@kvs.nic.in', 1, '1', '2019-09-12 15:17:46', '2019-10-01 15:43:03', '2019-12-10 12:17:32', 0);
INSERT INTO `ci_users` VALUES (32, 4, 0, 1, 0, 'zt-bhubaneswar', '51240077997a3498b9e230c2e4169a1312dd0cb2550f6f3b1cbe511d754be285c4bf2f95e9c6e191efcf2f84cc4653cb8f56f6422199a8e9309d67c38458728f', 'zt-bhubaneswar@kvs.gov.in', 1, '', '2019-09-23 12:38:25', '2019-09-23 12:52:11', NULL, 0);
INSERT INTO `ci_users` VALUES (33, 4, 0, 2, 0, 'zt-chandigarh', '225ebd58d3eca48ce9d5dbc970202719b3d8adb6179b0507e14135946aa1c97f472d567b71d760e3ac4241a52768d9a2cc4155d29f1bfa76dac2485f786e23bc', 'zt-chandigarh@kvs.gov.in', 1, '', '2019-09-23 12:54:12', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (34, 4, 0, 3, 0, 'zt-gwalior', '1792cdfadf16decc0a657ddf65cdc4768bf10f7390c96e895663686b2f96c33d316af0e77fdc23886882046d98c1944974441c3e72430f9ee1cb5fc91c4d9502', 'zt-gwalior@kvs.gov.in', 1, '', '2019-09-23 12:57:34', '2019-09-27 14:25:52', '2019-09-27 14:25:52', 0);
INSERT INTO `ci_users` VALUES (35, 4, 0, 6, 0, 'zt-mysore', '751d38adaa09cd1c9764dd8a506092e8d50844f4c70fd15d38a3649f14f0377937c4ff56f6399ab720665f43c2b2c3f9ea628ec9508cd9014c697ff46feacb63', 'zt-mysore@kvs.gov.in', 1, '', '2019-09-23 13:01:58', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (36, 3, 0, 17, 0, 'ro-ahmedabad', 'f26cc21fa9701decb34fe20522a73cfcd00e72bb70f40cd5b901b99e5ef396eee5ed5090cf3d78db70aa3a3ca93875861da869bc3354e1900733f4192600db32', 'ro-ahmedabad@kvs.gov.in', 1, '', '2019-09-23 13:14:20', '2019-10-01 15:12:31', '2019-12-18 11:53:19', 0);
INSERT INTO `ci_users` VALUES (37, 3, 0, 18, 0, 'ro-banglore', '3c6073220ee8a549c9d4f2a430153ee211b6ab023bf5cd466b7d3eca1320e4aefafbcf35354e3dd9310371b2c2698c7cd3f7ab9a0de713429faa4daa6e583e43', 'ro-banglore@kvs.gov.in', 1, '', '2019-09-23 13:18:09', '2019-09-24 10:25:42', '2019-11-20 15:02:57', 0);
INSERT INTO `ci_users` VALUES (38, 3, 0, 19, 0, 'ro-bhopal', 'af8760feb0816e8b7332e968057e225c7431a181ca81af56892b3313bb147d4cc6a08865866f04d14a7376178b4d8270c93f5ac5a455379cf3ccc847922b44c5', 'ro-bhopal@kvs.gov.in', 1, '', '2019-09-23 13:20:11', '2019-09-24 15:32:09', '2019-09-24 15:32:09', 0);
INSERT INTO `ci_users` VALUES (39, 5, 0, 17, 38, 'kv2194', '0273af58221aa0cf651cb8b9cfe9acf4110d4f9bcd3b7037910e2497a98049880375f88c55220629685ff33f6464367c476951e963052ae2a0af2a054da9d85f', 'kv-ahm-afsdarjee@kvs.gov.in', 1, '', '2019-09-23 15:08:30', '2019-10-01 15:35:02', '2019-11-29 11:56:32', 0);
INSERT INTO `ci_users` VALUES (40, 5, 0, 17, 39, 'kv1033', '1e0e7d673eb60c9898a3a053f82d67d070750796f43d6082b6dea03c59b3b18d75608ba1a80af9e885d2e6b9ca6609e0a5327a0ce11a076e78a7f5d65bdf8be7', 'kv-ahm-afsnalli@kvs.gov.in', 1, '', '2019-09-23 15:10:34', '2019-10-01 15:35:42', '2019-12-30 09:38:28', 0);
INSERT INTO `ci_users` VALUES (41, 5, 0, 17, 40, 'kv1028', '7a07697c37b489f0d83c31f503c4ad14f5d269578fa28417f22ccc1033e6d7d76db62096f6eab472aafce63bb6ef0b808478cd37b5d9c89210df398a72dc48a0', 'kv-ahm-afssamana@kvs.gov.in', 1, '', '2019-09-23 15:14:26', '2019-09-23 17:29:27', '2019-11-20 10:18:39', 0);
INSERT INTO `ci_users` VALUES (42, 5, 0, 16, 2, 'kv1357', '2b22c61a6e31f2f857f0d348cf1e69f891ad0538749856acb4aa9112a79fbdfaba4a779defce670973a8103c556004143e29c71f9383e5edb004f6364e80a4d7', 'kv-agr-afschand@kvs.gov.in', 1, '', '2019-09-23 15:19:18', '2019-09-24 16:45:45', '2019-12-13 15:53:12', 0);
INSERT INTO `ci_users` VALUES (43, 5, 0, 16, 4, 'kv1707', 'c201f583a51d5de84c2b69b68392a90125d98981ce3ea066449f0bc1aca5cd87f16daab45dc11e91cc39469cc306c07329fef512803fe0e2149b58828f00ace9', 'kv-agr-aligarh@kvs.gov.in', 1, '', '2019-09-23 15:24:04', '2019-09-25 17:06:16', '2019-11-20 10:57:58', 0);
INSERT INTO `ci_users` VALUES (44, 5, 0, 18, 85, 'kv1054', 'c2547ec909f41fb663fda8c0e85420aedec751a4983679023047df29bf67d87eb0c9f7179d48bd34f07bfb01f6d3bd21f80b558cb1b549c32a9e9f73db48dca8', 'kv-bgl-afsyelah@kvs.gov.in', 1, '', '2019-09-23 15:41:53', '2019-09-24 11:35:08', '2019-11-20 15:50:30', 0);
INSERT INTO `ci_users` VALUES (45, 5, 0, 18, 90, 'kv2117', '42b7170271d80a08a8b004dc99dc841e9ffd6d0805634df5c1d575690259f5181fdc078106ac15b12245746233aceb8a25359493a3a8309f4ae11510979c4c8d', 'kv-bgl-bagalkot@kvs.gov.in', 1, '', '2019-09-23 15:46:14', '2019-09-24 11:53:29', '2019-11-20 15:21:50', 0);
INSERT INTO `ci_users` VALUES (46, 5, 0, 18, 96, 'kv2301', '4964f7de6da60e7da73c2fd73a14ce72e9e2c248051fbe2659108702ad021a0c5a9a786a2ddda0b0740af61ca5d0986cb53037dcf066b680ed58fe8fdc0dccba', 'kv-bgl-chikodi@kvs.gov.in', 1, '', '2019-09-23 15:57:55', '0000-00-00 00:00:00', '2019-11-20 15:29:41', 0);
INSERT INTO `ci_users` VALUES (47, 5, 0, 19, 135, 'kv1087', 'ac1c3be1e242494bde646f36ab6348db4d49f65ee75436714d9e6a4f30880c3444a86e03f67ae5dfe3e299fcbe45f8d56964ccd84bee0d90cc40525432dae066', 'kv-bho-afsamla@kvs.gov.in', 1, '', '2019-09-23 16:01:38', '2019-10-01 12:07:42', '2019-10-01 12:07:42', 0);
INSERT INTO `ci_users` VALUES (48, 5, 0, 19, 141, 'kv1091', 'eecb266d31d9af9969f8eca6ce9e6f84baeef80ee33455fb1cd7e602c3980b4b870058221bb754ff6d79e5265f911956aed7bf22404aef169a6e0cb10196a936', 'kv-bho-baira@kvs.gov.in', 1, '', '2019-09-23 16:30:22', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (49, 5, 0, 24, 413, 'kv1424', 'aa9d252dd148a3ece79187833800135d2cc2950c54c458cf390a23bc529c8e4f51208873fd212048a5d7f2413699396b87a7da0a4dc38a1ce6b121a27d286148', 'kv-del-janak@kvs.gov.in', 1, '', '2019-09-23 16:34:44', '2019-10-01 15:34:10', '2019-11-29 14:25:50', 0);
INSERT INTO `ci_users` VALUES (50, 6, 0, 0, 0, '100006', 'b2278b1dd6ef88331ed02632ecdf9c14eb174ebda8d4396539b9ffde458010e0d0a9cbf945d4a33e6d74c3d5297a6d848a42cc4641efda38bcf2ba066d3d30b4', 'manoj@kvs.org.in', 1, '', '2019-09-23 16:45:16', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (51, 6, 0, 0, 0, '100007', 'b2d22ce0b63f4ee0651c4615e30d7fc8273abfc9b0ebacae37db9c8958692179c73e81c76bbc3bc76d429b032b414a2dabe7307590e6a9cf35f7bf4c5aee0489', 'vijay09@kvs.gov.in', 1, '', '2019-09-23 16:50:56', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (52, 6, 0, 0, 0, '100008', '0adc331bec8953bb5e07845075b9ff8b07cbab70af0f0b6ba17e39d5eb99bd9ae93556695baa1478b66d412da5b2d07e64e350ea53bcfb3bcb52940c4347553a', 'kanika@kvs.nic.in', 1, '', '2019-09-23 17:03:13', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (53, 6, 0, 0, 0, '100009', 'deddc873c787e64d69965ce51b1cf11f6601a7da5171c16adeed9943fb3879e4d10e355cdc4376060af8138e53a01029274e32caba9da8dbd2a1dce96997b3df', 'ritu458@kvs.gov.in', 1, '', '2019-09-23 17:06:01', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (54, 6, 0, 0, 0, '100010', '3c963e8bbdd8ee65efb124679089f6669cbdf943130141f92732a5c38f1d97f972e256ba21372f44e079d7528848df3ea28a32976f6550a7e3a1d7353d3c07dc', 'alka@kvs.nic.in', 1, '', '2019-09-23 17:19:40', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (55, 6, 0, 0, 0, '100011', 'ae3e2c202631639d02160cde5bf83a25a414a7816ecf6193b48ca8a8f9b0983e82f5e301610e2fb10d12528bacddd699582198be8f86c5bc09a887233fcaf767', 'Aman@kvs.nic.in', 1, '', '2019-09-23 17:28:24', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (56, 6, 0, 0, 0, '100012', '3e8e8bc94a537df4b0685a2cf9900a8c2725d11b08698447e9e32c6ddd1353c2b8d76737c4102f8d1a4588b8a4d5bd4303182706534ac76d5c0160a2d3478f58', 'gudiya.thakur@kvs.gov.in', 1, '', '2019-09-23 17:31:48', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (57, 6, 0, 0, 0, '100013', '854de785608ea1a3a96cd4f08c53793e59e44eaf28497b9280f49bb9939a44c48bfd66f074ff2cdc5667342dc139f1c1f86eacd8afd440ebb5adecbba49c1c67', 'dev.asit@kvs.gov.in', 1, '', '2019-09-23 17:40:37', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (58, 6, 0, 0, 0, '100014', 'faaeadd430ee0dce0099d1931cd37979aacf7181be1b7db5310b639e0767a6cfef615fa2330a8c1c1a3eeec25de04bfc1ae17e6f9570d31323b62b2000364490', 'tripti.rani@gmail.com', 1, '', '2019-09-24 10:29:16', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (59, 6, 0, 0, 0, '100015', '854880f1a011efa2d3687cc8bc04b2d916b254ffd62fb94c2c890192077cbc31fc2cf32ce15ce729a76d50a3e9a0674168f7a9d0e65dc968af38d5caf264034a', 'sharma.gaurav@gmail.com', 1, '', '2019-09-24 10:41:10', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (60, 6, 0, 0, 0, '100016', '91aedb9628e68a1e3127d8b82997738b636ae35dec4fa5c71981028bc463315fe90bd71601e44e450727e40cddc0a63407a9a52299652adbb3d0d54807e4956c', 'sonam2mishra@kvs.gov.in', 1, '', '2019-09-24 11:09:47', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (61, 6, 0, 0, 0, '100017', 'db5a81181a74b79c24e72a2e11ccaf0851702a0c748c078e6711abf14edd2a3a1159f4112eb9da6250598e4453391fd16ac922b3bbf4312ab5ef58f201fa0847', 'abhi.768@gmail.com', 1, '', '2019-09-24 11:38:41', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (62, 6, 0, 0, 0, '100018', '1526d87c80c12013fae7ac7c845df9103ab1bd634214013e90b3d82520a02a4d20b5094a6fdf35a2de38a2da5cd325f675ea6c55fb1f4b83406dfcdccf525db6', 'pradeep.kumar@gmail.com', 1, '', '2019-09-24 12:03:33', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (63, 6, 0, 0, 0, '100019', '7984b7c2d4755165e544de0d6a60837c509e6d6fe5a2ee0c11326c1f5bf09974d46ce78617bbe3c48ce6628a59ee9c64f7769682f20414561e61903ead1c56e0', 'anu.65767@kvs.gov.in', 1, '', '2019-09-24 12:11:18', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (64, 6, 0, 0, 0, '100020', 'de7c0aa296982bb11bb5efa016b2db6728a4ff6883dda0561b50d84dacef7729d4254cad1134d08eb3a304027c81fa5b4a34ff05c31c0f1b08f04a9d15e04ef8', 'praksh.singh@kvs.gov.in', 1, '', '2019-09-24 12:35:54', '2019-09-24 14:21:42', '2019-09-24 14:21:42', 0);
INSERT INTO `ci_users` VALUES (65, 6, 0, 0, 0, '100021', '33ae716bf411db8a039ee74871c584a1a9db415fb3bf059e29d1e4b4b0a96bb516194f4a058fa6a565c99a04fa9c0e6063517ffb6b5b1f9551c6a64210a9b9e4', 'kamalkant@kvs.gov.in', 1, '', '2019-09-24 13:04:41', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (66, 6, 0, 0, 0, '100022', '755321604256dffaaaa477b99d89257edf7a035548147257590d0b4228743a37c530c53a0cf6321d465291feb311a0978141ba2e3db0ab2dd6d1a3fe117117f7', 'vandana.palawat@gmail.com', 1, '', '2019-09-24 15:00:39', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (67, 6, 0, 0, 0, '100023', '78facb2219147dc93534c6d774be723f480b03d52a4b6fd3d29735c12c93af555206fa62a397d887bb15ad808450fab11a9ac58987c75a0ff06541021efb487d', 'rohankumar@kvs.gov.in', 1, '', '2019-09-24 15:18:56', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (68, 6, 0, 0, 0, '100024', '4a65ff82f15fa4dab7fa479701e9f3b4fcd41de72f163666a1eb6828e3068fc4d6e486fc58a575b538f98776ab7cbf50740c263fc9bb8e791d7b795a606a9897', 'priti1992@gmail.com', 1, '', '2019-09-24 15:41:03', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (69, 6, 0, 0, 0, '100025', '3bf6f2eb31408eeeec10c0e671d14b638e8d05f8f1b55a58b863dd715732344b7431f2a165ffe13ba87b592a522b4dff19ace21ef71c25080a6c0850021eb4c0', 'hgsdgawdhs@jehr4wr.fdhes', 1, '', '2019-09-24 16:01:51', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (70, 6, 0, 0, 0, '100026', 'b24651f2b85dc1da70b7b7903bb1032ab18894558668c5f0895923f8ac638badd694b5996740a1c2c1a5f05899ab6637998694cb8b7ed8ffa52d65365b6bdf7d', 'asgihsj@hok.bjj', 1, '', '2019-09-24 16:58:10', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (71, 6, 0, 0, 0, '100027', 'c54705021fb7ad83afdab95ae3e68f69493f7f9d2496a91350557f80dc880625d5061cdf752e97e6bad878118f9af0568bccaccd794ae9c4cf6bcb311b924e23', 'pravenn@kvs.gov.in', 1, '', '2019-09-25 12:31:39', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (72, 6, 0, 0, 0, '100028', '23eb102d42af1f87fd269d44641009158fd497a29a7a5b51ae2491702d3043450201f852e58beca1bdf5533344d0889fe64941cd69012583b0540cd2a043bf28', 'aksha@kvs.nic.in', 1, '', '2019-09-25 14:39:09', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (73, 6, 0, 0, 0, '100029', 'c0d98d57959aaa0dfd1df903b33b91ca8e0306e2bc8d41501792280a1a069de2ed6c4fa51d82ac7b08010fd11016fd55fb835b2abd970e1694c085a364d23517', 'alka@kvs.nic.in', 1, '', '2019-09-25 14:54:12', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (74, 6, 0, 0, 0, '100030', '4400c52c1c16ca5b55abd04714f57c7ce510baae617ec0733749642e43fb67bd4c4e1f14275910fe85e741fea06e5b2d13028be84ed62920c7a9fb362fffec2c', 'ritesh.986@gmail.com', 1, '', '2019-09-25 15:07:57', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (75, 6, 0, 0, 0, '100031', '9b614ff81be1460a602183d1e69d78f68f1989ade303d2addde4b18d88fc1e6e38fac02cbc4e27f47a72c4bc6a068d8657d22587ca07b2ceec18ac6058a5bdb8', 'alok@ziet.nic.in', 1, '', '2019-09-25 15:08:32', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (76, 6, 0, 0, 0, '100032', '92c492d6a1753475c2dda7ea47766eef51ab402d55c3084e8e7ec857830d98bcdbfc02f23011f6bb2dcbca85bbbf81f7441de3a2c384642bf7770862469a9c20', 'ritu.verma@gmail.com', 1, '', '2019-09-25 15:11:43', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (77, 6, 0, 0, 0, '100033', '9ae28eecffd3a0bd14f82356aaba661857d9a62bb42825f8456d091db614b63f2e31c3e2fc7495f8619ecae0ddee22330ac307013fc1103b0c650b04f189a6f7', 'shanker@kvs.nic.in', 1, '', '2019-09-26 12:37:39', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (78, 6, 0, 0, 0, '100034', 'ec2b6d2e4875ada832b2a544a478aec2a5fa7cce987f37524c0a27518bc085033e711dd8247383a06dd9bab6ae2bd1c2a2675eaa8d24e4036abd0a1ce94bf1e6', 'basant768@gmail.com', 1, '', '2019-09-27 10:29:30', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (79, 6, 0, 0, 0, '100035', '76f76e78ec19d2afec6e2a86d2eb723e2574a3d4029bae4d54a890ceacc7931ec0a563b88a7bc4db095e11004e430a88273811517b989c295cc6c09495a7c858', 'ramesh768@gmail.com', 1, '', '2019-09-27 11:21:59', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (80, 6, 0, 0, 0, '100036', 'e21972412e150a773afef37cf5f197369ec3b59bbb4359199ed534ef37ca83c1fb93b10354415062d53361e3f03d4a841c0dbd77df1bf49aca27568e89556268', 'neha12@gmail.com', 1, '', '2019-09-27 11:28:43', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (81, 6, 0, 0, 0, '100037', '4031bbd22ec7f6809bacccb4c84e8139f39633db0aacdcf47d0b547f5bff0c0f12440042ff8ea8835eef6d4cc6f786f0163713b6a682af73fa376e8c24d85adc', 'priya@gmail.com', 1, '', '2019-09-27 12:33:41', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (82, 6, 0, 0, 0, '100038', '3a67348b80976dcee212762a3a9fd9a54840a7601d20a8a5d1e9d0ba824abb4d775dd6949cb2d42fffd0655ea43f02be83f4d4bc1181ff67bf9bc266aecf2216', 'asit.dev@gmail.com', 1, '', '2019-09-27 12:44:23', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (83, 6, 0, 0, 0, '100039', '604614997cce5d7c68e6f7b2fd488a7da33d2aad193e128e61b28554232f38ec9e752862370fe0b6085d23556ecd17a336b92ca68710edf4143e367b8266d71d', 'vikrant@gmail.com', 1, '', '2019-09-27 14:29:52', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (84, 6, 0, 0, 0, '100040', '83f9195ddb2356b515933ff7e0a818f9c0608004648959e16ab4527b4056172ef3fb1a86f759a8c84fca2c7bed2a2cf9536b965e8c7228b9afa0ae42fb16c489', 'sidharth@gmail.com', 1, '', '2019-09-30 10:01:44', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (85, 2, 5, 5, 0, 'hq-personnel', 'b8540981b0a7b155bbfa1c84cd18149b3de0538ddeb0b1c8b33cd4f1a2da75bf4df501b1a37a9494203f1ea54402110ca36b2e5021d5f1729b8d4da5625ce13a', 'hq-personal@kvs.nic.in', 1, '1', '2019-09-30 10:08:23', '2019-09-30 17:07:41', '2019-11-20 14:11:01', 0);
INSERT INTO `ci_users` VALUES (86, 2, 2, 5, 0, 'hq-admin', '9570bcce316ab475fa00eb290cb73b3799d07c78b17e92c65ccd478dcd5ec5598da96a9291d470d14037728b0686a85e337ed5d2f6140d3e555be13c4ef169af', 'hq-adminstrator@kvs.nic.in', 1, '1', '2019-09-30 10:50:12', '0000-00-00 00:00:00', '2019-12-13 15:58:51', 0);
INSERT INTO `ci_users` VALUES (87, 2, 6, 5, 0, 'hq-training', 'd45ff3acc125c03275a270bd7090695dfeac2e5994d4980b395a881888bbc57c244b9af3c3ad36f6c3b2d81b6e07dd716c99fa0d9557371e486e0cf26e4af833', 'hq-training@kvs.nic.in', 1, '1', '2019-09-30 10:51:17', '0000-00-00 00:00:00', '2019-11-20 12:24:03', 0);
INSERT INTO `ci_users` VALUES (88, 2, 4, 5, 0, 'hq-finance', 'aa6fba63f06d0238f6781d49f585f0713e7b290cbb9b9b516edb993fd167eee53e06c7b7e28a30e23a0ea43f43333afd44b36af3acceca49c3fe09ec5713faca', 'hq-finance@kvs.nic.in', 1, '1', '2019-09-30 10:52:56', '0000-00-00 00:00:00', '2019-11-20 12:24:42', 0);
INSERT INTO `ci_users` VALUES (89, 2, 7, 5, 0, 'hq-works', '4715200306d4374dccdb7d7a1d4b8124ab354e53ea44afeb315e09d541272283b90ec5a279be28b10d82b3b7f998545ba7b69250a490cb6a1ff7032d551ae971', 'hq-works@kvs.nic.in', 1, '1', '2019-09-30 10:53:43', '2019-09-30 10:54:14', '2019-11-20 12:25:12', 0);
INSERT INTO `ci_users` VALUES (90, 6, 0, 0, 0, '100041', 'd91f1b44c801eb0e99a4cd65f7e7d2459df9da89b9550597041e3ea5abc8cb8e971e4f133c95294dd347999268bee68cf3235eee164f9e1c9761bfab45bad86d', 'sachin@kvs.nic.in', 1, '', '2019-09-30 12:01:34', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (91, 6, 0, 0, 0, '100042', '9ecd9bee149f00eb44c28cea6e997153f28fdabff1fde8e14a8ae71523703d64ba3d34453fc6bd8765ffa4321acb5c0a6268fec545d824274afcb7cb0acd28ee', 'ramesh7f68@gmail.com', 1, '', '2019-09-30 17:12:06', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (92, 6, 0, 0, 0, '100043', '194e11b9c841b86b0d8ff23f7bf128c009bb25807b1b98177b571b833f64f57ce1a3970f72aab2478849b90ad2096db0792273162e9d68bea2a125532dd73cab', 'priti@gmail.com', 1, '', '2019-09-30 17:22:55', '2019-10-01 11:55:50', NULL, 0);
INSERT INTO `ci_users` VALUES (93, 6, 0, 0, 0, '100044', '3895e90bd165b89015d4f94f2793e6dc24d7cfde49c8c23bd6b953437702f4bd580afad92f07e29cc02d4bf3c0c81b7bf62dde9e959db65fad529adcbf4fa28c', 'nehasingh@gmail.com', 1, '', '2019-10-01 12:13:26', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (94, 6, 0, 0, 0, '100045', '12345678', 'shiv@gmail.com', 1, '', '2019-10-01 12:13:26', '2019-10-01 17:17:05', NULL, 0);
INSERT INTO `ci_users` VALUES (95, 6, 0, 0, 0, '100046', '21cc63caee4989aabff2850aa560ae67115bbba35d366822c5608a73dcdf0ea0b451ecd366455963f5c505452d0f956b19ef471c40f691b6bcb907c6177ceb1b', 'khanak@gmail.com', 1, '', '2019-10-17 10:35:20', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (96, 6, 0, 0, 0, '100047', '3b062fda8f4129ded7f72c210c83de9d03ab6f3e574065ac2b37cbe6fa9ebef8b5ad06e4bebb8e10e518c804a54d8875179237311f8d38f86b511bb0c6cb1dd9', 'rahul92@gmail.com', 1, '', '2019-10-17 10:36:14', '0000-00-00 00:00:00', '2019-10-21 13:03:31', 0);
INSERT INTO `ci_users` VALUES (97, 6, 0, 0, 0, '100048', '8caf1de8079acec6333c80cded3f1afabb811ccf06a046faf929fc5b8e2bc34b86745241f405dbe2e5b02822bccdfd2617654e3d65292bdb0e02bf3c74e442ba', 'ajaykumar@gmail.com', 1, '', '2019-10-22 15:41:25', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (98, 6, 0, 0, 0, '100049', 'fd9972d166b3fcb12141845a71f8009fec0df8126f89ba9e6c598cce21ab6ace686a290b777aa789d7cb8c21c447777cb3115321df64c93c02cf504e7e937fa8', 'anjuverma@kvs.gov.in', 1, '', '2019-11-19 12:18:38', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (99, 6, 0, 0, 0, '100050', 'afc9a62babdf18159dbf2aff0cb278254d083a42b7e45d7189922a5a06e85fcc7063b8bd15238876082e5214fac0e00d43053f9e8225211cfe18fbe3a708a396', 'neha124@gmail.com', 1, '', '2019-11-20 11:12:08', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (100, 6, 0, 0, 0, '100051', '4480808b08482dd5146d90520e851c756f5d68f21698d34d2937c3c5a1e37730bb50811a210d1a5643d3e0739ba58d32175eca14697e3e1f0ecd1a7d06caf721', 'satish@gmail.com', 1, '', '2019-11-20 11:19:24', '0000-00-00 00:00:00', '2019-11-28 16:36:20', 0);
INSERT INTO `ci_users` VALUES (101, 3, 0, 39, 0, 'ro-silchar', 'ddb146adb67f8e0349b820e907acd7a85fe4a93196fd888af75c99c0eda6ced05046e12b2c0a06b0c649a60555165100ce249f316684f11723510731fac65830', 'ro.silchar@kvs.in', 1, '', '2019-11-21 14:46:40', '0000-00-00 00:00:00', '2019-11-25 11:58:19', 0);
INSERT INTO `ci_users` VALUES (102, 5, 0, 39, 1111, 'KV1855', 'cff0b040af800836a25ebaf2b8c88023b7248695a4635417f27c023196a4eee086269143b0b6ee263808d2d78d1169315f892169ba98241feb76caa02b672741', 'kv1855@kvs.in', 1, '', '2019-11-21 14:49:02', '0000-00-00 00:00:00', '2019-11-25 11:13:50', 0);
INSERT INTO `ci_users` VALUES (103, 6, 0, 0, 0, '100052', '3e4a9dea043fef0b9fe529cc18bd80c8631f20a349df567b1469696d24ee261fd912e16f6d97cdbcd49c5dc56096c9083e565f82b5dd34582b39177b1c7715e3', 'a@gmail.com', 1, '', '2019-11-21 15:18:57', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (104, 6, 0, 0, 0, '100053', 'e20fac1a9a9683e690ee1e5f3e9c046d54839bc7cdaa4078283be5707980423c1a72eb4f1103693b5e7f7df2df5d0b051fa140044462b062836419e295e8b4ae', 'rahul@gov.in', 1, '', '2019-11-29 10:14:34', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (105, 6, 0, 0, 0, '100054', 'cf2e23393bdfc891e7ff4445c28b6bbbf057a3a4be6533e3c6990932f15e2f85b5a00128b391970534cea7e34aa3f807698f91fffa31d1da96d2eb82feb7a66d', 'ananya@gov.in', 1, '', '2019-11-29 11:04:52', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (106, 6, 0, 0, 0, '100055', '7e1797603d46f9493d4ec8f00ef9cfd022af12a5f84cdd2138e697c811dd95092e216147f7947c39a108e9d1b75186eaaebbd45022f0383464dda064dd27a9ba', 'kumar.sidhartha@mtsindia.in', 1, '', '2019-11-29 11:06:57', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (107, 6, 0, 0, 0, '100056', 'b586371e442b4fccb7f2b99549453ba613a2424ab3b66aa48a4cc6fd8f70acd20c998e2bc774bfe93e47d2981289e402773c88aef41e5714872c779bb5bad777', 'smita@jyoti.com', 1, '', '2019-11-29 12:33:30', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (108, 6, 0, 0, 0, '100057', '2f05717da0d3e60c82bc1f6220c0c02f367ba3ec7bf548a31dc2c36c52fbac61589426d5b4cf7d3745d130c43d14c2a4d495b4417fa71c8ffdaf56f435f9223d', 'Vijay.kumar@gov.in', 1, '', '2019-11-29 13:14:28', '0000-00-00 00:00:00', NULL, 0);
INSERT INTO `ci_users` VALUES (109, 5, 0, 33, 873, 'kv1898', '5f192813ab88183a823d69daf6e88972bd737fff2f33658ff7507cddfc53f5ffed13fbaef542e383da10ca0877ad447cf6695e2daab83ee04801bbcea7e79456', 'kv-ahm-afsnalli@kvs.gov.in', 1, '', '2019-09-23 15:10:34', '2019-10-01 15:35:42', '2019-12-02 10:01:35', 0);
INSERT INTO `ci_users` VALUES (110, 5, 0, 33, 872, 'kv1897', 'c99d39be58b4e798498e601868e09874f8d8f22d8c7b5f0bb4f2f28c6ceb9f9e219838eb871281d4ba978e0b07b8f20e3bb4345229737ff27a9ac6b56dde6289', 'kv-ahm-afsnalli@kvs.gov.in', 1, '', '2019-09-23 15:10:34', '2019-10-01 15:35:42', '2019-12-02 10:01:35', 0);
INSERT INTO `ci_users` VALUES (111, 5, 0, 33, 874, 'kv1487', '7628c5de4e45fdb5b8f6167c77375e4e9a2048144e0b99646343f8892ae40344ed16c32c8358f62624177d0cb8071d7d0b9a916ff1572b6e4fb4acf9e3d2689f', 'kv-ahm-afsnalli@kvs.gov.in', 1, '', '2019-09-23 15:10:34', '2019-10-01 15:35:42', '2019-12-06 09:59:09', 0);

-- ----------------------------
-- Table structure for ci_vacancy_master
-- ----------------------------
DROP TABLE IF EXISTS `ci_vacancy_master`;
CREATE TABLE `ci_vacancy_master`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NULL DEFAULT NULL,
  `type` int(11) NULL DEFAULT NULL,
  `designation` int(11) NULL DEFAULT NULL,
  `designation_type` int(11) NULL DEFAULT NULL COMMENT '1-Teaching 2-NonTeaching',
  `subject` int(11) NULL DEFAULT NULL,
  `sanctioned_post` int(11) NULL DEFAULT NULL,
  `inposition_post` int(11) NULL DEFAULT 0,
  `created_on` timestamp(0) NULL DEFAULT NULL,
  `updated_on` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `status` int(11) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `UNIQUE_DESIG`(`code`, `type`, `designation`, `designation_type`, `subject`) USING BTREE COMMENT 'UNIQUE VACANCY RECORD'
) ENGINE = InnoDB AUTO_INCREMENT = 136 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ci_vacancy_master
-- ----------------------------
INSERT INTO `ci_vacancy_master` VALUES (1, 2194, 5, 6, 1, 11, 10, 2, NULL, '2019-11-20 10:17:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (2, 1033, 5, 6, 1, 11, 10, 4, NULL, '2019-12-13 15:52:46', 1);
INSERT INTO `ci_vacancy_master` VALUES (3, 1028, 5, 6, 1, 11, 10, 1, NULL, '2019-11-20 10:21:30', 1);
INSERT INTO `ci_vacancy_master` VALUES (4, 1357, 5, 6, 1, 11, 10, 0, NULL, '2019-12-13 15:46:55', 1);
INSERT INTO `ci_vacancy_master` VALUES (5, 1707, 5, 6, 1, 11, 10, 0, NULL, '2019-11-20 10:58:25', 1);
INSERT INTO `ci_vacancy_master` VALUES (6, 1054, 5, 6, 1, 11, 10, 1, NULL, '2019-11-20 15:56:58', 1);
INSERT INTO `ci_vacancy_master` VALUES (7, 2117, 5, 6, 1, 11, 10, 1, NULL, '2019-11-20 15:24:32', 1);
INSERT INTO `ci_vacancy_master` VALUES (8, 2301, 5, 6, 1, 11, 10, 0, NULL, '2019-11-20 15:30:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (9, 1087, 5, 6, 1, 11, 10, 4, NULL, '2019-10-01 12:17:05', 1);
INSERT INTO `ci_vacancy_master` VALUES (10, 1091, 5, 6, 1, 11, 10, 4, NULL, '2019-09-27 11:18:08', 1);
INSERT INTO `ci_vacancy_master` VALUES (11, 2194, 5, 8, 1, 10, 10, 2, NULL, '2019-11-20 10:17:18', 1);
INSERT INTO `ci_vacancy_master` VALUES (12, 1033, 5, 6, 1, 2, 10, 1, NULL, '2019-11-20 10:04:41', 1);
INSERT INTO `ci_vacancy_master` VALUES (13, 1028, 5, 8, 1, 10, 10, 0, NULL, '2019-11-20 10:21:35', 1);
INSERT INTO `ci_vacancy_master` VALUES (14, 1357, 5, 8, 1, 10, 10, 1, NULL, '2019-11-20 10:56:54', 1);
INSERT INTO `ci_vacancy_master` VALUES (15, 1707, 5, 8, 1, 10, 10, 1, NULL, '2019-11-20 11:12:08', 1);
INSERT INTO `ci_vacancy_master` VALUES (16, 1054, 5, 6, 1, 10, 10, 1, NULL, '2019-11-20 15:57:00', 1);
INSERT INTO `ci_vacancy_master` VALUES (17, 2117, 5, 6, 1, 10, 10, 1, NULL, '2019-11-20 15:28:05', 1);
INSERT INTO `ci_vacancy_master` VALUES (18, 2301, 5, 6, 1, 10, 10, 0, NULL, '2019-11-20 15:30:28', 1);
INSERT INTO `ci_vacancy_master` VALUES (19, 1087, 5, 8, 1, 10, 10, 4, NULL, '2019-09-27 11:18:09', 1);
INSERT INTO `ci_vacancy_master` VALUES (20, 1091, 5, 8, 1, 10, 10, 4, NULL, '2019-09-27 11:18:09', 1);
INSERT INTO `ci_vacancy_master` VALUES (21, 2194, 5, 6, 1, 4, 10, 1, NULL, '2019-11-20 10:16:16', 1);
INSERT INTO `ci_vacancy_master` VALUES (22, 1033, 5, 6, 1, 10, 10, 4, NULL, '2019-11-29 13:14:28', 1);
INSERT INTO `ci_vacancy_master` VALUES (23, 1028, 5, 6, 1, 16, 10, 1, NULL, '2019-11-20 10:21:27', 1);
INSERT INTO `ci_vacancy_master` VALUES (24, 1357, 5, 6, 1, 10, 10, 0, NULL, '2019-11-20 10:56:09', 1);
INSERT INTO `ci_vacancy_master` VALUES (25, 1707, 5, 6, 1, 10, 10, 0, NULL, '2019-11-20 10:58:25', 1);
INSERT INTO `ci_vacancy_master` VALUES (26, 1054, 5, 6, 1, 4, 10, 0, NULL, '2019-11-20 15:57:03', 1);
INSERT INTO `ci_vacancy_master` VALUES (27, 2117, 5, 6, 1, 4, 10, 1, NULL, '2019-11-20 15:24:22', 1);
INSERT INTO `ci_vacancy_master` VALUES (28, 2301, 5, 6, 1, 4, 10, 1, NULL, '2019-11-20 15:30:08', 1);
INSERT INTO `ci_vacancy_master` VALUES (29, 1087, 5, 6, 1, 4, 10, 4, NULL, '2019-09-27 11:18:09', 1);
INSERT INTO `ci_vacancy_master` VALUES (30, 1091, 5, 6, 1, 4, 10, 4, NULL, '2019-09-27 11:18:09', 1);
INSERT INTO `ci_vacancy_master` VALUES (31, 2194, 5, 8, 1, 1, 10, 0, NULL, '2019-11-20 10:17:22', 1);
INSERT INTO `ci_vacancy_master` VALUES (32, 1033, 5, 8, 1, 11, 10, 0, NULL, '2019-11-20 10:09:49', 1);
INSERT INTO `ci_vacancy_master` VALUES (33, 1028, 5, 8, 1, 1, 10, 0, NULL, '2019-11-20 10:21:32', 1);
INSERT INTO `ci_vacancy_master` VALUES (34, 1357, 5, 8, 1, 11, 10, 0, NULL, '2019-11-20 10:56:14', 1);
INSERT INTO `ci_vacancy_master` VALUES (35, 1707, 5, 8, 1, 11, 10, 0, NULL, '2019-11-20 10:58:25', 1);
INSERT INTO `ci_vacancy_master` VALUES (38, 2301, 5, 6, 1, 1, 10, 0, NULL, '2019-11-20 15:30:53', 1);
INSERT INTO `ci_vacancy_master` VALUES (39, 1087, 5, 8, 1, 1, 10, 4, NULL, '2019-09-27 11:18:09', 1);
INSERT INTO `ci_vacancy_master` VALUES (40, 1091, 5, 8, 1, 1, 10, 4, NULL, '2019-09-27 11:18:09', 1);
INSERT INTO `ci_vacancy_master` VALUES (41, 1899, 3, 38, 2, 0, 10, 1, NULL, '2019-11-20 10:30:30', 1);
INSERT INTO `ci_vacancy_master` VALUES (42, 2268, 3, 37, 2, 0, 10, 0, NULL, '2019-11-20 11:00:21', 1);
INSERT INTO `ci_vacancy_master` VALUES (43, 1900, 3, 37, 2, 0, 10, 1, NULL, '2019-11-20 16:00:35', 1);
INSERT INTO `ci_vacancy_master` VALUES (44, 1901, 3, 30, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (45, 1899, 3, 31, 2, 0, 10, 0, NULL, '2019-11-20 10:30:32', 1);
INSERT INTO `ci_vacancy_master` VALUES (46, 2268, 3, 38, 2, 0, 10, 1, NULL, '2019-11-20 11:19:24', 1);
INSERT INTO `ci_vacancy_master` VALUES (47, 1900, 3, 31, 2, 0, 10, 0, NULL, '2019-11-20 16:00:38', 1);
INSERT INTO `ci_vacancy_master` VALUES (48, 1901, 3, 31, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (49, 1899, 3, 32, 2, 0, 10, 0, NULL, '2019-11-20 10:30:34', 1);
INSERT INTO `ci_vacancy_master` VALUES (50, 2268, 3, 32, 2, 0, 10, 0, NULL, '2019-11-20 11:00:21', 1);
INSERT INTO `ci_vacancy_master` VALUES (51, 1900, 3, 30, 2, 0, 10, 0, NULL, '2019-11-20 16:00:56', 1);
INSERT INTO `ci_vacancy_master` VALUES (52, 1901, 3, 32, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (53, 1899, 3, 18, 2, 0, 10, 1, NULL, '2019-11-20 10:50:22', 1);
INSERT INTO `ci_vacancy_master` VALUES (54, 2268, 3, 18, 2, 0, 10, 0, NULL, '2019-11-20 11:00:21', 1);
INSERT INTO `ci_vacancy_master` VALUES (55, 1900, 3, 18, 2, 0, 10, 1, NULL, '2019-11-20 16:00:28', 1);
INSERT INTO `ci_vacancy_master` VALUES (56, 1901, 3, 28, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (57, 2266, 4, 30, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (58, 1922, 4, 30, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (59, 1918, 4, 30, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (60, 1919, 4, 30, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (61, 1923, 4, 31, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (62, 2266, 4, 31, 2, 0, 10, 4, NULL, '2019-09-27 11:18:10', 1);
INSERT INTO `ci_vacancy_master` VALUES (63, 1922, 4, 31, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (64, 1918, 4, 31, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (65, 1919, 4, 32, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (66, 1923, 4, 32, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (67, 2266, 4, 32, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (68, 1922, 4, 32, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (69, 1918, 4, 28, 2, 0, 10, 3, NULL, '2019-09-27 14:33:27', 1);
INSERT INTO `ci_vacancy_master` VALUES (70, 1919, 4, 28, 2, 0, 10, 5, NULL, '2019-09-27 14:33:27', 1);
INSERT INTO `ci_vacancy_master` VALUES (71, 1923, 4, 28, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (76, 1917, 2, 22, 2, 0, 10, NULL, NULL, '2019-11-20 12:29:40', 1);
INSERT INTO `ci_vacancy_master` VALUES (77, 1917, 2, 23, 2, 0, 10, NULL, NULL, '2019-11-20 12:29:40', 1);
INSERT INTO `ci_vacancy_master` VALUES (78, 1917, 2, 24, 2, 0, 10, 1, NULL, '2019-11-20 14:54:09', 1);
INSERT INTO `ci_vacancy_master` VALUES (79, 1917, 2, 35, 2, 0, 10, 1, NULL, '2019-11-20 14:54:46', 1);
INSERT INTO `ci_vacancy_master` VALUES (80, 1917, 2, 26, 2, 0, 10, NULL, NULL, '2019-11-20 12:29:40', 1);
INSERT INTO `ci_vacancy_master` VALUES (81, 1917, 2, 27, 2, 0, 10, 2, NULL, '2019-11-20 14:52:48', 1);
INSERT INTO `ci_vacancy_master` VALUES (82, 1487, 2, 18, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (83, 1897, 2, 19, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (84, 1898, 2, 20, 2, 0, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (85, 1487, 2, 6, 1, 2, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (86, 1897, 2, 6, 1, 1, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (87, 1898, 2, 6, 1, 11, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (88, 1487, 2, 8, 1, 10, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (89, 1897, 2, 8, 1, 2, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (90, 1898, 2, 8, 1, 1, 10, 4, NULL, '2019-09-27 11:18:11', 1);
INSERT INTO `ci_vacancy_master` VALUES (91, 1424, 5, 6, 1, 4, 10, 1, NULL, '2019-11-20 10:39:40', 1);
INSERT INTO `ci_vacancy_master` VALUES (92, 1424, 5, 6, 1, 11, 10, 3, NULL, '2019-11-29 10:14:34', 1);
INSERT INTO `ci_vacancy_master` VALUES (93, 1424, 5, 6, 1, 10, 10, 3, NULL, '2019-11-29 11:04:52', 1);
INSERT INTO `ci_vacancy_master` VALUES (98, 1917, 2, 37, 2, 0, 10, 3, NULL, '2019-11-20 14:53:42', 1);
INSERT INTO `ci_vacancy_master` VALUES (99, 1087, 5, 6, 1, 10, 10, 4, NULL, '2019-10-01 13:07:27', 1);
INSERT INTO `ci_vacancy_master` VALUES (100, 1424, 5, 6, 1, 1, 10, 1, NULL, '2019-11-20 10:39:43', 1);
INSERT INTO `ci_vacancy_master` VALUES (102, 1917, 2, 31, 2, 0, 10, 2, NULL, '2019-11-20 14:53:19', 1);
INSERT INTO `ci_vacancy_master` VALUES (104, 2117, 5, 8, 1, 4, 10, 1, NULL, '2019-11-20 15:24:53', 1);
INSERT INTO `ci_vacancy_master` VALUES (108, 1424, 5, 6, 1, 3, 10, 0, NULL, '2019-11-20 10:39:48', 1);
INSERT INTO `ci_vacancy_master` VALUES (115, 1437, 5, 6, 1, 10, 10, 1, NULL, '2019-11-20 14:28:22', 1);
INSERT INTO `ci_vacancy_master` VALUES (116, 1437, 5, 6, 1, 11, 10, 0, NULL, '2019-11-20 10:44:12', 1);
INSERT INTO `ci_vacancy_master` VALUES (117, 1437, 5, 7, 1, 0, 10, 0, NULL, '2019-11-20 10:44:57', 1);
INSERT INTO `ci_vacancy_master` VALUES (119, 1437, 5, 8, 1, 11, 10, 1, NULL, '2019-11-20 10:44:07', 1);
INSERT INTO `ci_vacancy_master` VALUES (124, 1437, 5, 6, 1, 2, 10, 1, NULL, '2019-11-20 10:43:06', 1);
INSERT INTO `ci_vacancy_master` VALUES (127, 1907, 3, 18, 2, 0, 10, 1, NULL, '2019-11-20 10:47:17', 1);
INSERT INTO `ci_vacancy_master` VALUES (128, 1907, 3, 38, 2, 0, 10, 0, NULL, '2019-11-20 10:47:22', 1);
INSERT INTO `ci_vacancy_master` VALUES (129, 1907, 3, 31, 2, 0, 10, 0, NULL, '2019-11-20 10:30:32', 1);
INSERT INTO `ci_vacancy_master` VALUES (130, 1907, 3, 32, 2, 0, 10, 0, NULL, '2019-11-20 10:30:34', 1);
INSERT INTO `ci_vacancy_master` VALUES (131, 1707, 5, 38, 2, 0, 10, 1, NULL, '2019-09-27 11:18:08', 1);
INSERT INTO `ci_vacancy_master` VALUES (132, 1855, 5, 6, 1, 2, 10, 0, NULL, '2019-11-21 15:14:06', 1);
INSERT INTO `ci_vacancy_master` VALUES (133, 1855, 5, 6, 1, 10, 10, 0, NULL, '2019-11-21 15:29:20', 1);
INSERT INTO `ci_vacancy_master` VALUES (134, 1855, 5, 6, 1, 11, 10, 0, NULL, '2019-11-21 15:14:08', 1);
INSERT INTO `ci_vacancy_master` VALUES (135, 1855, 5, 8, 1, 11, 10, 0, NULL, '2019-11-20 10:09:49', 1);

SET FOREIGN_KEY_CHECKS = 1;
