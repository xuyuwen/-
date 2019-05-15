<?php
	//项目配置文件
	//方便个各类实例化PDO对象
	return [
		'db'=> ['type'=>"mysql",'host'=>'127.0.0.1','port'=>'3306','user'=>'root','pass'=>'admain','dbname'=>'blog','charset'=>'utf8'],//连接数据库的默认信息
		'width'=>100,//验证码画布的宽度
		'height'=>30,//验证码画布的高度
		'maxsize'=>1024*1024*3,//文件上传的最大限制
		'mimes'=>['image/jpeg','image/png','image/gif'],//文件上传的类型限制
		'dest'=>'f:/code/blog/App/Upload/Original',//文件上传的保存路径
		'dw'=>170,//缩略图的默认宽
		'dh'=>117,//缩略图的默认高
		'thumb'=>'f:/code/blog/App/Upload/Thumb'//文件上传的保存路径
	 ];