<?php
	class ValidateChar{
		public function Vchar(){
			//创建画布
			$image=imagecreatetruecolor(100,30);
			$bg=imagecolorallocate($image,mt_rand(210,255),mt_rand(210,255),mt_rand(210,255));
			imagefill($image,0,0,$bg);
			//将验证码绘制到画布
			$str=$this->getcode();
			// session_start();//注意这里不用开启session因为frame.class.php里面已经自动开启的session
			$_SESSION['str']=$str;//这里把这个验证码内容赋值给session是为了后面跨类对验证码内容进行验证
			for($i=0;$i<4;$i++){
   			 $color=imagecolorallocate($image,mt_rand(100,200),mt_rand(100,200),mt_rand(100,200));
   			 imagettftext($image,24,mt_rand(-40,40),18*($i+1),24,$color,realpath(FRAME_ROOT."/Common/simhei.ttf"),$str[$i]);
			}
			//绘制线条遮挡文字
			for($j=0;$j<4;$j++){
   			 $color2=imagecolorallocate($image,mt_rand(100,200),mt_rand(100,200),mt_rand(100,200));
   			 imageline($image,mt_rand(0,100),mt_rand(0,30),mt_rand(0,100),mt_rand(0,30),$color2);
			}
			header("Content-type:image/jpeg");
			imagejpeg($image);
			}
		//随机获取六位数字
		public function getcode(){
        		$code="abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVEXYZ23456789";
       		    $str="";
        		for($i=0;$i<4;$i++){
            	$str.=$code[mt_rand(0,57)];
        		}
        		return $str;
    		}
		
	}