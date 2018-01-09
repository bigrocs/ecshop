<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=278 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','28.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('2','2','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('3','3','26.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('4','4','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('5','5','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('6','6','168.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('7','7','108.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('8','8','108.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('9','9','168.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('10','10','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('11','11','108.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('12','12','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('13','13','46.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('14','14','18.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('15','15','59.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('16','16','26.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('17','17','12.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('18','18','12.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('19','19','49.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('20','20','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('21','21','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('22','22','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('23','23','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('24','24','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('25','25','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('26','26','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('27','27','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('28','28','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('29','29','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('30','30','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('31','31','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('32','32','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('33','33','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('34','34','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('35','35','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('36','36','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('37','37','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('38','38','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('39','39','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('40','40','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('41','41','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('42','42','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('43','43','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('44','44','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('45','45','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('46','46','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('47','47','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('48','48','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('49','49','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('50','50','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('51','51','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('52','52','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('53','53','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('54','54','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('55','55','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('56','56','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('57','57','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('58','58','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('59','59','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('60','60','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('61','61','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('62','62','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('63','63','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('64','64','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('65','65','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('66','66','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('67','67','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('68','68','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('69','69','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('70','70','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('71','72','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('72','73','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('73','74','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('74','75','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('75','76','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('76','77','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('77','78','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('78','79','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('79','80','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('80','81','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('81','82','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('82','83','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('83','84','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('84','85','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('85','86','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('86','87','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('87','88','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('88','89','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('89','90','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('90','91','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('91','92','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('92','93','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('93','94','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('94','95','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('95','96','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('96','97','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('97','98','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('98','96','15.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('99','99','0.01','0','0','0');");
E_D("replace into `ecs_pay_log` values('100','100','0.01','0','1','0');");
E_D("replace into `ecs_pay_log` values('101','101','99.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('102','102','88.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('103','103','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('104','104','183.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('105','105','156.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('106','106','108.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('107','107','171.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('108','108','26.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('109','109','12.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('110','110','168.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('111','111','19.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('112','112','26.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('113','113','26.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('114','114','264.50','0','0','0');");
E_D("replace into `ecs_pay_log` values('115','115','3375.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('116','116','1775.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('117','117','1334.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('118','118','695.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('119','119','1671.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('120','1','10.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('121','2','10.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('122','3','10.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('123','4','1.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('124','5','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('125','6','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('126','7','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('127','8','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('128','9','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('129','10','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('130','11','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('131','12','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('132','13','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('133','14','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('134','15','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('135','16','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('136','17','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('137','18','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('138','19','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('139','20','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('140','21','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('141','22','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('142','23','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('143','24','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('144','25','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('145','26','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('146','27','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('147','28','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('148','28','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('149','29','200.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('150','30','200.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('151','31','200.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('152','32','200.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('153','33','200.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('154','34','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('155','35','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('156','36','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('157','37','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('158','38','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('159','39','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('160','40','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('161','41','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('162','42','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('163','43','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('164','44','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('165','45','300.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('166','46','112.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('167','47','8.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('168','48','500.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('169','120','100.00','1','0','49');");
E_D("replace into `ecs_pay_log` values('170','121','100.00','1','0','50');");
E_D("replace into `ecs_pay_log` values('171','122','100.00','1','0','51');");
E_D("replace into `ecs_pay_log` values('172','123','100.00','1','0','52');");
E_D("replace into `ecs_pay_log` values('173','124','100.00','1','0','53');");
E_D("replace into `ecs_pay_log` values('174','125','100.00','1','0','54');");
E_D("replace into `ecs_pay_log` values('175','126','300.00','1','0','55');");
E_D("replace into `ecs_pay_log` values('176','127','400.00','1','0','56');");
E_D("replace into `ecs_pay_log` values('177','128','400.00','1','0','57');");
E_D("replace into `ecs_pay_log` values('178','129','400.00','1','0','58');");
E_D("replace into `ecs_pay_log` values('179','130','1000.00','1','0','59');");
E_D("replace into `ecs_pay_log` values('180','131','100.00','1','0','60');");
E_D("replace into `ecs_pay_log` values('181','132','1000.00','1','0','61');");
E_D("replace into `ecs_pay_log` values('182','133','100.00','1','0','62');");
E_D("replace into `ecs_pay_log` values('183','63','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('184','134','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('185','135','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('186','136','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('187','137','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('188','138','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('189','139','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('190','140','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('191','141','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('192','142','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('193','143','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('194','144','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('195','64','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('196','65','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('197','66','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('198','67','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('199','68','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('200','69','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('201','70','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('202','71','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('203','72','3000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('204','73','2000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('205','74','2000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('206','75','2000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('207','76','2000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('208','77','1500.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('209','78','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('210','79','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('211','80','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('212','81','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('213','82','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('214','83','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('215','84','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('216','85','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('217','86','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('218','87','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('219','88','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('220','89','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('221','145','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('222','146','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('223','147','1000.00','1','0','90');");
E_D("replace into `ecs_pay_log` values('224','148','10000.00','1','0','91');");
E_D("replace into `ecs_pay_log` values('225','149','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('226','92','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('227','93','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('228','94','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('229','95','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('230','96','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('231','97','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('232','98','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('233','99','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('234','100','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('235','101','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('236','102','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('237','103','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('238','104','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('239','105','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('240','106','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('241','107','10000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('242','136','10.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('243','136','10.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('244','150','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('245','151','0.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('246','152','172.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('247','110','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('248','111','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('249','112','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('250','113','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('251','114','100.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('252','156','111.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('253','157','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('254','158','1000.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('255','115','123456.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('256','116','123456.00','1','0','0');");
E_D("replace into `ecs_pay_log` values('257','159','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('258','160','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('259','161','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('260','162','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('261','163','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('262','164','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('263','165','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('264','166','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('265','167','100.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('266','153','3665.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('267','168','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('268','169','1000.00','2','0','0');");
E_D("replace into `ecs_pay_log` values('269','173','10000.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('270','174','10000.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('271','175','1000.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('272','176','1000.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('273','177','1000.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('274','178','1000.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('275','154','1212.00','1','0','117');");
E_D("replace into `ecs_pay_log` values('276','179','123.00','0','0','0');");
E_D("replace into `ecs_pay_log` values('277','180','123.00','0','0','0');");

require("../../inc/footer.php");
?>