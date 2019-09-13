<?php
class Lieu
{
    private $connection;

    private $nomTable = "Lieu";

    private $idl;
    private $reference;
    private $details;
    private $createdAt;
    private $updatedAt;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create(){}
    
    public function delete(){}

    public function update(){}



}