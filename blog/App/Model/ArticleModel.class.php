<?php
	namespace Model;
	use \Model;
	class ArticleModel extends Model{
		//这是一个关于文章插入操作的函数
		public function insert($data){
			extract($data);//将数组中的元素转换为变量方便下面的插入操作；
			$sql="insert into article(a_title,a_content,a_desc,a_author,c_id,a_time,a_img,a_thumber,tags) values('$a_title','$a_content','$a_desc','$a_author','$c_id','$a_time','$a_img','$a_thumber','$tags')";
			$this->db->my_insert($sql);
			return $this->db->insert_id();
		}
		//这是一个关于获取文章全部数据的函数
		public function getallmessage(){
			$sql="select * from article";
			return $this->db->fetch_all($sql);
		}
		//这是获取具体那篇文章的操作
		public function getonemessage($id){
			$sql="select * from article where a_id=$id";
			return $this->db->fetch_one($sql);
		}
		//这是一个关于删除数据的函数
		public function delete($id){
			$sql="delete from article where a_id=$id";
			return $this->db->my_insert($sql);
		}
		//这是一个关于获取分页当前页面数据的函数
		public function getmessage($curlpage,$rowspage,$search){
			$offset=($curlpage-1)*$rowspage;//获取当前页面以前的所有数据的数量
			$sql="select * from article where a_title like '%$search%' limit $offset,$rowspage";//在当前页面显示10条数据
			return $this->db->fetch_all($sql);
		}
		//这是一个获取数据库总数据数的函数，为了分页操作
		public function getcount($search){
			$sql="select count(*) as count from article where a_title like '%$search%' ";//查询标题含有搜索信息的文章数量
			$arr=$this->db->fetch_one($sql);
			return $arr['count'];

		}
		//这是对推荐文章数据字段进行操作的函数
		public function recommend($id){
			$sql="update article set a_recommend=a_recommend^1 where a_id=$id";//a_recommend^1这是一个位运算使它的值一直在0，1变化
			return $this->db->my_insert($sql);
		}
		//这是一个获得推荐文章的操作
		public function getRecommend(){
			// $sql="select * from article where a_recommend=1 limit 8";
			$sql="select art.*,cat.c_name,user.u_name from article as art inner join category as cat inner join user where art.c_id=cat.c_id and art.a_author=user.u_id and art.a_recommend=1 limit 8";
			return $this->db->fetch_all($sql);
		}
		//这是一个更新文章的操作
		public function update($data){
			extract($data);
			$sql="update article set a_title='$a_title',a_content='$a_content',a_desc='$a_desc',a_author='$a_author',c_id=$c_id,a_time=$a_time,a_img='$a_img',a_thumber='$a_thumber'";
			return $this->db->my_insert($sql);
		}
		
		//这是一个获得用户点击阅读全文那篇文章的信息函数
		public function getmessagebyid($id){
			// $sql="select * from article where a_id=$id";
			$sql="select art.*,cat.c_name,user.u_name from article as art inner join category 
			as cat inner join user where art.c_id=cat.c_id and art.a_author=user.u_id and art.a_id=$id";
			return $this->db->fetch_one($sql);
		}
		//这个函数是为了获取生活纪实类及其子类的文章并进行分页
		public function getcidmessage($ids,$curlpage,$rowspage){
			$offset=($curlpage-1)*$rowspage;
			// $sql="select * from article where c_id in ($ids) limit $offset,$rowspage";
			$sql="select art.*,cat.c_name,user.u_name from article as art inner join category as cat inner join user where art.c_id=cat.c_id and art.a_author=user.u_id and art.c_id in ($ids) limit $offset,$rowspage";
			return $this->db->fetch_all($sql);
		}
		//获取生活纪实类及其子类的文章的总数量
		public function getAcount($ids){
			$sql="select count(*) as num from article where c_id in ($ids)";
			$arr= $this->db->fetch_one($sql);
			return $arr['num'];
			
		}
		//这是一个统计文章访问量的函数
		public function updateclick($id){
			$sql="update article set a_click=a_click+1 where a_id=$id";
			return $this->db->my_insert($sql);
		}
		//获取用户点击阅读全文那篇文章的上一篇文章的信息
		public function getpre($id){
			$sql="select * from article where a_id<$id order by  a_id desc limit 1";
			return $this->db->fetch_one($sql);
		}
		//获取用户点击阅读全文那篇文章的下一篇文章的信息
		public function getnext($id){
			$sql="select * from article where a_id>$id order by a_id asc limit 1";
			return $this->db->fetch_one($sql);
		}
		//把文章已经分割的一个个单个关键字的信息插入tags表中
		public function insertTag($v){
			$sql="insert into tags(t_name) values('$v') on duplicate key update flag=flag+1";
			return $this->db->my_insert($sql);
		}
		//把文章关键字信息插入art_tag表中并和文章id相关联
		public function insertArtTag($res,$t_id){
			$sql="insert into art_tag(a_id,t_id) values('$res','$t_id')";
			return $this->db->my_insert($sql);
		}
		//获取与文章关键字相同的相关文章的信息
		public function getAssoc($id){
			//select t_id from art_tag where a_id=$id
			//select a_id from art_tag where(select t_id from art_tag where a_id=$id)
			$sql="select a_id,a_title from article where a_id in (select distinct a_id from art_tag where t_id in (select t_id from art_tag where a_id=$id)) and a_id!=$id";
			return $this->db->fetch_all($sql);
			
		} 
		//把评论信息插入reply表中
		public function insertreply($data){
			extract($data);//将数组中的元素转换为变量方便下面的插入操作；
			$sql="insert into reply(r_content,r_time,u_id,a_id) values('$r_content','$r_time','$u_id','$a_id')";
			return $this->db->my_insert($sql);
		}
		//获得这篇文章的评论信息
		public function getreply($id,$curlpage,$rowspage){
			$offset=($curlpage-1)*$rowspage;
			$sql="select * from reply where a_id=$id limit $offset,$rowspage ";
			return $this->db->fetch_all($sql);
		}
		//这是一个获取所有评论数量的函数
		public function getRcount($id){
			$sql="select count(*) as a from reply where a_id=$id";
			$arr=$this->db->fetch_one($sql);
			
			return $arr['a'];
		}
	}