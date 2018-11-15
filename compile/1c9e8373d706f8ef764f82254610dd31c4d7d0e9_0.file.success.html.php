<?php
/* Smarty version 3.1.33, created on 2018-11-14 09:31:18
  from 'C:\wamp\www\sdk\app\view\success.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bebeb66b2dee4_64493374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9e8373d706f8ef764f82254610dd31c4d7d0e9' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\success.html',
      1 => 1542187876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebeb66b2dee4_64493374 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	    <title>支付成功</title>
	    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
success.css" />
	    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_803380_9bt5gt9s86w.css"/>
	    <?php echo '<script'; ?>
 type="text/javascript"  src="<?php echo JS_PATH;?>
rem.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="success">
			  <img src="<?php echo IMG_PATH;?>
success.png"/>
			  <h1>您本次完成消费</h1>
			  <span>¥521.82</span>
			  <p>谢谢您的消费欢迎下次光临</p>
			  <div class="img">
			  	<img src="<?php echo IMG_PATH;?>
true.png"/>
			  </div>
		</div>
		<div class="btn">
			 <span>
			 	<li class="one"><a href="/sdk/index.php">返回首页</a></li>
			    <li class="two"><a href="">查看订单</a></li>
			 </span>
			
		</div>
	</body>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
success.js">
	<?php echo '</script'; ?>
>
</html>
<?php }
}
