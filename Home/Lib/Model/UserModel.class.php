<?php
	class UserModel extends Model{
		protected $_validate = array(
			array('code','require','验证码必须！'), //默认情况下用正则进行验证
			array('code','checkCode','验证码错误',0,'callback',1),
			array('username','','用户已经存在',0,'unique',1), 
			array('username','require','username必须！'), 
			array('username','/^\w{6,}$/','username6个字母以上！',0,'regex'), 
			array('repassword','password','确认密码不正确',0,'confirm'),
		);
		protected function checkCode($code){
			if(md5($code) != $_SESSION['code']){
				return false;
			}else{
				return true;
			}
		}
	}
?>