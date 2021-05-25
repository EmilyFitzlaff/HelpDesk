<?php

    // autoload 
    spl_autoload_register(function($className) {
        $file = $_SERVER["DOCUMENT_ROOT"].'/HelpDesk/app/lib/' . $className . '.class.php';
        // var_dump($file);
        if (file_exists($file)) {
            require_once $file;
        }
    });

?>