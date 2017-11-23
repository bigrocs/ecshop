<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('2ecb47955ed3e71e22d378368d79f580','1511415434','0','0','172.20.0.1','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:1;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:1:\"1\";}');");
E_D("replace into `ecs_sessions` values('d1262a8cb18f1ed06d0a93a3f788d034','1511417225','0','0','172.20.0.1','0','0','1.00','0','a:5:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:1:\"1\";s:12:\"captcha_word\";s:16:\"NzVhOTg1MmMyMw==\";}');");
E_D("replace into `ecs_sessions` values('d9ee2372e1dad6888b39a4e559126abc','1511417079','0','1','172.20.0.1','0','0','0.00','0','a:3:{s:10:\"last_check\";i:1511388279;s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";}');");

require("../../inc/footer.php");
?>