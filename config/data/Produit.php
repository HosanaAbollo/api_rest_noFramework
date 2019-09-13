<?php

class Produit
{
    // Instance de connection
    private $connection;

    private $nomTable = "Produit";

    public $idp;
    public $code_barre;
    public $nom;
    public $prix;
    public $createdAt;
    public $updatedAt;
    public $famille_id;
    public $location_id;

    // A l'instanciation il y a récupération de connection
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    // Création d'un produit
    public function create(){}

    // Lecture des données de la table
    public function read()
    {
        $req = "select c.nom as famille_nom, p.id, p.code_barre,
                 p.nom, p.prix, p.createdAt, p.updatedAt, 
                 from" . $this->nomTable . "p left join famille
                 c on p.famille_id = c.idf 
                 order by p.createdAt desc ";
        
        // Préparation de la requête
        $stmt = $this->connection->prepare($req);
        // Execution
        $stmt->execute();
        // Récupéreration du résultat
        return $stmt;
    }
    // Mise a jour de la table
    public function update(){}
    // Suppréssion d'un produit
    public function delete(){}
}