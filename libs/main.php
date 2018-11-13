<?php
class main{
    public $smarty;
    function __construct()
    {
      $this->smarty = new Smarty();
      $this->smarty->setTemplateDir('app/view');
      $this->smarty->setCompileDir('compile');
    }
    function checklogin(){
        session_start();
        if(isset($_SESSION['islogin']) && $_SESSION['islogin']){
            return true;
        }
        return false;
    }


}