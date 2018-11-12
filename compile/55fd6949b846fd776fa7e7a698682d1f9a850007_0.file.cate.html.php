<?php
/* Smarty version 3.1.33, created on 2018-11-06 09:46:08
  from 'C:\wamp\www\sdk\app\view\cate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be162e0884713_42756340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55fd6949b846fd776fa7e7a698682d1f9a850007' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\cate.html',
      1 => 1541497564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be162e0884713_42756340 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	    <title>美食</title>
	    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
cate.css"/>
	    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_803380_o59quw6jbz.css
"/>
	    <?php echo '<script'; ?>
 type="text/javascript"  src="<?php echo JS_PATH;?>
rem.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll-probe.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cate.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<header>
			<a href="javascript:history.back();"><i class="iconfont icon-fanhui"></i></a>
			<h1><?php echo $_smarty_tpl->tpl_vars['currentCate']->value['title'];?>
</h1>
			<i></i>
		</header>
		<div class="sroll">
			<ul class="sp-list">
				<li cid="0">全部</li>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sonCate']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<li cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</ul>
		</div>
        <div class="title">
            <ul class="tt">
                <li class="hot" type="id">综合排序</li>
                <li type="score">好评优先</li>
                <li type="sale">销量</li>
                <li type="fee">筛选</li>
            </ul>
        </div>
		<div class="list">
            <div class="wrapper">
                <div class="scrollUp" style="display: none;"> 
                    <i class="iconfont icon-jiazai"></i>
                    <span>正在加载...</span>
                </div>
		        <ul class="store"></ul>
                <div class="scrollDown" style="display: none;">
                    <i class="iconfont icon-jiazai"></i>
                    <span>正在加载...</span>
                </div>
            </div>
        </div>
		<div class="loadBox">
			<div class="loadimg"></div>
		</div>
	</body>
</html>
<?php }
}
