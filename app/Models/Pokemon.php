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
    

    public function find($id){
        // je récupère ma connexion à la BDD
        $pdo = Database::getPDO();

        // je créer ma requete SQL
       $sql = "SELECT * FROM `pokemon` WHERE `id` = {$id}";

       // je demande à PDO de faire la requete
       $pdoStatement = $pdo->query($sql);

       // je demande à récupérer les données au format objet de type Category
       $PokemonFromBase = $pdoStatement->fetchObject(Pokemon::class);

       // le but est de renvoyer l'objet 
       return $PokemonFromBase;       
   }

   public function findAll(){

    $pdo = Database::getPDO();

    // je créer ma requete SQL
   $sql = "SELECT * FROM `pokemon`";

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
}
