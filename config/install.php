<?php
include_once('./dbClass.php');

try{

    $dbClass = new DBClass();
    
    // Créer une connection
    $connection = $dbClass->getConnection();

    // On place le contenu du fichier sql dans une variable avec file_get_contents()
    $sql = file_get_contents("data/db.sql");

    // Execution de la création de la base de donnée et des tables
    $connection->exec($sql);

    echo "La base de donnée et les tables ont été crées avec succès";
}
catch(PDOException $e)
{
    echo $e->getMessage(); // Message en cas d'erreurs
}