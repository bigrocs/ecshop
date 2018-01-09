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
  `frozen_money` double(10,2) NOT NULL DEFAULT '0.00',
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL DEFAULT '',
  `change_type` tinyint(3) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_seller_log` values('37','12','12','86.21','0.00','1513013968','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('38','13','12','8.62','0.00','1513022333','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('39','13','12','86.21','0.00','1513022337','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('40','13','12','67.24','0.00','1513022344','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('41','13','12','67.24','0.00','1513022348','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('42','13','12','65.52','0.00','1513022355','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('43','13','12','64.66','0.00','1513022364','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('44','13','12','38.79','0.00','1513022371','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('45','13','12','44.83','0.00','1513022376','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('46','13','12','67.24','0.00','1513022380','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('47','13','12','10.34','0.00','1513022385','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('48','13','12','11.65','0.00','1513022426','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('49','13','12','0.97','0.00','1513022429','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('50','13','12','4421.36','0.00','1513022432','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('51','13','12','11.65','0.00','1513022435','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('52','13','12','100.97','0.00','1513022439','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('53','13','12','13.59','0.00','1513022442','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('54','13','12','103.88','0.00','1513022445','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('55','13','12','9.71','0.00','1513022449','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('56','13','12','71.84','0.00','1513022453','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('57','12','12','97.09','0.00','1513268443','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('58','12','12','97.09','0.00','1513268445','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('59','12','12','9.71','0.00','1513268448','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('60','12','12','97.09','0.00','1513268452','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('61','12','12','8.62','0.00','1513268456','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('62','12','12','9.71','0.00','1513268459','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('63','12','12','9.71','0.00','1513268463','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('64','12','12','9.71','0.00','1513268466','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('65','12','12','9.71','0.00','1513268468','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('66','12','12','9.71','0.00','1513268471','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('67','12','12','9.71','0.00','1513268474','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('68','12','12','9.71','0.00','1513268477','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('69','12','12','97.09','0.00','1513453027','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('70','12','12','97.09','0.00','1513453031','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('71','12','12','97.09','0.00','1513453034','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('72','12','12','86.21','0.00','1513453037','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('73','12','12','86.21','0.00','1513453040','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('74','12','12','291.26','0.00','1513453139','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('75','12','12','56.31','0.00','1513453247','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('76','12','12','67.24','0.00','1513453251','加油收入-bvbv01','1');");
E_D("replace into `ecs_account_seller_log` values('77','12','12','-1854.55','0.00','1513618415','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('78','12','12','-1854.55','0.00','1513618794','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('79','12','12','1854.55','0.00','1513618855','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('80','12','12','1854.55','0.00','1513618860','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('81','12','12','-1854.55','0.00','1513618870','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('82','12','12','1854.55','0.00','1513618877','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('83','12','12','-1854.55','0.00','1513618885','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('84','12','12','1854.55','0.00','1513618892','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('85','12','12','-1854.55','0.00','1513619349','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('86','12','12','1854.55','0.00','1513619359','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('87','12','12','-500.00','0.00','1513619380','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('88','12','12','500.00','0.00','1513619392','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('89','12','12','-500.00','0.00','1513619409','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('90','12','12','-501.00','0.00','1513619813','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('91','12','12','500.00','0.00','1513620138','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('92','12','12','501.00','0.00','1513620140','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('93','12','12','-600.00','0.00','1513621262','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('94','12','12','-1.00','0.00','1513625123','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('95','12','12','-1.00','0.00','1513625463','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('96','12','12','-10.00','0.00','1513626469','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('97','12','12','10.00','0.00','1513626479','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('98','12','12','-10.00','0.00','1513626486','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('99','12','12','10.00','0.00','1513626492','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('100','12','12','-10.00','0.00','1513626500','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('101','12','12','10.00','0.00','1513626738','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('102','12','12','-10.00','0.00','1513626764','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('103','12','12','0.00','0.00','1513631762','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('104','12','12','0.00','0.00','1513631854','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('105','12','12','0.00','0.00','1513631862','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('106','12','12','0.00','0.00','1513631875','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('107','12','12','-100.00','0.00','1513632833','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('108','12','12','100.00','0.00','1513632842','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('109','12','12','100.00','0.00','1513632843','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('110','12','12','-1000.00','0.00','1513632852','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('111','12','12','1000.00','0.00','1513632867','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('112','12','12','300.00','0.00','1513632984','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('113','0','0','-300.00','0.00','1513633194','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('114','0','0','-300.00','0.00','1513633215','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('115','12','12','0.00','0.00','1513635747','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('116','12','12','0.00','0.00','1513635777','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('117','12','12','0.00','0.00','1513635789','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('118','12','12','0.00','0.00','1513636091','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('119','12','12','0.00','0.00','1513636130','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('120','12','12','-100.00','0.00','1513636158','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('121','12','12','100.00','0.00','1513636165','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('122','12','12','-100.00','0.00','1513636170','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('123','12','12','0.00','0.00','1513636177','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('124','12','12','-100.00','0.00','1513636189','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('125','12','12','0.00','0.00','1513636196','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('126','12','12','0.00','0.00','1513636252','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('127','12','12','-100.00','0.00','1513636315','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('128','12','12','100.00','0.00','1513636323','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('129','12','12','-200.00','0.00','1513636329','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('130','12','12','0.00','0.00','1513636333','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('131','12','12','-100.00','0.00','1513636347','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('132','12','12','0.00','0.00','1513636353','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('133','12','12','-100.00','0.00','1513636367','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('134','12','12','0.00','0.00','1513636376','提现完成节','1');");
E_D("replace into `ecs_account_seller_log` values('135','0','12','-869.57','0.00','1513641915','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('136','0','12','-869.57','0.00','1513641919','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('137','0','12','-869.57','0.00','1513641925','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('138','0','12','-869.57','0.00','1513641976','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('139','0','12','-869.57','0.00','1513642012','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('140','0','12','-869.57','0.00','1513642052','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('141','12','12','-869.57','0.00','1513642203','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('142','12','12','-869.57','0.00','1513642238','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('143','12','12','-1739.13','0.00','1513642931','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('144','12','12','100.00','0.00','1513795101','充值','0');");
E_D("replace into `ecs_account_seller_log` values('145','12','12','1000.00','0.00','1513795115','充值','0');");
E_D("replace into `ecs_account_seller_log` values('146','12','12','1000.00','0.00','1513795129','充值','0');");
E_D("replace into `ecs_account_seller_log` values('147','12','12','1000.00','0.00','1513795165','充值','0');");
E_D("replace into `ecs_account_seller_log` values('148','12','13','-869.57','0.00','1513797206','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('149','12','13','-1739.13','0.00','1513797211','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('150','12','12','1000.00','0.00','1513797423','充值','0');");
E_D("replace into `ecs_account_seller_log` values('151','12','12','-1000.00','0.00','1513797497','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('152','12','12','1000.00','0.00','1513797515','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('153','12','12','-1000.00','0.00','1513797525','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('154','12','12','0.00','0.00','1513797546','提现完成','1');");
E_D("replace into `ecs_account_seller_log` values('155','12','12','1000.00','0.00','1513804018','充值','0');");
E_D("replace into `ecs_account_seller_log` values('156','12','13','-869.57','0.00','1513804034','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('157','12','12','1000.00','0.00','1513804088','充值','0');");
E_D("replace into `ecs_account_seller_log` values('158','12','13','-869.57','0.00','1513804134','vip充值消费','2');");
E_D("replace into `ecs_account_seller_log` values('159','12','12','-500.00','0.00','1513805146','提现冻结','1');");
E_D("replace into `ecs_account_seller_log` values('160','12','12','500.00','0.00','1513805357','取消提现','2');");
E_D("replace into `ecs_account_seller_log` values('161','12','13','-869.57','0.00','1513805496','vip充值消费','2');");

require("../../inc/footer.php");
?>