<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="gb2312">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>电子书城</title>
<link rel="shortcut icon" href="<?php echo (IMG_URL); ?>favicon.ico">
<link rel="stylesheet" rev="stylesheet"
	href="<?php echo (CSS_URL); ?>style.css" type="text/css" media="all" />

<style type="text/css">
	#imgUpdatePwdCode:HOVER{
		cursor:pointer;
	}
	
	input[type="button"]:HOVER {
		cursor:pointer;
	}
	
</style>
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


	<div id="divpagecontent">
		<table width="100%" border="0" cellspacing="0">
			<tr>
				<td width="25%"><table width="100%" border="0" cellspacing="0"
						style="margin-top: 30px">
						<tr>
							<td class="listtitle">我的帐户</td>
						</tr>
						<tr>
							<td class="listtd"><img
								src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="/User/modifyUserInfo">用户信息修改</a></td>
						</tr>
						<tr>
							<td class="listtd"><img
								src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="myActive" href="javascript:void(0);">密码修改</a></td>
						</tr>
						<tr>
							<td class="listtd"><img
								src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="orderlist.html">订单查询</a></td>
						</tr>
						<tr>
							<td class="listtd"><img
								src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#">帐户余额</a></td>
						</tr>
						<tr>
							<td class="listtd"><img
								src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#">我的收藏</a></td>
						</tr>



					</table></td>
				<td><div style="text-align: right; margin: 5px 10px 5px 0px">
						<a href="/Index">首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;<a
							href="/User/my">&nbsp;我的帐户</a>&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;&nbsp;密码修改
					</div>





					<table cellspacing="0" class="infocontent">
						<tr>
							<td>
		
									<table style="text-align:center;margin:0px;padding:20px;" width="100%" border="2" cellspacing="2" >
										<!-- 【第一步开始】 -->
										<tr>
											<td style="text-align: right;">需要验证邮箱：</td>
											<td >&nbsp;&nbsp;&nbsp;<?php echo (session('UserNum')); ?></td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td style="text-align: right;">请输入验证码：</td>
											<td ><input name="text4" type="text"
												class="textinput" /></td>
											<td>&nbsp;</td>
											
										</tr>
										<tr>
											<td style="text-align: right; width: 20%">&nbsp;</td>
											<td style="padding-left: 2%;"><img id = "imgUpdatePwdCode"style="border-style: solid; border-width: 1px; border-radius: 6px; border-color: gray" src="/User/createUpdatePwdCode" alt="验证码" onclick="getNewUpdatePwdCode()" />&nbsp;&nbsp;&nbsp;&nbsp;<input style="" type="button" value="发送验证码"/>
											</td>
											<td>&nbsp;</td>
										</tr>
										
										<tr>
											<td style="text-align: right"></td>
											<td>&nbsp;&nbsp;<input type="button" value="下一步" /></td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td style="text-align: right"></td>
											<td></td>
											<td>&nbsp;</td>
										</tr>
										<!-- 【第一步结束】 -->
										
										<!-- 【第二步开始】 -->
										<tr>
											<td style="text-align: right">请输入邮箱校验码：</td>
											<td><input class="textinput" type="text" /> </td>
											<td>&nbsp;</td>
										</tr>
										
										<tr>
											<td style="text-align: right"></td>
											<td>&nbsp;&nbsp;<input type="button" value="下一步"/></td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td style="text-align: right"></td>
											<td></td>
											<td>&nbsp;</td>
										</tr>
										
										<!-- 【第二步结束】 -->
										
										
										<!-- 【第三步开始】 -->
										
										<tr>
											<td style="text-align: right">新密码：</td>
											<td><input type="text"  class="textinput"/> </td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td style="text-align: right">再次输入：</td>
											<td><input type="text"  class="textinput"/> </td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td style="text-align: right"></td>
											<td>&nbsp;&nbsp;<input type="button" value="完成" /></td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td style="text-align: right"></td>
											<td></td>
											<td>&nbsp;</td>
										</tr>
										
										<!-- 【第三步开始】 -->

									</table>

									
								<!-- <p style="text-align: center">
									<a href="success.html"><img
										src="<?php echo (IMG_URL); ?>botton_gif_025.gif" border="0" /></a>
								</p> -->
								
							</td>
						</tr>
					</table></td>
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
<script  src="<?php echo (JS_URL); ?>jquery-2.1.4.min.js"></script>
<script  src="<?php echo (JS_URL); ?>bootstrap.min.js"></script>

<script type="text/javascript">
	function getNewUpdatePwdCode(){
		var s = Math.random();
		$("#imgUpdatePwdCode").attr("src", "./createUpdatePwdCode/s/"+s);
	}
</script>

</body>
</html>