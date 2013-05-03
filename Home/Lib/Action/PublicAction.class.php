<?php
class PublicAction extends Action{
	Public function code(){
		$w=(isset($_GET['w']))?$_GET['w']:25;
		$h=(isset($_GET['h']))?$_GET['h']:20;
		import('ORG.Util.Image');
		Image::buildImageVerify(4,1,'png',$w,$h,'code');
	}
}
?>