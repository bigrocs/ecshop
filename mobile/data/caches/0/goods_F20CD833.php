<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:65:"D:/wwwroot/zhongyan3/wwwroot/mobile/themes/ocailong_com/goods.dwt";i:1;s:76:"D:/wwwroot/zhongyan3/wwwroot/mobile/themes/ocailong_com/library/comments.lbi";i:2;s:79:"D:/wwwroot/zhongyan3/wwwroot/mobile/themes/ocailong_com/library/page_footer.lbi";}s:7:"expires";i:1517151453;s:8:"maketime";i:1517147853;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title>齐农-小麦粉 水饺粉 _米面杂粮_粮油调味_粮油食品_汇丰石化测试网站 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/ocailong_com/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/ocailong_com/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/ocailong_com/style.css" rel="stylesheet" type="text/css" />
<style>
.user_top_goods {
height: 5rem;
overflow: hidden;
background:#ffbf6b;
position:relative
}
.user_top_goods dt {
float: left;
margin: 0.8rem 0.8rem 0;
text-align: center;
position: relative;
width: 3.7rem;
height: 3.7rem;
border-radius: 3.7rem;
padding:0.15rem; background:#FFFFFF
}
.user_top_goods dt img {
width: 3.7rem;
height:3.7rem;
border-radius: 3.7rem;
}
.guanzhu {
background-color: #ffbf6b;
}
.guanzhu {
color: #fff;
border: 0;
height: 2.5rem;
line-height: 2.5rem;
width: 100%;
-webkit-box-flex: 1;
display: block;
-webkit-user-select: none;
font-size: 0.9rem;
}
#cover2 {
    background-color: #333333;
    display: none;
    left: 0;
    opacity: 0.8;
    position: absolute;
    top: 0;
    z-index: 1000;
}
#share_weixin, #share_qq {
    right: 10px;
    top: 2px;
    width: 260px;
}
#share_weixin, #share_qq, #share_qr {
    display: none;
    position: fixed;
    z-index: 3000;
}
#share_weixin img, #share_qq img {
    height: 165px;
    width: 260px;
}
		.button_3 {
    background-color: #EEEEEE;
    border: 1px solid #666666;
    color: #666666;
    font-size: 16px;
    line-height: 20px;
    padding: 10px 0;
    text-align: center;
}
#share_weixin button, #share_qq button {
    margin-top: 25px;
    width: 100%;
}
</style>
<script type="text/javascript" src="js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="js/common1.js">
</script>
<script type="text/javascript" src="data/static/js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="themes/ocailong_com/js/jquery.json.js"></script>
<script type="text/javascript">
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
</script>
<script language="javascript">
function shows_number(result)
{
     if(result.product_number !=undefined){
         document.getElementById('shows_number').innerHTML = result.product_number+'件';
     }else{
         document.getElementById('shows_number').innerHTML = '无库存';
     }
}
//默认就显示第一个属性库存
function changeKucun()
{
var frm=document.forms['ECS_FORMBUY'];
spec_arr = getSelectedAttributes(frm);
    if(spec_arr==''){
         document.getElementById('shows_number').innerHTML = '19998件';
    }else{
         Ajax.call('goods.php?act=get_products_info', 'id=' + spec_arr+ '&goods_id=' + goods_id, shows_number, 'GET', 'JSON');
    }
}
</script>
</head>
<body>
<header id="header" class="goods_header">
  <div class="header_l header_return"> <a class="ico_10" href="javascript:history.back();"> 返回 </a> </div>
  <h1> 商品详情 </h1>
</header>
<script src="themes/ocailong_com/js/TouchSlide.js"></script>
<section class="goods_slider">
  <div id="slideBox" class="slideBox">
    <div class="scroller">
      <!--<div><a href="javascript:showPic()"><img src="images/201801/thumb_img/446_thumb_G_1516065463996.jpg"  alt="齐农-小麦粉 水饺粉 " /></a></div>-->
      <ul>
                              <li><a href="javascript:showPic()"><img style="width:auto;height:20rem;" src="http://www.sdhfshxs.com/images/201801/goods_img/446_P_1516065463805.png"/></a></li>
                      <li><a href="javascript:showPic()"><img style="width:auto;height:20rem;" src="http://www.sdhfshxs.com/images/201801/goods_img/446_P_1516065464017.png"/></a></li>
                      </ul>
    </div>
    <div class="icons">
      <ul>
        <i class="current"></i>
                        <i class="current"></i>
                <i class="current"></i>
                      </ul>
    </div>
  </div>
