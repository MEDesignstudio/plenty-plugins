<?php

namespace Bermaro\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class BermaroRouteServiceProvider
 * @package Bermaro\Providers
 */
class BermaroRouteServiceProvider extends RouteServiceProvider
{
	/**
	 * @param Router $router
	 */
	public function map(Router $router)
	{
		$router->get('hello', 'Bermaro\Controllers\ContentController@sayHello');
	}

}