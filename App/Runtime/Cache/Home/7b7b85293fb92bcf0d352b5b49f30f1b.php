<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="utf-8">
		<title>【折800官网】确认订单</title>
		<link href="/Public/Home/css/countersign.css" rel="stylesheet" type="text/css">
		<script src="/Public/Home/js//jquery-1.8.3.js" type="text/javascript"></script>
		<script src="/Public/Home/js/countersig.js"></script>
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
			<!-- =====================================     结算标题开始     =================================== -->
		
		<div id="title">
			<div id="title_1">
				<a href=""><img src="/Public/Home/images/cart/logo_min_2014.png"></a>
			</div>
			<div id="title_2">
				
			</div>
			
		
		
		</div>
			<!-- =====================================     结算标题结束     =================================== -->
			
			<!-- =====================================     结算信息框开始    =================================== -->
		<div id="countersign">
			<!--判断是否有数据-->
		<?php if($addresslist == ''): ?><link href="/Public/Home/css/cartsite.css" rel="stylesheet" type="text/css">
		<script src="/Public/Home/js/jquery-1.8.3.js"></script>
		<script src="/Public/Home/js/site.js" rel="stylesheet" type="text/javascript"></script>
					<!--右边地址填写部分-->
			<form action="/index.php/home/cart/site_inert" method="post" onsubmit="return judge()">

			<div class="body_address">
				<div class="body_address_user">
					<input type="hidden" name="uid" value="<?php echo (session('id')); ?>">
					<span>*&nbsp</span>收货人：&nbsp<input type="text" name="name" value="" class="body_address_user_address">
				</div>

				<div class="body_address_phone">
					<span>*&nbsp</span>&nbsp&nbsp手机：&nbsp<input type="text" name="tel" value="" class="body_address_phone_address">
				</div>

				<div class="body_address_email">
					&nbsp&nbsp&nbsp&nbsp邮箱：&nbsp<input type="email" name="email" value="" class="body_address_user_email">
				</div>

				<div class="body_address_site">
					<span>*&nbsp</span><pre>所在地区：</pre>

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


					<span></span>邮编：<input type="text" name="postcode" value="" class="body_address_site_code">
				</div>

				<div class="body_address_minute">
					<span>*&nbsp</span>详细地址：
					<input type="text" name="add" value="" class="body_address_user_minute">
				</div>

				<!--警告栏-->
				<div class="body_address_hint"></div>
				<!--警告兰结束-->

				<div class="body_address_submit">
					<input type="submit" name="addsub" value="保存收货信息" class="body_address_addsub">
				</div>
			</div>
			<!--右边地址填写部分-->

			</form>	

			 <?php else: ?>


			
