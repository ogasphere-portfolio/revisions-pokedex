<?php
namespace Pokedex\Models;


class Type extends CoreModels
{
    

private $name;
private $color;

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
