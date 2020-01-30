<?php
namespace Adminko\Core;


class Route
{

    static function start()
    {
        $controller_name = 'main';
        $action_name = 'index';
        
        //get name controller
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($routes[1]) ) {
            $controller_name = $routes[1];
        }

        //get name action
        if (!empty($routes[2]) ) {
            $action_name = $routes[2];
        }

	if (!empty($routes[3]) ) {
            $arg_function = $routes[3];
        }


        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;
        $pathModel = '\\Adminko\\Models\\'.$model_name;
        $model = new $pathModel;


        $pathController = '\\Adminko\\Controllers\\'.$controller_name;
        $controller = new $pathController;
        $action = $action_name;
	if(method_exists($controller, $action)) {
            if(isset($arg_function)) {
                $controller->$action($arg_function);
            } else {
                $controller->$action();
            }
            
        }
        else
        {
            Route::ErrorPage404();
        }
    }

    public function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}
