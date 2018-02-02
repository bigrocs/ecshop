<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?> 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_css']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,qrcode.js')); ?>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery-1.4.4.min.js"></script>
</head>
<body>

<?php if ($this->_var['action'] == 'default'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="./"> 返回 </a> </div>
  <h1> 卖家中心 </h1>
</header>
<dl class="user_top" style="height:10.5rem">
  <dt style="width:7rem;height:7rem;" > <?php if ($this->_var['info']['avatar'] != ''): ?><img style="width:7rem;height:7rem;" src="<?php echo $this->_var['info']['avatar']; ?>"><?php else: ?><img style="width:7rem;height:7rem;"  src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"><?php endif; ?> </dt>
  <dd>
    <p><?php echo $this->_var['info']['username']; ?></p>
    <p>公司类型: <?php if ($this->_var['insurance'] == '0'): ?>加油站<?php else: ?>保险公司<?php endif; ?></p>
    <p><?php echo $this->_var['lang']['affiliated_company']; ?>:<span><b><?php echo $this->_var['sellerInfo']['name']; ?></b></span></p>
    <p><?php echo $this->_var['lang']['seller_capital']; ?>:<span><a href="seller.php?act=account_log" style="color:#f70;"><?php echo $this->_var['sellerInfo']['show_user_money']; ?></a></span></p>
    <p>冻结资金:<span><a href="#" style="color:#f70;"><?php echo $this->_var['sellerInfo']['show_frozen_money']; ?></a></span></p>
    <p>推荐分成:<span><a href="#" style="color:#f70;"><?php echo $this->_var['sellerInfo']['show_spread']; ?></a></span></p>
    <p>自提分成:<span><a href="#" style="color:#f70;"><?php echo $this->_var['sellerInfo']['show_pickup']; ?></a></span></p>
  </dd>
  <div class="quan1"></div>
  <div class="quan2"></div>
  <div class="quan3"></div>
</dl>
<div class="blank3"></div>
<section class="wrap">
    <?php if ($this->_var['insurance'] == '0'): ?>
	<div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
	 <a  href="seller.php?act=order_list" class="clearfix"> <span>加油订单列表</span><i></i> </a>
     <a  href="seller.php?act=spread_order" class="clearfix"> <span>推荐订单列表</span><i></i> </a>
	</div>
	<div class="blank3"></div>
    <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
	 <a  href="seller.php?act=pickup_point" class="clearfix"> <span>自提点管理</span><i></i> </a>
     <a  href="seller.php?act=pickup_point_order" class="clearfix"> <span>自提订单列表</span><i></i> </a>
	</div>
    <?php endif; ?>
    <div class="blank3"></div>
    <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
        <a  href="seller.php?act=kuaibi_deposit" class="clearfix"> <span>储值卡充值</span><i></i> </a>
        <a  href="seller.php?act=vip_deposit" class="clearfix"> <span>VIP充值</span><i></i> </a>
   </div>
   <div class="blank3"></div>
    <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
        <a  href="seller.php?act=extension" class="clearfix"> <span>推广注册</span><i></i> </a>
        <?php if ($this->_var['insurance'] == '0'): ?>
         <a  href="seller.php?act=oilPrice" class="clearfix"> <span>油品设置</span><i></i> </a>
	     <a  href="seller.php?act=gas" class="clearfix"> <span>加油二维码</span><i></i> </a>
         <a  href="seller.php?act=mapInfo" class="clearfix"> <span>地图信息</span><i></i> </a>
         <?php endif; ?>
         <a  href="seller.php?act=info" class="clearfix"> <span>信息管理</span><i></i> </a>
	</div>
    <div class="blank3"></div>
    <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
         <a  href="seller.php?act=seller_deposit" class="clearfix"> <span>商家充值</span><i></i> </a>
         <a  href="seller.php?act=cash" class="clearfix"> <span>商家提现</span><i></i> </a>
         <a  href="seller.php?act=account_log" class="clearfix"> <span>资金记录</span><i></i> </a>
         <a  href="seller.php?act=seller_account" class="clearfix"> <span>提现充值记录</span><i></i> </a>
    </div>
    <div class="blank3"></div>
    <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
        <a href="user.php?act=logout" class="clearfix"> <span>退出登录</span><i></i> </a>
    </div>
</section>

<?php endif; ?>


<?php if ($this->_var['action'] == 'info'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 卖家信息管理 </h1>
</header>
<section class="wrap">
  <section class="order_box padd1 radius10">
  <form action="seller.php" method="post" name="theForm" onsubmit="return checkConsignee(this)" enctype="multipart/form-data">
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <tr>
        <td width="70"><?php echo $this->_var['lang']['seller_corporate']; ?>：</td>
        <td align="left" ><input name="name" type="text" class="inputBg_touch" value="<?php echo $this->_var['sellerInfo']['name']; ?>" /> </td>
      </tr>
      <tr>
        <td width="70"><?php echo $this->_var['lang']['seller_bank']; ?>：</td>
        <td align="left" ><input name="bank" type="text" class="inputBg_touch" value="<?php echo $this->_var['sellerInfo']['bank']; ?>" /> </td>
      </tr>
      <tr>
        <td width="70"><?php echo $this->_var['lang']['seller_bank_name']; ?>：</td>
        <td align="left" ><input name="bank_name" type="text" class="inputBg_touch" value="<?php echo $this->_var['sellerInfo']['bank_name']; ?>" /> </td>
      </tr>
      <tr>
        <td width="70"><?php echo $this->_var['lang']['seller_bank_account']; ?>：</td>
        <td align="left" ><input name="bank_account" type="text" class="inputBg_touch" value="<?php echo $this->_var['sellerInfo']['bank_account']; ?>" /> </td>
      </tr>
      <tr>
           <td width="70" align="right" bgcolor="#FFFFFF">上传招牌：</td>
           <td align="left" bgcolor="#FFFFFF">
               <img src="/data/images/<?php echo $this->_var['sellerInfo']['board']; ?>" alt="" width="300px;"><br><br>
               <input type="file" name="board" size="45" class="inputBg">
           </td>
      </tr>
      <tr>
        <td align="center" colspan="2">
          <input type="submit" name="submit"  class="c-btn3"  value="确认修改"/>
          <input type="hidden" name="act" value="act_info" />
          <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" /></td>
      </tr>
    </table>
  </form>
  </section>
</section>
<?php endif; ?>


<?php if ($this->_var['action'] == 'mapInfo'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 卖家信息管理 </h1>
</header>
<section class="wrap">
  <section class="order_box padd1 radius10">
  <form action="seller.php" method="post" name="theForm" onsubmit="return checkConsignee(this)">
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <tr>
        <td width="70">地址：</td>
        <td align="left" ><input name="address" type="text" class="inputBg_touch" value="<?php echo $this->_var['sellerInfo']['address']; ?>" /> </td>
      </tr>
      <tr>
        <td width="70">电话：</td>
        <td align="left" ><input name="tel" type="text" class="inputBg_touch" value="<?php echo $this->_var['sellerInfo']['tel']; ?>" /> </td>
      </tr>
      <tr>
        <td width="70">地图纬度：</td>
        <td align="left" ><input id="latitude" name="latitude" type="text" class="inputBg_touch" value="<?php echo $this->_var['sellerInfo']['latitude']; ?>" /> </td>
      </tr>
      <tr>
        <td width="70">地图经度：</td>
        <td align="left" ><input id="longitude" name="longitude" type="text" class="inputBg_touch" value="<?php echo $this->_var['sellerInfo']['longitude']; ?>" /> </td>
      </tr>
      <tr>
          <div id="qq_map" style="height:300px;border:1px solid gray"></div>
          <script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp"></script>
            <script>
                var latitude =  <?php echo $this->_var['sellerInfo']['latitude']; ?>;
                var longitude =  <?php echo $this->_var['sellerInfo']['longitude']; ?>;
                var center = new qq.maps.LatLng(latitude,longitude);
                var map = new qq.maps.Map(document.getElementById('qq_map'),{
                    center: center,
                    zoom: 18
                });
                var marker = new qq.maps.Marker({
                    position: center,
                    map: map
                });
                qq.maps.event.addListener(map, 'click', function(e) {
                  center = new qq.maps.LatLng(e.latLng.lat,e.latLng.lng);
                  marker.setMap(null)
                  marker = new qq.maps.Marker({
                      position: center,
                      map: map
                  });
                  $("#latitude").val(e.latLng.lat);
                  $("#longitude").val(e.latLng.lng);
                });
            </script>
      </tr>
      <tr>
        <td align="center" colspan="2">
          <input type="submit" name="submit"  class="c-btn3"  value="确认修改"/>
          <input type="hidden" name="act" value="act_mapInfo" />
          <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" /></td>
      </tr>
    </table>
  </form>
  </section>
</section>
<?php endif; ?>


<?php if ($this->_var['action'] == 'gas'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 加油专用二维码 </h1>
</header>
<section class="wrap">
  <section class="order_box padd1 radius10" style="padding:25px;">
      <div>
          加油网址（可自行生成二维码）: <a href="<?php echo $this->_var['gasUrl']; ?>" style="color:#f70;"><?php echo $this->_var['gasUrl']; ?></a><br />
      </div>
      <div style="margin-top:30px;">
          <div id="seller_qrcode"></div>
      </div>
      <script language="javascript">
          new QRCode(document.getElementById("seller_qrcode"), '<?php echo $this->_var['gasUrl']; ?>');  // 设置要生成二维码的链接
      </script>
  </section>
</section>
<?php endif; ?>


<?php if ($this->_var['action'] == 'account_log'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 卖家资金记录 </h1>
</header>
<section class="wrap">
    <section class="order_box padd1 radius10">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_time']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['surplus_pro_type']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['money']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['change_desc']; ?></td>
          </tr>
          <?php $_from = $this->_var['account_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['change_time']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['type']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['amount']; ?></td>
            <td bgcolor="#ffffff" title="<?php echo $this->_var['item']['change_desc']; ?>">&nbsp;&nbsp;<?php echo $this->_var['item']['short_change_desc']; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </table>
    </section>
</section>
<?php echo $this->fetch('library/pages.lbi'); ?>
<?php endif; ?>

<?php if ($this->_var['action'] == 'order_list'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 卖家加油订单 </h1>
</header>
<section class="wrap">
    <section class="order_box padd1 radius10">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff">订单ID</td>
            <td bgcolor="#ffffff">买家</td>
            <td bgcolor="#ffffff">到账金额</td>
            <td bgcolor="#ffffff">余额支付</td>
            <td bgcolor="#ffffff">VIP支付</td>
          </tr>
          <?php $_from = $this->_var['orderGas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_id']; ?></td>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['user_name']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['item']['show_arrival_money']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['item']['show_money']; ?></td>
              <td bgcolor="#ffffff" ><?php echo $this->_var['item']['show_vip_money']; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </table>
    </section>
</section>
<?php echo $this->fetch('library/pages.lbi'); ?>
<?php endif; ?>


<?php if ($this->_var['action'] == 'cash'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 卖家提现 </h1>
</header>
<section class="wrap">
    <section class="order_box padd1 radius10">
        <div style="margin:15px;padding:25px;background:#909399;border-radius:5px;color:#FFF">
           <h2>提现资料</h2><br />
           银行名称: <?php echo $this->_var['sellerInfo']['bank']; ?><br />
           收款人: <?php echo $this->_var['sellerInfo']['bank_name']; ?><br />
           银行账号: <?php echo $this->_var['sellerInfo']['bank_account']; ?><br />
        </div>
        <div style="margin:15px;padding:25px;background:#C0C4CC;border-radius:5px;color:#FFF">
           可用余额: <?php echo $this->_var['sellerInfo']['show_user_money']; ?><br />
           冻结余额: <?php echo $this->_var['sellerInfo']['show_frozen_money']; ?><br />
           提现手续费: <?php echo $this->_var['sellerCash']; ?>%<br />
        </div>
        <a href="seller.php?act=info">修改提现资料</a>
        <form name="formInfo" action="seller.php" method="post" >
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td width="28%" align="right" bgcolor="#FFFFFF">提现金额：</td>
              <td width="76%" align="left" bgcolor="#FFFFFF"><input name="money" type="text" size="25"  class="inputBg" value="<?php echo $this->_var['sellerInfo']['user_money']; ?>"/></td>
            </tr>
           <tr>
             <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_cash" />
               <input name="submit" type="submit" class="bnt_blue_1" style="border:none;" value="确认" />
             </td>
           </tr>
         </table>
        </form>
    </section>
</section>
<?php endif; ?>


<?php if ($this->_var['action'] == 'seller_account'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 申请充值提现记录 </h1>
</header>
<section class="wrap">
    <section class="order_box padd1 radius10">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr align="center">
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_time']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['surplus_pro_type']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['money']; ?></td>
              <td bgcolor="#ffffff">实际到账</td>
              <td bgcolor="#ffffff">手续费</td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['is_paid']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
            </tr>
            <?php $_from = $this->_var['account_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
            <tr>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['add_time']; ?></td>
              <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['type']; ?></td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['amount']; ?></td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['show_arrival']; ?></td>
              <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['show_cash_amount']; ?></td>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['pay_status']; ?></td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['handle']; ?>
                <?php if (( $this->_var['item']['is_paid'] == 0 && $this->_var['item']['process_type'] == 1 ) || $this->_var['item']['handle']): ?>
                <a href="seller.php?act=cancel&id=<?php echo $this->_var['item']['id']; ?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')) return false;"><?php echo $this->_var['lang']['is_cancel']; ?></a>
                <?php endif; ?>
                              </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
    </section>
</section>
  <?php echo $this->fetch('library/pages.lbi'); ?>
<?php endif; ?>



<?php if ($this->_var['action'] == 'vip_deposit'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> VIP充值 </h1>
</header>
<section class="wrap">
    <section class="order_box padd1 radius10">
        <div style="margin:15px;padding:25px;background:#C0C4CC;border-radius:5px;color:#FFF">
           可用余额: <?php echo $this->_var['sellerInfo']['show_user_money']; ?><br />
        </div>
        <form name="formInfo" action="seller.php" method="post" >
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td width="28%" align="right" bgcolor="#FFFFFF">充值账号：</td>
              <td width="76%" align="left" bgcolor="#FFFFFF"><input name="username" type="text" size="25"  class="inputBg" value=""/></td>
            </tr>
            <tr>
              <td width="28%" align="right" bgcolor="#FFFFFF">充值金额：</td>
              <td width="76%" align="left" bgcolor="#FFFFFF"><input name="money" type="text" size="25"  class="inputBg" value="<?php echo $this->_var['sellerDepositMin']; ?>"/></td>
            </tr>
           <tr>
             <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_vip_deposit" />
               <input name="submit" type="submit" class="bnt_blue_1" style="border:none;" value="充值" />
             </td>
           </tr>
         </table>
        </form>
    </section>
</section>
<?php endif; ?>



<?php if ($this->_var['action'] == 'kuaibi_deposit'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 储值卡充值 </h1>
</header>
<section class="wrap">
    <section class="order_box padd1 radius10">
        <form name="formInfo" action="seller.php" method="post" >
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td width="28%" align="right" bgcolor="#FFFFFF">充值账号：</td>
              <td width="76%" align="left" bgcolor="#FFFFFF"><input name="username" type="text" size="25"  class="inputBg" value=""/></td>
            </tr>
            <tr>
              <td width="28%" align="right" bgcolor="#FFFFFF">充值金额：</td>
              <td width="76%" align="left" bgcolor="#FFFFFF"><input name="money" type="text" size="25"  class="inputBg" value=""/></td>
            </tr>
           <tr>
             <td colspan="2" align="center" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_kuaibi_deposit" />
               <input name="submit" type="submit" class="bnt_blue_1" style="border:none;" value="充值" />
             </td>
           </tr>
         </table>
        </form>
    </section>
</section>
<?php endif; ?>



<?php if ($this->_var['action'] == 'pickup_point'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 自提点信息管理 </h1>
</header>
<section class="wrap">
    <section class="order_box padd1 radius10">
            
           <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport_jquery.js,region.js,shopping_flow.js')); ?>
           <script type="text/javascript">
             region.isAdmin = false;
             <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
             var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             
             onload = function() {
               if (!document.all)
               {
                 document.forms['theForm'].reset();
               }
             }
             
           </script>
        <form name="formInfo" action="seller.php" method="post" >
        <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
            <tr>
                <td width="70">联系人：</td>
                <td align="left" ><input name="contact" type="text" class="inputBg_touch" value="<?php echo $this->_var['pickupPoint']['contact']; ?>" /> </td>
            </tr>
            <tr>
                <td width="70">联系方式：</td>
                <td align="left" ><input name="phone" type="text" class="inputBg_touch" value="<?php echo $this->_var['pickupPoint']['phone']; ?>" /> </td>
            </tr>
            <tr>
                <td width="70">地区：</td>
                <td colspan="3" align="left" bgcolor="#ffffff">
                  <select name="province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
                    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                    <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                    <option value="<?php echo $this->_var['province']['region_id']; ?>"<?php if ($this->_var['pickupPoint']['province_id'] == $this->_var['province']['region_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
                  <select name="city" id="selCities" onchange="region.changed(this, 3, 'selDistricts')">
                    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
                    <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                    <option value="<?php echo $this->_var['city']['region_id']; ?>"<?php if ($this->_var['pickupPoint']['city_id'] == $this->_var['city']['region_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
                  <select name="district" id="selDistricts" <?php if (! $this->_var['district_list']): ?>style="display:none"<?php endif; ?>>
                    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
                    <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                    <option value="<?php echo $this->_var['district']['region_id']; ?>"<?php if ($this->_var['pickupPoint']['district_id'] == $this->_var['district']['region_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
                 </td>
            </tr>
            <tr>
                <td width="70">地址：</td>
                <td align="left" ><input name="address" type="text" class="inputBg_touch" value="<?php echo $this->_var['pickupPoint']['address']; ?>" /> </td>
            </tr>
            <tr>
              <td align="center" colspan="2">
                <input type="submit" name="submit"  class="c-btn3"  value="确认修改"/>
                <input type="hidden" name="act" value="act_pickup_point" />
              </td>
            </tr>
         </table>
        </form>
    </section>
</section>
<?php endif; ?>



 <?php if ($this->_var['action'] == 'pickup_point_order'): ?>
 <header id="header">
   <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
   <h1> 自提点订单 </h1>
 </header>
 <section class="wrap">
     <section class="order_box padd1 radius10">
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr align="center">
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_addtime']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_money']; ?></td>
              <td bgcolor="#ffffff">自提点分成</td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_status']; ?></td>
            </tr>
            <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
            <tr>
              <td align="center" bgcolor="#ffffff">
                  <a href="seller.php?act=pickup_point_order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="f6"><?php echo $this->_var['item']['order_sn']; ?></a>
              </td>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_time']; ?></td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['total_fee']; ?></td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['pickup_money']; ?></td>
              <td align="center" style="width:50px" bgcolor="#ffffff"><?php echo $this->_var['item']['order_status']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table>
          <div class="blank5"></div>
    </section>
</section>
 <?php echo $this->fetch('library/pages.lbi'); ?>
 <?php endif; ?>


 <?php if ($this->_var['action'] == 'spread_order'): ?>
 <header id="header">
   <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
   <h1> 推荐人订单 </h1>
 </header>
 <section class="wrap">
     <section class="order_box padd1 radius10">
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr align="center">
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_addtime']; ?></td>
              <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_money']; ?></td>
              <td bgcolor="#ffffff">推荐人分成</td>
              <td bgcolor="#ffffff">自提状态</td>
              <td bgcolor="#ffffff">状态</td>
            </tr>
            <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
            <tr>
              <td align="center" bgcolor="#ffffff">
                  <a href="seller.php?act=pickup_point_order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="f6"><?php echo $this->_var['item']['order_sn']; ?></a>
              </td>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_time']; ?></td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['total_fee']; ?></td>
              <td align="right" style="width:50px" bgcolor="#ffffff"><?php echo $this->_var['item']['spread_money']; ?></td>
              <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['pickup_point_title']; ?></td>
              <td align="center" style="width:50px" bgcolor="#ffffff"><?php echo $this->_var['item']['order_status']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </table>
          <div class="blank5"></div>
    </section>
</section>
 <?php echo $this->fetch('library/pages.lbi'); ?>
 <?php endif; ?>


<?php if ($this->_var['action'] == pickup_point_order_detail): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> <?php echo $this->_var['lang']['order_status']; ?> </h1>
</header>
<section class="wrap">
  <section class="order_box padd1 radius10">
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr>
        <td>订单状态：<?php echo $this->_var['order']['order_status']; ?> <?php echo $this->_var['order']['pay_status']; ?> <?php echo $this->_var['order']['shipping_time']; ?></td>
    </tr>
    <tr>
        <td>订单编号：<?php echo $this->_var['order']['order_sn']; ?></td>
    </tr>
    <tr>
        <td>订单金额：<?php echo $this->_var['order']['formated_total_fee']; ?></td>
    </tr>
    <tr>
        <td>下单时间：<?php echo $this->_var['order']['formated_add_time']; ?></td>
    </tr>
    <?php if ($this->_var['order']['to_buyer']): ?>
    <tr>
      <td><?php echo $this->_var['lang']['detail_to_buyer']; ?>：<?php echo $this->_var['order']['to_buyer']; ?></td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_var['virtual_card']): ?>
    <tr>
      <td><?php echo $this->_var['lang']['virtual_card_info']; ?>：<br>
        <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
        <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
        <hr style="border:none;border-top:1px #CCCCCC dashed; margin:5px 0" />
        <?php if ($this->_var['card']['card_sn']): ?><?php echo $this->_var['lang']['card_sn']; ?>:<span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span><br><?php endif; ?>
        <?php if ($this->_var['card']['card_password']): ?><?php echo $this->_var['lang']['card_password']; ?>:<span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span><br><?php endif; ?>
        <?php if ($this->_var['card']['end_date']): ?><?php echo $this->_var['lang']['end_date']; ?>:<?php echo $this->_var['card']['end_date']; ?><br><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_var['order']['invoice_no']): ?>
    <tr>
        <td><a href="user.php?act=order_tracking&order_id=<?php echo $this->_var['order']['order_id']; ?>" class="c-btn3">订单跟踪</a></td>
    </tr>
    <?php endif; ?>
  </table>
  </section>

  <section class="order_box padd1 radius10">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr>
      <td width="32%" align="right"><?php echo $this->_var['lang']['consignee_name']; ?>：</td>
      <td width="68%" align="left"><?php echo $this->_var['order']['consignee']; ?></td>
    </tr>
    <tr>
      <td align="right"><?php echo $this->_var['lang']['email_address']; ?>：</td>
      <td align="left"><?php echo $this->_var['order']['email']; ?></td>
    </tr>
    <?php if ($this->_var['order']['exist_real_goods']): ?>
    <tr>
      <td align="right"><?php echo $this->_var['lang']['detailed_address']; ?>：</td>
      <td align="left"><?php echo $this->_var['order']['address']; ?>
        <?php if ($this->_var['order']['zipcode']): ?>
        [<?php echo $this->_var['lang']['postalcode']; ?>: <?php echo $this->_var['order']['zipcode']; ?>]
        <?php endif; ?></td>
    </tr>
    <?php endif; ?>
    <tr>
      <td align="right"><?php echo $this->_var['lang']['phone']; ?>：</td>
      <td align="left"><?php echo $this->_var['order']['tel']; ?> </td>
    </tr>
    <tr>
      <td align="right">手机：</td>
      <td align="left"><?php echo $this->_var['order']['mobile']; ?> </td>
    </tr>
    <?php if ($this->_var['order']['exist_real_goods']): ?>
    <tr>
      <td align="right"><?php echo $this->_var['lang']['deliver_goods_time']; ?>：</td>
      <td align="left"><?php echo $this->_var['order']['best_time']; ?></td>
    </tr>
    <?php endif; ?>
  </table>
  </section>
  <section class="order_box padd1 radius10">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <tr>
        <td width="32%" align="right">自提点名称：</td>
        <td width="68%" align="left"><?php echo $this->_var['pickup_point']['shop_name']; ?></td>
      </tr>
    <tr>
      <td width="32%" align="right">自提点联系人：</td>
      <td width="68%" align="left"><?php echo $this->_var['pickup_point']['contact']; ?></td>
    </tr>
    <tr>
      <td align="right">自提点电话：</td>
      <td align="left"><?php echo $this->_var['pickup_point']['phone']; ?></td>
    </tr>
    <tr>
      <td align="right"><?php echo $this->_var['lang']['detailed_address']; ?>：</td>
      <td align="left"><?php echo $this->_var['pickup_point']['address']; ?></td>
    </tr>
  </table>
  </section>
  <section class="order_box padd1 radius10">
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <tr>
        <td rowspan="2" width="60" align="center" valign="middle" style="border-bottom:1px #CCCCCC dashed">
        <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>" width="60" height="60" /></a></td>
        <td><?php echo $this->_var['goods']['goods_name']; ?></td>
      </tr>
      <tr>
        <td style="border-bottom:1px #CCCCCC dashed">售价：<?php echo $this->_var['goods']['goods_price']; ?> 数量：<?php echo $this->_var['goods']['goods_number']; ?><br>小计：<?php echo $this->_var['goods']['subtotal']; ?></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr>
      <td align="right"> <?php echo $this->_var['lang']['goods_all_price']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?>: <?php echo $this->_var['order']['formated_goods_amount']; ?>
        <?php if ($this->_var['order']['discount'] > 0): ?>
        - <?php echo $this->_var['lang']['discount']; ?>: <?php echo $this->_var['order']['formated_discount']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['tax'] > 0): ?>
        + <?php echo $this->_var['lang']['tax']; ?>: <?php echo $this->_var['order']['formated_tax']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['shipping_fee'] > 0): ?>
        + <?php echo $this->_var['lang']['shipping_fee']; ?>: <?php echo $this->_var['order']['formated_shipping_fee']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['insure_fee'] > 0): ?>
        + <?php echo $this->_var['lang']['insure_fee']; ?>: <?php echo $this->_var['order']['formated_insure_fee']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['pay_fee'] > 0): ?>
        + <?php echo $this->_var['lang']['pay_fee']; ?>: <?php echo $this->_var['order']['formated_pay_fee']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['pack_fee'] > 0): ?>
        + <?php echo $this->_var['lang']['pack_fee']; ?>: <?php echo $this->_var['order']['formated_pack_fee']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['card_fee'] > 0): ?>
        + <?php echo $this->_var['lang']['card_fee']; ?>: <?php echo $this->_var['order']['formated_card_fee']; ?>
        <?php endif; ?></td>
    </tr>
    <tr>
      <td align="right"><?php if ($this->_var['order']['money_paid'] > 0): ?>
        - <?php echo $this->_var['lang']['order_money_paid']; ?>: <?php echo $this->_var['order']['formated_money_paid']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['surplus'] > 0): ?>
        - <?php echo $this->_var['lang']['use_surplus']; ?>: <?php echo $this->_var['order']['formated_surplus']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['jiubi'] > 0): ?>
        - 使用储值卡: <?php echo $this->_var['order']['formated_jiubi']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['vip_money'] > 0): ?>
        - 使用VIP余额: <?php echo $this->_var['order']['formated_vip_money']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['integral_money'] > 0): ?>
        - <?php echo $this->_var['lang']['use_integral']; ?>: <?php echo $this->_var['order']['formated_integral_money']; ?>
        <?php endif; ?>
        <?php if ($this->_var['order']['bonus'] > 0): ?>
        - <?php echo $this->_var['lang']['use_bonus']; ?>: <?php echo $this->_var['order']['formated_bonus']; ?>
        <?php endif; ?></td>
    </tr>
    <tr>
      <td align="right"><?php echo $this->_var['lang']['order_amount']; ?>: <?php echo $this->_var['order']['formated_order_amount']; ?>
        <?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><br />
        <?php echo $this->_var['lang']['notice_gb_order_amount']; ?><?php endif; ?></td>
    </tr>
    <?php if ($this->_var['allow_edit_surplus']): ?>
    <tr>
      <td align="right" bgcolor="#ffffff"><form action="user.php" method="post" name="formFee" id="formFee">
          <?php echo $this->_var['lang']['use_more_surplus']; ?>：
          <input name="surplus" type="text" size="8" value="0" style="border:1px solid #ccc; padding:3px; border-radius:5px;"/><br>
          <?php echo $this->_var['max_surplus']; ?>
          <input type="submit" name="Submit" class="c-btn3" value="<?php echo $this->_var['lang']['button_submit']; ?>余额付款" />
          <input type="hidden" name="act" value="act_edit_surplus" />
          <input type="hidden" name="order_id" value="<?php echo $_GET['order_id']; ?>" />
        </form></td>
    </tr>
    <?php endif; ?>
  </table>
  </section>

  <section class="order_box padd1 radius10">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <tr>
      <td bgcolor="#ffffff"> <?php echo $this->_var['lang']['select_payment']; ?>: <?php echo $this->_var['order']['pay_name']; ?>。<br><?php echo $this->_var['lang']['order_amount']; ?>: <strong><?php echo $this->_var['order']['formated_order_amount']; ?></strong><br />
        <?php echo $this->_var['order']['pay_desc']; ?><br><?php if ($this->_var['order']['order_amount'] > 0): ?><?php echo $this->_var['order']['pay_online']; ?><?php endif; ?></td>
    </tr>
    <tr>
      <td bgcolor="#ffffff" align="center"><?php if ($this->_var['payment_list']): ?>

        <form name="payment" method="post" action="user.php">
          <?php echo $this->_var['lang']['change_payment']; ?>: <br/>
          <select name="pay_id" style="margin:6px 0">
            <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
            <option value="<?php echo $this->_var['payment']['pay_id']; ?>"> <?php echo $this->_var['payment']['pay_name']; ?>(<?php echo $this->_var['lang']['pay_fee']; ?>:<?php echo $this->_var['payment']['format_pay_fee']; ?>) </option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </select>
          <br/>
          <input type="hidden" name="act" value="act_edit_payment" />
          <input type="hidden" name="order_id" value="<?php echo $this->_var['order']['order_id']; ?>" />
          <input type="submit" name="Submit" class="c-btn3" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
        </form>

        <?php endif; ?></td>
    </tr>
  </table>
  </section>

  <section class="order_box padd1 radius10">
  <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
    <?php if ($this->_var['order']['shipping_id'] > 0): ?>
    <tr>
      <td width="25%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['shipping']; ?>：</td>
      <td colspan="3" width="75%" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['shipping_name']; ?></td>
    </tr>
    <?php endif; ?>

    <tr>
      <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['payment']; ?>：</td>
      <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['pay_name']; ?></td>
    </tr>
    <?php if ($this->_var['order']['insure_fee'] > 0): ?>
    <?php endif; ?>
    <?php if ($this->_var['order']['pack_name']): ?>
    <tr>
      <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['use_pack']; ?>：</td>
      <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['pack_name']; ?></td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_var['order']['card_name']): ?>
    <tr>
      <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['use_card']; ?>：</td>
      <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['card_name']; ?></td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_var['order']['card_message']): ?>
    <tr>
      <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['bless_note']; ?>：</td>
      <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['card_message']; ?></td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_var['order']['surplus'] > 0): ?>
    <?php endif; ?>
    <?php if ($this->_var['order']['integral'] > 0): ?>
    <tr>
      <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['use_integral']; ?>：</td>
      <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['integral']; ?></td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_var['order']['bonus'] > 0): ?>
    <?php endif; ?>
    <?php if ($this->_var['order']['inv_payee'] && $this->_var['order']['inv_content']): ?>
    <tr>
      <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['invoice_title']; ?>：</td>
      <td width="36%" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['inv_payee']; ?></td>
      <td width="19%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['invoice_content']; ?>：</td>
      <td width="25%" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['inv_content']; ?></td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_var['order']['postscript']): ?>
    <tr>
      <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['order_postscript']; ?>：</td>
      <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['postscript']; ?></td>
    </tr>
    <?php endif; ?>
    <tr>
      <td width="15%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_process']; ?>：</td>
      <td colspan="3" align="left" bgcolor="#ffffff"><?php echo $this->_var['order']['how_oos_name']; ?></td>
    </tr>
  </table>
  </section>

</section>
<?php endif; ?>




<?php if ($this->_var['action'] == "seller_deposit"): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 卖家充值 </h1>
</header>
<section class="wrap">
  <section class="order_box padd1 radius10">
    <form name="formSurplus" method="post" action="seller.php" onSubmit="return submitSurplus()">
    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td width="15%" bgcolor="#ffffff"><?php echo $this->_var['lang']['deposit_money']; ?>:</td>
          <td align="left" bgcolor="#ffffff"><input type="text" name="amount"  class="inputBg" value="<?php echo htmlspecialchars($this->_var['order']['amount']); ?>" size="30" /></td>
        </tr>
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_notic']; ?>:</td>
          <td align="left" bgcolor="#ffffff"><textarea name="user_note" cols="35" rows="6" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['user_note']); ?></textarea></td>
        </tr>
      </table>
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr align="center">
          <td bgcolor="#ffffff"  colspan="3" align="left"><?php echo $this->_var['lang']['payment']; ?>:</td>
        </tr>
        <tr align="center">
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['pay_name']; ?></td>
          <td bgcolor="#ffffff" width="60%"><?php echo $this->_var['lang']['pay_desc']; ?></td>
          <td bgcolor="#ffffff" width="17%"><?php echo $this->_var['lang']['pay_fee']; ?></td>
        </tr>
        <?php $_from = $this->_var['payment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
        <tr>
          <td bgcolor="#ffffff" align="left">
          <input type="radio" name="payment_id" value="<?php echo $this->_var['list']['pay_id']; ?>" /><?php echo $this->_var['list']['pay_name']; ?></td>
          <td bgcolor="#ffffff" align="left"><?php echo $this->_var['list']['pay_desc']; ?></td>
          <td bgcolor="#ffffff" align="center"><?php echo $this->_var['list']['pay_fee']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <tr>
    <td bgcolor="#ffffff" colspan="3"  align="center">
    <input type="hidden" name="surplus_type" value="0" />
      <input type="hidden" name="rec_id" value="<?php echo $this->_var['order']['id']; ?>" />
      <input type="hidden" name="act" value="act_seller_deposit" />
      <input type="submit" class="bnt_blue_1" name="submit" value="<?php echo $this->_var['lang']['submit_request']; ?>" />
      <input type="reset" class="bnt_blue_1" name="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
    </td>
    </tr>
      </table>
    </form>
    </section>

</section>
<?php endif; ?>



<?php if ($this->_var['action'] == "act_seller_deposit"): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 卖家充值 </h1>
</header>
<section class="wrap">
  <section class="order_box padd1 radius10">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <td width="25%" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['surplus_amount']; ?></td>
            <td width="80%" bgcolor="#ffffff"><?php echo $this->_var['amount']; ?></td>
          </tr>
          <tr>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['payment_name']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_name']; ?></td>
          </tr>
          <tr>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['payment_fee']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['pay_fee']; ?></td>
          </tr>
          <tr>
            <td align="right" valign="middle" bgcolor="#ffffff"><?php echo $this->_var['lang']['payment_desc']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_desc']; ?></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_button']; ?></td>
          </tr>
        </table>
    </section>
