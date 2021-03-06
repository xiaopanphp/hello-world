<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="/Public/Home/images/index/fav.png">
		<title>【折800官网】注册</title>
		<meta charset="utf-8">
		<link href="/Public/Home/css/register.css" type="text/css" rel="stylesheet">
		<script src="/Public/Home/js/jquery-1.8.3.js"></script>
	<style>
		.message{display:block;width:80px;text-align:right;}
		.protocol{display:inline-block;margin-left:20px;}
		.register{margin-top:10px;margin-left:85px;display:block;width:150px;line-height:30px;border:1px solid red;text-align:center;font-size:20px;color:#fff;background:red;}
		#user{display:inline-block;width:255px;height:30px;}
	</style>
    </head>
	<body>
		<div class="top">
			<a href="<?php echo U("Index/index");?>"><img id="imgs" src="/Public/Home/images/login/logo.png" /></a>
			<span id="span">
				已经有团800或折800帐号了？
				<a href="<?php echo U("Login/login");?>">去登录</a>
			</span>
		</div>
		<div class="re">
			<div class="left">
				<table class="table" style="border-spacing:10px;">
					<tr>
						<td id="notice" style="color:red;"><td>
					</tr>
					<tr>
						<td class="message">用户名：</td>
						<td>
							<input type="text" name="user" id="user" placeholder="用户名为4-20位的中文、数字、字母">
						</td>

					</tr>
					<tr>
						<td class="message">密码：</td>
						<td class="input">
							<input type="password" name="password" id="password" placeholder="密码为6-20位的数字、字母">
						</td>
					</tr>
					<tr>
						<td class="message">确认密码：</td>
						<td class="input">
							<input type="password" name="repassword" id="repassword" placeholder="请再次输入密码">
						</td>
					</tr>
					<tr>
						<td class="message">邮箱：</td>
						<td class="input">
							<input type="text" name="email" id="repassword" placeholder="请输入邮箱">
						</td>
					</tr>
				</table>
		
				<input type="checkbox" checked="checked" class="protocol"/>我已经认真阅读并同意折800的《用户注册协议》<br/>
				<a href="javascript:void(0);" class="register">注册</a>
			</div>
			<div class="right">
				<img  id="image" src="/Public/Home/images/login/87c7b842586996318d3fbeb2445ef4f1.jpg" />
				<div class="size">
					<span>---------------------还可以使用这些账号登录---------------------</span>
				</div>
				
				&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;
				<input type="submit" class="sub" value="QQ登陆" />
				<input type="submit" class="sub" value="百度登陆" />
			</div>
		</div>
		<div class="bottom">
			<span id="bo">
				<a href="">京ICP证120075号</a>
				京ICP备10051110号-5 京公网安备11010502025623 Copyright©2011-2015 版权所有 ZHE800.COM 
			</span><br>
			<div class="bottom-img">
				<a href=""><img  id="img1"src="/Public/Home/images/login/web_trust.png"></a>
				<a href=""><img id="img1"src="/Public/Home/images/login/cert.png"></a>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
	<script>
		$(function(){
			//验证用户名格式
			$($("[name='user']")).blur(function(){
				var user = $(this).val();
				var pattern1 = /^[\u4e00-\u9fa5a-zA-Z0-9]{4,20}$/;
				if(user != ""){
					if(!pattern1.test(user)){
						$("#notice").html("用户名格式不正确");
						$("[name='user']").focus();
					}else{
						$.post("<{;U('Login/checkName')}>",{user:user},function(re){
							if(re == 1){
								$("#notice").html("用户名已存在");
								$("[name='user']").focus();
							}
						},'json');
					}
				}
			});
			//验证密码格式
			$($("[name='password']")).blur(function(){
				var password = $(this).val();
				var pattern2 = /^[a-zA-Z0-9]{6,20}$/;
				if(password != ""){
					if(!pattern2.test(password)){
						$("#notice").html("密码格式不正确");
						$("[name='password']").focus();
					}
				}
			});
			//再次输入密码
			$($("[name='repassword']")).blur(function(){
				var password = $("[name='password']").val();
				var repassword = $("[name='repassword']").val();
				if(repassword != ""){
					if(repassword != repassword){
						$("#notice").html("两次输入的密码不一致");
						$("[name='repassword']").focus();
					}
				}
			});
			//验证邮箱格式
			$($("[name='email']")).blur(function(){
				var email = $("[name='email']").val();
				var pattern3 = /\b(^['_A-Za-z0-9-]+(\.['_A-Za-z0-9-]+)*@([A-Za-z0-9-])+(\.[A-Za-z0-9-]+)*((\.[A-Za-z0-9]{2,})|(\.[A-Za-z0-9]{2,}\.[A-Za-z0-9]{2,}))$)\b/; 
				if(email != ""){
					if(!pattern3.test(email)){
						$("#notice").html("邮箱格式不正确");
						$("[name='email']").focus();
					}
				}
			});
			//注册时验证
			$(".register").click(function(){
				var user = $("[name='user']").val();
				var password = $("[name='password']").val();
				var repassword = $("[name='repassword']").val();
				var email = $("[name='email']").val();
				if(user == ""){
					$("#notice").html("请输入用户名");
					$("[name='user']").focus();
					return false;
				}
				if(password == ""){
					$("#notice").html("请输入密码");
					$("[name='password']").focus();
					return false;
				}
				if(repassword == ""){
					$("#notice").html("请再次输入密码");
					$("[name='repassword']").focus();
					return false;
				}
				if(email == ""){
					$("#notice").html("请输入邮箱");
					$("[name='email']").focus();
					return false;
				}
				$.post("<?php echo U('Login/checkRegister');?>",{user:user,password:password,repassword:repassword,email:email},function(re){
					if(re == 1){
						location.href="<?php echo U('Index/index');?>";
					}else{
						$("#notice").html("注册失败，请确认注册信息是否正确");
					}
				},'json');
			});
		});
		     	
	</script>
</html>