<?php

use Pokedex\Controllers\CatalogController;
use Pokedex\Controllers\ErrorController;
use Pokedex\Controllers\MainController;

require_once __DIR__ . "/../vendor/autoload.php";

// création d'un objet router sur la class Altorouter
$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
} else { // sinon
    // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
    $_SERVER['BASE_URI'] = '/';
}

// Définition des routes avec la méthode map()
// page HOME qui liste tous les pokemons
$router->map(
    "GET",
    "/",
    [
        'controller' => MainController::class,
        'method' => 'home'
    ],
    'home'
);

// page DETAILS qui affiche un pokemon avec son type et ses stats selon son number
$router->map(
    "GET",
    "/details/[i:number]",
    [
        'controller' => CatalogController::class,
        'method' => 'details'
    ],
    'details'
);

// vérification des routes (si elle existe ou non)
$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::error404');

$dispatcher->setControllersArguments($router, $match);

$dispatcher->dispatch();