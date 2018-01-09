<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_seller_log`;");
E_C("CREATE TABLE `ecs_account_seller_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL DEFAULT '0',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL DEFAULT '',
  `change_type` tinyint(3) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_seller_log` values('37','12','12','86.21','1513013968','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('38','13','12','8.62','1513022333','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('39','13','12','86.21','1513022337','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('40','13','12','67.24','1513022344','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('41','13','12','67.24','1513022348','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('42','13','12','65.52','1513022355','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('43','13','12','64.66','1513022364','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('44','13','12','38.79','1513022371','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('45','13','12','44.83','1513022376','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('46','13','12','67.24','1513022380','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('47','13','12','10.34','1513022385','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('48','13','12','11.65','1513022426','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('49','13','12','0.97','1513022429','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('50','13','12','4421.36','1513022432','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('51','13','12','11.65','1513022435','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('52','13','12','100.97','1513022439','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('53','13','12','13.59','1513022442','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('54','13','12','103.88','1513022445','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('55','13','12','9.71','1513022449','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('56','13','12','71.84','1513022453','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('57','12','12','97.09','1513268443','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('58','12','12','97.09','1513268445','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('59','12','12','9.71','1513268448','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('60','12','12','97.09','1513268452','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('61','12','12','8.62','1513268456','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('62','12','12','9.71','1513268459','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('63','12','12','9.71','1513268463','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('64','12','12','9.71','1513268466','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('65','12','12','9.71','1513268468','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('66','12','12','9.71','1513268471','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('67','12','12','9.71','1513268474','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('68','12','12','9.71','1513268477','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('69','12','12','97.09','1513453027','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('70','12','12','97.09','1513453031','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('71','12','12','97.09','1513453034','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('72','12','12','86.21','1513453037','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('73','12','12','86.21','1513453040','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('74','12','12','291.26','1513453139','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('75','12','12','56.31','1513453247','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('76','12','12','67.24','1513453251','加油收入-bvbv01','1');");

require("../../inc/footer.php");
?>