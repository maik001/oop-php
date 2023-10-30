<?php

class Database{
    static private $pdo;
    static public $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(string $method)
    {
        // Late static binding
        $obj = new static;
        $obj->table;

        // temos que utlizar o self ao invés de this pois
        // ele se refere aos atributos/métodos estáticos
        // da classe que não podem ser instanciados
        self::$pdo = $method;
    }

    public static function create(array $data)
    {
        var_dump('Creating a new database with '. self::$pdo);
    }

    public function getMethod()
    {
        return self::$pdo;
    }
}

header('Content-Type: text/plain; charset=UTF-8', true);
var_dump(Database::$operators);
Database::connect('Mysql');
Database::create([]);

$db = new Database();
echo PHP_EOL, $db->getMethod(), PHP_EOL;