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
E_D("replace into `ecs_sessions` values('8682ec05d9cede83061cb81bdfd744a9','1512538905','12','0','172.20.0.1','bvbv01','1','1.00','123456@qq.com','a:7:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:9:\"flow_type\";i:0;s:9:\"last_time\";s:10:\"1512502879\";s:7:\"last_ip\";s:10:\"172.20.0.1\";}');");
E_D("replace into `ecs_sessions` values('ef55ed3dfee232250fc2a116f47c61dc','1512538684','0','0','172.20.0.1','0','0','1.00','0','a:4:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;}');");
E_D("replace into `ecs_sessions` values('104cd9ca4d0096643f12422727c9f006','1512538676','0','0','172.20.0.1','0','0','1.00','0','a:5:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:10:\"flow_order\";a:1:{s:14:\"extension_code\";s:0:\"\";}}');");
E_D("replace into `ecs_sessions` values('b303ec0a4704ea3815e486e30aab3f57','1512538932','12','0','172.20.0.1','bvbv01','1','1.00','123456@qq.com','a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:9:\"last_time\";s:10:\"1512509904\";s:7:\"last_ip\";s:10:\"172.20.0.1\";}');");
E_D("replace into `ecs_sessions` values('fd0123d1f5a7821ff999898d4905e1d4','1512539141','0','1','172.20.0.1','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1512510341;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('a278239c035c49dec07b36d741de8682','1512539017','12','0','172.20.0.1','bvbv01','1','1.00','123456@qq.com','a:7:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"wap站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:8:\"sms_code\";s:6:\"232565\";s:9:\"last_time\";s:10:\"1512510132\";s:7:\"last_ip\";s:10:\"172.20.0.1\";}');");

require("../../inc/footer.php");
?>