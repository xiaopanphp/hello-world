<?php if (!defined('THINK_PATH')) exit();?><html>
	<heaD>
		<title>折800抽奖</title>
			<meta charset="utf-8">
	</heaD>
	<style>
		a:hover{
			text-decoration:none;
			color:red;
		}
		.top_index{
			float:right;
		}
		#img{
			width:100%;
			height:400px;
		}
		#img_img{
			width:100%;
			height:20px;
			margin-top:-10px;
		}
		.content_img{
			width:100%;
		}
		.login{
		
			position:absolute;
			z-index:10;
			right:50px;
			top:150px;
		}
		.register{
			position:absolute;
			z-index:10;
			right:50px;
			top:250px;
		}
		.content{
			width:100%;
			position:relative;
			float:left;
		}
		.aa{
			position:relative;
			z-index:10;
			top:-180px;
			float:right;
			right:30px;
		}
		.bg{
			width:100%;
			position:relative;
		}
		.bg_imgs{
			position:absolute;
			z-index:10;
			right:0px;
			top:550px;
		}
		.bg_size{
			position:absolute;
			z-index:11;
			right:0px;
			top:550px;
			width:515px;
			height:510px;
			right:20px;
			top:18px;
			font-family:"微软雅黑";
			line-height:32px;
			color:#393939;
			box-shadow: 2px 10px 20px #909090;
			border-radius:15px;
			background:transparent;
		    margin-top:-1em;
		}
		.bg_size_title{
			color:#C7000B;
			font-size:25px;
			font-weight:bold;
		}
		.bg_size_bottom{
			color:#00315F;
		}
		.bg_size_bottom span{
			color:#C7000B;
		}
		.bg_size_space{
			height:50px;
		}
		.bg_img{
			position:absolute;
			z-index:10;
			right:565px;
			top:550px;
		}
		.smail_one{
			position:absolute;
			z-index:10;
			right:280px;
			top:100px;
		}
		.smail_two{
			position:absolute;
			z-index:10;
			right:80px;
			top:100px;
		}
		.smail_three{
			position:absolute;
			z-index:10;
			right:80px;
			top:300px;
		}
		.smail_four{
			position:absolute;
			z-index:10;
			right:280px;
			top:300px;
		}
		.right:{
			position:absolute;
			z-index:50;
			width:200px;
			height:300px;
		}
		.content_size{
			position:absolute;
			z-index:30;
			width:400px;
			height:30px;
			font-size:16px;
			font-family:"楷体";
			left:650px;
			top:10px;
		}
		.content_size span{
			font-family:"微软雅黑";
			font-size:16px;
			line-height:32px;
			color:#C7000B;
			font-weight:bold;
		}
		.draw_list{
			width:450px;
			height:180px;
			position:absolute;
			z-index:20;
			border:1px solid #C7000B;
			right:60px;
			top:370px;
			box-shadow: 0px 7px 7px #C7000B;
		}
		.draw_list_user{
			width:450px;
			float:left;
			color:#131313;
			font-family:"微软雅黑";
			line-height:18px;
			border:1px solid #C7000B;
			margin-top:5px;
			font-weight:bold;
			font-size:12px;
			box-shadow: 2px -2px 3px #C7000B;
			border-bottom:1px solid #ccc;
		}
		.draw_list_award{
			color:gold;
			font-weight:bold;
			font-size:18px;
		}
		.draw_list_size{
			color:#C7000B;
			font-size:14px;
		}
		.draw_list_first{
			font-size:18px;
			color:#C7000B;
		}
	</style>
	<body>
		<div class="img">
			<img id="img" src="/Public/Home/images//draw/banner_center01.jpg">
			<img id="img_img" src="/Public/Home/images//draw/bar.fw.png">
		</div>
		<div class="content">
				<div class="content_size">
					<span>01</span>登录有奖
					<br>
					&nbsp&nbsp凡在此商城购买商品赠送一次抽奖!<br>
					<span>02</span>注册有奖<br>
					&nbsp&nbsp购买商品即获得更多抽奖机会，赶快加入我们把！
				</div>
				<img class="content_img" src="/Public/Home/images//draw/cont01_bg.jpg">
				<a href="<?php echo U('Login/login');?>"><img  class="login" src="/Public/Home/images//draw/btn01.jpg"></a>
				<a href="<?php echo U('Login/register');?>"><img class="register" src="/Public/Home/images//draw/btn02.jpg"></a>
				<div class="right">
				</div>
				
<head>
<style type="text/css">
/* 页面 css */
*{margin:0;padding:0;list-style-type:none;}
h1{width:900px;margin:40px auto;font:32px "Microsoft Yahei";text-align:center;}

