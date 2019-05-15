<?php
	namespace Controller;
	use \Model\CategoryModel;
	use \commonController;
	class CategoryController extends commonController{
		//实现添加类别的新增
		public function insert(){
			$data['c_name']=$_POST['cname']??'';//获得类别的名称
			$data['c_pid']=$_POST['pid']??'';//这个c_pid的值是其父分类的c_id
			$data['c_desc']=$_POST['cdesc']??'';//获得分类的描述信息
			$data['c_sort']=$_POST['csort']??'';//获得分类的排行
			$data['c_time']=time();//获得时间戳
			//插入数据
			$model=new CategoryModel();
			$model->insert($data);
			header('location:index.php?g=Admin&c=Category&a=index');

		}
		//展示类别管理页面
		public function index(){
			//实现CategoryModel里面的类
			$model=new CategoryModel();
			//调用这个类中的取出所有数据的方法
			$res=$model->getallmessage();
			//把取出的数据赋值给smarty中的变量，方便在index.html中的遍历所有类别
			$this->view->assign('message',$res);
			$this->view->display('index.html');
		}
		//展示类别管理页面中的添加类别页面
		public function add(){
			$model=new CategoryModel();
			//调用这个类中的取出所有数据的方法
			$res=$model->getallmessage();
			//把取出的数据赋值给smarty中的变量，方便在add.html中的遍历所有选项
			$this->view->assign('message',$res);
			$this->view->display('add.html');
		}
		public function del(){
			$id=$_GET['id']??0;//传入要删除的id
			$model=new CategoryModel();//实例化类
			$res=$model->haschild($id);//调用类里面的方法看否有子类
			if($res){
				$mess='当前分类有子分类不允许删除';//这里设置这三个参数是为了调用父类Controller里面的失败跳转方法
				$second=3;
				$url='index.php?g=Admin&c=Category&a=index';
				$this->error($mess,$url,$second);//这里对父类里面的error方法进行调用
				exit;//结束代码的运行
			}
			$model->del($id);
			header('location:index.php?g=Admin&c=Category&a=index');
		}
		//这是实现修改时显示的界面参数的函数
		public function alt(){
			$id=$_GET['id']??0;//传入要修改的id
			$model=new CategoryModel();//实例化类
			$res=$model->getrow($id);//获取这个要修改id的数据，显示在modify.html页面中，提升用户体验感
			$result=$model->getallmessage($id);//调用获取全部数据的方法这个id是传入$exclude中
			$this->view->assign('message',$result);//把数据赋值给smarty模板中
			$this->view->assign('row',$res);
			$this->view->display('modify.html');
		}
		public function update(){
			$data['c_name']=$_POST['cname']??'';
			$data['c_pid']=$_POST['pid']??'';
			$data['c_desc']=$_POST['cdesc']??'';
			$data['c_sort']=$_POST['csort']??'';
			$data['c_time']=time();
			$data['id']=$_GET['id']??0;//传入要更新的id
			$model=new CategoryModel();//实例化类
			$model->update($data);
			header('location:index.php?g=Admin&c=Category&a=index');

		}
	}
		