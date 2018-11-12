<?php
class main{
    public $smarty;
    function __construct()
    {
      $this->smarty = new Smarty();
      $this->smarty->setTemplateDir('app/view');
      $this->smarty->setCompileDir('compile');
    }
}