/* demo css */
.choujiang{position:relative;width:780px;height:390px;margin:40px auto 0 auto;padding:20px;background:url(/Public/Home/images//draw/ly-plate-c.gif) 20px 20px no-repeat;position:absolute;z-index:20;top:-10px;left:250px;}

.plate{position:relative;float:left;width:390px;height:390px;background-image:url(/Public/Home/images//draw/lyplate.png);}
.prize{float:right;width:360px;height:390px;font:14px/1.5 "Microsoft Yahei";position:absolute;top:40px;left:420px;}
.prize h4{margin:80px 0 20px;padding:10px;background-color:#eee;}
.prize ul{list-style-type:none;}
.prize li{margin:10px;}
#plateBtn{position:absolute;left:88px;top:88px;width:214px;height:214px;background-image:url(/Public/Home/images//draw/rotate-static.png);text-indent:-9999px;overflow:hidden;}
#result{display:none;position:absolute;left:65px;top:155px;width:300px;height:120px;background-color:rgba(0,0,0,0.75);filter:alpha(opacity=90);}
#resultTxt{padding:45px 15px 0;font:16px "Microsoft Yahei";color:#fff;text-align:center;}
#resultTxt em{color:#ffea76;font-style:normal;}
#resultBtn{position:absolute;right:5px;top:5px;width:25px;height:25px;text-indent:-100px;background-image:url(/Public/Home/images//draw/close.png);overflow:hidden;}
.choujiang_number{
	color:#C7000B;
	font-family:"微软雅黑";	
	font-weight:bold;
	font-size:22px;
	position:absolute;
	z-index:10;
	left:-80px;
}
.choujiang_size{
	font-size:30px;
	margin-left:10px;
	font-family:"Arial";
}
</style>

</head>

<body>

<div class="choujiang">
	<!--抽奖次数-->
	<div class="choujiang_number">

		剩余次数<span class="choujiang_size"><?php echo ($num); ?></span>
	</div>
	<div class="plate">
		<a id="plateBtn" href="javascript:" title="开始抽奖" class="<?php echo (session('id')); ?>">开始抽奖</a>
	</div>

	<div class="prize">
		<h4>奖品设置</h4>
		<ul>
			<li><strong>一等奖：</strong>莱特超跑（1辆）</li>
			<li><strong>二等奖：</strong>兰博基尼 (1辆)</li>
			<li><strong>三等奖：</strong>iphone6 plus</li>
			<li><strong>四等奖：</strong>iphone watch</li>
			<li><strong>参与奖：</strong>谢谢！购买</li>
		</ul>
	</div>

	<div id="result">
		<p id="resultTxt"></p>
		<a id="resultBtn" href="javascript:" title="关闭">关闭</a>
	</div>
	
</div>

<script type="text/javascript" src="/Public/Home/js//jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/Public/Home/js//jquery.rotate.min.js"></script>
<script type="text/javascript" src="/Public/Home/js//draw.js"></script>
</body>

				<div class="aa">
					<img  src="/Public/Home/images//draw/bg_mingdan_top.jpg">
				</div>
				<!--中奖名单-->
				<div class="draw_list">
					<?php if(is_array($drawlist)): foreach($drawlist as $key=>$drawlists): if($drawlists["award"] != '未中奖'): ?><div class="draw_list_user">
						<span class="draw_list_first">恭喜！</span>用户<span class="draw_list_size"><?php echo ($drawlists['uname']); ?></span>于<sub><?php echo (date("Y-m-d H:i:s",$drawlists['time'])); ?></sub>荣获得<span class="draw_list_award"><?php echo ($drawlists['award']); ?></span>&nbsp引起全商城沸腾！！
					</div><?php endif; endforeach; endif; ?>
					
				</div>
		</div>
		<div class="bg">
				<div class="bg_img">
					<img src="/Public/Home/images//draw/cont02_bg.jpg">
					<img  class="smail_one" style="width:169px;height:138px" src="/Public/Home/images//draw/111.jpg">
					<img  class="smail_two" style="width:169px;height:138px" src="/Public/Home/images//draw/u=1511526068,1368270483&fm=23&gp=0.jpg">
					<img  class="smail_three" style="width:169px;height:138px" src="/Public/Home/images//draw/u=3923921242,730195052&fm=21&gp=0.jpg">
					<img  class="smail_four" style="width:171px;height:138px" src="/Public/Home/images//draw/u=887850766,2173331779&fm=11&gp=0.jpg">
				</div>

				<div class="bg_imgs">
					<img src="/Public/Home/images//draw/cont03_bg.jpg">
					<div class="bg_size">
						<center class="bg_size_title">抽奖规则</center>
						<b>1</b>、普通用户每次订单赠送1次抽奖机会，会员每月赠送2次抽奖机会。所有抽奖机会仅限当月使用，高级会员与体验会员当月抽奖机会次数不叠加使用，当月内重复开销会员无法重复领取抽奖次数；<br>
						<b>2</b>、所有会员每天仅限抽奖5次，当月抽奖机会，每个自然月底自动清零；<br>
						<b>3</b>、 用户按“开始抽奖”激活轮盘转动抽奖，用户可获得轮盘最终所停留在的奖品。<br>
						<b>4</b>、本次活动为随机抽奖，您将实时获得您的中奖信息。<br>
						<b>5</b>、所抽中的奖品，可以选择”领取”或”不领取”，如选择”不领取”则视为放弃本次领奖机会。<br>
						<b>6</b>、会员可进行中奖查询，“获奖信息”中将显示中奖记录。<br>
						<div class="bg_size_space"></div>
						<b class="bg_size_bottom">凡是抽到的奖品,系统会自动发到您的购物车内,请到购物车内领取</b>
						<center class="bg_size_bottom">本次活动最终解释权归<span>倔强的萝卜团队</span>所有</center>
					</div>
				</div>
		</div>
	</body>
</html>