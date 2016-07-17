<?php
namespace Home\Model;
use Think\Model;
class CustomerInfoModel extends  Model{
	protected $trueTableName    =   'customerinfo';
	
	public function updatePwd($email, $newPwd){
		$this-> UserPwd = md5($newPwd);
		
		//返回受影响行数
		return $this->where("Email = '".$email."'")->save();
	}
}