<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'=>array(
		'__CSS__'=>__ROOT__.'/Public/Home/css/',
		'__JS__'=>__ROOT__.'/Public/Home/js/',
		'__IMAGES__'=>__ROOT__.'/Public/Home/images/',
	),
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'sql',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'dis_',    // 数据库表前缀
	'show_page_trace'       =>   false,
);