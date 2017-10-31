<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ThinkPHP框架实例--模板</title>
</head>
<body>
	<h1>ThinkPHP框架实例--模板 只负责输出</h1>
	<ul>
		<li>输出变量$name: <?php echo ($name); ?></li>
		<li>输出数组<?php echo ($stu['name']); ?>:<?php echo ($stu["sex"]); ?></li>
		<li>默认值输出 你好: <?php echo ((isset($_GET['name2']) && ($_GET['name2'] !== ""))?($_GET['name2']):"游客"); ?></li>
		<li>输出POST方式传的值<?php echo ($_POST['num']); ?>: <?php echo ($_POST['num']+200); ?></li>
		<li>输出系统的函数<?php echo date("Y-m-d");?></li>
		<li>输出自定义函数<?php echo aa();?></li>
	</ul>
	<h2>模板替换</h2>
	<ul>
		<li>当前网站的地址（不含域名） _ _ROOT_ _:/shphp046_C/28_thinkphp04/demo</li>
		<li>当前应用(项目)地址_ _APP_ _:/shphp046_C/28_thinkphp04/demo/index.php</li>
		<li>当前模块的URL地址 （不含域名）_ _MODULE_ _：/shphp046_C/28_thinkphp04/demo/index.php/Home</li>
		<li>当前控制器的url地址_ _CONTROLLER_ _:/shphp046_C/28_thinkphp04/demo/index.php/Home/Index</li>
		<li>当前控制器的url地址_ _URL_ _:/shphp046_C/28_thinkphp04/demo/index.php/Home/Index</li>
		<li>当前操作的url_ _ACTION_ _:/shphp046_C/28_thinkphp04/demo/index.php/Home/Index/demo</li>
		<li>当前的页面URL_ _SELF_ _:/shphp046_C/28_thinkphp04/demo/index.php/Home/Index/demo/p/1</li>
		<!-- self可以含当前页面的参数 而action不可以  -->
		<li>当前公共目录URL地址 _ _PUBLIC_ _:/shphp046_C/28_thinkphp04/demo/Public</li>
	</ul>
</body>
</html>