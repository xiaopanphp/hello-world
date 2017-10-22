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
		<?php echo W('Public/search');?>
<body>
	
	<div class="main1">
		<div>
			<span class="yihang"><a href="">特卖商城></a> ><a href="">女装 ></a><a href="">女装服饰></a><a href="">古崇2015春夏装新款 两件套甜...</a></span>
		</div>
		<div id="zhuti">
			<div id="datu">
				<div id="one">
					<img  src="/Public<?php echo ($good['pic']); ?>" id="datua" style="width:400px;height:400px">
					<div id="a"></div>
					<div id="flag"></div>
				</div>
				<div class="xiaotu">
					<ul>
						<li><img class="xiaotu1" src="/Public<?php echo ($good['pic']); ?>"></li>
							<?php if(is_array($goodpic)): foreach($goodpic as $key=>$vo): ?><li><img class="xiaotu1" src="/Public<?php echo ($vo['pic']); ?>"></li><?php endforeach; endif; ?>
						<!-- 	<li><img class="xiaotu1" src="/Public/Home/images/goods/good_2.jpg"></li>
							<li><img class="xiaotu1" src="/Public/Home/images/goods/good_3.jpg"></li>
							<li><img class="xiaotu1" src="/Public/Home/images/goods/good_4.jpg"></li>
							<li><img class="xiaotu1" src="/Public/Home/images/goods/good_5.jpg"></li> -->
					</ul>
				</div>
				<div id="fangdatu" style="position:relative;top:-480px"><img id="bigImg" src="/Public<?php echo ($good['pic']); ?>"></div>
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
					<br/><b>　</b><br/>
					<font color="#FF7700" size="3"><b>　</font></b>
					<table border=0 width="610" height="500"　>
						<tr>
							<td align="center" width="100" class="bianma_id" id="<?php echo (session('id')); ?>">商品编码</td>
							<td><span id="good_gid"><?php echo ($good['id']); ?></span><span><?php echo ($good['id']); ?><span><?php echo ($good['id']); ?></td>
						</tr>
						<tr>
							<td align="center" width="100" style="font-size:16px;color:#8F8F8F" class="bianma_name">商品名称</td>
							<td style="font-size:16px"><?php echo ($good['name']); ?></td>
						</tr>
						<tr>
							<td align="center" class="bianma">现　　价</td>
							<td><font color="#DD0000" size="4">
								<?php if(($minprice != $maxprice)): ?><span>¥</span><b class="money"><?php echo ($minprice); ?><sub>~</sub><span>¥</span><?php echo ($maxprice); ?></b>
								<?php else: ?>
									<span>¥</span><b class="money"><?php echo ($minprice); ?></b><?php endif; ?>
							</font>（降价通知）</td>
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
									<option value="">北京 昌平 兄弟连</option>
									<option value="">北京 昌平 回龙观</option>
								</select>
								<font size="2">现货 现在下单，预计明天送达</font>
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
							<td height="30px">
							<?php if(is_array($size)): foreach($size as $key=>$vo): ?><div class="chicun"><?php echo ($vo['size']); ?></div><?php endforeach; endif; ?>
								<!-- <div class="chicun">XL</div><div class="chicun">XXL</div> -->
							</td>
						</tr>
						<tr>
							<td align="center" class="bianma">选择颜色</td>
							<td height="30px">
								<?php if(is_array($color)): foreach($color as $key=>$vo): ?><div class="chicun_color"><?php echo ($vo['color']); ?></div><?php endforeach; endif; ?>
								<!-- <div class="chicun_color">黄色</div><div class="chicun_color">蓝色</div> -->
							</td>
						</tr>
						<tr>
							<td align="center" class="bianma">库存</td>
							<td height="30px"><div id="good_number"><?php echo ($num); ?></div></td>
						</tr>
						<script type="text/javascript">
							$(function(){
								$(".chicun_color").click(function(){
									var good_gid=$("#good_gid").html();
									var info_color=$(this).html();
									$.ajax({
          								url:'/index.php/home/Goods/color_ajax',
          								type:"post",
          								data:"color="+info_color+"&gid="+good_gid,
          								dataType:"json",
          								success:function(data){
          									// alert(data);
          										var num=data.num;
          										if(num==null){
          											$("#good_number").html('暂无库存');
          										}else{
          											$("#good_number").html(num);
          										}
          										var money=data.price;
          										if(money==null){
          											$(".money").html();
          										}else{
          											$(".money").html(money);
          										}
            							 },
         
									});
								});
								$(".chicun").click(function(){
									var good_gid=$("#good_gid").html();
									var info_size=$(this).html();
									$.ajax({
          								url:'/index.php/home/Goods/size_ajax',
          								type:"post",
          								data:"size="+info_size+"&gid="+good_gid,
          								dataType:"json",
          								success:function(data){
          										var num=data.num;
          										if(num==null){
          											$("#good_number").html('暂无库存');
          										}else{
          											$("#good_number").html(num);
          										}
												var money=data.price;
          										if(money==null){
          											$(".money").html();
          										}else{
          											$(".money").html(money);
          										}
            							 },
         
									});
								});
							});




						</script>
						<tr>
							<td align="center" class="bianma">已 选 择</td>
							<td>
								<span class="bianma_size"></span>&nbsp&nbsp&nbsp
								<span class="bianma_color"></span>
							</td>
						</tr>
						<tr>
							<td align="center" class="bianma">点击量</td>
							<td height="30px"><div><?php echo ($good['clicknum']); ?></div></td>
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
							<td>
								<form action="<?php echo U('Cart/inertcart');?>" method="post">
								<input type="hidden" value="" name="gid" class="gid">
								<input type="hidden" value="" name="color" class="color">
								<input type="hidden" value="" name="size" class="size">
								<input type="hidden" value="" name="money" class="money">
								<input type="hidden" value="" name="name" class="name">
								<input type="hidden" value="" name="cartpic" class="cartpic">
								<input type="hidden" value="" name="goodnumber" class="goodnumber">
								<a class='submeta'></a>
								<input type="submit" class='submetb' value="加入购物车"></a>
								</form>
							</td>
						</tr>
						<tr> 
							<td></td>
							<td><div class="li" id="li7">　</div><a href="<?php echo U('Favorite/add');?>?id=<?php echo ($good['id']); ?>"><font color="black">收藏商品</font></a>　　　<a href=""><font size="2">(请告诉我们更低的价格)</font></a></td>
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
							在线客服： <span id="chat_box" style="cursor:pointer"><div style="float:left;position:relative;left:85px;"><img src="/Public/Home/images/goods/online.gif"></div>　<a>和我联系</a><br></span>
							
							</td>
						</tr>
						<script type="text/javascript">
							$(function(){
								$("#chat_box").click(function(){
									$("#chat_box_1").css({"display":"block"});
								});
								$("#chat_box_none").click(function(){
									$("#chat_box_1").css({"display":"none"});
								});
							});
						</script>
						
						<tr><td><font color="#DD0000" size="4"><b>　¥<?php echo ($minprice); ?> </b></font>　　<a href="">免运费</a></td></tr>
					</table>
				</div> 
			</div>
			<div id="xiangqing">
				<div class="xiangqing" style="margin:0 auto">
					<ul class="canshu">
						<li id="goods_info">商品详情</li>
						<li>商品参数</li>
						<li id="goods_diss">评价（1001）</li>
						<li>装箱清单</li>
						<li>售后保障</li>
						<li>咨询</li>
					</ul>
					<div id="goods_info_pic">
						<div style="height:32px"></div>
						<div class="goods_info_pic_info">
							<p>品牌名称<?php echo ($good['name']); ?></p>
							<p>产品参数</p>
							<ul>
								<li>上市时间：<?php echo (date("Y-m-d",$good['addtime'])); ?></li>
								<li>面料分类：<?php echo ($good['material']); ?></li>
								<li>商品详情：<?php echo ($good['detail']); ?></li>
								<li>所属类别：<?php echo ($good['pname']); ?></li>
								<li>货号：<?php echo ($good['id']); ?></li>
								<li>适用季节：夏季</li>
								<li>适用对象：青少年</li>
								<li>适用场景：休闲场合</li>
								<li>服饰工艺：免烫处理</li>
								<li>品牌：<?php echo ($brand['brand']); ?></li>
								<li>颜色：
									<?php if(is_array($color)): foreach($color as $key=>$vo): echo ($vo['color']); ?>&nbsp;<?php endforeach; endif; ?>
								</li>
								<li>尺寸：
									<?php if(is_array($size)): foreach($size as $key=>$vo): echo ($vo['size']); ?>&nbsp;<?php endforeach; endif; ?>
								</li>
								<li>基础风格：修身版</li>
							</ul>
						</div>
						<?php if(is_array($goodpics)): foreach($goodpics as $key=>$vo): ?><div style="width:960px;border:1px solid #ccc"><img src="/Public<?php echo ($vo['pic']); ?>" style="width:940px;border:1px solid #ccc"></div><?php endforeach; endif; ?>
					</div>
					<div id="goods_diss_talk">
						<div style="height:32px"></div>
						<div class="goods_diss_talk_one">
							<div class="goods_diss_talk_one_left">
								<span>与描述相符合</span>
								<p>4.7</p>
								<span>☆☆☆☆☆</span>
							</div>
							<div class="goods_diss_talk_one_right">
								<span>　大家都写到</span>
								<ul>
									<li>质量好</li>
									<li>衣服很舒服</li>
									<li>很划算</li>
									<li>很划算</li>
									<li>尺码很好</li>
									<li>快递不错</li>
									<li>穿着美</li>
								</ul>
							</div>
						</div>
						<div id="goods_diss_talk_two">
							<input type="radio" name="radio">全部
							<input type="radio"  name="radio">追评
							<input type="radio"  name="radio">图片
						</div>
						<?php if(is_array($good_diss)): foreach($good_diss as $key=>$vo): ?><div id="goods_diss_talk_three">
							<div class="goods_diss_talk_three_left">
								<?php echo ($vo['content']); ?>
							</div>
							<div class="goods_diss_talk_three_right">
								<ul>
									<li>评价者:<span><?php echo ($vo['name']['user']); ?></span></li>
									<li>等级:<span><?php echo ($vo['name']['lever']); ?></span></li>
									<li>评价时间:<span><?php echo (date("Y-m-d H:i:s",$vo['time'])); ?></span></li>
								</ul>
								<div class="goods_diss_talk_three_name">
									<?php if(($vo['name']['pic'] == true)): ?><img src="/Public/<?php echo ($vo['name']['pic']); ?>" style="width:60px;height:60px">
									<?php else: ?>
									<img src="/Public/Home/images//user/user_default_logo_small.gif" style="width:60px;height:60px"><?php endif; ?>
								</div>

							</div>
						</div><?php endforeach; endif; ?>
					<?php echo ($page); ?>
					</div>
					

				</div>
				<script type="text/javascript">
					$(function(){
						$("#goods_info").click(function(){
							$("#goods_info_pic").css({"display":"block"});
							$("#goods_diss_talk").css({"display":"none"});
						});
						$("#goods_diss").click(function(){
							$("#goods_info_pic").css({"display":"none"});
							$("#goods_diss_talk").css({"display":"block"});
						});
					});
				</script>
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
	<!-- 聊天 -->
	<div id="chat_box_1" style="width:400px;height:400px;position:fixed;right:50px;bottom:10px;z-index:333;background:#fff;opacity:0.9;display:none">
		<div id="chat_box_none" style="width:40px;height:20px;background:#ccc;cursor:pointer">关闭</div>
		<html>
