<?php

class Animal{
    public $weight;

    public function eat()
    {
        var_dump('All animals can eat');
    }

    public function reproduce()
    {
        var_dump('All animals can reproduce');
    }
}

// class mamífero herda as propriedades e métodos de animal
class Mammal extends Animal{
    public $heartRate;

    public function breathe()
    {
        var_dump('I can breathe because I am a mammal');
    }
}

// cachorro herda de mamífero que herda de animal
class Dog extends Mammal{
    public $color;
    
    public function bark()
    {
        var_dump('I can bark because I am a '. strtolower(get_class()));
    }

    public function chase()
    {
        var_dump('I am chasing a rabbit');
    }

    // sobrescreve o método breathe da classe-pai mamífero
    public function breathe()
    {
        var_dump("I breathe like a ". strtolower(get_class()));
    }
}

header('Content-Type: text/plain; charset=utf-8', true);

$doge = new Dog();
$doge->weight = '7.3';
$doge->color = 'Brown';
$doge->heartRate = 'Normal';

var_dump($doge);
echo($doge->reproduce());
echo($doge->breathe());
echo($doge->bark());