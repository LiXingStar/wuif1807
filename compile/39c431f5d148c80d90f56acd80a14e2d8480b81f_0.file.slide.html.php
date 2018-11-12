<?php
/* Smarty version 3.1.33, created on 2018-11-02 01:11:51
  from 'C:\wamp\www\sdk\app\view\slide.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdba457d2e1d1_66122860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39c431f5d148c80d90f56acd80a14e2d8480b81f' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\slide.html',
      1 => 1541120500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdba457d2e1d1_66122860 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="layui-side-scroll">
    <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
    <ul class="layui-nav layui-nav-tree" lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">管理栏目</a>
            <dl class="layui-nav-child">
                <dd><a href="/sdk/index.php/managecate/insert">添加栏目</a></dd>
                <dd><a href="/sdk/index.php/managecate">查看栏目</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">店铺栏目</a>
            <dl class="layui-nav-child">
                <dd><a href="/sdk/index.php/manageshop">添加店铺</a></dd>
                <dd><a href="/sdk/index.php/manageshop/query1">查看店铺</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item layui-nav-itemed">
            <a class="" href="javascript:;">店铺商品分类管理</a>
            <dl class="layui-nav-child">
                <dd><a href="/sdk/index.php/managegtype">添加商品分类</a></dd>
                <dd><a href="/sdk/index.php/managegtype/query">查看商品分类</a></dd>
            </dl>
        </li>
    </ul>
</div><?php }
}
