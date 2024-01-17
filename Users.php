<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;
use Framework\Controller;
use Framework\Response;
use Framework\Exceptions\PageNotFoundException;

class Users extends Controller
{
	public function __construct(private User $model)
	{
	}

	public function console_log($data)
	{ // сама функция
		if (is_array($data) || is_object($data)) {
			echo ("<script>console.log('php_array: " . json_encode($data) . "');</script>");
		} else {
			echo ("<script>console.log('php_string: " . $data . "');</script>");
		}
	}

	public function registerForm(): Response
	{
		return $this->view("Users/register.mvc.php");
	}

	public function register(): Response
	{
		$data = [
			"Name" => $this->request->post["Name"],
			
			"Email" => $this->request->post["Email"],
			"Password" => $this->request->post["Password"],
		];

		$this->model->validate($data);

		if ($this->model->insert($data)) {
			return $this->view("Users/register.mvc.php");
		} else {
			return $this->view("Users/register.mvc.php", [
				"errors" => $this->model->getErrors()
			]);
		}
	}

}
