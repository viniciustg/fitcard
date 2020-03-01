<?php

namespace App;

class Connection implements IConnection
{
    public function __construct($host, $dbname, $user, $pass)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;        
    }

    /**
     * Method connect bd_fitcard
     */
    public function connect()
    {
        try 
        {
            return new \PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->user,
                $this->pass
            );
        } 
        catch (\PDOException $e)
        {
            echo 'Erro:'. $e->getMessage() .'- Not connect DB [bd_fitcard]','error';            
            die();

        }
        
    }
}