
<?php $_from = $this->_var['pinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
<p>
  <input name="pinfo"
  	type="radio"
  	class="radio"
  	id="pinfo_<?php echo $this->_var['value']['id']; ?>"
  	value="<?php echo $this->_var['value']['id']; ?>"
	<?php if ($this->_var['selectid'] == $this->_var['value']['id']): ?>checked="true"<?php endif; ?>
	pinfo_name = "<?php echo $this->_var['value']['shop_name']; ?>"
	onclick="selectShipping_pinfo(this)"
	style="vertical-align:middle"
 />
 <label for="pinfo_<?php echo $this->_var['value']['id']; ?>">
 	<span style='color:#67C23A'><?php echo $this->_var['value']['shop_name']; ?></span> <span style='color:#FA5555'>电话:<?php echo $this->_var['value']['phone']; ?></span><br>
	<span style='color:#878D99'>地址:<?php echo $this->_var['value']['address']; ?></span>
 </label>
</p>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
