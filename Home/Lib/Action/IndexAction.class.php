<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
	//判断用户是否登陆过 通过session
		$this->display();
    }
	public function top(){
		$this->display();
	}
	public function left(){
		//获取message表中的所有数据
		$message = D('Message');
		import('ORG.Util.Page');// 导入分页类
		$count = $message->count();// 查询满足要求的总记录数
		$lim = 5;//每页多少记录
		$Page = new Page($count,$lim);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','条留言');
		$show = $Page->show();// 返回分页信息
		$arr = $message->relation('User')->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		//dump($arr);
		$this->assign('list',$arr);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}
	public function right(){
		$this->display();
	}
}