<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:65:"D:/wwwroot/zhongyan3/wwwroot/mobile/themes/ocailong_com/index.dwt";i:1;s:79:"D:/wwwroot/zhongyan3/wwwroot/mobile/themes/ocailong_com/library/ad_position.lbi";i:2;s:82:"D:/wwwroot/zhongyan3/wwwroot/mobile/themes/ocailong_com/library/recommend_best.lbi";i:3;s:77:"D:/wwwroot/zhongyan3/wwwroot/mobile/themes/ocailong_com/library/cat_goods.lbi";i:4;s:79:"D:/wwwroot/zhongyan3/wwwroot/mobile/themes/ocailong_com/library/page_footer.lbi";}s:7:"expires";i:1517198145;s:8:"maketime";i:1517194545;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>汇丰石化测试网站</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/ocailong_com/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/ocailong_com/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/ocailong_com/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/ocailong_com/js/TouchSlide.js"></script>
<script type="text/javascript" src="themes/ocailong_com/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/ocailong_com/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="themes/ocailong_com/js/ectouch.js"></script>
<script type="text/javascript">
  function getLocalTime(nS) {
    return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/, ' ');
  }
  function limitCount() {
    var a = limitCount.doms = limitCount.doms || $("#JS_limit_table div.JS_leaveTime");
    a.each(function() {
      var c = $(this);
      var b = c[0]._timeline = c[0]._timeline || c.data("timeline");
      c.html(limitFormatTime(b - limitCount.unixTime));
    });
  }
  function limitFormatTime(e) {
    if (e < 0) {
      e = 0;
    }
    var NowTime = new Date();
    var t = e * 1000 - NowTime.getTime();
    /*var d=Math.floor(t/1000/60/60/24);
        t-=d*(1000*60*60*24);
        var h=Math.floor(t/1000/60/60);
        t-=h*60*60*1000;
        var m=Math.floor(t/1000/60);
        t-=m*60*1000;
        var s=Math.floor(t/1000);*/
    var d = Math.floor(t / 1000 / 60 / 60 / 24);
    if (d<10){
       d = '0' + d;
    }
    var h = Math.floor(t / 1000 / 60 / 60 % 24);
    if (h<10){
       h = '0' + h;
    }
    var m = Math.floor(t / 1000 / 60 % 60);
    if (m<10){
       m = '0' + m;
    }
    var s = Math.floor(t / 1000 % 60);
    if (s<10){
       s = '0' + s;
    }
    if (t < 0) {
    return "活动结束";
    }
    return '<em>'+ d + '</em>天' + '<em>' + h + '</em>时<em>' + m + '</em>分<em>' + s + '</em>秒';
  }
  function _COMMON_UNIX_TIME() {
    limitCount.unixTime = 0;
    setInterval(limitCount, 1000);
  }
  _COMMON_UNIX_TIME();
</script>
<style>
*{outline:0;-webkit-tap-highlight-color:transparent;-webkit-box-sizing:border-box;box-sizing:border-box}
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
</head>
<body>
<div id="page">
  <header id="header" >
    <div class="header_l"> <a class="ico_02" href="#menu"> 菜单栏 </a> </div>
    <h1> 汇丰石化测试网站 </h1>
    <div class="header_r"> <a class="regionCitys" onclick="showDiv()"> 全国 </a> </div>
  </header>
</div>
<div id="focus" class="focus region">
  <div class="hd">
    <ul>
    </ul>
  </div>
  <div class="bd">
    
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"1";s:3:"num";s:1:"3";}554fcae493e564ee0dc75bdf2ebf94ca
  </div>
</div>
<script type="text/javascript">
TouchSlide({
	slideCell:"#focus",
	titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".bd ul",
	effect:"leftLoop",
	autoPlay:true,//自动播放
	autoPage:true //自动分页
});
</script>
<div id=content class="wrap">
  
  <header class=region>
    <div class=content>
      <div id=fake-search>
        <div class="fakeInput radius15">
          <button class="text" id="get_search_box" style="color:silver;">搜本站商品</button>
          <div class="search ico_03"> </div>
        </div>
      </div>
    </div>
  </header>
  
  <div class="region row row_category">
    <ul class="flex flex-f-row">
            <li class="flex_in"> <a href="cat_all.php" title="全部分类"> <div class="CarouselImg"><img src="data/item_pic/1443584338752549142.png" /></div> </a>
        <p> 全部分类 </p>
      </li>
                  <li class="flex_in"> <a href="user.php?act=nav_list" title="导航"> <div class="CarouselImg"><img src="data/item_pic/1443586488909704319.png" /></div> </a>
        <p> 导航 </p>
      </li>
                  <li class="flex_in"> <a href="group_buy.php" title="团购"> <div class="CarouselImg"><img src="data/item_pic/1443585779204202237.png" /></div> </a>
        <p> 团购 </p>
      </li>
                  <li class="flex_in"> <a href="exchange.php" title="积分商城"> <div class="CarouselImg"><img src="data/item_pic/1443586061863736586.png" /></div> </a>
        <p> 积分商城 </p>
      </li>
                </ul>
  </div>
  
