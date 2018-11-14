<?php
/* Smarty version 3.1.33, created on 2018-11-14 02:16:26
  from 'C:\wamp\www\sdk\app\view\confirm.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beb857a991432_31990943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bcb5f344d0f17c136341ece5226cb6313f571a7' => 
    array (
      0 => 'C:\\wamp\\www\\sdk\\app\\view\\confirm.html',
      1 => 1542160932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beb857a991432_31990943 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	    <title>去支付</title>
	    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
confirm.css" />
	    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_803380_9bt5gt9s86w.css"/>
	    <?php echo '<script'; ?>
 type="text/javascript"  src="<?php echo JS_PATH;?>
rem.js" ><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
	</head>
    <body>
    	   <div class="font">
    	   	  <header>
			  <a href="javascript:history.back();"><i class="iconfont icon-fanhui"></i></a>
		    </header>
		    <ul class="address">
				<li>订单配送至<div class="jia" style="font-size: .22rem;">家</div></li>
				<li class="hot">山西省朔州市应县 <i class="iconfont icon-icon"></i></li>
				<li>史佳璇&nbsp;18835513369</li>
		    </ul>
		  <div class="order">
		    <ul class="top">
		   	  <li class="one"> 
		   		<div id="left">
		   		   <h5>送达时间</h5>
		   		   <a href="#">蜂鸟专送</a>
		   	    </div>
		   	    <div id="right">
		   	    	<p>尽快送达(预计12:38送达)</p>
		   	    	<i class="iconfont icon-icon"></i>
		   	    </div>
		   	</li>
		   	<li class="two">
		   		<div class="l">
		   			<h5>支付方式</h5>
		   			<p>新用户下单立减10元</p>
		   		</div>
		   		<div class="r">
		   			在线支付
		   		</div>
		   	</li>
		   </ul>
		   <ul class="bottom">
		   	    <h1>快快客蛋糕店</h1>
		   	    <div class="four">
		   	    	<li>
		   	    		<a href="#"><img src="./img/row.png" alt="" /></a>
		   	    		<div class="price">
		   	    			<h1>牛奶蛋糕</h1>
		   	    		 <span><i class="iconfont icon-chenghaoshixin"></i></span>
		   	    		 <s>¥89.9</s><p>¥89.0</p>
		   	    		</div>
		   	    	</li>
					<li>
						<a href="#"><img src="./img/row.png" alt="" /></a>
		   	    		<div class="price">
		   	    			<h1>牛奶蛋糕</h1>
		   	    		 <span><i class="iconfont icon-chenghaoshixin"></i></span>
		   	    		 <s>¥89.9</s><p>¥89.0</p>
		   	    		</div>
					</li>
					<li>
						<a href="#"><img src="./img/row.png" alt="" /></a>
		   	    		<div class="price">
		   	    			<h1>牛奶蛋糕</h1>
		   	    		 <span><i class="iconfont icon-chenghaoshixin"></i></span>
		   	    		 <s>¥89.9</s><p>¥89.0</p>
		   	    		</div>
					</li>
					<li>
						<a href="#"><img src="./img/row.png" alt="" /></a>
		   	    		<div class="price">
		   	    			<h1>牛奶蛋糕</h1>
		   	    		 <span><i class="iconfont icon-chenghaoshixin"></i></span>
		   	    		 <s>¥89.9</s><p>¥89.0</p>
		   	    		</div>
					</li>
		   	    </div>
			   	<div class="five">
			   		<li>
			   			<div class="newp">新客</div>
			   			<h1>本店新客立减</h1>
			   			<p>-¥2</p>
			   		</li>
					<li>
						<div class="redbox">红包</div>
						<div class="three"><a href="#">三个可用</a></div>
					</li>
					<li>
						<div class="count">
						   <h5>小计</h5><p>¥521.82</p>
						</div>
					</li>
					<li>
						<div class="cjfs">餐具份数</div>
						<div class="nochoose">未选择<i class="iconfont icon-icon"></i></div>
					</li>
					<li>
						<div class="cjfs">订单备注</div>
						<div class="kw">口味,偏好<i class="iconfont icon-icon"></i></div>
					</li>
			   	</div>
		   </ul>
		</div>
		<div class="main"></div>
		
    	   </div>
			
		
		<div class="footer">
	    	<div class="footer-l">
	    		<p>¥521.82</p>
	    		<span>| &nbsp;已优惠¥521.82</span>
	    	</div>
	    	<a class="footer-r">
	    			去支付
	    	</a>
	    </div>
		   <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
confirm.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
