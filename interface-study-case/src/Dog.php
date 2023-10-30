<?php

// cachorro pode caçar/matar e pode ser caçado/morto porque é presa e predador
class Dog extends PreyMethod implements Predator, Prey
{
    public function chase(Prey $prey)
    {
        var_dump('I am Chasing a '. get_class($prey));
    }

    public function kill(Prey $prey)
    {
        var_dump('I have killed a '. get_class($prey));
    }
}