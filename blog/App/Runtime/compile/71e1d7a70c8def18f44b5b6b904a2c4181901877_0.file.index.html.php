<?php
/* Smarty version 3.1.32, created on 2018-11-20 17:55:34
  from 'F:\code\blog\App\Admin\View\Article\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf3da16250f00_81879537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71e1d7a70c8def18f44b5b6b904a2c4181901877' => 
    array (
      0 => 'F:\\code\\blog\\App\\Admin\\View\\Article\\index.html',
      1 => 1542707731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/menu.html' => 1,
  ),
),false)) {
function content_5bf3da16250f00_81879537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\code\\blog\\Frame\\Vendor\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'F:\\code\\blog\\Frame\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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
    <style>
    .pagination:hover{
        cursor: pointer;
    }
    </style>
    <?php echo '<script'; ?>
 type="text/javascript">
        function searchA(){
            var search=document.getElementById('search');
            var val=search.value;
            window.location="/index.php?g=Admin&c=Article&a=index&search="+val;
        }
    <?php echo '</script'; ?>
>
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="App/Public/Admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
  <div class="mainer">
    <?php $_smarty_tpl->_subTemplateRender("file:../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>3,'sub'=>1002), 0, false);
?>
    <div class="admin-bread"> <span>您好，<?php echo $_SESSION['userInfo']['u_name'];?>
，欢迎您的光临。</span>
      <ul class="bread">
        <li><a href="index.html" class="icon-home"> 开始</a></li>
        <li><a href="system.html">文章管理</a></li>
        <li>文章列表</li>
      </ul>
    </div>
  </div>
</div>

<div class="admin">
	<form method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>内容列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
            <input type="button" class="button button-small border-green" onclick="location='index.php?g=Admin&c=Article&a=add' " value="添加文章" />
            <input type="button" class="button button-small border-yellow" value="批量删除" />
            <input type="button" class="button button-small border-blue" value="回收站" />
             <div style="float:right;"><input class="input" type="text" name="search" style="width:200px;display:inline-block;vertical-align: bottom;border-right:none" id="search"><input onclick="searchA()" type="button" style="display: inline-block;margin-left:-3px;border-radius:0;" class="button" value="搜索" /></div>

        </div>
        <table class="table table-hover">
            <thead>
            	<tr>
                    <th width="45">选择</th>
                    <th width="120">标题</th>
                    <th width="*">描述</th>
                    <th width="100">时间</th>
                    <th width="200">推荐</th>
                    <th width="100">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr>
                    <td><input type="checkbox" name="id" value="1" /></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['a_title'];?>
</td>
                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['a_desc'],15,'....');?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['a_time'],'Y-m-d H:i:s');?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['a_recommend'] == 0) {?>
                        <a class="button border-blue button-little" href="index.php?g=Admin&c=Article&a=recommend&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
&curlpage=<?php echo $_smarty_tpl->tpl_vars['curlpage']->value;?>
">推荐</a>
                        <?php } else { ?>
                        <a class="button border-blue button-little" href="index.php?g=Admin&c=Article&a=recommend&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
&curlpage=<?php echo $_smarty_tpl->tpl_vars['curlpage']->value;?>
">取消推荐</a>
                        <?php }?>
                    </td>
                    <td>
                        <a class="button border-blue button-little" href="index.php?g=Admin&c=Article&a=alt&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
">修改</a> 
                        <a class="button border-yellow button-little" href="index.php?g=Admin&c=Article&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                    </td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <div class="panel-foot text-center">
          <?php echo $_smarty_tpl->tpl_vars['message']->value;?>


        </div>
    </div>
    </form>
    <br />
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建</p>
</div>

</body>
</html><?php }
}
