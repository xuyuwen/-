<?php
	namespace Model;
	use \Model;
	class CategoryModel extends Model{
		//下面这个函数是把数据库中的数据全部取出来的函数
		public function getallmessage($exclude=null){//一般操作时都不会传数据，只有进行修改分类操作时才传数据，为了只显示当前分类的父类和别的类不显示自己的子类
			$sql="select * from category";
			 $date=$this->db->fetch_all($sql);
			 return $this->getTree($date,0,0,$exclude);

		}
		//下面这个函数是一个把添加类别中的信息插入数据库的方法
		public function insert($data){
			extract($data);//将数组中的元素转换为变量方便下面的插入操作；
			$sql="insert into category(c_name,c_desc,c_pid,c_sort,c_time) values('$c_name','$c_desc','$c_pid','$c_sort','$c_time')";
			return $this->db->my_insert($sql);
		}
		//因为所有类别的文章是有分类的，所以这个函数是判断所要删除的文章是否有子分类，有的话则不能删除
		public function haschild($id){
			//子父分类的规则是子类别的c_pid为父类别的id；
			$sql="select * from category where c_pid=$id";
			return $this->db->fetch_one($sql);
		}
		public function del($id){
			$sql="delete from category where c_id=$id";
			return $this -> db->my_insert($sql);
		}
		//为了能清楚的分出是否为子分类，在显示的时候子分类紧跟父分类就好
		//所以这个函数是为了对类别进行无限级分类处理
		protected function getTree($date,$c_pid=0,$lv,$exclude=null){//这个$exclude是后来加上去的，为了实现类别管理
			//里面的修改逻辑
			static $arr=[];//定义一个空数组
			foreach($date as $v){//遍历从数据库中查询出来的所有数据
				if($v['c_pid']==$c_pid){//查找用户传入的数据为c_pid的数据，如果有就放入数组中
					if($v['c_id']==$exclude){//如果数据里面的id和要修改的id一致，则继续运行循环，不让它输入数组中
						//你会发现他的子类也无法输入，这符和了修改的逻辑只能修改成当前的父类和别的类
						//所以修改操作时的遍历数据库数据时不会在所属类别中显示当前类和父类
						continue;
					}
					$v['lv']=$lv;//数组中的每行数据添加一个lv，代表等级的意思，只有调用了自身的函数才会加1；
								//方便展示类别时缩进，使得类别一目了然
					$arr[]=$v;//如果有就放入数组中
					$this->getTree($date,$v['c_id'],$lv+1,$exclude);//调用自己，遍历出自己的子类，lv+1；区分等级
				}
			}
			return $arr;//返回这个数组
		}
		//获得传入id的分类信息
		public function getrow($id){
			$sql="select * from category where c_id=$id";
			return $this->db->fetch_one($sql);
		}
		//这是一个对分类进行跟新的函数
		public function update($data){
			extract($data);//将数组中的元素转换为变量方便下面的插入操作
			$sql="update category set c_name='$c_name',c_desc='$c_desc',c_pid='$c_pid',c_sort='$c_sort',c_time='$c_time' where c_id=$id";
			return $this->db->my_insert($sql);
		}
		//这是一个判断当前分类是否有子类的函数
		public function haschilds($id){
			$sql="select c_id,c_name from category where c_pid=$id";
			return $this->db->fetch_all($sql);

		}

	}