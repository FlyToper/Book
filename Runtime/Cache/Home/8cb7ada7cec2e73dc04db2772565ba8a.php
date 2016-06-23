<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="gb2312">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="all" name="robots"/>
<meta name="author" content="Fisher" />
<meta name="Copyright" content="Copyright 2007-2008, 版权所有 www.reefdesign.cn" />
<meta name="description" content="reefdesign" />
<meta name="keywords" content="reefdesign" />
<title>电子书城</title>
<link rel="shortcut icon" href="favicon.ico" >
<link rel="stylesheet" rev="stylesheet" href="<?php echo (CSS_URL); ?>/style.css" type="text/css" media="all" />
</head>

<body class="main">

<!-- 头部部分开始 -->
<div id="divhead">
  <table cellspacing="0" class="headtable">
    <tr>
      <td><img src="<?php echo (IMG_URL); ?>logo.gif" width="95" height="30" /></td>
      <td style="text-align:right"><img src="<?php echo (IMG_URL); ?>cart.gif" width="26" height="23" style="margin-bottom:-4px"/>&nbsp;<a href="/Cat">购物车</a>　|　<a href="#">帮助中心</a>　|　<?php if($_SESSION['UserNum']== null): ?><a href="User/login">登录</a><?php else: ?> <a href="/User/my"><?php echo (session('NickName')); ?></a><?php endif; ?>　|　<a href="register.html">新用户注册</a></td>
    </tr>
  </table>
</div>

<div id="divmenu">
<a href="product_list.html">文学</a>　　<a href="product_list.html">生活</a>　　<a href="product_list.html">计算机</a>　　<a href="product_list.html">外语</a>　　<a href="product_list.html">经管</a>　　<a href="product_list.html">励志</a>　　<a href="product_list.html">社科</a>　　<a href="product_list.html">学术</a>　　<a href="product_list.html">少儿</a>　　<a href="product_list.html">艺术</a>　　<a href="product_list.html">原版</a>　　<a href="product_list.html">科技</a>　　<a href="product_list.html">考试</a>　　<a href="product_list.html">生活百科</a>　　　　<a href="product_list.html" style="color:#FFFF00">全部商品目录</a></div>
<div id="divsearch"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td style="text-align:right; padding-right:220px">Search
  <input type="text" name="textfield" class="inputtable" id="txtSerach"/>
<!--<input name="searchbutton" type="image" src="<?php echo (IMG_URL); ?>serchbutton.gif" style=" margin-bottom:-4px"/>-->
<a href="search.html"><img src="<?php echo (IMG_URL); ?>serchbutton.gif" border="0" style="margin-bottom:-4px"/></a></td>
  </tr>
</table>

</div>






<!-- 头部部分结束 -->

<div id="divpagecontent">
  <table width="100%" border="0" cellspacing="0">
    <tr>
      <td width="25%"><table width="100%" border="0" cellspacing="0" style="margin-top:30px">
        <tr>
          <td class="listtitle">我的帐户</td>
        </tr>
        <tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>/miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
		  <a href="/User/modifyUserInfo">用户信息修改</a></td>
        </tr>
		
<tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>/miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="orderlist.html">订单查询</a></td>
        </tr>
<tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>/miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="news.html">帐户余额</a></td>
        </tr>
<tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>/miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="news.html">我的收藏</a></td>
        </tr>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
      </table></td>
      <td><div style="text-align:right; margin:5px 10px 5px 0px"><a href="index.html">首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;<a href="my.html">&nbsp;我的帐户</a>&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;&nbsp;欢迎</div>
        
		
		
		
		
        <table cellspacing="0" class="infocontent">
        <tr>
          <td style="padding:20px"><p><img src="<?php echo (AD_URL); ?>/myad.jpg" width="631" height="436" /></p>
            </td>
        </tr>
      </table>
	  
	  
	  </td>
    </tr>
  </table>
</div>



<!-- 尾部部分开始 -->
<div id="divfoot">
  <table width="100%" border="0" cellspacing="0">
    <tr>
      <td rowspan="2" style="width:10%"><img src="<?php echo (IMG_URL); ?>bottomlogo.gif" width="195" height="50" style="margin-left:175px"/></td>
      <td style="padding-top:5px; padding-left:50px"><a href="#"><font color="#747556"><b>CONTACT US</b></font></a></td>
    </tr>
    <tr>
      <td style="padding-left:50px"><font color="#CCCCCC"><b>COPYRIGHT 2008 &copy; eShop All Rights RESERVED.</b></font></td>
    </tr>
  </table>
</div>
<!-- 尾部部分结束 -->


</body>
</html>