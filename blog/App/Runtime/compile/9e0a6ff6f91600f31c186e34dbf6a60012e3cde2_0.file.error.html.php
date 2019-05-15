<?php
/* Smarty version 3.1.32, created on 2018-11-16 16:05:05
  from 'F:\code\blog\Frame\Common\error.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bee7a31d6b442_88002531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e0a6ff6f91600f31c186e34dbf6a60012e3cde2' => 
    array (
      0 => 'F:\\code\\blog\\Frame\\Common\\error.html',
      1 => 1542271361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bee7a31d6b442_88002531 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['second']->value;?>
;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"/>
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">

		*{margin:0;padding:0;}
		#box{
			width:300px;
			height:230px;
			border-radius:5px 5px 10px 10px;
			background:#efefef;
			margin:100px auto;
			transform:rotate(-30deg);
			box-shadow:3px 5px 5px 0px rgba(0,0,0,.5);
		}
		#box h4{
			background:#ffaa00 url(images/icn_alert_info.png) no-repeat 10px 10px;
			border-radius:5px 5px 0 0;
			padding:10px 0;
			width:100%;
			letter-spacing:10px;
			font-size:13px;
			color:#333;
			text-indent:40px;
		}
		#mess{
			width:300px;
			height:200px;
			line-height:200px;
			text-align:center;
			letter-spacing:5px;
			font-size:13px;
			color:#333;
		}

	</style>
	<?php echo '<script'; ?>
 type="text/javascript">
		var i=<?php echo $_smarty_tpl->tpl_vars['second']->value;?>
;
		window.onload=function(){
			var objSecond = document.getElementById("second");;
			setInterval(startMove,1000);
			function startMove(){
				i--;
				objSecond.innerHTML=i;
			}
		}
	<?php echo '</script'; ?>
>
</head>
<body>
	<div id="box">
		<h4>系统提示信息...</h4>
		<div id="mess">
			<?php echo $_smarty_tpl->tpl_vars['mess']->value;?>

			<span id="second"><?php echo $_smarty_tpl->tpl_vars['second']->value;?>
</span>
		</div>
	</div>
</body>
</html>
<?php }
}
