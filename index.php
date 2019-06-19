<?php
use Bramus\Router\Router;

require __DIR__ . '/vendor/autoload.php';
    
$router = new Router;

$router ->get('/hello', function(){
    echo "Hello World";
});

$router->get('/hello/{num}', function($num) {
    echo "page n°" . $num;
});
$router->run();




   
   
   
   
   