<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="/Public/Home/images/index/fav.png">
		<title>【折800官网】登录</title>
		<meta charset="utf-8">
		<link href="/Public/Home/css/login.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div class="top">
			<a href="<?php echo U("Index/index");?>"><img id="imgs" src="/Public/Home/images/login/logo.png"></a>
			<span id="span">
				还没有帐号？
				<a href="<?php echo U("Login/register");?>">立即注册</a>
			</span>
		</div>
		<div class="login">
			<div class="left">
				<img src="/Public/Home/images/login/130f4b3f21b106ab11a8c5b43eeb5cd4.jpg" />
			</div>
			<div class="right">
					<table class="table">
						<tr>
							<td><span id="lo">登录</span></td>
						</tr>
						<tr>
							<td><img  id="user-img" src="/Public/Home/images/login/2015-04-20_105536.png"><input type="text"  name="user"placeholder="请输入登陆名" id="txt"></td>
						</tr>
						<tr>
							<td><img id="pwd-img" src="/Public/Home/images/login/2015-04-20_105837.png"><input id="pwd" type="password" name="pass" placeholder="请输入密码" id="pwd"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="remember" value="0" style="vertical-align:middle">自动登录<a href="<?php echo U('Login/pwd');?>" id="forget">忘记密码？</a></td>
						</tr>
						<tr>
							<td>
								<input type="text" class="form-control" name="verify" placeholder="验证码" id="code"/>
								<img id="verify" style="cursor:pointer;" src="<?php echo U('login/verify');?>" width="100" height="30" title="看不清楚？点击刷新" onclick="this.src = '<?php echo U('login/verify');?>?'+new Date().getTime()">
							</td>
						</tr>
						<tr>
							<td><a href="javascript:void(0);" id="login">登&nbsp;&nbsp;录</a></td>
						</tr>
						
					</table>
				<span id="line">---------------------------------------</span>
				<p id="size">您还可以使用这些账号登陆:</p>
				<table>
					<tr>
						<td><a href=""><img src="/Public/Home/images/login/2015-04-19_115530.png"></a></td>
						<td><a href=""><img src="/Public/Home/images/login/2015-04-19_115556.png"></a></td>
					</tr>
				</table>
			</div>
		
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
<script type="text/javascript" src="/Public/Home/js/js/jquery-1.8.3.min.js">
	//验证登录信息
	$("#sub").click(function(){
		var user = $.trim($("[name='user']").val());
		var password = $.trim($("[name='password']").val());
		var verify = $.trim($("[name='verify']").val());
		var remember = $("[name='remember']").val();
		if(user == null || user == ""){
			$("#notice").html("请输入账户名和密码");
			$("[name='user']").focus();
			return false;
		}
		if(password == null || password == ""){
			$("#notice").html("请输入账户名和密码");
			$("[name='password']").focus();
			return false;
		}
		if(verify == null || verify == ""){
			$("#notice").html("请输入验证码");
			$("[name='verify']").focus();
			return false;
		}
		if($("[name='remember']").is(":checked")){
			remember = 1;
		}
		$.post("{:U('login/login')}",{code:verify,user:user,password:password,remember:remember},function(re){
			if(re == 1){
				$("#notice").html("验证码不正确或已过期");
				$("[name='verify']").val("");
				$("[name='verify']").focus();
			}else if(re == 2){
				location.href="{:U('Index/index')}";
			}else if(re == 3){
				$("#notice").html("账户名与密码不匹配");
			}else if(re == 4){
				$("#notice").html("账户名不存在");
			}
		},'json');
	});
</script>