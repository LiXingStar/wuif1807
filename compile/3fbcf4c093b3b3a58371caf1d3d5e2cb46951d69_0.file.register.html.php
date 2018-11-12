<?php
/* Smarty version 3.1.33, created on 2018-10-24 09:51:14
  from 'C:\wamp\www\sdk\app\view\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd04092970197_74559909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fbcf4c093b3b3a58371caf1d3d5e2cb46951d69' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\register.html',
      1 => 1540374671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd04092970197_74559909 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/sdk/static/css/layui.css">
</head>
<body>
<form class="layui-form"> <!-- 提示：如果你不想用form，你可以换成div等任何一个普通元素 -->
    <div class="layui-form-item">
        <label class="layui-form-label layui-icon layui-icon-username"></label>
        <div class="layui-input-block">
            <input type="text" name="" placeholder="请输入" autocomplete="off" class="layui-input">
        </div>
    </div>
</form>
<?php echo '<script'; ?>
 src="/sdk/static/layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    let form  = layui.form;
    form.on('select(aihao)',function(data){
        console.log(data);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
