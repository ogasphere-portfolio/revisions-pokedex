<?php
namespace Pokedex\Controllers;

use Pokedex\Models\Type;
use Pokedex\Models\Pokemon;
use Pokedex\Controllers\CoreController;


class MainController extends CoreController{
    public function displayPokemonList()
    {
        $pokemonModel = new Pokemon();
        $allPokemon = $pokemonModel->findAll();

        
        $params_View = [
            "pokemon" => $allPokemon,
            
        ];

    $this->show('home',$params_View);

    }
    
    public function displayPokemonDetails($ArrayId)
    {
        $id = $ArrayId['id'];
        $pokemonModel = new Pokemon();
        $allPokemon = $pokemonModel->find($id);

        
        $params_View = [
            "pokemon" => $allPokemon,
            
        ];

    $this->show('detailsPokemon',$params_View);

    }
    
    public function displayTypeList()
    {
        $typeModel = new Type();
        $allType = $typeModel->findAll();

        
        $params_View = [
            "type" => $allType,
            
        ];

    $this->show('listTypes',$params_View);

    }
    
    public function displayPokemonListByType($ArrayId)
    {
        $idtype = $ArrayId['id'];
        $pokemonModel = new Pokemon();
        $allPokemon = $pokemonModel->findAllByType($idtype);

        
        $params_View = [
            "pokemon" => $allPokemon,
            
        ];

    $this->show('home',$params_View);

    }
    
}
