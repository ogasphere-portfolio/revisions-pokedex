<?php
namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Controllers\CoreController;


class MainController extends CoreController{
    public function displayHome()
    {
        $pokemonModel = new Pokemon();
        $allPokemon = $pokemonModel->findAll();

        
        $params_View = [
            "pokemon" => $allPokemon,
            
        ];

    $this->show('home',$params_View);

    }
    

}
