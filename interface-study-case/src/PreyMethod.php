<?php

abstract class PreyMethod implements Prey 
{
    public function chasedBy(Predator $predator)
    {
        var_dump('Please help I am being chased by '. get_class($predator));
    }

    public function killedBy(Predator $predator)
    {
        // late satic binding para retorna a classe-filjha de implementação
        var_dump(get_class(new static) . ' has been killed by '. get_class($predator));
    }
}