<?php
	header("Content-Type=text/html;charset=utf-8");
	extract($_POST);
	
	//获取客户端的ip
	$ip =  $_SERVER["REMOTE_ADDR"];


	//echo 'title= '.$title.', content='.$content;
	//打开数据连接
	$link = mysql_connect("127.0.0.1:3306", "root", "123456");


	//判断连接和选择数据库是否成功
	if(!$link){
		die("数据库连接失败");
	}
	if(!mysql_select_db("jspdb")){
		die;
	}
	
	//执行插入操作
	$sql = "INSERT INTO messageboardinfo(title, content, ip) VALUES('$title', '$content', '$ip')";

	$rst = mysql_query($sql, $link);
	if(!$rst){
		die("留言失败！");
	}else{
		echo "留言成功！";
	}

?>

