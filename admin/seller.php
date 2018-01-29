<?php

/**
 * ECSHOP 商家管理 bigrocs@qq.com
 * 532388887
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: yehuaixiao $
 * $Id: order.php 17219 2011-01-27 10:49:19Z yehuaixiao $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH .'includes/lib_seller.php');

/*------------------------------------------------------ */
//-- 商家列表
/*------------------------------------------------------ */

if ($_REQUEST['act'] == 'list') {
    /* 检查权限 */
    admin_priv('seller_view');

    /* 模板赋值 */
    $smarty->assign('ur_here', '商家列表');
    $smarty->assign('action_link', array('href' => 'seller.php?act=add', 'text' => '添加商家'));


    $smarty->assign('os_unconfirmed', OS_UNCONFIRMED);
    $smarty->assign('cs_await_pay', CS_AWAIT_PAY);
    $smarty->assign('cs_await_ship', CS_AWAIT_SHIP);
    $smarty->assign('full_page', 1);

    $seller_list = seller_list();
    $smarty->assign('seller_list', $seller_list['sellers']);
    $smarty->assign('filter', $seller_list['filter']);
    $smarty->assign('record_count', $seller_list['record_count']);
    $smarty->assign('page_count', $seller_list['page_count']);
    $smarty->assign('sort_order_time', '<img src="images/sort_desc.gif">');

    /* 显示模板 */
    assign_query_info();
    $smarty->display('seller_list.htm');
}

/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query') {
    /* 检查权限 */
    admin_priv('seller_view');

    $seller_list = seller_list();

    $smarty->assign('seller_list', $seller_list['sellers']);
    $smarty->assign('filter', $seller_list['filter']);
    $smarty->assign('record_count', $seller_list['record_count']);
    $smarty->assign('page_count', $seller_list['page_count']);
    $sort_flag  = sort_flag($seller_list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);
    make_json_result($smarty->fetch('seller_list.htm'), '', array('filter' => $seller_list['filter'], 'page_count' => $seller_list['page_count']));
} elseif ($_REQUEST['act'] == 'remove_seller') {
    /* 检查权限 */
    admin_priv('seller_view');
    $userId = $_REQUEST['id'];
    $sql = "DELETE FROM " . $ecs->table('user_seller') .
            " WHERE user_id = '$userId' LIMIT 1";
    $db->query($sql);
    $url = 'seller.php?act=query&' . str_replace('act=remove_seller', '', $_SERVER['QUERY_STRING']);
    ecs_header("Location: $url\n");
}
/**
 * [if 添加商家]
 * @var [type]
 */
if ($_REQUEST['act'] == 'add') {
    admin_priv('seller_view');
    $smarty->assign('ur_here', '商家管理');
    $smarty->assign('action_link', array('text' => '商家列表', 'href' => 'seller.php?act=list'));
    $smarty->assign('form_action', 'insert');

    assign_query_info();
    $smarty->display('seller_info.htm');
}
/**
 * [if 写入商家]
 * @var [type]
 */
