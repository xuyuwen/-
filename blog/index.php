<?php
	//入口文件
	//定义一个目录常量
	define('APP_PATH','./App');
	//引入框架初始化文件
	include './Frame/Core/Frame.class.php';

	//调用Frame类中的功能
	Frame::run();
	