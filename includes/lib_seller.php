<?php

/**
 * ECSHOP 卖家相关函数库
 * 532388887
 * bigrocs@qq.com
 */

if (!defined('IN_ECS')) {
    die('Hacking attempt');
}
/**
 * [getSellerInfo 获取卖家账户信息]
 * @param  [type] $userId [description]
 * @return [type]         [description]
 */
function getSellerInfo($userId)
{
    $sql = "SELECT * FROM " .$GLOBALS['ecs']->table('user_seller'). " WHERE user_id = '$userId'";
    $row = $GLOBALS['db']->getRow($sql);

    $row['show_user_money'] = price_format($row['user_money'], false);//显示可用资金
    $row['show_frozen_money'] = price_format($row['frozen_money'], false);//显示冻结资金
    $row['show_spread'] = price_format($row['spread'], false);//显示可用资金
    $row['show_pickup'] = price_format($row['pickup'], false);//显示冻结资金
    return $row;
}
/**
 * [setSellerInfo 设置卖家信息]
 * @param    [type]         $userId [用户id]
 * @param    [type]         $key    [修改字段]
 * @param    [type]         $value  [修改值]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-20
 */
function setSellerInfo($userId, $key, $value, $extra = false)
{
    if ($extra) {
        $sql = 'UPDATE ' . $GLOBALS['ecs']->table('user_seller') . " SET `$key`=$key+('$value')  WHERE `user_id`='" . $userId . "'";
    } else {
        $sql = 'UPDATE ' . $GLOBALS['ecs']->table('user_seller') . " SET `$key`='$value'  WHERE `user_id`='" . $userId . "'";
    }
    return $GLOBALS['db']->query($sql);
}
/**
 * [isSeller 是否是卖家]
 * @param  [type]  $userId [description]
 * @return boolean         [description]
 */
function isSeller($userId)
{
    $sql = "SELECT COUNT('user_id') FROM " .$GLOBALS['ecs']->table('user_seller'). " WHERE user_id = '$userId'";
    return $GLOBALS['db']->getOne($sql);
}
/**
 * [logSellerAccountChange 商家账户变化]
 * @param    [type]         $sellerId   [商家id]
 * @param    integer        $userId     [用户id]
 * @param    integer        $money      [成交金额]
 * @param    string         $changeDesc [内容]
 * @param    [type]         $changeType [样式]
 * @return   [type]                     [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-11
 */
function logSellerAccountChange($sellerId, $userId = 0, $money = 0, $changeDesc = '', $changeType = ACT_OTHER, $frozenMoney = 0)
{
    $account_log = array(
        'seller_id'     => $sellerId,
        'user_id'       => $userId,
        'money'         => $money,
        'frozen_money'  => $frozenMoney,
        'change_time'   => gmtime(),
        'change_desc'   => $changeDesc,
        'change_type'   => $changeType
    );
    $GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('account_seller_log'), $account_log, 'INSERT');

    /* 更新用户信息 */
    $sql = "UPDATE " . $GLOBALS['ecs']->table('user_seller') .
            " SET user_money = user_money + ('$money')," .
            " frozen_money = frozen_money + ('$frozenMoney')" .
            " WHERE user_id = '$sellerId' LIMIT 1";
    $GLOBALS['db']->query($sql);
}
/**
 * [gasOrder 加油订单]
 * @param    [type]         $sellerId     [商家id]
 * @param    integer        $userId       [买家id]
 * @param    integer        $vipMoney     [vip支付金额]
 * @param    integer        $money        [余额支付金额]
 * @param    integer        $arrivalMoney [商家到账金额]
 * @param    string         $name         [订单名称]
 * @return   [type]                       [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-12
 */
function gasOrder($sellerId, $userId = 0, $vipMoney = 0, $money = 0, $arrivalMoney = 0, $name = '', $children = 0)
{
    $gasOrder = array(
        'order_id'      => date('YmdHis') . mt_rand(1000, 9999),
        'seller_id'     => $sellerId,
        'user_id'       => $userId,
        'vip_money'     => $vipMoney,
        'money'         => $money,
        'arrival_money' => $arrivalMoney,
        'name'          => $name,
        'children'     => $children,
        'time'   => gmtime(),
    );
    $GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('order_gas'), $gasOrder, 'INSERT');
}
/**
 * [getUserInfo 获取用户字段信息]
 * @param    [type]         $userId [用户id]
 * @param    string         $field  [获取字段信息]
 * @return   [type]                 [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-12
 */
