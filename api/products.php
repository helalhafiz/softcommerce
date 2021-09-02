<?php
//Dependencies
require_once('../inc/functions.php');
require_once('../classes/Product.php');


//Check Request Method

$RequestMthod = RequestMethod();

if($RequestMthod == "GET"){
    getProducts();

}elseif($RequestMthod == "POST"){
    echo "POST Method";

}elseif($RequestMthod == "PUT"){
    echo "PUT METHOD";

}elseif($RequestMthod == "DELETE"){
    echo "DELETE METHOD";

}else{

    echo "Access Denied";
}



//Return All Products

function getProducts(){

    $Product = new Product();
    
    $sql = "SELECT * FROM products";
    $Products = $Product->Select($sql);
    
    if($Products){

        $result = json_encode($Products);
        echo $result;
    }else{
        echo "No Products Found!";
    }

}


