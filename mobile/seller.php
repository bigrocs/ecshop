<?php

/**
 * ECSHOP 商家中心
 * bigrocs@qq.com
*/

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');

/* 载入语言文件 */
require_once(ROOT_PATH . 'lang/' .$_CFG['lang']. '/seller.php');
include_once(ROOT_PATH .'include/lib_seller.php');

$user_id = $_SESSION['user_id'];
$action  = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'default';
$sellerInfo = getSellerInfo($user_id);
$smarty->assign('insurance', $sellerInfo['insurance']);//是否是保险公司
$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);

$smarty->assign('categories', get_categories_tree());  // 分类树
$back_act='';
$smarty->assign('_CFG', $_CFG);//附加系统配置

// 不需要登录的操作或自己验证是否登录（如ajax处理）的act
// $not_login_arr =
// array('login','act_login','register','act_register','act_edit_password','get_password','send_pwd_email','send_pwd_mobile','password', 'signin', 'add_tag', 'collect', 'return_to_cart', 'logout', 'email_list', 'validate_email', 'send_hash_mail', 'order_query', 'is_registered', 'check_email','clear_history','qpassword_name', 'get_passwd_question', 'check_answer','oath' , 'oath_login', 'other_login', 'mpassword_name');
$not_login_arr =
array('oil');

/* 显示页面的action列表 */
// **chognzhi account_deposit_card
// $ui_arr = array('register', 'login', 'profile', 'order_list', 'order_detail', 'address_list', 'collection_list',
// 'message_list', 'tag_list', 'get_password', 'reset_password', 'booking_list', 'add_booking', 'account_raply',
// 'account_deposit', 'account_deposit_card', 'account_log', 'account_detail', 'act_account', 'pay', 'default', 'bonus', 'group_buy', 'group_buy_detail', 'affiliate', 'comment_list','validate_email','track_packages', 'transform_points','qpassword_name','mpassword_name', 'get_passwd_question','send_pwd_mobile', 'check_answer','bindmobile');
/* 显示页面的action列表 */
$ui_arr = array(
    'default',
    'info',
    'act_info',
    'account_log',
    'gas',
    'order_list',
    'cash',
    'act_cash',
    'seller_account',
    'vip_deposit',
    'act_vip_deposit',
    'pickup_point',
    'act_pickup_point',
    'pickup_point_order',
    'pickup_point_order_detail',
    'seller_deposit',
    'act_seller_deposit',
    'pay',
    'extension'
);
/* 未登录处理 */
if (empty($_SESSION['user_id'])) {
    if (!in_array($action, $not_login_arr)) {
        if (in_array($action, $ui_arr)) {
            /* 如果需要登录,并是显示页面的操作，记录当前操作，用于登录后跳转到相应操作
            if ($action == 'login')
            {
                if (isset($_REQUEST['back_act']))
                {
                    $back_act = trim($_REQUEST['back_act']);
                }
            }
            else
            {}*/
            // if (!empty($_SERVER['QUERY_STRING'])) {
            //     $back_act = 'user.php?' . strip_tags($_SERVER['QUERY_STRING']);
            // }
            // $action = 'login';
            ecs_header("Location: user.php?act=login\n");
        } else {
            //未登录提交数据。非正常途径提交数据！
            die($_LANG['require_login']);
        }
    }
}

/* 如果是显示页面，对页面进行相应赋值 */
if (in_array($action, $ui_arr)) {
    assign_template();
    $position = assign_ur_here(0, $_LANG['seller_center']);
    $smarty->assign('page_title', $position['title']); // 页面标题
    $smarty->assign('ur_here', $position['ur_here']);

    // 检查是否是卖家
    if (!isSeller($user_id)) {
        show_message($_LANG['seller_jurisdiction'], $_LANG['seller_user'], 'user.php', 'error');
    }
    $smarty->assign('car_off', $car_off);
    // 修改是否是卖家
    //
    /* 是否显示积分兑换 */
    if (!empty($_CFG['points_rule']) && unserialize($_CFG['points_rule'])) {
        $smarty->assign('show_transform_points', 1);
    }
    $smarty->assign('helps', get_shop_help());        // 网店帮助
    $smarty->assign('data_dir', DATA_DIR);   // 数据目录
    $smarty->assign('action', $action);
    $smarty->assign('lang', $_LANG);
}

