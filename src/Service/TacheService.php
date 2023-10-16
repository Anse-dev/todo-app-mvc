<?php

namespace Anse\Service;

use Anse\Repository\TacheRepository;

class TacheService
{
  //Notre propriété
  private TacheRepository $tacheRepository;

  //Le constructeur est appellé automatiquement
  public function __construct()
  {
    //Instance
    $this->tacheRepository = new TacheRepository();
  }


  public function addTache($tache)
  {
    $resultat = $this->tacheRepository->add($tache);
    return $resultat;
  }

  public function getAllTaches()
  {
    $resultat = $this->tacheRepository->getAll();
    return $resultat;
  }


  public function deleteTacheById(int $id)
  {
    $resultat = $this->tacheRepository->deleteById($id);
    return $resultat;
  }

  public function deleteAllTaches()
  {
    $resultat = $this->tacheRepository->deleteAll();
    return $resultat;
  }

  /*
  public function updateTacheById(int $id, $tache)
  {
    $resultat = $this->tacheRepository->updateById($id, $tache);
    return $resultat;
  }




  public function getTacheById($id)
  {
    $resultat = $this->tacheRepository->getById($id);
    return $resultat;
  }


  public function deleteTacheById(int $id)
  {
    $resultat = $this->tacheRepository->deleteById($id);
    return $resultat;
  }


   */
}
