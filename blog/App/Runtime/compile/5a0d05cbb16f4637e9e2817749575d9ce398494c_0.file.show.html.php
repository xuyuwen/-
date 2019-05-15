<?php
/* Smarty version 3.1.32, created on 2018-11-29 08:54:02
  from 'F:\code\blog\App\Home\View\Article\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bff38aa818e67_30536205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a0d05cbb16f4637e9e2817749575d9ce398494c' => 
    array (
      0 => 'F:\\code\\blog\\App\\Home\\View\\Article\\show.html',
      1 => 1543452838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../common/menu.html' => 1,
  ),
),false)) {
function content_5bff38aa818e67_30536205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'F:\\code\\blog\\Frame\\Vendor\\Smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="App/Public/Home/css/base.css" rel="stylesheet">
<link href="App/Public/Home/css/style.css" rel="stylesheet">
<link href="App/Public/Home/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="js/modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
<style type="text/css">
   .ds-replybox img {
    float:left;
    width:76px;
    height:76px;
  }
  textarea {
    box-shadow: none;
    color: #999;
    height: 54px;
    margin: 0;
    overflow: auto;
    padding: 10px;
    resize: none;
    width: 80%;
    margin-left:10px;
  }
  button {
    margin-top:10px;
    margin-left:85px;
    font-size: 14px;
    font-weight: bold;
    height: 32px;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    transition: all 0.15s linear 0s;
    width: 100px;
  }
  .otherlink dl {
    display:block;
    width:100%;
    height:65px;
    padding:20px 0;
    border-bottom:1px #DEDEDE solid;
  }
  .otherlink dt {
    float:left;
  }
  .otherlink h3 {
    color:#D23;
  }
  .otherlink h3,.otherlink p {
    line-height:22px;
    text-indent:10px;
  }
  .otherlink .msg {
     color:#333;
  }
  .otherlink .addtime {
     color:#999;
  }
  .logform input {
    width:140px;
    height:30px;
  }
  .pagenum ul{
    float: left;
    margin-left: 10px;
  }
  .pagenum li{
    float: left;
    margin-left: 10px;
  }
  .clearfix{
    display: block;
    content: '';
    clear: both;
  }
  .clear{
    zoom: 1;
  }
  .pagenum{
    margin-left: 200px;
  }
</style>
</head>
<body>
<div class="ibody">
 <?php $_smarty_tpl->_subTemplateRender("file:../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu'=>1), 0, false);
?>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">模板分享</a>><a href="1/">个人博客模板</a></h2>
    <div class="index_about">
      <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['art']->value['a_title'];?>
</h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art']->value['a_time'],'Y-m-d H:i:s');?>
</span><span>编辑：<?php echo $_smarty_tpl->tpl_vars['art']->value['u_name'];?>
</span><span>浏览（<?php echo $_smarty_tpl->tpl_vars['art']->value['a_click'];?>
）</span><span>评论览（14）</span></p>
      <ul class="infos">
       <?php echo $_smarty_tpl->tpl_vars['art']->value['a_content'];?>

      </ul>
      <div class="keybq">
        <p><span>关键字词</span>：<?php echo $_smarty_tpl->tpl_vars['art']->value['tags'];?>
</p>
      </div>
      <div class="nextinfo">
        <?php if ($_smarty_tpl->tpl_vars['pre']->value['a_title'] == false) {?>
        <p>上一篇：<a href="">没有了</a></p>
        <?php } else { ?>
        <p>上一篇：<a href="index.php?g=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['pre']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pre']->value['a_title'];?>
</a></p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['next']->value['a_title'] == false) {?>
        <p>下一篇：<a href="#">没有了</a></p>
        <?php } else { ?>
        <p>下一篇：<a href="index.php?g=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['next']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['next']->value['a_title'];?>
</a></p>
        <?php }?>
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assoc']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
          <li><a href="index.php?g=Home&c=Article&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
" "><?php echo $_smarty_tpl->tpl_vars['v']->value['a_title'];?>
</a></li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
        </ul>
      </div>

    <div style="clear:both; height:10px;"></div>
      <div class="otherlink">
          <h2>评论列表</h2>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
          <dl>
            <dt><img src="" alt=""></dt>
            <dd>
              <h3>评论者:</h3>
              <p>评论内容:<?php echo $_smarty_tpl->tpl_vars['v']->value['r_content'];?>
</p>
              <p>评论时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['r_time'],'Y-m-d H-i-s');?>
</p>
            </dd>
          </dl>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['reply']->value) {?>
      <div class="pagenum clearfix"> <?php echo $_smarty_tpl->tpl_vars['pagenum']->value;?>
</div>
      <?php }?>
    <div style="clear:both; height:10px;"></div>
     <div class="otherlink">
        <h2>发布评论</h2>
      </div>
      <div style="clear:both; height:10px;"></div>
        <?php if (isset($_SESSION['userInfo']['u_name'])) {?>
         <?php echo $_SESSION['userInfo']['u_name'];?>
欢迎您回来
         <a href="index.php?g=Admin&c=Privilege&a=loginout">退出</a>
         <?php }?>
        
  
      <form class="logform" action="index.php?g=Admin&c=Privilege&a=verify" method="post">
        用户名：<input type="text" name="username" />&nbsp;&nbsp;密码：<input type="password" name="password" />&nbsp;&nbsp;
        <input type="hidden" name='artid'  />
        <input type='submit' name='submit' value='登陆' />
      </form>
    <div style="clear:both; height:10px;"></div>
    
    <div class="ds-replybox">
        
        <img alt="" src="">
   
        <img alt="" src="https://avatar.duoshuo.com/avatar-50/587/39630.jpg">
  
        <form action="index.php?g=Home&c=Article&a=addcomment" method="post">
        <?php if (isset($_SESSION['userInfo']['u_id'])) {?>
        <input type='hidden' name='userid' value="<?php echo $_SESSION['userInfo']['u_id'];?>
" />
        <?php }?>
        <input type='hidden' name='artid' value='<?php echo $_smarty_tpl->tpl_vars['art']->value['a_id'];?>
' />
        <textarea placeholder="说点什么吧…" title="Ctrl+Enter快捷提交" name="content"></textarea><pre class="ds-hidden-text"></pre>
        </div>
        <div class="ds-post-toolbar">
        <div class="ds-post-options ds-gradient-bg"><span class="ds-sync"></span>
        </div>
        <button type="submit" class="ds-post-button">发布</button>
        <div class="ds-toolbar-buttons"><a title="插入表情" class="ds-toolbar-button ds-add-emote"></a>
        </div>
        </div>
        </form>
      </div>
  </article>
  

  <aside>
    <div class="rnav">
      <li class="rnav1 "><a href="/">日记</a></li>
      <li class="rnav2 "><a href="/">欣赏</a></li>
      <li class="rnav3 "><a href="/">程序人生</a></li>
      <li class="rnav4 "><a href="/">经典语录</a></li>
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
        <li><span class="num1">1</span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><span class="num2">2</span><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><span class="num3">3</span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><span>4</span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><span>5</span><a href="/">女生清新个人博客网站模板</a></li>
        <li><span>6</span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><span>7</span><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><span>8</span><a href="/">时间煮雨-个人网站模板</a></li>
        <li><span>9</span><a href="/">花气袭人是酒香—个人网站模板</a></li>
      </ul>
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
        <li><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><a href="/">女生清新个人博客网站模板</a></li>
        <li><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/">时间煮雨-个人网站模板</a></li>
        <li><a href="/">花气袭人是酒香—个人网站模板</a></li>
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
