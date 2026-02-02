<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;

class RouteInfoController extends BaseController
{
    // GET /routes
    public function index()
    {
        $routes = [];
        foreach (Route::getRoutes() as $route) {

            // Laravel 기본 GET|HEAD 중 HEAD 제거하여 CI3/CI4처럼 GET만 표시
            $methods = array_filter($route->methods(), function ($m) {
                return $m !== 'HEAD';
            });

            $routes[] = [
                'uri'    => $route->uri(),
                'method' => implode('|', $methods),
                'target' => $route->getActionName(),
            ];
        }

        return response()->json($routes);
    }
}
