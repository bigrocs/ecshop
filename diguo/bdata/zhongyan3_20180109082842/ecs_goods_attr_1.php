<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  `attr_jiubi` varchar(255) NOT NULL,
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  `hex_color` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=293 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','1','211','500克','50','0','','','','');");
E_D("replace into `ecs_goods_attr` values('2','1','211','1000克','100','10','','','','');");
E_D("replace into `ecs_goods_attr` values('3','1','211','2000克','200','50','','','','');");
E_D("replace into `ecs_goods_attr` values('4','1','214','红色','','','','','','FFCE6B');");
E_D("replace into `ecs_goods_attr` values('5','1','214','蓝色','','','','','','9661FF');");
E_D("replace into `ecs_goods_attr` values('6','1','214','绿色','','','','','','6B9621');");
E_D("replace into `ecs_goods_attr` values('7','1','215','时尚款','','','images/201512/thumb_img/1_thumb_G_1449025104251.jpg','','','');");
E_D("replace into `ecs_goods_attr` values('8','1','215','经典款','','','images/201512/thumb_img/1_thumb_G_1449025115783.jpg','','','');");
E_D("replace into `ecs_goods_attr` values('9','1','215','出众款','','','images/201512/thumb_img/1_thumb_G_1449025126133.jpg','','','');");
E_D("replace into `ecs_goods_attr` values('34','187','216','3L','','','','','','');");
E_D("replace into `ecs_goods_attr` values('33','188','216','3L*2','118','','','','','');");
E_D("replace into `ecs_goods_attr` values('32','188','216','1.8L','18','','','','','');");
E_D("replace into `ecs_goods_attr` values('31','188','216','5L','96.1','','','','','');");
E_D("replace into `ecs_goods_attr` values('30','188','216','1.8L*2','61.1','','','','','');");
E_D("replace into `ecs_goods_attr` values('29','188','216','3L','38','','','','','');");
E_D("replace into `ecs_goods_attr` values('28','188','216','900ML','','','','','','');");
E_D("replace into `ecs_goods_attr` values('35','187','216','5L','48.1','','','','','');");
E_D("replace into `ecs_goods_attr` values('45','182','218','5L','60','','','','','');");
E_D("replace into `ecs_goods_attr` values('44','182','218','1.8L*2','50','','','','','');");
E_D("replace into `ecs_goods_attr` values('43','182','218','4L','40','','','','','');");
E_D("replace into `ecs_goods_attr` values('42','182','218','1.8L','30','','','','','');");
E_D("replace into `ecs_goods_attr` values('41','182','218','1L','','','','','','');");
E_D("replace into `ecs_goods_attr` values('46','171','220','1L','','','','','','');");
E_D("replace into `ecs_goods_attr` values('47','171','220','1.8L','20','','','','','');");
E_D("replace into `ecs_goods_attr` values('48','171','220','2.5L','32','','','','','');");
E_D("replace into `ecs_goods_attr` values('49','171','220','4L','40','','','','','');");
E_D("replace into `ecs_goods_attr` values('50','171','220','4.5L','46','','','','','');");
E_D("replace into `ecs_goods_attr` values('51','171','220','1.8L*2','50','','','','','');");
E_D("replace into `ecs_goods_attr` values('52','171','220','5L','60','','','','','');");
E_D("replace into `ecs_goods_attr` values('53','171','220','2.5L*2','66','','','','','');");
E_D("replace into `ecs_goods_attr` values('54','171','220','6.18L','79','','','','','');");
E_D("replace into `ecs_goods_attr` values('82','223','221','100ML','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('83','223','221','200ML','3','','','','','');");
E_D("replace into `ecs_goods_attr` values('84','223','221','300ML','4','','','','','');");
E_D("replace into `ecs_goods_attr` values('85','223','221','400ML','8','','','','','');");
E_D("replace into `ecs_goods_attr` values('115','232','225','葡萄籽味','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('114','232','225','牛奶杏仁味','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('113','229','224','750g','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('112','229','224','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('90','225','222','125g珍珠香皂(蓝)','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('91','225','222','125g珍珠香皂(绿)','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('92','225','222','125g珍珠香皂(红)','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('111','229','224','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('109','227','223','400g','38.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('108','227','223','200g','21.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('107','227','223','7g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('117','232','225','柠檬味','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('116','232','225','锦葵熏衣草味','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('110','227','223','750g','65.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('118','234','226','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('119','234','226','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('120','234','226','750g','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('121','235','228','102g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('122','235','228','176g','1.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('123','235','228','202g','2.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('124','235','228','228g','2.7','','','','','');");
E_D("replace into `ecs_goods_attr` values('125','235','228','242g','3.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('126','235','228','102g*6','10','','','','','');");
E_D("replace into `ecs_goods_attr` values('127','235','228','202g*3','10.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('128','235','228','228g*2','8','','','','','');");
E_D("replace into `ecs_goods_attr` values('129','236','229','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('130','236','229','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('131','237','230','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('132','237','230','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('133','237','230','750g','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('134','238','231','7g','0.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('135','238','231','200g','21.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('136','238','231','400g','38.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('137','238','231','750g','65.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('138','239','232','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('139','239','232','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('140','239','232','750g','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('141','240','233','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('142','240','233','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('143','241','234','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('144','241','234','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('145','241','234','750g','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('146','242','235','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('147','242','235','400g','24','','','','','');");
E_D("replace into `ecs_goods_attr` values('148','242','235','750g','62','','','','','');");
E_D("replace into `ecs_goods_attr` values('149','243','236','7g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('150','243','236','200g','30','','','','','');");
E_D("replace into `ecs_goods_attr` values('151','243','236','400g','54','','','','','');");
E_D("replace into `ecs_goods_attr` values('152','243','236','750g','92','','','','','');");
E_D("replace into `ecs_goods_attr` values('153','245','237','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('154','245','237','400g','24','','','','','');");
E_D("replace into `ecs_goods_attr` values('155','245','237','750g','38','','','','','');");
E_D("replace into `ecs_goods_attr` values('156','247','238','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('157','247','238','400g','29','','','','','');");
E_D("replace into `ecs_goods_attr` values('158','248','239','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('159','248','239','400g','24','','','','','');");
E_D("replace into `ecs_goods_attr` values('160','248','239','750g','62','','','','','');");
E_D("replace into `ecs_goods_attr` values('161','249','240','176g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('162','249','240','202g','0.4','','','','','');");
E_D("replace into `ecs_goods_attr` values('163','249','240','242g','1.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('164','249','240','242g*2','6','','','','','');");
E_D("replace into `ecs_goods_attr` values('165','250','241','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('166','250','241','400g','24','','','','','');");
E_D("replace into `ecs_goods_attr` values('167','250','241','750g','62','','','','','');");
E_D("replace into `ecs_goods_attr` values('168','251','242','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('169','251','242','400g','24','','','','','');");
E_D("replace into `ecs_goods_attr` values('170','252','243','176g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('171','252','243','176g*2','0.7','','','','','');");
E_D("replace into `ecs_goods_attr` values('172','252','243','202g','0.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('173','252','243','202g*2','3.7','','','','','');");
E_D("replace into `ecs_goods_attr` values('174','252','243','242g','1.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('175','253','244','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('176','253','244','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('177','253','244','750g','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('178','254','245','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('179','254','245','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('180','254','245','750g','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('181','255','246','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('182','255','246','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('183','256','247','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('184','256','247','400g','17','','','','','');");
E_D("replace into `ecs_goods_attr` values('185','257','248','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('186','258','249','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('187','259','250','10g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('188','259','250','400g','33','','','','','');");
E_D("replace into `ecs_goods_attr` values('189','259','250','700g','54','','','','','');");
E_D("replace into `ecs_goods_attr` values('190','259','250','1kg','77','','','','','');");
E_D("replace into `ecs_goods_attr` values('191','260','251','10g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('192','260','251','400g','33','','','','','');");
E_D("replace into `ecs_goods_attr` values('193','260','251','700g','54','','','','','');");
E_D("replace into `ecs_goods_attr` values('194','260','251','1kg','77','','','','','');");
E_D("replace into `ecs_goods_attr` values('195','261','252','400g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('196','261','252','700g','21','','','','','');");
E_D("replace into `ecs_goods_attr` values('197','261','252','1kg','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('198','262','253','400g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('199','262','253','700g','21','','','','','');");
E_D("replace into `ecs_goods_attr` values('200','262','253','1kg','44','','','','','');");
E_D("replace into `ecs_goods_attr` values('201','263','254','100g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('202','263','254','165g','7.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('203','265','255','150g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('204','265','255','200g','1.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('205','265','255','260g','2.7','','','','','');");
E_D("replace into `ecs_goods_attr` values('206','265','255','226g','1.7','','','','','');");
E_D("replace into `ecs_goods_attr` values('207','265','255','226g*2','5','','','','','');");
E_D("replace into `ecs_goods_attr` values('208','264','256','105g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('209','264','256','160g','4.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('210','266','257','95g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('211','266','257','160g','5.3','','','','','');");
E_D("replace into `ecs_goods_attr` values('212','267','258','95g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('213','267','258','160g','5.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('214','268','259','95g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('223','269','260','226g*2','3.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('222','269','260','260g','1.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('221','269','260','226g','0.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('220','269','260','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('224','271','262','200g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('225','271','262','226g','0.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('226','271','262','260g','1.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('227','271','262','226g*2','3.8','','','','','');");
E_D("replace into `ecs_goods_attr` values('228','272','263','162g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('229','272','263','222g','1.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('230','272','263','202g*2','5.3','','','','','');");
E_D("replace into `ecs_goods_attr` values('231','274','264','252g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('232','274','264','508g','2.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('233','274','264','560g','3.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('234','274','264','1.28kg','10','','','','','');");
E_D("replace into `ecs_goods_attr` values('235','274','264','1.638kg','14','','','','','');");
E_D("replace into `ecs_goods_attr` values('236','274','264','2.438kg','21','','','','','');");
E_D("replace into `ecs_goods_attr` values('237','274','264','2.438kg+200g','21','','','','','');");
E_D("replace into `ecs_goods_attr` values('238','274','264','2.68kg','24.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('239','274','264','2.68kg+200g','24.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('240','274','264','4kg','34.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('241','275','265','508g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('242','275','265','560g','0.6','','','','','');");
E_D("replace into `ecs_goods_attr` values('243','275','265','1.08kg','5.3','','','','','');");
E_D("replace into `ecs_goods_attr` values('244','275','265','1.8kg','13.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('245','275','265','3kg','24.8','','','','','');");
E_D("replace into `ecs_goods_attr` values('246','276','266','508g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('247','276','266','1.03kg','4.8','','','','','');");
E_D("replace into `ecs_goods_attr` values('248','276','266','1.55kg','11.3','','','','','');");
E_D("replace into `ecs_goods_attr` values('249','276','266','2.08kg','18.3','','','','','');");
E_D("replace into `ecs_goods_attr` values('250','276','266','3kg','27.3','','','','','');");
E_D("replace into `ecs_goods_attr` values('251','277','267','320g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('252','277','267','600g','4.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('253','277','267','1800g','23','','','','','');");
E_D("replace into `ecs_goods_attr` values('254','277','267','1.008kg','8','','','','','');");
E_D("replace into `ecs_goods_attr` values('255','270','261','95g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('256','278','268','358g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('257','278','268','628g','4','','','','','');");
E_D("replace into `ecs_goods_attr` values('258','278','268','1600g','17.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('259','279','270','90g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('260','279','270','160g','3.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('261','280','269','360g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('262','280','269','680g','5.7','','','','','');");
E_D("replace into `ecs_goods_attr` values('263','280','269','1.5kg','20.2','','','','','');");
E_D("replace into `ecs_goods_attr` values('264','281','271','668g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('265','281','271','1.028g','5.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('266','281','271','1.328g','13','','','','','');");
E_D("replace into `ecs_goods_attr` values('267','281','271','1.688g','19','','','','','');");
E_D("replace into `ecs_goods_attr` values('268','282','273','95g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('269','283','272','500g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('270','283','272','800g','5.58','','','','','');");
E_D("replace into `ecs_goods_attr` values('271','283','272','900g','12','','','','','');");
E_D("replace into `ecs_goods_attr` values('272','283','272','1.5kg','27','','','','','');");
E_D("replace into `ecs_goods_attr` values('273','284','274','500g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('274','284','274','1618g','12.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('275','284','274','2000g','15.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('276','284','274','5000g','38.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('277','285','275','95g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('278','286','276','120g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('279','286','276','165g','1.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('280','287','277','500g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('281','287','277','1000g','10.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('282','287','277','2000g','13.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('283','288','278','120g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('284','288','278','180g','2','','','','','');");
E_D("replace into `ecs_goods_attr` values('285','291','279','110g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('286','291','279','160g','1.5','','','','','');");
E_D("replace into `ecs_goods_attr` values('287','301','280','110g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('288','301','280','150g','10','','','','','');");
E_D("replace into `ecs_goods_attr` values('289','302','281','120g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('290','302','281','160g','5','','','','','');");
E_D("replace into `ecs_goods_attr` values('291','303','282','120g','0','','','','','');");
E_D("replace into `ecs_goods_attr` values('292','303','282','160g','8','','','','','');");

require("../../inc/footer.php");
?>