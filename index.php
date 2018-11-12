<?php

// M V C
define('CSS_PATH','/sdk/static/css/');
define('JS_PATH','/sdk/static/js/');
define('LAYUIJS_PATH','/sdk/static/');
define('IMG_PATH','/sdk/static/images/');
define("FONT_PATH",__DIR__.'/libs/font.ttf');


require_once 'libs/Router.php';
require_once 'libs/libs/Smarty.class.php';
require_once 'libs/main.php';
require_once 'libs/db.php';
require_once 'libs/function.php';
require_once 'libs/code.php';
Router::init();

