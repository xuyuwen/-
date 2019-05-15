<?php
	//框架初始化类文件
	//这个文件完成项目的重复性代码
	class Frame{
		//设置显示编码
		private static function setChar(){
			header('Content-type:text/html;charset=utf-8');
		}
		private static function loadConfig(){
			//为了能让其他类用到配置文件内的信息
			//所以将配置文件中的数据保存在所有类都能访问到的超全句变量$GLOBALS
			$GLOBALS['config'] = include './Frame/Config/Config.php';
		}
		//设置开启session
		private static function startSession(){
			session_start();
		}
		//设置错误处理方法
		private static function setError(){
			//开启错误处理
			ini_set('display_errors','On');
			//设置错误报告，显示所有错误
			ini_set('error_reporting',E_ALL);
		}
		//解析url
		private static function analyUrl(){
			//分析url中的g,c,a
			$g=$_REQUEST['g']??'Home';
			$c=$_REQUEST['c']??'Index';
			$a=$_REQUEST['a']??'index';
			//把分析出来得url定义成常量方便后面的调用
			define('G',$g);
			define('C',$c);
			define('A',$a);
		}
		//定义目录常量
		private static function setDIR(){
			define('DIR_MODEL',APP_PATH.'/'.'Model');
			//定义前台或后台的根目录
			define('DIR_ROOT',APP_PATH.'/'.G);
			//定义控制器目录
			define('DIR_CONTR',DIR_ROOT.'/'.'Controller');
			define('DIR_VIEW',DIR_ROOT.'/'.'View');
			define('DIR_RUNT',APP_PATH.'/Runtime');


			//定义框架目录常量
			define('FRAME_ROOT','./Frame');
			define('FRAME_CORE',FRAME_ROOT.'/'.'Core');
			define('FRAME_VENDOR', FRAME_ROOT.'/'.'Vendor/Smarty');

		}
		//设置自动加载
		private static function autoLoad(){
			spl_autoload_register([__CLASS__,'loadController']);
			spl_autoload_register([__CLASS__,'loadModel']);
			spl_autoload_register([__CLASS__,'loadCore']);
			spl_autoload_register([__CLASS__,'loadSmarty']);
		}
		private static function loadController($cls){
			$cls=basename($cls);
			$file=DIR_CONTR.'/'.$cls.'.class.php';
			if(file_exists($file)){
				include $file;
			}
		}
		private static function loadModel($cls){
			$cls=basename($cls);//由于$cls里面加了命名空间，在自动加载类得时候要清除空间名，否则找不到那个类
			//$cls=substr(strrchr($cls,'\\'),1);建议使用这个函数去除命名空间，上面那个basename在liux系统上会出错
			$file=DIR_MODEL.'/'.$cls.'.class.php';
			if(file_exists($file)){
				include $file;
			}
		}
		private static function loadCore($cls){
			// $cls=basename($cls);//由于$cls里面加了命名空间，在自动加载类得时候要清除，否则找不到那个类
			$file=FRAME_CORE.'/'.$cls.'.class.php';
			if(file_exists($file)){
				include $file;
			}
		}
		private static function loadSmarty($cls){
			//注销core和smarty里面的空间截取，因为这是第三方的类不好给它加空间名
			// $cls=basename($cls);//由于$cls里面加了命名空间，在自动加载类得时候要清除，否则找不到那个类
			$file=FRAME_VENDOR.'/'.$cls.'.class.php';
			if(file_exists($file)){
				include $file;
			}
		}
		//发送请求（实例化控制器类，并调用方法
		private static function dispatch(){
			//拼接上这个Controller是为了在访问时输入c=...的时候少输入一个contorller；
			$c='\\Controller\\'.C.'Controller';//由于在Controller类中使用了命名空间所以在调用得时候需要使用空间名；
			$a=A;
			$fun=new $c;
			$fun->$a();
		}
		
		public static function run(){
			//调用框架的所有功能
			//请注意这里调用的时候有先后顺序的
			self::setChar();
			self::setError();
			self::loadConfig();
			self::startSession();
			self::analyUrl();
			self::setDIR();
			self::autoLoad();
			self::dispatch();
			
		}
	}