<div class="blank2"></div>
<div class="mainCon">
  <dl class="wholeTime">
     <dt class="wholePoint surper clearfix">
        <span class="san fl"><i></i>特色市场</span>
     </dt>
     <dd>
     <div class="superBan clearfix">
       <div class="featurBan1 fl">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"2";}554fcae493e564ee0dc75bdf2ebf94ca
       </div>
       <div class="featurBan2 fl">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"3";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
       </div>
     </div>
     </dd>
  </dl>
</div>
<div class="blank2"></div>
<div class="mainCon">
  <dl class="wholeTime">
    <dt class="wholePoint surper clearfix">
      <span class="san fl">
        <i>
        </i>
        热门市场
      </span>
    </dt>
    <dd>
      <div class="superBan brandWallBan clearfix">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"4";s:3:"num";s:1:"9";}554fcae493e564ee0dc75bdf2ebf94ca
      </div>
    </dd>
  </dl>
</div>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=best">
        <span class="titico"></span>精品推荐<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=202&u=19">
                <img src="http://www.sdhfshxs.com/images/201711/thumb_img/202_thumb_G_1511572087353.jpg" alt="怀庄53-神秘茅台" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>158.00</span> </span> 
                        <br>怀庄53-神秘茅台            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=446&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/446_thumb_G_1516065463996.jpg" alt="齐农-小麦粉 水饺粉 " />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>25.00</span> </span> 
                        <br>齐农-小麦粉 水饺粉            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=523&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/523_thumb_G_1516748909701.jpg" alt="汾酒 30年青花 53° 单瓶 清香型" />
            </a>
            <div style="text-align:center">
             
            <span class="price_s"> ￥<span>658.00</span> </span> 
                        <br>汾酒 30年青花 53°...            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=2">
        <span class="titico"></span>粮油食品<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=524&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/524_thumb_G_1516300468159.jpg" alt="巧媳妇原汁酱油1.9L" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>17.00</span> </span>
                        <del style="color:#878D99">￥<span>19.50</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 0.00 </span>
            <br>巧媳妇原汁酱油1.9L            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=452&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/452_thumb_G_1516123702427.jpg" alt="西王鲜胚玉米胚芽油1.8L" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>38.60</span> </span>
                        <del style="color:#878D99">￥<span>46.32</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 3.00 </span>
            <br>西王鲜胚玉米胚芽油1.8...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=446&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/446_thumb_G_1516065463996.jpg" alt="齐农-小麦粉 水饺粉 " />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>25.00</span> </span>
                        <del style="color:#878D99">￥<span>55.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 2.50 </span>
            <br>齐农-小麦粉 水饺粉            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=459&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/459_thumb_G_1516128634694.jpg" alt="西王鲜胚玉米胚芽油5L" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>112.80</span> </span>
                        <del style="color:#878D99">￥<span>118.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 6.00 </span>
            <br>西王鲜胚玉米胚芽油5L            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=435&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/435_thumb_G_1516057348440.jpg" alt="齐农-小麦粉 颗粒粉 10KG" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>55.00</span> </span>
                        <del style="color:#878D99">￥<span>60.50</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 5.50 </span>
            <br>齐农-小麦粉 颗粒粉 1...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=526&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/526_thumb_G_1516302329017.jpg" alt="巧媳妇葱姜料酒" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>5.80</span> </span>
                        <del style="color:#878D99">￥<span>6.20</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 0.00 </span>
            <br>巧媳妇葱姜料酒            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=5">
            粮油调味        </A>
                <A href="category.php?id=15">
            精品肉类        </A>
                <A href="category.php?id=16">
            海鲜水产        </A>
                <A href="category.php?id=18">
            瓜果蔬菜        </A>
                <A href="category.php?id=170">
            牛乳制品        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=1">
        <span class="titico"></span>烟酒茶饮<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=202&u=19">
                <img src="http://www.sdhfshxs.com/images/201711/thumb_img/202_thumb_G_1511572087353.jpg" alt="怀庄53-神秘茅台" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>158.00</span> </span>
                        <del style="color:#878D99">￥<span>398.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 89.00 </span>
            <br>怀庄53-神秘茅台            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=721&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/721_thumb_G_1516905728529.jpg" alt="茶语仙-软枝乌龙 150g X 2" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>160.00</span> </span>
                        <del style="color:#878D99">￥<span>420.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 10.00 </span>
            <br>茶语仙-软枝乌龙 150...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=523&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/523_thumb_G_1516748909701.jpg" alt="汾酒 30年青花 53° 单瓶 清香型" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>658.00</span> </span>
                        <del style="color:#878D99">￥<span>748.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 0.00 </span>
            <br>汾酒 30年青花 53°...            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=711&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/711_thumb_G_1516842807852.jpg" alt="五粮液 52°五粮液 500ml 浓香型 " />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>1099.00</span> </span>
                        <del style="color:#878D99">￥<span>1099.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 0.00 </span>
            <br>五粮液 52°五粮液 5...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=698&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/698_thumb_G_1516837561587.jpg" alt="茅台-汉酱 51° 500ml 酱香型" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>298.00</span> </span>
                        <del style="color:#878D99">￥<span>359.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 0.00 </span>
            <br>茅台-汉酱 51° 50...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=483&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/483_thumb_G_1516147985114.jpg" alt="三億茶-大禹岭茶150g/罐" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>500.00</span> </span>
                        <del style="color:#878D99">￥<span>580.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 60.00 </span>
            <br>三億茶-大禹岭茶150g...            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=7">
            茗茶        </A>
                <A href="category.php?id=144">
            美酒        </A>
                <A href="category.php?id=146">
            饮料        </A>
                <A href="category.php?id=191">
            香烟        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=5">
        <span class="titico"></span>粮油调味<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=524&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/524_thumb_G_1516300468159.jpg" alt="巧媳妇原汁酱油1.9L" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>17.00</span> </span>
                        <del style="color:#878D99">￥<span>19.50</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 0.00 </span>
            <br>巧媳妇原汁酱油1.9L            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=452&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/452_thumb_G_1516123702427.jpg" alt="西王鲜胚玉米胚芽油1.8L" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>38.60</span> </span>
                        <del style="color:#878D99">￥<span>46.32</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 3.00 </span>
            <br>西王鲜胚玉米胚芽油1.8...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=446&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/446_thumb_G_1516065463996.jpg" alt="齐农-小麦粉 水饺粉 " />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>25.00</span> </span>
                        <del style="color:#878D99">￥<span>55.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 2.50 </span>
            <br>齐农-小麦粉 水饺粉            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=459&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/459_thumb_G_1516128634694.jpg" alt="西王鲜胚玉米胚芽油5L" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>112.80</span> </span>
                        <del style="color:#878D99">￥<span>118.00</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 6.00 </span>
            <br>西王鲜胚玉米胚芽油5L            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=435&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/435_thumb_G_1516057348440.jpg" alt="齐农-小麦粉 颗粒粉 10KG" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>55.00</span> </span>
                        <del style="color:#878D99">￥<span>60.50</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 5.50 </span>
            <br>齐农-小麦粉 颗粒粉 1...            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=526&u=19">
                <img src="http://www.sdhfshxs.com/images/201801/thumb_img/526_thumb_G_1516302329017.jpg" alt="巧媳妇葱姜料酒" />
            </a>
            <div style="text-align:center">
                        <span class="price_s"> ￥<span>5.80</span> </span>
                        <del style="color:#878D99">￥<span>6.20</span></del>
            <br> 可用储值卡:<span style="color:#EB9E05"> 0.00 </span>
            <br>巧媳妇葱姜料酒            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=30">
            食用油        </A>
                <A href="category.php?id=31">
            米面杂粮        </A>
                <A href="category.php?id=32">
            厨房调料        </A>
                <A href="category.php?id=34">
            方便速食        </A>
                    </div>
