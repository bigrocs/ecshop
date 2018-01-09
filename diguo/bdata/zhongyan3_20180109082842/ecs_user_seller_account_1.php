<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_seller_account`;");
E_C("CREATE TABLE `ecs_user_seller_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `arrival` decimal(10,2) NOT NULL DEFAULT '0.00',
  `cash_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=182 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_seller_account` values('155','12','','111.00','111.00','0.00','1513793611','0','','111','0','支付宝','0');");
E_D("replace into `ecs_user_seller_account` values('153','12','admin','-100.00','99.80','0.20','1513636367','1513636376','asdas','','1','卖家提现','1');");
E_D("replace into `ecs_user_seller_account` values('136','12','admin','-10.00','9.98','0.02','1513626764','1513631875','asd','','1','','1');");
E_D("replace into `ecs_user_seller_account` values('151','12','admin','-200.00','199.60','0.40','1513636329','1513636333','asdasdas','','1','卖家提现','1');");
E_D("replace into `ecs_user_seller_account` values('142','12','admin','-300.00','299.40','0.60','1513633215','1513635747','asddas','','1','卖家提现','1');");
E_D("replace into `ecs_user_seller_account` values('143','12','admin','-100.00','99.80','0.20','1513635777','1513635789','adasd','','1','卖家提现','1');");
E_D("replace into `ecs_user_seller_account` values('147','12','admin','-100.00','99.80','0.20','1513636170','1513636177','asdas','','1','卖家提现','1');");
E_D("replace into `ecs_user_seller_account` values('148','12','admin','-100.00','99.80','0.20','1513636189','1513636196','asdasd','','1','卖家提现','1');");
E_D("replace into `ecs_user_seller_account` values('152','12','admin','-100.00','99.80','0.20','1513636347','1513636353','asdas','','1','卖家提现','1');");
E_D("replace into `ecs_user_seller_account` values('156','12','','111.00','111.00','0.00','1513793880','0','','111','0','支付宝','0');");
E_D("replace into `ecs_user_seller_account` values('173','12','','10000.00','10000.00','0.00','1513808763','0','','','0','支付宝','0');");
E_D("replace into `ecs_user_seller_account` values('174','12','','10000.00','10000.00','0.00','1513808777','0','','','0','支付宝','0');");
E_D("replace into `ecs_user_seller_account` values('159','12','','1000.00','1000.00','0.00','1513793979','0','','111','0','支付宝','0');");
E_D("replace into `ecs_user_seller_account` values('175','12','','1000.00','1000.00','0.00','1513808866','0','','','0','微信支付','0');");
E_D("replace into `ecs_user_seller_account` values('176','12','','1000.00','1000.00','0.00','1513808923','0','','','0','微信支付','0');");
E_D("replace into `ecs_user_seller_account` values('162','12','admin','1000.00','1000.00','0.00','1513794466','1513804088','121212','111','0','支付宝','1');");
E_D("replace into `ecs_user_seller_account` values('163','12','admin','1000.00','1000.00','0.00','1513794657','1513804018','121212','111','0','支付宝','1');");
E_D("replace into `ecs_user_seller_account` values('164','12','admin','1000.00','1000.00','0.00','1513794658','1513795165','啊实打实的','111','0','支付宝','1');");
E_D("replace into `ecs_user_seller_account` values('165','12','admin','1000.00','1000.00','0.00','1513794674','1513795129','阿达达撒上','111','0','支付宝','1');");
E_D("replace into `ecs_user_seller_account` values('166','12','admin','1000.00','1000.00','0.00','1513794699','1513795115','啊 dasds','111','0','支付宝','1');");
E_D("replace into `ecs_user_seller_account` values('167','12','admin','100.00','100.00','0.00','1513794808','1513795101','阿斯顿发的是','111','0','银行汇款/转帐','1');");
E_D("replace into `ecs_user_seller_account` values('169','12','admin','1000.00','1000.00','0.00','1513797411','1513797423','确认管理员','测试充值后台确认','0','银行汇款/转帐','1');");
E_D("replace into `ecs_user_seller_account` values('171','12','admin','-1000.00','998.00','2.00','1513797525','1513797546','提现确认','','1','卖家提现','1');");
E_D("replace into `ecs_user_seller_account` values('177','12','','1000.00','1000.00','0.00','1513808938','0','','1212','0','银行汇款/转帐','0');");
E_D("replace into `ecs_user_seller_account` values('178','12','','1000.00','1000.00','0.00','1513808943','0','','1212','0','支付宝','0');");
E_D("replace into `ecs_user_seller_account` values('179','12','','123.00','123.00','0.00','1513810629','0','','2112','0','微信支付','0');");
E_D("replace into `ecs_user_seller_account` values('180','12','','123.00','123.00','0.00','1513810655','0','','12312','0','微信支付','0');");
E_D("replace into `ecs_user_seller_account` values('181','12','','-100.00','99.80','0.20','1514402119','0','','','1','卖家提现','0');");

require("../../inc/footer.php");
?>