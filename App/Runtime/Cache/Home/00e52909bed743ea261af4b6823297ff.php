<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="/Public/Home/images/index/fav.png">
	<title><?php echo ($website['title']); ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/index.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="/Public/Home/js/index.js"></script>
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
	<?php echo W("Public/search");?>
	<!-- body -->
	<div id="box">
		<!-- 头部 -->
		<div id="main">
			<!-- nav -->
			<div id="main_left">
				<ul>

					<?php if(is_array($er)): foreach($er as $key=>$vo): if(is_array($vo['second'])): foreach($vo['second'] as $key=>$v): ?><li><div class="main_left_pic_<?php echo ($a++); ?>"></div>
								<a href="<?php echo U('Goods/goodslist',array("id"=>$v['id'],"name"=>$v['name'],"sta"=>2));?>">
									<?php echo ($v['name']); ?></a> > 
								<?php if(is_array($v['third'])): foreach($v['third'] as $key=>$vi): ?><a href="<?php echo U('Goods/goodslist',array("id"=>$vi['id'],"name"=>$vi['name'],"sta"=>3));?>">
										<?php echo ($vi['name']); ?></a><?php endforeach; endif; ?>
							</li><?php endforeach; endif; endforeach; endif; ?>
			
					
				</ul>	
				<li id="li_aa"><a href="" id="li_a">今日上新</a><a href="" id="li_a">值得买</a><a href="" id="li_a">值得逛</a></li>
			</div>
			<!-- 轮播图 -->
			<div id="main_lunbotu">
					<img src="/Public<?php echo ($data1['pic']); ?>" id="main_lunbotupic" style="width:807px;height:235px;">
				<div id="4" class="main_lunbotupic_num"></div>
				<div id="3" class="main_lunbotupic_num"></div>
				<div id="2" class="main_lunbotupic_num"></div>
				<div id="1" class="main_lunbotupic_num"></div>
			</div>
			<div id = "hiddenInput">
				<?php if(is_array($da)): foreach($da as $key=>$tmp): ?><input type="hidden" name="<?php echo ($tmp['pic']); ?>" wolegequ = "<?php echo ($tmp['a']); ?>"><?php endforeach; endif; ?>
			</div>
			<script>
				$(function(){
					var i=0;
					var time=setInterval(function(){
						i++;
						if(i>4){
							i=1;
						}
						$(".main_lunbotupic_num").css({background:"white"});
						$("#"+i).css({background:"red"});
						$("#main_lunbotupic").attr('src','/Public'+$('input[wolegequ="'+i+'"]').attr('name'));
					},3000);
				});
			</script>
			<!-- 小图 -->
			<div id="main_smallpic">
				<img src="/Public/Home/images/index/small_1.jpg" class="main_smallpic">
				<img src="/Public/Home/images/index/small_2.jpg" class="main_smallpic">
				<img src="/Public/Home/images/index/small_3.jpg" class="main_smallpic">
			</div>
		</div>
		<!-- 内容 -->
		<div id="content">
			<p> 热销推荐 <span>特色专题 | 人气爆款 | 每日更新 </span></p>
			<div class="content_pic">
				<img src="/Public/Home/images/index/content_1.jpg" class="content_pic_m">
				<img src="/Public/Home/images/index/content_5.jpg" class="content_pic_m">
				<img src="/Public/Home/images/index/content_6.jpg" class="content_pic_m">
				<img src="/Public/Home/images/index/content_2.jpg" class="content_pic_s">
				<img src="/Public/Home/images/index/content_3.jpg" class="content_pic_s">
				<img src="/Public/Home/images/index/content_6.jpg" class="content_pic_m">
				<img src="/Public/Home/images/index/content_4.jpg" class="content_pic_s">
				<img src="/Public/Home/images/index/content_7.jpg" class="content_pic_s">
			</div>
		</div>
		<script type="text/javascript">
			$(function(){
				$(".content_pic_m,.content_pic_s").mouseover(function(){
					$(this).css({opacity:0.8});
					setTimeout(function(){
						$(".content_pic_m,.content_pic_s").css({opacity:1});
					},200);
				});

			});
		</script>

		<!-- 今日已更新 -->
		<div id="new">
			<p>今日已更新 <span>756款 > </span> </p>
			<div class="newpic">
				<div class="newpic">
				<?php if(is_array($good)): foreach($good as $key=>$vo): ?><div class="newpic_goods">
						<a href="<?php echo U('Goods/goodinfo',array("id"=>$vo['id']));?>"><img src="/Public<?php echo ($vo['pic']); ?>" class="newpic_goods_1"></a>
						<span><br><br>
							<a href="<?php echo U('Goods/goodinfo',array("id"=>$vo['id']));?>" id="newpic_goods_a1">每天1款，限量100份</a><br><br>
							<a href="<?php echo U('Goods/goodinfo',array("id"=>$vo['id']));?>" id="newpic_goods_a2"><?php echo ($vo['name']); ?></a>秒杀
							<a href="<?php echo U('Goods/goodinfo',array("id"=>$vo['id']));?>" id="newpic_goods_a3">去看看</a>
						</span>
					</div><?php endforeach; endif; ?>

<!-- 重复的商品 -->
			<div class="newpic_goods">
					<img src="/Public/Home/images/index/newpic_goods.jpg" class="newpic_goods_1">
					<span><br><br>
						<a href="" id="newpic_goods_a1">每天1款，限量100份</a><br><br>
						<a href="" id="newpic_goods_a2">9.9元春茶秒杀</a>
						<a href="" id="newpic_goods_a3">去看看</a>
					</span>
				</div>
			
			
			
			



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
		<!-- right边栏目 -->
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
		<!--抽奖猴子-->
		<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="/Public/Home/css/raffle.css" rel="stylesheet" type="text/css">
		<script src="/Public/Home/js/jquery-1.8.3.js"></script>
		<script src="/Public/Home/js/raffle.js"></script>
	</head>
	<body>
		<center><div class="raffle_out">
			<!--未点击图片-->
			<div class="raffle_out_pic">
			</div>
			<!--未点击图片结束-->

			<!--点击后图片-->
			<a href="<?php echo U('Activity/Index');?>" target="view_window"><div class="raffle_out_pic_click">
			</div></a>
			<!--点击后图片结束-->
		</div></center>
	</body>
</html>
		<!--抽奖猴子结束-->

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
	</div>
	<div style="clear:left"></div>
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
	<html>
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
</html>


</body>
</html>