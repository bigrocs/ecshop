<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions_data`;");
E_C("CREATE TABLE `ecs_sessions_data` (
  `sesskey` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `data` longtext NOT NULL,
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions_data` values('f343afc76e9a92fc0d63e4fd06b70ce2','4294967295','a:10:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:5:\"pc站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:1:\"1\";s:12:\"captcha_word\";s:16:\"MTUyODI0ZjE1Ng==\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:10:{s:14:\"extension_code\";s:0:\"\";s:11:\"shipping_id\";i:5;s:6:\"pay_id\";i:1;s:7:\"pack_id\";i:0;s:7:\"card_id\";i:0;s:5:\"bonus\";i:0;s:8:\"integral\";i:0;s:7:\"surplus\";d:10;s:5:\"jiubi\";d:120;s:9:\"vip_money\";i:0;}s:9:\"last_time\";s:10:\"1512580659\";s:7:\"last_ip\";s:10:\"172.20.0.1\";s:14:\"flow_consignee\";a:15:{s:10:\"address_id\";s:2:\"10\";s:12:\"address_name\";s:0:\"\";s:7:\"user_id\";s:2:\"12\";s:9:\"consignee\";s:6:\"安徽\";s:5:\"email\";s:13:\"123456@qq.com\";s:7:\"country\";s:1:\"1\";s:8:\"province\";s:1:\"3\";s:4:\"city\";s:2:\"36\";s:8:\"district\";s:3:\"401\";s:7:\"address\";s:7:\"1212312\";s:7:\"zipcode\";s:0:\"\";s:3:\"tel\";s:0:\"\";s:6:\"mobile\";s:11:\"13765411234\";s:13:\"sign_building\";s:0:\"\";s:9:\"best_time\";s:0:\"\";}}');");

require("../../inc/footer.php");
?>