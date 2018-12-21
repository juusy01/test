<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<script type="text/javascript" src="<?php echo (STATIC_JS); ?>jquery.min.js"></script>
	<title></title>
</head>
<body>
<form action="/0331/index.php/Home/User/login" method="post">
  用户名：<input type="text" name="username" id="username" /><br/>
  密码：<input type="password" name="password" id="password" /><br>
  <input type="submit" value="提交" />
</form>	
</body>
</html>