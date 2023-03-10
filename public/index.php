<?php

use Pokedex\Controllers\CatalogController;
use Pokedex\Controllers\ErrorController;
use Pokedex\Controllers\MainController;

require_once __DIR__ . "/../vendor/autoload.php";

// création d'un objet router sur la class Altorouter
$router = new AltoRouter();

// récupération de la Base_Uri via la méthode setBasePath
$router->setBasePath($_SERVER['BASE_URI']);

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

if ($match) {
    // récupération des données controllers et méthodes de nos routes dans les variables et vérification de leur existence
    $controller = new $match['target']['controller']();
    $method = $match['target']['method'];

    // si le paramètre number existe et différent de null, alors on récupère dans $number
    $number = $match['params']['number'] ?? null;

    // dispatcher
    // si le number est différent de null alors on associe la méthode au controller
    if ($number !== null) {
        $controller->$method($number);
    } else {
        $controller->$method();
    }
} else {
    $controller = new ErrorController();
    $controller->error404();
}
