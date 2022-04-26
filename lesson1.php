<?php

class City {
    private $name;
    private $people = [];

    public function setName ($value)
    {
        $this->name = $value;
    }

    public function getName ()
    {
        $this->name;
    }

    public function addPerson(Person $person)
    {
        $this->people[] = $person;
    }

    /** var Person $person */
    public function getPeople()
    {
        $result = '';
        foreach ($this->people as $person)
        {
            $result .= $person->getName();
        }

        return $result;
    }
}

class Person {
    private $name;

    public function setName ($value)
    {
    $this->name = $value;
    }

    public function getName ()
    {
        $this->name;
    }
}

$person1 = new Person ();
$person1->setName('Olga');
echo $person1->getName();
//echo $person1->name;

$person2 = new Person ();
$person2->setName('Roma');

$person3 = new Person ();
$person3->setName('Dima');

$moscow = new City();
$moscow->setName('Moscow');
echo $moscow->getName();

$moscow->addPerson($person1);
$moscow->addPerson($person2);
$moscow->addPerson($person3);

echo $moscow->getPeople();

