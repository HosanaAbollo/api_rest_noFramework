<?php

class Famille
{
    private $connection;

    private $nomTable = "Famille";

    private $idf;
    private $referencef;
    private $nomf;
    private $createdAt;
    private $updatedAt;

    // Le constructeur récupère la connexion en BDD
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create(){}

    public function update(){}

    public function delete(){}

}