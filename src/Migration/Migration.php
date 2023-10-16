<?php

namespace Anse\Migration;

use Anse\Helpers\Connection;

class Migration
{
  protected  $connection;
  public function __construct()
  {
    $dbConnection = new Connection();
    $this->connection = $dbConnection->getConnection();
  }

  public function createTable()
  {
    $tache = "CREATE TABLE IF NOT EXISTS Taches (
            id INT AUTO_INCREMENT PRIMARY KEY,
            titre VARCHAR (55) NOT NULL ,
            is_make BIT(1)
)
";
    try {

      $this->connection->exec($tache);
      echo "Tables créées avec succès!";
    } catch (\PDOException $e) {
      echo "Erreur lors de la création des tables : " . $e->getMessage();
    }
  }
}
