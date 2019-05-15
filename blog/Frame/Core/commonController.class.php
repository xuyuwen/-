<?php
	class commonController extends Controller{
		public function __construct(){
			parent::__construct();
			if(!isset($_SESSION['userInfo'])){
				$mess='非法登录';//这里设置这三个参数是为了调用父类Controller里面的失败跳转方法
				$second=3;
				$url='index.php?g=Admin&c=Privilege&a=login';
				$this->error($mess,$url,$second);//这里对父类里面的error方法进行调用
				exit;//结束代码的运行
			}
		}
	}