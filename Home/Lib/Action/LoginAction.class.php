<?php
// 本类由系统自动生成，仅供测试用途
class LoginAction extends Action {
    public function login(){
		$this->display();
    }
	public function doLogin(){
		//接收值，判断用户在数据库是否存在，存在则允许登录，不存在则显示错误
		$username=$_POST['username'];
		$password=$_POST['password'];
		$code=$_POST['code'];
		if($_SESSION['code'] != md5($_POST['code'])) {
			$this->error('验证码错误！');
		}
		$user = M('User');
		$where['username'] = $username;
		$where['password'] = $password;
		$arr=$user->field('id')->where($where)->find();
		if($arr>0){
			$_SESSION['username']=$username;
			$_SESSION['id'] = $arr['id'];
			$this->success('用户登录成功',U('Index/index'));
		}else{
			$this->error('用户不存在或密码错误');
		}
	}
	public function doLogout(){
		$_SESSION=array();
		if(isset($_COOKIE[session_name()])){
			setcookie(session_name(),'',time()-1,'/');
		}
		session_destroy();
		//$this->redirect('Index/index');
		$this->redirect('Login/login');
	}
}