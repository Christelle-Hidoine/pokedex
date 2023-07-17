<?php

namespace Pokedex\Models;

use PDO;
use Pokedex\utils\Database;

class Type extends CoreModel
{
    private $color;

    /**
     * Method to retrieve all pokemon's type
     *
     * @param string $sort
     * @return Type[]
     */
    public static function findAll($sort = "")
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `type`";
        if ($sort !== "") {
            $sql .= " ORDER BY $sort";
        }
        $pdoStatement = $pdo->query($sql);
      
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
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