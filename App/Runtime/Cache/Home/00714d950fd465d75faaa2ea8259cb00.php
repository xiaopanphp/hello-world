<?php if (!defined('THINK_PATH')) exit();?><html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/goodslist.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.js"></script>
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
	<div id="goodslist_box">
		<div id="goodslist_main">
			<?php if(($goods[0] == '')): ?><div id="search_no">
					<img src="/Public/Home/images/goods/T1HcvHXd4nXXb6ROYh-48-48.gif" style="position:relative;left:450px;top:200px">
				</div>
				<div id="search_no2" style="display:none">
					<div>
						<img src="/Public/Home/images/goods/J33E6JNDILKPH_KT$B5Z([E.png" style="position:relative;left:250px;top:180px"></div>
						<p style="padding-left:360px;padding-top:130px">没有找到与"<span style="color:red"><?php echo ($classname); ?></span>"相关的宝贝</p>
					</div>
					<script type="text/javascript">
						$(function(){
							setTimeout(function(){
								$("#search_no").css({"display":"none"});
								$("#search_no2").css({"display":"block"});
							},2000);
						});
					</script>
			<?php else: ?>
			<p><span style="color:red;font-size:16px;font-weight: bold;"><?php echo ($classname); ?></span> | 共有3604件优质商品，每天9点更新 排序：最新最热 <a href="<?php echo U('Goods/goodslist',array("id"=>8,"name"=>$classname,"sta"=>1,"time"=>1));?>">时间</a>　<a href="<?php echo U('Goods/goodslist',array("id"=>8,"name"=>$classname,"sta"=>1,"price"=>1));?>">价格</a></p>
			<hr style="color:#eef;width:960px;margin:0 auto">
			<p><b>全部(3604)</b> 
				<?php if(is_array($goods)): foreach($goods as $key=>$vo): ?><a href=""><?php echo ($vo['name']); ?>(<?php echo ($vo['number']); ?>)</a><?php endforeach; endif; ?>
			</p>
			<!-- 列表图片 -->
			<div id="goodslist_main_pic">
				<!-- 列表图 -->
				<?php if(is_array($goods)): foreach($goods as $key=>$vo): ?><div id="goodslist_pic">
						<img src="/Public/Home/images/goods/xinpin.png" id="goodslist_goodpic_new">

						<div class="goodslist_goodpic">
							<a href="<?php echo U('Goods/goodinfo',array("id"=>$vo['id']));?>"><img src="/Public<?php echo ($vo['pic']); ?>" id="goodslist_goodpic_pic"></a>
						</div>
						<div class="goodslist_good">
							<p><a href="<?php echo U('Goods/goodinfo',array("id"=>$vo['id']));?>"><?php echo ($vo['name']); ?></a></p>
							<span class="good_pric">¥</span> 
								<span class="good_price"><?php echo ($vo['minprice']); ?></span>
								<?php if(($vo['minprice'] != $vo['maxprice'])): ?><span class="good_price">~</span>
								<span class="good_price"><?php echo ($vo['maxprice']); ?></span><?php endif; ?>
							<div id="good_post"></div>
							<div id="good_tpic"></div><span class="good_tfont">　　天猫<br>库存<?php echo ($vo['number']); ?>（已售<?php echo ($vo['soldnum']); ?>件）</span>
						</div>
					</div><?php endforeach; endif; endif; ?>
			


			</div>
		</div>
	</div>
	<!-- 左边栏目 -->
		<div id="leftstrip_mune"><html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/leftstrip.css">
</head>
<body>
	<div id="leftstrip">
		<div id="left_top_pic"><img src="/Public/Home/images/public/side_logo_min.png"></div>
		<div id="left_content">
			<div class="left_content_top">
				<ul>
					<li><a href="">品牌特卖</a></li>
					<li><a href="">8块8包邮</a></li>
					<li><a href="">20元封顶</a></li>
					<li><a href="">精选预告</a></li>
					<li><a href="">0元抽奖</a></li>
					<li><a href="">特卖商城</a></li>
					<li><a href="">优品汇</a></li>
					<li><a href=""><img src="/Public/Home/images/public/right_logo_0420.gif"></a></li>
				</ul>
			</div>
			<div class="left_content_center">
				<ul>
					<li><div class="conter_1"></div><a href="">女装</a></li>
					<li><div class="conter_2"></div><a href="">男装</a></li>
					<li><div class="conter_3"></div><a href="">居家</a></li>
					<li><div class="conter_4"></div><a href="">母婴</a></li>
					<li><div class="conter_5"></div><a href="">鞋包</a></li>
					<li><div class="conter_6"></div><a href="">配饰</a></li>
					<li><div class="conter_7"></div><a href="">美食</a></li>
					<li><div class="conter_8"></div><a href="">数码</a></li>
					<li><div class="conter_9"></div><a href="">美妆</a></li>
					<li><div class="conter_10"></div><a href="">文体</a></li>
					<li><div class="conter_11"></div><a href="">老年</a></li>
				</ul>
				<div id="leftstrip_div"><input style="text" id="leftstrip_input"><a href=""><div  class="conter_12"></div></a></div>
			</div>
			<div>
				<p>&nbsp;<a href="" id="qrcode_1">值得买</a>&nbsp;|<a href="" id="qrcode_1">值得逛</a></p>
				<img src="/Public/Home/images/public/qrcode_65057_100.jpg" id="qrcode">
			</div>
		</div>
	</div>