<head>
	<title></title>
	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.js"></script>
	<style type="text/css">
	*{
		margin:0;
		padding:0;
	}
	#chat{
		width:400px;
		height:350px;
		border: 1px solid #ccc;
		float:left;
		position: absolute;
		z-index: 99;
	}
	#chat_show{
		width:400px;
		height:200px;
		border-bottom: 1px solid #ccc;
		overflow: scroll;
	}
	#chat_talk{
		width:400px;
		height:100px;
	}
	#chat_talk1{
		width:400px;
		height:100px;
	}
	#chat_fi{
		border: 1px solid #ccc;
		width:100px;
		height:28px;
		display: block;
		color:#fff;
		line-height: 28px;
		text-align: center;
		float:left;
		background:#ccc;
		cursor:pointer;
		font-size: 20px;
	}
	#chat_fi:hover{
		color:black;
	}
	</style>
</head>
<body>
 <div id="chat">
 	<p id="chat_name" style="display:none"><?php echo (session('name')); ?>:</p>
 	<div id="chat_show">
 		<!-- <?php if(is_array($cart)): foreach($cart as $key=>$vo): ?>-->
			<!-- <p id="p"><?php echo (session('name')); ?>:<?php echo ($vo['content']); ?>(<?php echo (date("Y-m-d H:i:s",$vo['time'])); ?>)</p> -->
		<!--<?php endforeach; endif; ?> -->
 	</div>
 	
	 	<div id="chat_talk">
	 		<textarea id="chat_talk1" style="resize:none">

	 		</textarea>
	 	</div>
	 	<span id="chat_fi">发送 </span>
 	
 </div>
</body>
<script type="text/javascript">
	$(function(){
		$("#chat_fi").click(function(){
			content=$("#chat_talk1").val();
			 // alert(content);
			$.ajax({
				url:"/index.php/home/Chat/dochat_ajax",
				data:"content="+content,
				type:"get",
				dataType:"json",
				success:function(data){
					
				}
			});
			$("#chat_talk1").val('');
		});
			setInterval(function(){
				$.ajax({
					url:"/index.php/home/Chat/chat_ajax",
					type:"get",
					dataType:"json",
					success:function(data){
						$("#chat_show").empty();
						$(data).each(function (index){
							if (this.zid==0) {
								var a=$("<p>"+$("#chat_name").html()+this.content+'('+this.time+')'+"</p><br>");
							}else{
								var a=$("<p>"+"客服："+this.content+'('+this.time+')'+"</p><br>");
							}
							
							$("#chat_show").append(a);
						});
					
					}
				});
		
		 },2000);
		setInterval(function(){
			$("#chat_show").scrollTop($("#chat_show")[0].scrollHeight);
		},300);
	})
</script>
</html>
	</div>
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