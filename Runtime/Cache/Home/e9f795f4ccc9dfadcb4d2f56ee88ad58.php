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


<div id="divpagecontent">
  <table width="100%" border="0" cellspacing="0">
    <tr>
      <td width="25%"><table width="100%" border="0" cellspacing="0" style="margin-top:30px">
        <tr>
          <td class="listtitle">我的帐户</td>
        </tr>
        <tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
		  <a class="myActive" href="javascript:void(0);" >用户信息修改</a></td>
        </tr>
        <tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
		  <a href="/User/updatepwd">密码修改</a></td>
        </tr>
		
<tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="orderlist.html">订单查询</a></td>
        </tr>
<tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">帐户余额</a></td>
        </tr>
<tr>
          <td class="listtd"><img src="<?php echo (IMG_URL); ?>miniicon.gif" width="9" height="6" />&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">我的收藏</a></td>
        </tr>


		
      </table></td>
      <td><div style="text-align:right; margin:5px 10px 5px 0px"><a href="/Index">首页</a>&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;<a href="/User/my">&nbsp;我的帐户</a>&nbsp;&nbsp;&nbsp;&nbsp;&gt;&nbsp;&nbsp;&nbsp;&nbsp;用户信息修改</div>
        
		
		
		
		
        <table cellspacing="0" class="infocontent">
        <tr>
          <td>
		  
		  
		  
		  <table width="100%" border="0" cellspacing="2" class="upline">
  <tr>
    <td style="text-align:right; width:20%">会员邮箱：</td>
    <td style="width:40%; padding-left:20px"><?php echo ($Info[0]['email']); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:right">会员名：</td>
    <td style="padding-left:20px"><?php echo ($Info[0]['truename']); ?></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td style="text-align:right">性别：</td>
    <td colspan="2">&nbsp;&nbsp;
    <?php if($Info[0]['gender'] == 'man'): ?>&nbsp;&nbsp;<input type="radio" name="radiobutton" value="radiobutton"  checked="checked"/>男
    <?php else: ?>
	    &nbsp;&nbsp;<input type="radio" name="radiobutton" value="radiobutton" />男<?php endif; ?>
    <?php if($Info[0]['gender'] == 'woman'): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="radiobutton" value="radiobutton"  checked="checked" />女
    <?php else: ?>
    	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="radiobutton" value="radiobutton" />女<?php endif; ?>
	 <?php if($Info[0]['gender'] == 'baomi'): ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="radiobutton" value="radiobutton"  checked="checked" />保密
	    <?php else: ?>
	    	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="radiobutton" value="radiobutton" />保密<?php endif; ?></td>
    </tr>
  <tr>
    <td style="text-align:right">联系方式：</td>
    <td colspan="2"><input name="text2" type="text" class="textinput" value="<?php echo ($Info[0]['phone']); ?>"/></td>
  </tr>
  <tr>
    <td style="text-align:right">发货地址：</td>
    <td colspan="2"><input name="text" type="text" class="textinput" style="width:350px" value="<?php echo ($Info[0]['shippingaddress']); ?>"/></td>
    </tr>
  <tr>
    <td style="text-align:right">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
		  
		  
		  
		  <table width="100%" border="0" cellspacing="2" class="upline">
		  	<tr><td width="16%" style="text-align:right; width:20%">已选问题：</td><td  width="47%" style="width:50%"><?php echo ($Info[0]['findpwdquestion']); ?></td><td></td></tr>
            <tr>
              <td width="16%" style="text-align:right; width:20%">密码保护问题：</td>
              <td width="47%" style="width:50%"><select name="select" class="textinput" style="width:230px; height:26px;border-radius:6px;">
                  <option value="">- 选择一个问题 -</option>
                 
                  <?php if(is_array($Answer)): foreach($Answer as $key=>$answer): if(trim($Info[0]['findpwdquestion']) == trim($answer.question)): ?><option value="<?php echo ($Info[0]['findpwdquestion']); ?>"  selected="selected"><?php echo ($Info[0]['findpwdquestion']); ?></option>
                  	<?php else: ?>
                  		<option value="<?php echo ($answer["question"]); ?>"  ><?php echo ($answer["question"]); ?></option><?php endif; endforeach; endif; ?>

                </select>
               
              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td style="text-align:right">答案：</td>
              <td colspan="2"><input name="text3" type="text" class="textinput"/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font color="#999999">不能少于4个字符，不区分大小写</font></td>
            </tr>
            <!-- <tr>
              <td style="text-align:right">备用邮箱：</td>
              <td><input name="text3" type="text" class="textinput"/></td>
              <td>&nbsp;</td>
            </tr> -->
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
		  <table width="100%" border="0" cellspacing="2" class="upline">
            <tr>
              <td style="text-align:right; width:20%">输入校验码：</td>
              <td style=""><input name="text4" type="text" class="textinput"/></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
            	<td style="text-align:right; width:20%"></td>
            	<td  style="padding-left: 2%;"><img style="border-style:solid;border-width:1px;border-radius:6px;border-color:gray" src="/User/createModifyUserInfoCode" alt="验证密" onclick=""/> </td>
            	<td>&nbsp; </td>
            </tr>
            <tr>
              <td style="text-align:right">&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
		  
		  <p style="text-align:center"><a href="success.html"><img src="<?php echo (IMG_URL); ?>botton_gif_025.gif" border="0" /></a></p>
		  <p style="text-align:center">&nbsp;</p></td>
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


</body>
</html>