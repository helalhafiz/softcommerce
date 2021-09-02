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
}