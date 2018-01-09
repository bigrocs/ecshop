<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH .'includes/lib_seller.php');
if ($_REQUEST['act'] == 'order_excel') {
    // 载入国家
    $smarty->assign('country_list', get_regions());
    $smarty->assign('ur_here', $_LANG['12_order_excel']);
    $smarty->display('excel.htm');
} elseif ($_REQUEST['act'] == 'excel') {
    $filename='orderexcel';
    header("Content-type: application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=$filename.xls");

    // 订单状态
    $order_status = intval($_REQUEST['order_status']);
    // 下单开始时间
    $start_time = empty($_REQUEST['start_time']) ? '' : (strpos($_REQUEST['start_time'], '-') > 0 ?  local_strtotime($_REQUEST['start_time']) : $_REQUEST['start_time']);
    // 下单结束时间
    $end_time = empty($_REQUEST['end_time']) ? '' : (strpos($_REQUEST['end_time'], '-') > 0 ?  local_strtotime($_REQUEST['end_time']) : $_REQUEST['end_time']);
    // 起始订单号
    $order_sn1 = $_REQUEST['order_sn1'];
    // 终了订单号
    $order_sn2 = $_REQUEST['order_sn2'];
    // 国家
    $country = empty($_REQUEST['country']) ? 0 : intval($_REQUEST['country']);
    // 省
    $province = empty($_REQUEST['province']) ? 0 : intval($_REQUEST['province']);
    // 市
    $city = empty($_REQUEST['city']) ? 0 : intval($_REQUEST['city']);
    // 区
    $district = empty($_REQUEST['district']) ? 0 : intval($_REQUEST['district']);
    // 店铺
    $shop_id = $_REQUEST['shop_id'];
    $where = 'WHERE 1 ';

    if ($order_status >= 0) {
        $where .= " AND o.order_status = '$order_status' ";
    }

    if ($start_time != '' && $end_time != '') {
        $where .= " AND o.add_time >= '$start_time' AND o.add_time <= '$end_time' ";
    }

    if ($order_sn1 != '' && $order_sn2 != '') {
        $where .= " AND o.order_sn >= '$order_sn1' AND o.order_sn <= '$order_sn2' ";
    }

    if ($country > 0) {
        $where .= " AND o.country = $country ";
    }

    if ($province > 0) {
        $where .= " AND o.province = $province ";
    }

    if ($city > 0) {
        $where .= " AND o.city = $city ";
    }

    if ($district > 0) {
        $where .= " AND o.district = $district ";
    }
    $sql = "SELECT "
            . "o.order_sn, " // 订单号
            . "o.add_time, " // 下单时间
            . "o.order_status, " // 订单状态
            . "o.spread_id, "//订单绑定推广商家
            . "o.surplus, "//余额付款金额
            . "o.money_paid, " //微信支付宝转账等第三方支付金额
            . "o.jiubi_money, "//储值卡付款金额
            . "o.cost_money,"
            . "g.goods_name, " // 商品名称
            . "g.goods_price, " // 商品价格
            . "g.goods_number, " // 购买数量
            . "go.fencheng " // 商品分成
            . " FROM " . $GLOBALS['ecs']->table('order_info')
            . " AS o LEFT JOIN " . $GLOBALS['ecs']->table('users')
            . " AS u ON o.user_id = u.user_id "
            . " LEFT JOIN  " . $GLOBALS['ecs']->table('order_goods')
            . " AS g ON o.order_id = g.order_id "
            . " LEFT JOIN " . $GLOBALS['ecs']->table('goods')
            . " AS go ON g.goods_id = go.goods_id "
            . $where ;
    $res=$db->getAll($sql);
    $list = array();
    foreach ($res as $key => $rows) {
        // 订单状态
        if ($rows['order_status'] == 0) {
            $list[$key]['order_status'] = '未确认';
        } elseif ($rows['order_status'] == 1) {
            $list[$key]['order_status'] = '已确认';
        } elseif ($rows['order_status'] == 2) {
            $list[$key]['order_status'] = '已取消';
        } elseif ($rows['order_status'] == 3) {
            $list[$key]['order_status'] = '无效';
        } elseif ($rows['order_status'] == 4) {
            $list[$key]['order_status'] = '退货';
        } elseif ($rows['order_status'] == 6) {
            $list[$key]['order_status'] = '部分发货';
        } elseif ($rows['order_status'] == 100) {
            $list[$key]['order_status'] = '待付款';
        } elseif ($rows['order_status'] == 101) {
            $list[$key]['order_status'] = '待发货';
        } elseif ($rows['order_status'] == 102) {
            $list[$key]['order_status'] = '已完成';
        } else {
            $$list[$key]['order_status'] = '';
        }

        $list[$key]['order_sn'] = $rows['order_sn'];
        $list[$key]['goods_name'] = $rows['goods_name'];
        $list[$key]['goods_number'] = $rows['goods_number'];
        $list[$key]['goods_price'] = $rows['goods_price'];
        $list[$key]['fencheng'] = $rows['fencheng'];

        $list[$key]['surplus'] = $rows['surplus'];
        $list[$key]['jiubi_money'] = $rows['jiubi_money'];

        $accountAmount = getShopConfigValue('account_amount')/100;
        $surplus = sprintf("%.2f", $rows['surplus']/$accountAmount, $n);//余额实际到账金额
        $list[$key]['actual_money'] = $surplus+$rows['money_paid'];//余额+第三发支付金额 例如支付宝
        $list[$key]['cost_money'] = $rows['cost_money'];
        $list[$key]['profit_money'] = $list[$key]['actual_money']-$list[$key]['cost_money'];
        $list[$key]['spread_name'] = getUserInfo($rows['spread_id']);

        $list[$key]['add_time'] = local_date('y-m-d H:i', $rows['add_time']);
    }
    $data .= "<table border='1'>";
    $data .= "<tr>"
        . "<th bgcolor='#909399'>订单号</th>"
        . "<th bgcolor='#909399'>商品名称</th>"
        . "<th bgcolor='#909399'>购买数量</th>"
        . "<th bgcolor='#909399'>售价</th>"
        . "<th bgcolor='#909399'>分成</th>"
        . "<th bgcolor='#909399'>余额付款</th>"
        . "<th bgcolor='#909399'>储值卡付款</th>"
        . "<th bgcolor='#909399'>实际收入</th>"
        . "<th bgcolor='#909399'>成本</th>"
        . "<th bgcolor='#909399'>利润</th>"
        . "<th bgcolor='#909399'>推荐人</th>"
        . "<th bgcolor='#909399'>购买日期</th>"
        . "</tr>";
    foreach ($list as $key => $val) {
        if ($val['order_sn'] != $last_order_sn) {
            $data .= "<tr><th bgcolor='#E6A23C'>$val[order_sn]</th><th>" . $val['goods_name']
                    . "</th><th>" . $val['goods_number']
                    . "</th><th>" . $val['goods_price']
                    . "</th><th>" . $val['fencheng']
                    . "</th><th>" . $val['surplus']
                    . "</th><th>" . $val['jiubi_money']
                    . "</th><th>" . $val['actual_money']
                    . "</th><th>" . $val['cost_money']
                    . "</th><th>" . $val['profit_money']
                    . "</th><th>" . $val['spread_name']
                    . "</th><th>" . $val['add_time']
                    . "</th></tr>";
        } else {
            $data .= "<tr><th>$val[order_sn]</th><th>" . $val['goods_name']
                    . "</th><th>" . $val['goods_number']
                    . "</th><th>" . $val['goods_price']
                    . "</th><th>" . $val['fencheng']
                    . "</th><th>"
                    . "</th><th>"
                    . "</th><th>"
                    . "</th><th>"
                    . "</th><th>"
                    . "</th><th>"
                    . "</th></tr>";
        }
        $last_order_sn = $val['order_sn'];
    }

    $data .= "</table>";
    echo $data. "\t";
}
