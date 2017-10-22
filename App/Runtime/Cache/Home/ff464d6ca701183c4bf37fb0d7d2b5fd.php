<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="utf-8">
		<title>【折800官网】购物车</title>
		<link rel="stylesheet" href="/Public/Home/css/cart.css" type="text/css">
		<script src="/Public/Home/js/jquery-1.8.3.js"></script>
		<script src="/Public/Home/js/cart.js" rel="stylesheet" type="text/javascript"></script>
		</style>
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


			<!-- ----------------- 购物车标题开始 ------------------------------>
	
			<div id="title">
				<div id="title_1">
					<a href=""><img src="/Public/Home/images/cart/logo_min_2014.png"></a>
				</div>
				<div id="title_2">
					<img src="/Public/Home/images/cart/step.png">
				</div>
			</div>


		<!--判断是否等于空-->
		<?php if($cartnum != ''): ?><div id="num">
				<div id="num_1" class="cartnum_1">购物车<span style ="font-color:#E01914;color:#F60000;font-size:23px;font-family:Arilal;font-weight:bold;"></span></div>
				<div id="num_2">
					<img src="/Public/Home/images/cart/icon10.png">
				</div>
			
		
			</div>
			<!-- ----------------- 购物车标题结束------------------------------>
			



			
				<!-- ----------------- 购物车内容开始------------------------------>
		<div id="content" class="content">
			<table border="0" width="980px" cellspacing="0" cellpadding="5px">
				<tr class="asdsadasd">
					<th class="tdcheckbox">
						<input type="checkbox" name="id[]"  style="margin-left:-14px" id="CheckedAll">
					</th>
					<th style="color:#666666">
						<span style="float:left;color:#333333" id="CheckedAll">全选</span>
						<span style="float:right;padding-right:232px;color:#333333">商品</span>	
					</th>
					<th style="color:#333333">单价(元)</th>
					<th style="color:#333333">数量</th>
					<th style="color:#333333">金额(元)</th>
					<th style="color:#333333">操作</th>
				</tr>
				<tr>
	<!-- 				<td class="tdcheckbox" style="height:60px;text-align:left">

					</td> -->
					<td colspan="6" style="font-size:13px;height:60px;text-align:left;color:#666666">
						
						伊诺小镇百顺婴童童装特卖店
						<img src="/Public/Home/images/cart/pa.gif" class="tdcheckboximg">
					</td>
					<tr style="height:1px">
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					</tr>
				</tr>

				<!--遍历-->
				<?php if(is_array($cartnum)): foreach($cartnum as $key=>$cartlist): ?><tr class="tr" class="carttr">
				
					<td class="tdcheckbox">
						&nbsp;<input type="checkbox" name="items" value="<?php echo ($cartlist['id']); ?>" class="checkboxdel">
					</td>
						
					
					
					<td id="details">
						
						
						<img src="<?php echo ($cartlist['cartpic']); ?>" class="tdimg">
						<div id="tda" style="color:#666666;font-size:12px;font-family: 微软雅黑; font-weight:700"><?php echo ($cartlist['gname']); ?></div>
						<span id="details_update">
							<span id="details_update_size" class="<?php echo ($cartlist['goodnumber']); ?>">
								<span class="<?php echo ($cartlist['gcolor']); ?>">颜色：<?php echo ($cartlist['gcolor']); ?></span>
								<br>
								<span class="<?php echo ($cartlist['gsize']); ?>">尺寸：<?php echo ($cartlist['gsize']); ?></span>
								<br>
								
								库存：
								<span style="color:red" id="sadasdsa"><?php echo ($cartlist['goodnumber']); ?></span>
							</span>
							
							<!--修改-->
							<div class="cartsave_first">
								<div class="cartsave_first_size">
								</div>
								<div class="cartsave">
									<div class="cartsave_size" id="<?php echo ($cartlist['gid']); ?>">
										修改
									</div>
								</div>

							</div>
							<div class="cartsave_first_upda">
							    <div class="cartsave_first_upda_left">

							    	<div class="cartsave_first_upda_left_wcolor">
							    		<div class="cartsave_first_upda_left_wcolor_csize">
							    			颜色&nbsp：
							    		</div>
							    		<div class="cartsave_first_upda_left_wcolor_color">
							    			黑色
							    		</div>
							    	</div>
							    	<div class="cartsave_first_upda_left_wsize">
							    		<div class="cartsave_first_upda_left_wcolor_ssize">
							    			 尺寸&nbsp：
							    		</div>
							    		<div class="cartsave_first_upda_left_wcolor_size">
							    			L
							    		</div>
							    	</div>
							    	<div class="cartsave_first_upda_left_bottom">
							    		<div class="cartsave_first_upda_left_left" id="<?php echo ($cartlist['id']); ?>">
							    			确认
							    		</div>
							    		<div class="cartsave_first_upda_left_right">
							    			取消
							    		</div>
							    	</div>
								</div>
								<div class="cartsave_first_upda_right">
									<img src="<?php echo ($cartlist['cartpic']); ?>" class="cartsave_first_upda_right_pic">
								</div>
							</div>


						</span>
					</td>
					<td id="price">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b id="price_1" style="color:#E20000;font-size:19px;"><span style="font-size:22px">￥</span><span class="gmoney"><?php echo ($cartlist['gmoney']); ?></span></b>
						<br>
						

						<span style="display:block;width:131px;height:24px;line-height:24px;background:#FF6600;color:#fff;font-size:12px;">&nbsp;&nbsp;&nbsp;限时1.5折</span>
						<span style="font-family:Arial;font-size:12px;display:block;width:131px;height:24px;background:#fff;color:#C7000B;" class="show_time"></span>
						


					</td>
					<td>
						&nbsp;&nbsp;<button class="number_subtract">-</button><span class="num_size"><?php echo ($cartlist['number']); ?></span><button class="number_add">+</button>
					</td>
						
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;<b class="totalprice"><?php echo ($cartlist['totalprice']); ?></b>
					</td>
					<td class="cart_del">
						&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Cart/cartdel');?>?id=<?php echo ($cartlist['id']); ?>" class="cartdel" id="<?php echo ($cartlist['id']); ?>">删除</a>
					</td>

				</tr>
				
				<tr  style="height:1px;">
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
					<td style="background:#C6C6C6"></td>
				</tr><?php endforeach; endif; ?>
			</table>
			<span class="cartnumber"></span>
		
		</div>
		<!-- ----------------- 购物车内容结束------------------------------>
		
		<!--  -------------------------- 购物结算框 ------------------------>

		<div id="fixed">
			<div id="fixed_del" style="position:relative">
				&nbsp;&nbsp;
				<a href="" class="checked_del">批量删除</a>
			</div>		
			<!--遍历条数-->


			<div id="fixed_money">
				<a href="<?php echo U("Cart/countersign");?>"><img src="/Public/Home/images/cart/icon13.png"></a>
				<div class="fixed_premoney">￥</div>
				<div class="fixed_bigmoney">0</div>
				<div class="fixed_money_size">
				</div>
			</div>
			
			<table class="fixed_count">
				<tr>
					<td><span id="fixed_count_size">共</span></td>
					<td><sapn class="fixed_count_nummber" style="font-weight:bold">0</span></td>
					<td><span id="fixed_count_size">件</span></td>
				</tr>
			</table>
			
		</div>

	<?php else: ?>
	<!-- ----------------- 未添加购物车状态------------------------------>	
			<div id="num">
				<div id="num_1">
					购物车<span style ="color:#E01914;"></span>
				</div>
				<div id="num_2">
					<img src="/Public/Home/images/cart/icon10.png">
				</div>
			
		
			</div>

		<div class="nonecart">
			<div class="nonecart_center">
				<div class="nonecart_center_cterpic">
					<!--小车-->
					<div class="nonecart_center_cterpic_cart">
					</div>
					<!--小车结束-->

					<!--提示字-->
					<div class="nonecart_center_cterpic_size">
						<div class="nonecart_center_cterpic_size_top">					
								您的购物车还空着呢~
						</div>
						<div class="nonecart_center_cterpic_size_bottom">
							<p><a href="<?php echo U('Login/login');?>">登录</a>可查看以前放入的商品</p>
							<span><a href="<?php echo U('Goods/goodslist');?>">快去<em>商城</em>挑选心仪的宝贝吧~</a></span>
						</div>
					</div>
					<!--提示字结束-->

					<!--可变换的图片-->
					<div class="nonecart_center_cterpic_conversion">

					</div>
					<!--可变换的图片结束-->
				</div>
			</div>	
		</div>
		<!-- ----------------- 未添加购物车状态结束------------------------------><?php endif; ?>
		
		
		
		<!-- ----------------- 购物车推荐开始-------------------------------->
		<div id="rcommend">
			<div id="rcommend_1"><b>您可能还需要</b></div>
			<div id="rcommend_2">
				<a href=""><img src="/Public/Home/images/cart/400x400.jpg" class="img"></a>
				<p></p>
				<a href=""></a>
				<a href=""><img src="/Public/Home/images/cart/500x500.jpg" class="img"></a>
				<a href=""><img src="/Public/Home/images/cart/720x480.jpg" class="img"></a>
				<a href=""><img src="/Public/Home/images/cart/720x480_004.jpg" class="img"></a>
				<a href=""><img src="/Public/Home/images/cart/720x480_005.jpg" class="img"></a>
				<a href=""><img src="/Public/Home/images/cart/800x800_003.jpg" class="img"></a>
			</div>
		</div>
		<!-- ----------------- 购物车推荐结束---------------------------------->
		
		<!-- ----------------- 购物车尾部-------------------------------->
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
	<script type="text/javascript"> 
function countdown(){
    var show_time = $(".show_time");
    endtime = new Date("4/31/2015 00:00")//结束时间
    today = new Date();//当前时间
    delta_T = endtime.getTime() - today.getTime();//时间间隔
    if(delta_T < 0){
        show_time.innerHTML = "结束";
    }
    window.setTimeout(countdown,1000);
    total_days = delta_T/(24*60*60*1000);//总天数
    total_show = Math.floor(total_days);//实际显示的天数
    total_hours = (total_days - total_show)*24;//剩余小时
    hours_show = Math.floor(total_hours);//实际显示的小时数
    total_minutes = (total_hours - hours_show)*60;//剩余的分钟数
    minutes_show = Math.floor(total_minutes);//实际显示的分钟数
    total_seconds = (total_minutes - minutes_show)*60;//剩余的分钟数
    seconds_show = Math.floor(total_seconds);//实际显示的秒数
    show_time.html("距放假还有:" + hours_show + ":" + minutes_show + ":" + seconds_show);
}
countdown();

//获取购物车内商品数量
var $cartnum_1 = $(".cartnum_1").children();
$.post("cartajax",function(data){
	$cartnum_1.html(eval(data));
},'json');

</script>

</html>