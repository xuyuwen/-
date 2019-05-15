<?php
	namespace Controller;
	use \Controller;
	use \Model\ArticleModel;
	use \erweima;
	class IndexController extends Controller{
		//展示推荐文章页面的函数
		public function Index(){
			$model=new ArticleModel();//实例化文章操作数据库模型
			$res=$model->getRecommend();//调用获得推荐文章的函数，并接受返回值
			$qrcode=new erweima();//实例化二维码类
			$url='https://www.baidu.com';//传入二维码内容的url也可以用具体内容代替
			$image=$qrcode->scerweima1($url);//调用生成二维码的函数
			$this->view->assign('img',$image);//把生成的二维码放入展示界面模板
			$this->view->assign('recommend',$res);//把获得的推荐文章展示在模板上
			$this->view->display('index.html');//展示页面为index.html
		}
	}