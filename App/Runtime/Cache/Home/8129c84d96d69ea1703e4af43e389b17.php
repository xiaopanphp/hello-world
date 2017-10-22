<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="/Public/Home/images/index/fav.png">
	<title>古崇2015春夏装新款 两件套甜美印花上衣拼接欧根纱公主裙【正品 价格 图片 折扣】 - 折800特卖商城</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/goodinfo.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="/Public/Home/js/goodinfo.js"></script>
</head>
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
		<html>
<head>
	<meta charset="utf-8">
	<title>head搜</title>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/search.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.js"></script>
</head>
<body>
	<div>
		<!-- <div id="topTu"><img src=""></div> -->
		<div id="search">
			<a href="<?php echo U('Index/index');?>"><div id="login"><img src="/Public/Home/images/public/new_logo4_min.png"></div></a>
			<div id="searcher">
				<input type="text" name="search" value="" id="search_1"><button id="search_2">搜索</button>
				<div id="one_search">
				</div>
			</div>

			<script type="text/javascript">
				$(function(){
					$("#search_1").keyup(function(){
						if($("#search_1").val()!=''){
							$.ajax({
	  							url:"/index.php/home/Public/search_ajax",
	  							data:"key="+$("#search_1").val(),
	  							type:"post",
	  							dataType:"json",
	  							success:function(data){
	  								// alert(data);
	  								$("#one_search").empty();
	  								$(data).each(function  (index) {
	  								var a = $('<a href="/index.php/home/goods/goodslist/sta/4/id/'+this.id+'/name/'+this.name+'">'+this.name+'</a>');
	  									$("#one_search").append(a);
	  								});
	  							}	
	  						});	
						}
					});
					$("#search_2").click(function(){
						
						window.location.href='/index.php/home/goods/goodslist/sta/5/name/'+$("#search_1").val()+'';
					});

				});
			</script>
			<div id="toolbar_links"><img src="/Public/Home/images/public/toolbar_links5.png"></div>
		</div>
		<div id="navigation">
			<div class="navigation">
				<span><a href="<?php echo U('Index/index');?>">首页</a></span>
				<?php if(is_array($class)): foreach($class as $key=>$vo): ?><!-- <span><a href="<?php echo U('Goods/goodslist');?>?id=<?php echo ($vo['id']); ?>&name=<?php echo ($vo['name']); ?>"><?php echo ($vo['name']); ?></a></span> -->
					<span><a href="<?php echo U('Goods/goodslist',array("id"=>$vo['id'],"name"=>$vo['name'],"sta"=>1));?>"><?php echo ($vo['name']); ?></a></span><?php endforeach; endif; ?>
				<!-- <span><a href="">8块8包邮</a></span> -->
				<!-- <span><a href="">20元封顶</a></span> -->
				<!-- <span><a href="">特卖商城</a></span> -->
				<!-- <span><a href="">积分商城</a></span>	 -->
				<img src="/Public/Home/images/public/signin4.gif" style="float:right;position:relative;top:-2px;height:35px">
				<!-- <div id="navigation_bg">
					<div id="navigation_none"><img src="/Public/Home/images/public/500x300.63ef7b3714cfa29c659f7ceb7063e9fd.500x300.jpg"></div>
				</div> -->
				<span style="float:right"><a href="">精选预告</a></span>
			</div>
		</div>
		
	</div>
