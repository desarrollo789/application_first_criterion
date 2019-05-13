<?php
include 'controller.php';
class Product_controller extends controller{
    var $index;
    var $product;
    public function __construct()
    {
        parent::__construct();
        $this->index = new index();   
        $this->index =  $this->index->singleton();
        $this->product = new Product();
        $this->product = $this->product->singleton();
        
        //Do your magic here
    }
    public function setproduct(){
        $this->index->listproduct_add($this->product);        
    }

    public function Getekey()
    {

        $this->setproduct();
        foreach($this->index->LISTPRODUC as $value)
        {
            if(is_object($value))
            {
                var_dump($value);                                            
                $arraydatos = (array) $value; 
                echo $arraydatos['NAME']; 
                echo 'hola';            
            }
            include '../View/Gatekey.phtml';
        }
        
        // $caller3 = $this->index->LISTPRODUC;
        // foreach($caller3 as $value)
        // {
        //     echo $value;
        // }
        // include '../View/Gatekey.phtml';     
        // echo '<p> hola </p>';   
    }
}
$caller = new Product_controller();
switch($_GET["function"]) {
    case "Getekey":
        $caller->Getekey();
    break;
    default:
    break;
}

// echo $_POST["nombre"];

?>