<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_region`;");
E_C("CREATE TABLE `ecs_goods_region` (
  `goods_id` smallint(8) unsigned NOT NULL DEFAULT '0',
  `region_id` smallint(8) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_region` values('51','299');");
E_D("replace into `ecs_goods_region` values('51','6');");
E_D("replace into `ecs_goods_region` values('40','22');");
E_D("replace into `ecs_goods_region` values('42','285');");
E_D("replace into `ecs_goods_region` values('42','288');");
E_D("replace into `ecs_goods_region` values('42','283');");
E_D("replace into `ecs_goods_region` values('42','284');");
E_D("replace into `ecs_goods_region` values('37','283');");
E_D("replace into `ecs_goods_region` values('37','284');");
E_D("replace into `ecs_goods_region` values('37','285');");
E_D("replace into `ecs_goods_region` values('1','299');");
E_D("replace into `ecs_goods_region` values('49','299');");

require("../../inc/footer.php");
?>