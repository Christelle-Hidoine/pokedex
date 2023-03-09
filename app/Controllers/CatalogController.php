<?php

namespace Pokedex\Controllers;

class CatalogController extends CoreController
{
    public function details($id)
    {
        $this->show('details');
    }
}