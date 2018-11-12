<?php
/* Smarty version 3.1.33, created on 2018-10-26 00:52:30
  from 'C:\wamp\www\sdk\app\view\adminlogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd2654ebb1c32_66220565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64af6f8790382412ab0f9cec8d15c593996bcaa0' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\adminlogin.html',
      1 => 1540515137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd2654ebb1c32_66220565 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>送的快后台登陆</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
adminlogin.css">
</head>
<body>
<div class="box">
    <h2>sdk(cms)后台登陆</h2>
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label layui-icon layui-icon-username"></label>
            <div class="layui-input-block">
                <input type="text" name="username" required  lay-verify="required|username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label layui-icon layui-icon-password"></label>
            <div class="layui-input-block">
                <input type="password" name="password" required lay-verify="required|password" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>

        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            </div>
        </div>
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
adminlogin.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
