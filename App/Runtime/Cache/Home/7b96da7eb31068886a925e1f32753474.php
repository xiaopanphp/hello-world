<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<link href="/Public/Home/css/menu.css" rel="stylesheet" type="text/css">
</head>
<body>
	<html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="/Public/Home/images/index/fav.png">
		
		<meta charset="utf-8">
		<link href="/Public/Home/css/header.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div id="head">
			<div id="header">
				<a href="">团800旗下网站</a>
				<!--锚点-->
				<a name="righttop"></a>
				<img src="/Public/Home/images/public/mobile_shake.gif" style="position:relative;top:3px" />
				<a href="">手机版</a>&nbsp 
				<a href="">QQ登录</a> |
				<!--session判断-->
				<?php if((session('?name'))): ?><a href="<?php echo U('User/information');?>"><?php echo (session('name')); ?></a>
					<a href="<?php echo U('Login/clearsession');?>">退出</a>
					<?php else: ?>
					<a href="<?php echo U('Login/login');?>">登录</a><?php endif; ?>
				<!--session结束-->
				<a href="<?php echo U('Login/register');?>">免费注册</a> | 
				<a href="<?php echo U('User/order');?>">我的订单</a> |&nbsp
				<div id="hearder_right">
					<div class="cart_pic"></div>
					<a href="<?php echo U('Cart/cart');?>">购物车</a> 
					<span style="color:red"><?php echo (session('cart_num')); ?></span> |
					<a href="<?php echo U('Favorite/favorite');?>">我的收藏</a> | 
					
					<a href="">联系客服</a>
				</div>
			</div>
		</div>
	</body>