function getUserInfo($userId, $field = 'user_name')
{
    $sql = "SELECT $field FROM " .$GLOBALS['ecs']->table('users'). " WHERE user_id = '$userId'";
    return $GLOBALS['db']->getOne($sql);
}
/**
 * [getUserId 根据字段获取用户id]
 * @param    [type]         $value [默认user_name]
 * @param    string         $field [description]
 * @return   [type]                [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-12
 */
function getUserId($value, $field = 'user_name')
{
    $sql = "SELECT user_id FROM " .$GLOBALS['ecs']->table('users'). " WHERE $field = '$value'";
    return $GLOBALS['db']->getOne($sql);
}
/**
 * [payGasCheckInput 消费油检测输入]
 * @return [type] [description]
 */
function payGasCheckInput($userId)
{
    $VerifyingId = $_SESSION['VerifyingId'];//读取验证ID
    $amount = $_REQUEST['amount'];
    $payment = $_REQUEST['payment'];
    $sellerId = $_REQUEST['sellerId'];
    $Verifying= $_REQUEST['Verifying'];

    // 进行验证 防止非法请求
    if ($Verifying != md5($sellerId.$VerifyingId.$userId)) {
        show_message('验证失败非法请求', '', $_REQUEST['callblock'], 'error');
    }
    if (empty($amount)) {
        show_message('支付金额不能为零', '', $_REQUEST['callblock'], 'error');
    }
    if (empty($payment)) {
        show_message('请选择支付方式', '', $_REQUEST['callblock'], 'error');
    }
    if (empty($sellerId)) {
        show_message('没有选择商家', '', $_REQUEST['callblock'], 'error');
    }
    if (!isSeller($sellerId)) {
        show_message('商家不存在', '', $_REQUEST['callblock'], 'error');
    }
    $userInfo = get_user_default($userId);
    if ($payment == 'money' && $amount > $userInfo['user_money']) {
        show_message('您的余额不足', '充值', 'user.php?act=account_deposit_card', false);
    }
    if ($payment == 'vip_money' && $amount > $userInfo['vip_money']) {
        show_message('您的VIP余额不足', '充值', 'user.php?act=account_deposit_card', false);
    }
    $input['sellerInfo'] = getSellerInfo($sellerId);
    $input['money'] = 0;
    $input['vip_money'] = 0;
    //  计算到账金额 扣款金额
    if ($payment == 'money') {
        $input['money'] = $amount;
        $input['accountAmount'] = sprintf("%.2f", $amount/getShopConfigValue('seller_arrival'));//商家到账金额 四舍五入
    } elseif ($payment == 'vip_money') {
        $input['vip_money'] = $amount;
        $input['accountAmount'] = sprintf("%.2f", $amount/getShopConfigValue('seller_vip_arrival'));//商家到账金额 四舍五入
    }
    $input['userInfo'] = $userInfo;
    $input['payment'] = $payment;
    $input['sellerId'] = $sellerId;
    return $input;
}
/**
 * [insertSellerAccount 插入卖家账目明细]
 * @param    [type]         $surplus [description]
 * @param    [type]         $amount  [description]
 * @return   [type]                  [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-18
 */
function insertSellerAccount($surplus, $amount)
{
    if (empty($surplus['cash_amount'])) {
        $surplus['cash_amount'] = 0;
    }
    $sql = 'INSERT INTO ' .$GLOBALS['ecs']->table('user_seller_account').
           ' (user_id, admin_user, amount, arrival, cash_amount, add_time, paid_time, admin_note, user_note, process_type, payment, is_paid)'.
            " VALUES ('$surplus[user_id]', '', '$amount', '$surplus[arrival]', '$surplus[cash_amount]', '".gmtime()."', 0, '', '$surplus[user_note]', '$surplus[process_type]', '$surplus[payment]', 0)";
    $GLOBALS['db']->query($sql);

    return $GLOBALS['db']->insert_id();
}
/**
 * 更新会员账目明细
 *
 * @access  public
 * @param   array     $surplus  会员余额信息
 *
 * @return  int
 */
