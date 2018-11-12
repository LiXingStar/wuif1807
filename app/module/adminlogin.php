<?php
class adminlogin extends main {
    function __construct()
    {
       parent::__construct();
    }
    function init(){
        $this->smarty->display('adminlogin.html');
    }
    function check(){
       $mysql = new mysqli('localhost','root','','sdk',3306);
       $mysql->query('set names utf8');

       $username = $_GET['username'];
       $password =  md5($_GET['password']);

       $sql = "select * from manage where username='$username' and password='$password'";

       $result = $mysql->query($sql)->fetch_assoc();

       if($result){
           session_start();
           $_SESSION['info'] = $result;

           echo 'success';
       } else{
           echo 'fail';
       }


    }

}
