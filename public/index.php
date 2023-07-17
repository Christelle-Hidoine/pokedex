<?php


use Pokedex\Controllers\ErrorController;
use Pokedex\Controllers\MainController;
use Pokedex\Controllers\PokemonController;

require_once __DIR__ . "/../vendor/autoload.php";

// Altorouter creates router in 1 call
$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '/';
}

// home page
$router->map(
    "GET",
    "/",
    [
        'controller' => MainController::class,
        'method' => 'home'
    ],
    'home'
);

// pokemons by type page
$router->map(
    "GET",
    "/type/[i:id]",
    [
        'controller' => PokemonController::class,
        'method' => 'showType'
    ],
    'type-list'
);

// details Pokemon page
$router->map(
    "GET",
    "/details/[i:number]",
    [
        'controller' => PokemonController::class,
        'method' => 'details'
    ],
    'details'
);

$match = $router->match();

// dispatcher makes association between controller and method
$dispatcher = new Dispatcher($match, '\Pokedex\Controllers\ErrorController::error404');

$dispatcher->setControllersArguments($router, $match);

$dispatcher->dispatch();