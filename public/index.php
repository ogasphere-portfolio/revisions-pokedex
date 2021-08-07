<?php



require __DIR__.'/../vendor/autoload.php';


if (isset($_GET['page'])) {
    // on récupère la page demandé par l'utilisateur
    $currentPage = $_GET['page'];
} else {
    // notre page par défaut
    $currentPage = "/";
}


$altoRouter = new AltoRouter();
$altoRouter->setBasePath($_SERVER['BASE_URI']);


$altoRouter->map( 
'GET',
'/', 
    [
        "method" => "displayPokemonList",
        "controller" => "Pokedex\Controllers\MainController"
    ], 
'home' );


$altoRouter->map( 
    'GET',
    '/[i:id]', 
        [
            "method" => "displayPokemonListByType",
            "controller" => "Pokedex\Controllers\MainController"
        ], 
    'pokemonlistbytype' );
    

$altoRouter->map( 
    /* 1 */'GET',
    /* 2 */'/type', 
    /* 3 */    [
            "method" => "displayTypeList",
            "controller" => "Pokedex\Controllers\MainController"
        ], 
    /* 4 */'typelist' );


// catalog filtré par catégorie
$altoRouter->map( 
    /* 1 */'GET',
    /* 2 */'/pokemon/[i:id]', 
    /* 3 */    [
            "method" => "displayPokemonDetails",
            "controller" => "Pokedex\Controllers\MainController"
        ], 
    /* 4 */'pokemondetails' );




$matchingRoute = $altoRouter->match();



if ($matchingRoute) {
    
    $tableauInfo = $matchingRoute['target'];
    $nomMethode = $tableauInfo['method'];

    
    $parametresRoute = $matchingRoute['params'];


    $nomController = $matchingRoute['target']['controller'];
   

    $controller = new $nomController();
    
    $controller->$nomMethode($parametresRoute);
} 
else 
{
    // Je n'ai pas trouvé de route qui correspond
    exit('404 not found');
}



