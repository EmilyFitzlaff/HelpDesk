<?php
    function tryInclude($class = null, $classType = null)
    {
        $fliename = str_replace('_', DIRECTORY_SEPARATOR, strtolower($class)). '.' . $classType .'.php';
        $file = $_SERVER["DOCUMENT_ROOT"].'/HelpDesk/app/'.$fliename;

        if (file_exists($file)) {
            include($file);
            return true;
        }

        return false;
    }

    function autoload($class)
    {
        if (tryInclude($class, 'controller')) {
            return;
        }
        if (tryInclude($class, 'class')) {
            return;
        }
        if (tryInclude($class, 'model')) {
            return;
        }
        if (tryInclude($class, 'view')) {
            return;
        }
    }
    
    spl_autoload_register('autoload');
?>