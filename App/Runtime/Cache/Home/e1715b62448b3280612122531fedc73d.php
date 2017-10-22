<?php if (!defined('THINK_PATH')) exit();?><html>
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