<?php
Class TagLibMessage extends TagLib{
	protected $tags   =  array(
	// 定义标签
		'code'=>array('attr'=>'width,height','close'=>0), // input标签
	);
	public function _code($attr)   {
        $tag    = $this->parseXmlAttr($attr,'code');
        $width   =   $tag['width']?$tag['width']:25;
        $height    =    $tag['height']?$tag['height']:20;
		$str = "<img src='__APP__/Public/code?w={$width}&h={$height}' onclick='this.src=this.src+\"?\"+Math.random()' alt=\"点击刷新\" title=\"点击刷新\"/>";
        return $str;
    }

}

?>