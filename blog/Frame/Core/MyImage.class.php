<?php
	class MyImage{
		function thumb($file,$dw,$dh,$path){
			//获取用户名图
			$srcImg=$this->getImg($file);
			//获取原图的宽高
			$infoSrc=getimagesize($file);
			$sw=$infoSrc[0];
			$sh=$infoSrc[1];
			//创建缩略图画布
			$destImg=imagecreatetruecolor($dw, $dh);
			//为缩略图填充背景色
			$bg=imagecolorallocate($destImg,250,250,250);
			imagefill($destImg,0,0,$bg);
			//计算等比例缩放后的尺寸
			if($dh/$dw>$sh/$sw){
				$fw=$dw;
				$fh=$sh/$sw*$fw;
			}else{
				$fh=$dh;
				$fw=$fh*$sw/$sh;
			}
			//居中放置
			$dx=($dw-$fw)/2;
			$dy=($dh-$fh)/2;
			//复制缩略图
			imagecopyresampled($destImg, $srcImg, 0, 0, 0, 0 ,$fw, $fh,$sw, $sh);
			$baseName='thumb_'.basename($file);
			$savePath=$path.'/'.$baseName;
			if(imagejpeg($destImg,$savePath)){
				return $baseName;
			}

		}
		function getImg($file){
			$info=getimagesize($file);
			$fn=$info['mime'];
			switch($fn){
				 case 'image/jpeg':
                $img=imagecreatefromjpeg($file);
                break;
            case 'image/gif':
                $img=imagecreatefromgif($file);
            case 'image/png':
                $img=imagecreatefrompng($file);
                break;

			}
			return $img;
		}
	}