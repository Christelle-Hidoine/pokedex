<?php

namespace Pokedex\Controllers;

class CoreController
{
    protected $router;
    protected $match;

    public function __construct($router, $match) 
    {
        $this->router = $router;
        $this->match = $match;
    }
    
    public function show($viewName, $viewData = []) 
    {
        $viewData['router'] = $this->router;
        $viewData['currentPage'] = $viewName;
        $viewData['baseUri'] = $_SERVER['BASE_URI'];
        
        extract($viewData);
        
        require_once __DIR__ . "/../views/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/footer.tpl.php";

    }
}