<?php

class managecate extends main
{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->info = $_SESSION['info'];
    }

    function init()
    {
        $this->smarty->assign('info', $this->info);
        $this->smarty->display('managecate.html');
    }

    function insert()
    {
        $db = new DB('category');
        $menu = new Menu();
        $str = $menu->getCate($db->mysql, 'category', 0, 0);
        $this->smarty->assign('str', $str);
        $this->smarty->assign('info', $this->info);
        $this->smarty->display('insertcate.html');
    }

    function insert1()
    {
        $db = new DB('category');
        $data = $_GET;
        $sql = "insert into category (pid,title,thumb) values ('{$data['pid']}','{$data['title']}','{$data['thumb']}')";
        $rows = $db->insert($sql);
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '栏目插入成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '栏目插入失败']);
        }
    }

    function query()
    {

        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $offset = ($page - 1) * $limit;
        $db = new DB('category');


        /*
         *  [
         *   limit,
         *   page,
         *
         *   cid,
         *   title,
         *   pid
         * ]
         * */
        $arr = $_GET;

        $arr = array_filter($arr);
        unset($arr['limit']);
        unset($arr['page']);

        if (!count($arr)) {
            $wherestr = '';
        } else {
            $wherestr = ' where';
            foreach ($arr as $key => $v) {
                $wherestr .= " $key='$v' and";
            }

            $wherestr = substr($wherestr, 0, -3);

        }


        $count = $db->mysql->query("select * from category $wherestr")->fetch_all(MYSQLI_ASSOC);

        $sql = "select * from category $wherestr order by cid asc limit $offset,$limit";

        $result = $db->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);

        $data = [];
        $data['code'] = 0;
        $data['msg'] = '数据获取成功';
        $data['count'] = count($count);
        $data['data'] = $result;
        echo json_encode($data);
    }

    function delete()
    {
        $cid = $_GET['cid'];
        $db = new DB('category');
        $rows = $db->delete("cid=$cid");
        if ($rows == 1) {
            echo json_encode(['code' => 0, 'msg' => '删除成功']);
        } else {
            echo json_encode(['code' => 1, 'msg' => '删除失败']);
        }
    }

    function edit()
    {
        $cid = $_GET['cid'];
        $db =  new DB('category');
        $menu = new Menu();
        $str = $menu->getCate($db->mysql, 'category', 0, 0,$cid);

        $cate = $db->where("cid=$cid")->query('*')[0];

        $this->smarty->assign('str',$str);
        $this->smarty->assign('info',$this->info);
        $this->smarty->assign('cate',$cate);
        $this->smarty->display('editcate.html');

    }

    function update(){
        $data = $_GET;
        $pid = $data['pid'];
        $title = $data['title'];
        $thumb = $data['thumb'];
        $cid = $data['cid'];

        unset($data['cid']);
        $db =  new DB('category');

//        $sql ="update category set pid='$pid',title='$title',thumb='$thumb' where cid='$cid'";
       /* $rows = $db->where("cid=$cid")->update("pid='$pid',title='$title',thumb='$thumb' ");*/
        $rows = $db->where("cid=$cid")->update($data);
        if($rows == 1){
            echo json_encode(['code'=>0,'msg'=>'栏目修改成功']);
        }else{
            echo json_encode(['code'=>1,'msg'=>'栏目修改失败']);
        }

    }

    function demo(){
        $arr = [1,2,3];
        var_dump(join(',',$arr));

    }

}