<?php
/* Smarty version 3.1.33, created on 2018-10-31 02:40:44
  from 'C:\wamp\www\sdk\app\view\insertshop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd9162cc90619_97072968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8610d8ad06799c66bc2abb20f5f7f9b5a1438a7' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\insertshop.html',
      1 => 1540953639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bd9162cc90619_97072968 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <label class="layui-form-label">所属分类</label>
                    <div class="layui-input-block">
                        <select name="cid" lay-filter="aihao">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate']->value, 'v', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
 </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">店铺名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="sname" placeholder="请输入栏目名称" autocomplete="off" class="layui-input" required lay-verify="required">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">店铺公告</label>
                    <div class="layui-input-block">
                        <input type="text" name="notice" placeholder="店铺的公告" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">配送信息</label>
                    <div class="layui-input-block">
                        <input type="text" name="fee" placeholder="配送信息" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">店铺理念</label>
                    <div class="layui-input-block">
                        <input type="text" name="slogan" placeholder="店铺理念" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">联系方式</label>
                    <div class="layui-input-block">
                        <input type="text" name="sphone" placeholder="联系方式" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">店铺类型</label>
                    <div class="layui-input-block">
                        <input type="text" name="stype" placeholder="店铺类型" autocomplete="off" class="layui-input">
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
                <input type="hidden" name="sthumb" >
                <div class="layui-form-item">
                    <label class="layui-form-label">店铺实景图</label>
                    <div class="layui-input-block">
                        <div class="layui-upload">
                            <button type="button" class="layui-btn" id="test2">多图片上传</button>
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label"></label>
                    <ul class="imgBox">

                    </ul>
                </div>
                <input type="hidden" name="views">
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
insertshop.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