function updateSellerAccount($surplus)
{
    $sql = 'UPDATE ' .$GLOBALS['ecs']->table('user_seller_account'). ' SET '.
           "amount     = '$surplus[amount]', ".
           "user_note  = '$surplus[user_note]', ".
           "payment    = '$surplus[payment]' ".
           "WHERE id   = '$surplus[rec_id]'";
    $GLOBALS['db']->query($sql);

    return $surplus['rec_id'];
}
/**
 * [sellerCash 用户提现]
 * @param    [type]         $user_id [description]
 * @param    [type]         $amount  [description]
 * @return   [type]                  [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-19
 */
function sellerCash($userId, $amount)
{
    $surplus = array(
            'user_id'      => $userId,
            'rec_id'       => 0,
            'process_type' => 1,
            'payment_id'   => 0,
            'user_note'    => '',
    );

    $sellerCashCost = sprintf("%.2f", $amount*getShopConfigValue('seller_cash')/100, $n);//四舍五入
    $amountCost = $amount-$sellerCashCost;

    //插入会员账目明细
    $surplus['arrival'] = $amountCost;//到账金额
    $surplus['payment'] = '卖家提现';
    $surplus['cash_amount'] = $sellerCashCost;

    $surplus['rec_id']  = insertSellerAccount($surplus, -1*$amount);
    if ($surplus['rec_id'] > 0) {
        logSellerAccountChange($userId, $userId, -1*$amount, '提现冻结', ACT_DRAWING, $amount);//提现冻结资金
    }
    return $surplus;
}
/**
 * 查询会员余额的操作记录
 *
 * @access  public
 * @param   int     $user_id    会员ID
 * @param   int     $num        每页显示数量
 * @param   int     $start      开始显示的条数
 * @return  array
 */
/**
 * [getSellerAccountLog 查询卖家余额的操作记录 提现 充值]
 * @param    [type]         $user_id [description]
 * @param    [type]         $num     [description]
 * @param    [type]         $start   [description]
 * @return   [type]                  [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-18
 */
function getSellerAccountLog($user_id, $num, $start)
{
    $account_log = array();
    $sql = 'SELECT * FROM ' .$GLOBALS['ecs']->table('user_seller_account').
           " WHERE user_id = '$user_id'" .
           " AND process_type " . db_create_in(array(SURPLUS_SAVE, SURPLUS_RETURN)) .
           " ORDER BY add_time DESC";
    $res = $GLOBALS['db']->selectLimit($sql, $num, $start);

    if ($res) {
        while ($rows = $GLOBALS['db']->fetchRow($res)) {
            $rows['add_time']         = local_date($GLOBALS['_CFG']['date_format'], $rows['add_time']);
            $rows['admin_note']       = nl2br(htmlspecialchars($rows['admin_note']));
            $rows['short_admin_note'] = ($rows['admin_note'] > '') ? sub_str($rows['admin_note'], 30) : 'N/A';
            $rows['user_note']        = nl2br(htmlspecialchars($rows['user_note']));
            $rows['short_user_note']  = ($rows['user_note'] > '') ? sub_str($rows['user_note'], 30) : 'N/A';
            $rows['pay_status']       = ($rows['is_paid'] == 0) ? $GLOBALS['_LANG']['un_confirm'] : $GLOBALS['_LANG']['is_confirm'];
            $rows['amount']           = price_format(abs($rows['amount']), false);
            $rows['show_arrival']     = price_format(abs($rows['arrival']), false);
            $rows['show_cash_amount'] = price_format(abs($rows['cash_amount']), false);
            if ($rows['vip_money'] != 0.00) {
                $rows['jiubi'] = $rows['vip_money'];
            } else {
                $rows['jiubi'] = $rows['arrival'];
            }
            /* 会员的操作类型： 冲值，提现 */
            if ($rows['process_type'] == 0) {
                $rows['type'] = $GLOBALS['_LANG']['surplus_type_0'];
            } else {
                $rows['type'] = $GLOBALS['_LANG']['surplus_type_1'];
            }

            /* 支付方式的ID */
            $sql = 'SELECT pay_id FROM ' .$GLOBALS['ecs']->table('payment').
                   " WHERE pay_name = '$rows[payment]' AND enabled = 1";
            $pid = $GLOBALS['db']->getOne($sql);

            /* 如果是预付款而且还没有付款, 允许付款 */
            if (($rows['is_paid'] == 0) && ($rows['process_type'] == 0)) {
                $rows['handle'] = '<a href="seller.php?act=pay&id='.$rows['id'].'&pid='.$pid.'">'.$GLOBALS['_LANG']['pay'].'</a>';
            }

            $account_log[] = $rows;
        }
        return $account_log;
    } else {
        return false;
    }
}
/**
 * [delSellerAccount 删除未确认账目]
 * @param    [type]         $rec_id  [description]
 * @param    [type]         $user_id [description]
 * @return   [type]                  [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-18
 */
