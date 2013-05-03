<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html,charset=utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/BASIC.CSS" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/login.CSS" />
	<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
	<script>
		$(function(){
			$('img[title="login"]').click(function(){
				$('form[name="myForm"]').submit();
			});
			$('img[class="register"]').click(function(){
				window.location='__APP__/Register/reg';
			});
		});
	</script>
</head>
<body>
	<form action='__URL__/doLogin' method='POST' name='myForm'>
		用户名：<input type="text" name='username'/><br>
		密　码：<input type="password" name='password'/><br>
		验证码：<input type='text' name='code'  />
		<!-- alt只能在IE显示，要在其他浏览器显示需要同时加title ；onclick事件加random是为了解决IE浏览器使用缓存的问题-->
		<img src='__APP__/Public/code/' onclick="this.src=this.src+'?'+Math.random()" alt="点击刷新验证码" title="点击刷新验证码"/><br/>
		<img src='__PUBLIC__/Image/login.gif' title='login' class="submit"/>
		<img src='__PUBLIC__/Image/register.gif' class="register" />
	</form>
</body>
</html>