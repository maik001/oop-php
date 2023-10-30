<?php
namespace App;

// namespace diferente
use Acme\Test;
use PDOException;
use PDO;

class Student
{
    public function __construct(Record $record, Test $test)
    {
        try{
            $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch(PDOException $e) {
            var_dump($e->getMessage());
        }
        var_dump('From Inside App namespace');
    }
}