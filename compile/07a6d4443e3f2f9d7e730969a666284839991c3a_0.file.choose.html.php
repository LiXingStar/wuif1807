<?php
/* Smarty version 3.1.33, created on 2018-11-12 09:44:20
  from 'C:\wamp\www\sdk\app\view\choose.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be94b74620497_54570012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a6d4443e3f2f9d7e730969a666284839991c3a' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\choose.html',
      1 => 1542015858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be94b74620497_54570012 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>商品选购</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
choose.css"/>
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_803380_p1t3n12jncf.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>

</head>
<body>
<!--商店详情-->
<div class="shopmark">
    <div class="shopmessage">
        <h2 class="shopname"><?php echo $_smarty_tpl->tpl_vars['shop']->value['sname'];?>
</h2>
        <ul class="details">
            <li class="detailclass">
                <h3><?php echo $_smarty_tpl->tpl_vars['shop']->value['score'];?>
</h3>
                <p>评分</p>
            </li>
            <li class="detailclass">
                <h3><?php echo $_smarty_tpl->tpl_vars['shop']->value['sale'];?>
单</h3>
                <p>月售</p>
            </li>
            <li class="detailclass">
                <h3>蜂鸟专送</h3>
                <p>约20分钟</p>
            </li>
            <li class="detailclass">
                <h3><?php echo $_smarty_tpl->tpl_vars['shop']->value['fee'];?>
</h3>
                <p>配送费</p>
            </li>
            <li class="detailclass">
                <h3>784米</h3>
                <p>距离</p>
            </li>
        </ul>
        <h3 class="gonggao"><span>公告</span></h3>
        <p><?php echo $_smarty_tpl->tpl_vars['shop']->value['notice'];?>
</p>
    </div>
    <div class="close"><img src="<?php echo IMG_PATH;?>
close.png" alt=""></div>
</div>
<!--顶部-->
<div class="head">
    <ul class="headimg">
        <img src="<?php echo IMG_PATH;?>
strawberry.png"/>
    </ul>
    <div class="top">
    </div>
    <div class="btn">
        <div class="btnl">
            <a href="javascript:history.back()"><i class="iconfont icon-fanhui"></i></a>
        </div>
        <div class="btnr">
            <a href="#"><i class="iconfont icon-shousuo"></i></a>
            <a href="#"><i class="iconfont icon-caidanheng"></i></a>
        </div>
    </div>
    <div class="logo">
        <img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sthumb'];?>
" alt=""/>
    </div>
</div>
<div class="dpxq">
    <div class="sname"><p class="stitle"><?php echo $_smarty_tpl->tpl_vars['shop']->value['sname'];?>
</p>
        <div class="img"><img src="<?php echo IMG_PATH;?>
leftjt.png" alt=""></div>
    </div>
    <div class="pj"><p>评价<?php echo $_smarty_tpl->tpl_vars['shop']->value['score'];?>
</p>
        <p>月售<?php echo $_smarty_tpl->tpl_vars['shop']->value['sale'];?>
</p>
        <p>配送费<?php echo $_smarty_tpl->tpl_vars['shop']->value['fee'];?>
</p></div>
    <!--<p class="j">
        <img src="<?php echo IMG_PATH;?>
juan.png" alt="" />
    </p>-->
    <div class="gg"><span>公告:</span>
        <p><?php echo $_smarty_tpl->tpl_vars['shop']->value['notice'];?>
</p></div>
</div>
<div class="hh"></div>
<!--点餐，评价，商家-->
<div class="text">
    <ul>
        <li class="diancan hot">点餐</li>
        <li class="appraise">评价</li>
        <li class="shangjia">商家</li>
    </ul>
</div>
<!--列表-->
<div class="list">
    <!--点餐-->
    <div class="listn">
        <!--商品分类-->
        <div class="scrleft">
            <ul class="left">
            </ul>
        </div>
        <!--商品-->
        <div class="scrright">
            <ul class="scrollr">
            </ul>

        </div>

    </div>
    <!--评价-->
    <div class="pingjia">
        <section>
            <div class="pingfen">
                <div class="score"><p>4.7</p></div>
                <div class="businessscore">
                    <p>商家评分</p>
                    <div class="star">
                        <img src="<?php echo IMG_PATH;?>
star-yellow.png" alt="">
                    </div>
                </div>

            </div>
            <div class="variousgrades">
                <div class="wdbz">
                    <div class="taste">
                        <p>味道</p>
                        <p class="score">4.7</p>
                    </div>
                    <div class="pack">
                        <p>包装</p>
                        <p class="score">4.8</p>
                    </div>
                </div>
                <div class="fees">
                    <p>配送</p>
                    <p class="score">4.9</p>
                </div>
            </div>
        </section>
    </div>
    <!--商家-->
    <div class="business">
        <section class="section">
            <h3 class="section-title">配送信息</h3>
            <div class="delivery">
                <span>蜂鸟专送</span>
                <p>约21分钟送达，距离784m</p>
            </div>
            <div class="songfee">配送费￥0.5</div>
        </section>
        <section class="section">
            <h3 class="section-title">实景图</h3>
            <div class="photos">
                <div class="photo1"><img src="<?php echo IMG_PATH;?>
row.png" alt=""></div>
                <div class="photo2"><img src="<?php echo IMG_PATH;?>
row.png" alt=""></div>
            </div>
        </section>
        <section class="section">
            <h3 class="section-title">商家信息</h3>
            <ul class="seller">
                <li class="brief">暂无简介</li>
                <li class="type">
                    <span>品类</span>
                    <span>盖浇饭, 米粉面馆</span>
                </li>
                <li class="type">
                    <span>商家电话</span>
                    <span>15034283391</span>
                </li>
            </ul>
        </section>
    </div>
</div>
<!--满减-->
<div class="tab">
    <p class="manjian">新用户下单立减10元</p>
    <div class="oldchoose">
        <p>已选购商品</p>
        <p>清空</p>
    </div>
    <ul class="lxCar">
        <li class="lxcarList">
            <span class="lxName">酸辣土豆丝</span>
            <span class="lxPrice">¥10</span>
            <span class="lxOpetion">
                <div class="jiaj">
                    <div class="jian">
                        <img src="/sdk/static/images/jian.png"/>
                    </div>
                    <p class="numbers" style="display: block;">1</p>
                    <div class="jia"><img src="/sdk/static/images/jia.png"/></div>
                </div>
            </span>
        </li>
        <li class="lxcarList">
            <span class="lxName">酸辣土豆丝</span>
            <span class="lxPrice">¥10</span>
            <span class="lxOpetion">
                <div class="jiaj">
                    <div class="jian">
                        <img src="/sdk/static/images/jian.png"/>
                    </div>
                    <p class="numbers" style="display: block;">1</p>
                    <div class="jia"><img src="/sdk/static/images/jia.png"/></div>
                </div>
            </span>
        </li>
        <li class="lxcarList">
            <span class="lxName">酸辣土豆丝</span>
            <span class="lxPrice">¥10</span>
            <span class="lxOpetion">
                <div class="jiaj">
                    <div class="jian">
                        <img src="/sdk/static/images/jian.png"/>
                    </div>
                    <p class="numbers" style="display: block;">1</p>
                    <div class="jia"><img src="/sdk/static/images/jia.png"/></div>
                </div>
            </span>
        </li>
        <li class="lxcarList">
            <span class="lxName">酸辣土豆丝</span>
            <span class="lxPrice">¥10</span>
            <span class="lxOpetion">
                <div class="jiaj">
                    <div class="jian">
                        <img src="/sdk/static/images/jian.png"/>
                    </div>
                    <p class="numbers" style="display: block;">1</p>
                    <div class="jia"><img src="/sdk/static/images/jia.png"/></div>
                </div>
            </span>
        </li>
        <li class="lxcarList">
            <span class="lxName">酸辣土豆丝</span>
            <span class="lxPrice">¥10</span>
            <span class="lxOpetion">
                <div class="jiaj">
                    <div class="jian">
                        <img src="/sdk/static/images/jian.png"/>
                    </div>
                    <p class="numbers" style="display: block;">1</p>
                    <div class="jia"><img src="/sdk/static/images/jia.png"/></div>
                </div>
            </span>
        </li>
    </ul>
</div>


<div class="footer">
    <!--购物车-->
    <div class="footer-l">
        <!--购物车中的数目-->
        <span class="nums">1</span>
        <!--购物车-->
        <div class="gouwuche">
            <div class="neiceng"><i class="iconfont icon-gouwuche1"></i></div>
        </div>
    </div>
    <div class="footer-c">
        <span><p class="bfprice">¥514.8</p> <s class="nowprice">¥514.8</s></span>
        <span>另需配送费6元</span>
    </div>
    <a class="footer-r">
        去结算
    </a>
</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
iscroll-probe.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
choose.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
