<?php if ($this->_var['new_goods']): ?>
        <div class="w-max ct bgwh mb30 ovh border-eee">
        	<div class="newopro-l fl">
			<?php
	   $GLOBALS['smarty']->assign('adlist',get_advlist('刚出炉新品左侧广告',1));
	?>
	<?php $_from = $this->_var['adlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_20541000_1511415487');$this->_foreach['ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_20541000_1511415487']):
        $this->_foreach['ad']['iteration']++;
?>  
	   <?php echo $this->_var['ad_0_20541000_1511415487']['content']; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        	</div>
        	<div class="newopro-r fr">
        		<h2 class="index-tt">
        			<em class="ft18 c000">刚出炉新品</em><a href="search.php?intro=new" class="fr c666">更多&gt;&gt;</a>
        		</h2>
                    <ul class="newgoods_fastbuy">
		    <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_20545400_1511415487');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_20545400_1511415487']):
?>
                        <li class="prolist-cent clearfix have_num">
        			<div class="prolist-l fl"><a href="<?php echo $this->_var['goods_0_20545400_1511415487']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_20545400_1511415487']['name']); ?>" class="imgBox"><img src="<?php echo $this->_var['goods_0_20545400_1511415487']['thumb']; ?>" style="height: 158px;width: 158px;" class="zom" alt="<?php echo htmlspecialchars($this->_var['goods_0_20545400_1511415487']['name']); ?>" /></a></div>
        			<div class="prolist-r fl">
        				<h3 class="ft14 c333 bold"><a href="<?php echo $this->_var['goods_0_20545400_1511415487']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_20545400_1511415487']['name']); ?>" ><?php echo htmlspecialchars($this->_var['goods_0_20545400_1511415487']['name']); ?></a></h3>
        				<?php if ($this->_var['goods_0_20545400_1511415487']['brief']): ?><p><em class="c333">[推荐理由]</em><?php echo $this->_var['goods_0_20545400_1511415487']['brief']; ?></p><?php endif; ?>
        				<div>
                                        <span class="p-price"><em class="fastbuy_price"><?php if ($this->_var['goods_0_20545400_1511415487']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_20545400_1511415487']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_20545400_1511415487']['shop_price']; ?><?php endif; ?></em><del><?php echo $this->_var['lang']['market_prices']; ?>:<?php echo $this->_var['goods_0_20545400_1511415487']['market_price']; ?></del></span>
                                <a href="<?php echo $this->_var['goods_0_20545400_1511415487']['url']; ?>" class="p-buy fr ibg">立即抢购</a>
                                <span class="p-time fr">销量：<?php echo $this->_var['goods_0_20545400_1511415487']['sales_volume_base']; ?>件</span>
                                    				</div>
        			</div>
        		</li>
		    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
        	</div>
        </div>
<?php endif; ?>
