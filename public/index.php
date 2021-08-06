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
        "method" => "displayHome",
        "controller" => "Pokedex\Controllers\MainController"
    ], 
'home' );



$altoRouter->map( 
    /* 1 */'GET',
    /* 2 */'/about', 
    /* 3 */    [
            "method" => "displayType",
            "controller" => "Pokedex\Controllers\TypeController"
        ], 
    /* 4 */'type' );


// catalog filtré par catégorie
$altoRouter->map( 
    /* 1 */'GET',
    /* 2 */'/pokemon/[i:id]', 
    /* 3 */    [
            "method" => "displayPokemon",
            "controller" => "Pokedex\Controllers\PokemonController"
        ], 
    /* 4 */'pokemon' );





//`/catalogue/produit/[idProduct]` 
$altoRouter->map( 
    /* 1 */'GET',
    /* 2 */'/catalogue/produit/[i:idProduct]', 
    /* 3 */    [
            "method" => "affichePageProduct",
            "controller" => "Pokedex\Controllers\CatalogController"
        ], 
    /* 4 */'catalog-product' );


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



