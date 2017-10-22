<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="utf-8">
		<title>Favorite</title>
		<link rel="stylesheet" href="/Public/Home/css/favorite.css">
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
		<?php echo W("Public/search");?>
		<!-- =======================  整体body体============================= -->
		<div id="bigtbody">
		<div id="tbody">
			<!-- ===================================== body体左边栏============================== -->
			<div id="tbody_l">
				<div id="tbody_l_1">
					
					<div id="tbody_l_1_1">
						<?php echo (session('name')); ?>
					

				</div>
					<div id="tbody_l_1_2">
						打败了<em style="color:#F6811A;">0%</em>的会员
					</div>
					<div id="tbody_l_1_3">
						<a href="http://www.zhe800.com/profile/my_rank" target="_blank">
						我的等级
						</a>
					</div>
				</div>
				<div id="tbody_l_2">
					<dl>
						<dt>账户设置</dt>
						<dd>
							<a href="">基本资料</a>
						</dd>
						<dd>
							<a href="">安全中心</a>
						</dd>
					</dl>
				</div>
				<div id="tbody_l_3">
					<dl>
						<dt>积分中心</dt>
						<dd>
							<a href="">我的订单</a>
						</dd>
						<dd>
							<a href="">折800订单</a>
						</dd>
						<dd>
							<a href="">团800订单</a>
						</dd>
					</dl>
				</div>
				<div id="tbody_l_4">
					<dl>
						<dd>
							<a href="">我的抽奖</a>
						</dd>
						<dd style="background:#f2f2f2;">
							<a href="">我的消息</a>
						</dd>
						<dd>
							<a href="">我的收藏</a>
						</dd>
						<dd>
							<a href="">我的爆料</a>
						</dd>
						<dd>
							<a href="">邀请</a>
						</dd>
					</dl>
				</div>
			</div>
			<!-- ===================================== body体右边栏============================== -->
			<div id="tbody_bigr">
				<div id="tbody_r">
				<div class="tbody_r_1">我的消息</div>
						<!-- ===========================  后台向前台传值遍历部分======================================== -->
						<?php if(is_array($data)): foreach($data as $key=>$va): ?><table style="border-bottom:1px solid #ccc;width:700px;height:106px;">
						<tr id="tbody_r_content">
							<td id="tbody_r_content_td1"><?php echo (date("Y-m-d",$va["time"])); ?></td>
							<td id="tbody_r_content_td2">
								<img src="/Public/Home/images/favorite/shopping.jpg" style="width:30px;height:30px">
							</td>
							<td id="tbody_r_content_td3">
								<?php echo ($va['content']); ?>
							</td>
							<td id="tbody_r_content_td4">
								<a href="<?php echo U('Myinformation/delete');?>?id=<?php echo ($va['id']); ?>" class="query">删除</a>
							</td>
						</tr>
					</table><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
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
           for (var i = 0; i < $(".query").length; i++) {
             $(".query").eq(i).click(function(){
                if(confirm("确定要删除吗？")){
                  return true;
                }else{
                  return false;
                }
             });
           };
           });
      </script>
</html>
















<html>
	<head>
		<meta charset="utf-8">
		<title>Myinformation</title>
		<link rel="stylesheet" href="/Public/Home/css/myinformation.css" type="text/css">
	</head>
	<body>
		<div id="tbody_r">
			<div id="tbody_r_all">
				<div id="tboyd_r_title">
					<div id="tbody_r_title_font"><h2>我的消息</h2></div>
				<div>
				<hr style="width:717px;color:#C41304;">
				<table>
					<tr id="tbody_content">
						<td id="tbody_r_content_td1">2014-05-14</td>
						<td id="tbody_r_content_td2"></td>
						<td id="tbody_r_content_td3">
							亲爱的用户您好，折800每日千款精选超值商品供您选择，签到还可领积分免费换取精美礼品，欢迎您的光临
						</td>
					</tr>
				</table>
			</div>
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