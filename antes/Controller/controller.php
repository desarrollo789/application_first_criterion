<?php
include '../Model/model.php';
class controller{
    var $CONTROLLER;
    var $INSTANCE;
    public function __construct()
    {
          
        //Do your magic here
    }
    
    public function singleton()
    {
        $this->INSTANCE = new controller();
        return $this->INSTANCE;   
    }
    
}
?>