</section>
<script type="text/javascript">
TouchSlide({
	slideCell:"#slideBox",
	titCell:".icons ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".scroller ul",
	effect:"leftLoop",
	autoPage:true,//自动分页
	autoPlay:true //自动播放wq
});
function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script>
<section class="goodsInfo">
  <a class="collect" id="collect_box" href="javascript:collect(446)" style="display: inline;"></a>
  <div class="title">
    <h1> 齐农-小麦粉 水饺粉  </h1>
  </div>
    <div class="title">
      </div>
  <ul>
        <li>本店售价：<b class="price">￥<span>25.00</span></b>　    <del>原价：￥<span>55.00</span></del>
    </li>
    	    <li>
	注册用户：<b class="price" >￥<span>25.00</span></b></li>
  </ul>
  <ul>
      <li>可用储值卡:<b class="price" id="ECS_SHOP_JIUBI">2.50</b></li>
  </ul>
    
  <ul>
    <li>月销量：0件</li>
  </ul>
</section>
<div class="wrap">
  <section class="goodsBuy radius5">
    <input id="goodsBuy-open" type="checkbox">
    <label class="info" for="goodsBuy-open">
    <div>请选择<span>面粉重量</span><i></i></div>
    <div class="selected"> </div>
    </label>
    <form action="javascript:addToCart(446)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
     <div class="fields"   style="display: block;">
        <ul class="ul1">
          <li>商品总价：<font id="ECS_GOODS_AMOUNT" class="price"></font></li>
          <li></li>
        </ul>
        <ul class="ul2">
              
              		<li>
		<h2>面粉重量：</h2>
                <div class="items">
                  
                                                      
                  <input type="hidden" name="spec_attr_type" value="390">
                  <ul class="ys_xuan" id="xuan_390">
                    <div class="catt" id="catt_390">
                                            <a href="javascript:" class="cattsel" onclick="show_attr_status(this,446);" name="476" id="xuan_a_476">
		      <p style="padding:6px 10px;" title="5kg">
		                            <em>5kg</em>
                                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_476" type="radio" name="spec_390" value="476" checked />
                      </a>
                                            <a href="javascript:"  onclick="show_attr_status(this,446);" name="477" id="xuan_a_477">
		      <p style="padding:6px 10px;" title="10kg">
		                            <em>10kg</em>
                                            <i></i>
                      </p>
                      <input style="display:none" id="spec_value_477" type="radio" name="spec_390" value="477"  />
                      </a>
                                          </div>
                  </ul>
                  <input type="hidden" name="spec_list" value="1" />
                  
                                                    </div>
                            
              <script type="text/javascript">
var myString=new Array();
myString[0]="|476|";
myString[1]="|477|";
</script>
              
              
        </ul>
        <ul class="quantity">
          <h2>数量：</h2>
          <div class="items">
	   <span class="ui-number radius5" style="float:left;">
                        <button type="button" class="decrease radius5" onclick="changenum(- 1)">-</button>
            <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="19998" type="text" />
            <button type="button" class="increase radius5" onclick="changenum(1)">+</button>
                       </span>
           <p style="float:left;heigth:2.3rem;line-height:2.3rem;margin-left:1rem;">
	                                              库存：
                    <font id="shows_number">载入中···</font>
                    	                 </p>
	  </div>
        </ul>
      </div>
      <div class="option" >
        <script type="text/javascript">
            function showDiv(){
                document.getElementById('popDiv').style.display = 'block';
				document.getElementById('hidDiv').style.display = 'block';
				document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
				document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
            }
            function closeDiv(){
                document.getElementById('popDiv').style.display = 'none';
				document.getElementById('hidDiv').style.display = 'none';
            }
     </script>
	 <!--
        <button type="button" class="btn buy radius5" onClick="addToCart_quick(446)">立即购买</button>
        <button type="button" class="btn cart radius5" onclick="addToCart(446);">
        <div class="ico_01"></div>
        加入购物车</button>-->
        
        <div class="tipMask" id="hidDiv" style="display:none" ></div>
        <div class="sellerPopGeneral" id="sellerDiv" >
          <div class="tit">
            <h4>厂家信息</h4>
            <span class="ico_08" onclick="sellerCloseDiv()"><a href="javascript:"></a></span> </div>
          <div id="main">
                      </div>
        </div>
        <div class="popGeneral" id="popDiv" >
          <div class="tit">
            <h4>商品加入购物车</h4>
            <span class="ico_08" onclick="closeDiv()"><a href="javascript:"></a></span> </div>
          <div id="main">
            <div id="left"> <img width="115" height="115" src="http://www.sdhfshxs.com/images/201801/source_img/446_G_1516065463109.png"> </div>
            <div id="right">
              <p>齐农-小麦粉 水饺粉 </p>
              <span> 加入数量： <b id="cartNum"></b></span> <span> 总计金额： <b id="cartPrice"></b></span>
            </div>
          </div>
          <div class="popbtn"> <a class="bnt1 flex_in radius5" onclick="closeDiv()" href="javascript:void(0);">继续购物</a> <a class="bnt2 flex_in radius5" href="flow.php">去结算</a> </div>
        </div>
        
      </div>
    </form>
  </section>
  <div class="guarantee">微信支付商家,正品保证,假一罚三,七天无条件退换货。</div>