<div id="countersign">
			<!-- 未填写收货地址状态 -->
			 <span style="font-family:微软雅黑;font-size:16px;float:left;margin-left:10px">确认收货信息</span>
			<table border="0" class="countersign_address">
				<?php if(is_array($addresslist)): foreach($addresslist as $key=>$addresslists): ?><tr>
					<td class="<?php echo ($addresslists['defaultadd']? 'countersign_address_td':'countersign_address_td_add_error'); ?>">
						<div class="countersign_address_td_add">
						 <div class="<?php echo ($addresslists['defaultadd']? 'countersign_address_td_add_pic':'countersign_address_td_add_pic_error'); ?>">
						 </div>	
						 寄送至
						 	<span class="<?php echo ($addresslists['id']); ?>"></span>
						</div>
						 <div class="countersign_address_td_addsize">
						 	 <?php echo ($addresslists['address']); ?> ( <?php echo ($addresslists['name']); ?> 收) <?php echo ($addresslists['tel']); ?>
						 </div>
						<div class="countersign_address_td_add_size">
							<a href='<?php echo U("Cart/cartupdataa");?>?id=<?php echo ($addresslists["id"]); ?>'><?php echo ($addresslists['defaultadd']? '[默认地址]' : '[设为默认地址]'); ?></a> <a href="#" class="savesite_information_update" onclick="return false" id='<?php echo ($addresslists["id"]); ?>'>修改</a> <a href='<?php echo U("Cart/cartadddel");?>?id=<?php echo ($addresslists["id"]); ?>'>删除</a>
						</div>
					</td>
				</tr><?php endforeach; endif; ?>
				<tr>
					<td class="countersign_address_tdd">
						<div class="countersign_address_tdd_div">
							<a href="<?php echo U('Cart/cartinsert');?>">&nbsp<span>+</span>&nbsp使用新地址</a>
						</div>
					</td>
				</tr>

			</table><?php endif; ?>	
			<!--结束 -->

			<!-- =====================================     结算信息框结束   =================================== -->
	
			
			
			<!-- =====================================     快捷支付开始    =================================== -->
		<div id="money">

			<div style="clear:both"></div>
				<!-- =====================================     结算支付方式结束    =================================== -->
				<!-- =====================================     结算·支付开始   =================================== -->

			<div id="money_pay">
				<div></div>
				<div style="position:absolute;top:450px"><b>网银支付</b></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="0"><img src="/Public/Home/images/cart/icbc.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="1"><img src="/Public/Home/images/cart/ccb.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="2"><img src="/Public/Home/images/cart/boc.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="3"><img src="/Public/Home/images/cart/abc.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="4"><img src="/Public/Home/images/cart/comm.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="5"><img src="/Public/Home/images/cart/cmb.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="6"><img src="/Public/Home/images/cart/citic.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="7"><img src="/Public/Home/images/cart/spdb.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="8"><img src="/Public/Home/images/cart/cib.png" class="money_pay_imga"></div>
				<div class="money_pay_img"><input type="radio" name="ra" value="9"><img src="/Public/Home/images/cart/cmbc.png" class="money_pay_imga"></div>
				
				
			</div>	
				<!-- =====================================     结算网银支付开始   =================================== -->
			
		</div>
			<!-- =====================================     快捷支付结束    =================================== -->
			
			
			<!-- =====================================     订单信息开始    =================================== -->
			<div id="affirm"><b>确认订单信息</b></div>

			<div id="info">
				<table border="0" width="980px">
					<tr>
						<th>宝贝</th>
						<th>规格</th>
						<th>单价(元)</th>
						<th>数量</th>
						<th>小计(元)</th>
						<th>运费(元)</th>
					</tr>
					<tr>
						<td colspan="6">
							<div id="info_object1">
								伊诺小镇百顺婴童童装特卖店 <img src="/Public/Home/images/cart/pa.gif">
							</div>
							<span id="info_object2">
								
							</span>
							
						</td>
					</tr>


					<?php if(is_array($cartlists)): foreach($cartlists as $key=>$cartlistes): ?><tr>
						<td id="tdinfo">
							<div id="tdinfo_pic"> 
								<img width:"80px" height="80px" src="<?php echo ($cartlistes['cartpic']); ?>">
							</div>
							<div id="tdinfo_write">
								<a href="" style="font-size:12px;"><?php echo ($cartlistes['gname']); ?></a>
							</div>
							
						</td>

					
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;颜色：<?php echo ($cartlistes['gcolor']); ?>
							<br>
							&nbsp;&nbsp;&nbsp;&nbsp;尺寸：<?php echo ($cartlistes['gsize']); ?>
						</td>
						<td>
							&nbsp;&nbsp;<b style="font-family: 微软雅黑;">￥<span class="carttotalprice" id='<?php echo ($cartnums); ?>'><?php echo ($cartlistes['totalprice']); ?></span></b>
						</td>
						<td >
							&nbsp;&nbsp;<span class="cartamountes"><?php echo ($cartlistes['goodnumber']); ?></span>
						</td>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;<b  class="carttotalprices" style="font-family: 微软雅黑;"><?php echo ($cartlistes['totalprice']*$cartlistes['goodnumber']); ?></b>
						</td>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;包邮
						</td>
					</tr>

					<span class="cartarray" id="<?php echo ($cartlistes['gid']); ?>"></span><?php endforeach; endif; ?>
				</table>
					
				</div>
				<table border="0" style="margin:0 auto;width:980px;background:#FFF7F7;">
					<tr>
						<td>
							<span style="color:#7A798E;font-size:12px;">发货时间：</span><b>卖家承诺订单在买家付款后,72小时内发货
							</b>
							<span style="display:block;float:right;font-family: 微软雅黑;">商品合计：￥<b class="cartmoneys">11.50</b></span>
						</td>
					</tr>
					<tr>
						<td>
							<span> 留言：<input type="text" value="" style="width:410px"></span>
							<span style="display:block;float:right;font-family: 微软雅黑;">运费：&nbsp;<b>￥0.00</b></span>
						</td>
					</tr>
					<tr >
						<td style="float:right;" >商家合计：&nbsp;￥<b style="font-family: 微软雅黑;" class="cartmoneys">11.5</b></td>
					</tr>
				
				
				</table>
				
				<!-- =====================================     订单信息结束
				=================================== -->
				
				<!-- =====================================    优惠方式开始
				=================================== -->
				<div id="favorable">
					<p><b style="font-size:14px;">&nbsp;&nbsp;&nbsp;&nbsp;选择优惠方式</b>&nbsp;优惠券和积分不能同时使用</p>
					<br>
					<p>&nbsp;&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;<b>使用优惠券</b>(您有0张优惠券)</p>
					<br>
					<p>&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;<b>使用积分</b>(您有1积分)</p>
					
				</div>
			
				<hr style="width:980px;margin:0 auto">
				<div id="submit">
					<p>
						由于抢购人数众多，但商品库存有限，订单提交后请在30分钟内支付，超时将自动取消订单


						<span style="float:right;">共<span class="numberses">2</span>件，商品总计：￥<b class="cartmoneys">50.50</b></span>
					</p>
					<br>
					<p><input type="checkbox" checked>我已阅读并同意
						<a href="">《折800特卖商城服务协议》</a><span style="float:right;">运费总计：<b>￥0.00</b></span>  
					</p>
					<br>
						<a href="<?php echo U('Cart/cart');?>"><<返回购物车修改 </a>
						<div style="clear:both"></div>
						<!--填写地址-->
						<div class="cartadddefault">
							<div class="cartadddefault_topsize">
								<div class="cartadddefault_topsize_money">
									 ￥<span id="cartadddefault_topsize_money_size" class="cartmoneys">328.00</span>
								</div>
								<div class="cartadddefault_topsize_moneying">
									实付款：
						</div>
							</div>
					<form action="<?php echo U('Cart/insertpay');?>" method="post">
						<input type="hidden" name="count" value="<?php echo ($cartnums); ?>">
					<?php if(is_array($cartlistess)): foreach($cartlistess as $key=>$cartliss): ?><!--gid-->
						<input type="hidden" name="gid[]" value="<?php echo ($cartliss['gid']); ?>"><?php endforeach; endif; ?>
					<?php if(is_array($addresslist)): foreach($addresslist as $key=>$addresslists): if($addresslists['defaultadd'] == 1): ?><!-- 默认地址ID -->
						<input type="hidden" name="aid" value="<?php echo ($addresslists['id']); ?>">
						<!-- 商品总价 -->
						<input type="hidden" value=""  name="totalprice" class="inertadd">

							<div class="cartadddefault_topsize">
								<div class="cartadddefault_topsize_rightsize">

									 <?php echo ($addresslists['defaultadd']? $addresslists['address']:"没有设置地址"); ?>
								</div>
								<div class="cartadddefault_topsize_leftsize">
									邮寄至：
								</div>
							</div>
							<div class="cartadddefault_topsize">
								<div class="cartadddefault_topsize_tel">
									<?php echo ($addresslists['tel']); ?>
								</div>
								<div class="cartadddefault_topsize_name">
									收货人：
								</div>
							</div>
						</div>
						<div style="clear:both"></div>
						<input type="submit" value="提交订单" style="float:right;width:250px;height:60px;font-size:25px;font-family:微软雅黑;background:#CD1923;color:#FFFFFF;border:none" class="fromsub">
				</div>
					</form>
				 		 <?php else: ?>
				 		 <div style="clear:both"></div>
							<span></span><?php endif; endforeach; endif; ?>
				<div style="clear:both;"></div>
			<!-- =====================================    优惠方式结束
			=================================== -->
		<!--弹出框-->
		<html>
<head>
	<title></title>
	<link href="/Public/Home/css/cartupdate.css" rel="stylesheet" charset="utf-8">
	<script src="/Public/Home/js/jquery-1.8.3.js"></script>
	<script src="/Public/Home/js/cartupdate.js" rel="stylesheet" type="text/javascript"></script>
</head>
<body>
	<form action="<?php echo U('Cart/addressupdate');?>" method="post">
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
		<div style="float:right;margin-top:80px">
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
		</div>
	</body>

		<!-- ================ 表格信息验证 ========================= -->

</html>