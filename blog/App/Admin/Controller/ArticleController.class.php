<?php
	namespace Controller;//所有的controller都统一一个命名空间为controller
	use \commonController;//为了继承commonController这个控制器
	use \Model\CategoryModel;//为了使用CategoryModel这个模型需要使用它的命名空间加类名
	use \Model\ArticleModel;//为了使用ArticleModel这个模型需要使用它的命名空间加类名
	use \Pagination;//为了使用分页这个类
	use \Myupload;//为了使用文件上传这个类
	use \MyImage;//为了使用缩略图这个类
	class ArticleController extends commonController{
		//下面是文章展示页面的函数
		public function index(){
			$curlpage=$_GET['curlpage']??1;//获取当前页面
			$search=$_GET['search']??'';
			$rowspage=10;//每页显示的数据数量为10条
			$model=new ArticleModel();//实例化文章操作数据库的模型
			$res=$model->getmessage($curlpage,$rowspage,$search);//获取当前页面的10条信息
			$this->view->assign('res',$res);//把这十条信息传入模板中，并在文章的index页面中展示出来
			$url="index.php?g=Admin&c=Article&a=index&search=$search";//这是要传入分页代码的url参数
			$totalrows=$model->getcount($search);//获取数据库中所有数据数
			$pagination=new Pagination();//实例化分页类
			$pagenum=$pagination->getnumber($url,$curlpage,$totalrows,$rowspage);//调用分页类中的函数进行分页
			$this->view->assign('message',$pagenum);//把信息传入模板中，在index中展示出来
			$this->view->assign('curlpage',$curlpage);//把分页后返回的关于html样式的字符串赋值到模板中显示出来
			$this->view->display('index.html');//展示的页面为index.html也就是文章首页
		}
		//这是一个展示文章添加界面的函数
		public function add(){
			$model=new CategoryModel();//实例化类别管理操作数据库的模型
			$res=$model->getallmessage();//获取类别管理数据库中的所有数据
			$this->view->assign('message',$res);//把类别管理数据库中的类别展现在模板上
			$this->view->display('add.html');//展示的页面为add.html也就是文章添加页面
		}
		//这是一个添加文章的函数
		public function insert(){
			$data['a_title']=$_POST['title'];//获取文章标题
			$data['c_id']=$_POST['cid'];//获取所属分类id
			$data['a_desc']=$_POST['desc'];//获取文章描述
			$data['a_content']=$_POST['content'];//获取文章内容
			$data['a_author']=$_SESSION['userInfo']['u_id'];//获取文章作者，这里存储的是用户的id
			// $data['a_author']=$_POST['author'];
			$data['tags']=$_POST['tags']??'';//获取文章关键词
			$data['a_time']=time();//文章发表或修改时间
			if($_FILES['MyFile']['size']>0){//判断是否上传了文件
				$MyFile=$_FILES['MyFile']; //获取上传文件的相关信息，可以var_dump出来看看具体有什么
				$maxsize=$GLOBALS['config']['maxsize'];//获得已经默认配置的允许用户上传图片的最大值信息
				$mimes=$GLOBALS['config']['mimes'];//获得已经默认配置的允许用户上传文图片的类型信息
				$dest=$GLOBALS['config']['dest'];//获得已经默认配置的允许用户上传文件的保存路径
				$saveName=Myupload::upload($MyFile,$maxsize,$mimes,$dest);//把获取的配置信息传入修改文件路径的函数中
				if($saveName){//判断用户图片上传是否成功
					$data["a_img"]=$saveName;//把图片保存路径复制给数组data
					//图片接收成功后马上进行缩略图处理
					$img=new MyImage();//实例化执行缩略图的类
					$file=$saveName;//把要执行缩略图操作的原图名称赋值给file
					$dw=$GLOBALS['config']['dw'];//获得配置文件中缩略图的默认宽度
					$dh=$GLOBALS['config']['dh'];//获得配置文件中缩略图的默认高度
					$path=$GLOBALS['config']['thumb'];//获得配置文件中缩略图的保存路径
					$thumbName=$img->thumb($file,$dw,$dh,$path);//执行缩略图操作
					$data['a_thumber']=$thumbName;//把所缩略图的绝对路径赋值给数组data

				}else{
					$data["a_img"]='default.jpg';//如果上传图片失败就默认给一张图片
					$data['a_thumber']='default.jpg';//如果缩略图失败就默认给一张图片
				
				}
			}else{
					$data['a_img']='default.jpg';//如果未上传图片就默认给一张图片
					$data['a_thumber']='default.jpg';//如果未上传图片就默认给一张图片
				}
			$model=new ArticleModel();//实例化文章操作数据库模型
			$res=$model->insert($data);//这里获取到了新增记录的id
			$tags=$_POST['tags']??'';//获得文章的关键字
			if(strlen($tags)){//判断文章关键字长度，也就是判断是否填写了关键字
				$arr=explode(',',$tags);//把关键字以逗号拆分成数组
				foreach($arr as $v){//遍历这个数组
					$t_id=$model->insertTag('$v');//把这个每个关键字都存入tags表中，因为pod定义的这个，my_insert()操作用会返回插入的id，所以这里这个$t_id就是每个关键字的插入id
					$model->insertArtTag($res,$t_id);//这个$res是新增文章的id这里把这个新增文章的id和它自己的关键字id结合起来了
				}
				// var_dump( $arr);exit;
			}
			//添加成功调转到文章列表
			header('Location:index.php?g=Admin&c=Article&a=index');
		}
		//这是一个关于删除数据库信息的函数
		public function del(){
			$id=$_GET['id']??0;//获取要删除的文章id
			$model=new ArticleModel();//实例化文章操作数据库模型
			$model->delete($id);//执行文章操作数据库模型内的删除操作
			header('Location:index.php?g=Admin&c=Article&a=index');
		}
		//这是一个对关于修改文章进行显示的操作的函数
		public function alt(){
			$id=$_GET['id'];//获得传过来要操作修改文章的id
			$model=new CategoryModel();//实例化类别管理操作数据库的模型，主要是为了显示修改前这个文章的分类
			$model2=new ArticleModel();//实例化文章操作数据库的类模型
			$res=$model2->getonemessage($id);//获得这个id的文章的全部信息
			$message=$model->getallmessage();//获得所有的分类信息
			$this->view->assign('res',$res);//把这个id的文章的全部信息都传入修改页面中，让修改的用户看到以前自己写的内容
			$this->view->assign('message',$message);//把分类信息传入修改页面中，显示以前的分类
			$this->view->display('modify.html');//要展示的页面为modify.html

		}
		//这是一个推荐文章的函数
		public function recommend(){
			$id=$_GET['id']??0;//获得要推荐文章的id
			$curlpage=$_GET['curlpage'];//获得要推荐文章页面的分页数；
			$model=new ArticleModel();//实例化文章操作数据库模型
			$model->recommend($id);//对要推荐的文章进行数据库操作
			header("Location:index.php?g=Admin&c=Article&a=index&curlpage=$curlpage");//推荐完后跳转到推荐文章所在的分页
		}
		//这是更新修改文章的操作
		public function update(){
			$data['a_title']=$_POST['title'];//文章标题
			$data['c_id']=$_POST['cid'];//所属分类id
			$data['a_desc']=$_POST['desc'];//文章描述
			$data['a_content']=$_POST['content'];//文章内容
			$data['a_author']=$_SESSION['userInfo']['u_id'];//文章作者，这里存储的是用户的id
			// $data['a_author']=$_POST['author'];
			$data['a_time']=time();//文章发表或修改时间
			if($_FILES['MyFile']['size']>0){//判断是否上传了文件
				$MyFile=$_FILES['MyFile']; //获取上传文件的相关信息，可以var_dump出来看看具体有什么
				$maxsize=$GLOBALS['config']['maxsize'];//获得已经默认配置的文件信息
				$mimes=$GLOBALS['config']['mimes'];
				$dest=$GLOBALS['config']['dest'];
				$saveName=Myupload::upload($MyFile,$maxsize,$mimes,$dest);//把获取的配置信息传入修改文件路径的函数中
				if($saveName){
					$data["a_img"]=$saveName;
					//图片接收成功后马上进行缩略图处理
					$img=new MyImage();
					$file=$saveName;
					$dw=$GLOBALS['config']['dw'];
					$dh=$GLOBALS['config']['dh'];
					$path=$GLOBALS['config']['thumb'];
					$thumbName=$img->thumb($file,$dw,$dh,$path);
					$data['a_thumber']=$thumbName;

				}else{
					$data["a_img"]='default.jpg';
					$data['a_thumber']='default.jpg';
				
				}
			}else{
					$data['a_img']='default.jpg';
					$data['a_thumber']='default.jpg';
				}
			$model=new ArticleModel();//实例化类
			$model->update($data);
			header('location:index.php?g=Admin&c=Articley&a=index');

		}
	}