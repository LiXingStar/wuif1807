<?php

class managegoods extends main
{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }

    function init()
    {
        $db = new DB('shop');
        $types = $db->query("id,sname");
        $this->smarty->assign('types', $types);
        $this->smarty->assign('info', $this->info);
        $this->smarty->display('insertgoods.html');
    }

    function goodstype()
    {
        $sid = $_GET['sid'];
        $db = new DB('goodstype');
        $result = $db->where("sid=$sid")->query('*');
        echo json_encode($result);
    }

    function insert()
    {
        $data= $_GET;
        $db = new DB('goods');
        $rows = $db->insert($data);
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '食品添加成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '食品添加失败']);
        }
    }


}