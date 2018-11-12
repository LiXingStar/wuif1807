<?php

class shop extends main
{
    public function __construct()
    {
        parent::__construct();
    }

    function init()
    {
        $sid = $_GET['sid'];
        $db = new DB('shop');
        $result = $db->where("id=$sid")->query('*');
        $this->smarty->assign('shop', $result[0]);
        $this->smarty->display('choose.html');
    }

    function detail()
    {
        $id = $_GET['sid'];
        $db = new DB('goodstype');
        $types = $db->where("sid=$id")->query("*");
        $gid = array_map(function ($n) {
            return $n['gid'];
        }, $types);

        $dbs = new DB('goods');

        $str = implode(',', $gid);

        $goods = $db->mysql->query("select * from goods where gid in ($str)")->fetch_all(MYSQLI_ASSOC);
        $result = [];

        for ($i = 0; $i < count($gid); $i++) {
            $result[$i] = [];
            $result[$i]['title'] = $types[$i]['title'];
            $result[$i]['goods'] = [];
            for ($j = 0; $j < count($goods); $j++) {
                if ($goods[$j]['gid'] == $gid[$i]) {
                    array_push($result[$i]['goods'], $goods[$j]);
                }
            }
        }
        echo json_encode($result);


    }

}
