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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_seller` values('12','bvbv01','中国石化16路加油站','431.82','100.00','工商银行','李先生','6222001613100507778','22','0','522.00','1234567891');");
E_D("replace into `ecs_user_seller` values('13','bvbv02','平安保险公司','0.00','0.00','',NULL,NULL,NULL,'1','1.00','1513908267');");
E_D("replace into `ecs_user_seller` values('16','bvbv10','平安保险 淄博01店','0.00','0.00','',NULL,NULL,NULL,'1','0.00','1514516529');");
E_D("replace into `ecs_user_seller` values('20','1111','11111','1861.75','0.00','',NULL,NULL,NULL,'0','0.00','1514532702');");
E_D("replace into `ecs_user_seller` values('22','123','sss','0.00','0.00','',NULL,NULL,NULL,'0','0.00','1514599037');");
E_D("replace into `ecs_user_seller` values('29','huifeng1','汇丰1','0.00','0.00','',NULL,NULL,NULL,'0','0.00','1514611691');");
E_D("replace into `ecs_user_seller` values('30','huifeng2','汇丰2','388.36','0.00','',NULL,NULL,NULL,'0','0.00','1514611705');");
E_D("replace into `ecs_user_seller` values('31','huifeng3','汇丰3','194.18','0.00','',NULL,NULL,NULL,'0','0.00','1514611717');");
E_D("replace into `ecs_user_seller` values('32','huifeng4','汇丰4','0.00','0.00','',NULL,NULL,NULL,'0','0.00','1514611731');");
E_D("replace into `ecs_user_seller` values('67','666666','加油站001','0.00','0.00','',NULL,NULL,NULL,'0','0.00','1514969807');");
E_D("replace into `ecs_user_seller` values('72','333','333','0.00','0.00','',NULL,NULL,NULL,'1','0.00','1515382773');");

require("../../inc/footer.php");
?>