<?php
	class Controller{
		//由于任何一个控制器的方法在将处理结果返回时，都需要以html界面的形式返回。而回显页面需要视图类。
		//为了代码的复用，创建一个控制器父类。
		protected $view=null;
		function __construct(){
			$this->view=new View();
		}
		//任何一个控制器的方法在处理完请求后，都可能进行跳转，所以在控制器的父类中添加跳转的方法
		protected function success($mess,$url,$second){
			$this->view->assign('mess',$mess);
			$this->view->assign('url',$url);
			$this->view->assign('second',$second);
			$this->view->display(FRAME_ROOT.'/Common/success.html');
		}
		protected function error($mess,$url,$second){
			$this->view->assign('mess',$mess);
			$this->view->assign('url',$url);
			$this->view->assign('second',$second);
			
			$this->view->display(FRAME_ROOT.'/Common/error.html');
		}
	}