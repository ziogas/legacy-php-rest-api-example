<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

// Let's define very primitive autoloader
spl_autoload_register(function($classname){
    $classname = str_replace('Api_', 'Apis/', $classname);
    if (file_exists(__DIR__.'/'.$classname.'.php')) {
        require __DIR__.'/'.$classname.'.php';
    }
});

// Our main method to handle request
Api::serve();
