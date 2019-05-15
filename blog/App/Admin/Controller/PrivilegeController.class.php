<?php
	//这是一个登录验证控制器
	namespace Controller;//定义一个命名空间
	use \Controller;//因为要使用Controller父类，所以使用根目录加类名的方式调用
	use \Model\UserModel;//因为要调用UserModel，所以要使用命名空间加类名地方式
	use \ValidateChar;

	class PrivilegeController extends Controller{//定义一个新的类并继承Controller父类
		//调用生成验证码类
		public function createValidate(){
			$w=$GLOBALS['config']['width'];//调用默认配置信息config.php里面的宽度
			$h=$GLOBALS['config']['height'];
			$validate=new ValidateChar();//实例化生成验证码的类
			$validate->Vchar($w,$h);	//调用类里面的生成验证码的函数
			//登录界面里面的验证码地址要指向index.php?g=Admin&c=Privilege&a=createValidate

		}
		public function verify(){
			//接收从login界面传过来的数据
			$u_name=$_POST['uname']??'';
			$u_pass=$_POST['upass']??'';
			//接受验证码信息
			$u_verify=$_POST['verify']??'';
			//对验证码进行验证
			if(strtolower($u_verify)!=strtolower($_SESSION['str'])){
				$mess='请输入正确的验证码';//这里设置这三个参数是为了调用父类Controller里面的失败跳转方法
				$second=3;
				$url='index.php?g=Admin&c=Privilege&a=login';
				$this->error($mess,$url,$second);//这里对父类里面的error方法进行调用
				exit;//结束代码的运行
			}
			//对数据进行验证
			if(!$u_name || !$u_pass){
				$mess='用户名密码不能为空';//这里设置这三个参数是为了调用父类Controller里面的失败跳转方法
				$second=3;//设置core里面controller父类里面的成功或失败的跳转页面的时间
				$url='index.php?g=Admin&c=Privilege&a=login';
				$this->error($mess,$url,$second);//这里对父类里面的error方法进行调用
				exit;//结束代码的运行
			}
	   	 	$user = new UserModel();//实例化UserModel这个类
	   	 	$userInfo = $user -> verify($u_name);//调用实例化类里面的验证方法
			//匹配用户的密码是否正确
			//这里用户的密码是利用password_hash()这个函数加密的;
			//password_verify()这个函数专门用来验证上面那个函数加密的密码。
	   		 if(!password_verify($u_pass,$userInfo['u_pwd'])){
	    		$mess = "请检查用户名与密码";
	    		$url = "index.php?g=Admin&c=Privilege&a=login";
	    		$second = 3;
	    		$this -> error($mess,$url,$second);
	    		exit;
	   		 }
	   		 $_SESSION['userInfo']=$userInfo;//把用户信息放入session中用来防止翻墙
			header('Location:index.php?g=Admin&c=Index&Index');//跳转到这个界面
		}

			public function login(){
				$this->view->display('login.html');//展示登陆页面
			}
			public function loginout(){
				session_destroy();//推出登陆时把session销毁
				header('location:index.php?g=Admin&c=Privilege&a=login');

			}
	}