</div>
<script type="text/javascript">
//介绍 评价 咨询切换
var tab_now = 1;
function tab(id){
	document.getElementById('tabs' + tab_now).className = document.getElementById('tabs' + tab_now).className.replace('current', '');
	document.getElementById('tabs' + id).className = document.getElementById('tabs' + id).className.replace('', 'current');
	tab_now = id;
	if (id == 1) {
		document.getElementById('tab1').className = '';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 3) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = '';
	}
}
</script>
<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> 详情 </li>
      <li id="tabs2" onClick="tab(2)" class=""> 评价 <span class="review-count">(0)</span> </li>
      <li id="tabs3" onClick="tab(3)" class=""> 热销 </li>
    </ul>
  </header>
  <div id="tab1" class="">
<div class="spxq_main">
<style>
.spxq_main table {
    width: 100%;
}
.spxq_main table td {
    border: 1px solid #e5e5e5;
    padding: 5px 10px;
    background-color: #fff;
}
.spxq_main table td.th {
    background-color: #f5f5f5;
    font-weight: bold;
    text-align: right;
    width: 70px;
}
.spxq_main table td strong {
    font-weight: 400;
}
.spxq_main table td div, .spxq_main table td span {
    display: block;
    margin-bottom: 4px;
}
</style>
  <table>
    <tbody>
      <tr>
        <td width="25%" class="th">
          产品名称 :
        </td>
        <td width="75%">
          齐农-小麦粉 水饺粉         </td>
      </tr>
                </tbody>
  </table>
</div>
    <div class="desc wrap">
      <div class="blank2"></div>
	  		<p><img src="http://www.sdhfshxs.com/images/upload/Image/mian%20fen/jiaozifen.jpg" width="788" height="3536" alt="" /></p>	      </div>
  </div>
  <div id="tab2" class="hidden">
    <div class="wrap">
      <div class="blank2"></div>
      <script type="text/javascript" src="data/static/js/transportjq.js"></script><script type="text/javascript" src="data/static/js/utils.js"></script><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:446;}554fcae493e564ee0dc75bdf2ebf94ca</div>
 </div>
  </div>
  <div id="tab3" class="hidden">
    <div class="wrap">
      <ul class="m-recommend ">
        <div class="blank2"></div>
              </ul>
    </div>
  </div>
</section>
<div id="content" class="footer mr-t20">
  <div class="in">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input name="keywords" type="text" id="keywordfoot" />
        <button class="ico_07" type="submit" value="搜索" onclick="return check('keywordfoot')"> </button>
      </form>
    </div>
    <a href="./" class="homeBtn"> <span class="ico_05"> </span> </a> <a href="#top" class="gotop"> <span class="ico_06"> </span> <p> TOP </p>
    </a>
  </div>
  <p class="link region"> <a href="./"> 返回首页 </a> <a href="flow.php"> 购物车 </a> <a href="user.php"> 会员中心 </a> <a href="ectouch.php?act=contact"> 联系我们 </a> </p>
  <p class="region">
        &copy; 2005-2018 汇丰石化测试网站 版权所有，并保留所有权利。 </p>
  <div class="favLink region"> <a href="">  </a> </div>
