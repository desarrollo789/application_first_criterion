
<?php
class ProductModel extends model{
    var $INSTANCE;
    // var $Product;
    // var $Listp;
    // var $v;            
        
    public function __construct()
    {
        parent::__construct();
        $this->INSTANCE = new ProductModel();
        // $this->Product = new Product();
        
        // $this->v = new View('../View/tests/index.php');        
    }
    
    // public function index(){
        
    //     php_ini_loaded_file('../View/tests/index.php');
        
    // }

    // public function  producto(){
        
    // }

    // public function setid(){
    //     // $this->Product->ID = $id;
    //     header('Location: ../View/tests/view.php');
    // }
    // public function setname($name){
    //     $this->Product->NAME = $name;
    // }
    // public function setlastname($description){
    //     $this->Product->DESCRIPTION = $description;
    // }
    // public function setprice($price){
    //     $this->Product->PRICE = $price;
    // }
    // public function setimage($image){
    //     $this->Product->IMAGE = $image;
    // }
    // public function finish(){        
    //     array_push($LISTPRODUCT, $this->Product);                
    // }
    // public function getlistproduct(){
    //     return $this->LISTPRODUCT;              
    // }   
}
?>
<html> 
<?php 
// echo $_POST["nombre"];
// array_push($LISTPRODUCT, 'hola perro');                
// echo $LISTPRODUCT[0];
?>
</html>