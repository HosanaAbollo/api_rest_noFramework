<?php
/*
    Code de connection de l'API (backend) a MYSQL
*/
class DBClass 
{

    // Paramètres de connection à la BDD
    private $hote = 'localhost';
    private $nomBDD = 'apinofram';
    private $user = 'root';
    private $mdp = '';

    // Variable contenant la connection à  la BDD
    public $connection;

    // Permet la connection à la BDDS
    public function getConnection()
    {
        try
        {
            $this->connection = new PDO("mysql:host=" . $this->hote . ";dbname=" . $this->nomBDD, $this->user, $this->mdp);
            $this->connection->exec("set names utf8"); 

        }
        catch(PDOException $e)
        {
            echo "Erreur de connection : " + $e->getMessage();
        }

        // On retourne la connection en cas de réussite
        return $this->connection;
    }
}