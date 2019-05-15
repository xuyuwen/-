<?php
	class Model{
		protected $db=null;//设置一个受保护的变量，用来存储这个创建的对像
		public function __construct(){
			//因为frame.class.php里面把配置文件里面的信息赋值给了超全局变量$GLOBALS里面，这里把它取出来
			$config=$GLOBALS['config']['db'];
			$this->db=new MyPDO($config);//把取出的数据当成参数传入PDO中去实例化对象
		}
	}