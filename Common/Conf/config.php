<?php
return array(
	//'配置项'=>'配置值'
		//'配置项'=>'配置值'
		//'TMPL_ENGINE_TYPE'      =>  'Smarty',
		
		'DB_TYPE'               =>  'mysql',     // 数据库类型
		'DB_HOST'               =>  '127.0.0.1', // 服务器地址
		'DB_NAME'               =>  'bookdb',          // 数据库名
		'DB_USER'               =>  'root',      // 用户名
		'DB_PWD'                =>  '123456',          // 密码
		'DB_PORT'               =>  '3306' ,   // 端口
		'DB_PREFIX'             =>  '',    // 数据库表前缀
		'DB_CHARSET'=> 'utf8', // 字符集
		'DB_FIELDS_CACHE' => false,
		"SHOW_PAGE_TRACE" => true,
		
		'URL_MODEL' => 2, //重写模式 www.book.com:8090/Home/Index/index
		'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
		'DEFAULT_MODULE'       =>    'Home', // 默认模块
		
		
		//'TMPL_EXCEPTION_FILE'   =>  MODULE_PATH.'View/Public/_404.html',// 异常页面的模板文件
);