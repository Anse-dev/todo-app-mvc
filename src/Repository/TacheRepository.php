<?php

namespace Anse\Repository;

use Anse\Entity\TacheEntity;

class TacheRepository extends AbstractRepository
{

  public function add(TacheEntity $tache)
  {

    $sql = "INSERT INTO Taches(titre, is_make) VALUES (:titre, :is_make)";
    $statment = $this->connection->prepare($sql);
    $params = [
      "titre" => $tache->getTitre(),
      "is_make" => $tache->getIsMake()
    ];
    $resultat = $statment->execute($params);

    return $resultat;
  }

  public function updateById(int $id, $tache)
  {
    return "";
  }


  public function getAll()
  {
    $sql = "SELECT * FROM Taches";
    $resultat = $this->connection->query($sql);
    $taches = [];
    foreach ($resultat as $value) {
      $tache = new TacheEntity();
      $tache->setId($value["id"])->setTitre($value["titre"])->setIsMake($value["is_make"]);
      $taches[] = $tache;
    }
    return $taches;
  }


  public function getById($id)
  {

    return "";
  }


  public function deleteById(int $id)
  {
    $sql = "DELETE FROM Taches WHERE  id = $id";
    $resultat = $this->connection->query($sql);
    return $resultat;
  }


  public function deleteAll()
  {
    $sql = "DELETE FROM Taches ";
    $resultat = $this->connection->query($sql);
    return $resultat;
  }
}
