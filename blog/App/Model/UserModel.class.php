<?php
	namespace Model;
	use \Model;
	class UserModel extends Model{
		//下面是跟新用户信息
		function updateInfo($u_id){
			$time=time();
			$ip=$_SERVER['REMOTE_ADDR'];//获取用户的ip地址
			$sql='update user set last_time=$time last_ip="$ip" where u_id=$u_id ';
			return $this->db->my_insert($sql);

		}
		//下面是获取用户数据
		function verify($u_name){
			$u_name=addslashes($u_name);//这就相当于给用户输入的东西加了反斜杠，之所以要这样是因为如果用户名输入 ' or # r
			//然后随便输入密码就可以登录了 
			$sql="select * from user where u_name= '$u_name' ";
			return $this->db->fetch_one($sql);
		}
	
	}