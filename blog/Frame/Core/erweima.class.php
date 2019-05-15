<?php
//这是一个生成二维码的类
  class erweima{
    public function scerweima($url){//二维码的内容
      include "phpqrcode.php";
      $value=$url;
      $errorCorrectionLevel='H';//容错级别L最小 M 中等 Q 大 H 最大
      $scerweimaSize=5;//生成的图片大小1~10
      $filename='App/Upload/QRcode/'.microtime().'png';//生成二维码图片保存位置
      Qrcode::png($value,$filename,$errorCorrectionLevel,$scerweimaSize,2);//调用phpqrcode文件里面的Qrcode类里面的png函数得到图片绝对地址
      $QR=$filename;
      $QR=imagecreatefromstring(file_get_contents($QR));//创建一块画布，并从字符串中的图像流新建一副图像
      imagepng($QR,'qrcode.png');//输出画布图像，并指定输出图像的名字为qrcode.png
      imagedestroy($QR);//销毁画布资源
      return "<img src='qrcode.png' alt='作者信息'>";
	  }





 //2. 在生成的二维码中加上logo(生成图片文件)
    public function scerweima1($url=''){
      require_once 'phpqrcode.php';
      $value = $url;         //二维码内容
      $errorCorrectionLevel = 'L';  //容错级别
      $matrixPointSize = 5;      //生成图片大小
      //生成二维码图片
      $filename = 'App/Upload/QRcode/'.microtime().'.png';
      QRcode::png($value,$filename , $errorCorrectionLevel, $matrixPointSize, 2);
      $logo = '1.jpg'; //准备好的logo图片
      $QR = $filename;      //已经生成的原始二维码图
      if (file_exists($logo)) {
        $QR = imagecreatefromstring(file_get_contents($QR));    //目标图象连接资源。
        $logo = imagecreatefromstring(file_get_contents($logo));  //源图象连接资源。
        $QR_width = imagesx($QR);      //二维码图片宽度
        $QR_height = imagesy($QR);     //二维码图片高度
        $logo_width = imagesx($logo);    //logo图片宽度
        $logo_height = imagesy($logo);   //logo图片高度
        $logo_qr_width = $QR_width / 4;   //组合之后logo的宽度(占二维码的1/5)
        $scale = $logo_width/$logo_qr_width;  //logo的宽度缩放比(本身宽度/组合后的宽度)
        $logo_qr_height = $logo_height/$scale; //组合之后logo的高度
        $from_width = ($QR_width - $logo_qr_width) / 2;  //组合之后logo左上角所在坐标点
        //重新组合图片并调整大小
        /*
        * imagecopyresampled() 将一幅图像(源图象)中的一块正方形区域拷贝到另一个图像中
        */
        imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,$logo_qr_height, $logo_width, $logo_height);
      }
  //输出图片
      imagepng($QR, 'qrcode.png');
      imagedestroy($QR);
      imagedestroy($logo);
      return '<img src="qrcode.png" alt="作者信息">';
  }
}
	
