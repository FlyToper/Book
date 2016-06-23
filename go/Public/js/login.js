/**
 * 登录页面的JS
 * 
 */

//发送登录验证
function logincheck(){
	var usernum = $("#username").val();
	var password = $("#password").val();
	
	//alert(username +"___"+password);
	
	if(usernum != "" && password !=""){
		$.post("/User/checkLogin", {"usernum":usernum, "password":password},function(rst){
			if(rst == "success"){
				//alert("登录成功");
				window.location.href="/User/my";
			}else if(rst == "error1"){
				alert("用户名或者密码错误！");
			}else{
				alert("登录错误，请重试！");
			}
		});
	}else{
		alert("用户名或者密码不能为空！");
	}
}