<?php
namespace GBU\Core;

use Exception;
use GBU\Controller\ActionInterface;

class Router implements RouterInterface
{
    private string $pageNotFound;
    private const HTTP_GET = 'GET';
    public function __construct(private array $routes = []) {}

    public function get(string $path, string $callback): void
    {
        $this->routes[self::HTTP_GET][$path] = $callback;
    }
    public function pageNotFound(string $callback) {
        $this->pageNotFound=$callback;
    }    
    public function dispatch(RequestInterface $req):ActionInterface {
        $path=$req->getPath();
        $method = $req->getMethod();
        $callback = $this->routes[$method][$path] ?? $this->pageNotFound;
        
        if (!$callback) {
            throw new Exception('Not found', 404);
        }

        return new $callback();
        
//        $routes = [
//          '/'=> function(){
//            echo "Home Page";
//          },
//          '/settings'=> function(){
//            echo "Settings Page";
//          }
//                  
//        ];
        
  //      return   $handler = $routes[$path]??null;
     
    }

    
}
