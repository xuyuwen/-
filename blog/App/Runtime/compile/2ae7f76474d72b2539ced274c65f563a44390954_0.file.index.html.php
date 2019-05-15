<?php
/* Smarty version 3.1.32, created on 2018-11-21 19:58:32
  from 'F:\code\blog\App\Home\View\Article\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf54868ad2cf6_49286120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ae7f76474d72b2539ced274c65f563a44390954' => 
    array (
      0 => 'F:\\code\\blog\\App\\Home\\View\\Article\\index.html',
      1 => 1542801509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/menu.html' => 1,
  ),
),false)) {
function content_5bf54868ad2cf6_49286120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\code\\blog\\Frame\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'F:\\code\\blog\\Frame\\Vendor\\Smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>黑色Html5响应式个人博客模板――主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="App/Public/Home/css/base.css" rel="stylesheet">
<link href="App/Public/Home/css/style.css" rel="stylesheet">
<link href="App/Public/Home/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<style>
  .clearfix:after{
	/* 内容要为空，因为伪元素是一个行内元素，所以要把它转化为块级元素 */
	content: "";
	display: block;
	clear: both;
	/* 后面这三行要不要都无所谓，前面这三行一定要 */
	/* height: 0;
	line-height: 0;
	visibility: hidden; */
}
.clearfix{
	zoom:1;
}
  .pagination{
    float:left;
  }
  .panel{
    margin-left: 300px;
  }
</style>
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="js/modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<div class="ibody">
  <?php $_smarty_tpl->_subTemplateRender("file:../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>3), 0, false);
?>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">慢生活</a></h2>
    <div class="bloglist">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['date']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <div class="newblog">
        <ul>
          <h3><a href="index.php?g=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['a_title'];?>
</a></h3>
          <div class="autor"><span>作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['u_name'];?>
</span><span>分类：[<a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value['c_name'];?>
</a>]</span><span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value['a_click'];?>
</a>）</span><span>评论（<a href="/">30</a>）</span></div>
          <p><?php echo $_smarty_tpl->tpl_vars['v']->value['a_desc'];?>
 <a href="index.php?g=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
" target="_blank" class="readmore">全文</a></p>
        </ul>
        <figure><img src="App/Upload/Thumb/<?php echo $_smarty_tpl->tpl_vars['v']->value['a_thumber'];?>
" ></figure>
        <div class="dateview"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['a_time'],"Y-m-d");?>
</div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <div class="panel clearfix">
          <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
  </article>
  <aside>
    <div class="rnav">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <li class="<?php echo smarty_function_cycle(array('values'=>'rnav1,rnav2,rnav3,rnav4'),$_smarty_tpl);?>
 "><a href="index.php?g=Home&c=Article&a=index&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['c_name'];?>
</a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
        <li><span class="num1">1</span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><span class="num2">2</span><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><span class="num3">3</span><a href="/">女孩都有浪漫的小情怀――浪漫的求婚词</a></li>
        <li><span>4</span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><span>5</span><a href="/">女生清新个人博客网站模板</a></li>
        <li><span>6</span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><span>7</span><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><span>8</span><a href="/">时间煮雨-个人网站模板</a></li>
        <li><span>9</span><a href="/">花气袭人是酒香―个人网站模板</a></li>
      </ul>
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
        <li><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><a href="/">女孩都有浪漫的小情怀――浪漫的求婚词</a></li>
        <li><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><a href="/">女生清新个人博客网站模板</a></li>
        <li><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/">时间煮雨-个人网站模板</a></li>
        <li><a href="/">花气袭人是酒香―个人网站模板</a></li>
      </ul>
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
        <dl>
          <dt><img src="App/Public/Home/images/s8.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="App/Public/Home/images/s7.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
        <dl>
          <dt><img src="App/Public/Home/images/s6.jpg"> </dt>
          <dt> </dt>
          <dd>小林博客
            <time>8月7日</time>
          </dd>
          <dd><a href="/">博客色彩丰富，很是好看</a></dd>
        </dl>
        <dl>
          <dt><img src="App/Public/Home/images/003.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="App/Public/Home/images/002.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
      </ul>
      <h2>
        <p>最近访客</p>
        <ul>
          <img src="App/Public/Home/images/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
        </ul>
      </h2>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <?php echo '<script'; ?>
 src="App/Public/Home/js/silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }
}
