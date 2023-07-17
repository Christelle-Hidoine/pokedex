<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;

class PokemonController extends CoreController
{
    /**
     * Method to display one pokemon
     *
     * @param int $number
     * @return Pokemon
     */
    public function details($number)
    {
        $pokemonModel = new Pokemon();
        $pokemonNumber = $pokemonModel->find($number);
        $types = $pokemonModel->findTypesByPokemonNumber($number);

        $this->show('details', ['pokemonNumber' => $pokemonNumber, 'types' => $types]);
    }

    /**
     * Method to display all pokemon related to one type
     *
     * @param int $id
     * @return Pokemon[]
     */
    public function showType($id)
    {
        $pokemonByType = Pokemon::findAllByType($id, "", 'number');
        $this->show('home', ['pokemonByType' => $pokemonByType]);
    }
}