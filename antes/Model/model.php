<?php
include '../Simulated_db/db.php';
class model extends db{
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
include 'ProductModel.php';
?>