<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content-type" content="text/html,charset=utf-8">
		<title>Left</title>
	</head>
	<body>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>留言题目:<?php echo ($vo["title"]); ?><br>
			留言内容：<?php echo ($vo["content"]); ?><br>
			留言时间：<?php echo (date("Y-m-d h:i:s",$vo["time"])); ?><br>
			留言人：<?php echo ($vo["username"]); ?><br>
			附件名：<?php echo ($vo["filename"]); ?><br>
			<hr/><?php endforeach; endif; else: echo "" ;endif; ?>
		<?php echo ($page); ?>
	</body>

</html>