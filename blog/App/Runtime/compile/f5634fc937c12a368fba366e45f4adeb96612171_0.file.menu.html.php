<?php
/* Smarty version 3.1.32, created on 2018-11-21 20:43:18
  from 'F:\code\blog\App\Home\View\common\menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf552e6d7f1b5_37329519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5634fc937c12a368fba366e45f4adeb96612171' => 
    array (
      0 => 'F:\\code\\blog\\App\\Home\\View\\common\\menu.html',
      1 => 1542804187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf552e6d7f1b5_37329519 (Smarty_Internal_Template $_smarty_tpl) {
?></head>
<body>
<div class="ibody">
  <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/"></a></div>
    <nav>
	    <a <?php if ($_smarty_tpl->tpl_vars['menu']->value == 1) {?>id="topnav_current"<?php }?> href="index.php?g=Home&c=Index&a=index">首页</a>
	    <a <?php if ($_smarty_tpl->tpl_vars['menu']->value == 2) {?>id="topnav_current"<?php }?> href="about.html">关于我</a>
	    <a <?php if ($_smarty_tpl->tpl_vars['menu']->value == 3) {?>id="topnav_current"<?php }?> href="index.php?g=Home&c=Article&a=index&id=1">生活纪实</a>
	    <a <?php if ($_smarty_tpl->tpl_vars['menu']->value == 4) {?>id="topnav_current"<?php }?> href="photo.html">我的相册</a>
	    <a <?php if ($_smarty_tpl->tpl_vars['menu']->value == 5) {?>id="topnav_current"<?php }?> href="new.html">模板主题</a>
    </nav>
 </header><?php }
}
