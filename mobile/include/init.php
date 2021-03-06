<?php



/**

 * ECSHOP 前台公用文件

 * ============================================================================

 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。

 * 网站地址: http://www.ecshop.com；

 * ----------------------------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ============================================================================

 * $Author: liubo $

 * $Id: init.php 17217 2011-01-19 06:29:08Z liubo $

 */



if (!defined('IN_ECTOUCH')) {
    die('Hacking attempt');
}



error_reporting(E_ALL);



if (__FILE__ == '') {
    die('Fatal error code: 0');
}

ob_start();

require(dirname(__FILE__) . '/../data/config.php');



if (!file_exists(ROOT_PATH . 'data/install.lock') && !file_exists(ROOT_PATH . 'include/install.lock') && !defined('NO_CHECK_INSTALL')) {
    header("Location: ./install/index.php\n");

    exit;
}



/* 初始化设置 */

@ini_set('memory_limit', '640M');

@ini_set('session.cache_expire', 180);

@ini_set('session.use_trans_sid', 0);

@ini_set('session.use_cookies', 1);

@ini_set('session.auto_start', 0);

@ini_set('display_errors', 1);



if (DIRECTORY_SEPARATOR == '\\') {
    @ini_set('include_path', '.;' . ROOT_PATH);
} else {
    @ini_set('include_path', '.:' . ROOT_PATH);
}



if (defined('DEBUG_MODE') == false) {
    define('DEBUG_MODE', 2);
}



if (PHP_VERSION >= '5.1' && !empty($timezone)) {
    date_default_timezone_set($timezone);
}



$php_self = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];

if ('/' == substr($php_self, -1)) {
    $php_self .= 'index.php';
}

define('PHP_SELF', $php_self);



require(ROOT_PATH . 'include/inc_constant.php');

require(ROOT_PATH . 'include/cls_ecshop.php');

require(ROOT_PATH . 'include/cls_error.php');

require(ROOT_PATH . 'include/lib_time.php');

require(ROOT_PATH . 'include/lib_base.php');

require(ROOT_PATH . 'include/lib_common.php');

require(ROOT_PATH . 'include/lib_main.php');

require(ROOT_PATH . 'include/lib_insert.php');

require(ROOT_PATH . 'include/lib_goods.php');

require(ROOT_PATH . 'include/lib_article.php');



/* 对用户传入的变量进行转义操作。 */

if (!get_magic_quotes_gpc()) {
    if (!empty($_GET)) {
        $_GET = addslashes_deep($_GET);
    }

    if (!empty($_POST)) {
        $_POST = addslashes_deep($_POST);
    }



    $_COOKIE = addslashes_deep($_COOKIE);

    $_REQUEST = addslashes_deep($_REQUEST);
}



/* 创建 ECSHOP 对象 */

$ecs = new ECS($db_name, $prefix);

define('DATA_DIR', $ecs->data_dir());

define('IMAGE_DIR', $ecs->image_dir());



/* 初始化数据库类 */

require(ROOT_PATH . 'include/cls_mysql.php');

$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);

$db->set_disable_cache_tables(array($ecs->table('sessions'), $ecs->table('sessions_data'), $ecs->table('cart')));

$db_host = $db_user = $db_pass = $db_name = null;



/* 创建错误处理对象 */

$err = new ecs_error('message.dwt');



/* 载入系统参数 */

$_CFG = load_config();

$_CFG['URL_HTTP_HOST'] = $config['site_url'];



/* 载入语言文件 */

require(ROOT_PATH . 'lang/' . $_CFG['lang'] . '/common.php');



if ($_CFG['shop_closed'] == 1) {

    /* 商店关闭了，输出关闭的消息 */

    header('Content-type: text/html; charset=' . EC_CHARSET);



    die('<div style="margin: 150px; text-align: center; font-size: 14px"><p>' . $_LANG['shop_closed'] . '</p><p>' . $_CFG['close_comment'] . '</p></div>');
}



