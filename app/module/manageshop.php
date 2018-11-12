<?php

class manageshop extends main
{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }

    /*
     * 展示添加店铺页面
     * */
    function init()
    {
        $db = new DB('category');
        $cate = $db->where("pid!=0")->query('*');
        $this->smarty->assign('info', $this->info);
        $this->smarty->assign('cate', $cate);
        $this->smarty->display('insertshop.html');
    }

    /*
     * 插入店铺信息
     * */
    function insert()
    {
        $data = $_POST;
        $db = new DB('shop');
        $rows = $db->insert($data);
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '店铺添加成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '店铺添加失败']);
        }
    }

   /**/
    function query1(){
       $this->smarty->assign('info',$this->info);
       $this->smarty->display('manageshop.html');
    }
    /*
    * 查看店铺
    * */
    function query()
    {
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $field = isset($_GET['field']) ? $_GET['field']:'id'; // 字段
        $order = isset($_GET['order']) ? $_GET['order']:'asc'; // 规则
        $db = new DB('shop');

        $offset = ($page-1) * $limit;

        $data = $_GET;
        $data = array_filter($data);
        unset($data['page']);
        unset($data['limit']);
        unset($data['field']);
        unset($data['order']);

        $count = $db->where($data)->order($field,$order)->query("count(*) as num")[0]['num'];

        $data = $db->where($data)->order($field,$order)->limit($offset,$limit)->query("*");



        echo json_encode([
            'code' => 0,
            'msg' => '数据获取成功',
            'count' => $count,
            'data' => $data
        ]);


    }

    function deletes(){
        $id =  $_GET['id'] ;
        $sql ="delete from shop where id in ($id)";

    }
}
