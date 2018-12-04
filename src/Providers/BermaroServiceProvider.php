<?php

namespace Bermaro\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class BermaroServiceProvider
 * @package Bermaro\Providers
 */
class BermaroServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		$this->getApplication()->register(BermaroRouteServiceProvider::class);
	}
}