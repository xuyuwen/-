<?php   
    class MyPDO{
        private $type;
        private $host;
        private $port;
        private $user;
        private $pass;
        private $charset;
        private $dbname;
        private $pod;
        public function __construct($config){
            //初始化属性的值
            $this->type=$config['type']?? 'mysql';
            $this->host=$config['host']?? 'localhost';
            $this->port=$config['port']?? 3306;
            $this->user=$config['user']?? 'root';
            $this->pass=$config['pass']?? '';
            $this->charset=$config['charset']?? 'utf8';
            $this->dbname=$config['dbname']?? 'php';
            $this->content();
            $this->enableException();
        }
        //连接数据库
        private function content(){
            $dsn="$this->type:host=$this->host;port=$this->port;charset=$this->charset;dbname=$this->dbname";
            $user=$this->user;
            $pass=$this->pass;
            try{
                $this->pod=new PDO($dsn,$user,$pass);
                
            }catch(PDOException $e){
                echo "<h3>错误信息如下:</h3>";
                echo "错误编码:",$e->getCode(),"<br/>";
                echo "错误信息",$e->getMessage(),"<br/>";
                echo "错误文件",$e->getFile(),"<br/>";
                echo "错误行号",$e->getLine(),"<br/>";
            }  
        }
        //开启异常
        private function enableException(){
            $this->pod->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        //通用的增加、删除、修改数据的方法
        public function my_insert($sql){
            try{
               return $this->pod->exec($sql);
            }catch(PDOException $e){
                echo "<h3>错误信息如下:</h3>";
                echo "错误编码:",$e->getCode(),"<br/>";
                echo "错误信息",$e->getMessage(),"<br/>";
                echo "错误文件",$e->getFile(),"<br/>";
                echo "错误行号",$e->getLine(),"<br/>";
            }
        }
        //通用的查看新插入数据id的方法
        public function insert_id(){
            return $this->pod->lastInsertId();
        }
        //通用获取一条记录的方法
        public function fetch_one($sql){
           $res=$this->pod->query($sql);
           return $res->fetch(PDO::FETCH_ASSOC);
        }
        //增加一个获取多条记录的方法
        public function fetch_all($sql){
            $res=$this->pod->query($sql);
            return $res->fetchAll(PDO::FETCH_ASSOC);
        }


    }
  