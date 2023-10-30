<?php

// define que a classe é abstrata
// ou seja, não pode ser diretamente instanciada
abstract class Database
{
    protected $database_handler;
    protected $statement;
    protected $host, $db_name, $db_user, $db_password;

    public function __construct(
        string $host,
        string $db_name, 
        string $db_user,
        string $db_password
    )
    {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    // um método abstrato só pode ter a declaração
    // a implementação deve estar nas classes-filhas
    abstract public function connect();

    public function select (string $sql)
    {
        $this->statement = $this->database_handler->query($sql);
        return $this;
    }

    public function getConnection()
    {
        return $this->database_handler;
    }

    abstract public function get();
}