<?php
class Product{
    var $INSTANCE;
    var $ID;
    var $NAME;
    var $DESCRIPTION;
    var $PRICE;
    var $IMAGE;
    
    
    public function __construct()
    {
        $this->ID = 1;
        $this->NAME = 'tele';
        $this->DESCRIPTION = 'samsung  pulgadas';
        $this->PRICE = 200;
        $this->IMAGE = '..\Public\img_all\Product\televisor-samsung-smart-tv-3d.jpg';
        
    }

    public function singleton(){
        $this->INSTANCE = new Product();
        return $this->INSTANCE;
    }

    // public function set_attribute($NAME, $PRICE)
    // {
    //     $this->NAME = $NAME;
    //     $this->PRICE = $PRICE;
    // }

    // public function calcule($QUANTITY)
    // {
    //    $summary = $QUANTITY * $this->PRICE;
    //    return $summary;
    // }
    
}

?>