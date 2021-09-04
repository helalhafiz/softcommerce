<?php
/*
* Project Reusble Functions
*/

//Dependencies
require_once('config.php');

//Check Server Request Method
function RequestMethod(){

   $requestMethod =  $_SERVER['REQUEST_METHOD'];

    return($requestMethod);
};





// Only Development Mode

function displayArray($arr){
    echo "<pre>";
    print_r($arr);

    echo "</pre>";
};