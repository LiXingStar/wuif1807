<?php
class index extends main {
    function __construct()
    {
        parent::__construct();
    }
    function init(){
        $db = new DB('category');
        $cate = $db->order('cid','asc')->where("pid=0")->query('*');
        $number =ceil( count($cate) / 8);
        $this->smarty->assign('cate',$cate);
        $this->smarty->assign('number',$number-1);
        $this->smarty->display('index.html');
    }

}

