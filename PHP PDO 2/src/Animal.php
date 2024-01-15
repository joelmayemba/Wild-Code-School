<?php

class Animal
{
    public string $name;
    public float $size;
    public bool $carnivorous;
    public int $pawNumber;
    public string $threatenedLevel;

    public function __construct($name = '', $size = 0.0, $carnivorous = false, $pawNumber = 0, $threatenedLevel = '')
    {
        $this->name = $name;
        $this->size = $size;
        $this->carnivorous = $carnivorous;
        $this->pawNumber = $pawNumber;
        $this->threatenedLevel = $threatenedLevel;
    }
}
