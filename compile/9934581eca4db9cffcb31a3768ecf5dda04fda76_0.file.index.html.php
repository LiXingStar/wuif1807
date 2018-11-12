<?php
/* Smarty version 3.1.33, created on 2018-11-06 05:30:19
  from 'C:\wamp\www\sdk\app\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be126eb7800c6_92616027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9934581eca4db9cffcb31a3768ecf5dda04fda76' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\index.html',
      1 => 1541482176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be126eb7800c6_92616027 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
swiper-4.4.1.min.css"/>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css"/>
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_803380_9bt5gt9s86w.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="position">
    <i class="iconfont icon-dingweiweizhi"></i>
    <h4>山西省朔州市</h4>
    <div class="input-search">
        <a href="search.html"><i class="iconfont icon-sousuo"> </i></a>
    </div>
</div>

<!--中间-->
<div class="main">
    <div class="swiper-container lxCate">
        <div class="swiper-wrapper">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['number']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['number']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <?php $_smarty_tpl->_assignInScope('foo', $_smarty_tpl->tpl_vars['i']->value*8+7);?>
            <?php if ($_smarty_tpl->tpl_vars['foo']->value > count($_smarty_tpl->tpl_vars['cate']->value)-1) {?>
            <?php $_smarty_tpl->_assignInScope('foo', count($_smarty_tpl->tpl_vars['cate']->value)-1);?>
            <?php }?>
            <div class="swiper-slide">
                <ul class="select">
                    <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['foo']->value+1 - ($_smarty_tpl->tpl_vars['i']->value*8) : $_smarty_tpl->tpl_vars['i']->value*8-($_smarty_tpl->tpl_vars['foo']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value*8, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
                    <li>
                        <a href="/sdk/index.php/food?cid=<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['cid'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['thumb'];?>
" alt=""/>
                            <p><?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->tpl_vars['j']->value]['title'];?>
</p>
                        </a>
                    </li>
                    <?php }
}
?>
                </ul>
            </div>
            <?php }
}
?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div><!--左箭头-->
        <div class="swiper-button-next"></div><!--右箭头-->
    </div>

    <!--分类-->

    <div class="lxHr" style="height: 0.5rem;background: #ffffff"></div>

    <div class="swiper-container ad" style="border-radius: 10px;">
        <div class="swiper-wrapper box">
            <div class="swiper-slide li"><a href="#"><img src="<?php echo IMG_PATH;?>
ban.png"/></a></div>

            <div class="swiper-slide li"><a href="#"><img src="<?php echo IMG_PATH;?>
l.png"/></a></div>

        </div>
        <!--Add Pagination-->
        <div class="swiper-pagination"></div>
    </div>
    <!--商家店铺-->
    <div class="sj">
        <div class="sj-l">
            <span class="name1"></span>
            <span class="name2"></span>
            <span class="name3"></span>
            <span class="name4"></span>
        </div>
        <div class="sj-c">
            <span class="name1">商家店铺</span>
            <span class="name2">RECOMEDE FOOD</span>
        </div>
        <div class="sj-r">
            <span class="name1"></span>
            <span class="name2"></span>
            <span class="name3"></span>
            <span class="name4"></span>
        </div>
    </div>
    <!--四种方向-->
    <div class="title">
        <ul class="tt">
            <li class="hot"><a href="#">综合排序</a></li>
            <li><a href="#">好评优先</a></li>
            <li><a href="#">距离最近</a></li>
            <li><a href="#">筛选<i class="iconfont icon-shaixuan"></i></a></li>
        </ul>
    </div>
    <!--店铺-->
    <div class="wrapper">
    <ul class="store">
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div>
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div> 
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div> 
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="./img/stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="./img/star-yellow.png"/>
							</div>
						</div> 
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
        <li>
            <a href="choose.html"><img src="<?php echo IMG_PATH;?>
row.png"/></a>
            <div class="right">
                <h4>牛奶蛋糕</h4>
                <span>
		   	  			<div class="star">
							<div class="starGray">
								<img src="<?php echo IMG_PATH;?>
stargray.png"/>
							</div>
							<div class="star5" style="width: 60%;">
								<img src="<?php echo IMG_PATH;?>
star-yellow.png"/>
							</div>
						</div> 
						<p class="count">月销售198</p> <p class="distance">1.0KM</p></span>
                <span><p class="send">起送¥25</p> <p class="free">配送免费</p></span>
                <span><span class="sp">满减</span><p class="preferential">满70减22,满168减55,满399...</p></span>
                <span><span class="sd">首单</span><p class="preferential">新用户下单减88</p></span>
            </div>
        </li>
    </ul>
    </div>
</div>
<!--底部-->
<div class="footer">
    <ul>
        <li class="hot">
            <a href="#">
                <i class="iconfont icon-shouye1"></i>
            </a>
            <p>首页</p>
        </li>
        <li>
            <a href="#">
                <i class="iconfont  icon-yanjing"></i>
            </a>
            <p>发现</p>
        </li>
        <li>
            <a href="order.html">
                <i class="iconfont icon-order"></i>
            </a>
            <p>订单</p>
        </li>
        <li>
            <a href="my.html">
                <i class="iconfont icon-wode1"></i>
            </a>
            <p>我的</p>
        </li>
    </ul>

</div>

</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper-4.4.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll-probe.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index.js"><?php echo '</script'; ?>
>
<?php }
}
