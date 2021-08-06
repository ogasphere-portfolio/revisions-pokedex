<?php
namespace Pokedex\Controllers;

class CoreController{

    public function show($viewName, $viewData = [])
    {
       
        global $altoRouter;
        $absoluteURL = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';

        //dd($viewName);
        require_once __DIR__.'/../views/header.tpl.php';

       
        extract($viewData);
        // merci PHP pour le truc facile :+1:

        require_once __DIR__."/../views/{$viewName}.tpl.php";
       
        require_once __DIR__.'/../views/footer.tpl.php';

        
    }
}