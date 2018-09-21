<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<?php if ($this->_var['share']['on'] == 1): ?>
<?php if (! $this->_var['goodsid'] || $this->_var['goodsid'] == 0): ?>
<?php if ($this->_var['share']['config']['separate_by'] == 0): ?>
<header class="dis-box header-menu b-color color-whie"><a class="" href="javascript:history.go(-1)"><i class="iconfont icon-jiantou"></i></a>
	<h3 class="box-flex">我的分享</h3>
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
<div class="padding-all b-color-f share-cont-box m-top10">
	<h3 class="my-u-title-size active">我的推荐会员</h3>
	<table class="share-table-box">
		<tr align="center" class="first-tr">
			<th><?php echo $this->_var['lang']['affiliate_lever']; ?></th>
			<th><?php echo $this->_var['lang']['affiliate_num']; ?></th>
			<th><?php echo $this->_var['lang']['level_point']; ?></th>
			<th><?php echo $this->_var['lang']['level_money']; ?></th>
		</tr>
		<?php $_from = $this->_var['affdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('level', 'val');$this->_foreach['affdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['affdb']['total'] > 0):
    foreach ($_from AS $this->_var['level'] => $this->_var['val']):
        $this->_foreach['affdb']['iteration']++;
?>
		<tr align="center">
			<td><?php echo $this->_var['level']; ?></td>
			<td><?php echo $this->_var['val']['num']; ?></td>
			<td><?php echo $this->_var['val']['point']; ?></td>
			<td><?php echo $this->_var['val']['money']; ?></td>
		</tr>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</table>
</div>
<?php endif; ?>
<div class="padding-all b-color-f share-cont-box m-top10">
	<h3 class="my-u-title-size active">我的分成</h3>
	<table class="share-table-box">
		<tr align="center" class="first-tr">
			<th><?php echo $this->_var['lang']['order_number']; ?></th>
			<th><?php echo $this->_var['lang']['affiliate_money']; ?></th>
			<th><?php echo $this->_var['lang']['affiliate_point']; ?></th>
			<th><?php echo $this->_var['lang']['affiliate_mode']; ?></th>
			<th><?php echo $this->_var['lang']['affiliate_status']; ?></th>
		</tr>
		<?php $_from = $this->_var['logdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['logdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['logdb']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['logdb']['iteration']++;
?>
		<tr align="center">
			<td><?php echo $this->_var['val']['order_sn']; ?></td>
			<td><?php echo $this->_var['val']['money']; ?></td>
			<td><?php echo $this->_var['val']['point']; ?></td>
			<td>
				<?php if ($this->_var['val']['separate_type'] == 1 || $this->_var['val']['separate_type'] === 0): ?><?php echo $this->_var['lang']['affiliate_type'][$this->_var['val']['separate_type']]; ?>
				<?php else: ?><?php echo $this->_var['lang']['affiliate_type'][$this->_var['affiliate_type']]; ?>
				<?php endif; ?>
			</td>
			<td><?php echo $this->_var['lang']['affiliate_stats'][$this->_var['val']['is_separate']]; ?></td>
		</tr>
		<?php endforeach; else: ?>
		<tr>
			<td colspan="5" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['no_records']; ?></td>
		</tr>
		<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php if ($this->_var['logdb']): ?>
		<tr>
			<td colspan="5" align="right">
				<?php if ($this->_var['page']): ?>
				<a href="<?php echo $this->_var['page']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a><a href="<?php echo $this->_var['page']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a>
				<?php endif; ?>
			</td>
		</tr>
		<?php endif; ?>
	</table>
</div>
<div class="padding-all b-color-f share-cont-box m-top10">
	<h3 class="my-u-title-size active">分享二维码</h3>
	<div class="share-ewm-box">
		<div class="share-ewm-box-1">
			<div id="qrcode" style="width:100%; height:auto;"></div>
		</div>
		<p class="text-c col-8 f-02 m-top04">长按扫描二维码</p>
	</div>
	<div class="other-login">
		<h4 class="title-hrbg"><span>点击以下图标分享</span><hr> </h4>
	</div>
	<div class="bdsharebuttonbox" data-tag="share_1" style="width:54%;margin:0 auto;">
		<a class="bds_qzone" data-cmd="qzone" href="#"></a>
		<a class="bds_tsina" data-cmd="tsina"></a>
		<a class="bds_bdhome" data-cmd="bdhome"></a>
		<a class="bds_renren" data-cmd="renren"></a>
	</div>
</div>
<?php endif; ?>
<?php endif; ?>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script> 
<script type="text/javascript" src="__TPL__/js/qrcode.js"></script>

<input id="text" type="hidden" value="<?php echo $this->_var['shopurl']; ?>" style="width:80%" /><br />


<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 100,
	height : 100
});

function makeCode () {		
	var elText = document.getElementById("text");
	
	if (!elText.value) {
		alert("Input a text");
		elText.focus();
		return;
	}
	
	qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>
<?php echo $this->fetch('library/new_search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>