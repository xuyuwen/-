<?php
/* Smarty version 3.1.32, created on 2018-11-18 11:04:06
  from 'F:\code\blog\App\Admin\View\common\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf0d6a6ee6f97_60004526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a51d570fc20c635642846ae2887c9c68fb2f031' => 
    array (
      0 => 'F:\\code\\blog\\App\\Admin\\View\\common\\menu.html',
      1 => 1542509639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf0d6a6ee6f97_60004526 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="admin-navbar"> <span class="float-right"> <a class="button button-little bg-main" href="#">前台首页</a> <a class="button button-little bg-yellow" href="index.php?g=Admin&c=Privilege&a=loginout">注销登录</a> </span>
  <ul class="nav nav-inline admin-nav">
    <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == 1) {?> class='active'<?php }?>><a href="index.php?g=Admin&c=Index&Index" class="icon-home"> 开始</a>
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 1001) {?>class='active'<?php }?>><a href="index.php?g=Admin&c=Category&a=index">类别管理</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 1002) {?>class='active'<?php }?>><a href="index.php?g=Admin&c=Article&index">文章管理</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 1003) {?>class='active'<?php }?>><a href="#">相册管理</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 1004) {?>class='active'<?php }?>><a href="#">站长信息</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 1005) {?>class='active'<?php }?>><a href="#">关于我</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 1006) {?>class='active'<?php }?>><a href="#">栏目管理</a></li>
      </ul>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == 2) {?>class='active'<?php }?>><a href="index.php?g=Admin&c=Category&a=index" class="icon-cog">类别管理</a>
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 2001) {?>class='active'<?php }?>><a href="index.php?g=Admin&c=Category&a=index">所有类别</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 2002) {?>class='active'<?php }?>><a href="index.php?g=Admin&c=Category&a=add">添加类别</a></li>
        
      </ul>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == 3) {?>class='active'<?php }?>><a href="index.php?g=Admin&c=Article&index" class="icon-file-text"> 文章管理</a>
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 3001) {?>class='active'<?php }?>><a href="index.php?g=Admin&c=Article&index">文章列表</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 3002) {?>class='active'<?php }?>><a href="#">所有文章</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 3003) {?>class='active'<?php }?>><a href="index.php?g=Admin&c=Article&a=add">添加文章</a></li>
      </ul>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['menu']->value == 4) {?>class='active'<?php }?>><a href="#" class="icon-shopping-cart"> 相册管理</a>
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 4001) {?>class='active'<?php }?>><a href="#">添加相片</a></li>
      </ul>
    </li <?php if ($_smarty_tpl->tpl_vars['menu']->value == 5) {?>class='active'<?php }?>>
    <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 5001) {?>class='active'<?php }?>><a href="#" class="icon-user"> 站长信息</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 5002) {?>class='active'<?php }?>><a href="#" class="icon-file"> 关于我</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['sub']->value == 5003) {?>class='active'<?php }?>><a href="#" class="icon-th-list"> 栏目管理</a></li>
  </ul>
</div><?php }
}
