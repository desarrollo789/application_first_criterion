<?php
class Perishable extends Product{
    var $EXPIRATION_DATE;
    public function __construct()
    {
        parent::__construct();
        //Do your magic here        
    }
      
    public function set_expiration_date($EXPIRATION_DATE)
    {
        $this->$EXPIRATION_DATE = $EXPIRATION_DATE;
    }

    public function set_attribute($NAME, $PRICE)
    {
        parent::set_attribute($NAME, $PRICE);
    }

    public function calcule($QUANTITY, $DAYS_TO_EXPIRE)
    {
        $summary = parent::calcule($QUANTITY);
        switch($DAYS_TO_EXPIRE)
        {
            case 1:
                $summary = $summary/4;
            break;
            case 2:
                $summary = $summary/3;
            break;
            case 3:
                $summary = $summary/2;
            break;
            default:
                
            break;
        }
        return $summary;
    }
}
?>