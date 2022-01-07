<?php

namespace Rafael\people; //nome(Rafael) + diretorio(pasta, people)

class Person
{
    private $data = [];

    public function setName(string $name)
    {
        $this->data[] = $name;
    }

    public function setAge(int $age)
    {
        $this->data[] = $age;
    }

    public function setWeight(float $weight)
    {
        $this->data[] = $weight;
    }
}
