<?php
spl_autoload_register('autoloadModel');
    function autoloadModel($className)
    {
        $fileName = $className.'.php';
        include 'class/'.$fileName;
    }
