<?php

namespace Rafael\people; //nome(Rafael) + diretorio(pasta, people)


class Person
{
    use \Rafael\GetterSetter;

    private $name;
    private $age;
    private $weight;

    public function __construct()
    {
        echo 'Classe instanciada' . PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    public function getName()
    {
        return ucfirst($this->name);
    }
    

    public function __toString() :string
    {
       return $this->name . ', ' . $this->age . ', ' . $this->weight . '.';
    }
}
