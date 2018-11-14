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

    function car()
    {
        // login
        if (!$this->checklogin()) {
            echo json_encode([
                'code' => 1,
                'msg' => '请登录'
            ]);
            exit();
        }

        // 订单

        $data = $_POST;
        unset($data['goods']);

        $uid = $_SESSION['userid'];
        $data['uid'] = $uid;

        $db = new DB('orders');
        $rows = $db->insert($data);
        if ($rows) {

            $oid = $db->mysql->insert_id;
            $goods = $_POST['goods'];
            $db = new DB('orderextra');

            $sql = "insert into orderextra (";

            $keys = array_keys($goods[0]);
            array_push($keys, 'oid');
            $str = implode(',', $keys);
            $sql .= $str . ') values ';

            $str = '';
            for ($i = 0; $i < count($goods); $i++) {
                $str .= "(";
                $goods[$i]['oid'] = $oid;
                foreach ($goods[$i] as $v) {
                    $str .= "'$v',";
                }
                $str = substr($str, 0, -1) . "),";
            }
            $str = substr($str, 0, -1);
            $sql .= $str;
            $db->mysql->query($sql);
            if ($db->mysql->affected_rows) {
                echo json_encode([
                    'code' => 0,
                    'msg' => '下单成功',
                    'orderid'=>$oid
                ]);
            } else {
                echo json_encode([
                    'code' => 2,
                    'msg' => '下单失败'
                ]);
            }
        } else {
            echo json_encode([
                'code' => 2,
                'msg' => '下单失败'
            ]);
        }


    }

    function confirm(){
        $this->smarty->display('confirm.html');
    }
    function orderdetail(){
        $oid = $_POST['oid'];
        $db = new DB('orders');
        $order = $db->where("oid=$oid")->query("*");


        $db = new DB('orderextra');
        $goods = $db->where("oid=$oid")->query("*");

        $sid = $goods[0]['sid'];

        $db = new DB('shop');
        $shop = $db->where("id=$sid")->query('sname');

        $result = [];
        $result['shopname'] = $shop[0]['sname'];
        $result['goods'] = $goods;
        $result['order'] = $order[0];
        echo json_encode($result);

    }

}