</body>
</html>
<body>
	
	<div class="main1">
		
			<div>
				 <span class="yihang"><a href="">特卖商城></a> ><a href="">女装 ></a>><a href="">女装服饰></a><a href="">古崇2015春夏装新款 两件套甜...</a></span>

			</div>
			<div id="zhuti">
				<div id="datu">
				
				
					
						
						<div id="one">
						<img  src="/Public/Home/images/goods/good_1.jpg" id="datua">
						<div id="a"></div>
						<div id="flag"></div>
						</div>
					<div class="xiaotu">
						<ul>
							<li><img class="xiaotu1" src="/Public/Home/images/goods/good_1.jpg"></li>
							<li><img class="xiaotu1" src="/Public/Home/images/goods/good_2.jpg"></li>
							<li><img class="xiaotu1" src="/Public/Home/images/goods/good_3.jpg"></li>
							<li><img class="xiaotu1" src="/Public/Home/images/goods/good_4.jpg"></li>
							<li><img class="xiaotu1" src="/Public/Home/images/goods/good_5.jpg"></li>
						</ul>
					</div>
					<div id="fangdatu"><img id="bigImg" src="/Public/Home/images/goods/good_1.jpg"></div>
					<script type="text/javascript">
						$(function(){
							$(".xiaotu1").mouseover(function(){
								var a=$(this).attr('src')
								// alert(a)
								$("#datua").attr({'src':a});
								$("#bigImg").attr({'src':a});
							});
						});
					</script>	




				
						
					<div class="feixiang">
						<p>分享到：</p>
						<a href=""><div class="feixiangtu1"></div></a>
						<a href=""><div class="feixiangtu2"></div></a>
						<a href=""><div class="feixiangtu3"></div></a>
						<a href=""><div class="feixiangtu4"></div></a>
						<a href=""><div class="feixiangtu5"></div></a>
						<a href=""><div class="feixiangtu6"></div></a>
						<a href=""><div class="feixiangtu7"></div></a>
					</div>		
				</div>
				<div id="zhongjian">
					<br/><b>　<?php echo $row['goods']?></b><br/>
					<font color="#FF7700" size="3"><b>　<?php echo $row['descr']?></font></b>
					<table border=0 width="610" height="500"　>
						<tr>
							<td align="center" width="100" class="bianma">商品编码</td>
							<td>1234567</td>
						</tr>
						<tr>
							<td align="center" class="bianma">现　　价</td>
							<td><font color="#DD0000" size="4"><b>¥188</b></font>（降价通知）</td>
						</tr>
						<tr>
							<td align="center" class="bianma">商品评价</td>
							<td><font color="orange">★★★★★</font><a href="">（共有16079条评价）</a></td>
						</tr>
						<tr>
							<td align="center" class="bianma">正在促销</td>
							<td>    积分可抵订单金额　　　　　 <a href=""><font size="2">看看能换啥</font></a></td>
						</tr>
						<tr>
							<td align="center" class="bianma">送　　至</td>
							<td>
								<select>
									<option value="">山西 太原 小店区</option>
									<option value="">山西 太原 迎泽区</option>
									<option value="">山西 太原 尖草坪区</option>
									<option value="">山西 太原 杏花岭区</option>
								</select>
								<font size="2">现货 现在下单，预计明天（<?php $a=date('m'.'月'.'d'.'日',time()+3600*24);echo $a; ?>）送达</font>
							</td>
						</tr>
						<tr>
							<td align="center" class="bianma">服　　务</td>
							<td><font size="2">支付成功后，72小时内发货</font></td>
						</tr>
						<tr>
							<td align="center" class="bianma">温馨提示</td>
							<td class="td">
								<ul>
									<li><div class="li" id="li1">　</div>分期付款　</li>
									<li><div class="li" id="li2">　</div>免运费　</li>
									<li><div class="li" id="li3">　</div>15天无理由退货　</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td align="center" class="bianma">选择尺寸</td>
							<td height="30px"><div class="chicun">L</div><div class="chicun">XL</div><div class="chicun">XXL</div></td>
						</tr>
						<tr>
							<td align="center" class="bianma">点击量</td>
							<td height="30px"><div class="chicun">23</div></td>
						</tr>
						<tr>
							<td align="center" class="bianma">已 选 择</td>
							<td>L</td>
						</tr>
						<!-- <tr>
							<td align="center" class="bianma">我 要 买</td>
							<td>
						</tr> -->
						<tr>
							<td align="center" class="bianma">购买延保</td>
							<td class="td">
								<ul>
									<div class="yuan"><li><div class="li" id="li4">　</div> 100%样品检验</li></div>
									<div class="yuan"><li><div class="li" id="li5">　</div> 100%按时发货</li></div>
									<div class="yuan"><li><div class="li" id="li6">　</div> 8天无理由退货</li></div>
								</ul>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><a href="" class='submeta'></a>
								<a href="" class='submetb'></a>
							</td>
						</tr>
						<tr> 
							<td></td>
							<td><div class="li" id="li7">　</div><a href=""><font color="black">收藏商品</font></a>　　　<a href=""><font size="2">(请告诉我们更低的价格)</font></a></td>
						</tr>
					</table>
				</div>
				<div id="right">
					<table class="youbiao">
						<tr><td height="40px" bgcolor="#F5F5F5"><font color="#666666">  　卖家：</font><b>【折800】</b></td></tr>
						<tr><td height="40px">  　商家满意度：<font color="orange">★★★★★</font></td></tr>
						<tr><td height="72px">
    							　商品满意度：4.7分<br>
    							　服务满意度：4.9分<br>
    							　物流满意度：4.9分<br>
							</td>
						</tr>
						<tr>
							<td height="60px">
							在线客服： <div style="float:left;position:relative;left:85px;"><img src="/Public/Home/images/goods/online.gif"></div>　<a href="">和我联系</a><br>
							
							</td>
						</tr>
						
						
						<tr><td><font color="#DD0000" size="4"><b>　¥188 </b></font>　　<a href="">免运费</a></td></tr>
					</table>
				</div> 
			</div>
			<div id="xiangqing">
				<div class="xiangqing" style="margin:0 auto">
					<ul class="canshu">
						<li>商品详情</li>
						<li>商品参数</li>
						<li>评价（1001）</li>
						<li>装箱清单</li>
						<li>售后保障</li>
						<li>咨询</li>
					</ul>
					 <img src="/Public/Home/images/goods/goods_info2.jpg">
					 <img src="/Public/Home/images/goods/goods_info1.jpg">
					 <img src="/Public/Home/images/goods/goods_info3.jpg">
					 <img src="/Public/Home/images/goods/goods_info4.jpg">
					 <img src="/Public/Home/images/goods/goods_info5.jpg">
					 <img src="/Public/Home/images/goods/goods_info6.jpg">
					
					

				</div>
				<div class="cebian1">
					<div style="width:190px;height:30px;background:#FAFAFA;border-bottom:1px solid #ccc;line-height:30px"><b>相关分类</b></div>
					<ul>
						<li><a href="">空气净化器</a></li><li><a href="">吸尘器</a></li><li><a href="">电风扇</a></li>
						<li><a href="">挂烫机</a></li><li><a href="">空调扇</a></li><li><a href="">加湿器</a></li>
						<li><a href="">空气净化器</a></li><li><a href="">吸尘器</a></li><li><a href="">电风扇</a></li>
						<li><a href="">挂烫机</a></li><li><a href="">空调扇</a></li><li><a href="">加湿器</a></li>
						<li><a href="">挂烫机</a></li><li><a href="">空调扇</a></li><li><a href="">加湿器</a></li>

					</ul>
				</div>
				<div class="cebian1" id="left_fixed">
					 <img src="/Public/Home/images/goods/p4_65389.gif">
				</div>
			
			
			
		
			
				
			</div>	

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
	<script>
		var leftDiv = document.getElementById('one');//获取左边DIV对象
		var rightDiv = document.getElementById('fangdatu');//获取右边DIV对象
		var flagDiv = document.getElementById('flag');//获取小滑块对象
		var oImg = document.getElementById('bigImg');//获取img对象
		var aDiv = document.getElementById('a');
		//小滑块的移动事件
		aDiv.onmousemove = function(e){
			// alert('qqq');
			var ev = e || window.event;//事件对象兼容性处理
			var mouseX;//获取小滑块的实时X轴位置
			var mouseY;//获取小滑块的实时Y轴位置
			mouseX = ev.layerX || ev.offsetX;
			mouseY = ev.layerY || ev.offsetY;


			flagDiv.style.display = 'block';
			rightDiv.style.display = 'block';

			// flagDiv.style.left = (mouseX-flagDiv.offsetWidth/2) + 'px';//将小滑块的实时鼠标位置赋给小滑块实际位置
			// flagDiv.style.top = (mouseY-flagDiv.offsetHeight/2) + 'px';
			flagDiv.style.left = (mouseX-flagDiv.offsetWidth/2) + 'px';//将小滑块的实时鼠标位置赋给小滑块实际位置
			flagDiv.style.top = (mouseY-flagDiv.offsetHeight/2) + 'px';
			//小滑块左
			if(parseInt(flagDiv.style.left) < 0){
				flagDiv.style.left = 0 + 'px';
			}
			//小滑块右
			if(parseInt(flagDiv.style.left) > (leftDiv.offsetWidth - flagDiv.offsetWidth)){
				flagDiv.style.left = (leftDiv.offsetWidth - flagDiv.offsetWidth) + 'px';
			}
			//小滑块上
			if(parseInt(flagDiv.style.top) <0){
				flagDiv.style.top = 0 + 'px';
			}
			//小滑块下
			if(parseInt(flagDiv.style.top) > (leftDiv.offsetHeight - flagDiv.offsetHeight)){
				flagDiv.style.top = (leftDiv.offsetHeight - flagDiv.offsetHeight) + 'px';
			}

			oImg.style.left = -2*parseInt(flagDiv.style.left) + 'px';
			oImg.style.top = -2*parseInt(flagDiv.style.top) + 'px';

		}

		aDiv.onmouseout = function(){
			flagDiv.style.display = 'none';
			rightDiv.style.display = 'none';
		}
</script>
		

	
</html>