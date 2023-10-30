<?php

interface Prey
{

    // presa pode ser caçada por um predador que deve ser do mesmo tipo
    public function chasedBy(Predator $predator);

    // presa pode ser morta por um predador quee deve ser do mesmo tipo
    public function killedBy(Predator $predator);
}