</body>
</html></div>
	<div style="clear:left"></div>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="/Public/Home/css/rightstrip.css" rel="stylesheet" type="text/css">
		<script src="/Public/Home/js/jquery-1.8.3.js"></script>
		<script src="/Public/Home/js/rightstrip.js" type="text/javascript"></script>
	</head>
	<body>
		<!--友情框-->
		<div class="out">
		<div class="out_happy">
			喝杯春茶，<br>签到文艺一天	
		</div>
			<div class="out_rhombus">
				◆
			</div>
		</div>
			<!--飞入意见反馈-->
		<div class="flewidea">
			<div class="flewidea_happy">
				意见反馈
			</div>
			<div class="flewidea_rhombus">
				◆
			</div>
		</div>
			<!--飞入意见反馈-->
		<!--友情框结束-->

			<!--飞入回到顶部-->
		<div class="rightfloat_top_flew">
			<div class="rightfloat_top_flew_top">
				返回顶部
			</div>
			<div class="rightfloat_top_flew_rhombus">
				◆
			</div>
		</div>
			<!--飞入回到顶部-->

			<!--飞入常见问题-->
		<div class="opinion_issue_flew">
			<div class="rightfloat_question_text">
				常见问题
			</div>
			<div class="rightfloat_question_rhombus">
				◆
			</div>
		</div>
			<!--飞入常见问题结束-->

			<!--飞入我的优惠劵-->
		<div class="rightfloat_shop_roll_flew">
			<div class="rightfloat_shop_roll_text">
				我的优惠劵
			</div>
			<div class="rightfloat_shop_roll_rhombus">
				◆
			</div>
		</div>
			<!--飞入我的优惠劵结束-->

			<!--飞入我的订单-->
		<div class="rightfloat_shop_order_flew">
			<div class="rightfloat_shop_order_flew_text">
				我的订单
			</div>
			<div class="rightfloat_shop_order_flew_rhombus">
				◆
			</div>
		</div>	
			<!--飞入我的订单结束-->

			<!--飞入二维码-->
		<div class="rightfloat_sweep_flew">
			<div class="rightfloat_sweep_flew_text">
			</div>
			<div class="rightfloat_sweep_flew_rhombus">
				◆
			</div>
		</div>	
			<!--飞入二维码结束-->

			<!--飞入消费保障-->
		<div class="rightfloat_safeguard_flew">
			<div class="rightfloat_safeguard_flew_text">
				消费保障
			</div>
			<div class="rightfloat_safeguard_flew_rhombus">
				◆
			</div>
		</div>	
			<!--飞入消费保障结束-->



		<div class="rightfloat">
			<div class="rightfloat_headerpic"></div>
			<div class="rightfloat_shop">
				<!--购物车图片-->
				<a href="<?php echo U('Cart/cart');?>"><div class="rightfloat_shop_shoppic">
				</div></a>
				<!--购物车图片结束-->
				<div class="rightfloat_shop_num">
					<?php echo (session('cart_num')); ?>
				</div>
			</div>	
			<!--我的订单-->
				<a href="<?php echo U('User/order');?>"><div class="rightfloat_shop_order">
				</div></a>
			<!--我的订单结束-->

			<!--卷-->
			<div class="rightfloat_shop_roll">
				<div class="rightfloat_shop_roll_num">
					0
				</div>
				<div class="rightfloat_shop_roll_pic">
					劵
				</div>
			</div>
			<!--卷结束-->

			<!--会跳的图片-->
			<div class="rightfloat_jumppic">
			</div>
			<!--会跳的图片结束-->

			<!--扫一扫-->
			<div class="rightfloat_sweep">
			</div>
			<!--扫一扫结束-->
			
			<!--问号-->
			<div class="rightfloat_question">
			</div>
			<!--问号结束-->

			<!--消费保障-->
			<div class="rightfloat_safeguard">
			</div>
			<!--消费保障结束-->

			<!--意见反馈-->
			<div class="rightfloat_opinion">
			</div>
			<!--意见反馈结束-->

			<!--返回顶部-->
			<a href="#righttop"><div class="rightfloat_top">
			</div></a>
			<!--返回顶部结束-->

		</div>
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
		<!--遮罩层-->

		<!--小栏目登录-->
		<html>
	<head>
		<title>smalllogin</title>
		<meta charset="utf-8">
		<link href="/Public/Home/css/smalllogin.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="box">
			<div class="box_fork">
				<img src="/Public/Home/images/login/colse.png">
			</div>
			<form action="<?php echo U('Login/dologin');?>">
			<table class="table">
				<br>
				<tr>
					<td id="href">
						<span id="font">
						登陆折800——享受会员特权
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="<?php echo U('Login/register');?>">立即注册</a>
						</span>
					</td>
				</tr>
				<tr>
					<td><input type="text" id="input" placeholder="请输入用户名" name="user"></td>
				</tr>
				<tr>
					<td><input type="password" id="input" placeholder="请输入密码"name="pass"></td>
				</tr>
				<tr>
					<td><br><input type="submit" id="submit" value="立即登陆"></td>
				</tr>
				<tr>
					<td><br>
						<span id="font_two">
								使用其他账号登陆
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="">忘记密码？</a>
						</span>
					</td>
				</tr>
				<tr>
					<td><br>
						<div id="box_two">
							<div id="img">
								<a href="#"><img src="/Public/Home/images/login/2015-04-22_090228.png"></a>
							</div>
						</div>
					</td>
				</tr>
		</table>
	</form>
		</div>
	</body>
</html>
		<!--小栏目登录结束-->
	</body>
</html>
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
	<div style="clear:left"></div>
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
<script type="text/javascript">
$(function(){
	setInterval(function(){
		if($(document).scrollTop()>=110){
			$("#leftstrip_mune").css({"display":"block"})
		}else{
			$("#leftstrip_mune").css({"display":"none"})
		}
	},100)
	


});</script>
</html>