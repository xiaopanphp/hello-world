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
			
	<!--保存页面开始-->
	<link href="/Public/Home/css/savesite.css" rel="stylesheet" charset="utf-8">
	<script src="/Public/Home/js/jquery-1.8.3.js"></script>
	<script src="/Public/Home/js/savesite.js" rel="stylesheet" type="text/javascript"></script>
	<div class="savesite_body">
		<!--添加新地址-->
		<div class="savesite_body_insert">
			<a href="<?php echo U('User/siteinsert');?>">&nbsp<span>+</span>&nbsp使用新地址</a>
		</div>
		<!--地址详情-->

		<!--地址详情-->
	</div>
 	<?php if(is_array($sitelist)): foreach($sitelist as $key=>$slist): ?><div class="savesite_information" style="background:<?php echo ($slist['defaultadd']? '#DFF0D8' : '#fff'); ?>">

		&nbsp&nbsp&nbsp<?php echo ($slist['address']); ?> ( <?php echo ($slist['name']); ?> 收) <?php echo ($slist['tel']); ?>  
		<div class="savesite_information_del">
			<a href="<?php echo U('User/site_del');?>?id=<?php echo ($slist['id']); ?>" id="<?php echo ($slist['id']); ?>">删除</a>
		</div>
		<div class="savesite_information_del">
			<a href="#" class="savesite_information_update" onclick="return false">修改</a>
		</div>
		<div class="savesite_information_default">
			<a href="<?php echo U('User/defaultadd');?>?id=<?php echo ($slist['id']); ?>"><?php echo ($slist['defaultadd']? '[默认地址]' : '[设为默认地址]'); ?></a>
		</div>
	</div>
	<!--保存页面结束--><?php endforeach; endif; ?> 
	<!--弹出框-->
	<html>
<head>
	<title></title>
	<link href="/Public/Home/css/siteupdate.css" rel="stylesheet" charset="utf-8">
	<script src="/Public/Home/js/jquery-1.8.3.js"></script>
	<script src="/Public/Home/js/siteupdate.js" rel="stylesheet" type="text/javascript"></script>
</head>
<body>
	<form action="<?php echo U('User/addressupdate');?>" method="post">
	<div class="updatebody">
		<!--头-->
		<div class="updatebody_top">
			<div class="updatebody_top_text">
				使用新地址
			</div>
		</div>
		<!--头结束-->

		<!--收货人-->
		<div class="updatebody_user">
			<span>*</span>收货人&nbsp:<input type="text" name="user" value="" class="updatebody_from_user">
		</div>

		<input type="hidden" name="addid" class="updatebody_from_addid">
		<!--收货人结束-->

		<!--手机-->
		<div class="updatebody_phone">
			&nbsp&nbsp&nbsp&nbsp<span>*</span>手机&nbsp:<input type="text" name="phone" value="" class="updatebody_from_phone">
		</div>
		<!--手机结束-->

		<!--邮箱-->
		<div class="updatebody_email">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp邮箱&nbsp:<input type="email" name="email" value="" class="updatebody_from_email">
		</div>
		<!--邮箱结束-->
		<!--虚线-->
		<div class="updatebody_from_line"> 
		</div>
		<!--虚线结束-->
		<!--所在地址-->
		<div class="updatebody_add">
			<div class="updatebody_add_size">&nbsp<span>*</span>所在地址:</div>
			<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <style>
        .info{
            width:380px;
            height:26px;
            float:left;
            margin-left:6px;
        }
        .info select{
            width:120px;
            height:26px;
            font-family:"微软雅黑";
            color:#333333;
        }
     </style>
</head>
    <body>
    <div class="info">

    	<select id="s_province" name="s_province" class="info_select"></select>
        <select id="s_city" name="s_city" class="info_city" ></select>
        <select id="s_county" name="s_county" class="info_county"></select>
        
        <script class="resources library" src="/Public/Home/js/area.js" type="text/javascript"></script>
        <script type="text/javascript">_init_area();</script>

        <div id="show"></div>
    </div>
    <script type="text/javascript">
    var Gid  = document.getElementById ;
    var showArea = function(){
    	Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	
    	Gid('s_city').value + " - 县/区" + 
    	Gid('s_county').value + "</h3>"
    							}
    Gid('s_county').setAttribute('onchange','showArea()');
    </script>
    </body>
</html>

			<div class="updatebody_add_postcode">
				邮编：<input type="text" name="updatebody_postcode" value="" class="updatebody_from_postcode">
			</div>
		</div>
		<!--所在地址-->	



		<!--详细地址-->
		<div class="updatebody_smailadd">
			&nbsp<span>*</span>详细地址&nbsp:<input type="text" name="samiladd" value="" class="updatebody_from_smailadd">
		</div>
		<!--详细地址-->



		<!--设置默认地址-->
		 <div class="updatebody_selected">
		 	<input type="checkbox" name="addsleected" value="1" class="updatebody_form_selected">
		 	<div class="updatebody_selected_font"><span>设为默认地址</span>(设置为默认地址后，系统将在下次购买时自动选中该收货地址)</div>
		 </div>
		<!--设置默认地址结束-->	

		<!--提示-->
		<div class="updatebody_caution">
			请填写收货人
		</div>
		<!--提示结束-->

		<div class="updatebody_from_xline">
		</div>
		<!--取消-->
		<div class="updatebody_cancel">
			取消
		</div>
		<!--取消结束-->

		<!--确认-->
		<div class="updatebody_sub">
		<input type="submit" name="sub" value="确认" class="updatebody_sub_from">
		</div>
		 <!--确认结束-->
	</div>
	</form>
	<!--遮罩层-->
	<html>
<head>
	<title></title>
	<link href="/Public/Home/css/smallshade.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="smallshade">
	</div>
</body>
</html>
	<!--遮罩层结束-->
</body>
</html>
	<!--弹出框结束-->

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