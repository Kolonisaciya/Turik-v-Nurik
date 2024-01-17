<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Servic;
use Framework\Controller;
use Framework\Response;
use Framework\Exceptions\PageNotFoundException;

class Services extends Controller
{
	public function __construct(private Servic $model)
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

	public function index(): Response
	{
		$Services = $this->model->findAll();
		$this->console_log($Services);
		return $this->view("Services/Services.mvc.php", [
			"Services" => $Services,
			"total" => $this->model->getTotal()
		]);
	}

	public function show(string $id): Response
	{
		$Servic = $this->getServic($id);

		return $this->view("Services/show.mvc.php", [
			"Servic" => $Servic
		]);
	}

	public function edit(string $id): Response
	{
		$Servic = $this->getServic($id);

		return $this->view("Services/edit.mvc.php", [
			"Servic" => $Servic
		]);
	}

	public function new(): Response
	{
		return $this->view("Services/new.mvc.php");
	}

	public function create(): Response
	{
		$data = [
			"Название" => $this->request->post["Название"],
            "Продолжительность_дней" => $this->request->post["Продолжительность_дней"],
            "Цена_руб" => $this->request->post["Цена_руб"],
            "Вид_услуги" => $this->request->post["Вид_услуги"],

		];

		if ($this->model->insert($data)) {

			return $this->redirect("/Services/{$this->model->getInsertID()}/show");
		} else {

			return $this->view("Services/new.mvc.php", [
				"errors" => $this->model->getErrors(),
				"Servic" => $data
			]);
		}
	}

	public function update(string $id): Response
	{
		$Servic = $this->getServic($id);

		$Servic["Название"] = $this->request->post["Название"];
        $Servic["Продолжительность_дней"] = $this->request->post["Продолжительность_дней"];
        $Servic["Цена_руб"] = $this->request->post["Цена_руб"];
        $Servic["Вид_услуги"] = $this->request->post["Вид_услуги"];

		if ($this->model->update($id, $Servic)) {

			return $this->redirect("/Services/{$id}/show");
		} else {

			return $this->view("Services/edit.mvc.php", [
				"errors" => $this->model->getErrors(),
				"Servic" => $Servic
			]);
		}
	}

	public function delete(string $id): Response
	{
		$Servic = $this->getServic($id);

		return $this->view("Services/delete.mvc.php", [
			"Servic" => $Servic
		]);
	}

	public function destroy(string $id): Response
	{
		$Servic = $this->getServic($id);

		$this->model->delete($id);

		return $this->redirect("/Services");
	}

	private function getServic(string $id): array
	{
		$Servic = $this->model->find($id);

		if ($Servic === false) {

			throw new PageNotFoundException("Услуга не найдена");
		}

		return $Servic;
	}
}
