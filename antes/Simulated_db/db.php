<?php
include '../index.php';
class db extends index{
    var $INSTANCE;
    
    public function __construct()
    {
        parent::__construct();        
    }
    
    public function singleton()
    {
        $this->INSTANCE = new db();
        return $this->INSTANCE;
    }
}
?>
<?php 
include 'Product.php'; 
?>