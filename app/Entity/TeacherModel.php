<?php

namespace GBU\Entity;

use GBU\Core\Database;
use PDO;
class TeacherModel
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo=(new Database())->connect();
    }

    public function listAll(): array
    {
        $stmt = $this->pdo->query(
          "Select * From Teacher"
        );

        return $stmt->fetchAll();

    }
}
