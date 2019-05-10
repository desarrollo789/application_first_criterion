<?php

class Product{
    VAR $ID;
    var $NAME;
    var $DESCRIPTION;
    var $PRICE;
    var $IMAGE;
    
    
    public function __construct()
    {
        $this->ID;
        $this->NAME;
        $this->DESCRIPTION;
        $this->PRICE;
        $this->IMAGE;
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