<?php
/* Smarty version 3.1.32, created on 2018-11-17 12:57:55
  from 'F:\code\blog\App\Admin\View\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bef9fd364a3e5_48129543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'affc6a33c55fdf0ec849a642e5dd4180da55795d' => 
    array (
      0 => 'F:\\code\\blog\\App\\Admin\\View\\Index\\index.html',
      1 => 1542430492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/menu.html' => 1,
  ),
),false)) {
function content_5bef9fd364a3e5_48129543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\code\\blog\\Frame\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>拼图后台管理-后台管理</title>
    <link rel="stylesheet" href="App/Public/Admin/css/pintuer.css">
    <link rel="stylesheet" href="App/Public/Admin/css/admin.css">
    <?php echo '<script'; ?>
 src="App/Public/Admin/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="App/Public/Admin/js/pintuer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="App/Public/Admin/js/respond.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="App/Public/Admin/js/admin.js"><?php echo '</script'; ?>
>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="App/Public/Admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <?php $_smarty_tpl->_subTemplateRender("file:../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>1,'sub'=>1001), 0, false);
?>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION['userInfo']['u_name'];?>
，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
	<div class="line-big">
    	<div class="xm3">
        	<div class="panel border-back">
            	<div class="panel-body text-center">
                	<img src="App/Public/Admin/images/face.jpg" width="120" class="radius-circle" /><br />
                    admin
                </div>
                <div class="panel-foot bg-back border-back">尊敬的用户:<?php echo $_SESSION['userInfo']['u_name'];?>
您好<br/>您上次ip:<?php echo $_SESSION['userInfo']['last_ip'];?>
 <br/>您上次登录时间:<?php echo smarty_modifier_date_format($_SESSION['userInfo']['last_time'],'Y-m-d H:i:s');?>
</div>
            </div>
            <br />
        	<div class="panel">
            	<div class="panel-head"><strong>站点统计</strong></div>
                <ul class="list-group">
                	<li><span class="float-right badge bg-red">88</span><span class="icon-user"></span> 会员</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-file"></span> 文件</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-shopping-cart"></span> 订单</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-file-text"></span> 内容</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-database"></span> 数据库</li>
                </ul>
            </div>
            <br />
        </div>
        <div class="xm9">
        	<div class="alert alert-yellow"><span class="close"></span><strong>注意：</strong>您有5条未读信息，<a href="#">点击查看</a>。</div>
            <div class="alert">
                <h4>拼图前端框架介绍</h4>
                <p class="text-gray padding-top">拼图是优秀的响应式前端CSS框架，国内前端框架先驱及领导者，自动适应手机、平板、电脑等设备，让前端开发像游戏般快乐、简单、灵活、便捷。</p>
            	<a target="_blank" class="button bg-dot icon-code" href="#"> 下载示例代码</a> 
            	<a target="_blank" class="button bg-main icon-download" href="#"> 下载拼图框架</a> 
            	<a target="_blank" class="button border-main icon-file" href="#"> 拼图使用教程</a>
            </div>
            <div class="panel">
            	<div class="panel-head"><strong>系统信息</strong></div>
                <table class="table">
                	<tr><th colspan="2">服务器信息</th><th colspan="2">系统信息</th></tr>
                    <tr><td width="110" align="right">操作系统：</td><td>Windows 2008</td><td width="90" align="right">系统开发：</td><td><a href="#" target="_blank">拼图前端框架</a></td></tr>
                    <tr><td align="right">Web服务器：</td><td>Apache</td><td align="right">主页：</td><td><a href="#" target="_blank">#</a></td></tr>
                    <tr><td align="right">程序语言：</td><td>PHP</td><td align="right">演示：</td><td><a href="#" target="_blank">http://demo.pintuer.com</a></td></tr>
                    <tr><td align="right">数据库：</td><td>MySQL</td><td align="right">群交流：</td><td><a href="http://shang.qq.com/wpa/qunwpa?idkey=a08e4d729d15d32cec493212f7672a6a312c7e59884a959c47ae7a846c3fadc1" target="_blank">201916085</a> (点击加入)</td></tr>
                </table>
            </div>
        </div>
    </div>
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建   来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
    
    <div class="clearfix text-center">
    	<a class="button button-big bg-main badge-corner" href="#" target="_blank">拼图最美中文后台-后翘<span class="badge bg-red">会员</span></a>
        <br /><br />
        <a href="#" target="_blank"><img src="App/Public/Admin/images/index.jpg" class="img-responsive" alt="会员版-登录" /></a><br />
        <a href="#" target="_blank"><img src="App/Public/Admin/images/login.jpg" class="img-responsive" alt="会员版-首页" /></a>
    </div>
    <br />
</div>


</body>
</html><?php }
}