if (is_spider()) {

    /* 如果是蜘蛛的访问，那么默认为访客方式，并且不记录到日志中 */

    if (!defined('INIT_NO_USERS')) {
        define('INIT_NO_USERS', true);

        /* 整合UC后，如果是蜘蛛访问，初始化UC需要的常量 */

        if ($_CFG['integrate_code'] == 'ucenter') {
            $user = & init_users();
        }
    }

    $_SESSION = array();

    $_SESSION['user_id'] = 0;

    $_SESSION['user_name'] = '';

    $_SESSION['email'] = '';

    $_SESSION['user_rank'] = 0;

    $_SESSION['discount'] = 1.00;
}



if (!defined('INIT_NO_USERS')) {

    /* 初始化session */

    include(ROOT_PATH . 'include/cls_session.php');



    $sess = new cls_session($db, $ecs->table('sessions'), $ecs->table('sessions_data'));



    define('SESS_ID', $sess->get_session_id());
}

if (isset($_SERVER['PHP_SELF'])) {
    $_SERVER['PHP_SELF'] = htmlspecialchars($_SERVER['PHP_SELF']);
}

if (!defined('INIT_NO_SMARTY')) {
    header('Cache-control: private');

    header('Content-type: text/html; charset=' . EC_CHARSET);



    /* 创建 Smarty 对象。 */

    require(ROOT_PATH . 'include/cls_template.php');

    $smarty = new cls_template;



    $smarty->cache_lifetime = $_CFG['cache_time'];

    $smarty->template_dir = ROOT_PATH . 'themes/' . $_CFG['template'];

    $smarty->cache_dir = ROOT_PATH . 'data/caches';

    $smarty->compile_dir = ROOT_PATH . 'data/compiled';



    if ((DEBUG_MODE & 2) == 2) {
        $smarty->direct_output = true;

        $smarty->force_compile = true;
    } else {
        $smarty->direct_output = false;

        $smarty->force_compile = false;
    }

    $smarty->direct_output = false;

    $smarty->force_compile = false;



    $smarty->assign('lang', $_LANG);

    $smarty->assign('ecs_charset', EC_CHARSET);

    if (!empty($_CFG['stylename'])) {
        $smarty->assign('ectouch_css', 'themes/' . $_CFG['template'] . '/style_' . $_CFG['stylename'] . '.css');
    } else {
        $smarty->assign('ectouch_css', 'themes/' . $_CFG['template'] . '/style.css');
    }

    $smarty->assign('ectouch_themes', 'themes/' . $_CFG['template']);

    $smarty->assign('site_url', $config['site_url']); //不带/结尾
}



if (!defined('INIT_NO_USERS')) {

    /* 会员信息 */

    $user = & init_users();



    if (!isset($_SESSION['user_id'])) {

        /* 获取投放站点的名称 */

        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'MicroMessenger') === false) {
            $site_name = isset($_GET['from']) ? htmlspecialchars($_GET['from']) : addslashes($_LANG['self_site']);
        } else {
            $site_name = isset($_GET['from']) ? htmlspecialchars($_GET['from']) : addslashes($_LANG['self_site_weixin']);
        }

        $from_ad = !empty($_GET['ad_id']) ? intval($_GET['ad_id']) : 0;



        $_SESSION['from_ad'] = $from_ad; // 用户点击的广告ID

        $_SESSION['referer'] = stripslashes($site_name); // 用户来源



        unset($site_name);



        if (!defined('INGORE_VISIT_STATS')) {
            visit_stats();
        }
    }



    if (empty($_SESSION['user_id'])) {
        if ($user->get_cookie()) {

            /* 如果会员已经登录并且还没有获得会员的帐户余额、积分以及优惠券 */

            if ($_SESSION['user_id'] > 0) {
                update_user_info();
            }
        } else {
            $_SESSION['user_id'] = 0;

            $_SESSION['user_name'] = '';

            $_SESSION['email'] = '';

            $_SESSION['user_rank'] = 0;

            $_SESSION['discount'] = 1.00;

            if (!isset($_SESSION['login_fail'])) {
                $_SESSION['login_fail'] = 0;
            }
        }
    }



    /* 设置推荐会员 */

    if (isset($_GET['u'])) {
        set_affiliate();
    }

    /* 设置推荐会员 */

    if (isset($_GET['wxid'])) {
        set_affiliate();
    }



    /* session 不存在，检查cookie */

    if (!empty($_COOKIE['ECS']['user_id']) && !empty($_COOKIE['ECS']['password'])) {

        // 找到了cookie, 验证cookie信息

        $sql = 'SELECT user_id, user_name, password ' .

                ' FROM ' . $ecs->table('users') .

                " WHERE user_id = '" . intval($_COOKIE['ECS']['user_id']) . "' AND password = '" . $_COOKIE['ECS']['password'] . "'";



        $row = $db->GetRow($sql);



        if (!$row) {

            // 没有找到这个记录

            $time = time() - 3600;

            setcookie("ECS[user_id]", '', $time, '/');

            setcookie("ECS[password]", '', $time, '/');
        } else {
            $_SESSION['user_id'] = $row['user_id'];

            $_SESSION['user_name'] = $row['user_name'];

            update_user_info();
        }
    }



    if (isset($smarty)) {
        $smarty->assign('ecs_session', $_SESSION);
    }
}



