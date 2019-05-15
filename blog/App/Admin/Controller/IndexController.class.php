<?php
	namespace Controller;
	use \commonController;

	class IndexController extends commonController{
		public function Index(){//这个函数是用来展示admain的首页的信息的函数
			$this->view->display('index.html');
		}
	}