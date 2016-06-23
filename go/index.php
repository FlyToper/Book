<?php
	header('Content-Type:text/html;charset=utf-8');
	//入口文件
	
	define('APP_PATH', '../');
	define("SITE_URL", "http://www.book.com:8090/");
	define('CSS_URL', SITE_URL.'Public/css/');
	define('IMG_URL', SITE_URL.'Public/img/');
	define('BOOKCOVER_URL', SITE_URL.'Public/bookcover/');
	define('AD_URL', SITE_URL.'Public/ad/');
	define('JS_URL', SITE_URL.'Public/js/');
	define('COMMON_VIEW_URL', SITE_URL.'Public/Common/');
	
	define('APP_DEBUG', true);

	include "../../../ThinkPHP/ThinkPHP.php";
	//echo "success";
?>