<?php

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/configuration.php";
require_once __DIR__."/helpers.php";


$base  = dirname($_SERVER['PHP_SELF']);

// Update request when we have a subdirectory    
if(ltrim($base, '/')){ 

    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}


$route = new FrameworkAULA\Routing\Route();

require_once APP."/routes.php";

return $route;


?>