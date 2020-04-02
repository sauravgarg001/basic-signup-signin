-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts`  (
  `email` varchar(255) NOT NULL,
  `pno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `ques` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `easy-score` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL
) 