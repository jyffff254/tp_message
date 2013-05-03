<?php
	Class CommonAction extends Action{
		Public function _initialize(){
		// 初始化的时候检查用户权限
			if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
				$this->redirect('Login/login');//重定向到login模块的login方法，其实只有Login类没有login方法也是能调用到view的
			}
		}
	}
?>