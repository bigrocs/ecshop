
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
body{
    background-color:#ebeced;
}
.order_box{
    font-size:1.4rem;
}
</style>
<?php $_from = $this->_var['sellerList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'seller');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['seller']):
?>
<section class="order_box padd1 radius10" >
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
          <tbody>
            <tr>
                	<td style="border-bottom:1px #CCCCCC dashed"  colspan="2">
                        <a href="user.php?act=seller_index&sellerId=<?php echo $this->_var['seller']['user_id']; ?>"><?php echo $this->_var['seller']['name']; ?></a>
                        <div style="float:right">
                            <?php echo $this->_var['seller']['distance']; ?>
                        </div>
                    </td>
            </tr>
            <tr>
            	<td style="border-bottom:1px #CCCCCC dashed"  colspan="2">
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" >

                        <tbody>
                            <tr>
                                <td width="70">地址:</td>
                            	<td><?php echo $this->_var['seller']['address']; ?></td>
                            </tr>
                            <tr>
                                <td width="70">电话:</td>
                            	<td><?php echo $this->_var['seller']['tel']; ?></td>
                            </tr>
                      </tbody>
                  </table>
              </td>
            </tr>
            <tr>
                <td><a type="button" style="width:100%" class="btn btn-success glyphicon glyphicon-earphone" href="tel:<?php echo $this->_var['seller']['tel']; ?>"> 咨询</a></td>
                <td><a type="button" style="width:100%" class="btn btn-info glyphicon glyphicon-send" onclick="wx.openLocation({
                    latitude: <?php echo $this->_var['seller']['latitude']; ?>,
                    longitude: <?php echo $this->_var['seller']['longitude']; ?>,
                    name: '<?php echo $this->_var['seller']['name']; ?>',
                    address: '<?php echo $this->_var['seller']['address']; ?>',
                    scale: 18,
                });"> 导航</a></td>
            </tr>
          </tbody>
     </table>
 </section>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<script>
function test(){
    wx.openLocation({
        latitude: 0, // 纬度，浮点数，范围为90 ~ -90
        longitude: 0, // 经度，浮点数，范围为180 ~ -180。
        name: '', // 位置名
        address: '', // 地址详情说明
        scale: 1, // 地图缩放级别,整形值,范围从1~28。默认为最大
        infoUrl: '' // 在查看位置界面底部显示的超链接,可点击跳转
    });
}
</script>
