<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_seller`;");
E_C("CREATE TABLE `ecs_user_seller` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `name` varchar(120) DEFAULT NULL,
  `user_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `frozen_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bank` varchar(120) DEFAULT '',
  `bank_name` varchar(60) DEFAULT NULL,
  `bank_account` varchar(180) DEFAULT NULL,
  `pickup_point` int(11) DEFAULT NULL,
  `insurance` tinyint(1) NOT NULL DEFAULT '0',
  `spread` decimal(10,2) NOT NULL DEFAULT '0.00',
  `add_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_seller` values('12','bvbv01','中国石化16路加油站','43.46','100.00','工商银行','李先生','6222001613100507778','22','0','99.00','1234567891');");
E_D("replace into `ecs_user_seller` values('13','bvbv02','平安保险公司','0.00','0.00','',NULL,NULL,NULL,'1','1.00','1513908267');");

require("../../inc/footer.php");
?>