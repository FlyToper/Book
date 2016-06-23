<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="gb2312">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>电子书城</title>
<link rel="shortcut icon" href="<?php echo (IMG_URL); ?>favicon.ico" >

<link rel="stylesheet" rev="stylesheet" href="<?php echo (CSS_URL); ?>style.css" type="text/css" media="all" />
</head>

<body class="main">

<!-- 头部部分开始 -->
<div id="divhead">
  <table cellspacing="0" class="headtable">
    <tr>
      <td><img src="<?php echo (IMG_URL); ?>logo.gif" width="95" height="30" /></td>
      <td style="text-align:right"><img src="<?php echo (IMG_URL); ?>cart.gif" width="26" height="23" style="margin-bottom:-4px"/>&nbsp;<a href="/Cat">购物车</a>　|　<a href="#">帮助中心</a>　|　<?php if($_SESSION['UserNum']== null): ?><a href="User/login">登录</a><?php else: ?> <a href="my.html">我的帐户</a><?php endif; ?>　|　<a href="register.html">新用户注册</a></td>
    </tr>
  </table>
</div>

<div id="divmenu">
<a href="product_list.html">文学</a>　　<a href="product_list.html">生活</a>　　<a href="product_list.html">计算机</a>　　<a href="product_list.html">外语</a>　　<a href="product_list.html">经管</a>　　<a href="product_list.html">励志</a>　　<a href="product_list.html">社科</a>　　<a href="product_list.html">学术</a>　　<a href="product_list.html">少儿</a>　　<a href="product_list.html">艺术</a>　　<a href="product_list.html">原版</a>　　<a href="product_list.html">科技</a>　　<a href="product_list.html">考试</a>　　<a href="product_list.html">生活百科</a>　　　　<a href="product_list.html" style="color:#FFFF00">全部商品目录</a></div>
<div id="divsearch"><table width="100%" border="0" cellspacing="0">
  <tr>
    <td style="text-align:right; padding-right:220px">Search
  <input type="text" name="textfield" class="inputtable"/>
<!--<input name="searchbutton" type="image" src="<?php echo (IMG_URL); ?>serchbutton.gif" style=" margin-bottom:-4px"/>-->
<a href="search.html"><img src="<?php echo (IMG_URL); ?>serchbutton.gif" border="0" style="margin-bottom:-4px"/></a></td>
  </tr>
</table>

</div>






<!-- 头部部分结束 -->


<div id="divad">
<img src="<?php echo (AD_URL); ?>index_ad.jpg" />
</div>

<div id="divcontent">
<table width="900px" border="0" cellspacing="0">
  <tr>
    <td width="497"><img src="<?php echo (IMG_URL); ?>billboard.gif" width="497" height="38" />      <table cellspacing="0" class="ctl">
        <tr>
          <td>&middot;<a href="news.html" style="color:#000000">图书3折起，支持在线浏览 先看再买不后悔,任何商品免费送货</a></td>
        </tr>
  <tr>
    <td>&middot;<a href="news.html" style="color:#000000">Lonely Planet 已出版600多种旅行指南，几乎覆盖了全世界的每个角落。</a></td>
        </tr>
  <tr>
    <td>&middot;<a href="news.html" style="color:#000000">2007年中旅游图书畅销榜速递 中国游,世界游,旅游图书全部7折封顶</a></td>
        </tr>
  <tr>
    <td>&middot;<a href="news.html" style="color:#000000">50万种图书3折,百货团购价热卖 畅销榜新书速递,促销天天有</a></td>
        </tr>
         <tr>
    <td>&middot;<a href="news.html" style="color:#000000">50万种图书3折,百货团购价热卖 畅销榜新书速递,促销天天有</a></td>
        </tr>
      </table></td>
    <td style="padding:5px 15px 10px 40px"><table width="100%" border="0" cellspacing="0">
      <tr>
        <td><img src="<?php echo (IMG_URL); ?>hottitle.gif" width="126" height="29" /></td>
        </tr>
    </table>
      <table width="100%" border="0" cellspacing="0">
        <tr>
          <td style="width:50; text-align:center"><a href="info.html"><img src="<?php echo (BOOKCOVER_URL); ?>travelbook.jpg" width="102" height="130" border="0" /></a><br />
            <a href="info.html">TravelBook<br/>
作者:Lonley Plant</a></td>
          <td style="width:50; text-align:center"><a href="info.html"><img src="<?php echo (BOOKCOVER_URL); ?>java2.jpg" width="102" height="130" border="0" /></a><br />
            <a href="info.html">Java2入门经典(JDK5) <br/>
作者:(美)霍顿</a></td>
        </tr>
      </table></td>
  </tr>
</table>
</div>


<!-- 底部部分开始 -->
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
<!-- 底部部分结束 -->


</body>
</html>