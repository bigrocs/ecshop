<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_account_log`;");
E_C("CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `jiubi` decimal(10,2) DEFAULT '0.00',
  `vip_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_account_log` values('1','1','0.00','0.00','0',NULL,'0.00','8388607','1447996060','11','2');");
E_D("replace into `ecs_account_log` values('2','1','0.00','0.00','0',NULL,'0.00','-5500','1447996080','支付订单 2015112005939','99');");
E_D("replace into `ecs_account_log` values('3','3','0.00','0.00','0',NULL,'0.00','0','1448164517','订单 2015112275252 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('4','3','0.00','0.00','0',NULL,'0.00','0','1448165915','订单 2015112265460 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('5','3','0.00','0.00','0',NULL,'0.00','0','1448167013','订单 2015112225818 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('6','3','-0.01','0.00','0',NULL,'0.00','0','1448167259','支付订单 2015112256203','99');");
E_D("replace into `ecs_account_log` values('7','3','-0.01','0.00','0',NULL,'0.00','0','1448170580','支付订单 2015112258790','99');");
E_D("replace into `ecs_account_log` values('8','5','99999999.99','0.00','0',NULL,'0.00','0','1448230508','111','2');");
E_D("replace into `ecs_account_log` values('9','5','-0.01','0.00','0',NULL,'0.00','0','1448231164','支付订单 2015112391096','99');");
E_D("replace into `ecs_account_log` values('10','5','0.00','0.00','0',NULL,'0.00','0','1448232942','订单 2015112356122 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('11','5','-0.01','0.00','0',NULL,'0.00','0','1448234136','支付订单 2015112318877','99');");
E_D("replace into `ecs_account_log` values('12','5','0.00','0.00','0',NULL,'0.00','0','1448242320','订单 2015112369856 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('13','5','0.00','0.00','0',NULL,'0.00','0','1448247519','订单 2015112314657 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('14','5','0.00','0.00','0',NULL,'0.00','0','1448250063','订单 2015112366532 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('15','5','-111111.00','0.00','0',NULL,'0.00','0','1448408235','111','2');");
E_D("replace into `ecs_account_log` values('16','5','-1111111.00','0.00','0',NULL,'0.00','0','1448408273','111','2');");
E_D("replace into `ecs_account_log` values('17','5','-99999999.99','0.00','0',NULL,'0.00','0','1448408290','1111','2');");
E_D("replace into `ecs_account_log` values('18','5','11111111.00','0.00','0',NULL,'0.00','0','1448408322','1111','2');");
E_D("replace into `ecs_account_log` values('19','5','99999999.99','0.00','0',NULL,'0.00','0','1448408338','111','2');");
E_D("replace into `ecs_account_log` values('20','5','-99999999.00','0.00','0',NULL,'0.00','0','1448408358','111','2');");
E_D("replace into `ecs_account_log` values('21','5','899.01','0.00','0',NULL,'0.00','0','1448408391','111','2');");
E_D("replace into `ecs_account_log` values('22','5','0.00','0.00','0',NULL,'0.00','0','1448409431','订单 2015112344712 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('23','5','0.00','0.00','0',NULL,'0.00','0','1448409980','订单 2015112561257 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('24','1','11111.00','0.00','0',NULL,'0.00','0','1449032501','111','2');");
E_D("replace into `ecs_account_log` values('25','1','-88.00','0.00','0',NULL,'0.00','0','1449032504','支付订单 2015120242661','99');");
E_D("replace into `ecs_account_log` values('26','1','0.00','0.00','88',NULL,'0.00','88','1449032601','订单 2015120242661 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('27','5','8.80','0.00','9',NULL,'0.00','0','1456207215','订单号 2015113044808, 分成:金钱 8.8 积分 9','99');");
E_D("replace into `ecs_account_log` values('28','12','0.00','0.00','156',NULL,'0.00','156','1510701021','订单 2017111563274 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('29','12','0.00','0.00','-156',NULL,'0.00','-156','1510701372','由于退货或未发货操作，退回订单 2017111563274 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('30','12','0.00','0.00','156',NULL,'0.00','156','1510701399','订单 2017111563274 赠送的积分','99');");
E_D("replace into `ecs_account_log` values('31','12','0.00','0.00','0','0.00','0.00','-150','1511733946','支付订单 2017112754502','99');");
E_D("replace into `ecs_account_log` values('32','12','0.00','0.00','0','-250.00','0.00','0','1511733946','支付订单 2017112754502','99');");
E_D("replace into `ecs_account_log` values('33','12','0.00','0.00','0','-1600.00','0.00','0','1511744989','支付订单 2017112729968','99');");
E_D("replace into `ecs_account_log` values('34','12','0.00','0.00','0','-481.00','0.00','0','1511745278','支付订单 2017112738455','99');");
E_D("replace into `ecs_account_log` values('35','12','0.00','0.00','0','-300.00','0.00','0','1511747453','支付订单 2017112710894','99');");
E_D("replace into `ecs_account_log` values('36','12','0.00','0.00','0','-1704.00','0.00','0','1511747528','支付订单 2017112705895','99');");
E_D("replace into `ecs_account_log` values('37','12','10.00','0.00','0','0.00','0.00','0','1511816917','充值','0');");
E_D("replace into `ecs_account_log` values('38','12','300.00','0.00','0','0.00','0.00','0','1511827220','充值','0');");
E_D("replace into `ecs_account_log` values('39','12','240.00','0.00','0','0.00','0.00','0','1511829624','充值','0');");
E_D("replace into `ecs_account_log` values('40','12','240.00','0.00','0','0.00','0.00','0','1511829636','充值','0');");
E_D("replace into `ecs_account_log` values('41','12','240.00','0.00','0','0.00','0.00','0','1511829653','充值','0');");
E_D("replace into `ecs_account_log` values('42','12','240.00','0.00','0','0.00','0.00','0','1511829670','充值','0');");
E_D("replace into `ecs_account_log` values('43','12','120.00','0.00','0','0.00','0.00','0','1511829823','充值','0');");
E_D("replace into `ecs_account_log` values('44','12','100.00','0.00','0','0.00','0.00','0','1511829964','充值','0');");
E_D("replace into `ecs_account_log` values('45','12','1200.00','0.00','0','0.00','0.00','0','1511829990','充值','0');");
E_D("replace into `ecs_account_log` values('46','12','112.00','0.00','0','0.00','0.00','0','1511905345','充值','0');");
E_D("replace into `ecs_account_log` values('47','12','8.00','0.00','0','0.00','0.00','0','1511905376','充值','0');");
E_D("replace into `ecs_account_log` values('48','12','515.00','0.00','0','0.00','0.00','0','1511905410','充值','0');");
E_D("replace into `ecs_account_log` values('49','12','0.00','0.00','0','0.00','0.00','0','1511912987','充值','0');");
E_D("replace into `ecs_account_log` values('50','12','0.00','0.00','0','0.00','0.00','0','1511912998','充值','0');");
E_D("replace into `ecs_account_log` values('51','12','0.00','0.00','0','0.00','0.00','0','1511913608','充值','0');");
E_D("replace into `ecs_account_log` values('52','12','103.00','0.00','0','0.00','0.00','0','1511913796','充值','0');");
E_D("replace into `ecs_account_log` values('53','12','1030.00','0.00','0','0.00','0.00','0','1511913824','充值','0');");
E_D("replace into `ecs_account_log` values('54','12','-1.00','0.00','0','0.00','0.00','0','1512339049','支付订单 2017120440113','99');");
E_D("replace into `ecs_account_log` values('55','12','-100.00','0.00','0','0.00','0.00','0','1512339771','支付订单 2017120488933','99');");
E_D("replace into `ecs_account_log` values('56','12','-1.00','0.00','0','0.00','0.00','0','1512346232','支付订单 2017120445592','99');");
E_D("replace into `ecs_account_log` values('57','12','0.00','0.00','0','0.00','0.00','0','1512346525','支付订单 2017120476472','99');");
E_D("replace into `ecs_account_log` values('58','12','0.00','0.00','0','0.00','0.00','0','1512346604','支付订单 2017120497134','99');");
E_D("replace into `ecs_account_log` values('59','12','0.00','0.00','0','0.00','-300.00','0','1512346757','支付订单 2017120431277','99');");
E_D("replace into `ecs_account_log` values('60','12','0.00','0.00','0','0.00','-300.00','0','1512346810','支付订单 2017120462724','99');");
E_D("replace into `ecs_account_log` values('61','12','0.00','0.00','0','0.00','-300.00','0','1512346982','支付订单 2017120419236','99');");
E_D("replace into `ecs_account_log` values('62','12','-100.00','0.00','0','0.00','0.00','0','1512347025','支付订单 2017120433945','99');");
E_D("replace into `ecs_account_log` values('63','12','0.00','0.00','0','0.00','-200.00','0','1512347025','支付订单 2017120433945','99');");
E_D("replace into `ecs_account_log` values('64','12','0.00','0.00','0','0.00','2300.00','0','1512435072','充值','0');");
E_D("replace into `ecs_account_log` values('65','12','0.00','0.00','0','2300.00','2300.00','0','1512435192','充值','0');");
E_D("replace into `ecs_account_log` values('66','12','0.00','0.00','0','2300.00','2300.00','0','1512435552','充值','0');");
E_D("replace into `ecs_account_log` values('67','12','1545.00','0.00','0','0.00','0.00','0','1512435769','充值','0');");
E_D("replace into `ecs_account_log` values('68','12','103.00','0.00','0','0.00','0.00','0','1512435809','充值','0');");
E_D("replace into `ecs_account_log` values('69','12','100.00','0.00','0','0.00','0.00','0','1512435904','充值','0');");
E_D("replace into `ecs_account_log` values('70','12','0.00','0.00','0','1150.00','1150.00','0','1512435931','充值','0');");
E_D("replace into `ecs_account_log` values('71','12','103.00','0.00','0','0.00','0.00','0','1512435960','充值','0');");
E_D("replace into `ecs_account_log` values('72','12','103.00','0.00','0','0.00','0.00','0','1512436025','充值','0');");
E_D("replace into `ecs_account_log` values('73','12','103.00','0.00','0','0.00','0.00','0','1512436048','充值','0');");
E_D("replace into `ecs_account_log` values('74','12','100.00','0.00','0','0.00','0.00','0','1512436086','充值','0');");
E_D("replace into `ecs_account_log` values('75','12','100.00','0.00','0','0.00','0.00','0','1512436115','充值','0');");
E_D("replace into `ecs_account_log` values('76','12','103.00','0.00','0','103.00','0.00','0','1512436171','充值','0');");
E_D("replace into `ecs_account_log` values('77','12','103.00','0.00','0','103.00','0.00','0','1512436246','充值','0');");
E_D("replace into `ecs_account_log` values('78','12','0.00','0.00','0','1150.00','1150.00','0','1512436269','充值','0');");
E_D("replace into `ecs_account_log` values('79','12','100.00','0.00','0','100.00','0.00','0','1512436295','充值','0');");
E_D("replace into `ecs_account_log` values('80','12','0.00','0.00','0','0.00','-1.00','0','1512497887','支付订单 2017120623670','99');");
E_D("replace into `ecs_account_log` values('81','12','0.00','0.00','0','0.00','-111.00','0','1512510003','支付订单 2017120613586','99');");
E_D("replace into `ecs_account_log` values('82','12','0.00','0.00','0','1150.00','1150.00','0','1512510155','充值','0');");
E_D("replace into `ecs_account_log` values('83','12','0.00','0.00','0','11500.00','11500.00','0','1512510213','充值','0');");

require("../../inc/footer.php");
?>