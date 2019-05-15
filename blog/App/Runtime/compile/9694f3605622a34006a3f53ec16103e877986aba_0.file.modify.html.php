<?php
/* Smarty version 3.1.32, created on 2018-11-17 21:23:23
  from 'F:\code\blog\App\Admin\View\Category\modify.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf0164b22a122_20089151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9694f3605622a34006a3f53ec16103e877986aba' => 
    array (
      0 => 'F:\\code\\blog\\App\\Admin\\View\\Category\\modify.html',
      1 => 1542460989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/menu.html' => 1,
  ),
),false)) {
function content_5bf0164b22a122_20089151 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php $_smarty_tpl->_subTemplateRender("file:../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>2,'sub'=>2002), 0, false);
?>
    <div class="admin-bread"> <span>您好，<?php echo $_SESSION['userInfo']['u_name'];?>
，欢迎您的光临。</span>
      <ul class="bread">
        <li><a href="index.html" class="icon-home"> 开始</a></li>
        <li><a href="system.html">类别管理</a></li>
        <li>添加分类</li>
      </ul>
    </div>
  </div>
</div>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>分类管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加分类</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form  class="form-x" action="index.php?g=Admin&c=Category&a=update&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
" method="post">
          <div class="form-group">
            <div class="label">
              <label for="cname">分类名称</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="cname" name="cname" size="50" placeholder="类别名称" data-validate="required:请填写类别名称" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="pid">所属分类</label>
            </div>
            <div class="field">
              <select class="input" id="pid" name="pid" style="width:20%">
                <option value="0">主类别</option>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['c_id'];?>
"><?php echo preg_replace('!^!m',str_repeat('&nbsp;&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['value']->value['lv']),$_smarty_tpl->tpl_vars['value']->value['c_name']);?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="cdesc">描述</label>
            </div>
            <div class="field">
              <textarea class="input" name="cdesc" id="cdesc" rows="5" cols="50" placeholder="描述" data-validate="required:请填写分类描述" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_desc'];?>
"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="csort">排序</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="csort" name="csort" size="50" placeholder="50" data-validate="required:请填写分类排序"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_sort'];?>
"/>
            </div>
          </div>
          <div class="form-button">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
      <div class="tab-panel" id="tab-email">邮件设置</div>
      <div class="tab-panel" id="tab-upload">上传设置</div>
      <div class="tab-panel" id="tab-visit">访问限制</div>
    </div>
  </div>
  <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建</p>
</div>
</body>
</html><?php }
}
