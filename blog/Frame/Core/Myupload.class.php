<?php
	class Myupload{
		public static function upload($file,$maxsize,$mimes,$dest){
		    // $error=$_FILES['file']['error'];
		    switch($file['error']){
		        case 1:
		           die('文件上传失败，超过了限定大小') ;
		            break;
		        case 2:
		           die('文件上传失败，超过了限定大小') ;
		            break;
		        case 3:
		            die('文件上传失败，只有部分文件进行了上传') ;
		            break;
		        case 4:
		            die('没有选择任何文件') ;
		            break;
		        case 6:
		        case 7:
		            die('文件写入失败') ;
		            break;
    		}
    
		    
		    //限定文件上传的大小
		    $size=$file['size'];
		    if($size>$maxsize){
		        die("对不起您上传的文件过大请重新选择文件上传");
		    }
		    //获取文件的扩展名也就是后缀
		    $imgtype=pathinfo($file['name'],PATHINFO_EXTENSION);
		    //限定文件上传类型
		    $type=$file['type'];
		    if(!in_array($type,$mimes)){
		        die('对不起您上传的文件不合法，我们目前只支持img/png/jpg文件') ;
		    }
		    //调用函数获取扩展名
		    $midpath=self::getrandname();
		    //拼接文件名
		    $allpath=$dest.'/'.$midpath.'.'.$imgtype;
		    $temp=$file['tmp_name'];//文件原来的存储路径
		    //修改路径
		    if(move_uploaded_file($temp,$allpath)){
		    	return $allpath;
		    }
		}

	    public static function getrandname(){
	        $path1=date("YmdHis");//获取路径的随机时间
	        for($i=0;$i<6;$i++){//for循环用来拼接随机产生的6位字母
	            if(0==rand(0,1)){
	                $path1.=chr(rand(97,122));//获去小写字母
	            }else{
	                $path1.=chr(rand(65,90));//获取大写字母
	            }

	        }
	        return $path1;

	    }

	}