</html>
	<?php echo W('Public/search');?>
				<!--center-->
		<div class="body">
				<!--左部菜单部分-->
			<div class="body_lfet">
				<ul>
					<li id="body_lfet_first">&nbsp&nbsp账户设置</li>
					<li><a href="<?php echo U('User/information');?>">基本资料</a></li>
					<li><a href="<?php echo U('User/secure');?>">安全中心</a></li>

					<li id="body_lfet_first">&nbsp&nbsp积分中心</li>
					<li><a href="#">我的积分</a></li>
					<li><a href="#">我的礼品</a></li>
					<li><a href="<?php echo U('User/judge');?>">收货地址</a></li>

					<li id="body_lfet_first">&nbsp&nbsp我的订单</li>
					<li><a href="#">&nbsp我的优惠劵</a></li>
					<li><a href="<?php echo U('User/order');?>">&nbsp折800订单</a></li>

					<li id="body_lfet_last"><a href="<?php echo U('Myinformation/myinformation');?>">&nbsp我的消息</a></li>
					<li><a href="<?php echo U('Favorite/favorite');?>">&nbsp我的收藏</a></li>
					<li><a href="#">&nbsp我的爆料</a></li>
					<li><a href="#">&nbsp邀请好友</a></li>
				</ul>
			</div>
			
	<link href="/Public/Home/css/secure.css" rel="stylesheet" type="text/css">
				<!--右边安全中心-->
			<div class="body_right_secure">
				<div class="body_right_size">
					<span>安全中心</span>
				</div>
				<!--安全进度条-->
				<div class="body_right_strip">
					<div class="body_right_strip_size">
						账号安全度：
					</div>
					<span>
						低
					</span>
					<div class="body_right_strip_energy">
						<div class="body_right_strip_inner">
						</div>
					</div>
				</div>
				<!--安全进度条结束-->
				<div class="body_right_email">
					<div class="body_right_email_pic">
						<div class="body_right_email_pic_inner">

						</div>
					</div>
					<div class="body_right_email_size">
						您尚未绑定邮箱 
					</div>
					<div class="body_right_email_text">
						绑定手机和邮箱,还能获得<span>5积分</span>奖励
					</div>
				</div>


				<div class="body_right_phone">
					<div class="body_right_phone_pic">
						<div class="body_right_phone_pic_inner">

						</div>
					</div>
					<div class="body_right_phone_size">
						您尚未绑定手机 
					</div>
					<div class="body_right_phone_text">
						绑定手机和邮箱,还能获得<span>5积分</span>奖励
					</div>
				</div>
			</div>

			<!--左部菜单部分结束-->
		</div>
		<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="/Public/Home/css/blogroll.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="blogroll">
			<div class="blogroll_center">
				<!--关于我们-->
				<div class="blogroll_center_about">
					<ul>
						<li class="blogroll_center_about_first">关于我们</li>
						<li><a href="#">关于我们</a></li>
						<li><a href="#">诚聘英才</a></li>
						<li><a href="#">服务条款</a></li>
					</ul>
				</div>
				<!--关于我们结束-->

				<!--帮助中心-->
				<div class="blogroll_center_help">
					<ul>
						<li class="blogroll_center_help_first">帮助中心</li>
						<li><a href="#">联系我们</a></li>
						<li><a href="#">服务协议</a></li>
					</ul>
				</div>
				<!--帮助中心结束-->

				<!--商务合作-->
				<div class="blogroll_center_business">
					<ul>
						<li class="blogroll_center_business_first">商务合作</li>
						<li><a href="#">商家报名</a></li>
						<li><a href="#">友情链接</a></li>
					</ul>
				</div>
				<!--商务合作结束-->

				<!--关注我们-->
				<div class="blogroll_center_attention">
					<ul>
						<li class="blogroll_center_attention_first">关注我们</li>
						<li><a href="#">新浪微博</a></li>
						<li><a href="#">下载桌面快捷方式</a></li>
						<li><a href="#">意见反馈</a></li>
						<li><a href="#">联系客户</a></li>
					</ul>
				</div>
				<!--关注我们结束-->

				<!--下次怎么来?-->
				<div class="blogroll_center_next">
					<ul>
						<li class="blogroll_center_next_first">下次怎么来？</li>
						<li class="blogroll_center_next_domain">记住域名：<a href="#">zhe800.com</a></li>
						<li class="blogroll_center_next_bd">百度搜索:&nbsp<a href="#"><div class="blogroll_center_next_bd_pic"></div></a>
						<div class="blogroll_center_next_bd_first">折800</div></li>
						<li class="blogroll_center_next_collect">收藏本站:&nbsp<a href="#">加入收藏</a></li>
						<li class="blogroll_center_next_collect">订阅本站：</li>
					</ul>
					<!--订阅-->
					<form>
					<input type="text" name="subscription" value="输入您的邮件" class="blogroll_center_next_from">
					<input type="submit" value="订阅" class="blogroll_center_next_sub">
					</form>
					<!--订阅结束-->
				</div>
				<!--下次怎么来?结束-->

				<!--下载手机版-->
				<div class="blogroll_center_phone">
					<div class="blogroll_center_phone_title">
						下载手机版
					</div>
					<div class="blogroll_center_phone_pic">
						<div class="blogroll_center_phone_pic_dimension">
						</div>
						<div class="blogroll_center_phone_pic_text">
							<p>扫描下载折800</p>
							把折扣握在手心
							把潮流带在身边 
						</div>
					</div>
				</div>
				<!--下载手机版结束-->
			</div>
		</div>
	</body>
</html>
		<div style="clear:both;"></div>
		<?php echo W('Public/footer');?>
		<!-- <html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/footer.css">
</head>
<body>
	<div class="foot">
		<div class="footer">
			<p><a>友情链接:</a>
				<?php if(is_array($data)): foreach($data as $key=>$va): ?><a href=""> <?php echo ($va['describe']); ?> </a><?php endforeach; endif; ?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Friendlink/friendlink');?>">更多>></a>
			</p>
			<br>
				<span>京ICP证120075号 京ICP备10051110号-5 京公网安备11010502025623 Copyright©2011-2015 版权所有 <?php echo ($website['copyright']); ?></span><br>
			<br>
			<img src="/Public/Home/images/public/web_trust.png">&nbsp;
			<img src="/Public/Home/images/public/cert.jpg" class="footer_img">
		</div>
	</div>

</body>
</html> -->
</body>
</html>