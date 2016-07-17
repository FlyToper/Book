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
										<tr class="updatePwd-step1">
											<td style="text-align: right;">需要验证邮箱：</td>
											<td >&nbsp;&nbsp;&nbsp;<span id="txtEmail"><?php echo (session('UserNum')); ?></span></td>
											<td>&nbsp;</td>
										</tr>
										<tr class="updatePwd-step1">
											<td style="text-align: right;">请输入验证码：</td>
											<td ><input name="text4" type="text"
												class="textinput" id="txtSendEmailCode"/></td>
											<td>&nbsp;</td>
											
										</tr>
										<tr class="updatePwd-step1">
											<td style="text-align: right; width: 20%">&nbsp;</td>
											<td style="padding-left: 2%;"><img id = "imgUpdatePwdCode"style="border-style: solid; border-width: 1px; border-radius: 6px; border-color: gray" src="/User/createUpdatePwdCode" alt="验证码" onclick="getNewUpdatePwdCode()" />&nbsp;&nbsp;&nbsp;&nbsp;<span id = "btnSendEmailCode"><input style="" type="button" value="发送验证码" onclick="SendEmailCode()"/></span><span id="toSendEmailCode" style="display:none;border-color:gray;border-style:solid;border-width:1px 3px 3px 1px;border-radius:6px; font-family:'微软雅黑';font-size:18px;background-color:#DDDDDD;color:black;height:20px"><span id="toTime" style="color:#990066;font-size:20px;"></span>秒后可以重新发送</span>
											</td>
											<td>&nbsp;</td>
										</tr>
										
										<tr class="updatePwd-step1">
											<td style="text-align: right"></td>
											<td>&nbsp;&nbsp;<span id="span_success" style="display:none;"><span ><input type="button" value="下一步" onclick="NextStep(1)"/></span>&nbsp;<span id="msgSenEmailCode" style="color:green;"></span></span></td>
											<td>&nbsp;</td>
										</tr>
										<tr class="updatePwd-step1">
											<td style="text-align: right"></td>
											<td></td>
											<td>&nbsp;</td>
										</tr>
										<!-- 【第一步结束】 -->
										
										<!-- 【第二步开始】 -->
										<tr class="updatePwd-step2" style="display: none">
											<td style="text-align: right">请输入邮箱校验码：</td>
											<td><input class="textinput" type="text" id="txtEmailCode" /> </td>
											<td>&nbsp;</td>
										</tr>
										
										<tr class="updatePwd-step2" style="display: none">
											<td style="text-align: right"></td>
											<td>&nbsp;&nbsp;<input type="button" value="下一步" onclick="NextStep(2)"/></td>
											<td>&nbsp;</td>
										</tr>
										<tr class="updatePwd-step2" style="display: none">
											<td style="text-align: right"></td>
											<td></td>
											<td>&nbsp;</td>
										</tr>
										
										<!-- 【第二步结束】 -->
										
										
										<!-- 【第三步开始】 -->
										
										<tr class="updatePwd-step3" style="display: none">
											<td style="text-align: right">新密码：</td>
											<td><input type="text"  class="textinput" id="txtNewPwd1"/> </td>
											<td>&nbsp;</td>
										</tr>
										<tr class="updatePwd-step3" style="display: none">
											<td style="text-align: right">再次输入：</td>
											<td><input type="text"  class="textinput" id="txtNewPwd2"/> </td>
											<td>&nbsp;</td>
										</tr>
										<tr class="updatePwd-step3" style="display: none">
											<td style="text-align: right"></td>
											<td>&nbsp;&nbsp;<input type="button" value="完成" onclick="NextStep(3)" /></td>
											<td>&nbsp;</td>
										</tr>
										<tr class="updatePwd-step3" style="display: none">
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
	//更新验证码图片
	function getNewUpdatePwdCode(){
		var s = Math.random();
		$("#imgUpdatePwdCode").attr("src", "./createUpdatePwdCode/s/"+s);
	}
	
	//下一步处理
	function NextStep(step){
		if(step == 1){
			var txtSendEmailCode = $("#txtSendEmailCode").val();
			var txtEmail = $("#txtEmail").html();
			if(txtSendEmailCode != "" && txtEmail != ""){
				//执行第一个下一步操作
				$(".updatePwd-step1").hide();
				$(".updatePwd-step2").show();
				$(".updatePwd-step3").hide();

			}else{
				alert("验证码不能为空！");
			}
		}else if(step == 2){
			var txtEmailCode = $("#txtEmailCode").val();
			if(txtEmailCode != ""){
				$.post("/User/checkEmailCode",{"type":"UpdatePwd", "code":txtEmailCode}, function(rst){
					if(rst == "success"){
						$(".updatePwd-step1").hide();
						$(".updatePwd-step2").hide();
						$(".updatePwd-step3").show();
					}else{
						alert("邮箱验证码不正确！");
					}
				});
				
			}else{
				alert("验证码不能为空！");
			}
			
		}else if(step == 3){
			var pwd1 = $("#txtNewPwd1").val();
			var pwd2 = $("#txtNewPwd2").val();
			
			if(pwd1 != "" && pwd2 != ""){
				if(pwd1 == pwd2){
					$.post("/User/UpdatePwd",{"newPwd1":pwd1, "newPwd2":pwd2},function(rst){
						if(rst == "success"){
							
						}else if(rst == "error1"){
							alert("修改出错，请重试！");
						}else if(rst == "error2"){
							alert("两次密码不一致！");
						}
					});
				}else{
					alert("两次密码不正确！");
				}
			}else{
				alert("请填写完整密码！");
			}
		}
	}
	
	var s = 20;
	var timerId;
	//发送邮箱验证码
	function SendEmailCode(){
		var txtSendEmailCode = $("#txtSendEmailCode").val();
		var txtEmail = $("#txtEmail").html();
		
		if(txtEmail != ""){
			if(txtSendEmailCode != ""){
				$.post("/User/sendEmailCode", {"type":"updatePwd", "txtSendEmailCode":txtSendEmailCode, "email":txtEmail}, function(rst){
					if(rst == "success"){
						$("#btnSendEmailCode").hide();
						$("#toSendEmailCode").show();
						$("#span_success").show();
						$("#msgSenEmailCode").html("发送成功，请注意查收！");
						$("#msgSenEmailCode").addClass("success");
						timerId = setInterval("countTime()", 1000);
						

					}else if(rst == "error1"){
						alert("验证码错误！");
						//刷新验证码
						getNewUpdatePwdCode();
						$("#txtSendEmailCode").val("");
						
					}else{
						alert("发送邮箱验证码失败，请重试！");
					}
				});
			}else{
				alert("请输入验证码！");
			}
		}else{
			alert("邮箱错误！");
		}
	}
	
	
	//发送邮件的时间倒数
	function countTime(){
		if(s <= 0){
			clearInterval(timerId);
			$("#btnSendEmailCode").show();
			$("#toSendEmailCode").hide();
			return;
		}
		$("#toTime").html(s);
		s--;
	}
</script>

</body>
</html>