<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta http-equiv="content-type" content="text/html,charset=utf-8">
		<title>TOP</title>
	</head>
	<body>
		<h1>你想说什么就留言系统</h1>
		<p>欢迎您，<?php echo ($_SESSION['username']); ?> <a href='__APP__/Login/doLogout' target='_top'> 退出 </a></p>
	</body>
</html>