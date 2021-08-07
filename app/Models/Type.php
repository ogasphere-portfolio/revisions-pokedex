<?php
namespace Pokedex\Models;

use PDO;
use Pokedex\utils\Database;


class Type extends CoreModels
{
    

private $name;
private $color;

public function findAll(){

    $pdo = Database::getPDO();

    // je créer ma requete SQL
   $sql = "SELECT * FROM `type`";

   // je demande à PDO de faire la requete
   $pdoStatement = $pdo->query($sql);

   // je demande à récupérer les données au format objet de type Category
   $allType = $pdoStatement->fetchAll(PDO::FETCH_CLASS,Type::class);

   // le but est de renvoyer l'objet 
   return $allType;
   }

/**
 * Get the value of color
 */ 
public function getColor()
{
return $this->color;
}

/**
 * Set the value of color
 *
 * @return  self
 */ 
public function setColor($color)
{
$this->color = $color;

return $this;
}

/**
 * Get the value of name
 */ 
public function getName()
{
return $this->name;
}

/**
 * Set the value of name
 *
 * @return  self
 */ 
public function setName($name)
{
$this->name = $name;

return $this;
}
}
