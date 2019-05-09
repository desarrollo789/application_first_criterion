<?php
include 'Product.php';
include 'Perishable.php';
include 'Non_perishable.php';
?>
<?php
class Executable{
    var $LISTPRODUCT;
    var $PRODUCT;
    var $PERISHABLE;
    var $NON_PERISHABLE;
    public function __construct()
    {
        $this->LISTPRODUCT = array();
        $this->PRODUCT  = new Product();
        $this->PERISHABLE = new Perishable();
        $this->NON_PERISHABLE = new Non_perishable();
    }
    public function get_listproduct()
    {
        $this->LISTPRODUCT['product'] = $this->PRODUCT->calcule(5);
        $this->LISTPRODUCT['perishable'] = $this->PERISHABLE->calcule(5,3);
        $this->LISTPRODUCT['non_perishable'] = $this->NON_PERISHABLE->calcule(5);
        return $this->LISTPRODUCT;
    }
}
?>