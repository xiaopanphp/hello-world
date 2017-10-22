<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title></title>
	<link href="/Public/Home/css/siteinsert.css" rel="stylesheet" charset="utf-8">
	<script src="/Public/Home/js/jquery-1.8.3.js"></script>
	<script src="/Public/Home/js/siteinsert.js" rel="stylesheet" type="text/javascript"></script>
</head>
<body>
<div class="big_pic">
	<form action="<?php echo U('Cart/cartinserts');?>" method="post">
	
	<div class="insertbody">
		<!--头-->
		<div class="insertbody_top">
			<div class="insertbody_top_text">
				使用新地址
			</div>
		</div>
		<!--头结束-->

		<!--收货人-->
		<div class="insertbody_user">
			<span>*</span>收货人&nbsp:<input type="text" name="name" value="" class="insertbody_from_user">
		</div>

		<input type="hidden" name="addid" class="insertbody_from_addid">
		<!--收货人结束-->

		<!--手机-->
		<div class="insertbody_phone">
			&nbsp&nbsp&nbsp&nbsp<span>*</span>手机&nbsp:<input type="text" name="phone" value="" class="insertbody_from_phone">
		</div>
		<!--手机结束-->

		<!--邮箱-->
		<div class="insertbody_email">
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp邮箱&nbsp:<input type="email" name="email" value="" class="insertbody_from_email">
		</div>
		<!--邮箱结束-->
		<!--虚线-->
		<div class="insertbody_from_line"> 
		</div>
		<!--虚线结束-->
		<!--所在地址-->
		<div class="insertbody_add">
			<div class="insertbody_add_size">&nbsp<span>*</span>所在地址:</div>
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

			<div class="insertbody_add_postcode">
				邮编：<input type="text" name="insertbody_postcode" value="" class="insertbody_from_postcode">
			</div>
		</div>
		<!--所在地址-->	



		<!--详细地址-->
		<div class="insertbody_smailadd">
			&nbsp<span>*</span>详细地址&nbsp:<input type="text" name="samiladd" value="" class="insertbody_from_smailadd">
		</div>
		<!--详细地址-->



		<!--设置默认地址-->
		 <div class="insertbody_selected">
		 	<input type="checkbox" name="addsleected" value="1" class="insertbody_form_selected">
		 	<div class="insertbody_selected_font"><span>设为默认地址</span>(设置为默认地址后，系统将在下次购买时自动选中该收货地址)</div>
		 </div>
		<!--设置默认地址结束-->	

		<!--提示-->
		<div class="insertbody_caution">
			请填写收货人
		</div>
		<!--提示结束-->

		<div class="insertbody_from_xline">
		</div>
		<!--取消-->
		<div class="insertbody_cancel">
			<a href="<?php echo U('Cart/countersign');?>">取消</a>
		</div>
		<!--取消结束-->

		<!--确认-->
		<div class="insertbody_sub">
		<input type="submit" name="sub" value="确认" class="insertbody_sub_from">
		</div>
		 <!--确认结束-->
	</div>
	</form>
</div>
</body>
</html>