<?php

namespace Pokedex\Controllers;

class CoreController
{
    public function show($viewName, $viewData = []) 
    {
        global $router;
        $baseUri = $_SERVER['BASE_URI'] . '/';

        require_once __DIR__ . "/../views/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/footer.tpl.php";

    }
}