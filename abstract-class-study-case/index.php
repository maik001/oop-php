<?php

// faz a importação/autoload das classes
spl_autoload_register(function ($className) {
    include 'src/'. $className . '.php';
});

header('Content-Type: text/plain', true);

// Utilizando o client do PDO
// $database = (new PDOClient('mysql', 'localhost', 'test', 'root', ''))->connect();

// Utilizando o client do MySQLi
$database = (new MySQLiClient('localhost', 'test', 'root', ''))->connect();

$products = $database->select("SELECT * FROM products")->get();
foreach ($products as $product) {
    var_dump($product->nome);
}

// database wrapper com implementação customizada utlizando mysqli
$handler = $database->getConnection();
$p = $handler->query("select * from products where nome = 'teste'")->fetch_all();
var_dump($p);