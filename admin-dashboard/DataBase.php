<?php
namespace DataBase;

use PDO;
use PDOException;

class DataBase
{
    private $connection;
    private $option = array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);


    private $dbHost= "localhost";
    private $dbName= "php-cms";
    private $dbUsername="root";
    private $dbPassword = "";

    function __construct()
    {
        try{
            $this->connection = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName,$this->dbUsername,
            $this->dbPassword,$this->option);
        }
        catch (PDOException $e){
            echo "<div> style='color:red;'> Il y a un problème de connexion :</div>". $e->getMessage();
        }

    }

    public function select($sql, $values=NULL)
    {
        try{
            if ($values==null){
                return $this->connection->query($sql);
            }
            else{
                $stmt= $this->connection->prepare($sql);
                $stmt->execute($values);
                $result=$stmt;
                return $result;
            }
        }
        catch (PDOException $e){
            echo "<div> style='color:red;'> Il y a un problème de connexion :</div>". $e->getMessage();
            return false;
        }
    }

    public function createTable($sql)
    {
        try{
            $this->connection->exec($sql);

            return true;
        }
        catch (PDOException $e){
            echo "<div> style='color:red;'> Il y a un problème de connexion :</div>". $e->getMessage();
            return false;
        }


    }

}