//用户中心欢迎页
if ($action == 'default') {
    include_once(ROOT_PATH .'include/lib_clips.php');
    if ($rank = get_rank_info()) {
        $smarty->assign('rank_name', sprintf($_LANG['your_level'], $rank['rank_name']));
        if (!empty($rank['next_rank_name'])) {
            $smarty->assign('next_rank_name', sprintf($_LANG['next_level'], $rank['next_rank'], $rank['next_rank_name']));
        }
    }
    $smarty->assign('sellerInfo', getSellerInfo($user_id));
    $smarty->assign('info', get_user_default($user_id));
    $smarty->assign('user_notice', $_CFG['user_notice']);
    $smarty->assign('prompt', get_user_prompt($user_id));
    $smarty->display('seller_clips.dwt');
}
/* 卖家油品销售页面 */
elseif ($action == 'gas') {
    $gasUrl = $ecs->url().'user.php?act=gas&sellerId='.$user_id;
    $smarty->assign('userId', $user_id);
    $smarty->assign('gasUrl', $gasUrl);
    $smarty->display('seller_clips.dwt');
}
/* 卖家油品销售页面 */
/* 卖家资料页面 */
elseif ($action == 'info') {
    $smarty->assign('sellerInfo', getSellerInfo($user_id));
    $smarty->display('seller_clips.dwt');
}
/* 卖家资料页面 */
/* 卖家资料保存 */
elseif ($action == 'act_info') {
    $name = $_POST['name'];
    $bank = $_POST['bank'];
    $bank_name = $_POST['bank_name'];
    $bank_account = $_POST['bank_account'];
    $sql = 'UPDATE ' . $ecs->table('user_seller') . " SET `name`='$name', `bank`='$bank', `bank_name`='$bank_name', `bank_account`='$bank_account'  WHERE `user_id`='" . $user_id . "'";
    $db->query($sql);
    show_message($_LANG['seller_edit_info'], $_LANG['back_page_up'], '', 'info');
}
/* 卖家资料保存 */
/* 卖家资金记录 */
elseif ($action == 'account_log') {
    $page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;

    $account_type = 'money';

    /* 获取记录条数 */
    $sql = "SELECT COUNT(*) FROM " .$ecs->table('account_seller_log').
           " WHERE seller_id = '$user_id'" .
           " AND $account_type <> 0 ";
    $record_count = $db->getOne($sql);

    //分页函数
    $pager = get_pager('seller.php', array('act' => $action), $record_count, $page);


    //获取余额记录
    $account_log = array();
    $sql = "SELECT * FROM " . $ecs->table('account_seller_log') .
           " WHERE seller_id = '$user_id'" .
           " AND $account_type <> 0 " .
           " ORDER BY log_id DESC";
    $res = $GLOBALS['db']->selectLimit($sql, $pager['size'], $pager['start']);
    while ($row = $db->fetchRow($res)) {
        $row['change_time'] = local_date($_CFG['date_format'], $row['change_time']);
        $row['type'] = $row[$account_type] > 0 ? $_LANG['account_inc'] : $_LANG['account_dec'];
        $row['seller_money'] = price_format(abs($row['money']), false);
        $row['short_change_desc'] = sub_str($row['change_desc'], 60);
        $row['amount'] = $row[$account_type];
        $account_log[] = $row;
    }

    //模板赋值
    $smarty->assign('account_log', $account_log);
    $smarty->assign('pager', $pager);
    $smarty->display('seller_clips.dwt');
}
/* 卖家资金记录 */
/* 卖家订单列表 */
elseif ($action == 'order_list') {
    $page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;

    $account_type = 'money';

    /* 获取记录条数 */
    $sql = "SELECT COUNT(*) FROM " .$ecs->table('order_gas').
           " WHERE seller_id = '$user_id'";
    $record_count = $db->getOne($sql);

    //分页函数
    $pager = get_pager('seller.php', array('act' => $action), $record_count, $page);


    //获取余额记录
    $orderGas = array();
    $sql = "SELECT us.user_name,o.order_id,o.seller_id,o.user_id,o.vip_money,o.time,o.money,o.arrival_money,o.name FROM " . $ecs->table('order_gas') ." AS o,".
            $ecs->table('users') . ' AS us '.
           " WHERE o.user_id = us.user_id AND o.seller_id = '$user_id'" .
           " ORDER BY id DESC";
    $res = $GLOBALS['db']->selectLimit($sql, $pager['size'], $pager['start']);
    while ($row = $db->fetchRow($res)) {
        $row['change_time'] = local_date($_CFG['date_format'], $row['time']);
        $row['show_arrival_money'] = price_format(abs($row['arrival_money']), false);
        $row['show_money'] = price_format(abs($row['money']), false);
        $row['show_vip_money'] = price_format(abs($row['vip_money']), false);
        $row['short_change_desc'] = sub_str($row['name'], 60);
        $row['amount'] = $row[$account_type];
        $orderGas[] = $row;
    }
    //模板赋值
    $smarty->assign('orderGas', $orderGas);
    $smarty->assign('pager', $pager);
    $smarty->display('seller_clips.dwt');
}
/* 卖家订单列表 */
/* 卖家提现页面 */
if ($action == 'cash') {
    $smarty->assign('sellerCash', getShopConfigValue('seller_cash'));
    $smarty->assign('sellerInfo', getSellerInfo($user_id));
    $smarty->display('seller_clips.dwt');
}
/* 卖家提现页面 */
/* 卖家提现处理 */
if ($action == 'act_cash') {
    if (!($_POST['money']>0)) {
        show_message('请输入正确的提现金额', $_LANG['back_page_up'], '', 'info');
    }
    $sellerInfo = getSellerInfo($user_id);
    if (!($_POST['money'] <= $sellerInfo['user_money'])) {
        show_message('提现金额超过余额', $_LANG['back_page_up'], '', 'info');
    }

    $surplus = sellerCash($user_id, $_POST['money']);//卖家提现

    /* 如果成功提交 */
    if ($surplus['rec_id'] > 0) {
        $content = $_LANG['surplus_appl_submit'];
        show_message($content, $_LANG['back_account_log'], 'seller.php?act=seller_account', 'info');
    } else {
        $content = $_LANG['process_false'];
        show_message($content, $_LANG['back_page_up'], '', 'info');
    }
}
/* 卖家提现处理 */
/* 卖家申请提现充值记录 */
if ($action == 'seller_account') {
    $page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;

    /* 获取记录条数 */
    $sql = "SELECT COUNT(*) FROM " .$ecs->table('user_seller_account').
           " WHERE user_id = '$user_id'" .
           " AND process_type " . db_create_in(array(SURPLUS_SAVE, SURPLUS_RETURN));
    $record_count = $db->getOne($sql);

    //分页函数
    $pager = get_pager('seller.php', array('act' => $action), $record_count, $page);

    //获取余额记录
    $account_log = getSellerAccountLog($user_id, $pager['size'], $pager['start']);

    //模板赋值
    $smarty->assign('account_log', $account_log);
    $smarty->assign('pager', $pager);
    $smarty->display('seller_clips.dwt');
}
/* 卖家申请提现充值记录 */
/* 删除未确认账目 */
if ($action == 'cancel') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    if ($id == 0 || $user_id == 0) {
        ecs_header("Location: seller.php?act=seller_account\n");
        exit;
    }

    $result = delSellerAccount($id, $user_id);
    if ($result) {
        ecs_header("Location: seller.php?act=seller_account\n");
        exit;
    }
}
/* 删除未确认账目 */
/* 卖家vip充值页面 */
if ($action == 'vip_deposit') {
    $smarty->assign('sellerDepositMin', getShopConfigValue('seller_deposit_min'));
    $smarty->assign('sellerInfo', getSellerInfo($user_id));
    $smarty->display('seller_clips.dwt');
}
/* 卖家vip充值页面 */
/* 卖家vip充值逻辑 */
if ($action == 'act_vip_deposit') {
    $sellerDepositMin = getShopConfigValue('seller_deposit_min');
    $money = $_POST['money'];
    if ($money < $sellerDepositMin) {
        show_message('最低充值金额'.$sellerDepositMin.'元', $_LANG['back_page_up'], '', 'error');
    }
    $sellerInfo = getSellerInfo($user_id);
    if ($money > $sellerInfo['user_money']) {
        show_message('您的余额不足请充值', '商家充值', 'seller.php?act=seller_deposit', 'error');
    }
    $userId = getUserId($_POST['username']);
    if (empty($userId)) {
        show_message('用户不存在请输入正确用户名!', $_LANG['back_page_up'], '', 'error');
    }
    $sellerId = $sellerInfo['user_id'];
    $result = sellerToUserVipMoney($sellerId, $userId, $money);
    if ($result) {
        show_message('充值成功! 充值账号:'.$_POST['username'].' 充值金额:'.$money.'元', $_LANG['back_page_up'], '', 'info');
    }
}
/* 卖家vip充值逻辑 */
/* 卖家自提点信息 */
if ($action == 'pickup_point') {
    $pickupPoint = getPickupPoint($user_id);
    $sql = 'select * from ' . $ecs->table('region') . ' where parent_id=1';
    $province_list = $db->getAll($sql);
    if (!empty($pickupPoint)) {
        $sql = 'select * from ' . $ecs->table('region') . ' where parent_id=' . $pickupPoint['province_id'];
        $city_list = $db->getAll($sql);
        $sql = 'select * from ' . $ecs->table('region') . ' where parent_id=' . $pickupPoint['city_id'];
        $district_list = $db->getAll($sql);
    }
    $smarty->assign('province_list', $province_list);
    $smarty->assign('city_list', $city_list);
    $smarty->assign('district_list', $district_list);

    $smarty->assign('pickupPoint', $pickupPoint);
    $smarty->assign('sellerInfo', getSellerInfo($user_id));
    $smarty->display('seller_clips.dwt');
}
/* 卖家自提点信息 */
/* 卖家自提点信息保存 */
if ($action == 'act_pickup_point') {
    $result = setPickupPoint($user_id, $_POST);
    if ($result) {
        show_message('保存成功', $_LANG['back_page_up'], '', 'info');
    }
}
/* 卖家自提点信息保存 */
/* 卖家自提点订单 */
if ($action == 'pickup_point_order') {
    $sellerInfo = getSellerInfo($user_id);
    $page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
    $record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('order_info'). " WHERE pickup_point = '$sellerInfo[pickup_point]'");
    $pager  = get_pager('seller.php', array('act' => $action), $record_count, $page);

    $sellerInfo = getSellerInfo($user_id);

    $orders = getPickupPointOrders($sellerInfo['pickup_point'], $pager['size'], $pager['start']);

    $smarty->assign('pager', $pager);
    $smarty->assign('orders', $orders);
    $smarty->display('seller_clips.dwt');
}
/* 卖家自提点订单 */
/* 查看订单详情 */
if ($action == 'pickup_point_order_detail') {
    include_once(ROOT_PATH . 'include/lib_transaction.php');
    include_once(ROOT_PATH . 'include/lib_payment.php');
    include_once(ROOT_PATH . 'include/lib_order.php');
    include_once(ROOT_PATH . 'include/lib_clips.php');

    $order_id = isset($_GET['order_id']) ? intval($_GET['order_id']) : 0;
    $sellerInfo = getSellerInfo($user_id);
    /* 订单详情 */
    $order = getOrderDetail($order_id, $sellerInfo['pickup_point']);

    if ($order === false) {
        $err->show($_LANG['back_home_lnk'], './');

        exit;
    }

    /* 是否显示添加到购物车 */
    if ($order['extension_code'] != 'group_buy' && $order['extension_code'] != 'exchange_goods') {
        $smarty->assign('allow_to_cart', 1);
    }

    /* 订单商品 */
    $goods_list = order_goods($order_id);
    foreach ($goods_list as $key => $value) {
        $goods_list[$key]['market_price'] = price_format($value['market_price'], false);
        $goods_list[$key]['goods_price']  = price_format($value['goods_price'], false);
        $goods_list[$key]['subtotal']     = price_format($value['subtotal'], false);
    }

    /* 订单 支付 配送 状态语言项 */
    $order['order_status'] = $_LANG['os'][$order['order_status']];
    $order['pay_status'] = $_LANG['ps'][$order['pay_status']];
    $order['shipping_status'] = $_LANG['ss'][$order['shipping_status']];


    $sql = "SELECT * FROM " .$GLOBALS['ecs']->table('pickup_point'). " WHERE id='$order[pickup_point]'";
    $pickup_point = $GLOBALS['db']->GetRow($sql);
    $smarty->assign('pickup_point', $pickup_point);
    $smarty->assign('order', $order);
    $smarty->assign('goods_list', $goods_list);
    $smarty->display('seller_clips.dwt');
}
/* 查看订单详情 */
/* 商家充值 */
if ($action == 'seller_deposit') {
    include_once(ROOT_PATH . 'include/lib_clips.php');
    $smarty->assign('payment', get_online_payment_list(false));
    $smarty->display('seller_clips.dwt');
}
/* 商家充值 */
/* 商家充值逻辑 */
if ($action == 'act_seller_deposit') {
    $amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;//根据数量计算 充值金额 默认1
    if ($amount <= 0) {
        show_message($_LANG['amount_gt_zero']);
    }
    /* 变量初始化 */
    $surplus = array(
            'user_id'      => $user_id,
            'rec_id'       => !empty($_POST['rec_id'])      ? intval($_POST['rec_id'])       : 0,
            'process_type' => isset($_POST['surplus_type']) ? intval($_POST['surplus_type']) : 0,
            'payment_id'   => isset($_POST['payment_id'])   ? intval($_POST['payment_id'])   : 0,
            'user_note'    => isset($_POST['user_note'])    ? trim($_POST['user_note'])      : '',
            'amount'       => $amount,
            'arrival'      => $amount//到账金额
    );
    if ($surplus['process_type'] == 0) {
        if ($surplus['payment_id'] <= 0) {
            show_message($_LANG['select_payment_pls']);
        }

        include_once(ROOT_PATH . 'include/lib_payment.php');
        include_once(ROOT_PATH . 'include/lib_order.php');
        include_once(ROOT_PATH . 'include/lib_clips.php');

        //获取支付方式名称
        $payment_info = array();
        $payment_info = payment_info($surplus['payment_id']);
        $surplus['payment'] = $payment_info['pay_name'];
        if ($surplus['rec_id'] > 0) {
            //更新会员账目明细
            $surplus['rec_id'] = updateSellerAccount($surplus);
        } else {
            //插入会员账目明细
            $surplus['rec_id'] = insertSellerAccount($surplus, $amount);
        }

        //取得支付信息，生成支付代码
        $payment = unserialize_config($payment_info['pay_config']);

        //生成伪订单号, 不足的时候补0
        $order = array();
        $order['order_sn']       = $surplus['rec_id'];
        $order['user_name']      = $_SESSION['user_name'];
        $order['surplus_amount'] = $amount;

        //计算支付手续费用
        $payment_info['pay_fee'] = pay_fee($surplus['payment_id'], $order['surplus_amount'], 0);

        //计算此次预付款需要支付的总金额
        $order['order_amount']   = $amount + $payment_info['pay_fee'];

        //记录支付log
        $order['log_id'] = insert_pay_log($surplus['rec_id'], $order['order_amount'], $type=PAY_SELLER_SURPLUS, 0);

        /* 调用相应的支付方式文件 */
        include_once(ROOT_PATH . 'include/modules/payment/' . $payment_info['pay_code'] . '.php');

        /* 取得在线支付方式的支付按钮 */
        $pay_obj = new $payment_info['pay_code'];
        $payment_info['pay_button'] = $pay_obj->get_code($order, $payment);

        /* 模板赋值 */
        $smarty->assign('payment', $payment_info);
        $smarty->assign('pay_fee', price_format($payment_info['pay_fee'], false));
        $smarty->assign('amount', price_format($amount, false));
        $smarty->assign('order', $order);
        $smarty->display('seller_clips.dwt');
    }
}
/* 商家充值逻辑 */
/* 商家通过帐目明细列表进行再付款的操作 */
if ($action == 'pay') {
    include_once(ROOT_PATH . 'include/lib_clips.php');
    include_once(ROOT_PATH . 'include/lib_payment.php');
    include_once(ROOT_PATH . 'include/lib_order.php');

    //变量初始化
    $surplus_id = isset($_GET['id'])  ? intval($_GET['id'])  : 0;
    $payment_id = isset($_GET['pid']) ? intval($_GET['pid']) : 0;

    if ($surplus_id == 0) {
        ecs_header("Location: seller.php?act=seller_account\n");
        exit;
    }

    //如果原来的支付方式已禁用或者已删除, 重新选择支付方式
    if ($payment_id == 0) {
        ecs_header("Location: seller.php?act=seller_deposit&id=".$surplus_id."\n");
        exit;
    }

    //获取单条会员帐目信息
    $order = array();
    $order = getSurplusInfo($surplus_id);
    //支付方式的信息
    $payment_info = array();
    $payment_info = payment_info($payment_id);
    /* 如果当前支付方式没有被禁用，进行支付的操作 */
    if (!empty($payment_info)) {
        //取得支付信息，生成支付代码
        $payment = unserialize_config($payment_info['pay_config']);

        //生成伪订单号
        $order['order_sn'] = $surplus_id;

        //获取需要支付的log_id
        $order['log_id'] = get_paylog_id($surplus_id, $pay_type = PAY_SELLER_SURPLUS);

        $order['user_name']      = $_SESSION['user_name'];
        $order['surplus_amount'] = $order['amount'];

        //计算支付手续费用
        $payment_info['pay_fee'] = pay_fee($payment_id, $order['surplus_amount'], 0);

        //计算此次预付款需要支付的总金额
        $order['order_amount']   = $order['surplus_amount'] + $payment_info['pay_fee'];

        //如果支付费用改变了，也要相应的更改pay_log表的order_amount
        $order_amount = $db->getOne("SELECT order_amount FROM " .$ecs->table('pay_log')." WHERE log_id = '$order[log_id]'");
        if ($order_amount <> $order['order_amount']) {
            $db->query("UPDATE " .$ecs->table('pay_log').
                       " SET order_amount = '$order[order_amount]' WHERE log_id = '$order[log_id]'");
        }

        /* 调用相应的支付方式文件 */
        include_once(ROOT_PATH . 'include/modules/payment/' . $payment_info['pay_code'] . '.php');

        /* 取得在线支付方式的支付按钮 */
        $pay_obj = new $payment_info['pay_code'];
        $payment_info['pay_button'] = $pay_obj->get_code($order, $payment);

        /* 模板赋值 */
        $smarty->assign('payment', $payment_info);
        $smarty->assign('order', $order);
        $smarty->assign('pay_fee', price_format($payment_info['pay_fee'], false));
        $smarty->assign('amount', price_format($order['surplus_amount'], false));
        $smarty->assign('action', 'act_seller_deposit');
        $smarty->display('seller_clips.dwt');
    }
    /* 重新选择支付方式 */
    else {
        include_once(ROOT_PATH . 'includes/lib_clips.php');

        $smarty->assign('payment', get_online_payment_list());
        $smarty->assign('order', $order);
        $smarty->assign('action', 'act_seller_deposit');
        $smarty->display('seller_clips.dwt');
    }
}
/* 商家通过帐目明细列表进行再付款的操作 */
/* 推广注册 */
if ($action == 'extension') {
    $spreadUrl = $ecs->url().'user.php?act=register&sellerId='.$user_id;
    $pcSpreadUrl = $ecs->url().'user.php?act=register&sellerId='.$user_id;
    $smarty->assign('userId', $user_id);
    $smarty->assign('pcSpreadUrl', $pcSpreadUrl);
    $smarty->assign('spreadUrl', $spreadUrl);
    $smarty->display('seller_clips.dwt');
}
/* 推广注册 */
