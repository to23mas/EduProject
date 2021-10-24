<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{

		$router = new RouteList;
		$router->addRoute('<module>/<presenter>/<action>[/<id>]', 'Homepage:default'); //todo first page
		return $router;
	}
}
