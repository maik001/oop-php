<?php

interface Predator
{
    // predador pode caçar a presa que deve ser do mesmo tipo
    public function chase(Prey $prey);

    // predador pode matar a presa que deve ser do mesmo tipo
    public function kill(Prey $prey);
}