<?php
/* Smarty version 3.1.32, created on 2018-11-17 10:54:25
  from 'F:\code\blog\App\Admin\View\Privilege\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bef82e1835268_24555609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f00777eac8fe95ccd2af25e8a0c7278effbf1e2e' => 
    array (
      0 => 'F:\\code\\blog\\App\\Admin\\View\\Privilege\\login.html',
      1 => 1542423261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bef82e1835268_24555609 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="viewport" content="width=device-width,initial-scale=1.0">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="App/Public/Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="App/Public/Admin/bootstrap/js/jquery-3.0.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="App/Public/Admin/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<style>
	body{
		background-color:#1D2024;
	}
	.login-container{
		width:375px;
	}
	.login-white{
		color:#fff;
	}
	.text-green{
		color:#69AA46;
	}
	.login-container .text-primary{
		color:#DD5A3F;
	}
	h1{
		font-family: Arial,sans-serif;
		font-size:32px;
	}
	.login-box{
		
		padding:6px;
		background-color:#394557;
	}
	.login-widget{
		background-color:#F7F7F7;
	}
	.widget-main{
		padding:16px 36px 16px;
	}
	.widget-main h4{
		font-size:19px;
		color:blue;
		border-bottom:1px solid #d5e3ef;
		line-height:28px;
		padding-bottom:4px;
		margin-bottom:16px;
	}
	.widget-form{

	}
	.line{
		margin-top:10px;
		text-align:center;
		position:relative;
		z-index: 1;
	}
	.line::before{
		content:"";
		border-top:1px dotted #a6c4db;
		position:absolute;
		left:0;right:0;
		display:block;
		top:50%;
		z-index:-1;
	}
	.line span{
		font-size:13px;
		background:#f7f7f7 none repeat scroll 0 0;
		padding:0 8px;
		color:#5090c1;
	}

	.login-foot{
		background:#5090C1;
		border-top:2px solid #597597;
	}
	.login-foot::after{
		content:" ";
		display:table;
	}

	.login-foot .left{
		padding:9px 0 11px;
	}

	.login-foot .left a{
		margin-left:11px;
		color:#fe9;
		text-shadow:1px 0 1px rgba(0,0,0,.25);
	}
	.login-foot .right a{
		margin-right:11px;
		color:#cf7;
		text-shadow:1px 0 1px rgba(0,0,0,.25);

	}

	.login-foot .right{
		padding:9px 0 11px;
	}
	
	.social{
		margin-top:20px;
		text-align:center;
	}
	.social a{
		width:34px; 
		height:34px;
		margin:0;
		padding:0;
		line-height:34px;
		border-radius:100%;
	}
	.social a i{
		font-size:32px;
	}
</style>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container center-block">
					<div>
						<h1 class="text-center">
							<i class="glyphicon glyphicon-leaf text-green"></i>
							<span class="text-primary">ItC</span>
							<span class="login-white">Application</span>
						</h1>
						<h4 class="text-info text-center">
							&copy; Itcast
						</h4>
					</div>

					<div class="login-box">
						<div class="login-widget">
							<div class="widget-main">
								<h4>
									<i class="glyphicon glyphicon-glass text-green"></i>
									Please Enter Your Information
								</h4>
								<form action="index.php?g=Admin&c=Privilege&a=verify" method="post">
									<fieldset>
										<div class="form-group has-feedback">
											<input class="form-control" type="text" name="uname" id="uname" placeholder="Uername">
											<div class="form-control-feedback">
											<span style="color:#666;" class="glyphicon glyphicon-user"></span></div>
										</div>
										<div class="form-group has-feedback">
											<input class="form-control" type="password" name="upass" id="upass" placeholder="Password">
											<div class="form-control-feedback">
											<span style="color:#666;" class="glyphicon glyphicon-lock"></span></div>
										</div>
										<div class="clearfix">
										<div class="form-group has-feedback pull-left" style="width:180px">
											<input class="form-control" type="text" name="verify" id="verify" placeholder="Verify">
											<div class="form-control-feedback">
												<span style="color:#666;" class="glyphicon glyphicon-leaf"></span>
											</div>
										</div>
											<img class="pull-right img-rounded" style="border:1px solid #ccc" width="100" src="/index.php?g=Admin&c=Privilege&a=createValidate" alt=""  onclick="this.src='/index.php?g=Admin&c=Privilege&a=createValidate&'+Math.random()">

										</div>
										<div class="clearfix">
											<label for="remember" style="display:inline-block;margin-top: 6px;">
												<input style="position:absolute;" type="checkbox" name="remember" id="remember">
												<span style="color:#666;margin-left:16px;">Remember Me</span>
											</label>
											<button class="pull-right btn btn-primary btn-sm" type="submit">
												<i class="glyphicon glyphicon-log-in">&nbsp;</i>
												Login
											</button>
										</div>
									</fieldset>
								</form>
								<div class="line">
									<span>Or According Bellow</span>
								</div>
								<div class="social">
									<a href="#" class="btn btn-primary">
										<i class="glyphicon glyphicon-grain"></i>
									</a>
									<a href="#" class="btn btn-danger">
										<i class="glyphicon glyphicon-fire"></i>
									</a>
									<a href="#" class="btn btn-info">
										<i class="glyphicon glyphicon-heart"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="login-foot clearfix">
							<div class="pull-left left">
								<a href="#">
									<i class="glyphicon glyphicon-arrow-left"></i>
									I forgot my password
								</a>
							</div>
							<div class="pull-right right">
								<a href="#">
									I want to register
									<i class="glyphicon glyphicon-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					
				</div>
    		</div>
    	</div>
	</div>
</body>
</html><?php }
}
