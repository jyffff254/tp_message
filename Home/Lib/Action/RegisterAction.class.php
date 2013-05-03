<?php
// 本类由系统自动生成，仅供测试用途
class RegisterAction extends Action {
    public function reg(){
	$this->display();
    }
	//检查用户是否注册过
	public function checkname(){
		$username=$_GET['username'];
		$user = M('User');
		$where['username'] = $username;
		$count = $user->where($where)->count();
		if($count){
			echo '有人';
		}else{
			echo '没人';
		}
	}
	//注册方法
	public function doReg(){
		// 实例化User模型
		$User = D('User');
		// 根据表单提交的POST数据创建数据对象
		if(!$User->create()){
			$this->error($User->getError());
		}
		// 把创建的数据对象写入数据库
		$lastId = $User->add();

		if($lastId){
			$this->redirect('Index/index');
		}else{
			$this->error('再注册下试试');
		}
		
	}
}