
<?php 
    $productmodel = new ProductModel;
    $listproduct = $productmodel->getlistproduct();
?>

<html>
    <p>no mas</p>
    <p> <? echo $listproduct ?> </p>
</html>