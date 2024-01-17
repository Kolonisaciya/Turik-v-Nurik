{% extends "base.mvc.php" %}

{% block title %}Новая услуга{% endblock %}

{% block body %}

<h1>Новая услуга</h1>
<link rel="stylesheet" type="text/css" href="styles.css">

<form method="post" action="/Services/create">

	{% include "Services/form.mvc.php" %}

</form>

<p><a href="/Services">Назад</a></p>

{% endblock %}