</section>
</div>
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
<nav id="menu" style="display:None">
  <ul>
        <li> <a href="category.php?id=2"> 粮油食品 </a>
      <ul>
                <li> <a href="category.php?id=5"> 粮油调味 </a>
          <ul>
                        <li> <a href="category.php?id=30"> 食用油 </a> </li>
                        <li> <a href="category.php?id=31"> 米面杂粮 </a> </li>
                        <li> <a href="category.php?id=32"> 厨房调料 </a> </li>
                        <li> <a href="category.php?id=34"> 方便速食 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=15"> 精品肉类 </a>
          <ul>
                        <li> <a href="category.php?id=64"> 羊肉 </a> </li>
                        <li> <a href="category.php?id=65"> 禽类 </a> </li>
                        <li> <a href="category.php?id=66"> 猪肉 </a> </li>
                        <li> <a href="category.php?id=67"> 牛肉 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=16"> 海鲜水产 </a>
          <ul>
                        <li> <a href="category.php?id=68"> 参鲍 </a> </li>
                        <li> <a href="category.php?id=69"> 鱼 </a> </li>
                        <li> <a href="category.php?id=70"> 虾 </a> </li>
                        <li> <a href="category.php?id=71"> 蟹/贝 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=18"> 瓜果蔬菜 </a>
          <ul>
                        <li> <a href="category.php?id=77"> 时令鲜蔬 </a> </li>
                        <li> <a href="category.php?id=174"> 四季鲜果 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=170"> 牛乳制品 </a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=1"> 烟酒茶饮 </a>
      <ul>
                <li> <a href="category.php?id=7"> 茗茶 </a>
          <ul>
                        <li> <a href="category.php?id=61"> 白茶 </a> </li>
                        <li> <a href="category.php?id=62"> 红茶 </a> </li>
                        <li> <a href="category.php?id=63"> 绿茶 </a> </li>
                        <li> <a href="category.php?id=137"> 黑茶 </a> </li>
                        <li> <a href="category.php?id=138"> 乌龙茶 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=144"> 美酒 </a>
          <ul>
                        <li> <a href="category.php?id=23"> 白酒 </a> </li>
                        <li> <a href="category.php?id=26"> 啤酒 </a> </li>
                        <li> <a href="category.php?id=24"> 葡萄酒 </a> </li>
                        <li> <a href="category.php?id=162"> 黄酒 </a> </li>
                        <li> <a href="category.php?id=163"> 保健酒 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=146"> 饮料 </a>
          <ul>
                        <li> <a href="category.php?id=167"> 矿泉水 </a> </li>
                        <li> <a href="category.php?id=168"> 碳酸饮料 </a> </li>
                        <li> <a href="category.php?id=169"> 果汁 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=191"> 香烟 </a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=132"> 美妆洗化 </a>
      <ul>
                <li> <a href="category.php?id=139"> 口腔护理 </a>
          <ul>
                        <li> <a href="category.php?id=147"> 牙膏 </a> </li>
                        <li> <a href="category.php?id=148"> 牙刷 </a> </li>
                        <li> <a href="category.php?id=149"> 漱口水 </a> </li>
                        <li> <a href="category.php?id=150"> 牙线 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=140"> 面部护理 </a>
          <ul>
                        <li> <a href="category.php?id=152"> 洁面乳 </a> </li>
                        <li> <a href="category.php?id=153"> 面膜 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=141"> 衣物清洁 </a>
          <ul>
                        <li> <a href="category.php?id=154"> 洗衣液 </a> </li>
                        <li> <a href="category.php?id=155"> 洗衣粉 </a> </li>
                        <li> <a href="category.php?id=156"> 内衣皂 </a> </li>
                        <li> <a href="category.php?id=157"> 天然皂粉 </a> </li>
                        <li> <a href="category.php?id=158"> 透明皂 </a> </li>
                        <li> <a href="category.php?id=181"> 柔顺剂 </a> </li>
                        <li> <a href="category.php?id=186"> 洗衣皂 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=159"> 洗发护发 </a>
          <ul>
                        <li> <a href="category.php?id=160"> 洗发水 </a> </li>
                        <li> <a href="category.php?id=161"> 护发素 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=171"> 沐浴清洁 </a>
          <ul>
                        <li> <a href="category.php?id=151"> 香皂 </a> </li>
                        <li> <a href="category.php?id=179"> 沐浴露 </a> </li>
                        <li> <a href="category.php?id=180"> 洗手液 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=182"> 厨卫清洁 </a>
          <ul>
                        <li> <a href="category.php?id=183"> 洗洁精 </a> </li>
                        <li> <a href="category.php?id=184"> 洁厕灵 </a> </li>
                        <li> <a href="category.php?id=189"> 机用清洁剂 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=199"> 儿童护理 </a>
          <ul>
                        <li> <a href="category.php?id=201"> 青蛙王子 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=202"> 韩束专区 </a>
          <ul>
                        <li> <a href="category.php?id=203"> 弹润系列 </a> </li>
                        <li> <a href="category.php?id=205"> 面部清洁 </a> </li>
                        <li> <a href="category.php?id=206"> 凝乳 </a> </li>
                        <li> <a href="category.php?id=207"> 补水系列 </a> </li>
                        <li> <a href="category.php?id=209"> 韩束细肤 </a> </li>
                        <li> <a href="category.php?id=210"> 洁面乳 </a> </li>
                        <li> <a href="category.php?id=211"> 韩束套装 </a> </li>
                        <li> <a href="category.php?id=218"> 红景天系列 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=204"> 美妆日用 </a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=213"> 相宜本草 </a>
          <ul>
                        <li> <a href="category.php?id=214"> 百合高保湿系列 </a> </li>
                        <li> <a href="category.php?id=215"> 芯净自然系列 </a> </li>
                        <li> <a href="category.php?id=216"> 红景系列 </a> </li>
                        <li> <a href="category.php?id=217"> 相宜本草四倍系列 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=133"> 家居家纺 </a>
      <ul>
                <li> <a href="category.php?id=192"> 四件套 </a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=193"> 六件套 </a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=194"> 十件套 </a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=195"> 被子 </a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=196"> 毯子 </a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=134"> 箱包钟表 </a>
      <ul>
              </ul>
    </li>
        <li> <a href="category.php?id=136"> 汽车用品 </a>
      <ul>
                <li> <a href="category.php?id=142"> 润滑油 </a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=135"> 数码电器 </a>
      <ul>
                <li> <a href="category.php?id=197"> 抽油烟机 </a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=198"> 燃气灶 </a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=172"> 户外运动 </a>
      <ul>
              </ul>
    </li>
        <li> <a href="category.php?id=173"> 时装鞋靴 </a>
      <ul>
                <li> <a href="category.php?id=175"> 女装 </a>
          <ul>
                        <li> <a href="category.php?id=187"> 貂皮大衣 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=176"> 男装 </a>
          <ul>
                        <li> <a href="category.php?id=188"> 貂皮大衣 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=177"> 男鞋 </a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=178"> 女鞋 </a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=143"> 直销产品 </a>
      <ul>
              </ul>
    </li>
      </ul>
