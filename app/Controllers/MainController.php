<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class MainController extends CoreController
{
    public function home()
    {
        $pokemonsList = Pokemon::findAll('number');

        $this->show('home', ['pokemon' => $pokemonsList]);
    }
   
}