<?php 
spl_autoload_register(function($class){
    $class = str_replace('Src', 'src', $class);

    $path = __DIR__.'/'.str_replace('\\', DIRECTORY_SEPARATOR, $class.'.php');
    if(is_readable($path)){
        require $path;
    }
});