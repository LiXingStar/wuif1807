<?php

class managegtype extends main
{
    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }

    function init()
    {
        $db = new DB('shop');
        $shop = $db->query("id,sname");
        $this->smarty->assign('shop', $shop);
        $this->smarty->assign('info', $this->info);
        $this->smarty->display('insertgtype.html');
    }

    function insert()
    {
        $db = new DB('goodstype');
        $rows = $db->insert($_POST);
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '分类添加成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '分类添加失败']);
        }
    }

    function query(){
      $this->smarty->assign('info',$this->info);
      $this->smarty->display('managegtype.html');
    }

    function query1(){
        $db =  new DB('goodstype');
        $sql = "select goodstype.*,shop.sname from goodstype,shop where goodstype.sid=shop.id";
        $result = $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

        $data['code'] = 0;
        $data['msg'] = '数据获取成功';
        $data['count'] = count($result);
        $data['data'] = $result;

        echo json_encode($data);
    }

    function update(){
        $id = $_POST['id'];
        $type = $_POST['type'];
        $value = $_POST['value'];
        $sql = "update goodstype set $type='$value' where gid=$id";
        $db = new DB('goodstype');
        $rows = $db->update($sql);
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '修改成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '修改失败']);
        }
    }
}
