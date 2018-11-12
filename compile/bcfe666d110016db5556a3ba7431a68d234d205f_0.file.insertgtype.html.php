<?php
/* Smarty version 3.1.33, created on 2018-11-02 01:17:37
  from 'C:\wamp\www\sdk\app\view\insertgtype.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdba5b117e524_60431532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcfe666d110016db5556a3ba7431a68d234d205f' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\insertgtype.html',
      1 => 1541121453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdba5b117e524_60431532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
insertcate.css">
    <div class="layui-side layui-bg-black">
       <?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 15px;">
            <form class="layui-form">
                <div class="layui-form-item">
                    <label class="layui-form-label">所属店铺</label>
                    <div class="layui-input-block">
                        <select name="sid" lay-filter="aihao" lay-verify="required">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['sname'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">分类名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" placeholder="请输入分类名称" autocomplete="off" class="layui-input" lay-verify="required">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="submit">立即提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="layui-footer">
       版权属于我
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
insertgtype.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
