<?php

class my extends main{
    public function __construct()
    {
        parent::__construct();
    }
    function init(){
       $this->smarty->display('login.html');
    }
    function register(){
       $this->smarty->display('registeruser.html');
    }
    function registercheck(){
        $data = $_POST;
        unset($data['password1']);
        $data['password'] = md5($data['password']);
        $db = new DB('users');
        $rows = $db->insert($data);
        if($rows == 1){
            echo json_encode([
                'code'=>0,
                'msg'=>'注册成功'
            ]);
        }else{
            echo json_encode([
                'code'=>1,
                'msg'=>'注册失败'
            ]);
        }
    }
    function checkusername(){
         $phone = $_POST['phone'];
         $db = new DB('users');
         $result = $db->query("select count(*) as numbers from users where phone=$phone");
         if($result[0]['numbers'] >0){
            echo 'false';
         }else{
             echo 'true';
         }

    }

    function code(){
      $code =  new code();
      $code->output();
      session_start();
      $_SESSION['usercode'] = $code->result;
    }

    function logincheck(){

        $code = $_POST['code'];
        session_start();
        if($_SESSION['usercode'] == $code){
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $db = new DB('users');
            $result = $db->where("phone=${phone}")->query("*");
            if($result){
                if($result[0]['password'] ==$password){
                    $_SESSION['islogin'] = 'yes';
                    $_SESSION['userid'] = $result[0]['id'];

                    echo json_encode([
                        'code'=>0,
                        'msg'=>'登陆成功'
                    ]);
                }else{
                    echo json_encode([
                        'code'=>1,
                        'msg'=>'密码错误'
                    ]);
                }

            }else{
                echo json_encode([
                    'code'=>1,
                    'msg'=>'手机号不存在'
                ]);
            }

        }else{
            echo json_encode([
                'code'=>1,
                'msg'=>'验证码输入错误'
            ]);
        }
    }
}