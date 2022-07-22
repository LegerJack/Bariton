<?php 
spl_autoload_register(function($class){
    $path = __DIR__.'\\src\\'.str_replace('\\', DIRECTORY_SEPARATOR, $class.'.php');
    if(is_readable($path)){
        require $path;
    }
});