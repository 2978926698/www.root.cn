<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php if ($this->_var['step'] == "cart"): ?>
<?php echo $this->fetch('flow_cart.dwt'); ?>
<?php endif; ?>

<?php if ($this->_var['step'] == "label_favourable"): ?>
<?php echo $this->fetch('flow_label_favourable.dwt'); ?>
<?php endif; ?>

<?php if ($this->_var['step'] == "checkout"): ?>
<?php echo $this->fetch('flow_checkout.dwt'); ?>
<?php endif; ?>

<?php if ($this->_var['step'] == "done"): ?>
<?php echo $this->fetch('flow_done.dwt'); ?>
<?php endif; ?>

<?php if ($this->_var['step'] == "consignee"): ?>
<?php echo $this->fetch('flow_consignee.dwt'); ?>
<?php endif; ?>

<?php echo $this->fetch('library/new_search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript" src="__PUBLIC__/js/shopping_flow.js"></script>

<script>
function back_goods_number(id){
 var goods_number = document.getElementById('goods_number'+id).value;
  document.getElementById('back_number'+id).value = goods_number;
}
function change_goods_number(type, id)
{
  var goods_number = document.getElementById('goods_number'+id).value;
  if(type != 2){back_goods_number(id)}
  if(type == 1){goods_number--;}
  if(type == 3){goods_number++;}
  if(goods_number <=0 ){goods_number=1;}
  if(!/^[0-9]*$/.test(goods_number)){goods_number = document.getElementById('back_number'+id).value;}
  document.getElementById('goods_number'+id).value = goods_number;
	$.post('<?php echo url("flow/ajax_update_cart");?>', {
		rec_id : id,goods_number : goods_number
	}, function(data) {
		change_goods_number_response(data,id);
	}, 'json');
}
// 处理返回信息并显示
function change_goods_number_response(result,id)
{
	if (result.error == 0){
		var rec_id = result.rec_id;
		$("#goods_number_"+rec_id).val(result.goods_number);
		document.getElementById('total_number').innerHTML = result.total_number;//更新数量
		document.getElementById('goods_subtotal').innerHTML = result.total_desc;//更新小计
		if (document.getElementById('ECS_CARTINFO')){
			//更新购物车数量
			document.getElementById('ECS_CARTINFO').innerHTML = result.cart_info;
		}
	}else if (result.message != ''){
		alert(result.message);
		var goods_number = document.getElementById('back_number'+id).value;
 		document.getElementById('goods_number'+id).value = goods_number;
	}
}

	/*点击下拉手风琴效果*/
	$('.collapse').collapse()
	$(".checkout-select a").click(function(){
		if(!$(this).hasClass("select")){
			$(this).addClass("select");
		}else{
			$(this).removeClass("select");
		}
	});

</script>

</body>
</html>
