<?php echo $this->fetch('library/user_header.lbi'); ?>
	<?php if ($this->_var['aftermarket_list']): ?>
		<div class="ect-pro-list user-order" style="border-bottom:none;">			
			<ul id="J_ItemList">
			 <?php $_from = $this->_var['aftermarket_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'orders');$this->_foreach['aftermarket_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aftermarket_list']['total'] > 0):
    foreach ($_from AS $this->_var['orders']):
        $this->_foreach['aftermarket_list']['iteration']++;
?>
				<li>
				<a href="<?php echo url('user/aftermarket_detail', array('ret_id'=>$this->_var['orders']['ret_id']));?>"><img src="<?php echo $this->_var['orders']['img']; ?>" class="pull-left" />
				<dl>
				  <dt>
					<h4 class="title"><?php echo $this->_var['lang']['aftermarket_number']; ?>：<?php echo $this->_var['orders']['service_sn']; ?></h4>
				  </dt>
				  <dd><?php echo $this->_var['lang']['order_status']; ?>：<?php echo $this->_var['orders']['return_status']; ?>-<?php echo $this->_var['orders']['refund_status']; ?></dd>
				 <!-- <dd><?php echo $this->_var['lang']['order_total_fee']; ?>：<span class="ect-color"><?php echo $this->_var['orders']['total_fee']; ?></span></dd>-->
				  <dd><?php echo $this->_var['lang']['aftermarket_addtime']; ?>：<?php echo $this->_var['orders']['order_time']; ?></dd>
				</dl>
				<i class="pull-right fa fa-angle-right"></i> </a> 
				</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		
			</ul>	
	  </div>
	    <?php echo $this->fetch('library/page.lbi'); ?>
		<?php else: ?>
			<div class="no-div-message flow-no-cart">
				<div class="iconfont"><img src="__TPL__/images/not_goods.png"></div>
				<p>亲，此处还没有内容～！</p>						
			</div>
		<?php endif; ?>
		</div>
<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body></html>