if ((DEBUG_MODE & 1) == 1) {
    error_reporting(E_ALL);
} else {
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
}

if ((DEBUG_MODE & 4) == 4) {
    include(ROOT_PATH . 'include/lib.debug.php');
}



/* 判断是否支持 Gzip 模式 */

if (!defined('INIT_NO_SMARTY') && gzip_enabled()) {
    ob_start('ob_gzhandler');
} else {
    ob_start();
}



//*20141208模板之家独家开发新增*/

    if (isset($_GET['u'])) {
        $u=$_GET['u'];
    } else {
        $u="";
    }



    $iipp = $_SERVER["REMOTE_ADDR"];

    $phone_state=$_SERVER['HTTP_USER_AGENT'];

    //echo $iipp.'|';

    //echo $phone_state.'|';

    //echo $u.'|';

    $sql_one="SELECT * FROM " . $GLOBALS['ecs']->table('ip_log') . " WHERE ip = '$iipp' and  phone_state='$phone_state' and u_id='$u' ";

    $ipinfo1=$GLOBALS['db']->GetRow($sql_one);

    //print_r($ipinfo1);

    if (empty($ipinfo1)&&!empty($u)) {

        //将IP和推荐会员的u存入数据库中，从而获得会员上下级关系



        $sql = "INSERT INTO ".$GLOBALS['ecs']->table('ip_log')."(ip, u_id,state,phone_state) "."VALUES ('$iipp', '$u','$state','$phone_state')";

        $GLOBALS['db']->query($sql);

        //记录结束
    }

//新增绑定上下级关系开始

    $iipp = $_SERVER["REMOTE_ADDR"];

    $sql_two="SELECT * FROM " . $GLOBALS['ecs']->table('ip_log') . " WHERE ip = '$iipp' and state=0 and phone_state='$phone_state' ORDER BY id DESC LIMIT 0 , 1

";

    $ipinfo=$GLOBALS['db']->GetRow($sql_two);





    $id=$ipinfo['id'];

    $up_uid=$ipinfo['u_id'];

    $user_id=$_SESSION['user_id'];



    $sql_one="SELECT * FROM " . $GLOBALS['ecs']->table('users') . " WHERE user_id = '$user_id'";

    $userinfo=$GLOBALS['db']->GetRow($sql_one);

    //找出自己所有的下级

    $sql="SELECT * FROM " . $GLOBALS['ecs']->table('users') . " WHERE parent_id = '$user_id'";

    $childinfo=$GLOBALS['db']->GetAll($sql);

    $flag=true;

    //验证关系：自己的下级不能是自己的上级

    foreach ($childinfo as $k=>$v) {
        if ($v['user_id']==$up_uid) {
            $flag=false;
        } else {
            $flag=true;
        }
    }



/*避免上下级关系混乱，模板之家修复*/

                    $sql="SELECT * FROM  " . $GLOBALS['ecs']->table('users')."  WHERE parent_id = '$user_id'";

                    $childinfo_xkfla=$GLOBALS['db']->GetAll($sql);



                    $flag_xkfla=true;

                    if (!empty($childinfo_xkfla)) {
                        $flag_xkfla=false;
                    } else {
                        $flag_xkfla=true;
                    }





