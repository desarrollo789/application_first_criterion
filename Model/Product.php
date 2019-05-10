<?php include '../Product.php' ?>
<?php
class Product{
    var $Product;
    var $LISTPRODUCT;
    
    public function __construct()
    {
        $this->Product = new Product();
        $this->LISTPRODUCT = array();
    }
    
    public function setid($id){
        $this->Product->ID = $id;
    }
    public function setname($name){
        $this->Product->NAME = $name;
    }
    public function setlastname($description){
        $this->Product->DESCRIPTION = $description;
    }
    public function setprice($price){
        $this->Product->PRICE = $price;
    }
    public function setimage($image){
        $this->Product->IMAGE = $image;
    }
    public function finish(){        
        array_push($this->LISTPRODUCT, $this->Product);                
    }
    public function gatlistproduct(){
        return $this->LISTPRODUCT;
    }
}