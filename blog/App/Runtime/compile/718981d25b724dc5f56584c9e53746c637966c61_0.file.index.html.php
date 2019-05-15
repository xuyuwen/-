<?php
/* Smarty version 3.1.32, created on 2018-11-26 21:40:23
  from 'F:\code\blog\App\Home\View\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfbf7c70a6046_73140303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718981d25b724dc5f56584c9e53746c637966c61' => 
    array (
      0 => 'F:\\code\\blog\\App\\Home\\View\\Index\\index.html',
      1 => 1543239620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/menu.html' => 1,
  ),
),false)) {
function content_5bfbf7c70a6046_73140303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\code\\blog\\Frame\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>黑色Html5响应式个人博客模板――主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="App/Public/Home/css/base.css" rel="stylesheet">
<link href="App/Public/Home/css/index.css" rel="stylesheet">
<link href="App/Public/Home/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<style>
    .qrcode{
      margin-left: 63px;
    }
</style>
</head>
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="js/modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php $_smarty_tpl->_subTemplateRender("file:../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>1), 0, false);
?>
  <article>
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommend']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <div class="blogs">
        <h3><a href="index.php?g=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['a_title'];?>
</a></h3>
        <figure><img src="App/Upload/Thumb/<?php echo $_smarty_tpl->tpl_vars['v']->value['a_thumber'];?>
" ></figure>
        <ul>
          <p><?php echo $_smarty_tpl->tpl_vars['v']->value['a_desc'];?>
</p>
          <a href="index.php?g=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
"  class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['u_name'];?>
</span><span>分类：【<a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value['c_name'];?>
</a>】</span><span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value['a_click'];?>
</a>）</span><span>评论（<a href../="/"><?php echo $_smarty_tpl->tpl_vars['v']->value['a_comment'];?>
</a>）</span></p>
        <div class="dateview"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['a_time'],"Y-m-d");?>
</div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于杨青</span></a></div>
    <div class="topspaceinfo">
      <h1>执子之手，与子偕老</h1>
      <p>于千万人之中，我遇见了我所遇见的人....</p>
    </div>
    <div class="about_c">
      <p>网名：DanceSmile | 即步非烟</p>
      <p>职业：Web前端设计师、网页设计 </p>
      <p>籍贯：四川省―成都市</p>
      <p>电话：13662012345</p>
      <p>邮箱：dancesmiling@qq.com</p>
    </div>
    
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <li><a href="/">犯错了怎么办？</a></li>
        <li><a href="/">两只蜗牛艰难又浪漫的一吻</a></li>
        <li><a href="/">春暖花开-走走停停-发现美</a></li>
        <li><a href="/">琰智国际-Nativ for Life官方网站</a></li>
        <li><a href="/">个人博客模板（2014草根寻梦）</a></li>
        <li><a href="/">简单手工纸玫瑰</a></li>
        <li><a href="/">响应式个人博客模板（蓝色清新）</a></li>
        <li><a href="/">蓝色政府（卫生计划生育局）网站</a></li>
      </ul>
      <h2>
        <p class="tj_t2">推荐文章</p>
      </h2>
      <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommend']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li><a href="index.php?g=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['a_title'];?>
</a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
      </ul>
      }
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="/">杨青个人博客</a></li>
        <li><a href="/">3DST技术社区</a></li>
        <li><a href="/"> 作者信息二维码</a></li>
        <div class ='qrcode'> <?php echo $_smarty_tpl->tpl_vars['img']->value;?>
</div>

      </ul>
    </div>
    <div class="copyright clear">
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