/*避免上下级关系混乱，模板之家修复*/

    //三个条件进行判断。1：必须是推荐的2：上下级关系不能改变3：验证关系：自己的上级不能是自己下级

    if (!empty($ipinfo)&&$userinfo['parent_id']==0&&$flag&&$user_id&&$flag_xkfla) {
        $affiliate  = unserialize($GLOBALS['_CFG']['affiliate']);

        if (isset($affiliate['on']) && $affiliate['on'] == 1&&$up_uid!=$_SESSION['user_id']) {

            // 推荐开关开启

            empty($affiliate) && $affiliate = array();

            $affiliate['config']['level_register_all'] = intval($affiliate['config']['level_register_all']);

            $affiliate['config']['level_register_up'] = intval($affiliate['config']['level_register_up']);

            //该用户是推荐来的

            if ($up_uid) {

                //标注此用户被推荐过了

                $info=array('state'=>1);

                $GLOBALS['db']->autoExecute($ecs->table('ip_log'), $info, 'UPDATE', "id = {$id}");

                if (!empty($affiliate['config']['level_register_all'])) {
                    if (!empty($affiliate['config']['level_register_up'])) {
                        $rank_points = $GLOBALS['db']->getOne("SELECT rank_points FROM " . $GLOBALS['ecs']->table('users') . " WHERE user_id = '$up_uid'");

                        if ($rank_points + $affiliate['config']['level_register_all'] <= $affiliate['config']['level_register_up']) {
                            log_account_change($up_uid, 0, 0, $affiliate['config']['level_register_all'], $affiliate['config']['level_register_all'], sprintf($GLOBALS['_LANG']['register_affiliate'], $_SESSION['user_id'], $username));
                        }
                    } else {
                        log_account_change($up_uid, 0, 0, $affiliate['config']['level_register_all'], 0, $GLOBALS['_LANG']['register_affiliate']);
                    }
                }







                $sql = 'UPDATE '. $GLOBALS['ecs']->table('users') . ' SET parent_id = ' . $up_uid . ' WHERE user_id = ' . $_SESSION['user_id'];

                $GLOBALS['db']->query($sql);

                require(ROOT_PATH . 'wxch_share.php');

                //设置推荐人
            }
        }
    }





    if (!empty($_SESSION['user_id'])) {
        $user_id=$_SESSION['user_id'];

        $sql = "SELECT parent_id FROM ". $ecs->table('users') .  "where user_id ='$user_id'";

        $parent_id=$GLOBALS['db']->getOne($sql);

        if (empty($parent_id)) {
            if (isset($_GET['u'])) {
                if ($u== $user_id) {
                    $share_info="";
                } else {
                    $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('users')." where user_id ='$u'";

                    $user_info=$GLOBALS['db']->getRow($sql);

                    $share_userid=$user_info['wxid'];

                    $sql = "SELECT * FROM ". $GLOBALS['ecs']->table('weixin_user') ." where wxid ='$share_userid'";

                    $share_info=$GLOBALS['db']->getRow($sql);
                }
            }
        } else {
            $sql = "SELECT wxid FROM ". $ecs->table('users') .  "where user_id ='$parent_id'";

            $share_userid=$GLOBALS['db']->getOne($sql);

            $sql = "SELECT * FROM ". $GLOBALS['ecs']->table('weixin_user') ." where wxid ='$share_userid'";

            $share_info=$GLOBALS['db']->getRow($sql);
        }
    } else {
        if (isset($_GET['u'])) {
            if ($u== $user_id) {
                $share_info="";
            } else {
                $sql = "SELECT * FROM " . $GLOBALS['ecs']->table('users')." where user_id ='$u'";

                $user_info=$GLOBALS['db']->getRow($sql);

                $share_userid=$user_info['wxid'];

                $sql = "SELECT * FROM ". $GLOBALS['ecs']->table('weixin_user') ." where wxid ='$share_userid'";

                $share_info=$GLOBALS['db']->getRow($sql);
            }
        }
    }



//新增绑定上下级关系结束

/*20141208模板之家独家开发新增*/

/* 检查是否是微信浏览器访问 */

