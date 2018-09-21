
	<?php if ($this->_var['is_wechat']): ?>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script>
	<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
	<script type="text/javascript">
	    // 分享内容
	    var shareContent = {
	        title: '<?php echo $this->_var['share_data']['title']; ?>',
	        desc: '<?php echo $this->_var['share_data']['desc']; ?>',
	        link: '<?php echo $this->_var['share_data']['link']; ?>',
	        imgUrl: '<?php echo $this->_var['share_data']['img']; ?>',
	    };
	    $(function(){
	        var url = window.location.href;
	        var jsConfig = {
	            debug: false,
	            jsApiList: [
	                'onMenuShareTimeline',
	                'onMenuShareAppMessage',
	                'onMenuShareQQ',
	                'onMenuShareQZone'
	            ]
	        };
	        $.post("<?php echo url('api/jssdk');?>", {url: url}, function (res) {
	            if(res.status == 200){
	                jsConfig.appId = res.data.appId;
	                jsConfig.timestamp = res.data.timestamp;
	                jsConfig.nonceStr = res.data.nonceStr;
	                jsConfig.signature = res.data.signature;
	                // 配置注入
	                wx.config(jsConfig);
	                // 事件注入
	                wx.ready(function () {
	                    wx.onMenuShareTimeline(shareContent);
	                    wx.onMenuShareAppMessage(shareContent);
	                    wx.onMenuShareQQ(shareContent);
	                    wx.onMenuShareQZone(shareContent);
	                });
	            }
	        }, 'json');
	    })
	</script>
	<?php endif; ?>