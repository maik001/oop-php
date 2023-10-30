<?php
// refere-se a classe Student diretamente
use App\Student;
use Acme\Test;
use App\Record;

// importa o arquivo de autoload do composer
require_once __DIR__. '/vendor/autoload.php';
header('Content-Type: text/plain', true);

new Student(new Record(), new Test());
