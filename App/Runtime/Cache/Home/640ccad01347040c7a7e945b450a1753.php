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
			
		<link href="/Public/Home/css/order.css" rel="stylesheet" type="text/css">
		<script src="/Public/Home/js/jquery-1.8.3.js"></script>
		<script src="/Public/Home/js/order.js" rel="stylesheet" type="text/javascript"></script>
		<!--右部订单位置-->
		<div class="body_in">
			<div class="body_order">
				<div class="body_order_toptext">
				<pre>个人中心 > 我的订单 > <span>折800订单</span></pre>
				</div>
				<div class="body_order_toptext_phone">
					客服电话：400-0611-800
				</div>
				<div class="body_order_warning">
					<div class="body_order_warning_pic">
					</div>
					<pre><span>&nbsp安全提示！</span>
 下单后，给您发送链接办理退款的都是骗子！折800不会以系统升级、订单异常等原因要求您退款，谨防假冒客服电话诈骗！<a href="#">更多防骗提示>></a></pre>
				</div>
				<!--选项卡部分-->
				<div class="body_order_warning_box">
					<ul>
						<li id="body_order_warning_box_indent" class="actives"><a href="<?php echo U('User/order');?>?static=a">折800订单</a></li>
						<li id="body_order_warning_box_menudiv"></li>

						<li class="actives"><a href="<?php echo U('User/order');?>?static=0">&nbsp待付款&nbsp</a></li>
						
						<li id="body_order_warning_box_menudiv"> </li>

						<li class="actives"><a href="<?php echo U('User/order');?>?static=1" >&nbsp待发货&nbsp</a></li>
						 
						<li id="body_order_warning_box_menudiv"> </li>
						
						<li class="actives"><a href="<?php echo U('User/order');?>?static=2">&nbsp待收货&nbsp</a></li>
						
						<li id="body_order_warning_box_menudiv"> </li>

						<li><a><sub>&nbsp<span>订单数量：<span style="font-size:18px"><?php echo ($counts); ?></span></span></sub></a></li>
					</ul>
					<!--回收站开始-->
					<div class="body_order_warning_box_recycle">
						订单回收站
					</div>
					<!--回收站结束-->
					<div class="body_order_warning_picpackage">
					<div class="body_order_warning_box_pic"></div>
					</div>
					
				</div>
				<div class="body_order_warning_title">
					<!--标题-->
					<form action="#" method="">
					<ul>
						<li>商品</li>
						<li>单价(元)</li>
						<li>数量</li>
						<li>商品操作</li>
						<li>实付款(元)</li>
						<li>
							<select>
								<option value="">交易状态</option>
							</select>
						</li>
						<li>操作</li>
					</ul>
					<!--标题结束-->
					</form>
				</div>




				<div class="body_order_comm">


				 <?php if(is_array($list)): foreach($list as $key=>$orderlists): ?><div class="body_order_comm_topcase">
					
						<ul>
							<li><span><?php echo (date("Y-m-d H:i:s",$orderlists['time'])); ?></span></li>
							<li>订单号:<?php echo ($orderlists['id']); ?></li>
							<li>商家：聚美依女装特卖店</li>
						</ul>
					<!--第一个图片-->
					<div class="body_order_comm_picone">
					</div>
					<!--第一个图片结束-->

					<!--第二个图片-->
					<div class="body_order_comm_pictwo">
					</div>
					<!--第二个图片结束-->
				  </div>	

						<!--订单内容-->
				<?php if(is_array($orderinfolists)): foreach($orderinfolists as $key=>$orderinfolistes): if($orderinfolistes['oid'] == $orderlists['id']): ?><div class="body_order_comm_bigcentent">
					<div class="body_order_comm_centent">
						<!--商品图片-->
						<div class="body_order_comm_centent_pic">
							<img width="100px" height="100px" src="<?php echo ($orderinfolistes['pic']); ?>">
						</div>
						<!--商品图片结束-->

						<div class="body_order_comm_centent_name">

							<!--商品尺码 信息-->
								<div class="body_order_comm_centent_name_top">
										<a href="#"><?php echo ($orderinfolistes['name']); ?></a>  <a href="#" id="body_order_comm_centent_name_top_photo">交易快照</a>
								</div>
								
								<div class="body_order_comm_centent_name_bottom">
									颜色:<?php echo ($orderinfolistes['color']); ?>&nbsp尺码:<?php echo ($orderinfolistes['size']); ?>
								</div>
							<!--商品尺码 信息结束-->
					   </div>

						<!--价格-->
						<div class="body_order_comm_centent_cost">
							<p><?php echo ($orderinfolistes['price']+100); ?></p>
							<span><?php echo ($orderinfolistes['price']); ?></span>
						</div>
						<!--价格结束-->

						<!--数量-->
						<div class="body_order_comm_centent_num">
							<?php echo ($orderinfolistes['number']); ?>
						</div>
						<!--数量结束-->
					</div>

					<div class="body_order_comm_money">
						<span><?php echo ($orderinfolistes['price']*$orderinfolistes['number']); ?></span>
						<!-- 问号 -->
						<div class="body_order_comm_money_pic"></div>
						<!--问号结束-->
						<div class="body_order_comm_money_bottomtext">
							<!-- 包邮 -->
						</div>
					</div>

					<div class="body_order_comm_information">
					 <?php switch($orderlists["static"]): case "0": ?><span>待付款</span>
							<span><a href="<?php echo U('Cart/change_static');?>?oid=<?php echo ($orderlists['id']); ?>">点击付款</a></span><?php break;?>
						<?php case "1": ?><span>待发货</span><?php break;?>
						<?php case "2": ?><span>待收货</span>
						<span><a href="<?php echo U('Cart/change_sta');?>?oid=<?php echo ($orderlists['id']); ?>">确认收货</a></span><?php break;?>
						<?php case "3": ?><span>交易完成</span>
						<span><a href="<?php echo U('Favorite/diss');?>?id=<?php echo ($orderinfolistes['gid']); ?>" style="color:#333333">商品评价</a></span><?php break; endswitch;?>
						<!--问号-->
						<div class="body_order_comm_information_pic"></div>
						<!--问号结束-->
						<div class="body_order_comm_information_bottomtext">
							
							<a href="#">订单详情</a>
						</div>
					</div>


				</div><?php endif; endforeach; endif; endforeach; endif; ?>
					<!--订单内容结束-->
				<!--选项卡部分结束-->

				<!--分页开始-->
				<form action="#" method="">
 				<div class="body_order_warning_page">
					<!-- 每页显示 -->
 		
					<div class="body_order_warning_page_number">
           <!-- 每页显示&nbsp<select name="page">
									<option value="">10条</option>
									</select> -->
					</div> 
					<!-- 每页显示结束 -->

					<!-- 共几页 -->
					<div class="body_order_warning_page_pagenum">
					
					</div>
					<!--共几页结束

					<!-- 末页 -->


					<!--下一页 上一页 中间显示的页码-->
					<div class="body_order_warning_page_next">
			<!-- 			<a href="#">下一页>></a> -->
						<?php echo ($page); ?>
							<!--分页-->
					</div>


				</div>
					</form>
				<!--分页结束-->

					<div class="body_order_warning_page_zhe800pic">
						<div class="body_order_warning_page_togglepic">
						</div>
					</div>
				</div>
		</div>	
	</div>

		<div style="clear:both"></div>
		<!--右部订单位置-->
	
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