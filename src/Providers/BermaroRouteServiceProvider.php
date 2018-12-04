<?php
 
namespace Bermaro\Providers;
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class BermaroRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
 
    }

    public function register()
    {
        $this->getApplication()->register(BermaroRouteServiceProvider::class);
    }

    public function map(Router $router)
    {
        $router->get('hello','Bermaro\Controllers\ContentController@sayHello');
    }

}