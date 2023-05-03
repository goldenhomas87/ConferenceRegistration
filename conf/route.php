<?php 

    class Routing
    {

        public static function buildRoute() {

            $controllerName = "home";
		    $actionName = "index";
		    
            $routes = explode('/', $_SERVER['REQUEST_URI']);
		
            if (!empty($routes[2])) {
                $controllerName = $routes[2];
            }

            if (!empty($routes[3])) {
                $actionName = $routes[3];
            }

            $controllerFileName = strtolower($controllerName) . 'Controller' . '.php';
            $controllerFilePath = CONTROLLER_PATH . $controllerFileName;
            if (file_exists($controllerFilePath))
            {
                include $controllerFilePath;
            }
            
            $modelFileName = strtolower($controllerName) . 'Model' . '.php';
		    $modelFilePath = MODEL_PATH . $modelFileName;
		    if(file_exists($modelFilePath))
		    {
			    include $modelFilePath;
		    }

            $controllerFullName = ucfirst($controllerName) . 'Controller';

            $controller = new $controllerFullName();
            $controller->$actionName();
        }
    }

?>