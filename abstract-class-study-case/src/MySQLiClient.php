<?php

class MySQLiClient extends Database
{
    public function __construct($host, $db_name, $db_user, $db_password)
    {
        parent::__construct($host, $db_name, $db_user, $db_password);
    }

    public function connect()
    {
        try {
            $this->database_handler = new mysqli($this->host, $this->db_user, $this->db_password, $this->db_name);

            // retorna o próprio objeto
            return $this;
        } catch(mysqli_sql_exception $error) { 
            die($error->getMessage());
        }
    }

    public function get()
    {
        // utiliza primeiro o json_encode pra transformar o array em uma string de objeto json
        // e depois utiliza o json_decode pra tranformar em um objeto de StdClass
        return json_decode(json_encode($this->statement->fetch_all(MYSQLI_ASSOC)));
    }
}