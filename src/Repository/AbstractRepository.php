<?php

namespace Anse\Repository;

use Anse\Helpers\Connection;
use PDO;

class AbstractRepository
{
  protected PDO $connection;

  public function __construct()
  {
    $db = new Connection();
    $this->connection = $db->getConnection();
  }
}
