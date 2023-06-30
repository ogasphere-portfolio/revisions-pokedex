<?php
namespace Pokedex\Models;

use PDO;

use Pokedex\utils\Database;


class Pokemon extends CoreModels
{
    private $nom;
    private $pv;
    private $attaque;
    private $defense;	
    private $attaque_spe;	
    private $defense_spe;	
    private $vitesse;	
    private $numero;
    private $name;
    private $color;

    public function find($id){
        // je récupère ma connexion à la BDD
        $pdo = Database::getPDO();

        // je créer ma requete SQL
       $sql = "SELECT * FROM `pokemon` WHERE `id` = {$id}";


       $sql = "SELECT `pokemon`.*,`type`.`name`,`type`.`color`
        FROM `pokemon`, `type`, `pokemon_type`
        WHERE
        `pokemon`.`numero` = `pokemon_type`.`pokemon_numero` AND
        `type`.`id`= `pokemon_type`.`type_id` and
        `pokemon`.`id`= {$id}
        group by  `type`.`name`, `type`.`color`
        ORDER BY `type`.`name`";



       // je demande à PDO de faire la requete
       $pdoStatement = $pdo->query($sql);

       // je demande à récupérer les données au format objet de type Category
       $Pokemon = $pdoStatement->fetchAll(PDO::FETCH_CLASS,Pokemon::class);
       
       // le but est de renvoyer l'objet 
       return $Pokemon;       
   }

   public function findAll(){

    $pdo = Database::getPDO();

    // je créer ma requete SQL
   $sql = "SELECT * FROM `pokemon` 
            ORDER BY `nom`";

   // je demande à PDO de faire la requete
   $pdoStatement = $pdo->query($sql);

   // je demande à récupérer les données au format objet de type Category
   $allPokemon = $pdoStatement->fetchAll(PDO::FETCH_CLASS,Pokemon::class);

   // le but est de renvoyer l'objet 
   return $allPokemon;
   }

   public function findAllByType($type){

    $pdo = Database::getPDO();

    // je créer ma requete SQL
   
    $sql = "SELECT `pokemon`.*, `type`.`name`, `type`.`color`
        FROM `pokemon`
        INNER JOIN `pokemon_type` ON `pokemon`.`numero` = `pokemon_type`.`pokemon_numero`
        INNER JOIN `type` ON `pokemon_type`.`type_id` = `type`.`id`
        WHERE {$type} = `pokemon_type`.`type_id`
        GROUP BY `pokemon`.`nom`, `pokemon`.`id`, `type`.`name`, `type`.`color`
        ORDER BY `pokemon`.`nom`";

   // je demande à PDO de faire la requete
   $pdoStatement = $pdo->query($sql);

   // je demande à récupérer les données au format objet de type Category
   $allPokemon = $pdoStatement->fetchAll(PDO::FETCH_CLASS,Pokemon::class);

   // le but est de renvoyer l'objet 
   return $allPokemon;
   }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaque_spe()
    {
        return $this->attaque_spe;
    }

    /**
     * Set the value of attaque_spe
     *
     * @return  self
     */ 
    public function setAttaque_spe($attaque_spe)
    {
        $this->attaque_spe = $attaque_spe;

        return $this;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefense_spe()
    {
        return $this->defense_spe;
    }

    /**
     * Set the value of defense_spe
     *
     * @return  self
     */ 
    public function setDefense_spe($defense_spe)
    {
        $this->defense_spe = $defense_spe;

        return $this;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @return  self
     */ 
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

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
}
