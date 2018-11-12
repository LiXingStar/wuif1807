<?php
class Router{
    static function init(){
        if(!isset($_SERVER['PATH_INFO']) || $_SERVER['PATH_INFO'] == '/'){
            $module = 'index';
            $method = 'init';
        }else{
           $arr = explode('/',substr($_SERVER['PATH_INFO'],1));
           $module = $arr[0];
           $method = isset($arr[1]) && $arr[1] ? $arr[1] : 'init';
        }

        if(file_exists('app/module/'.$module.'.php')){
            include 'app/module/'.$module.'.php';
            if(class_exists($module)){
                $obj =  new $module();
                if(method_exists($obj,$method)){
                    $obj->$method();
                }else{
                    echo $method.'方法不存在';
                }
            }else{
                echo $module.'类不存在';
            }
        }else{
            echo $module.'.php文件不存在';
        }


    }

}