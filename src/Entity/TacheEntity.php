<?php

namespace Anse\Entity;

/*
* TacheEntity est un modele inspiré de la table 'Tache' dans
* la  Base de donnée
*/

class TacheEntity
{
  private string  $titre;
  private int  $id;
  private bool $isMake;


  /**
   * Get the value of titre
   */
  public function getTitre()
  {
    return $this->titre;
  }

  /**
   * Set the value of titre
   *
   * @return  self
   */
  public function setTitre($titre)
  {
    $this->titre = $titre;

    return $this;
  }

  /**
   * Get the value of id
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of isMake
   */
  public function getIsMake()
  {
    return $this->isMake;
  }

  /**
   * Set the value of isMake
   *
   * @return  self
   */
  public function setIsMake($isMake)
  {
    $this->isMake = $isMake;

    return $this;
  }
}
