<?php
class index{
    var $INSTANCE;
    var $LISTPRODUC;
    
    public function __construct()
    {        
        $this->LISTPRODUC = array('perro', 'gato', 'raton');
    }

    public function singleton()
    {
        $this->INSTANCE = new index();
        return $this->INSTANCE;
    }

    public function listproduct_add($Product){
        array_push($this->LISTPRODUC, $Product);
    }
}
?>

