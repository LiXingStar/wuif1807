<?php
/* Smarty version 3.1.33, created on 2018-11-09 01:33:32
  from 'C:\wamp\www\sdk\app\view\registeruser.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be4e3ec399157_08279934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9667002ef2c63baa2c9eb2e750592a1be4a88579' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\registeruser.html',
      1 => 1541727136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be4e3ec399157_08279934 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>注册</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
register.css"/>
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_803380_9bt5gt9s86w.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body>
<style>
    ::-webkit-input-placeholder{
        color: #999999;
    }
    input{
        color: #333!important;
    }
</style>
<img src="<?php echo IMG_PATH;?>
bg.jpg"/>
<form id="myform">
<div class="bc">
    <div class="head">
        <i class="iconfont icon-xiaochengxukongjianku-"></i>
    </div>
    <div class="box">
        <div class="number">
            <div class="xtb"></div>
            <input type="text" placeholder="请输入您的手机号" form="myform" name="phone"/>

        </div>

        <div class="number">
            <div class="xtb"></div>
            <input type="text" placeholder="请输入您的密码" form="myform" name="password" id="password"/>
        </div>
        <div class="number">
            <div class="xtb"></div>
            <input type="text" placeholder="请确认您的密码" form="myform" name="password1"/>
        </div>
        <!--<div class="second">
            <div class="yzm">
                <div class="xtb"></div>
                <input type="text" value="请输入验证码"/>
            </div>
            <button class="hq">
                获取验证码
            </button>
        </div>-->
        <button class="register"  form="myform" type="submit">
            请注册
        </button>
        <div class="footer">
            <a href="#">忘记密码?</a>
            <a href="/sdk/index.php/my/init">已有账号?请登陆</a>
        </div>
    </div>
</div>
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
registeruser.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
