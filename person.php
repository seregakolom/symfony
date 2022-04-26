<?php

class Person {

    protected $name;

    public function setName ($value)
    {
        $this->name = $value;
    }

    public function getName ()
    {
        $this->name;
    }
}

class Worker extends Person {

    protected $age;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }


}

class Programmist extends Worker

    {
    private $skill;

    /**
     * @return mixed
     */
    public function getSkill()

    {
        return $this->skill;
    }

    /**
     * @param mixed $skill
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;
    }



    }

class Task {

    private string $task;
    private string $name;
    private string $var;

    public function __construct(string $value1, string $value2, string $value3)

    {
      $this->task = $value1;
      $this->name = $value2;
      $this->var = $value3;
    }


    public function getProps()
    {
        return $this->task.', ' .$this->name. ', ' .$this->var;
    }
}


$task = new Task('value1', 'value2', 'value3');
echo $task->getProps();






$worker = new Worker();
$worker->setAge(34);
$worker->setName('Olga');