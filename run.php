<?php

// Autoloader
spl_autoload_register(function($className) {
    echo "autoloading $className\n";
    require_once("$className.php");
});

$a = new Animal();
