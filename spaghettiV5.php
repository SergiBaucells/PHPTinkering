<?php

// Objecte -> POO / OOP Paradigma orientat a objectes

class Person {
    // Els objectes tenen propietats (Serveixen per afegir característiques i/o per guardar informació):
    public $name;
    public $city;
    public $gender;

    // Mètodes <- Funcions
    // MVC -> Model -> s'encarrega de les dades i del comportament

    // Mètode per defecte -> Constructor
    // __ -> Mètodes màgics o especials
    public function __construct($name){
        // echo "M'estic inicialitzant";
        $this->$name = $name;
        // Domini ->
    }

    // Altres mètodes
    // API --> Aplication public Interface
    public function greeting()
    {
       return $this->concatenate('Hola',$this->name);
    }

    protected function concatenate(){
        return 'Hola' . $this->name;
    }

}

// Constructors
$person1 = new Person('Sergi Baucells');
//$person1->name = 'Sergi Baucells';
$person1->greeting();
$person1->concatenar();
$person1->city = 'Tortosa';


$person2 = new Person();
$person2->name = 'Jordi Baucells';
$person2->city = 'Tortosa';

$person3 = new Person();
$person3->name = 'Josep Baucells';
$person3->city = 'Tortosa';

$persons = [
    $person1,
    $person2,
    $person3
];

require 'spaghettiV5.view.php';

