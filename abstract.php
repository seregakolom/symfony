<?php
trait BaseModel
    {
        public $sql;
        public function executeSql ()
        {
          return $this->sql;
        }

        public function selectAllFromBD()
        {
        $this->sql = 'Select * From'.$this->getTableNane();
        }

        abstract public function getTableNane (): string;
    }

class Aticle
    {
        use BaseModel;

        public function getTableNane(): string
        {
            return 'aticles';
        }


    }


class User
    {
        use BaseModel;
        public function getTableNane(): string
        {
            return 'users';
        }
    }

$article = new Aticle();
$article->selectAllFromBD();
echo $article->executeSql();

$user = new User();
$user->selectAllFromBD();
echo $user->executeSql();
