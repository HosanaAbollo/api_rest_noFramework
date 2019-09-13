<?php

class Transac
{
    private $connection;

    private $nomTable = "Transax";
    
    private $idf;
    private $commentaire;
    private $prix;
    private $quantite;
    private $raison_enum;
    private $createdAt;
    private $updatedAt;
    private $product_id;

    // Le constructeur récupère la connexion en BDD
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create(){}

    public function update(){}

    public function delete(){}

}