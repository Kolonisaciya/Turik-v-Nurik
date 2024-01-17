{% extends "base.mvc.php" %}

{% block title %}Удалить услугу{% endblock %}

{% block body %}

<link rel="stylesheet" type="text/css" href="styles.css">

<h1>Удалить услугу</h1>

<form method="post" action="/Services/{{ Servic['id'] }}/destroy">

	<span>Удалить эту услугу?</span>

	<button>Да</button>

</form>

<p><a href="/Services/{{ Servic['id'] }}/show">Отменить</a></p>

{% endblock %}