<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	
	/*
	 * 【展示用户个人信息页面】
	 * 
	 * */
	public function  my(){
		$this -> display();
	}
	
	/*
	 * 展示登录页面
	 * 
	 */
	function  login(){
		$this->display();
	}
	
	
	/*
	 * 【生成登录验证码】
	 *
	 */
	public function  createLoginCode(){
		$config =    array(
				'imageW' => 100,
				'imageH' => 30,
				'fontSize'    =>    15,    // 验证码字体大小
				'length'      =>    4,     // 验证码位数
				'useNoise'    =>    false, // 关闭验证码杂点
		);
	
		$img = new \Think\Verify($config);
		$img -> entry();
	}
	
	/*
	 * 【登录验证】
	 * 
	 * 
	 * */
	public function checkLogin(){
		try{
			extract($_POST);
			$user_model = D('CustomerInfo');
			
			//去数据库验证用户编号和密码是否都正确
			$info =  $user_model -> field('Email, NickName, State, TrueName') -> where("Email='%s' && UserPwd = '%s' && DelFlag = 0", array($usernum, $password)) -> select();
			//var_dump($info);
			
			if(!empty($info)){
				if($info[0]['State'] != '禁用'){
					session("UserNum", $info[0]["email"]);
					session("NickName", $info[0]['nickname']);
					session('TrueName', $info[0]['truename']);
					echo "success";
				}else{
					echo 'error2';
				}
				
			}else {
				echo "error1";
			}
			
		}
		catch(Exception $e){
			echo "0000000000000000000";
		}
		
	}
	
	/*
	 * 【展示修改个人信息页面】
	 * 
	 * 
	 * 
	 * */
	public function modifyUserInfo(){
// 		$this -> assign('Email', session('UserNum'));
// 		$this -> assign('TrueName' , session('TrueName'));
		//查找个人信息
		$user_model = D('CustomerInfo');
		$info = $user_model ->where("Email = '%s' && DelFlag = 0", array(session('UserNum'))) ->limit(1) -> select();
		//var_dump($info);
		//把个人信息传给模板
		$this -> assign('Info', $info);
		$this -> display('modifyuserinfo');
	}
	
	/*
	 * 【测试】
	 * 
	 * 
	 * 	
	 * */
	public function test(){
		var_dump(session());
		
		var_dump($_POST);
	}
	
	
	
	
	
	
	
}