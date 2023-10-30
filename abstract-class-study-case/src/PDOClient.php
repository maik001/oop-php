<?php

class PDOClient extends Database
{
    // data source name (string de conexão)
    protected $dsn;
    
    public function __construct(
        $driver,
        $host,
        $db_name, 
        $db_user,
        $db_password
    ) {
        // passa os valores para o construtor da classe mãe(abstrata)
        parent::__construct($host, $db_name, $db_user, $db_password);

        // cria a string de conexão
        $this->dsn = "{$driver}:host={$this->host};dbname={$this->db_name}";
    }

    public function connect()
    {
        try{
            $this->database_handler = new PDO($this->dsn, $this->db_user, $this->db_password);

            // retorna o próprio objeto
            return $this;
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
    
    public function get()
    {
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}