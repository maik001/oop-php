<?php

// faz a importação/autoload das classes
spl_autoload_register(function ($className) {
    include 'src/'. $className . '.php';
});

header('Content-Type: text/plain', true);


$scooby = new Dog();
$simba = new Lion();
$bugsBunny = new Rabbit();

// cachorro pode predar coelho
$scooby->chase($bugsBunny);
$scooby->kill($bugsBunny);

// leão pode predar cachorro
$simba->chase($scooby);
$simba->kill($scooby);

// coelho pode ser predado por leão
$bugsBunny->chasedBy($simba);
$bugsBunny->killedBy($simba);

// // cachorro não pode ser predado por coelho
// $scooby->chasedBy($bugsBunny);
// $scooby->killedBy($bugsBunny);

// // cachorro não pode predar leão
// $scooby->chase($simba);
// $scooby->kill($simba);