<?php
	namespace Controller;
	use \Controller;
	use \Model\ArticleModel;
	use \Model\CategoryModel;
	use \Pagination;
	class ArticleController extends Controller{
		//这是一个home中生活纪实页面展示函数
		public function index(){
			$id=$_GET['id']??0;//获得url中的id信息为了显示生活纪实页面，其实每个页面都含了默认id具体要去home中的common的menu.html中取查看
			$curlpage=$_GET['curlpage']??1;//获取url中的分页id信息
			$rowspage=10;//分页中每页展示的数据数为10条
			$model=new CategoryModel();//实例化分类操作数据库模型
			$res=$model->haschilds($id);//判断是否含有子类，并取出所有子类信息
			$ids="$id,";//自所以字符串化加逗号是因为方遍与子类文章c_id拼接在一起
			foreach($res as $v){//把子类信息中的文章c_id遍历出来
				$ids.=$v['c_id'].',';
			}
			$ids=rtrim($ids,',');//因为拼接完后会多一个逗号所以需要用这个函数去除
			$art=new ArticleModel();//实例化文章操作数据库类
			$date=$art->getcidmessage($ids,$curlpage,$rowspage);//这个ids是为了执行数据库操作时取出在这个集合内限定数量的文章（分页用的）
			$totalrows=$art->getAcount($ids);//获得在这个集合内的文章的数量
			$url="index.php?g=Home&c=Article&a=index&id=1";//传入分页函数的url方便点击时的跳转
			$pagination=new Pagination();//实例化分页类
			$pagenum=$pagination->getnumber($url,$curlpage,$totalrows,$rowspage);//对在这个集合内的文章进行分页，看不懂的话可以看看封装的pagination类
			$this->view->assign('message',$pagenum);//把分页返回的html字符串信息显示在模板上
			$this->view->assign('arr',$res);//把子类信息显示在模板上方便遍历出有用的信息
			$this->view->assign('date',$date);//把限定的10条文章显示在模板上
			$this->view->display('index.html');//展现的页面为生活纪实页面
		}
		//这是一个展示阅读全文的html页面
		public function show(){
			$id=$_GET['id']??0;//获得要阅读全文的文章id
			$curlpage=$_GET['curlpage']??1;//获得分页的页面id
			$rowspage=10;//分页中每页展示的数据数为10条
			$model=new ArticleModel();//实例化文章操作数据库模型
			$pagination=new Pagination();//实例化分页类
			$totalrows=$model->getRcount($id);//获的所有这篇文章的评论数量
			$url="index.php?g=Home&c=Article&a=show&id=$id";//传入分页函数的url使评论那里分页显示
			$pagenum=$pagination->getnumber($url,$curlpage,$totalrows,$rowspage);//调用分页函数，并接收返回值
			$model->updateclick($id);//每次调用show这个函数就让数据库里面的click+1，统计访问量
			$art=$model->getmessagebyid($id);//获取用户点击的阅读全文的这篇文章所有信息
			$pre=$model->getpre($id);//获得这篇文章的上一篇文章的信息
			$next=$model->getnext($id);//获得这篇文章的下一篇文章的信息
			// var_dump($art);exit;
			$assoc=$model->getAssoc($id);//获取这篇文章的相关文章的信息
			$reply=$model->getreply($id,$curlpage,$rowspage);//获取这篇文章的评论信息
			$this->view->assign('pagenum',$pagenum);//把分页信息展示在模板上
			$this->view->assign('reply',$reply);//把评论信息展示在模板上
			$this->view->assign('assoc',$assoc);//把关键字相同的相关联的文章信息展示在模板上
			$this->view->assign('pre',$pre);//把这篇文章的上一篇文章展示在模板上
			$this->view->assign('next',$next);//把这篇文章的下一篇文章展示在模板上
			$this->view->assign('art',$art);//把这篇文章的信息展示在模板上
			$this->view->display('show.html');//展示页面为show页面
		}
		//这是一个获得用户评论的内容的函数
		public function addcomment(){
			$data['r_content']=$_POST['content']??" ";//获得传过来的评论内容
			$data['r_time']=time();//获得评论时间
			$data['u_id']=$_POST['userid']??0;//获得评论者的id
			$data['a_id']=$_POST['artid']??0;//或的评论这篇文章的id
			$id=$_POST['artid']??0;//这也是获取这篇文章的id，这要为了下面跳转时跳转到对应文章
			$model=new ArticleModel();//实例化文章炒作数据库模型
			$model->insertreply($data);//调用插入用户评到评论表中的函数
			header("location:index.php?g=Home&c=Article&a=show&id=$id");//调准到该篇文章的阅读全文界面
		}
	}
