/**
 * 登录页面的JS
 * 
 */

//发送登录验证
function logincheck(){
	var usernum = $("#username").val();
	var password = $("#password").val();
	var referer = $("#referer").val();
	
	//alert(username +"___"+password);
	
	if(usernum != "" && password !=""){
		$.post("/User/checkLogin", {"usernum":usernum, "password":password},function(rst){
			if(rst == "error1"){
				alert("用户名或者密码错误！");
			}else if(rst == "error2"){
				alert("该用户被禁用，请与管理员联系！");
			}else if(rst == "success"){
				if(referer != ""){
					window.location.href=referer;
				}else{
					window.location.href="/Index";
				}
			}

		});
	}else{
		alert("用户名或者密码不能为空！");
	}
}