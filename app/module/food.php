<?php
class food extends main {
    function __construct()
    {
        parent::__construct();
    }
    function init(){
        $cid = $_GET['cid'];
        $db = new DB('category');
        $currentCate = $db->where("cid=$cid")->query('*');
        $sonCate = $db->order("cid",'asc')->where("pid=$cid")->query('*');

        $this->smarty->assign('currentCate',$currentCate[0]);
        $this->smarty->assign('sonCate',$sonCate);
        $this->smarty->display('cate.html');
    }
    function lists(){
        $pid = $_GET['pid'];
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $cid = $_GET['cid'];
        $order = $_GET['order'];
        $offset = ($page - 1) * $limit;

        if($cid){
            $db = new DB('shop');
            $data =  $db->where("cid=$cid")->order($order,'desc')->query("*");
            $pages = ceil(count($data) / $limit);
            $result = $db->where("cid=$cid")->order($order,'desc')->limit($offset,$limit)->query("*");
            echo json_encode([
                'pages'=>$pages,
                'result'=>$result
            ]);
        }else{
           $db = new DB('category');
           $ids = $db->where("pid=$pid")->query("cid");
           $str = '(';
           foreach ($ids as $v){
               $str .="{$v['cid']},";
           }
           $str = substr($str,0,-1).')';

           $data = $db->query("select * from shop where cid in $str order by $order desc");
           $pages = ceil( count($data) / $limit );
           $result = $db->query("select * from shop where cid in $str order by $order desc  limit $offset,$limit");
           echo json_encode([
               'pages'=>$pages,
               'result'=>$result
           ]);
        }

    }
}