function delSellerAccount($rec_id, $user_id)
{
    refundCash($rec_id);
    $sql = 'DELETE FROM ' .$GLOBALS['ecs']->table('user_seller_account').
           " WHERE is_paid = 0 AND id = '$rec_id' AND user_id = '$user_id'";

    return $GLOBALS['db']->query($sql);
}
/**
 * [refundCash 如果订单是提现退款到卖家余额里面]
 * @param    [type]         $surplus_id [会员余额的ID]
 * @return   [type]                     [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-18
 */
function refundCash($surplus_id)
{
    $surplusInfo = getSurplusInfo($surplus_id);//获取当前订单信息
    if ($surplusInfo['process_type'] == SURPLUS_RETURN) {//处理取消退款
        $sellerInfo = getSellerInfo($surplusInfo['user_id']);
        $amount = abs($surplusInfo['amount']);
        if ($amount <= $sellerInfo['frozen_money']) {
            logSellerAccountChange($surplusInfo['user_id'], $surplusInfo['user_id'], $amount, '取消提现', ACT_ADJUSTING, -1*$amount);//提现冻结资金
        }
    }
}
/**
 * [getSurplusInfo 根据ID获取当前余额操作信息]
 * @param    [type]         $surplus_id [会员余额的ID]
 * @return   [type]                     [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-18
 */
function getSurplusInfo($surplus_id)
{
    $sql = 'SELECT * FROM ' .$GLOBALS['ecs']->table('user_seller_account').
           " WHERE id = '$surplus_id'";

    return $GLOBALS['db']->getRow($sql);
}
/**
 * [sellerToUserVipMoney 商家充值用户vip余额]
 * @param    [type]         $sellerId [商家id]
 * @param    [type]         $userId   [用户id]
 * @param    [type]         $money    [充值金额]
 * @return   [type]                   [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-19
 */
function sellerToUserVipMoney($sellerId, $userId, $money)
{
    $sellerMoney = $money/getShopConfigValue('seller_deposit_percent');//商家充值扣款比例 后的商家实际消费金额
    logSellerAccountChange($sellerId, $userId, -1*$sellerMoney, 'vip充值消费', ACT_ADJUSTING);//改变商家余额
    log_account_change($userId, 0, 0, 0, 0, '商家vip充值', ACT_SAVING, $money, $money);
    return true;
}
/**
 * [getPickupPoint 获取自提点信息]
 * @return   [type]         [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-20
 */
function getPickupPoint($userId)
{
    $pickupPoint = array();
    $sellerInfo = getSellerInfo($userId);
    if ($sellerInfo['pickup_point']) {
        $sql = "SELECT * FROM " .$GLOBALS['ecs']->table('pickup_point'). " WHERE id='$sellerInfo[pickup_point]'";
        $pickupPoint = $GLOBALS['db']->GetRow($sql);
    }
    return $pickupPoint;
}
/**
 * [idGetPickupPoint 通过id获取]
 * @param    [type]         $userId [description]
 * @return   [type]                 [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-20
 */
function idGetPickupPoint($id)
{
    $sql = "SELECT * FROM " .$GLOBALS['ecs']->table('pickup_point'). " WHERE id='$id'";
    return $GLOBALS['db']->GetRow($sql);
}
/**
 * [setPickupPoint 设置自提点信息]
 * @param    [type]         $userId [商家id]
 * @param    [type]         $post   [post数据]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-20
 */