if ($_REQUEST['act'] == 'insert') {
    admin_priv('seller_view');
    $userName = $_REQUEST['user_name'];
    $name = $_REQUEST['name'];//公司名字
    $insurance = $_REQUEST['insurance'];
    $spread_ratio = $_REQUEST['spread_ratio'];
    $pickup_ratio = $_REQUEST['pickup_ratio'];

    $sql = "SELECT COUNT(*) FROM " .$ecs->table('users'). " WHERE user_name = '$userName'";
    if (!$db->getOne($sql)) {
        sys_msg($userName.'用户未注册', 1, array(), false);
    }
    $sql = "SELECT COUNT(*) FROM " .$ecs->table('user_seller'). " WHERE user_name = '$userName'";
    if ($db->getOne($sql)) {
        sys_msg($userName.'已经是商家,请勿重复添加', 1, array(), false);
    }
    $sql = "SELECT user_id FROM " .$ecs->table('users'). " WHERE user_name = '$userName'";
    $userID = $db->getOne($sql);

    $sql = "INSERT INTO " . $ecs->table('user_seller') . " (user_id, user_name, name, spread_ratio, pickup_ratio, insurance, add_time)
    VALUES ('" . $userID . "', '".$userName."', '".$name."', '".$spread_ratio."', '".$pickup_ratio."', '".$insurance."', '" . time() . "')";
    if ($GLOBALS['db']->query($sql)) {
        $link[] = array('href' => 'seller.php?act=list', 'text' => '返回商家列表');
        sys_msg('添加商家成功', 0, $link);
    }
}
if ($_REQUEST['act'] == 'eidt') {
    /* 检查权限 */
    admin_priv('seller_view');
    $sql = "SELECT * FROM " .$ecs->table('user_seller'). " WHERE user_id = '$_REQUEST[id]'";
    $sellerInfo = $db->getRow($sql);

    $smarty->assign('sellerInfo', $sellerInfo);
    $smarty->assign('ur_here', '编辑商家');
    $smarty->assign('action_link', array('text' => '商家列表', 'href' => 'seller.php?act=list'));
    $smarty->assign('form_action', 'update');

    assign_query_info();
    $smarty->display('seller_info.htm');
}
if ($_REQUEST['act'] == 'update') {
    admin_priv('seller_view');
    $userId = $_REQUEST['user_id'];
    $name = $_REQUEST['name'];//公司名字
    $insurance = $_REQUEST['insurance'];
    $spread_ratio = $_REQUEST['spread_ratio'];
    $pickup_ratio = $_REQUEST['pickup_ratio'];


    $sql = "UPDATE " . $GLOBALS['ecs']->table('user_seller').
                        " SET name = '$name', " .
                        "insurance = '$insurance', " .
                        "spread_ratio = '$spread_ratio', " .
                        "pickup_ratio = '$pickup_ratio' " .
                        "WHERE user_id = " . $userId;
    if ($GLOBALS['db']->query($sql)) {
        $link[] = array('href' => 'seller.php?act=list', 'text' => '返回商家列表');
        sys_msg('修改商家成功', 0, $link);
    }
}
if ($_REQUEST['act'] == 'order') {
    /* 检查权限 */
    admin_priv('seller_view');

    /* 模板赋值 */
    $smarty->assign('ur_here', '加油订单');

    $smarty->assign('full_page', 1);

    $orderList = getOrderList();
    $smarty->assign('order_list', $orderList['orders']);
    $smarty->assign('filter', $orderList['filter']);
    $smarty->assign('record_count', $orderList['record_count']);
    $smarty->assign('page_count', $orderList['page_count']);
    $smarty->assign('sort_order_time', '<img src="images/sort_desc.gif">');

    /* 显示模板 */
    assign_query_info();
    $smarty->display('seller_order.htm');
}
if ($_REQUEST['act'] == 'order_query') {
    /* 检查权限 */
    admin_priv('seller_view');

    $orderList = getOrderList();

    $smarty->assign('order_list', $orderList['orders']);
    $smarty->assign('filter', $orderList['filter']);
    $smarty->assign('record_count', $orderList['record_count']);
    $smarty->assign('page_count', $orderList['page_count']);
    $sort_flag  = sort_flag($orderList['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);
    make_json_result($smarty->fetch('seller_order.htm'), '', array('filter' => $orderList['filter'], 'page_count' => $orderList['page_count']));
}
// if ($_REQUEST['act'] == 'account_log') {
//     admin_priv('seller_view');
//
//     /* 模板赋值 */
//     $smarty->assign('ur_here', '资金记录');
//
//     $smarty->assign('os_unconfirmed', OS_UNCONFIRMED);
//     $smarty->assign('cs_await_pay', CS_AWAIT_PAY);
//     $smarty->assign('cs_await_ship', CS_AWAIT_SHIP);
//     $smarty->assign('full_page', 1);
//
//     $accountLogList = accountLogList();
//     $smarty->assign('account_log', $accountLogList['account_log']);
//     $smarty->assign('filter', $accountLogList['filter']);
//     $smarty->assign('record_count', $accountLogList['record_count']);
//     $smarty->assign('page_count', $accountLogList['page_count']);
//     $smarty->assign('sort_order_time', '<img src="images/sort_desc.gif">');
//
//     /* 显示模板 */
//     assign_query_info();
//     $smarty->display('seller_account_log.htm');
// }
//
/**
 * [getOrderList 获取订单列表]
 * @return   [type]         [description]
 * @Author   bigrocs
 * @QQ       532388887
 * @Email    bigrocs@qq.com
 * @DateTime 2017-12-12
 */
function getOrderList()
{
    $result = get_filter();
    if ($result === false) {
        /* 过滤信息 */
        /* 分页大小 */
        $filter['page'] = empty($_REQUEST['page']) || (intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);
        if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0) {
            $filter['page_size'] = intval($_REQUEST['page_size']);
        } elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0) {
            $filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
        } else {
            $filter['page_size'] = 15;
        }
        $filter['seller_name'] = empty($_REQUEST['seller_name'])? '': $_REQUEST['seller_name'];
        $filter['order_id'] = empty($_REQUEST['order_id'])? '': $_REQUEST['order_id'];
        $filter['user_name'] = empty($_REQUEST['user_name'])? '': $_REQUEST['user_name'];
        $where = ' WHERE 1 ';
        if ($filter['seller_name']) {
            $where .= " AND seller_id = ".getUserId($filter['seller_name'])." ";
        }
        if ($filter['order_id']) {
            $where .= " AND order_id LIKE '%" . mysql_like_quote($filter['order_id']) ."%'";
        }
        if ($filter['user_name']) {
            $where .= " AND user_id = ".getUserId($filter['user_name'])." ";
        }
        /* 记录总数 */
        $sql = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('order_gas') . $where;

        $filter['record_count']   = $GLOBALS['db']->getOne($sql);
        $filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;

        /* 查询 */
        $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('order_gas') . $where .
                    " ORDER BY id DESC ".
                    " LIMIT " . ($filter['page'] - 1) * $filter['page_size'] . ",$filter[page_size]";

        set_filter($filter, $sql);
    } else {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }

    $row = $GLOBALS['db']->getAll($sql);
    /* 格式话数据 */
    foreach ($row as $key => $value) {
        $row[$key]['user_name'] = getUserInfo($value['user_id']);
        $row[$key]['seller_name'] = getUserInfo($value['seller_id']);
        $row[$key]['show_money'] = price_format($value['money']);
        $row[$key]['show_vip_money'] = price_format($value['vip_money']);
        $row[$key]['show_arrival_money'] = price_format($value['arrival_money']);
        $row[$key]['show_change_time'] = local_date('Y-m-d H:i:s', $value['time']);
    }
    $arr = array('orders' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
    return $arr;
}
/**
 * [accountLogList 商家记录获取]
 * @return [type] [description]
 */
// function accountLogList()
// {
//     $result = get_filter();
//     if ($result === false) {
//         /* 过滤信息 */
//         /* 分页大小 */
//         $filter['page'] = empty($_REQUEST['page']) || (intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);
//
//         if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0) {
//             $filter['page_size'] = intval($_REQUEST['page_size']);
//         } elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0) {
//             $filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
//         } else {
//             $filter['page_size'] = 15;
//         }
//
//         /* 记录总数 */
//         $sql = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('account_seller_log') . $where;
//
//         $filter['record_count']   = $GLOBALS['db']->getOne($sql);
//         $filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;
//
//         /* 查询 */
//         $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('account_seller_log') . $where .
//                 " ORDER BY log_id DESC ".
//                 " LIMIT " . ($filter['page'] - 1) * $filter['page_size'] . ",$filter[page_size]";
//
//         set_filter($filter, $sql);
//     } else {
//         $sql    = $result['sql'];
//         $filter = $result['filter'];
//     }
//
//     $row = $GLOBALS['db']->getAll($sql);
//     /* 格式话数据 */
//     foreach ($row as $key => $value) {
//         $row[$key]['show_money'] = price_format($value['money']);
//         $row[$key]['show_change_time'] = local_date('m-d H:i', $value['change_time']);
//     }
//     $arr = array('account_log' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
//     return $arr;
// }
/**
 *  获取商家列表信息
 *
 * @access  public
 * @param
 *
 * @return void
 */
function seller_list()
{
    $result = get_filter();
    if ($result === false) {
        /* 过滤信息 */
        $filter['keywords'] = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);
        if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1) {
            $filter['keywords'] = json_str_iconv($filter['keywords']);
        }
        $filter['sort_by'] = empty($_REQUEST['sort_by']) ? 'add_time' : trim($_REQUEST['sort_by']);
        $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

        $filter['start_time'] = empty($_REQUEST['start_time']) ? '' : (strpos($_REQUEST['start_time'], '-') > 0 ?  local_strtotime($_REQUEST['start_time']) : $_REQUEST['start_time']);
        $filter['end_time'] = empty($_REQUEST['end_time']) ? '' : (strpos($_REQUEST['end_time'], '-') > 0 ?  local_strtotime($_REQUEST['end_time']) : $_REQUEST['end_time']);



        /* 分页大小 */
        $filter['page'] = empty($_REQUEST['page']) || (intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);

        if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0) {
            $filter['page_size'] = intval($_REQUEST['page_size']);
        } elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0) {
            $filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
        } else {
            $filter['page_size'] = 15;
        }

        /* 记录总数 */
        $sql = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('user_seller') . $where;

        $filter['record_count']   = $GLOBALS['db']->getOne($sql);
        $filter['page_count']     = $filter['record_count'] > 0 ? ceil($filter['record_count'] / $filter['page_size']) : 1;


        $where = ' WHERE 1 ';
        if ($filter['keywords']) {
            $where .= " AND user_name LIKE '%" . mysql_like_quote($filter['keywords']) ."%'";
        }
        /* 查询 */
        $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('user_seller') . $where .
                " ORDER BY $filter[sort_by] $filter[sort_order] ".
                " LIMIT " . ($filter['page'] - 1) * $filter['page_size'] . ",$filter[page_size]";

        foreach (array('order_sn', 'consignee', 'email', 'address', 'zipcode', 'tel', 'user_name') as $val) {
            $filter[$val] = stripslashes($filter[$val]);
        }
        set_filter($filter, $sql);
    } else {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }

    $row = $GLOBALS['db']->getAll($sql);
    /* 格式话数据 */
    foreach ($row as $key => $value) {
        $row[$key]['formated_order_amount'] = price_format($value['order_amount']);
        $row[$key]['formated_money_paid'] = price_format($value['money_paid']);
        $row[$key]['formated_total_fee'] = price_format($value['total_fee']);
        $row[$key]['formated_jiubi'] = price_format($value['jiubi']);
        $row[$key]['formated_vip_money'] = price_format($value['vip_money']);
        $row[$key]['short_order_time'] = local_date('m-d H:i', $value['add_time']);
        if ($value['order_status'] == OS_INVALID || $value['order_status'] == OS_CANCELED) {
            /* 如果该订单为无效或取消则显示删除链接 */
            $row[$key]['can_remove'] = 1;
        } else {
            $row[$key]['can_remove'] = 0;
        }
    }
    $arr = array('sellers' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
    return $arr;
}
