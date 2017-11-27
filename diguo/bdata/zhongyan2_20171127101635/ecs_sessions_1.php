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
E_D("replace into `ecs_sessions` values('4c14e3108988e0026c5b0dcc1bf2670a','1511748016','0','1','61.179.150.86','0','0','0.00','0','a:3:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1511719216;}');");
E_D("replace into `ecs_sessions` values('383d6fda3920bfac47117d5bbd825060','1511748674','0','0','61.179.150.86','0','0','1.00','0','a:5:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:1:\"1\";s:12:\"captcha_word\";s:16:\"YTExYWI5OTEyYQ==\";}');");
E_D("replace into `ecs_sessions` values('7a85d4cba0a5b406ff0643d8b646812d','1511748971','0','1','112.240.81.165','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1511720171;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('6c1c1778ce589b79f0f45a500f0566d3','1511747461','0','0','112.240.81.165','0','0','1.00','0','a:5:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:3:\"299\";s:12:\"captcha_word\";s:16:\"NTlkYTFiNjM1Ng==\";}');");

require("../../inc/footer.php");
?>