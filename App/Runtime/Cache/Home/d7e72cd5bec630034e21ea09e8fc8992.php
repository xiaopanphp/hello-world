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
			
	<link href="/Public/Home/css/information.css" rel="stylesheet" type="text/css">
	<script src="/Public/Home/js/jquery-1.8.3.js"></script>
				<!--右边填写信息部分开始-->
			<div class="body_right">
				<div class="body_right_title">
					<h2>基本资料</h2>
				</div>
				<!--选项卡部分-->
				<div class="body_right_tab">
					<div class="body_right_tab_menu">
						<ul>
							<li class="body_right_tab_menu_information"><a href="<?php echo U('User/information');?>">个人信息</a></li>
							<li class="body_right_tab_menu_portrait"><a href="<?php echo U('User/portrait');?>">个人头像</a></li>
						</ul>
					</div>
					<div class="body_right_tab_box">
					<!--头像部分-->
						<div class="body_right_tab_box_information">	
							<div class="body_right_tab_box_information_pic">
								<div class="body_right_tab_box_information_pic_inner">
								<?php if(($length < 1)): ?><img src="/Public/Home/images//user/user_default_logo_small.gif" width="70" height="70">
								<?php else: ?>
									<img src="/Public<?php echo ($pic); ?>" width="70" height="70"><?php endif; ?>
								</div>
							</div>
							<span>修改头像</sapn>
						</div>

					<!--头像部分结束-->
						<div class="body_right_tab_box_information_right">
							<pre>为了让更多志同道合的网友认识您，请填写昵称，昵称将会显示在团800、折800惠800等网站中，亲，一旦填写

不能修改，填写后还能获得身份奖章和积分！</pre>
						</div>
						<!--表单部分-->
						<form action="<?php echo U('User/doupdate');?>">
						<div class="body_right_tab_box_information_user">
							&nbsp;&nbsp;&nbsp;&nbsp;昵称：<input type="text" name="user" value="<?php echo (session('name')); ?>" class="form_user">
						
							<input type="hidden" name="" value="<?php echo ($user['id']); ?>">
						</div>
						<div class="body_right_tab_box_information_user">
							真实姓名：<input type="text" name="name" id="name" value="<?php echo ($user["name"]); ?>" class="form_user"><sub id="s_name">(必填)</sub>
						</div>
						<div class="body_right_tab_box_information_user">
							手机号码：<input type="text" name="tel" id="tel" value="<?php echo ($user["tel"]); ?>" class="form_user">
						</div>
						<div class="body_right_tab_box_information_user">
						&nbsp; QQ号码：<input type="text" name="qq" id="QQ" value="<?php echo ($user["qq"]); ?>" class="form_user">
						</div>
						<div class="body_right_tab_box_information_user">
							 设置密保：<input type="text" name="issue" id="issue" value="<?php echo ($user["issue"]); ?>" class="form_user"><sub id="s_pwd">(必填,找回密码必备)</sub>
						</div>
				<!-- 		<div class="body_right_tab_box_information_user">
							 密保回答：<input type="text" name="answer" id="issue" value="" class="form_user"><sub>(必填)</sub>
						</div> -->
						<div class="body_right_tab_box_information_user">
						&nbsp;&nbsp;&nbsp; 邮箱：<input type="email" name="mail" id="email" value="<?php echo ($user["mail"]); ?>" class="form_user">
						</div>
						<div class="body_right_tab_box_information_sex">
							性别：<input type="radio" name="sex" value="1" <?php echo ($user['sex']?'':'checked'); ?>>男&nbsp
									<input type="radio" name="sex" value="0" <?php echo ($user['sex']?'checked':''); ?>>女
						</div>
						 　<div class="body_right_tab_box_information_birthday">
							　　　　　生日：<select name="year">
							<!--遍历年-->
								<?php $__FOR_START_5716__=1980;$__FOR_END_5716__=2038;for($i=$__FOR_START_5716__;$i < $__FOR_END_5716__;$i+=1){ ?><option value="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php } ?>
								  </select>&nbsp年
								  <select name="mouth">
							<!--遍历月-->
								  <?php $__FOR_START_18941__=1;$__FOR_END_18941__=13;for($i=$__FOR_START_18941__;$i < $__FOR_END_18941__;$i+=1){ ?><option value="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php } ?>
								  </select>&nbsp月
								  <select name="day">
							<!--遍历日-->
								  	<?php $__FOR_START_18162__=1;$__FOR_END_18162__=32;for($i=$__FOR_START_18162__;$i < $__FOR_END_18162__;$i+=1){ ?><option value="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php } ?>
								  </select>&nbsp日
						</div>
						<!-- <div class="body_right_tab_box_information_district">
							所在地：<select name="district">
										<option value=" ">1</option>
								  	</select>&nbsp省
								  	<select name="district">
										<option value=" ">1</option>
								  	</select>&nbsp市/区
						</div> -->
						<div class="body_right_tab_box_information_item">
							　　　　　<input type="submit" value="保存" class="save"></input>
						</div>
						</form>
						<!--表单部分结束-->
			    	</div>
			    </div>
			</div>
			<!--右边填写信息部分结束-->
			<script>
				$(".save").click(function(){
					if($("#name").val()==''){
						$("#s_name").css({'color':'red'});
						return false;
					}else{
						$("#s_name").css({'color':'#666'});
					}
					if($("#issue").val()==''){
						$("#s_pwd").css({'color':'red'});
						return false;
					}else{
						$("#s_pwd").css({'color':'#666'});
					}
				})
			</script>

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