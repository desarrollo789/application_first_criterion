<?php
class Non_perishable extends Product{
    var $TYPE;
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function set_type($TYPE)
    {
        $this->$TYPE = $TYPE;
    }

    public function set_attribute($NAME, $PRICE)
    {
        parent::set_attribute($NAME, $PRICE);
    }

    public function calcule($QUANTITY)
    {
        $summary = parent::calcule($QUANTITY);
        return $summary;
    }
}

?>