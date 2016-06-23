/**
 * 登录页面的JS
 * 
 */

function logincheck(){
	var username = $("#username").val();
	var password = $("#password").val();
	
	//alert(username +"___"+password);
	
	if(username != "" && password !=""){
		alert(username+"+++"+password);
	}else{
		alert("用户名或者密码不能为空！");
	}
}