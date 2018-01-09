<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_account`;");
E_C("CREATE TABLE `ecs_user_account` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `arrival` decimal(10,2) DEFAULT '0.00',
  `vip_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_account` values('110','12','','1000.00','1513731390','0','','111','0','支付宝','0','1000.00','0.00');");
E_D("replace into `ecs_user_account` values('107','12','admin','10000.00','1513022393','1513022421','sadsa','','0','银行汇款/转帐','1','10200.00','0.00');");
E_D("replace into `ecs_user_account` values('106','12','admin','1000.00','1513013769','1513013777','asdas','','0','银行汇款/转帐','1','0.00','1150.00');");
E_D("replace into `ecs_user_account` values('105','12','admin','1000.00','1512515395','1512515405','啊实打实','','0','银行汇款/转帐','1','0.00','1150.00');");
E_D("replace into `ecs_user_account` values('92','12','admin','100.00','1512514326','1512514562','asdasd','','0','银行汇款/转帐','1','103.00','0.00');");
E_D("replace into `ecs_user_account` values('109','12','admin','-1000.00','1513556309','1513556334','sadfadsfds','144','1','','1','0.00','0.00');");
E_D("replace into `ecs_user_account` values('111','12','','1000.00','1513731420','0','','111','0','支付宝','0','1000.00','0.00');");
E_D("replace into `ecs_user_account` values('112','12','','100.00','1513786042','0','','12123','0','银行汇款/转帐','0','100.00','0.00');");
E_D("replace into `ecs_user_account` values('113','12','','100.00','1513786061','0','','12123','0','银行汇款/转帐','0','100.00','0.00');");
E_D("replace into `ecs_user_account` values('114','12','','100.00','1513786328','0','','111','0','支付宝','0','100.00','0.00');");
E_D("replace into `ecs_user_account` values('115','12','','123456.00','1513793935','0','','12456','0','支付宝','0','123456.00','0.00');");
E_D("replace into `ecs_user_account` values('116','12','','123456.00','1513793937','0','','12456','0','支付宝','0','123456.00','0.00');");
E_D("replace into `ecs_user_account` values('117','12','','1212.00','1513809630','0','','121212','0','支付宝','0','1212.00','0.00');");
E_D("replace into `ecs_user_account` values('118','15','admin','1000.00','1514231647','1514231657','11212','','0','银行汇款/转帐','1','1020.00','0.00');");
E_D("replace into `ecs_user_account` values('119','12','admin','10000.00','1514310717','1514310725','asdasd','','0','银行汇款/转帐','1','10200.00','0.00');");

require("../../inc/footer.php");
?>