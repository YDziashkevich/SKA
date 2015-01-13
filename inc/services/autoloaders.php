<?php
// функции для загрузки классов
spl_autoload_register(function($class){
    $pathToFile = 'inc/services/' . strtolower($class) . '.php';
    if(file_exists($pathToFile)){
        require_once($pathToFile);
    }
});
spl_autoload_register(function($class){
    $controllerFlag = strpos($class, 'Controller');
    if($class == 'Controller'){
        require_once('inc/services/controller.php');
    }
    if($controllerFlag){
        $controllerName = str_replace('Controller', '',  $class);
        $pathToController = 'inc/controllers/' . strtolower($controllerName) . '.php';
        if(file_exists($pathToController)){
            require_once($pathToController);
        }
    }
});
spl_autoload_register(function($class){
    $modelFlag = strpos($class, 'Model');
    if($class == 'Model'){
        require_once('inc/services/model.php');
    }
    if($modelFlag){
        $modelName = str_replace('Model', '',  $class);
        $pathToModel = 'inc/models/' . strtolower($modelName) . '.php';
        if(file_exists($pathToModel)){
            require_once($pathToModel);
        }
    }
});