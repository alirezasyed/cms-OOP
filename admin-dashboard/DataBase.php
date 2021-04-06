<?php

namespace DataBase;

use PDO;
use PDOException;

class CreateDB
{
    private $connection;
    private $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);



    private $dbHost = "localhost";
    private $dbName = "blog";
    private $dbUsername = "root";
    private $dbPassword = "555";


    function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host" . $this->dbHost . ";dbname=" . $this->dbName,
            $this->dbUsername, $this->dbPassword, $this->option);
        }
        catch (PDOException $e) {
            echo "<div style='color:red';>Il y a un problème de connexion :</div>" . $e->getMessage();
        }
    }

    public function createTable($sql)
    {
        try {
            $this->connection->exec($sql);
            return true;
        }
        catch (PDOException $e) {
            
        }
    }


}
