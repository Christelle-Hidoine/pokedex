<?php

namespace Pokedex\Models;

use PDO;
use Pokedex\utils\Database;

class Pokemon extends CoreModel
{
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;

    /**
     * alias for name property in pokemon_type association table
     *
     * @var string
     */
    private $pokemon_name;
    /**
     * alias for id property in pokemon_type association table
     *
     * @var int
     */
    private $pokemon_id;
    /**
     * alias for type property in pokemon_type association table
     *
     * @var string
     */
    private $type_name;
    /**
     * alias for id property in pokemon_type association table
     *
     * @var int
     */
    private $type_id;
    /**
     * alias for type property in pokemon_type association table
     *
     * @var string
     */
    private $color;

    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */ 
    public function setAttack($attack)
    {
        $this->attack = $attack;

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
     * Get the value of spe_attack
     */ 
    public function getSpeAttack()
    {
        return $this->spe_attack;
    }

    /**
     * Set the value of spe_attack
     *
     * @return  self
     */ 
    public function setSpeAttack($spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get the value of spe_defense
     */ 
    public function getSpeDefense()
    {
        return $this->spe_defense;
    }

    /**
     * Set the value of spe_defense
     *
     * @return  self
     */ 
    public function setSpeDefense($spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Method to retrieve all data (and type) from all Pokemon with sort and group option
     *
     * @param string $sort
     * @return Pokemon[]
     */
    public static function findAll($group = "", $sort = "")
    {
        $pdo = Database::getPDO();

        $sql = "SELECT *, pokemon.name AS `pokemon_name`, pokemon.id AS `pokemon_id`, type.id AS `type_id`, type.name AS `type_name`
        FROM `pokemon`
        INNER JOIN `pokemon_type` ON pokemon.number = pokemon_type.pokemon_number
        INNER JOIN `type` ON type.id = pokemon_type.type_id
        ";
        if ($group !== "") {
            $sql .= " GROUP BY $group";
        }
        if ($sort !== "") {
            $sql .= " ORDER BY $sort";
        }

        $pdoStatement = $pdo->query($sql);
      
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    
    /**
     * Method to retrieve all data from one pokemon according to his number
     * 
     * @param [int] $number
     * @return Pokemon
     */
    public function find($number)
    {
        $pdo = Database::getPDO();

        $sql = "SELECT *
                FROM `pokemon` 
                WHERE `number` =". $number;

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchObject(Pokemon::class);
        return $results;
    }

    /**
     * Method to retrieve all types for a given Pokemon number
     *
     * @param int $number
     * @return Type[]
     */
    public function findTypesByPokemonNumber($number)
    {
        $pdo = Database::getPDO();
        
        $sql = "SELECT *
                FROM `pokemon_type`
                INNER JOIN `type` ON type.id = pokemon_type.type_id
                WHERE `pokemon_number` = :number
                ORDER BY `name`";

        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->bindValue(':number', $number, PDO::PARAM_INT);
        $pdoStatement->execute();

        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, Type::class);
    }

    /**
     * Method to retrieve all data from Pokemon according to his type 
     *
     * @param string $sort
     * @return Pokemon[]
     */
    public static function findAllByType($typeId, $group = "", $sort = "")
    {
        $pdo = Database::getPDO();

        $sql = "SELECT *, pokemon.name AS `pokemon_name`, pokemon.id AS `pokemon_id`, type.id AS `type_id`, type.name AS `type_name`, type.color
        FROM `pokemon`
        INNER JOIN `pokemon_type` ON pokemon.number = pokemon_type.pokemon_number
        INNER JOIN `type` ON type.id = pokemon_type.type_id
        WHERE type.id = " . $typeId
        ;
        if ($group !== "") {
            $sql .= " GROUP BY $group";
        }
        if ($sort !== "") {
            $sql .= " ORDER BY $sort";
        }

        $pdoStatement = $pdo->query($sql);
      
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    }    

    /**
     * Get alias for name property in pokemon_type association table
     *
     * @return  [string]
     */ 
    public function getPokemonName()
    {
        return $this->pokemon_name;
    }

    /**
     * Set alias for name property in pokemon_type association table
     *
     * @param  [string]  $pokemon_name  alias for name property in pokemon_type association table
     *
     * @return  self
     */ 
    public function setPokemonName(string $pokemon_name)
    {
        $this->pokemon_name = $pokemon_name;

        return $this;
    }

    /**
     * Get alias for id property in pokemon_type association table
     *
     * @return  int
     */ 
    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    /**
     * Set alias for id property in pokemon_type association table
     *
     * @param  int  $pokemon_id  alias for id property in pokemon_type association table
     *
     * @return  self
     */ 
    public function setPokemonId(int $pokemon_id)
    {
        $this->pokemon_id = $pokemon_id;

        return $this;
    }

    /**
     * Get alias for type property in pokemon_type association table
     *
     * @return  string
     */ 
    public function getTypeName()
    {
        return $this->type_name;
    }

    /**
     * Set alias for type property in pokemon_type association table
     *
     * @param  string  $type_name  alias for type property in pokemon_type association table
     *
     * @return  self
     */ 
    public function setTypeName(string $type_name)
    {
        $this->type_name = $type_name;

        return $this;
    }

    /**
     * Get alias for id property in pokemon_type association table
     *
     * @return  int
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set alias for id property in pokemon_type association table
     *
     * @param  int  $type_id  alias for id property in pokemon_type association table
     *
     * @return  self
     */ 
    public function setTypeId(int $type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get alias for type property in pokemon_type association table
     *
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set alias for type property in pokemon_type association table
     *
     * @param  string  $color  alias for type property in pokemon_type association table
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }
}