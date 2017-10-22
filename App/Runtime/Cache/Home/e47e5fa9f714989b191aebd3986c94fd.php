<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="/Public/Home/images/index/fav.png">
		<title>折800通行证</title>
		<meta charset="utf-8">
		<link href="/Public/Home/css/pwd.css" type="text/css" rel="stylesheet">
		<script src="/Public/Home/js/jquery-1.8.3.js"></script>
	</head>
	<body>
		<div class="top">
			<a href="<?php echo U("Index/index");?>"><img id="imgs" src="/Public/Home/images/login/logo.png" /></a>
			<span id="span">
				已经有团800或折800帐号了？
				<a href="<?php echo U("Login/index");?>">去登录</a>
			</span>
		</div>
		<div class="content">
			<b><span id="size">找回密码</span></b><br><br>
			<hr style="width:940px;"></hr>
			<div class="box">
				<i id="box-size">1</i><br>
			</div>
			<div class="box2">
				<i id="box-size">2</i>
			</div><hr id="line-hr">
			<div class="box3">
				<i id="box-size">3</i>
			</div>
			<div class="box4">
				<i id="box-size">4</i>
			</div>
			<div class="box5">
				<i id="box-size">5</i>
			</div>
			
			<div id="explain">
				<span id="write">填写账户信息
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</span>
				<span>选择找回方式
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;
				</span>
				<span>验证身份
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</span>
				<span>设置新密码
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</span>
				</span>
				<span>完成</span>
			</div>
			
				<div id="prompt">
					<span>
						小提示：忘记用户名？试试您的常用邮箱或者手机号，如果不行请 
						<a href="">联系客服</a>
					</span>
				</div>
				<div id="table">
					<tr>
						<td>用户名:<input type="text" name="user" id="user" placeholder="请输入用户名"></td>
					</tr>
					<br><br>
					<tr>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button"  class="sub" style="background:url(/Public/Home/images/login/2015-04-20_151711.png);width:120px;height:38px;" value=""> 
						</td>
					</tr>
				</div>
				<script>
			$(function(){					
				$(".box4,.box5,.box3,.box2,.box1,.box").css({"background":"#E9E9E9"});
				$("#explain span").css({"color":"#999"})
				$(".box").css({"background":"#F8B986"})
				$("#explain span").eq(0).css({"color":"#F8B986"})

				//用户名判断
				$(".sub").click(function(){
					var user = $.trim($("#user").val());
					if(user == ''){
						alert("请填写用户名");
						return false;
					}
					$.post("<?php echo U('Login/pwdOne');?>",{user:user},function(re){
						if(re == 1){
							location.href="<?php echo U('Login/pwdTwo');?>";
						}else{
							alert("用户名不存在");
						}
					},'json');
				});
				

			});
			</script>
			
		</div>
		<div class="bottom">
			<span class="bo">
				<a href="">京ICP证120075号</a>
				京ICP备10051110号-5 京公网安备11010502025623 Copyright©2011-2015 版权所有 ZHE800.COM 
			</span><br>
			<div class="bottom-img">
				<a href=""><img  id="img1"src="/Public/Home/images/login/web_trust.png"></a>
				<a href=""><img id="img1"src="/Public/Home/images/login/cert.png"></a>
			</div>
		</div>
	</body>
</html>