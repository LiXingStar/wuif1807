<?php
/* Smarty version 3.1.33, created on 2018-10-25 09:00:10
  from 'C:\wamp\www\sdk\app\view\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd1861af29411_31491441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88dc6de295babdb021543f4cf75aa023ba7194f1' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\header.html',
      1 => 1540457876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1861af29411_31491441 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>SDK后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo"><img src="<?php echo IMG_PATH;?>
logo.png" alt="" width="50px"> sdk后台管理</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left" style="display: none">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['thumb'];?>
" class="layui-nav-img">
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>

                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div><?php }
}
