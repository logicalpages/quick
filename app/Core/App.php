<?php declare(strict_types=1);
namespace GBU\Core;

class App {
    public function run(): void {
        $router = new Router();
        
        $routesList = new RoutesList();
        $routesList->configure($router);
        
        $request = new Request();
        $handler=$router ->dispatch($request);
        
        $response1 = new Response(
                dirname(__DIR__).'/templates'
        );
        
        $response = $handler($request,$response1);
        $response->render();
        
//        if ($handler){
//                   $handler();
//        }
        
       // echo "Timetable Management System";
    }
}