</nav>
<div id="regionCity" class="popGeneralRegion">
  <div class="tit">
      <h4>选择城市</h4>
      <span class="ico_08" onclick="closeDiv()"><a href="javascript:"></a></span>
  </div>
  <div class="main">
      <ul>
          <li><a href="index.php?regionCity=1">全国</a></li>
                  <li><a href="index.php?regionCity=298">枣庄</a></li>
                  <li><a href="index.php?regionCity=284">青岛</a></li>
                  <li><a href="index.php?regionCity=283">济南</a></li>
                  <li><a href="index.php?regionCity=52">北京</a></li>
                  <li><a href="index.php?regionCity=299">淄博</a></li>
                  <li><a href="index.php?regionCity=285">滨州</a></li>
              </ul>
  </div>
</div>
<div id="main-search" class="main-search">
<div class="hd"> <span class="ico_08 close"> 关闭 </span> </div>
<div class="bd">
  <div class="search_box">
    <form action="search.php" method="post" id="searchForm" name="searchForm">
      <div class="content">
        <input class="text" type="search" name="keywords" id="keywordBox" autofocus />
        <button class="ico_07" type="submit" value="搜 索" onclick="return check('keywordBox')"></button>
      </div>
    </form>
  </div>
</div>
</div>
<script type="text/javascript">
window.onload = function(){
  $('#menu').css('display','');
}
$(function() {
	$('nav#menu').mmenu();
	$('#get_search_box').click(function(){
		$(".mm-page").children('div').hide();
		$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
		//$('#keywordBox').focus();
	})
	$("#main-search .close").click(function(){
		$(".mm-page").children('div').show();
		$("#main-search").hide();
	})
});
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: false,
    appId: 'wx48dc842d5284028c',
    timestamp: 1517194545,
    nonceStr: 'syRZs1WdmLFJPCux',
    signature: 'df19703df9c9a736e7cb6f9704f068ba1cc77bf0',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage'
    ]
  });
 wx.ready(function () {
	//模板之家监听“分享给朋友”
    wx.onMenuShareAppMessage({
      title: '汇丰石化测试网站',
      desc: '汇丰石化测试网站',
      link: 'http://www.sdhfshxs.com/mobile/index.php?u=19',
      imgUrl: '',
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
      title: '汇丰石化测试网站',
      link: 'http://www.sdhfshxs.com/mobile/index.php?u=19',
      imgUrl: '',
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
    function showDiv(){
        document.getElementById('regionCity').style.display = 'block';
    }
    function closeDiv(){
        document.getElementById('regionCity').style.display = 'none';
    }
</script>
</body>
</html>
