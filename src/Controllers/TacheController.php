<?php


namespace Anse\Controllers;

use Anse\Entity\TacheEntity;
use Anse\Service\TacheService;

class TacheController extends AbstractController
{

  private TacheService $tacheService;
  protected $message;
  public function __construct()
  {
    $this->tacheService = new TacheService();
  }

  public function index()
  {
    //recupere toutes les taches
    $taches = $this->tacheService->getAllTaches();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["add-tache"])) {
        $titre = $_POST["titre"];
        $tache = new TacheEntity();
        $tache->setTitre($titre)->setIsMake(false);
        $resultat = $this->tacheService->addTache($tache);
        if ($resultat) {
          $this->message = "tache ajouter";
          header("Location:/");
        } else {
          $this->message = "error d'enregistrement";
        }
      } elseif (isset($_POST["deleted-one"])) {
        //$tacheId = $_POST[""]

        $posts = $this->slice_array($_POST);
        foreach ($posts as $key => $value) {
          $resultat = $this->tacheService->deleteTacheById($value);
        }
        header("Location:/");
      } elseif (isset($_POST["delete-all"])) {
        $resultat = $this->tacheService->deleteAllTaches();
        if ($resultat) {
          $this->message = "taches supprimées";
          header("Location:/");
        } else {
          $this->message = "erreur de suppression";
        }
      }
    }
    $data = [
      "message" => $this->message,
      "taches" => $taches
    ];
    $this->renderView("index-view", $data);
  }

  protected function slice_array($array)
  {
    return array_slice($array, 0,  count($array) - 1);
  }
}