</section>
<?php endif; ?>


<?php if ($this->_var['action'] == 'extension'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 注册推广</h1>
</header>
<section class="wrap">
        <section class="order_box padd1 radius10">
            <div class="blank" style="margin:10px;">
                <div>
                    注册推广网址（可自行生成二维码）<br />
                    pc端：<a href="<?php echo $this->_var['pcSpreadUrl']; ?>" style="color:#f70;"><?php echo $this->_var['pcSpreadUrl']; ?></a><br />
                    wap端：<a href="<?php echo $this->_var['spreadUrl']; ?>" style="color:#f70;"><?php echo $this->_var['spreadUrl']; ?></a><br />
                </div>
                <div style="margin-top:30px;">
                    <div id="spread_qrcode"></div>
                </div>
                <script language="javascript">
                    new QRCode(document.getElementById("spread_qrcode"), '<?php echo $this->_var['spreadUrl']; ?>');  // 设置要生成二维码的链接
                </script>
            </div>
    </section>
</section>
<?php endif; ?>


<?php if ($this->_var['action'] == 'oilPrice'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 油品设置</h1>
</header>
<section class="wrap">
    <section class="order_box padd1 radius10">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tbody>
              <tr>
                <td align="right" bgcolor="#ffffff">
                    <a href="seller.php?act=oilPriceAdd" class="f6">新增 </a> |
                </td>
              </tr>
          </tbody>
        </table>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff">类型</td>
            <td bgcolor="#ffffff">规格</td>
            <td bgcolor="#ffffff">型号</td>
            <td bgcolor="#ffffff">价格</td>
            <td bgcolor="#ffffff">操作</td>
          </tr>
          <?php $_from = $this->_var['oilList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['type']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['spec']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['model']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['price']; ?></td>
            <td align="center" bgcolor="#ffffff">
                <a href="seller.php?act=oilPriceEdit&amp;id=<?php echo $this->_var['item']['id']; ?>">修改</a>
                <a href="seller.php?act=oilPriceDelete&amp;id=<?php echo $this->_var['item']['id']; ?>" onclick="if (!confirm('你确实要彻底删除这条油价吗？')) return false;">删除</a>
            </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </table>
        <?php echo $this->fetch('library/pages.lbi'); ?>
    </section>
</section>
<?php endif; ?>


<?php if ($this->_var['action'] == 'oilPriceAdd'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 新增油品</h1>
</header>
<section class="wrap">
            <form name="formSurplus" method="post" action="seller.php" onSubmit="return submitSurplus()">
    <section class="order_box padd1 radius10">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tr>
              <td width="15%" bgcolor="#ffffff">类型:</td>
              <td align="left" bgcolor="#ffffff"><input type="text" name="type"  class="inputBg" value="" size="30" />
                  汽油、柴油
              </td>
            </tr>
            <tr>
              <td width="15%" bgcolor="#ffffff">规格:</td>
              <td align="left" bgcolor="#ffffff"><input type="text" name="spec"  class="inputBg" value="国五" size="30" />
                  国四、国五
              </td>
            </tr>
            <tr>
              <td width="15%" bgcolor="#ffffff">型号:</td>
              <td align="left" bgcolor="#ffffff"><input type="text" name="model"  class="inputBg" value="" size="30" />
                  93#、95#、98#、0#
              </td>
            </tr>
            <tr>
              <td width="15%" bgcolor="#ffffff">价格:</td>
              <td align="left" bgcolor="#ffffff"><input type="text" name="price"  class="inputBg" value="" size="30" /></td>
            </tr>

          </table>
          </table>

    </section>
      <input type="hidden" name="act" value="act_oilPriceAdd" />
      <input type="submit" class="c-btn3" name="submit" value="提交" />
   </form>
</section>
<?php endif; ?>


<?php if ($this->_var['action'] == 'oilPriceEdit'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
  <h1> 编辑</h1>
</header>
<section class="wrap">
            <form name="formSurplus" method="post" action="seller.php" onSubmit="return submitSurplus()">
    <section class="order_box padd1 radius10">
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr>
      <td width="15%" bgcolor="#ffffff">类型:</td>
      <td align="left" bgcolor="#ffffff"><input type="text" name="type"  class="inputBg" value="<?php echo $this->_var['oilinfo']['type']; ?>" size="30" />
          汽油、柴油
      </td>
    </tr>
    <tr>
      <td width="15%" bgcolor="#ffffff">规格:</td>
      <td align="left" bgcolor="#ffffff"><input type="text" name="spec"  class="inputBg" value="<?php echo $this->_var['oilinfo']['spec']; ?>" size="30" />
          国四、国五
      </td>
    </tr>
    <tr>
      <td width="15%" bgcolor="#ffffff">型号:</td>
      <td align="left" bgcolor="#ffffff"><input type="text" name="model"  class="inputBg" value="<?php echo $this->_var['oilinfo']['model']; ?>" size="30" />
          93#、95#、98#、0#
      </td>
    </tr>
    <tr>
      <td width="15%" bgcolor="#ffffff">价格:</td>
      <td align="left" bgcolor="#ffffff"><input type="text" name="price"  class="inputBg" value="<?php echo $this->_var['oilinfo']['price']; ?>" size="30" /></td>
    </tr>

  </table>
  </table>
</section>
    <input type="hidden" name="id" value="<?php echo $this->_var['oilinfo']['id']; ?>" />
    <input type="hidden" name="act" value="act_oilPriceEdit" />
    <input type="submit" class="c-btn3" name="submit" value="提交" />
</form>
</section>
<?php endif; ?>


<?php echo $this->fetch('library/page_footer.lbi'); ?>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
