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
</head>

<body>
<div id="page">
  <header id="header">
    <div class="header_l"> <a class="ico_10" onClick="javascript:history.back();"> 返回 </a> </div>
    <h1> 提示消息 </h1>
    <div class="header_r"></div>
  </header>
</div>
<div class="blank3"></div>
<section class="wrap" style="padding-bottom:1rem">
  <ul class="radius10 itemlist">
    <div style="margin:1rem auto; text-align:center">
      <p style="font-size:0.8rem; font-weight:bold; color: red;"><?php echo $this->_var['message']['content']; ?></p>
      <div class="blank"></div>
      <?php if ($this->_var['message']['url_info']): ?>
      <?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
      <p class="info"><a href="<?php echo $this->_var['url']; ?>"><?php echo $this->_var['info']; ?></a></p>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      <?php endif; ?>
    </div>
  </ul>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="#">
        <span class="titico"></span>猜你喜欢<span class="titmore"></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
        <?php $_from = $this->_var['randGoods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
        <div class="goodsItem flex_in">
            <a href="<?php echo $this->_var['goods']['url']; ?>">
                <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
            </a>
            <div style="text-align:center">
            <?php if ($this->_var['goods']['promote_price'] != ""): ?>
            <span class="price_s"> <?php echo $this->_var['goods']['promote_price']; ?> </span>
            <?php else: ?>
            <span class="price_s"> <?php echo $this->_var['goods']['shop_price']; ?> </span>
            <?php endif; ?>
            <br><?php echo sub_str(htmlspecialchars($this->_var['goods']['name']),12); ?>
            </div>
        </div>
         <?php if ($this->_foreach['goods']['iteration'] % 3 == 0): ?></div><div class="flex flex-f-row"><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</section>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
</body>
</html>
