<?php

// leão pode caçar/matar mas não pode ser caçado/morto porque é apenas predador
class Lion implements Predator
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