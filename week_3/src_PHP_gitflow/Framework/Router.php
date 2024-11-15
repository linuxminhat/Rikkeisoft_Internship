<?php

namespace Framework;

use App\Controllers\ErrorController;
use Framework\Middleware\Authorize;

class Router
{
    protected $routes = [];

    /**
     * Add a new route
     *
     * @param string $method
     * @param string $uri
     * @param string $action
     * @param array $middleware
     * @return void
     */

    public function registerRoute($method, $uri, $action, $middleware = [])
    {
        list($controller, $controllerMethod) = explode('@', $action);

        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod,
            'middleware' => $middleware
        ];
    }

    /**
     * Add a GET request route
     *
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function get($uri, $controller, $middleware = [])
    {
        $this->registerRoute('GET', $uri, $controller, $middleware);
    }

    /**
     * Add a POST request route
     *
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function post($uri, $controller, $middleware = [])
    {
        $this->registerRoute('POST', $uri, $controller, $middleware);
    }


    /**
     * Add a PUT request route
     *
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function put($uri, $controller, $middleware = [])
    {
        $this->registerRoute('PUT', $uri, $controller, $middleware);
    }


    /**
     * Add a DELETE request route
     *
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * @return void
     */

    public function delete($uri, $controller, $middleware = [])
    {
        $this->registerRoute('DELETE', $uri, $controller, $middleware);
    }


    /**
     * Route the request to the appropriate controller
     *
     * @param string $uri
     * @param string $method
     * @return void
     */

    public function route($uri)
    {
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        //Check for _method input
        if ($requestMethod === 'POST' && isset($_POST['_method'])) {
            //Override the request method with the _method value
            $requestMethod = strtoupper($_POST['_method']);
        }

        foreach ($this->routes as $route) {

            //Split the current URI into segments
            $uriSegments = explode('/', trim($uri, '/'));

            //Split the route URI into segments
            $routeSegments = explode('/', trim($route['uri'], '/'));

            $match = true;

            //Check if the number of segments in the URIs match
            if (count($uriSegments) === count($routeSegments) &&
                strtoupper($route['method'] === $requestMethod)) {

                $params = [];

                $match = true;

                for ($i = 0; $i < count($uriSegments); $i++) {
                    //If the uri do not match and there is no param
                    if ($routeSegments[$i] !== $uriSegments[$i]
                        && !preg_match('/\{(.+?)\}/', $routeSegments[$i])) {
                        $match = false;
                        break;
                    }
                    //Check for the param and add to $params array
                    if (preg_match('/{(.+?)\}/', $routeSegments[$i], $matches)) {
                        $params[$matches[1]] = $uriSegments[$i];
                    }

                }
                if ($match) {
                    //Apply middleware before executing the controller
                    foreach ($route['middleware'] as $middleware) {
                        (new Authorize())->handle($middleware);
                    }


                    //Extract controller and method
                    $controller = 'App\\Controllers\\' . $route['controller'];
                    $controllerMethod = $route['controllerMethod'];

                    //Instantiate the controller and call the method
                    $controllerInstance = new $controller();
                    $controllerInstance->$controllerMethod($params);  // Call the controller's method

                    return;
                }

            }
        }
        ErrorController::notFound();
    }


}