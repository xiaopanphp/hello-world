<?php if (!defined('THINK_PATH')) exit();?><html>
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