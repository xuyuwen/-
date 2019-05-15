<?php
/* Smarty version 3.1.32, created on 2018-11-18 08:48:14
  from 'F:\code\blog\App\Admin\View\Category\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf0b6ce99b358_61501560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b2e762a97431dfdb7b885bf81298b49fbf917a' => 
    array (
      0 => 'F:\\code\\blog\\App\\Admin\\View\\Category\\index.html',
      1 => 1542463348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/menu.html' => 1,
  ),
),false)) {
function content_5bf0b6ce99b358_61501560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\code\\blog\\Frame\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>拼图后台管理-后台管理</title>
    <link rel="stylesheet" href="/App/public/admin/css/pintuer.css">
    <link rel="stylesheet" href="/App/public/admin/css/admin.css">
    <?php echo '<script'; ?>
 src="/App/Public/Admin/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/App/Public/Admin/js/pintuer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/App/Public/Admin/js/respond.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/App/Public/Admin/js/admin.js"><?php echo '</script'; ?>
>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="/App/Public/Admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <?php $_smarty_tpl->_subTemplateRender("file:../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>2,'sub'=>2001), 0, false);
?>

        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION['userInfo']['u_name'];?>
，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li><a href="content.html">类别管理</a></li>
                <li>所有类别</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">
	<form action="index.php?g=Admin&c=Category&a=insert" method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>内容列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small border-green" value="添加分类" />
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="120">类别</th>
                    <th width="*">描述</th>
                    <th width="100">时间</th>
                    <th width="200">排序</th>
                    <th width="100">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <tr>
                    <td><?php echo preg_replace('!^!m',str_repeat('&nbsp;&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['value']->value['lv']),$_smarty_tpl->tpl_vars['value']->value['c_name']);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['c_desc'];?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['c_time'],'Y-m-d H:i:s');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['value']->value['c_sort'];?>
</td>
                    <td>
                        <a class="button border-blue button-little" href="index.php?g=Admin&c=Category&a=alt&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['c_id'];?>
">修改</a> 
                        <a class="button border-yellow button-little" href="index.php?g=Admin&c=Category&a=del&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['c_id'];?>
" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                    </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
    </form>
    <br />
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建</p>
</div>

</body>
</html><?php }
}