function setPickupPoint($userId, $post)
{
    $sellerInfo = getSellerInfo($userId);
    if ($sellerInfo['pickup_point']) {
        $sql = 'UPDATE ' . $GLOBALS['ecs']->table('pickup_point') . " SET
            `shop_name`='$sellerInfo[name]',
            `address`='$post[address]',
            `contact`='$post[contact]',
            `phone`='$post[phone]',
            `province_id`='$post[province]',
            `city_id`='$post[city]',
            `district_id`='$post[district]'
        WHERE `id`='" . $sellerInfo['pickup_point'] . "'";
        return $GLOBALS['db']->query($sql);
    } else {
        $sql = "INSERT INTO ".$GLOBALS['ecs']->table('pickup_point')."(shop_name, address, contact, phone, province_id, ".
                    "city_id, district_id) ".
                "VALUES ('$sellerInfo[name]', '$post[address]', '$_POST[contact]', '$post[phone]', ".
                    "'$post[province]', '$post[city]', '$_POST[district]')";
        if ($GLOBALS['db']->query($sql)) {
            $pickupPointId = $GLOBALS['db']->insert_id();
            return setSellerInfo($userId, 'pickup_point', $pickupPointId);
        }
    }
}
/**
 * [getPickupPointOrders 获取自提点制定范围订单]
 * @param    [type]         $user_id [description]
 * @param    integer        $num     [列表最大数量]
 * @param    integer        $start   [列表起始位置]
 * @return   [type]                  [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-20
 */
function getPickupPointOrders($pickupPoint, $num = 10, $start = 0)
{
    /* 取得订单列表 */
    $arr    = array();

    $sql = "SELECT order_id, order_sn, order_status, shipping_status, pay_status, add_time, is_pickup, pickup_money," .
           "(goods_amount + shipping_fee + insure_fee + pay_fee + pack_fee + card_fee + tax - discount) AS total_fee ".
           " FROM " .$GLOBALS['ecs']->table('order_info') .
           " WHERE pickup_point = '$pickupPoint' ORDER BY add_time DESC";
    $res = $GLOBALS['db']->SelectLimit($sql, $num, $start);

    while ($row = $GLOBALS['db']->fetchRow($res)) {
        $row['shipping_status'] = ($row['shipping_status'] == SS_SHIPPED_ING) ? SS_PREPARING : $row['shipping_status'];
        $row['order_status'] = $GLOBALS['_LANG']['os'][$row['order_status']] . ',' . $GLOBALS['_LANG']['ps'][$row['pay_status']] . ',' . $GLOBALS['_LANG']['ss'][$row['shipping_status']];

        $arr[] = array('order_id'       => $row['order_id'],
                       'order_sn'       => $row['order_sn'],
                       'order_time'     => local_date($GLOBALS['_CFG']['time_format'], $row['add_time']),
                       'order_status'   => $row['order_status'],
                       'pickup_money'   => price_format($row['pickup_money'], false),
                       'total_fee'      => price_format($row['total_fee'], false)
                   );
    }

    return $arr;
}
/**
 * [getSpreadOrders 获取自提点制定范围订单]
 * @param    [type]         $user_id [description]
 * @param    integer        $num     [列表最大数量]
 * @param    integer        $start   [列表起始位置]
 * @return   [type]                  [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-20
 */
