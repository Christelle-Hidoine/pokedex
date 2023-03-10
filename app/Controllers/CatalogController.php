<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class CatalogController extends CoreController
{
    public function details($number)
    {
        $pokemonModel = new Pokemon();
        $pokemonNumber = $pokemonModel->find($number);

        $this->show('details', ['pokemonNumber' => $pokemonNumber]);
    }
}