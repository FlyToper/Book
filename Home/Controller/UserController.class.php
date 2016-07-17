<?php
namespace Home\Controller;
use Think\Controller;
use Common\Common\Smtp;

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
			$info =  $user_model -> field('Email, NickName, State, TrueName') -> where("Email='%s' && UserPwd = '%s' && DelFlag = 0", array($usernum, md5($password))) -> select();
			//var_dump($info);
			
			if(!empty($info)){
				if($info[0]['State'] != '禁用'){
					session("UserNum", $info[0]["email"]);
					session("NickName", $info[0]['nickname']);
					session('TrueName', $info[0]['truename']);
					//e10adc3949ba59abbe56e057f20f883e
					//e10adc3949ba59abbe56e057f20f883e
					echo  'success';
				}else{
					echo 'error2';
				}
				
			}else {
				echo "error1";
			}
			
		}
		catch(Exception $e){
// 			echo "0000000000000000000";
			$this -> display("Public/_404");
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
	 * 【验证用户输入的验证码】
	 * 
	 * @access private
	 * @param $code 	用户输入的验证码
	 * @param $id		验证码类型
	 * @return boolean	返回值
	 * 
	 * */
	private function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	
	/*
	 * 【发送修改密码验证码】
	 * 
	 * @access private
	 * @param string 	收件人邮箱
	 * @return mixed
	 * 
	 * 
	 * */
	private function sendEmailCodeForUpdatePwd($email){
		$subject = "密码修改";
		$emailCode = $this->createRandomCode();//获取6位随机数
		session("UpdatePwd_EmailCode", $emailCode);//保存随机数到session
		
		//邮件主题内容
		$body = "你正在<span style='color:red;'>修改密码</span>，请输入如下邮箱验证码，如果非本人操作，请忽略！<br>";
		$body .= "验证码：";
		$body .= $emailCode;
		
		
		return $this-> executeSendEmailCode($email, $subject, $body);
		
	}
	
	/*
	 * 【产生随机数】
	 * 
	 * @access private
	 * @return string 	6位随机数
	 * 
	 * */
	private function createRandomCode(){
		for($i= 0; $i < 6; $i ++){
			$k = rand(1, 100);//获取随机数
			$number = $k % 10;//获取随机数除10的余数
			$random_code .= $number;	
		}
		
		return $random_code;
	}
	
	/*
	 * 【检查邮箱的验证码】
	 * 
	 * @access public
	 * @return string	返回验证结果
	 * 
	 * 
	 * */
	public function checkEmailCode(){
		extract($_REQUEST);//从数组中变量导入当前列表
		
		try{
			//判断验证类型是否为空
			if(isset($type) && !empty($type)){
				//判断验证码是否为空
				if(isset($code) && !empty($code)){
					//判断验证码的类型
					if($type == "UpdatePwd"){
						//判断验证码是否正确
						if(session("UpdatePwd_EmailCode") == $code){
							echo "success";
						}else{
							echo "error";
						}
					}else{
						$this -> display("Public/_404");
					}
				}else{
					$this -> display("Public/_404");
				}
			}else{
				$this -> display("Public/_404");
			}
		}catch(Exception $e){
			$this -> display("Public/_404");
		}
	}
	
	/*
	 * 【发送邮件】
	 * 
	 * 
	 * */
	public function sendEmailCode(){
		extract($_REQUEST);
		try{
			
			if($type == "updatePwd"){//发送密码修改验证码
				//判断验证码是否为空
				if(isset($txtSendEmailCode) && !empty($txtSendEmailCode)){
					//判断验证码是否正确
					if($this->check_verify($txtSendEmailCode, "UpdatePwd")){
						if(isset($email) && !empty($email)){
							if($this->sendEmailCodeForUpdatePwd($email)){
								//发送成功
								echo "success";
							}else{
								//发送失败
								echo "error2";
							}
						}else{
							$this -> display("Public/_404");//邮箱错误
						}
					}else{
						echo "error1";//验证码错误
					}
				}else{
					$this -> display("Public/_404");//验证码为空
				}
				
			}else{
				$this -> display("Public/_404");//没有验证码类型
			}
		}catch(\Exception $e){
			$this -> display("Public/_404");
			
		}
	}
	
	/*
	 * 【执行发送邮箱验证码】
	 * @access private
	 * @param string $smtpemailto	 收件人邮箱
	 * @param string $mailsubject	 邮件主题
	 * @param string $mailbody   	 邮件内容
	 * @param string $mailtype		 邮件格式
	 * @return boolean
	 * 
	 **/
	private function executeSendEmailCode($smtpemailto, $mailsubject, $mailbody, $mailtype = "HTML"){
		$config_mail = C('THINK_EMAIL');//获取配置信息
		$smtpserver     =     $config_mail['SMTP_HOST'];//SMTP服务器
		$smtpserverport =    $config_mail['SMTP_PORT'];//SMTP服务器端口
		$smtpusermail     =     $config_mail['FROM_EMAIL'];//SMTP服务器的用户邮箱
		$smtpuser         =     $config_mail['SMTP_USER'];//SMTP服务器的用户帐号
		$smtppass         =     $config_mail['SMTP_PASS'];//SMTP服务器的用户密码
		
// 		$smtpemailto     =     "874847721@qq.com";//发送给谁
// 		$mailsubject     =     "";//邮件主题
		$mailtime        =    date("Y-m-d H:i:s");
// 		$mailbody         =     "这是测试内容";//邮件内容
		
		$utfmailbody    =    iconv("UTF-8","GB2312",$mailbody);//转换邮件编码
// 		$mailtype         =     "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
		//return;
		//echo "s";
		
		$smtp = new Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
		$smtp->debug = FALSE;//是否显示发送的调试信息 FALSE or TRUE
		
		$ret = $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $utfmailbody, $mailtype);
		
		return  $ret;
	}
	
	/*
	 * 【执行更新密码】
	 * 
	 *@access public
	 *@return string 	返回执行结果
	 * */
	public function executeUpdatePwd(){
		if($this->isLogin()){
			extract($_REQUEST);
			
			try{
				if(isset($newPwd1) && !empty($newPwd2)){
					if(isset($newPwd1) && !empty($newPwd2)){
						if($newPwd1 == $newPwd2){
							$u = D("CustomerInfo");
							$rst = $u->updatePwd(session("UserNum"), $newPwd1);
							if($rst === false){
								echo "error1";
							}else{
								if($rst > 0){
									echo "success";
								}else{
									echo "error1";
								}
							}
						}else{
							echo "error2";
						}
					}else{
						echo "error1";
					}
				}else{
					echo "error1";
				}
					
				
			}catch(Exception $e){
				$this -> display("Public/_404");
			}
		}else{
			redirect('/User/login?referer=/User/updatepwd', 0, '页面跳转中...');
		}
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