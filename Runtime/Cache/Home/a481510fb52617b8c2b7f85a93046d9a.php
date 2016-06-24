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
<link rel="shortcut icon" href="<?php echo (IMG_URL); ?>favicon.ico" >
<link rel="stylesheet" rev="stylesheet" href="<?php echo (CSS_URL); ?>style.css" type="text/css" media="all" />

</head>

<body class="main">
<!-- 头部部分开始 -->
<div id="divhead">
  <table cellspacing="0" class="headtable">
    <tr>
      <td><img src="<?php echo (IMG_URL); ?>logo.gif" width="95" height="30" /></td>
      <td style="text-align:right"><img src="<?php echo (IMG_URL); ?>cart.gif" width="26" height="23" style="margin-bottom:-4px"/>&nbsp;<a href="/Cat">购物车</a>　|　<a href="#">帮助中心</a>　|　<?php if($_SESSION['UserNum']== null): ?><a href="/User/login">登录</a><?php else: ?> <a href="/User/my"><?php echo (session('NickName')); ?>  </a>　|　<a href="/User/exits">退出</a><?php endif; ?>　|　<a href="register.html">新用户注册</a></td>
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

<div id="divcontent">
<table width="900px" border="0" cellspacing="0">
  <tr>
    <td style="padding:30px"><div style="height:470px"><b>&nbsp;&nbsp;首页&nbsp;&raquo;&nbsp;个人用户登录</b>
          <div>
            <table width="85%" border="0" cellspacing="0">
              <tr>
                <td><div id="logindiv">
                    <table width="100%" border="0" cellspacing="0">
                      <tr>
                        <td style="text-align:center; padding-top:20px"><img src="<?php echo (IMG_URL); ?>logintitle.gif" width="150" height="30" /></td>
                      </tr>
                      <tr>
                        <td style="text-align:center"><table width="80%" border="0" cellspacing="0" style="margin-top:15px ;margin-left:auto; margin-right:auto">
                            <tr>
                              <td style= "font-size:16px; text-align:right; padding-top:5px; width:25%">用户名：</td>
                              <td style="text-align:left"><input name="text" type="text" class="textinput" id="username" style="font-size:15px;height:23px;padding:5px;"/></td>
                            </tr>
                            <tr >
                              <td style="font-size:16px;text-align:right; padding-top:5px">密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
                              <td style="text-align:left"><input name="text" type="password" class="textinput" id="password" style=" font-size:15px;height:23px;padding:5px;"/></td>
                            </tr>
                            
                            
                            <tr>
                              <td colspan="2" style="text-align:center"><input type="checkbox" name="checkbox" value="checkbox" />
                                &nbsp;&nbsp;记住我的登录状态</td>
                            </tr>
                            <tr>
                              <td colspan="2" style="padding-top:10px; text-align:center"><input type='button' onclick='logincheck()' value='登 录' style="width:80px;font-size:20px;color:#000000;"/> <input type="hidden" value="<?php echo ($Referer); ?>"  id ="referer"/></td>
                            </tr>
                            <tr>
                              <td colspan="2" style="padding-top:10px; text-align:center">登录帮助&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;帮助中心&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;忘记密码</td>
                            </tr>
                            <tr>
                              <td colspan="2" style="padding-top:10px"><img src="<?php echo (IMG_URL); ?>loginline.gif" width="241" height="10" /></td>
                            </tr>
                            <tr>
                              <td colspan="2" style="padding-top:10px; text-align:center"><input name="image" type="image" src="<?php echo (IMG_URL); ?>signupbutton.gif" width="135" height="33"/></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                </div></td>
                <td style="text-align:left; padding-top:30px; width:60%"><h1>您还没有注册？</h1>
                    <p>注册新会员，享受更优惠价格!</p>
                  <p>千种图书，供你挑选！注册即享受丰富折扣和优惠，便宜有好货！超过万本图书任您选。</p>
                  <p>超人气社区！精彩活动每一天。买卖更安心！支付宝交易超安全。</p>
                  <p style="text-align:right">
                    <input name="image" type="image" src="<?php echo (IMG_URL); ?>signupbutton.gif" width="135" height="33"/>
                  </p></td>
              </tr>
            </table>
          </div>
    </div></td>
  </tr>
</table>
</div>

<!-- 尾部部分结束 -->
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
<script  src="<?php echo (JS_URL); ?>jquery-2.1.4.min.js"></script>
<script  src="<?php echo (JS_URL); ?>bootstrap.min.js"></script>
<script  src="<?php echo (JS_URL); ?>login.js"></script>
</body>
</html>