function is_wechat_browser()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($user_agent, 'MicroMessenger') === false) {

      //echo '非微信浏览器禁止浏览';

        return false;
    } else {

      //echo '微信浏览器，允许访问';

        //preg_match('/.*?(MicroMessenger\/([0-9.]+))\s*/', $user_agent, $matches);

        //echo '<br>你的微信版本号为:'.$matches[2];

        return true;
    }
}



setCityId();
setRegionId();//设置城市id
if ($smarty) {
    setHeaderCity($smarty);//设置城市渲染数据
}

/**
 * [setCityId 手动设置城市]
 */
function setCityId()
{
    if (!empty($_GET['regionCity'])) {
        $_SESSION['region_id']    = $_GET['regionCity'];
    }
}
/**
 * [setRegionId 设置RegionId]
 */
function setRegionId()
{
    if (empty($_SESSION['region_id'])) {//选择过地区则不重复定义
        $CityId = getIpCityId();
        if ($CityId) {
            $_SESSION['region_id']    = $CityId; //bigrocs//地区编号
            $GLOBALS['_region_id'] = array(
                    'region_id' => $_SESSION['region_id'],
                    'province_id' => getParentRegionsId($_SESSION['region_id']),
                    'name' => getRegionName($_SESSION['region_id'])
                );
        } else {
            $_SESSION['region_id']    = 1; //bigrocs//地区编号
            $GLOBALS['_region_id'] = array(
                    'region_id' => 1,
                    'province_id' => 0,
                    'name' => '全国'
                );
        }
        // bigrocs_region 这是全局地区变量
    } else {
        if ($_SESSION['region_id']==1) {
            $GLOBALS['_region_id'] = array(
                    'region_id' => 1,
                    'province_id' => 0,
                    'name' => '全国'
                );
        } else {
            $GLOBALS['_region_id'] = array(
                    'region_id' => $_SESSION['region_id'],
                    'province_id' => getParentRegionsId($_SESSION['region_id']),
                    'name' => getRegionName($_SESSION['region_id'])
                );
        }
    }
}
/**
 * [setHeaderCity 头部城市显示]
 * @param [type] $smarty [description]
 */
function setHeaderCity($smarty)
{
    $citys = array();
    $sql = "SELECT value FROM " .$GLOBALS['ecs']->table('shop_config'). " WHERE code='shop_country'";
    foreach (unserialize($GLOBALS['db']->getOne($sql)) as $key) {
        $citys[$key] = getRegionName($key);
    }
    $smarty->assign('regionCityList', $citys);//允许切换城市列表
    $smarty->assign('regionCitys', $GLOBALS['_region_id']['name']);//当前城市名称
}
/**
 * [getIpCityId 根据ip获取当前城市id]
 * @return [type] [description]
 */
function getIpCityId()
{
    $CityNmae = getCityNmae();
    return getRegionsId($CityNmae);
}
/**
 * [getCityNmae 获取当前城市名字]
 * @return [type] [description]
 */
function getCityNmae()
{
    // $ip = real_ip();
    $ip = '124.134.111.255';
    $regionName = mb_convert_encoding(ecs_geoip($ip), "UTF-8", "GBK");
    $CityNmae = str_replace("中国", "", $regionName);
    $strlen = strlen($CityNmae);
    if ($strlen>6) {
        if (strpos('-_-!' . $CityNmae, '内蒙古')||strpos('-_-!' . $CityNmae, '黑龙江')) {
            $CityNmae = substr($CityNmae, 9);//删掉前面的名字
        } else {
            $CityNmae = substr($CityNmae, 6);//删掉前面的名字
        }
    }
    return $CityNmae;
}
function getRegionsId($CityNmae)
{
    $sql = "SELECT region_id FROM " .$GLOBALS['ecs']->table('region'). " WHERE region_name='$CityNmae'";
    return $GLOBALS['db']->getOne($sql);
}
function getRegionName($region_id)
{
    $sql = "SELECT region_name FROM " .$GLOBALS['ecs']->table('region'). " WHERE region_id='$region_id'";
    return $GLOBALS['db']->getOne($sql);
}
if (!function_exists('dd')) {
    function dd($args)
    {
        if (!is_array($args)) {
            echo($args);
            exit;
        } else {
            print_R($args);
            exit;
        }
    }
}
if (!function_exists('d')) {
    function d($args)
    {
        echo(json_encode($args));
    }
}