function getSpreadOrders($spread_id, $num = 10, $start = 0, $pickup_point)
{
    /* 取得订单列表 */
    $arr    = array();

    $sql = "SELECT order_id, order_sn, order_status, shipping_status, pay_status, add_time, is_pickup, spread_money, pickup_point, spread_id, children_spread_id," .
           "(goods_amount + shipping_fee + insure_fee + pay_fee + pack_fee + card_fee + tax - discount) AS total_fee ".
           " FROM " .$GLOBALS['ecs']->table('order_info') .
           " WHERE spread_id = '$spread_id' ORDER BY add_time DESC";
    $res = $GLOBALS['db']->SelectLimit($sql, $num, $start);

    while ($row = $GLOBALS['db']->fetchRow($res)) {
        $row['shipping_status'] = ($row['shipping_status'] == SS_SHIPPED_ING) ? SS_PREPARING : $row['shipping_status'];
        $row['order_status'] = $GLOBALS['_LANG']['os'][$row['order_status']] . ',' . $GLOBALS['_LANG']['ps'][$row['pay_status']] . ',' . $GLOBALS['_LANG']['ss'][$row['shipping_status']];

        if ($row['pickup_point'] == $pickup_point) {
            $pickup_point_title = '<b style="color:#67C23A">本站点取货</b>';
        } else {
            $pickup_point_title = '<b style="color:#F56C6C">非本站点取货</b>';
        }
        if ($row['children_spread_id']>0) {
            $sellerInfo = getSellerInfo($row['children_spread_id']);
        } else {
            $sellerInfo = getSellerInfo($row['spread_id']);
        }
        $arr[] = array('order_id'       => $row['order_id'],
                       'order_sn'       => $row['order_sn'],
                       'order_time'     => local_date($GLOBALS['_CFG']['time_format'], $row['add_time']),
                       'order_status'   => $row['order_status'],
                       'pickup_point_title'   => $pickup_point_title,
                       'spread_user_name' => $sellerInfo['user_name'],
                       'spread_money'   => price_format($row['spread_money'], false),
                       'total_fee'      => price_format($row['total_fee'], false)
                   );
    }
    return $arr;
}
/**
 *  获取指订单的详情
 *
 * @access  public
 * @param   int         $order_id       订单ID
 * @param   int         $user_id        用户ID
 *
 * @return   arr        $order          订单所有信息的数组
 */
function getOrderDetail($order_id, $pickupPoint = 0, $spreadId = 0)
{
    include_once(ROOT_PATH . 'includes/lib_order.php');

    $order_id = intval($order_id);
    if ($order_id <= 0) {
        $GLOBALS['err']->add($GLOBALS['_LANG']['invalid_order_id']);

        return false;
    }
    $order = order_info($order_id);

    //检查订单是否属于该自提点
    if ($pickupPoint>0 && $pickupPoint != $order['pickup_point'] && $spreadId>0 && $spreadId != $order['spread_id']) {
        $GLOBALS['err']->add('你没有权限查看此订单');
        return false;
    }

    /* 对发货号处理 */
    if (!empty($order['invoice_no'])) {
        $shipping_code = $GLOBALS['db']->GetOne("SELECT shipping_code FROM ".$GLOBALS['ecs']->table('shipping') ." WHERE shipping_id = '$order[shipping_id]'");
        $plugin = ROOT_PATH.'includes/modules/shipping/'. $shipping_code. '.php';
        if (file_exists($plugin)) {
            include_once($plugin);
            $shipping = new $shipping_code;
            //$order['invoice_no'] = $shipping->query($order['invoice_no']);
        }
    }
    /* 获取订单中实体商品数量 */
    $order['exist_real_goods'] = exist_real_goods($order_id);

    /* 无配送时的处理 */
    $order['shipping_id'] == -1 and $order['shipping_name'] = $GLOBALS['_LANG']['shipping_not_need'];

    /* 其他信息初始化 */
    $order['how_oos_name']     = $order['how_oos'];
    $order['how_surplus_name'] = $order['how_surplus'];

    /* 虚拟商品付款后处理 */
    if ($order['pay_status'] != PS_UNPAYED) {
        /* 取得已发货的虚拟商品信息 */
        $virtual_goods = get_virtual_goods($order_id, true);
        $virtual_card = array();
        foreach ($virtual_goods as $code => $goods_list) {
            /* 只处理虚拟卡 */
            if ($code == 'virtual_card') {
                foreach ($goods_list as $goods) {
                    if ($info = virtual_card_result($order['order_sn'], $goods)) {
                        $virtual_card[] = array('goods_id'=>$goods['goods_id'], 'goods_name'=>$goods['goods_name'], 'info'=>$info);
                    }
                }
            }
            /* 处理超值礼包里面的虚拟卡 */
            if ($code == 'package_buy') {
                foreach ($goods_list as $goods) {
                    $sql = 'SELECT g.goods_id FROM ' . $GLOBALS['ecs']->table('package_goods') . ' AS pg, ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
                           "WHERE pg.goods_id = g.goods_id AND pg.package_id = '" . $goods['goods_id'] . "' AND extension_code = 'virtual_card'";
                    $vcard_arr = $GLOBALS['db']->getAll($sql);

                    foreach ($vcard_arr as $val) {
                        if ($info = virtual_card_result($order['order_sn'], $val)) {
                            $virtual_card[] = array('goods_id'=>$goods['goods_id'], 'goods_name'=>$goods['goods_name'], 'info'=>$info);
                        }
                    }
                }
            }
        }
        $var_card = deleteRepeat($virtual_card);
        $GLOBALS['smarty']->assign('virtual_card', $var_card);
    }

    /* 确认时间 支付时间 发货时间 */
    if ($order['confirm_time'] > 0 && ($order['order_status'] == OS_CONFIRMED || $order['order_status'] == OS_SPLITED || $order['order_status'] == OS_SPLITING_PART)) {
        $order['confirm_time'] = sprintf($GLOBALS['_LANG']['confirm_time'], local_date($GLOBALS['_CFG']['time_format'], $order['confirm_time']));
    } else {
        $order['confirm_time'] = '';
    }
    if ($order['pay_time'] > 0 && $order['pay_status'] != PS_UNPAYED) {
        $order['pay_time'] = sprintf($GLOBALS['_LANG']['pay_time'], local_date($GLOBALS['_CFG']['time_format'], $order['pay_time']));
    } else {
        $order['pay_time'] = '';
    }
    if ($order['shipping_time'] > 0 && in_array($order['shipping_status'], array(SS_SHIPPED, SS_RECEIVED))) {
        $order['shipping_time'] = sprintf($GLOBALS['_LANG']['shipping_time'], local_date($GLOBALS['_CFG']['time_format'], $order['shipping_time']));
    } else {
        $order['shipping_time'] = '';
    }

    return $order;
}
/**
 * [updateSellerSpread 更新商家推荐分成分成]
 * @param    [type]         $orderId  [description]
 * @param    [type]         $profit   [description]
 * @param    [type]         $spreadId [description]
 * @return   [type]                   [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2018-01-18
 */
