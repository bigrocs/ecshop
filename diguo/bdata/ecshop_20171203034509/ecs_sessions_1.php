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
E_D("replace into `ecs_sessions` values('ad12d68af84534cd0ba50c581235e920','1512272249','12','0','172.20.0.1','bvbv01','1','1.00','123456@qq.com','');");
E_D("replace into `ecs_sessions` values('d5f4f1f845c00d8881ce68a9e30dafa4','1512272383','0','1','172.20.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1512243583;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('8088c0f25f55d41c19ac0625435af209','1512272398','12','0','172.20.0.1','bvbv01','1','1.00','123456@qq.com','a:7:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";s:10:\"1512243587\";s:7:\"last_ip\";s:10:\"172.20.0.1\";s:9:\"region_id\";i:0;s:14:\"display_search\";s:4:\"grid\";}');");

require("../../inc/footer.php");
?>