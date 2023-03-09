<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class MainController extends CoreController
{
    public function home()
    {
        $pokemonModel = new Pokemon();
        $pokemonsList = $pokemonModel->findAll('number');
        
        $this->show('home', ['pokemon' => $pokemonsList]);
    }
   
}