function updateSellerSpread($orderId, $profit, $userId, $children_spread_id = 0)
{
    $sellerInfo = getSellerInfo($userId);
    $spread = $profit*$sellerInfo['spread_ratio'];//分成金额
    setSellerInfo($userId, 'spread', $spread, true);//增加分成
    if ($children_spread_id>0) {
        setSellerInfo($children_spread_id, 'spread', $spread, true);//增加加油员分成
    }
    $sql = "UPDATE " . $GLOBALS['ecs']->table('order_info') .
            " SET spread_money = '$spread'" .
            " WHERE order_id = '$orderId' LIMIT 1";
    $GLOBALS['db']->query($sql);
}
/**
 * [updateSellerPickup 更新商家自提点分成分成]
 * @param    [type]         $orderId [description]
 * @param    [type]         $profit  [description]
 * @param    [type]         $pickupId  [description]
 * @return   [type]                  [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2018-01-18
 */
function updateSellerPickup($orderId, $profit, $pickupId)
{
    $sellerInfo = getPickupSellerInfo($pickupId);
    ;
    $pickup = $profit*$sellerInfo['pickup_ratio'];//分成金额
    setSellerInfo($sellerInfo['user_id'], 'pickup', $pickup+$sellerInfo['pickup']);//增加分成
    $sql = "UPDATE " . $GLOBALS['ecs']->table('order_info') .
            " SET pickup_money = '$pickup'" .
            " WHERE order_id = '$orderId' LIMIT 1";
    $GLOBALS['db']->query($sql);
}
/**
 * [getSellerInfo 获取卖家账户信息]
 * @param  [type] $userId [description]
 * @return [type]         [description]
 */
function getPickupSellerInfo($pickupId)
{
    $sql = "SELECT * FROM " .$GLOBALS['ecs']->table('user_seller'). " WHERE pickup_point = '$pickupId'";
    $row = $GLOBALS['db']->getRow($sql);
    return $row;
}