</div>
<div class="global-nav global-nav--current">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
</div>
<div id="toTop" class="toTop">
  <img alt="" src="themes/ocailong_com/images/scropTop.png">
</div>
<script>
$(function(){
	isIe6 = false;
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}
	var offset = $("#toTop").offset();
	var bottom = $("#toTop").css("bottom");
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#toTop").fadeIn(800);
			if(isIe6)
			{
				$("#toTop").css("position","absolute")
				$("#toTop").css("bottom",bottom)
			}
		}
		else
		{
			$("#toTop").fadeOut(500);
		}
	});
	$("#toTop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
})
</script>
<script type="text/javascript" src="themes/ocailong_com/js/zepto.min.js"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
      // navHide();
     }else{
      // navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script>
<script type="text/javascript">
var goods_id = 446;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 446;
var now_time = 1517119053;
onload = function(){
  changePrice();
  changeKucun();//这里是添加的
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT')){
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
    }
    if (document.getElementById('ECS_SHOP_JIUBI')){
      document.getElementById('ECS_SHOP_JIUBI').innerHTML = res.resultJiuBi;
    }
  }
}
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: false,
    appId: 'wx48dc842d5284028c',
    timestamp: 1517147853,
    nonceStr: 'B68ynq4d7M99sNCY',
    signature: 'f51b97a34e092b87cb7dab4b7047a2d4da3f65af',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage'
    ]
  });
 wx.ready(function () {
	//模板之家监听“分享给朋友”
    wx.onMenuShareAppMessage({
      title: '齐农-小麦粉 水饺粉 ',
      desc: '齐农-小麦粉 水饺粉 ',
      link: 'http://www.sdhfshxs.com/mobile/index.php?u=19',
      imgUrl: 'http://www.sdhfshxs.com/images/201801/source_img/446_G_1516065463109.png',
      trigger: function (res) {
		        alert('恭喜！分享可以获取提成哦！');
		
      },
      success: function (res) {
		        window.location.href="http://www.sdhfshxs.com/mobile/re_url.php?user_id=19&type=1";
		      },
      cancel: function (res) {
        alert('很遗憾，您已取消分享');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
	//分享到朋友圈模板之家
    wx.onMenuShareTimeline({
      title: '齐农-小麦粉 水饺粉 ',
      link: 'http://www.sdhfshxs.com/mobile/index.php?u=19',
      imgUrl: 'http://www.sdhfshxs.com/images/201801/source_img/446_G_1516065463109.png',
      trigger: function (res) {
        			alert('恭喜！分享可以获取提成哦！');
		      },
      success: function (res) {
       	        window.location.href="http://www.sdhfshxs.com/mobile/re_url.php?user_id=19&type=2";
		      },
      cancel: function (res) {
         alert('很遗憾，您已取消分享');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
});
</script>
<section id="s-action" class="s-action float">
    <button class="buy" type="button" onclick="addToCart_quick(446)">立刻购买</button>
    <button class="cart" type="button" onclick="addToCart(446);">加入购物车</button>
    <div class="countdown"> <span class="label"></span><span class="time"></span></div>
    <a href="flow.php?step=cart" class="cart-link" title="购物车"></a>
</section>
<script type="text/javascript">
function hiddenweixin(){
	// document.getElementById("weixin_gz").style.display='none';
}
</script>
<!-- <div style="position:relative;position:absolute;position:fixed;bottom:0px;display:block;" id="weixin_gz" class="weixingz-con">
  <div class="weixin_gz">
    <div class="weixingz-logo">
    </div>
    <div class="alogo">
      <p class="client-name">
        关注公众号即送购物红包哦！
      </p>
      <p class="client-logon">
      </p>
    </div>
    <div class="open_now">
      <a href="http://mp.weixin.qq.com/s?__biz=MzA3NjQ5MDUzNg==&mid=206468600&idx=1&sn=e5bd46e66f70ea2ecdb046e9d6fd8fd0#rd">
        <span class="open_btn">
          立即关注
        </span>
      </a>
    </div>
    <div class="close-btn-con close-btn">
      <span class="close-btn-icon" id="weixin_close" onclick="hiddenweixin();">
      </span>
    </div>
  </div>
</div> -->
<script type="text/javascript">
    </script>
</body>
</html>
