<?php

declare(strict_types=1);

namespace App\Models;

use Framework\Model;
use PDO;

class User extends Model
{
	protected $table = "Users";
	protected $db;

	public function validate(array $data): void
	{
		if (empty($data["Name"])) {
			$this->addError("Name", "Имя должно быть введено");
		}
		if (empty($data["Surname"])) {
			$this->addError("Surname", "Фамилия должна быть введена");
		}
		if (empty($data["Emile"])) {
			$this->addError("Emile", "Электронная почта должна быть введена");
		}
		if (empty($data["Password"])) {
			$this->addError("Password", "Пароль должен быть введен");
		}

		
	}

}
