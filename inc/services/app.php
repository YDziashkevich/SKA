<?php

/**
 * Class App сервисный класс для подключения controller/action
 */
class App
{
    public function __construct(){
        $url = (isset($_GET['url'])) ? trim($_GET['url']) : APP_DEFAULT_CONTROLLER;
        $urlParts = explode('/', rtrim($url));
        $actionParams = array_slice($urlParts, 2);
        $controllerName = $urlParts[0] . 'Controller';
        $controller = new $controllerName;
        $actionName = (isset($urlParts[1])) ? $urlParts[1] . 'Action' : APP_DEFAULT_ACTION;
        if(method_exists($controller, $actionName)){
            call_user_func(array($controller, $actionName), $actionParams[0]);
        }
    }
}