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
	 * 【展示登录页面】
	 * 
	 */
	function  login(){
		extract($_REQUEST);
		$Referer;
		
		//先判断来源，然后把来源放到登录界面的隐藏域中，方便登录成功之后的跳转
		if(isset($referer) && !empty($referer)){
			$Referer = $referer;
		}else{
			$Referer = $_SERVER['HTTP_REFERER'];
		}
		
		$this -> assign('Referer', $Referer);
		$this->display();
	}
	
	
	/*
	 * 【生成验证码】
	 *
	 */
	private function  createCode($type){
		$config =    array(
 				'imageW' => 162,
// 				'imageH' => 30,
				'fontSize'    =>    20,    // 验证码字体大小
				'length'      =>    5,     // 验证码位数
				'useNoise'    =>    true, // 关闭验证码杂点
		);
	
		$img = new \Think\Verify($config);
		$img -> entry($type);
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
					
					echo  'success';
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
		if($this -> isLogin()){
	 		//$this -> assign('Email', session('UserNum'));
	 		//$this -> assign('TrueName' , session('TrueName'));
			//查找个人信息
			$user_model = D('CustomerInfo');
			$info = $user_model ->where("Email = '%s' && DelFlag = 0", array(session('UserNum'))) ->limit(1) -> select();
			//var_dump($info);
			//把个人信息传给模板
			$this -> assign('Info', $info);
			
			//读取问题
			$answer = D('FindPwdQuestionType') -> field("Question")-> where("DelFlag = 0") -> select();
// 			echo "<pre>";
// 			var_dump($answer);
// 			echo "</pre>";
			$this -> assign('Answer', $answer);
			$this -> display('modifyuserinfo');
		}else{
			//$this -> redirect('User/login', array(), 0, '页面跳转中。。。');
			redirect('/User/login?referer=/User/modifyUserInfo', 0, '页面跳转中...');
			//$this -> redirect('/User/login', array(''), 0, '页面跳转中。。。');
		}
	}
	
	/*
	 * 【判断是否登陆】
	 * 
	 *  已经登陆返回true
	 * 
	 *  没有登录返回false
	 * 
	 * */
	public function isLogin(){
		if(session('UserNum') != null){
			return true;
		}else{
			return false;
		}
	}
	
	/*
	 * 【用户退出系统】
	 * 
	 * 	注销session，跳转首页
	 * 
	 * 
	 * */
	public function exits(){
		//判断是否登陆，如果没有登录跳转登录页面
		if($this -> isLogin()){
			session('UserNum', null);
			session('NickName', null);
			session('TrueName', null);
			redirect('/Index/', 0, '页面跳转中...');
		}else{
			redirect('/User/login/', 0, '页面跳转中...');
		}
	}
	
	
	/*
	 * 【生成修改用户信息验证码】
	 * 
	 * 
	 * 
	 * */
	public function createModifyUserInfoCode(){
		$this -> createCode("ModifyUserInfoCode");
	}
	
	
	/*
	 * 【展示修改密码页面】
	 * 
	 * 
	 * 
	 * */
	public  function updatepwd(){
		$this -> display(); 
	}
	
	
	/*
	 * 【生成修密码验证码】
	 *
	 *
	 *
	 * */
	public function createUpdatePwdCode(){
		$this -> createCode("UpdatePwd");
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