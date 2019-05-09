<?php

class Product{
    var $NAME;
    var $PRICE;
    
    
    public function __construct()
    {
        
    }

    public function set_attribute($NAME, $PRICE)
    {
        $this->NAME = $NAME;
        $this->PRICE = $PRICE;
    }

    public function calcule($QUANTITY)
    {
       $summary = $QUANTITY * $this->PRICE;
       return $summary;
    }
}

?>