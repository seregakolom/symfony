<?php

//class StaticObject {
//
//    public static $static_prop = 'static prop';
//    public $object_prop = 'jbject prop';
//
//    public static function static_method (): string
//    {
//        return 'static method';
//    }
//
//    public function object_method(): string
//    {
//        return 'object method';
//    }
//
//}
//
//
//class A {
//
//    public static function getMessage(): string
//
//    {
//        return 'message - '.self::getString();
//    }
//
//    public static function getString(): string
//
//    {
//        return 'class A';
//    }
//
//}

interface PersonInterface
    {
     public function get(): string;
     public function set(string $name);
    }

interface CityInterface
    {
     public function setPerson (Person $person);
     public function getPersons (): array;
    }

class Person implements PersonInterface
    {
        private $name;

        public function get(): string
        {
            return this->name;
        }
        public function set(string $name)
        {
            return $this->name = $name;
        }
}

class City implements CityInterface {

    private $persons = [];

    public function getPersons(): array
    {

    }
    public function setPerson(Person $person)
    {

    }
}


//$object = new StaticObject();
//$object->object_method();
//echo $object->object_method();
//$object->object_prop;
//StaticObject::$static_prop;
//StaticObject::static_method();
//$object::$static_prop = '23234234';
//$object::static_method();
//
//StaticObject::$static_prop = 'jdhfgkdjhgljd';


