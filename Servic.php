<?php

declare(strict_types=1);

namespace App\Models;

use Framework\Model;
use PDO;

class Servic extends Model
{
    protected $table = 'Services';

    public function getTotal(): int
    {
        $sql = "SELECT COUNT(*) AS total FROM Services";
        $conn = $this->database->getConnection();
        $stmt = $conn->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return (int) $row["total"];
    }
}