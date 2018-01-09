<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_gas`;");
E_C("CREATE TABLE `ecs_order_gas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(120) NOT NULL DEFAULT '',
  `seller_id` mediumint(8) unsigned NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  `vip_money` decimal(10,2) DEFAULT '0.00',
  `money` decimal(10,2) DEFAULT '0.00',
  `arrival_money` decimal(10,2) DEFAULT '0.00',
  `name` varchar(120) NOT NULL,
  `time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_gas` values('10','201712120939283694','12','12','100.00','0.00','86.21','加油-bvbv01','1513013968');");
E_D("replace into `ecs_order_gas` values('11','201712120939283694','12','12','0.00','10.00','86.21','加油-bvbv01','1513013968');");
E_D("replace into `ecs_order_gas` values('12','201712121158533565','12','12','10.00','0.00','8.62','加油-bvbv01','1513022333');");
E_D("replace into `ecs_order_gas` values('13','201712121158571499','13','12','100.00','0.00','86.21','加油-bvbv01','1513022337');");
E_D("replace into `ecs_order_gas` values('14','201712121159042398','13','12','78.00','0.00','67.24','加油-bvbv01','1513022344');");
E_D("replace into `ecs_order_gas` values('15','201712121159086953','13','12','78.00','0.00','67.24','加油-bvbv01','1513022348');");
E_D("replace into `ecs_order_gas` values('16','201712121159155109','13','12','76.00','0.00','65.52','加油-bvbv01','1513022355');");
E_D("replace into `ecs_order_gas` values('17','201712121159246208','13','12','75.00','0.00','64.66','加油-bvbv01','1513022364');");
E_D("replace into `ecs_order_gas` values('18','201712121159313848','13','12','45.00','0.00','38.79','加油-bvbv01','1513022371');");
E_D("replace into `ecs_order_gas` values('19','201712121159368809','13','12','52.00','0.00','44.83','加油-bvbv01','1513022376');");
E_D("replace into `ecs_order_gas` values('20','201712121159403347','13','12','78.00','0.00','67.24','加油-bvbv01','1513022380');");
E_D("replace into `ecs_order_gas` values('21','201712121159453973','13','12','12.00','0.00','10.34','加油-bvbv01','1513022385');");
E_D("replace into `ecs_order_gas` values('22','201712121200269619','13','12','0.00','12.00','11.65','加油-bvbv01','1513022426');");
E_D("replace into `ecs_order_gas` values('23','201712121200296923','13','12','0.00','1.00','0.97','加油-bvbv01','1513022429');");
E_D("replace into `ecs_order_gas` values('24','201712121200322558','13','12','0.00','4554.00','4421.36','加油-bvbv01','1513022432');");
E_D("replace into `ecs_order_gas` values('25','201712121200355762','13','12','0.00','12.00','11.65','加油-bvbv01','1513022435');");
E_D("replace into `ecs_order_gas` values('26','201712121200398445','13','12','0.00','104.00','100.97','加油-bvbv01','1513022439');");
E_D("replace into `ecs_order_gas` values('27','201712121200423405','13','12','0.00','14.00','13.59','加油-bvbv01','1513022442');");
E_D("replace into `ecs_order_gas` values('28','201712121200458309','13','12','0.00','107.00','103.88','加油-bvbv01','1513022445');");
E_D("replace into `ecs_order_gas` values('29','201712121200491551','13','12','0.00','10.00','9.71','加油-bvbv01','1513022449');");
E_D("replace into `ecs_order_gas` values('30','201712121200532349','13','12','0.00','74.00','71.84','加油-bvbv01','1513022453');");
E_D("replace into `ecs_order_gas` values('31','201712150820437683','12','12','0.00','100.00','97.09','加油-bvbv01','1513268443');");
E_D("replace into `ecs_order_gas` values('32','201712150820456316','12','12','0.00','100.00','97.09','加油-bvbv01','1513268445');");
E_D("replace into `ecs_order_gas` values('33','201712150820484393','12','12','0.00','10.00','9.71','加油-bvbv01','1513268448');");
E_D("replace into `ecs_order_gas` values('34','201712150820528428','12','12','0.00','100.00','97.09','加油-bvbv01','1513268452');");
E_D("replace into `ecs_order_gas` values('35','201712150820565836','12','12','10.00','0.00','8.62','加油-bvbv01','1513268456');");
E_D("replace into `ecs_order_gas` values('36','201712150820595093','12','12','0.00','10.00','9.71','加油-bvbv01','1513268459');");
E_D("replace into `ecs_order_gas` values('37','201712150821039652','12','12','0.00','10.00','9.71','加油-bvbv01','1513268463');");
E_D("replace into `ecs_order_gas` values('38','201712150821066236','12','12','0.00','10.00','9.71','加油-bvbv01','1513268466');");
E_D("replace into `ecs_order_gas` values('39','201712150821087636','12','12','0.00','10.00','9.71','加油-bvbv01','1513268468');");
E_D("replace into `ecs_order_gas` values('40','201712150821118793','12','12','0.00','10.00','9.71','加油-bvbv01','1513268471');");
E_D("replace into `ecs_order_gas` values('41','201712150821143237','12','12','0.00','10.00','9.71','加油-bvbv01','1513268474');");
E_D("replace into `ecs_order_gas` values('42','201712150821172025','12','12','0.00','10.00','9.71','加油-bvbv01','1513268477');");
E_D("replace into `ecs_order_gas` values('43','201712171137075414','12','12','0.00','100.00','97.09','加油-bvbv01','1513453027');");
E_D("replace into `ecs_order_gas` values('44','201712171137112284','12','12','0.00','100.00','97.09','加油-bvbv01','1513453031');");
E_D("replace into `ecs_order_gas` values('45','201712171137147267','12','12','0.00','100.00','97.09','加油-bvbv01','1513453034');");
E_D("replace into `ecs_order_gas` values('46','201712171137173120','12','12','100.00','0.00','86.21','加油-bvbv01','1513453037');");
E_D("replace into `ecs_order_gas` values('47','201712171137202907','12','12','100.00','0.00','86.21','加油-bvbv01','1513453040');");

require("../../inc/footer.php");
?>