<?php
/* Smarty version 3.1.32, created on 2018-11-20 14:33:14
  from 'F:\code\blog\App\Admin\View\Article\modify.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf3aaaa5ab656_59040118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9264e6556c02398d287c3314982727ed6368532' => 
    array (
      0 => 'F:\\code\\blog\\App\\Admin\\View\\Article\\modify.html',
      1 => 1542695585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/menu.html' => 1,
  ),
),false)) {
function content_5bf3aaaa5ab656_59040118 (Smarty_Internal_Template $_smarty_tpl) {
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
   <?php $_smarty_tpl->_subTemplateRender("file:../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>3,'sub'=>3003), 0, false);
?>
    <div class="admin-bread"> <span>您好，<?php echo $_SESSION['userInfo']['u_name'];?>
，欢迎您的光临。</span>
      <ul class="bread">
        <li><a href="index.html" class="icon-home"> 开始</a></li>
        <li><a href="system.html">文章管理</a></li>
        <li>添加文章</li>
      </ul>
    </div>
  </div>
</div>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>文章管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加文章</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" enctype="multipart/form-data" action="index.php?g=Admin&c=Article&a=update">
          <div class="form-group">
            <div class="label">
              <label for="title">文章标题</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="title" name="title" size="50" placeholder="请填写你文章标题的名称" data-validate="required:请填写你文章标题的名称" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['a_title'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">所属分类</label>
            </div>
            <div class="field">
              <select class="input" name="cid" style="width:20%">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>
"><?php echo preg_replace('!^!m',str_repeat("&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['v']->value['lv']),$_smarty_tpl->tpl_vars['v']->value['c_name']);?>
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
              <label for="author">文章作者</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="author" name="author"  placeholder="作者" data-validate="required:请填写分类排序" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['a_author'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="desc">文章描述</label>
            </div>
            <div class="field">
              <textarea class="input" name="desc" rows="5" cols="50" placeholder="描述" data-validate="required:请填写分类描述" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['a_desc'];?>
"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="desc">文章内容</label>
            </div>
            <div class="field">
              <textarea class="input" rows="5" name="content" cols="50" placeholder="内容" data-validate="required:请填写文章描述" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['a_content'];?>
"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="img">上传图片</label>
            </div>
            <div class="field">
              <input type="file" id="img" name="MyFile"/>
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
