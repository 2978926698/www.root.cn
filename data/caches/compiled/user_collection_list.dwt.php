<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<div class="">
	<header class="dis-box header-menu b-color color-whie"><a class="" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou"></i></a>
	<h3 class="box-flex">收藏</h3>
	<p><i class="iconfont icon-pailie j-nav-box"></i></p>
</header>
<div class="j-nav-content">
	<ul class="dis-box new-footer-box">
		<li class="box-flex">
			<a href="<?php echo url('index/index');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/home.png"></i><span>首页</span></a>
		</li>
		<li class="box-flex">
			<a href="<?php echo url('category/top_all');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/cate.png"></i><span>分类</span></a>
			<li class="box-flex"><a href="javascript:;" class="nav-cont j-search-input"><i class="nav-box"><img src="__TPL__/statics/img/search.png"></i><span>搜索</span></a></li>
			<li class="box-flex"><a href="<?php echo url('flow/cart');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/flow.png"></i><span>购物车</span></a></li>
			<li class="box-flex"><a href="<?php echo url('user/index');?>" class="nav-cont"><i class="nav-box"><img src="__TPL__/statics/img/user.png"></i><span>用户中心</span></a></li>
	</ul>
</div>
	<?php if ($this->_var['collection_list']): ?>
	<div class="flow-accessories blur-div">

		<section class="j-product-list product-list-small n-product-list-small">
			<ul>
				<?php $_from = $this->_var['collection_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
				<li>
					<div class="product-div">
						<a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>">
							<img class="product-list-img" src="<?php echo $this->_var['val']['goods_thumb']; ?>">
						</a>
						<div class="product-text">
			              <a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>"><h4><?php echo $this->_var['val']['goods_name']; ?></h4></a>
							<div class="n-money-con"><span class="p-price t-first "><?php echo $this->_var['val']['shop_price']; ?></span><small class="ect-margin-lr"><del><?php echo $this->_var['val']['market_price']; ?></del></small></div>
							<div class="dis-box n-but-box">
						     <section class="goods-attr j-goods-attr  j-show-div0">
						     
								<a href="javascript:addToCart(<?php echo $this->_var['val']['goods_id']; ?>)" class="box-flex">
									<div class="s-but"><?php echo $this->_var['lang']['add_to_cart']; ?></div>
								</a>
									
									 <div class="mask-filter-div"></div>
									<div class="show-goods-attr j-filter-show-div ts-3 b-color-1">
										 <section class="s-g-attr-title b-color-1  product-list-small">
											<div class="product-div">
												<img src="__TPL__/statics/img/flow_cart_14.png" alt="" class="product-list-img" />
												 <div class="product-text n-right-box">
													<div class="dis-box">
														<h4 class="box-flex">媞沫 2016夏装新品女装 宽松假两件蝙蝠短袖印花雪纺衫 粉色 S</h4>
														<i class="iconfont icon-guanbi show-div-guanbi"></i>
													</div>
													<p><span class="p-price t-first" id="ECS_GOODS_AMOUNT">
														￥:15.00
													</span>
													</p>
													<p class="dis-box p-t-remark"><span class="box-flex">库存:154848</span></p>
												</div>
											</div>
										</section>
										<section class="s-g-attr-con swiper-scroll b-color-f padding-all m-top1px">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<h5 class="t-remark">尺码：</h5>

													<ul class="select-one  j-get-one  m-top10">													
														<li class="ect-select dis-flex fl">
															<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
															<label class="ts-1 active" for="">s</label>
														</li>
														<li class="ect-select dis-flex fl">
															<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
															<label class="ts-1" for="">m</label>
														</li>
														<li class="ect-select dis-flex fl">
															<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
															<label class="ts-1" for="">l</label>
														</li>
														<li class="ect-select dis-flex fl">
															<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
															<label class="ts-1" for="">xl</label>
														</li>
			
													</ul>
													<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
				
													<h5 class="t-remark">数量</h5>
													<div class="div-num dis-box m-top08">
														<a class="num-less" onClick="changePrice('1')"></a>
														<input class="box-flex" type="text" value="1" name="number" id="goods_number" autocomplete="off" />
														<a class="num-plus" onClick="changePrice('3')"></a>
													</div>
												</div>
											</div>
											<div class="swiper-scrollbar"></div>
										</section>
										<section class="ect-button-more dis-box padding-all">
											<a class="btn-submit box-flex" type="button" onClick="addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>);">确 定</a>
										</section>
							</form>
							</div>
							
							</section>
										<?php if ($this->_var['val']['is_attention']): ?>
								<a class="box-flex" href="javascript:if (confirm('<?php echo $this->_var['lang']['del_attention']; ?>')) location.href='<?php echo url('user/del_attention', array('rec_id'=>$this->_var['val']['rec_id']));?>'">
									<div class="s-but"><?php echo $this->_var['lang']['no_attention']; ?></div>
								</a>
								<?php else: ?>
								<!-- <a class="box-flex" href="javascript:if (confirm('<?php echo $this->_var['lang']['add_to_attention']; ?>')) location.href='<?php echo url('user/add_attention', array('rec_id'=>$this->_var['val']['rec_id']));?>'">
									<div class="s-but "><?php echo $this->_var['lang']['attention']; ?></div>
								</a> -->
								<?php endif; ?>
								<a class="n-margin-del" href="javascript:if(confirm('<?php echo $this->_var['lang']['remove_collection_confirm']; ?>')) location.href='<?php echo url('delete_collection', array('rec_id'=>$this->_var['val']['rec_id']));?>'"><div class="n-del"><i class="iconfont icon-xiao10 fr"></i></div></a>
							</div>

						</div>

					</div>

				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</section>
	</div>
	<?php else: ?>
	<div class="no-div-message flow-no-cart">
			<i class="iconfont icon-biaoqingleiben"></i>
			<p>亲，此处没有内容～！</p>
			<a href="<?php echo url('index/index');?>" type="button" class="btn-default">去收藏</a>
		</div>

	<?php endif; ?>
	<?php echo $this->fetch('library/page.lbi'); ?>
	<?php echo $this->fetch('library/new_search.lbi'); ?>
	<?php echo $this->fetch('library/page_footer.lbi'); ?>
	<script type="text/javascript">
		var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
		var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
		var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
		var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
	</script>
	</body>

	</html>