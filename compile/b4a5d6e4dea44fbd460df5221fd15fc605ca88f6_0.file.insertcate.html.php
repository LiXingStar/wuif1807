<?php
/* Smarty version 3.1.33, created on 2018-10-26 06:30:11
  from 'C:\wamp\www\sdk\app\view\insertcate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd2b4734161c2_29285784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a5d6e4dea44fbd460df5221fd15fc605ca88f6' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\insertcate.html',
      1 => 1540535392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bd2b4734161c2_29285784 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <label class="layui-form-label">父级栏目</label>
                    <div class="layui-input-block">
                        <select name="pid" lay-filter="aihao">
                            <option value="0">一级栏目</option>
                            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">栏目的名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" placeholder="请输入栏目名称" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">上传缩略图</label>
                    <button type="button" class="layui-btn" id="test1">
                        <i class="layui-icon">&#xe67c;</i>上传图片
                    </button>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"></label>
                    <ul class="imgBox">

                    </ul>

                </div>
                <input type="hidden" name="thumb" >
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
insertcate.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
