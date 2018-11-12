<?php
/* Smarty version 3.1.33, created on 2018-11-09 08:55:01
  from 'C:\wamp\www\sdk\app\view\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be54b659d8123_94372135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c776f6eff45ff088462bffaf5d5a408ec501599' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\login.html',
      1 => 1541753700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be54b659d8123_94372135 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>登陆</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
login.css"/>
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
<form id="myform">
    <img src="<?php echo IMG_PATH;?>
bg.jpg"/>
    <div class="bc">
        <div class="head">
            <i class="iconfont icon-xiaochengxukongjianku-"></i>
        </div>
        <div class="box">
            <div class="number">
                <div class="xtb"></div>
                <input type="text" placeholder="请输入您的手机号" name="phone"/>

            </div>
            <div class="second">
                <div class="yzm">
                    <div class="xtb"></div>
                    <input type="text" placeholder="请输入验证码" name="code"/>
                </div>
                <div class="hq"><img src="/sdk/index.php/my/code" alt="" onclick="this.src='/sdk/index.php/my/code?id='+Date.now(); "></div>

            </div>
            <div class="number">
                <div class="xtb"></div>
                <input type="text" placeholder="请输入您的密码" name="password"/>
            </div>
            <button class="register">
                请登陆
            </button>
            <div class="footer">
                <span>已有账号?</span>
                <a href="/sdk/index.php/my/register">请注册</a>
            </div>
        </div>
        <div class="way">
            <a href="#" class="wx"><i class="iconfont icon-weixin"></i></a>
            <a href="#" class="qq"><i class="iconfont icon-qq"></i></a>
            <a href="#" class="wb"><i class="iconfont icon-weibo"></i></a>
        </div>
    </div>
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
loginuser.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
