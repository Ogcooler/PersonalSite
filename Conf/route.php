<?php 



class Routing
{
    public static function buildRoute($controllerName = null, $modelName = null, $action = null)
    {
        $route = explode("/", $_SERVER['REQUEST_URI']);

        if(!empty($route[1])){
            $controllerName = ucfirst($route[1]."Controller");
            $modelName = ucfirst($route[1]."Model");
        }else {
            $controllerName = "Controller";
            $modelName = "Model";
            
            
        }
        
        if(!empty($route[2])){
            $action = $route[2];
        } else{
            $action = 'view';
        }
        
        $controller = new $controllerName;
        $controller->$action();
    }
}

