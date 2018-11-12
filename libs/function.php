<?php

class Menu
{
    public $str;

    function __construct()
    {
        $this->str = '';
    }

    /*
     *  $mysql
     *  $tablename
     *  $parentid
     *  $flag
     * */
    function getCate($mysql, $tablename, $parentid, $flag, $currentid = null)
    {
        static $pid = null;
        if ($currentid) {
            $arr = $mysql->query("select * from category where cid=$currentid")->fetch_assoc();
            $pid = $arr['pid'];
        }

        $sql = "select * from $tablename where pid=$parentid";
        $result = $mysql->query($sql);
        $flag++;
        while ( $row = $result->fetch_assoc()) {
            $str = str_repeat('-', $flag);
            if ($row['cid'] == $pid) {
                $this->str .= "<option selected value='{$row['cid']}'>{$str}{$row['title']} </option>";
            } else {
                $this->str .= "<option value='{$row['cid']}'>{$str}{$row['title']} </option>";
            }


            $this->getCate($mysql, $tablename, $row['cid'], $flag);
        }
        return $this->str;
    }

}
