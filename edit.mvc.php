{% extends "base.mvc.php" %}

{% block title %}Изменение услуги{% endblock %}

{% block body %}

<link rel="stylesheet" type="text/css" href="styles.css">

<h1>Изменение услуги</h1>

<form method="post" action="/Services/{{ Servic['id'] }}/update">

	{% include "Services/form.mvc.php" %}

</form>

<p><a href="/Services/{{ Servic['id'] }}/show">Отменить</a></p>

{% endblock %}