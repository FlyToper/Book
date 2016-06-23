<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		//$this -> assign("name", "Tom");
// 		$link = mysql_connect("localhost:3306", "root", "123456");
// 		if(!is_resource($link)){
// 			die("数据库连接失败");	
// 		}

// 		$sql = "show databases;";
// 		$result = mysql_query($sql, $link);
// 		if(!$result){
// 			die("error");
// 		}

// 		if(is_resource($result)){
// 			while($row = mysql_fetch_array($result)){
// 				echo $row[0];
// 				echo "<br />";
// 			}
// 		}
	
		$this -> display();
    }
    
    /*
     * 头部部分
     * 
     */
    public function header(){
    	$this->display();
    }
    
   	/*
   	 * 尾部部分
   	 * 
   	 */
    public function footer(){
    	$this->display();
    }

	
}